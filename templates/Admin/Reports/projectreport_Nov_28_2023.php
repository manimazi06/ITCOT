<div class="row">
    <div class="col-sm-12">
        <div class="card-box">
            <div class="card-head text-center">
                <h3>Project Report</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card-body">
                            <div class="row">
                                <fieldset style="border:1px solid #00355F;border-radius:10px; margin-top:0%;padding:20px;">
                                    <div class="card-body">
                                        <?php echo $this->Form->create($project, ['id' => 'FormID', 'class' => 'form-horizontal', "autocomplete" => "off", 'enctype' => 'multipart/form-data']); ?>
                                        <div class="col-md-12 row">
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
        <?php if ($projects != '') {  ?>
            <div class="card-box">
                <?php if (count($projects) > 0) { ?>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card-body">

                                <h3 class="text-center">Project Report for the Month of <b><?php echo  date('F-Y',strtotime($month)); ?></b></h3>
                                    <div class="table-responsive">
                                        <table class="table table-hover table-bordered table-advanced display" style="width: 100%" id="example4">
                                            <thead class="table-dark">

                                                <tr class="text-center">
                                                    <!-- <th> Sno </th> -->
                                                    <th>Total</th>
                                                    <th> Approved </th>
                                                    <th> Rejected </th>
                                                    <th> Pending </th>
                                                    <th> Pending </th>
                                                    <th> Pending </th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $sno = 1;
                                                foreach ($projects as $project) : ?>
                                                    <tr class="odd gradeX">
                                                        <!-- <td class="text-center"><?php echo $sno; ?></td> -->

                                                        <td class="text-center">
                                                            <?php
                                                            if ($project['pid'] >0) { ?>
                                                                <a href="javascript:void(0);" style="text-decoration:underline;color:blue;padding:0px;" onclick="projectreport(1)"><?php echo $project['pid']; ?></a>
                                                            <?php } else {
                                                                echo "0";
                                                            } ?>
                                                        </td>
        


                                                        <td class="text-center">
                                                            <?php
                                                            if ($project['approved'] >0) { ?>
                                                                <a href="javascript:void(0);" style="text-decoration:underline;color:blue;padding:0px;" onclick="projectreport(2)"><?php echo $project['approved']; ?></a>
                                                            <?php } else {
                                                                echo "0";
                                                            } ?>
                                                        </td>
                                                        <td class="text-center"><?php
                                                                                if ($project['rejected'] >0) { ?>
                                                                <a href="javascript:void(0);" style="text-decoration:underline;color:blue;padding:0px;" onclick="projectreport(3)"><?php echo $project['rejected']; ?></a>
                                                            <?php } else {
                                                                                    echo "0";
                                                                                } ?>
                                                        </td>
<!-- 
                                                        <td class="text-center"><?php
                                                                                if ($pending=$project['approved']+$project['rejected']) { ?>
                                                                <a href="javascript:void(0);" style="text-decoration:underline;color:blue;padding:0px;" onclick="projectreport(4)"><?php echo $pending_total=$project['pid']-$pending; ?></a>
                                                            <?php } else {
                                                                                    echo "0";
                                                                                } ?>
                                                        </td> -->

                                                        <td class="text-center"><?php
                                                                                if ($project['pending'] >0) { ?>
                                                                <a href="javascript:void(0);" style="text-decoration:underline;color:blue;padding:0px;" onclick="projectreport(4)"><?php echo $project['pending']; ?></a>
                                                            <?php } else {
                                                                                    echo "0";
                                                                                } ?>
                                                        </td>

                                                    </tr>
                                                <?php 
                                                //$sno++;
                                                    $total           += $project['pid'];
                                                    $total_approved  += $project['approved'];
                                                    $total_rejected  += $project['rejected'];
                                                    $total_progress  += $project['pending'];
                                                endforeach; ?>

                                            </tbody>
                                            <tfoot>
                                                <tr class="odd gradeX">
                                                    <td colspan="1" style="text-align:right;"><b><?php echo "Total"; ?></b>&nbsp;</td>
                                                    <td class="text-center" style="font-weight:bold; color:black;"><?php echo $total; ?></td>
                                                    <td class="text-center" style="font-weight:bold; color:black;"><?php echo $total_approved; ?></td>
                                                    <td class="text-center" style="font-weight:bold; color:black;"><?php echo $total_rejected; ?></td>
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
<!-- <div id="report" style="display:none;">
    <div class="table-responsive" id="div_vc">
        <table class="table table-striped tbl-simple table-bordered dataTable display" aria-describedby="DataTables_Table_0_info" border="1" style="border-collapse: collapse;">
            <thead>
                <tr>
                    <td style='text-align:center' colspan="7">
                        <strong size="4">TAMILNADU POLICE HOUSING CORPORATION(TNPHC).<br />
                        </strong>
                    </td>
                </tr>
                <tr>
                    <td style='text-align:center' colspan="7">Sanctioned Report
                    </td>
                </tr>
                <tr class="text-center">
                    <th> Sno </th>
                    <th> Work Name </th>
                    <th> Work Place </th>
                    <th> Districts </th>
                    <th> Division </th>
                    <th> Circle </th>
                    <th> Sanctioned Amount </th>
                </tr>
            </thead>
            <tbody>
                <?php $sno = 1;
                foreach ($projects as $project) : ?>
                    <tr class="odd gradeX">
                        <td class="text-center"><?php echo $sno; ?></td>
                        <td class="text-center"><?php echo $project['name']; ?></td>
                        <td class="text-center"><?php echo $project['place_name']; ?></td>
                        <td class="text-center"><?php echo $project['dname']; ?></td>
                        <td class="text-center"><?php echo $project['divname']; ?></td>
                        <td class="text-center"><?php echo $project['cirname']; ?></td>
                        <td class="text-center"><?php echo $sanction = $project['amount']; ?></td>
                    </tr>
                <?php $sno++;
                    $total_sanction1  += $sanction;
                endforeach; ?>

            </tbody>
            <tfoot>
                <tr class="odd gradeX">
                    <td colspan="6" style="text-align:right;"><b><?php echo "Total"; ?></b>&nbsp;</td>
                    <td class="text-center" style="font-weight:bold; color:black;"><?php echo $total_sanction1; ?></td>
                </tr>
            </tfoot>
        </table>
    </div>
</div> -->
<script type="text/javascript">
    $(".btn-sweetalert").attr("onclick", "").unbind("click"); //remove function onclick button
</script>

<script>
    $("#FormID").validate({
        rules: {
            'month_date': {
                required: true
            }
        },

        messages: {
            'month_date': {
                required: "Select Month"
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

    function projectreport(val) {
        var val;
        //  alert(val);
        // alert(month);
        var month_date = <?php echo ($month_date) ? "'" . $month_date . "'" : '0'; ?>;
        $(".add-unsent-form").html("<span class='text-center'>Fetching data!!!</span>");
        $("#modal-add-unsent").modal('show');
        $.ajax({
            async: true,
            dataType: "html",
            type: "get",
            url: '<?php echo $this->Url->webroot ?>ajaxprojectreport/' + val + '/'+ month_date,
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