<?php

class itemModel extends CI_Model
{


    public function insertItem()
    {

        $itemName = $this->input->post('itemName');

        $this->db->where('item_name',$itemName);
        $result=$this->db->get('shop_item');


        if($result->num_rows()>0) {
            $this->session->set_flashdata('Error','Item you entered is already exists.!');
            redirect('itemController/addItem');
        }
        else {


            $data = array(
                'item_name' => $this->input->post('itemName'),
                'category' => ($this->input->post('itemCategory')),
                'price' => $this->input->post('price'),
                'description' => $this->input->post('description'),
                'shop_shop_id'=>$_SESSION['shop_id'],


            );
            $this->db->insert('shop_item', $data);
        }


    }



    public function viewItems() {

        $this->db->select('*');
        $this->db->from('shop_item');
        $this->db->order_by('shop_item_id');
        $query = $this->db->get();

        return $query->result();

    }


//    public function getItemId() {
//
//        $this->db->select('shop_item_id');
//        $this->db->from('shop_item');
//        $this->db->from('shop_item');
//        $query = $this->db->get();
//
//        return $query->result();
//
//    }





    public function edit($id) {

        $this->db->where('shop_item_id',$id);
        $query = $this->db->get('shop_item');

        $result=$query->result_array();
        $data['row']= $result;
        return $data;

    }


    public function update($id) {

        $data = array(
            'item_name' => $this->input->post('itemName'),
            'category' => ($this->input->post('itemCategory')),
            'price' => $this->input->post('price'),
            'description' => $this->input->post('description'),
            'shop_shop_id'=>$_SESSION['shop_id'],

        );
        $this->db->where('shop_item_id',$id);
        $this->db->update('shop_item',$data);
    }


}
?>