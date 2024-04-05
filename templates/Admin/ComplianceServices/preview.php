<?php

$fmt = new NumberFormatter('en-IN', NumberFormatter::CURRENCY);
$fmt->setAttribute(NumberFormatter::FRACTION_DIGITS, 2);
$fmt->setSymbol(NumberFormatter::CURRENCY_SYMBOL, '');

?>

<br>
<div class="container" style="background-color:white;"><br><br>
    <div class="mb-3 mt-3 text-right" style="text-align:right;">
        <?php echo $this->Html->link(('<i class="fas fa-download"></i>&nbsp; Download pdf'), ['controller' => 'Pdfgenerator', 'action' => 'compliancepdf', $id], ['escape' => false, 'class' => 'btn btn-info rounded-pill px-4 waves-effect waves-light',]); ?>
        <!-- <a class="btn waves-effect waves-btn-primary text-success btn-sm" onClick="print_receipt('div_vc')"><i class="fa fa-print"></i> Print</a> -->
    </div>


    <div class="uniongov-content text-start">
        <h2 style="text-align: center;"><u>Compliance Services Application No:<b><?php echo $basic['application_no']; ?></b>
</u></h2>
        <div class="table-responsive">
            <h3>1.General Details</h3>
            <hr style="width:50% ;">
            <table class="table table-hover table-bordered table-advanced display" style="width: 100%">
                <thead class="table-dark">
                    <tr class="text-center">



                        <th> Name</th>
                        <th> Mobile No</th>
                        <th> Email</th>

                        <th> State</th>
                        <th> District</th>
                        <th> Pincode</th>

                    </tr>
                </thead>
                <tbody>
                    <tr class="text-center">

                        <td class="text-center"><?= $basic->name ?></td>
                        <td class="text-center"><?= $basic->mobile_no ?></td>
                        <td class="text-center"><?= $basic->email ?></td>
                        <td class="text-center"><?= $basic->project_name ?></td>
                        <td class="text-center"><?= $basic->state->state_name ?></td>
                        <td class="text-center"><?= $basic->pincode ?></td>
                    </tr>
                </tbody>
            </table>
            <hr>
        </div>
        <!-- Project DETAILS -->
        <div class="table-responsive ">
            <h3>2.Project Details</h3> 
            <hr style="width:50% ;">
            <table class="table table-hover table-bordered table-advanced display" style="width: 100%">
                <thead class="table-dark">

                    <tr class="text-center">
                        <th> Project Name</th>
                        <th> Project Cost</th>
                        <th>Project Location </th>
                        <th> Land Area</th>
                        <th>Total Build Area</th>
                        <th> Power Requirement</th>
                        <th>No.of Employees</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td align="center"><?= $basic['project_name']; ?></td>
                        <!-- <td align="center"><?= $basic['project_cost']; ?></td> -->
                      <td align="center">  <?php echo $basic['project_cost'];?></td>
                        <td align="center"><?= $basic['project_loc']; ?></td>
                        <td align="center"><?= $basic['landarea']; ?>
                            <?= $basic['land_unit']; ?>
                        </td>
                        <td align="center"><?= $basic['total_buildup_area']; ?>&nbsp;
                            <?= $basic['totalarea_unit']; ?></td>
                        <td align="center"><?= $basic['power_req']; ?>&nbsp;
                            <?= $basic['powerreq_unit']; ?></td>
                        <td align="center"><?= $basic['no_employees']; ?></td>
                    </tr>
                </tbody>
            </table>
            <hr>
        </div>

        <!-- Product Details -->

        <h3> 3.Product Details</h3>
        <div class="table-responsive text-center">
            <table class="table table-hover table-bordered table-advanced display" style="width: 100%">
                <thead class="table-dark">
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


        <!-- Service DETAILS -->
        <?php if ($serviceCompliances_count > 0) { ?>
        <div class="table-responsive ">
            <h3>4.Service Details</h3>
            <hr>
            


                <h4>4.1 Services required for obtaining approvals from</h4>
                <div class="table-responsive text-center">
                    <table class="table table-hover table-bordered table-advanced display" style="width: 100%">
                        <thead class="table-dark">
                            <tr class="text-center">

                                    <th>S.no</th>
                                    <th>Services</th>
                            </tr>

                        <tbody>
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
                                    
                                    
                                    <?php if($value['service_compliance_id']==11){
                                            echo '<td style="font-weight:normal !important;">Others:'.$value->others_name.'</td>';

                                    }else{
                                        echo '<td style="font-weight:normal !important;">'.$value->service_compliance->name.'</td>';

                                    }
                                    
                                    $value['service_compliance']['name']; ?></td>


                                </tr>

                            <?php

                            } ?>



                        </tbody>

                    </table>
                </div>

           
            <div class="col-md-6 checking">
                <td>
                    <input type="text" class="form-control" name="others" id="others" style="display:none">
                </td>
            </div>
        </div>
        <?php } ?>
    </div>

