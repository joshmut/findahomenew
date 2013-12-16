<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
	Document	:	contactus.php
	Created		:	14/12/2013	4.10 PM
	Author 		:	chegzcol

*/

class Contactus extends CI_Controller{

	public function __construct()
	{
		parent::__construct();
	
		$this->load->model('property_list_model');
		$this->load->model('new_submit_model');
	$this->load->model('contactus_model');
	}
	
	function index()
	{
		$data['title'] = 'Contact Us';
		
					
		$data['p_list']		=	$this->property_list_model->property_list_right();
		
		$this->load->view('templates/app_header',$data);
		$this->load->view('templates/right_nav');
		$this->load->view('contactus_view');
		$this->load->view('templates/app_right_list',$data);
	}
	
	//function to save message in DB
	function contact()
	{
		$data['title'] = 'Contact Us';


		$this->contactus_model->save_message();
		
		$data['p_list']		=	$this->property_list_model->property_list();
		
		$this->form_validation->set_rules('name','Your Name','trim|required|xss_clean');
		$this->form_validation->set_rules('email','Email','trim|required|valid_email');
		$this->form_validation->set_rules('message','Message','trim|required');
		
		if($this->form_validation->run() == FALSE)
		{
			$this->load->view('templates/app_header',$data);
			$this->load->view('templates/right_nav');
			$this->load->view('contactus_view');
			$this->load->view('templates/app_right_list',$data);
		}
		else
		{
				$this->load->view('templates/app_header',$data);
				$this->load->view('templates/right_nav');
				$this->load->view('success_view');
				$this->load->view('templates/app_right_list',$data);
			
		}
			
	}
}
?>
