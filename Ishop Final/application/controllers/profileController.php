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
            $this->load->view('header');
            $this->load->view('profile');
            $this->load->view('footer');
        }

        public function insertData()
        {

//            $this->form_validation->set_rules('username', 'User Name', 'trim|required|alpha|min_length[3]|max_length[30]');
            $this->form_validation->set_rules('username', 'Username', 'required|valid_email|is_unique[owner.user_name]');
            $this->form_validation->set_rules('password', 'Password','required|min_length[5]','matches[cpassword]');
            $this->form_validation->set_rules('cpassword', 'Confirm Password','required|min_length[5]');

            //validation
            $this->form_validation->set_rules('fullname', 'Full Name','required');
            $this->form_validation->set_rules('NIC', 'NIC','required','trim|xss_clean|callback_checkNIC');
            $this->form_validation->set_rules('address', 'Address');
            $this->form_validation->set_rules('contactNumber', 'Contact Number','callback_valid_phone_number_or_empty');

            //validation
            $this->form_validation->set_rules('shopName', 'Shop Name','required');
            $this->form_validation->set_rules('shopCategory', 'Shop Category','required');
            $this->form_validation->set_rules('contactNumber', 'Contact Number','callback_valid_phone_number_or_empty');
//            $this->form_validation->set_rules('shopNumber', 'Shop Number', 'trim');
            $this->form_validation->set_rules('shopAddress', 'shop Address');
            $this->form_validation->set_rules('description', 'Description');


            if ($this->form_validation->run() === TRUE) {


                //load the model to connect to the db
                $this->load->model('profileModel');

                $this->profileModel->insertData();
                redirect('login/loginUser');

            } else {

//                $this->session->set_flashdata('error', 'validation error.!');
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
                $this->form_validation->set_rules('fullname', 'Full Name','required');
                $this->form_validation->set_rules('NIC', 'NIC','required','trim|xss_clean|callback_checkNIC');
                $this->form_validation->set_rules('address', 'Address');
                $this->form_validation->set_rules('contactNumber', 'Contact Number','callback_valid_phone_number_or_empty');

                //validation
                $this->form_validation->set_rules('shopName', 'Shop Name','required');
                $this->form_validation->set_rules('shopCategory', 'Shop Category','required');
                $this->form_validation->set_rules('contactNumber', 'Contact Number','callback_valid_phone_number_or_empty');
//            $this->form_validation->set_rules('shopNumber', 'Shop Number', 'trim');
                $this->form_validation->set_rules('shopAddress', 'shop Address');
                $this->form_validation->set_rules('description', 'Description');


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

        function valid_phone_number_or_empty($value)
        {
            $value = trim($value);
            if ($value == '') {
                return TRUE;
            }
            else
            {
                if (preg_match('/^\(?[0-9]{3}\)?[-. ]?[0-9]{3}[-. ]?[0-9]{4}$/', $value))
                {
                    return preg_replace('/^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/', '($1) $2-$3', $value);
                }
                else
                {
                    $this->form_validation->set_message('valid_phone_number_or_empty', 'The phone number you entered is not valid');
                }
            }
        }



        public function checkNIC($nic)
        {
            if (preg_match($nic ==='' || (bool) preg_match('/^\d{9}[V]$/', $nic))) {
                return true;
            } else {
            $this->form_validation->set_message('checkNIC', 'The NIC is not valid');
            }
        }




        function getImage($id)
        {
            $this->session->userdata('is_logged_in');
            $query = $this->db->query("SELECT * FROM users WHERE  id ='$id' ");
            if($query->num_rows()==0)
                die("Picture not foun!");
            else{
                $row = $query->fetch_assoc();
                $q = $row['profile_picture'];
                return true;
            }
        }

    }
