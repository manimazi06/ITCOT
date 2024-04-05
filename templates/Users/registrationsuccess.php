    <?php   //print_r(PHPinfo()); exit(); ?>

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

                  <div id="regForm" method="post">
				  <?php echo $this->Form->create(null,['id'=>'FormID',"autocomplete"=>"off",'enctype'=>'multipart/form-data','class'=>'sign-in-form']); ?>
                    
        
                    <div class="mb-3">
                      <label class="form-label text-dark fw-600" for="emailAddress">Username:</label>
                      <?php echo $user['username']; ?>
                    </div>
                    <div class="mb-3">
                      <label class="form-label text-dark fw-600" for="password">Password:</label>
                      <?php echo $user['mobile_no'];; ?>
                    </div>
					
					<div class="d-grid my-4">
					    <a href="<?php echo $this->Url->build(['controller' => 'Users', 'action' => 'login']); ?>" class="text-center">
						<button class="btn btn-dark rounded-0" type="button">GO TO LOGIN</button>
						</a>
					</div>
                 
					 <?php echo $this->Form->End();?>
                  </div>                 
                </div>
              </div>
            </div>
          </div>
          </div></div></div></div></div>
          <!-- Login Form End --> 

        