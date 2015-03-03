<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Home extends Controller_Template {


    public function action_index()
    {

		$slideADS = ORM::factory('pin')->order_by('date_pub', 'desc')->limit(3)->find_all();

		$this->template->title = "Home";
    	$this->template->body = View::factory('home/home')->bind('slide',$slideADS);
    }

} // End Welcome
