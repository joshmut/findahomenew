<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
	Document	:	admin_panel.php
	Created		:	15/12/2013	12:14 PM
	Author 		:	chegzcol

*/

class Admin_panel extends CI_Controller{

	public function __construct()
	{
		parent::__construct();
		
		$this->load->model('property_list_model');
	}
	
	function index()
	{
		if($this->session->userdata('is_logged_in') == 1)
		{
			$data['title']			=	'Admin Panel';
			
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
			$this->load->view('templates/loggedin/admin/admin_app_header',$data); 
			$this->load->view('templates/loggedin/admin/admin_right_nav');
			$this->load->view('admin/panel_view');
			$this->load->view('templates/app_right_list',$data);
		}
		else
		{
			redirect('admin');
		}
	}
	
	function log_meout()
	{
		$this->load->model('login_model');
		$this->load->model('audit_trail');
		$this->login_model->is_loggedout();
		
		$table_name         = '';
        $record_id          = '';
        $nature_of_change   = 'logout';

        $this->audit_trail->create_audit($table_name, $record_id, $nature_of_change);
        $this->session->sess_destroy();
		redirect('admin');
	}
	
	function not_authorised()
	{
		$data['title']		=	'Findahome secure area';
		$data['email']		=	$this->session->userdata($data);
		
		$data['myform']     = array(
             'name'         => 'search-box',
              'id'          => 'search-box',
              'value'       => 'Search..',
              'maxlength'   => '100',
              'size'        => '50',
              'style'       => 'width:50%; color: #666666;',
            );
		
		$this->load->view('templates/app_header',$data); 
		$this->load->view('templates/right_nav');
		$this->load->view('submitproperty/not_authorised');
		$this->load->view('templates/app_right_list',$data);
	}
		
}
?>