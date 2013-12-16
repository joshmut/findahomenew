<?php
/*
	Document	:	new_submit_model.php
	Created		:	11/12/2013 7.03PM
	Author		:	chegzcol
*/
Class New_submit_model extends CI_Model{

	public function __construct()
	{
		parent::__construct();
	}
	
	function new_property_save()
	{
		$data['property_name']			=	$this->input->post('property_name');
		$data['property_type']			=	$this->input->post('property_type');
		$data['property_description']	=	$this->input->post('property_description');
		$data['price']					=	$this->input->post('price');
		$data['classification']			=	$this->input->post('classification');
		$data['bedroom']				=	$this->input->post('bedroom');
		$data['bathroom']				=	$this->input->post('bathroom');
		$data['image']					=	$this->input->post('image1');
		$data['location']				=	$this->input->post('location');
		$data['owner']					=	$this->input->post('owner');
		$data['email']					=	$this->input->post('email');
		$data['date_added']				=	mdate('%Y:%m:%d');
		
		//goes to users table for login
		$data1['name']					=	$this->input->post('owner');
		$data1['email']					=	$this->input->post('email');
		$data1['password']				=	$this->input->post('password');
		$data1['date_added']				=	mdate('%Y:%m:%d');
		
		$this->db->insert('property_submit',$data);
		$this->db->insert('users',$data1);
	}
	
	function loggedin_property_save()
	{
		$data['property_name']			=	$this->input->post('property_name');
		$data['property_type']			=	$this->input->post('property_type');
		$data['property_description']	=	$this->input->post('property_description');
		$data['price']					=	$this->input->post('price');
		$data['classification']			=	$this->input->post('classification');
		$data['bedroom']				=	$this->input->post('bedroom');
		$data['bathroom']				=	$this->input->post('bathroom');
		$data['image']					=	$this->input->post('image1');
		$data['location']				=	$this->input->post('location');
		$data['owner']					=	$this->input->post('owner');
		$data['email']					=	$this->input->post('email');
		$data['phone']					=	$this->input->post('phone');
		$data['date_added']				=	mdate('%Y:%m:%d');
		
		$this->db->insert('property_submit',$data);
		//$this->db->insert('users',$data1);
	}
	
}

?>
