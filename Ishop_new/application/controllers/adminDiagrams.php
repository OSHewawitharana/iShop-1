<?php 
 
defined('BASEPATH') OR exit('No direct script access allowed'); 

class adminDiagrams extends CI_Controller { 
    
    function __construct() 
        { 
        parent::__construct(); 
        $this->load->model('Model_diagrams'); 
 
        // $this->load->library('form_validation'); 
 
        $this->load->helper('string'); 
        } 
 
    public function index() 
        { 
        $this->load->view('admin_Diagrams'); 
        } 
 
    public function getdata() 
        { 
        $data = $this->Model_diagrams->getDiagramData(); 
 
        //         //data to json 
 
        $responce->cols[] = array( 
            "id" => "", 
            "label" => "Topping", 
            "pattern" => "", 
            "type" => "string" 
        ); 
        $responce->cols[] = array( 
            "id" => "", 
            "label" => "Total", 
            "pattern" => "", 
            "type" => "number" 
        ); 
        foreach($data as $cd) 
            { 
            $responce->rows[]["c"] = array( 
                array( 
                    "v" => "$cd->item_name", //field name
                    "f" => null 
                ) , 
                array( 
                    "v" => (int)$cd->quantity, //field name
                    "f" => null 
                ) 
            ); 
            } 
 
        echo json_encode($responce); 
        } 
    }