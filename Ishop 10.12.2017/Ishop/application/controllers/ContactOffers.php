<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class ContactOffers extends CI_Controller{

	public function viewContactOffers($shop_shop_id) {
		$this->load->model('Model_dailyoffers');
		$records = $this->Model_dailyoffers->getUsersContact($shop_shop_id);
		$this->load->view('ContactOffers', ['records' => $records]);
		
	}

}
?>