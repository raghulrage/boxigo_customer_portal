<section class="section d-flex justify-content-center align-items-center" style='min-height:90vh;background-color:white;'>

  <div class="container ">
          <?php if($this->session->flashdata('login_err_msg')): ?>
              <div class="alert alert-danger text-center"><?= $this->session->flashdata('login_err_msg'); ?></div>
          <?php endif; ?>
          <div class="row text-center">
            <div class="col-sm">
              <div class="info">
                <img style='height:auto;width:100%' src="https://cdn.dribbble.com/users/527271/screenshots/2690835/smartphone_2.gif" alt="image">
              </div>
              <button data-toggle="modal" data-target="#myModal-1" class="btn btn-success btn-raised btn-lg p-4">
                <i class="material-icons">group</i>&nbsp;&nbsp;Customer Login
              </button>
            </div>
            <div class="col-sm">
            <div class="info">
            <img class="mt-2 mb-5" style='height:auto;width:100%'src="http://ifc.co.ug/wp-content/uploads/2018/06/sales-manager-openings.gif" alt="image">
            </div>
              <button data-toggle="modal" data-target="#myModal-2" class="btn btn-success btn-raised btn-lg p-4">
                <i class="material-icons">group</i>&nbsp;&nbsp;Vendor Login
              </button>
            </div>
          </div>
  </div>
</section>

<!-- modal-1-->
<div class="modal fade" id="myModal-1" tabindex="-1" role="dialog">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header d-block">
            <div class="row">
              <div class="col-sm-12">
                <h3 class="modal-title mt-0 text-center">Create your customer account at Boxigo</h3> 
                  <p class="text-center">You can start creating your customer profile. Boxigo will review your application for approval.</p>
              </div>  
            </div>
          </div>
          <div class="modal-body">
          <!-- <?php if($this->session->flashdata('login_err_msg')): ?>
            <div class="alert alert-danger"><?= $this->session->flashdata('login_err_msg'); ?></div>
              <?php endif; ?> -->
              <div class="row">
                <div class="col-sm-12 col-md-9 col-lg-7 mx-auto">
                  <div class="card card-signin my-5">
                    <div class="card-body">
                      <h5 class="card-title text-center mb-5">Log In</h5>
                      <?php echo form_open('login/login_validate',array('class'=>'form')); ?>
                        <div class="form-group mx-2 my-5 text-center <?php if(form_error('phone')): ?>has-danger<?php endif;?>">
                          <input type="tel" name="phone" class="form-control" value="<?= set_value('phone');?>" placeholder="Phone number">
                          <span class="material-icons form-control-feedback">clear</span>
                          <span class="text-danger"><?= form_error('phone'); ?></span>
                        </div>
                        <div class="form-group mx-2 my-5 text-center <?php if(form_error('login_otp')): ?>has-danger<?php endif;?>">
                          <input type="tel" name="login_otp" class="form-control" value="<?= set_value('login_otp');?>" placeholder="OTP">
                          <span class="material-icons form-control-feedback">clear</span>
                          <span class="text-danger"><?= form_error('login_otp'); ?></span>
                        </div>
                        <button class="btn btn-lg btn-success btn-block text-uppercase" type="submit">Sign in</button>
                      <?php echo form_close() ?>
                    </div>
                  </div>
                </div>
              </div>
          </div>
          <div class="modal-footer d-block text-center">
            <!-- <button type="button" class="btn btn-link btn-success">submit</button> -->
            <button type="button" class="btn btn-danger btn-link" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
  </div>

    <!-- modal-2 -->
    <div class="modal fade" id="myModal-2" tabindex="-1" role="dialog">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header d-block">
            <div class="row">
              <div class="col-lg-12">
                <h3 class="modal-title mt-0 text-center">Create your vendor account at Boxigo</h3> 
                  <p class="text-center">You can start creating your vendor profile. Boxigo will review your application for approval.</p>
              </div>  
            </div>
          </div>
          <div class="modal-body">
          <?php if($this->session->flashdata('login_err_msg')): ?>
            <div class="alert alert-danger"><?= $this->session->flashdata('login_err_msg'); ?></div>
              <?php endif; ?>
              <div class="row">
                <div class="col-sm-12 col-md-9 col-lg-7 mx-auto">
                  <div class="card card-signin my-5">
                    <div class="card-body">
                      <h5 class="card-title text-center mb-5">Log In</h5>
                      <?php echo form_open('login/login_validate',array('class'=>'form')); ?>
                        <div class="form-group mx-2 my-5 text-center <?php if(form_error('phone')): ?>has-danger<?php endif;?>">
                          <input type="tel" name="phone" class="form-control" value="<?= set_value('phone');?>" placeholder="Phone number">
                          <span class="material-icons form-control-feedback">clear</span>
                          <span class="text-danger"><?= form_error('phone'); ?></span>
                        </div>
                        <div class="form-group mx-2 my-5 text-center <?php if(form_error('login_otp')): ?>has-danger<?php endif;?>">
                          <input type="tel" name="login_otp" class="form-control" value="<?= set_value('login_otp');?>" placeholder="OTP">
                          <span class="material-icons form-control-feedback">clear</span>
                          <span class="text-danger"><?= form_error('login_otp'); ?></span>
                        </div>
                        <button class="btn btn-lg btn-success btn-block text-uppercase" type="submit">Sign in</button>
                      <?php echo form_close() ?>
                    </div>
                  </div>
                </div>
              </div>
          </div>
          <div class="modal-footer d-block text-center">
            <!-- <button type="button" class="btn btn-link btn-success">submit</button> -->
            <button type="button" class="btn btn-danger btn-link" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
  </div>