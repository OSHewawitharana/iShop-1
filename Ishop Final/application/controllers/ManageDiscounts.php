<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ManageDiscounts extends CI_Controller {

public function updateDiscounts($user_id) {
		$this->load->model('Model_discounts');
		$this->Model_discounts->update($user_id);
		$this->Model_discounts->getDiscounts($user_id);
		$data['records'] = $this->Model_discounts->getDiscounts($user_id);
		$this->load->view('Manage_Discounts', $data);
	
		/*$this->load->view('Manage_Discounts', $data);*/
	}

public function viewDiscounts($user_id) {
		$this->load->model('Model_discounts');
		$data['records'] = $this->Model_discounts->getDiscounts($user_id);
		$this->load->view('Manage_Discounts', $data);
		
	}

public function DeleteDiscounts($user_id) {
  		$this->load->model('Model_discounts');
  		$this->Model_discounts->delDiscounts($user_id);
  		$this->Model_discounts->getDiscounts($user_id);
		$data['records'] = $this->Model_discounts->getDiscounts($user_id);
		$this->load->view('Manage_Discounts', $data);


		/*if (isset($_POST['delete'])) {
			if ($this->Model_discounts->delDiscounts($user_id)) {

				$this->Model_discounts->getDiscounts($user_id);
				$data['records'] = $this->Model_discounts->getDiscounts($user_id);
				$this->load->view('Manage_Discounts', $data);

				$this->session->set_flashdata('success','User is updated');
				$this->load->view('Manage_Discounts', $data);

				
			} else {
				$this->session->set_flashdata('error','User is not updated');
			}
		}*/
       
	}

}

?>