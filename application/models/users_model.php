<?php
/*
	Document	:	users_model.php
	Created		:	15/12/2013 12:54 PM
	Author		:	chegzcol
*/

class Users_model extends CI_Model{

	public function __construct()
	{
		parent::__construct();
	}
	//retrieve users
	function get_users()
	{
		$query = $this->db->get('users');
		return $query;
	}
	
}
?>