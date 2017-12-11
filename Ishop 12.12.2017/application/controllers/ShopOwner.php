<?php

/**
* 
*/
class ShopOwner extends CI_Controller
{
	
	public function Home()
	{
		$this->load->view('ShopOwner');
	}

	public function Admin(){
		$this->load->view('admin');
	}

	public function Reports(){
		$this->load->view('ReportsView');
	}

	public function deactivateUser($user_id){
		$this->load->model('Model_user');
		$this->Model_user->deactivateAccount($user_id);

	}

}