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

<<<<<<< HEAD
	public function Reports(){
		$this->load->view('ReportsView');
	}

=======
>>>>>>> a5f261d051003666d382c2010d2c22aa8c07fb00
	public function deactivateUser($user_id){
		$this->load->model('Model_user');
		$this->Model_user->deactivateAccount($user_id);

	}

}