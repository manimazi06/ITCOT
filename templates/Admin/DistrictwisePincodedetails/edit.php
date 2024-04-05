<style>
    .error {
        color: red;
    }
</style>
<div class="card mt-5">
    <div class="card-header" style="background-color: #243e04;">
        <h4 class="mb-0 text-white">Edit Districtwise Pincodedetails</h4>
    </div>
    <div class="card-body">
        <h4 class="card-title mb-3 pb-3 "></h4>
        <?php echo $this->Form->create($districtwisePincodedetails, ['id' => 'FormID', 'class' => 'form-horizontal', "autocomplete" => "off", 'enctype' => 'multipart/form-data']); ?>
        <div class="row">
            <div class="col-sm-12 col-md-3">
                <div class="mb-4">
                    <label for="inputlname" class="control-label col-form-label">District<span class="text-danger">*</span></label>
                    <?php echo $this->Form->control('district_id', ['label' => false, 'class' => 'form-control select', 'empty' => 'Select District', 'options' => $districts, 'required']); ?>
                </div>
            </div>
        </div>


        <!-- <div class="row">
            <div class="col-sm-12 col-md-3">
                <div class="mb-4">
                    <label for="inputlname" class="control-label col-form-label">Location<span class="text-danger">*</span></label>
                    <?php echo $this->Form->control('location', ['label' => false, 'class' => 'form-control name', 'type' => 'text', 'onkeypress' => "return AvoidSpace(this.value)", 'required']); ?>
                </div>
            </div>
        </div> -->
        <div class="row">
            <div class="col-sm-12 col-md-3">
                <div class="mb-4">
                    <label for="inputlname" class="control-label col-form-label">Pincode<span class="text-danger">*</span></label>
                    <?php echo $this->Form->control('pincode', ['label' => false, 'class' => 'form-control num', 'type' => 'text', 'onkeypress' => "return AvoidSpace(this.value)", 'required']); ?>
                </div>
            </div>
        </div>
    </div>
    <div class="action-form">
        <div class="mb-3 mt-3 text-center">
            <button type="submit" class="btn btn-info rounded-pill px-4 waves-effect waves-light">Update</button>
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
            'location': {
                required: true
            },
            'district_id': {
                required: true
            },
            'pincode': {
                required: true
            }

        },

        messages: {

            'location': {
                required: "Enter Location"
            },
            'district_id': {
                required: "Select District"
            },
            'pincode': {
                required: "Enter Pincode"
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