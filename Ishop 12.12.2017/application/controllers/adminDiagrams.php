<?php
class adminDiagrams extends CI_Controller
{

public function __construct() {
        parent::__construct();
        $this->load->model('Model_diagrams');
        $this->load->library('form_validation');
    }

 function viewHome(){

 	$this->load->view('admin_diagram');

 }

function viewDiagrams(){

	$this->load->model('Model_diagrams');
    $results = $this->Model_diagrams->getDiagrams();
    if ($results === NULL) {
            echo json_encode('No record found');
        } else {
            echo json_encode($results);
        }

}




}
?>