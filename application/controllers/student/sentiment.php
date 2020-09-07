<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Sentiment extends CI_Controller{

    public function __construct()
    {
      parent::__construct();
      $this->load->database();
      $this->load->helper(array('url','date', 'form'));
      $this->load->library(array('form_validation', 'session', 'pagination'));
      $this->load->model('model_base');
      if ( $this->have_sess_user() != true ){
        $this->logout_user(); 
      }
    }

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

  public function create(){
      $header = [];
      $body = [];
      $footer = [];


      // form validation for inputs
      $this->form_validation->set_rules("case_text", "sentiment text", "required");
      $this->form_validation->set_rules("user_id", "sentiment text", "required");
      if($this->input->post("send_sentiment")){
        
        
      }

      $this->load->view("template/site_student_header",$header);
      $this->load->view('student/sentiment/create',$body);
      $this->load->view("template/site_student_footer",$footer);
  }

  public function view($id){
      $header = [];
      $body = [];
      $footer = [];
      
      $this->load->view("template/site_student_header",$header);
      $this->load->view('student/sentiment/view',$body);
      $this->load->view("template/site_student_footer",$footer);
  }
 
  public function insert_sentiment(){
      $data  = $this->input->post();
      $table = 'sentiment_case';
      $data['case_created'] = $this->getDatetimeNow();
      $this->model_base->insert_data($data, $table);
  }
  
}









