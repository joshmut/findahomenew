<?php
/*
	Document	:	ps_property_list.php
	Created		:	12/12/2013 8:25 PM
	Author		:	chegzcol
*/

class Ps_property_list extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		
		$this->load->model('property_list_model');
		
	}
	
	function index()
	{
		if($this->session->userdata('is_logged_in') == 1)
		{
		
		$data['title']	=	'Property List View';
		
		//right propety list
		$data['p_list']		=	$this->property_list_model->property_list_right();
		
		//main property list
		$data['main_list']	=	$this->property_list_model->property_list();
		
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
		$this->load->view('templates/loggedin/ps_right_nav');
		$this->load->view('submitproperty/loggedin/property_list_view');
		$this->load->view('templates/app_right_list',$data);
		}
		else
		{
			redirect('login');
		}
	}
}
?>