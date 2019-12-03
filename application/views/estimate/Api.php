<?php 



$movedata = $this->session->userdata('movedata');
$data = json_decode($_POST['info'],true);
$movedata['distance'] = $data[0]['dist'];
$movedata['duration'] = $data[0]['dur'];
$this->session->set_userdata('movedata',$movedata);

?>