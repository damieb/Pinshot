<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Messages extends Controller_Template {

	protected $idUser;
	private $idReceiver;
	private $info;

	//Envoie de messages
	public function action_contact()
	{		
			//Récupération pseudo et avatar
			$this->idReceiver = $this->request->param('id');
			$this->info = helper::info('user','id',$this->idReceiver,2);
	    	$this->template->title = "Contacter: ".$this->info->username;
		    $this->template->body = View::factory('messages/contact')->bind('userINFO',$this->info);

        if (HTTP_Request::POST == $this->request->method())
        {
				$message = ORM::factory('message');
				$message->id_receiver = $this->idReceiver;
				$message->sender = $this->request->post('sender');
				$message->mail = $this->request->post('mail');
				$message->subject = $this->request->post('subject');
				$message->content = $this->request->post('content');
				$message->save();
        }
	}

	//Listing des messages reçu
	public function action_list()
	{		
    	if(Auth::instance()->get_user() == true )
    	{
    			$idUser = Auth::instance()->get_user()->id;

		    	$page = intval($this->request->param('id'));
		    	$count = ORM::factory('message')->where('id_receiver', '=', $idUser)->count_all();
		    	$pagin = helper::pagin(4, $count , $page);
		    	$offset = ($page - 1)* 4;


		    	$myLIST = ORM::factory('message')->where('id_receiver', '=', $idUser)->order_by('date_pub', 'desc')->limit(4)->offset($offset)->find_all();

		    	$this->template->title = "Mes messages";
		    	$this->template->body = View::factory('messages/list')
			    	->bind('mymsg',$myLIST)
					->bind('pagin',$pagin)
					->bind('cPage',$page);
    	}
    	else
    	{
    		$this->template->title = "Erreur";
	    	$this->template->body = View::factory('error');
    	}
	}

    public function action_delete()
    {
    	if(Auth::instance()->get_user() == true)
    	{
    		$idMSG = intval($this->request->param('id'));
    		$msg = ORM::factory('message')->where('id', '=', $idMSG)->find();
    		$msg->delete();

    		HTTP::redirect(URL::site('../../../messages/list/1'));
    	}
    	else
    	{
    		$this->template->title = "Erreur";
	    	$this->template->body = View::factory('error');
    	}
    }

}