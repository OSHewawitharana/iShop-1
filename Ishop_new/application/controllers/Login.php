<?php

/**
* 
*/
class Login extends CI_Controller
{
	
	function LoginUser()
	{
		
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'required');


		if ($this->form_validation->run() == FALSE){
			
			$this->load->view('Login');
       	}

        else{

          	$this->load->model('Model_user');
          	$result = $this->Model_user->LoginUser();

          	if ($result != FALSE) {

          		$user_data = array(
                'user_id' => $result->user_id,
                'full_name' => $result->full_name,
                'nic'=>$result->nic,
                'address' => $result->address,
                'contact_number' => $result->contact_number,
                'email' => $result->user_name,
                'loggedin' => TRUE
                
                );

          		#Starting a session with user data
          		$this->session->set_userdata($user_data);
              $this->load->view('ShopOwner');
          		
          	}

          	else{

          		$this->session->set_flashdata('errmsg','You are not still accepted by the Administration or the Email and the Password does not match!!!');
              	redirect('Home/Login');

          	}
        }
	}

    function AdminLogin()
    {
    
    $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
    $this->form_validation->set_rules('password', 'Password', 'required');


    if ($this->form_validation->run() == FALSE){
      
      $this->load->view('AdminLogin');
        }

        else{

            $this->load->model('Model_user');
            $result = $this->Model_user->AdminLogin();

            if ($result != FALSE) {

              $user_data = array(
                'admin_id' => $result->admin_id,
                'full_name' => $result->full_name,
                'email'=>$result->email,
                'contact_no' => $result->contact_no,
                'loggedin' => TRUE
                
                );

              #Starting a session with user data
              $this->session->set_userdata($user_data);
              $this->load->view('admin');
              
            }

            else{

              $this->session->set_flashdata('errmsg','Wrong Email & Password!!!');
                redirect('Home/Login');

            }
        }
  }

  public function adminView(){
    $this->load->view('admin');
  }

  public function userView(){
    $this->load->view('ShopOwner');
  }

	public function logout(){
		
		session_unset();
		redirect(base_url());
	}
}