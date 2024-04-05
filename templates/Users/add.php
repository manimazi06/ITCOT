<style>
    .error {
        color: red;
    }
</style>
<div class="card mt-5">
    <div class="card-header" style="background-color: #243e04;">
        <h4 class="mb-0 text-white">Add User</h4>
    </div>
    <div class="card-body">
        <h4 class="card-title mb-3 pb-3 "></h4>
        <?php echo $this->Form->create(null, ['id' => 'FormID', 'class' => 'form-horizontal', "autocomplete" => "off", 'enctype' => 'multipart/form-data']); ?>
        <div class="row">
            <div class="col-sm-12 col-md-3">
                <div class="mb-4">
                    <label for="inputlname" class="control-label col-form-label">Role<span class="text-danger">*</span></label>
                    <?php echo $this->Form->control('role_id', ['class' => 'form-select', 'templates' => ['inputContainer' => '{{content}}'], 'options' => $role, 'label' => false, 'error' => false, 'empty' => 'Select Role', 'required', 'onchange' => 'loadrole(this.value)']); ?>
                </div>
            </div>
			<div class="col-sm-12 col-md-3">
                <div class="mb-4">
                    <label for="inputlname" class="control-label col-form-label">Name<span class="text-danger">*</span></label>
                    <?php echo $this->Form->control('name', ['label' => false, 'class' => 'form-control', 'type' => 'text', 'required']); ?>
                </div>
            </div>
             <div class="col-sm-12 col-md-3">
                <div class="mb-4">
                    <label for="inputlname" class="control-label col-form-label">Mobile No.<span class="text-danger">*</span></label>
                    <?php echo $this->Form->control('mobile_no', ['label' => false, 'class' => 'form-control', 'type' => 'text', 'required']); ?>
                </div>
            </div>              
        </div>
        <div class="row">            
            <div class="col-sm-12 col-md-3">
                <div class="mb-4">
                    <label for="inputlname" class="control-label col-form-label">Username<span class="text-danger">*</span></label>
                    <?php echo $this->Form->control('username', ['label' => false, 'class' => 'form-control', 'type' => 'text', 'required']); ?>
                </div>
            </div>
            <div class="col-sm-12 col-md-3">
                <div class="mb-4">
                    <label for="inputlname" class="control-label col-form-label">Password <span class="text-danger">*</span></label>
                    <?php echo $this->Form->control('password', ['label' => false, 'class' => 'form-control', 'type' => 'text', 'required', 'minimum' => 8, 'maximum' => 15]); ?>
                </div>
            </div>
			<div class="col-sm-12 col-md-3">
                <div class="mb-4">
                    <label for="inputlname" class="control-label col-form-label">Email <span class="text-danger"></span></label>
                    <?php echo $this->Form->control('email', ['label' => false, 'class' => 'form-control', 'type' => 'text', 'maximum' => 155]); ?>
                </div>
            </div>
        </div>
    </div>
    <div class="action-form">
        <div class="mb-3 mt-3 text-center">
            <button type="submit" class="btn btn-info rounded-pill px-4 waves-effect waves-light">Save</button>
            <span>
                <?php echo $this->Html->link(('<i class="fas fa-arrow-left"></i>&nbsp; Back'), ['action' => 'index'], ['escape' => false, 'class' => 'btn btn-warning btn-rounded',]); ?>
            </span>
        </div>
    </div>
</div>
<?php echo $this->Form->End(); ?>

</div>
</div>
<script>
    $("#FormID").validate({
        rules: {
            'role_id': {
                required: true
            },
            'name': {
                required: true
            },
            'username': {
                required: true
            },
            'password': {
                required: true,
                minlength: 8,
                maxlength: 15
            },
            'mobile_no': {
                required: true
            }
        },

        messages: {
            'role_id': {
                required: "Select Role"
            },
            'name': {
                required: "Enter Name"
            },
            'username': {
                required: "Enter Username"
            },
            'circle_id': {
                required: "Select Circle"
            },
            'circle_id': {
                required: "Select Circle"
            },
            'division_id': {
                required: "Select Division"
            },
            'range_id': {
                required: "Select Range"
            },
            'password': {
                required: "Enter Password",
                minlength: "Minmum atleat 8 characters",
                maxlength: "Maxnmum atleat 15 characters"
            },
            'mobile_no': {
                required: "Enter Mobile No."
            }
        },
        submitHandler: function(form) {
            form.submit();
            $(".btn").prop('disabled', true);
        }
    });


    // function loadrole(id) {
    //     $(".dispackage").hide();
    //     $("#package-id").val('');
    //     if (id == 2 || id == 3) {
    //         $(".disttrictopen").show();
    //         $(".dispackage").show();
    //         $(".disttrictopen").hide();
    //         $(".disopen").hide();
    //         $("#district-id").val('');
    //         $("#block-id").val('');
    //     } else {
    //         $(".disttrictopen").hide();
    //         $(".disopen").hide();
    //         $("#district-id").val('');
    //         $("#block-id").val('');
    //     }
    // }



    function loadrole(val) {
        if (val == 2) {
            $('.circle_id_div').show();
            $('.circle_id_div').show();
        } else if (val == 3) {
            $('.circle_id_div').show();
            $('.division_div').show();
        } else if (val == 4) {
            $('.circle_id_div').show();
            $('.division_div').show();
            $('.range_div').show();
        } else {
            $('.circle_id_div').hide();
            $('.division_div').hide();
            $('.range_div').hide();

        }
    }


    // function loadDivision(circleid) {
        // // alert(districtsid);
        // if (circleid) {
            // $.ajax({
                // type: 'POST',
                // url: '<?php echo $this->Url->webroot ?>/Users/ajaxdivisionlist/' + circleid,
                // success: function(data, textStatus) {
                    // // alert(data);
                    // $('#division-id').html(data);
                // }
            // });
            // $('#division-id').val('');
            // $('#village-id').val('');
        // } else {

            // $('#division-id').html('<option value="">Select Taluk</option>');
            // $('#village-id').html('<option value="">Select Village</option>');
        // }
    // }

    // function loadRange(divisionid) {
        // // alert(divisionid);
        // var circleID = document.getElementById('circle-id').value;
        // if (divisionid) {
            // $.ajax({
                // type: 'POST',
                // url: '<?php echo $this->Url->webroot ?>/Users/ajaxrangelist/' + divisionid + '/' + circleID,
                // success: function(data, textStatus) {
                    // // alert(data);
                    // $('#range-id').html(data);
                // }
            // });
            // // $('#range-id').val('');
        // } else {
            // $('#range-id').html('<option value="">Select Village</option>');
        // }
    // }
</script>