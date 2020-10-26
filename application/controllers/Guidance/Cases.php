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
			$this->logout_user();	
		}

	}
	
	public function index($con){
		$body = [];


		$user_id = $this->session->userdata('admin_id');
		$status = 'published';

		$this->_filter_sentiment($user_id,$status,$con);
		$body['sentiments'] = $this->model_base->get_all('sentiment_case as sc');
		$this->db->flush_cache();

        $this->load->view('Guidance/Header_guidance');
		$this->load->view('Guidance/Cases/Cases_index',$body);
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






