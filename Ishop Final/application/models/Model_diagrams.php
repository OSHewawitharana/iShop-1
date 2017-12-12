<?php

class Model_diagrams extends CI_Model
{

public function __construct()
 {
     $this->load->database();
 }
 public function getDiagrams(){
     $query=$this->db->query('SELECT item_name, SUM(quantity) AS count_item FROM shop_item GROUP BY(item_name);');
    if ($query->num_rows()>0) {
        $data = array();
        foreach ($query->result_array() as $key => $value) {
            $data[$key]['label'] = $value['item_name'];
            $data[$key]['value'] = $value['count_item'];
        }
        return $data;
    }
    return NULL;
 }

}
?>