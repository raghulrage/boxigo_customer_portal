<div class="section">
	<?php if($this->session->flashdata('success_message')): ?>
		<div class="alert alert-success text-center"><?= $this->session->flashdata('success_message'); ?></div>
	<?php endif; ?>
	<?php if($this->session->flashdata('error_message')): ?>
		<div class="alert alert-danger text-center"><?= $this->session->flashdata('error_message'); ?></div>
	<?php endif; ?>
	<div class="estimate-section container">
		<div class="alert alert-success text-center" id="flashmsg" style="display: none">Calculating.....</div>
		<div class="estimate-form-one py-5">
		<h2 class="text-center m-2">Move details</h2>
		<h4 class="text-center">Enter your moving details and property size</h4>
		<?php echo form_open('estimate/form_one_validate',array('class'=>'form form-horizontal')); ?>
			<div class="row d-flex justify-content align-items-end mb-5 mt-5">
				<div class="col-sm text-center">

					<a onclick="show_city()">
						<label class="btn btn-radio btn-md w-50 add-active2">
							<input style="opacity:0;margin-left:-10px" type="radio" name="city_type" class=" " value="<?=set_value('city_type','Within City');?>">Within The City
						</label>
					</a>

				</div>
				<div class="col-sm">
					<div class="d-flex justify-content-center ">
						<img src="<?= base_url();?>includes/img/move-whole.png" class="img" height="200">
					</div>
				</div>
				<div class="col-sm text-center">
					<a onclick="hide_city()">
						<label class="btn btn-radio btn-md w-50 add-active2">
							<input style="opacity:0;margin-left:-10px" type="radio" name="city_type" class=" " value="<?=set_value('city_type','Between City');?>">Between The City
						</label>
					</a>
				</div>
			</div>
				<!-- <div class="d-flex flex-row justify-content-center align-items-center mt-5">
					<p class="text-center px-2">I am plannig to move my </p>
					<div class="form-group mx-2 text-center <?php if(form_error('property_size')): ?>has-danger<?php endif;?>">
						<select class="form-control" name="property_size" value="<?= set_value('property_size');?>">
							<option value="1 BHK">1 BHK</option>
							<option value="2 BHK">2 BHK</option>
							<option value="3 BHK">3 BHK</option>
							<option value="3+ BHK">3+ BHK</option>
						</select>
						<span class="material-icons form-control-feedback">clear</span>
						<span class="text-danger"><?= form_error('property_size'); ?></span>
					</div>
					<p class="mx-2">property</p>
				</div> -->








				
					<div class="row">

						<div class="col-sm" id="city_condition">
							<h4 class="px-2 m-0">Select City</h4>
							<div class="form-group mx-2 text-center <?php if(form_error('select_city')): ?>has-danger<?php endif;?>">
								<input type="text" name="select_city" class="form-control" value="<?= set_value('select_city');?>" id="select_city" placeholder=" ">
								<span class="material-icons form-control-feedback">clear</span>
								<span class="text-danger"><?= form_error('select_city'); ?></span>
							</div>
						</div>

						<div class="col-sm">
							<h4 class="px-2 m-0">Moving From</h4>
							<div class="form-group mx-2 text-center <?php if(form_error('from_area')): ?>has-danger<?php endif;?>">
								<input type="text" name="from_area" class="form-control" value="<?= set_value('from_area');?>" id="from" placeholder=" ">
								<span class="material-icons form-control-feedback">clear</span>
								<span class="text-danger"><?= form_error('from_area'); ?></span>
							</div>
						</div>
						<div class="col-sm">
							<h4 class="px-2 m-0">Moving To</h4>
							<div class="form-group mx-2 text-center <?php if(form_error('to_area')): ?>has-danger<?php endif;?>">
								<input type="text" name="to_area" class="form-control" value="<?= set_value('to_area');?>" id="to" placeholder=" " onfocusout = "showmsg(),getdistance()">
								<span class="material-icons form-control-feedback">clear</span>
								<span class="text-danger"><?= form_error('to_area'); ?></span>
							</div>
						</div>
						<div class="col-sm">
							<h4 class="px-2 m-0">Moving On</h4>
							<div class="form-group mx-2 text-center <?php if(form_error('move_date')): ?>has-danger<?php endif;?>">
								<input type="text" name="move_date" class="form-control datetimepicker" value="<?= set_value('move_date');?>"/>
								<span class="material-icons form-control-feedback">clear</span>
								<span class="text-danger"><?= form_error('move_date'); ?></span>
							</div>
						</div>	
					</div>














					<!-- <div class="text-center">	
						<input type="button" id="flashmsg" class="btn btn-sm btn-success" onclick="showmsg(),getdistance()" value="Calculate Distance">
					</div>	 -->
					
					<div class="text-center mt-3 mb-5">
						<div class="mb-5">
							<!-- <h3>House Size</h3> -->
							<p>Items will be grouped based on the property size.</p>
						</div>
							<div class="row">
								<div class="col-sm">	
									<div class="btn-group-toggle" data-toggle="buttons">
										<label class="btn btn-block btn-radio btn-radio-1 btn-md add-active">
											<input type="radio" name="property_size" class=" <?php if(form_error('property_size')): ?>has-danger<?php endif;?>" value="<?= set_value('property_size','1 BHK');?>"> 1 BHK
										</label>
									</div>
		
								</div>
								<div class="col-sm">

									<div class="btn-group-toggle " data-toggle="buttons">
										<label class="btn btn-block btn-radio btn-radio-1 btn-md add-active">
											<input type="radio" name="property_size" class=" <?php if(form_error('property_size')): ?>has-danger<?php endif;?>" value="<?= set_value('property_size','2 BHK');?>"> 2 BHK
										</label>
									</div>
								</div>
								<div class="col-sm">

									<div class="btn-group-toggle " data-toggle="buttons">
										<label class="btn btn-block btn-radio btn-radio-1 btn-md add-active">
											<input type="radio" name="property_size" class=" <?php if(form_error('property_size')): ?>has-danger<?php endif;?>" value="<?= set_value('property_size','3 BHK');?>"> 3 BHK
										</label>
									</div>
								</div>
								<div class="col-sm">

									<div class="btn-group-toggle " data-toggle="buttons">
										<label class="btn btn-block btn-radio btn-radio-1 btn-md add-active">
											<input type="radio" name="property_size" class=" <?php if(form_error('property_size')): ?>has-danger<?php endif;?>" value="<?= set_value('property_size','3 + BHK');?>"> 3 + BHK
										</label>
									</div>

									
								</div>
								<div class="col-sm">
									<div class="btn-group-toggle " data-toggle="buttons">
										<label class="btn btn-block btn-radio btn-radio-1 btn-md add-active">
											<input type="radio" name="property_size" class=" <?php if(form_error('property_size')): ?>has-danger<?php endif;?>" value="<?= set_value('property_size','FEW ITEMS');?>"> FEW ITEMS
										</label>
									</div>
								</div>
							</div>
					</div>

					<div class="d-flex justify-content-center my-5">	
						<input id="next" type="submit" name="form-one-next" class="btn btn-success btn-raised" value="Next" style="pointer-events:none">
					</div>
			</form>
		</div>
	</div>

</div>