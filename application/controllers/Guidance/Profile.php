<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		// $this->load->database();
		$this->load->helper(array('url','date', 'form'));
		$this->load->library(array('form_validation', 'session', 'pagination', 'uuid'));
		$this->load->model('model_base');
		if ( $this->have_sess_guidance() != true ){
			$this->logout_user();	
		}

    }
    
    public function index(){

        $this->load->view('Guidance/Header_guidance');
		$this->load->view('Guidance/Profile/Profile_index');
		$this->load->view('Guidance/Footer_guidance');
        
	}
	
	public function view(){

        $this->load->view('Guidance/Header_guidance');
		$this->load->view('Guidance/Profile/Profile_view');
		$this->load->view('Guidance/Footer_guidance');
        
    }

    public function edit(){

		$this->load->view('Guidance/Header_guidance');
		$this->load->view('Guidance/Profile/Profile_edit');
		$this->load->view('Guidance/Footer_guidance');
        
    }
}