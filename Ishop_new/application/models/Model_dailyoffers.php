<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_dailyoffers extends CI_Model{

    function getUsers() {
    	$this->db->select('*');
		$this->db->from('shop_item as itm');
		$this->db->join('shop as shp', 'itm.shop_shop_id = shp.shop_id');
		
		$this->db->order_by('shop_item_id');
		$query = $this->db->get();
	    return $query->result(); 
        
    }

    function getUsersContact($shop_shop_id){
    	$this->db->select('*');
    	$this->db->from('shop');
    	$this->db->where('shop_id',$shop_shop_id);

		$query = $this->db->get();
	    return $query->result(); 
        
    }

    //getting users per page

  /*  public function getUserPagintaion($limit, $start) {
        
            $this->db->select('*');
            $this->db->from('shop_item');
            $this->db->limit($limit, $start);
            $this->db->order_by('shop_item_id', 'DESC');
            $query = $this->db->get();
            return $result = $query->result();
        
    }

    //getting users count

    public function getUserCount() {
        
            $this->db->select("COUNT(*) as num_row");
            $this->db->from('shop_item');
            $this->db->order_by('shop_item_id');
            $query = $this->db->get();
            $result = $query->result();
            return $result[0]->num_row;

    }*/


}