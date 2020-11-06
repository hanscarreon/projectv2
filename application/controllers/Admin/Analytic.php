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

	
	public function index($from='date1',$to='date2',$case='xall',$gender='xall',$division='xall',$stud='xall',$guidance='xall'){

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

      
		$this->db->where("case_created >=", '2020-01-01-00-00-00');
		$this->db->where("case_created <=",  '2020-01-31-00-00-00');
		$footer['jan'] = $this->model_base->count_data('sentiment_case');
		$this->db->where("case_created >=", '2020-02-01-00-00-00');
		$this->db->where("case_created <=",  '2020-02-31-00-00-00');
		$footer['feb'] = $this->model_base->count_data('sentiment_case');
		$this->db->where("case_created >=", '2020-03-01-00-00-00');
		$this->db->where("case_created <=",  '2020-03-31-00-00-00');
		$footer['march'] = $this->model_base->count_data('sentiment_case');
		$this->db->where("case_created >=", '2020-04-01-00-00-00');
		$this->db->where("case_created <=",  '2020-04-31-00-00-00');
		$footer['apr'] = $this->model_base->count_data('sentiment_case');
		$this->db->where("case_created >=", '2020-05-01-00-00-00');
		$this->db->where("case_created <=",  '2020-05-31-00-00-00');
		$footer['may'] = $this->model_base->count_data('sentiment_case');
		$this->db->where("case_created >=", '2020-06-01-00-00-00');
		$this->db->where("case_created <=",  '2020-06-31-00-00-00');
		$footer['june'] = $this->model_base->count_data('sentiment_case');
		$this->db->where("case_created >=", '2020-07-01-00-00-00');
		$this->db->where("case_created <=",  '2020-07-31-00-00-00');
		$footer['july'] = $this->model_base->count_data('sentiment_case');
		$this->db->where("case_created >=", '2020-08-01-00-00-00');
		$this->db->where("case_created <=",  '2020-08-31-00-00-00');
		$footer['aug'] = $this->model_base->count_data('sentiment_case');
		$this->db->where("case_created >=", '2020-09-01-00-00-00');
		$this->db->where("case_created <=",  '2020-09-31-00-00-00');
		$footer['sept'] = $this->model_base->count_data('sentiment_case');
		$this->db->where("case_created >=", '2020-10-01-00-00-00');
		$this->db->where("case_created <=",  '2020-10-31-00-00-00');
		$footer['oct'] = $this->model_base->count_data('sentiment_case');
		$this->db->where("case_created >=",  '2020-11-01-00-00-00');
		$this->db->where("case_created <=",  '2020-11-31-00-00-00');
		$footer['nov'] = $this->model_base->count_data('sentiment_case');
		$this->db->where("case_created >=",  '2020-12-01-00-00-00');
		$this->db->where("case_created <=",  '2020-12-31-00-00-00');
		$footer['dec'] = $this->model_base->count_data('sentiment_case');
		$body['sentiments'] = $this->model_base->get_all('sentiment_case as sc');


		$body['students'] = $this->model_base->get_all('users');
		
		$this->db->where('admin_role', 'guidance');
		$this->db->where('admin_status', 'published');
        $body['guidances'] = $this->model_base->get_all('admin');

        
		if($this->input->post()){
			$data = $this->input->post();
			if(!empty($data['filter_from'])){
				$data['filter_from'] = $this->security->xss_clean($data['filter_from']);
			}else{
				$data['filter_from'] = 'date1';
			}
			// date1

			if(!empty($data['filter_to'])){
				$data['filter_to'] = $this->security->xss_clean($data['filter_to']);
			}else{
				$data['filter_to'] = 'date2';
			}
			// date 2

			if(!empty($data['filter_case'])){
				$data['filter_case'] = $this->security->xss_clean($data['filter_case']);
				$case = $data['filter_case'];
			}else{
				$data['filter_case'] = 'xall';
			}
			// case

			if(!empty($data['filter_gender'])){
				$data['filter_gender'] = $this->security->xss_clean($data['filter_gender']);
			}else{
				$data['filter_gender'] = 'xall';
			}
			// gender

			if(!empty($data['filter_division'])){
				$data['filter_division'] = $this->security->xss_clean($data['filter_division']);
				$data['filter_division'] = $this->_removeSpace($data['filter_division']);
			}else{
				$data['filter_division'] = 'xall';
			}
			// division

			if(!empty($data['filter_student'])){
				$data['filter_student'] = $this->security->xss_clean($data['filter_student']);
			}else{
				$data['filter_student'] = 'xall';
			}
			// student

			if(!empty($data['filter_admin'])){
				$data['filter_admin'] = $this->security->xss_clean($data['filter_admin']);
			}else{
				$data['filter_admin'] = 'xall';
			}
			// student

				redirect('admin/analytic/index/'.$data['filter_from'].'/'.$data['filter_to'].'/'.$data['filter_case'].'/'.$data['filter_gender'].'/'.$data['filter_division'].'/'.$data['filter_student'].'/'.$data['filter_admin'] ,'refresh');
				$this->session->set_flashdata('msg_success', 'Filter success!');
		}

		$this->_filter_analytics($from,$to,$case,$gender,$division,$stud,$guidance);
		$total = $this->model_base->count_data('sentiment_case as sc');
		// total

		$this->_filter_analytics($from,$to,$case,$gender,$division,$stud,$guidance);
		$this->db->where("sc.case_result",'negative');
		$totalNeg = $this->model_base->count_data('sentiment_case as sc');
		$negpercentage =  $total >= 1 ?  $totalNeg / $total * 100:0;
		$footer['neg'] = intval($negpercentage);
		// negative

		$this->_filter_analytics($from,$to,$case,$gender,$division,$stud,$guidance);
		$this->db->where("sc.case_result",'positive');
		$totalPos = $this->model_base->count_data('sentiment_case as sc');
		$pospercentage =  $total >= 1 ?  $totalPos / $total * 100 : 0 ;
		$footer['pos'] = intval($pospercentage);
		// pos

		$this->_filter_analytics($from,$to,$case,$gender,$division,$stud,$guidance);
		$this->db->where("sc.case_result",'neutral');
		$totalMid = $this->model_base->count_data('sentiment_case as sc');
		$midpercentage =  $total >= 1 ?  $totalMid / $total * 100 :0;
		$footer['mid'] = intval($midpercentage);
		// chart

		$body['total'] = $total;
		$body['case'] = $gender;
		// total
		$body['totalneg'] = $totalNeg;
		$body['negpercentage'] = $negpercentage;
		// neg
		$body['totalPos'] = $totalPos;
		$body['pospercentage'] = $pospercentage;
		// pos
		$body['totalMid'] = $totalMid;
		$body['midpercentage'] = $midpercentage;
		// mid

		$col = "user_id";
		$user_id = $stud;
		$table_name = 'users';
		
		$body['studs'] = $stud !='xall' ? $this->model_base->get_one($user_id,$col,$table_name) : 'All' ;

		$col = "admin_id";
		$admin_id = $guidance;
		$table_name = 'admin';
		$body['adss'] = $guidance != 'xall' ? $this->model_base->get_one($admin_id,$col,$table_name) : 'All';

		$this->load->view('Admin/Header_admin',$header);
		$this->load->view('Admin/Analytic/Analytic_index',$body);
		$this->load->view('Admin/Footer_admin');
		$this->load->view('Admin/Analytic/chart',$footer);

	}
	public function _filter_analytics($from,$to,$case,$gender,$division,$stud,$guidance){
		$this->db->join("users as u", "sc.user_id = u.user_id");
		$this->db->join("admin as a", "sc.admin_id = a.admin_id");

		if( $from != 'date1'){
		 	$this->db->where("sc.case_created >=",  $from);
		}
		if($to != 'date2'){
			$this->db->where("sc.case_created <=",  $to);
		}
		if($case != 'xall'){
			$this->db->where("sc.case_con",  $case);
		}
		if($gender != 'xall'){
			$this->db->where('u.user_gender',$gender);
		}
		if($division != 'xall'){
			$this->db->where("u.user_gender",  $division);
		}
		if($stud != 'xall'){
			$this->db->where("u.user_id",  $stud);
		}
		if($guidance != 'xall'){
			$this->db->where("a.admin_id",  $guidance);
	   	}
	}
	public function _filter_total($from,$to,$case,$gender,$division){
		$this->db->join("users as u", "sc.user_id = u.user_id");

		if( $from != 'date1'){
		 	$this->db->where("sc.case_created >=",  $from);
		}
		if($to != 'date2'){
			$this->db->where("sc.case_created <=",  $to);
		}
		if($case != 'xall'){
			$this->db->where("sc.case_con",  $case);
		}
		if($gender != 'xall'){
			$this->db->where('u.user_gender',$gender);
		}
		if($division != 'xall'){
			$this->db->where("u.user_gender", $this->addDashes($division));
	   	}

	}

	public function _count_sort($pos){
		$this->db->join("user", "sentiment_case.user_id = user.user_id");
		$this->db->where('case_status','published');
		$this->db->where('case_con','ongoing');
    	$this->db->where('user.user_pos',$pos);


	}
	public function _removeSpace($data){
		$data =	str_replace(' ', '-', strtolower($data));
		return $data;

	}
	public function addDashes($data){
		$data = str_replace("-", " ", $data);
		return $data;
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
		if(!empty($status)){
			$this->db->where('sc.case_status',$status);
		}
		if(!empty($con)){
			$this->db->where('sc.case_con',$con);
		}
	}
	  
     

}
