<?php

/**
* 
*/
class Model_messages extends CI_Model
{
	
	function getMessages() {
		
		$this->db->select('*');
		$this->db->from('contact');
		$this->db->order_by('id', 'DESC');
		$query = $this->db->get();
    	return $query->result(); 
        
    }
}

?>