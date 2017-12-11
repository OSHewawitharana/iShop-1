<?php
class itemController extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('itemModel');
    }

//    function to add items
    public function addItem()
    {
        $this->form_validation->set_rules('itemCategory', 'Item Category');
        $this->form_validation->set_rules('itemName', 'Item Name','required','is_unique[shop_item.item_name]');
        $this->form_validation->set_rules('quantity', 'Quantity' ,'callback_validate_quantity', 'required');
        $this->form_validation->set_rules('measuring_unit', 'Measuring Unit', 'required');
        $this->form_validation->set_rules('price', 'Price','callback_validate_money');
        $this->form_validation->set_rules('description','Description');

        if ($this->form_validation->run() === TRUE) {
            //load the model to connect to the db
            $this->load->model('itemModel');
            $this->itemModel->insertItem();
            $this->session->set_flashdata('success', 'successfully added.!');
            redirect('itemController/addItem' , 'refresh');

        } else {
            $data['cat']=$this->itemModel->getSubCategory();
            $data['unit']=$this->itemModel->getMeasuringUnit();
            $this->load->view('addItem',$data);
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
        $records = $this->itemModel->viewItems();
        $this->load->view('viewItems', ['records' => $records]);
    }

//function to edit/update previously inserted items
    public function editItems($id)
    {
        if (isset($_POST['update'])) {
            if ($this->itemModel->update($id)) {
                $this->itemModel->update($id);
                $this->session->set_flashdata('success', 'Item is successfully updated');
                redirect('itemController/editItems/' . $id, 'refresh');
            } else {
                $this->session->set_flashdata('error', 'Item is not updated');
                redirect('itemController/editItems/' . $id, 'refresh');
            }
        }
        $data['usrrow'] = $this->itemModel->edit($id);
        $data['cat'] = $this->itemModel->getSubCategory();
        $data['unit'] = $this->itemModel->getMeasuringUnit();
        $this->load->view('editItems', $data);
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

    public function getItemNames()
    {
        $searchkey = $this->input->post('search');
        $this->load->model('itemModel');

        $data['records'] = $this->itemModel->Search($searchkey);
        $this->load->view('viewItems', $data);
    }

    public function addItemCategory()   {

        $cat=$this->itemModel->getShopCategory();
        $result=$this->itemModel->getShopCategoryId($cat);

        $shopcatid=$result['0']['shop_category_id'];
        $data=array(
            'item_category' => $this->input->post('itemcategory'),
            'shop_category_shop_category_id' =>$shopcatid
        );

        $this->form_validation->set_rules('itemcategory', 'Item Category','required','is_unique[item_category.item_category]');
        if ($this->form_validation->run() === TRUE) {
            $this->itemModel->addItemCatModel($data);
            $this->session->set_flashdata('success', 'successfully added new item category.!');
            redirect('itemController/addItem' , 'refresh');

        } else {
            $this->load->view('addItemCategory');
        }

    }

    public function addNewUnit()   {

        $cat=$this->itemModel->getShopCategory();
        $result=$this->itemModel->getShopCategoryId($cat);
        $shopcatid=$result["0"]['shop_category_id'];

        $data=array(
            'measuring_unit' => $this->input->post('unit'),
            'shop_category_shop_category_id' =>$shopcatid
        );

        $this->form_validation->set_rules('unit', 'Measuring Unit','required','is_unique[measuring_unit.measuring_unit]');


        if ($this->form_validation->run() === TRUE) {

            $this->itemModel->addUnitModel($data);
            $this->session->set_flashdata('success', 'successfully added new unit of measurement.!');
            redirect('itemController/addItem' , 'refresh');

        } else {

            $this->load->view('addUnit');
        }

    }











}