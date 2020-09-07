<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

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
	public function index($study="study",$con="con"){
        $header = [];
        $body = [];
        $footer = [];

        $pos =  $this->session->userdata('user_pos');

		$body["case_study"] = $this->uri->segment("4");
		$body["case_con"] = $this->uri->segment("5");
		$body["user_pos"] = $pos;
		$user_id = $this->session->userdata('user_id');

		$this->db->flush_cache();
		$this->_sorting($study,$con,$pos,$user_id);
		$this->db->where('sentiment_case.case_status','published');
		$body['sentiments'] = $this->model_base->get_all('sentiment_case');
		$this->db->flush_cache();


		$this->load->view("template/site_student_header",$header);
		$this->load->view('student/view_dashboard',$body);
		$this->load->view("template/site_student_footer",$footer);

	}
	public function _sorting($study,$con,$pos,$id){
		$this->db->join("user", "sentiment_case.user_id = user.user_id");

		if($study != 'study'){
    		$this->db->where('case_study',$study);
    	}
    	if($con != 'con'){
    		$this->db->where('case_con',$con);
    	}else{
    		$this->db->where('case_con','ongoing');
    	}
    	$this->db->where("sentiment_case.user_id", $id);
    	$this->db->where('user.user_pos',$pos);	

	}

}