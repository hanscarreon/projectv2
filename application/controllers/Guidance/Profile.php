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
		if ( $this->have_sess_guidance() != true ){
			$this->logout_user();	
		}

    }
    
    public function index(){

        $this->load->view('Guidance/Header_guidance');
		$this->load->view('Guidance/Profile/Profile_index');
		$this->load->view('Guidance/Footer_guidance');
        
	}
	
	public function view($admin_id){
		$header = []; // header
		$body = [];

		$col = "admin_id";
		$admin_id = $this->session->userdata('admin_id');
		$table_name = 'admin';
		$header['dp'] = $this->model_base->get_one($admin_id,$col,$table_name);
		$this->db->flush_cache();
		// header info update

		$col = "admin_id";
		$table_name = 'admin';
		$body['profile'] = $this->model_base->get_one($admin_id,$col,$table_name);
		// profile



		if($this->input->post("upload_file")){
			$dataPost = $this->input->post();
			$this->form_validation->set_rules('admin_id', 'no account', 'required|trim');

			if ($this->form_validation->run() == FALSE){
				$body['msg_error'] = validation_errors();
		   }else{
				unset($dataPost['upload_file']);
				unset($dataPost['user_id']);
				$config['upload_path']   = './uploads/admin'; 
				$config['allowed_types'] = 'jpg|png'; 
				$config['encrypt_name'] = FALSE; 
				$config['max_size'] = "10000000"; // Can be set to particular file size , here it is 2 MB(2048 Kb)
				$this->load->library('upload', $config);
				$this->upload->initialize($config);

				$upload_data = array();
				$table = "admin";
				$upload_data['admin_update'] = $this->getDatetimeNow();
				$col = 'admin_id';
				if ( !$this->upload->do_upload('admin_pic')) {
				 $body['msg_error'] = $this->upload->display_errors();
				 }else { 
					$upload = $this->upload->data();
					$upload_data['admin_pic'] = 'uploads/admin/' . $upload['file_name'];
					$this->model_base->update_data($admin_id,$col,$upload_data,$table);
					$this->db->flush_cache();
					$this->session->set_flashdata('msg_success', 'File uploaded');
					redirect('guidance/profile/view/'.$admin_id ,'refresh');
				}
			}
		}

        $this->load->view('Guidance/Header_guidance',$header);
		$this->load->view('Guidance/Profile/Profile_view',$body);
		$this->load->view('Guidance/Footer_guidance');
        
    }

    public function edit($admin_id){
		$header = []; // header
		$body = [];

		$col = "admin_id";
		$admin_id = $this->session->userdata('admin_id');
		$table_name = 'admin';
		$header['dp'] = $this->model_base->get_one($admin_id,$col,$table_name);
		$this->db->flush_cache();
		// header info update

		$col = "admin_id";
		$table_name = 'admin';
		$body['profile'] = $this->model_base->get_one($admin_id,$col,$table_name);
		// profile

		if($this->input->post('update_account')){
			$this->form_validation->set_rules('admin_fname', 'Full name', 'required');
			$this->form_validation->set_rules('admin_expertise', 'Experise', 'required');
			$this->form_validation->set_rules('admin_gender', 'Gender', 'required');
			$this->form_validation->set_rules('admin_address', 'Address', 'required');
			
				
			if($this->form_validation->run() == FALSE){
				$body['msg_error'] = validation_errors();
			}else{

				$data = $this->input->post();
				unset($data["update_account"]);
				$tbname = 'admin';
				$col = 'admin_id';
				$data['admin_update'] = $this->getDatetimeNow();
				$this->model_base->update_data($admin_id,$col,$data,$tbname);
				$this->session->set_flashdata('msg_success', 'update success!');
				redirect('guidance/profile/view/'. $admin_id,'refresh'); 
			}
		}




		$this->load->view('Guidance/Header_guidance',$header);
		$this->load->view('Guidance/Profile/Profile_edit',$body);
		$this->load->view('Guidance/Footer_guidance');
        
    }
}