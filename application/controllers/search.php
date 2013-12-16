<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
	Document	:	search.php
	Created		:	12/12/2013	10.34 PM
	Author 		:	chegzcol

*/

class Search extends CI_Controller{

	public function __construct()
	{
		parent::__construct();
		
		$this->load->model('search_model');
	}
	
    function index()

    {
        $match = $this->uri->segment(3);

        $query = $this->search_model->classification($match); //reg number

        echo '<table style = "width: 100%; font-size: 11px;">';

        foreach ($query->result() as $row)

        {
            echo '<tr id = "'.$row->classification.'" class = "">

                    <td>'.$row->classification. '</td>
                    <td>'.$row->type.'</td>
                    </tr>';
            
        }

        $query = $this->search_model->type($match); //name
        foreach ($query->result() as $row)

        {
            echo '<tr id = "'.$row->classification.'" class = "">

                    <td>'.$row->classification. '</td>
                    <td>'.$row->type.'</td>
                    </tr>';

        }
        $query = $this->search_model->pharmrep_main_b($match); //name
        foreach ($query->result() as $row)

        {
            echo '<tr id = "'.$row->ppb_id.'" class = "pharmrep">

                    <td>'.$row->ppb_id. '</td>
                    <td>'.$row->name.'</td>
                    </tr>';

        }
        $query = $this->search_model->pharmrep_main_a($match); //reg number
        foreach ($query->result() as $row)

        {
            echo '<tr id = "'.$row->ppb_id.'" class = "pharmrep">

                    <td>'.$row->ppb_id. '</td>
                    <td>'.$row->name.'</td>
                    </tr>';

        }
        $query = $this->search_model->pharmtec_main_a($match); //reg number
        foreach ($query->result() as $row)

        {
            echo '<tr id = "'.$row->enrollment_no.'" class = "pharmtec">

                    <td>'.$row->enrollment_no. '</td>
                    <td>'.$row->name.'</td>
                    </tr>';

        }
        $query = $this->search_model->pharmtec_main_b($match); //name
        foreach ($query->result() as $row)

        {
            echo '<tr id = "'.$row->enrollment_no.'" class = "pharmtec">

                    <td>'.$row->enrollment_no. '</td>
                    <td>'.$row->name.'</td>
                    </tr>';

        }
        $query = $this->search_model->premises_main_a($match); //reg number
        foreach ($query->result() as $row)

        {
            echo '<tr id = "'.$row->premises_reg_no.'" class = "premises">

                    <td>'.$row->premises_reg_no. '</td>
                    <td>'.$row->name.'</td>
                    </tr>';

        }
        $query = $this->search_model->premises_main_b($match); //name
        foreach ($query->result() as $row)

        {
            echo '<tr id = "'.$row->premises_reg_no.'" class = "premises">

                    <td>'.$row->premises_reg_no. '</td>
                    <td>'.$row->name.'</td>
                    </tr>';

        }
        echo '</table>';
    }
	
	//filter form search/advanced search
	function advanced_search()
	{
		
		
	}
	
}

?>
