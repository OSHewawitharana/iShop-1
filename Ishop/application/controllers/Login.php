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
          			'user_id' => $result->id,
          			'fname' => $result->Fname,
          			'lname' => $result->Lname,
                'address' => $result->Address,
                'contactno' => $result->Contact_No,
                'shop' => $result->Shop,
                'gender' => $result->Gender,
          			'email' => $result->Email,
          			'loggedin' => TRUE
                
          			);

          		#Starting a session with user data
          		$this->session->set_userdata($user_data);
              $this->load->view('newhome');

              // $type = $this->session->userdata('user_type');

              // switch ($type) {
              //   case 'manager':
              //     redirect('Manager/Home');
              //     break;
              //   case 'accountant':
              //     redirect('Accountant/Home');
              //     break;
              //   case 'site officer':
              //     redirect('SiteOfficer/Home');
              //     break;
              //   case 'customer':
              //     redirect('Customer/Home');
              //     break;
              //   default:
              //     # code...
              //     break;
              // }
          		
          		#$this->session->set_flashdata('welcome','Welcome back..');
          		#$this->load->view('Admin/dashboard');  We can use this method also, direct loading the view
              	#redirect('Manager/index');
          		
          	}

          	else{

          		$this->session->set_flashdata('errmsg','Wrong Email & Password!!!');
              	redirect('Home/Login');

          	}

        }



	}

	public function logout(){
		
		session_unset();
		redirect(base_url());
	}
}