<?php $movedata = $this->session->userdata('movedata'); ?>



<section class="section" class="padding-top:100px ">
	<div class="container">
		<?php if($this->session->flashdata('success_message')): ?>
			<div class="alert alert-success text-center"><?= $this->session->flashdata('success_message'); ?></div>
		<?php endif; ?>
		<?php if($this->session->flashdata('error_message')): ?>
			<div class="alert alert-danger text-center"><?= $this->session->flashdata('error_message'); ?></div>
		<?php endif; ?>
	</div>
	<div class="personal-info-section d-flex flex-wrap justify-content-center align-items-center pl-5 pr-5">
		<div class="col-sm-6">
			<h1>Please provide your details!</h1>
			<h3>Bla bla bla! and Bla</h3>
			<p>
				Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
			</p>
		</div>
		
		<div class="offset-md-1 col-sm-4 card" style="border-radius: 10px;">
			<div class="text-center">
				<img src="https://cdn.dribbble.com/users/644659/screenshots/4438517/icon_9.gif" style="height: auto;width: 100%">
			</div>
			<?php echo form_open('estimate/personal_info_validate',array('class'=>'form form-horizontal')); ?>
			<div class="row">
				
				<div class="col-sm form-group ml-2 mr-2<?php if(form_error('first_name')): ?>has-danger<?php endif;?>">
					<p class="m-0">Your first name</p>
					<input type="text" name="first_name" class="form-control " value="<?= set_value('first_name');?>"/>
					<span class="material-icons form-control-feedback">clear</span>
					<span class="text-danger"><?= form_error('first_name'); ?></span>
				</div>
			</div>
			<div class="row">
				<div class="col-sm form-group ml-2 mr-2 <?php if(form_error('last_name')): ?>has-danger<?php endif;?>">
					<p class="m-0">Your last name</p>
					<input type="text" name="last_name" class="form-control" value="<?= set_value('last_name');?>"/>
					<span class="material-icons form-control-feedback">clear</span>
					<span class="text-danger"><?= form_error('last_name'); ?></span>
				</div>
			</div>
			<div class=" row">
				
				<div class="col-sm form-group ml-2 mr-2 <?php if(form_error('email')): ?>has-danger<?php endif;?>">
					<p class="m-0">Your email</p>
					<input type="email" name="email" class="form-control" value="<?= set_value('email');?>"/>
					<span class="material-icons form-control-feedback">clear</span>
					<span class="text-danger"><?= form_error('email'); ?></span>
				</div>
			</div>
			<div class="row">
				<div class="col-sm form-group ml-2 mr-2 <?php if(form_error('phone')): ?>has-danger<?php endif;?>">
					<p class="m-0">Your phone number</p>
					<input type="tel" name="phone" class="form-control" value="<?= set_value('phone');?>"/>
					<span class="material-icons form-control-feedback">clear</span>
					<span class="text-danger"><?= form_error('phone'); ?></span>
				</div>
			</div>
			<div class="d-flex justify-content-center align-items-center mt-3 mb-3">
				<input type="submit" name="form-three-next" class="btn btn-success btn-raised btn-block" value="Next">
			</div>
		</div>
		</form>
	</div>
</section>
