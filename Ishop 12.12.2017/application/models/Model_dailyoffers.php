<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_dailyoffers extends CI_Model{

    public function getUsers() {

    	$this->db->select('*');
		$this->db->from('shop_item as itm');
		$this->db->join('shop as shp', 'itm.shop_shop_id = shp.shop_id');
		
		$this->db->order_by('shop_item_id');
		$query = $this->db->get();
	    return $query->result(); 
    }



    public function getUsersContact($shop_shop_id){
    	
    	$this->db->select('*');
    	$this->db->from('shop');
    	$this->db->where('shop_id',$shop_shop_id);
		$query = $this->db->get();
	    return $query->result(); 
    }

}

?>