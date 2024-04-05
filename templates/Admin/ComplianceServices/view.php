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
        <h4 class="mb-0 text-white">Compliance Services</h4>
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
            <div class="col-sm-12 col-md-3">
                <div class="mb-4">
                    <label for="inputlname" class="control-label col-form-label">Project Name<span class="text-danger">*</span></label>
                    <div class="form-control">
                        <?php echo $basic->project_name; ?>
                    </div>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-sm-12 col-md-3">
                <div class="mb-4">
                    <label for="inputlname" class="control-label col-form-label">Project Location<span class="text-danger">*</span></label>
                    <div class="form-control">
                        <?php echo $basic->project_loc; ?>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-3">
                <div class="mb-4">
                    <label for="inputlname" class="control-label col-form-label">State<span class="text-danger">*</span></label>
                    <div class="form-control">
                        <?php echo $basic->state->state_name; ?>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-3">
                <div class="mb-4">
                    <label for="inputlname" class="control-label col-form-label">District<span class="text-danger">*</span></label>
                    <div class="form-control">
                        <?php echo $basic->district->name; ?>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-3">
                <div class="mb-4">
                    <label for="inputlname" class="control-label col-form-label">Pincode<span class="text-danger">*</span></label>
                    <div class="form-control">
                        <?php echo $basic->pincode; ?>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12 col-md-3">
                <div class="mb-4">
                    <label for="inputlname" class="control-label col-form-label">Land Area<span class="text-danger">*</span></label>

                    <div class="form-control">
                        <?php echo $basic->landarea; ?>


                        <?php echo $basic->land_unit; ?>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-3">
                <div class="mb-4">
                    <label for="inputlname" class="control-label col-form-label">Total Build up area<span class="text-danger">*</span></label>

                    <div class="form-control">
                        <?php echo $basic->total_buildup_area; ?>
                        <?php echo $basic->totalarea_unit; ?>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-3">
                <div class="mb-4">
                    <label for="inputlname" class="control-label col-form-label">No.of Employees<span class="text-danger">*</span></label>
                    <div class="form-control">
                        <?php echo $basic->no_employees; ?>

                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-3">
                <div class="mb-4">
                    <label for="inputlname" class="control-label col-form-label">Power Requirement<span class="text-danger">*</span></label>

                    <div class="form-control">
                        <?php echo $basic->power_req; ?>
                        <?php echo $basic->powerreq_unit; ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">

            <div class="col-sm-12 col-md-3">
                <div class="mb-4">
                    <label for="inputlname" class="control-label col-form-label">Project Cost<span class="text-danger">*</span></label>
                    <div class="form-control">
                        <!-- <?php echo $basic->project_cost; ?> -->
                        <?php echo ($basic['project_cost']) ? ltrim($fmt->formatCurrency((float)$basic['project_cost'], 'INR'), '₹') : '0.00'; ?>

                    </div>
                </div>
            </div>


            <div class="col-sm-12 col-md-3">
            <div class="list1-head">

                <label for="inputlname" class="control-label col-form-label">Message (If any)</label>
                <div class="form-control">
                    <?php echo $basic['description']; ?>
                </div>

            </div>
        </div>


          
        </div>

        <div class="col-lg-8 col-md-8 col-sm-12 offset-lg-2 offset-md-2 mt-5 ">
            <div class="list1-head">
                <label for="inputlname" class="control-label col-form-label"> Product Details
                </label>

                <div class="table-responsive text-center">
                    <table class="table table-bordered">
                        <thead class="">
                            <tr class="text-center">
                                <th> S.No </th>
                                <th> Products</th>
                                <th>Capacity</th>
                                <th>Per</th>
                                <th>Units</th>

                                <!-- <th> <button type="button" class="btn btn-success btn-sm" onclick="complainceadding();">Add</button>
																 <i class="fa fa-plus-cir"></i>&nbsp;
																</th> -->
                            </tr>
                        </thead>
                        <tbody class="comadding">
                            <?php foreach ($complainceServiceProducts as $key1 => $value1) { ?>
                                <tr class="complaince_row_in_post">

                                    <td align="center"><?php echo ($key1 + 1) ?></td>
                                    <td>
                                        <?php echo $value1['product_name']; ?>

                                    </td>
                                    <td>
                                        <?php echo $value1['capacity']; ?> </td>
                                        <td>
                                <?php echo $value1['capacity_pervalue']; ?> </td>
                                    <td>
                                        <?php echo $value1['unit']; ?> </td>


                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>


                                    <?php if($serviceCompliances_count >0) { ?>
        <div class="col-lg-8 col-md-8 col-sm-12 offset-lg-2 offset-md-2 mt-5">
                <div class="mb-4">
                    <label for="inputlname" class="control-label col-form-label"> Services required for obtaining approvals from
                    </label>

                    
                    <div class="table-responsive text-center">
                        <table class="table table-bordered">
                            <?php
                            foreach ($serviceCompliances_data as $key => $value) {
                                // echo '<pre>';
                                // print_r($value);
                                // exit();
                            ?>

                                <tr>

                                    <td>
                                        <?php echo $key + 1 ?>.
                                    </td>
                                    <td style="font-weight:normal !important;"><?php echo $value['service_compliance']['name']; ?></td>


                                </tr>

                            <?php

                            } ?>

                        </table>
                    </div>

                    <?php } ?>
                    <div class="col-md-6 checking">
                        <td>
                            <input type="text" class="form-control" name="others" id="others" style="display:none">
                        </td>
                    </div>
                </div>
            </div>


 

    </div>

    <?php ?>
    <div class="action-form">
        <div class="mb-3 mt-3 text-center">
            <?php echo $this->Html->link(('<i class="fas fa-arrow-left"></i>&nbsp; Back'), ['action' => 'index'], ['escape' => false, 'class' => 'btn btn-info rounded-pill px-4 waves-effect waves-light',]); ?>


            <!-- <span>
                <?php echo $this->Html->link(('Next&nbsp;<i class="fas fa-arrow-right"></i>'), ['action' => 'entitydetailsview', $basic->id], ['escape' => false, 'class' => 'btn btn-warning btn-rounded',]); ?>
            </span> -->
        </div>
    </div>
</div>
<?php echo $this->Form->End(); ?>