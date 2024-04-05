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
        <h4 class="mb-0 text-white">Virtual CFO</h4>
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
        <div class="row">


        <div class="col-sm-12 col-md-3">
                <div class="mb-4">
                    <label for="inputlname" class="control-label col-form-label">State<span class="text-danger">*</span></label>
                    <div class="form-control">
                        <?php echo $basic->virtualcfo_state->name; ?>
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
                    <label for="inputlname" class="control-label col-form-label">Message<span class="text-danger">*</span></label>
                    <div class="form-control">
                        <?php echo $basic->description; ?>
                    </div>
                </div>
            </div>
        
        </div>

        <?php if ($virtualServices_count>0){?>
        <div class="col-lg-5 col-md-5 col-sm-12">
            <div class="list1-head">
                <label for="inputlname" class="control-label col-form-label"> Virtual CFO Service 
                </label>

                <div class="table-responsive text-center">
                    <table class="table table-bordered">
                        <thead class="">
                            <tr class="text-center">
                                <th> S.No </th>
                                <th> Name</th>
                            

                                <!-- <th> <button type="button" class="btn btn-success btn-sm" onclick="complainceadding();">Add</button>
																 <i class="fa fa-plus-cir"></i>&nbsp;
																</th> -->
                            </tr>
                        </thead>
                        <tbody class="comadding">
                            <?php foreach ($virtualServices as $key1 => $value1) { ?>
                                <tr class="complaince_row_in_post">

                                    <td align="center"><?php echo ($key1 + 1) ?></td>
                                    <td>
                                        <?php echo $value1['service']['name']; ?>

                                    </td>
                       


                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
        <?php }else{
            echo '';
        }?>

      
    <div class="action-form">
        <div class="mb-3 mt-3 text-center">
            <?php echo $this->Html->link(('<i class="fas fa-arrow-left"></i>&nbsp; Back'), ['action' => 'virtualcfo'], ['escape' => false, 'class' => 'btn btn-info rounded-pill px-4 waves-effect waves-light',]); ?>


            <!-- <span>
                <?php echo $this->Html->link(('Next&nbsp;<i class="fas fa-arrow-right"></i>'), ['action' => 'entitydetailsview', $basic->id], ['escape' => false, 'class' => 'btn btn-warning btn-rounded',]); ?>
            </span> -->
        </div>
    </div>
</div>
<?php echo $this->Form->End(); ?>