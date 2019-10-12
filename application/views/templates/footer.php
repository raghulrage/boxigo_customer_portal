<?php if ($this->router->fetch_class() == 'dashboard') : ?>

  </section>
  </div>
  </div>
<?php endif; ?>
<?php if ($this->router->fetch_class() != 'estimate') : ?>
  <footer class="footer footer-default sticky-bottom p-0">
    <div class="container footer-padding">
      <div class="row">
        <div class="col-sm">
          <br>
          <ul class="navbar-nav text-justify pt-0">
            <li class="nav-item">
              <a href="<?= base_url(); ?>home/aboutus" class="dropdown-toggle nav-link pl-0">
                <!-- <i class="fas fa-users"></i>  -->About Us
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url(); ?>home/how_it_works" class="dropdown-toggle nav-link pl-0">
                <!-- <i class="fas fa-users"></i>  -->How it works
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link pl-0" href="<?= base_url(); ?>home/faq" rel="tooltip" title="" data-placement="bottom">
                <!-- <i class="fas fa-question-circle"></i> &nbsp; -->FAQ
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link pl-0" href="<?= base_url(); ?>home/privacy_policies" rel="tooltip" title="" data-placement="bottom">
                <!-- <i class="fas fa-question-circle"></i> &nbsp; -->Privacy Policy
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url(); ?>home/customer_support" class="dropdown-toggle nav-link pl-0">
                <!-- <i class="fas fa-hands-helping"></i> &nbsp; -->Customer Support
              </a>
            </li>
          </ul>
        </div>
        <div class="col-sm">
          <br>
          <ul class="navbar-nav text-justify pt-0">
            <li class="nav-item">
              <a class="nav-link pl-0" rel="tooltip" title="" data-placement="bottom" href="<?= base_url(); ?>home/forserviceprovider">
                <!-- <i class="fab fa-black-tie"></i> &nbsp; -->Vendor Registration
              </a>
            </li>
          </ul>
          <ul class="navbar-nav text-justify pt-0">
            <li class="nav-item">
              <a class="nav-link pl-0" rel="tooltip" title="" data-placement="bottom" href="<?= base_url(); ?>home/vendor_agreement">
                <!-- <i class="fab fa-black-tie"></i> &nbsp; -->Vendor Policy
              </a>
            </li>
          </ul>
        </div>
        <div class="col-sm">
          <br>
          <ul class="navbar-nav text-justify pt-0">
            <li class="nav-item">
              <a class="nav-link pl-0" rel="tooltip" title="" data-placement="bottom" href="<?= base_url(); ?>home/forserviceprovider">
                <!-- <i class="fab fa-black-tie"></i> &nbsp; -->Useful Links
              </a>
            </li>
          </ul>

        </div>
        <div class="col-sm   footer-logo d-flex justify-content-center align-items-center flex-column">
          <h2 class='info-title p-0'>Boxigo</h2>
          <h4 class='descriiption'>Pack your emotions, with us</h4>
          <p>follow us on</p>
          <div class="footer-logo text-center">
            <a target='_blank' href="https://www.instagram.com/boxigo.official"><i class="fab fa-instagram footer-logo m-2" style="color: black"></i></a>
            <a target='_blank' href="https://www.facebook.com/Boxigo.Offical"><i class="fab fa-facebook-f footer-logo m-2" style="color: black"></i></a>
            <a target='_blank' href="https://www.linkedin.com/company/boxigo"><i class="fab fa-linkedin-in footer-logo m-2" style="color: black"></i></a>
            <a target='_blank' href="https://www.linkedin.com/company/boxigo"><i class="fab fa-twitter footer-logo m-2" style="color: black"></i></a>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <div class="container-fluid bg-dark text-center p-3">
    <div class="copyright text-light">
      &copy;
      <script>
        document.write(new Date().getFullYear())
      </script>, copyrights hold by
      <a style="color:#61ce70" href="http://boxigo.in/" target="_blank">Boxigo</a>
    </div>
  </div>
<?php endif; ?>
<!--   Core JS Files   -->
<script src="<?= base_url(); ?>includes/js/core/jquery.min.js" type="text/javascript"></script>
<script src="<?= base_url(); ?>includes/js/core/popper.min.js" type="text/javascript"></script>
<script src="<?= base_url(); ?>includes/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
<script src="<?= base_url(); ?>includes/js/plugins/moment.min.js"></script>



<!--  Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
<script src="<?= base_url(); ?>includes/js/plugins/bootstrap-datetimepicker.js" type="text/javascript"></script>
<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="<?= base_url(); ?>includes/js/plugins/nouislider.min.js" type="text/javascript"></script>
<!--  Google Maps Plugin    -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAuZOC4rw7Uu9JIr4_rcT0rwl--mhBWLaQ&libraries=places&region=in"></script>
<!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->
<script src="<?= base_url(); ?>includes/js/material-kit.js?v=2.0.5" type="text/javascript"></script>
<script src="<?= base_url(); ?>includes/js/script.js" type="text/javascript"></script>


</body>

</html>