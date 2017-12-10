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
		$report_type = $_POST['reportType'];

		$date = date_create_from_format("m/d/Y", $fromdate);
		$from = date_format($date, "Y-m-d");
		$date1 = date_create_from_format("m/d/Y", $todate);
		$to = date_format($date1, "Y-m-d");

		if ($report_type == 'Type1') {
			$data['items'] = $this->Model_pdf->select_items_type1($from,$to);
			$this->load->view('items_report_type1', $data);

		}elseif ($report_type == 'Type2') {
			$data['items'] = $this->Model_pdf->select_items_type2($from,$to);
			$this->load->view('items_report_type2', $data);

		}elseif ($report_type == 'Type3') {
			$data['items'] = $this->Model_pdf->select_items_type3($from,$to);
			$this->load->view('items_report_type3', $data);

		}elseif ($report_type == 'Type4') {
			$data['items'] = $this->Model_pdf->select_items_type4($from,$to);
			$this->load->view('items_report_type4', $data);
		}else{
			// Enter a print message
		}

		// $data['items'] = $this->Model_pdf->select_items($from,$to);
		// $this->load->view('items_report', $data);
	}

	public function generate_owner_report(){

		$data['owners'] = $this->Model_pdf->select_owners();
		$this->load->view('owners_report', $data);
	}

}