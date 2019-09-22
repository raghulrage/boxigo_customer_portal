<div class="col-md-9">	
<?php 
	$userdata = $this->session->userdata('logged_user');
	$delete_message = $this->session->flashdata('delete_message');
?>

<?php 
	if ($delete_message) {
?>
<div class="alert alert-<?php if($delete_message['status'] == 200) : ?>success<?php else: ?>danger<?php endif; ?>"><?= $delete_message['message']; ?></div>
<?php
	}
?>



<?php 

$vendor_object=$this->get("http://boxigo.in/boxigo-backend-api/product/vendor_get_service.php");
$vendor_data=$vendor_object->vendor;
?>




<div class="card-deck section mb-5">
	<div class="card">
		<div class="card-header"><p class="card-title my-0">Personal Info</p></div>
		<div class="card-body d-flex justify-content-center align-items-center">
			<div>
				<h4 class="title my-0"><?= $userdata->first_name; ?> <?= $userdata->last_name; ?></h4>
				<p class="my-0"><?= $userdata->email; ?></p>
				<p class="my-0"><?= $userdata->phone; ?></p>
			</div>
		</div>
	</div>
	<div class="card">
		<div class="card-header"><p class="card-title my-0">Total Moves</p></div>
		<div class="card-body d-flex justify-content-center align-items-center">
			<div>
				<h1 class="title my-0"><?= $estimate_list['total']; ?></h1>
			</div>
		</div>
	</div>
	<div class="card">
		<div class="card-header"><p class="card-title my-0">Quotations Received</p></div>
		<div class="card-body d-flex justify-content-center align-items-center">
			<div>
				<h1 class="title my-0">0</h1>
			</div>
		</div>
	</div>
</div>

