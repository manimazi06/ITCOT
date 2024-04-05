<style>
    .error {
        color: red;
    }
</style>
<div class="card mt-5">
    <div class="card-header" style="background-color: #243e04;">
        <h4 class="mb-0 text-white">Edit Units</h4>
    </div>
    <div class="card-body">
        <h4 class="card-title mb-3 pb-3 "></h4>
        <?php echo $this->Form->create($units, ['id' => 'FormID', 'class' => 'form-horizontal', "autocomplete" => "off", 'enctype' => 'multipart/form-data']); ?>
        <div class="row">         
			
            <div class="col-sm-12 col-md-3">
                <div class="mb-4">
                    <label for="inputlname" class="control-label col-form-label">Name<span class="text-danger">*</span></label>
                    <?php echo $this->Form->control('name', ['label' => false,'type'=>'text', 'class' => 'form-control name',"minlength"=>"3","maxlength"=>"20", 'placeholder'=>'Enter Name', 'required']); ?>
                </div>
            </div>
            <div class="col-sm-12 col-md-3">
                <div class="mb-4">
                    <label for="inputlname" class="control-label col-form-label">Description<span class="text-danger">*</span></label>
                    <?php echo $this->Form->control('description', ['label' => false,'type'=>'textarea','rows'=>3, 'class' => 'form-control', 'placeholder'=>'Enter the Description']); ?>
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
            
            'name': {
                required: true
            }
            // 'description': {
            //     required: true
            // }
        },

        messages: {
            
         
            'name': {
                required: "Enter name"
            }
            // 'description': {
            //     required: "Enter Description"
            // }
        },
        submitHandler: function(form) {
            form.submit();
            $(".btn").prop('disabled', true);
        }
    });

//   $('.datepicker').flatpicker({
//     dateFormat:"d-m-Y",
//     allowInput:false
//   })
</script>