  <?php   print_r(PHPinfo()); exit(); ?>
  <div id="main-wrapper" class="page-login-register">
  <div class="hero-wrap d-flex align-items-center">
    <div class="hero-mask opacity-4 bg-secondary"></div>
    <div class="hero-bg hero-bg-scroll" style="background-image:url('http://15.207.40.134/webroot/ITCOT/img/loan.jpg');"></div>
    <div class="hero-content w-100">
      <div class="container">
        <div class="row g-0 min-vh-100 justify-content-center"> <!-- Login Form
		  ========================= -->
          <div class="col-md-5 d-flex align-items-center py-5">
            <div class="container my-auto py-2 shadow-lg bg-white rounded-2">
              <div class="row">
                <div class="col-11 col-lg-11 mx-auto">
                    <div class="text-center my-3"><a href="<?php echo $this->Url->build(['controller' => 'Pages', 'action' => 'index']); ?>" class="text-center">   <img src="<?php echo $this->Url->build('/'); ?>assets/image/logo1.png" alt="logo" /> </a></div>
                  <p class="text-center mb-4 register">New user?<a href="#"><u> Register here</u></a></p>
                  <div id="loginForm" method="post">
				  <?php echo $this->Form->create($user,['id'=>'FormID',"autocomplete"=>"off",'enctype'=>'multipart/form-data','class'=>'sign-in-form']); ?>

                    <div class="mb-3">
                      <label class="form-label text-dark fw-600" for="emailAddress">Username or Email Address</label>
                      <input type="text" class="form-control rounded-0" id="emailAddress" name ="username" required placeholder="Enter Your Email">
                    </div>
                    <div class="mb-3">
                      <label class="form-label text-dark fw-600" for="loginPassword">Password</label>
                      <input type="password" class="form-control rounded-0" id="loginPassword" name ="password" required placeholder="Enter Password">
                    </div>
                    <div class="row mt-4">
                      <div class="col">
                        <div class="form-check">
                          <input id="remember-me" name="remember" class="form-check-input rounded-0" type="checkbox">
                          <label class="form-check-label" for="remember-me">Keep me signed in</label>
                        </div>
                      </div>
                    </div>
                    <div class="d-grid my-4">
						<button class="btn btn-dark rounded-0" type="submit">Sign In</button>
					</div>
					 <?php echo $this->Form->End();?>
                  </div>
                  <div class="d-flex align-items-center my-4">
                    <hr class="flex-grow-1">
                    <span class="mx-2 text-2 text-muted">Or sign in with</span>
                    <hr class="flex-grow-1">
                  </div>
                  <div class="row g-3 mb-4">
                    <div class="col-sm-12 d-grid">
                      <button type="button" class="btn btn-outline-google btn-sm border-2 rounded-0 shadow-none"><span class="me-2"><i class="fab fa-google"></i></span>Google</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          </div></div></div></div></div>
          <!-- Login Form End --> 