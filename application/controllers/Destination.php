<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Destination extends CI_Controller {


	public function index()
	{   $this->load->view('header');
		$this->load->view('detaildestination');
		$this->load->view('footer');
	}
/*Function will display detail view of destination*/
	public function destination_detail($destin_id='')
	{   $this->destination_id        = $destin_id;
		$this->destination           = $this->destination_model->get_desination_comment($destin_id);
		$totalrating                 = $this->destination_model->get_desination_total($destin_id);
		
		if($totalrating[0]->rating>0){
		$this->average               = $totalrating[0]->rating/ count($this->destination); 
		}else{$this->average=0;
		}
		if ($this->input->post('rating')) {
		$userdata      =  $this->session->get_userdata('user_id');
		$comment_id    = $this->destination_model->get_user_comment($userdata['user_id'],$destin_id);  
		$insertdata                   =  array();
		$insertdata["rating"]	      =  $this->input->post('rating');
		$insertdata["comment"]	      =  $this->input->post('comment');
		$insertdata["user_id"]        =  $userdata['user_id'];
		$insertdata["destination_id"] =  $destin_id;
		$insertdata["date"]           =  time();
		if ($comment_id[0]->id !='') {
		$inserid                      =  $this->destination_model->update_comment($insertdata,$comment_id[0]->id);	
        if ($inserid!='') {
            $this->session->set_flashdata('reviewupdate', 'Review updated successfully!');
        }else{
        	$this->session->set_flashdata('reviewfail', 'Please try again!');
        }
        redirect(base_url().'destination/destination_detail/'.$destin_id);
		}else{

        $inserid                      =  $this->destination_model->add_comment($insertdata);	
        if ($inserid!='') {
            $this->session->set_flashdata('reviewadd', 'Review added successfully!');
        }else{
        	$this->session->set_flashdata('reviewfail', 'Please try again!');
        }
         redirect(base_url().'destination/destination_detail/'.$destin_id);
		}
		
		}
		$this->load->model('admin_operations'); 
        $data["fetch_single_bnb"] = $this->common->fetch_single_bnbs($destin_id);
		$this->load->view('header');
		$this->load->view('detaildestination',$data);
		$this->load->view('footer');
	}
}
