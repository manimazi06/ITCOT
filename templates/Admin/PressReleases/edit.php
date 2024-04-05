<style>
    .error {
        color: red;
    }
</style>
<div class="card mt-5">
    <div class="card-header" style="background-color: #243e04;">
        <h4 class="mb-0 text-white">Edit Press Releases</h4>
    </div>
    <div class="card-body">
        <h4 class="card-title mb-3 pb-3 "></h4>
        <?php echo $this->Form->create($pressReleases, ['id' => 'FormID', 'class' => 'form-horizontal', "autocomplete" => "off", 'enctype' => 'multipart/form-data']); ?>
        <div class="row">         
			<div class="col-sm-12 col-md-3">
            <div class="mb-4">
                    <label for="inputlname" class="control-label col-form-label">Release date<span class="text-danger">*</span></label>
                    <?php echo $this->Form->control('release_date', ['class' => 'form-control flatpickr','label' => false,'type'=>'text', 'empty' => 'Select Release date', 'required','value'=>$pressReleases['release_date'] ? date('d-m-Y',strtotime($pressReleases['release_date'])) : '']); ?>
                </div>
            </div>
            <div class="col-sm-12 col-md-3">
                <div class="mb-4">
                    <label for="inputlname" class="control-label col-form-label">Title<span class="text-danger">*</span></label>
                    <?php echo $this->Form->control('title', ['label' => false,'type'=>'text', 'class' => 'form-control name', 'placeholder'=>'Enter the title', 'required']); ?>
                </div>
            </div>
            <div class="col-sm-12 col-md-6">
                <div class="mb-4">
                    <label for="inputlname" class="control-label col-form-label">Description<span class="text-danger">*</span></label>
                    <?php echo $this->Form->control('description', ['label' => false,'type'=>'textarea','rows'=>3, 'class' => 'form-control', 'placeholder'=>'Enter the Description', 'required']); ?>
                </div>
            </div>                          
        </div>
        <div class="row">         
		
            <div class="col-sm-12 col-md-3">
                <div class="mb-4">
                    <label for="inputlname" class="control-label col-form-label">URL<span class="text-danger">*</span></label>
                    <?php echo $this->Form->control('url', ['label' => false,'type'=>'text', 'class' => 'form-control', 'placeholder'=>'Enter the url']); ?>
                </div>
            </div>
            <div class="col-sm-12 col-md-3">
                <div class="mb-4">
                    <label for="inputlname" class="control-label col-form-label">Submit date<span class="text-danger">*</span></label>
                    <?php echo $this->Form->control('submit_date', ['class' => 'form-control flatpickr','label' => false,'type'=>'text', 'empty' => 'Select Submit date', 'required','value'=>$pressReleases['submit_date'] ? date('d-m-Y',strtotime($pressReleases['submit_date'])) : '']); ?>

                </div>
            </div>                          
        </div>
        <!--<div class="row">            
            <div class="col-sm-12 col-md-9">
                <div class="mb-4">
                    <label for="inputlname" class="control-label col-form-label">Description<span class="text-danger"></span></label>
                    <?php echo $this->Form->control('description', ['label' => false, 'class' => 'form-control', 'type' => 'textarea','rows'=>3]); ?>
                </div>
            </div>
          
        </div>-->
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
            'release_date': {
                required: true
            },
            'title': {
                required: true
            },
            'description': {
                required: true
            },
            'submit_date': {
                required: true
            }
        },

        messages: {
            
            'release_date': {
                required: "Select release date"
            },
            'title': {
                required: "Enter Title"
            },
            'description': {
                required: "Enter Description"
            },
            'submit_date': {
                required: "Select Submit date"
            },
        },
        submitHandler: function(form) {
            form.submit();
            $(".btn").prop('disabled', true);
        }
    });

  $('.datepicker').flatpicker({
    dateFormat:"d-m-Y",
    allowInput:false
  })
</script>