<?php
/*
	Document	:	property_list_model.php
	Created		:	11/12/2013 8:32PM
	Author		:	chegzcol
*/

class Property_list_model extends CI_Model{

	public function __construct()
	{
		parent::__construct();
	}
	//function to retrive property list in the right
	function property_list_right()
	{
		$this->db->where('status','1');
		$this->db->where('online','1'); //this is to assist knw properties that have been paid for
		$query = $this->db->get('property_submit');
		return $query;
	}
	
	//function to retrieve property list on the main view
	function property_list()
	{
		$this->db->where('online','1'); //this is to assist knw properties that have been paid for.can active or deactivate
		$sql = $this->db->get('property_submit');
		return $sql;
	}
	
	//function to view owners properties only
	function ps_my_property()
	{
		$this->db->where('email',$this->session->userdata('email'));
		$sql = $this->db->get('property_submit');
		return $sql;
	}
	
	function property_details($propertyid)
	{
		$this->db->where('user_id',$propertyid	);
		$this->db->select('user_id,property_name,property_type,property_description,price,location,classification,bedroom,bathroom,owner,email,phone,date_added');
		$sql = $this->db->get('property_submit');
		return $sql;
	}
}
?>