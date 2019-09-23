<?php 

class Dashboard_model extends CI_Model{

	function fetch_estimates($id){
		$this->db->where('user_id',$id);
		//$this->db->where('status',1);
		$this->db->order_by('moving_on','asc');
		$query = $this->db->get('estimate');
		$result = $this->generate_result($query->result());
		return $result;
	}

	function fetch_cancelled_estimates($id){
		$this->db->where('user_id',$id);
		$this->db->where('status',0);
		$this->db->order_by('moving_on','asc');
		$query = $this->db->get('estimate');
		$result = $this->generate_result($query->result());
		return $result;
	}

	function generate_result($arr){
	   // $arr = (is_object($arr)) ? json_decode(json_encode($arr), true) : $arr;
		// foreach ($arr as $key1 => $value1) {
		// 	$items = explode("|", $value1->items);
		// 	$items = array_filter($items);
		// 	if(!empty($items)){
		// 		foreach ($items as $key => $value) {
		// 			list($k,$v) = explode("=", $value);
		// 			$result[$k] = $v;
		// 		}
		// 	}else{
		// 		$result = array();
		// 	}
		// 	$arr[$key1]->items = $result;
		// 	$finalData['data'] = $arr;
		// }
		$finalData['total'] = sizeof($arr);
		foreach ($arr as $key => $value) {
			$value->items = json_decode($value->items,true);
		}
		$finalData['data'] = $arr;
		return $finalData;
	}

}

?>