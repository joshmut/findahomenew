<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
	Document	:	landing.php
	Created		:	10/12/2013	1.10PM
	Author 		:	chegzcol

*/

class Landing extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}
	
	function index()
	{
		$data['title'] = 'Findahome.co.ke'; //title tag in the app_header section.
		
		//right propety list
		$this->load->model('property_list_model');
		$data['p_list']		=	$this->property_list_model->property_list_right();
		
		
		$this->load->view('templates/app_header',$data); 
		$this->load->view('templates/right_nav');
		$this->load->view('landing_view');
		$this->load->view('templates/app_right_list',$data);
		
		
	}
	
}

?>
