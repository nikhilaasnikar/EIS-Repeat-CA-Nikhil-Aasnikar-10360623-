<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

/*When project is accessed theough URL this will be the first function loaded for display main page*/
	public function index()
	{   
	$weather=array();
	 	$london = "http://api.openweathermap.org/data/2.5/weather?q=Dublin,ie&units=metric&appid=d828bc57d263d11b348eba143fa7c5c8";

        $contents = file_get_contents($london);
        $london_climas = json_decode($contents);		
		$weather['london']['temp']			= $london_climas->main->temp;
		$weather['london']['description']	= $london_climas->weather[0]->description;
		$weather['london']['temp_min']		= $london_climas->main->temp_min;
		$weather['london']['temp_max']		= $london_climas->main->temp_max;
		$weather['london']['speed']			= $london_climas->wind->speed;
		$weather['london']['humidity']		= $london_climas->main->humidity;			
		
		$newYork = "http://api.openweathermap.org/data/2.5/weather?q=Cork,ie&units=metric&appid=d828bc57d263d11b348eba143fa7c5c8";

        $contents = file_get_contents($newYork);
        $new_york_climas = json_decode($contents);
		$weather['newyork']['temp']			= $new_york_climas->main->temp;
		$weather['newyork']['description']	= $new_york_climas->weather[0]->description;
		$weather['newyork']['temp_min']		= $new_york_climas->main->temp_min;
		$weather['newyork']['temp_max']		= $new_york_climas->main->temp_max;
		$weather['newyork']['speed']			= $new_york_climas->wind->speed;
		$weather['newyork']['humidity']		= $new_york_climas->main->humidity;			
		
		$paris = "http://api.openweathermap.org/data/2.5/weather?q=Limerick,ie&units=metric&appid=d828bc57d263d11b348eba143fa7c5c8";

        $contents = file_get_contents($paris);
        $paris_climas = json_decode($contents);	
		$weather['paris']['temp']			= $paris_climas->main->temp;
		$weather['paris']['description']	= $paris_climas->weather[0]->description;
		$weather['paris']['temp_min']		= $paris_climas->main->temp_min;
		$weather['paris']['temp_max']		= $paris_climas->main->temp_max;
		$weather['paris']['speed']		= $paris_climas->wind->speed;
		$weather['paris']['humidity']		= $paris_climas->main->humidity;
		
		$dubai = "http://api.openweathermap.org/data/2.5/weather?q=Kilkenny,ie&units=metric&appid=d828bc57d263d11b348eba143fa7c5c8";

        $contents = file_get_contents($dubai);
        $dubai_climas = json_decode($contents);
		$weather['dubai']['temp']			= $dubai_climas->main->temp;
		$weather['dubai']['description']	= $dubai_climas->weather[0]->description;
		$weather['dubai']['temp_min']		= $dubai_climas->main->temp_min;
		$weather['dubai']['temp_max']		= $dubai_climas->main->temp_max;
		$weather['dubai']['speed']		= $dubai_climas->wind->speed;
		$weather['dubai']['humidity']		= $dubai_climas->main->humidity;
		
		
		$this->load->view('header');
		$weather["fetch_all_bnbs"] = $this->common->fetch_all_bnbs();
		$weather["fetch_all_cities"] = $this->common->fetch_all_cities();
        $weather["fetch_all_landscapes"] = $this->common->fetch_all_landscapes();
        $weather["fetch_all_costs"] = $this->common->fetch_all_costs();
       // $weather["fetch_related_cities"] = $this->common->fetch_related_cities($city_id);

       

           //$this->load->view("addbnb", $data);

		$this->load->view('home',$weather);
		
		$this->load->view('footer');

	}
	/*Function will disply 
	public function destination_detail(){
		$this->load->view('header');
		$this->load->view('detaildestination');
		$this->load->view('footer');
	}*/


	
	/*Function will send mail to admin when requesting a quote*/
	function request_quote($destination_id){
		$resultArr	=	$this->common->user_bb_details($destination_id);
		if($resultArr){
			$email = $resultArr[0]->user_email;
			$message_content = $this->input->post('quote_content');
			$email_content = "
					<span>HI,</span><br>
					<span>Customer ".$this->session->userdata('user_name')." has requested quote </span></br><p>".$message_content."";
	
			$emailArr = array(
					'to'       => $email, 
					'to_cc'    => '', 
					'from'     => $this->session->userdata('user_email'),
					'from_name'=> $this->session->userdata('user_name'),
					'subject'  => 'Quote Request',
					'message'  => $email_content);
	
			if($this->mailer->send_mail($emailArr,$bcc = false, $attachment = false, $bccEmail = '')){
				echo 1;
			}else{
				echo 2;
			}
			/*$this->session->set_flashdata('request_mesg', '');*/
		}else{
			echo 2;
			/*$this->session->set_flashdata('request_mesg', '');*/
		}
		/*redirect(base_url().'destination/destination_detail/'.$destination_id);*/
		
		exit();
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



}

    

		   function search_all_bnbs(){

		   	  $city = $this->input->post('city'); 
               $drplandscape = $this->input->post('drplandscape');  
                $cost = $this->input->post('cost');    
                $mnmtemp = $this->input->post('mnmtemp');  
                $mxmtmp = $this->input->post('mxmtemp');  
                
		  	 
		   	   $weather=array();
	 	$london = "http://api.openweathermap.org/data/2.5/weather?q=Dublin,ie&units=metric&appid=d828bc57d263d11b348eba143fa7c5c8";

        $contents = file_get_contents($london);
        $london_climas = json_decode($contents);		
		$weather['london']['temp']			= $london_climas->main->temp;
		$weather['london']['description']	= $london_climas->weather[0]->description;
		$weather['london']['temp_min']		= $london_climas->main->temp_min;
		$weather['london']['temp_max']		= $london_climas->main->temp_max;
		$weather['london']['speed']			= $london_climas->wind->speed;
		$weather['london']['humidity']		= $london_climas->main->humidity;			
		
		$newYork = "http://api.openweathermap.org/data/2.5/weather?q=Cork,ie&units=metric&appid=d828bc57d263d11b348eba143fa7c5c8";

        $contents = file_get_contents($newYork);
        $new_york_climas = json_decode($contents);
		$weather['newyork']['temp']			= $new_york_climas->main->temp;
		$weather['newyork']['description']	= $new_york_climas->weather[0]->description;
		$weather['newyork']['temp_min']		= $new_york_climas->main->temp_min;
		$weather['newyork']['temp_max']		= $new_york_climas->main->temp_max;
		$weather['newyork']['speed']			= $new_york_climas->wind->speed;
		$weather['newyork']['humidity']		= $new_york_climas->main->humidity;			
		
		$paris = "http://api.openweathermap.org/data/2.5/weather?q=Limerick,ie&units=metric&appid=d828bc57d263d11b348eba143fa7c5c8";

        $contents = file_get_contents($paris);
        $paris_climas = json_decode($contents);	
		$weather['paris']['temp']			= $paris_climas->main->temp;
		$weather['paris']['description']	= $paris_climas->weather[0]->description;
		$weather['paris']['temp_min']		= $paris_climas->main->temp_min;
		$weather['paris']['temp_max']		= $paris_climas->main->temp_max;
		$weather['paris']['speed']		= $paris_climas->wind->speed;
		$weather['paris']['humidity']		= $paris_climas->main->humidity;
		
		$dubai = "http://api.openweathermap.org/data/2.5/weather?q=Kilkenny,ie&units=metric&appid=d828bc57d263d11b348eba143fa7c5c8";

        $contents = file_get_contents($dubai);
        $dubai_climas = json_decode($contents);
		$weather['dubai']['temp']			= $dubai_climas->main->temp;
		$weather['dubai']['description']	= $dubai_climas->weather[0]->description;
		$weather['dubai']['temp_min']		= $dubai_climas->main->temp_min;
		$weather['dubai']['temp_max']		= $dubai_climas->main->temp_max;
		$weather['dubai']['speed']		= $dubai_climas->wind->speed;
		$weather['dubai']['humidity']		= $dubai_climas->main->humidity;
		
		
		$this->load->view('header');
		$weather["fetch_all_bnbs"] = $this->common->fetch_all_bnb_search_datas($city,$drplandscape,$cost,$mnmtemp,$mxmtmp);
		$weather["fetch_all_cities"] = $this->common->fetch_all_cities();
        $weather["fetch_all_landscapes"] = $this->common->fetch_all_landscapes();
        $weather["fetch_all_costs"] = $this->common->fetch_all_costs();
       // $weather["fetch_related_cities"] = $this->common->fetch_related_cities($city_id);

       

           //$this->load->view("addbnb", $data);

		$this->load->view('home',$weather);
		
		$this->load->view('footer');
		   }

		 
}
