<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->library('encrypt');
		$this->load->model('Dashboard_model');
		if(!$this->session->userdata('user_id')){
			redirect('home');
		}
		// $this->data['estimate_list'] = $this->fetch_estimates($this->session->userdata('user_id'));
		$this->data['estimate_list'] = $this->load->post('http://boxigo.in/boxigo-backend-api/product/customer_estimate_flow_service.php',array("user_id"=>$this->session->userdata('user_id'),"estimate_status"=>"all"));

		$this->data['cancelled_list'] = $this->fetch_cancelled_estimates($this->session->userdata('user_id'));
		$estimate_list = json_decode($this->data['estimate_list']);
		
		$this->data['estimate_data'] = $estimate_list->Customer_Estimate_Flow;


		foreach ($this->data['estimate_data'] as $key => $value) {
			$quote_comparison = json_decode($this->load->post('http://boxigo.in/boxigo-backend-api/product/customer_estimate_flow_service.php',array("user_id"=>$this->session->userdata('user_id'),"estimate_status"=>"estimate_comparison","estimate_id"=>$value->estimate_id)),true);
			$value->quotations = array();
			if(!is_null($quote_comparison)){
				if(array_key_exists('Customer_Estimate_Flow', $quote_comparison)){
					foreach ($quote_comparison as $k => $v) {
						foreach ($v as $kk => $vv) {
							foreach ($vv as $kkk => $vvv) {
								if($kkk == "quote" || $kkk == "addition_info"){
									$vvv = json_decode($vvv,true);
								}
								$quote_comparison[$k][$kk][$kkk] = $vvv;
							}
							array_push($value->quotations, $quote_comparison[$k][$kk]);
						}
					}
				}else{
					$value->quotations = $quote_comparison['message'];
				}
			}
		}

	}

	public function index(){
		$this->load->user_dashboard('User_dashboard',$this->data);
	}

	public function cancelled_estimates(){
		$this->load->user_dashboard('Cancelled_estimates_user',$this->data);
	}

	public function payment_gateway(){
		$this->load->user_dashboard('Payment_gateway',$this->data);
	}

	function fetch_estimates($id){
		$estimates = $this->Dashboard_model->fetch_estimates($id);
		return $estimates;
	}

	function fetch_cancelled_estimates($id){
		$estimates = $this->Dashboard_model->fetch_cancelled_estimates($id);
		return $estimates;
	}
}

?>