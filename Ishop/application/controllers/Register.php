<?php

class Register extends CI_Controller
{
	
	public function RegisterUser()
	{
		$this->form_validation->set_rules('fname', 'First Name', 'required');
		$this->form_validation->set_rules('lname', 'Last Name', 'required');
    $this->form_validation->set_rules('address', 'Address', 'required');
    $this->form_validation->set_rules('contactno', 'Contact Number', 'required|max_length[11]');
    $this->form_validation->set_rules('user_type', 'User Type', 'required');
    $this->form_validation->set_rules('gender', 'Gender', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[employee.email]');
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[5]');
		$this->form_validation->set_rules('confirmpassword', 'Confirm Password', 'required|matches[password]');

		#If tha validations fails --> view again registration page
		if ($this->form_validation->run() == FALSE){

			$this->load->view('Register');
       	}

       	#If tha validations passes --> load the model 'Model_user[insertUserdata function]'
        else{

          $this->load->model('Model_user');
         	$response = $this->Model_user->insertUserdata(); 

          	if ($response){

             	$this->session->set_flashdata('msg','Registered Successfully..please Login');
            	redirect('Home/Login');
         	}

       		else{
             	$this->session->set_flashdata('msg','Something went wrong!!!');
              	redirect('Home/Register');
         	}

      }
	}
}