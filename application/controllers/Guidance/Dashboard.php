<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->helper(array('url','date', 'form'));
		$this->load->library(array('form_validation', 'session', 'pagination', 'uuid'));
		$this->load->model('model_base');
		if ( $this->have_sess_guidance() != true ){
			$this->logout_user();	
		}

	}
	
	public function index(){
		$body = [];
        $this->load->view('Guidance/Header_guidance');
		$this->load->view('Guidance/Dashboard/Dashboard_index',$body);
		$this->load->view('Guidance/Footer_guidance');
    }
    
    public function view(){

        $this->load->view('Guidance/Header');
        $this->load->view('Guidance/Sidenav');
		$this->load->view('Guidance/Dashboard/Dashboard_view');
		$this->load->view('Guidance/Footer');
    }
    
    public function edit(){
        
        $this->load->view('Guidance/Header');
        $this->load->view('Guidance/Sidenav');
		$this->load->view('Guidance/Dashboard/Dashboard_edit');
		$this->load->view('Guidance/Footer');
        
    }





	
}






