<?php
/*
	Document	:	contactus_model.php
	Created		:	14/12/2013 3.48 PM
	Author		:	chegzcol
*/
Class Contactus_model extends CI_Model{

	public function __construct()
	{
		parent::__construct();
	}
	
	
	function save_message()
	{
		$data['name']			=	$this->input->post('name');
		$data['email']			=	$this->input->post('email');
		$data['message']		=	$this->input->post('message');
		$data['date_posted']	=	mdate('%Y:%m:%d');
		
		$this->db->insert('messages',$data);
	}
}


		
?>