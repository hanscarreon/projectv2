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
		if ( $this->have_sess_user() != true ){
			$this->logout_user();	
		}
	}
	
	public function index(){

		
        $this->load->view('User/Header_user');
		$this->load->view('User/Sentiment/Sentiment_index');
		$this->load->view('User/Footer_user');
    }
    
    public function view(){
        $this->load->view('User/Header_user');
		$this->load->view('User/Sentiment/Sentiment_view');
		$this->load->view('User/Footer_user');
	}
	
	public function create(){
       
		$body = [];

			
		$this->form_validation->set_rules('case_text', 'sentiment text', 'required|trim');
		$this->form_validation->set_rules('guidance_id', 'Select Counselor', 'required|trim');
		$this->form_validation->set_rules('case_reason[]', 'Pick atlest one reason', 'required|trim');
		$this->form_validation->set_rules('case_res', 'choose you prefer contact', 'required');

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


		$this->load->view('User/Header_user');
		$this->load->view('User/Sentiment/Sentiment_create',$body);
		$this->load->view('User/Footer_user');

	}
	public function Convert_string_array($arrs)
	{
		$result = implode(",", $arrs);
		return $result;
	}
	

    public function edit(){
		$this->load->view('User/Header_user');
		$this->load->view('User/Sentiment/Sentiment_edit');
		$this->load->view('User/Footer_user');
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





	
}






