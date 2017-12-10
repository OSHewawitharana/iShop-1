<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class DailyOffers extends CI_Controller{

	public function viewDailyOffers() {
		$this->load->model('Model_dailyoffers');
		$records = $this->Model_dailyoffers->getUsers();
		$this->load->view('DailyOffers', ['records' => $records]);
		
	}

	/*public function __construct()
    {
      parent::__construct();
      $this->load->model('Model_dailyoffers');

    }*/
    
    /*public function index() {

        $this->load->library('pagination');
        $config['base_url'] = 'http://localhost/iShop/Ishop_new/DailyOffers/index/';
        $config['total_rows'] = $this->Model_dailyoffers->getUserCount();
        $config['per_page'] = 5;
        $config['uri_segment'] = 3;
        $config['full_tag_open'] = '<ul class="pagination pagination-lg">';
        $config['full_tag_close'] = '</ul>';
        $config['attributes'] = array('class' => 'page_link');
        $config['first_link'] = 'First';
        $config['last_link'] = 'Last';
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="prev">';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="page-item active"><a href="#" class="page-link">';
        $config['cur_tag_close'] = '<span class="sr-only">(current)</span></a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $this->pagination->initialize($config);
        $data['link'] = $this->pagination->create_links();
        $data['users'] = $this->Model_dailyoffers->getUserPagintaion($config['per_page'], $page);
        $this->load->view('DailyOffers', $data);
        echo "string";
        
    }*/

}

 ?>