<div class="row">
    <div class="col-sm-12">
        <div class="card-box" style="background-color:#fff !important;">
            <div class="card-head text-center"><br />
                <h3>Monthly Report</h3>
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
                                            <div class="col-md-4">
                                                <?php echo $this->Form->control('month_date', ['class' => 'form-control monthpicker', 'templates' => ['inputContainer' => '{{content}}'], 'label' => 'Month', 'error' => false, 'placeholder' => 'Select Month']); ?>
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

                                <h3 class="text-center">Project Report for the Month of <b><?php echo  date('F-Y', strtotime($month)); ?></b></h3>
                                <div class="table-responsive">
                                    <!-- <table class="table table-hover table-bordered table-advanced display" style="width: 100%" id="example4"> -->
                                    <table class="table table-hover table-bordered table-advanced display" style="width: 100%">
                                        <thead class="table-dark">

                                            <tr class="text-center">
                                                <th> Sno </th>
                                                <th>Total</th>
                                                <!-- <th> Approved </th>
                                                    <th> Rejected </th>
                                                    <th> Pending </th> -->
                                                <th> Payment paid </th>
                                                <th> Payment not paid </th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $sno = 1;
                                            foreach ($projects as $project) : ?>
                                                <tr class="odd gradeX">
                                                    <td class="text-center"><?php echo $sno; ?></td>

                                                    <td class="text-center">
                                                        <?php
                                                        if ($project['pid'] > 0) { ?>
                                                            <a href="javascript:void(0);" style="text-decoration:underline;color:blue;padding:0px;" onclick="projectreport(1)"><?php echo $project['pid']; ?></a>
                                                        <?php } else {
                                                            echo "0";
                                                        } ?>
                                                    </td>



                                                    <td class="text-center">
                                                        <?php
                                                        if ($project['payment_paid'] > 0) { ?>
                                                            <a href="javascript:void(0);" style="text-decoration:underline;color:blue;padding:0px;" onclick="projectreport(2)"><?php echo $project['payment_paid']; ?></a>
                                                        <?php } else {
                                                            echo "0";
                                                        } ?>
                                                    </td>
                                                    <td class="text-center"><?php
                                                                            if ($project['payment_notpaid'] > 0) { ?>
                                                            <a href="javascript:void(0);" style="text-decoration:underline;color:blue;padding:0px;" onclick="projectreport(3)"><?php echo $project['payment_notpaid']; ?></a>
                                                        <?php } else {
                                                                                echo "0";
                                                                            } ?>
                                                    </td>
                                                    <!-- 
                                                        <td class="text-center"><?php
                                                                                if ($pending = $project['approved'] + $project['rejected']) { ?>
                                                                <a href="javascript:void(0);" style="text-decoration:underline;color:blue;padding:0px;" onclick="projectreport(4)"><?php echo $pending_total = $project['pid'] - $pending; ?></a>
                                                            <?php } else {
                                                                                    echo "0";
                                                                                } ?>
                                                        </td> -->
                                                    <!-- 
                                                        <td class="text-center"><?php
                                                                                if ($project['pending'] > 0) { ?>
                                                                <a href="javascript:void(0);" style="text-decoration:underline;color:blue;padding:0px;" onclick="projectreport(4)"><?php echo $project['pending']; ?></a>
                                                            <?php } else {
                                                                                    echo "0";
                                                                                } ?>
                                                        </td> -->

                                                </tr>
                                            <?php
                                                $sno++;
                                                $total            += $project['pid'];
                                                $total_paid       += $project['payment_paid'];
                                                $total_payment_notpaid  += $project['payment_notpaid'];
                                            //$total_progress  += $project['pending'];
                                            endforeach; ?>

                                        </tbody>
                                        <tfoot>
                                            <tr class="odd gradeX">
                                                <td colspan="1" style="text-align:right;"><b><?php echo "Total"; ?></b>&nbsp;</td>
                                                <td class="text-center" style="font-weight:bold; color:black;"><?php echo $total; ?></td>
                                                <td class="text-center" style="font-weight:bold; color:black;"><?php echo $total_paid; ?></td>
                                                <td class="text-center" style="font-weight:bold; color:black;"><?php echo $total_payment_notpaid; ?></td>
                                                <!-- <td class="text-center" style="font-weight:bold; color:black;"><?php echo $total_progress; ?></td> -->
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

                                    <h3 class="text-center">Digital Library Subscription for the Month of <b><?php echo  date('F-Y', strtotime($month)); ?></b></h3>
                                    <div class="table-responsive">
                                        <table class="table table-hover table-bordered table-advanced display" style="width: 100%">
                                            <!-- <table class="table table-hover table-bordered table-advanced display" style="width: 100%" id="example4"> -->
                                            <thead class="table-dark">

                                                <tr class="text-center">
                                                    <th> Sno </th>
                                                    <th> Total </th>
                                                    <th> Payment Paid </th>
                                                    <th> Payment not paid </th>

                                                    <!-- <th> Rejected </th> -->

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $sno = 1;
                                                foreach ($digilibrary_registrations as $digilibrary_registration) : ?>
                                                    <tr class="odd gradeX">
                                                        <td class="text-center"><?php echo $sno; ?></td>
                                                        <td class="text-center">
                                                            <?php
                                                            if ($digilibrary_registration['pid'] > 0) { ?>
                                                                <a href="javascript:void(0);" style="text-decoration:underline;color:blue;padding:0px;" onclick="digireport(1)"><?php echo $digilibrary_registration['pid']; ?></a>
                                                            <?php } else {
                                                                echo 0;
                                                            } ?>
                                                        </td>
                                                        <td class="text-center">
                                                            <?php
                                                            if ($digilibrary_registration['payment_paid'] > 0) { ?>
                                                                <a href="javascript:void(0);" style="text-decoration:underline;color:blue;padding:0px;" onclick="digireport(2)"><?php echo $digilibrary_registration['payment_paid']; ?></a>
                                                            <?php } else {
                                                                echo "0";
                                                            } ?>
                                                        </td>
                                                        <td class="text-center"><?php
                                                                                if ($digilibrary_registration['payment_notpaid'] > 0) { ?>
                                                                <a href="javascript:void(0);" style="text-decoration:underline;color:blue;padding:0px;" onclick="digireport(3)"><?php echo $digilibrary_registration['payment_notpaid']; ?></a>
                                                            <?php } else {
                                                                                    echo "0";
                                                                                } ?>
                                                        </td>




                                                        <!-- <td class="text-center"><?php
                                                                                        if ($project['rejected'] > 0) { ?>
                                                                <a href="javascript:void(0);" style="text-decoration:underline;color:blue;padding:0px;" onclick="projectreport(3)"><?php echo $digilibrary_registration['rejected']; ?></a>
                                                            <?php } else {
                                                                                            echo "0";
                                                                                        } ?>
                                                        </td> -->

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
                                                    <td colspan="1" style="text-align:right;"><b><?php echo "Total"; ?></b>&nbsp;</td>
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

                                    <h3 class="text-center">Virtual CFO details for the Month of <b><?php echo  date('F-Y', strtotime($month)); ?></b></h3>
                                    <div class="table-responsive">
                                        <!-- <table class="table table-hover table-bordered table-advanced display" style="width: 100%" id="example4"> -->
                                        <table class="table table-hover table-bordered table-advanced display" style="width: 100%">
                                            <thead class="table-dark">

                                                <tr class="text-center">
                                                    <th> Sno </th>
                                                    <th>Total</th>
                                                    <th> Approved </th>
                                                    <!-- <th> Rejected </th> -->
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
                                                            <?php
                                                            if ($virtualcfo_registration['pid'] > 0) { ?>
                                                                <a href="javascript:void(0);" style="text-decoration:underline;color:blue;padding:0px;" onclick="virtualcforeport(1)"><?php echo $virtualcfo_registration['pid']; ?></a>
                                                            <?php } else {
                                                                echo 0;
                                                            } ?>
                                                        </td>




                                                        <td class="text-center">
                                                            <?php
                                                            if ($virtualcfo_registration['approved'] > 0) { ?>
                                                                <a href="javascript:void(0);" style="text-decoration:underline;color:blue;padding:0px;" onclick="virtualcforeport(2)"><?php echo $virtualcfo_registration['approved']; ?></a>
                                                            <?php } else {
                                                                echo 0;
                                                            } ?>
                                                        </td>
                                                        <!-- <td class="text-center"><?php
                                                                                        if ($virtualcfo_registration['rejected'] > 0) { ?>
                                                                <a href="javascript:void(0);" style="text-decoration:underline;color:blue;padding:0px;" onclick="virtualcforeport(3)"><?php echo $virtualcfo_registration['rejected']; ?></a>
                                                            <?php } else {
                                                                                            echo 0;
                                                                                        } ?>
                                                        </td> -->

                                                        <!--                                                         
                                                        <td class="text-center"><?php
                                                                                if ($pending = $virtualcfo_registration['approved'] + $virtualcfo_registration['rejected']) { ?>
                                                                <a href="javascript:void(0);" style="text-decoration:underline;color:blue;padding:0px;" onclick="virtualcforeport(4)"><?php echo $pending_total = $virtualcfo_registration['pid'] - $pending; ?></a>
                                                            <?php } else {
                                                                                    echo 0;
                                                                                }

                                                            ?>
                                                        </td> -->
                                                        <td class="text-center"><?php
                                                                                if ($virtualcfo_registration['pending'] > 0) { ?>
                                                                <a href="javascript:void(0);" style="text-decoration:underline;color:blue;padding:0px;" onclick="virtualcforeport(3)"><?php echo $virtualcfo_registration['pending']; ?></a>
                                                            <?php } else {
                                                                                    echo 0;
                                                                                } ?>
                                                        </td>
                                                    </tr>
                                                <?php $sno++;
                                                    $total           += $virtualcfo_registration['pid'];
                                                    $total_approved  += $virtualcfo_registration['approved'];
                                                    //$total_rejected  += $virtualcfo_registration['rejected'];
                                                    $total_progress  += $virtualcfo_registration['pending'];
                                                endforeach;
                                                //  exit(); 
                                                ?>

                                            </tbody>
                                            <tfoot>
                                                <tr class="odd gradeX">
                                                    <td colspan="1" style="text-align:right;"><b><?php echo "Total"; ?></b>&nbsp;</td>
                                                    <td class="text-center" style="font-weight:bold; color:black;"><?php echo $total; ?></td>
                                                    <td class="text-center" style="font-weight:bold; color:black;"><?php echo $total_approved; ?></td>
                                                    <!-- <td class="text-center" style="font-weight:bold; color:black;"><?php echo $total_rejected; ?></td> -->
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

                            <h3 class="text-center">EPR Certification details for the Month of <b><?php echo  date('F-Y', strtotime($month)); ?></b></h3>
                            <div class="table-responsive">
                                <table class="table table-hover table-bordered table-advanced display" style="width: 100%" id="example4">
                                    <thead class="table-dark">

                                        <tr class="text-center">
                                            <th> Sno </th>
                                            <th>Total</th>
                                            <th> Approved </th>
                                            <!-- <th> Rejected </th> -->
                                            <th> Pending </th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $sno = 1;
                                        foreach ($eprcertifications as $eprcertification) : ?>
                                            <tr class="odd gradeX">
                                                <td class="text-center"><?php echo $sno; ?></td>


                                                <td class="text-center">
                                                    <?php
                                                    if ($eprcertification['pid'] > 0) { ?>
                                                        <a href="javascript:void(0);" style="text-decoration:underline;color:blue;padding:0px;" onclick="eprcertificationreport(1)"><?php echo $eprcertification['pid']; ?></a>
                                                    <?php } else {
                                                        echo "0";
                                                    } ?>
                                                </td>




                                                <td class="text-center">
                                                    <?php
                                                    if ($eprcertification['approved'] > 0) { ?>
                                                        <a href="javascript:void(0);" style="text-decoration:underline;color:blue;padding:0px;" onclick="eprcertificationreport(2)"><?php echo $eprcertification['approved']; ?></a>
                                                    <?php } else {
                                                        echo "0";
                                                    } ?>
                                                </td>
                                                <!-- <td class="text-center"><?php
                                                                                if ($eprcertification['rejected'] > 0) { ?>
                                                                <a href="javascript:void(0);" style="text-decoration:underline;color:blue;padding:0px;" onclick="eprcertificationreport(3)"><?php echo $eprcertification['rejected']; ?></a>
                                                            <?php } else {
                                                                                    echo "0";
                                                                                } ?>
                                                        </td> -->


                                                <!-- <td class="text-center"><?php
                                                                                if ($pending = $eprcertification['approved'] + $eprcertification['rejected']) { ?>
                                                                <a href="javascript:void(0);" style="text-decoration:underline;color:blue;padding:0px;" onclick="eprcertificationreport(4)"><?php echo $pending_total = $eprcertification['pid'] - $pending; ?></a>
                                                            <?php } else {
                                                                                    echo "0";
                                                                                } ?>
                                                        </td> -->

                                                <td class="text-center"><?php
                                                                        if ($eprcertification['pending'] > 0) { ?>
                                                        <a href="javascript:void(0);" style="text-decoration:underline;color:blue;padding:0px;" onclick="eprcertificationreport(3)"><?php echo $eprcertification['pending']; ?></a>
                                                    <?php } else {
                                                                            echo "0";
                                                                        } ?>
                                                </td>
                                            </tr>
                                        <?php $sno++;
                                            $total  += $eprcertification['pid'];
                                            $total_approved  += $eprcertification['approved'];
                                            // $total_rejected  += $eprcertification['rejected'];
                                            $total_progress  += $eprcertification['pending'];
                                        endforeach; ?>

                                    </tbody>
                                    <tfoot>
                                        <tr class="odd gradeX">
                                            <td colspan="1" style="text-align:right;"><b><?php echo "Total"; ?></b>&nbsp;</td>
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
                                    <table class="table table-hover table-bordered table-advanced display" style="width: 100%" id="example4">
                                        <thead class="table-dark">

                                            <tr class="text-center">
                                                <th> Sno </th>
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
                                                        <?php
                                                        if ($compliance_service['pid'] > 0) { ?>
                                                            <a href="javascript:void(0);" style="text-decoration:underline;color:blue;padding:0px;" onclick="complianceservicereport(1)"><?php echo $compliance_service['pid']; ?></a>
                                                        <?php } else {
                                                            echo "0";
                                                        } ?>
                                                    </td>




                                                    <td class="text-center">
                                                        <?php
                                                        if ($compliance_service['approved'] > 0) { ?>
                                                            <a href="javascript:void(0);" style="text-decoration:underline;color:blue;padding:0px;" onclick="complianceservicereport(2)"><?php echo $compliance_service['approved']; ?></a>
                                                        <?php } else {
                                                            echo "0";
                                                        } ?>

                                                    </td>

                                                    <td class="text-center"><?php
                                                                            if ($compliance_service['pending'] > 0) { ?>
                                                            <a href="javascript:void(0);" style="text-decoration:underline;color:blue;padding:0px;" onclick="complianceservicereport(3)"><?php echo $compliance_service['pending']; ?></a>
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
                                                <td colspan="1" style="text-align:right;"><b><?php echo "Total"; ?></b>&nbsp;</td>
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
    $("#FormID").validate({
        rules: {
            'month_date': {
                required: true
            },
            'service_id': {
                required: true
            }
        },

        messages: {
            'month_date': {
                required: "Select Month"
            },
            'service_id': {
                required: "Select Services"
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

    function projectreport(val) {
        var val;
        //  alert(val);
        // alert(month);
        var month_date = <?php echo ($month_date) ? "'" . $month_date . "'" : '0'; ?>;
        //alert(month_date);
        $(".add-unsent-form").html("<span class='text-center'>Fetching data!!!</span>");
        $("#modal-add-unsent").modal('show');
        $.ajax({
            async: true,
            dataType: "html",
            type: "get",
            url: '<?php echo $this->Url->webroot ?>ajaxprojectreport/' + val + '/' + month_date,
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

    function digireport(val) {
        var val;
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
            url: '<?php echo $this->Url->webroot ?>ajaxdigireport/' + val + '/' + month_date,
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

    function virtualcforeport(val) {
        var val;
        // alert(val);

        var month_date = <?php echo ($month_date) ? "'" . $month_date . "'" : '0'; ?>;
        //  alert(month_date);
        $(".add-unsent-form").html("<span class='text-center'>Fetching data!!!</span>");
        $("#modal-add-unsent").modal('show');
        $.ajax({
            async: true,
            dataType: "html",
            type: "get",
            url: '<?php echo $this->Url->webroot ?>ajaxvirtualcforeport/' + val + '/' + month_date,
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

    function eprcertificationreport(val) {
        var val;
        // alert(val);

        var month_date = <?php echo ($month_date) ? "'" . $month_date . "'" : '0'; ?>;
        //  alert(month_date);
        $(".add-unsent-form").html("<span class='text-center'>Fetching data!!!</span>");
        $("#modal-add-unsent").modal('show');
        $.ajax({
            async: true,
            dataType: "html",
            type: "get",
            url: '<?php echo $this->Url->webroot ?>ajaxeprcertificationreport/' + val + '/' + month_date,
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

    function complianceservicereport(val) {
        var val;
        // alert(val);

        var month_date = <?php echo ($month_date) ? "'" . $month_date . "'" : '0'; ?>;
        //  alert(month_date);
        $(".add-unsent-form").html("<span class='text-center'>Fetching data!!!</span>");
        $("#modal-add-unsent").modal('show');
        $.ajax({
            async: true,
            dataType: "html",
            type: "get",
            url: '<?php echo $this->Url->webroot ?>ajaxcomplianceservicereport/' + val + '/' + month_date,
            beforeSend: function(xhr) {
                xhr.setRequestHeader('X-CSRF-Token', $('[name="_csrfToken"]').val());
            },
            success: function(data, textStatus) {
                //alert(data);
                $(".add-unsent-form").html(data);
            }
        });
    }
</script>