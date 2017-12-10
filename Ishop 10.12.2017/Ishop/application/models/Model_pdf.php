<?php

/**
* 
*/
class Model_pdf extends CI_Model
{
	
	public function select_items($mindate,$maxdate)
	{
		$this->db->select('*');
	    $this->db->from('log_item_table');
	    $this->db->where('log_date >=', $mindate);
	    $this->db->where('log_date <=', $maxdate);
	    //$this->db->limit($limit, $start);
	    $this->db->order_by('log_date');
	    $query = $this->db->get();
	    return $result = $query->result(); 

	}

	public function select_owners()
	{
		return $this->db->get('owner')->result();
	}

} 

?>