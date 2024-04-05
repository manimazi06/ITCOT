<style>
    .error {
        color: red;
    }
</style>
<div class="card mt-5">
    <div class="card-header" style="background-color: #243e04;">
        <h4 class="mb-0 text-white">Edit Department</h4>
    </div>
    <div class="card-body">
        <h4 class="card-title mb-3 pb-3 "></h4>
        <?php echo $this->Form->create($department, ['id' => 'FormID', 'class' => 'form-horizontal', "autocomplete" => "off", 'enctype' => 'multipart/form-data']); ?>
        <div class="row">
            <div class="col-sm-12 col-md-3">
                <div class="mb-4">
                    <label for="inputlname" class="control-label col-form-label">Scheme Type<span class="text-danger">*</span></label>
                    <?php echo $this->Form->control('scheme_type_id', ['label' => false, 'class' => 'form-control select', 'empty' => 'Select Scheme Type', 'options' => $schemes, 'required']); ?>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12 col-md-3">
                <div class="mb-4">
                    <label for="inputlname" class="control-label col-form-label">Name<span class="text-danger">*</span></label>
                    <?php echo $this->Form->control('name', ['label' => false, 'class' => 'form-control name', 'type' => 'text', 'required']); ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-9">
                <div class="mb-4">
                    <label for="inputlname" class="control-label col-form-label">Description<span class="text-danger"></span></label>
                    <?php echo $this->Form->control('description', ['label' => false, 'class' => 'form-control', 'type' => 'textarea', 'rows' => 3]); ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-3">
                <div class="mb-4">
                    <label for="inputlname" class="control-label col-form-label">File Upload<span class="text-danger">*<br> (PDF upload only)</span></label>
                    <?php echo $this->Form->control('file_upload', ['class' => 'form-control validdocs', 'type' => 'file', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'onchange' => 'validdocs(this)']); ?>
                </div>
            </div>

        </div>

        <div class="col-sm-12 col-md-3">
                <div class="mb-4">
                    <label for="inputlname" class="control-label col-form-label">Image Upload<span class="text-danger">*<br></span></label>
                    <?php echo $this->Form->control('image_upload', ['class' => 'form-control validdocs', 'type' => 'file', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'onchange' => 'validdocs(this)']); ?>
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
            'name': {
                required: true
            },
            'scheme_type_id': {
                required: true
            },
            'file_upload': {
                required: false
            }


        },

        messages: {

            'name': {
                required: "Enter Name"
            },
            'scheme_type_id': {
                required: "Select Scheme Type"
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