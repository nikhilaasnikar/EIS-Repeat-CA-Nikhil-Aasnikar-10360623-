<?php 
class Admin_login extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }



 function login_check($username, $password)  
      {  
           $this->db->where('user_name', $username);  
           $this->db->where('user_password', $password);  
           $query = $this->db->get('tbl_users');  
           //SELECT * FROM users WHERE username = '$username' AND password = '$password'  
           if($query->num_rows() > 0)  
           {  
                return true;  
           }  
           else  
           {  
                return false;       
           }  
      }  
    }  
  ?>