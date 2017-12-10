<?php

/**
* 
*/
class Model_pdf extends CI_Model
{
	
	public function select_items_type1($mindate,$maxdate)
	{
		$this->db->select('*');
	    $this->db->from('log_item_table');
	    $this->db->where('log_date >=', $mindate);
	    $this->db->where('log_date <=', $maxdate);
	    $this->db->order_by('log_date');
	    $query = $this->db->get();
	    return $result = $query->result(); 

	}


	public function select_items_type2($mindate,$maxdate)
	{
	    $query = $this->db->query('SELECT log_item_name, SUM(log_item_quantity) as log_item_quantity, log_item_price
	    							FROM log_item_table 
	    							GROUP BY log_shop_item_id 
	    							ORDER BY log_item_quantity DESC');
	    return $result = $query->result(); 

	}


	public function select_items_type3($mindate,$maxdate)
	{
		$query = $this->db->query('SELECT SUM(log_item_quantity*log_item_price) as income, log_date
	    							FROM log_item_table
	    							GROUP BY log_date');
	    return $result = $query->result(); 

	}


	public function select_items_type4($mindate,$maxdate)
	{
	    $query = $this->db->query('SELECT SUM(log_item_quantity*log_item_price) as income
	    							FROM log_item_table');
	    return $result = $query->result(); 

	}

} 

?>