    <?php   //print_r(PHPinfo()); exit(); 

    ?>
<style>
.blink_me {
  animation: blinker 1s linear infinite;
}

@keyframes blinker {
  50% {
    opacity: 0;
  }
}

</style>
    <div id="main-wrapper" class="page-login-register">
      <div class="hero-wrap d-flex align-items-center">
        <div class="hero-mask opacity-4 bg-secondary"></div>
        <div class="hero-bg hero-bg-scroll" style="background-image:url('/img/bg-login-2.jpg');"></div>
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
                          <input type="text" class="form-control rounded-0" id="name" name="name" required placeholder="Enter Your Name" minlength="3" maxlength="50">
                        </div>
                        <div class="mb-3">
                          <label class="form-label text-dark fw-600" for="emailAddress">Email</label>
                          <input type="email" class="form-control rounded-0" id="emailAddress" name="email" required placeholder="Enter Your Email" onchange="email_check();"><br>
                          <div class="text-center">
                            <div class="sendotp">

                              <button type="button" class="btn btn-outline-primary btn-sm" id="sendotp">Send OTP

                              </button>
                              <button type="button" style="display: none;" class="btn btn-outline-primary btn-sm" id="resendotp" onclick="resendotpformat(15)">Resend OTP</button>

                            
                              <a class="verifyotp" style="display:none;text-decoration:none;">
                              <span id="timer" style="color: red; font-weight:bold; font-size:large;" class="blink_me"></span>
                              </a>
                              
                              <br><br>
                            </div>
                            <div class="verifyotp" style="display:none">
                              <!-- <span id="timer" style="color: red; font-weight:bold;" class="blink_me"></span> -->
                              <input type="text" class="form-control num" id="verifyotp" name="verifyotp" required placeholder="Verify your OTP" maxlength="6"><br>

                              <button type="button" class="btn btn-outline-primary btn-sm" id="verifyotp">Verify OTP</button>
                              <!-- <button type="button" style="display: none;" class="btn btn-outline-primary btn-sm" id="resendotp" onclick="resendotpformat(30)">Resend OTP</button> -->
                              <!-- <div id="re-send" style="display: none;">Time left: <span id="resend"></span></div> -->
                              </div>
                          </div>
                        </div>
                        <div class="mb-3">
                          <label class="form-label text-dark fw-600" for="mobile_no">Mobile No</label>
                          <input type="text" class="form-control form-control-solid num" id="mobile_no" name="mobile_no" minlength="3" maxlength="10" required placeholder="Enter Your Mobile No" onchange="mbl_check();">
                        </div>
                        <div id="register" style="display:none;">
                          <div class="d-grid my-4">
                            <button type="submit" class="btn rounded-0" style="background: #093875;color:white">Register</button>
                          </div>
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

      //SEND OTP

      //SEND OTP

      $("#sendotp").click(function() {


        var email = $('#emailAddress').val();

        if (email != '') {
          alert('OTP Sent to Your Email:' + email);
          $('#sendotp').prop('disabled', true);
          var enc = window.btoa(email);
          $('#emailAddress').prop('readonly', true);
          //window.btoa( String )
          //alert(enc);
          // if (email != '') {

          //   $('.verifyotp').show();
          //   //window.location.href = 'https://itcot.demodev.in/users/sendotp/' + enc;
          // } else {

          //   $('#verifyotp').hide();
          //   alert('Enter Valid Email ID');
          // }


          $('.verifyotp').show();

          $.ajax({
            async: true,

            dataType: "html",
            url: '<?php echo $this->Url->webroot ?>/OtpEmaillogs/ajaxotp/' + enc,
            beforeSend: function(xhr) {
              xhr.setRequestHeader('X-CSRF-Token', $('[name="_csrfToken"]').val());
            },
            success: function(data, textStatus) {

              //alert(data);
              //   if(data==0){
              //     alert('Please Enter valid-Email Address');
              // $('#emailAddress').focus();
              //   }
              //	$('.rawadding').append(data);

             // $('#emailAddress').prop('readonly', true);
            }
          });
        } else {
          alert('Please Enter Email Address');
          $('#emailAddress').focus();

        }

      });





      //VERIFY OTP

      $("#verifyotp").change(function() {


        var verify = $('#verifyotp').val();
        var email = $('#emailAddress').val();

        //alert(verify);


        if (verify != '') {

          //$('.verifyotp').show();

          $.ajax({


            async: true,

            dataType: "html",
            url: '<?php echo $this->Url->webroot ?>/OtpEmaillogs/ajaxverifyotp/' + verify + '/' + email,
            beforeSend: function(xhr) {
              xhr.setRequestHeader('X-CSRF-Token', $('[name="_csrfToken"]').val());
            },
            success: function(data, textStatus) {
              //	$('.rawadding').append(data);
              //alert(data);
              if (data == 1) {

                alert('OTP Verified Successfully');
                $(".verifyotp").hide();
                $(".sendotp").hide();
                $('#emailAddress').prop('readonly', true);
                $('#register').show();

              } else {

                alert('OTP Not Matched');
                $("#verifyotp").val('').trigger('change');
              }


            }


          });
        }

      });




      function email_check()

      {
        // alert('hi');
        var email = $('#emailAddress').val();
        // var mbl = $('#mobile_no').val();

        //alert(mbl);
        $.ajax({

          async: true,
          dataType: "html",

          url: '<?php echo $this->Url->webroot; ?>ajaxcalling/' + email,


          success: function(data, textStatus) {
            // alert(data);
            if (data == 1) {

              alert('Email already registered, Try another!')
              $("#emailAddress").val('').trigger('change');

            }
            //alert(data);
          }


        });

      }

      function mbl_check()

      {
        //alert('hi');
        // var email = $('#emailAddress').val();
        var mbl = $('#mobile_no').val();

        //alert(mbl);
        $.ajax({

          async: true,
          dataType: "html",

          url: '<?php echo $this->Url->webroot; ?>ajaxcallingmbl/' + mbl,


          success: function(data, textStatus) {
            //alert(data);
            if (data == 1) {

              alert('Mobile No already registered, Try another!')
              $("#mobile_no").val('').trigger('change');

            }
            //alert(data);
          }


        });

      }

      //TIMER
      let timerOn = true;

      function timer(remaining) {

        // alert(remaining);
        var m = Math.floor(remaining / 60);
        var s = remaining % 60;
        var email = $('#emailAddress').val();
        m = m < 10 ? '0' + m : m;
        s = s < 10 ? '0' + s : s;
        document.getElementById('timer').innerHTML = m + ':' + s;
        remaining -= 1;

        if (remaining >= 0 && timerOn) {
          setTimeout(function() {
            timer(remaining);
          }, 1000);
          return;
        }

        if (!timerOn) {
          // Do validate stuff here
          return;
          //  $('#resendotp').show();
        }

        // Do timeout stuff here
        alert('Timeout for otp');
        $('#sendotp').hide();
        $('#resendotp').show();
       
        $("#emailAddress").focus();
        $('#emailAddress').prop('readonly', false);
        // alert('Entered Email id:'+email);



      }

      timer(60);

      // ------------------------------------------
      let On = true;

      function resendotpformat(remaining) {
        //alert(remaining);

        var email = $('#emailAddress').val();
        


        var m = Math.floor(remaining / 60);
        var s = remaining % 60;

        m = m < 10 ? '0' + m : m;
        s = s < 10 ? '0' + s : s;
        document.getElementById('timer').innerHTML = m + ':' + s;
        remaining -= 1;

        if (remaining >= 0 && On) {
          setTimeout(function() {
            resendotpformat(remaining);
          }, 1000);
          return;
          
        }

        if (!On) {
          // Do validate stuff here
          return;
          //  $('#resendotp').show();
        }



        var email = $('#emailAddress').val();



        // alert('Your Email id:'+email);

        if (email != '') {

          alert('OTP Successfully send to your email id:'+email);
          
           // $('#timer').hide();
        
          // alert('OTP Sent to Your Email:'+email);
          $('#sendotp').prop('disabled', true);
          $('#emailAddress').prop('readonly', true);
        $('#resendotp').prop('disabled', true);
        
          var enc = window.btoa(email);





          $.ajax({
            async: true,

            dataType: "html",
            url: '<?php echo $this->Url->webroot ?>/OtpEmaillogs/ajaxotp/' + enc,
            beforeSend: function(xhr) {
              xhr.setRequestHeader('X-CSRF-Token', $('[name="_csrfToken"]').val());
            },
            success: function(data, textStatus) {

              // alert(data);
              
              

            }
          });
        } else {
          alert('Please Enter Email Address');
          //$('#emailAddress').focus();

        }

        
       
     $('#emailAddress').prop('readonly', false);
        $('#resendotp').prop('disabled', false);
       // alert('OTP Sent to Your mail ID:' + email);

        //   // Do timeout stuff here



      }
    </script>