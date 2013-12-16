<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
	Document	:	submit_property.php
	Created		:	10/12/2013	4.18PM
	Author 		:	chegzcol

*/

class Ps_submit_property extends CI_Controller{

	public function __construct()
	{
		parent::__construct();
		
		$this->load->model('property_list_model');
		$this->load->model('new_submit_model');
	}
	
	function index()
	{
		if($this->session->userdata('is_logged_in') == 1)
		{
		$data['title'] = 'Submit Property';
		
					
		$data['p_list']		=	$this->property_list_model->property_list_right();
		
		$data['email']		=	$this->session->userdata('email');
		
		$this->load->view('templates/loggedin/ps_app_header',$data);
		$this->load->view('templates/loggedin/ps_right_nav');
		$this->load->view('submitproperty/loggedin/new_submit_view');
		$this->load->view('templates/app_right_list',$data);
		}
		else
		{
			redirect('login');
		}
	}
	//function to handle upload property
	function uploads()
	{
		$data['title'] = 'Upload Property Images';

		
		$this->new_submit_model->loggedin_property_save();
		
			
		$data['p_list']		=	$this->property_list_model->property_list();
		
		$this->form_validation->set_rules('property_name','Property Name','trim|required|xss_clean');
		$this->form_validation->set_rules('property_type','Property type','trim|required');
		$this->form_validation->set_rules('property_description','Property description','trim|required');
		$this->form_validation->set_rules('price','price','trim|required');
		$this->form_validation->set_rules('location','location','trim|required');
		$this->form_validation->set_rules('owner','owner','trim|required');
		$this->form_validation->set_rules('email','email','trim|required|valid_email');
		$this->form_validation->set_rules('password','password','trim|required');
		if($this->form_validation->run() == FALSE)
		{
			$this->load->view('templates/loggedin/ps_app_header',$data);
			$this->load->view('templates/loggedin/ps_right_nav');
			$this->load->view('submitproperty/loggedin/new_submit_view');
			$this->load->view('templates/app_right_list',$data);
		}
		else
		{
			$this->load->view('templates/loggedin/ps_app_header',$data);
			$this->load->view('templates/loggedin/ps_right_nav');
			$this->load->view('submitproperty/loggedin/new_property_success');
			$this->load->view('templates/app_right_list',$data);
		}
	
	}

}