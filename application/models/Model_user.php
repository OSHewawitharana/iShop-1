<?php

/**
* 
*/
class Model_user extends CI_Model
{
	
	function insertUserdata()
	{
		$data = array(
               'user_name' => $this->input->post('username'),
               'password' => sha1($this->input->post('password')),
               'full_name' => $this->input->post('fullname'),
               'NIC' => $this->input->post('NIC'),
               'contact_number' => ($this->input->post('contactNumber')),
               'address' => ($this->input->post('address')),
               'image'=>($this->input->post('wizard-picture')),
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
               'shop_contact_number' => $this->input->post('shopcontactNumber'),
               'shop_address' => ($this->input->post('shopAddress')),
               'description' => ($this->input->post('description')),
           );
          return $this->db->insert('shop', $data2);

	}

	function LoginUser(){

		$email = $this->input->post('email');
		$password = sha1($this->input->post('password'));

		$this->db->where('user_name',$email);
		$this->db->where('password',$password);
    $this->db->where('flag', 1);

		$respond = $this->db->get('owner');

		if ($respond->num_rows()==1) {
				return $respond->row(0);
			}

		else{

			return FALSE;

		}
	}

	function AdminLogin(){

		$email = $this->input->post('email');
		$password = sha1($this->input->post('password'));

		$this->db->where('email',$email);
		$this->db->where('password',$password);

		$respond = $this->db->get('admin');

		if ($respond->num_rows()==1) {
				return $respond->row(0);
			}

		else{

			return FALSE;

		}
	}

	function RemoveUser($user_id) {

    $this->db->where('owner_user_id',$user_id);
    $this->db->delete('shop');

    $this->db->where('user_id',$user_id);
    $this->db->delete('owner');
    
    }

    function AcceptUser($user_id){
      $this->db->set('flag', 1);
      $this->db->where('user_id',$user_id);
      $this->db->update('owner');
    }

   	function getUsers() {
		
		$this->db->select('*');
		$this->db->from('owner');
		$this->db->order_by('user_id');
		$query = $this->db->get();
    return $query->result(); 
        
    }

    function getRequests() {
    
    $this->db->select('*');
    $this->db->from('owner');
    $this->db->where('flag','0');
    $this->db->order_by('user_id','DESC');
    $query = $this->db->get();
    return $query->result(); 
        
    }

    public function edit($stu_id) {
        
        $this->db->where('user_id',$stu_id);
        $query = $this->db->get_where('owner', array('user_id' => $stu_id));
    
       	return $query->row();
       
    }

    public function edit2($stu_id) {
        
        $this->db->where('owner_user_id',$stu_id);
        $query = $this->db->get_where('shop', array('owner_user_id' => $stu_id));
    
        return $query->row();
       
    }

    public function update($stu_id) {

        $data = array(
               'user_name' => $this->input->post('username'),
               'full_name' => $this->input->post('fullname'),
               'nic' => $this->input->post('NIC'),
               'contact_number' => ($this->input->post('contactNumber')),
               'address' => ($this->input->post('address')),
               'image'=>($this->input->post('wizard-picture'))
           );

        $this->db->where('user_id',$stu_id);
        $this->db->update('owner',$data);

           $data2 = array(
               // 'owner_user_id' => $data1["0"]['user_id'],
               'shop_name' => $this->input->post('shopName'),
               'shop_category' => $this->input->post('shopCategory'),
               'shop_contact_number' => $this->input->post('ShopcontactNumber'),
               'shop_address' => ($this->input->post('shopAddress')),
               'description' => ($this->input->post('description')),
           );

        $this->db->where('owner_user_id',$stu_id);
        $this->db->update('shop',$data2);

        return $stu_id;

    }

    function Search($searchkey){

    $this->db->select('*');
		$this->db->from('owner');
		$this->db->like('full_name', $searchkey);
    $this->db->or_like('user_id', $searchkey);
		$this->db->or_like('nic', $searchkey);
		$this->db->or_like('address', $searchkey);
		$this->db->or_like('contact_number', $searchkey);
		$this->db->or_like('user_name', $searchkey);

		$query = $this->db->get();
        return $query->result();
	}


}