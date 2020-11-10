<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cases extends CI_Controller {


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
	
	public function index($con){
		$header = []; // header
		$body = [];

		$col = "admin_id";
		$user_id = $this->session->userdata('admin_id');
		$table_name = 'admin';
		$header['dp'] = $this->model_base->get_one($user_id,$col,$table_name);
		$this->db->flush_cache();
		// header info update

		$user_id = $this->session->userdata('admin_id');
		$status = 'published';
		
		$this->_filter_sentiment($user_id,$status,$con);
		$body['sentiments'] = $this->model_base->get_all('sentiment_case as sc');
		$this->db->flush_cache();

        $this->load->view('Guidance/Header_guidance',$header);
		$this->load->view('Guidance/Cases/Cases_index',$body);
		$this->load->view('Guidance/Footer_guidance');
    }
    
    public function view($case_id,$meet_id){
		$header = []; // header
		$body = [];

		$col = "admin_id";
		$user_id = $this->session->userdata('admin_id');
		$table_name = 'admin';
		$header['dp'] = $this->model_base->get_one($user_id,$col,$table_name);
		$this->db->flush_cache();
		// header info update
		$body['case_id']= $case_id;
		$body['user_id']= $user_id;
		$body['meet_id']= $meet_id;

		$col = "case_id";
		$table_name = 'sentiment_case';
		$this->db->join("users as u", "sentiment_case.user_id = u.user_id");
		$body['case'] = $this->model_base->get_one($case_id,$col,$table_name);
		$this->db->flush_cache();
		//  case
		$body['test'] = 'wait';

		$col = "meet_id";
		$table_name = 'sentiment_meeting';
		$body['meet'] = $this->model_base->get_one($meet_id,$col,$table_name);
		$this->db->flush_cache();

		$this->load->view('Guidance/Header_guidance',$header);
		$this->load->view('Guidance/Cases/Cases_view',$body);
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
		// header info update
        
        $this->load->view('Guidance/Header');
        $this->load->view('Guidance/Sidenav');
		$this->load->view('Guidance/Dashboard/Dashboard_edit');
		$this->load->view('Guidance/Footer');
        
	}
	
	public function _filter_sentiment($user_id,$status,$con){
		$this->db->join("users as u", "sc.user_id = u.user_id");
		$this->db->join("admin as a", "sc.admin_id = a.admin_id");

		$this->db->where('sc.admin_id',$user_id);
		if(!empty($status)){
			$this->db->where('sc.case_status',$status);
		}
		if(!empty($con)){
			$this->db->where('sc.case_con',$con);
		}
	}





	
}






