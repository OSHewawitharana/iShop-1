<?php  

class Contact extends CI_Controller{

	function ContactUser(){
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');

		if ($this->form_validation->run() == FALSE){
			
			$this->load->view('Contact');
       	}

        else{

          	$this->load->model('Model_user');
          	$this->Model_user->ContactUser();
          	redirect('Home/Contact');

        }
	}
}

?>