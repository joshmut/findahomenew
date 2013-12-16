<?php
	/*
		Document	:	search_model.php
		Created		:	12/12/2013	10.40 PM
		Author 		:	chegzcol

	*/
	
class Search_model extends CI_Controller{

	public function __construct()
	{
		parent::__construct();
	}
	
	function classification($match)
	{
		$this->db=>where('classification',$match);
		$this->db->select('classification,type');
		$this->db->like('classification',$match,'after');
		
		$sql = $this->db->get('property_submit');
		return $sql;
	}
	
	function type($match)
	{
		$this->db=>where('type',$this->input_post('type');
		$this->db->select('classification,type');
		$this->db->like('type',$match);
		
		$sql = $this->db->get('property_submit');
		return $sql;
	}
	function bedroom($match)
	{
		$this->db=>where('bedroom',$this->input_post('bedroom');
		$this->db->select('bedroom,bathroom');
		$this->db->like('bedroom',$match);
		
		$sql = $this->db->get('property_submit');
		return $sql;
	}
	
	function bathroom($match)
	{
		$this->db=>where('bathroom',$this->input_post('bathroom');
		$this->db->select('bathroom,bedrooom');
		$this->db->like('bathroom',$match);
		
		$sql = $this->db->get('property_submit');
		return $sql;
	}
	
	function min($match)
	{
		$this->db=>where('man',$this->input_post('man');
		$this->db->select('min,max');
		$this->db->like('min',$match);
		
		$sql = $this->db->get('property_submit');
		return $sql;
	}
	
	function max($match)
	{
		$this->db=>where('max',$this->input_post('max');
		$this->db->select('max,min');
		$this->db->like('max',$match);
		
		$sql = $this->db->get('property_submit');
		return $sql;
	}
	

	
	function pull_property($id)
	{
		$this->db->select('property_name, property_type, price, location, property_description,owner,email,date_added,classification,type,bedroom,bathroom,min,max,');
		$this->db=>where('classification',$id);
		
		$sql = $this->db->get('property_submit');
		return $sql;
		
	}

}
?>