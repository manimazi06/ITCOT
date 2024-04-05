    <?php   //print_r(PHPinfo()); exit(); 
    ?>

    <div id="main-wrapper" class="page-login-register">
      <div class="hero-wrap d-flex align-items-center">
        <div class="hero-mask opacity-4 bg-secondary"></div>
        <div class="hero-bg hero-bg-scroll" style="background-image:url('http://15.207.40.134/webroot/ITCOT/img/bg-login-2.jpg');"></div>
        <div class="hero-content w-100">
          <div class="container">
            <div class="row g-0 min-vh-100 justify-content-center"> <!-- Login Form
		  ========================= -->
              <div class="col-md-5 d-flex align-items-center py-5">
                <div class="container my-auto py-2 shadow-lg bg-white rounded-2">
                  <div class="row">
                    <div class="col-11 col-lg-11 mx-auto">
                      <div class="text-center my-3"><a href="<?php echo $this->Url->build(['controller' => 'Pages', 'action' => 'index']); ?>" class="text-center"> <img src="<?php echo $this->Url->build('/'); ?>assets/image/logo1.png" alt="logo" /> </a></div>
                      <p class="text-center mb-4 register">Already having account?&nbsp;<a style="text-decoration: none !important;" href="<?php echo $this->Url->build(['controller' => 'Users', 'action' => 'login']); ?>">&nbsp;Login</a></p>

                      <div id="regForm">
                        <?php echo $this->Form->create(null, ['id' => 'FormID', "autocomplete" => "off", 'enctype' => 'multipart/form-data', 'class' => 'sign-in-form']); ?>

                        <div class="mb-3">
                          <label class="form-label text-dark fw-600" for="name">Name</label>
                          <input type="text" class="form-control rounded-0" id="name" name="name" required placeholder="Enter Your Name">
                        </div>
                        <div class="mb-3">
                          <label class="form-label text-dark fw-600" for="emailAddress">Email</label>
                          <input type="email" class="form-control rounded-0" id="emailAddress" name="email" required placeholder="Enter Your Email">
                        </div>
                        <div class="mb-3">
                          <label class="form-label text-dark fw-600" for="mobile_no">Mobile No</label>
                          <input type="number" class="form-control rounded-0" id="mobile_no" name="mobile_no" minlength="1" maxlength="10" required placeholder="Enter Your Mobile No">
                        </div>
                        <div class="d-grid my-4">
                          <button class="btn rounded-0" style="background: #093875;color:white" type="submit">Register</button>
                        </div>
                        <?php echo $this->Form->End(); ?>
                      </div>

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Login Form End -->

    <script>
      $("#FormID").validate({
        rules: {
          'name': {
            required: true
          },
          'email': {
            required: true,
            email: true
          },
          'mobile_no': {
            required: true
          }
        },
        messages: {

          'name': {
            required: "Enter Name"
          },
          'email': {
            required: "Enter Email",
            email: "Enter Valid Email"
          },
          'mobile_no': {
            required: "Enter Mobile No"
          }
        },
        submitHandler: function(form) {
          form.submit();
          $(".btn").prop('disabled', true);
        }
      });
    </script>