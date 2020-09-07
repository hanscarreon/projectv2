<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Schedule extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->helper(array('url','date', 'form'));
		$this->load->library(array('form_validation', 'session', 'pagination'));
		$this->load->model('model_base');
		if ( $this->have_sess_user() != true ){
			$this->logout_user();	
		}
	}

	public function index($case="case",$status="case"){
		$header = [];
		$body = [];
		$footer = [];

		$pos =  $this->session->userdata('user_pos');
		$body["user_pos"] = $pos;
		$user_id = $this->session->userdata("user_id");
		
		$this->_sorting($case,$status,$pos,$user_id);
		$body['schedules'] = $this->model_base->get_all('sentimend_meeting as sm');
		$this->db->flush_cache();


		
		$this->load->view("template/site_student_header",$header);
		$this->load->view('student/schedule/index',$body);
		$this->load->view("template/site_student_footer",$footer);
	}
	public function _sorting($case,$status,$pos,$user_id){
		$this->db->join('user','user.user_id = sm.stud_id');
		$this->db->where("sm.stud_id", $user_id);
		$this->db->join('sentiment_case','sentiment_case.case_id = sm.case_id');
	}
	public function view($id){
		$header = [];
		$body = [];
		$footer = [];


		$col = "meet_id";
		$table_name = 'sentimend_meeting';
		$this->db->join("sentiment_case","sentiment_case.case_id = sentimend_meeting.case_id");
		$body['meeting'] = $this->model_base->get_one($id,$col,$table_name);
		$this->db->flush_cache();

		$this->load->view("template/site_student_header",$header);
		$this->load->view('student/schedule/view',$body);
		$this->load->view("template/site_student_footer",$footer);
	}
}