<<<<<<< HEAD
    <?php
    class profileController extends CI_Controller
    {

        function __construct()
        {
            parent::__construct();
//            $this->load->model('profile_model');

        }

        public function index()
        {
            $this->load->view('profile');
        }

        public function insertData()
        {


            //validation
//            $this->form_validation->set_rules('username', 'User Name', 'trim|required|alpha|min_length[3]|max_length[30]');
            $this->form_validation->set_rules('username', 'Username', 'trim|required|valid_email');
            $this->form_validation->set_rules('password', 'Password', 'trim|required');
            $this->form_validation->set_rules('cPassword', 'Confirm Password', 'trim|required|matches[password]');

            //validation
            $this->form_validation->set_rules('fullname', 'Full Name', 'trim');
            $this->form_validation->set_rules('NIC', 'NIC', 'trim|required');
            $this->form_validation->set_rules('address', 'Address', 'trim|required');
            $this->form_validation->set_rules('contactNumber', 'Contact Number', 'trim');

            //validation
            $this->form_validation->set_rules('shopName', 'Shop Name', 'trim');
            $this->form_validation->set_rules('shopCategory', 'Shop Category', 'trim|required');
            $this->form_validation->set_rules('contactNumber', 'Contact Number', 'trim');
            $this->form_validation->set_rules('shopNumber', 'Shop Number', 'trim|required');
            $this->form_validation->set_rules('shopAddress', 'shop Address', 'trim|required');
            $this->form_validation->set_rules('description', 'Description', 'trim');


            if ($this->form_validation->run() === TRUE) {


                //load the model to connect to the db
                $this->load->model('profileModel');

                $this->profileModel->insertData();

            } else {

                $this->session->set_flashdata('error', 'validation error.!');
                $this->load->view('profile');


            }


        }

        public function editProfile()
        {
            $data['title']= 'View Profile';
            $data1['username']='username';
            $this->load->view('header',$data);
            $this->load->view('editProfile',$data1);
            $this->load->view('footerOS');
        }


        public function viewProfile()
        {
            $data1['username']='username';
            $data['title']= 'View Profile';

            $this->load->model('profileModel');
          $id = $this->profileModel->getId($data1);
//            $result=$this->profileModel->getData($id);
//            return $result;

            $this->load->view('header',$data);
//          $this->load->view('navBar');
            $this->load->view('viewProfile',$data);
            $this->load->view('footerOS');
        }


        public function edit_profile()
        {
            if ($this->session->userdata('logged_in')) {
                $username = $this->session->userdata('username');

                $this->load->model('profileModel');
                $id = $this->profileModel->getId($username);


                //validation
                $this->form_validation->set_rules('fullname', 'Full Name', 'trim');
                $this->form_validation->set_rules('NIC', 'NIC', 'trim|required');
                $this->form_validation->set_rules('address', 'Address', 'trim|required');
                $this->form_validation->set_rules('contactNumber', 'Contact Number', 'trim');

                //validation
                $this->form_validation->set_rules('shopName', 'Shop Name', 'trim');
                $this->form_validation->set_rules('shopCategory', 'Shop Category', 'trim|required');
                $this->form_validation->set_rules('contactNumber', 'Contact Number', 'trim');
                $this->form_validation->set_rules('shopNumber', 'Shop Number', 'trim|required');
                $this->form_validation->set_rules('shopAddress', 'shop Address', 'trim|required');
                $this->form_validation->set_rules('description', 'Description', 'trim');


                if ($this->form_validation->run() === TRUE) {

                    //load the model to connect to the db
                    $this->load->model('profileModel');

                    $this->profileModel->editData($id);

                }else{
                    $this->session->set_flashdata('error', 'validation error.!');
                    $this->load->view('header');
                    $this->load->view('editProfile');
                    $this->load->view('footerOS');
                }


            }


        }
    }
