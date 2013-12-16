<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
	Document	:	profile.php
	Created		:	12/12/2013	3:56 PM
	Author 		:	chegzcol

*/

class Profile extends CI_Controller{

	public function __construct()
	{
		parent::__construct();
		
		$this->load->model('property_list_model');
		$this->load->model('profile_model');
		$this->load->model('audit_trail');
		
	}
	function index()
	{
		if($this->session->userdata('is_logged_in') == 1)
		{
			$data['title']			=	'Profile';
			
						//right propety list
		$data['p_list']		=	$this->property_list_model->property_list_right();
		
		
			$data['email']			=	$this->session->userdata('email');
			
			  $data['myform']     = array(
			  'name'         => 'search-box',
              'id'          => 'search-box',
              'value'       => 'Search..',
              'maxlength'   => '100',
              'size'        => '50',
              'style'       => 'width:50%; color: #666666;',
            );
			$this->load->view('templates/loggedin/ps_app_header',$data); 
			$this->load->view('templates/right_nav');
			$this->load->view('submitproperty/loggedin/profile_view');
			$this->load->view('templates/app_right_list',$data);
		}
		else
		{
			redirect('login');
		}
	}
	
	function edit_profile()
	{
		//$user_id		=	$this->session->userdata('email');
		
		$data['profile']	=	$this->profile_model->get_profile_b();
		//$data['edit_profile']			=	$this->session->userdata('email');
		
			$this->load->view('templates/loggedin/ps_app_header',$data); 
			$this->load->view('templates/right_nav');
			$this->load->view('submitproperty/loggedin/profile_view',$data);
			$this->load->view('templates/app_right_list',$data);
	}
	
	function save_profile()
	{
		$this->form_validation->set_rules('owner','Full Name','trim|required');
		$this->form_validation->set_rules('email','Email','trim|required|valid_email');
		$this->form_validation->set_rules('password','Password','trim|required');
		
		 if($this->form_validation->run() == FALSE)
            {
           	$this->load->view('templates/loggedin/ps_app_header',$data); 
			$this->load->view('templates/right_nav');
			$this->load->view('submitproperty/loggedin/profile_view',$data);
			$this->load->view('templates/app_right_list',$data);
            }
            else
            {
                $this->profile_model->profile_db();

                $table_name         = 'users';
                $record_id          = $this->input->post('email');
                $nature_of_change   = 'Edit Profile';

                $this->audit_trail->create_audit($table_name, $record_id, $nature_of_change);

                $page                   = 'validation';
                $message['message']     = 'Profile Edited';
                $this->audit_trail->show_error($page, $message);

            }
	}
}
?>