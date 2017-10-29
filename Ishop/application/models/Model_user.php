<?php

/**
* 
*/
class Model_user extends CI_Model
{
	
	function insertUserdata()
	{
		$data = array(

			'Fname' => $this->input->post('fname',TRUE), 
			'Lname' => $this->input->post('lname',TRUE),
			'Address' => $this->input->post('address',TRUE),
			'Contact_No' => $this->input->post('contactno',TRUE),
			'UserType' => $this->input->post('user_type',TRUE),
			'Gender' => $this->input->post('gender',TRUE),
			'Email' => $this->input->post('email',TRUE),
			'Password' => sha1($this->input->post('password',TRUE))

		);

		return $this->db->insert('employee',$data);

	}

	function LoginUser(){

		$email = $this->input->post('email');
		$password = sha1($this->input->post('password'));

		$this->db->where('email',$email);
		$this->db->where('password',$password);

		$respond = $this->db->get('employee');

		if ($respond->num_rows()==1) {
				return $respond->row(0);
			}

		else{

			return FALSE;

		}
	}

	function RemoveUser($user_id) {

        $this->db->where('id',$user_id);
        $this->db->delete('employee');
    }

   	function getUsers() {
		
		$this->db->select('*');
		$this->db->from('employee');
		$this->db->order_by('id');
		$query = $this->db->get();
        return $query->result(); 
        
    }

    function getProjects() {
		
		$this->db->select('*');
		$this->db->from('projects');
		$this->db->order_by('id');
		$query = $this->db->get();
        return $query->result(); 
        
    }

    public function edit($stu_id) {
        
        $this->db->where('id',$stu_id);
        $query = $this->db->get_where('employee', array('id' => $stu_id));
    
       	return $query->row();
       
    }

    public function update($stu_id) {
        
        $data = array(

	        'Fname' => $this->input->post('fname',TRUE), 
			'Lname' => $this->input->post('lname',TRUE),
			'Address' => $this->input->post('address',TRUE),
			'Contact_No' => $this->input->post('contactno',TRUE),
			'UserType' => $this->input->post('user_type',TRUE),
			'Gender' => $this->input->post('gender',TRUE),
			'Email' => $this->input->post('email',TRUE)
        );

        $this->db->where('id',$stu_id);
        $this->db->update('employee',$data);

        return $stu_id;
    }

    function Search($searchkey){

    	$this->db->select('*');
		$this->db->from('employee');

		$this->db->like('Fname', $searchkey);
		$this->db->or_like('Lname', $searchkey);
		$this->db->or_like('Address', $searchkey);
		$this->db->or_like('Contact_No', $searchkey);
		$this->db->or_like('UserType', $searchkey);
		$this->db->or_like('Gender', $searchkey);
		$this->db->or_like('Email', $searchkey);

		$query = $this->db->get();
        return $query->result();
	}

}