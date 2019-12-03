<section class="section d-flex justify-content-center align-items-center" style='min-height:90vh;background-color:white;'>

  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h3 class="modal-title w-100 font-weight-bold">Enter your OTP</h3>
      </div>
      <!-- <?php if ($this->session->flashdata('login_err_msg')) : ?>
            <div class="alert alert-danger"><?= $this->session->flashdata('login_err_msg'); ?></div>
              <?php endif; ?> -->
      <div class="modal-body mx-5">
        <div class="md-form mb-5">
          <div>
            <?php echo form_open('estimate/otp_validate', array('class' => 'form')); ?>
            <div class="form-group mx-2 my-5 text-center <?php if (form_error('login_otp')) : ?>has-danger<?php endif; ?>">
              <input type="tel" name="login_otp" class="form-control" value="<?= set_value('login_otp'); ?>" placeholder="OTP">
              <span class="material-icons form-control-feedback">clear</span>
              <span class="text-danger"><?= form_error('login_otp'); ?></span>
            </div>
            <button class="btn btn-lg btn-success btn-block text-uppercase" type="submit">CONFIRM</button>
            <?php echo form_close() ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>