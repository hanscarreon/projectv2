<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->helper(array('url','date', 'form'));
		$this->load->library(array('form_validation', 'session', 'pagination', 'uuid'));
		$this->load->model('model_base');

	}
	public function index(){
		$header = [];
		$body = [];
		$footer = [];
		if($this->have_sess_user() == true){
			redirect('user/dashboard/index/ongoing','refresh');
		}
		if ( $this->have_sess_admin() == true ){
			redirect('admin/dashboard/index/ongoing/published','refresh');
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
					$table = "users";
					$account = $this->model_login->login($data, $table);
					if( count($account) >= 1){
	    				$this->session->set_flashdata('msg_success', 'Successfully log in!');
						$this->session->set_userdata($account[0]);
						if($account[0]['user_role'] == 'admin'){
							redirect('admin/dashboard/index/name/study/con/col/','refresh');
						}else{
							// email function
							$this->load->library('email');
							$this->email->from('gmsusa@tindahans.com', 'GMSUSA WEB APP');
							$this->email->to($account[0]['user_email']);
							$this->email->subject('Login Log!' );
							$this->email->message("Hi Mr/Ms ".$account[0]['user_fname']. " you successfully login by:". $this->getDatetimeNow());	
							$this->email->send();
							redirect('user/dashboard/index/ongoing','refresh');
						}	
					}else{
	    				$body['msg_error'] = 'Invalid Account';
					}
				}
			}
		$this->load->view('view_login',$body);

	}
	public function logout() {
		if($this->session->userdata('admin_role') == 'admin' || $this->session->userdata('admin_role') == 'guidance'){
			$this->session->sess_destroy();
			redirect('admin', 'refresh'); 
		}else{
			$this->session->sess_destroy();
    	   redirect('login', 'refresh'); 
		}
       
   }
   
   public function register(){
		$header = [];
		$body = [];
		$footer = [];
		// if($this->have_sess_user() == true){
		// 	redirect('student/dashboard','refresh');
		// }
		// if ( $this->have_sess_admin() == true ){
		// 	redirect('admin/dashboard/index/name/study/con/col/','refresh');
		// }
			// form validation create account
			$this->form_validation->set_rules('user_email', 'Email', 'required|trim|is_unique[users.user_email]');
			$this->form_validation->set_rules('user_name', 'Username', 'required|trim|is_unique[users.user_name]');
			$this->form_validation->set_rules('user_pass', 'Password', 'trim|required|min_length[6]|md5'); 
			$this->form_validation->set_rules('user_fname', 'Full Name', 'required|trim');
			$this->form_validation->set_rules('user_address', 'Address', 'required|trim');
			$this->form_validation->set_rules('user_gender', 'Gender', 'required|trim');
			$this->form_validation->set_rules('user_division', 'Division', 'required|trim|min_length[2]');
			$this->form_validation->set_rules('user_contact', 'Contact', 'required|trim|min_length[2]');
			if($this->input->post()) {
				if ($this->form_validation->run() == FALSE) {
					$body['msg_error'] = validation_errors();
				}else{
					$data = $this->input->post();
					unset($data['user_pass2']);
					$data["user_role"] = "student";
					$table = "users";
					$this->model_base->insert_data($data,$table);
					$this->session->set_flashdata('msg_success', 'Successfully registered!');
					// unset($data);

					// email function
					
					$this->load->library('email');
					$this->email->from('gmsusa@tindahans.com', 'GMSUSA WEB APP');
					$this->email->to($data['user_email']);
					$this->email->subject('Registration Complete!' );
					$this->email->message("Hi Mr/Ms".$data['user_fname']. " Thank you for your registration in GMSUSA WEB APP \n if you have any concern messages us at gmsusa@tindahans.com");	
					$this->email->send();
					redirect('login', 'refresh'); 
				}
			}

		$this->load->view('view_register',$body);
	}
	
	public function regsajax()
	{


		if($this->input->post()){
			$data = $this->input->post();
				$this->form_validation->set_rules('user_email', 'Email', 'required|trim|is_unique[users.user_email]');
				$this->form_validation->set_rules('user_name', 'Username', 'required|trim|is_unique[users.user_name]');
				$this->form_validation->set_rules('user_pass', 'Password', 'trim|required|min_length[6]|md5'); 
				$this->form_validation->set_rules('user_fname', 'Full Name', 'required|trim');
				$this->form_validation->set_rules('user_address', 'Address', 'required|trim');
				$this->form_validation->set_rules('user_gender', 'Gender', 'trim');
				$this->form_validation->set_rules('user_division', 'Division', 'required|trim|min_length[2]');
				$this->form_validation->set_rules('user_contact', 'Contact', 'required|trim|min_length[2]');
			if($this->form_validation->run() == FALSE){
				$err = array();
				$err = validation_errors();
				echo $err;
				

			}else{
				echo 'success';
				$data = $this->input->post();
				unset($data['user_pass2']);
				$data["user_role"] = "student";
				$table = "users";
				$this->model_base->insert_data($data,$table);
				$this->load->library('email');
				$this->email->from('gmsusa@tindahans.com', 'GMSUSA WEB APP');
				$this->email->to($data['user_email']);
				$this->email->subject('Registration Complete!' );
				$this->email->message("Hi Mr/Ms".$data['user_fname']. " Thank you for your registration in GMSUSA WEB APP \n if you have any concern messages us at gmsusa@tindahans.com");	
				$this->email->send();





				// $data = $this->input->post();
				// $table = "users";
				// $this->model_base->insert_data($data,$table);
				// $this->session->set_flashdata('msg_success', 'Successfully registered!');
			}


		}
	}
	public function reg(){
		$body = [];


		$this->form_validation->set_rules('user_name', 'Username', 'required|is_unique[users.user_name]');

		$body["value"]="0";
		if($this->input->post()) {
			$data = $this->input->post();
				$body["value"] = $data['user_name'];
				if($this->form_validation->run() == FALSE){
					$body['msg_error'] = validation_errors();
					

				}else{
					$data = $this->input->post();
					$table = "users";
					$this->model_base->insert_data($data,$table);
					$this->session->set_flashdata('msg_success', 'Successfully registered!');
				}
			// if ($this->form_validation->run() == FALSE) {
			// 	$body['msg_error'] = validation_errors();
			// }else{
			// 	$data = $this->input->post();
			// 	$body["value"] = $data['user_name'];
			// 	// unset($data['user_pass2']);
			// 	$data["user_role"] = "student";
			// 	$table = "users";
			// 	$this->model_base->insert_data($data,$table);
			// 	$this->session->set_flashdata('msg_success', 'Successfully registered!');
			// 	// unset($data);
			// 	redirect('login', 'refresh'); 
			// }
		}


		$this->load->view('view_register',$body);

	}

	public function forgot(){
		$header = [];
		$body = [];
		$footer = [];
		if($this->have_sess_user() == true){
			redirect('student/dashboard','refresh');
		}
		if ( $this->have_sess_admin() == true ){
			redirect('admin/dashboard/index/name/study/con/col/','refresh');
		}
			// form validation create account
			$this->form_validation->set_rules('user_email', 'Email', 'required|trim|is_unique[user.user_email]');

			if($this->input->post()) {
				if ($this->form_validation->run() == FALSE) {
					$body['msg_error'] = validation_errors();
				}else{
					$this->load->library('email');
					$data = $this->input->post();

					$data["user_role"] = "student";
					$newpass = $this->uuid->v4();
					
					$table = "user";
					$update_data = array( 'user_pass' =>  $newpass );
					// $this->model_base->forgot_pass($data['user_email'],$col,$update_data, $table);

					// email function
					$this->email->from('hanscarreon0898@gmail.com', 'hans');
					$this->email->to($data['user_email']);
					$this->email->set_mailtype("html");
					$this->email->subject('Change password' );
					$this->email->message('this is your new password please dont share this to others: ' .$newpass.'');
					$this->email->send();

					$this->session->set_flashdata('msg_success', 'Successfully change pass please check your email!');
					redirect('login', 'login'); 
				}
			}
		$this->load->view('view_forgot',$body);
	}

	public function admin(){
		$header = [];
		$body = [];
		$footer = [];
		// if($this->have_sess_user() == true){
		// 	redirect('users/dashboard','refresh');
		// }
		// if ( $this->have_sess_admin() == true ){
		// 	redirect('admin/dashboard/index/name/study/con/col/','refresh');
		// }
		$this->load->model('model_login');
			$this->form_validation->set_rules('admin_uname', 'Username', 'required|trim');
			$this->form_validation->set_rules('admin_pass', 'Password', 'required|trim|min_length[6]');
			if($this->input->post()) {
				if ($this->form_validation->run() == FALSE) {
					$body['msg_error'] = validation_errors();
				}else{
					$data = $this->input->post();
					$data["admin_email"] = $data["admin_uname"];
					$table = "admin";
					$account = $this->model_login->admin_login($data, $table);
					if( count($account) >= 1){
	    				$this->session->set_flashdata('msg_success', 'Successfully log in!');
						$this->session->set_userdata($account[0]);
						if($account[0]['admin_role'] == 'admin'){
							redirect('admin/dashboard/index/ongoing/published','refresh');
						}else{
							redirect('guidance/dashboard/index/ongoing','refresh');
						}
						$this->load->library('email');
						$this->email->from('gmsusa@tindahans.com', 'GMSUSA WEB APP');
						$this->email->to($account[0]['admin_email']);
						$this->email->subject('Login Log!' );
						$this->email->message("Hi Mr/Ms ".$account[0]['admin_fname']. " you successfully login by:". $this->getDatetimeNow());	
						$this->email->send();	
					}else{
	    				$body['msg_error'] = 'Invalid Account';
					}
				}
			}
		$this->load->view('admin',$body);
	}
}






