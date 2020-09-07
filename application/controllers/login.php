<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->helper(array('url','date', 'form'));
		$this->load->library(array('form_validation', 'session', 'pagination'));
		// $this->load->model('model_base');

	}
	public function index(){
		$header = [];
		$body = [];
		$footer = [];
		if($this->have_sess_user() == true){
			redirect('student/dashboard','refresh');
		}
		if ( $this->have_sess_admin() == true ){
			redirect('admin/dashboard/index/name/study/con/col/','refresh');
		}
		$this->load->model('model_login');
			$this->form_validation->set_rules('user_name', 'Username', 'required|trim');
			$this->form_validation->set_rules('user_pass', 'Password', 'required|trim|min_length[6]');
			if($this->input->post()) {
				if ($this->form_validation->run() == FALSE) {
					$body['msg_error'] = validation_errors();
				}else{
					$data = $this->input->post();
					$data["user_email"] = $data["user_name"];
					$table = "user";
					$account = $this->model_login->login($data, $table);
					if( count($account) >= 1){
	    				$this->session->set_flashdata('msg_success', 'Successfully log in!');
						$this->session->set_userdata($account[0]);
						if($account[0]['user_role'] == 'admin'){
							redirect('admin/dashboard/index/name/study/con/col/','refresh');
						}else{
							redirect('student/dashboard','refresh');
						}	
					}else{
	    				$body['msg_error'] = 'Invalid Account';
					}
				}
			}
		$this->load->view('view_login',$body);

	}
	public function logout() {
       $this->session->sess_destroy();
       redirect('login', 'refresh'); 
   }
   
}






