<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

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
	public function index($id="0"){
        $header = [];
        $body = [];
        $footer = [];

        $id = $this->session->userdata('user_id');
        $col = "user_id";
		$table_name = 'user';
		$body['profile'] = $this->model_base->get_one($id,$col,$table_name);
		$this->db->flush_cache();

		$this->load->view("template/site_student_header",$header);
		$this->load->view('student/profile/view',$body);
		$this->load->view("template/site_student_footer",$footer);

	}
	public function edit($id="0"){
	 	$header = [];
        $body = [];
        $footer = [];

        $id = $this->session->userdata('user_id');
        $col = "user_id";
		$table_name = 'user';
		$body['profile'] = $this->model_base->get_one($id,$col,$table_name);
		$this->db->flush_cache();

		// form validation
		// $this->form_validation->set_rules('user_name', 'username' , 'required|trim');
		// $this->form_validation->set_rules('user_email', 'email', 'required|trim');
		$this->form_validation->set_rules('user_fname', 'first name', 'required|trim');
		$this->form_validation->set_rules('user_lname', 'last name', 'required|trim');
		$this->form_validation->set_rules('user_address', 'address', 'required|trim');
		$data = $this->input->post();
		if($this->input->post("update_profile")){
			if($this->form_validation->run() == false){
			 	$body['msg_error'] = validation_errors();
			}else{
				unset($data["update_profile"]);

				$this->session->set_flashdata('msg_success', 'profile updated!');
				$update_data = array(
					'user_fname'  => $data["user_fname"],
					'user_mname'  => $data["user_mname"],
					'user_lname'  => $data["user_lname"],
					'user_lname'  => $data["user_lname"],
					'user_bod' 	  => $data["user_bod"],
					'user_gender' => $data["user_gender"],
					'user_pos'    => $data["user_pos"],
					'user_yr'     => $data["user_yr"],
					'user_address'     => $data["user_address"],
					 );
				
				$this->model_base->update_data($id,$col,$update_data,$table_name);
				redirect('student/profile/index/'.$this->session->userdata("user_id") ,'refresh');


			}
		}

		$this->load->view("template/site_student_header",$header);
		$this->load->view('student/profile/edit',$body);
		$this->load->view("template/site_student_footer",$footer);

	}

}