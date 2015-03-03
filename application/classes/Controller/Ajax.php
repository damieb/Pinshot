<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Ajax extends Controller_Template {

	public function action_upload(){

			$this->idUser = Auth::instance()->get_user()->pk();
			$directory = DOCROOT.'/uploads/'.$this->idUser;
			$file = Validation::factory($_FILES)
		            ->rule('pin', 'Upload::type', array(':value', array('jpg', 'png', 'gif')))
		            ->rule('pin', 'Upload::size', array(':value', '10M'));
			if(file_exists($directory))
			{
		    		if($this->request->is_ajax() && $file->check()){
		    		//Partie annonce
					$annADD = ORM::factory('pin');
					$annADD->id_user = $this->idUser;
					$annADD->title = $file['pin']['name'];
					$annADD->size = $file['pin']['size'];
					$filename = Upload::save( $file['pin'], NULL, $directory);
					$annADD->img_path = $filename;
					$annADD->save();

				}
			}
			else
			{
				$createDIR = mkdir($directory, 0777);
			}
			$this->auto_render = FALSE;
	}

	public function action_comments(){

		if($_POST){
		$comments = ORM::factory('comment');
		$comments->id_user = $this->request->post('userID');
		$comments->id_pin = $this->request->post('pinID');
		$comments->content = $this->request->post('content');
		$comments->save();
		}
		else{

		}
		$this->auto_render = FALSE;
	}

	public function action_showcom(){

		$idPIN = $this->request->post('pin');
		$comments = ORM::factory('comment')->where('id_pin','=',$idPIN)->find_all()->as_array();
		$output = array();
			foreach ($comments as $key => $value) {
				$userInf = ORM::factory('user')->where('id', '=', $value->id_user)->find();
				$output[$key] = $value->as_array();
			$this->request->response = json_encode($output);
			}
			$this->auto_render = FALSE;
	}
}