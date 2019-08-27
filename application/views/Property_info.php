<?php 

$form_one_data = $this->session->userdata('movedata');

?>
<div class="section container p-4 mt-5">
	
	
			<?php echo form_open('estimate/property_info_validate',array('class'=>'form form-horizontal')); ?>
	
				<div class="text-center mb-5">
					<h2>Move Details</h2>
				</div>
				<div class="mb-3">
					<h4><span class="green"><i class="fas fa-home"></i></span> &nbsp; Existing House Details</h4>
					<hr><br>
				</div>
				<div>
						<div class="row">
							<div class="col-sm">
								<div class="form-group <?php if(form_error('current_floor')): ?>has-danger<?php endif;?>">
									<h4 for="fromfloorno">Floor No</h4>
										<!-- <div class="input-group-prepend">
											<span class="input-group-text pointer btn-number bg-info text-white" disabled="disabled" data-type="minus" data-field="">-</span>
										</div>
										<input type="number" name="current_floor" class="form-control  " value="<?= set_value('current_floor');?>" >
										<span class="material-icons form-control-feedback">clear</span>
										<span class="text-danger"><?= form_error('current_floor'); ?></span>
										<div class="input-group-append">
											<span class="input-group-text pointer btn-number bg-info text-white" data-type="plus" data-field="">+</span>
										</div> -->
											<div class="input-group mt-4">
												<div class="input-group-prepend" onclick="decreaseValue()">
													<span class="input-group-text pointer btn-number bg-success text-white" disabled="disabled" data-type="minus" data-field="">-</span>
												</div>
												<input type="text" min="0" name="current_floor" class="form-control input-number text-center text-bold" value="<?= set_value('current_floor');?>" id="inc_dec_val"/>
												<div class="input-group-append" onclick="increaseValue()">
													<span class="input-group-text pointer btn-number bg-success text-white" data-type="plus" data-field="">+</span>
												</div>
												<span class="material-icons form-control-feedback">clear</span>
												<span class="text-danger"><?= form_error('current_floor'); ?></span>
											</div>


								</div>
							</div>
							<div class="col-sm" style="border-left: 1px solid rgba(0,0,0,0.1);border-right: 1px solid rgba(0,0,0,0.1);padding-left: 12px;" >
								<div class="form-group">
									<h4 for="from-elevator-item">elevator Available?</h4>
									<div class="row text-center">
										<div class="col-sm">
											<div class="btn-group btn-group-toggle" data-toggle="buttons">
											  <label class="btn btn-block add-active3">
											    <input type="radio" name="old_elevator_availability" value="<?= set_value('old_elevator_availability','Yes');?>"> YES
											  </label>
											  <label class="btn btn-block add-active3">
											    <input type="radio" name="old_elevator_availability"  value="<?= set_value('old_elevator_availability','No');?>"> NO
											  </label>
											</div>
										</div>
									</div>								
								</div>							
							</div>


							<div class="col-sm " style="border-right: 1px solid rgba(0,0,0,0.1);padding-left: 12px;" >
								<div class="form-group">
									<h4 for="from-elevator-item">packing service?</h4>
									<div class="row text-center">
										<div class="col-sm">
											<div class="btn-group btn-group-toggle" data-toggle="buttons">
											  <label class="btn btn-block add-active4">
											    <input type="radio" name="packing_service" value="<?= set_value('packing_service','Yes');?>"> YES
											  </label>
											  <label class="btn btn-block add-active4">
											    <input type="radio" name="packing_service"  value="<?= set_value('packing_service','No');?>"> NO
											  </label>
											</div>
										</div>
									</div>								
								</div>							
							</div>


							<!-- <div class="col" style="border-left: 1px solid rgba(0,0,0,0.1);border-right: 1px solid rgba(0,0,0,0.1);padding-left: 35px; ">
								<div class="form-group">
									<label for="packing-item">Require packing service?</label>
									<div class="row">
										<div class="col">
											<div class="btn-group-toggle " data-toggle="buttons">
												<label class="btn btn-success btn btn-block btn-radio btn-radio-1 btn-md">
													<input type="radio" name="property_size" class=" <?php if(form_error('property_size')): ?>has-danger<?php endif;?>" value="<?= set_value('property_size','Yes');?>"  checked autocomplete="off"> Yes
												</label>
											</div>
										</div>
										<div class="col">
											<div class="btn-group-toggle " data-toggle="buttons">
												<label class="btn btn-success btn btn-block btn-radio btn-radio-1 btn-md">
													<input type="radio" name="property_size" class=" <?php if(form_error('property_size')): ?>has-danger<?php endif;?>" value="<?= set_value('property_size','No');?>"  checked autocomplete="off"> No
												</label>
											</div>
										</div>
									</div>
								</div>
							</div> -->
							<div class="col-sm">

								<div class="form-group <?php if(form_error('old_parking_dist')): ?>has-danger<?php endif;?>">
									<h4 for="appx-distance">Distance from door to parking</h4>
									<!-- <input type="number" name="old_parking_dist" class="form-control " id="appx-distance" value="<?= set_value('old_parking_dist');?>">
									<span class="material-icons form-control-feedback">clear</span>
									<span class="text-danger"><?= form_error('old_parking_dist'); ?></span> -->

											<div class="input-group mt-4">
												<div class="input-group-prepend "onclick="decreaseValue2()">
													<span class="input-group-text pointer btn-number bg-success text-white" disabled="disabled" data-type="minus" data-field="">-</span>
												</div>
												<input type="text" min="0" name="old_parking_dist" class="form-control input-number text-center text-bold" value="<?= set_value('old_parking_dist');?>" id="inc_dec_val2"/>
												<div class="input-group-append "onclick="increaseValue2()">
													<span class="input-group-text pointer btn-number bg-success text-white" data-type="plus" data-field="">+</span>
												</div>
												<span class="material-icons form-control-feedback">clear</span>
												<span class="text-danger"><?= form_error('old_parking_dist'); ?></span>
											</div>
								</div>

								<!-- <div class="form-group ">
									<label for="appx-distance">Approx distance door to truck parking in Meters</label>
									<div class="input-group ">
										<div class="custom-file pt-5">
											<input type="number" name="existing-parking-distance" class="form-control pt-5 pb-5 <?php if(form_error('old_parking_dist')): ?>has-danger<?php endif;?>" id="appx-distance" value="<?= set_value('old_parking_dist');?>">
											<span class="material-icons form-control-feedback">clear</span>
											<span class="text-danger"><?= form_error('old_parking_dist'); ?></span>
										</div>
										<div class="input-group-append pt-5">
											<span class="input-group-text" id="appx-distance">Meter</span>
										</div> 
									</div>
								</div> -->
							</div>
						</div>
						</div><br>
						<div class="my-3">
							<h4><span class="green"><i class="fas fa-home"></i></span> &nbsp;  New House Details</h4>
							<hr><br>
						</div>
						<div>
						<div class="row">
							<div class="col-sm">
								<div class="form-group <?php if(form_error('new_floor')): ?>has-danger<?php endif;?>">
									<h4 for="tofloorno">Floor No</h4>
									<!-- <input type="number" name="new_floor" class="form-control " value="<?= set_value('new_floor');?>">
									<span class="material-icons form-control-feedback">clear</span>
									<span class="text-danger"><?= form_error('new_floor'); ?></span> -->

											<div class="input-group mt-4">
												<div class="input-group-prepend"onclick="decreaseValue3()">
													<span class="input-group-text pointer btn-number bg-success text-white" disabled="disabled" data-type="minus" data-field="">-</span>
												</div>
												<input type="text" min="0" name="new_floor" class="form-control input-number text-center text-bold" value="<?= set_value('new_floor');?>" id="inc_dec_val3"/>
												<div class="input-group-append"onclick="increaseValue3()">
													<span class="input-group-text pointer btn-number bg-success text-white" data-type="plus" data-field="">+</span>
												</div>
												<span class="material-icons form-control-feedback">clear</span>
												<span class="text-danger"><?= form_error('new_floor'); ?></span>
											</div>

								</div>
							</div>
							<div class="col-sm" style="border-left: 1px solid rgba(0,0,0,0.1);border-right: 1px solid rgba(0,0,0,0.1);padding-left: 12px;">
								<div class="form-group">
									<h4 for="from-elevator-item">elevator Available?</h4>
									<div class="row text-center">
										<div class="col-sm">
											<div class="btn-group btn-group-toggle" data-toggle="buttons">
											  <label class="btn btn-block add-active5">
											    <input type="radio" name="new_elevator_availability" value="<?= set_value('new_elevator_availability','Yes');?>"> YES
											  </label>
											  <label class="btn btn-block add-active5">
											    <input type="radio" name="new_elevator_availability"  value="<?= set_value('new_elevator_availability','No');?>"> NO
											  </label>
											</div>
										</div>
									</div>
								</div>
							</div>





							<div class="col-sm" style="border-right: 1px solid rgba(0,0,0,0.1);padding-left: 12px;" >
								<div class="form-group">
									<h4 for="from-elevator-item">unpacking service?</h4>
									<div class="row text-center">
										<div class="col-sm">
											<div class="btn-group btn-group-toggle" data-toggle="buttons">
											  <label class="btn btn-block add-active6">
											    <input type="radio" name="unpacking_service" value="<?= set_value('unpacking_service','Yes');?>"> YES
											  </label>
											  <label class="btn btn-block add-active6">
											    <input type="radio" name="unpacking_service"  value="<?= set_value('unpacking_service','No');?>"> NO
											  </label>
											</div>
										</div>
									</div>								
								</div>							
							</div>



							<!-- <div class="col" style="border-left: 1px solid rgba(0,0,0,0.1);border-right: 1px solid rgba(0,0,0,0.1);padding-left: 35px; ">
								<div class="form-group">
									<label for="unpacking-item">Require unpacking service?</label>
									<div class="row">
										<div class="col" >
											<div class="btn-group-toggle " data-toggle="buttons">
												<label class="btn btn-success btn btn-block btn-radio btn-radio-1 btn-md">
													<input type="radio" name="property_size" class=" <?php if(form_error('property_size')): ?>has-danger<?php endif;?>" value="<?= set_value('property_size','Yes');?>"  checked autocomplete="off"> Yes
												</label>
											</div>
										</div>
										<div class="col">
											<div class="btn-group-toggle " data-toggle="buttons">
												<label class="btn btn-success btn btn-block btn-radio btn-radio-1 btn-md">
													<input type="radio" name="property_size" class=" <?php if(form_error('property_size')): ?>has-danger<?php endif;?>" value="<?= set_value('property_size','No');?>"  checked autocomplete="off"> No
												</label>
											</div>
										</div>
									</div>
								</div>
							</div> -->
							<div class="col-sm">
								<div class="form-group <?php if(form_error('new_parking_dist')): ?>has-danger<?php endif;?>">
									<h4 for="appx-distance">Distance from door to parking</h4>
									<!-- <input type="number" name="new_parking_dist" class="form-control " id="appx-distance" value="<?= set_value('new_parking_dist');?>">
									<span class="material-icons form-control-feedback">clear</span>
									<span class="text-danger"><?= form_error('new_parking_dist'); ?></span> -->

											<div class="input-group mt-4">
												<div class="input-group-prepend" onclick="decreaseValue4()">
													<span class="input-group-text pointer btn-number bg-success text-white" disabled="disabled" data-type="minus" data-field="">-</span>
												</div>
												<input type="text" min="0" name="new_parking_dist" class="form-control input-number text-center text-bold" value="<?= set_value('new_parking_dist');?>" id="inc_dec_val4"/>
												<div class="input-group-append" onclick="increaseValue4()">
													<span class="input-group-text pointer btn-number bg-success text-white" data-type="plus" data-field="">+</span>
												</div>
												<span class="material-icons form-control-feedback">clear</span>
												<span class="text-danger"><?= form_error('new_parking_dist'); ?></span>
											</div>

								</div>
							</div>
						</div>
						<!--<div class="row">-->
						<!--	<div class="col">-->
						<!--		<div class="form-group">-->
						<!--			<h4 for="appx-distance">Any additional information?</h4>-->
						<!--			<textarea class="form-control" name="additional-info" rows="2"></textarea>-->
						<!--		</div>-->
						<!--	</div>-->
						<!--</div>-->

						<div class="d-flex justify-content-center my-5">
							
							<input type="submit" name="form-two-next" class="btn btn-success btn-raised btn-md" value="Next">
						</div>
				</form>
			</div>
	
	<!-- <div class="property-info-section">
		<div class="property-info-section-body py-5">
			<?php echo form_open('estimate/property_info_validate',array('class'=>'form form-horizontal')); ?>
				<div class="d-flex flex-row justify-content-center align-items-center">
					<p class="px-2">I live in </p>
					<div class="form-group mx-2 text-center <?php if(form_error('current_floor')): ?>has-danger<?php endif;?>">
						<input type="number" min="1" name="current_floor" class="form-control" value="<?= set_value('current_floor');?>">
						<span class="material-icons form-control-feedback">clear</span>
						<span class="text-danger"><?= form_error('current_floor'); ?></span>
					</div>
					<p class="px-2">floor with elevator</p>
					<div class="form-group mx-2 text-center <?php if(form_error('old_elevator_availability')): ?>has-danger<?php endif;?>">
						<select class="form-control" name="old_elevator_availability" value="<?= set_value('old_elevator_availability');?>">
							<option value="available">Available</option>
							<option value="not available">Not Available</option>
						</select>
						<span class="material-icons form-control-feedback">clear</span>
						<span class="text-danger"><?= form_error('old_elevator_availability'); ?></span>
					</div>
					<p class="px-2">to the property. </p>
				</div>
				<div class="d-flex flex-row justify-content-center align-items-center">
					<p class="px-2">Approximate distance from door to truck parking is </p>
					<div class="form-group mx-2 text-center <?php if(form_error('old_parking_dist')): ?>has-danger<?php endif;?>">
						<input type="text" name="old_parking_dist" class="form-control" value="<?= set_value('old_parking_dist');?>">
						<span class="material-icons form-control-feedback">clear</span>
						<span class="text-danger"><?= form_error('old_parking_dist'); ?></span>
					</div>
					<p>Meters and</p>
				</div>
				<div class="d-flex flex-row justify-content-center align-items-center">
					
					<p class="px-2">I am moving to </p>
					<div class="form-group mx-2 text-center <?php if(form_error('new_floor')): ?>has-danger<?php endif;?>">
						<input type="number" min="1" name="new_floor" class="form-control" value="<?= set_value('new_floor');?>">
						<span class="material-icons form-control-feedback">clear</span>
						<span class="text-danger"><?= form_error('new_floor'); ?></span>
					</div>
					<p class="px-2">floor with elevator</p>
					<div class="form-group mx-2 text-center <?php if(form_error('new_elevator_availability')): ?>has-danger<?php endif;?>">
						<select class="form-control" name="new_elevator_availability" value="<?= set_value('new_elevator_availability');?>">
							<option value="available">Available</option>
							<option value="not available">Not Available</option>
						</select>
						<span class="material-icons form-control-feedback">clear</span>
						<span class="text-danger"><?= form_error('new_elevator_availability'); ?></span>
					</div>
					<p class="px-2">to the property. </p>
				</div>
				<div class="d-flex flex-row justify-content-center align-items-center">
					<p class="px-2">Approximate distance from door to truck parking is </p>
					<div class="form-group mx-2 text-center <?php if(form_error('new_parking_dist')): ?>has-danger<?php endif;?>">
						<input type="text" name="new_parking_dist" class="form-control" value="<?= set_value('new_parking_dist');?>">
						<span class="material-icons form-control-feedback">clear</span>
						<span class="text-danger"><?= form_error('new_parking_dist'); ?></span>
					</div>
					<p>Meters.</p>
				</div>
				
				<div class="d-flex justify-content-center my-5">
					<input type="submit" name="form-two-next" class="btn btn-success btn-raised" value="Next">
				</div>
			</form>
		</div>
	</div> -->
	

</div>