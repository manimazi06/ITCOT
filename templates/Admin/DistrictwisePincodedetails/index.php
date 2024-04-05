<div class="row page-titles">
    <div class="col-md-7 col-12 align-self-center d-none d-md-block">
        <div class="d-flex mt-2 justify-content-end">
        </div>
    </div>
</div>
<div class="col-12">
    <?php echo $this->Form->create($users, ['id' => 'FormID', 'class' => 'form-horizontal', "autocomplete" => "off", 'enctype' => 'multipart/form-data']); ?>
    <div class="card">
        <div class="card-header" style="background-color: #243e04;">
            <h4 class="mb-0 text-white">Districtwise Pincode Details</h4>
        </div>

        <div class="card-body">
            <div class="row mb-2">
                <div class="col text-end">
                    <?php echo $this->Html->link(('<i class="fa fa-plus"></i>&nbsp; Add Districtwise Pincodedetails'), ['action' => 'add'], ['escape' => false, 'class' => 'btn btn-rounded btn-outline-info m-t-10 mb-2', 'target' => '_blank']); ?>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-3">
                    <label for="inputContent" class="control-label">District</label>
                    <div class="mb-4">
                        <div class="input text">
                            <?php echo $this->Form->control('district_id', ['class' => 'form-control select', 'empty' => 'Select', 'options' => $districts, 'label' => false, 'error' => false, 'required']); ?>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-3">
                    <label for="inputContent" class="control-label">&nbsp;</label>

                    <div class="mb-4">
                        <button type="submit" class="btn btn-rounded btn-info m-t-8 mt-1 btn-sm">Get Details</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php echo $this->Form->End(); ?>
</div>

<!-- <a class="btn btn-primary" onClick="print_receipt('div_vc')">
                <i class="fa fa-print"></i> Print</a> -->
<div class="col-md-12 offset-md-11">
<a class="btn btn-primary btn-sm" id="export_excel_button">
    <i class="fa fa-file-excel"></i> Excel Export</a>  
	</div>
<div class="col-12">

    <div class="card">

        <div class="card-body">

            <div class="table-responsive">
                <table class="table table-hover table-bordered table-advanced display" style="width: 100%" id="example4">
                    <thead class="table-dark">
                        <tr class="text-center">
                            <th> S.No </th>
                            <th> District</th>
                            <th> Pincode</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sno = 1;
                        foreach ($districtwisePincodedetails as $districtwisePincodedetail) : //echo"<pre>";print_r($employees);exit(); 
                        ?>
                            <tr class="text-center">
                                <td align="center"><?= $sno++; ?></td>
                                <td><?= $dist_name = $districtwisePincodedetail->district->name ?></td>
                                <td><?= $districtwisePincodedetail->pincode ?></td>
                                <td align="center">
                                    <?php echo $this->Html->link(('<i class="fas fa-edit"></i>'), ['action' => 'edit', $districtwisePincodedetail->id], ['escape' => false, 'class' => 'btn waves-effect waves-light btn-light-primary text-primary btn-sm']); ?>
                                    <?php echo $this->Html->link(('<i class="fas fa-trash"></i>'), ['action' => 'delete', $districtwisePincodedetail->id], ['escape' => false, 'onclick' => "return confirm('Are You Sure want to delete-$dist_name - $districtwisePincodedetail->location')", 'class' => 'btn waves-effect waves-light btn-light-primary text-primary btn-sm']); ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<div id="report" style="display:none;">
    <div class="table-responsive" id="div_vc">
        <table class="table table-striped tbl-simple table-bordered dataTable display" aria-describedby="DataTables_Table_0_info" border="1" style="border-collapse: collapse;">
            <tr>
                <td style='text-align:center' colspan="3">
                    <strong size="4">District wise pincode details<br />
                    </strong>
                </td>
            </tr>

            <tr>
                <th> S.No </th>
                <th> District</th>
                <th> Pincode</th>
            </tr>
            <?php
            $number1 = 1;

            foreach ($districtwisePincodedetails as $districtwisePincodedetail) : //echo"<pre>";print_r($employees);exit(); 
                ?>
                    <tr class="text-center">
                        <td align="center"><?= $number1; ?></td>
                        <td><?= $dist_name = $districtwisePincodedetail->district->name ?></td>
                        <td><?= $districtwisePincodedetail->pincode ?></td>
                </tr>

            <?php $number1++;
            //exit();
            endforeach; ?>

        </table>
    </div>
</div>
<script>
    $("#FormID").validate({
        rules: {
            'district_id': {
                required: true
            }
        },

        messages: {
            'district_id': {
                required: "Select District"
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
                        "District-pincodedetails.xls"
                    ) // set file name (you want to put formatted date here)
                    .attr('href', uri) // data to download
                    .attr('target', '_blank') // open in new window (optional)
            });



        });
    });
</script>