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
		if ( $this->have_sess_guidance() != true ){
			$this->logout_admin();	
		}

    }
    
    public function view($case_id){
		$header = []; // header
		$body = [];

		$col = "admin_id";
		$user_id = $this->session->userdata('admin_id');
		$table_name = 'admin';
		$header['dp'] = $this->model_base->get_one($user_id,$col,$table_name);
		$this->db->flush_cache();
		//  info user


		$role = 'guidance';
		$status = 'published';
		$this->_filter_guidance($role,$status);
		$body['guidances'] = $this->model_base->get_all('admin as a');
		$this->db->flush_cache();
		// guidance

		
		$col = "case_id";
		$table_name = 'sentiment_case';
		$this->db->join("users as u", "sentiment_case.user_id = u.user_id");
		$body['case'] = $this->model_base->get_one($case_id,$col,$table_name);
		$this->db->flush_cache();
		//  case 

		$this->db->where('case_id',$case_id);
		$body['meetings'] = $this->model_base->get_all('sentiment_meeting');
		$this->db->flush_cache();
		//  meetiings 
		
        $this->load->view('Guidance/Header_guidance',$header);
		$this->load->view('Guidance/Sentiment/Sentiment_view',$body);
		$this->load->view('Guidance/Footer_guidance');
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

	public function _filter_guidance ($role,$status){

		if(!empty($role)){
			$this->db->where('a.admin_role', $role);
		}

		if(!empty($status)){
			$this->db->where('a.admin_status',$status);
		}

	}
	
	

    public function create(){

        $this->load->view('Guidance/Header');
        $this->load->view('Guidance/Sidenav');
		$this->load->view('Guidance/Sentiment/Sentiment_create');
		$this->load->view('Guidance/Footer');
        
    }
}