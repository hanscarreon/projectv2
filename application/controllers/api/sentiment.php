<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH.'libraries/REST_Controller.php';

class Sentiment extends REST_Controller{

  public function __construct(){

    parent::__construct();
    //load database
    $this->load->database();
	$this->load->helper('url','date', 'form','security');
    $this->load->library(array("form_validation"));
	$this->load->model('model_base');

  }
/// sample
  public function detect_sentiment($string){
		$string = urlencode($string);
		$api_key = "7b50350a2caa3035c741f773f8ad85";
		$url = 'https://api.paysify.com/sentiment?api_key='.$api_key.'&string='.$string.'';
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$result = curl_exec($ch);
		$response = json_decode($result,true);
		curl_close($ch);
		return $response;
   }

  public function create_post(){
     $_POST = json_decode(file_get_contents("php://input"), true);  // get post value

    // form validation for inputs
    $this->form_validation->set_rules("case_text", "sentiment text", "required");
    $this->form_validation->set_rules("user_id", "sentiment text", "required");
    if($this->form_validation->run() == FALSE){
    	// echo json_encode(validation_errors());
    	echo validation_errors();
    	// return JSON.stringify(validation_errors());

    }else{
       $data = $this->input->post();
    	 $data['case_created'] = $this->getDatetimeNow();
    	 $data['case_study'] = $this->input->post("case_text");
    	 $senti_mood = $this->detect_sentiment($data['case_study']);
    	 $data['case_study'] = strtolower($senti_mood['data']['state']);
         $table = "sentiment_case";
         	if($this->model_base->insert_data($data, $table)){
    				$this->db->flush_cache();

    	          $this->response(array(
    	            "status" => 1,
    	            "message" => "Sentiment Case Created!"
    	          ), REST_Controller::HTTP_OK);

         	}else{
         		  $this->response(array(
    	            "status" => 0,
    	            "message" => "Failed to Sentiment Case!"
    	          ), REST_Controller::HTTP_INTERNAL_SERVER_ERROR);

         	}

    }
  

  }
  public function login_post(){
  	// echo "Get";

  }

  public function index_get(){
  	// echo "Get";

  }
  public function senti_post(){
     $_POST = json_decode(file_get_contents("php://input"), true);  // get post value
     $text_Sentiment = $this->input->post("case_text");

     // echo $text_Sentiment;

      $curl = curl_init();

      curl_setopt_array($curl, array(
      CURLOPT_URL => "https://text-sentiment.p.rapidapi.com/analyze",
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_ENCODING => "",
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 30,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => "POST",
      CURLOPT_POSTFIELDS => "text=".$text_Sentiment,
      CURLOPT_HTTPHEADER => array(
        "content-type: application/x-www-form-urlencoded",
        "x-rapidapi-host: text-sentiment.p.rapidapi.com",
        "x-rapidapi-key: 02c3f30502msh33401f4eaac2e5ep146922jsn081be928bb38"
      ),
      ));

      $response = curl_exec($curl);
      $err = curl_error($curl);

      curl_close($curl);

      if ($err) {
      echo "cURL Error #:" . $err;
      } else {
      echo $response;
      }

  }



}