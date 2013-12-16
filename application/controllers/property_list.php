<?php
/*
	Document	:	property_list.php
	Created		:	11/12/2013 9:36 PM
	Author		:	chegzcol
*/

class Property_list extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}
	
	function index()
	{
		$data['title']	=	'Property List View';
		
		//right propety list
		$this->load->model('property_list_model');
		$data['p_list']		=	$this->property_list_model->property_list_right();
		
		//main property list
		$data['main_list']	=	$this->property_list_model->property_list();
		
		
		$this->load->view('templates/app_header',$data); 
		$this->load->view('templates/right_nav');
		$this->load->view('property_list_view');
		$this->load->view('templates/app_right_list',$data);
	}
}
?>