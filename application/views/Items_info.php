<!-- fetch data from api -->
<?php
	$url['onebhk'] = 'http://boxigo.in//boxigo-backend-api/product/itemsInfo_search_service.php?move_size=1bhk'; // path to your JSON file
	$url['twobhk'] = 'http://boxigo.in//boxigo-backend-api/product/itemsInfo_search_service.php?move_size=2bhk'; // path to your JSON file
	$url['threebhk'] = 'http://boxigo.in//boxigo-backend-api/product/itemsInfo_search_service.php?move_size=3bhk'; // path to your JSON file
	foreach ($url as $key => $value) {
		$content = file_get_contents($url[$key]); 
		$room_data[$key] = json_decode($content);
	}
?>

<!-- end -->

<?php 



$movedata = $this->session->userdata('movedata');
if($movedata['property_size'] == "1 BHK"){
	$living_room_item = $room_data['onebhk']->items->rooms->living_room;
	$bed_room_item = $room_data['onebhk']->items->rooms->bed_room;
	$kitchen_item = $room_data['onebhk']->items->rooms->kitchen;
	$misc_item = $room_data['onebhk']->items->rooms->others;
}elseif ($movedata['property_size'] == "2 BHK") {
	$living_room_item = $room_data['twobhk']->items->rooms->living_room;
	$bed_room_item = $room_data['twobhk']->items->rooms->bed_room;
	$kitchen_item = $room_data['twobhk']->items->rooms->kitchen;
	$misc_item = $room_data['twobhk']->items->rooms->others;
}elseif ($movedata['property_size'] == "3 BHK") {
	$living_room_item = $room_data['threebhk']->items->rooms->living_room;
	$bed_room_item = $room_data['threebhk']->items->rooms->bed_room;
	$kitchen_item = $room_data['threebhk']->items->rooms->kitchen;
	$misc_item = $room_data['threebhk']->items->rooms->others;
}else{
	$living_room_item = $room_data['threebhk']->items->rooms->living_room;
	$bed_room_item = $room_data['threebhk']->items->rooms->bed_room;
	$kitchen_item = $room_data['threebhk']->items->rooms->kitchen;
	$misc_item = $room_data['threebhk']->items->rooms->others;
}
// if($movedata['property_size'] == "1 BHK"){
// 	$living_room_item = unserialize(ONEBHK_LIVING_ROOM_ITEMS);
// 	$bed_room_item = unserialize(ONEBHK_BED_ROOM_ITEMS);
// 	$kitchen_item = unserialize(ONEBHK_KITCHEN_ITEMS);
// 	$misc_item = unserialize(ONEBHK_MISC_ITEMS);
// }elseif ($movedata['property_size'] == "2 BHK") {
// 	$living_room_item = unserialize(TWOBHK_LIVING_ROOM_ITEMS);
// 	$bed_room_item = unserialize(TWOBHK_BED_ROOM_ITEMS);
// 	$kitchen_item = unserialize(TWOBHK_KITCHEN_ITEMS);
// 	$misc_item = unserialize(TWOBHK_MISC_ITEMS);
// }elseif ($movedata['property_size'] == "3 BHK") {
// 	$living_room_item = unserialize(THREEBHK_LIVING_ROOM_ITEMS);
// 	$bed_room_item = unserialize(THREEBHK_BED_ROOM_ITEMS);
// 	$kitchen_item = unserialize(THREEBHK_KITCHEN_ITEMS);
// 	$misc_item = unserialize(THREEBHK_MISC_ITEMS);
// }else{
// 	$living_room_item = unserialize(THREEPLUSBHK_LIVING_ROOM_ITEMS);
// 	$bed_room_item = unserialize(THREEPLUSBHK_BED_ROOM_ITEMS);
// 	$kitchen_item = unserialize(THREEPLUSBHK_KITCHEN_ITEMS);
// 	$misc_item = unserialize(THREEPLUSBHK_MISC_ITEMS);
// }

$living_room_item = filter_array($living_room_item);
$bed_room_item = filter_array($bed_room_item);
$kitchen_item = filter_array($kitchen_item);
$misc_item = filter_array($misc_item);

function filter_array($array) {
   foreach ($array as $key => &$value) {
      if (empty($value)) { unset($array[$key]);}
      else {
         if (is_array($value)) {
            $value = filter_array($value);
            if (empty($value)) { unset($array[$key]);}
         }
      }
   }
   	return $array;
}



?>





