<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Profil extends Controller_Template {

	protected $idUser;
	protected $pinsUsr;

    public function action_show()
    {

    		$idProfil = intval($this->request->param('id'));
    		$this->userINF = ORM::factory('user')->where('id', '=', $idProfil)->find();
    		$this->pinsUsr = ORM::factory('pin')->where('id_user', '=', $this->userINF->id)->find_all();

    	if($this->userINF->privacy === '0')
    	{
    		//Render vu
		    $this->template->title = "Mur de ".$this->userINF->username;
		    $this->template->body = View::factory('pins/profil')
		    ->bind('userINF',$this->userINF)
		    ->bind('usrPINS',$this->pinsUsr);
    	}
    	else if($this->userINF->privacy === '1' && Auth::instance()->get_user() == true){
    		$idUSER = Auth::instance()->get_user()->pk();

    		//Render vu
		    $this->template->title = "Mur de ".$this->userINF->username;
		    $this->template->body = View::factory('pins/profil')
		    ->bind('userINF',$this->userINF)
		    ->bind('usrPINS',$this->pinsUsr);
    	}
    	else
    	{
    		$this->template->title = "Erreur confidentialité";
	    	$this->template->body = View::factory('errorAcc');
    	}
    }

    public function action_subscribe(){
    	if(Auth::instance()->get_user() == true){
    		$idUSER = Auth::instance()->get_user()->pk();
    		$idFLW = intval($this->request->param('id'));
    		$userSubscr = ORM::factory('follower')->where('id_user', '=', $idUSER)->find();
    		$userSubscr->id_user = $idUSER;
    		$userSubscr->follows = $userSubscr->follows.$idFLW.",";
    		$userSubscr->save();

    		HTTP::redirect(URL::site('../../../profil/show/'.$idFLW.''));

    	}
    	else
    	{
    		$this->template->title = "Erreur";
	    	$this->template->body = View::factory('error');
    	}
    }

    public function action_unsuscribe(){
    	if(Auth::instance()->get_user() == true){
    		$idUSER = Auth::instance()->get_user()->pk();
    		$idFLW = intval($this->request->param('id'));
    		$userSubscr = ORM::factory('follower')->where('id_user', '=', $idUSER)->find();
    		$replace = str_replace($idFLW.",", "", $userSubscr->follows);
    		$userSubscr->id_user = $idUSER;
    		$userSubscr->follows = $replace;
    		$userSubscr->save();

    		HTTP::redirect(URL::site('../../../profil/show/'.$idFLW.''));

    	}
    	else
    	{
    		$this->template->title = "Erreur";
	    	$this->template->body = View::factory('error');
    	}
    }
}