<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Err extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->helper(array('url','date', 'form'));
		$this->load->library(array('form_validation', 'session', 'pagination', 'uuid'));
		$this->load->model('model_base');
	}
	
	public function index(){
        $this->load->view('404');
    }
    




	
}






