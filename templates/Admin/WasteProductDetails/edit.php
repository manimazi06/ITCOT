<style>
    .error {
        color: red;
    }
</style>
<div class="card mt-5">
    <div class="card-header" style="background-color: #243e04;">
        <h4 class="mb-0 text-white">Edit Product details</h4>
    </div>
    <div class="card-body">
        <h4 class="card-title mb-3 pb-3 "></h4>
        <?php echo $this->Form->create($wasteProductDetails, ['id' => 'FormID', 'class' => 'form-horizontal', "autocomplete" => "off", 'enctype' => 'multipart/form-data']); ?>
     
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
            <div class="col-sm-12 col-md-5">
                <div class="mb-4">
                    <label for="inputlname" class="control-label col-form-label"> Category<span class="text-danger">*</span></label>
                    <?php echo $this->Form->control('waste_category_id', ['label' => false, 'class' => 'form-control select', 
                        'empty' => 'Select Category','options'=>$wasteCategories, 'value' => $wasteProductDetails['waste_category_id']]); ?>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-sm-12 col-md-9">
                <div class="mb-4">
                    <label for="inputlname" class="control-label col-form-label">Product type<span class="text-danger">*</span></label>
                    <?php echo $this->Form->control('product_type', ['label' => false, 'class' => 'form-control name', 'type' => 'text', 'onkeypress' => "return AvoidSpace(this.value)", 'placeholder' => 'Enter Product type']); ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-9">
                <div class="mb-4">
                    <label for="inputlname" class="control-label col-form-label">Product code<span class="text-danger">*</span></label>
                    <?php echo $this->Form->control('product_code', ['label' => false, 'class' => 'form-control', 'type' => 'text', 'placeholder' => 'Enter Product code', 'required']); ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-9">
                <div class="mb-4">
                    <label for="inputlname" class="control-label col-form-label">Product name<span class="text-danger">*</span></label>
                    <?php echo $this->Form->control('product_name', ['label' => false, 'class' => 'form-control name', 'type' => 'text', 'placeholder' => 'Enter Product name', 'required']); ?>
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
            'waste_category_id': {
                required: true
            },
            'waste_type_id': {
                required: true
            },
            'product_code': {
                required: true
            },
            'product_name': {
                required: true
            }
        },

        messages: {
            'waste_category_id': {
                required: "Select Category"
            },
            'waste_type_id': {
                required: "Select Type of waste"
            },
            'product_code': {
                required: "Enter Product code"
            },
            'product_name': {
                required: "Enter Product name"
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

    url: '<?php echo $this->Url->webroot; ?>../../../eprcertification/ajaxoption/' + val,


    success: function(data, textStatus) {
      //alert(data);

      $("#waste-category-id").html(data);
      //alert(data);
    }


  });
}

</script>