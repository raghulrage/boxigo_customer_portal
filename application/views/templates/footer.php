  <?php if($this->router->fetch_class() == 'dashboard'): ?>
        </section>
      </div>
    </div>
  <?php endif; ?>
<footer class="footer footer-default">
    <div class="container">
      <nav class="float-left">
        <ul>
          <li>
            <a href="#">
            <i class="fas fa-users"></i> About Us
            </a>
          </li>
          <li>
            <a href="#">
            <i class="fas fa-info-circle"></i> &nbsp; How it works
            </a>
          </li>
          <li>
            <a href="#customer support">
            <i class="fas fa-question-circle"></i> &nbsp;FAQ
            </a>
          </li>
          <li>
            <a href="#customer support">
            <i class="fas fa-hands-helping"></i> &nbsp;Customer support
            </a>
          </li>
          <li>
            <a href="forserviceproviders.php">
            <i class="fab fa-black-tie"></i> &nbsp;for service providers
            </a>
          </li>
          <li class="nav-item">
            <?php if($this->session->userdata('user_id')): ?>
                <a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="<?= base_url();?>logout" data-original-title="Click here to logout">
                  <i class="fas fa-user-check"></i> &nbsp;Logout
                </a>
            <?php else: ?>
              <a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="<?= base_url();?>login" data-original-title="Click here to login">
                <i class="fas fa-user-check"></i> &nbsp;Login
              </a>
            <?php endif; ?>
          </li>
        </ul>
      </nav>
      <div class="copyright float-right">
        &copy;
        <script>
          document.write(new Date().getFullYear())
        </script>, made with <i class="material-icons">favorite</i> by
        <a href="http://boxigo.planpackersandmovers.com/" target="_blank">Boxigo</a>
      </div>
    </div>
  </footer>
  <!--   Core JS Files   -->
  <script src="<?= base_url(); ?>includes/js/core/jquery.min.js" type="text/javascript"></script>
  <script src="<?= base_url(); ?>includes/js/core/popper.min.js" type="text/javascript"></script>
  <script src="<?= base_url(); ?>includes/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
  <script src="<?= base_url(); ?>includes/js/plugins/moment.min.js"></script>
  <!--	Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
  <script src="<?= base_url(); ?>includes/js/plugins/bootstrap-datetimepicker.js" type="text/javascript"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="<?= base_url(); ?>includes/js/plugins/nouislider.min.js" type="text/javascript"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->
  <script src="<?= base_url(); ?>includes/js/material-kit.js?v=2.0.5" type="text/javascript"></script>
  <script src="<?= base_url(); ?>includes/js/script.js" type="text/javascript"></script>
</body>

</html>