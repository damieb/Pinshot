<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Users extends Controller_Template {

	protected $idUser;

    public function action_signup()
    {
	
    	if(HTTP_Request::POST == $this->request->method())
    	{
    		$validation = Validation::factory($_POST)
                ->rule('username', 'not_empty');
    			if($validation->check())
    			{
    				try{

			            $user = ORM::factory('user');
			            $user->lastname = $this->request->post('lastname');
			            $user->firstname = $this->request->post('firstname');
			            $user->username = $this->request->post('username');
			            $user->password = $this->request->post('password');
			            $user->email = $this->request->post('email');
						$user->save();
			           	$user->add('roles', ORM::factory('Role', array('name' => 'login')));

			           	HTTP::redirect(URL::site('../../../users/login'));
			           }
			           catch(Database_Exception $errors)
			           {
			           		
			           }

			 	}
			 
    	}


	    	$this->template->title = "Home";
		    $this->template->body = View::factory('auth/signup')->bind('errors',$errors);

    }

    public function action_edit()
    {

    	if(Auth::instance()->get_user() == true)
    	{
		  		// Template
		        $this->template->title = "Mon compte";
		        $this->template->body = View::factory('auth/edit')->bind('userINF',$userINF);

				$idUser = Auth::instance()->get_user()->id;
		    	$userINF = ORM::factory('user')->where('id', '=', $idUser)->find_all();

		    	if(HTTP_Request::POST == $this->request->method())
		    	{
		    		$validation = Validation::factory($_POST)
		                ->rule('username', 'not_empty');
		    			if($validation->check())
		    			{
					        try {


					            $user = ORM::factory('user')->where('id', '=', $idUser)->find();
					            $user->lastname = $this->request->post('lastname');
					            $user->firstname = $this->request->post('firstname');
					            $user->username = $this->request->post('username');
					            $user->privacy = $this->request->post('privacy');
					            if(!empty($_POST['password']))
					            {
					            	$user->password = $this->request->post('password');
					        	}
					            $user->email = $this->request->post('email');
								$user->save();

					        }
					        catch (ORM_Validation_Exception $e)
					        {

					        }

					 	}
					 	else
					 	{
					 			$errors = $validation->errors('signup');

					 	}
					 
		    	}
    	}
    	else
    	{
    		$this->template->title = "Erreur";
	    	$this->template->body = View::factory('error');
    	}
    }

    public function action_delete(){

    	if(Auth::instance()->get_user() == true)
    	{
		    	$idUser = Auth::instance()->get_user()->id;
		    	$user = ORM::factory('user')->where('id', '=', $idUser)->find();
		    	$adsLIST = ORM::factory('annonce')->where('id_user', '=', $idUser)->find_all();
		    	$stats = ORM::factory('stat')->where('id_user', '=', $idUser)->find();
		    	$stats->delete();
		    	foreach ($adsLIST as $key => $value) {
		    		$value->delete();
		    	}

		    	$delete = helper::delDIR("/opt/lampp/htdocs/freeads/uploads/".$idUser);
		    	$user->delete();

		    	HTTP::redirect(URL::site('../../../users/logout'));
    	}
    	else
    	{
    		$this->template->title = "Erreur";
	    	$this->template->body = View::factory('error');
    	}
    }

    public function action_login()
    {
	
  		// Template
        $this->template->title = "Connexion";
        $this->template->body = View::factory('auth/login');
        // POST
        if (HTTP_Request::POST == $this->request->method())
        {

		        // Template
		        $this->template->title = "Login";
		        $this->template->body = View::factory('auth/login')
		                                       ->bind('username', $username);
		        // POST
		        if (HTTP_Request::POST == $this->request->method())
		        {
		            $username = $this->request->post('username');
		            $password = $this->request->post('password');
		            $remember = $this->request->post('remember');
		            if (Auth::instance()->login($username, $password, $remember))
		            {
		                $this->user = Auth::instance()->get_user();
		                HTTP::redirect(URL::site('../../../'));
		            }
		            else
		            {
		            	
		            }
		        }
        }

    }

        public function action_logout()
        {
		    	if(Auth::instance()->get_user() == true)
		    	{
		        	Auth::instance()->logout();
		        	$this->redirect('../home');
		        }
		    	else
		    	{
		    		$this->template->title = "Erreur";
			    	$this->template->body = View::factory('error');
		    	}
        }

}