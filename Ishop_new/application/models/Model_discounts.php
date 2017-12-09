<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_discounts extends CI_Model{

public function delDiscounts($user_id) {

        $this->db->set('discount_description',' ');
        $this->db->set('discount','0');
        $this->db->where('shop_item_id',$user_id);
        $this->db->update('shop_item');
    
    }

public function update($user_id) {

        $ndiscount = $this->input->post('newdiscount');
        $this->db->set('discount_description',$ndiscount);
        $this->db->set('discount','1');
        $this->db->where('shop_item_id',$user_id);
        $this->db->update('shop_item');
}

 function getDiscounts($user_id) {

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
