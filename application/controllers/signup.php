<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
	Document	:	signup.php
	Created		:	12/12/2013	12.32 PM
	Author 		:	chegzcol

*/

class Signup extends CI_Controller{

	public function __construct()
	{
		parent::__construct();
	
		$this->load->model('property_list_model');
		$this->load->model('new_submit_model');
	$this->load->model('signup_model');
	}
	
	function index()
	{
		$data['title'] = 'Sign up';
		
					
		$data['p_list']		=	$this->property_list_model->property_list_right();
		
		$this->load->view('templates/app_header',$data);
		$this->load->view('templates/right_nav');
		$this->load->view('signup_view');
		$this->load->view('templates/app_right_list',$data);
	}
	
	//function to sign up user
	function register()
	{
		$data['title'] = 'Register user';

	//	$this->load->model('signup_model');
		$this->signup_model->save_user();
		
		$data['p_list']		=	$this->property_list_model->property_list();
		
		$this->form_validation->set_rules('name','Your Name','trim|required|xss_clean');
		$this->form_validation->set_rules('email','Email','trim|required|valid_email');
		$this->form_validation->set_rules('phone','Phone No','trim|required');
		$this->form_validation->set_rules('password','Password','trim|required|min_length[6]');
		$this->form_validation->set_rules('gender','Sex','trim|required');
		
		if($this->form_validation->run() == FALSE)
		{
			$this->load->view('templates/app_header',$data);
			$this->load->view('templates/right_nav');
			$this->load->view('signup_view');
			$this->load->view('templates/app_right_list',$data);
		}
		else
		{
				$this->load->view('templates/app_header',$data);
				$this->load->view('templates/right_nav');
				$this->load->view('login_fail_view');
				$this->load->view('templates/app_right_list',$data);
			
		}
			
	}
}
?>
