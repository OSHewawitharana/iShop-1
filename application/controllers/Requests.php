<?php


class Requests extends CI_Controller {

	public function viewProfile($user_id) {

		$this->load->model('Model_user');

		if (isset($_POST['update'])) {
			if ($this->Model_user->update($user_id)) {
				$this->session->set_flashdata('success','User is updated');
				redirect('ManageUsers/viewUsers/');	
			} else {
				$this->session->set_flashdata('error','User is not updated');
				redirect('ManageUsers/viewUsers/');
			}
		}

		$data['row'] = $this->Model_user->edit($user_id);
		$data['row2'] = $this->Model_user->edit2($user_id);
		$this->load->view('ViewProfile',$data);
		
	}

	function viewRequests() {
		$this->load->model('Model_user');
		$records = $this->Model_user->getRequests();
		$this->load->view('Requests', ['records' => $records]);
		
	}
}

?>

