<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Pins extends Controller_Template {

	protected $idUser;
	private $nameads;
	private $cityads;
	private $categoryads;
	private $count;
	private $pagin;

	//Ajout pins
    public function action_upload()
    {
    	if(Auth::instance()->get_user() == true )
    	{

		    	$this->template->title = "Ajout pin";
			    $this->template->body = View::factory('pins/upload');

		}
    	else
    	{
    		$this->template->title = "Erreur";
	    	$this->template->body = View::factory('error');
    	}

    }

    //Liste pins de l'user
   public function action_myLIST()
    {

    	if(Auth::instance()->get_user() == true )
    	{
				$this->idUser = Auth::instance()->get_user()->id;
				$this->count = ORM::factory('pin')->where('id_user', '=', $this->idUser)->count_all();
		    	$page = intval($this->request->param('id'));
		    	$this->pagin = helper::pagin(4, $this->count , $page);
		    	$offset = ($page - 1)* 4;

		    	$myLIST = ORM::factory('pin')->where('id_user', '=', $this->idUser)->limit(4)->offset($offset)->find_all();


		    	$this->template->title = "Mes pins";
		    	$this->template->body = View::factory('pins/mylist')
		    	->bind('myads',$myLIST)
		    	->bind('pagin',$this->pagin)
		    	->bind('cPage',$page);

			    	if(HTTP_Request::POST == $this->request->method())
					{
						$idADS = $this->request->post('idADS');
						$adsINf = ORM::factory('pin')->where('id', '=', $idADS)->find();
						$adsINf->title = $this->request->post('title');
						$adsINf->content = $this->request->post('content');
						$adsINf->city = $this->request->post('city');
						$adsINf->category = $this->request->post('category');

						$adsINf->save();

						HTTP::redirect(URL::site('../../../pins/mylist/'.$page));
					}
    	}
    	else
    	{
    		$this->template->title = "Erreur";
	    	$this->template->body = View::factory('error');
    	}


    }

   //Affichage publique des pins avec recherche par ville,titre et catégorie
   public function action_list()
    {

    		$page = intval($this->request->param('id'));
    		$offset = ($page - 1)* 4;
    		if(Auth::instance()->get_user() == true ){
    			$this->idUser = Auth::instance()->get_user()->id;
    		}

	    	if(HTTP_Request::POST == $this->request->method()){

		    		$this->nameads = $this->request->post('nameads');
		    		$this->cityads = $this->request->post('cityads');
		    		$this->categoryads = $this->request->post('categoryads');
		    		$tabSearch = array('title'=> $this->nameads, 'city'=>$this->cityads, 'category' => $this->categoryads);

					if(!empty($this->nameads))
					{
					 	
					 	if(Auth::instance()->get_user() == true ){
					 	$this->count = ORM::factory('pin')->where('id_user', '<>', $this->idUser)->where('title', 'LIKE', '%'.$this->nameads.'%')->count_all();
					 	$this->pagin = helper::pagin(4, $this->count , $page);
						$searchName = ORM::factory('pin')->where('id_user','<>',$this->idUser)->where('title', 'LIKE', '%'.$this->nameads.'%')->order_by('date_pub', 'desc')->limit(4)->offset($offset)->find_all();
    					}
    					else{
    					$this->pagin = helper::pagin(4, $this->count , $page);
						$searchName = ORM::factory('pin')->where('title', 'LIKE', '%'.$this->nameads.'%')->order_by('date_pub', 'desc')->limit(4)->offset($offset)->find_all();
						}

						$this->template->title = "pins: ".$this->nameads;
						$this->template->body = View::factory('pins/list')
							->bind('myads',$searchName)
							->bind('pagin',$this->pagin)
							->bind('cPage',$page);
					}
					if(!empty($this->cityads))
					{
					 	
			 			if(Auth::instance()->get_user() == true ){
			 			$this->count = ORM::factory('pin')->where('id_user', '<>', $this->idUser)->where('city', 'LIKE', '%'.$this->cityads.'%')->count_all();
			 			$this->pagin = helper::pagin(4, $this->count , $page);
						$searchCity = ORM::factory('pin')->where('id_user', '<>', $this->idUser)->where('city', 'LIKE', '%'.$this->cityads.'%')->order_by('date_pub', 'desc')->limit(4)->offset($offset)->find_all();
			 			}
			 			else{
			 			$this->count = ORM::factory('pin')->where('city', 'LIKE', '%'.$this->cityads.'%')->count_all();
			 			$this->pagin = helper::pagin(4, $this->count , $page);
						$searchCity = ORM::factory('pin')->where('city', 'LIKE', '%'.$this->cityads.'%')->order_by('date_pub', 'desc')->limit(4)->offset($offset)->find_all();
						}

						$this->template->title = "pins à  ".$this->cityads;
						$this->template->body = View::factory('pins/list')
							->bind('myads',$searchCity)
							->bind('pagin',$this->pagin)
							->bind('cPage',$page);
					}
					if(!empty($this->categoryads))
					{
					 	
			 			if(Auth::instance()->get_user() == true ){
			 			$this->count = ORM::factory('pin')->where('id_user', '<>', $this->idUser)->where('category', '=', $this->categoryads)->count_all();
			 			$this->pagin = helper::pagin(4, $this->count , $page);
						$searchCat = ORM::factory('pin')->where('id_user', '<>', $this->idUser)->where('category', '=', $this->categoryads)->order_by('date_pub', 'desc')->limit(4)->offset($offset)->find_all();
			 			}
			 			else{
			 			$this->count = ORM::factory('pin')->where('category', '=', $this->categoryads)->count_all();
			 			$this->pagin = helper::pagin(4, $this->count , $page);
						$searchCat = ORM::factory('pin')->where('category', '=', $this->categoryads)->order_by('date_pub', 'desc')->limit(4)->offset($offset)->find_all();
						}
						$this->template->title = "pins catégorie:  ".$this->categoryads;
						$this->template->body = View::factory('pins/list')
							->bind('myads',$searchCat)
							->bind('pagin',$this->pagin)
							->bind('cPage',$page);
					}
					if(!empty($this->nameads) && !empty($this->cityads))
					{
			 			if(Auth::instance()->get_user() == true ){
			 			$this->count = ORM::factory('pin')->where('id_user', '<>', $this->idUser)->where('city', 'LIKE', '%'.$this->cityads.'%')->where('title', 'LIKE', '%'.$this->nameads.'%')->count_all();
			 			$this->pagin = helper::pagin(4, $this->count , $page);
						$srchNameCity = ORM::factory('pin')->where('id_user', '<>', $this->idUser)->where('city', 'LIKE', '%'.$this->cityads.'%')->order_by('date_pub', 'desc')->where('title', 'LIKE', '%'.$this->nameads.'%')->limit(4)->offset($offset)->find_all();
			 			}
			 			else{
					 	$this->count = ORM::factory('pin')->where('city', 'LIKE', '%'.$this->cityads.'%')->where('title', 'LIKE', '%'.$this->nameads.'%')->count_all();
			 			$this->pagin = helper::pagin(4, $this->count , $page);
						$srchNameCity = ORM::factory('pin')->where('city', 'LIKE', '%'.$this->cityads.'%')->order_by('date_pub', 'desc')->where('title', 'LIKE', '%'.$this->nameads.'%')->limit(4)->offset($offset)->find_all();
						}
						$this->template->title = "pins catégorie:  ".$this->categoryads;
						$this->template->body = View::factory('pins/list')
							->bind('myads',$srchNameCity)
							->bind('pagin',$this->pagin)
							->bind('cPage',$page);
					}
					if(!empty($this->nameads) && !empty($this->cityads) && !empty($this->categoryads))
					{

			 			if(Auth::instance()->get_user() == true ){
					 	$this->count = ORM::factory('pin')->where('id_user', '<>', $this->idUser)->where('city', 'LIKE', '%'.$this->cityads.'%')->where('title', 'LIKE', '%'.$this->nameads.'%')->where('category', '=', $this->categoryads)->count_all();
					 	$this->pagin = helper::pagin(4, $this->count , $page);
						$srchNameCity = ORM::factory('pin')->where('id_user', '<>', $this->idUser)->where('city', 'LIKE', '%'.$this->cityads.'%')->order_by('date_pub', 'desc')->where('title', 'LIKE', '%'.$this->nameads.'%')->where('category', '=', $this->categoryads)->limit(4)->offset($offset)->find_all();
			 			}
			 			else{
					 	$this->count = ORM::factory('pin')->where('city', 'LIKE', '%'.$this->cityads.'%')->where('title', 'LIKE', '%'.$this->nameads.'%')->where('category', '=', $this->categoryads)->count_all();
			 			$this->pagin = helper::pagin(4, $this->count , $page);
						$srchNameCity = ORM::factory('pin')->where('city', 'LIKE', '%'.$this->cityads.'%')->order_by('date_pub', 'desc')->where('title', 'LIKE', '%'.$this->nameads.'%')->where('category', '=', $this->categoryads)->limit(4)->offset($offset)->find_all();
						}
						$this->template->title = "pins catégorie:  ".$this->categoryads;
						$this->template->body = View::factory('pins/list')
							->bind('myads',$srchNameCity)
							->bind('pagin',$this->pagin)
							->bind('cPage',$page);
					}
					if(empty($this->nameads) && empty($this->cityads) && empty($this->categoryads))
					{
			 			if(Auth::instance()->get_user() == true ){
			 				$this->count = ORM::factory('pin')->where('id_user', '<>', $this->idUser)->count_all();
			 				$this->pagin = helper::pagin(4, $this->count , $page);
			 				$this->pagin = helper::pagin(4, $this->count , $page);
			 				$searchName = ORM::factory('pin')->where('id', '<>', $this->idUser)->order_by('date_pub', 'desc')->limit(4)->offset($offset)->find_all();
			 			}
			 			else{
			 				$this->count = ORM::factory('pin')->count_all();
							$this->pagin = helper::pagin(4, $this->count , $page);
							$searchName = ORM::factory('pin')->order_by('date_pub', 'desc')->limit(4)->offset($offset)->find_all();
						}
						$this->template->title = "pins";
						$this->template->body = View::factory('pins/list')
							->bind('myads',$searchName)
							->bind('pagin',$this->pagin)
							->bind('cPage',$page);
					}
			}

			else{
			 	if(Auth::instance()->get_user() == true ){
			 		$this->count = ORM::factory('pin')->where('id_user', '<>', $this->idUser)->count_all();
			 		$this->pagin = helper::pagin(4, $this->count , $page);
			 		$myLIST = ORM::factory('pin')->where('id_user', '<>', $this->idUser)->order_by('date_pub', 'desc')->limit(4)->offset($offset)->find_all();
			 	}
			 	else{
			 		$this->count = ORM::factory('pin')->count_all();
			 		$this->pagin = helper::pagin(4, $this->count , $page);
					$myLIST = ORM::factory('pin')->order_by('date_pub', 'desc')->limit(4)->offset($offset)->find_all();
				}
				$this->template->title = "pins";
				$this->template->body = View::factory('pins/list')
					->bind('myads',$myLIST)
					->bind('pagin',$this->pagin)
					->bind('cPage',$page);

			}

    }

    public function action_delete()
    {
    	if(Auth::instance()->get_user() == true )
    	{
    		if(HTTP_Request::POST == $this->request->method()){
		    	$idADS = $this->request->post('ads');
		    	$adsINF = ORM::factory('pin')->where('id', '=', $idADS)->find();
		    	$resDEL = unlink ($adsINF->img_path);
		    	$adsINF->delete();

		    	HTTP::redirect(URL::site('../../../pins/mylist/1'));
		    }
    	}
   		else
    	{
    		$this->template->title = "Erreur";
	    	$this->template->body = View::factory('error');
    	}
    }

}