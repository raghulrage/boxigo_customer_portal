<?php 

$movedata = $this->session->userdata('movedata');

?>


<!-- fetch data from api -->
<?php
	$url = 'http://boxigo.in/boxigo-backend-api/product/servicesType_get_service.php'; // path to your JSON file
	$data = file_get_contents($url); // put the contents of the file into a variable
	$characters = json_decode($data);
?>

<!-- end -->


<section class="section" style="padding-top:100px">
	<div class="container">
		
		<?php if($this->session->flashdata('error_message')): ?>
			<p class="text-danger"><?= $this->session->flashdata('error_message'); ?></p>
		<?php endif; ?>
		<h3 class="text-center">Choose your preffered service</h3><br>
		<div class="row">
		
			<?php foreach($characters->serviceType as $key => $value){ ?>
				
					<div class="col-xl-4 text-center">
						<a href="<?= base_url();?>estimate/service_type_select/<?= $value->display_name; ?>">
							<div class="single-price card h-100">
								<div class="card-header bg-success price-title">
									<h4><?= $value->display_name; ?></h4>
								</div>
								<div class="card-body">
									<div class="price-tag">
										<h3>This service type has</h3>
									</div>

									<div class="price-item">
										<ul class="list-group list-group-flush">
										
											<?php foreach($value->service_info as $key => $value){ ?>
												<h4 class="list-group-item text-center"><?= $value; ?></h4>
											<?php } ?>
										
										</ul>
									</div>
								</div>
							</div>
						</a>
					</div>
				
			<?php } ?>
		
		</div>
	</div>
</section>