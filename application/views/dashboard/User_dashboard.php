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
// foreach ($estimate_data as $row) { 
// 	if ($row->quotations!="No Customer found.") {
// 	foreach ($row->quotations as $key => $value) {
// 				echo "<pre>";print_r($row->quotations['quote']['vendor_id']);
// 		}
		
// 	}
		
// }exit();
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
				<h1 class="title my-0"><?= count($estimate_data); ?></h1>
			</div>
		</div>
	</div>
	<div class="card">
		<div class="card-header"><p class="card-title my-0">Quotations Received</p></div>
		<div class="card-body d-flex justify-content-center align-items-center">
			<div>
				<?php $quotes_received = 0 ;
				 foreach ($estimate_data as $row) { ?>
					<?php if (is_array($row->quotations)): ?>	
						<?php  $quotes_received = $quotes_received + count($row->quotations); ?>
					<?php endif ; ?>
				<?php } ?>

				<h1 class="title my-0"><?= $quotes_received ;?></h1>		
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

			if(count($estimate_data)>0):
			foreach ($estimate_data as $row) { ?>

			<div class="panel">
				<div class="card-heading" id="heading<?= $row->estimate_id; ?>">
					<div class="row p-2 border-bottom">
						<div class="col-sm-2 col-md-3 col-lg-2 mb-2 mt-3 ">
								<div class="row d-flex align-items-center justify-content-between">
									<h4 class="mr-2 my-0">#<?= $row->estimate_id; ?></h4>
									<div class="ml-2 my-0 bhk_detail"><i class="fa fa-home"></i>&nbsp; <?= $row->property_size; ?></div>
									<small class="ml-2 my-0">Date: <?= $row->date_created; ?></small>
								</div>
						</div>
						<div class="col-sm-8 col-md-8 col-lg-8 mt-2 mb-2 d-flex justify-content-around align-items-center pointer" data-toggle="collapse" data-target="#collapse<?= $row->estimate_id; ?>" aria-expanded="true" aria-controls="collapse<?= $row->estimate_id; ?>">
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
							<div class="row d-flex justify-content-around align-items-center"><p><?= $row->custom_status;?></p></div>
							<div class="row d-flex justify-content-around align-items-center">
								<!-- <div data-toggle="tooltip" data-placement="top" title="View Quote">
									<span class="badge badge-info badge-pill p-2 pointer" data-toggle="collapse" data-target="#collapse<?= $row->estimate_id; ?>" aria-expanded="true" aria-controls="collapse<?= $row->estimate_id; ?>"><i class="fa fa-link"></i></span>
								</div> -->
								<?php if($row->quotations!='No Customer found.'): ?> 
								<div data-toggle="tooltip" data-placement="top" title="View Quotations">
									<span class="badge badge-success badge-pill p-2 pointer" data-toggle="collapse" data-target="#vendor_collapse<?= $row->estimate_id; ?>" aria-expanded="true" aria-controls="vendor_collapse<?= $row->estimate_id; ?>"><i class="far fa-bell"></i></span>
								</div>
								<?php endif; ?>								
							</div>
						</div>
					</div>
				</div>
				<div id="collapse<?= $row->estimate_id; ?>" class="collapse" aria-labelledby="heading<?= $row->estimate_id; ?>" data-parent="#accordion_<?= $row->estimate_id; ?>">
						<div class="card-body px-0">
							<?php if (!empty($row->items->rooms)): ?>
								<div class="row">
								<?php foreach ($row->items->rooms as $key => $value){ ?>
									<div class="col-sm-12 border">
										<div class="row d-flex justify-content-center align-items-center">
												<h4>Your selected <?= $key; ?> items</h4>
										</div>
										<div class="row d-flex align-items-center border-top m-3">			
												<?php foreach ($value as $k => $val) {?>
												<div class="item_box card m-1 p-3" style="width: auto">
													<span><small style="font-size: 1rem" ><img style="width: 20px;height: 20px;" src="<?= base_url(); ?>images/items/<?= $k; ?>.png" alt='image' /></small><small style="font-size: 1rem" class="pl-2 pr-2"><?= $k ;?> : </small><small style="font-size: 1.5rem" class="text-success"><?= $val; ?></small></span>
												</div>
												<?php } ?>
										</div>	
									</div>
								
								<?php } ?>
								</div>
						</div>
						<?php else: ?>
							<div class="alert alert-info">There are no items in your list.</div>
						<?php endif; ?>
							<div class="row">
								<div class="col-sm">Old floor</div>
								<div class="col-sm">Old elevatoe</div>
								<div class="col-sm">Old packing</div>
								<div class="col-sm">Old distance</div>
							</div>
							<div class="row">
								<div class="col-sm">New floor</div>
								<div class="col-sm">New elevatoe</div>
								<div class="col-sm">New packing</div>
								<div class="col-sm">New distance</div>
							</div>
				</div>

				<div id="vendor_collapse<?= $row->estimate_id; ?>" class="collapse" aria-labelledby="heading<?= $row->estimate_id; ?>" data-parent="#accordion_<?= $row->estimate_id; ?>">
					<?php foreach ($row->quotations as $key => $value) { ?>
						<div class="row border-bottom d-flex justify-content-center align-items-center">
							<div class="col-sm col-md-3 d-flex align-items-center flex-column">
								<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSeoUK6AFDzBd1bPn3ub7_OWca92OMXeLV_poZZuljGhpOBk5uG" style="width: 100px;height:auto"><br>
								<?= $value['business_name']; ?>
							</div>
							<div class="col">
								<table class="table">
									<?php foreach ($value['addition_info'] as $key => $v) { ?>
										<tr>
											<td class="p-1" align="left"><?= $key; ?></td>
											<td class="p-1" align="right"><?= $v; ?></td>
										</tr>
									<?php } ?>
								</table>
							</div>
							<div class="col-sm col-md-2 d-flex justify-content-center align-items-center flex-column">
								<div class="row"><i class="fas fa-award"></i></div>
								<div class="row"><?= $row->service_type; ?></div>
							</div> 
							<div class="col-sm col-md-2 text-center ">
										<div class="row d-flex justify-content-center align-items-center">
											<h4>&#8377; <?=$value['quote']['total']; ?></h4>
										</div>
										<div class="row d-flex justify-content-center align-items-center">
											<a  href="#<?= $value['vendor_id'];?>_<?= $value['estimate_id']; ?>" data-toggle="modal"  role="button" aria-expanded="false" aria-controls="<?= $value['vendor_id'];?>_<?= $value['estimate_id']; ?>" class="btn btn-info btn-sm w-75">view details</a>
										</div>

								<!-- <p><b>INR <?=$value['quote']['Total']; ?></b></p></div>
								<div class="row d-flex justify-content-center align-items-center">
									<a  href="#<?= $value['vendor_id'];?>_<?= $value['estimate_id']; ?>" data-toggle="modal"  role="button" aria-expanded="false" aria-controls="<?= $value['vendor_id'];?>_<?= $value['estimate_id']; ?>" class="btn btn-info btn-sm w-75">view details</a>
								</div>	 -->						
							</div>
						</div>
					<?php } ?>
				</div>



				
			</div>

				<?php 
				if (is_array($row->quotations)) {
					foreach ($row->quotations as $key => $value) { ?>

					<div class="modal fade" id="<?=$value['vendor_id'];?>_<?=$value['estimate_id'];?>" tabindex="-1" role="dialog">
						<div class="modal-dialog modal-lg" role="document">
							<div class="modal-content">
								<div class="modal-header d-flex justify-content-center">
									<div class="row ">
										<div class="col-sm-12">
											<h3 class="modal-title mt-0 text-center">Quote detals from <?=$value['business_name'];?></h3> 
											<p class="text-center">This is the Estimated cost and other details of your move</p>
										</div>
									</div>
								</div>
								<div class="modal-body">
										<div class="row bg-light">
											<div class="col-sm-4">
												<h4>Dealer Name</h4>
												<div class="row">
													<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSeoUK6AFDzBd1bPn3ub7_OWca92OMXeLV_poZZuljGhpOBk5uG" style="width: 150px;height:auto">
													<h4 class="info-title ml-2"><?=$value['business_name'];?></h4>
												</div>
											</div>
											<div class="col-sm-8">
												<h4>Move details</h4>
												<div class="row d-flex align-items-center">
													<div class="col-sm mb-2 mt-3 d-flex justify-content-between">
														<h4 class="mr-2 my-0">#<?= $row->estimate_id; ?></h4>
														<div class="ml-2 my-0 bhk_detail"><i class="fa fa-home"></i>&nbsp; <?= $row->property_size; ?></div>
														<small class="ml-2 my-0"> Created date : <?= $row->date_created;?></small>
													</div>
												</div>
												<div class="row d-flex align-items-center">
													<div class="col-sm-12 d-flex justify-content-around align-items-center mt-2 mb-2">
														<div class="col-sm from_detail p-0">
															<h4 class="my-0"><?= $row->moving_from; ?></h4>
														</div>
														<div class="col-sm move_date_detail  d-flex justify-content-around align-items-center p-0">
															<p class="arrow_bottom"><small><?= $row->moving_on; ?></small></p>
															<svg width="100%">
																<line y1="31" x2="95" y2="31" style="fill:none;stroke:#4CAF50;stroke-width:2;"></line>
																<polyline points="88 25 95 31 88 36" style="fill:none;stroke:#4CAF50;stroke-width:2"></polyline>
															</svg>
														</div>
														<div class="col-sm to_detail p-0">
															<h4 class="my-0"><?= $row->moving_to; ?></h4>
														</div>
													</div>
												</div>
											</div>
										</div>
									<div class="row">
										<div class="col-sm card ml-4">
											<h4>Price Breakup</h4>
											<table class="table">
												<?php  foreach ($value['quote'] as $keys => $values) {?>
													<tr>
														<td class="p-1" align="left"><?= $keys; ?></td>
														<td class="p-1" align="right">&#8377; <?= $values; ?></td>
													</tr>
												<?php }?>
											</table>											
										</div>
										<div class="col-sm d-flex flex-column p-2 align-items-center justify-content-center">
											<h4>Additional Information</h4>
											<h4 class="text-success">Service type : <i class="fas fa-award"></i>&nbsp;<?=$row->service_type;?></h4>
											<h3 class="text-success">Total items : <?=$row->total_items;?></h3>
											<h3 class="text-success">Total Cost : &#8377; <?= $value['quote']['total'];?></h3>
											<span class="text-success">Please read our <a href="#">Terms and Conditions</a></span>
											<a href="<?=base_url();?>dashboard/Payment_gateway"><button type="button" class="btn btn-success">Select and Continue</button></a>
										</div>
									</div>
								</div>
								<div class="modal-footer pt-0 pb-2 d-flex align-items-center justify-content-center">
									<button type="button" class="btn btn-danger btn-link" data-dismiss="modal">Close</button>
								</div>
							</div>
						</div>
					</div>
					<?php } ?>
				<?php } ?>

			<?php } else: ?>
			<h4 class="text-center">You have not made any estimates.</h4>
			<div class="d-flex flex-row justify-content-center">
				<a href="<?= base_url(); ?>estimate" class="btn btn-success btn-raised">Make an estimate now</a>
			</div>
			<?php endif; ?>
		</div>
	</div>