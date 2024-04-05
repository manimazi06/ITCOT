<style>
.error{
	color:red;
}
</style>
<div class="card mt-5">
    <div class="card-header bg-info">
        <h4 class="mb-0 text-white">Change Password</h4>
    </div>
        <div class="card-body">
                <?php //echo $this->Form->create('Users',['class'=>'form-horizontal', 'id'=>'ChangePasswordForm']); ?>
				<?php echo $this->Form->create($changepassword,['id'=>'ChangePasswordForm','class'=>'form-horizontal', "autocomplete"=>"off",'enctype'=>'multipart/form-data']); ?>

				<div class="row">
				      <div class="col-sm-12 col-md-3">
                        <div class="mb-3">
                            <label for="inputlname" class="control-label col-form-label">Current Password <span class="text-danger">*</span></label>
                                <?php echo $this->Form->input('oldpassword',['class'=>'form-control show-pass1','label'=>false,'error' => false,'value'=>"",'placeholder'=>'Current Password','type'=>'password','maxlength'=>15]);?>

                        </div>
                    </div>
                    <div class="col-sm-12 col-md-3">
                        <div class="mb-3">
                            <label for="inputlname" class="control-label col-form-label">New Password <span class="text-danger">*</span></label>
                                <?php echo $this->Form->input('newpassword',['id'=>'newpassword','class'=>'form-control show-pass2 passchecker','label'=>false,'placeholder'=>'New Password','error' => false,'type'=>'password','minlength'=>8,'maxlength'=>15]);?>
                        </div>
                    </div>

                    <div class="col-sm-12 col-md-3">
                        <div class="mb-3">
                            <label for="inputlname" class="control-label col-form-label">Confirm New Password <span class="text-danger">*</span></label>
                                <?php echo $this->Form->input('confirmpassword',['class'=>'form-control show-pass3','label'=>false,'placeholder'=>'Confirm New Password','error' => false,'type'=>'password','minlength'=>8,'maxlength'=>15]);?>
                        </div>
                    </div>
				        
                    <div class="form-group">
                        <div class="offset-md-5 col-md-6">
                            <button type="submit"
                                class=" btn btn-success">Submit</button>
                            <button type="button"
                                class=" btn btn-default"
                                onclick="javascript:history.back()">Cancel</button>
                        </div>
                    </div>
                </div>
                <?php echo $this->Form->End();?>
            </div>
			 </div>

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