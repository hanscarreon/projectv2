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

		$header = [];
		$body = [];
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
    public function delete_case($case_id) {
		$body['sentiments'] = $this->model_base->delete_data($case_id, 'case_id', 'case_status', 'sentiment_case');
		$this->session->set_flashdata('msg_success', 'Case Deleted!');	
		redirect('admin/dashboard/index/name/study/con','refresh');
		
	}





	public function detect_sentiment($string){
		$string = urlencode($string);
		$api_key = "7b50350a2caa3035c741f773f8ad85";
		$url = 'https://api.paysify.com/sentiment?api_key='.$api_key.'&string='.$string.'';
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$result = curl_exec($ch);
		$response = json_decode($result,true);
		curl_close($ch);
		return $response;
    }
	  
     

}