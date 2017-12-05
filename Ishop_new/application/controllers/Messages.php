<?php

/**
* 
*/
class Messages extends CI_Controller
{
	
	function Home()
	{
		$this->load->view('Messages');
	}

	function viewMessages() {
		$this->load->model('Model_messages');
		$records = $this->Model_messages->getMessages();
		$this->load->view('Messages', ['records' => $records]);
		
	}
}