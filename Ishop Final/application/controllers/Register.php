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

			$this->load->view('profile');
       	}

       	#If tha validations passes --> load the model 'Model_user[insertUserdata function]'
        else{

                //set the validations for image
                $config['upload_path']='./uploads/';              //image path
                $config['allowed_types'] = 'gif|jpg|png|jpeg';
                $config['max_size']  = 100;
                $config['max_width']  = 200;
                $config['max_height']  = 220;
                $this->load->library('upload',$config);
                //check image is uploaded to uploads folder or not
                if ( ! $this->upload->do_upload('wizard-picture'))
                {
                    //display errors for unsuccessful upload
                    $error = array('error' => $this->upload->display_errors());

                } else {
                    //upload image to the folder
                    $data = array('upload_data' => $this->upload->data());
                    $uploaded_file = $data["upload_data"]["file_name"];
                    $this->load->view('profile', $data);
                }



                $this->load->model('Model_user');
                $response = $this->Model_user->insertUserdata(); 
                //set message to be shown when registration is completed
                // $this->session->set_flashdata('success','You are registered! You can login now.');
                // redirect('users/Signup');



          // $this->load->model('Model_user');
         	// $response = $this->Model_user->insertUserdata(); 

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