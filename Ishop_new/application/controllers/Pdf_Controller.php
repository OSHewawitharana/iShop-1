<?php
/**
* 
*/
class Pdf_controller extends CI_Controller
{
	
	public function __construct()
	{
		$this->load->library('pdf_Library');
		parent:: __construct();
		$this->load->model('Model_pdf');
	}

	public function generate_item_report(){

		$data['items'] = $this->Model_pdf->select_items();
		$this->load->view('items_report', $data);
	}

	public function generate_owner_report(){

		$data['owners'] = $this->Model_pdf->select_owners();
		$this->load->view('owners_report', $data);
	}

}