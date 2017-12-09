<?php

/**
* 
*/
class Date_Controller extends CI_Controller
{
	
	public function get_date($user_id)
	{
		$this->load->model('Model_date');
		// $data['$record'] = $this->load->Model_date->get_date($user_id);

		// $timestamp = $this->Model_date->getDate($user_id);
		// $splits =  explode(" ",$timestamp);
		// $get_date = $splits[0];
		// $get_time = $splits[1];

		$date = $this->Model_date->getDate($user_id);
		$this->load->view('printDate', $date);
	}
}