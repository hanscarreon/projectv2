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
		$header = [];
		$body = [];
		$footer = [];
		// $body["filter"] = $filter;

		$pos = $this->session->userdata("user_pos");
		$role = "student";

		$this->_sort_acct($role,$pos);
		$body['students'] = $this->model_base->get_all('user');
		$this->db->flush_cache();


		$this->load->view("template/site_admin_header",$header);
		$this->load->view('admin/account/index',$body);
		$this->load->view("template/site_admin_footer",$footer);

	}
	public function _sort_acct($role,$pos){
		$this->db->where("user_role", $role);
		$this->db->where("user_pos", $pos);
	}

	public function create(){
		$header = [];
		$body = [];
		$footer = [];
		$body["data"] = "test";


		// form validation create account
		$this->form_validation->set_rules('user_email', 'Email', 'required|trim|is_unique[user.user_email]');
		$this->form_validation->set_rules('user_name', 'Username', 'required|trim|min_length[6]|is_unique[user.user_name]');
		$this->form_validation->set_rules('user_pass', 'Password', 'trim|required|min_length[6]|md5'); 
		$this->form_validation->set_rules('user_pass2', 'Password not Match', 'trim|required|matches[user_pass]|min_length[5]|md5'); 
		$this->form_validation->set_rules('user_fname', 'Firstname', 'required|trim');
		$this->form_validation->set_rules('user_lname', 'Lastname', 'required|trim');
		$this->form_validation->set_rules('user_role', 'Role', 'required|trim|min_length[2]');
		$this->form_validation->set_rules('user_pos', 'Curriculum', 'required|trim|min_length[2]');
		$this->form_validation->set_rules('user_lvl', 'Yr/Grade level', 'required|trim|min_length[2]');

		if($this->input->post("create_account")){
			 if ($this->form_validation->run() == FALSE){
			 	$body['msg_error'] = validation_errors();
        	}
        	else{
        		$data = $this->input->post();
				unset($data['create_account']);
				unset($data['user_pass2']);

				$data['user_created'] = $this->getDatetimeNow();
				$last_id = $this->model_base->insert_data($data, 'user');
				$this->session->set_flashdata('msg_success', 'Successfully created!');
				$this->db->flush_cache();
				redirect('admin/account/view/'.$last_id ,'refresh');
          		
       		 }

		}
		$this->load->view("template/site_admin_header",$header);
		$this->load->view('admin/account/create',$body);
		$this->load->view("template/site_admin_footer",$footer);

	}
	public function view(){
		$header = [];
		$body = [];
		$footer = [];
		
		$this->load->view("template/site_admin_header",$header);
		$this->load->view('admin/account/view',$body);
		$this->load->view("template/site_admin_footer",$footer);

	}

}