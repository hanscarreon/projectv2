<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Archive extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->helper(array('url','date', 'form'));
		$this->load->library(array('form_validation', 'session', 'pagination', 'uuid'));
		$this->load->model('model_base');
	}
	public function index(){

		$body = [];

		$user_id = $this->session->userdata('user_id');
		$status = 'deleted';

		$this->_filter_sentiment($user_id,$status);
		$body['sentiments'] = $this->model_base->get_all('sentiment_case as sc');
		$this->db->flush_cache();
        $this->load->view('User/Header_user');
		$this->load->view('User/Archive/Archive_index',$body);
		$this->load->view('User/Footer_user');
    }
    
    public function view(){
        $this->load->view('User/Header_user');
		$this->load->view('User/Archive/Archive_view');
		$this->load->view('User/Footer_user');
    }
    public function edit(){
        $this->load->view('Guidance/Header');
        $this->load->view('Guidance/Sidenav');
		$this->load->view('Guidance/Dashboard/Dashboard_edit');
		$this->load->view('Guidance/Footer');
	}
	
	public function _filter_sentiment($user_id,$status){
		$this->db->join("users as u", "sc.user_id = u.user_id");
		$this->db->join("admin as a", "sc.admin_id = a.admin_id");

		$this->db->where('sc.user_id',$user_id);
		if($status){
			$this->db->where('sc.case_status',$status);
		}
	}

	public function retrieve($id){


		$data = $this->input->post();
		unset($data["create_case"]);
		$tbname = 'sentiment_case';
		$col = 'case_id';
		$data_update = array('case_status' =>'published',
							'case_updates' => $this->getDatetimeNow()
							);
		$this->model_base->update_data($id,$col,$data_update,$tbname);

		
		$this->session->set_flashdata('msg_success', 'retrieve success!');
		redirect('user/dashboard' ,'refresh');

		
		
	}







	
}