=======
    <?php
    class profileController extends CI_Controller
    {

        function __construct()
        {
            parent::__construct();
//            $this->load->model('profile_model');

        }

        public function index()
        {
            $this->load->view('profile');
        }

        public function insertData()
        {


            //validation
//            $this->form_validation->set_rules('username', 'User Name', 'trim|required|alpha|min_length[3]|max_length[30]');
            $this->form_validation->set_rules('username', 'Username', 'trim|required|valid_email');
            $this->form_validation->set_rules('password', 'Password', 'trim|required');
            $this->form_validation->set_rules('cPassword', 'Confirm Password', 'trim|required|matches[password]');

            //validation
            $this->form_validation->set_rules('fullname', 'Full Name', 'trim');
            $this->form_validation->set_rules('NIC', 'NIC', 'trim|required');
            $this->form_validation->set_rules('address', 'Address', 'trim|required');
            $this->form_validation->set_rules('contactNumber', 'Contact Number', 'trim');

            //validation
            $this->form_validation->set_rules('shopName', 'Shop Name', 'trim');
            $this->form_validation->set_rules('shopCategory', 'Shop Category', 'trim|required');
            $this->form_validation->set_rules('contactNumber', 'Contact Number', 'trim');
            $this->form_validation->set_rules('shopNumber', 'Shop Number', 'trim|required');
            $this->form_validation->set_rules('shopAddress', 'shop Address', 'trim|required');
            $this->form_validation->set_rules('description', 'Description', 'trim');


            if ($this->form_validation->run() === TRUE) {


                //load the model to connect to the db
                $this->load->model('profileModel');

                $this->profileModel->insertData();

            } else {

                $this->session->set_flashdata('error', 'validation error.!');
                $this->load->view('profile');


            }


        }

        public function editProfile()
        {
            $data['title']= 'View Profile';
            $data1['username']='username';
            $this->load->view('header',$data);
            $this->load->view('editProfile',$data1);
            $this->load->view('footerOS');
        }


        public function viewProfile()
        {
            $data1['username']='username';
            $data['title']= 'View Profile';

            $this->load->model('profileModel');
          $id = $this->profileModel->getId($data1);
//            $result=$this->profileModel->getData($id);
//            return $result;

            $this->load->view('header',$data);
//          $this->load->view('navBar');
            $this->load->view('viewProfile',$data);
            $this->load->view('footerOS');
        }


        public function edit_profile()
        {
            if ($this->session->userdata('logged_in')) {
                $username = $this->session->userdata('username');

                $this->load->model('profileModel');
                $id = $this->profileModel->getId($username);


                //validation
                $this->form_validation->set_rules('fullname', 'Full Name', 'trim');
                $this->form_validation->set_rules('NIC', 'NIC', 'trim|required');
                $this->form_validation->set_rules('address', 'Address', 'trim|required');
                $this->form_validation->set_rules('contactNumber', 'Contact Number', 'trim');

                //validation
                $this->form_validation->set_rules('shopName', 'Shop Name', 'trim');
                $this->form_validation->set_rules('shopCategory', 'Shop Category', 'trim|required');
                $this->form_validation->set_rules('contactNumber', 'Contact Number', 'trim');
                $this->form_validation->set_rules('shopNumber', 'Shop Number', 'trim|required');
                $this->form_validation->set_rules('shopAddress', 'shop Address', 'trim|required');
                $this->form_validation->set_rules('description', 'Description', 'trim');


                if ($this->form_validation->run() === TRUE) {

                    //load the model to connect to the db
                    $this->load->model('profileModel');

                    $this->profileModel->editData($id);

                }else{
                    $this->session->set_flashdata('error', 'validation error.!');
                    $this->load->view('header');
                    $this->load->view('editProfile');
                    $this->load->view('footerOS');
                }


            }


        }
    }
>>>>>>> 0a8b521cf6e8a747913a0eb0af08dcb59903bf60
