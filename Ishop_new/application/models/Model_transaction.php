<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_transaction extends CI_Model{

public function edit($user_id) {
        
        $this->db->where('shop_item_id',$user_id);
        $query = $this->db->get_where('shop_item', array('shop_item_id' => $user_id));
       	return $query->row();
}

public function update($user_id) {

        $nquantity = $this->input->post('newquantity');
        $this->db->select('quantity');
        $this->db->from('shop_item');
        $this->db->where('shop_shop_id',$user_id);
        $cquantity = $this->db->get()->result_array('quantity');

        $ccquantity = floatval($cquantity);
        $nnquantity = floatval($nquantity);

        // var_dump($cquantity);
        // echo $nquantity;
        // echo $ccquantity;

        $cccquantity = $ccquantity - $nnquantity;

		$this->db->set('quantity',$cccquantity);
        $this->db->where('shop_item_id',$user_id);
        $this->db->update('shop_item');
}

function Search($searchkey, $user_id){

    	$this->db->select('*');
		$this->db->from('shop_item');
		$this->db->where('shop_shop_id',$user_id);
		$this->db->like('description', $searchkey);

		$query = $this->db->get();
        return $query->result();
}

 function getUsers($user_id) {

    	$this->db->select('*');
		$this->db->from('shop_item as itm');
		$this->db->join('shop as shp', 'itm.shop_shop_id = shp.shop_id');
		$this->db->join('owner as onr', 'shp.owner_user_id = onr.user_id');
		$this->db->where('onr.user_id', $user_id);
		$this->db->order_by('shop_item_id');
		$query = $this->db->get();
	    return $query->result(); 
        
	}

}