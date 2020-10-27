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
		if ( $this->have_sess_user() != true ){
			$this->logout_user();	
		}

	}
	public function index(){
		$header = []; // header
		$body = [];

		$col = "user_id";
		$user_id = $this->session->userdata('user_id');
		$table_name = 'users';
		$header['dp'] = $this->model_base->get_one($user_id,$col,$table_name);
		$this->db->flush_cache();
		// header info update

		$body = [];

		$user_id = $this->session->userdata('user_id');
		$status = 'published';

		$this->_filter_sentiment($user_id,$status);
		$body['sentiments'] = $this->model_base->get_all('sentiment_case as sc');
		$this->db->flush_cache();


		$this->load->view('User/Header_user',$header);
		$this->load->view('User/Dashboard/Dashboard_index',$body);
		$this->load->view('User/Footer_user');

	}

	public function _filter_sentiment($user_id,$status){
		$this->db->join("users as u", "sc.user_id = u.user_id");
		$this->db->join("admin as a", "sc.admin_id = a.admin_id");
		$this->db->join("sentiment_meeting as sm", "sc.meet_id = sm.meet_id");

		$this->db->where('sc.user_id',$user_id);
		if($status){
			$this->db->where('sc.case_status','published');
		}
	}
    
    public function view(){
		$header = []; // header
		$body = [];

		$col = "user_id";
		$user_id = $this->session->userdata('user_id');
		$table_name = 'users';
		$header['dp'] = $this->model_base->get_one($user_id,$col,$table_name);
		$this->db->flush_cache();
		// header info update

        $this->load->view('User/Header_user',$header);
		$this->load->view('User/Dashboard/Dashboard_view');
		$this->load->view('User/Footer_user');
        
    }
    public function edit(){
		$header = []; // header
		$body = [];

		$col = "user_id";
		$user_id = $this->session->userdata('user_id');
		$table_name = 'users';
		$header['dp'] = $this->model_base->get_one($user_id,$col,$table_name);
		$this->db->flush_cache();
		// header info update
        $this->load->view('Guidance/Header',$header);
        $this->load->view('Guidance/Sidenav');
		$this->load->view('Guidance/Dashboard/Dashboard_edit');
		$this->load->view('Guidance/Footer');
	}
	
	





	
}






