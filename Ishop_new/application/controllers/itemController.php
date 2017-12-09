<?php
class itemController extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
//            $this->load->model('profile_model');

    }

    public function index()
    {

        $this->load->view('addItem');


    }


    public function addItem()
    {
        $this->form_validation->set_rules('itemName', 'Item Name','required');
        $this->form_validation->set_rules('itemCategory', 'Item Category');
        $this->form_validation->set_rules('price', 'price');
        $this->form_validation->set_rules('description', 'Description');


        if ($this->form_validation->run() === TRUE) {


            //load the model to connect to the db
            $this->load->model('itemModel');
            $this->itemModel->insertItem();
            $this->session->set_flashdata('success', 'successfully added.!');

            $this->load->view('addItem');

        } else {

//            $this->session->set_flashdata('error', 'validation error.!');

            $this->load->view('addItem');


        }
    }

    public function viewItems()
    {

        $this->load->model('itemModel');
        $records = $this->itemModel->viewItems();


        $this->load->view('viewItems', ['records' => $records]);


    }

    public function editItems($id)
    {


        $this->form_validation->set_rules('itemName', 'Item Name', 'required');
        $this->form_validation->set_rules('itemCategory', 'Item Category');
        $this->form_validation->set_rules('price', 'price');
        $this->form_validation->set_rules('description', 'Description');

        $this->load->model('itemModel');
        $data['row'] = $this->itemModel->edit($id);

        if ($this->form_validation->run() === TRUE) {



            //load the model to connect to the db

            $this->load->model('itemModel');
            $this->itemModel->editItems($id);

            $this->load->view('editItems', $data);
            $this->session->set_flashdata('success', 'successfully updated.!');



        } else {

//            $this->session->set_flashdata('error', 'validation error.!');

            $this->load->view('editItems', $data);


        }





//        $this->session->set_flashdata('success','Item successfully updated.!');


    }






}