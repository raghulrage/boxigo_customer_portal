<?php
$array['living_room'] = array("Furniture"=>array('center_table'=>1,'computer_table'=>2,'foldable_chair'=>1,'home_theater'=>2,'non_foldable_chair'=>1,'plastic_chair'=>3,'side_table'=>1,'sofa_1_seater'=>1,'sofa_2_seater'=>1,'sofa_3_seater'=>1,'tv_cabinet'=>1,'study_table'=>1),'Electronic'=>array('inverter'=>0,'fan'=>3,'television'=>1,'computer'=>1));
$array['bed_room'] = array("Furniture"=>array('center_table'=>1,'computer_table'=>2,'foldable_chair'=>1,'home_theater'=>2,'non_foldable_chair'=>1,'plastic_chair'=>3,'side_table'=>1,'sofa_1_seater'=>1,'sofa_2_seater'=>1,'sofa_3_seater'=>1,'tv_cabinet'=>1,'study_table'=>1),'Electronic'=>array('inverter'=>0,'fan'=>3,'television'=>1,'computer'=>1));
$array['kitchen'] = array("Furniture"=>array('center_table'=>1,'computer_table'=>2,'foldable_chair'=>1,'home_theater'=>2,'non_foldable_chair'=>1,'plastic_chair'=>3,'side_table'=>1,'sofa_1_seater'=>1,'sofa_2_seater'=>1,'sofa_3_seater'=>1,'tv_cabinet'=>1,'study_table'=>1),'Electronic'=>array('inverter'=>0,'fan'=>3,'television'=>1,'computer'=>1));
$array['others'] = array("Furniture"=>array('center_table'=>1,'computer_table'=>2,'foldable_chair'=>1,'home_theater'=>2,'non_foldable_chair'=>1,'plastic_chair'=>3,'side_table'=>1,'sofa_1_seater'=>1,'sofa_2_seater'=>1,'sofa_3_seater'=>1,'tv_cabinet'=>1,'study_table'=>1),'Electronic'=>array('inverter'=>0,'fan'=>3,'television'=>1,'computer'=>1));
$array = array('rooms'=>$array);
echo "<pre>";
print_r(json_encode($array));
