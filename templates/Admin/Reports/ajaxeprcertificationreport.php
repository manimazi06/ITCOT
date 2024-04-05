<div class="table-responsive">
    <?php if ($eprcertifications != '') {  ?>

         <!-- EXCEL AND PDF -->
         <a class="btn btn-primary" onClick="print_receipt('div_vc')">
            <i class="fa fa-print"></i> Print</a>&nbsp;&nbsp;&nbsp;&nbsp;
        <a class="btn btn-primary" id="export_excel_button">
            <i class="fas fa-eye"></i> Export to Excel</a><br /><br />
        <table class="table table-hover table-bordered table-advanced display" style="width: 100%" id="kt_datatable_dom_positioning">
                                            <thead class="table-dark">
                <tr class="text-center">
                    <th> Sno </th>
                    <th>Name</th>
                    <th>Mobile No</th>
                    <th>Email </th>
                    <th>Application No. </th>
                
                    <th>Action </th>

                    
                </tr>
            </thead>
            <tbody>
                <?php $sno = 1;
                foreach ($eprcertifications as $eprcertification) :
            //     echo '<pre>';
            //    print_r($conn);
                ?>
                    <tr class="text-center">
                        <td><?php echo ($sno); ?></td>
                        <td><?php echo $eprcertification['name']; ?></td>
                        <td><?php echo $eprcertification['mbl']; ?></td>
                        <td><?php echo $eprcertification['email']; ?></td>
                        <td><?php echo $eprcertification['application_no']; ?></td>
                  
                   
                        <td align="center">
                                    <?php echo $this->Html->link(('<i class="fas fa-eye"></i>'), ['controller'=>'eprcertification','action' => 'eprpreview', $eprcertification['pid']], ['escape' => false, 'class' => 'btn waves-effect waves-light btn-light-primary text-primary btn-sm']); ?>

                                </td>

                    </tr>
                <?php $sno++;
                 //exit();
                endforeach; ?>
            </tbody>
        </table>
    <?php } ?>
</div>

<!-- EXCEL AND PDF -->

<div id="report" style="display:none;">
    <div class="table-responsive" id="div_vc">
        <table class="table table-striped tbl-simple table-bordered dataTable display" aria-describedby="DataTables_Table_0_info" border="1" style="border-collapse: collapse;">
            <tr>
                <td style='text-align:center' colspan="5">
                    <strong size="4">EPR Certification.<br />
                    </strong>
                </td>
            </tr>

            <tr class="text-center">
                    <th> Sno </th>
                    <th>Name</th>
                    <th>Mobile No</th>
                    <th>Email </th>
                    <th>Application No. </th>

               

            </tr>
            <!-- </thead> -->
            <!-- <tbody> -->
            <?php $number = 1;
            foreach ($eprcertifications as $eprcertification) :
                //     echo '<pre>';
                //    print_r($conn);
            ?>
                <tr class="text-center">
                <td style="text-align: center;"><?php echo ($number); ?></td>
                        <td style="text-align: center;"><?php echo $eprcertification['name']; ?></td>
                        <td style="text-align: center;"><?php echo $eprcertification['mbl']; ?></td>
                        <td style="text-align: center;"><?php echo $eprcertification['email']; ?></td>
                        <td style="text-align: center;"><?php echo $eprcertification['application_no']; ?></td>


                </tr>
            <?php $number++;
            //exit();
            endforeach; ?>
            <!-- </tbody> -->
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
                        "EPRCertification_Report.xls"
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