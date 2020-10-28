<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Archive extends CI_Controller {

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
	public function index(){

		$header = []; // header
		$body = [];

		$col = "admin_id";
		$user_id = $this->session->userdata('admin_id');
		$table_name = 'admin';
		$header['dp'] = $this->model_base->get_one($user_id,$col,$table_name);
		$this->db->flush_cache();
		// header info update
		$footer = [];

		$pos =  $this->session->userdata('user_pos');
		$this->db->flush_cache();
		$this->db->join("user", "sentiment_case.user_id = user.user_id");
		$this->_sorting($pos);
		$this->db->where('sentiment_case.case_status','deleted');
		$body['sentiments'] = $this->model_base->get_all('sentiment_case');
		$this->db->flush_cache();


		$this->_count_sort($pos);
		$overall = $this->model_base->count_data('sentiment_case');
		// $body["total"]= $config["total_rows"];
		$body["total"]= $overall;
		$this->load->view("template/site_admin_header",$header);
		$this->load->view('admin/archive/index',$body);
		$this->load->view("template/site_admin_footer",$footer);

	}
	public function _count_sort($pos){
		$this->db->join("user", "sentiment_case.user_id = user.user_id");
		$this->db->where('case_status','published');
		$this->db->where('case_con','ongoing');
    	$this->db->where('user.user_pos',$pos);


	}
	
    public function _sorting($pos){
		$this->db->where('case_status','deleted');
    	$this->db->where('user.user_pos',$pos);
    }

	public function restore($id){


		$data = array('case_status' => 'published' );
		$col = 'case_id';
		$tbname = 'sentiment_case';
		$this->model_base->update_data($id,$col,$data,$tbname);
		$this->session->set_flashdata('msg_success', 'Restore success!');
		$this->db->flush_cache();	
		redirect('admin/archive/index/' ,'refresh');	
		

	}
	  
     

}