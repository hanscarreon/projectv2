<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {


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
	
	public function index($user_id){

		$body = [];

		$col = "user_id";
		$table_name = 'users';
		$body['profile'] = $this->model_base->get_one($user_id,$col,$table_name);
		$this->db->flush_cache();
        $this->load->view('User/Header_user');
		$this->load->view('User/Profile/Profile_index',$body);
		$this->load->view('User/Footer_user');
    }
    
    public function view(){
        $this->load->view('User/Header_user');
		$this->load->view('User/Profile/Profile_view');
		$this->load->view('User/Footer_user');
	}
	public function create(){
        $this->load->view('User/Header_user');
		$this->load->view('User/Profile/Profile_create');
		$this->load->view('User/Footer_user');
    }
    public function edit($user_id){
		$body = [];

		$col = "user_id";
		$table_name = 'users';
		$body['profile'] = $this->model_base->get_one($user_id,$col,$table_name);
		$this->db->flush_cache();



		if($this->input->post('update_account')){
			$this->form_validation->set_rules('user_contact', 'Contact', 'required');
			$this->form_validation->set_rules('user_section', 'Section / Yr', 'required');
			$this->form_validation->set_rules('user_degree', 'Degree', 'required');
			$this->form_validation->set_rules('user_division', 'Division', 'required');
			$this->form_validation->set_rules('user_fname', 'Full name', 'required');
			$this->form_validation->set_rules('user_gender', 'Gender', 'required');
			$this->form_validation->set_rules('user_address', 'Gender', 'required');
			
			

			if($this->form_validation->run() == FALSE){
				$body['msg_error'] = validation_errors();
			}else{

				$data = $this->input->post();
				unset($data["update_account"]);
				$tbname = 'users';
				$col = 'user_id';
				$data['user_update'] = $this->getDatetimeNow();
				// $data_update = array(
				// 					'' =>
				// 					);
				$this->model_base->update_data($user_id,$col,$data,$tbname);
				$this->session->set_flashdata('msg_success', 'update success!');
				redirect('user/profile/index/'. $user_id,'refresh'); 

			}

		}
		
        $this->load->view('User/Header_user');
		$this->load->view('User/Profile/Profile_edit',$body);
		$this->load->view('User/Footer_user');
    }





	
}






