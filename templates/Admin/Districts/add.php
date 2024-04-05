<style>
    .error {
        color: red;
    }
</style>
<div class="card mt-5">
    <div class="card-header" style="background-color: #243e04;">
        <h4 class="mb-0 text-white">Add Districts</h4>
    </div>
    <div class="card-body">
        <h4 class="card-title mb-3 pb-3 "></h4>
        <?php echo $this->Form->create(null, ['id' => 'FormID', 'class' => 'form-horizontal', "autocomplete" => "off", 'enctype' => 'multipart/form-data']); ?>
        <div class="row">         
			<div class="col-sm-12 col-md-5">
                <div class="mb-4">
                    <label for="inputlname" class="control-label col-form-label">State<span class="text-danger">*</span></label>
                    <?php echo $this->Form->control('state_id', ['label' => false, 'class' => 'form-control select', 'empty' => 'Tamil Nadu','disabled'=>'true','options'=>$departments, 'required']); ?>
                    <?php echo $this->Form->control('states_id', ['label' => false, 'class' => 'form-control select', 'empty' => 'Tamil Nadu','type'=>'hidden', 'required']); ?>
                </div>
            </div>                        
        </div>
		 <div class="row">         
			<div class="col-sm-12 col-md-5">
                <div class="mb-4">
                    <label for="inputlname" class="control-label col-form-label">Name<span class="text-danger">*</span></label>
                    <?php echo $this->Form->control('name', ['label' => false, 'class' => 'form-control name', 'type' => 'text','onkeypress'=>"return AvoidSpace(this.value)",'placeholder'=>'Enter Name', 'required']); ?>
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
            },
		  'department_id': {
                required: true
            },
		  'site_url': {
                required: true
            }
        },

        messages: {            
            'name': {
                required: "Enter District Name"
            },
		  'department_id': {
                required: "Select Department"
            },
		  'site_url': {
                required: "Enter Url"
            }
        },
        submitHandler: function(form) {
            form.submit();
            $(".btn").prop('disabled', true);
        }
    });

    function AvoidSpace(val) {
            // if (event.keyCode == 32) {
            //     event.returnValue = false;
            //     return false;
            // }

const input = document.querySelector('.name');
input.addEventListener('keyup', () => {
  input.value = input.value.replace(/  +/g, ' ');
});
        }
</script>