</div>



<!-- Action -->
<div class="action-form">
    <div class="mb-3 mt-3 text-center">
        <?php echo $this->Html->link(('<i class="fas fa-arrow-left"></i>&nbsp; Back'), ['action' => 'index'], ['escape' => false, 'class' => 'btn btn-info rounded-pill px-4 waves-effect waves-light',]); ?>
    </div>
</div>
<!-- PDF PRINT -->
<!-- GENERAL DETAILS -->
<div class="pdfreport" style="display: none;">
    <div id="div_vc">
        <h2 style="text-align: center;"><u>Project Report - Application No : <?php echo $basics['project_no']; ?></u></h2>
        <div class="table-responsive">
            <h3>General Details</h3>
            <table border="1" style="width: 100%">
                <thead>
                    <tr class="text-center">
                        <th> Prefix</th>
                        <th> Name</th>
                        <th> Date of Birth</th>
                        <th> Category</th>
                        <th>Educational Details</th>
                        <th> Mobile No</th>
                        <th> Email</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td align="center"><?= $basics['prefix']; ?></td>
                        <td align="center"><?= $basics['name']; ?></td>
                        <td align="center"><?= date('d/m/Y', strtotime($basics['dob'])); ?></td>
                        <td align="center"><?= $basics->category->name; ?></td>
                        <td align="center"><?= $basics->education->name; ?></td>
                        <td align="center"><?= $basics['mobile_no']; ?></td>
                        <td align="center"><?= $basics['email']; ?></td>
                    </tr>
                </tbody>
            </table>
            <!-- ENTITY DETAILS -->
            <h3>Unit / Entity Details</h3>
            <!-- <hr style="width:50% ;"> -->
            <table border="1" style="width: 100%">
                <thead class="table-dark">
                    <tr class="text-center">
                        <th> Entity Name</th>
                        <th> Sector Type</th>
                        <th>Project Cost </th>
                        <th> Loan Amount</th>
                        <th>Type of Loan</th>
                        <th> Loan Purpose</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td align="center"><?= $basics['unit_name']; ?></td>
                        <td align="center"><?= $basics['sectortype']['name']; ?></td>
                        <td align="center"><?= $basics['project_cost']; ?></td>
                        <td align="center"><?= $basics['loan_amount']; ?></td>
                        <td align="center"><?= $basics->loan_type->name; ?></td>
                        <td align="center"><?= $basics['loan_purpose']['name']; ?></td>
                    </tr>
                </tbody>
            </table>
            <h3>Educational Qualification / Special Training / Work Experience</h3>
            <!-- <hr style="width:50% ;"> -->
            <h5>1.1 Educational Qualification</h5>
            <table border="1" style="width: 100%">
                <thead class="table-dark">
                    <tr class="text-center">
                        <th style="width:2%;"> S.No </th>
                        <th style="width:15%;"> Education</th>
                        <th style="width:30%;">Institute</th>
                        <th style="width:15%;">Major Subject</th>
                        <th style="width:15%;">Year of Passing</th>
                    </tr>

                </thead>
                <tbody>
                    <?php foreach ($education_details as $key => $value) {
                    ?>
                        <tr>
                            <td align="center"><?php echo ($key + 1); ?>.</td>
                            <td align="center">
                                <?php echo $value->education->name; ?>
                            </td>
                            <td align="center"><?php echo $value['institute']; ?>
                            </td>
                            <td align="center"><?php echo $value['major_subject']; ?>
                            </td>
                            <td align="center"><?php echo $value['year_passing']; ?>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
            <!-- 1.2-EDUCATIONAL QUALIFICATION -->
            <h5>1.2 Special Training</h5>
            <div class="row">
                <div class="col-sm-12 col-md-12">
                    <table border="1">
                        <thead class="table-dark">
                            <tr class="text-center">
                                <th style="width:2%;"> S.No </th>
                                <th style="width:15%;">Training In</th>
                                <th style="width:30%;">Institute</th>
                                <th style="width:15%;">Duration</th>
                                <th style="width:15%;">Achievement</th>
                            </tr>
                        </thead>
                        <tbody class="trainingadding">
                            <?php
                            foreach ($training_details as $key1 => $value1) {
                            ?>
                                <tr class="trainingpresent_row_in_post">
                                    <td align="center"><?php echo ($key1 + 1); ?>.</td>
                                    <td align="center">
                                        <?php echo $value1['training_in']; ?>
                                    </td>

                                    <td align="center">
                                        <?php echo $value1['institute']; ?>
                                    </td>
                                    <td align="center">
                                        <?php echo $value1['duration']; ?>
                                    </td>
                                    <td align="center">
                                        <?php echo $value1['achievement']; ?>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div><br>
            <!-- 1.3-EDUCATIONAL QUALIFICATION -->
            <h5>1.3 Work Experience (Past and Present)</h5>
            <div class="row">
                <div class="col-sm-12 col-md-12">
                    <table border="1">
                        <thead class="table-dark">
                            <tr class="text-center">
                                <th style="width:2%;"> S.No </th>
                                <th style="width:30%;">organisation</th>
                                <th style="width:15%;">Position</th>
                                <th style="width:15%;">Nature of Work</th>
                                <th style="width:15%;">Duration</th>
                            </tr>
                        </thead>
                        <tbody class="workadding">
                            <?php
                            foreach ($work_details as $key2 => $value2) {
                            ?>
                                <tr class="workpresent_row_in_post">
                                    <td align="center"><?php echo ($key2 + 1); ?>.</td>
                                    <td align="center">
                                        <?php echo $value2['organisation']; ?>
                                    </td>
                                    <td align="center">
                                        <?php echo $value2['position']; ?>
                                    </td>
                                    <td align="center">
                                        <?php echo $value2['nature_work']; ?>
                                    </td>
                                    <td align="center">
                                        <?php echo $value2['duration']; ?>
                                    </td>
                                </tr>
                            <?php }   ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- MANUFACTURING DETAILS -->
            <h3>Manufacturing|Machinery|Raw materials</h3>
            <div class="step-tab-panel" data-step="step3">
                <h3 class="tab2-head">2.0 DETAILS OF PROPOSED PROJECT: Manufacturing / Servicing</h3>
                <div class="container">
                    <h5>2.1 PRODUCTION PROGRAMME</h5>
                    <div class="row">
                        <div class="col-sm-12 col-md-12">
                            <table border="1">
                                <thead class="table-dark">
                                    <tr class="text-center">
                                        <th style="width:2%;"> S.No </th>
                                        <th style="width:15%;"> Item</th>
                                        <th style="width:30%;">Total Quantity / Year</th>
                                        <th style="width:15%;">Sales Revenue / Year</th>
                                        <th style="width:15%;">Capacity Utilisation</th>
                                    </tr>
                                </thead>
                                <tbody class="eduadding">

                                    <?php
                                    foreach ($pro_details as $key => $value) {

                                    ?>
                                        <tr class="edupresent_row_in_post">
                                            <td align="center"><?php echo ($key + 1); ?>.</td>
                                            <td>
                                                <?php echo $value['item']; ?>
                                            </td>
                                            <td align="right"><?php echo $value['quantity']; ?>
                                            </td>
                                            <td align="right"><?php echo $value['revenue_year']; ?>
                                            </td>
                                            <td><?php echo $value['capacity_utilisation']; ?>
                                            </td>
                                        </tr>

                                    <?php }      ?>
                                </tbody>
                            </table>
                        </div>
                    </div> <br><br>
                    <h5>2.2 MACHINERY / EQUIPMENT</h5>
                    <div class="row">
                        <div class="col-sm-12 col-md-12">
                            <table border="1">
                                <thead class="table-dark">
                                    <tr class="text-center">
                                        <th style="width:2%;"> S.No </th>
                                        <th style="width:15%;">Description</th>
                                        <th style="width:30%;">Quantity required in Nos.</th>
                                        <th style="width:15%;">Price</th>
                                        <th style="width:15%;">Total Value</th>
                                        <th style="width:30%;">Name </th>
                                        <th style="width:30%;">Address</th>
                                    </tr>
                                </thead>
                                <tbody class="trainingadding">
                                    <?php
                                    foreach ($mach_details as $key1 => $value1) {

                                    ?>
                                        <tr class="trainingpresent_row_in_post">
                                            <td align="center"><?php echo ($key1 + 1); ?>.</td>
                                            <td>
                                                <?php echo $value1['description']; ?>
                                            </td>

                                            <td align="right">
                                                <?php echo $value1['quantity']; ?>
                                            </td>
                                            <td align="right">
                                                <?php echo $value1['price']; ?>
                                            </td>
                                            <td align="right">
                                                <?php echo $value1['total_value']; ?>
                                            </td>
                                            <td>
                                                <?php echo $value1['suppliername']; ?>
                                            </td>
                                            <td>
                                                <?php echo $value1['supplieraddress']; ?>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div><br></br>
                    <h5>2.3 RAW MATERIALS</h5>
                    <div class="row">
                        <div class="col-sm-12 col-md-12">
                            <table border="1">
                                <thead class="table-dark">
                                    <tr class="text-center">
                                        <th style="width:2%;" rowspan="3"> S.No </th>
                                        <th style="width:20%;" rowspan="3">Item</th>
                                        <th style="width:30%;" colspan="2">Total Annual Requirement</th>
                                        <th style="width:30%;" rowspan="3">Sales Revenue / Year</th>
                                        <th style="width:15%;" rowspan="3">Capacity Utilisation</th>
                                    </tr>
                                    <tr class="text-center">
                                        <th style="width:15%;">Quantity</th>
                                        <th style="width:15%;">Value in<br>Rs</th>
                                    </tr>
                                </thead>
                                <tbody class="workadding">
                                    <?php
                                    foreach ($raw_details as $key2 => $value2) {
                                    ?>
                                        <tr class="workpresent_row_in_post">
                                            <td align="center"><?php echo ($key2 + 1); ?>.</td>
                                            <td>
                                                <?php echo $value2['item']; ?>
                                            </td>
                                            <td align="right">
                                                <?php echo $value2['quantity']; ?>
                                            </td>
                                            <td align="right">
                                                <?php echo $value2['value']; ?>
                                            </td>
                                            <td align="right">
                                                <?php echo $value2['revenue_year']; ?>
                                            </td>
                                            <td>
                                                <?php echo $value2['capacity_utilisation']; ?>
                                            </td>
                                        </tr>
                                    <?php }   ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- MANPOWER DETAILS -->
            <h3>Utilities and Man-Power Details</h3>
            <div class="step-tab-panel" data-step="step3">
                <div class="container">
                    <h5>2.4 UTILITIES</h5>
                    <div class="row">
                        <div class="col-sm-12 col-md-12">
                            <table border="1">
                                <thead class="table-dark">
                                    <tr class="text-center">
                                        <th style="width:2%;"> S.No </th>
                                        <th style="width:20%;">Particulars</th>
                                        <th style="width:20%;">Annual Requirement</th>
                                        <th style="width:20%;">Total Annual Expenses</th>
                                        <th style="width:20%;">Remarks</th>
                                    </tr>
                                </thead>
                                <tbody class="rawadding">
                                    <?php foreach ($util_details as $key => $value) { ?>
                                        <tr>
                                            <td align="center">1.</td>
                                            <td>Electricity</td>
                                            <td align="right">
                                                <?php echo $value['electricity_requirement']; ?>
                                            </td>
                                            <td align="right">
                                                <?php echo $value['electricity_expenses']; ?> </td>
                                            <td>
                                                <?php echo $value['electricity_remarks']; ?> </td>
                                        </tr>
                                        <tr>
                                            <td align="center">2.</td>
                                            <td>Water
                                            </td>
                                            <td align="right">
                                                <?php echo $value['water_requirement']; ?> </td>
                                            <td align="right">
                                                <?php echo $value['water_expenses']; ?> </td>
                                            <td>
                                                <?php echo $value['water_remarks']; ?> </td>
                                        </tr>
                                        <tr>
                                            <td align="center">3.</td>
                                            <td>Coal /Oil
                                            </td>
                                            <td align="right">
                                                <?php echo $value['oil_requirement']; ?> </td>
                                            <td align="right">
                                                <?php echo $value['oil_expenses']; ?> </td>
                                            <td>
                                                <?php echo $value['oil_remarks']; ?> </td>
                                        </tr>
                                        <tr>
                                            <td align="center">4.</td>
                                            <td>Any Other
                                            </td>
                                            <td align="right">
                                                <?php echo $value['other_requirement']; ?> </td>
                                            <td align="right">
                                                <?php echo $value['other_expenses']; ?> </td>
                                            <td>
                                                <?php echo $value['other_remarks']; ?> </td>
                                        </tr>
                                    <?php
                                        $elec_requ              += $value['electricity_requirement'] + $value['water_requirement']
                                            + $value['oil_requirement'] + $value['other_requirement'];

                                        $expensess += $value['electricity_expenses'] + $value['water_expenses']
                                            + $value['oil_expenses'] + $value['other_expenses'];
                                    } ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th colspan="2" style="text-align:right">Total</th>
                                        <th align="right">
                                            <?php echo $elec_requ ? $elec_requ  : ''; ?>
                                        </th>
                                        <th align="right">
                                            <?php echo $expensess ? $expensess  : ''; ?>
                                        </th>
                                        <th>
                                        </th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div> <br><br>
                    <h5>2.5 MANPOWER</h5>
                    <div class="row">
                        <div class="col-sm-12 col-md-12">
                            <table border="1">
                                <thead class="table-dark">
                                    <tr class="text-center">
                                        <th style="width:2%;"> S.No </th>
                                        <th style="width:20%;">Particulars</th>
                                        <th style="width:20%;">No</th>
                                        <th style="width:20%;">Total Wages & Salaries Rs./annum</th>
                                        <th style="width:20%;">Remarks</th>
                                    </tr>
                                </thead>
                                <tbody class="rawadding">
                                    <?php foreach ($man_details as $key => $value1) { ?>
                                        <tr>
                                            <td align="center">1.</td>
                                            <td>Skilled
                                            </td>
                                            <td align="right">
                                                <?php echo $value1['skilled_no']; ?> </td>
                                            <td align="right">
                                                <?php echo $value1['skilled_salaries']; ?> </td>
                                            <td>
                                                <?php echo $value1['skilled_remarks']; ?> </td>
                                        </tr>
                                        <tr>
                                            <td align="center">2.</td>
                                            <td>Semiskilled
                                            </td>
                                            <td align="right">
                                                <?php echo $value1['semiskilled_no']; ?> </td>
                                            <td align="right">
                                                <?php echo $value1['semiskilled_salaries']; ?> </td>
                                            <td>
                                                <?php echo $value1['semiskilled_remarks']; ?> </td>
                                        </tr>
                                        <tr>
                                            <td align="center">3.</td>
                                            <td>Unskilled
                                            </td>
                                            <td align="right">
                                                <?php echo $value1['unskilled_no']; ?> </td>
                                            <td align="right">
                                                <?php echo $value1['unskilled_salaries']; ?> </td>
                                            <td>
                                                <?php echo $value1['unskilled_remarks']; ?> </td>
                                        </tr>
                                        <tr>
                                            <td align="center">4.</td>
                                            <td>Office Staff

                                            </td>
                                            <td align="right">
                                                <?php echo $value1['office_no']; ?> </td>
                                            <td align="right">
                                                <?php echo $value1['office_salaries']; ?> </td>
                                            <td>
                                                <?php echo $value1['office_remarks']; ?> </td>
                                        </tr>
                                    <?php
                                        $numbers              += $value1['skilled_no'] + $value1['semiskilled_no']
                                            + $value1['unskilled_no'] + $value1['office_no'];

                                        $salaries += $value1['skilled_salaries'] + $value1['semiskilled_salaries']
                                            + $value1['unskilled_salaries'] + $value1['office_salaries'];
                                    } ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th colspan="2" style="text-align:right">Total</th>
                                        <th align="right">
                                            <?php echo $numbers ? $numbers  : ''; ?> </th>
                                        <th align="right">
                                            <?php echo $salaries ? $salaries  : ''; ?> </th>
                                        <th>
                                        </th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- PROFITABILITY DETAILS -->
            <div class="step-tab-panel" data-step="step3">
                <h3 class="tab2-head">4.0 COST OF THE PROJECT</h3>
                <div class="container">
                    <h5> 4.1 FIXED CAPITAL</h5>
                    <div class="row">
                        <div class="col-sm-12 col-md-12">
                            <table border="1">
                                <thead class="table-dark">
                                    <tr class="text-center">
                                        <th style="width:2%;"> S.No </th>
                                        <th style="width:10%;">Item</th>
                                        <th style="width:10%;">Value</th>
                                    </tr>
                                </thead>
                                <tbody class="rawadding">
                                    <?php foreach ($fixed_capitals as $key => $value) { ?>
                                        <tr>
                                            <td align="center">1.</td>
                                            <td>Land/Building
                                            </td>
                                            <td align="right">
                                                <?php echo $value['land_value']; ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td align="center">2.</td>
                                            <td>Machinery/Equipment
                                            </td>
                                            <td align="right">
                                                <?php echo $value['machinery_value']; ?> </td>
                                        </tr>
                                        <tr>
                                            <td align="center">3.</td>
                                            <td>Furniture & Fixture
                                            </td>
                                            <td align="right">
                                                <?php echo $value['furniture_value']; ?> </td>
                                        </tr>
                                    <?php
                                        $fixed_cap             += $value['land_value'] + $value['machinery_value']
                                            + $value['furniture_value'];
                                    } ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th colspan="2" style="text-align:right">Total</th>
                                        <th align="right">
                                            <?php echo $fixed_cap ? $fixed_cap  : ''; ?>
                                        </th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div> <br><br>
                    <h5>4.2 WORKING CAPITAL</h5>
                    <div class="row">
                        <div class="col-sm-12 col-md-12">
                            <table border="1">
                                <thead class="table-dark">
                                    <tr class="text-center">
                                        <th style="width:2%;"> S.No </th>
                                        <th style="width:20%;">Item</th>
                                        <th style="width:20%;">Duration</th>
                                        <th style="width:20%;">Quantity</th>
                                        <th style="width:20%;">Value (Rs.)</th>
                                    </tr>
                                </thead>
                                <tbody class="rawadding">
                                    <?php foreach ($working_capital as $key => $value1) { ?>
                                        <tr>
                                            <td align="center">1.</td>
                                            <td>Raw Materials Stock
                                            </td>
                                            <td align="right">
                                                <?php echo $value1['raw_duration']; ?> </td>
                                            <td align="right">
                                                <?php echo $value1['raw_quantity']; ?> </td>
                                            <td align="right">
                                                <?php echo $value1['raw_value']; ?> </td>
                                        </tr>
                                        <tr>
                                            <td align="center">2.</td>
                                            <td>Semi finished goods stock

                                            </td>
                                            <td align="right">
                                                <?php echo $value1['semifinished_duration']; ?> </td>
                                            <td align="right">
                                                <?php echo $value1['semifinished_quantity']; ?> </td>
                                            <td align="right">
                                                <?php echo $value1['semifinished_value']; ?> </td>
                                        </tr>
                                        <tr>
                                            <td align="center">3.</td>
                                            <td>Finished goods stock

                                            </td>
                                            <td align="right">
                                                <?php echo $value1['finished_duration']; ?> </td>
                                            <td align="right">
                                                <?php echo $value1['finished_quantity']; ?> </td>
                                            <td align="right">
                                                <?php echo $value1['finished_value']; ?> </td>
                                        </tr>
                                        <tr>
                                            <td align="center">4.</td>
                                            <td>One month production expenses (Utilisation + Wages + salaries)
                                            </td>
                                            <td align="right">
                                                <?php echo $value1['expenses_duration']; ?> </td>
                                            <td align="right">
                                                <?php echo $value1['expenses_quantity']; ?> </td>
                                            <td align="right">
                                                <?php echo $value1['expenses_value']; ?> </td>
                                        </tr>
                                        <tr>
                                            <td align="center">5.</td>
                                            <td>Bills Receivables

                                            </td>
                                            <td align="right">
                                                <?php echo $value1['bills_duration']; ?> </td>
                                            <td align="right">
                                                <?php echo $value1['bills_quantity']; ?> </td>
                                            <td align="right">
                                                <?php echo $value1['bills_value']; ?> </td>
                                        </tr>
                                    <?php
                                        $durations              += $value1['raw_duration'] + $value1['semifinished_duration']
                                            + $value1['finished_duration'] + $value1['expenses_duration'] + $value1['bills_duration'];

                                        $qtys += $value1['raw_quantity'] + $value1['semifinished_quantity']
                                            + $value1['finished_quantity'] + $value1['expenses_quantity'] + $value1['bills_quantity'];

                                        $vals += $value1['raw_value'] + $value1['semifinished_value']
                                            + $value1['finished_value'] + $value1['expenses_value'] + $value1['bills_value'];
                                    } ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th colspan="2" style="text-align:right">Total</th>
                                        <th align="right">
                                            <?php echo $durations ? $durations  : ''; ?> </th>
                                        <th align="right">
                                            <?php echo $qtys ? $qtys  : ''; ?> </th>
                                        <th align="right">
                                            <?php echo $vals ? $vals  : ''; ?> </th>
                                        </th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                    <h5>4.3 TOTAL COST OF PROJECT</h5>
                    <div class="row">
                        <div class="col-sm-12 col-md-12">
                            <table border="1">
                                <thead class="table-dark">
                                    <tr class="text-center">
                                        <th style="width:2%;"> S.No </th>
                                        <th style="width:20%;">Particulars</th>
                                        <th style="width:20%;">Value</th>
                                    </tr>
                                </thead>
                                <tbody class="rawadding">
                                    <?php foreach ($project as $key => $value3) { ?>
                                        <tr>
                                            <td align="center">1.</td>
                                            <td>Fixed Capital (Total of Item No.4.1)
                                            </td>
                                            <td align="right">
                                                <?php echo $fixed; ?> </td>
                                        </tr>
                                        <tr>
                                            <td align="center">2.</td>
                                            <td>Working Capital (Total of Item No.4.2)

                                            </td>
                                            <td align="right">
                                                <?php echo $val; ?> </td>
                                        </tr>
                                        <tr>
                                            <td align="center">3.</td>
                                            <td>Preliminary & Pre-operative expenses

                                            </td>
                                            <td align="right">
                                                <?php echo $value3['preliminary_expenses']; ?> </td>
                                        <?php
                                        $no_s              += $fixed + $val
                                            + $value3['preliminary_expenses'];
                                    } ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th colspan="2" style="text-align:right">Total</th>
                                        <th align="right">
                                            <?php echo $no_s ? $no_s  : ''; ?> </th>
                                        </th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                    <h5>4.4 MEANS OF FINANCE</h5>
                    <div class="row">
                        <div class="col-sm-12 col-md-12">
                            <table border="1">
                                <thead class="table-dark">
                                    <tr class="text-center">
                                        <th style="width:2%;"> S.No </th>
                                        <th style="width:20%;">Particulars</th>
                                        <th style="width:20%;">Value (Rs.)</th>
                                        <th style="width:20%;">Remarks</th>
                                    </tr>
                                </thead>
                                <tbody class="rawadding">
                                    <?php foreach ($means_finance as $key => $value4) { ?>
                                        <tr>
                                            <td align="center">1.</td>
                                            <td>Working Capital Finance

                                            </td>
                                            <td align="right">
                                                <?php echo $value4['capital_finance_value']; ?> </td>
                                            <td>
                                                <?php echo $value4['capital_finance_remark']; ?> </td>
                                        </tr>
                                        <tr>
                                            <td align="center">2.</td>
                                            <td>Subsidy

                                            </td>
                                            <td align="right">
                                                <?php echo $value4['subsidy_value']; ?> </td>
                                            <td>
                                                <?php echo $value4['subsidy_remark']; ?> </td>
                                        </tr>
                                        <tr>
                                            <td align="center">3.</td>
                                            <td>Term Loan

                                            </td>
                                            <td align="right">
                                                <?php echo $value4['loan_value']; ?> </td>
                                            <td>
                                                <?php echo $value4['loan_remark']; ?> </td>
                                        </tr>
                                        <tr>
                                            <td align="center">4.</td>
                                            <td>Own Investment

                                            </td>
                                            <td align="right">
                                                <?php echo $value4['investment_value']; ?> </td>
                                            <td>
                                                <?php echo $value4['investment_remark']; ?> </td>
                                        </tr>
                                        <tr>
                                            <td align="center">5.</td>
                                            <td>Any Other

                                            </td>
                                            <td align="right">
                                                <?php echo $value4['other_value']; ?> </td>
                                            <td>
                                                <?php echo $value4['other_remark']; ?> </td>
                                        </tr>
                                    <?php
                                        $workings              += $value4['capital_finance_value'] + $value4['subsidy_value']
                                            + $value4['loan_value'] + $value4['investment_value'] + $value4['other_value'];
                                    } ?>
                                </tbody>
                                <tfoot>
                                    <tr>

                                        <th colspan="2" style="text-align:right">Total</th>
                                        <th align="right">
                                            <?php echo $workings ? $workings  : ''; ?> </th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                    <h5>4.5 PROJECT PROFITABILITY ANALYSIS</h5>
                    <div class="row">
                        <div class="col-sm-12 col-md-12">
                            <table border="1">
                                <thead class="table-dark">
                                    <tr class="text-center">
                                        <th style="width:2%;"> S.No </th>
                                        <th style="width:20%;">Item</th>
                                        <th style="width:20%;">Value</th>
                                    </tr>
                                </thead>
                                <tbody class="rawadding">
                                    <?php foreach ($project as $key => $value5) { ?>
                                        <tr>
                                            <td align="center">1.</td>
                                            <td>Sales Revenue
                                            </td>
                                            <td align="right">
                                                <?php echo $value5['sales_revenue']; ?> </td>
                                        </tr>
                                        <tr>
                                            <td align="center">2.</td>
                                            <td>Manufacturing Expenses (2.3+2.4+2.5)

                                            </td>
                                            <td align="right">
                                                <?php echo $value5['manufacturing_expenses']; ?> </td>
                                        </tr>
                                        <tr>
                                            <td align="center">3.</td>
                                            <td>Selling & Distribution Expenses

                                            </td>
                                            <td align="right">
                                                <?php echo $value5['distribution_expenses']; ?> </td>
                                        </tr>
                                        <tr>
                                            <td align="center">4.</td>
                                            <td>Administrative Expenses

                                            </td>
                                            <td align="right">
                                                <?php echo $value5['administrative_expenses']; ?> </td>
                                        </tr>
                                        <tr>
                                            <td align="center">5.</td>
                                            <td>Interest for Term Loan and Working Capital

                                            </td>
                                            <td align="right">
                                                <?php echo $value5['interest_loan']; ?> </td>
                                        </tr>
                                        <tr>
                                            <td align="center">6.</td>
                                            <td>Depreciation

                                            </td>
                                            <td align="right">
                                                <?php echo $value5['depreciation']; ?> </td>
                                        </tr>
                                        <tr>
                                            <td align="center">7.</td>
                                            <td>Gross Profit

                                            </td>
                                            <td align="right">
                                                <?php echo $value5['gross_profit']; ?> </td>
                                        </tr>
                                        <tr>
                                            <td align="center">8.</td>
                                            <td>Income tax

                                            </td>
                                            <td align="right">
                                                <?php echo $value5['income_tax']; ?> </td>
                                        </tr>
                                        <tr>
                                            <td align="center">9.</td>
                                            <td>Net profit

                                            </td>
                                            <td align="right">
                                                <?php echo $value5['net_profit']; ?> </td>
                                        </tr>
                                    <?php   } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Supplementary Details -->
            <h3>Supplementary Details</h3>
            <div class="step-tab-panel" data-step="step3">
                <div class="container">
                    <h5>5.0 SUPPLEMENTARY DETAILS</h5>
                    <div class="row">
                        <div class="col-sm-12 col-md-12">
                            <table border="1">
                                <thead class="table-dark">
                                    <tr class="text-center">
                                        <th style="width:2%;"> S.No </th>
                                        <th style="width:15%;"> Give Details </th>
                                        <th style="width:15%;"></th>
                                    </tr>
                                </thead>
                                <tbody class="rawadding">
                                    <?php foreach ($project as $key => $value) { ?>
                                        <tr>
                                            <td align="center">5.1</td>
                                            <td>Do you own House/Property etc. ?
                                            </td>
                                            <td align="right">
                                                <?php echo ($value['own_house'] == 1) ? 'Yes' : 'No'; ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td align="center">5.2</td>
                                            <td>Own Insurance Policy
                                            </td>
                                            <td align="right">
                                                <?php echo $value['own_insurance_policy']; ?> </td>
                                        </tr>
                                        <tr>
                                            <td align="center">5.3</td>
                                            <td>Any Interest in other firms

                                            </td>
                                            <td align="right">
                                                <?php echo $value['interest_other_firms']; ?> </td>
                                        </tr>
                                        <tr>
                                            <td align="center">5.4</td>
                                            <td>Present Monthly Income
                                            </td>
                                            <td align="right">
                                                <?php echo 'Rs.' . $value['monthly_income']; ?> </td>
                                        </tr>
                                    <?php  } ?>
                                </tbody>

                            </table>
                        </div>
                    </div> <br><br>
                </div>
            </div>
            <!-- Reference-details -->
            <h3>Reference Details</h3>
            <div class="step-tab-panel" data-step="step3">
                <div class="container">
                    <h5>6.0 REFERENCES</h5>
                    <div class="row">
                        <div class="col-sm-12 col-md-12">
                            <table border="1">
                                <thead class="table-dark">
                                    <tr class="text-center">
                                        <th style="width:2%;"> S.No </th>
                                        <th style="width:20%;"> Name</th>
                                        <th style="width:20%;">Address</th>
                                        <th style="width:20%;">Occupation</th>
                                    </tr>
                                </thead>
                                <tbody class="eduadding">

                                    <?php
                                    foreach ($user_references as $key => $value) {
                                    ?>
                                        <tr class="edupresent_row_in_post">
                                            <td align="center"><?php echo ($key + 1); ?>.</td>

                                            <td><?php echo $value['name']; ?>
                                            </td>
                                            <td><?php echo $value['address']; ?>
                                            </td>
                                            <td><?php echo $value['occupation']; ?>
                                            </td>
                                        </tr>
                                    <?php }    ?>

                                </tbody>
                            </table>
                        </div>
                    </div> <br><br>
                </div>
            </div>
            <!-- Payment Details -->
            <h3>Payment Details</h3>
            <div class="step-tab-panel" data-step="step3">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-md-12">
                            <table border="1" style="width:100%;">
                                <thead class="table-dark">
                                    <tr class="text-center">
                                        <th colspan="2"> Payment Details</th>
                                    </tr>
                                </thead>
                                <tbody class="eduadding">
                                    <tr>
                                        <th style="width:50%;">Payment Amount : </th>
                                        <td style="width:50%;">Rs.&nbsp;<?php echo $basics['transaction_amount']; ?></td>
                                    </tr>
                                    <tr>
                                        <th style="width:50%;">Transaction Number. : </th>
                                        <td style="width:50%;"><?php echo $basics['transaction_number']; ?></td>
                                    </tr>
                                    <tr>
                                        <th style="width:50%;">Transaction Date : </th>
                                        <td style="width:50%;"><?php echo date('d-m-Y', strtotime($basics['transaction_date'])); ?></td>
                                    </tr>
                                    <tr>
                                        <th style="width:50%;">Payment Status : </th>
                                        <td style="width:50%;"><?php echo ($basics['payment_status'] == 1) ? '<span style="color:green;"><b>Success</b></span>' : ''; ?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div> <br><br>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function print_receipt() {
        $('.pdfreport').show();
        var content = $("#div_vc").html();
        var pwin = window.open("MSL", 'print_content',
            'width=900,height=1000,scrollbars=yes,location=0,menubar=no,toolbar=no');
        pwin.document.open();
        pwin.document.write('<html><head></head><body onload="window.print()"><tr><td>' + content +
            '</td></tr></body></html>');
        pwin.document.close();
        $('.pdfreport').hide();
    }
</script>