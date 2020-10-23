<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Meeting extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		// $this->load->database();
		$this->load->helper(array('url','date', 'form'));
		$this->load->library(array('form_validation', 'session', 'pagination', 'uuid'));
		$this->load->model('model_base');

	}
	
	public function index(){

        $this->load->view('Guidance/Header_guidance');
		$this->load->view('Guidance/Meeting/Meeting_index');
		$this->load->view('Guidance/Footer_guidance');
        
    }
    
    public function view(){

        $this->load->view('Guidance/Header_guidance');
		$this->load->view('Guidance/Meeting/Meeting_view');
		$this->load->view('Guidance/Footer_guidance');
        
    }

    public function create(){

        $this->load->view('Guidance/Header_guidance');
		$this->load->view('Guidance/Meeting/Meeting_create');
		$this->load->view('Guidance/Footer_guidance');
        
	}
	public function edit(){

        $this->load->view('Guidance/Header_guidance');
		$this->load->view('Guidance/Meeting/Meeting_edit');
		$this->load->view('Guidance/Footer_guidance');
        
    }
}