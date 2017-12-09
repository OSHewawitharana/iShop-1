<?php
class itemController extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
    }

//    function to add items
    public function addItem()
    {
        $this->form_validation->set_rules('itemCategory', 'Item Category');
        $this->form_validation->set_rules('itemName', 'Item Name','required');
        $this->form_validation->set_rules('quantity', 'Quantity' ,'callback_validate_quantity', 'required');
        $this->form_validation->set_rules('measuring_unit', 'Measuring Unit', 'required','numeric');
        $this->form_validation->set_rules('price', 'Price','callback_validate_money');
        $this->form_validation->set_rules('description','Description');




        $this->load->model('itemModel');
        $result1=$this->itemModel->getCategory();
//        var_dump($result1);


        if ($this->form_validation->run() === TRUE) {
            //load the model to connect to the db


            $this->load->model('itemModel');
            $this->itemModel->insertItem();
            $this->session->set_flashdata('success', 'successfully added.!');
            redirect('itemController/addItem' , 'refresh');


        } else {
            $result=$result1[0]['shop_category'];
            $newResult = trim($result, " ");

            if(strcmp($newResult ,"Books and Stationary")==0 ){
                $data['cat'] = array('books', 'stationary', 'letter covers',);
                $this->load->view('addItem',$data);

            }elseif(strcmp($newResult, "Electronics")==0) {
                $data['cat'] = array(' Cell Phones & Accessories','Cameras & Photo','Computers & Tablets','Car Audio, Video & GPS','iPhone','iPad','TV, Audio','Video Games & Consoles');
                $this->load->view('addItem',$data);
            }

        }
    }

    public function validate_quantity ($input)
    {
        if (preg_match('/^[0-9]*\.?[0-9]+/', $input)) {
            return true;
        } else {
            $this->form_validation->set_message('validate_quantity', 'Please enter valid value for quantity!');
            return false;
        }
    }

    public function validate_money ($input) {
        if(preg_match('/^[0-9]*\.?[0-9]/', $input)){
            return true;
        } else {
            $this->form_validation->set_message('validate_money','Please enter valid value for price!');
            return false;
        }
    }

//    function to view items
    public function viewItems()
    {
        $this->load->model('itemModel');
        $records = $this->itemModel->viewItems();
        $this->load->view('viewItems', ['records' => $records]);

    }


//function to edit/update previously inserted items
    public function editUser($id) {

        $this->load->model('itemModel');

        if (isset($_POST['update'])) {
            if ($this->itemModel->update($id)) {
                $this->session->set_flashdata('success','Item is successfully updated');
                redirect('itemController/editUser/'.$id , 'refresh');
            } else {
                $this->session->set_flashdata('error','Item is not updated');
                redirect('itemController/editUser/'.$id , 'refresh');
            }
        }

        $this->load->model('itemModel');
        $result=$this->itemModel->getCategory();
        $data['rows'] = $this->itemModel->edit($id);

        $result=$result[0]['shop_category'];
        $newResult = trim($result, " ");

        if(strcmp($newResult ,"Books and Stationary")==0 ){
            $data['cat'] = array('books', 'stationary', 'letter covers',);
            $this->load->view('editItems',$data);

        }elseif(strcmp($newResult, "Electronics")==0) {
            $data['cat'] = array(' Cell Phones & Accessories','Cameras & Photo','Computers & Tablets','Car Audio, Video & GPS','iPhone','iPad','TV, Audio','Video Games & Consoles');
            $this->load->view('editItems',$data);
        }


    }

//    function to delete an item
    public function deleteItem($id) {

        $this->load->model('itemModel');
        $this->itemModel->delete($id);
        $this->session->set_flashdata('success','Item is successfully deleted');
        redirect('itemController/viewItems' , 'refresh');



    }


    public function searchItem()
    {
        $searchkey = $this->input->post('search');
        $this->load->model('itemModel');

        $data['records'] = $this->itemModel->Search($searchkey);
        $this->load->view('viewItems', $data);
    }









}