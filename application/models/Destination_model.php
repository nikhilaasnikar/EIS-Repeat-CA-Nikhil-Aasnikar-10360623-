<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Destination_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }


	  /*Function will add new entry to tbl_comments when user add review*/

    public function add_comment($data=''){
        $this->db->insert('tbl_comments',$data);
        $insert_id = $this->db->insert_id();
        return  $insert_id;
     }

    /*Function will update tbl_comments entry when user add review*/

    public function update_comment($data='',$comment_id='') {    
  
        $result = $this->db->update("tbl_comments", $data, array("id" => $comment_id));  
        return count($result);  
     }  

    /*Function will update tbl_comments entry when user add review*/

    public function get_user_comment($user_id='',$destination_id='') {    
  
       $this->db->select('*');
       $this->db->from('tbl_comments');
       $this->db->where('user_id',$user_id);
	   $this->db->where('destination_id',$destination_id);   
       $query =$this->db->get();

       return $query->result();
   
     }

     /*Function will update tbl_comments entry when user add review*/

    public function get_desination_comment($destination_id='') {    
  
       $this->db->select('tbl_comments.*,tbl_users.user_name as username');
       $this->db->from('tbl_comments');
       $this->db->join("tbl_users","tbl_users.user_id=tbl_comments.user_id");
       $this->db->where('destination_id',$destination_id);   
       $query =$this->db->get();

       return $query->result();
   
     }   

     /*Function will get total of one destination's rating from  tbl_comments entry*/

    public function get_desination_total($destination_id='') {    
  
       $this->db->select_sum('rating');
       $this->db->from('tbl_comments');
       $this->db->where('destination_id',$destination_id);   
       $query =$this->db->get();
       return $query->result();
   
     }   

     /*Function will get total of one destination's rating from  tbl_comments entry*/

    public function get_rating_count($destination_id='',$parameter='') {    
  
       $this->db->select_sum('rating');
       $this->db->from('tbl_comments');
       $this->db->where('destination_id',$destination_id);
       $this->db->where('rating',$parameter);   
       $query =$this->db->get();
       return count($query->result());
   
     }  
  
  

} ?>
