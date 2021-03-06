<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sentiment extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->helper(array('url','date', 'form'));
		$this->load->library(array('form_validation', 'session', 'pagination', 'uuid'));
		$this->load->model('model_base');
		if ( $this->have_sess_admin() != true ){
			$this->logout_admin();	
		}
	}
	
	public function index(){

		
        $this->load->view('User/Header_user');
		$this->load->view('User/Sentiment/Sentiment_index');
		$this->load->view('User/Footer_user');
    }
    
    public function view($case_id){
		$header = []; // header
		$body = [];

		$col = "admin_id";
		$user_id = $this->session->userdata('admin_id');
		$table_name = 'admin';
		$header['dp'] = $this->model_base->get_one($user_id,$col,$table_name);
		$this->db->flush_cache();
		//  info user


		$role = 'guidance';
		$status = 'published';
		$this->_filter_guidance($role,$status);
		$body['guidances'] = $this->model_base->get_all('admin as a');
		$this->db->flush_cache();
		// guidance

		
		$col = "case_id";
		$table_name = 'sentiment_case';
		$this->db->join("users as u", "sentiment_case.user_id = u.user_id");
		$body['case'] = $this->model_base->get_one($case_id,$col,$table_name);
		$this->db->flush_cache();
		//  case 

		$this->db->where('case_id',$case_id);
		$body['meetings'] = $this->model_base->get_all('sentiment_meeting');
		$this->db->flush_cache();
		//  meetiings 
		
        $this->load->view('Admin/Header_admin',$header);
		$this->load->view('Admin/Sentiment/Sentiment_view',$body);
		$this->load->view('Admin/Footer_admin');
	}
	
	public function create(){
		$header = []; // header
		$body = [];

		$col = "user_id";
		$user_id = $this->session->userdata('user_id');
		$table_name = 'users';
		$header['dp'] = $this->model_base->get_one($user_id,$col,$table_name);
		$this->db->flush_cache();
		// header info update
		

			
		$this->form_validation->set_rules('case_text', 'sentiment text', 'required|trim');
		$this->form_validation->set_rules('admin_id', 'Select Counselor', 'required|trim');
		$this->form_validation->set_rules('case_reason[]', 'Pick atlest one reason', 'required|trim');
		$this->form_validation->set_rules('case_res', 'choose you prefer contact', 'required');
		$this->form_validation->set_rules('case_neg', 'error slow internet connection', 'required');
		$this->form_validation->set_rules('case_neg_percent', 'error slow internet connection', 'required');
		$this->form_validation->set_rules('case_mid', 'error slow internet connection', 'required');
		$this->form_validation->set_rules('case_mid_percent', 'error slow internet connection', 'required');
		$this->form_validation->set_rules('case_pos', 'error slow internet connection', 'required');
		$this->form_validation->set_rules('case_pos_percent', 'error slow internet connection', 'required');
		$this->form_validation->set_rules('case_result', 'error slow internet connection', 'required');
		$this->form_validation->set_rules('case_line', 'error slow internet connection', 'required');
		
		$role = 'guidance';
		$status = 'published';
		$this->_filter_guidance($role,$status);
		$body['guidances'] = $this->model_base->get_all('admin as a');
		$this->db->flush_cache();

		if($this->input->post()){
			$data = $this->input->post();

			if ($this->form_validation->run() == FALSE) {
				$body['msg_error'] = validation_errors();
				$body["test"] = $this->Convert_string_array($data["case_reason"]);

			}else{
				$data["case_reason"] = $this->Convert_string_array($data["case_reason"]);
				$data["user_id"] =  $this->session->userdata('user_id');
				$table = "sentiment_case";
				$this->model_base->insert_data($data,$table);
				$this->session->set_flashdata('msg_success', 'Successfully registered!');
				
				redirect('user/dashboard','refresh'); 
			}
		}


		$this->load->view('User/Header_user',$header);
		$this->load->view('User/Sentiment/Sentiment_create',$body);
		$this->load->view('User/Footer_user');

	}
	public function Convert_string_array($arrs)
	{
		$result = implode(",", $arrs);
		return $result;
	}
	

    public function edit($case_id){
	
	

		
	
		$header = []; // header
		$body = [];

		$col = "admin_id";
		$user_id = $this->session->userdata('admin_id');
		$table_name = 'admin';
		$header['dp'] = $this->model_base->get_one($user_id,$col,$table_name);
		$this->db->flush_cache();
		//  info user


		$role = 'guidance';
		$status = 'published';
		$this->_filter_guidance($role,$status);
		$body['guidances'] = $this->model_base->get_all('admin as a');
		$this->db->flush_cache();
		// guidance

		
		$col = "case_id";
		$table_name = 'sentiment_case';
		$this->db->join("users as u", "sentiment_case.user_id = u.user_id");
		$body['case'] = $this->model_base->get_one($case_id,$col,$table_name);
		$this->db->flush_cache();
		//  case 

		$this->db->where('case_id',$case_id);
		$body['meetings'] = $this->model_base->get_all('sentiment_meeting');
		$this->db->flush_cache();
		//  meetiings 
		

		$this->form_validation->set_rules('admin_id', 'Select Counselor', 'required|trim');

		if($this->input->post()){
			$data = $this->input->post();

			if ($this->form_validation->run() == FALSE) {
				$body['msg_error'] = validation_errors();

			}else{
				
				unset($data['case_id']);
				$table = "sentiment_case";
				$data['case_updates'] = $this->getDatetimeNow();
				$col = 'case_id';
				$this->model_base->update_data($case_id,$col,$data,$table);
				$this->db->flush_cache();
				$this->session->set_flashdata('msg_success', 'Successfully edit!');
				
				redirect('admin/sentiment/view/'.$case_id,'refresh'); 
			}
		}


        $this->load->view('Admin/Header_admin',$header);
		$this->load->view('Admin/Sentiment/Sentiment_edit',$body);
		$this->load->view('Admin/Footer_admin');
	}
	
	public function delete($id){

		$data = $this->input->post();
		unset($data["create_case"]);
		$tbname = 'sentiment_case';
		$col = 'case_id';
		$data_update = array('case_status' =>'deleted',
							'case_updates' => $this->getDatetimeNow()
							);
		$this->model_base->update_data($id,$col,$data_update,$tbname);
		
		$this->session->set_flashdata('msg_success', 'retrieve success!');
		redirect('user/archive' ,'refresh');
		
	}

	public function _filter_guidance ($role,$status){

		if(!empty($role)){
			$this->db->where('a.admin_role', $role);
		}

		if(!empty($status)){
			$this->db->where('a.admin_status',$status);
		}

	}





	
}






