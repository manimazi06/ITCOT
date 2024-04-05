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
						<div class="stepper-item current" data-kt-stepper-element="nav">
							<?php if ($project['step_count'] >= '5') { ?>
								<?php echo $this->Html->link(__(' <div class="stepper-icon rounded-3">
											<i class="ki-duotone ki-check fs-2 stepper-check"></i>
											<span class="stepper-number">6</span>
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
						<div class="stepper-item" data-kt-stepper-element="nav">
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
						<h3 class="tab2-head">4.0 Cost of the Project</h3>
						<hr style="width: 100%; margin-top: 5px" />
						<div class="row">
							<div class="col-sm-6 col-md-6">
								<h5 class="p-3">4.1 Fixed Capital</h5>
								<div class="table-responsive">
									<table class="table table-bordered responsive">
										<thead class="table-dark">
											<tr class="text-center">
												<th style="width:2%;"> S.No </th>
												<th style="width:20%;">Item</th>
												<th style="width:15%;">Value (Rs.)</th>
												<th style="width:8%;"> <button type="button" class="btn btn-success btn-sm" onclick="fixedadding();"><i class="fa fa-plus-circle"></i>&nbsp;Add</button>

											</tr>
										</thead>
										<tbody class="fixedadding">
											<?php if ($fixed_count == 0) { ?>
												<tr class="fixedadding_row_in_post">
													<td align="center">1.</td>
													<td>
														<?php echo $this->Form->control('fixed.0.item', ['class' => 'form-select', 'templates' => ['inputContainer' => '{{content}}'], 'options' => $fixed, 'label' => false, 'error' => false, 'empty' => 'Select', 'data-rule-required' => true, 'data-msg-required' => 'Select Unit']); ?>

													</td>
													<td>
														<?php echo $this->Form->control('fixed.0.capital_value', ['class' => 'form-control value amount', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'onkeyup' => 'calculatevalue()', 'placeholder' => 'Value', 'data-rule-required' => true, 'data-msg-required' => 'Enter Value', 'style' => 'text-align:end']); ?>
													</td>


													<td>
													</td>
												</tr>
												<?php } else {
												foreach ($fixed_capital as $key => $value) {
												?>

													<tr class="fixedadding_row_in_post  fixed_<?php echo $key;  ?>">
														<td align="center"><?php echo ($key + 1); ?>.</td>

														<td>
															<?php echo $this->Form->control('fixed.' . $key . '.item', ['class' => 'form-select', 'templates' => ['inputContainer' => '{{content}}'], 'options' => $fixed, 'label' => false, 'error' => false, 'empty' => 'Select', 'data-rule-required' => true, 'data-msg-required' => 'Select Unit', 'value' => $value['item']]); ?>
															<?php echo $this->Form->control('fixed.' . $key . '.fixed_id', ['label' => false, 'error' => false, 'empty' => 'Select', 'type' => 'hidden', 'value' => $value['id']]); ?>

														</td>
														
														<td>
															<?php echo $this->Form->control('fixed.' . $key . '.capital_value', ['class' => 'form-control value amount', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Value', 'onkeyup' => 'calculatevalue()', 'data-rule-required' => true, 'data-msg-required' => 'Enter Requirement', 'value' => $value['capital_value']]); ?>
														</td>


														<td style="text-align:center;">
															<?php if ($key != 0) { ?>
																<a onclick='remove_fixed(<?php echo $key; ?>);'>
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
												<th><?php echo $this->Form->control('total_value', ['class' => 'form-control', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Total Value', 'readonly', 'value' => $fixed_capital['total_value'], 'style' => 'text-align:end']); ?>
												</th>
											</tr>
										</tfoot>
									</table>
								</div>
							</div>

							<!-- <div class="row">          -->
							<div class="col-sm-6 col-md-6">
								<h5 class="p-3">4.3 Total Cost of the Project</h5>
								<div class="table-responsive">
									<table class="table table-bordered responsive">
										<thead class="table-dark">
											<tr class="text-center">
												<th style="width:2%;"> S.No </th>
												<th style="width:20%;">Particulars</th>
												<th style="width:15%;">Value (Rs.)</th>
											</tr>
										</thead>
										<tbody class="rawadding">
											<tr>
												<td align="center">1.</td>
												<td>Fixed Capital
												</td>
												<td><?php echo $this->Form->control('total_fixed_capital', ['class' => 'form-control totalcost', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Value', 'readonly', 'style' => 'text-align:end']); ?>
												</td>
											</tr>
											<tr>
												<td align="center">2.</td>
												<td>Working Capital
												</td>
												<td><?php echo $this->Form->control('total_working_capital', ['class' => 'form-control totalcost', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Value', 'readonly', 'style' => 'text-align:end']); ?>
												</td>
											</tr>
											<tr>
												<td align="center">3.</td>
												<td>Preliminary and Pre operative Expenses
												</td>
												<td><?php echo $this->Form->control('preliminary_expenses', ['class' => 'form-control amount totalcost', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'onkeyup' => 'calculatetotalcost()', 'placeholder' => 'Value', 'value' => $project['preliminary_expenses'], 'style' => 'text-align:end']); ?>
												</td>
											</tr>
										</tbody>
										<tfoot>
											<tr>
												<th colspan="2" style="text-align:right">Total</th>
												<th><?php echo $this->Form->control('total_cost', ['class' => 'form-control', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Total Value', 'readonly', 'style' => 'text-align:end']); ?>
												</th>
											</tr>
										</tfoot>
									</table>
								</div>
							</div>
							<!-- </div> -->
						</div>
						<h5>4.2 Working Capital</h5>
						<div class="row">
							<div class="col-sm-12 col-md-12">
								<div class="table-responsive">
									<table class="table table-bordered responsive">
										<thead class="table-dark">
											<tr class="text-center">
												<th style="width:2%;"> S.No </th>
												<th style="width:20%;">Item</th>
												<th style="width:20%;">Duration</th>
												<th style="width:15%;">Quantity</th>
												<th style="width:10%;">Unit</th>
												<th style="width:15%;">Value (Rs.)</th>
												<th style="width:8%;"> <button type="button" class="btn btn-success btn-sm" onclick="capitaladding();"><i class="fa fa-plus-circle"></i>&nbsp;Add</button>


											</tr>
										</thead>
										<tbody class="capitaladding">
											<?php if ($working_count == 0) { ?>
												<tr class="capitaladding_row_in_post">
													<td align="center">1.</td>
													<td>
														<?php echo $this->Form->control('capital.0.item', ['class' => 'form-select', 'templates' => ['inputContainer' => '{{content}}'], 'options' => $capital_drop, 'label' => false, 'error' => false, 'empty' => 'Select', 'data-rule-required' => true, 'data-msg-required' => 'Select Unit']); ?>

													</td>
													<td>
														<?php echo $this->Form->control('capital.0.duration', ['class' => 'form-control', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Duration', 'data-rule-required' => true, 'data-msg-required' => 'Enter Value', 'style' => 'text-align:end']); ?>
													</td>


													<td>
														<?php echo $this->Form->control('capital.0.quantity', ['class' => 'form-control workingquantity amount', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'onkeyup' => 'calculateworkingquantity()', 'placeholder' => 'Quantity', 'data-rule-required' => true, 'data-msg-required' => 'Enter Quantity']); ?>

													</td>

													<td>
														<?php echo $this->Form->control('capital.0.unit_id', ['class' => 'form-select', 'templates' => ['inputContainer' => '{{content}}'], 'options' => $units, 'label' => false, 'error' => false, 'empty' => 'Select', 'data-rule-required' => true, 'data-msg-required' => 'Select Unit']); ?>

													</td>
													<td>
														<?php echo $this->Form->control('capital.0.values', ['class' => 'form-control workingvalue amount', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'onkeyup' => 'calculateworkingvalue()', 'placeholder' => 'Value', 'data-rule-required' => true, 'data-msg-required' => 'Enter Value', 'style' => 'text-align:end']); ?>

													</td>

												</tr>
												<?php } else {
												foreach ($working_capital as $key1 => $value1) {
												?>

													<tr class="capitaladding_row_in_post  capital_<?php echo $key1;  ?>">
													
														<td align="center"><?php echo ($key1 + 1); ?>.</td>

														<td>
															<?php echo $this->Form->control('capital.' . $key1 . '.item', ['class' => 'form-select', 'templates' => ['inputContainer' => '{{content}}'], 'options' => $capital_drop, 'label' => false, 'error' => false, 'empty' => 'Select', 'data-rule-required' => true, 'data-msg-required' => 'Select Unit', 'value' => $value1['item']]); ?>
															<?php echo $this->Form->control('capital.' . $key1 . '.capital_id', ['label' => false, 'error' => false, 'empty' => 'Select', 'type' => 'hidden', 'value' => $value1['id']]); ?>

														</td>
														<td>
															<?php echo $this->Form->control('capital.' . $key1 . '.duration', ['class' => 'form-control', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Duration', 'onkeyup' => 'calculatevalue()', 'data-rule-required' => true, 'data-msg-required' => 'Enter Requirement', 'value' => $value1['duration']]); ?>
														</td>
														<td>
															<?php echo $this->Form->control('capital.' . $key1 . '.quantity', ['class' => 'form-control workingquantity amount', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Quantity', 'onkeyup' => 'calculateworkingquantity()', 'data-rule-required' => true, 'data-msg-required' => 'Enter Quantity', 'value' => $value1['quantity']]); ?>

														</td>
														<td>
															<?php echo $this->Form->control('capital.' . $key1 . '.unit_id', ['class' => 'form-select', 'templates' => ['inputContainer' => '{{content}}'], 'options' => $units, 'label' => false, 'error' => false, 'empty' => 'Select', 'data-rule-required' => true, 'data-msg-required' => 'Select Unit', 'value' => $value1['unit_id']]); ?>

														</td>
														<td>
															<?php echo $this->Form->control('capital.' . $key1 . '.value', ['class' => 'form-control  workingvalue amount', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Duration', 'onkeyup' => 'calculateworkingvalue()', 'data-rule-required' => true, 'data-msg-required' => 'Enter value', 'value' => $value1['value']]); ?>

														</td>

														<td style="text-align:center;">
															<?php if ($key1 != 0) { ?>
																<a onclick='remove_capital(<?php echo $key1; ?>);'>
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

												<th colspan="3" style="text-align:right">Total</th>
												<th><?php echo $this->Form->control('total_working_quantity', ['class' => 'form-control', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Total Quantity', 'readonly']); ?>
												</th>
												<th></th>
												<th><?php echo $this->Form->control('total_working_value', ['class' => 'form-control', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Total Value', 'readonly', 'style' => 'text-align:end']); ?>
												</th>
											</tr>
										</tfoot>
									</table>
								</div>
							</div>
						</div>
						<!-- <h5>4.3 Total Cost of the Project</h5>
						 <div class="row">         
							<div class="col-sm-6 col-md-6">
								<div class="table-responsive">
                                   <table class="table table-bordered responsive">
									<thead class="table-dark">
										<tr class="text-center">
											<th style="width:2%;"> S.No </th>
											<th style="width:50%;">Particulars</th>
											<th style="width:15%;">Value (Rs.)</th>											
										</tr>										
									</thead>
									  <tbody class="rawadding">
									        <tr>
												<td align="center">1.</td>												
												<td>Fixed Capital
												</td>												
												<td><?php echo $this->Form->control('total_fixed_capital', ['class' => 'form-control totalcost', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Value', 'readonly', 'style' => 'text-align:end']); ?>
												</td>																					
											</tr>
											<tr>
												<td align="center">2.</td>												
												<td>Working Capital
												</td>												
												<td><?php echo $this->Form->control('total_working_capital', ['class' => 'form-control totalcost', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Value', 'readonly', 'style' => 'text-align:end']); ?>
												</td>																						
										   </tr>
											<tr>
												<td align="center">3.</td>												
												<td>Preliminary and Pre operative Expenses
												</td>												
												<td><?php echo $this->Form->control('preliminary_expenses', ['class' => 'form-control amount totalcost', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'onkeyup' => 'calculatetotalcost()', 'placeholder' => 'Value', 'data-rule-required' => true, 'data-msg-required' => 'Enter Preliminary /Preoperative Expenses', 'value' => $project['preliminary_expenses'], 'style' => 'text-align:end']); ?>
												</td>																					
											</tr>																					
									</tbody>
									<tfoot>
										<tr>											
											 <th colspan ="2" style="text-align:right">Total</th>
											 <th><?php echo $this->Form->control('total_cost', ['class' => 'form-control', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Total Value', 'readonly', 'style' => 'text-align:end']); ?>
											</th>												
										</tr>
									</tfoot>
								</table>
							</div>
							</div>		
						</div> -->



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
	$(document).ready(function() {
		calculatevalue();
		calculateworkingvalue();
		calculateworkingquantity();
		calculatetotalcost()
		calculatefinancevalue()
	});

	function fixedadding() {
		//var type
		var j = ($('.fixedadding_row_in_post').length);
		var row_no = j - 1;
		var item = $("#fixed-" + row_no + "-item").val();

		//alert(j);
		if (item != '') {
			$.ajax({
				async: true,
				dataType: "html",
				url: '<?php echo $this->Url->webroot; ?>../ajaxaddfixed/' + j,

				// beforeSend: function(xhr) {
				// xhr.setRequestHeader('X-CSRF-Token', $('[name="_csrfToken"]').val());
				// },
				success: function(data, textStatus) {
					///alert(data);
					$('.fixedadding').append(data);
				}
				//alert(data);
			});
		} else if (item == '') {
			alert("Select Item");
			$("#raw-" + row_no + "-item").focus();
		}
	}



	function capitaladding() {
		//var type
		var j = ($('.capitaladding_row_in_post').length);
		var row_no = j - 1;
		var item = $("#capital-" + row_no + "-item").val();

		//alert(j);
		if (item != '') {
			$.ajax({
				async: true,
				dataType: "html",
				url: '<?php echo $this->Url->webroot; ?>../ajaxaddcapital/' + j,

				// beforeSend: function(xhr) {
				// xhr.setRequestHeader('X-CSRF-Token', $('[name="_csrfToken"]').val());
				// },
				success: function(data, textStatus) {
					///alert(data);
					$('.capitaladding').append(data);
				}
				//alert(data);
			});
		} else if (item == '') {
			alert("Select Item");
			$("#capital-" + row_no + "-item").focus();
		}
	}



	function remove_fixed(k) {

		//alert('hi');
		if (confirm('Are you Sure You want to delete?')) {
			var k;
			var item = $('#fixed-' + k + '-fixed-id').val();
			//alert(item);
			$.ajax({
				async: true,
				dataType: "html",
				url: '<?php echo $this->Url->webroot ?>../deletefixed/' + item,
				beforeSend: function(xhr) {
					xhr.setRequestHeader('X-CSRF-Token', $('[name="_csrfToken"]').val());
				},
				success: function(data, textStatus) { alert(data);
					if (data == 1) {
						$('.fixed_' + k).remove();
						calculatevalue();
						location.reload(true);
					} else {
						alert('Unable to Delete');
					}
				}
			});
		}
	}
	function remove_capital(k) {

		//alert('hi');
		if (confirm('Are you Sure You want to delete?')) {
			var k;
			var item = $('#capital-' + k + '-capital-id').val();
			//alert(item);
			$.ajax({
				async: true,
				dataType: "html",
				url: '<?php echo $this->Url->webroot ?>../deletecapital/' + item,
				beforeSend: function(xhr) {
					xhr.setRequestHeader('X-CSRF-Token', $('[name="_csrfToken"]').val());
				},
				success: function(data, textStatus) { //alert(data);
					if (data == 1) {
						$('.capital_' + k).remove();
						calculateworkingquantity();
						calculateworkingvalue();
						location.reload(true);
					} else {
						alert('Unable to Delete');
					}
				}
			});
		}
	}



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

	function calculatevalue() {
		var values = 0;
		$(".value").each(function() {

			if (parseFloat(this.value) != 'NAN') {
				values += parseFloat(this.value);
			}
		});

		if (!isNaN(values)) {
			$('#total-value').val(values.toFixed(2));
			$('#total-fixed-capital').val(values.toFixed(2));
			calculatetotalcost();

		} else {
			$('#total-value').val('');
		}
	}


	function calculateworkingvalue() {
		var workingvalue = 0;
		$(".workingvalue").each(function() {

			if (parseFloat(this.value) != 'NAN') {
				workingvalue += parseFloat(this.value);
			}
		});

		if (!isNaN(workingvalue)) {
			$('#total-working-value').val(workingvalue.toFixed(2));
			$('#total-working-capital').val(workingvalue.toFixed(2));
			calculatetotalcost();

		} else {
			$('#total-working-value').val('');
		}
	}


	function calculateworkingquantity() {
		var workingquantity = 0;
		$(".workingquantity").each(function() {

			if (parseFloat(this.value) != 'NAN') {
				workingquantity += parseFloat(this.value);
			}
		});

		if (!isNaN(workingquantity)) {
			$('#total-working-quantity').val(workingquantity);

		} else {
			$('#total-working-quantity').val('');
		}
	}


	function calculatetotalcost() {
		var totalcost = 0;
		$(".totalcost").each(function() {

			if (parseFloat(this.value) != 'NAN') {
				totalcost += parseFloat(this.value);
			}
		});

		if (!isNaN(totalcost)) {
			$('#total-cost').val(totalcost.toFixed(2));

		} else {
			$('#total-cost').val('');
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