<div class="card mt-5 mb-5">
	<div class="card-header">
		<p class="card-title my-0">Your Moves</p>
	</div>
	<div class="card-body">
		<div id="accordion">
		<?php

		if($estimate_list['total']>0):
		foreach ($estimate_list['data'] as $row) { 
			if ($row->status == '1'):?>
		<div class="panel">
			<div class="card-heading" id="heading<?= $row->estimate_id; ?>">
				<div class="row p-2 border-bottom">
					<div class="col-sm-2 col-md-3 col-lg-2 mb-2 mt-3 d-flex">
						<div class="row d-flex align-items-center">
							<h4 class="mr-2 my-0">#<?= $row->estimate_id; ?></h4>
							<div class="ml-2 my-0 bhk_detail"><i class="fa fa-home"></i>&nbsp; <?= $row->property_size; ?></div>
						</div>
					</div>
					<div class="col-sm-8 col-md-8 col-lg-8 d-flex justify-content-around align-items-center mt-2 mb-2">
							<div class="col-sm from_detail p-0">
								<h4 class="my-0"><?= $row->moving_from; ?></h4>
							</div>
							<div class="col-sm move_date_detail  d-flex justify-content-around align-items-center p-0">
								<p class="arrow_bottom"><small><?= $row->moving_on; ?></small></p>
								<svg width="100%">
									<line y1="31" x2="95" y2="31" style="fill:none;stroke:#4CAF50;stroke-width:2;"></line>
									<polyline points="88 25 95 31 88 36" style="fill:none;stroke:#4CAF50;stroke-width:2"></polyline>
									<!-- <font>07/13/2019 4:42 PM</font> -->
								</svg>
							</div>
							<div class="col-sm to_detail p-0">
								<h4 class="my-0"><?= $row->moving_to; ?></h4>
							</div>
					</div>
					<div class="col-sm-2 col-md-1 col-lg-2 mt-2 mb-2">
						<div class="row d-flex justify-content-around align-items-center"><h4>Approved</h4></div>
						<div class="row d-flex justify-content-around align-items-center">
							<div data-toggle="tooltip" data-placement="top" title="View Quote">
								<span class="badge badge-info badge-pill p-2 pointer" data-toggle="collapse" data-target="#collapse<?= $row->estimate_id; ?>" aria-expanded="true" aria-controls="collapse<?= $row->estimate_id; ?>"><i class="fa fa-link"></i></span>
							</div>
							<div data-toggle="tooltip" data-placement="top" title="Quotations">
								<span class="badge badge-success badge-pill p-2 pointer" data-toggle="collapse" data-target="#vendor_collapse<?= $row->estimate_id; ?>" aria-expanded="true" aria-controls="vendor_collapse<?= $row->estimate_id; ?>"><i class="far fa-bell"></i></span>
							</div>
							<div data-toggle="tooltip" data-placement="top" title="Cancel">
								<a href="<?= base_url(); ?>estimate/cancel/<?= $row->estimate_id; ?>" class="badge badge-danger badge-pill p-2 pointer"><i class="fa fa-ban"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div id="collapse<?= $row->estimate_id; ?>" class="collapse" aria-labelledby="heading<?= $row->estimate_id; ?>" data-parent="#accordion">
				<div class="card-body px-0">
					<?php if (!empty($row->items)): ?>
						<div class="row">
						<?php foreach ($row->items as $key => $value): ?>
							<div class="col-sm-3">
								<div class="row border">
									<div class="col-md-10 col-sm-4 d-flex justify-content-start align-items-center">
										<?= ucfirst(str_replace("_", " ", $key)); ?>&nbsp;
									</div>
									<div class="col-md-2 col-sm-2 d-flex justify-content-center align-items-center">
										<div class="badge badge-info badge-pill"><?= $value; ?></div>
									</div>
								</div>
							</div>
						<?php endforeach ?>
						</div>
					<?php else: ?>
						<div class="alert alert-info">There are no items in your list.</div>
					<?php endif; ?>
						<div class="row">
							<div class="col">Old floor</div>
							<div class="col">Old elevatoe</div>
							<div class="col">Old packing</div>
							<div class="col">Old distance</div>
						</div>
						<div class="row">
							<div class="col">New floor</div>
							<div class="col">New elevatoe</div>
							<div class="col">New packing</div>
							<div class="col">New distance</div>
						</div>
				</div>
			</div>

			<div id="vendor_collapse<?= $row->estimate_id; ?>" class="collapse" aria-labelledby="heading<?= $row->estimate_id; ?>" data-parent="#accordion">
				<?php foreach ($vendor_data as $key => $value) {?>
				<!-- <div class="row border-bottom">
						<div class="col-sm col-md-3 text-center"><h5 class="info-title">Company</h5></div>
						<div class="col-sm col-md-2 text-center"><h5 class="info-title">Image of truck</h5></div>
						<div class="col-sm col-md-2 text-center"><h5 class="info-title">Rating</h5></div>
						<div class="col-sm col-md-3 text-center"><h5 class="info-title">Delivery expected</h5></div>
						<div class="col-sm col-md-2 text-center"><h5 class="info-title">Book Move</h5></div>
				</div> -->
					
				<div class="row border-bottom d-flex justify-content-center align-items-center">
					<div class="col-sm col-md-3 text-center"><h4><?=$value->business_name;?></h4></div>
					<div class="col-sm col-md-2 text-center"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSeoUK6AFDzBd1bPn3ub7_OWca92OMXeLV_poZZuljGhpOBk5uG" style="width: 100px;height:auto"></div>
					<div class="col-sm col-md-2 text-center"><h4><?=$value->rate_card_detail;?></h4></div>
					<div class="col-sm col-md-3 text-center"><h4><?=$value->last_update_date;?></h4></div>
					<div class="col-sm col-md-2 text-center">
						<div class="row d-flex justify-content-center align-items-center"><h4>INR 10,000</h4></div>
						<div class="row d-flex justify-content-center align-items-center"><button class="btn btn-success btn-sm w-75">Book</button></div>
					</div>

				</div>
				<?php } ?>
			</div>
		</div>
		<?php endif;} else: ?>
		<h4 class="text-center">You have not made any estimates.</h4>
		<div class="d-flex flex-row justify-content-center">
			<a href="<?= base_url(); ?>estimate" class="btn btn-success btn-raised">Make an estimate now</a>
		</div>
		<?php endif; ?>
	</div>
</div>
