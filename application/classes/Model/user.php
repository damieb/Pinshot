<?php defined('SYSPATH') or die('No direct script access.');
class Model_User extends Model_Auth_User {

	protected $_table_name = 'users';
	public $_rules;
	protected $_callbacks;




	public static function unique_username($username)
	{
	    // Check if the username already exists in the database
	    return ! DB::select(array(DB::expr('COUNT(username)'), 'total'))
	        ->from('users')
	        ->where('username', '=', $username)
	        ->execute()
	        ->get('total');
	}

	public function rules()
    {
        return array(
            'username' => array(
                array('not_empty'),
                array('min_length', array(':value', 4)),
                array('max_length', array(':value', 20)),
            ),
            'email' => array(
                array('not_empty'),
                array('min_length', array(':value', 4)),
                array('max_length', array(':value', 127)),
                array('email'),
            ),
        );
    }

}