<section class="section" style="padding-top:70px">
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-3 border-right">

				<?php echo form_open('estimate/items_data',array('class'=>'form')); ?>
				<ul class="nav nav-pills mb-3 justify-content-center d-block" id="pills-tab" role="tablist">
					<li class="nav-item mt-4 mb-5 nav_item_with_badge">
						<a class="nav-link active rounded" id="pills-livingroom-tab" data-toggle="pill" href="#pills-livingroom" role="tab" aria-controls="pills-livingroom" aria-selected="true">Living Room <span data-indv-value="0" class="data-indv-count living_room_item_count badge badge-warning"></span></a>
					</li>
					<li class="nav-item mt-4 mb-5 nav_item_with_badge">
						<a class="nav-link rounded" id="pills-bedroom-tab" data-toggle="pill" href="#pills-bedroom" role="tab" aria-controls="pills-bedroom" aria-selected="false">Bed Room <span data-indv-value="0" class="data-indv-count bed_room_item_count badge badge-warning"></span></a>
					</li>
					<li class="nav-item mt-4 mb-5 nav_item_with_badge">
						<a class="nav-link rounded" id="pills-kitchen-tab" data-toggle="pill" href="#pills-kitchen" role="tab" aria-controls="pills-kitchen" aria-selected="false">Kitchen <span data-indv-value="0" class="data-indv-count kitchen_room_item_count badge badge-warning"></span></a>
					</li>
					<li class="nav-item mt-4 mb-5 nav_item_with_badge">
						<a class="nav-link rounded" id="pills-other-tab" data-toggle="pill" href="#pills-other" role="tab" aria-controls="pills-other" aria-selected="false">Other Items<span data-indv-value="0" class="data-indv-count other_item_count badge badge-warning"></span></a>
					</li>
				</ul>
				<h4 class="text-center pt-4 info-title">Total Number Of Items Added</h4>
				<h2 class="total_items text-warning info-title text-center total_items_count"></h2>

			</div>

			<div class="col-sm-9">
				<div class="tab-content" id="pills-tabContent">
					<div class="tab-pane fade show active" id="pills-livingroom" role="tabpanel" aria-labelledby="pills-livingroom-tab">
						<?php $i=0; foreach ($living_room_item as $key => $value) { ?>
							<h4 class="title">Select Your&nbsp;<?= ucwords($key); ?>&nbsp;Items</h4>
							<div class="row justify-content-md-start justify-content-center align-items-center pl-md-5 pr-md-5">
								<!-- <?php if($i++ == 0): ?><p class="mx-2">I have </p><?php endif; ?> -->
								<?php $j=1; foreach ($value as $k => $v) { ?>
									<!-- <?php if($j == count($value)){ echo " <p>and</p> "; } ?> -->
		 								<div class="col-sm-1 col-md-1 col-lg-2 form-group mx-2 text-center card item_style_box p-0">
		 									
											<div class="input-group">
												<div class="row d-flex justify-content-center align-items-center">
													<div class="col col-sm-6">

													<input type="text" min="0" name="living_<?= $k; ?>" class="living_room_items_input form-control2 input-number text-center info-title" value="<?= set_value($k,$v);?>">
													
													</div>

													<div class="col col-sm-6">
														<img src="<?=base_url();?>images/items/<?= $k;?>.png" alt='image'/>
													</div>
												</div>
											</div>
											<p class="mx-2 mt-2"><?= ucwords(str_replace("_", " ", $k)); ?></p>
											<div class="input-group">
												<div class="input-group-prepend mr-auto">
													<span class="input-group-text pointer btn-number1 item_style_btn" disabled="disabled" data-type="minus" data-field="living_<?= $k; ?>">-</span>
												</div>
												<div class="input-group-append ml-auto">
													<span class="input-group-text pointer btn-number1 item_style_btn" data-type="plus" data-field="living_<?= $k; ?>">+</span>
												</div>
											</div>
										</div>

								<?php } ?>
							</div>
						<?php } ?>
					</div>
					<div class="tab-pane fade" id="pills-bedroom" role="tabpanel" aria-labelledby="pills-bedroom-tab">
						<?php $i=0; foreach ($bed_room_item as $key => $value) { ?>
							<h4 class="title">Select Your&nbsp;<?= ucwords($key); ?>&nbsp;Items</h4>
							<div class="row justify-content-md-start justify-content-center align-items-center pl-md-5 pr-md-5">
								<!-- <?php if($i++ == 0): ?><p class="mx-2">I have </p><?php endif; ?> -->
								<?php $j=1; foreach ($value as $k => $v) { ?>
									<!-- <?php if($j == count($value)){ echo " <p>and</p> "; } ?> -->
										<div class="col-sm-1 col-md-1 col-lg-2 form-group mx-2 text-center card item_style_box p-0">
											<div class="input-group">
												<div class="row d-flex justify-content-center align-items-center">
													<div class="col col-sm-6">
														<input type="text" min="0" name="bed_<?= $k; ?>" class="bed_room_items_input form-control2 input-number text-center info-title" value="<?= set_value($k,$v);?>">
													</div>
													<div class="col col-sm-6">
                                                        <img src="<?=base_url();?>images/items/<?= $k;?>.png" alt='image'/>
													</div>
												</div>
											</div>
											<p class="mx-2 mt-2"><?= ucwords(str_replace("_", " ", $k)); ?></p>
												<div class="input-group">
													<div class="input-group-prepend mr-auto">
														<span class="input-group-text pointer btn-number2 item_style_btn" disabled="disabled" data-type="minus" data-field="bed_<?= $k; ?>">-</span>
													</div>
												
													<div class="input-group-append ml-auto">
														<span class="input-group-text pointer btn-number2 item_style_btn" data-type="plus" data-field="bed_<?= $k; ?>">+</span>
													</div>
												</div>
										</div>
										
								<?php } ?>
							</div>
						<?php } ?>
					</div>
					<div class="tab-pane fade" id="pills-kitchen" role="tabpanel" aria-labelledby="pills-kitchen-tab">
						<?php $i=0; foreach ($kitchen_item as $key => $value) { ?>
							<h4 class="title">Select Your&nbsp;<?= ucwords($key); ?>&nbsp;Items</h4>
							<div class="row justify-content-md-start justify-content-center align-items-center pl-md-5 pr-md-5">
								<!-- <?php if($i++ == 0): ?><p class="mx-2">I have </p><?php endif; ?> -->
								<?php $j=1; foreach ($value as $k => $v) { ?>
									<!-- <?php if($j == count($value)){ echo " <p>and</p> "; } ?> -->
										<div class="col-sm-1 col-md-1 col-lg-2 form-group mx-2 text-center card item_style_box p-0">
											<div class="input-group">
												<div class="row d-flex justify-content-center align-items-center">
													<div class="col col-sm-6">
														<input type="text" min="0" name="kitchen_<?= $k; ?>" class="kitchen_room_items_input form-control2 input-number text-center info-title" value="<?= set_value($k,$v);?>">
													</div>
													<div class="col col-sm-6">
                                                        <img src="<?=base_url();?>images/items/<?= $k;?>.png" alt='image'/>
													</div>
												</div>
											</div>
											<p class="mx-2 mt-2"><?= ucwords(str_replace("_", " ", $k)); ?></p>
												<div class="input-group">
													<div class="input-group-prepend mr-auto">
														<span class="input-group-text pointer btn-number3 item_style_btn" disabled="disabled" data-type="minus" data-field="kitchen_<?= $k; ?>">-</span>
													</div>
												
													<div class="input-group-append ml-auto">
														<span class="input-group-text pointer btn-number3 item_style_btn" data-type="plus" data-field="kitchen_<?= $k; ?>">+</span>
													</div>
												</div>
										</div>
										
								<?php } ?>
							</div>
						<?php } ?>
					</div>
					<div class="tab-pane fade" id="pills-other" role="tabpanel" aria-labelledby="pills-other-tab">
						<?php $i=0; foreach ($misc_item as $key => $value) { ?>
							<h4 class="title">Select Your&nbsp;<?= ucwords($key); ?>&nbsp;Items</h4>
							<div class="row justify-content-md-start justify-content-center align-items-center pl-md-5 pr-md-5">
								<!-- <?php if($i++ == 0): ?><p class="mx-2">I have </p><?php endif; ?> -->
								<?php $j=1; foreach ($value as $k => $v) { ?>
									<!-- <?php if($j == count($value)){ echo " <p>and</p> "; } ?> -->
										<div class="col-sm-1 col-md-1 col-lg-2 form-group mx-2 text-center card item_style_box p-0">
											<div class="input-group">
												<div class="row d-flex justify-content-center align-items-center">
													<div class="col col-sm-6">
														<input type="text" min="0" name="other_<?= $k; ?>" class="other_items_input form-control2 input-number text-center info-title" value="<?= set_value($k,$v);?>">
													</div>
													<div class="col col-sm-6">
                                                        <img src="<?=base_url();?>images/items/<?= $k;?>.png" alt='image'/>
													</div>
												</div>
											</div>
											<p class="mx-2 mt-2"><?= ucwords(str_replace("_", " ", $k)); ?></p>
												<div class="input-group">
													<div class="input-group-prepend mr-auto">
														<span class="input-group-text pointer btn-number4 item_style_btn" disabled="disabled" data-type="minus" data-field="other_<?= $k; ?>">-</span>
													</div>
												
													<div class="input-group-append ml-auto">
														<span class="input-group-text pointer btn-number4 item_style_btn" data-type="plus" data-field="other_<?= $k; ?>">+</span>
													</div>
												</div>
										</div>
											
								<?php } ?>
							</div>
						<?php } ?>
						<div class="d-flex flex-row justify-content-center align-items-center mt-5">
							<button type="submit" class="btn btn-success btn-raised">Next</button>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php echo form_close(); ?>
	</div>
</section>