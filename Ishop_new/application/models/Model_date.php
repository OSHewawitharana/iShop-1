<?php

/**
* 
*/
class Model_date extends CI_Model
{
	
	public function getDate($user_id)
	{
		$this->db->select('date');
        $this->db->from('owner');
        $this->db->where('user_id', $user_id);
        // $this->db->order_by('user_id');
        $query = $this->db->get();
        $result['date'] = $query->result();

        $splits =  explode(" ", $result['date']);
		$get_date = $splits[0];
		// $get_time = $splits[1];
		echo "$get_date";
        return $get_date;
        
	}
}

?>