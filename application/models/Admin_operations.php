<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Admin_operations extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }


       // function fetch_state_data()
       //  {
       //      $this->db->select('*');
       //      $this->db->from('tbl_states');
       //      $query = $this->db->get();
       //      return $query->result();
       //  }

       //  /* fetch data of city respective state wise */
       //  public function fetch_stateid_wise_data($state_id)
       //  {
       //      $this->db->select('*');
       //      $this->db->from('tbl_cities');
       //      $this->db->where('state_id_fk', $state_id);
       //      $query  = $this->db->get();
       //      $output = '<option value="">----------Select City----------</option>';
       //      foreach ($query->result() as $row)
       //      {
       //          $output .= '<option value="' . $row->city_id . '">' . $row->city_name . '</option>';
       //      }
       //      return $output;
       //  }

        public function insert_bnb_datas($data)
        {
           $this->db->insert("tbl_bnb",$data);
           return true;
        }

        //  public function search_city()
        // {
        //   $this->db->select('*');
        //   $this->db->from('tbl_bnb');
        //   $this->db->join('category', 'category.id = articles.id');
        //   $this->db->where(array('category.id' => 10));
           
        //   $query = $this->db->get();
        // }

        function fetch_all_bnbs()
        {
            $this->db->select('*');
            $this->db->from('tbl_bnb');
            $query = $this->db->get();
            return $query->result();
        }

         function fetch_all_cities()
        {
            $this->db->select('*');
            $this->db->from('tbl_cities');
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
            function fetch_all_landscapes()
            {
            $this->db->select('*');
            $this->db->from('tbl_landscape');
            $query = $this->db->get();
            return $query->result();
          
          
            }
            



        public function delete_bnb_data($bnb_id)
        {
            $this->db->where('bnb_id',$bnb_id);
            $this->db->delete('tbl_bnb');
            return true;
        }

        /* Update query */
        public function updatedata($data, $bnb_id)
        {
            $this->db->where('bnb_id', $bnb_id);
            $this->db->update('tbl_bnb', $data);
            return true;
        }

         /* Fetch data id wise for update */
        public function fetch_editid_data($bnb_id)
        {
            $this->db->select('*');
            $this->db->from('tbl_bnb');
            $this->db->where('bnb_id', $bnb_id);
            $query = $this->db->get();
            return $query->row();
            
        }
		
		 function fetch_city_date($city)
            {
            $this->db->select('we_date');
            $this->db->from('tbl_weather');
			$this->db->where('we_city', $city);
			$this->db->group_by('we_date'); 
            $query = $this->db->get();
            return $query->result_array();
          
          
            }
			 function fetch_city_weather($city)
            {
            $this->db->select('we_min');
            $this->db->from('tbl_weather');
			$this->db->where('we_city', $city); 
            $query = $this->db->get();
            return $query->result_array();
          
          
            }


    }
?>