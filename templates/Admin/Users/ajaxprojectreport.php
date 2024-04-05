<?php if ($val == 1) {  ?>

    <a class="btn btn-primary" onClick="print_receipt('div_vc')">
        <i class="fa fa-print"></i> Print</a>

    <a class="btn btn-primary" id="export_excel_button">
        <i class="fas fa-eye"></i> Export to Excel</a>
    <table class="table table-hover table-bordered table-advanced display" style="width: 100%" id="kt_datatable_dom_positioning">
        <thead class="table-dark">
            <tr class="text-center">
                <th> S.No. </th>
                <th>Register No</th>
                <th>Name </th>
                <th>Mobile No</th>
                <!-- <th>Pay Amount </th> -->

                <th>Payment Status </th>



            </tr>
        </thead>
        <tbody>
            <?php $sno = 1;
            foreach ($Digilibraries as $conn) :
                //     echo '<pre>';
                //    print_r($conn);
            ?>
                <tr class="text-center">
                    <td><?php echo ($sno); ?></td>
                    <td><?php echo $conn['reg_no']; ?></td>
                    <td><?php echo $conn['name']; ?></td>
                    <td><?php echo $conn['mobile_no']; ?></td>
                    <!-- <td><?php echo $conn['unit_name']; ?></td> -->

                    <!-- <td><?php

                                if ($conn['payment_status'] == 1) {
                                    echo '<span style="color:green;">Success</span>' ?>
                    <?php } elseif ($conn['payment_status'] == 2) {
                                    echo '<span style="color:red;">Failure</span>' ?>
                    <?php } elseif ($conn['payment_status'] == 0) {
                                    echo '<span style="color:blue;">Progress</span>';
                                } else {
                                    echo '';
                                } ?>

                    </td> -->

                    <td><?php

                        if ($conn['payment_status'] == 1) {
                            echo '<span style="color:green;">Success</span>' ?>
                        <?php } else {
                            echo '<span style="color:red;">Payment not paid</span>';
                        } ?>

                    </td>

                </tr>
            <?php $sno++;
            //exit();
            endforeach; ?>
        </tbody>
    </table>
<?php } elseif ($val == 2) {  ?>
    <a class="btn btn-primary" onClick="print_receipt('div_vc')">
        <i class="fa fa-print"></i> Print</a>

    <a class="btn btn-primary" id="export_excel_button">
        <i class="fas fa-eye"></i> Export to Excel</a>
    <table class="table table-hover table-bordered table-advanced display" style="width: 100%" id="kt_datatable_dom_positioning">
        <thead class="table-dark">
            <tr class="text-center">
                <th> S.No. </th>
                <th>Register No</th>
                <th>Name</th>
                <th>Mobile No</th>
                <!-- <th>Pay amount</th> -->
                <!-- <th>Project Status </th> -->
                <th>Payment Status </th>



            </tr>
        </thead>
        <tbody>
            <?php $sno = 1;
            foreach ($projects as $conn) :
                //     echo '<pre>';
                //    print_r($conn);
            ?>
                <tr class="text-center">
                    <td><?php echo ($sno); ?></td>
                    <td><?php echo $conn['reg_no']; ?></td>
                    <td><?php echo $conn['name']; ?></td>
                    <td><?php echo $conn['mobile_no']; ?></td>
                    <!-- <td><?php echo $conn['pay_amount']; ?></td> -->
                    <!-- <td><?php

                                if ($conn['project_status'] == 0) {
                                    echo '<span style="color:blue;">Progress</span>' ?>
                            <?php } elseif ($conn['project_status'] == 1) {
                                    echo '<span style="color:green;">Approved</span>' ?>
                            <?php } else {
                                    echo '<span style="color:red;">Rejected</span>';
                                } ?>

                            </td> -->

                    <!-- <td><?php

                                if ($conn['payment_status'] == 1) {
                                    echo '<span style="color:green;">Success</span>' ?>
                         <?php } elseif ($conn['payment_status'] == 2) {
                                    echo '<span style="color:red;">Failure</span>' ?>
                        <?php } elseif ($conn['payment_status'] == 0) {
                                    echo '<span style="color:blue;">Progress</span>';
                                } else {
                                    echo '';
                                } ?>

                        </td> -->

                    <td><?php

                        if ($conn['payment_status'] == 1) {
                            echo '<span style="color:green;">Success</span>' ?>
                        <?php } else {
                            echo '<span style="color:red;">Payment not paid</span>';
                        } ?>

                    </td>


                </tr>
            <?php $sno++;
            //exit();
            endforeach; ?>
        </tbody>
    </table>
<?php } elseif ($val == 3) {  ?>
    <a class="btn btn-primary" onClick="print_receipt('div_vc')">
        <i class="fa fa-print"></i> Print</a>

    <a class="btn btn-primary" id="export_excel_button">
        <i class="fas fa-eye"></i> Export to Excel</a>
    <table class="table table-hover table-bordered table-advanced display" style="width: 100%" id="kt_datatable_dom_positioning">
        <thead class="table-dark">
            <tr class="text-center">
                <th> S.No. </th>
                <th>Application No</th>

                <th>Name</th>
                <th>Mobile No</th>
                <th>Status</th>
                <!-- <th>Pay amount</th> -->
                <!-- <th>Project Status </th> -->
                <!-- <th>Payment Status </th> -->



            </tr>
        </thead>
        <tbody>
            <?php $sno = 1;
            foreach ($virtualcfoRegistrations as $conn) :
                //     echo '<pre>';
                //    print_r($conn);
            ?>
                <tr class="text-center">
                    <td><?php echo ($sno); ?></td>
                    <td><?php echo $conn['application_no']; ?></td>



                    <td><?php echo $conn['name']; ?></td>
                    <td><?php echo $conn['mobile_no']; ?></td>
                    <td>
                        <?php if ($conn['appln_status'] == 1) {
                            echo '<span style="color:green;">Approved</span>';
                        } elseif ($conn['appln_status'] == 2) {
                            echo '<span style="color:red;">Rejected</span>';
                        } else {
                            echo '<span style="color:blue;">Pending</span>';
                        } ?>

                    </td>
                    <!-- <td><?php echo $conn['pay_amount']; ?></td> -->
                    <!-- <td><?php

                                if ($conn['project_status'] == 0) {
                                    echo '<span style="color:blue;">Progress</span>' ?>
                            <?php } elseif ($conn['project_status'] == 1) {
                                    echo '<span style="color:green;">Approved</span>' ?>
                            <?php } else {
                                    echo '<span style="color:red;">Rejected</span>';
                                } ?>

                            </td> -->

                    <!-- <td><?php

                                if ($conn['payment_status'] == 1) {
                                    echo '<span style="color:green;">Success</span>' ?>
                         <?php } elseif ($conn['payment_status'] == 2) {
                                    echo '<span style="color:red;">Failure</span>' ?>
                        <?php } elseif ($conn['payment_status'] == 0) {
                                    echo '<span style="color:blue;">Progress</span>';
                                } else {
                                    echo '';
                                } ?>

                        </td> -->

                    <!-- <td><?php

                                if ($conn['payment_status'] == 1) {
                                    echo '<span style="color:green;">Success</span>' ?>
                        <?php } else {
                                    echo '<span style="color:red;">Payment not paid</span>';
                                } ?>

                        </td> -->


                </tr>
            <?php $sno++;
            //exit();
            endforeach; ?>
        </tbody>
    </table>
<?php } elseif ($val == 4) {  ?>
    <a class="btn btn-primary" onClick="print_receipt('div_vc')">
        <i class="fa fa-print"></i> Print</a>

    <a class="btn btn-primary" id="export_excel_button">
        <i class="fas fa-eye"></i> Export to Excel</a>
    <table class="table table-hover table-bordered table-advanced display" style="width: 100%" id="kt_datatable_dom_positioning">
        <thead class="table-dark">
            <tr class="text-center">
                <th> S.No. </th>
                <th>Application No</th>

                <th>Name</th>
                <th>Mobile No</th>
                <th>Status</th>
                <!-- <th>Pay amount</th> -->
                <!-- <th>Project Status </th> -->
                <!-- <th>Payment Status </th> -->



            </tr>
        </thead>
        <tbody>
            <?php $sno = 1;
            foreach ($eprcertification as $conn) :
                //     echo '<pre>';
                //    print_r($conn);
            ?>
                <tr class="text-center">
                    <td><?php echo ($sno); ?></td>
                    <td><?php echo $conn['application_no']; ?></td>



                    <td><?php echo $conn['name']; ?></td>
                    <td><?php echo $conn['mobile_no']; ?></td>
                    <td>
                        <?php if ($conn['appln_status'] == 1) {
                            echo '<span style="color:green;">Approved</span>';
                        } elseif ($conn['appln_status'] == 2) {
                            echo '<span style="color:red;">Rejected</span>';
                        } else {
                            echo '<span style="color:blue;">Pending</span>';
                        } ?>

                    </td>
                    <!-- <td><?php echo $conn['pay_amount']; ?></td> -->
                    <!-- <td><?php

                                if ($conn['project_status'] == 0) {
                                    echo '<span style="color:blue;">Progress</span>' ?>
                            <?php } elseif ($conn['project_status'] == 1) {
                                    echo '<span style="color:green;">Approved</span>' ?>
                            <?php } else {
                                    echo '<span style="color:red;">Rejected</span>';
                                } ?>

                            </td> -->

                    <!-- <td><?php

                                if ($conn['payment_status'] == 1) {
                                    echo '<span style="color:green;">Success</span>' ?>
                         <?php } elseif ($conn['payment_status'] == 2) {
                                    echo '<span style="color:red;">Failure</span>' ?>
                        <?php } elseif ($conn['payment_status'] == 0) {
                                    echo '<span style="color:blue;">Progress</span>';
                                } else {
                                    echo '';
                                } ?>

                        </td> -->

                    <!-- <td><?php

                                if ($conn['payment_status'] == 1) {
                                    echo '<span style="color:green;">Success</span>' ?>
                        <?php } else {
                                    echo '<span style="color:red;">Payment not paid</span>';
                                } ?>

                        </td> -->


                </tr>
            <?php $sno++;
            //exit();
            endforeach; ?>
        </tbody>
    </table>
<?php } elseif ($val == 5) {  ?>
    <a class="btn btn-primary" onClick="print_receipt('div_vc')">
        <i class="fa fa-print"></i> Print</a>

    <a class="btn btn-primary" id="export_excel_button">
        <i class="fas fa-eye"></i> Export to Excel</a>
    <table class="table table-hover table-bordered table-advanced display" style="width: 100%" id="kt_datatable_dom_positioning">
        <thead class="table-dark">
            <tr class="text-center">
                <th> S.No. </th>
                <th>Application No</th>

                <th>Name</th>
                <th>Mobile No</th>
                <th>Status</th>
                <!-- <th>Pay amount</th> -->
                <!-- <th>Project Status </th> -->
                <!-- <th>Payment Status </th> -->



            </tr>
        </thead>
        <tbody>
            <?php $sno = 1;
            foreach ($complianceServices as $conn) :
                //     echo '<pre>';
                //    print_r($conn);
            ?>
                <tr class="text-center">
                    <td><?php echo ($sno); ?></td>
                    <td><?php echo $conn['application_no']; ?></td>


                    <td><?php echo $conn['name']; ?></td>
                    <td><?php echo $conn['mobile_no']; ?></td>

                    <td>
                        <?php if ($conn['appln_status'] == 1) {
                            echo '<span style="color:green;">Approved</span>';
                        } elseif ($conn['appln_status'] == 2) {
                            echo '<span style="color:red;">Rejected</span>';
                        } else {
                            echo '<span style="color:blue;">Pending</span>';
                        } ?>

                    </td>
                    <!-- <td><?php echo $conn['pay_amount']; ?></td> -->
                    <!-- <td><?php

                                if ($conn['project_status'] == 0) {
                                    echo '<span style="color:blue;">Progress</span>' ?>
                            <?php } elseif ($conn['project_status'] == 1) {
                                    echo '<span style="color:green;">Approved</span>' ?>
                            <?php } else {
                                    echo '<span style="color:red;">Rejected</span>';
                                } ?>

                            </td> -->

                    <!-- <td><?php

                                if ($conn['payment_status'] == 1) {
                                    echo '<span style="color:green;">Success</span>' ?>
                         <?php } elseif ($conn['payment_status'] == 2) {
                                    echo '<span style="color:red;">Failure</span>' ?>
                        <?php } elseif ($conn['payment_status'] == 0) {
                                    echo '<span style="color:blue;">Progress</span>';
                                } else {
                                    echo '';
                                } ?>

                        </td> -->

                    <!-- <td><?php

                                if ($conn['payment_status'] == 1) {
                                    echo '<span style="color:green;">Success</span>' ?>
                        <?php } else {
                                    echo '<span style="color:red;">Payment not paid</span>';
                                } ?>

                        </td> -->


                </tr>
            <?php $sno++;
            //exit();
            endforeach; ?>
        </tbody>
    </table>
<?php } ?>
</div>

