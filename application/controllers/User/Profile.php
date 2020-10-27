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
		$header = []; // header
		$body = [];

		$col = "user_id";
		$user_id = $this->session->userdata('user_id');
		$table_name = 'users';
		$header['dp'] = $this->model_base->get_one($user_id,$col,$table_name);
		$this->db->flush_cache();
		// header info update

		$col = "user_id";
		$table_name = 'users';
		$body['profile'] = $this->model_base->get_one($user_id,$col,$table_name);

		
		if($this->input->post("upload_file")){
			$dataPost = $this->input->post();
			$this->form_validation->set_rules('user_id', 'no account', 'required|trim');

			if ($this->form_validation->run() == FALSE){
				$body['msg_error'] = validation_errors();
		   }else{
				unset($dataPost['upload_file']);
				unset($dataPost['user_id']);
				$config['upload_path']   = './uploads/student'; 
				$config['allowed_types'] = 'jpg|png'; 
				$config['encrypt_name'] = FALSE; 
				$config['max_size'] = "10000000"; // Can be set to particular file size , here it is 2 MB(2048 Kb)
				$this->load->library('upload', $config);
				$this->upload->initialize($config);

				$upload_data = array();
				$table = "users";
				$upload_data['user_update'] = $this->getDatetimeNow();
				$col = 'user_id';
				if ( !$this->upload->do_upload('user_pic')) {
				 $body['msg_error'] = $this->upload->display_errors();
				 }else { 
					$upload = $this->upload->data();
					$upload_data['user_pic'] = 'uploads/student/' . $upload['file_name'];
					$this->model_base->update_data($user_id,$col,$upload_data,$table);
					$this->db->flush_cache();
					$this->session->set_flashdata('msg_success', 'File uploaded');
					// redirect('guidance/meeting/ongoing/'.$case_id.'/'.$user_id.'/'.$meet_id,'refresh');

					redirect('user/profile/index/'.$user_id ,'refresh');
				}
			}
		}


		$this->db->flush_cache();
        $this->load->view('User/Header_user',$header);
		$this->load->view('User/Profile/Profile_index',$body);
		$this->load->view('User/Footer_user');
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
		$this->load->view('User/Profile/Profile_view',$body);
		$this->load->view('User/Footer_user');
	}
	public function create(){
        $this->load->view('User/Header_user');
		$this->load->view('User/Profile/Profile_create');
		$this->load->view('User/Footer_user');
    }
    public function edit($user_id){
		$header = []; // header
		$body = [];

		$col = "user_id";
		$user_id = $this->session->userdata('user_id');
		$table_name = 'users';
		$header['dp'] = $this->model_base->get_one($user_id,$col,$table_name);
		$this->db->flush_cache();
		// header info update

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
				$this->model_base->update_data($user_id,$col,$data,$tbname);
				$this->session->set_flashdata('msg_success', 'update success!');
				redirect('user/profile/index/'. $user_id,'refresh'); 
			}


			
			

		}
		
        $this->load->view('User/Header_user',$header);
		$this->load->view('User/Profile/Profile_edit',$body);
		$this->load->view('User/Footer_user');
    }





	
}






