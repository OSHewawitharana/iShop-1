<?php

/**
* 
*/
class ManageUsers extends CI_Controller
{
	

	function RemoveUser($user_id) {

  		$this->load->model('Model_user');
  		$this->Model_user->RemoveUser($user_id);
  		redirect('ManageUsers/viewUsers');
       
	}
	
	public function viewUsers() {
		$this->load->model('Model_user');
		$records = $this->Model_user->getUsers();
		$this->load->view('ManageUsers', ['records' => $records]);
		
	}

		public function editUser($stu_id) {

		$this->load->model('Model_user');

		if (isset($_POST['update'])) {
			if ($this->Model_user->update($stu_id)) {
				$this->session->set_flashdata('success','Student is updated');
				redirect('ManageUsers/viewUsers/');	
			} else {
				$this->session->set_flashdata('error','Student is not updated');
				redirect('ManageUsers/viewUsers/');
			}
		}

		$data['row'] = $this->Model_user->edit($stu_id);
		$this->load->view('Update',$data);
		
	}

	public function searchUsers() {
		echo "search";
		$this->load->model('Model_user');
		$records = $this->Model_user->Search('search');
		$this->load->view('ManageUsers', ['records' => $records]);
		
	}

}