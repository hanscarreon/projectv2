<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Calendar extends CI_Controller {

	public function __construct()
	{

		parent::__construct();
		$this->load->database();
		$this->load->helper(array('url','date', 'form'));
		$this->load->library(array('form_validation', 'session', 'pagination'));
		$this->load->model('model_base');
		if ( $this->have_sess_guidance() != true ){
			$this->logout_admin();	
		}
	}

	
	public function index(){

		$header = []; // header
		$body = [];
		$footer = [];

		$col = "admin_id";
		$admin_id = $this->session->userdata('admin_id');
		$table_name = 'admin';
		$header['dp'] = $this->model_base->get_one($admin_id,$col,$table_name);
		$this->db->flush_cache();
		// header info update

		$this->load->view('Guidance/Header_guidance',$header);
		$this->load->view('Guidance/Calendar/Calendar_index',$body);
		$this->load->view('Guidance/Footer_guidance');
		$this->load->view('Guidance/Calendar/Calendar_index_script');

	}
	public function index2(){

		$header = []; // header
		$body = [];
		$footer = [];

		$col = "admin_id";
		$admin_id = $this->session->userdata('admin_id');
		$table_name = 'admin';
		$header['dp'] = $this->model_base->get_one($admin_id,$col,$table_name);
		$this->db->flush_cache();
		// header info update
		
	

		$this->load->view('Guidance/Header_guidance',$header);
		$this->load->view('Guidance/Calendar/Calendar_index_test',$body);
		$this->load->view('Guidance/Footer_guidance');
		$this->load->view('Guidance/Calendar/Calendar_script_test');

	}

	


     

}
