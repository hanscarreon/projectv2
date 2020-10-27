<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sentiment extends CI_Controller {


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
    
    public function view(){
		$header = []; // header
		$body = [];

		$col = "admin_id";
		$user_id = $this->session->userdata('admin_id');
		$table_name = 'admin';
		$header['dp'] = $this->model_base->get_one($user_id,$col,$table_name);
		$this->db->flush_cache();

        $this->load->view('Guidance/Header');
        $this->load->view('Guidance/Sidenav');
		$this->load->view('Guidance/Sentiment/Sentiment_view');
		$this->load->view('Guidance/Footer');
        
    }

    public function edit(){
		$header = []; // header
		$body = [];

		$col = "admin_id";
		$user_id = $this->session->userdata('admin_id');
		$table_name = 'admin';
		$header['dp'] = $this->model_base->get_one($user_id,$col,$table_name);
		$this->db->flush_cache();

        $this->load->view('Guidance/Header');
        $this->load->view('Guidance/Sidenav');
		$this->load->view('Guidance/Dashboard/Dashboard_edit');
		$this->load->view('Guidance/Footer');
        
	}
	
	

    public function create(){

        $this->load->view('Guidance/Header');
        $this->load->view('Guidance/Sidenav');
		$this->load->view('Guidance/Sentiment/Sentiment_create');
		$this->load->view('Guidance/Footer');
        
    }
}