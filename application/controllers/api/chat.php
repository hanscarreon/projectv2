<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Methods: GET, OPTIONS");
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH.'libraries/REST_Controller.php';

class Chat extends REST_Controller{

  public function __construct(){

    parent::__construct();
    //load database
    $this->load->database();
	$this->load->helper('url','date', 'form','security');
    $this->load->library(array("form_validation"));
	$this->load->model('model_base');

  }

  public function send_post(){
     $_POST = json_decode(file_get_contents("php://input"), true);  // get post value
    // form validation for inputs
    $this->form_validation->set_rules("chat_text", "chat", "required");
    $this->form_validation->set_rules("sender_id", "Who are you", "required");
    $this->form_validation->set_rules("reciever_id", "Who to send", "required");
    if($this->form_validation->run() == FALSE){
    	// echo json_encode(validation_errors());
    	echo validation_errors();
    	// return JSON.stringify(validation_errors());
    }else{
       $data = $this->input->post();
    	 $data['chat_created'] = $this->getDatetimeNow();
         $table = "chat";
         	if($this->model_base->insert_data($data, $table)){
    				$this->db->flush_cache();

    	          $this->response(array(
    	            "status" => 1,
    	            "message" => "Message Sent!"
    	          ), REST_Controller::HTTP_OK);

         	}else{
         		  $this->response(array(
    	            "status" => 0,
    	            "message" => "Failed to Send Message!"
    	          ), REST_Controller::HTTP_INTERNAL_SERVER_ERROR);
         	}
    }
  

  }
  public function receiver_get($sender_id,$reciever_id){

    // echo "test";
      // echo "sender-> ". $sender_id . "receiver ->".$reciever_id;
    $this->db->where("sender_id", $sender_id);
    $this->db->where("reciever_id", $reciever_id);
    $data = $this->model_base->get_all('chat');
    $this->response(array(
                  "status" => 1,
                  "message" => "Get!",
                  "data" => $data
                ), REST_Controller::HTTP_OK);
  }



}