<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account extends CI_Controller {

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
	public function index(){
		$header = []; // header
		$body = [];

		$col = "admin_id";
		$user_id = $this->session->userdata('admin_id');
		$table_name = 'admin';
		$header['dp'] = $this->model_base->get_one($user_id,$col,$table_name);
		$this->db->flush_cache();
		// header info update

		$pos = $this->session->userdata("user_pos");
		$role = "student";

		$this->_sort_acct($role,$pos);
		$body['students'] = $this->model_base->get_all('user');
		$this->db->flush_cache();


		$this->load->view("template/header",$header);
		$this->load->view('admin/account/index',$body);
		$this->load->view("template/site_admin_footer",);

	}
	public function _sort_acct($role,$pos){
		$this->db->where("user_role", $role);
		$this->db->where("user_pos", $pos);
	}

	public function create(){
		$header = []; // header
		$body = [];

		$col = "admin_id";
		$user_id = $this->session->userdata('admin_id');
		$table_name = 'admin';
		$header['dp'] = $this->model_base->get_one($user_id,$col,$table_name);
		$this->db->flush_cache();
		// header info update
		$footer = [];
		$body["data"] = "test";


		// form validation create account
		$this->form_validation->set_rules('admin_uname', 'Username', 'required|trim|min_length[6]|is_unique[user.user_name]');
		$this->form_validation->set_rules('admin_email', 'Email', 'required|trim|is_unique[user.user_email]');
		$this->form_validation->set_rules('admin_pass', 'Password', 'trim|required|min_length[6]|md5'); 
		$this->form_validation->set_rules('admin_pass2', 'Password not Match', 'trim|required|matches[user_pass]|min_length[5]|md5'); 
		$this->form_validation->set_rules('admin_fname', 'Full Name', 'required|trim');
		$this->form_validation->set_rules('admin_role', 'Role', 'required|trim|min_length[2]');
		$this->form_validation->set_rules('admin_expertise', 'expertise', 'required|trim|min_length[2]');

		if($this->input->post("create_account")){
			 if ($this->form_validation->run() == FALSE){
			 	$body['msg_error'] = validation_errors();
        	}
        	else{
        		$data = $this->input->post();
				unset($data['create_account']);
				unset($data['admin_pass2']);

				$data['admin_created'] = $this->getDatetimeNow();
				$last_id = $this->model_base->insert_data($data, 'admin');
				$this->session->set_flashdata('msg_success', 'Successfully created!');
				$this->db->flush_cache();
				redirect('admin/account/view/'.$last_id ,'refresh');
          		
       		 }

		}
		$this->load->view("Admin/Header_admin",$header);
		$this->load->view('Admin/Account/Account_create',$body);
		$this->load->view("Admin/Footer_admin",$footer);

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

		$col = "user_id";
		$table_name = 'user';
		$body['student'] = $this->model_base->get_one($id,$col,$table_name);
		$this->db->flush_cache();
		
		$this->load->view("template/site_admin_header",$header);
		$this->load->view('admin/account/view',$body);
		$this->load->view("template/site_admin_footer",$footer);

	}

}