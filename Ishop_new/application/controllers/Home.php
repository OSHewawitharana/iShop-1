<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{	
		$this->load->view('newhome');
	}


	public function login()
	{	
		$this->load->view('Login');
	}


	public function register()
	{	
		$this->load->view('Register');
	}

	public function about()
	{	
		$this->load->view('About');
	}

	public function contact()
	{	
		$this->load->view('Contact');
	}

	public function services()
	{	
		$this->load->view('Services');
	}

}
