<div class="col-9">	
<?php 
	$userdata = $this->session->userdata('logged_user');
	$delete_message = $this->session->flashdata('delete_message');
	//echo "<pre>";print_r($estimate_list);exit;

?>

<?php 
	if ($delete_message) {
?>
<div class="alert alert-<?php if($delete_message['status'] == 200) : ?>success<?php else: ?>danger<?php endif; ?>"><?= $delete_message['message']; ?></div>
<?php
	}
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
		foreach ($estimate_list['data'] as $row) { ?>
		<div class="panel">
			<div class="card-heading" id="heading<?= $row->estimate_id; ?>">
				<div class="d-flex flex-sm-row align-items-center my-3">
					<div class="d-flex flex-sm-row align-items-center pointer" data-toggle="collapse" data-target="#collapse<?= $row->estimate_id; ?>" aria-expanded="true" aria-controls="collapse<?= $row->estimate_id; ?>">
						<div class="mx-3">
							<h4 class="my-0">#<?= $row->estimate_id; ?></h4>
							<div class="bhk_detail"><i class="fa fa-home"></i>&nbsp; <?= $row->property_size; ?></div>
						</div>
						<div class="mx-3 d-flex flex-row justify-content-center">
							<div class="mx-3 from_detail">
								<h4 class="my-0"><?= $row->moving_from; ?></h4>
							</div>
							<div class="mx-0 move_date_detail">
								<p class="my-0 arrow_bottom"><small><?= $row->moving_on; ?></small></p>
								<svg width="100%">
									<line y1="31" x2="95" y2="31" style="fill:none;stroke:#4CAF50;stroke-width:2"></line>
									<polyline points="88 25 95 31 88 36" style="fill:none;stroke:#4CAF50;stroke-width:2"></polyline>
									<font>07/13/2019 4:42 PM</font>
								</svg>
							</div>
							<div class="mx-3 to_detail">
								<h4 class="my-0"><?= $row->moving_to; ?></h4>
							</div>
						</div>
					</div>
					<div class="mx-3 d-flex flex-row ml-auto">
						<div class="mx-2" data-toggle="tooltip" data-placement="top" title="View Quote">
							<span class="badge badge-info badge-pill p-2"><i class="fa fa-link"></i></span>
						</div>
						<div class="mx-2" data-toggle="tooltip" data-placement="top" title="Edit">
							<span class="badge badge-success badge-pill p-2"><i class="fa fa-pen"></i></span>
						</div>
						<div class="mx-2" data-toggle="tooltip" data-placement="top" title="Cancel">
							<a href="<?= base_url(); ?>estimate/cancel/<?= $row->estimate_id; ?>" class="badge badge-danger badge-pill p-2"><i class="fa fa-ban"></i></a>
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
				</div>
			</div>
		</div>
		<?php } else: ?>
		<h4 class="text-center">You have not made any estimates.</h4>
		<div class="d-flex flex-row justify-content-center">
			<a href="<?= base_url(); ?>estimate" class="btn btn-success btn-raised">Make an estimate now</a>
		</div>
		<?php endif; ?>
	</div>
</div>
