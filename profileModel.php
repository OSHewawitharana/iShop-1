<<<<<<< HEAD
<?php

class ProfileModel extends CI_Model
{


    public function insertData()
    {
        $username = $this->input->post('username');

        $this->db->where('username',$username);
        $result=$this->db->get('credentials');


       if($result->num_rows()>0){


           $this->db->select('membershipId');
           $this->db->where('username',$username);
           $result=$this->db->get('credentials');

           $data =$result->result_array();

           $this->db->select('*');
           $this->db->from('shopDetails');
           $this->db->where('membershipId',$data["0"]['membershipId']);
           $result1=$this->db->get();


           if($result1->num_rows()>0){
               $this->session->set_flashdata('error','Username is already exists.!');
               redirect('profileController/index');
           }else{
               $data2 = array(
                   'membershipId' => $data["0"]['membershipId'],
                   'shopName' => $this->input->post('shopName'),
                   'shopCategory' => $this->input->post('shopCategory'),
                   'contactNumber' => $this->input->post('contactNumber'),
                   'shopNumber' => ($this->input->post('shopNumber')),
                   'shopAddress' => ($this->input->post('shopAddress')),
                   'description' => ($this->input->post('description')),

               );

               $this->db->insert('shopdetails', $data2);
               $this->session->set_flashdata('success','You are successfully registered.!');
               redirect('profileController/index');

           }
       }else{
           $data = array(
               'username' => $this->input->post('username'),
               'password' => ($this->input->post('password')),
               'fullName' => $this->input->post('fullname'),
               'NIC' => $this->input->post('NIC'),
               'contactNumber' => ($this->input->post('contactNumber')),
               'address' => ($this->input->post('address')),
               'image'=>($this->input->post('wizard-picture')),
           );
           $this->db->insert('credentials', $data);


           $username = $this->input->post('username');
           $this->db->where('username',$username);
           $result=$this->db->get('credentials');

           $data4=$result->result_array();

           $data2 = array(
               'membershipId' => $data4["0"]['membershipId'],
               'shopName' => $this->input->post('shopName'),
               'shopCategory' => $this->input->post('shopCategory'),
               'contactNumber' => $this->input->post('contactNumber'),
               'shopNumber' => ($this->input->post('shopNumber')),
               'shopAddress' => ($this->input->post('shopAddress')),
               'description' => ($this->input->post('description')),
           );

           $this->db->insert('shopdetails', $data2);
           $this->session->set_flashdata('success','You have successfully registered.!');
           redirect('profileController/index');
       }

    }


    public function editData($id)
    {


        $data = array(
            'fullName' => $this->input->post('fullname'),
            'NIC' => $this->input->post('NIC'),
            'contactNumber' => ($this->input->post('contactNumber')),
            'address' => ($this->input->post('address')),
            'image'=>($this->input->post('wizard-picture')),
        );
        $data1=array(
            'shopName' => $this->input->post('shopName'),
            'shopCategory' => $this->input->post('shopCategory'),
            'contactNumber' => $this->input->post('contactNumber'),
            'shopNumber' => ($this->input->post('shopNumber')),
            'shopAddress' => ($this->input->post('shopAddress')),
            'description' => ($this->input->post('description')),
        );
        $this->db->where('userId',$id);
        $this->db->update('ownerDetails',$data);

        $query="select shopId from shopDetails where ownerDetails.userId=$id";
        $result=$query->result();

        $this->db->where('userId',$result);
        $this->db->update('shopDetails',$data1);

    }

    public function getId($username){
        $query="select userId from ownerDetails where userName=$username";
        $result=$query->result();
        var_dump($result);
        return $result;
    }


    public function getData($id){
        $query="select * from ownerDetails where userId=$id";
        $result=$query->result($query);
        return $result;

    }
}
=======
<?php

class ProfileModel extends CI_Model
{


    public function insertData()
    {
        $username = $this->input->post('username');

        $this->db->where('username',$username);
        $result=$this->db->get('credentials');


       if($result->num_rows()>0){


           $this->db->select('membershipId');
           $this->db->where('username',$username);
           $result=$this->db->get('credentials');

           $data =$result->result_array();

           $this->db->select('*');
           $this->db->from('shopDetails');
           $this->db->where('membershipId',$data["0"]['membershipId']);
           $result1=$this->db->get();


           if($result1->num_rows()>0){
               $this->session->set_flashdata('error','Username is already exists.!');
               redirect('profileController/index');
           }else{
               $data2 = array(
                   'membershipId' => $data["0"]['membershipId'],
                   'shopName' => $this->input->post('shopName'),
                   'shopCategory' => $this->input->post('shopCategory'),
                   'contactNumber' => $this->input->post('contactNumber'),
                   'shopNumber' => ($this->input->post('shopNumber')),
                   'shopAddress' => ($this->input->post('shopAddress')),
                   'description' => ($this->input->post('description')),

               );

               $this->db->insert('shopdetails', $data2);
               $this->session->set_flashdata('success','You are successfully registered.!');
               redirect('profileController/index');

           }
       }else{
           $data = array(
               'username' => $this->input->post('username'),
               'password' => ($this->input->post('password')),
               'fullName' => $this->input->post('fullname'),
               'NIC' => $this->input->post('NIC'),
               'contactNumber' => ($this->input->post('contactNumber')),
               'address' => ($this->input->post('address')),
               'image'=>($this->input->post('wizard-picture')),
           );
           $this->db->insert('credentials', $data);


           $username = $this->input->post('username');
           $this->db->where('username',$username);
           $result=$this->db->get('credentials');

           $data4=$result->result_array();

           $data2 = array(
               'membershipId' => $data4["0"]['membershipId'],
               'shopName' => $this->input->post('shopName'),
               'shopCategory' => $this->input->post('shopCategory'),
               'contactNumber' => $this->input->post('contactNumber'),
               'shopNumber' => ($this->input->post('shopNumber')),
               'shopAddress' => ($this->input->post('shopAddress')),
               'description' => ($this->input->post('description')),
           );

           $this->db->insert('shopdetails', $data2);
           $this->session->set_flashdata('success','You have successfully registered.!');
           redirect('profileController/index');
       }

    }


    public function editData($id)
    {


        $data = array(
            'fullName' => $this->input->post('fullname'),
            'NIC' => $this->input->post('NIC'),
            'contactNumber' => ($this->input->post('contactNumber')),
            'address' => ($this->input->post('address')),
            'image'=>($this->input->post('wizard-picture')),
        );
        $data1=array(
            'shopName' => $this->input->post('shopName'),
            'shopCategory' => $this->input->post('shopCategory'),
            'contactNumber' => $this->input->post('contactNumber'),
            'shopNumber' => ($this->input->post('shopNumber')),
            'shopAddress' => ($this->input->post('shopAddress')),
            'description' => ($this->input->post('description')),
        );
        $this->db->where('userId',$id);
        $this->db->update('ownerDetails',$data);

        $query="select shopId from shopDetails where ownerDetails.userId=$id";
        $result=$query->result();

        $this->db->where('userId',$result);
        $this->db->update('shopDetails',$data1);

    }

    public function getId($username){
        $query="select userId from ownerDetails where userName=$username";
        $result=$query->result();
        var_dump($result);
        return $result;
    }


    public function getData($id){
        $query="select * from ownerDetails where userId=$id";
        $result=$query->result($query);
        return $result;

    }
}
>>>>>>> 0a8b521cf6e8a747913a0eb0af08dcb59903bf60
?>