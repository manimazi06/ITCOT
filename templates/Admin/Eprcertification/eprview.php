<style>
    .error {
        color: red;
    }

    .card {
        margin-bottom: 0px !important;
    }
</style>

<?php
$fmt = new NumberFormatter('en-IN', NumberFormatter::CURRENCY);
$fmt->setAttribute(NumberFormatter::FRACTION_DIGITS, 2);
$fmt->setSymbol(NumberFormatter::CURRENCY_SYMBOL, '');

?>
<div class="card mt-1">
    <div class="card-header" style="background-color: #243e04;">
        <h4 class="mb-0 text-white">EPR Certification</h4>
    </div>
    <div class="card-body">
        <h4 class="card-title mb-3 pb-3 "></h4>
        <?php echo $this->Form->create(null, ['id' => 'FormID', 'class' => 'form-horizontal', "autocomplete" => "off", 'enctype' => 'multipart/form-data']); ?>

        <div class="row">
            <div class="col-sm-12 col-md-3">
                <div class="mb-4">
                    <label for="inputlname" class="control-label col-form-label">Name<span class="text-danger">*</span></label>
                    <div class="form-control">
                        <?php echo $basic->name; ?>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-3">
                <div class="mb-4">
                    <label for="inputlname" class="control-label col-form-label">Mobile<span class="text-danger">*</span></label>
                    <div class="form-control">
                        <?php echo $basic->mobile_no; ?>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-3">
                <div class="mb-4">
                    <label for="inputlname" class="control-label col-form-label">Email<span class="text-danger">*</span></label>
                    <div class="form-control">
                        <?php echo $basic->email; ?>
                    </div>
                </div>
            </div>


        </div>

        <!-- 2 -->
        <div class="row">


            <div class="col-sm-12 col-md-3">
                <div class="mb-4">
                    <label for="inputlname" class="control-label col-form-label">State<span class="text-danger">*</span></label>
                    <div class="form-control">
                        <?php echo $basic->state->state_name; ?>
                    </div>
                </div>
            </div>
            <!-- <div class="col-sm-12 col-md-3">
                <div class="mb-4">
                    <label for="inputlname" class="control-label col-form-label">Services<span class="text-danger">*</span></label>
                    <div class="form-control">
                        <?php echo $basic->service->name; ?>
                    </div>
                </div>
            </div> -->

            <div class="col-sm-12 col-md-3">
                <div class="mb-4">
                    <label for="inputlname" class="control-label col-form-label">Roles<span class="text-danger">*</span></label>
                    <div class="form-control">
                        <?php echo $basic->epr_role->name; ?>
                    </div>
                </div>
            </div>

            <div class="col-sm-12 col-md-3">
                <div class="mb-4">
                    <label for="inputlname" class="control-label col-form-label">Message<span class="text-danger">*</span></label>
                    <div class="form-control">
                        <?php echo $basic->description; ?>
                    </div>
                </div>
            </div>

        </div>

        <!-- 3 -->

        <div class="row">


<div class="col-sm-12 col-md-3">
    <div class="mb-4">
        <label for="inputlname" class="control-label col-form-label">Type of waste<span class="text-danger">*</span></label>
        <div class="form-control">
            <?php echo $basic->waste_type->name; ?>
        </div>
    </div>
</div>


<div class="col-sm-12 col-md-3">
    <div class="mb-4">
        <label for="inputlname" class="control-label col-form-label">Categories<span class="text-danger">*</span></label>
        <div class="form-control">
            <?php echo $basic->waste_category->name; ?>
        </div>
    </div>
</div>

<div class="col-sm-12 col-md-3">
    <div class="mb-4">
        <label for="inputlname" class="control-label col-form-label">Product Code<span class="text-danger">*</span></label>
        <div class="form-control">
            <?php echo $basic->waste_product_detail->product_code; ?>
        </div>
    </div>
</div>

</div>

<div class="col-sm-12 col-md-3">
    <div class="mb-4">
        <label for="inputlname" class="control-label col-form-label">Product Name<span class="text-danger">*</span></label>
        <div class="form-control">
        <?php echo $basic->waste_product_detail->product_name; ?>
        </div>
    </div>
</div>

    </div>


    <div class="action-form">
        <div class="mb-3 mt-3 text-center">
            <?php echo $this->Html->link(('<i class="fas fa-arrow-left"></i>&nbsp; Back'), ['action' => 'eprcertification'], ['escape' => false, 'class' => 'btn btn-info rounded-pill px-4 waves-effect waves-light',]); ?>


            <!-- <span>
                <?php echo $this->Html->link(('Next&nbsp;<i class="fas fa-arrow-right"></i>'), ['action' => 'entitydetailsview', $basic->id], ['escape' => false, 'class' => 'btn btn-warning btn-rounded',]); ?>
            </span> -->
        </div>
    </div>
</div>
<?php echo $this->Form->End(); ?>