<?php

/**
* 
*/
class Model_pdf extends CI_Model
{
	
	public function select_items()
	{
		return $this->db->get('shop_item')->result();
	}

	public function select_owners()
	{
		return $this->db->get('owner')->result();
	}

} 

?>