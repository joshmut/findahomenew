<?php
/*
	Document	:	login_model.php
	Created		:	11/12/2013 10:37PM
	Author		:	chegzcol
*/

class Login_model extends CI_Model{

	public function __construct()
	{
		parent::__construct();
	}
	
	function userlogin()
	{
		$this->db->where('email',$this->input->post('email'));
		$this->db->where('password',$this->input->post('password'));
		//$this->db->where('enabled',1); activate ile siku we will start blacklisted users.
		//$this->db->where('user_level',8);
		$query = $this->db->get('users');
		
		if($query->num_rows() == 1)
		{
			return true;
		}
	}	
	
	//admin login
		function adminlogin()
	{
		$this->db->where('email',$this->input->post('email'));
		$this->db->where('password',$this->input->post('password'));
		$this->db->where('user_level',8);
		$query = $this->db->get('users');
		
		if($query->num_rows() == 1)
		{
			return true;
		}
	}
	
	//function to detect computers using the system
	function comp_devices()
	{
		$data['session_id']     = $this->session->userdata('email');
		$data['user_agent']		=	$this->agent->agent_string();
		$data['last_activity']	=	mdate('%h:%i:%s:%a');
		$data['ip_address']		=	$this->input->ip_address();
		$data['date']			=	mdate('%Y:%m:%d');
		
		$this->db->insert('devices',$data);
	}
	
	function is_loggedin()
	{
		$this->db->where('email',$this->input->post('email'));
		$data['online'] = 1;
		
		$this->db->update('users',$data);
	}
	
	function is_loggedout()
	{
		$this->db->where('email',$this->session->userdata('email'));
		$data['online'] = 0;
		
		$this->db->update('users',$data);
	}
	
	


}
?>