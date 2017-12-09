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

		$this->load->library('pagination');
        $config['base_url'] = 'http://localhost/Ishop/ManageUsers/viewUsers';
        $config['total_rows'] = $this->Model_user->getUserCount();
        $config['per_page'] = 5;
        $config['uri_segment'] = 3;
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['attributes'] = array('class' => 'page_link');
        $config['first_link'] = 'First';
        $config['last_link'] = 'Last';
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="prev">';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="page-item active"><a href="#" class="page-link">';
        $config['cur_tag_close'] = '<span class="sr-only">(current)</span></a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $this->pagination->initialize($config);
        $data['link'] = $this->pagination->create_links();
        $data['users'] = $this->Model_user->getUserPagintaion($config['per_page'], $page);

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