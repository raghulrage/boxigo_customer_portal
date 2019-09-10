<section class="section d-flex justify-content-center align-items-center" style='min-height:90vh;background-color:white;'>

  <div class="container ">
    <?php if ($this->session->flashdata('login_err_msg')) : ?>
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
    </div>
</section>

<!-- modal-1-->
<div class="modal fade" id="myModal-1" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h3 class="modal-title w-100 font-weight-bold">Login</h3>
      </div>
      <!-- <?php if ($this->session->flashdata('login_err_msg')) : ?>
            <div class="alert alert-danger"><?= $this->session->flashdata('login_err_msg'); ?></div>
              <?php endif; ?> -->
      <div class="modal-body mx-3">
        <div class="md-form mb-5">
          <?php echo form_open('login/login_validate', array('class' => 'form')); ?>
          <div class="form-group mx-2 my-5 text-center <?php if (form_error('phone')) : ?>has-danger<?php endif; ?>">
            <input type="tel" name="phone" class="form-control" value="<?= set_value('phone'); ?>" placeholder="Phone number">
            <span class="material-icons form-control-feedback">clear</span>
            <span class="text-danger"><?= form_error('phone'); ?></span>
          </div>
        </div>
        <div class="form-group mx-2 my-5 text-center <?php if (form_error('login_otp')) : ?>has-danger<?php endif; ?>">
          <input type="tel" name="login_otp" class="form-control" value="<?= set_value('login_otp'); ?>" placeholder="OTP">
          <span class="material-icons form-control-feedback">clear</span>
          <span class="text-danger"><?= form_error('login_otp'); ?></span>
        </div>
        <button class="btn btn-lg btn-success btn-block text-uppercase" type="submit">Sign in</button>
        <?php echo form_close() ?>
      </div>
    </div>
  </div>
</div>
