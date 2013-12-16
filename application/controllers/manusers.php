<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
	Document	:	manusers.php
	Created		:	15/12/2013	12:43 PM
	Author 		:	chegzcol

*/

class Manusers extends CI_Controller{

	public function __construct()
	{
		parent::__construct();
		
		$this->load->model('property_list_model');
		$this->load->model('users_model');
	}
	
	function index()
	{
		if($this->session->userdata('is_logged_in') == 1)
		{
			$data['title']			=	'Manage Users';
			
						//right propety list
		
		$data['p_list']		=	$this->property_list_model->property_list_right();
		
		
		$data['user_list']	=	$this->users_model->get_users();
		
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
			$this->load->view('admin/members_view');
			$this->load->view('templates/app_right_list',$data);
		}
		else
		{
			redirect('admin');
		}
	}
	

		
}
?>