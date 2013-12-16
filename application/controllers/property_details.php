<?php
/*
	Document	:	property_details.php
	Created		:	11/12/2013 9:36 PM
	Author		:	chegzcol
*/

class Property_details extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		
			$this->load->model('property_list_model');
	}
	
	function index()
	{
		$data['title']	=	'View Property Details';
		
		//right propety list
	
		$data['p_list']		=	$this->property_list_model->property_list_right();
		
		//main property list
		$data['main_list']	=	$this->property_list_model->property_list();
		
		
		$this->load->view('templates/app_header',$data); 
		$this->load->view('templates/right_nav');
		$this->load->view('property_details_view');
		//$this->load->view('templates/app_right_list',$data);
	}
	
	function view_property()
	{
		$data['title']		= 'View Property Details';
		$propertyid			=	$this->input->get('propertyid');
		$data['property']	=	$this->property_list_model->property_details($propertyid);
		$this->load->view('templates/app_header',$data); 
		$this->load->view('templates/right_nav');
		$this->load->view('property_details_view');
		//$this->load->view('templates/app_right_list',$data);
	}
	
	function viewproperty()
	{
		if($this->session->userdata('is_logged_in') == 1)
		{
			$data['title']			=	'View Property Details';
			
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
		$data['title']		= 'View Property Details';
		$propertyid			=	$this->input->get('propertyid');
		$data['property']	=	$this->property_list_model->property_details($propertyid);
		$this->load->view('templates/loggedin/ps_app_header',$data); 
		$this->load->view('templates/loggedin/ps_right_nav');
		$this->load->view('submitproperty/loggedin/property_details_view');
		//$this->load->view('templates/app_right_list',$data);
			
		}
		else
		{
			redirect('login');
		}
	}
}
?>