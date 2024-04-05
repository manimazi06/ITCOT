<?php   //print_r(PHPinfo()); exit(); 

?>

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
                                    <!-- <div class="text-center my-3"><a href="<?php echo $this->Url->build(['controller' => 'Pages', 'action' => 'index']); ?>" class="text-center"> <img src="<?php echo $this->Url->build('/'); ?>assets/image/logo1.png" alt="logo" /> </a></div> -->
                                    <!-- <p class="text-center mb-4 register">Already having account?&nbsp;<a style="text-decoration: none !important;" href="<?php echo $this->Url->build(['controller' => 'Users', 'action' => 'login']); ?>">&nbsp;Login</a></p> -->

                                    <div id="regForm">
                                        <?php echo $this->Form->create(null, ['id' => 'FormID', "autocomplete" => "off", 'enctype' => 'multipart/form-data', 'class' => 'sign-in-form']); ?>
                                                <h5 class="text-center">Forgot Password</h5>

                                        <div class="mb-3">
                                            <label class="form-label text-dark fw-600" for="mobile_no">New Password</label>
                                            <?php echo $this->Form->input('newpassword', ['id' => 'newpassword', 'class' => 'form-control show-pass2 passchecker', 'label' => false, 'placeholder' => 'New Password', 'error' => false, 'type' => 'password', 'minlength' => 8, 'maxlength' => 15]); ?>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label text-dark fw-600" for="mobile_no">Confirm New Password</label>
                                            <?php echo $this->Form->input('confirmpassword', ['class' => 'form-control show-pass3', 'label' => false, 'placeholder' => 'Confirm New Password', 'error' => false, 'type' => 'password', 'minlength' => 8, 'maxlength' => 15]); ?>
                                        </div>
                                        <div class="form-group">
                                            <div class="offset-md-5 col-md-6">
                                                <button type="submit" class=" btn btn-success">Update</button>
                                                <!-- <button type="button" class=" btn btn-default" onclick="javascript:history.back()">Cancel</button> -->
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
    // $('.passchecker').passtrength({
    // minChars: 8,
    // passwordToggle: false
    // });

    // Convert Password Field To Text On Hover.
    var passField1 = $('input[type=password]');
    $('.show-pass1').hover(function() {
        passField1.attr('type', 'text');
    }, function() {
        passField1.attr('type', 'password');
    })
    var passField2 = $('input[type=password]');
    $('.show-pass2').hover(function() {
        passField2.attr('type', 'text');
    }, function() {
        passField2.attr('type', 'password');
    })
    var passField3 = $('input[type=password]');
    $('.show-pass3').hover(function() {
        passField3.attr('type', 'text');
    }, function() {
        passField3.attr('type', 'password');
    })

    $(function() {
        $.validator.addMethod("atLeastOneLowercaseLetter", function(value, element) {
            return this.optional(element) || /[a-z]+/.test(value);
        }, "<br />Must have at least one lowercase letter");

        $.validator.addMethod("atLeastOneUppercaseLetter", function(value, element) {
            return this.optional(element) || /[A-Z]+/.test(value);
        }, "<br />Must have at least one uppercase letter");


        $.validator.addMethod("atLeastOneNumber", function(value, element) {
            return this.optional(element) || /[0-9]+/.test(value);
        }, "<br />Must have at least one number");


        $.validator.addMethod("atLeastOneSymbol", function(value, element) {
            return this.optional(element) || /[!@#$%^&*()_]+/.test(value);
        }, "<br />Must have at least one special character");
        $("#ChangePasswordForm").validate({
            rules: {
                'oldpassword': {
                    required: true,
                    minlength: 8,
                    maxlength: 15
                },
                'newpassword': {
                    required: true,
                    atLeastOneLowercaseLetter: true,
                    atLeastOneUppercaseLetter: true,
                    atLeastOneNumber: true,
                    atLeastOneSymbol: true,
                    minlength: 8,
                    maxlength: 15
                },
                'confirmpassword': {
                    required: true,
                    minlength: 8,
                    maxlength: 15,
                    equalTo: '#newpassword'
                }
            },
            messages: {
                'oldpassword': {
                    required: "Enter Password",
                    minlength: "Password must be at least 8 characters long",
                    maxlength: "Password maximum of 15 characters long"
                },
                'newpassword': {
                    required: "Enter New Password",
                    minlength: "New Password must be at least 8 characters long",
                    maxlength: "New Password maximum of 15 characters long"
                },
                'confirmpassword': {
                    required: "Enter Confirm New Password",
                    minlength: "Confirm Password must be at least 8 characters long",
                    maxlength: "Confirm Password maximum of 15 characters long",
                    equalTo: 'Password does not match'
                }

            },
            submitHandler: function(form) {
                form.submit();
            }
        });
    });
</script>