<!-- PRINT AND EXCEL -->
<div id="report" style="display:none;">
    <div class="table-responsive" id="div_vc">
        <table class="table table-striped tbl-simple table-bordered dataTable display" aria-describedby="DataTables_Table_0_info" border="1" style="border-collapse: collapse;">
            <tr>
                <td style='text-align:center' colspan="5">
                    <strong size="4">ITCOT.<br />
                    </strong>
                </td>
            </tr>

            <tr>
                <th> S.No. </th>
                <th>Application No</th>

                <th>Name</th>
                <th>Mobile No</th>
                <th>Status</th>
            </tr>
            <?php
            $number1 = 1;
            if ($val == 1) {
                foreach ($Digilibraries as $conn) :
                    //     echo '<pre>';
                    //    print_r($conn);
            ?>
                    <tr class="text-center">
                        <td><?php echo ($number1); ?></td>
                        <td><?php echo $conn['reg_no']; ?></td>
                        <td><?php echo $conn['name']; ?></td>
                        <td><?php echo $conn['mobile_no']; ?></td>
                        <!-- <td><?php echo $conn['unit_name']; ?></td> -->

                        <!-- <td><?php

                                    if ($conn['payment_status'] == 1) {
                                        echo '<span style="color:green;">Success</span>' ?>
                    <?php } elseif ($conn['payment_status'] == 2) {
                                        echo '<span style="color:red;">Failure</span>' ?>
                    <?php } elseif ($conn['payment_status'] == 0) {
                                        echo '<span style="color:blue;">Progress</span>';
                                    } else {
                                        echo '';
                                    } ?>

                    </td> -->

                        <td><?php

                            if ($conn['payment_status'] == 1) {
                                echo '<span style="color:green;">Success</span>' ?>
                            <?php } else {
                                echo '<span style="color:red;">Payment not paid</span>';
                            } ?>

                        </td>

                    </tr>
                <?php $number1++;
                //exit();
                endforeach; ?>
                <?php } elseif ($val == 2) {

                $number2 = 1;
                foreach ($projects as $conn) :
                    //     echo '<pre>';
                    //    print_r($conn);
                ?>
                    <tr class="text-center">
                        <td><?php echo ($number2); ?></td>
                        <td><?php echo $conn['reg_no']; ?></td>
                        <td><?php echo $conn['name']; ?></td>
                        <td><?php echo $conn['mobile_no']; ?></td>
                        <!-- <td><?php echo $conn['pay_amount']; ?></td> -->
                        <!-- <td><?php

                                    if ($conn['project_status'] == 0) {
                                        echo '<span style="color:blue;">Progress</span>' ?>
                            <?php } elseif ($conn['project_status'] == 1) {
                                        echo '<span style="color:green;">Approved</span>' ?>
                            <?php } else {
                                        echo '<span style="color:red;">Rejected</span>';
                                    } ?>

                            </td> -->

                        <!-- <td><?php

                                    if ($conn['payment_status'] == 1) {
                                        echo '<span style="color:green;">Success</span>' ?>
                         <?php } elseif ($conn['payment_status'] == 2) {
                                        echo '<span style="color:red;">Failure</span>' ?>
                        <?php } elseif ($conn['payment_status'] == 0) {
                                        echo '<span style="color:blue;">Progress</span>';
                                    } else {
                                        echo '';
                                    } ?>

                        </td> -->

                        <td><?php

                            if ($conn['payment_status'] == 1) {
                                echo '<span style="color:green;">Success</span>' ?>
                            <?php } else {
                                echo '<span style="color:red;">Payment not paid</span>';
                            } ?>

                        </td>


                    </tr>
                <?php $number2++;
                //exit();
                endforeach; ?>



                <?php } elseif ($val == 3) {


                $number3 = 1;
                foreach ($virtualcfoRegistrations as $conn) :
                    //     echo '<pre>';
                    //    print_r($conn);
                ?>
                    <tr class="text-center">
                        <td><?php echo ($number3); ?></td>
                        <td><?php echo $conn['application_no']; ?></td>



                        <td><?php echo $conn['name']; ?></td>
                        <td><?php echo $conn['mobile_no']; ?></td>
                        <td>
                            <?php if ($conn['appln_status'] == 1) {
                                echo '<span style="color:green;">Approved</span>';
                            } elseif ($conn['appln_status'] == 2) {
                                echo '<span style="color:red;">Rejected</span>';
                            } else {
                                echo '<span style="color:blue;">Pending</span>';
                            } ?>

                        </td>
                        <!-- <td><?php echo $conn['pay_amount']; ?></td> -->
                        <!-- <td><?php

                                    if ($conn['project_status'] == 0) {
                                        echo '<span style="color:blue;">Progress</span>' ?>
                            <?php } elseif ($conn['project_status'] == 1) {
                                        echo '<span style="color:green;">Approved</span>' ?>
                            <?php } else {
                                        echo '<span style="color:red;">Rejected</span>';
                                    } ?>

                            </td> -->

                        <!-- <td><?php

                                    if ($conn['payment_status'] == 1) {
                                        echo '<span style="color:green;">Success</span>' ?>
                         <?php } elseif ($conn['payment_status'] == 2) {
                                        echo '<span style="color:red;">Failure</span>' ?>
                        <?php } elseif ($conn['payment_status'] == 0) {
                                        echo '<span style="color:blue;">Progress</span>';
                                    } else {
                                        echo '';
                                    } ?>

                        </td> -->

                        <!-- <td><?php

                                    if ($conn['payment_status'] == 1) {
                                        echo '<span style="color:green;">Success</span>' ?>
                        <?php } else {
                                        echo '<span style="color:red;">Payment not paid</span>';
                                    } ?>

                        </td> -->


                    </tr>
                <?php $number3++;
                //exit();
                endforeach; ?>




                <?php } elseif ($val == 4) {

                $number4 = 1;
                foreach ($eprcertification as $conn) :
                    //     echo '<pre>';
                    //    print_r($conn);
                ?>
                    <tr class="text-center">
                        <td><?php echo ($number4); ?></td>
                        <td><?php echo $conn['application_no']; ?></td>



                        <td><?php echo $conn['name']; ?></td>
                        <td><?php echo $conn['mobile_no']; ?></td>
                        <td>
                            <?php if ($conn['appln_status'] == 1) {
                                echo '<span style="color:green;">Approved</span>';
                            } elseif ($conn['appln_status'] == 2) {
                                echo '<span style="color:red;">Rejected</span>';
                            } else {
                                echo '<span style="color:blue;">Pending</span>';
                            } ?>

                        </td>
                        <!-- <td><?php echo $conn['pay_amount']; ?></td> -->
                        <!-- <td><?php

                                    if ($conn['project_status'] == 0) {
                                        echo '<span style="color:blue;">Progress</span>' ?>
                            <?php } elseif ($conn['project_status'] == 1) {
                                        echo '<span style="color:green;">Approved</span>' ?>
                            <?php } else {
                                        echo '<span style="color:red;">Rejected</span>';
                                    } ?>

                            </td> -->

                        <!-- <td><?php

                                    if ($conn['payment_status'] == 1) {
                                        echo '<span style="color:green;">Success</span>' ?>
                         <?php } elseif ($conn['payment_status'] == 2) {
                                        echo '<span style="color:red;">Failure</span>' ?>
                        <?php } elseif ($conn['payment_status'] == 0) {
                                        echo '<span style="color:blue;">Progress</span>';
                                    } else {
                                        echo '';
                                    } ?>

                        </td> -->

                        <!-- <td><?php

                                    if ($conn['payment_status'] == 1) {
                                        echo '<span style="color:green;">Success</span>' ?>
                        <?php } else {
                                        echo '<span style="color:red;">Payment not paid</span>';
                                    } ?>

                        </td> -->


                    </tr>
                <?php $number4++;
                //exit();
                endforeach; ?>



                <?php } elseif ($val == 5) {

                $number5 = 1;
                foreach ($complianceServices as $conn) :
                    //     echo '<pre>';
                    //    print_r($conn);
                ?>
                    <tr class="text-center">
                        <td><?php echo ($number5); ?></td>
                        <td><?php echo $conn['application_no']; ?></td>


                        <td><?php echo $conn['name']; ?></td>
                        <td><?php echo $conn['mobile_no']; ?></td>

                        <td>
                            <?php if ($conn['appln_status'] == 1) {
                                echo '<span style="color:green;">Approved</span>';
                            } elseif ($conn['appln_status'] == 2) {
                                echo '<span style="color:red;">Rejected</span>';
                            } else {
                                echo '<span style="color:blue;">Pending</span>';
                            } ?>

                        </td>
                        <!-- <td><?php echo $conn['pay_amount']; ?></td> -->
                        <!-- <td><?php

                                    if ($conn['project_status'] == 0) {
                                        echo '<span style="color:blue;">Progress</span>' ?>
                            <?php } elseif ($conn['project_status'] == 1) {
                                        echo '<span style="color:green;">Approved</span>' ?>
                            <?php } else {
                                        echo '<span style="color:red;">Rejected</span>';
                                    } ?>

                            </td> -->

                        <!-- <td><?php

                                    if ($conn['payment_status'] == 1) {
                                        echo '<span style="color:green;">Success</span>' ?>
                         <?php } elseif ($conn['payment_status'] == 2) {
                                        echo '<span style="color:red;">Failure</span>' ?>
                        <?php } elseif ($conn['payment_status'] == 0) {
                                        echo '<span style="color:blue;">Progress</span>';
                                    } else {
                                        echo '';
                                    } ?>

                        </td> -->

                        <!-- <td><?php

                                    if ($conn['payment_status'] == 1) {
                                        echo '<span style="color:green;">Success</span>' ?>
                        <?php } else {
                                        echo '<span style="color:red;">Payment not paid</span>';
                                    } ?>

                        </td> -->


                    </tr>
                <?php $number5++;
                //exit();
                endforeach; ?>



            <?php } ?>
        </table>
    </div>
</div>


<script>
    $("#kt_datatable_dom_positioning").DataTable({
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
                        "Report.xls"
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
</script>