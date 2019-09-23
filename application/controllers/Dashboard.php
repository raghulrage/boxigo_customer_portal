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
		$this->data['estimate_list'] = $this->fetch_estimates($this->session->userdata('user_id'));
		$this->data['cancelled_list'] = $this->fetch_cancelled_estimates($this->session->userdata('user_id'));
		foreach ($this->data['estimate_list']['data'] as $key => $value) {
			$arr = $this->load->post('http://boxigo.in/boxigo-backend-api/product/customer_estimate_flow_service.php',array("estimate_status"=>"estimate_comparison","estimate_id"=>$value->estimate_id));
			$arr = json_decode($arr,true);
			if(array_key_exists('Customer_Estimate_Flow', $arr)){
				$value->quotations['count'] = count($arr['Customer_Estimate_Flow']);
				$value->quotations['data'] = $arr['Customer_Estimate_Flow']; 	
			}else{
				$value->quotations = '0';
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