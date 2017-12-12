<?php

class ProfileModel extends CI_Model
{


    public function insertData()
    {

        $username = $this->input->post('username');

      $this->db->where('user_name',$username);
      $result=$this->db->get('owner');


      if($result->num_rows()>0) {
          $this->session->set_flashdata('error','Username is already exists.!');
              redirect('profileController/insertData');
      }
      else{


          $config['upload_path'] = './uploads';
          $config['allowed_types'] = '*';
          $this->load->library('upload',$config);
          $this->upload->do_upload('file_name');
          $file_name = $this->upload->data();

          $data = array(
               'user_name' => $this->input->post('username'),
               'password' => sha1($this->input->post('password')),
               'full_name' => $this->input->post('fullname'),
               'NIC' => $this->input->post('NIC'),
               'contact_number' => ($this->input->post('contactNumber')),
               'address' => ($this->input->post('address')),
              'image' => $file_name['file_name'],
           );
           $this->db->insert('owner', $data);


           $username = $this->input->post('username');
           $this->db->where('user_name',$username);
           $result=$this->db->get('owner');

           $data1=$result->result_array();

           $data2 = array(
               'owner_user_id' => $data1["0"]['user_id'],
               'shop_name' => $this->input->post('shopName'),
               'shop_category' => $this->input->post('shopCategory'),
               'shop_contact_number' => $this->input->post('contactNumber'),
//               'shop_number' => ($this->input->post('shopNumber')),
               'shop_address' => ($this->input->post('shopAddress')),
               'description' => ($this->input->post('description')),
           );
          $this->db->insert('shop', $data2);
          $this->session->set_flashdata('success','You have successfully registered.!');
          redirect('login/loginUser');
    }



    }


    public function editData($id)
    {


        $data = array(
            'full_name' => $this->input->post('fullname'),
            'NIC' => $this->input->post('NIC'),
            'contact_number' => ($this->input->post('contactNumber')),
            'address' => ($this->input->post('address')),
            'image'=>($this->input->post('wizard-picture')),
        );
        $data1=array(
            'shop_name' => $this->input->post('shopName'),
            'shop_category' => $this->input->post('shopCategory'),
            'shop_contact_number' => $this->input->post('contactNumber'),
            'shop_number' => ($this->input->post('shopNumber')),
            'shop_address' => ($this->input->post('shopAddress')),
            'description' => ($this->input->post('description')),
        );
        $this->db->where('user_id',$id);
        $this->db->update('owner',$data);

        $query="select shop_id from shop where owner.user_id=$id";
        $result=$query->result();

        $this->db->where('user_id',$result);
        $this->db->update('shop',$data1);

    }

    public function getId($username){
        $query="select user_id from owner where user_name=$username";
        $result=$query->result();
        var_dump($result);
        return $result;
    }


    public function getData($id){
        $query="select * from owner where user_id=$id";
        $result=$query->result($query);
        return $result;

    }
}
?>