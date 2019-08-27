<?php
	$url = 'http://boxigo.in/boxigo-backend-api/product/servicesType_get_service.php'; // path to your JSON file
	$data = file_get_contents($url); // put the contents of the file into a variable
	$characters = json_decode($data);
?>

<?php
	$url2 = 'http://boxigo.in/boxigo-backend-api/product/customer_get_service.php'; // path to your JSON file
	$data2 = file_get_contents($url2); // put the contents of the file into a variable
    $characters2 = json_decode($data2);
?>

<?php
	$url3 = 'http://boxigo.in/boxigo-backend-api/product/vendor_request_get_service.php'; // path to your JSON file
	$data3 = file_get_contents($url3); // put the contents of the file into a variable
    $characters3 = json_decode($data3);
?>

<?php
	$url4 = 'http://boxigo.in/boxigo-backend-api/product/estimate_get_service.php'; // path to your JSON file
	$data4 = file_get_contents($url4); // put the contents of the file into a variable
    $characters4 = json_decode($data4);
?>


<div class="page-header header-filter" data-parallax="true" style="height:100px;background: linear-gradient(25deg,#61ce70,yellow);"></div>
<div class="main section">
<div class="container-fluid p-5">
    <div class="row">
        <div class="col-sm-2">
            <div class="card px-0">
                <div class="card-body px-0">
                    <ul class="d-flex flex-column nav nav-pills nav-pills-icons" role="tablist"">
                        <li class="list-group-item  align-items-center">
                            <a href="#dashboard-1" role="tab" data-toggle="tab"> <i class="fa fa-home"></i> &nbsp; Dashboard</a>
                            <!-- <span class="badge badge-primary badge-pill">14</span> -->
                        </li>
                        <li class="list-group-item  align-items-center">
                            <a href="#dashboard-2" role="tab" data-toggle="tab"><i class="fa fa-user"></i> &nbsp; Customer Details</a>
                            <!-- <span class="badge badge-primary badge-pill">14</span> -->
                        </li>
                        <li class="list-group-item  align-items-center">
                            <a href="#dashboard-3" role="tab" data-toggle="tab"><i class="fa fa-ban"></i> &nbsp; Existing Vendor Details</a>
                            <span class="badge badge-primary badge-pill ml-auto"></span>
                        </li>
                        <li class="list-group-item  align-items-center">
                            <a href="#dashboard-4" role="tab" data-toggle="tab"><i class="fa fa-bell"></i> &nbsp; New Vendor Details</a>
                            <!-- <span class="badge badge-primary badge-pill ml-auto">1</span> -->
                        </li>
                        <li class="list-group-item  justify-content-between align-items-center">
                            <a href="#dashboard-5" role="tab" data-toggle="tab"><i class="fa fa-bell"></i> &nbsp; Service Type</a>
                        </li>
                        <li class="list-group-item  justify-content-between align-items-center">
                            <a href="#dashboard-6" role="tab" data-toggle="tab"><i class="fa fa-bell"></i> &nbsp; Items Info</a>
                        </li>
                        <li class="list-group-item  justify-content-between align-items-center">
                            <a href="#dashboard-7" role="tab" data-toggle="tab"><i class="fa fa-bell"></i> &nbsp; Estimate Quote</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>


        <div class="col-sm-9">
            <!-- <div class="card-deck mb-5">
                <div class="card">
                    <div class="card-header"><p class="card-title my-0">Personal Info</p></div>
                    <div class="card-body d-flex justify-content-center align-items-center">
                        <div>
                            <h4 class="title my-0"></h4>
                            <p class="my-0"></p>
                            <p class="my-0"></p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header"><p class="card-title my-0">Total Moves</p></div>
                    <div class="card-body d-flex justify-content-center align-items-center">
                        <div>
                            <h1 class="title my-0"></h1>
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
            </div> -->

            <div class="tab-content">

                <div class="tab-pane active card" id="dashboard-1">
                    <div class="card-header"><p class="text-center card-title my-0 ">Dashboard</p></div>
                    <div class="card-body">
                        Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C users after installed base benefits.
                        Dramatically visualize customer directed convergence without revolutionary ROI.
                    </div>
                </div>

                <div class="tab-pane card" id="dashboard-2">
                    <div class="card-header"><p class="text-center card-title my-0">Customer Details</p></div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-9">
                                <h5 id="customer_count"></h5>
                            </div>
                            <div class="col-sm-3">
                                <input class="form-control" id="myInput2" type="text" placeholder="Search..">
                            </div>
                        </div><br>
                        <div class="table-responsive-sm ">
                            <table id="table_page" class="table"  data-show-header="true" data-pagination="true"data-id-field="name" data-page-list="[5, 10, 25, 50, 100, ALL]"
                            data-page-size="2">
                                <thead class="thead-light">
                                <tr>
                                    <th class="w-10"><h6>User-Id</h6></th>
                                    <th class="w-15"><h6>Customer Name</h6></th>
                                    <th class="w-15"><h6>E-Mail</h6></th>
                                    <th class="w-10"><h6>Phone</th>
                                    <th class="w-10"><h6>P-Verified</h6></th>
                                    <th class="w-10"><h6>E-Verified</h6></th>
                                    <th class="w-10"><h6>Date Joined</h6></th>
                                    <th class="w-10 text-center"><h6>Settings</h6></th>
                                </tr>
                                </thead>
                                <tbody id="myTable2">
                                <?php foreach($characters2->customers as $key => $value){ ?>
                                    <tr>
                                        <td><?=$value->user_id;?></td>
                                        <td><?=$value->first_name;?> <?=$value->last_name;?></td>
                                        <td><?=$value->email;?></td>
                                        <td><?=$value->phone;?></td>
                                        <td><?=$value->is_phone_verified;?></td>
                                        <td><?=$value->is_email_verified;?></td>
                                        <td><?=$value->date_created;?></td>
                                        <td>
                                            <div class="mx-3 d-flex flex-row">
                                                <a href="#<?=$value->user_id;?>" class="mx-2" data-toggle="modal"  role="button" aria-expanded="false" aria-controls="<?= $value->user_id; ?>">
                                                    <span class="badge badge-info badge-pill p-2"><i class="fa fa-link" data-toggle="tooltip" data-placement="top" title="View Quote" data-placement="top" ></i></span>
                                                </a>
                                                <div class="mx-2" data-toggle="tooltip" data-placement="top" title="Edit">
                                                    <span class="badge badge-success badge-pill p-2"><i class="fa fa-pen"></i></span>
                                                </div>
                                                <div class="mx-2" data-toggle="tooltip" data-placement="top" title="Cancel">
                                                    <a href="#" class="badge badge-danger badge-pill p-2"><i class="fa fa-ban"></i></a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="tab-pane card" id="dashboard-3">
                    <div class="card-header"><p class="text-center card-title my-0">Existing Vendor Details/p></div>
                    <div class="card-body">
                        Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C users after installed base benefits.
                        Dramatically visualize customer directed convergence without revolutionary ROI.
                    </div>
                </div>

                <div class="tab-pane card" id="dashboard-4">
                    <div class="card-header"><p class="text-center card-title my-0">New Vendor Details</p></div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-9">
                                <h5 id="vendor_request"></h5>
                            </div>
                            <div class="col-sm-3">
                                <input class="form-control" id="myInput4" type="text" placeholder="Search..">
                            </div>
                        </div><br>
                    <div class="table-responsive-sm">
                            <table class="table">
                                <thead class="thead-light">
                                <tr>
                                    <th class="w-10"><h6>Name</h6></th>
                                    <th class="w-15"><h6>E-mail</h6></th>
                                    <th class="w-10"><h6>Phone</h6></th>
                                    <th class="w-15"><h6>Business Name</th>
                                    <th class="w-10"><h6>Business Phone</h6></th>
                                    <th class="w-10"><h6>Website</h6></th>
                                    <!-- <th class="w-10"><h6>Verified</h6></th> -->
                                    <th class="w-10 text-center"><h6>Settings</h6></th>
                                </tr>
                                </thead>
                                <tbody id="myTable4">
                                <?php foreach($characters3->vendor_request as $key => $value){ ?>
                                    <tr>
                                        <td><?=$value->name;?></td>
                                        <td><?=$value->email;?></td>
                                        <td><?=$value->phone;?></td>
                                        <td><?=$value->business_name;?></td>
                                        <td><?=$value->business_contact_no;?></td>
                                        <td><?=$value->business_website_url;?></td>
                                        <td>
                                            <div class="mx-3 d-flex flex-row">
                                                <a href="#<?=$value->email;?>" class="mx-2" data-toggle="modal"  role="button" aria-expanded="false" aria-controls="<?= $value->email; ?>">
                                                    <span class="badge badge-info badge-pill p-2"><i class="fa fa-link" data-toggle="tooltip" data-placement="top" title="View Quote" data-placement="top" ></i></span>
                                                </a>
                                                <div class="mx-2" data-toggle="tooltip" data-placement="top" title="Edit">
                                                    <span class="badge badge-success badge-pill p-2"><i class="fa fa-pen"></i></span>
                                                </div>
                                                <div class="mx-2" data-toggle="tooltip" data-placement="top" title="Cancel">
                                                    <a href="#" class="badge badge-danger badge-pill p-2"><i class="fa fa-ban"></i></a>
                                                </div>
                                            </div>
                                        </td>
                                    
                                    </tr>   
                                     
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                                        
                                    
                        

                <div class="tab-pane card" id="dashboard-5">
                    <div class="card-header"><p class="text-center card-title my-0">Service Type</p></div>
                    <div class="card-body">
                    <div class="row">
                            <div class="col-sm-9">
                                <h5 id="services"></h5>
                            </div>
                            <div class="col-sm-3">
                                <input class="form-control" id="myInput5" type="text" placeholder="Search..">
                            </div>
                        </div><br>
                    <div class="table-responsive-sm">
                        <table class="table table-striped">
                            <thead class="thead-light">
                            <tr>
                                <th class="w-15"><h6>SI.NO</h6></th>
                                <th class="w-15"><h6>Service Type</h6></th>
                                <th class="w-25"><h6>Service Info</h6></th>
                                <th class="w-15"><h6>Created Date</h6></th>
                                <th class="w-15"><h6>Updated Date</h6></th>
                                <th class="w-15 text-center"><h6>Settings</h6></th>
                            </tr>
                            </thead>
                            <tbody id="myTable5">
                                <?php foreach($characters->serviceType as $key => $value){ ?>
                                        <tr>
                                            <td><?= $value->id; ?></td>
                                            <td><?= $value->display_name; ?></td>
                                            <td>
                                                <?php foreach($value->service_info as $k => $v){ ?>
                                                    
                                                    
                                                        <div><?= $v;?></div></div>

                                                    
                                                <?php } ?>
                                            </td>
                                            <td><?= $value->created_date; ?></td>
                                            <td><?= $value->last_update_date; ?></td>
                                            <td>
                                                <div class="mx-3 d-flex flex-row">
                                                    <div class="mx-2" data-toggle="tooltip" data-placement="top" title="View Quote">
                                                        <span class="badge badge-info badge-pill p-2"><i class="fa fa-link"></i></span>
                                                    </div>
                                                    <div class="mx-2" data-toggle="tooltip" data-placement="top" title="Edit">
                                                        <span class="badge badge-success badge-pill p-2"><i class="fa fa-pen"></i></span>
                                                    </div>
                                                    <div class="mx-2" data-toggle="tooltip" data-placement="top" title="Cancel">
                                                        <a href="#" class="badge badge-danger badge-pill p-2"><i class="fa fa-ban"></i></a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>

                                <?php }?>
                            </tbody>
                        </table>
                    </div>
                    </div>
                </div>

                <div class="tab-pane card" id="dashboard-6">
                    <div class="card-header"><p class="text-center card-title my-0">Items Info</p></div>
                    <div class="card-body">
                        Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C users after installed base benefits.
                        Dramatically visualize customer directed convergence without revolutionary ROI.
                    </div>
                </div>

                <div class="tab-pane card" id="dashboard-7">
                    <div class="card-header "><p class="text-center card-title my-0 ">Estimate Recieved</p></div>
                    <div class="card-body">
                    <div class="row">
                            <div class="col-sm-9">
                                <h5 id="estimate_count"></h5>
                            </div>
                            <div class="col-sm-3">
                                <input class="form-control" id="myInput7" type="text" placeholder="Search..">
                            </div>
                        </div><br>
                    <div class="table-responsive-sm">
                            <table class="table table-striped">
                                <thead class="thead-light">
                                <tr>
                                    <th class="w-10"><h6>Estimate-Id</h6></th>
                                    <th class="w-15"><h6>Moving From</h6></th>
                                    <th class="w-15"><h6>Moving To</h6></th>
                                    <th class="w-10"><h6>Moving On</th>
                                    <th class="w-10"><h6>Property Size</h6></th>
                                    <th class="w-10"><h6>Total Items</h6></th>
                                    <th class="w-10"><h6>Service</h6></th>
                                    <th class="w-10 text-center"><h6>Settings</h6></th>
                                </tr>
                                </thead>
                                <tbody id="myTable7">
                                <?php foreach($characters4->estimate as $key => $value){ ?>
                                    <tr>
                                        <td><?=$value->estimate_id;?></td>
                                        <td><?=$value->moving_from;?></td>
                                        <td><?=$value->moving_to;?></td>
                                        <td><?=$value->moving_on;?></td>
                                        <td><?=$value->property_size;?></td>
                                        <td><?=$value->total_items;?></td>
                                        <td><?=$value->service_type;?></td>
                                        <td>
                                            <div class="mx-3 d-flex flex-row">
                                                    <div class="mx-2" data-toggle="tooltip" data-placement="top" title="View Quote">
                                                        <span class="badge badge-info badge-pill p-2"><i class="fa fa-link"></i></span>
                                                    </div>
                                                    <div class="mx-2" data-toggle="tooltip" data-placement="top" title="Edit">
                                                        <span class="badge badge-success badge-pill p-2"><i class="fa fa-pen"></i></span>
                                                    </div>
                                                    <div class="mx-2" data-toggle="tooltip" data-placement="top" title="Cancel">
                                                        <a href="#" class="badge badge-danger badge-pill p-2"><i class="fa fa-ban"></i></a>
                                                    </div>
                                            </div>
                                        </td>
                                    </tr>
                                <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
</div>


<?php foreach($characters2->customers as $k => $v){ ?>
    <div class="modal fade" id="<?= $v->user_id; ?>" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header d-flex justify-content-center">
                    <div class="row ">
                        <div class="col">
                            <h3 class="modal-title mt-0 text-center">Details of <?=$v->first_name;?> <?=$v->last_name;?></h3> 

                            <p class="text-center">This is a discription of the Customer</p>
                        </div>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="row bg-light">
                        <div class="col-sm"><h6>Test 1</h6></div>
                        <div class="col-sm"><h6>Test 2</h6></div>
                    </div>
                    <div class="row">
                        <div class="col-sm"><?=$v->date_created;?></div>
                        <div class="col-sm"><?=$v->date_created;?></div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-link btn-success">submit</button>
                    <button type="button" class="btn btn-danger btn-link" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
<?php } ?>



<?php foreach($characters3->vendor_request as $key => $value){ ?>
    <div class="modal fade" id="<?= $value->email; ?>" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header d-flex justify-content-center">
                    <div class="row ">
                        <div class="col">
                            <h3 class="modal-title mt-0 text-center">Details of <?=$value->name;?></h3> 

                            <p class="text-center">This is a discription of the vendor</p>
                        </div>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="row bg-light">
                        <div class="col-sm"><h6>Authorised</h6></div>
                        <div class="col-sm"><h6>Accept T&C</h6></div>
                        <div class="col-sm"><h6>Phone Verified</h6></div>
                        <div class="col-sm"><h6>Date Created</h6></div>
                        <div class="col-sm"><h6>Date Updated</h6></div>
                    </div>
                    <div class="row">
                        <div class="col-sm"><?=$value->legally_authorised;?></div>
                        <div class="col-sm"><?=$value->accept_terms_conditions;?></div>
                        <div class="col-sm"><?=$value->is_phone_verified;?></div>
                        <div class="col-sm"><?=$value->created_date;?></div>
                        <div class="col-sm"><?=$value->last_update_date;?></div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-link btn-success">submit</button>
                    <button type="button" class="btn btn-danger btn-link" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
<?php } ?>




