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
	public function index($role,$pub){
		$header = []; // header
		$body = [];

		$col = "admin_id";
		$admin_id = $this->session->userdata('admin_id');
		$table_name = 'admin';
		$header['dp'] = $this->model_base->get_one($admin_id,$col,$table_name);
		$this->db->flush_cache();
		// header info update

		// $pos = $this->session->userdata("user_pos");
		if($role == 'student'){
			$body['test'] ='studentsss';
			$this->_sort_acct($role,$pub);
			$body['users'] = $this->model_base->get_all('users');
			$this->db->flush_cache();
		}

		if($role == 'guidance'){
			$body['test'] ='guidancessss';
			$this->_sort_acct($role,$pub);
			$body['users'] = $this->model_base->get_all('admin');
			$this->db->flush_cache();
		}

		

		$this->load->view("Admin/Header_admin",$header);
		$this->load->view('Admin/Account/Account_index',$body);
		$this->load->view("Admin/Footer_admin",);

	}
	public function _sort_acct($role,$pub){
		if($role == 'student'){
			$this->db->where('user_role',$role);
			$this->db->where('user_status',$pub);
		}
		if($role == 'guidance'){
			$this->db->where('admin_role',$role);
			$this->db->where('admin_status',$pub);
		}
	}

	public function create(){
		$header = []; // header
		$body = [];

		$col = "admin_id";
		$admin_id = $this->session->userdata('admin_id');
		$table_name = 'admin';
		$header['dp'] = $this->model_base->get_one($admin_id,$col,$table_name);
		$this->db->flush_cache();
		// header info update
		$footer = [];
		$body["data"] = "test";
		// form validation create account
		$this->form_validation->set_rules('admin_uname', 'Username', 'required|trim|min_length[6]|is_unique[admin.admin_uname]');
		$this->form_validation->set_rules('admin_email', 'Email', 'required|trim|is_unique[admin.admin_email]');
		$this->form_validation->set_rules('admin_pass', 'Password', 'trim|required|min_length[6]|md5'); 
		$this->form_validation->set_rules('admin_pass2', 'Password not Match', 'trim|required|matches[admin_pass]|min_length[5]|md5'); 
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
	public function view_admin($id){
		$header = []; // header
		$body = [];

		$col = "admin_id";
		$admin_id = $this->session->userdata('admin_id');
		$table_name = 'admin';
		$header['dp'] = $this->model_base->get_one($admin_id,$col,$table_name);
		$this->db->flush_cache();
		// header info update
		$footer = [];

		$col = "admin_id";
		$table_name = 'admin';
		$body['info'] = $this->model_base->get_one($id,$col,$table_name);
		$this->db->flush_cache();
		
		$this->load->view("Admin/Header_admin",$header);
		$this->load->view('Admin/Account/Account_admin_view',$body);
		$this->load->view("Admin/Footer_admin",$footer);

	}
	public function edit_admin($id){
		$header = []; // header
		$body = [];

		$col = "admin_id";
		$admin_id = $this->session->userdata('admin_id');
		$table_name = 'admin';
		$header['dp'] = $this->model_base->get_one($admin_id,$col,$table_name);
		$this->db->flush_cache();
		// header info update
		$footer = [];

		$col = "admin_id";
		$table_name = 'admin';
		$body['info'] = $this->model_base->get_one($id,$col,$table_name);
		$this->db->flush_cache();

		// form validation create account
		$this->form_validation->set_rules('admin_fname', 'Full Name', 'required|trim');
		$this->form_validation->set_rules('admin_role', 'Role', 'required|trim|min_length[2]');
		$this->form_validation->set_rules('admin_address', 'Address', 'required|trim|min_length[2]');
		$this->form_validation->set_rules('admin_expertise', 'expertise', 'required|trim|min_length[2]');
		$this->form_validation->set_rules('admin_status', 'status', 'required|trim|min_length[2]');
		$this->form_validation->set_rules('admin_gender', 'Gender', 'required|trim|min_length[2]');

		if($this->input->post("update_admin")){
			 if ($this->form_validation->run() == FALSE){
			 	$body['msg_error'] = validation_errors();
        	}
        	else{
        		$data = $this->input->post();
				unset($data['update_admin']);
				$data['admin_update'] = $this->getDatetimeNow();
				$col = 'admin_id';
				$tbname = 'admin';
				$this->model_base->update_data($id,$col,$data,$tbname);
				
				$this->session->set_flashdata('msg_success', 'Successfully Edited!');
				$this->db->flush_cache();
				redirect('admin/account/view-admin/'.$id ,'refresh');
       		 }

		}
		
		$this->load->view("Admin/Header_admin",$header);
		$this->load->view('Admin/Account/Account_admin_edit',$body);
		$this->load->view("Admin/Footer_admin",$footer);

	}
	public function view_student($id){
		$header = []; // header
		$body = [];

		$col = "admin_id";
		$admin_id = $this->session->userdata('admin_id');
		$table_name = 'admin';
		$header['dp'] = $this->model_base->get_one($admin_id,$col,$table_name);
		$this->db->flush_cache();
		// header info update
		$footer = [];

		$col = "admin_id";
		$table_name = 'admin';
		$body['ad'] = $this->model_base->get_one($id,$col,$table_name);
		$this->db->flush_cache();


		$col = "user_id";
		$table_name = 'users';
		$body['info'] = $this->model_base->get_one($id,$col,$table_name);
		$this->db->flush_cache();
		
		$this->load->view("Admin/Header_admin",$header);
		$this->load->view('Admin/Account/Account_student_view',$body);
		$this->load->view("Admin/Footer_admin",$footer);

	}

	public function edit_student($id){
		$header = []; // header
		$body = [];

		$col = "admin_id";
		$admin_id = $this->session->userdata('admin_id');
		$table_name = 'admin';
		$header['dp'] = $this->model_base->get_one($admin_id,$col,$table_name);
		$this->db->flush_cache();
		// header info update
		$footer = [];

		$col = "admin_id";
		$table_name = 'admin';
		$body['ad'] = $this->model_base->get_one($id,$col,$table_name);
		$this->db->flush_cache();


		$col = "user_id";
		$table_name = 'users';
		$body['info'] = $this->model_base->get_one($id,$col,$table_name);
		$this->db->flush_cache();

		$this->form_validation->set_rules('user_fname', 'Full Name', 'required|trim');
		$this->form_validation->set_rules('user_address', 'Address', 'required|trim');
		$this->form_validation->set_rules('user_division', 'Division', 'required|trim');
		$this->form_validation->set_rules('user_degree', 'Degree / strand', 'required|trim');
		$this->form_validation->set_rules('user_gender', 'Gender', 'required|trim');
		$this->form_validation->set_rules('user_contact', 'Contact', 'required|trim');
		$this->form_validation->set_rules('user_status', 'Status', 'required|trim');

		if($this->input->post()){
			$data = $this->input->post();
			if ($this->form_validation->run() == FALSE){
				$body['msg_error'] = validation_errors();
		   }
		   else{
			   unset($data['save_student']);
			   $data['user_update'] = $this->getDatetimeNow();
			   $col = 'user_id';
			   $tbname = 'users';
			   $this->model_base->update_data($id,$col,$data,$tbname);
			   
			   $this->session->set_flashdata('msg_success', 'Successfully Edited!');

			   $this->db->flush_cache();
			   redirect('admin/account/view-student/'.$id ,'refresh');
			   }
		}
		
		$this->load->view("Admin/Header_admin",$header);
		$this->load->view('Admin/Account/Account_student_edit',$body);
		$this->load->view("Admin/Footer_admin",$footer);

	}

}