<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class DailyOffers extends CI_Controller{

	public function viewDailyOffers() {
		$this->load->model('Model_dailyoffers');
		$records = $this->Model_dailyoffers->getUsers();
		$this->load->view('DailyOffers', ['records' => $records]);
		
	}
}

 ?>