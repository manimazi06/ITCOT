<?php

$fmt = new NumberFormatter('en-IN', NumberFormatter::CURRENCY);
 $fmt->setAttribute(NumberFormatter::FRACTION_DIGITS, 2);
 $fmt->setSymbol(NumberFormatter::CURRENCY_SYMBOL, ''); 

?>

<br>
<div class="container" style="background-color:white;"><br><br>
<div class="mb-3 mt-3 text-right" style="text-align:right;">
		<?php echo $this->Html->link(('<i class="fas fa-download"></i>&nbsp; Download pdf'), ['controller'=>'Pdfgenerator','action' => 'downloadpdf',$id], ['escape' => false, 'class' => 'btn btn-info rounded-pill px-4 waves-effect waves-light',]); ?>
        <a class="btn waves-effect waves-btn-primary text-success btn-sm" onClick="print_receipt('div_vc')"><i class="fa fa-print"></i> Print</a>
    </div>


<div class="uniongov-content text-start">
    <h2 style="text-align: center;"><u>Project Report - Application No : <?php echo $basics['project_no'] ?></u></h2>
    <div class="table-responsive">
        <h3>General Details</h3>
        <hr style="width:50% ;">
        <table class="table table-hover table-bordered table-advanced display" style="width: 100%">
            <thead class="table-dark">
                <tr class="text-center">
                    <th>Prefix</th>
                    <th>Name</th>
                    <th>Date of Birth</th>
                    <th>Category</th>
                    <th>Educational Details</th>
                    <th> Mobile No</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>      
                <tr>
                    <td align="center"><?= $basics['prefix']; ?></td>
                    <td align="center"><?= $basics['name']; ?></td>
                    <td align="center"><?= date('d-F-Y', strtotime($basics['dob'])); ?></td>
                    <td align="center"><?= $basics->category->name; ?></td>
                    <td align="center"><?= $basics->education->name; ?></td>
                    <td align="center"><?= $basics['mobile_no']; ?></td>
                    <td align="center"><?= $basics['email']; ?></td>
                </tr>
            </tbody>
        </table>
        <hr>
    </div>
    <!-- ENTITY DETAILS -->
    <div class="table-responsive ">
        <h3>Unit / Entity Details</h3>
        <hr style="width:50% ;">
        <table class="table table-hover table-bordered table-advanced display" style="width: 100%">
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
                    <td align="center"><?= $basics['project_cost']?ltrim($fmt->formatCurrency((float)$basics['project_cost'],'INR'),'₹'):'0.00'; ?></td>
                    <td align="right"><?= $basics['loan_amount']?ltrim($fmt->formatCurrency((float)$basics['loan_amount'],'INR'),'₹'):'0.00'; ?></td>
                    <td align="center"><?= $basics->loan_type->name; ?></td>
                    <td align="center"><?= $basics['loan_purpose']['name']; ?></td>
                </tr>
            </tbody>
        </table>
        <hr>
    </div>

    <!-- EDUCATION QUALIFICATION -->
    <div class="table-responsive ">
        <h3>Educational Qualification / Special Training / Work Experience</h3>
        <hr style="width:50% ;">
        <h5>1.1 Educational Qualification</h5>
        <table class="table table-hover table-bordered table-advanced display" style="width: 100%">
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
                <?php
                foreach ($education_details as $key => $value) {                 
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
                <table class="table table-bordered responsive">
                    <thead class="table-dark">
                        <tr class="text-center">
                            <th style="width:2%;"> S.No </th>
                            <th style="width:15%;">Training In</th>
                            <th style="width:30%;">Institute</th>
                            <th style="width:11%;">From Date</th>
							<th style="width:11%;">To Date</th>
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
                                <td>
                                    <?php echo $value1['training_in']; ?>
                                </td>
                                <td>
                                    <?php echo $value1['institute']; ?>
                                </td>
                                <td>
                                    <?php echo date('d-m-Y',strtotime($value1['from_date']))? date('d-m-Y',strtotime($value1['from_date'])):''; ?>
                                </td>
                                <td>
                                    <?php echo date('d-m-Y',strtotime($value1['to_date'])) ? date('d-m-Y',strtotime($value1['to_date'])):''; ?>
                                </td>
                                <td>
                                    <?php echo $value1['duration']; ?>
                                </td>
                                <td>
                                    <?php echo $value1['achievement']; ?>
                                </td>                               
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div><br></br>
        <!-- 1.3-EDUCATIONAL QUALIFICATION -->
        <h5>1.3 Work Experience (Past and Present)</h5>
        <div class="row">
            <div class="col-sm-12 col-md-12">
                <table class="table table-bordered responsive">
                    <thead class="table-dark">
                        <tr class="text-center">
                            <th style="width:2%;"> S.No </th>
                            <th style="width:30%;">Organisation</th>
                            <th style="width:15%;">Position</th>
                            <th style="width:15%;">Nature of Work</th>
                            <th style="width:11%;">From Date</th>
							<th style="width:11%;">To Date</th>
                            <th style="width:15%;">Duration</th>                      
                        </tr>
                    </thead>
                    <tbody class="workadding">
                        <?php foreach ($work_details as $key2 => $value2) {  ?>
                            <tr class="workpresent_row_in_post">
                                <td align="center"><?php echo ($key2 + 1); ?>.</td>
                                <td>
                                    <?php echo $value2['organisation']; ?>
                                </td>
                                <td>
                                    <?php echo $value2['position']; ?>
                                </td>
                                <td>
                                    <?php echo $value2['nature_work']; ?>
                                </td>
                                <td>
                                    <?php echo date('d-m-Y',strtotime($value1['from_date'])) ?date('d-m-Y',strtotime($value1['from_date'])):''; ?>
                                </td>
                                <td>
                                    <?php echo date('d-m-Y',strtotime($value1['to_date']))? date('d-m-Y',strtotime($value1['to_date'])):''; ?>
                                </td>
                                <td>
                                    <?php echo $value2['duration']; ?>
                                </td>                             
                            </tr>
                        <?php }  ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div><br><br>
    <!-- MANUFACTURING DETAILS -->
    <div class="table-responsive ">
        <h3>Manufacturing|Machinery|Raw materials</h3>
        <hr>
        <div class="step-tab-panel" data-step="step3">
            <h3 class="tab2-head">2.0 DETAILS OF PROPOSED PROJECT: Manufacturing / Servicing</h3>
            <hr style="width: 60%; margin-top: 5px;" />
            <div class="container">
                <h5>2.1 PRODUCTION PROGRAMME</h5>
                <div class="row">
                    <div class="col-sm-12 col-md-12">
                        <table class="table table-bordered responsive">
                            <thead class="table-dark">
                                <tr class="text-center">
                                    <th style="width:2%;"> S.No </th>
                                    <th style="width:15%;"> Item</th>
                                    <th style="width:30%;">Total Quantity / Year</th>
                                    <th style="width:11%;">Unit</th>
                                    <th style="width:15%;">Sales Revenue / Year</th>
                                    <th style="width:15%;">Capacity Utilisation</th>                                   
                                </tr>
                            </thead>
                            <tbody class="eduadding">
                                <?php  
						$no=1;
					foreach ($pro_details as $key => $value) { ?>
                                    <tr class="edupresent_row_in_post">
                                        <td align="center"><?php echo ($no); ?>.</td>
                                        <td>
                                            <?php echo $value['item']; ?>
                                        </td>
                                        <td style="text-align:right;"><?php echo $value['quantity']?ltrim($fmt->formatCurrency((float)$value['quantity'],'INR'),'₹'):'0.00'; ?>
                                        </td>
                                        <td><?php echo $value['units']['name']; ?>
                                        <td style="text-align:right;"><?php echo $value['revenue_year']?ltrim($fmt->formatCurrency((float)$value['revenue_year'],'INR'),'₹'):'0.00'; ?>
                                        </td>
                                        <td><?php echo $value['capacity_utilisation']; ?>
                                        </td>                                      
                                    </tr>
                                <?php
					$pro_value +=$value['revenue_year'];
				 } 
                                
                                ?>                            
                            </tbody>

                            <tfoot>
									<tr>
										<th colspan="4" style="text-align:right">Total</th>
										<th style="text-align:right;">
											<?php echo $pro_value?ltrim($fmt->formatCurrency((float)$pro_value,'INR'),'₹'):'0.00'; ?>
										</th>										
									</tr>
								</tfoot>
                        </table>
                    </div>
                </div> <br><br>
                <h5>2.2 MACHINERY / EQUIPMENT</h5>
                <div class="row">
                    <div class="col-sm-12 col-md-12">
                        <table class="table table-bordered responsive">
                            <thead class="table-dark">
                                <tr class="text-center">
                                    <th style="width:2%;"> S.No </th>
                                    <th style="width:15%;">Description</th>
                                    <th style="width:30%;">Quantity required in Nos.</th>
                                    <th style="width:15%;">Price</th>
                                    <th style="width:15%;">Total Value</th>
                                    <th style="width:30%;">Name</th>
                                    <th style="width:30%;">Address</th>                                   
                                </tr>
                            </thead>
                            <tbody class="trainingadding">
                                <?php  foreach ($mach_details as $key1 => $value1) {   ?>
                                    <tr class="trainingpresent_row_in_post">
                                        <td align="center"><?php echo ($key1 + 1); ?>.</td>
                                        <td>
                                            <?php echo $value1['description']; ?>
                                        </td>
                                        <td style="text-align:right;">
                                            <?php echo $value1['quantity']?ltrim($fmt->formatCurrency((float)$value1['quantity'],'INR'),'₹'):'0.00'; ?>
                                        </td>
                                        <td style="text-align:right;">
                                            <?php echo $value1['price']?ltrim($fmt->formatCurrency((float)$value1['price'],'INR'),'₹'):'0.00'; ?>
                                        </td>
                                        <td style="text-align:right;">
                                            <?php echo $value1['total_value']?ltrim($fmt->formatCurrency((float)$value1['total_value'],'INR'),'₹'):'0.00'; ?>
                                        </td>
                                        <td>
                                            <?php echo $value1['suppliername']; ?>
                                        </td>
                                        <td>
                                                <?php echo $value1['supplieraddress']; ?>
                                         </td>                                      
                                    </tr>
                                    <?php
									$mac_value +=$value1['total_value'];
								 } ?>

								</tbody>
								<tfoot>
									<tr>
										<th colspan="4" style="text-align:right">Total</th>
										<th style="text-align:right;">
											<?php echo $mac_value ?ltrim($fmt->formatCurrency((float)$mac_value,'INR'),'₹'):'0.00'; ?>
										</th>										
									</tr>
								</tfoot>
                        </table>
                    </div>
                </div><br></br>
                <h5>2.3 RAW MATERIALS</h5>
                <div class="row">
                    <div class="col-sm-12 col-md-12">
                        <table class="table table-bordered responsive">
                            <thead class="table-dark">
                                <tr class="text-center">
                                    <th style="width:2%;" rowspan="3"> S.No </th>
                                    <th style="width:20%;" rowspan="3">Item</th>
                                    <th style="width:30%;" colspan="3">Total Annual Requirement</th>
                                    <th style="width:30%;" rowspan="3">Sales Revenue / Year</th>
                                    <th style="width:15%;" rowspan="3">Capacity Utilisation</th>                                    
                                </tr>
                                <tr class="text-center">
                                    <th style="width:15%;">Quantity</th>
                                    <th style="width:10%;">Unit </th>
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
                                        <td style="text-align:right;">
                                            <?php echo $value2['quantity']?ltrim($fmt->formatCurrency((float)$value2['quantity'],'INR'),'₹'):'0.00'; ?>
                                        </td>
                                        <td>
												<?php echo $value2['units']['name']; ?>
											</td>
                                        <td style="text-align:right;">
                                            <?php echo $value2['value']?ltrim($fmt->formatCurrency((float)$value2['value'],'INR'),'₹'):'0.00'; ?>
                                        </td>
                                        <td style="text-align:right;">
                                            <?php echo $value2['revenue_year']?ltrim($fmt->formatCurrency((float)$value2['revenue_year'],'INR'),'₹'):'0.00'; ?>
                                        </td>
                                        <td>
                                            <?php echo $value2['capacity_utilisation']; ?>
                                        </td>                                     
                                    </tr>
                                    <?php
									$raw_value +=$value2['value'];
									$raw_revenue +=$value2['revenue_year'];
								}
									?>
								</tbody>
								<tfoot>
									<tr>
										<th colspan="4" style="text-align:right">Total</th>
										<th style="text-align:right;">
											<?php echo $raw_value ?ltrim($fmt->formatCurrency((float)$raw_value,'INR'),'₹'):'0.00'; ?>
										</th>										
										<th style="text-align:right;">
											<?php echo $raw_revenue ?ltrim($fmt->formatCurrency((float)$raw_revenue,'INR'),'₹'):'0.00'; ?>
										</th>										
									</tr>
								</tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- MANPOWER DETAILS -->
    <div class="table-responsive ">
        <h3>Utilities and Man-Power Details</h3>
        <div class="step-tab-panel" data-step="step3">
            <hr>
            <div class="container">
                <h5>2.4 UTILITIES</h5>
                <div class="row">
                    <div class="col-sm-12 col-md-12">
                        <table class="table table-bordered responsive">
                            <thead class="table-dark">
                                <tr class="text-center">
                                    <th style="width:2%;"> S.No </th>
                                    <th style="width:20%;">Particulars</th>
                                    <th style="width:20%;">Annual Requirement</th>
                                    <th style="width:9%;">Unit</th>
                                    <th style="width:20%;">Total Annual Expenses</th>
                                    <th style="width:20%;">Remarks</th>
                                </tr>
                            </thead>
                            <tbody class="rawadding">
                                <?php foreach ($util_details as $key => $value) { ?>
                                    <tr>
                                        <td align="center">1.</td>
                                        <td>Electricity</td>
                                        <td><?php echo $value['electricity_requirement']; ?> </td>
                                        <td><?php echo $units[$value['electricity_unit_id']]; ?></td>
                                        <td style="text-align:right;"><?php echo $value['electricity_expenses']?ltrim($fmt->formatCurrency((float)$value['electricity_expenses'],'INR'),'₹'):'0.00'; ?> </td>
                                        <td><?php echo $value['electricity_remarks']; ?> </td>
                                    </tr>
                                    <tr>
                                        <td align="center">2.</td>
                                        <td>Water</td>
                                        <td><?php echo $value['water_requirement']; ?> </td>
                                        <td><?php echo $units[$value['water_unit_id']]; ?></td>
                                        <td style="text-align:right;"><?php echo $value['water_expenses']?ltrim($fmt->formatCurrency((float)$value['water_expenses'],'INR'),'₹'):'0.00'; ?> </td>
                                        <td><?php echo $value['water_remarks']; ?> </td>
                                    </tr>
                                    <tr>
                                    <td align="center">3.</td>
											<td>Coal /Oil
											</td>
											<td>
												<?php echo $value['oil_requirement']; ?> </td>
											<td><?php echo $units[$value['oil_unit_id']]; ?></td>
											<td style="text-align:right;">
												<?php echo $value['oil_expenses']?ltrim($fmt->formatCurrency((float)$value['oil_expenses'],'INR'),'₹'):'0.00'; ?> </td>
											<td>
												<?php echo $value['oil_remarks']; ?> </td>
                                    </tr>
                                    <tr>
                                    <td align="center">4.</td>
											<td>Any Other
											</td>
											<td>
												<?php echo $value['other_requirement']; ?> </td>
											<td><?php echo $units[$value['other_unit_id']]; ?></td>
											<td style="text-align:right;">
												<?php echo $value['other_expenses']?ltrim($fmt->formatCurrency((float)$value['other_expenses'],'INR'),'₹'):'0.00'; ?> </td>
											<td>
												<?php echo $value['other_remarks']; ?> </td>
                                    </tr>
                                <?php
                                    $elec_req  += $value['electricity_requirement'] + $value['water_requirement']
                                        + $value['oil_requirement'] + $value['other_requirement'];

                                    $expenses += $value['electricity_expenses'] + $value['water_expenses']
                                        + $value['oil_expenses'] + $value['other_expenses'];                                   
                                } ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th colspan="2" style="text-align:right">Total</th>
                                    <th>
                                        <?php echo $elec_req ?ltrim($fmt->formatCurrency((float)$elec_req,'INR'),'₹'):'0.00'; ?>
                                    </th>
                                    <th></th>
                                    <th style="text-align:right;">
                                        <?php echo $expenses ?ltrim($fmt->formatCurrency((float)$expenses,'INR'),'₹'):'0.00'; ?>
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
                        <table class="table table-bordered responsive">
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
                                        <td>
                                            <?php echo $value1['skilled_no']; ?> </td>
                                        <td style="text-align:right;">
                                            <?php echo $value1['skilled_salaries']?ltrim($fmt->formatCurrency((float)$value1['skilled_salaries'],'INR'),'₹'):'0.00'; ?> </td>
                                        <td>
                                            <?php echo $value1['skilled_remarks']; ?> </td>
                                    </tr>
                                    <tr>
                                        <td align="center">2.</td>
                                        <td>Semiskilled
                                        </td>
                                        <td>
                                            <?php echo $value1['semiskilled_no']; ?> </td>
                                        <td style="text-align:right;">
                                            <?php echo $value1['semiskilled_salaries']?ltrim($fmt->formatCurrency((float)$value1['semiskilled_salaries'],'INR'),'₹'):'0.00'; ?> </td>
                                        <td>
                                            <?php echo $value1['semiskilled_remarks']; ?> </td>
                                    </tr>
                                    <tr>
                                        <td align="center">3.</td>
                                        <td>Unskilled
                                        </td>
                                        <td>
                                            <?php echo $value1['unskilled_no']; ?> </td>
                                        <td style="text-align:right;">
                                            <?php echo $value1['unskilled_salaries']?ltrim($fmt->formatCurrency((float)$value1['unskilled_salaries'],'INR'),'₹'):'0.00'; ?> </td>
                                        <td>
                                            <?php echo $value1['unskilled_remarks']; ?> </td>
                                    </tr>
                                    <tr>
                                        <td align="center">4.</td>
                                        <td>Office Staff
                                        </td>
                                        <td>
                                            <?php echo $value1['office_no']; ?> </td>
                                        <td style="text-align:right;">
                                            <?php echo $value1['office_salaries']?ltrim($fmt->formatCurrency((float)$value1['office_salaries'],'INR'),'₹'):'0.00'; ?> </td>
                                        <td>
                                            <?php echo $value1['office_remarks']; ?> </td>
                                    </tr>
                                <?php
                                    $no              += $value1['skilled_no'] + $value1['semiskilled_no']
                                        + $value1['unskilled_no'] + $value1['office_no'];

                                    $salaries += $value1['skilled_salaries'] + $value1['semiskilled_salaries']
                                        + $value1['unskilled_salaries'] + $value1['office_salaries'];
                                } ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th colspan="2" style="text-align:right">Total</th>
                                    <th>
                                        <?php echo $no ?ltrim($fmt->formatCurrency((float)$no,'INR'),'₹'):'0.00'; ?> </th>
                                    <th style="text-align:right;">
                                        <?php echo $salaries ?ltrim($fmt->formatCurrency((float)$salaries,'INR'),'₹'):'0.00'; ?> </th>
                                    <th>
                                    </th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- PROFITABILITY DETAILS -->
    <div class="table-responsive ">
        <h3>Project profitability Details</h3>
        <hr>
        <div class="step-tab-panel" data-step="step3">
            <h4 class="tab2-head">4.0 COST OF THE PROJECT</h4>
            <hr>
            <div class="container">
                <h5> 4.1 FIXED CAPITAL</h5>
                <div class="row">
                    <div class="col-sm-12 col-md-12">
                        <table class="table table-bordered responsive">
                            <thead class="table-dark">
                                <tr class="text-center">
                                    <th style="width:2%;"> S.No </th>
                                    <th style="width:50%;">Item</th>
                                    <th style="width:10%;">Value</th>                                  

                                </tr>
                            </thead>
                            <tbody class="rawadding">
                                <?php foreach ($fixed_capitals as $key => $value) { ?>
                                    <tr>
                                        <td align="center">1.</td>
                                        <td>Land/Building
                                        </td>
                                        <td style="text-align:right;">
                                            <?php echo $value['land_value']?ltrim($fmt->formatCurrency((float)$value['land_value'],'INR'),'₹'):'0.00'; ?>
                                        </td>                                        
                                    </tr>
                                    <tr>
                                        <td align="center">2.</td>
                                        <td>Machinery/Equipment
                                        </td>
                                        <td style="text-align:right;">
                                            <?php echo $value['machinery_value']?ltrim($fmt->formatCurrency((float)$value['machinery_value'],'INR'),'₹'):'0.00'; ?> </td>                                        
                                    </tr>
                                    <tr>
                                        <td align="center">3.</td>
                                        <td>Furniture & Fixture
                                        </td>
                                        <td style="text-align:right;">
                                            <?php echo $value['furniture_value']?ltrim($fmt->formatCurrency((float)$value['furniture_value'],'INR'),'₹'):'0.00'; ?> </td>                                        
                                    </tr>                                   
                                <?php
                                    $fixed              += $value['land_value'] + $value['machinery_value']
                                        + $value['furniture_value'];
                                } ?>
                            </tbody>
                            <tfoot>
                                <tr>

                                    <th colspan="2" style="text-align:right">Total</th>
                                    <th style="text-align:right;">
                                        <?php echo $fixed ?ltrim($fmt->formatCurrency((float)$fixed,'INR'),'₹'):'0.00'; ?>
                                    </th>                                 
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div> <br><br>
                <h5>4.2 WORKING CAPITAL</h5>
                <div class="row">
                    <div class="col-sm-12 col-md-12">
                        <table class="table table-bordered responsive">
                            <thead class="table-dark">
                                <tr class="text-center">
                                    <th style="width:2%;"> S.No </th>
                                    <th style="width:20%;">Item</th>
                                    <th style="width:20%;">Duration</th>
                                    <th style="width:20%;">Quantity</th>
                                    <th style="width:20%;">Units</th>
                                    <th style="width:20%;">Value (Rs.)</th>
                                </tr>
                            </thead>
                            <tbody class="rawadding">
									<?php foreach ($working_capital as $key => $value1) { ?>
										<tr>
											<td align="center">1.</td>
											<td>Raw Materials Stock
											</td>
											<td>
												<?php echo $value1['raw_duration']; ?> </td>
											<td>
												<?php echo $value1['raw_quantity']?ltrim($fmt->formatCurrency((float)$value1['raw_quantity'],'INR'),'₹'):'0.00'; ?> </td>
												<td><?php echo $units[$value1['raw_unit_id']]; ?></td>
											<td style="text-align:right;">
												<?php echo $value1['raw_value']?ltrim($fmt->formatCurrency((float)$value1['raw_value'],'INR'),'₹'):'0.00'; ?> </td>
										</tr>
										<tr>
											<td align="center">2.</td>
											<td>Semi finished goods stock

											</td>
											<td>
												<?php echo $value1['semifinished_duration']; ?> </td>
											<td>
												<?php echo $value1['semifinished_quantity']?ltrim($fmt->formatCurrency((float)$value1['semifinished_quantity'],'INR'),'₹'):'0.00'; ?> </td>
												<td><?php echo $units[$value1['semifinished_unit_id']]; ?></td>
											<td style="text-align:right;">
												<?php echo $value1['semifinished_value']?ltrim($fmt->formatCurrency((float)$value1['semifinished_value'],'INR'),'₹'):'0.00'; ?> </td>
										</tr>
										<tr>
											<td align="center">3.</td>
											<td>Finished goods stock

											</td>
											<td>
												<?php echo $value1['finished_duration']; ?> </td>
											<td>
												<?php echo $value1['finished_quantity']?ltrim($fmt->formatCurrency((float)$value1['finished_quantity'],'INR'),'₹'):'0.00'; ?> </td>
												<td><?php echo $units[$value1['finished_unit_id']]; ?></td>
											<td style="text-align:right;">
												<?php echo $value1['finished_value']?ltrim($fmt->formatCurrency((float)$value1['finished_value'],'INR'),'₹'):'0.00'; ?> </td>
										</tr>
										<tr>
											<td align="center">4.</td>
											<td>One month production expenses (Utilisation + Wages + salaries)

											</td>
											<td>
												<?php echo $value1['expenses_duration']; ?> </td>
											<td>
												<?php echo $value1['expenses_quantity']?ltrim($fmt->formatCurrency((float)$value1['expenses_quantity'],'INR'),'₹'):'0.00'; ?> </td>
												<td><?php echo $units[$value1['expenses_unit_id']]; ?></td>
											<td style="text-align:right;">
												<?php echo $value1['expenses_value']?ltrim($fmt->formatCurrency((float)$value1['expenses_value'],'INR'),'₹'):'0.00'; ?> </td>
										</tr>
										<tr>
											<td align="center">5.</td>
											<td>Bills Receivables

											</td>
											<td>
												<?php echo $value1['bills_duration']; ?> </td>
											<td>
												<?php echo $value1['bills_quantity']?ltrim($fmt->formatCurrency((float)$value1['bills_quantity'],'INR'),'₹'):'0.00'; ?> </td>
												<td><?php echo $units[$value1['bills_unit_id']]; ?></td>
											<td style="text-align:right;">
												<?php echo $value1['bills_value']?ltrim($fmt->formatCurrency((float)$value1['bills_value'],'INR'),'₹'):'0.00'; ?> </td>
										</tr>
									<?php
										$duration              += $value1['raw_duration'] + $value1['semifinished_duration']
											+ $value1['finished_duration'] + $value1['expenses_duration'] + $value1['bills_duration'];

										$qty += $value1['raw_quantity'] + $value1['semifinished_quantity']
											+ $value1['finished_quantity'] + $value1['expenses_quantity'] + $value1['bills_quantity'];

										$val += $value1['raw_value'] + $value1['semifinished_value']
											+ $value1['finished_value'] + $value1['expenses_value'] + $value1['bills_value'];

										
									} ?>
								</tbody>
								<tfoot>
									<tr>
										<th colspan="2" style="text-align:right">Total</th>
										<th>
											<?php echo $duration ?ltrim($fmt->formatCurrency((float)$duration,'INR'),'₹'):'0.00'; ?> </th>
										<th>
											<?php echo $qty ?ltrim($fmt->formatCurrency((float)$qty,'INR'),'₹'):'0.00'; ?> </th>
										<th></th>
										<th style="text-align:right;">
											<?php echo $val ? ltrim($fmt->formatCurrency((float)$val,'INR'),'₹'):'0.00'; ?> </th>
										</th>
									</tr>
								</tfoot>
                        </table>
                    </div>
                </div>
                <h5>4.3 TOTAL COST OF PROJECT</h5>
                <div class="row">
                    <div class="col-sm-12 col-md-12">
                        <table class="table table-bordered responsive">
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
                                        <td style="text-align:right;">
                                            <?php echo $fixed ? ltrim($fmt->formatCurrency((float)$fixed,'INR'),'₹'):'0.00'; ?> </td>                                     
                                    </tr>
                                    <tr>
                                        <td align="center">2.</td>
                                        <td>Working Capital (Total of Item No.4.2)

                                        </td>
                                        <td style="text-align:right;">
                                            <?php echo $val? ltrim($fmt->formatCurrency((float)$val,'INR'),'₹'):'0.00'; ?> </td>                                       
                                    </tr>
                                    <tr>
                                        <td align="center">3.</td>
                                        <td>Preliminary & Pre-operative expenses

                                        </td>
                                        <td style="text-align:right;">
                                            <?php echo $value3['preliminary_expenses'] ? ltrim($fmt->formatCurrency((float) $value3['preliminary_expenses'],'INR'),'₹'):'0.00'; ?> </td>                                    

                                    <?php
                                    $no              += $fixed + $val
                                        + $value3['preliminary_expenses'];
                                } ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th colspan="2" style="text-align:right">Total</th>
                                    <th style="text-align:right;">
                                        <?php echo $no ? ltrim($fmt->formatCurrency((float) $no,'INR'),'₹'):'0.00'; ?> </th>                                 
                                    </th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
                <h5>4.4 MEANS OF FINANCE</h5>
                <div class="row">
                    <div class="col-sm-12 col-md-12">
                        <table class="table table-bordered responsive">
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
                                        <td style="text-align:right;">
                                            <?php echo $value4['capital_finance_value'] ? ltrim($fmt->formatCurrency((float) $value4['capital_finance_value'],'INR'),'₹'):'0.00'; ?> </td>
                                        <td>
                                            <?php echo $value4['capital_finance_remark']; ?> </td>                                       
                                    </tr>
                                    <tr>
                                        <td align="center">2.</td>
                                        <td>Subsidy

                                        </td>
                                        <td style="text-align:right;">
                                            <?php echo $value4['subsidy_value']? ltrim($fmt->formatCurrency((float) $value4['subsidy_value'],'INR'),'₹'):'0.00'; ?> </td>
                                        <td>
                                            <?php echo $value4['subsidy_remark']; ?> </td>                                      
                                    </tr>
                                    <tr>
                                        <td align="center">3.</td>
                                        <td>Term Loan

                                        </td>
                                        <td style="text-align:right;">
                                            <?php echo $value4['loan_value']? ltrim($fmt->formatCurrency((float) $value4['loan_value'],'INR'),'₹'):'0.00'; ?> </td>
                                        <td>
                                            <?php echo $value4['loan_remark']; ?> </td>                                       
                                    </tr>
                                    <tr>
                                        <td align="center">4.</td>
                                        <td>Own Investment

                                        </td>
                                        <td style="text-align:right;">
                                            <?php echo $value4['investment_value']? ltrim($fmt->formatCurrency((float) $value4['investment_value'],'INR'),'₹'):'0.00'; ?> </td>
                                        <td>
                                            <?php echo $value4['investment_remark']; ?> </td>                                       
                                    </tr>
                                    <tr>
                                        <td align="center">5.</td>
                                        <td>Any Other

                                        </td>
                                        <td style="text-align:right;">
                                            <?php echo $value4['other_value'] ? ltrim($fmt->formatCurrency((float) $value4['other_value'],'INR'),'₹'):'0.00'; ?> </td>
                                        <td>
                                            <?php echo $value4['other_remark']; ?> </td>
                                        <!-- <td>
												<?php echo $value1['office_remarks']; ?> </td> -->
                                    </tr>
                                <?php
                                    $working  += $value4['capital_finance_value'] + $value4['subsidy_value']
                                        + $value4['loan_value'] + $value4['investment_value'] + $value4['other_value'];

                                } ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th colspan="2" style="text-align:right">Total</th>
                                    <th style="text-align:right;"><?php echo $working ? ltrim($fmt->formatCurrency((float) $working,'INR'),'₹'):'0.00'; ?></th>                              
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
                <h5>4.5 PROJECT PROFITABILITY ANALYSIS</h5>
                <div class="row">
                    <div class="col-sm-12 col-md-12">
                        <table class="table table-bordered responsive">
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
                                        <td style="text-align:right;">
                                            <?php echo $value5['sales_revenue'] ? ltrim($fmt->formatCurrency((float) $value5['sales_revenue'],'INR'),'₹'):'0.00'; ?> </td>                                      
                                    </tr>
                                    <tr>
                                        <td align="center">2.</td>
                                        <td>Manufacturing Expenses (2.3+2.4+2.5)
                                        </td>
                                        <td style="text-align:right;">
                                            <?php echo $value5['manufacturing_expenses']? ltrim($fmt->formatCurrency((float) $value5['manufacturing_expenses'],'INR'),'₹'):'0.00'; ?> </td>                                       
                                    </tr>
                                    <tr>
                                        <td align="center">3.</td>
                                        <td>Selling & Distribution Expenses
                                        </td>
                                        <td style="text-align:right;">
                                            <?php echo $value5['distribution_expenses']? ltrim($fmt->formatCurrency((float) $value5['distribution_expenses'],'INR'),'₹'):'0.00'; ?> </td>                                    
                                    </tr>
                                    <tr>
                                        <td align="center">4.</td>
                                        <td>Administrative Expenses

                                        </td>
                                        <td style="text-align:right;">
                                            <?php echo $value5['administrative_expenses']? ltrim($fmt->formatCurrency((float) $value5['administrative_expenses'],'INR'),'₹'):'0.00'; ?> </td>                                       
                                    </tr>
                                    <tr>
                                        <td align="center">5.</td>
                                        <td>Interest for Term Loan and Working Capital

                                        </td>
                                        <td style="text-align:right;">
                                            <?php echo $value5['interest_loan']? ltrim($fmt->formatCurrency((float) $value5['interest_loan'],'INR'),'₹'):'0.00'; ?> </td>                                       
                                    </tr>
                                    <tr>
                                        <td align="center">6.</td>
                                        <td>Depreciation

                                        </td>
                                        <td style="text-align:right;">
                                            <?php echo $value5['depreciation']? ltrim($fmt->formatCurrency((float) $value5['depreciation'],'INR'),'₹'):'0.00'; ?> </td>                                       
                                    </tr>
                                    <tr>
                                        <td align="center">7.</td>
                                        <td>Gross Profit

                                        </td>
                                        <td style="text-align:right;">
                                            <?php echo $value5['gross_profit']? ltrim($fmt->formatCurrency((float) $value5['gross_profit'],'INR'),'₹'):'0.00'; ?> </td>
                                      
                                    </tr>
                                    <tr>
                                        <td align="center">8.</td>
                                        <td>Income tax

                                        </td>
                                        <td style="text-align:right;">
                                            <?php echo $value5['income_tax'] ? ltrim($fmt->formatCurrency((float) $value5['income_tax'],'INR'),'₹'):'0.00'; ?> </td>                                        
                                    </tr>
                                    <tr>
                                        <td align="center">9.</td>
                                        <td>Net profit

                                        </td>
                                        <td style="text-align:right;">
                                            <?php echo $value5['net_profit']? ltrim($fmt->formatCurrency((float) $value5['net_profit'],'INR'),'₹'):'0.00'; ?> </td>                                       
                                    </tr>
                                <?php         
                                } ?>
                            </tbody>                        
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <hr>
    </div>
    <!-- Supplementary Details -->
    <div class="table-responsive ">
        <h3>Supplementary Details</h3>
        <hr>
        <div class="step-tab-panel" data-step="step3">
            <div class="container">
                <h5>5.0 SUPPLEMENTARY DETAILS</h5>
                <div class="row">
                    <div class="col-sm-12 col-md-12">
                        <table class="table table-bordered responsive">
                            <thead class="table-dark">
                                <tr class="text-center">
                                    <th style="width:2%;"> S.No </th>
                                    <th style="width:15%;"> Give Details
                                    </th>
                                    <th style="width:15%;"></th>                                   
                                </tr>
                            </thead>
                            <tbody class="rawadding">
                                <?php foreach ($project as $key => $value) { ?>
                                    <tr>
                                        <td align="center">5.1</td>
                                        <td>Do you own House/Property etc. ?
                                        </td>
                                        <td>
                                            <?php echo ($value['own_house'] == 1)?'Yes':'No'; ?>
                                        </td>                                        
                                    </tr>
                                    <tr>
                                        <td align="center">5.2</td>
                                        <td>Own Insurance Policy
                                        </td>
                                        <td>
                                            <?php echo $value['own_insurance_policy'] ? ltrim($fmt->formatCurrency((float) $value['own_insurance_policy'],'INR'),'₹'):'0.00'; ?> </td>                                        
                                    </tr>
                                    <tr>
                                        <td align="center">5.3</td>
                                        <td>Any Interest in other firms

                                        </td>
                                        <td>
                                            <?php echo $value['interest_other_firms']; ?> </td>                                       
                                    </tr>
                                    <tr>
                                        <td align="center">5.4</td>
                                        <td>Present Monthly Income
                                        </td>
                                        <td>
                                            <?php echo 'Rs.' . $value['monthly_income'] ? 'Rs.'.ltrim($fmt->formatCurrency((float)$value['monthly_income'],'INR'),'₹'):'0.00'; ?> </td>                                       
                                    </tr>                                   
                                <?php            
                                } ?>
                            </tbody>

                        </table>
                    </div>
                </div> <br><br>
            </div>
        </div>
    </div>
    <!-- Referencd-details -->   
		<div class="table-responsive ">
        <h3>Reference Details</h3>
			<div class="step-tab-panel" data-step="step3">
				<hr>
				<div class="container">
					<h5>6.0 REFERENCES</h5>
					<div class="row">
						<div class="col-sm-12 col-md-12">
							<table class="table table-bordered responsive">
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
									<?php }	?>								
								</tbody>
							</table>
						</div>
					</div> <br><br>			
				</div>
			</div>
		</div>
        <!-- Payment details -->  
		<div class="table-responsive ">
        <h3>Payment Details</h3>
        <hr>
			<div class="step-tab-panel" data-step="step3">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 col-md-12">											
						   <table class="table table-bordered responsive">					
								  <tbody class="referenceadding">							         							
								     <tr>														  
										<th class="table-dark">Payment Amount : </th>
										<td>Rs.&nbsp;<?php echo $basics['transaction_amount']? ltrim($fmt->formatCurrency((float) $basics['transaction_amount'],'INR'),'₹'):'0.00'; ?></td>
									 </tr>
									 <tr>														  
										<th class="table-dark">Transaction Number. : </th>
										<td><?php echo $basics['transaction_number']; ?></td>
									 </tr>
									 <tr>														  
										<th class="table-dark">Transaction Date : </th>
										<td><?php echo date('d-m-Y',strtotime($basics['transaction_date'])); ?></td>
									 </tr>
									 <tr>														  
										<th class="table-dark">Payment Status : </th>
										<td><?php echo ($basics['payment_status'] == 1)?'<span style="color:green;"><b>Success</b></span>':''; ?></td>
									</tr>			
								</tbody>								
							</table>
						</div>
					</div> <br><br>			
				</div>
			</div>
		</div>
    <!-- CONTAINER TAG DOWN -->
