<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Meeting extends CI_Controller {


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
		$body = [];

		$user_id = $this->session->userdata('admin_id');
		$status = 'published';
		$con = 'pending';

		$this->_filter_meeting($user_id,$status,$con);
		$body['meetings'] = $this->model_base->get_all('sentiment_meeting as sm');
		$this->db->flush_cache();

        $this->load->view('Guidance/Header_guidance');
		$this->load->view('Guidance/Meeting/Meeting_index',$body);
		$this->load->view('Guidance/Footer_guidance');
        
    }
    
    public function view(){

        $this->load->view('Guidance/Header_guidance');
		$this->load->view('Guidance/Meeting/Meeting_view');
		$this->load->view('Guidance/Footer_guidance');
        
    }

    public function create($case_id,$user_id){
		$body = [];

		$body['case_id']= $case_id;
		$body['user_id']= $user_id;

		$col = "case_id";
		$table_name = 'sentiment_case';
		$body['case'] = $this->model_base->get_one($case_id,$col,$table_name);
		$this->db->flush_cache();

		$body["test"]= "wait";

		$this->form_validation->set_rules('meet_date', 'Set a meeting date', 'required|trim');
		$this->form_validation->set_rules('case_id', 'No case found', 'required|trim');
		$this->form_validation->set_rules('user_id', 'No user found', 'required|trim');
		if($this->input->post()){
			$data = $this->input->post();
			$body["test"]= "run";


			if ($this->form_validation->run() == FALSE) {
				$body['msg_error'] = validation_errors();
				$body["test"]= "err";


			}else{
			$body["test"]= "go";

				$data["admin_id"] =  $this->session->userdata('admin_id');
				$table = "sentiment_meeting";
				$data['meet_created'] = $this->getDatetimeNow();

				$this->model_base->insert_data($data,$table);
				// create meeting

				$tbname = 'sentiment_case';
				$col = 'case_id';
				$id = $data['case_id'];
				$data_update = array('case_con' =>'meeting',
									'case_updates' => $this->getDatetimeNow()
									);
				$last_id = $this->model_base->update_data($id,$col,$data_update,$tbname);
				// update case con


				




				$this->session->set_flashdata('msg_success', 'Meeting set!');

				
				
				redirect('guidance/meeting','refresh'); 
			}
		}

        $this->load->view('Guidance/Header_guidance');
		$this->load->view('Guidance/Meeting/Meeting_create',$body);
		$this->load->view('Guidance/Footer_guidance');
        
	}
	public function ongoing($case_id,$user_id,$meet_id){
		$body = [];

		

		$body['case_id']= $case_id;
		$body['user_id']= $user_id;
		$body['meet_id']= $meet_id;

		$col = "case_id";
		$table_name = 'sentiment_case';
		$body['case'] = $this->model_base->get_one($case_id,$col,$table_name);
		$this->db->flush_cache();
		//  case
		$body['test'] = 'wait';

		$col = "meet_id";
		$table_name = 'sentiment_meeting';
		$body['meet'] = $this->model_base->get_one($meet_id,$col,$table_name);
		$this->db->flush_cache();
		// meeting
		$dataPost = $this->input->post();
		if($this->input->post('send_link')){
			unset($dataPost['send_link']);
			$this->form_validation->set_rules('meet_id', 'Set a meeting date', 'required|trim');
			$this->form_validation->set_rules('meet_link', 'No link', 'required|trim');
			if ($this->form_validation->run() == FALSE) {
				$body['msg_error'] = validation_errors();
				$body["test"]= "err";
			}else{

				$tbname = 'sentiment_meeting';
				$col = 'meet_id';
				$data_update = array('meet_link' =>$this->input->post('meet_link'),
									'meet_update' => $this->getDatetimeNow()
									);
				$this->model_base->update_data($meet_id,$col,$data_update,$tbname);

				$this->session->set_flashdata('msg_success', 'Link sent!');
				redirect('guidance/meeting/ongoing/'.$case_id.'/'.$user_id.'/'.$meet_id,'refresh');
				
			}
		}

		if($this->input->post('done')){
			unset($dataPost['done']);

			$this->form_validation->set_rules('case_id', 'no case found', 'required|trim');
			$this->form_validation->set_rules('case_con', 'select a status', 'required|trim');
			$this->form_validation->set_rules('meet_id', 'no meeting found', 'required|trim');
			$this->form_validation->set_rules('meet_note', 'no note found', 'required|trim');
			if ($this->form_validation->run() == FALSE) {
				$body['msg_error'] = validation_errors();
				$body["test"]= "err";
			}else{

				$tbname = 'sentiment_case';
				$col = 'case_id';
				$data_update = array('case_con' =>$this->input->post('case_con'),
									'case_updates' => $this->getDatetimeNow()
									);
				$this->model_base->update_data($case_id,$col,$data_update,$tbname);
				// case

				$tbname = 'sentiment_meeting';
				$col = 'meet_id';
				$data_update = array('meet_con' =>'done',
									'meet_update' => $this->getDatetimeNow()
									);
				$this->model_base->update_data($meet_id,$col,$data_update,$tbname);
				// meeting

				$this->session->set_flashdata('msg_success', 'Meeting Done');
				redirect('guidance/case/','refresh');
				
			}
		}

		if($this->input->post("upload_file")){
			unset($dataPost['upload_file']);

			$this->form_validation->set_rules('meet_id', 'no case found', 'required|trim');

			if ($this->form_validation->run() == FALSE){
				$body['msg_error'] = validation_errors();
		   }else{
				$config['upload_path']   = './uploads/plan'; 
				$config['allowed_types'] = 'pdf'; 
				$config['encrypt_name'] = FALSE; 
				$config['max_size'] = "10000000"; // Can be set to particular file size , here it is 2 MB(2048 Kb)
				$this->load->library('upload', $config);
				$this->upload->initialize($config);

				$upload_data = array();
			    $table = "sentiment_meeting";
			    $upload_data['meet_update'] = $this->getDatetimeNow();
			    $col = 'meet_id';
			    if ( !$this->upload->do_upload('meet_file')) {
				 $body['msg_error'] = $this->upload->display_errors();
		 		}else { 
					$upload = $this->upload->data();
					$body['filess'] = $upload;
					$upload_data['meet_file'] = 'uploads/plan/' . $upload['file_name'];
					$this->model_base->update_data($meet_id,$col,$upload_data,$table);
					$this->db->flush_cache();
					$this->session->set_flashdata('msg_success', 'File uploaded');
					// redirect('guidance/meeting/ongoing/'.$case_id.'/'.$user_id.'/'.$meet_id,'refresh');

					// redirect('/guidance/case/' ,'refresh');
				}
			
			

		   }

		}

        $this->load->view('Guidance/Header_guidance');
		$this->load->view('Guidance/Meeting/Meeting_ongoing',$body);
		$this->load->view('Guidance/Footer_guidance');
        
	}
	public function edit(){

        $this->load->view('Guidance/Header_guidance');
		$this->load->view('Guidance/Meeting/Meeting_edit');
		$this->load->view('Guidance/Footer_guidance');
        
	}
	
	// function below
	public function _filter_meeting($admin_id,$status,$con){
		$this->db->join("users as u", "sm.user_id = u.user_id");
		$this->db->join("sentiment_case as sc", "sm.case_id = sc.case_id");


		if(!empty($admin_id)){
			$this->db->where('sm.admin_id',$admin_id);
		}
		if(!empty($status)){
			$this->db->where('sm.meet_status',$status);
		}
		if(!empty($con)){
			$this->db->where('sm.meet_con',$con);
		}
		
	}
}