<?php

class Register extends CI_Controller
{
	
	public function RegisterUser()
	{
            $this->form_validation->set_rules('username', 'Username', 'required|valid_email|is_unique[owner.user_name]');
            $this->form_validation->set_rules('password', 'Password', 'required|min_length[5]');
            $this->form_validation->set_rules('cPassword', 'Confirm Password', 'required|matches[password]');
            $this->form_validation->set_rules('fullname', 'Full Name', 'required');
            $this->form_validation->set_rules('NIC', 'NIC', 'required');
            $this->form_validation->set_rules('address', 'Address','required');
            $this->form_validation->set_rules('contactNumber', 'Contact Number', 'required');
            $this->form_validation->set_rules('shopName', 'Shop Name', 'required');
            $this->form_validation->set_rules('shopCategory', 'Shop Category', 'required');
            $this->form_validation->set_rules('shopcontactNumber', 'Shop Contact Number', 'required');
            $this->form_validation->set_rules('shopAddress', 'shop Address', 'required');
            $this->form_validation->set_rules('description', 'Description', 'required');


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