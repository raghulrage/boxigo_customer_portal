<div class="col-sm-9">
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

foreach ($estimate_data as $row) {

}

?>

<div class="section">
	<div class="card">
		<div class="card-header text-center"><p class="card-title my-0">Payment Gateway</p></div>
		<div class="card-body d-flex justify-content-center align-items-center flex-column">
			<div class="row">
				<h4 class="title my-0">Pay Now and Book Your Reservation!</h4>
			</div>
			<div class="row w-100">
				<div class="col-sm"><h4> Business Name</h4></div>
				<div class="col-sm">
					<h4>Estimate ID : <?=$row->estimate_id;?></h4>
				</div>
				<div class="col-sm">
					<h4>Total Amount : 15,000</h4>
				</div>
			</div>
			<div class="row w-100">
				<div class="col-sm-7">
					<div class="row bg-light">
						<div class="col-sm"><h5 class="title my-0">From Address</h5></div>						
					</div><br>
					<div class="row">
						<div class="col-sm">
							<h6 class="m-0">First Name</h6>
							<div class="form-group text-center p-0">
								<input type="text" name="from_area" class="form-control" required="required" value="" id="" placeholder=" ">
							</div> 
						</div>
						<div class="col-sm">
							<h6 class="m-0">Last Name</h6>
							<div class="form-group text-center p-0">
								<input type="text" name="from_area" class="form-control" required="required" value="" id="" placeholder=" ">
							</div> 
						</div>
					</div>
					<div class="row">
						<div class="col-sm">
							<h6 class="m-0">From Address</h6>
							<div class="form-group text-center p-0">
								<input type="text" name="from_area" class="form-control" required="required" value="" id="" placeholder=" ">
							</div> 
						</div>
					</div>
					<div class="row">
						<div class="col-sm">
							<h6 class="m-0">From City</h6>
							<div class="form-group text-center p-0">
								<input type="text" name="from_area" class="form-control" required="required" value="" id="" placeholder=" ">
							</div> 
						</div>
						<div class="col-sm">
							<h6 class="m-0">Pin Code</h6>
							<div class="form-group text-center p-0">
								<input type="text" name="from_area" class="form-control" required="required" value="" id="" placeholder=" ">
							</div> 
						</div>
					</div>
				</div>
				
				<div class="col-sm-5">
				<div class="row bg-light">
					<div class="col-sm"><h5 class="title my-0">Additional Info</h5></div>
				</div>
				<div class="row w-100 h-75 d-flex align-items-center justify-content-center">
						<div class="col-sm">
							<div class="form-check">
			                  <label class="form-check-label">
			                    <input class="form-check-input" type="checkbox" value=""> Insurance at 5%
			                    <span class="form-check-sign">
			                      <span class="check"></span>
			                    </span>
			                  </label>
			                </div>
						</div>
						<div class="col-sm">					
				            <div class="text-center w-100">
									<select type="text" name="" class="form-control text-center" placeholder=" ">
										<option value="">Rs 10,000</option>
										<option value="">Rs 23,000</option>
										<option value="">Rs 5,000</option>
										<option value="">Rs 12,000</option>
										<option value="">Rs 15,000</option>
									</select>
							</div>
						</div>
		        </div>
				</div>
			</div>
			<div class="row w-100">
				<div class="col-sm-7">
					<div class="row bg-light">
						<div class="col-sm"><h5 class="title my-0">To Address</h5></div>						
					</div><br>
					<div class="row">
						<div class="col-sm">
							<h6 class="m-0">First Name</h6>
							<div class="form-group text-center">
								<input type="text" name="from_area" class="form-control" required="required" value="" id="" placeholder=" ">
							</div> 
						</div>
						<div class="col-sm">
							<h6 class="m-0">Last Name</h6>
							<div class="form-group text-center">
								<input type="text" name="from_area" class="form-control" required="required" value="" id="" placeholder=" ">
							</div> 
						</div>
					</div>
					<div class="row">
						<div class="col-sm">
							<h6 class="m-0">From Address</h6>
							<div class="form-group text-center">
								<input type="text" name="from_area" class="form-control" required="required" value="" id="" placeholder=" ">
							</div> 
						</div>
					</div>
					<div class="row">
						<div class="col-sm">
							<h6 class="m-0">From City</h6>
							<div class="form-group text-center">
								<input type="text" name="from_area" class="form-control" required="required" value="" id="" placeholder=" ">
							</div> 
						</div>
						<div class="col-sm">
							<h6 class="m-0">Pin Code</h6>
							<div class="form-group text-center">
								<input type="text" name="from_area" class="form-control" required="required" value="" id="" placeholder=" ">
							</div> 
						</div>
					</div>
				</div>
				
				<div class="col-sm-5">
				<div class="row bg-light">
					<div class="col-sm"><h5 class="title my-0">Additional Info</h5></div>
				</div>	
				<div class="row w-100 h-75 d-flex align-items-center justify-content-center">
						<div class="col-sm">
							<div class="form-check">
			                  <label class="form-check-label">
			                    <input class="form-check-input" type="checkbox" value=""> Full Payment Rs 25,000
			                    <span class="form-check-sign">
			                      <span class="check"></span>
			                    </span>
			                  </label>
			                </div>
						</div>
						<div class="col-sm">					
				            <div class="form-check">
			                  <label class="form-check-label">
			                    <input class="form-check-input" type="checkbox" value=""> Token Amount Rs 1500
			                    <span class="form-check-sign">
			                      <span class="check"></span>
			                    </span>
			                  </label>
			                </div>
						</div>
		        </div>
				</div>
			</div>
			<div class="row w-100">
				<div class="col-sm-12">
					<div class="row bg-light">
						<div class="col-sm text-center"><h5 class="title my-0">Choose Payment</h5></div>						
					</div><br>
				</div>
				<div class="row w-100">
					<div class="col-sm d-flex justify-content-around align-items-center ">
						<div class="form-check">
			                <label class="form-check-label">
			                    <input class="form-check-input" type="checkbox" value=""> Net Banking
			                    <span class="form-check-sign">
			                      <span class="check"></span>
			                    </span>
			                 </label>
			            </div>
			            <div class="form-check">
			                <label class="form-check-label">
			                    <input class="form-check-input" type="checkbox" value=""> Debit Card
			                    <span class="form-check-sign">
			                      <span class="check"></span>
			                    </span>
			                 </label>
			            </div>
			            <div class="form-check">
			                <label class="form-check-label">
			                    <input class="form-check-input" type="checkbox" value=""> Credit Card
			                    <span class="form-check-sign">
			                      <span class="check"></span>
			                    </span>
			                 </label>
			            </div>
					</div>
					<div class="col-sm d-flex justify-content-around align-items-center">
						<h3 class="title m-0">Rs 25,000 /-</h3>
						<button class="btn btn-success btn-md w-50">Checkout</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>