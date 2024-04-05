<div class="row">
    <div class="col-sm-12">
        <div class="card-box" style="background-color:#fff !important;">
            <div class="card-head text-center"><br />
                <h3>Datewise Report</h3>

            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card-body">
                            <div class="row">
                                <fieldset style="border:1px solid #00355F;border-radius:10px; margin-top:0%;padding:20px;">
                                    <div class="card-body">
                                        <?php echo $this->Form->create($project, ['id' => 'FormID', 'class' => 'form-horizontal', "autocomplete" => "off", 'enctype' => 'multipart/form-data']); ?>
                                        <div class="col-md-8 row">
                                            <div class="col-md-4">
                                                <?php echo $this->Form->control('service_id', ['label' => false, 'class' => 'form-control select', 'empty' => 'Select Services', 'options' => $servicereport, 'required', 'label' => 'Services']); ?>
                                            </div>
                                            <!-- <div class="col-md-4">
                                                <?php echo $this->Form->control('month_date', ['class' => 'form-control monthpicker', 'templates' => ['inputContainer' => '{{content}}'], 'label' => 'Month', 'error' => false, 'placeholder' => 'Select Month']); ?>
                                            </div> -->
                                            <div class="col-md-4">
                                                <?php echo $this->Form->control('from_date', ['class' => 'form-control datepicker', 'templates' => ['inputContainer' => '{{content}}'], 'label' => 'From date', 'error' => false, 'placeholder' => 'Select From date']); ?>
                                            </div>
                                            <div class="col-md-4">
                                                <?php echo $this->Form->control('to_date', ['class' => 'form-control datepicker', 'templates' => ['inputContainer' => '{{content}}'], 'label' => 'To date', 'error' => false, 'placeholder' => 'Select To date', 'onchange' => "datecheck($f_date_data)"]); ?>
                                            </div>


                                        </div>
                                        <div class="form-group m-t-20 text-center" style="padding-top: 10px;margin-bottom: -10px;">
                                            <button type="details" class="btn btn-primary">
                                                Get Details</button>
                                        </div>
                                        <?php echo $this->Form->End(); ?>
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php if ($service_id == 1) {  ?>

            <div class="card-box">

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card-body" style="background-color:#fff !important;">

                                <h3 class="text-center">Project Report from <b><?php echo  date('d-m-Y', strtotime($f_date)); ?></b> to <b><?php echo  date('d-m-Y', strtotime($t_date)); ?></b> </h3>
                                <div class="table-responsive">
                                    <!-- <table class="table table-hover table-bordered table-advanced display" style="width: 100%" id="example"> -->
                                    <table class="table table-hover table-bordered table-advanced display" style="width: 100%" id="example">
                                        <thead class="table-dark">

                                            <tr class="text-center">
                                                <th> Sno </th>
                                                <th>Date</th>
                                                <th>Total</th>
                                                <th> Payment paid </th>
                                                <th> Payment not paid </th>



                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $key = 1;
                                            //$key = 1;
                                            foreach ($projects as $key => $project) : ?>

                                                <tr class="odd gradeX">
                                                    <td class="text-center"><?php echo $key + 1; ?></td>

                                                    <td class="text-center">
                                                        <?php echo date('d-m-Y', strtotime($project['date_data'])) ? date('d-m-Y', strtotime($project['date_data'])) : '0'; ?>

                                                    </td>



                                                    <td class="text-center">
                                                        <?php
                                                        if ($project['pid'] > 0) { ?>
                                                            <a href="javascript:void(0);" style="text-decoration:underline;color:blue;padding:0px;" onclick="projectreport(1,'<?php echo  date('d-m-Y', strtotime($project['date_data'])) ?>')"><?php echo $project['pid']; ?></a>
                                                        <?php } else {
                                                            echo "0";
                                                        } ?>
                                                    </td>



                                                    <td class="text-center">
                                                        <?php
                                                        if ($project['payment_paid'] > 0) { ?>
                                                            <a href="javascript:void(0);" style="text-decoration:underline;color:blue;padding:0px;" onclick="projectreport(2,'<?php echo  date('d-m-Y', strtotime($project['date_data'])) ?>')"><?php echo $project['payment_paid']; ?></a>
                                                        <?php } else {
                                                            echo "0";
                                                        } ?>
                                                    </td>


                                                    <td class="text-center"><?php
                                                                            if ($project['payment_notpaid'] > 0) { ?>
                                                            <a href="javascript:void(0);" style="text-decoration:underline;color:blue;padding:0px;" onclick="projectreport(3,'<?php echo  date('d-m-Y', strtotime($project['date_data'])) ?>')"><?php echo $project['payment_notpaid']; ?></a>
                                                        <?php } else {
                                                                                echo "0";
                                                                            } ?>
                                                    </td>


                                                </tr>
                                            <?php
                                                $key++;
                                                $total            += $project['pid'];
                                                $total_paid       += $project['payment_paid'];
                                                $total_payment_notpaid  += $project['payment_notpaid'];
                                            //$total_progress  += $project['pending'];
                                            endforeach;
                                            // exit(); 
                                            ?>

                                        </tbody>
                                        <tfoot>
                                            <tr class="odd gradeX">
                                                <td colspan="2" style="text-align:right;"><b><?php echo "Total"; ?></b>&nbsp;</td>
                                                <td class="text-center" style="font-weight:bold; color:black;"><?php echo $total; ?></td>
                                                <td class="text-center" style="font-weight:bold; color:black;"><?php echo $total_paid; ?></td>
                                                <td class="text-center" style="font-weight:bold; color:black;"><?php echo $total_payment_notpaid; ?></td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>

        <?php } elseif ($service_id == 2) { ?>

            <div class="card-box">
                <?php if (count($digilibrary_registrations) > 0) { ?>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card-body" style="background-color:#fff !important;">

                                    <h3 class="text-center">Digital Library Subscription from <b><?php echo  date('d-m-Y', strtotime($f_date)); ?></b> to <b><?php echo  date('d-m-Y', strtotime($t_date)); ?></b></h3>
                                    <div class="table-responsive">
                                        <table class="table table-hover table-bordered table-advanced display" style="width: 100%" id="example">
                                            <!-- <table class="table table-hover table-bordered table-advanced display" style="width: 100%" id="example"> -->
                                            <thead class="table-dark">

                                                <tr class="text-center">
                                                    <th> Sno </th>
                                                    <th> Date </th>
                                                    <th> Total </th>
                                                    <th> Payment Paid </th>
                                                    <th> Payment not paid </th>



                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $sno = 1;
                                                foreach ($digilibrary_registrations as $digilibrary_registration) : ?>
                                                    <tr class="odd gradeX">
                                                        <td class="text-center"><?php echo $sno; ?></td>


                                                        <td class="text-center">
                                                            <?php echo date('d-m-Y', strtotime($digilibrary_registration['date_data'])) ? date('d-m-Y', strtotime($digilibrary_registration['date_data'])) : '0'; ?>

                                                        </td>
                                                        <td class="text-center">
                                                            <?php
                                                            if ($digilibrary_registration['pid'] > 0) { ?>
                                                                <a href="javascript:void(0);" style="text-decoration:underline;color:blue;padding:0px;" onclick="digireport(1,'<?php echo  date('d-m-Y', strtotime($digilibrary_registration['date_data'])) ?>')"><?php echo $digilibrary_registration['pid']; ?></a>
                                                            <?php } else {
                                                                echo 0;
                                                            } ?>
                                                        </td>

                                                        <td class="text-center">
                                                            <?php
                                                            if ($digilibrary_registration['payment_paid'] > 0) { ?>
                                                                <a href="javascript:void(0);" style="text-decoration:underline;color:blue;padding:0px;" onclick="digireport(2,'<?php echo  date('d-m-Y', strtotime($digilibrary_registration['date_data'])) ?>')"><?php echo $digilibrary_registration['payment_paid']; ?></a>
                                                            <?php } else {
                                                                echo "0";
                                                            } ?>
                                                        </td>
                                                        <td class="text-center"><?php
                                                                                if ($digilibrary_registration['payment_notpaid'] > 0) { ?>
                                                                <a href="javascript:void(0);" style="text-decoration:underline;color:blue;padding:0px;" onclick="digireport(3,'<?php echo  date('d-m-Y', strtotime($digilibrary_registration['date_data'])) ?>')"><?php echo $digilibrary_registration['payment_notpaid']; ?></a>
                                                            <?php } else {
                                                                                    echo "0";
                                                                                } ?>
                                                        </td>



                                                    </tr>
                                                <?php $sno++;
                                                    $total += $digilibrary_registration['pid'];
                                                    $total_payment_notpaid += $digilibrary_registration['payment_notpaid'];
                                                    $total_payment_paid  += $digilibrary_registration['payment_paid'];
                                                // $total_rejected  += $project['rejected'];
                                                endforeach; ?>

                                            </tbody>
                                            <tfoot>
                                                <tr class="odd gradeX">
                                                    <td colspan="2" style="text-align:right;"><b><?php echo "Total"; ?></b>&nbsp;</td>
                                                    <td class="text-center" style="font-weight:bold; color:black;"><?php echo $total; ?></td>
                                                    <td class="text-center" style="font-weight:bold; color:black;"><?php echo $total_payment_paid; ?></td>
                                                    <td class="text-center" style="font-weight:bold; color:black;"><?php echo $total_payment_notpaid; ?></td>
                                                    <!-- <td class="text-center" style="font-weight:bold; color:black;"><?php echo $total_rejected; ?></td> -->
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>

                                <?php } else {
                                echo "<center><hr><b>No Data available!</b></center>";
                            }  ?>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>

        <?php } elseif ($service_id == 3) { ?>

            <div class="card-box">
                <?php if (count($virtualcfo_registrations) > 0) { ?>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card-body" style="background-color:#fff !important;">

                                    <h3 class="text-center">Virtual CFO details From <b><?php echo  date('d-m-Y', strtotime($f_date)); ?></b> to <b><?php echo  date('d-m-Y', strtotime($t_date)); ?></b></h3>
                                    <div class="table-responsive">
                                        <!-- <table class="table table-hover table-bordered table-advanced display" style="width: 100%" id="example"> -->
                                        <table class="table table-hover table-bordered table-advanced display" style="width: 100%" id="example">
                                            <thead class="table-dark">

                                                <tr class="text-center">
                                                    <th> Sno </th>
                                                    <th> Date </th>
                                                    <th>Total</th>
                                                    <th> Approved </th>

                                                    <th> Pending </th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $sno = 1;
                                                foreach ($virtualcfo_registrations as $virtualcfo_registration) :
                                                    // echo '<pre>';
                                                    // print_r($virtualcfo_registration);

                                                ?>
                                                    <tr class="odd gradeX">
                                                        <td class="text-center"><?php echo $sno; ?></td>

                                                        <td class="text-center">
                                                            <?php echo date('d-m-Y', strtotime($virtualcfo_registration['date_data'])) ? date('d-m-Y', strtotime($virtualcfo_registration['date_data'])) : '0'; ?>

                                                        </td>

                                                        <td class="text-center">
                                                            <?php
                                                            if ($virtualcfo_registration['pid'] > 0) { ?>
                                                                <a href="javascript:void(0);" style="text-decoration:underline;color:blue;padding:0px;" onclick="virtualcforeport(1,'<?php echo  date('d-m-Y', strtotime($virtualcfo_registration['date_data'])) ?>')"><?php echo $virtualcfo_registration['pid']; ?></a>
                                                            <?php } else {
                                                                echo 0;
                                                            } ?>
                                                        </td>




                                                        <td class="text-center">
                                                            <?php
                                                            if ($virtualcfo_registration['approved'] > 0) { ?>
                                                                <a href="javascript:void(0);" style="text-decoration:underline;color:blue;padding:0px;" onclick="virtualcforeport(2,'<?php echo  date('d-m-Y', strtotime($virtualcfo_registration['date_data'])) ?>')"><?php echo $virtualcfo_registration['approved']; ?></a>
                                                            <?php } else {
                                                                echo 0;
                                                            } ?>
                                                        </td>

                                                        <td class="text-center"><?php
                                                                                if ($virtualcfo_registration['pending'] > 0) { ?>
                                                                <a href="javascript:void(0);" style="text-decoration:underline;color:blue;padding:0px;" onclick="virtualcforeport(3,'<?php echo  date('d-m-Y', strtotime($virtualcfo_registration['date_data'])) ?>')"><?php echo $virtualcfo_registration['pending']; ?></a>
                                                            <?php } else {
                                                                                    echo 0;
                                                                                } ?>
                                                        </td>
                                                    </tr>
                                                <?php $sno++;
                                                    $total           += $virtualcfo_registration['pid'];
                                                    $total_approved  += $virtualcfo_registration['approved'];

                                                    $total_progress  += $virtualcfo_registration['pending'];
                                                endforeach;
                                                //  exit(); 
                                                ?>

                                            </tbody>
                                            <tfoot>
                                                <tr class="odd gradeX">
                                                    <td colspan="2" style="text-align:right;"><b><?php echo "Total"; ?></b>&nbsp;</td>
                                                    <td class="text-center" style="font-weight:bold; color:black;"><?php echo $total; ?></td>
                                                    <td class="text-center" style="font-weight:bold; color:black;"><?php echo $total_approved; ?></td>
                                                    <td class="text-center" style="font-weight:bold; color:black;"><?php echo $total_progress; ?></td>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>

                                <?php } else {
                                echo "<center><hr><b>No Data available!</b></center>";
                            }  ?>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        <?php } elseif ($service_id == 4) { ?>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card-body" style="background-color:#fff !important;">

                            <h3 class="text-center">EPR Certification details From <b><?php echo  date('d-m-Y', strtotime($f_date)); ?></b> to <b><?php echo  date('d-m-Y', strtotime($t_date)); ?></b></h3>
                            <div class="table-responsive">
                                <table class="table table-hover table-bordered table-advanced display" style="width: 100%" id="example">
                                    <thead class="table-dark">

                                        <tr class="text-center">
                                            <th> Sno </th>
                                            <th> Date </th>
                                            <th>Total</th>
                                            <th> Approved </th>

                                            <th> Pending </th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $sno = 1;
                                        foreach ($eprcertifications as $eprcertification) : ?>
                                            <tr class="odd gradeX">
                                                <td class="text-center"><?php echo $sno; ?></td>

                                                <td class="text-center">
                                                    <?php echo date('d-m-Y', strtotime($eprcertification['date_data'])) ? date('d-m-Y', strtotime($eprcertification['date_data'])) : '0'; ?>

                                                </td>
                                                <td class="text-center">
                                                    <?php
                                                    if ($eprcertification['pid'] > 0) { ?>
                                                        <a href="javascript:void(0);" style="text-decoration:underline;color:blue;padding:0px;" onclick="eprcertificationreport(1,'<?php echo  date('d-m-Y', strtotime($eprcertification['date_data'])) ?>')"><?php echo $eprcertification['pid']; ?></a>
                                                    <?php } else {
                                                        echo "0";
                                                    } ?>
                                                </td>




                                                <td class="text-center">
                                                    <?php
                                                    if ($eprcertification['approved'] > 0) { ?>
                                                        <a href="javascript:void(0);" style="text-decoration:underline;color:blue;padding:0px;" onclick="eprcertificationreport(2,'<?php echo  date('d-m-Y', strtotime($eprcertification['date_data'])) ?>')"><?php echo $eprcertification['approved']; ?></a>
                                                    <?php } else {
                                                        echo "0";
                                                    } ?>
                                                </td>


                                                <td class="text-center"><?php
                                                                        if ($eprcertification['pending'] > 0) { ?>
                                                        <a href="javascript:void(0);" style="text-decoration:underline;color:blue;padding:0px;" onclick="eprcertificationreport(3,'<?php echo  date('d-m-Y', strtotime($eprcertification['date_data'])) ?>')"><?php echo $eprcertification['pending']; ?></a>
                                                    <?php } else {
                                                                            echo "0";
                                                                        } ?>
                                                </td>
                                            </tr>
                                        <?php $sno++;
                                            $total           += $eprcertification['pid'];
                                            $total_approved  += $eprcertification['approved'];
                                            // $total_rejected  += $eprcertification['rejected'];
                                            $total_progress  += $eprcertification['pending'];
                                        endforeach; ?>

                                    </tbody>
                                    <tfoot>
                                        <tr class="odd gradeX">
                                            <td colspan="2" style="text-align:right;"><b><?php echo "Total"; ?></b>&nbsp;</td>
                                            <td class="text-center" style="font-weight:bold; color:black;"><?php echo $total; ?></td>
                                            <td class="text-center" style="font-weight:bold; color:black;"><?php echo $total_approved; ?></td>
                                            <!-- <td class="text-center" style="font-weight:bold; color:black;"><?php echo $total_rejected; ?></td> -->
                                            <td class="text-center" style="font-weight:bold; color:black;"><?php echo $total_progress; ?></td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        <?php } elseif ($service_id == 5) { ?>

            <div class="card-box">

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card-body" style="background-color:#fff !important;">

                                <h3 class="text-center">Compliance Services details for the Month of <b><?php echo  date('F-Y', strtotime($month)); ?></b></h3>
                                <div class="table-responsive">
                                    <table class="table table-hover table-bordered table-advanced display" style="width: 100%" id="example">
                                        <thead class="table-dark">

                                            <th> Sno </th>
                                            <th> Date </th>
                                            <th>Total</th>
                                            <th> Approved </th>

                                            <th> Pending </th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $sno = 1;
                                            foreach ($compliance_services as $compliance_service) : ?>
                                                <tr class="odd gradeX">
                                                    <td class="text-center"><?php echo $sno; ?></td>

                                                    <td class="text-center">
                                                        <?php echo date('d-m-Y', strtotime($compliance_service['date_data'])) ? date('d-m-Y', strtotime($compliance_service['date_data'])) : '0'; ?>

                                                    </td>

                                                    <td class="text-center">
                                                        <?php
                                                        if ($compliance_service['pid'] > 0) { ?>
                                                            <a href="javascript:void(0);" style="text-decoration:underline;color:blue;padding:0px;" onclick="complianceservicereport(1,'<?php echo  date('d-m-Y', strtotime($compliance_service['date_data'])) ?>')"><?php echo $compliance_service['pid']; ?></a>
                                                        <?php } else {
                                                            echo "0";
                                                        } ?>
                                                    </td>




                                                    <td class="text-center">
                                                        <?php
                                                        if ($compliance_service['approved'] > 0) { ?>
                                                            <a href="javascript:void(0);" style="text-decoration:underline;color:blue;padding:0px;" onclick="complianceservicereport(2,'<?php echo  date('d-m-Y', strtotime($compliance_service['date_data'])) ?>')"><?php echo $compliance_service['approved']; ?></a>
                                                        <?php } else {
                                                            echo "0";
                                                        } ?>

                                                    </td>

                                                    <td class="text-center"><?php
                                                                            if ($compliance_service['pending'] > 0) { ?>
                                                            <a href="javascript:void(0);" style="text-decoration:underline;color:blue;padding:0px;" onclick="complianceservicereport(3,'<?php echo  date('d-m-Y', strtotime($compliance_service['date_data'])) ?>')"><?php echo $compliance_service['pending']; ?></a>
                                                        <?php } else {
                                                                                echo "0";
                                                                            } ?>
                                                    </td>
                                                </tr>
                                            <?php $sno++;
                                                $total           += $compliance_service['pid'];
                                                $total_approved  += $compliance_service['approved'];
                                                //$total_rejected  += $compliance_service['rejected'];
                                                $total_progress  += $compliance_service['pending'];
                                            endforeach; ?>

                                        </tbody>
                                        <tfoot>
                                            <tr class="odd gradeX">
                                                <td colspan="2" style="text-align:right;"><b><?php echo "Total"; ?></b>&nbsp;</td>
                                                <td class="text-center" style="font-weight:bold; color:black;"><?php echo $total; ?></td>
                                                <td class="text-center" style="font-weight:bold; color:black;"><?php echo $total_approved; ?></td>
                                                <!-- <td class="text-center" style="font-weight:bold; color:black;"><?php echo $total_rejected; ?></td> -->
                                                <td class="text-center" style="font-weight:bold; color:black;"><?php echo $total_progress; ?></td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        <?php } ?>
    </div>
