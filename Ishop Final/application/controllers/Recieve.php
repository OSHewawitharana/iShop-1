<?php

/**
* 
*/
class Recieve extends CI_Controller
{
	
	public function new()
	{
		$this->load->model('Model_recieve');
		$result = $this->Model_recieve->recieveData();

		//print_r($result);

		// $data['name'] = $result['0'];
		// $data['shop_id'] = $result['1'];
 
		// print_r($data);
		echo json_encode($result);
	}
}
