<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
	Document	:	login.php
	Created		:	11/12/2013	10:30PMPM
	Author 		:	chegzcol

*/

class Admin extends CI_Controller{

	public function __construct()
	{
		parent::__construct();
		
		$this->load->model('login_model');
		$this->load->model('audit_trail');
		
	}
	
	//function to login as a property submiter
	function index()
	{
		$data['title'] = 'Login Failed'; //title tag in the app_header section.
		
			//right propety list
		$this->load->model('property_list_model');
		$data['p_list']		=	$this->property_list_model->property_list_right();
		
		
		$this->load->view('templates/app_header',$data); 
		$this->load->view('templates/right_nav');
		$this->load->view('admin_login_view');
		$this->load->view('templates/app_right_list',$data);
	
	}
	
	//admin login
	function admin_login()
	{
		$query = $this->login_model->adminlogin();
		if($query)
		{
			$data = array(
						'email'	=> $this->input->post('email'),
						'is_logged_in'	=>	1
						);
						$this->session->set_userdata($data);
						$this->login_model->is_loggedin();
						$this->login_model->comp_devices();
						
					$table_name             = '';
                    $record_id              = '';
                    $nature_of_change       = 'login';
                    
                    $this->audit_trail->create_audit($table_name, $record_id, $nature_of_change);
					
						redirect('/admin_panel');
		}
		else
		{
			$this->load->view('submitproperty/login_error');
			$this->index();
		}
	
	}
	

}


?>