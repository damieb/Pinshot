<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Template extends Kohana_Controller_Template {

    public $template = "template/template"; 

    public function before()
    {
        parent::before();

        define('WEBROOT', str_replace('index.php','',$_SERVER['SCRIPT_NAME']));

        // Configurations : Session, Auth, ...

    }

}
