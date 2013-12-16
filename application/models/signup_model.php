<?php
/*
	Document	:	signup_model.php
	Created		:	13/12/2013 2.08 PM
	Author		:	chegzcol
*/
Class Signup_model extends CI_Model{

	public function __construct()
	{
		parent::__construct();
	}
	
	function save_user()
	{
		$data['name']			=	$this->input->post('name');
		$data['email']			=	$this->input->post('email');
		$data['mobile']			=	$this->input->post('phone');
		$data['password']		=	$this->input->post('password');
		$data['gender']			=	$this->input->post('gender');
		
		$this->db->insert('users',$data);
	}
}

?>
