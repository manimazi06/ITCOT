<style>
	.step-footer {
		text-align: center !important;
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
<?php echo $this->Form->create(null, ['id' => 'FormID', 'class' => '', "autocomplete" => "off", 'enctype' => 'multipart/form-data']); ?>
<div class="card mt-3">
    <ul class="nav nav-pills mb-1" id="pills-tab" role="tablist">
			<li class="nav-item">
				<?php echo $this->Html->link(__('General<br>Details'), ['controller' => 'Projects', 'action' => 'basicview', $id], ['escape' => false, 'class' => 'nav-link']); ?>
			</li>
			<li class="nav-item">
				<?php echo $this->Html->link(__('Entity<br>Details'), ['controller' => 'Projects', 'action' => 'entitydetailsview', $id], ['escape' => false, 'class' => 'nav-link']); ?>
			</li>
			<li class="nav-item">
				<?php echo $this->Html->link(__('Educational<br>& work'), ['controller' => 'Projects', 'action' => 'educationdetailsview', $id], ['escape' => false, 'class' => 'nav-link']); ?>
			</li>			
			<li class="nav-item">
				<?php echo $this->Html->link(__('Manufacturing<br>Raw materials'), ['controller' => 'Projects', 'action' => 'manufacturingdetailsview', $id], ['escape' => false, 'class' => 'nav-link']); ?>
			</li>
			
			<li class="nav-item">
				<?php echo $this->Html->link(__('Utilities <br>& Manpower'), ['controller' => 'Projects', 'action' => 'manpowerdetailsview', $id], ['escape' => false, 'class' => 'nav-link']); ?>
			</li>			
			<li class="nav-item">
				<?php echo $this->Html->link(__('Project<br>Profitability'), ['controller' => 'Projects', 'action' => 'profitabilitydetailsview', $id], ['escape' => false, 'class' => 'nav-link active']); ?>
			</li>
			<li class="nav-item">
				<?php echo $this->Html->link(__('Supplementary<br>Details'), ['controller' => 'Projects', 'action' => 'suppliementarydetailsview', $id], ['escape' => false, 'class' => 'nav-link']); ?>
			</li>
			<li class="nav-item">
				<?php echo $this->Html->link(__('References'), ['controller' => 'Projects', 'action' => 'referencedetailsview', $id], ['escape' => false, 'class' => 'nav-link']); ?>
			</li>
			<li class="nav-item">
				<?php echo $this->Html->link(__('Payment <br> Details'), ['controller' => 'Projects', 'action' => 'paymentdetailsview', $id], ['escape' => false, 'class' => 'nav-link']); ?>
			</li>			
		</ul>
	</div>
	<div class="card mt-1">
		<div class="card-header" style="background-color: #243e04;">
			<h4 class="mb-0 text-white">Project profitability Details</h4>
		</div><br><br>
		<div class="step-content col-lg-8 col-md-8 col-sm-12 offset-md-1">
			<div class="step-tab-panel" data-step="step3">
				<h3 class="tab2-head">4.0 COST OF THE PROJECT</h3>
				<hr style="width: 60%; margin-top: 5px;" />
				<div class="container">
					<h5> 4.1 FIXED CAPITAL</h5>
					<div class="row">
						<div class="col-sm-12 col-md-12">
							<table class="table table-bordered responsive">
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
											<td align="center"><?php echo ($key+1) ?></td>
											<td><?php echo $value['item']?>
											</td>
											<td>
												<?php echo $value['capital_value']?ltrim($fmt->formatCurrency((float)$value['capital_value'],'INR'),'₹'):'0.00'; ?>
											</td>
											<!-- <td>
												<?php echo $value['electricity_expenses']; ?> </td>
											<td>
												<?php echo $value['electricity_remarks']; ?> </td> -->
										</tr>
										<!-- <tr>
											<td align="center">2.</td>
											<td>Machinery/Equipment
											</td>
											<td>
												<?php echo $value['machinery_value']?ltrim($fmt->formatCurrency((float)$value['machinery_value'],'INR'),'₹'):'0.00'; ?> </td>
										 <td>
												<?php echo $value['water_expenses']; ?> </td>
											<td>
												<?php echo $value['water_remarks']; ?> </td> 
										</tr>
										<tr>
											<td align="center">3.</td>
											<td>Furniture & Fixture
											</td>
											<td>
												<?php echo $value['furniture_value']?ltrim($fmt->formatCurrency((float)$value['furniture_value'],'INR'),'₹'):'0.00'; ?> </td>											
										</tr>-->
									<?php
										$fixed   += $value['capital_value'];										
									} ?>
								</tbody>
								<tfoot>
									<tr>
										<th colspan="2" style="text-align:right">Total</th>
										<th>
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
											<td align="center"><?php echo ($key+1) ?></td>
											<td><?php echo $value1['item']; ?>
											</td>
											<td>
												<?php echo $value1['duration']; ?> </td>
											<td>
												<?php echo $value1['quantity']?ltrim($fmt->formatCurrency((float)$value1['quantity'],'INR'),'₹'):'0.00'; ?> </td>
												<td><?php echo $units[$value1['unit_id']]; ?></td>
											<td>
												<?php echo $value1['value']?ltrim($fmt->formatCurrency((float)$value1['value'],'INR'),'₹'):'0.00'; ?> </td>
										</tr>
										<!-- <tr>
											<td align="center">2.</td>
											<td>Semi finished goods stock

											</td>
											<td>
												<?php echo $value1['semifinished_duration']; ?> </td>
											<td>
												<?php echo $value1['semifinished_quantity'] ? ltrim($fmt->formatCurrency((float)$value1['semifinished_quantity'],'INR'),'₹'):'0.00'; ?> </td>
												<td><?php echo $units[$value1['semifinished_unit_id']]; ?></td>
											<td>
												<?php echo $value1['semifinished_value'] ? ltrim($fmt->formatCurrency((float)$value1['semifinished_value'],'INR'),'₹'):'0.00'; ?> </td>
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
											<td>
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
											<td>
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
											<td>
												<?php echo $value1['bills_value']?ltrim($fmt->formatCurrency((float)$value1['bills_value'],'INR'),'₹'):'0.00'; ?> </td>
										</tr> -->
									<?php
										$duration              += $value1['duration'];

										$qty                   += $value1['quantity'];

										$val                   += $value1['value'];

										
									} ?>
								</tbody>
								<tfoot>
									<tr>
										<th colspan="2" style="text-align:right">Total</th>
										<th>
											<?php echo $duration ?ltrim($fmt->formatCurrency((float)$duration,'INR'),'₹'):'0.00'; ?> </th>
										<th>
											<?php echo $qty ? ltrim($fmt->formatCurrency((float)$qty,'INR'),'₹'):'0.00'; ?> </th>
										<th></th>
										<th>
											<?php echo $val ?ltrim($fmt->formatCurrency((float)$val,'INR'),'₹'):'0.00'; ?> </th>
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
											<td>
												<?php echo $fixed ? ltrim($fmt->formatCurrency((float)$fixed,'INR'),'₹'):'0.00'; ?> </td>										
										</tr>
										<tr>
											<td align="center">2.</td>
											<td>Working Capital (Total of Item No.4.2)

											</td>
											<td>
												<?php echo $val ? ltrim($fmt->formatCurrency((float)$val,'INR'),'₹'):'0.00'; ?> </td>											
										</tr>
										<tr>
											<td align="center">3.</td>
											<td>Preliminary & Pre-operative expenses

											</td>
											<td>
												<?php echo $value3['preliminary_expenses']?ltrim($fmt->formatCurrency((float)$value3['preliminary_expenses'],'INR'),'₹'):'0.00'; ?> </td>						

										<?php
										$no              += $fixed + $val
											+ $value3['preliminary_expenses'];
									} ?>
								</tbody>
								<tfoot>
									<tr>

										<th colspan="2" style="text-align:right">Total</th>
										<th>
											<?php echo $no ? ltrim($fmt->formatCurrency((float)$no,'INR'),'₹'):'0.00'; ?> </th>
										<!-- <th>
											<?php echo $salaries ? $salaries  : ''; ?> </th>
										<th> -->
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
										<td align="center"><?php echo ($key+1) ?></td>
											<td><?php echo $value4['item']; ?>
											</td>
											<td>
												<?php echo $value4['value']?ltrim($fmt->formatCurrency((float)$value4['value'],'INR'),'₹'):'0.00'; ?> </td>
											<td>
												<?php echo $value4['remarks']; ?> </td>
											
										</tr>
										<!-- <tr>
											<td align="center">2.</td>
											<td>Subsidy

											</td>
											<td>
												<?php echo $value4['subsidy_value']?ltrim($fmt->formatCurrency((float)$value4['subsidy_value'],'INR'),'₹'):'0.00'; ?> </td>
											<td>
												<?php echo $value4['subsidy_remark']; ?> </td>
											
										</tr>
										<tr>
											<td align="center">3.</td>
											<td>Term Loan

											</td>
											<td>
												<?php echo $value4['loan_value']?ltrim($fmt->formatCurrency((float)$value4['loan_value'],'INR'),'₹'):'0.00'; ?> </td>
											<td>
												<?php echo $value4['loan_remark']; ?> </td>
											
										</tr>
										<tr>
											<td align="center">4.</td>
											<td>Own Investment

											</td>
											<td>
												<?php echo $value4['investment_value']?ltrim($fmt->formatCurrency((float)$value4['investment_value'],'INR'),'₹'):'0.00'; ?> </td>
											<td>
												<?php echo $value4['investment_remark']; ?> </td>
											
										</tr>
										<tr>
											<td align="center">5.</td>
											<td>Any Other

											</td>
											<td>
												<?php echo $value4['other_value']?ltrim($fmt->formatCurrency((float)$value4['other_value'],'INR'),'₹'):'0.00'; ?> </td>
											<td>
												<?php echo $value4['other_remark']; ?> </td>
											
										</tr> -->
									<?php
										$working              += $value4['value'];

									} ?>
								</tbody>
								<tfoot>
									<tr>
										<th colspan="2" style="text-align:right">Total</th>
										<th>
											<?php echo $working ? ltrim($fmt->formatCurrency((float)$working,'INR'),'₹'):'0.00'; ?> </th>									
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
											<td>
												<?php echo $value5['sales_revenue'] ? ltrim($fmt->formatCurrency((float)$value5['sales_revenue'],'INR'),'₹'):'0.00'; ?> </td>
											
										</tr>
										<tr>
											<td align="center">2.</td>
											<td>Manufacturing Expenses (2.3+2.4+2.5)

											</td>
											<td>
												<?php echo $value5['manufacturing_expenses']? ltrim($fmt->formatCurrency((float)$value5['manufacturing_expenses'],'INR'),'₹'):'0.00'; ?> </td>
										
										</tr>
										<tr>
											<td align="center">3.</td>
											<td>Selling & Distribution Expenses

											</td>
											<td>
												<?php echo $value5['distribution_expenses']? ltrim($fmt->formatCurrency((float)$value5['distribution_expenses'],'INR'),'₹'):'0.00'; ?> </td>
											
										</tr>
										<tr>
											<td align="center">4.</td>
											<td>Administrative Expenses

											</td>
											<td>
												<?php echo $value5['administrative_expenses']? ltrim($fmt->formatCurrency((float)$value5['administrative_expenses'],'INR'),'₹'):'0.00'; ?> </td>											
										</tr>
										<tr>
											<td align="center">5.</td>
											<td>Interest for Term Loan and Working Capital

											</td>
											<td>
												<?php echo $value5['interest_loan']? ltrim($fmt->formatCurrency((float)$value5['interest_loan'],'INR'),'₹'):'0.00'; ?> </td>											
										</tr>
										<tr>
											<td align="center">6.</td>
											<td>Depreciation

											</td>
											<td>
												<?php echo $value5['depreciation']? ltrim($fmt->formatCurrency((float)$value5['depreciation'],'INR'),'₹'):'0.00'; ?> </td>											
										</tr>
										<tr>
											<td align="center">7.</td>
											<td>Gross Profit

											</td>
											<td>
												<?php echo $value5['gross_profit']? ltrim($fmt->formatCurrency((float)$value5['gross_profit'],'INR'),'₹'):'0.00'; ?> </td>											
										</tr>
										<tr>
											<td align="center">8.</td>
											<td>Income tax

											</td>
											<td>
												<?php echo $value5['income_tax']? ltrim($fmt->formatCurrency((float)$value5['income_tax'],'INR'),'₹'):'0.00'; ?> </td>											
										</tr>
										<tr>
											<td align="center">9.</td>
											<td>Net profit

											</td>
											<td>
												<?php echo $value5['net_profit']? ltrim($fmt->formatCurrency((float)$value5['net_profit'],'INR'),'₹'):'0.00'; ?> </td>											
										</tr>
									<?php
										
									} ?>
								</tbody>					
							</table>


						</div>
					</div>
				</div>
			</div>
		</div>
	
		<div class="action-form">
			<div class="mb-3 mt-3 text-center">
				<?php echo $this->Html->link(('<i class="fas fa-arrow-left"></i>&nbsp; Previous'), ['controller' => 'Projects', 'action' => 'manpowerdetailsview', $id], ['escape' => false, 'class' => 'btn btn-info rounded-pill px-4 waves-effect waves-light',]); ?>

				<span>
					<?php echo $this->Html->link(('Next&nbsp;<i class="fas fa-arrow-right"></i>'), ['controller' => 'Projects', 'action' => 'suppliementarydetailsview', $id], ['escape' => false, 'class' => 'btn btn-warning btn-rounded',]); ?>
				</span>
			</div>
		</div>
	</div>
<?php echo $this->Form->End(); ?>
