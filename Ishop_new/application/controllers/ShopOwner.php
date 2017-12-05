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

}