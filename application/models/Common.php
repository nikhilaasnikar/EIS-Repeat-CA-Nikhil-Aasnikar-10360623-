<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Common extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }
		/*Function will check username and password user enter is correct and returns the value accordingly*/
      function user_login($user_name,$password){
       $this->db->select('*');
       $this->db->from('tbl_users');
       $this->db->where('user_email',$user_name);
       $this->db->where('user_password',$password);      
       $query =$this->db->get();

       return $query->result();
   
     }
	/*Function to check email already exists in in DB or not*/
     function check_email_exists($email_id){
       $this->db->select('*');
       $this->db->where('user_email',$email_id);
       $query  = $this->db->get('tbl_users');
       $return = true;
       if($query->num_rows() > 0){ 
         $return = false; }
       return $return;
    }
	/*Function will add new entry to tbl_user when user register to the system*/
	function add_user($data)
     {

        $this->db->insert('tbl_users',$data['val']);
        $insert_id = $this->db->insert_id();
        return  $insert_id;

     }
	 
	 function user_bb_details($destination_id){
       $this->db->select('user_email');
       $this->db->from('tbl_users');
       $this->db->where('user_bb_id',$destination_id);      
       $query =$this->db->get();

       return $query->result();
   
     }
	 
	  function fetch_all_bnbs()
        {
            $this->db->select('*');
            $this->db->from('tbl_bnb');
            $query = $this->db->get();
            return $query->result();
        }
		
		 function fetch_single_bnbs($bnb_id)
            {
               $this->db->select('*');
            $this->db->from('tbl_bnb');
            $this->db->where('bnb_id', $bnb_id);
            $query = $this->db->get();
            return $query->row();
          
          
            }

            function weather_update($weatherArr,$city){
              $this->db->where('we_city', $city);
              $this->db->delete('tbl_weather');
              $insert_id = $this->db->insert_batch('tbl_weather',$weatherArr);
              return  $insert_id;
              }


        function select_cities(){
            $this->db->select('*');
            $this->db->from('tbl_cities');
            $query = $this->db->get();
            return $query->result_array();
          }

          
         function fetch_all_cities()
        {
            $this->db->select('*');
            $this->db->from('tbl_cities');
            $query = $this->db->get();
            return $query->result();
        }

         function fetch_all_landscapes()
            {
            $this->db->select('*');
            $this->db->from('tbl_landscape');
            $query = $this->db->get();
            return $query->result();
          
          
            }
            function fetch_all_costs()
            {
            $this->db->select('*');
            $this->db->from('tbl_bnb');
            $query = $this->db->get();
            return $query->result();
          
          
            } 

           

           function fetch_all_bnb_search_datas($city="",$drplandscape="",$mnmcost="",$mnmtemp="",$mxmtemp=""){
                $this->db->select('*');
                $this->db->from('tbl_bnb');
               
               if($city!=0)
               {
                   $this->db->join('tbl_cities','tbl_bnb.city = tbl_cities.city_id');
                $this->db->where('city',$city);  
                }
                
                if($drplandscape!=0)
                 {
                     $this->db->join('tbl_landscape','tbl_bnb.landscape = tbl_landscape.landscape_id');
                $this->db->where('landscape_id',$drplandscape); 
                } 
                if($mnmcost==1)
                 {
                     $this->db->where('cost >=', 0);
                     $this->db->where('cost <=', 500);
                }elseif($mnmcost==2){
                     $this->db->where('cost >=', 500);
                     $this->db->where('cost <=', 1000);
                }elseif($mnmcost==3){
                     $this->db->where('cost >=', 1000);
                     $this->db->where('cost <=', 1500);
                }elseif($mnmcost==4){
                     $this->db->where('cost >=', 1500);
                     $this->db->where('cost <=', 2000);
                }elseif($mnmcost==5){
                     $this->db->where('cost >=', 2000);
                }
                
                if($mnmtemp!='' && $mxmtemp!=''){
                    
                    $this->db->join('tbl_weather','tbl_bnb.city = tbl_weather.we_city');
                    $this->db->where('we_min >=',$mnmtemp);
                    $this->db->where('we_max <=',$mxmtemp); 
                    $this->db->group_by('tbl_bnb.bnb_id'); 
                    
                }elseif($mnmtemp!='' && $mxmtemp=='')
                 {
                     $this->db->join('tbl_weather','tbl_bnb.city = tbl_weather.we_city');
                $this->db->where('we_min >=',$mnmtemp); 
                $this->db->group_by('tbl_bnb.bnb_id');  
                } 
                elseif($mxmtemp!='' && $mnmtemp=='')
                 {
                     $this->db->join('tbl_weather','tbl_bnb.city = tbl_weather.we_city');
                $this->db->where('we_max <=',$mxmtemp); 
                $this->db->group_by('tbl_bnb.bnb_id'); 
                } 
                
             
               
              
               
                  $query = $this->db->get();
                  return $query->result();
                  // return ;
                   
           }
                  
                  // return $query->result();
                  
                  
                  function fetch_city_name($city_id)
            {
               $this->db->select('*');
            $this->db->from('tbl_cities');
            $this->db->where('city_id', $city_id);
            $query = $this->db->get();
            $result=$query->row();
            if($result){
                return $result->city_name;
            }else{
               return false; 
            }
          
            }
            
            
            
           
      
 

} ?>
