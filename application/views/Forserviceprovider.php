  <div class="page-header header-filter" data-parallax="true" style="height:450px;background: linear-gradient(25deg,#61ce70,yellow);">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="brand text-left">
            <h1 class="Small">Join the online moving market.</h1>
            <h3>Get your leads in a new way.</h3>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="main main-raised">
    <div class="container">
      <div class="section text-center">
        <div class="row">
          <div class="col-sm-8 ml-auto mr-auto">
            <h2 class="title">Who we are ?</h2>
            <h4 class="text-center description">Boxigo is an online marketplace where customers can compare guaranteed prices for available moving and storage companies in their area and book online at anytime day or night.</h4>           

              <button data-toggle="modal" data-target="#myModal" class="btn btn-success btn-raised btn-md">
              <i class="material-icons">group</i>&nbsp;&nbsp;Join with us
              </button>

          </div>
          <div class="col-sm-4">
            <img style='height:auto;width:100%'src="https://cdn.dribbble.com/users/767646/screenshots/1943995/team.gif" alt="image">
          </div>
        </div>
      </div>
      
    </div>

  </div>




<!-- -======================================== wigids section================================================================ -->


    <!-- Classic Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <div class="row">
              <div class="col-lg-12">
                <h3 class="modal-title mt-0 text-center">Create your mover account at Boxigo</h3> 
                  <p class="text-center">You can start creating your mover profile. Boxigo will review your application for approval.</p>
              </div>  
            </div>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col-md-6">
                  <div class="form-group">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="material-icons">person</i>
                        </span>
                      </div>
                      <input type="text" class="form-control" placeholder="Your Name">
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="material-icons">email</i>
                        </span>
                      </div>
                      <input type="text" class="form-control" placeholder="Your E-Mail">
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="material-icons">phone</i>
                        </span>
                      </div>
                      <input type="text" class="form-control" placeholder="Your Phone No"><span><button type="button"class="btn btn-success btn-sm" onclick="showotp()">Send OTP</button></span>
                    </div>
                  </div>

              </div>
              <div class="col-md-6">
                  <div class="form-group">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="material-icons">group</i>
                        </span>
                      </div>
                      <input type="text" class="form-control" placeholder="Business Name">
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="material-icons">web</i>
                        </span>
                      </div>
                      <input type="text" class="form-control" placeholder="Business Website URL">
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="material-icons">phone</i>
                        </span>
                      </div>
                      <input type="text" class="form-control" placeholder="Business Phone No">
                    </div>
                  </div>
              </div>
            </div>
            <div class="row pl-1" id="otp" style="display: none">
              <div class="col-sm-12">
                <div class="form-group">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="fas fa-info-circle"></i>
                        </span>
                      </div>
                      <input type="text" class="form-control" placeholder="Enter the OTP sent to your number"><button class="btn btn-secondary btn-sm">resend OTP</button><button class="btn btn-success btn-sm">Verify OTP</button>
                    </div>
                  </div>
              </div>
            </div>
            <div class="row ml-2 mt-2">
              <div class="col-sm-6">
                
                <div class="form-check">
                  <label class="form-check-label">
                    <input class="form-check-input" type="checkbox" value="" required="required"> I am legally authorized to perform household goods move.
                    <span class="form-check-sign">
                      <span class="check"></span>
                    </span>
                  </label>
                </div>

                <div class="form-check">
                  <label class="form-check-label">
                    <input class="form-check-input" type="checkbox" value="" required="required"> I have read, understand, and accept the terms and conditions.
                    <span class="form-check-sign">
                      <span class="check"></span>
                    </span>
                  </label>
                </div>

              </div>

              <div class="col-sm-6">
                <p class="mt-2 ml-2">Click here for <a href="">Terms and Conditions</a></p>
              </div>

            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-link btn-success">submit</button>
            <button type="button" class="btn btn-danger btn-link" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
  <!--  End Modal -->


<!-- -======================================== wigids section End ======================================================== -->

  <!---------------otp script---------------  -->
  <script type="text/javascript">
    function showotp(){
      document.getElementById('otp').style.display="block";
    }
  </script>