</div>
<!-- REPORT -->
<div id="modal-add-unsent" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade col-lg-12">
    <div class="modal-dialog" style="max-width:90%;">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="form add-unsent-form">

                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(".btn-sweetalert").attr("onclick", "").unbind("click"); //remove function onclick button
</script>

<script>
    $("#example").DataTable({
        "language": {
            "lengthMenu": "Show _MENU_",
        },
        "dom": "<'row'" +
            "<'col-sm-6 d-flex align-items-center justify-conten-start'l>" +
            "<'col-sm-6 d-flex align-items-center justify-content-end'f>" +
            ">" +

            "<'table-responsive'tr>" +

            "<'row'" +
            "<'col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start'i>" +
            "<'col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end'p>" +
            ">"
    });

    $("#FormID").validate({
        rules: {
            'month_date': {
                required: true
            },
            'service_id': {
                required: true
            },
            'from_date': {
                required: true
            },
            'to_date': {
                required: true
            }
        },

        messages: {
            'month_date': {
                required: "Select Month"
            },
            'service_id': {
                required: "Select Services"
            },
            'from_date': {
                required: "Select From date"
            },
            'to_date': {
                required: "Select To date"
            }
        },
        submitHandler: function(form) {
            form.submit();
            $(".btn").prop('disabled', true);
        }
    });


    $(document).ready(function() {

        $(function() {
            $("#export_excel_button").click(function() {
                $("#export_excel_button").removeClass("model-head");
                var filename = $(this).attr("title");
                var uri = $("#report").btechco_excelexport({
                    containerid: "report",
                    datatype: $datatype.Table,
                    returnUri: true
                });

                $(this).attr('download',
                        "Sanctioned_report.xls"
                    ) // set file name (you want to put formatted date here)
                    .attr('href', uri) // data to download
                    .attr('target', '_blank') // open in new window (optional)
            });



        });
    });

    function print_receipt() {
        var content = $("#div_vc").html();
        var pwin = window.open("MSL", 'print_content',
            'width=900,height=1000,scrollbars=yes,location=0,menubar=no,toolbar=no');
        pwin.document.open();
        pwin.document.write('<html><head></head><body onload="window.print()"><tr><td>' + content +
            '</td></tr></body></html>');
        pwin.document.close();
    }

    // $(".comp").attr("data-placeholder", "Select Company");
    // $(".client").attr("data-placeholder", "Select Client");

    // function getempdesgn(val, divid) {
    // var val;
    // var divid;
    // var month_date = <?php echo ($month_date) ? "'" . $month_date . "'" : '0'; ?>;
    // var office_wise = <?php echo ($office_wise) ? "'" . $office_wise . "'" : '0'; ?>;

    // //alert(office_wise);
    // // alert(divid);

    // // alert(month_date);


    // $(".add-unsent-form").html("<span class='text-center'>Fetching data!!!</span>");
    // $("#modal-add-unsent").modal('show');
    // $.ajax({
    // async: true,
    // dataType: "html",
    // type: "post",
    // url: '<?php echo $this->Url->webroot ?>/tnphc/OpeningBalanceLogs/ajaxdivisionwise/' + val + '/' + month_date + '/' + divid + '/' + office_wise,
    // success: function(data, textStatus) {

    // //alert(data);
    // $(".add-unsent-form").html(data);

    // }
    // });
    // }

    $(document).ready(function() {
        $('.monthpicker').flatpickr({
            maxDate: "today",
            allowInput: false,
            plugins: [
                new monthSelectPlugin({
                    shorthand: true,
                    dateFormat: "Y-m",
                    altFormat: "F Y"
                })
            ]
        });
    });



    // PROJECT REPORT AJAX

    function projectreport(val, date) {
        var val;
        var date;
        //  alert(date);
        //alert(monthdata);
        // var f_date = <?php echo ($project) ? "'" . $project . "'" : '0'; ?>;
        // var t_date = <?php echo ($t_date) ? "'" . $t_date . "'" : '0'; ?>;


        //alert(f_date);
        $(".add-unsent-form").html("<span class='text-center'>Fetching data!!!</span>");
        $("#modal-add-unsent").modal('show');
        $.ajax({
            async: true,
            dataType: "html",
            type: "get",
            url: '<?php echo $this->Url->webroot ?>ajaxdateprojectreport/' + val + '/' + date,
            beforeSend: function(xhr) {
                xhr.setRequestHeader('X-CSRF-Token', $('[name="_csrfToken"]').val());
            },
            success: function(data, textStatus) {
                //alert(data);
                $(".add-unsent-form").html(data);
            }
        });
    }


    //DIGITAL LIBRARY AJAX

    function digireport(val, date) {
        var val;
        var date;
        // alert(val);
        // alert(month);
        var month_date = <?php echo ($month_date) ? "'" . $month_date . "'" : '0'; ?>;
        //alert(month_date);
        $(".add-unsent-form").html("<span class='text-center'>Fetching data!!!</span>");
        $("#modal-add-unsent").modal('show');
        $.ajax({
            async: true,
            dataType: "html",
            type: "get",
            url: '<?php echo $this->Url->webroot ?>ajaxdatedigireport/' + val + '/' + date,
            beforeSend: function(xhr) {
                xhr.setRequestHeader('X-CSRF-Token', $('[name="_csrfToken"]').val());
            },
            success: function(data, textStatus) {
                //alert(data);
                $(".add-unsent-form").html(data);
            }
        });
    }

    //VIRTUAL CFO AJAX

    function virtualcforeport(val, date) {
        var val;
        var date;
        // alert(val);

        var month_date = <?php echo ($month_date) ? "'" . $month_date . "'" : '0'; ?>;
        //  alert(month_date);
        $(".add-unsent-form").html("<span class='text-center'>Fetching data!!!</span>");
        $("#modal-add-unsent").modal('show');
        $.ajax({
            async: true,
            dataType: "html",
            type: "get",
            url: '<?php echo $this->Url->webroot ?>ajaxdatevirtualcforeport/' + val + '/' + date,
            beforeSend: function(xhr) {
                xhr.setRequestHeader('X-CSRF-Token', $('[name="_csrfToken"]').val());
            },
            success: function(data, textStatus) {
                //alert(data);
                $(".add-unsent-form").html(data);
            }
        });


    }

    //EPR CERTIFICATION AJAX

    function eprcertificationreport(val, date) {
        var val;
        var date;
        // alert(val);

        //var month_date = <?php echo ($month_date) ? "'" . $month_date . "'" : '0'; ?>;
        //  alert(month_date);
        $(".add-unsent-form").html("<span class='text-center'>Fetching data!!!</span>");
        $("#modal-add-unsent").modal('show');
        $.ajax({
            async: true,
            dataType: "html",
            type: "get",
            url: '<?php echo $this->Url->webroot ?>ajaxdateeprcertificationreport/' + val + '/' + date,
            beforeSend: function(xhr) {
                xhr.setRequestHeader('X-CSRF-Token', $('[name="_csrfToken"]').val());
            },
            success: function(data, textStatus) {
                //alert(data);
                $(".add-unsent-form").html(data);
            }
        });
    }

    //COMPLIANCE SERVICES AJAX

    function complianceservicereport(val, date) {
        var val;
        var date;
        // alert(val);

        //var month_date = <?php echo ($month_date) ? "'" . $month_date . "'" : '0'; ?>;
        //  alert(month_date);
        $(".add-unsent-form").html("<span class='text-center'>Fetching data!!!</span>");
        $("#modal-add-unsent").modal('show');
        $.ajax({
            async: true,
            dataType: "html",
            type: "get",
            url: '<?php echo $this->Url->webroot ?>ajaxdatecomplianceservicereport/' + val + '/' + date,
            beforeSend: function(xhr) {
                xhr.setRequestHeader('X-CSRF-Token', $('[name="_csrfToken"]').val());
            },
            success: function(data, textStatus) {
                //alert(data);
                $(".add-unsent-form").html(data);
            }
        });
    }


    function datecheck() {
        //alert('hi');

        var from_date = $("#from-date").val();
        var to_date = $("#to-date").val();

        //alert(from_date);



        //    var get_fromdate= <?php ?>;
        //    var get_todate= getMonth(to_date);

        // alert(get_fromdate);


        if (from_date > to_date) {
            alert('From date is greater than To date');

            $("#from-date").val('');
            $("#to-date").val('');

        }
    }
</script>