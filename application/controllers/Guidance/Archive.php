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
		if ( $this->have_sess_guidance() != true ){
			$this->logout_admin();	
		}
	}
	public function index(){

		$header = []; // header
		$body = [];

		$col = "admin_id";
		$admin_id = $this->session->userdata('admin_id');
		$table_name = 'admin';
		$header['dp'] = $this->model_base->get_one($admin_id,$col,$table_name);
		$this->db->flush_cache();
		// header info update
		$status = 'deleted';
	
		$this->_filter_sentiment($status);
		$body['sentiments'] = $this->model_base->get_all('sentiment_case as sc');
		$this->db->flush_cache();
        $this->load->view('Admin/Header_admin',$header);
		$this->load->view('Admin/Archive/Archive_index',$body);
		$this->load->view('Admin/Footer_admin');
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
		
        $this->load->view('Admin/Header_admin',$header);
		$this->load->view('Admin/Archive/Archive_view');
		$this->load->view('Admin/Footer_admin');
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
	
	public function _filter_sentiment($status){
		$this->db->join("users as u", "sc.user_id = u.user_id");
		$this->db->join("admin as a", "sc.admin_id = a.admin_id");

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
		redirect('admin/dashboard/index/ongoing/published' ,'refresh');

		
		
	}







	
}






