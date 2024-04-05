<style>
	.step-footer {
		text-align: center !important;
	}
</style>
<center style=" font-weight:bold; font-size:20px;"><?= $this->Flash->render() ?></center>
<?php echo $this->Form->create($project, ['id' => 'FormID', 'class' => '', "autocomplete" => "off", 'enctype' => 'multipart/form-data']); ?>
<div class="d-flex flex-column flex-root">
	<!--begin::Authentication - Multi-steps-->
	<div class="d-flex flex-column flex-lg-row flex-column-fluid stepper stepper-pills stepper-column stepper-multistep" id="kt_create_account_stepper">
		<!--begin::Aside-->
		<div class="d-flex flex-column flex-lg-row-auto w-lg-350px w-xl-350px">
			<div class="d-flex flex-column top-0 bottom-0 w-lg-350px w-xl-350px scroll-y bgi-size-cover bgi-position-center" style="background-image: url(<?php echo $this->Url->build('/'); ?>images/media/misc/auth-bg.png)">
				<div class="d-flex flex-row-fluid justify-content-center p-10">
					<div class="stepper-nav">
						<div class="stepper-item " data-kt-stepper-element="nav">
							<?php if ($project['step_count'] >= '0') { ?>
								<?php echo $this->Html->link(__(' <div class="stepper-icon rounded-3">
											<i class="ki-duotone ki-check fs-2 stepper-check"></i>
											<span class="stepper-number">&#10003;</span>
										</div><div class="stepper-label">
											<h3 class="stepper-title fs-2">Basic Details</h3>
											<div class="stepper-desc fw-normal">Select Basic Details</div>
										</div>'), ['controller' => 'Projects', 'action' => 'basicdetails',  base64_encode($id)], ['escape' => false, 'class' => 'stepper-wrapper']); ?>
							<?php } else { ?>
								<div class="stepper-wrapper">
									<div class="stepper-icon rounded-3">
										<i class="ki-duotone ki-check fs-2 stepper-check"></i>
										<span class="stepper-number">1</span>
									</div>
									<div class="stepper-label">
										<h3 class="stepper-title fs-2">Basic Details</h3>
										<div class="stepper-desc fw-normal">Select Basic Details</div>
									</div>
								</div>
							<?php } ?>
							<div class="stepper-line h-40px"></div>
						</div>
						<div class="stepper-item" data-kt-stepper-element="nav">
							<?php if ($project['step_count'] >= '1') { ?>
								<?php echo $this->Html->link(__(' <div class="stepper-icon rounded-3">
											<i class="ki-duotone ki-check fs-2 stepper-check"></i>
											<span class="stepper-number">&#10003;</span>
										</div><div class="stepper-label">
											<h3 class="stepper-title fs-2">Unit / Entity Details</h3>
											<div class="stepper-desc fw-normal">Unit / Entity Details</div>
										</div>'), ['controller' => 'Projects', 'action' => 'entitydetails',  base64_encode($id)], ['escape' => false, 'class' => 'stepper-wrapper']); ?>
							<?php } else { ?>
								<div class="stepper-wrapper">
									<div class="stepper-icon rounded-3">
										<i class="ki-duotone ki-check fs-2 stepper-check"></i>
										<span class="stepper-number">2</span>
									</div>
									<div class="stepper-label">
										<h3 class="stepper-title fs-2">Unit / Entity Details</h3>
										<div class="stepper-desc fw-normal">Unit / Entity Details</div>
									</div>
								</div>
							<?php } ?>
							<div class="stepper-line h-40px"></div>
							<!--end::Line-->
						</div>
						<div class="stepper-item" data-kt-stepper-element="nav">
							<?php if ($project['step_count'] >= '2') { ?>
								<?php echo $this->Html->link(__(' <div class="stepper-icon rounded-3">
											<i class="ki-duotone ki-check fs-2 stepper-check"></i>
											<span class="stepper-number">&#10003;</span>
										</div><div class="stepper-label">
											<h3 class="stepper-title fs-2">Education & Work</h3>
											<div class="stepper-desc fw-normal">Education & Work</div>
										</div>'), ['controller' => 'Projects', 'action' => 'educationdetails',  base64_encode($id)], ['escape' => false, 'class' => 'stepper-wrapper']); ?>
							<?php } else { ?>
								<div class="stepper-wrapper">
									<div class="stepper-icon">
										<i class="ki-duotone ki-check fs-2 stepper-check"></i>
										<span class="stepper-number">3</span>
									</div>
									<div class="stepper-label">
										<h3 class="stepper-title fs-2">Education & Work</h3>
										<div class="stepper-desc fw-normal">Education & Work</div>
									</div>
								</div>
							<?php } ?>
							<div class="stepper-line h-40px"></div>
						</div>
						<div class="stepper-item" data-kt-stepper-element="nav">
							<?php if ($project['step_count'] >= '3') { ?>
								<?php echo $this->Html->link(__(' <div class="stepper-icon rounded-3">
											<i class="ki-duotone ki-check fs-2 stepper-check"></i>
											<span class="stepper-number">&#10003;</span>
										</div><div class="stepper-label">
											<h3 class="stepper-title fs-2">Manufacturing</h3>
											<div class="stepper-desc fw-normal">Manufacturing</div>
										</div>'), ['controller' => 'Projects', 'action' => 'manufacturingdetails',  base64_encode($id)], ['escape' => false, 'class' => 'stepper-wrapper']); ?>
							<?php } else { ?>
								<div class="stepper-wrapper">
									<div class="stepper-icon">
										<i class="ki-duotone ki-check fs-2 stepper-check"></i>
										<span class="stepper-number">4</span>
									</div>
									<div class="stepper-label">
										<h3 class="stepper-title fs-2">Manufacturing</h3>
										<div class="stepper-desc fw-normal">Manufacturing</div>
									</div>
								</div>
							<?php } ?>
							<div class="stepper-line h-40px"></div>
						</div>
						<div class="stepper-item" data-kt-stepper-element="nav">
							<?php if ($project['step_count'] >= '4') { ?>
								<?php echo $this->Html->link(__(' <div class="stepper-icon rounded-3">
											<i class="ki-duotone ki-check fs-2 stepper-check"></i>
											<span class="stepper-number">&#10003;</span>
										</div><div class="stepper-label">
											<h3 class="stepper-title fs-2">Utilities & Manpower</h3>
											<div class="stepper-desc fw-normal">Utilities & Manpower</div>
										</div>'), ['controller' => 'Projects', 'action' => 'manpowerdetails',  base64_encode($id)], ['escape' => false, 'class' => 'stepper-wrapper']); ?>
							<?php } else { ?>
								<div class="stepper-wrapper">
									<div class="stepper-icon">
										<i class="ki-duotone ki-check fs-2 stepper-check"></i>
										<span class="stepper-number">5</span>
									</div>
									<div class="stepper-label">
										<h3 class="stepper-title fs-2">Utilities & Manpower</h3>
										<div class="stepper-desc fw-normal">Utilities & Manpower</div>
									</div>
								</div>
							<?php } ?>
							<div class="stepper-line h-40px"></div>
						</div>
						<div class="stepper-item" data-kt-stepper-element="nav">
							<?php if ($project['step_count'] >= '5') { ?>
								<?php echo $this->Html->link(__(' <div class="stepper-icon rounded-3">
											<i class="ki-duotone ki-check fs-2 stepper-check"></i>
											<span class="stepper-number">&#10003;</span>
										</div><div class="stepper-label">
											<h3 class="stepper-title fs-2">Capital & Total Cost</h3>
											<div class="stepper-desc fw-normal">Capital & Total Cost</div>
										</div>'), ['controller' => 'Projects', 'action' => 'projectcostdetails',  base64_encode($id)], ['escape' => false, 'class' => 'stepper-wrapper']); ?>
							<?php } else { ?>
								<div class="stepper-wrapper">
									<div class="stepper-icon">
										<i class="ki-duotone ki-check fs-2 stepper-check"></i>
										<span class="stepper-number">6</span>
									</div>
									<div class="stepper-label">
										<h3 class="stepper-title fs-2">Capital & Total Cost</h3>
										<div class="stepper-desc fw-normal">Capital & Total Cost</div>
									</div>
								</div>
							<?php } ?>
							<div class="stepper-line h-40px"></div>
						</div>
						<div class="stepper-item current" data-kt-stepper-element="nav">
							<?php if ($project['step_count'] >= '6') { ?>
								<?php echo $this->Html->link(__(' <div class="stepper-icon rounded-3">
											<i class="ki-duotone ki-check fs-2 stepper-check"></i>
											<span class="stepper-number">7</span>
										</div><div class="stepper-label">
											<h3 class="stepper-title fs-2">Project Profitability</h3>
											<div class="stepper-desc fw-normal">Project Profitability</div>
										</div>'), ['controller' => 'Projects', 'action' => 'profitabilitydetails',  base64_encode($id)], ['escape' => false, 'class' => 'stepper-wrapper']); ?>
							<?php } else { ?>
								<div class="stepper-wrapper">
									<div class="stepper-icon">
										<i class="ki-duotone ki-check fs-2 stepper-check"></i>
										<span class="stepper-number">7</span>
									</div>
									<div class="stepper-label">
										<h3 class="stepper-title fs-2">Project Profitability</h3>
										<div class="stepper-desc fw-normal">Project Profitability</div>
									</div>
								</div>
							<?php } ?>
							<div class="stepper-line h-40px"></div>
						</div>
						<div class="stepper-item" data-kt-stepper-element="nav">
							<?php if ($project['step_count'] >= '7') { ?>
								<?php echo $this->Html->link(__(' <div class="stepper-icon rounded-3">
											<i class="ki-duotone ki-check fs-2 stepper-check"></i>
											<span class="stepper-number">8</span>
										</div><div class="stepper-label">
											<h3 class="stepper-title fs-2">Supplementary</h3>
											<div class="stepper-desc fw-normal">Supplementary</div>
										</div>'), ['controller' => 'Projects', 'action' => 'suppliementarydetails',  base64_encode($id)], ['escape' => false, 'class' => 'stepper-wrapper']); ?>
							<?php } else { ?>
								<div class="stepper-wrapper">
									<div class="stepper-icon">
										<i class="ki-duotone ki-check fs-2 stepper-check"></i>
										<span class="stepper-number">8</span>
									</div>
									<div class="stepper-label">
										<h3 class="stepper-title fs-2">Supplementary</h3>
										<div class="stepper-desc fw-normal">Supplementary</div>
									</div>
								</div>
							<?php } ?>
							<div class="stepper-line h-40px"></div>
						</div>
						<div class="stepper-item" data-kt-stepper-element="nav">
							<?php if ($project['step_count'] >= '8') { ?>
								<?php echo $this->Html->link(__(' <div class="stepper-icon rounded-3">
											<i class="ki-duotone ki-check fs-2 stepper-check"></i>
											<span class="stepper-number">9</span>
										</div><div class="stepper-label">
											<h3 class="stepper-title fs-2">References</h3>
											<div class="stepper-desc fw-normal">References</div>
										</div>'), ['controller' => 'Projects', 'action' => 'referencedetails',  base64_encode($id)], ['escape' => false, 'class' => 'stepper-wrapper']); ?>
							<?php } else { ?>
								<div class="stepper-wrapper">
									<div class="stepper-icon">
										<i class="ki-duotone ki-check fs-2 stepper-check"></i>
										<span class="stepper-number">9</span>
									</div>
									<div class="stepper-label">
										<h3 class="stepper-title fs-2">References</h3>
										<div class="stepper-desc fw-normal">References</div>
									</div>
								</div>
							<?php } ?>
							<div class="stepper-line h-40px"></div>
						</div>
						<div class="stepper-item" data-kt-stepper-element="nav">
							<?php if ($project['step_count'] >= '9') { ?>
								<?php echo $this->Html->link(__(' <div class="stepper-icon rounded-3">
											<i class="ki-duotone ki-check fs-2 stepper-check"></i>
											<span class="stepper-number">10</span>
										</div><div class="stepper-label">
											<h3 class="stepper-title fs-2">Payment Details</h3>
											<div class="stepper-desc fw-normal">Payment Details</div>
										</div>'), ['controller' => 'Projects', 'action' => 'paymentdetails',  base64_encode($id)], ['escape' => false, 'class' => 'stepper-wrapper']); ?>
							<?php } else { ?>
								<div class="stepper-wrapper">
									<div class="stepper-icon">
										<i class="ki-duotone ki-check fs-2 stepper-check"></i>
										<span class="stepper-number">10</span>
									</div>
									<div class="stepper-label">
										<h3 class="stepper-title">Payment Details</h3>
										<div class="stepper-desc fw-normal">Payment Details</div>
									</div>
								</div>
							<?php } ?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--begin::Aside-->
		<!--begin::Body-->
		<div class="d-flex flex-column flex-lg-row-fluid py-10">
			<!--begin::Content-->
			<div class="d-flex flex-column flex-column-fluid">
				<!--begin::Wrapper-->
				<div class="p-10 p-lg-15">
					<!--begin::Form-->
					<form name="frmInfo" class="my-auto pb-5 form-input" novalidate="novalidate" id="frmInfo">

						<h3 class="tab2-head">Means of Finance / Project Profitability</h3>
						<hr style="width: 100%; margin-top: 5px" />
						<div class="row">
							<div class="col-md-12">
								<h5 class="p-3">4.4 Means of Finance</h5>
								<div class="table-responsive">
									<table class="table table-bordered responsive">
										<thead class="table-dark">
											<tr class="text-center">
												<th style="width:2%;"> S.No </th>
												<th style="width:20%;">Particulars</th>
												<th style="width:35%;">Value (Rs.)</th>
												<th style="width:35%;">Remarks</th>
												<th style="width:8%;"> <button type="button" class="btn btn-success btn-sm" onclick="financeadding();"><i class="fa fa-plus-circle"></i>&nbsp;Add</button>

											</tr>
										</thead>
										<tbody class="financeadding">
											<?php if ($financemeans_count == 0) { ?>
												<tr class="financeadding_row_in_post">
													<td align="center">1.</td>
													<td>
														<?php echo $this->Form->control('finance.0.item', ['class' => 'form-select', 'templates' => ['inputContainer' => '{{content}}'], 'options' => $finance_dropdown, 'label' => false, 'error' => false, 'empty' => 'Select', 'data-rule-required' => true, 'data-msg-required' => 'Select Unit']); ?>

													</td>
													<td>
														<?php echo $this->Form->control('finance.0.value', ['class' => 'form-control financevalue amount', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'onkeyup' => 'calculatefinancevalue()', 'placeholder' => 'Value', 'data-rule-required' => true, 'data-msg-required' => 'Enter Value', 'style' => 'text-align:end']); ?>
													</td>
													<td>
														<?php echo $this->Form->control('finance.0.remarks', ['class' => 'form-control', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Remarks', 'data-rule-required' => true, 'data-msg-required' => 'Enter Value', 'style' => 'text-align:end']); ?>
													</td>


													<td>
													</td>
												</tr>
												<?php } else {
												foreach ($means_Finance as $key => $value) {
												?>

													<tr class="financeadding_row_in_post  finance_<?php echo $key;  ?>">
														<td align="center"><?php echo ($key + 1); ?>.</td>

														<td>
															<?php echo $this->Form->control('finance.' . $key . '.item', ['class' => 'form-select', 'templates' => ['inputContainer' => '{{content}}'], 'options' => $finance_dropdown, 'label' => false, 'error' => false, 'empty' => 'Select', 'data-rule-required' => true, 'data-msg-required' => 'Select Unit', 'value' => $value['item']]); ?>
															<?php echo $this->Form->control('finance.' . $key . '.finance_id', ['label' => false, 'error' => false, 'empty' => 'Select', 'type' => 'hidden', 'value' => $value['id']]); ?>

														</td>

														<td>
															<?php echo $this->Form->control('finance.' . $key . '.value', ['class' => 'form-control financevalue amount', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Value', 'onkeyup' => 'calculatefinancevalue()', 'data-rule-required' => true, 'data-msg-required' => 'Enter Value', 'value' => $value['value']]); ?>
														</td>
														<td>
															<?php echo $this->Form->control('finance.' . $key . '.remarks', ['class' => 'form-control', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Remarks', 'data-rule-required' => true, 'data-msg-required' => 'Enter Remarks', 'value' => $value['remarks']]); ?>
														</td>


														<td style="text-align:center;">
															<?php if ($key != 0) { ?>
																<a onclick='remove_finance(<?php echo $key; ?>);'>
																	<button type="button" class="btn btn-danger btn-sm" style="margin-left:0px;width:65px;font-size:11px;">Delete</button>
																</a>
															<?php } ?>
														</td>
													</tr>
											<?php }
											} ?>
										</tbody>
										<tfoot>
											<tr>
												<th colspan="2" style="text-align:right">Total</th>
												<th><?php echo $this->Form->control('total_finance_value', ['class' => 'form-control', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Total Value', 'readonly', 'style' => 'text-align:end']); ?>
												</th>
												<th>
												</th>
											</tr>
										</tfoot>
									</table>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-12">
								<h5 class="p-3">4.5 Project Profitability Analysis</h5>
								<div class="table-responsive">
									<table class="table table-bordered responsive">
										<thead class="table-dark">
											<tr class="text-center">
												<th style="width:2%;"> S.No </th>
												<th style="width:50%;">Description</th>
												<th style="width:35%;">Value (Rs.)</th>
											</tr>
										</thead>
										<tbody class="rawadding">
											<tr>
												<td align="center">1.</td>
												<td>Sales Revenue
												</td>
												<td>
													<?php echo $this->Form->control('sales_revenue', ['class' => 'form-control value amount', 'type' => 'text', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'onkeyup' => 'calculategrossprofit()', 'placeholder' => 'Value', 'value' => $project['sales_revenue'], 'style' => 'text-align:end']); ?>
												</td>
											</tr>
											<tr>
												<td align="center">2.</td>
												<td>Manufacturing Expenses
												</td>
												<td><?php echo $this->Form->control('manufacturing_expenses', ['class' => 'form-control value amount', 'type' => 'text', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'onkeyup' => 'calculategrossprofit()', 'placeholder' => 'Value', 'value' => $manufacturing_expenses, 'readonly', 'style' => 'text-align:end']); ?>
												</td>
											</tr>
											<tr>
												<td align="center">3.</td>
												<td>Selling / Distribution Expenses
												</td>
												<td><?php echo $this->Form->control('distribution_expenses', ['class' => 'form-control value amount', 'type' => 'text', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'onkeyup' => 'calculategrossprofit()', 'placeholder' => 'Value', 'value' => $project['distribution_expenses'], 'style' => 'text-align:end']); ?>
												</td>
											</tr>
											<tr>
												<td align="center">4.</td>
												<td>Administration Expenses
												</td>
												<td><?php echo $this->Form->control('administrative_expenses', ['class' => 'form-control value amount', 'type' => 'text', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'onkeyup' => 'calculategrossprofit()', 'placeholder' => 'Value', 'value' => $project['administrative_expenses'], 'style' => 'text-align:end']); ?>
												</td>
											</tr>
											<tr>
												<td align="center">5.</td>
												<td>Interest for Term Loan and Working Capital
												</td>
												<td><?php echo $this->Form->control('interest_loan', ['class' => 'form-control value amount', 'type' => 'text', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'onkeyup' => 'calculategrossprofit()', 'placeholder' => 'Value', 'value' => $project['interest_loan'], 'style' => 'text-align:end']); ?>
												</td>
											</tr>
											<tr>
												<td align="center">6.</td>
												<td>Depreciation
												</td>
												<td><?php echo $this->Form->control('depreciation', ['class' => 'form-control value amount', 'type' => 'text', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'onkeyup' => 'calculategrossprofit()', 'placeholder' => 'Value', 'value' => $project['depreciation'], 'style' => 'text-align:end']); ?>
												</td>
											</tr>
											<tr>
												<td align="center">7.</td>
												<td>Gross Profit
												</td>
												<td><?php echo $this->Form->control('gross_profit', ['class' => 'form-control value amount', 'type' => 'text', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Value', 'value' => $project['gross_profit'], 'readonly', 'style' => 'text-align:end']); ?>
												</td>
											</tr>
											<tr>
												<td align="center">8.</td>
												<td>Income Tax
												</td>
												<td><?php echo $this->Form->control('income_tax', ['class' => 'form-control value amount', 'type' => 'text', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'onkeyup' => 'calculatenetprofit()', 'placeholder' => 'Value', 'value' => $project['income_tax'], 'style' => 'text-align:end']); ?>
												</td>
											</tr>
											<tr>
												<td align="center">9.</td>
												<td>Net Profit
												</td>
												<td><?php echo $this->Form->control('net_profit', ['class' => 'form-control value amount', 'type' => 'text', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Value', 'value' => $project['net_profit'], 'style' => 'text-align:end']); ?>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
						<!-- </div> -->
				</div>
				<!--h5>4.4 Means of Finance</h5>
						 <div class="row">         
							<div class="col-sm-12 col-md-12"><div class="table-responsive">
                                   <table class="table table-bordered responsive">
									<thead class="table-dark">
										<tr class="text-center">
											<th style="width:2%;"> S.No </th>
											<th style="width:35%;">Particulars</th>
											<th style="width:20%;">Value (Rs.)</th>
											<th style="width:30%;">Remarks</th>											
										</tr>										
									</thead>
									  <tbody class="rawadding">
									        <tr>
												<td align="center">1.</td>												
												<td>Working Capital Finance
												</td>												
												<td>
												  <?php echo $this->Form->control('capital_finance_value', ['class' => 'form-control financevalue amount', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'onkeyup' => 'calculatefinancevalue()', 'placeholder' => 'Value', 'value' => $means_Finance['capital_finance_value'], 'style' => 'text-align:end']); ?>
												  <?php echo $this->Form->control('mean_finance_id', ['label' => false, 'error' => false, 'type' => 'hidden', 'value' => $means_Finance['id']]); ?>

												</td>
												<td><?php echo $this->Form->control('capital_finance_remark', ['class' => 'form-control', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Remarks', 'type' => 'textarea', 'rows' => 2, 'value' => $means_Finance['capital_finance_remark']]); ?>
												</td>									
											</tr>
											<tr>
												<td align="center">2.</td>												
												<td>Subsidy
												</td>												
												<td><?php echo $this->Form->control('subsidy_value', ['class' => 'form-control financevalue amount', 'type' => 'text', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'onkeyup' => 'calculatefinancevalue()', 'placeholder' => 'Value', 'value' => $means_Finance['subsidy_value'], 'style' => 'text-align:end']); ?>
												</td>
												<td><?php echo $this->Form->control('subsidy_remark', ['class' => 'form-control', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Remarks', 'type' => 'textarea', 'rows' => 2, 'value' => $means_Finance['subsidy_remark']]); ?>
												</td>										
										   </tr>
											<tr>
												<td align="center">3.</td>												
												<td>Term Loan
												</td>												
												<td><?php echo $this->Form->control('loan_value', ['class' => 'form-control financevalue amount', 'type' => 'text', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'onkeyup' => 'calculatefinancevalue()', 'placeholder' => 'Value', 'value' => $means_Finance['loan_value'], 'style' => 'text-align:end']); ?>
												</td>
												<td><?php echo $this->Form->control('loan_remark', ['class' => 'form-control', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Remarks', 'type' => 'textarea', 'rows' => 2, 'value' => $means_Finance['loan_remark']]); ?>
												</td>										
											</tr>
											<tr>
												<td align="center">4.</td>												
												<td>Own Investment
												</td>												
												<td><?php echo $this->Form->control('investment_value', ['class' => 'form-control financevalue amount', 'type' => 'text', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'onkeyup' => 'calculatefinancevalue()', 'placeholder' => 'Value', 'value' => $means_Finance['investment_value'], 'style' => 'text-align:end']); ?>
												</td>
												<td><?php echo $this->Form->control('investment_remark', ['class' => 'form-control', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Remarks', 'type' => 'textarea', 'rows' => 2, 'value' => $means_Finance['investment_remark']]); ?>
												</td>											
											</tr>
											 <tr>
												<td align="center">5.</td>												
												<td>Any Other
												</td>												
												<td><?php echo $this->Form->control('other_value', ['class' => 'form-control financevalue amount', 'type' => 'text', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'onkeyup' => 'calculatefinancevalue()', 'placeholder' => 'Value', 'value' => $means_Finance['other_value'], 'style' => 'text-align:end']); ?>
												</td>
												<td><?php echo $this->Form->control('other_remark', ['class' => 'form-control', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Remarks', 'type' => 'textarea', 'rows' => 2, 'value' => $means_Finance['other_remark']]); ?>
												</td>											
											</tr>	
									</tbody>
									<tfoot>
										<tr>											
											<th colspan ="2" style="text-align:right">Total</th>											 
											<th><?php echo $this->Form->control('total_finance_value', ['class' => 'form-control', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Total Value', 'readonly', 'style' => 'text-align:end']); ?>
											</th>
											<th>
											</th>		
										</tr>
									</tfoot>
								</table></div>
							</div>		
						</div>
                     			
						<h5>4.5 Project Profitability Analysis</h5>
						 <div class="row">         
							<div class="col-sm-12 col-md-12"><div class="table-responsive">
                                   <table class="table table-bordered responsive">
									<thead class="table-dark">
										<tr class="text-center">
											<th style="width:2%;"> S.No </th>
											<th style="width:50%;">Description</th>
											<th style="width:20%;">Value (Rs.)</th>											
										</tr>										
									</thead>
									  <tbody class="rawadding">
									        <tr>
												<td align="center">1.</td>												
												<td>Sales Revenue
												</td>												
												<td>
												   <?php echo $this->Form->control('sales_revenue', ['class' => 'form-control value amount', 'type' => 'text', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'onkeyup' => 'calculategrossprofit()', 'placeholder' => 'Value', 'data-rule-required' => true, 'data-msg-required' => 'Enter Sales Revenue', 'value' => $project['sales_revenue'], 'style' => 'text-align:end']); ?>
												</td>																					
											</tr>
											<tr>
												<td align="center">2.</td>												
												<td>Manufacturing Expenses
												</td>												
												<td><?php echo $this->Form->control('manufacturing_expenses', ['class' => 'form-control value amount', 'type' => 'text', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'onkeyup' => 'calculategrossprofit()', 'placeholder' => 'Value', 'data-rule-required' => true, 'data-msg-required' => 'Enter Value', 'value' => $manufacturing_expenses, 'readonly', 'style' => 'text-align:end']); ?>
												</td>																						
										   </tr>
											<tr>
												<td align="center">3.</td>												
												<td>Selling / Distribution Expenses
												</td>												
												<td><?php echo $this->Form->control('distribution_expenses', ['class' => 'form-control value amount', 'type' => 'text', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'onkeyup' => 'calculategrossprofit()', 'placeholder' => 'Value', 'data-rule-required' => true, 'data-msg-required' => 'Enter Selling / Distribution Expenses', 'value' => $project['distribution_expenses'], 'style' => 'text-align:end']); ?>
												</td>																					
											</tr>
 											<tr>
												<td align="center">4.</td>												
												<td>Administration Expenses
												</td>												
												<td><?php echo $this->Form->control('administrative_expenses', ['class' => 'form-control value amount', 'type' => 'text', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'onkeyup' => 'calculategrossprofit()', 'placeholder' => 'Value', 'data-rule-required' => true, 'data-msg-required' => 'Enter Administration Expenses', 'value' => $project['administrative_expenses'], 'style' => 'text-align:end']); ?>
												</td>																					
											</tr>
                                            <tr>
												<td align="center">5.</td>												
												<td>Interest for Term Loan and Working Capital
												</td>												
												<td><?php echo $this->Form->control('interest_loan', ['class' => 'form-control value amount', 'type' => 'text', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'onkeyup' => 'calculategrossprofit()', 'placeholder' => 'Value', 'data-rule-required' => true, 'data-msg-required' => 'Enter Interest for Term Loan and Working Capital', 'value' => $project['interest_loan'], 'style' => 'text-align:end']); ?>
												</td>																					
											</tr>
											 <tr>
												<td align="center">6.</td>												
												<td>Depreciation
												</td>												
												<td><?php echo $this->Form->control('depreciation', ['class' => 'form-control value amount', 'type' => 'text', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'onkeyup' => 'calculategrossprofit()', 'placeholder' => 'Value', 'data-rule-required' => true, 'data-msg-required' => 'Enter Depreciation', 'value' => $project['depreciation'], 'style' => 'text-align:end']); ?>
												</td>																					
											</tr>
											 <tr>
												<td align="center">7.</td>												
												<td>Gross Profit
												</td>												
												<td><?php echo $this->Form->control('gross_profit', ['class' => 'form-control value amount', 'type' => 'text', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Value', 'data-rule-required' => true, 'data-msg-required' => 'Enter Value', 'value' => $project['gross_profit'], 'readonly', 'style' => 'text-align:end']); ?>
												</td>																					
											</tr>
											<tr>
												<td align="center">8.</td>												
												<td>Income Tax
												</td>												
												<td><?php echo $this->Form->control('income_tax', ['class' => 'form-control value amount', 'type' => 'text', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'onkeyup' => 'calculatenetprofit()', 'placeholder' => 'Value', 'data-rule-required' => true, 'data-msg-required' => 'Enter Income Tax', 'value' => $project['income_tax'], 'style' => 'text-align:end']); ?>
												</td>																					
											</tr>
											<tr>
												<td align="center">9.</td>												
												<td>Net Profit												
												</td>												
												<td><?php echo $this->Form->control('net_profit', ['class' => 'form-control value amount', 'type' => 'text', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Value', 'data-rule-required' => true, 'data-msg-required' => 'Enter Value', 'value' => $project['net_profit'], 'style' => 'text-align:end']); ?>
												</td>																					
											</tr>											
									</tbody>									
								</table> </div>
							</div>		
						</div-->


						<?php if($project['payment_status'] != 1){ ?>
					<!--begin::Actions-->
					<div class="d-flex flex-stack pt-15">
						<div>
							<button type="submit" class="btn btn-lg btn-primary">
								<span class="indicator-label">Save & Continue
									<i class="ki-duotone ki-arrow-right fs-4 ms-2">
										<span class="path1"></span>
										<span class="path2"></span>
									</i></span>
							</button>
						</div>
					</div>
				<?php } ?>
				<!--end::Actions-->
				</form>
				<!--end::Form-->
			</div>
			<!--end::Wrapper-->
		</div>
		<!--end::Content-->
	</div>
	<!--end::Body-->
</div>
<!--end::Authentication - Multi-steps-->
</div>
<?php echo $this->Form->End(); ?>


<script>
	function financeadding() {
		//var type
		var j = ($('.financeadding_row_in_post').length);
		var row_no = j - 1;
		var item = $("#finance-" + row_no + "-item").val();

		//alert(j);
		if (item != '') {
			$.ajax({
				async: true,
				dataType: "html",
				url: '<?php echo $this->Url->webroot; ?>../ajaxaddfinance/' + j,

				// beforeSend: function(xhr) {
				// xhr.setRequestHeader('X-CSRF-Token', $('[name="_csrfToken"]').val());
				// },
				success: function(data, textStatus) {
					//alert(data);
					$('.financeadding').append(data);
				}
				//alert(data);
			});
		} else if (item == '') {
			alert("Select Item");
			$("#finance-" + row_no + "-item").focus();
		}
	}


	function remove_finance(k) {

//alert('hi');
if (confirm('Are you Sure You want to delete?')) {
	var k;
	var item = $('#finance-' + k + '-finance-id').val();
	//alert(item);
	$.ajax({
		async: true,
		dataType: "html",
		url: '<?php echo $this->Url->webroot ?>../deletefinance/' + item,
		beforeSend: function(xhr) {
			xhr.setRequestHeader('X-CSRF-Token', $('[name="_csrfToken"]').val());
		},
		success: function(data, textStatus) { //alert(data);
			if (data == 1) {
				$('.finance_' + k).remove();
				calculatefinancevalue()
				location.reload(true);
			} else {
				alert('Unable to Delete');
			}
		}
	});
}
}

	$(document).ready(function() {

		calculatefinancevalue()
	});
	// $("#FormID").validate({
	//     rules: {            
	//         'unit_name': {
	//             required: true
	//         },
	// 		'sectortype_id': {
	//             required: true
	//         },
	// 		'address': {
	//             required: true
	//         },
	// 		'localitytype_id': {
	//             required: true
	//         },
	// 		'pincode': {
	//             required: true
	//         },
	// 		'state_id': {
	//             required: true
	//         },
	// 		'registrationtype_id': {
	//             required: true
	//         },
	// 		'project_cost': {
	//             required: true
	//         },
	// 		'loan_amount': {
	//             required: true
	//         },
	// 		'loan_type_id': {
	//             required: true
	//         },
	// 		'loan_purpose_id': {
	//             required: true
	//         }
	//     },

	//     messages: {

	//         'unit_name': {
	//             required: "Enter Unit / Entity Name"
	//         },
	// 		'sectortype_id': {
	//             required: "Select Sector Type"
	//         },
	// 		'address': {
	//             required: "Enter Address"
	//         },
	// 		'localitytype_id': {
	//             required: "Select Locality"
	//         },
	// 		'pincode': {
	//             required:  "Enter Pincode"
	//         },
	// 		'state_id': {
	//             required:  "Select State"
	//         },
	// 		'registrationtype_id': {
	//             required:  "Select Registration Type"
	//         },
	// 		'project_cost': {
	//             required:  "Enter Project Cost"
	//         },
	// 		'loan_amount': {
	//             required:  "Enter Loan Amount"
	//         },
	// 		'loan_type_id': {
	//             required:  "Enter Loan Type"
	//         },
	// 		'loan_purpose_id': {
	//             required:  "Enter Loan Purpose"
	//         }
	//     },
	//     submitHandler: function(form) {
	//         form.submit();
	//         $(".btn").prop('disabled', true);
	//     }
	// });

	function calculategrossprofit() {
		var sales_revenue = $('#sales-revenue').val() ? $('#sales-revenue').val() : 0;
		var manufacturing_expenses = $('#manufacturing-expenses').val() ? $('#manufacturing-expenses').val() : 0;
		var distribution_expenses = $('#distribution-expenses').val() ? $('#distribution-expenses').val() : 0;
		var administrative_expenses = $('#administrative-expenses').val() ? $('#administrative-expenses').val() : 0;
		var interest_loan = $('#interest-loan').val() ? $('#interest-loan').val() : 0;
		var depreciation = $('#depreciation').val() ? $('#depreciation').val() : 0;

		if (sales_revenue > 0) {
			var revenue = parseFloat(sales_revenue);
			var expenses = parseFloat(manufacturing_expenses) + parseFloat(distribution_expenses) + parseFloat(administrative_expenses) + parseFloat(interest_loan) + parseFloat(depreciation);
			var gross_profit = parseFloat(revenue) - parseFloat(expenses);
			if (!isNaN(gross_profit)) {
				$('#gross-profit').val(gross_profit);
			} else {
				$('#gross-profit').val('');
			}
		}
	}

	function calculatenetprofit() {
		var gross_profit = $('#gross-profit').val() ? $('#gross-profit').val() : 0;
		var income_tax = $('#income-tax').val() ? $('#income-tax').val() : 0;
		var net_profit = parseFloat(gross_profit) - parseFloat(income_tax);
		if (!isNaN(net_profit) && income_tax != 0) {
			$('#net-profit').val(net_profit);
		} else {
			$('#net-profit').val('');
		}
	}

	function calculatefinancevalue() {
		var financevalue = 0;
		$(".financevalue").each(function() {

			if (parseFloat(this.value) != 'NAN') {
				financevalue += parseFloat(this.value);
			}
		});

		if (!isNaN(financevalue)) {
			$('#total-finance-value').val(financevalue.toFixed(2));

		} else {
			$('#total-finance-value').val('');
		}
	}
</script>