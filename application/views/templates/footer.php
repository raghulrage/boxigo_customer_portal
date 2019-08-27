  <?php if($this->router->fetch_class() == 'dashboard'): ?>

        </section>
      </div>
    </div>
  <?php endif; ?>
<footer class="footer footer-default sticky-bottom p-3 ">
    <div class="container-fluid">
     <div class="row">
        <div class="col-sm d-flex flex-column" >
          <h3 class="info-title pb-2">Contact Us</h3>
            
              <span><i class="fas fa-thumbtack"></i>&nbsp;
              No 5, 5th Cross,
              Kalasipalyam New Extension,
              Behind Farah Complex, JC Road,
              Bangalore - 560002
              KARNATAKA </span><br>
           
              <span><i class="fas fa-envelope"></i>&nbsp;
              support@boxigo.com </span><br>
            
              <span><i class="fas fa-fax"></i>&nbsp;
              2222 2342 / 2223 4772 </span><br>
            
              <span><i class="fas fa-phone"></i>&nbsp;
              93428 59689 / 99862 18146</span>
        </div>
        <div class="col-sm">
            <h3 class="info-title text-justify">Important Links</h1>
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
                    <a class="nav-link pl-0" href="<?= base_url(); ?>home/faq" rel="tooltip" title="" data-placement="bottom" >
                    <!-- <i class="fas fa-question-circle"></i> &nbsp; -->FAQ
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link pl-0" rel="tooltip" title="" data-placement="bottom" href="#">
                      <!-- <i class="fas fa-hands-helping"></i> &nbsp; -->Customer Support
                    </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link pl-0" rel="tooltip" title="" data-placement="bottom" href="<?= base_url(); ?>home/forserviceprovider">
                    <!-- <i class="fab fa-black-tie"></i> &nbsp; -->For Service Provider
                  </a>
                </li>
                <li class="nav-item">
                  <?php if($this->session->userdata('user_id')): ?>
                      <a class="nav-link pl-0" rel="tooltip" title="" data-placement="bottom" href="<?= base_url();?>logout">
                        <!-- <i class="fas fa-user-check"></i> &nbsp; -->Logout
                      </a>
                  <?php else: ?>
                    <a class="nav-link pl-0" rel="tooltip" title="" data-placement="bottom" href="<?= base_url();?>login">
                      <!-- <i class="fas fa-user-check"></i> &nbsp; -->Login
                    </a>
                  <?php endif; ?>
                </li>
              </ul>
        </div>
        <div class="col-sm-3">
            <div id="map"></div>
        </div>
        <div class="col-sm-3 footer-logo d-flex justify-content-center align-items-center flex-column">
            <h1 class='info-title mt-3'>Boxigo</h1>
            <h4 class='descriiption'>Pack your emotions, with us</h4><br>
            <p>follow us on</p>
            <div class="footer-logo text-center">
                <i class="fab fa-instagram footer-logo m-4 "></i>
                <i class="fab fa-facebook-f footer-logo m-4"></i>
                <i class="fab fa-linkedin-in footer-logo m-4 "></i>
                <i class="fab fa-twitter footer-logo m-4 "></i>
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
      <a style="color:#61ce70" href="http://boxigo.planpackersandmovers.com/" target="_blank">Boxigo</a>
    </div>
  </div>
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
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAuZOC4rw7Uu9JIr4_rcT0rwl--mhBWLaQ&libraries=places&region=in"></script>
  <!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->
  <script src="<?= base_url(); ?>includes/js/material-kit.js?v=2.0.5" type="text/javascript"></script>
  <script src="<?= base_url(); ?>includes/js/script.js" type="text/javascript"></script>

 
</body>

</html>