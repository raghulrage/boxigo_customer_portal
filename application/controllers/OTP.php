<section class="section d-flex justify-content-center align-items-center" style='min-height:90vh;background-color:white;'>

  <div class="container ">
    <div>
      <?php echo form_open('login/otp_validate', array('class' => 'form')); ?>
      <div class="form-group mx-2 my-5 text-center <?php if (form_error('login_otp')) : ?>has-danger<?php endif; ?>">
        <input type="tel" name="login_otp" class="form-control" value="<?= set_value('login_otp'); ?>" placeholder="OTP">
        <span class="material-icons form-control-feedback">clear</span>
        <span class="text-danger"><?= form_error('login_otp'); ?></span>
      </div>
      <button class="btn btn-lg btn-success btn-block text-uppercase" type="submit">CONFIRM</button>
      <?php echo form_close() ?>
    </div>
  </div>
</section>