</div>
</div>
<!-- Action -->
<div class="action-form">
    <div class="mb-3 mt-3 text-center">
        <?php echo $this->Html->link(('<i class="fas fa-arrow-left"></i>&nbsp; Back'), ['controller' => 'Projects', 'action' => 'index'], ['escape' => false, 'class' => 'btn btn-info rounded-pill px-4 waves-effect waves-light',]); ?>
    </div>
</div>
<!-- PDF PRINT -->
<!-- GENERAL DETAILS -->
<div class="pdfreport" style="display: none;">
    <div id="div_vc">
        <h2 style="text-align: center;"><u>Project Report  - Application No : <?php echo $basics['project_no']; ?></u></h2>
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
                    <?php  foreach ($education_details as $key => $value) {                       
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
                                            <?php echo ($value['own_house'] == 1)?'Yes':'No'; ?>
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
                                                <?php echo 'Rs.'.$value['monthly_income']; ?> </td>                                           
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
									<?php }	?>
								
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
											<td style="width:50%;"><?php echo date('d-m-Y',strtotime($basics['transaction_date'])); ?></td>
										 </tr>
										 <tr>														  
											<th style="width:50%;">Payment Status : </th>
											<td style="width:50%;"><?php echo ($basics['payment_status'] == 1)?'<span style="color:green;"><b>Success</b></span>':''; ?></td>
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