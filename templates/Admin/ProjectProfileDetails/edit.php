<style>
    .error {
        color: red;
    }
</style>
<div class="card mt-5">
    <div class="card-header" style="background-color: #243e04;">
        <h4 class="mb-0 text-white">Edit Project Profile Details</h4>
    </div>
    <div class="card-body">
        <h4 class="card-title mb-3 pb-3 "></h4>
        <?php echo $this->Form->create($projectProfileDetails, ['id' => 'FormID', 'class' => 'form-horizontal', "autocomplete" => "off", 'enctype' => 'multipart/form-data']); ?>

        <div class="row">
            <div class="col-sm-12 col-md-3">
                <div class="mb-4">
                    <label for="inputlname" class="control-label col-form-label">Profile Profile<span class="text-danger">*</span></label>
                    <?php echo $this->Form->control('project_profile_id', ['label' => false, 'class' => 'form-control select', 'empty' => 'Select Project profile', 'options' => $projectDetails, 'required']); ?>
                </div>
            </div>
			<div class="col-sm-12 col-md-3">
                <div class="mb-4">
                    <label for="inputlname" class="control-label col-form-label">Project profile value<span class="text-danger">*</span></label>
                    <?php echo $this->Form->control('project_profile_value_id', ['label' => false, 'class' => 'form-control select', 'empty' => 'Select Project profile value', 'options' => $project_profile_value, 'required']); ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-3">
                <div class="mb-4">
                    <label for="inputlname" class="control-label col-form-label">Project Name<span class="text-danger">*</span></label>
                    <?php echo $this->Form->control('project_name', ['label' => false, 'class' => 'form-control name', 'type' => 'text','placeholder'=>'Enter Project name', 'required']); ?>
                </div>
            </div>
			<div class="col-sm-12 col-md-3">
                <div class="mb-4">
                    <label for="inputlname" class="control-label col-form-label">Project cost<span class="text-danger"></span></label>
                    <?php echo $this->Form->control('project_cost', ['label' => false, 'class' => 'form-control num', 'type' => 'text','placeholder'=>'Enter Project cost']); ?>
                </div>
            </div>
        </div>
		<div class="row">
            <div class="col-sm-12 col-md-3">
                <div class="mb-4">
                    <label for="inputlname" class="control-label col-form-label">Project Profile<span class="text-danger">*<br> (PDF upload only)</span></label>
                    <?php echo $this->Form->control('file_upload', ['class' => 'form-control validdocs', 'type' => 'file', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'onchange' => 'validdocs(this)']); ?>
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
            'project_profile_id': {
                required: true
            },
            'project_profile_value_id': {
                required: true
            },
            'project_name': {
                required: true
            },
            'project_cost': {
                required: true
            },
            'file_upload': {
                required: "Upload File"
            }
        },

        messages: {

            'project_profile_id': {
                required: "Select Project profile"
            },
            'project_profile_value_id': {
                required: "Select Project project value"
            },
            'project_name': {
                required: "Enter Project name"
            },
            'project_cost': {
                required: "Enter Project cost"
            },
            'file_upload': {
                required: "Upload File"
            }
        },
        submitHandler: function(form) {
            form.submit();
            $(".btn").prop('disabled', true);
        }
    });
	
	  function validdocs(oInput) {
            var _validFileExtensions = [".pdf"];
            if (oInput.type == "file") {
                var sFileName = oInput.value;
                if (sFileName.length > 0) {
                    var blnValid = false;
                    for (var j = 0; j < _validFileExtensions.length; j++) {
                        var sCurExtension = _validFileExtensions[j];
                        if (sFileName.substr(sFileName.length - sCurExtension.length, sCurExtension.length).toLowerCase() == sCurExtension.toLowerCase()) {
                            blnValid = true;
                            break;
                        }
                    }
                    if (!blnValid) {
                        alert(_validFileExtensions.join(", ") + " File Formats only Allowed");
                        //alert("Sorry, " + sFileName + " is invalid, allowed extensions are: " + _validFileExtensions.join(", "));
                        oInput.value = "";
                        return false;
                    }
                }
                var file_size = oInput.files[0].size;
                if (file_size >= 5242880) {
                    alert("File Maximum size is 5MB");
                    oInput.value = "";
                    return false;
                }

            }
            return true;
        }
</script>