<?php
/* 
 	Document	:	audit_trail.php
	Created		:	12/12/2013 12:16 PM
	Author		:	chegzcol
 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 *
 */

//create the audit trail
class Audit_trail extends CI_Model{
	function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
	
	function create_audit($table_name, $record_id, $nature_of_change)
    {
        $data['table_name']         = $table_name;
        $data['record_id']          = $record_id;
        $data['nature_of_change']   = $nature_of_change;
        $data['date']               = mdate('%Y:%m:%d');
        $data['time']               = mdate('%h:%i:%s: %a');
        $data['username']           = $this->session->userdata('email');

        $this->db->insert('audit_trail', $data);
    }

    /*
     * function to help in displaying message output
     */
    function show_error($page, $message)
    {
        $data['title']      = 'Findahome.co.ke ';
        $data['email']   = $this->session->userdata('email');

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
			$this->load->view('middle_menu/error/'.$page, $message);
			$this->load->view('templates/app_right_list',$data);
    }
}
?>