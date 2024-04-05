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
				<?php echo $this->Html->link(__('Manufacturing<br>Raw Materials'), ['controller' => 'Projects', 'action' => 'manufacturingdetailsview', $id], ['escape' => false, 'class' => 'nav-link']); ?>
			</li>			
			<li class="nav-item">
				<?php echo $this->Html->link(__('Utilities <br>& Manpower'), ['controller' => 'Projects', 'action' => 'manpowerdetailsview', $id], ['escape' => false, 'class' => 'nav-link active']); ?>
			</li>			
			<li class="nav-item">
				<?php echo $this->Html->link(__('Project<br>Profitability'), ['controller' => 'Projects', 'action' => 'profitabilitydetailsview', $id], ['escape' => false, 'class' => 'nav-link']); ?>
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
			<h4 class="mb-0 text-white">Utilities and Man-Power Details</h4>
		</div><br><br>
		<div class="step-content col-lg-8 col-md-8 col-sm-12 offset-md-1">
			<div class="step-tab-panel" data-step="step3">
				<hr style="width: 60%; margin-top: 5px;" />
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
									<?php foreach ($util_details as $key => $value) { 
										// echo '<pre>';
										// print_r($value['electricity_unit_id']);
										// exit();         ?>
										<tr>
											<td align="center"><?php echo ($key+1) ?></td>
											<td><?php  if($value['particular_id']==1){
												echo 'Electricity';
											}elseif($value['particular_id']==2){

												echo 'Water';
											}elseif($value['particular_id']==3)
											{
												echo 'Coal /Oil';
											}else{
												echo 'Any Other';
											}
											
											?></td>
											<td>
												<?php echo $value['requirement']; ?>
											</td>
											<td><?php echo $units[$value['unit_id']]; ?></td>
											<td>
												<?php echo $value['expense']?ltrim($fmt->formatCurrency((float)$value['expense'],'INR'),'₹'):'0.00'; ?> </td>
											<td>
												<?php echo $value['remarks']; ?> </td>
										</tr>
										<!-- <tr>
											<td align="center">2.</td>
											<td>Water
											</td>
											<td>
												<?php echo $value['water_requirement']; ?> </td>
											<td><?php echo $units[$value['water_unit_id']]; ?></td>
											<td>
												<?php echo $value['water_expenses']?ltrim($fmt->formatCurrency((float)$value['water_expenses'],'INR'),'₹'):'0.00'; ?> </td>
											<td>
												<?php echo $value['water_remarks']; ?> </td>
										</tr>
										<tr>
											<td align="center">3.</td>
											<td>Coal /Oil
											</td>
											<td>
												<?php echo $value['oil_requirement']; ?> </td>
											<td><?php echo $units[$value['oil_unit_id']]; ?></td>
											<td>
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
											<td>
												<?php echo $value['other_expenses']?ltrim($fmt->formatCurrency((float)$value['other_expenses'],'INR'),'₹'):'0.00'; ?> </td>
											<td>
												<?php echo $value['other_remarks']; ?> </td>
										</tr> -->
									<?php
										$elec_req              += $value['requirement'];

										$expenses += $value['expense'];										
									} ?>
								</tbody>
								<tfoot>
									<tr>

										<th colspan="2" style="text-align:right">Total</th>
										<th>
											<?php echo $elec_req  ?ltrim($fmt->formatCurrency((float)$elec_req,'INR'),'₹'):'0.00'; ?>
										</th>
										<th></th>
										<th>
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
										<td align="center"><?php echo ($key+1) ?></td>
											<td><?php  if($value1['particular_id']==1){
												echo 'Skilled';
											}elseif($value1['particular_id']==2){

												echo 'Semiskilled';
											}elseif($value1['particular_id']==3)
											{
												echo 'Unskilled';
											}else{
												echo 'Office Staff';
											}
											
											?></td>
											<td>
												<?php echo $value1['numbers']; ?> </td>
											<td>
												<?php echo $value1['salaries']?ltrim($fmt->formatCurrency((float)$value1['salaries'],'INR'),'₹'):'0.00'; ?> </td>
											<td>
												<?php echo $value1['remarks']; ?> </td>
										</tr>
										<!-- <tr>
											<td align="center">2.</td>
											<td>Semiskilled
											</td>
											<td>
												<?php echo $value1['semiskilled_no']; ?> </td>
											<td>
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
											<td>
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
											<td>
												<?php echo $value1['office_salaries']?ltrim($fmt->formatCurrency((float)$value1['office_salaries'],'INR'),'₹'):'0.00'; ?> </td>
											<td>
												<?php echo $value1['office_remarks']; ?> </td>
										</tr> -->
									<?php
										$no              += $value1['numbers'];

										$salaries        += $value1['salaries'];
									} ?>
								</tbody>
								<tfoot>
									<tr>

										<th colspan="2" style="text-align:right">Total</th>
										<th>
											<?php echo $no ?ltrim($fmt->formatCurrency((float)$no,'INR'),'₹'):'0.00'; ?> </th>
										<th>
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
		<div class="action-form">
			<div class="mb-3 mt-3 text-center">
				<?php echo $this->Html->link(('<i class="fas fa-arrow-left"></i>&nbsp; Previous'), ['controller' => 'Projects', 'action' => 'manufacturingdetailsview', $id], ['escape' => false, 'class' => 'btn btn-info rounded-pill px-4 waves-effect waves-light',]); ?>
			  <span>
					<?php echo $this->Html->link(('Next&nbsp;<i class="fas fa-arrow-right"></i>'), ['controller' => 'Projects', 'action' => 'profitabilitydetailsview', $id], ['escape' => false, 'class' => 'btn btn-warning btn-rounded',]); ?>
				</span>
			</div>
		</div>
	</div>

<?php echo $this->Form->End(); ?>
