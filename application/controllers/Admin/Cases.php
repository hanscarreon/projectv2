<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cases extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->helper(array('url','date', 'form'));
		$this->load->library(array('form_validation', 'session', 'pagination'));
		$this->load->model('model_base');
		if ( $this->have_sess_admin() != true ){
			$this->logout_admin();	
		}
	}
	public function index($con)
	{
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

		$this->load->view("Admin/Header_admin",$header);
		$this->load->view('Admin/Cases/Cases_index',$body);
		$this->load->view("Admin/Footer_admin");

	}
	public function view($id){
		$header = []; // header
		$body = [];

		$col = "admin_id";
		$user_id = $this->session->userdata('admin_id');
		$table_name = 'admin';
		$header['dp'] = $this->model_base->get_one($user_id,$col,$table_name);
		$this->db->flush_cache();
		// header info update
		$footer = [];

		$col = "case_id";
		$table_name = 'sentimend_meeting as sm';
		$this->db->join('user', 'sm.stud_id = user.user_id');
		$this->db->where('sm.meet_status !=', 'deleted');
		$this->db->where('sm.meet_case =', 'done');
		$this->db->order_by('sm.meet_date','DESC');
		$body['meets'] = $this->model_base->get_one($id,$col,$table_name);
		$this->db->flush_cache();

		$col = "case_id";
		$table_name = 'sentiment_plan';
		$this->db->where('plan_status !=', 'deleted');
		$this->db->order_by('plan_created','asc');
		$body['plans'] = $this->model_base->get_one($id,$col,$table_name);
		$this->db->flush_cache();



		$this->load->view("template/site_admin_header",$header);
		$this->load->view('admin/case/view',$body);
		$this->load->view("template/site_admin_footer",$footer);
	}

	public function _filter_sentiment($user_id,$status,$con){
		$this->db->join("users as u", "sc.user_id = u.user_id");
		$this->db->join("admin as a", "sc.admin_id = a.admin_id");

		if(!empty($status)){
			$this->db->where('sc.case_status',$status);
		}
		if(!empty($con)){
			$this->db->where('sc.case_con',$con);
		}
	}


	
}