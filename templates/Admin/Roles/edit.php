<style>
    .error {
        color: red;
    }
</style>
<div class="card mt-5">
    <div class="card-header" style="background-color: #243e04;">
        <h4 class="mb-0 text-white">Edit Waste Categories</h4>
    </div>
    <div class="card-body">
        <h4 class="card-title mb-3 pb-3 "></h4>
        <?php echo $this->Form->create(null, ['id' => 'FormID', 'class' => 'form-horizontal', "autocomplete" => "off", 'enctype' => 'multipart/form-data']); ?>
     
        <div class="row">
            <div class="col-sm-12 col-md-5">
                <div class="mb-4">
                    <label for="inputlname" class="control-label col-form-label"> Type of waste<span class="text-danger">*</span></label>
                    <?php echo $this->Form->control('waste_type_id', ['label' => false, 'class' => 'form-control select', 
                        'empty' => 'Select Type of waste', 'options' => $wasteTypes,'onchange' => 'optioncalling(this.value)']); ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-9">
                <div class="mb-4">
                    <label for="inputlname" class="control-label col-form-label">Category<span class="text-danger">*</span></label>
                    <?php echo $this->Form->control('name', ['label' => false, 'class' => 'form-control name', 'type' => 'text', 'onkeypress' => "return AvoidSpace(this.value)", 'placeholder' => 'Enter Department Scheme', 'required']); ?>
                </div>
            </div>
        </div>
        <!-- <div class="row">
            <div class="col-sm-12 col-md-9">
                <div class="mb-4">
                    <label for="inputlname" class="control-label col-form-label">Description<span class="text-danger"></span></label>
                    <?php echo $this->Form->control('description', ['label' => false, 'class' => 'form-control', 'type' => 'textarea', 'rows' => 5]); ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-9">
                <div class="mb-4">
                    <label for="inputlname" class="control-label col-form-label">Url<span class="text-danger"></span></label>
                    <?php echo $this->Form->control('site_url', ['label' => false, 'class' => 'form-control', 'type' => 'text']); ?>
                </div>
            </div>
        </div> -->
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
            'name': {
                required: true
            },
            'waste_type_id': {
                required: true
            },
            'site_url': {
                required: true
            }
        },

        messages: {
            'name': {
                required: "Enter Category"
            },
            'waste_type_id': {
                required: "Select Type of waste"
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



function optioncalling(val) 

{
  //alert(val);
  // var email = $('#emailAddress').val();
 var val;

  //alert(mbl);
  $.ajax({

    async: true,
    dataType: "html",

    url: '<?php echo $this->Url->webroot; ?>Eprcertification/ajaxoption/' + val,


    success: function(data, textStatus) {
      //alert(data);

      $("#waste-category-id").html(data);
      //alert(data);
    }


  });
}

</script>