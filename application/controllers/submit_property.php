<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
	Document	:	submit_property.php
	Created		:	10/12/2013	4.18PM
	Author 		:	chegzcol

*/

class Submit_property extends CI_Controller{

	public function __construct()
	{
		parent::__construct();
		
		$this->load->model('property_list_model');
		$this->load->model('new_submit_model');
	}
	
	function index()
	{
		$data['title'] = 'Submit Property';
		
					
		$data['p_list']		=	$this->property_list_model->property_list_right();
		
		$this->load->view('templates/app_header',$data);
		$this->load->view('templates/right_nav');
		$this->load->view('submitproperty/new_submit_view');
		$this->load->view('templates/app_right_list',$data);
	}
	//function to handle upload property
	function uploads()
	{
		$data['title'] = 'Upload Property';

		
		$this->new_submit_model->new_property_save();
		
		$data['p_list']		=	$this->property_list_model->property_list();
		
		$this->form_validation->set_rules('property_name','Property Name','trim|required|xss_clean');
		$this->form_validation->set_rules('property_type','Property type','trim|required');
		$this->form_validation->set_rules('property_description','Property description','trim|required');
		$this->form_validation->set_rules('price','price','trim|required');
		$this->form_validation->set_rules('classification','Classification','trim|required');
		$this->form_validation->set_rules('bedroom','No of bedrooms','trim|required');
		$this->form_validation->set_rules('bathroom','No of bathrooms','trim|required');
		$this->form_validation->set_rules('location','location','trim|required');
		$this->form_validation->set_rules('owner','owner','trim|required');
		$this->form_validation->set_rules('email','email','valid_email|required|is_unique[users.email]');
		$this->form_validation->set_rules('password','password','min_length[6]|required|max_length[12]');
		if($this->form_validation->run() == FALSE)
		{
			$this->load->view('templates/app_header',$data);
			$this->load->view('templates/right_nav');
			$this->load->view('submitproperty/new_submit_view');
			$this->load->view('templates/app_right_list',$data);
		}
		else
		{
			/*$config['upload_path'] = './uploads/';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size']	= '100';
			$config['max_width']  = '1024';
			$config['max_height']  = '768';*/

			//$this->upload->initialize($config);
	
			if ( ! $this->upload->do_upload())
			{
				$error = array('error' => $this->upload->display_errors());

				//$this->load->view('upload_form', $error);
				$this->load->view('templates/app_header',$data);
				$this->load->view('templates/right_nav');
				$this->load->view('submitproperty/new_submit_view',$data);
				$this->load->view('templates/app_right_list',$data);
			}
			else
			{
				$data = array('upload_data' => $this->upload->data());

				//$this->load->view('upload_success', $data);
				$this->load->view('templates/app_header',$data);
				$this->load->view('templates/right_nav');
				$this->load->view('submitproperty/new_property_success',$data);
				$this->load->view('templates/app_right_list',$data);
			}
			
			

		}
	
	}
	
	public function email_check($str)
	{
		if($str == $this->input->post('email'))
		{
			$this->form_validation->set_message('email_check','This %s email exists in our database');
			return FALSE;
		}
		else
		{
			return true;
		}
	}
	
		//function to handle upload property once logged in
	function uploads_loggedin()
	{
		if($this->session->userdata('is_logged_in') == 1)
		{
		$data['title'] = 'Upload Property';

		
		$this->new_submit_model->new_property_save();
		
		$data['p_list']		=	$this->property_list_model->property_list();
		
		$data['email']			=	$this->session->userdata('email');
			
			  $data['myform']     = array(
			  'name'         => 'search-box',
              'id'          => 'search-box',
              'value'       => 'Search..',
              'maxlength'   => '100',
              'size'        => '50',
              'style'       => 'width:50%; color: #666666;',
            );
		
		$this->form_validation->set_rules('property_name','Property Name','trim|required|xss_clean');
		$this->form_validation->set_rules('property_type','Property type','trim|required');
		$this->form_validation->set_rules('property_description','Property description','trim|required');
		$this->form_validation->set_rules('price','price','trim|required');
		$this->form_validation->set_rules('classification','Classification','trim|required');
		$this->form_validation->set_rules('bedroom','No of bedrooms','trim|required');
		$this->form_validation->set_rules('bathroom','No of bathrooms','trim|required');
		$this->form_validation->set_rules('location','location','trim|required');
		$this->form_validation->set_rules('owner','owner','trim|required');
		$this->form_validation->set_rules('email','email','trim|required|valid_email');
		$this->form_validation->set_rules('phone','phone number','trim|required');
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
		else
		{
			redirect('login');
		}
	
	}

}