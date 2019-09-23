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
							<?php if($row->quotations!='0'): ?>
							<div data-toggle="tooltip" data-placement="top" title="<?=$row->quotations['count'];?> Quotations">
								<span class="badge badge-success badge-pill p-2 pointer" data-toggle="collapse" data-target="#vendor_collapse<?= $row->estimate_id; ?>" aria-expanded="true" aria-controls="vendor_collapse<?= $row->estimate_id; ?>"><i class="far fa-bell"></i></span>
							</div>
							<?php endif; ?>
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

				<?php 
				if($row->quotations != 0 ):
					if(array_key_exists('data', $row->quotations)):
						foreach ($row->quotations['data'] as $key => $value) {
								$quotes = json_decode($value['quote'],true);
								$addition_info = json_decode($value['addition_info'],true);
							?>

						<div class="row border-bottom d-flex justify-content-center align-items-center">
							<div class="col-sm col-md-3 d-flex align-items-center flex-column">
								<div class="row"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSeoUK6AFDzBd1bPn3ub7_OWca92OMXeLV_poZZuljGhpOBk5uG" style="width: 100px;height:auto">
								</div>
								<div class="row"><h4><?=$value['business_name'];?></h4></div>
							</div>
							<div class="col-sm col-md-5">
								<table class="table">
								<?php foreach ($addition_info as $key => $info) { ?>
									<tr>
										<td class="p-1" align="left"><?= $key; ?></td>
										<td class="p-1" align="right"><?= $info; ?></td>
									</tr>
								<?php } ?>
								</table>
							</div>
							<div class="col-sm col-md-2 d-flex justify-content-center align-items-center flex-column">
								<div class="row"><i class="fas fa-award"></i></div>
								<div class="row"><?=$row->service_type;?></div>
							</div>
							<div class="col-sm col-md-2 text-center">
								<div class="row d-flex justify-content-center align-items-center"><h4>INR 10,000</h4></div>
									<div class="row d-flex justify-content-center align-items-center">
										<a  href="#<?=$value['business_name'];?>" data-toggle="modal"  role="button" aria-expanded="false" aria-controls="<?=$value['business_name'];?>" class="btn btn-info btn-sm w-75">view details
										</a>
									</div>
							</div>

						</div>
<!-- vendor details modal -->
					
						<div class="modal fade " id="<?=$value['business_name'];?>" tabindex="-1" role="dialog">
					        <div class="modal-dialog modal-lg" role="document">
					            <div class="modal-content">
					                <div class="modal-header d-flex justify-content-center">
					                    <div class="row ">
					                        <div class="col-sm">
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
						                        	<div class="col-sm-9 mb-2 mt-3 d-flex">
															<h4 class="mr-2 my-0">#<?= $row->estimate_id; ?></h4>
															<div class="ml-2 my-0 bhk_detail"><i class="fa fa-home"></i>&nbsp; <?= $row->property_size; ?></div>
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
																	<!-- <font>07/13/2019 4:42 PM</font> -->
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
					                    	<div class="col-sm">
					                    		<h4>Price Breakup</h4>
						                    	<table class="table">
						                    		<?php  foreach ($quotes as $key => $value) {?>
														<tr>
															<td class="p-1" align="left"><?= $key; ?></td>
															<td class="p-1" align="right">&#8377; <?= $value; ?></td>
														</tr>
													<?php }?>
												</table>
					                    	</div>
					                    	<div class="col-sm d-flex flex-column p-2">
					                    		<h4>Additional Info</h4>
					         					<h4 class="text-success">Service type : <i class="fas fa-award"></i>&nbsp;<?=$row->service_type;?></h4>
												<h3 class="text-success">Total items : <?=$row->total_items;?></h3>
												<h3 class="text-success">Total Cost : &#8377; <?=$quotes['Total'];?></h3>
												<span class="text-success">Please read our <a href="#">Terms and Conditions</a></span>
												<a href="<?=base_url();?>dashboard/Payment_gateway/<?=$value['business_name'];?>"><button type="button" class="btn btn-success w-75">Select and Continue</button></a>
					                    	</div>
					                    </div>
					                    
					                </div>
					                <div class="modal-footer">
					                    <button type="button" class="btn btn-danger btn-link" data-dismiss="modal">Close</button>
					                </div>
					            </div>
					        </div>
					    </div>
					
 <!--vendor details moal end  -->
				<?php } endif; endif;?>
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