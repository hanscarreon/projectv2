<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Analytic extends CI_Controller {

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

	
	public function index($date1,$date2){

		$header = []; // header
		$body = [];
		$footer = [];

		$col = "admin_id";
		$user_id = $this->session->userdata('admin_id');
		$table_name = 'admin';
		$header['dp'] = $this->model_base->get_one($user_id,$col,$table_name);
		$this->db->flush_cache();
		// header info update
		
		$user_id = $this->session->userdata('admin_id');
		// $status = 'published';
		// $con = 'ongoing';


		$this->load->view('Admin/Header_admin',$header);
		$this->load->view('Admin/Analytic/Analytic_index',$body);
		$this->load->view('Admin/Footer_admin');
		$this->load->view('Admin/Analytic/chart',$footer);

	}
	public function _count_sort($pos){
		$this->db->join("user", "sentiment_case.user_id = user.user_id");
		$this->db->where('case_status','published');
		$this->db->where('case_con','ongoing');
    	$this->db->where('user.user_pos',$pos);


	}
	
    public function _sorting($name,$cases,$con,$pos){
		$this->db->where('case_status','published');

    	if($name != 'name'){
			$namesearch = array('user.user_fname' => $name, 'user.user_lname' => $name, 'user.user_mname' => $name);
			$this->db->or_having($namesearch);
    	}

    	if($cases != 'study'){
    		$this->db->where('case_study',$cases);
    	}
    	if($con != 'con'){
    		$this->db->where('case_con',$con);
    	}else{
    		$this->db->where('case_con','ongoing');

    	}
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
	
	public function _filter_sentiment($user_id,$status,$con){
		$this->db->join("users as u", "sc.user_id = u.user_id");
		$this->db->join("admin as a", "sc.admin_id = a.admin_id");

		// $this->db->where('sc.admin_id',$user_id); admin wla dapat to
		
		if(!empty($status)){
			$this->db->where('sc.case_status',$status);
		}
		if(!empty($con)){
			$this->db->where('sc.case_con',$con);
		}
	}
	  
     

}
