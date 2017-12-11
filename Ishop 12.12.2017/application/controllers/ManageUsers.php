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

	function RejectUser($user_id) {

  		$this->load->model('Model_user');
  		$this->Model_user->RemoveUser($user_id);
  		redirect('Requests/viewRequests');
       
	}
	
	public function viewUsers() {

		$this->load->model('Model_user');
		$data['records'] = $this->Model_user->getUsers();
		$this->load->view('ManageUsers', $data);
		
	}

	public function editUser($user_id) {

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
		$this->load->view('Update',$data);
		
	}

	public function updateProfile($user_id) {

		$this->load->model('Model_user');

		if (isset($_POST['update'])) {
			if ($this->Model_user->update($user_id)) {
				$this->session->set_flashdata('success','User is updated');
				redirect('ShopOwner/Home');	
			} else {
				$this->session->set_flashdata('error','User is not updated');
				redirect('ShopOwner/Home');
			}
		}

		$data['row'] = $this->Model_user->edit($user_id);
		$data['row2'] = $this->Model_user->edit2($user_id);
		$this->load->view('UpdateProfile',$data);
		
	}

	public function searchUsers() {
		$searchkey = $this->input->post('search');
		$this->load->model('Model_user');
		$data['records'] = $this->Model_user->Search($searchkey);
		$this->load->view('ManageUsers', $data);
		
	}

	public function acceptUser($user_id){
		$this->load->model('Model_user');
		$this->Model_user->AcceptUser($user_id);
  		redirect('Requests/viewRequests');
	}

}