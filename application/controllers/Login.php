<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index(){

		if($this->session->userdata('logged_in')==true){
	        	redirect(base_url());
			}
	    else{
	    	$client_id = '61459705251-omuvpprmrrea7gblbife5fcpjsauncqq.apps.googleusercontent.com';
   $client_secret = 'oQoCfGL_0YXkYTLN_ttUNK10';
   $redirect_uri = base_url('login');
   $simple_api_key = 'AIzaSyCajYE2PCslE3W6x_G_-z1ZJwDdIaKuHEE';
   
   $client = new Google_Client();
   $client->setApplicationName("bnb");
   $client->setClientId($client_id);
   $client->setClientSecret($client_secret);
   $client->setRedirectUri($redirect_uri);
   $client->setDeveloperKey($simple_api_key);
   $client->addScope("https://www.googleapis.com/auth/userinfo.email");

   $objOAuthService = new Google_Service_Oauth2($client);
   
   if (isset($_REQUEST['logout'])) {
     unset($_SESSION['access_token']);
     $client->revokeToken();
    redirect(base_url('login')); //redirect user back to page
   }
   
   if (isset($_GET['code'])) {
     $client->authenticate($_GET['code']);
     $_SESSION['access_token'] = $client->getAccessToken();
     redirect(base_url('google_signup'));/*
     header('Location: ' . filter_var($redirect_uri, FILTER_SANITIZE_URL));*/
   }
   
   if (isset($_SESSION['access_token']) && $_SESSION['access_token']) {
     $client->setAccessToken($_SESSION['access_token']);
   }
  
   if ($client->getAccessToken()) {
     $userData = $objOAuthService->userinfo->get();
     if(!empty($userData)) {
   	$objDBController = new DBController();
   	$existing_member = $objDBController->getUserByOAuthId($userData->id);
	if(empty($existing_member)) {
       $objDBController->insertOAuthUser($userData);
    	}
      }
    $_SESSION['access_token'] = $client->getAccessToken();
    } else {
      $this->authUrl = $client->createAuthUrl();
    }
			$this->load->view('header');
			$this->load->view('login_view');
		}
	}
	/*Function will check whether username passwords are valid when user try to login to the system*/
	function login_process(){
		$user_name	=	$this->input->post('user_name');
		$password	=	md5($this->input->post('password'));
		
		$resultArr	=	$this->common->user_login($user_name,$password);	
				
		if(!empty($resultArr)){
			
				$this->session->set_userdata('user_id',$resultArr[0]->user_id);
				$this->session->set_userdata('user_name',$resultArr[0]->user_name);
				$this->session->set_userdata('user_email',$resultArr[0]->user_email);
				$this->session->set_userdata('logged_in',true);
				redirect(base_url());
			
		}else{
			$this->session->set_flashdata('login_error', 'Invalid Email or Password');
			redirect(base_url().'login');
		}
	}
	
	/*Function will clear the loggedin user session once logout button is clicked*/
     function logout(){

     	$this->session->unset_userdata('user_id');
		$this->session->unset_userdata('user_name');
		$this->session->unset_userdata('logged_in');
     	redirect(base_url());

     }
     /*This function will display signup form*/
     function signup(){
         if($this->session->userdata('logged_in')){
             redirect(base_url().'users');
         }else{
			 $this->load->view('header');
             $this->load->view('signup_view');
			 $this->load->view('footer');
         }
     }
	 /*Function will add new entry to the tbl_user when user try to register into the system through signup page*/
	 function user_signup(){

		$name	=	$this->input->post('val-username');
		$email	=	$this->input->post('val-email');
		$pass   =   $this->input->post('val-password');
		$password	=	md5($this->input->post('val-password'));
		$confpassword	=	md5($this->input->post('val-confirm-password'));
		$blood_group = $this->input->post('val-group');
		$phone = $this->input->post('val-number');
		$createddate = date('Y-m-d H:m:s');
		$type = 2;

        $userdata = array('val' => array('user_name' =>$name,'user_email' => $email,'user_password' =>$password,'user_phone'=>$phone));
        $inserid=$this->common->add_user($userdata);
		$config = array(
		'upload_path' => "uploads/",
		'allowed_types' => "gif|jpg|png|jpeg",
		'overwrite' => TRUE,
		'file_name'     => $name.'.jpg',
		'file_ext'      => '.jpg'
		
		);
		$this->load->library('upload', $config);
		$this->upload->do_upload();         
		$this->session->set_flashdata('user_reg', 'Registration successful');
        redirect(base_url('login'));


	}
	/*Function is to check whether email Id exists in tbl_user once user try to register second time. If same email exists, user will be restricted from registering*/
	function check_email_exists()
    {
        $email_id            = $this->input->post('valemail');
        $check_user_email = $this->common->check_email_exists($email_id);
        echo json_encode($check_user_email);
    }


    function google_signup(){

		$name	=	$this->input->post('val-username');
		$email	=	$this->input->post('val-email');
		$pass   =   $this->input->post('val-password');
		$password	=	md5($this->input->post('val-password'));
		$confpassword	=	md5($this->input->post('val-confirm-password'));
		$blood_group = $this->input->post('val-group');
		$phone = $this->input->post('val-number');
		$createddate = date('Y-m-d H:m:s');
		$type = 2;

        $userdata = array('val' => array('user_name' =>$name,'user_email' => $email,'user_password' =>$password,'user_phone'=>$phone));
        $inserid=$this->common->add_user($userdata);
		$config = array(
		'upload_path' => "uploads/",
		'allowed_types' => "gif|jpg|png|jpeg",
		'overwrite' => TRUE,
		'file_name'     => $name.'.jpg',
		'file_ext'      => '.jpg'
		
		);
		$this->load->library('upload', $config);
		$this->upload->do_upload();         
		$this->session->set_flashdata('user_reg', 'Registration successful');
        redirect(base_url('login'));


	}
    


}
