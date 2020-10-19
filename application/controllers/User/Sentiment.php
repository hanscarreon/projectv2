<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sentiment extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->helper(array('url','date', 'form'));
		$this->load->library(array('form_validation', 'session', 'pagination', 'uuid'));
		$this->load->model('model_base');
    }
    
    public function view(){
        $this->load->view('User/Header_user');
		$this->load->view('User/Sentiment/Sentiment_view');
		$this->load->view('User/Footer_user');
    }
    public function edit(){
        $this->load->view('Guidance/Header');
        $this->load->view('Guidance/Sidenav');
		$this->load->view('Guidance/Dashboard/Dashboard_edit');
		$this->load->view('Guidance/Footer');
    }





	
}






