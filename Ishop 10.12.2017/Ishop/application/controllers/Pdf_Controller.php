<?php
/**
* 
*/
class Pdf_controller extends CI_Controller
{
	
	public function __construct()
	{
		parent:: __construct();
		$this->load->model('Model_pdf');
		$this->load->library('pdf_Library');
	}

	public function generate_item_report(){

		$fromdate = $_POST['datepicker1'];
		$todate = $_POST['datepicker2'];

		$date = date_create_from_format("m/d/Y", $fromdate);
		$from = date_format($date, "Y-m-d");
		$date1 = date_create_from_format("m/d/Y", $todate);
		$to = date_format($date1, "Y-m-d");

		$data['items'] = $this->Model_pdf->select_items($from,$to);
		$this->load->view('items_report', $data);
	}

	public function generate_owner_report(){

		$data['owners'] = $this->Model_pdf->select_owners();
		$this->load->view('owners_report', $data);
	}

}