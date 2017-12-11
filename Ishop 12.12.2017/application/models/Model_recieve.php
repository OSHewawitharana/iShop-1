<?php

/**
* 
*/
class Model_recieve extends CI_Model
{
	
	function recieveData()
	{
		$this->db->select('item_name');
		$this->db->select('shop_shop_id');
	    $this->db->from('shop_item');
	    //$this->db->order_by('item_id');
	    $query = $this->db->get();
	    $res = $query->result_array();   
	    //$list = json_encode($res);
	    //return $list;
	    return $res;
	}
}