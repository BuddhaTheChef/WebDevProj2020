<?php
//application/models/Users_model.php
class Users_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }
   
    public function get_users($id = 0)
    {
        if ($id==0)
        {//no id, retrieve all
            $query = $this->db->get('Users');
            return $query->result_array();
        }else{//retrieve individual record
            $query = $this->db->get_where('Users', array('usersID' => $id));
            return $query->row_array();
        }
    }//end get_users()  
   

    public function create_user()
    {
        $data = array(
            'FirstName' => $this->input->post('FirstName'),
            'LastName' => $this->input->post('LastName'),
            'Email' => $this->input->post('Email'),
            'Bio' => $this->input->post('Bio'),
            'Username' => $this->input->post('Username'),
            'Password' => $this->input->post('Password')
        );

        if($this->db->insert('Users', $data))
        {//return slug - send to view page
            return $this->db->insert_id();
        }else{//return false
            return false;
        }
    }//end create_user()
   
    public function update_user()
    {
        $data = array(
            'FirstName' => $this->input->post('FirstName'),
            'LastName' => $this->input->post('LastName'),
            'Email' => $this->input->post('Email'),
            'Bio' => $this->input->post('Bio'),
            'Username' => $this->input->post('Username'),
            'Password' => $this->input->post('Password')
        );

        $this->db->where('usersID', $this->input->post('usersID'));
        if($this->db->update('Users', $data))
        {//update successful - send to view page
            return $this->input->post('usersID');
        }else{//return false
            return false;
        }

    }//end update_user()
   
    public function delete_user($id=0)
    {
        if($this->db->delete('Users', array('usersID' => $id)))
        {//delete successful!
            return true;
        }else{//return false
            return false;
        }
 
    }//end delete_user()
   
}//end Users_model