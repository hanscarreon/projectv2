<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Chats extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->helper(array('url','date', 'form'));
		$this->load->library(array('form_validation', 'session', 'pagination'));
		$this->load->model('model_base');
		// if ( $this->have_sess_user() != true ){
		// 	$this->logout_user();	
		// }
	}

	public function reciever(){
		$data = $this->input->get();
		$output = '';
		// echo "string";
     	// echo "sender-> ". $data['sender_id'] . "receiver ->".$data['reciever_id'];
      	$this->db->where("sender_id", $data['sender_id']);
	    $this->db->where("reciever_id", $data['reciever_id']);
	    $chats = $this->model_base->get_all('chat');
	    echo print_r($chats);

	  //   foreach($chats as $chat)
			// {

			// }
		echo $chats;

	}
}