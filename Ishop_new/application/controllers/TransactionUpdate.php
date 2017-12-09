<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TransactionUpdate extends CI_Controller {

public function updateUser($user_id) {

		$this->load->model('Model_transaction');
		$this->Model_transaction->update($user_id);
<<<<<<< HEAD
		$data['records'] = $this->Model_transaction->getUsers($_SESSION['user_id']);
		redirect('TransactionUpdate/viewUsers/'.$_SESSION['user_id']);
=======
		$this->load->model('Model_transaction');
		$data['records'] = $this->Model_transaction->getUsers($user_id);
		$this->load->view('Transaction_Update', $data);
>>>>>>> a5f261d051003666d382c2010d2c22aa8c07fb00
	}

public function viewUsers($user_id) {
		$this->load->model('Model_transaction');
		$data['records'] = $this->Model_transaction->getUsers($user_id);
		$this->load->view('Transaction_Update', $data);
		
	}

public function searchUsers($user_id) {
		$searchkey = $this->input->post('search');
		$this->load->model('Model_transaction');
		$data['records'] = $this->Model_transaction->Search($searchkey,$user_id);
		$this->load->view('Transaction_Update', $data);
		
	}

}

?>