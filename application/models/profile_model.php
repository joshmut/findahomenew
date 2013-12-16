<?php
/*
	Document	:	profile_model.php
	Created		:	12/12/2013 4:35 PM
	Author		:	chegzcol
*/

class Profile_model extends CI_Model{

	public function __construct()
	{
		parent::__construct();
	}
	function get_profile_b()
	{
		$this->db->where('user_id',$this->session->userdata('email'));
		$this->db->select('owner,email,password');
		
		$sql = $this->db->get('property_submit');
		return $sql;
	}
	
	function profile_db()
	{
		//$this->db->where('email', $this->session->userdata('email'));
		
		$data['name']		=	$this->input->post('owner');
		$data['email']		=	$this->input->post('email');
		$data['password']	=	$this->input->post('password');
		$data['mobile']		=	$this->input->post('mobile');
		$data['address']	=	$this->input->post('address');
		$data['website']	=	$this->input->post('website');
		$data['type']		=	'1';
		
		$this->db->update('users',$data);
	}
}
?>