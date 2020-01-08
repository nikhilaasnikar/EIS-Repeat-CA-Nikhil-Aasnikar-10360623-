<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Admin extends CI_Controller {
	function __construct() { 
        parent::__construct(); 
         
        // Load form helper and form validation library 
        $this->load->helper('form'); 
        $this->load->library('form_validation'); 
         
       
         
        
    } 


	public function index()
	{   
	    if($this->session->userdata('admin_logged_in')==1){
          redirect(base_url() . 'admin/admin_dashboard');
          
      }
		 $this->load->view('admin_home'); 

    
  
     

  }

public function admin_dashboard()
  {   
      if($this->session->userdata('admin_logged_in')!=1){
          redirect(base_url() . 'admin/login');
          
      }
     //$this->load->view('admin_loginform'); 
   $this->load->view('admin_header');
    $this->load->view('admin_dashboard'); 
    $this->load->view('admin_footer'); 

  }





	function login()  
      {
           if($this->session->userdata('admin_logged_in')==1){
          redirect(base_url() . 'admin/admin_dashboard');
          
      }
         
        $data['title'] = 'admin login'; 

        //$this->load->view("admin_loginform", $data); 
         $this->load->view('admin_home',$data);  
      }  
	
	function login_validation()  
       {  
           $this->load->library('form_validation');  
           $this->form_validation->set_rules('username', 'Username', 'required');  
           $this->form_validation->set_rules('password', 'Password', 'required');  
           if($this->form_validation->run())  
           {  
                //true  
                $username = $this->input->post('username');  
                $password = $this->input->post('password');  
                //model function  
                $this->load->model('admin_login');  
                if($this->admin_login->login_check($username, $password))  
                {  
                     
                     $this->session->set_userdata('admin_logged_in',true);
                     $this->session->set_userdata('username',$username);  
                     redirect(base_url('admin/admin_dashboard'));  
                }  
                else  
                {  
                     $this->session->set_flashdata('error', 'Invalid Username and Password');  
                     redirect(base_url() . 'admin/login');  
                }  
           }  
           else  
           {  
                //false  
                $this->login();  
           }  
      }  

    

       function login_success(){  
           if($this->session->userdata('username') != '')  
           {  
                echo '<h1>Welcome - '.$this->session->userdata('username').'</h1>';  
                echo '<h3><a href="'.base_url().'admin/logout">Logout</a></h3>';  
                echo '<h3><a href="'.base_url().'admin/addbnb">Add BNB</a></h3>';  
                echo '<h3><a href="'.base_url().'admin/view_all_bnbs">View All BNBs</a></h3>';  
           }  
           else  
           {  
                redirect(base_url() . 'admin/login');  
           }  
      } 

       public function logout(){
          $this->session->sess_destroy();
          redirect('admin/login');
        }





          public function addbnb()
      {  
          $this->load->view('admin_header');
          $this->load->model('admin_operations'); 
          // $data["fetch_statedata"] = $this->admin_operations->fetch_state_data();
          //$this->load->view("addbnb", $data);
          $data["fetch_all_cities"] = $this->admin_operations->fetch_all_cities();
          $data["fetch_all_landscapes"] = $this->admin_operations->fetch_all_landscapes();
           $this->load->view("addbnb", $data);

        $this->load->view('admin_footer');
     }



        public function addbnb_datas()
        {    
            if($this->session->userdata('admin_logged_in')!=1){
          redirect(base_url() . 'admin/login');
          
      }
           
             $this->load->model('admin_operations'); 
             if ($this->input->post("add"))
            {
                $file = $_FILES["userprofile"]['name'];
                
                $config['upload_path']   = './assets/uploads';
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
                
                $this->load->library('upload', $config);
                
                if (!$this->upload->do_upload('userprofile'))
                {
                    $this->session->set_flashdata('message', 'Please check the image format.!!'); 
                    redirect(base_url() . 'admin/addbnb'); 
                }
                else
                {
                    $image     = $this->upload->data();
                   
                    
                    $data    = array(
                        'image' => $image['file_name'],
                        'name' => $this->input->post('name'),
                        'description' => $this->input->post('description'),
                        'city' => $this->input->post('drpcity'),
                        'cost' => $this->input->post('cost'),
                        'landscape' => $this->input->post('drplandscape')
                        
                    );
                    $success = $this->admin_operations->insert_bnb_datas($data);
                    if ($success)
                    {
                        $this->session->set_flashdata('message', 'B&B added successfully!!'); 
                         redirect(base_url() . 'admin/view_all_bnbs');
                    }
                    else
                    {
                        redirect(base_url() . 'admin/addbnb'); 
                    }
                }
            }
           
        }



         /* Function for update data */
        public function UpdateData($bnb_id)

        {
            if($this->session->userdata('admin_logged_in')!=1){
          redirect(base_url() . 'admin/login');
          
      }
          $this->load->view('admin_header');
    
   

           $this->load->model('admin_operations'); 
           // $data["fetch_statedata"] = $this->admin_operations->fetch_state_data();
          $data["fetch_all_cities"] = $this->admin_operations->fetch_all_cities();
          //var_dump($data);
          $data["fetch_all_landscapes"] = $this->admin_operations->fetch_all_landscapes();
            if ($this->input->post("edit")) /* Update button click event */ 
            {
                $file = $_FILES['userprofile']['name'];
                
                $config['upload_path']   = './assets/uploads';
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
                
                $this->load->library('upload', $config);
               
                
                if ($this->upload->do_upload('userprofile'))
                {
                    $image   = $this->upload->data();
                    $data    = array(
                        'image' => $image['file_name'],
                        'name' => $this->input->post('name'),
                        'description' => $this->input->post('description'),
                        'city' => $this->input->post('drpcity'),
                        'cost' => $this->input->post('cost'),
                        'landscape' => $this->input->post('drplandscape')

                        
                    );
                    $success = $this->admin_operations->updatedata($data, $bnb_id);
                    if ($success)
                    {
                        $this->session->set_flashdata('message', 'Data updated successfully..!!'); 
                        redirect(base_url('admin/view_all_bnbs'));
                       // echo "<script>alert('Data updated successfully..!!');window.location='http://localhost/bnb/index.php/admin/view_all_bnbs'</script>";
                    }
                    else
                    {
                         $this->session->set_flashdata('message', 'Data not updated.Please try again later.!!'); 
                        redirect(base_url('admin/view_all_bnbs'));
                        
                    }
                }
                else
                {
                    $data    = array(

                         
                        'name' => $this->input->post('name'),
                        'description' => $this->input->post('description'),
                        'city' => $this->input->post('drpcity'),
                        'cost' => $this->input->post('cost'),
                        'landscape' => $this->input->post('drplandscape')
                        
                    );
                    $success = $this->admin_operations->updatedata($data, $bnb_id);
                    if ($success)
                    {
                        $this->session->set_flashdata('message', 'Data updated successfully..!!'); 
                        redirect(base_url('admin/view_all_bnbs'));
                    }
                    else
                    {
                         $this->session->set_flashdata('message', 'Data not updated.Please try again later.!!'); 
                        redirect(base_url('admin/view_all_bnbs'));
                    }
                }
            }

             if ($this->input->post("btncancel")) /* Cancel button click event */ 
            {
                echo "<script>window.location='http://localhost/bnb/index.php/admin/view_all_bnbs'</script>";
            }
            /* This two lines fetch a sinle record on which user has click to edit */
            $data["fetch_useriddata"] = $this->admin_operations->fetch_editid_data($bnb_id);
             $data["fetch_all_cities"] = $this->admin_operations->fetch_all_cities();
           // $data["fetch_all_landscapes"] = $this->admin_operations->fetch_all_landscapes();
          //    $data["fetch_all_cities"] = $this->admin_operations->fetch_all_cities();
          // $data["fetch_all_landscapes"] = $this->admin_operations->fetch_all_landscapes();
             $this->load->view("editbnb", $data);
              $this->load->view('admin_footer'); 
        }

          

        public function view_all_bnbs()
        {
            if($this->session->userdata('admin_logged_in')!=1){
          redirect(base_url() . 'admin/login');
          
      }
            $this->load->model('admin_operations'); 
            $data["fetch_all_bnbs"] = $this->admin_operations->fetch_all_bnbs();
            //$this->load->view('view_bnbs', $data);
             $this->load->view('admin_header');
            $this->load->view('viewbnb', $data);
            $this->load->view('admin_footer'); 
             
        } 

         public function fetchcity()
        {
            $this->load->model('admin_operations'); 
           
             $data["fetch_all_cities"] = $this->admin_operations->fetch_all_cities();
             $this->load->view('addbnb', $data);
            // if ($this->input->post('state_id'))
            // {
            //     echo $this->admin_operations->fetch_stateid_wise_data($this->input->post('state_id'));
            // }
        }


        public function view_detail($bnb_id)
        {
            $this->load->model('admin_operations'); 
            $data["fetch_single_bnb"] = $this->admin_operations->fetch_single_bnbs($bnb_id);
          // var_dump($fetch_single_bnb);
            $this->load->view('detaildestination', $data);
            //$this->load->view('detail', $data);
             //$this->load->view('home1', $data);
        }


        

        /* Function for delete data */
        public function delete_bnb($bnb_id)
        {
            $this->load->model('admin_operations'); 
            $success = $this->admin_operations->delete_bnb_data($bnb_id);
            if ($success)
            {
                $this->session->flashdata('message');
                $this->session->set_flashdata('message', 'Data deleted successfully..!!'); 
            }
            else
            {
                $this->session->set_flashdata('message', 'Error while deleting data..!!'); 
            }
            redirect(base_url('admin/view_all_bnbs'));
        }
        
        /*Function to fetch weather from API*/
        function weather_update(){
        
            $cityArr = $this->common->select_cities();
            $inserCityApp = array();
            for($j=0;$j<count($cityArr);$j++){
            $city_name=$cityArr[$j]['city_name'];
            $city_id=$cityArr[$j]['city_id'];
            $fetch_weather = 'http://api.openweathermap.org/data/2.5/forecast?q='.trim($city_name).',ie&units=metric&appid=d828bc57d263d11b348eba143fa7c5c8';
            $contents = file_get_contents($fetch_weather);
            if(!empty($contents)){
            $weatherArr = (array) json_decode($contents);
            for($i=0;$i<count($weatherArr['list']);$i++){
            
            $detail = $weatherArr['list'][$i];
            $date_format =explode(" ",$detail->dt_txt);
            
            $inserCityApp[] = array( 'we_city'=>$city_id,
            'we_description'=>$detail->weather[0]->description,
            'we_min'=>$detail->main->temp_min,
            'we_max'=>$detail->main->temp_max,
            'we_humidity'=>$detail->main->humidity,
            'we_date'=>$detail->dt_txt
            );
            }
            if(!empty($inserCityApp)){
            $resultArr = $this->common->weather_update($inserCityApp,$city_id);
            $inserCityApp ='';
            }
        
        
        }
        }
        $this->session->set_flashdata('message', 'Latest weather records updated on database');  
        redirect(base_url('admin/admin_dashboard')); 
        
        }



       

  }
?>