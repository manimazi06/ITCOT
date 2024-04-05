f<style>
	.step-footer {
		text-align: center !important;
		margin-bottom: 20px !important;
	}

	.flatpickr-months .flatpickr-month {
		height: 64px !important;
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
										</div>'), ['controller' => 'Projects', 'action' => 'basicdetails', base64_encode($id)], ['escape' => false, 'class' => 'stepper-wrapper']); ?>
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
										</div>'), ['controller' => 'Projects', 'action' => 'entitydetails', base64_encode($id)], ['escape' => false, 'class' => 'stepper-wrapper']); ?>
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
						<div class="stepper-item current" data-kt-stepper-element="nav">
							<?php if ($project['step_count'] >= '2') { ?>
								<?php echo $this->Html->link(__(' <div class="stepper-icon rounded-3">
											<i class="ki-duotone ki-check fs-2 stepper-check"></i>
											<span class="stepper-number">3</span>
										</div><div class="stepper-label">
											<h3 class="stepper-title fs-2">Education & Work</h3>
											<div class="stepper-desc fw-normal">Education & Work</div>
										</div>'), ['controller' => 'Projects', 'action' => 'educationdetails', base64_encode($id)], ['escape' => false, 'class' => 'stepper-wrapper']); ?>
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
											<span class="stepper-number">4</span>
										</div><div class="stepper-label">
											<h3 class="stepper-title fs-2">Manufacturing</h3>
											<div class="stepper-desc fw-normal">Manufacturing</div>
										</div>'), ['controller' => 'Projects', 'action' => 'manufacturingdetails', base64_encode($id)], ['escape' => false, 'class' => 'stepper-wrapper']); ?>
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
											<span class="stepper-number">5</span>
										</div><div class="stepper-label">
											<h3 class="stepper-title fs-2">Utilities & Manpower</h3>
											<div class="stepper-desc fw-normal">Utilities & Manpower</div>
										</div>'), ['controller' => 'Projects', 'action' => 'manpowerdetails', base64_encode($id)], ['escape' => false, 'class' => 'stepper-wrapper']); ?>
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
											<span class="stepper-number">6</span>
										</div><div class="stepper-label">
											<h3 class="stepper-title fs-2">Capital & Total Cost</h3>
											<div class="stepper-desc fw-normal">Capital & Total Cost</div>
										</div>'), ['controller' => 'Projects', 'action' => 'projectcostdetails', base64_encode($id)], ['escape' => false, 'class' => 'stepper-wrapper']); ?>
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
										</div>'), ['controller' => 'Projects', 'action' => 'profitabilitydetails', base64_encode($id)], ['escape' => false, 'class' => 'stepper-wrapper']); ?>
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
										</div>'), ['controller' => 'Projects', 'action' => 'suppliementarydetails', base64_encode($id)], ['escape' => false, 'class' => 'stepper-wrapper']); ?>
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
										</div>'), ['controller' => 'Projects', 'action' => 'referencedetails', base64_encode($id)], ['escape' => false, 'class' => 'stepper-wrapper']); ?>
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
										</div>'), ['controller' => 'Projects', 'action' => 'paymentdetails', base64_encode($id)], ['escape' => false, 'class' => 'stepper-wrapper']); ?>
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

						<h3 class="tab2-head">Educational Qualification / Special Training / Work Experience</h3>
						<hr style="width: 100%; margin-top: 5px" />
						<h5>1.1 Educational Qualification<span class="text-danger">*</span></h5>
						<div class="row">
							<div class="col-sm-12 col-md-12">
								<div class="table-responsive">
									<table class="table table-bordered">
										<thead class="table-dark">
											<tr class="text-center">
												<th style="width:2%;"> S.No </th>
												<th style="width:15%;"> Education</th>
												<th style="width:30%;">Institute</th>
												<th style="width:15%;">Major Subject</th>
												<th style="width:15%;">Year of Passing</th>
												<th style="width:10%;"> <button type="button" class="btn btn-success btn-sm" onclick="educationadding();"><i class="fa fa-plus-circle"></i>&nbsp;Add</button>
												</th>
											</tr>
										</thead>
										<tbody class="eduadding">
											<?php if ($education_count == 0) { ?>
												<tr class="edupresent_row_in_post">

													<td align="center">1.</td>
													<td>
														<?php echo $this->Form->control('educationqualification.0.education_id', ['class' => 'form-select', 'templates' => ['inputContainer' => '{{content}}'], 'options' => $educations, 'label' => false, 'error' => false, 'empty' => 'Select', 'data-rule-required' => true, 'data-msg-required' => 'Select Education']); ?>
														<?php echo $this->Form->control('educationqualification.0.is_active', ['label' => false, 'error' => false, 'empty' => 'Select', 'type' => 'hidden', 'value' => 1]); ?>

													</td>
													<td><?php echo $this->Form->control('educationqualification.0.institute', ['class' => 'form-control name', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Institute', 'data-rule-required' => true, 'onkeypress' => "return AvoidSpace(this.value)", 'data-msg-required' => 'Enter Institute']); ?>
													</td>
													<td><?php echo $this->Form->control('educationqualification.0.major_subject', ['class' => 'form-control', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Major Subject', 'data-rule-required' => true, 'onkeypress' => "return AvoidSpacemajor(this.value)", 'data-msg-required' => 'Enter Major Subject']); ?>
													</td>
													<td>
														<?php echo $this->Form->control('educationqualification.0.year_passing', ['class' => 'form-control num', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Year Passing', 'data-rule-required' => true, 'data-msg-required' => 'Enter Year Passing', 'maxlength' => 4]); ?>
													</td>

													<td>

													</td>
													<!--td>
											<button type="button" class="btn btn-success" onclick="javascript:location.reload();">Reset</button>
											</td-->



												</tr>
												<?php } else {
												foreach ($education_details as $key => $value) {
												?>
													<tr class="edupresent_row_in_post education_<?php echo $key;  ?>">
														<td align="center"><?php echo ($key + 1); ?>.</td>
														<td>
															<?php echo $this->Form->control('educationqualification.' . $key . '.education_id', ['class' => 'form-select', 'templates' => ['inputContainer' => '{{content}}'], 'options' => $educations, 'label' => false, 'error' => false, 'empty' => 'Select', 'data-rule-required' => true, 'data-msg-required' => 'Select Education', 'value' => $value['education_id']]); ?>
															<?php echo $this->Form->control('educationqualification.' . $key . '.edu_qualification_id', ['label' => false, 'error' => false, 'empty' => 'Select', 'type' => 'hidden', 'value' => $value['id']]); ?>
															<?php echo $this->Form->control('educationqualification.' . $key . '.is_active', ['label' => false, 'error' => false, 'empty' => 'Select', 'type' => 'hidden', 'value' => $value['is_active']]); ?>
														</td>
														<td><?php echo $this->Form->control('educationqualification.' . $key . '.institute', ['class' => 'form-control name', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Institute', 'data-rule-required' => true, 'data-msg-required' => 'Enter Institute', 'onkeypress' => "return AvoidSpace(this.value,$key)", 'value' => $value['institute']]); ?>
														</td>
														<td><?php echo $this->Form->control('educationqualification.' . $key . '.major_subject', ['class' => 'form-control name', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Major Subject', 'data-rule-required' => true, 'data-msg-required' => 'Enter Major Subject', 'onkeypress' => "return AvoidSpacemajor(this.value,$key)", 'value' => $value['major_subject']]); ?>
														</td>
														<td><?php echo $this->Form->control('educationqualification.' . $key . '.year_passing', ['class' => 'form-control num', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Year Passing', 'data-rule-required' => true, 'data-msg-required' => 'Enter Year Passing', 'maxlength' => 4, 'value' => $value['year_passing']]); ?>
														</td>



														<td style="text-align:center;">
															<?php if ($key != 0) { ?>
																<a onclick='remove_education(<?php echo $key; ?>);'>
																	<button type="button" class="btn btn-danger btn-sm" style="margin-left:0px;width:65px;font-size:11px;">Delete</button>

																</a>
															<?php } ?>
														</td>


													</tr>
											<?php }
											} ?>
											<?php //endforeach; 
											?>
										</tbody>
									</table>
								</div>
							</div>
						</div> <br>
						<h5>1.2 Special Training<span class="text-danger">*</span></h5>
						
						<div class="row">
							<div class="col-sm-12 col-md-12">
								<div class="table-responsive">
									<table class="table table-bordered responsive">
										<thead class="table-dark">
											<tr class="text-center">
												<th style="width:1%;"> S.No </th>
												<th style="width:15%;">Training In</th>
												<th style="width:17%;">Institute</th>
												<th style="width:11%;">From Date</th>
												<th style="width:11%;">To Date</th>
												<th style="width:10%;">Duration</th>
												<th style="width:15%;">Achievement</th>
												<th style="width:7%;"> <button type="button" class="btn btn-success btn-sm" onclick="trainingadding();"><i class="fa fa-plus-circle"></i>&nbsp;Add</button>
												</th>
											</tr>
										</thead>
										<tbody class="trainingadding">
											<?php if ($training_count == 0) { ?>
												<tr class="trainingpresent_row_in_post">
													<td align="center">1.</td>
													<td><?php echo $this->Form->control('special.0.training_in', ['class' => 'form-control name', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => ' Training In', 'data-rule-required' => true, 'onkeypress' => "return AvoidSpacespecial(this.value)", 'data-msg-required' => 'Enter Training In']); ?>
													</td>
													<td><?php echo $this->Form->control('special.0.institute', ['class' => 'form-control name', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Institute', 'data-rule-required' => true, 'onkeypress' => "return AvoidSpaceins(this.value)", 'data-msg-required' => 'Enter Institute']); ?>
													</td>
													<td><?php echo $this->Form->control('special.0.from_date', ['class' => 'form-control flatpickr', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'From Date', 'style' => 'width:110px;', 'onchange' => 'trainingdays(0)','data-rule-required' => true, 'data-msg-required' => 'Select From date']); ?>
													</td>
													<td><?php echo $this->Form->control('special.0.to_date', ['class' => 'form-control flatpickr', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'To Date', 'style' => 'width:110px;', 'onchange' => 'trainingdays(0)','onchange'=>'calculatehigher(0)','data-rule-required' => true, 'data-msg-required' => 'Select To date']); ?>
													</td>
													<td><?php echo $this->Form->control('special.0.duration', ['class' => 'form-control', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Duration', 'style' => 'width:180px;',  'readonly']); ?>
													</td>
													<td><?php echo $this->Form->control('special.0.achievement', ['class' => 'form-control', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Achievement', 'data-rule-required' => true, 'data-msg-required' => 'Enter Achievement', 'onkeypress' => "return AvoidSpaceachieve(this.value)", 'type' => 'textarea', 'rows' => 2]); ?>
													</td>
													<td>

													</td>
												</tr>
												<?php } else {
												foreach ($training_details as $key1 => $value1) {
												?>
													<tr class="trainingpresent_row_in_post training_<?php echo $key1; ?>">
														<td align="center"><?php echo ($key1 + 1); ?>.</td>
														<td><?php echo $this->Form->control('special.' . $key1 . '.training_in', ['class' => 'form-control name', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => ' Training In', 'data-rule-required' => true, 'data-msg-required' => 'Enter Training In', 'onkeypress' => "return AvoidSpacespecial(this.value,$key1)", 'value' => $value1['training_in']]); ?>
															<?php echo $this->Form->control('special.' . $key1 . '.special_training_id', ['label' => false, 'error' => false, 'empty' => 'Select', 'type' => 'hidden', 'value' => $value1['id']]); ?>
															<?php echo $this->Form->control('special.' . $key1 . '.is_active', ['label' => false, 'error' => false, 'empty' => 'Select', 'type' => 'hidden', 'value' => $value1['is_active']]); ?>
														</td>
														<td><?php echo $this->Form->control('special.' . $key1 . '.institute', ['class' => 'form-control name', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Institute', 'data-rule-required' => true, 'data-msg-required' => 'Enter Institute', 'onkeypress' => "return AvoidSpaceins(this.value,$key1)", 'value' => $value1['institute']]); ?>
														</td>
														<td><?php echo $this->Form->control('special.' . $key1 . '.from_date', ['class' => 'form-control flatpickr', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'From Date', 'style' => 'width:110px;', 'onchange' => 'trainingdays(' . $key1 . ')', 'value' => date('d-m-Y', strtotime($value1['from_date'])),'data-rule-required' => true, 'data-msg-required' => 'Select From date']); ?>
														</td>
														<td><?php echo $this->Form->control('special.' . $key1 . '.to_date', ['class' => 'form-control flatpickr', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'To Date', 'style' => 'width:110px;', 'onchange' => 'trainingdays(' . $key1 . ')','onchange'=>'calculatehigher(' . $key1 . ')', 'value' => date('d-m-Y', strtotime($value1['to_date'])),'data-rule-required' => true, 'data-msg-required' => 'Select To date']); ?>
														</td>
														<td><?php echo $this->Form->control('special.' . $key1 . '.duration', ['class' => 'form-control', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Duration', 'style' => 'width:180px;', 'value' => $value1['duration'], 'readonly']); ?>
														</td>
														<td><?php echo $this->Form->control('special.' . $key1 . '.achievement', ['class' => 'form-control', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Achievement', 'data-rule-required' => true, 'data-msg-required' => 'Enter Achievement', 'type' => 'textarea', 'rows' => 2, 'onkeypress' => "return AvoidSpaceachieve(this.value,$key1)", 'value' => $value1['achievement']]); ?>
														</td>
														<td style="text-align:center;">
															<?php if ($key1 != 0) { ?>
																<a onclick='remove_training(<?php echo $key1; ?>);'>
																	<button type="button" class="btn btn-danger btn-sm" style="margin-left:0px;width:65px;font-size:11px;">Delete</button>

																</a>
															<?php } ?>

														</td>
													</tr>
											<?php }
											} ?>
										</tbody>
									</table>
								</div>
							</div>
						</div><br>
						<h5>1.3 Work Experience (Past and Present)<span class="text-danger">*</span></h5>
						<div class="row">
							<div class="col-sm-12 col-md-12">
								<div class="table-responsive">
									<table class="table table-bordered responsive">
										<thead class="table-dark">
											<tr class="text-center">
												<th style="width:2%;"> S.No </th>
												<th style="width:15%;">Organisation</th>
												<th style="width:10%;">Position</th>
												<th style="width:15%;">Nature of Work</th>
												<th style="width:11%;">From Date</th>
												<th style="width:11%;">To Date</th>
												<th style="width:10%;">Duration</th>
												<th style="width:7%;"><button type="button" class="btn btn-success btn-sm" onclick="workadding();"><i class="fa fa-plus-circle"></i>&nbsp;Add</button>
												</th>
											</tr>
										</thead>
										<tbody class="workadding">
											<?php if ($work_count == 0) { ?>
												<tr class="workpresent_row_in_post">
													<td align="center">1.</td>
													<td><?php echo $this->Form->control('work.0.organisation', ['class' => 'form-control name', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => ' Organisation', 'data-rule-required' => true, 'onkeypress' => "return AvoidSpaceorg(this.value)", 'data-msg-required' => 'Enter Organisation']); ?>
													</td>
													<td><?php echo $this->Form->control('work.0.position', ['class' => 'form-control name', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Position', 'data-rule-required' => true, 'onkeypress' => "return AvoidSpacepos(this.value)", 'data-msg-required' => 'Enter Position', 'style' => 'width:110px;']); ?>
													</td>
													<td><?php echo $this->Form->control('work.0.nature_work', ['class' => 'form-control name', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Nature of Work', 'data-rule-required' => true, 'onkeypress' => "return AvoidSpacenature(this.value)", 'style' => 'width:110px;', 'data-msg-required' => 'Enter Nature of Work']); ?>
													</td>
													<td><?php echo $this->Form->control('work.0.from_date', ['class' => 'form-control flatpickr', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'From Date', 'data-rule-required' => true, 'data-msg-required' => 'Select Date', 'style' => 'width:110px;', 'onchange' => 'workingdays(0)']); ?>
													</td>
													<td><?php echo $this->Form->control('work.0.to_date', ['class' => 'form-control flatpickr', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'To Date', 'data-rule-required' => true, 'data-msg-required' => 'Select Date', 'style' => 'width:110px;', 'onchange' => 'workingdays(0)','onchange'=>'calculateworking(0)']); ?>
													</td>
													<td><?php echo $this->Form->control('work.0.duration', ['class' => 'form-control', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Duration', 'style' => 'width:180px;']); ?>
													</td>
													<td>
													</td>
												</tr>
												<?php } else {
												foreach ($work_details as $key2 => $value2) {
												?>
													<tr class="workpresent_row_in_post work_<?php echo $key2; ?>">
														<td align="center"><?php echo ($key2 + 1); ?>.</td>
														<td><?php echo $this->Form->control('work.' . $key2 . '.organisation', ['class' => 'form-control name', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => ' Organisation', 'data-rule-required' => true, 'data-msg-required' => 'Enter Organisation', 'onkeypress' => "return AvoidSpaceorg(this.value,$key2)", 'value' => $value2['organisation']]); ?>
															<?php echo $this->Form->control('work.' . $key2 . '.work_experience_id', ['label' => false, 'error' => false, 'empty' => 'Select', 'type' => 'hidden', 'value' => $value2['id']]); ?>
															<?php echo $this->Form->control('work.' . $key2 . '.is_active', ['label' => false, 'error' => false, 'empty' => 'Select', 'type' => 'hidden', 'value' => $value2['is_active']]); ?>
														</td>
														<td><?php echo $this->Form->control('work.' . $key2 . '.position', ['class' => 'form-control name', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Position', 'data-rule-required' => true, 'data-msg-required' => 'Enter Position', 'onkeypress' => "return AvoidSpacepos(this.value,$key2)", 'style' => 'width:110px;', 'value' => $value2['position']]); ?>
														</td>
														<td><?php echo $this->Form->control('work.' . $key2 . '.nature_work', ['class' => 'form-control name', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Nature of Work', 'data-rule-required' => true, 'data-msg-required' => 'Enter Nature of Work', 'onkeypress' => "return AvoidSpacenature(this.value,$key2)", 'style' => 'width:110px;', 'value' => $value2['nature_work']]); ?>
														</td>
														<td><?php echo $this->Form->control('work.' . $key2 . '.from_date', ['class' => 'form-control flatpickr', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'From Date', 'data-rule-required' => true, 'data-msg-required' => 'Select Date', 'style' => 'width:110px;', 'onchange' => 'workingdays(' . $key2 . ')', 'value' => date('d-m-Y', strtotime($value2['from_date']))?date('d-m-Y', strtotime($value2['from_date'])):'']); ?>
														</td>
														<td><?php echo $this->Form->control('work.' . $key2 . '.to_date', ['class' => 'form-control flatpickr', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'To Date', 'data-rule-required' => true, 'data-msg-required' => 'Select Date', 'style' => 'width:110px;', 'onchange' => 'workingdays(' . $key2 . ')','onchange' => 'calculateworking(' . $key2 . ')', 'value' =>date('d-m-Y', strtotime($value2['to_date']))? date('d-m-Y', strtotime($value2['to_date'])):'']); ?>
														</td>
														<td><?php echo $this->Form->control('work.' . $key2 . '.duration', ['class' => 'form-control', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Duration', 'style' => 'width:180px;', 'value' => $value2['duration']]); ?>
														</td>
														<td style="text-align:center;">
															<?php if ($key2 != 0) { ?>
																<a onclick='remove_work(<?php echo $key2; ?>);'>
																	<button type="button" class="btn btn-danger btn-sm" style="margin-left:0px;width:65px;font-size:11px;">Delete</button>
																</a>
															<?php } ?>
														</td>
													</tr>
											<?php }
											} ?>
										</tbody>
									</table>
								</div>
							</div>
						</div>

						<?php if ($project['payment_status'] == '') { ?>
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
	function remove_education(i) {
		if (confirm('Are you Sure You want to delete?')) {
			var i;
			var edu_qualification_id = $('#educationqualification-' + i + '-edu-qualification-id').val();
			$.ajax({
				async: true,
				dataType: "html",
				url: '<?php echo $this->Url->webroot ?>../deleteeducation/' + edu_qualification_id,
				beforeSend: function(xhr) {
					xhr.setRequestHeader('X-CSRF-Token', $('[name="_csrfToken"]').val());
				},
				success: function(data, textStatus) { 
					alert(data);
					if (data == 1) {
						$('.education_' + i).remove();
						location.reload(true);
					} else {
						alert('Unable to Delete');
					}
				}
			});
		}

	}

	function remove_training(j) {
		if (confirm('Are you Sure You want to delete?')) {
			var j;
			var training_id = $('#special-' + j + '-special-training-id').val();
			$.ajax({
				async: true,
				dataType: "html",
				url: '<?php echo $this->Url->webroot ?>../deletetraining/' + training_id,
				beforeSend: function(xhr) {
					xhr.setRequestHeader('X-CSRF-Token', $('[name="_csrfToken"]').val());
				},
				success: function(data, textStatus) { //alert(data);
					if (data == 1) {
						$('.training_' + j).remove();
						location.reload(true);
					} else {
						alert('Unable to Delete');
					}
				}
			});
		}

	}


	function remove_work(k) {
		if (confirm('Are you Sure You want to delete?')) {
			var k;
			var training_id = $('#work-' + k + '-work-experience-id').val();
			$.ajax({
				async: true,
				dataType: "html",
				url: '<?php echo $this->Url->webroot ?>../deletework/' + training_id,
				beforeSend: function(xhr) {
					xhr.setRequestHeader('X-CSRF-Token', $('[name="_csrfToken"]').val());
				},
				success: function(data, textStatus) { //alert(data);
					if (data == 1) {
						$('.work_' + k).remove();
						location.reload(true);
					} else {
						alert('Unable to Delete');
					}
				}
			});
		}
	}

	// $('.flatpickr1').flatpickr({
	// // mode: "range",
	// maxDate: "today",
	// dateFormat: "d-m-Y",
	// allowInput: false
	// // onClose: function(selectedDates, dateStr, instance) {
	// // // let daysInRange = document.getElementsByClassName('inRange');
	// // // let daysLengthTotal = daysInRange.length + 2;
	// // // alert(daysLengthTotal);
	// // // days(daysLengthTotal);         

	// });

// 	function getDateDiffInYMD() {
// 		var startDate1 = $('#special-' + count + '-from-date').val();
// var endDate1 = $('#special-' + count + '-to-date').val();
//     const oneDayMs = 1000 * 60 * 60 * 24;
//     const diffMs = endDate1.getTime() - startDate1.getTime();
//     const diffDays = Math.floor(diffMs / oneDayMs);
//     const years = Math.floor(diffDays / 365);
//     const months = Math.floor(diffDays / 30.44) % 12;
//     const days = diffDays - (years * 365) - (Math.floor(months * 30.44));
//         return { years, months, days };
//     }

	function trainingdays(count) {
		var count;
//alert(count);

var startDate1 = $('#special-' + count + '-from-date').val();
var endDate1 = $('#special-' + count + '-to-date').val();

//  var start_time=startDate1.Year()-endDate1.Year();
// var string=start_time.toString();
// alert(string);

 var slice_start=startDate1.slice(6,10);
 var slice_end=endDate1.slice(6,10);
 var slice_yearcal=slice_end-slice_start;

//  alert(slice_yearcal);
 var slice_startmonth=startDate1.slice(4,5);//month

 var slice_endmonth=endDate1.slice(4,5);//month


//  alert(slice_startmonth);
//  alert(slice_endmonth);

var slice_startday=startDate1.slice(0,2);
var slice_endday=endDate1.slice(0,2);
// alert(slice_startday);
// alert(slice_endday);
// exit();
 //Month Diff

 if (startDate1 != '' && endDate1 != '') {
 var month_cal;


if(slice_end>slice_start && slice_endmonth>slice_startmonth && slice_endday>slice_startday ){	
	//slice_yearcal--;


 
 var day=slice_endday-slice_startday;

	// var startDate = startDate1.split("-").reverse().join("-");
	// var endDate = endDate1.split("-").reverse().join("-");
	// if ((Date.parse(startDate) <= Date.parse(endDate))) {
	// 			const diffInMs = new Date(endDate) - new Date(startDate)
	// 			const diffInDays = (diffInMs / (1000 * 60 * 60 * 24)) + 1;
	// 			if (diffInDays != '') {
					//$('#special-' + count + '-duration').val(calyear+'yr'+' '+calmonth+'m'+ ' ' +diffInDays +'days');
					var month_cal=slice_endmonth-slice_startmonth;
	//month_cal=12+cal;
	$('#special-' + count + '-duration').val(slice_yearcal +' Year'+'||'+ month_cal + ' Month'+ '||' +day +'days');
					//$('#special-' + count + '-duration').val(diffInDays +'days');

					//}
					
					//alert(diffInDays);
				}



	else if(slice_end>slice_start && slice_endmonth>slice_startmonth && slice_endday<slice_startday){	
	//slice_yearcal--;


 
 var day=slice_startday-slice_endday;


					var month_cal=slice_endmonth-slice_startmonth;
	//month_cal=12+cal;
	$('#special-' + count + '-duration').val(slice_yearcal +' Year'+'||'+ month_cal + ' Month'+ '||' +day +'days');
			
	}


	else if(slice_end>slice_start && slice_endmonth>slice_startmonth && slice_endday==slice_startday){	
	//slice_yearcal--;


 
 var day=slice_startday-slice_endday;


					var month_cal=slice_endmonth-slice_startmonth;
	//month_cal=12+cal;
	$('#special-' + count + '-duration').val(slice_yearcal +' Year'+'||'+ month_cal + ' Month'+ '||' +day +'days');
			
	}


else if(slice_end>slice_start && slice_endmonth<slice_startmonth && slice_endday>slice_startday)
{

	var day=slice_endday-slice_startday;

	//alert(diffInDays);

	slice_yearcal--;
	var cal=slice_startmonth-slice_endmonth;
	var month_cal=12-cal;
	$('#special-' + count + '-duration').val(slice_yearcal +' Year'+'||'+ month_cal + ' Month' + '||' +day +'days');
//var month_cal=12+cal;
}


else if(slice_end == slice_start && slice_endmonth==slice_startmonth &&slice_endday>slice_startday)
{


	var day=slice_endday-slice_startday;
	

	var month_cal=slice_endmonth-slice_startmonth;
	$('#special-' + count + '-duration').val(day +'days');

}




else if(slice_end == slice_start && slice_endmonth==slice_startmonth &&slice_endday==slice_startday)
{

	var day=slice_startday-slice_endday;

	var month_cal=slice_endmonth-slice_startmonth;
	$('#special-' + count + '-duration').val(day +'days');

}



else if(slice_end == slice_start && slice_endmonth==slice_startmonth && slice_endday<slice_startday)
{

	var day=slice_startday-slice_endday;

	var month_cal=slice_endmonth-slice_startmonth;
	$('#special-' + count + '-duration').val(day +'days');

}

// else if(slice_end == slice_start && slice_endmonth<slice_startmonth)
// {

// 	alert('To Date Month should be higher than From Date Month');
// 	$('#special-' + count + '-duration').val('').trigger('change');
// 	$('#special-' + count + '-from-date').val('').trigger('change');
// 	$('#special-' + count + '-to-date').val('').trigger('change');

// }

else if(slice_end == slice_start && slice_endmonth>slice_startmonth && slice_endday>slice_startday)
{

	var day=slice_endday-slice_startday;
	var month_cal=slice_endmonth-slice_startmonth;
//month_cal=12+cal;

//alert(month_cal)
$('#special-' + count + '-duration').val(slice_yearcal +' Year'+'||'+ month_cal + ' Month' + '||' +day +'days');

}

else if(slice_end == slice_start && slice_endmonth<slice_startmonth && slice_endday>slice_startday)
{

	var day=slice_endday-slice_startday;
	var month_cal=slice_startmonth-slice_endmonth;
//month_cal=12+cal;
$('#special-' + count + '-duration').val(month_cal + ' Month'+ '||' +day +'days');

}
else if(slice_end == slice_start && slice_endmonth>slice_startmonth && slice_endday<slice_startday)
{

	
	var day=slice_startday-slice_endday;

var month_cal=slice_startmonth-slice_endmonth;
//month_cal=12+cal;
$('#special-' + count + '-duration').val(slice_yearcal +' Year'+'||'+ month_cal + ' Month' + '||' +day +'days');

}

else if(slice_end == slice_start && slice_endmonth>slice_startmonth && slice_endday==slice_startday)
{

	var day=slice_endday-slice_startday;

var month_cal=slice_endmonth-slice_startmonth;
//month_cal=12+cal;

//alert(month_cal);
$('#special-' + count + '-duration').val(month_cal + ' Month'+ '||' +day +'days');

}

// else if(slice_end == slice_start && slice_endmonth>slice_startmonth && slice_endday>slice_startday)
// {
// 	var day=slice_endday-slice_startday;
// 	//slice_yearcal--;
// 	var month_cal=slice_endmonth-slice_startmonth;
// 	//var month_cal=12-cal;
// 	$('#special-' + count + '-duration').val(slice_yearcal +' Year'+'||'+ month_cal + ' Month' + '||' +day +'days');

// }
else if(slice_end > slice_start && slice_endmonth==slice_startmonth && slice_endday>slice_startday)
{


	var day=slice_endday-slice_startday;
	var month_cal=slice_endmonth-slice_startmonth;
	
	$('#special-' + count + '-duration').val(slice_yearcal +' Year'+'||'+ month_cal + ' Month' + '||' +day +'days');

	
}





else if(slice_start>slice_end ||slice_end<slice_start)
{
	alert('To Date should be higher than From Date');
	$('#special-' + count + '-duration').val('').trigger('change');
	$('#special-' + count + '-from-date').val('').trigger('change');
	$('#special-' + count + '-to-date').val('').trigger('change');
}



 if(slice_startmonth>slice_endmonth ||slice_endmonth<slice_startmonth)
{
	alert('To Date should be higher than From Date');
	$('#special-' + count + '-duration').val('').trigger('change');
	$('#special-' + count + '-from-date').val('').trigger('change');
	$('#special-' + count + '-to-date').val('').trigger('change');
}
 if(slice_startday>slice_endday ||slice_endday<slice_startday)
{
	alert('To Date should be higher than From Date');
	$('#special-' + count + '-duration').val('').trigger('change');
	$('#special-' + count + '-from-date').val('').trigger('change');
	$('#special-' + count + '-to-date').val('').trigger('change');
}


 

	}
}


	// function workingdays(count) {
	// 	var count;

	// 			var fromyear=$('#work-' + count + '-from-date').val();
	// 			//alert(fromyear);

	// 			// var slice_year=fromyear.slice(6,10);//year
	// 			// var slice_month=fromyear.slice(3,5);//month
	// 			// //alert(slice_month);

	// 			// var toyear=$('#work-' + count + '-to-date').val();
	// 			// //alert(fromyear);

	// 			// var to_year=toyear.slice(6,10);//year
	// 			// var to_month=toyear.slice(3,5);//month

	// 			// //alert(to_month);

	// 			// var calyear=to_year-slice_year;
	// 			// var calmonth=to_month-slice_month;

	// 	var startDate1 = $('#work-' + count + '-from-date').val();
	// 	var endDate1 = $('#work-' + count + '-to-date').val();

	// 	if (startDate1 != '' && endDate1 != '') {
	// 		var startDate = startDate1.split("-").reverse().join("-");
	// 		var endDate = endDate1.split("-").reverse().join("-");

	// 		if ((Date.parse(startDate) <= Date.parse(endDate))) {
	// 			const diffInMs = new Date(endDate) - new Date(startDate)
	// 			const diffInDays = (diffInMs / (1000 * 60 * 60 * 24)) + 1;


	// 			// var year2=date2.getFullYear();       

	// 			// var day = 1000 * 60 * 60 * 24;

	// 			// var days = Math.floor(diffInMs/day);
	// 			// var months = Math.floor(diffInMs/31);
	// 			// var years = Math.floor(diffInMs/12);
	// 			// alert(years);


	// 			if (diffInDays != '') {
	// 				$('#work-' + count + '-duration').val(diffInDays + ' days');
	// 				//$('#work-' + count + '-duration').val(calyear+'yr'+' '+calmonth+'m'+ ' ' +diffInDays +'days');
	// 			}
	// 		} else {
	// 			$('#work-' + count + '-to-date').val('');
	// 			$('#work-' + count + '-duration').val('');
	// 			alert('To Date should be higher than From Date');
	// 		}
	// 	} else if (startDate1 == '' && endDate1 != '') {
	// 		$('#work-' + count + '-from-date').focus();
	// 		$('#work-' + count + '-to-date').val('');
	// 		alert('Please Select From Date');

	// 	}
	// 	/*else if(endDate1 == ''){
	// 				 $('#special-'+count+'-to-date').focus();
	// 				alert('Please Select To Date');
					
	// 			}*/
	// }



	function workingdays(count) {
		var count;
//alert(count);

var startDate1 = $('#work-' + count + '-from-date').val();
var endDate1 = $('#work-' + count + '-to-date').val();


 var slice_start=startDate1.slice(6,10);
 var slice_end=endDate1.slice(6,10);
 var slice_yearcal=slice_end-slice_start;

//  alert(slice_yearcal);
 var slice_startmonth=startDate1.slice(4,5);//month

 var slice_endmonth=endDate1.slice(4,5);//month


//  alert(slice_startmonth);
//  alert(slice_endmonth);

var slice_startday=startDate1.slice(0,2);
var slice_endday=endDate1.slice(0,2);

 //Month Diff

 if (startDate1 != '' && endDate1 != '') {
 var month_cal;


if(slice_end>slice_start && slice_endmonth>slice_startmonth && slice_endday>slice_startday ){	
	//slice_yearcal--;


 
 var day=slice_endday-slice_startday;


					var month_cal=slice_endmonth-slice_startmonth;
	//month_cal=12+cal;
	$('#work-' + count + '-duration').val(slice_yearcal +' Year'+'||'+ month_cal + ' Month'+ '||' +day +'days');
				
				}



	else if(slice_end>slice_start && slice_endmonth>slice_startmonth && slice_endday<slice_startday){	
	//slice_yearcal--;


 
 var day=slice_startday-slice_endday;


					var month_cal=slice_endmonth-slice_startmonth;
	//month_cal=12+cal;
	$('#work-' + count + '-duration').val(slice_yearcal +' Year'+'||'+ month_cal + ' Month'+ '||' +day +'days');
			
	}


	else if(slice_end>slice_start && slice_endmonth>slice_startmonth && slice_endday==slice_startday){	
	//slice_yearcal--;


 
 var day=slice_startday-slice_endday;


					var month_cal=slice_endmonth-slice_startmonth;
	//month_cal=12+cal;
	$('#work-' + count + '-duration').val(slice_yearcal +' Year'+'||'+ month_cal + ' Month'+ '||' +day +'days');
			
	}

	else if(slice_end>slice_start && slice_endmonth<slice_startmonth && slice_endday>slice_startday)
{

	var day=slice_endday-slice_startday;

	//alert(diffInDays);

	slice_yearcal--;
	var cal=slice_startmonth-slice_endmonth;
	var month_cal=12-cal;
	$('#work-' + count + '-duration').val(slice_yearcal +' Year'+'||'+ month_cal + ' Month' + '||' +day +'days');
//var month_cal=12+cal;
}


else if(slice_end == slice_start && slice_endmonth==slice_startmonth &&slice_endday<slice_startday)
{


	var day=slice_startday-slice_endday;
	

	//var month_cal=slice_endmonth-slice_startmonth;
	$('#work-' + count + '-duration').val(day +'days');

}

else if(slice_end == slice_start && slice_endmonth==slice_startmonth &&slice_endday>slice_startday)
{


	var day=slice_endday-slice_startday;
	

	//var month_cal=slice_endmonth-slice_startmonth;
	$('#work-' + count + '-duration').val(day +'days');

}

else if(slice_end>slice_start && slice_endmonth<slice_startmonth && slice_endday>slice_startday)
{

	var day=slice_endday-slice_startday;

	//alert(diffInDays);

	slice_yearcal--;
	var cal=slice_startmonth-slice_endmonth;
	var month_cal=12-cal;
	$('#work-' + count + '-duration').val(slice_yearcal +' Year'+'||'+ month_cal + ' Month' + '||' +day +'days');
//var month_cal=12+cal;
}
else if(slice_end == slice_start && slice_endmonth==slice_startmonth &&slice_endday<slice_startday)
{


	var day=slice_endday-slice_startday;
	

	var month_cal=slice_endmonth-slice_startmonth;
	$('#work-' + count + '-duration').val(slice_yearcal +' Year'+'||'+ month_cal + ' Month' + '||' +day +'days');

}




else if(slice_end == slice_start && slice_endmonth==slice_startmonth &&slice_endday==slice_startday)
{

	var day=slice_startday-slice_endday;

	var month_cal=slice_endmonth-slice_startmonth;
	$('#work-' + count + '-duration').val(slice_yearcal +' Year'+'||'+ month_cal + ' Month' + '||' +day +'days');

}

else if(slice_end == slice_start && slice_endmonth<slice_startmonth)
{

	alert('To Date Month should be higher than From Date Month');
	$('#work-' + count + '-duration').val('').trigger('change');
	$('#work-' + count + '-from-date').val('').trigger('change');
	$('#work-' + count + '-to-date').val('').trigger('change');

}
else if(slice_end == slice_start && slice_endmonth>slice_startmonth && slice_endday>slice_startday)
{
	var day=slice_endday-slice_startday;
	//slice_yearcal--;
	var month_cal=slice_endmonth-slice_startmonth;
	//var month_cal=12-cal;
	$('#work-' + count + '-duration').val(slice_yearcal +' Year'+'||'+ month_cal + ' Month' + '||' +day +'days');

}
else if(slice_end > slice_start && slice_endmonth==slice_startmonth && slice_endday>slice_startday)
{


	var day=slice_endday-slice_startday;
	var month_cal=slice_endmonth-slice_startmonth;
	
	$('#work-' + count + '-duration').val(slice_yearcal +' Year'+'||'+ month_cal + ' Month' + '||' +day +'days');

	
}


 }
	}


function calculatehigher(count){

	 //alert(count);

	var startDate1 = $('#special-' + count + '-from-date').val();
var endDate1 = $('#special-' + count + '-to-date').val();


//  var slice_start=startDate1.slice(6,10);
//  var slice_end=endDate1.slice(6,10);

	if(startDate1>endDate1)
{
	alert('To Date should be higher than From Date');

	$('#special-' + count + '-duration').val('').trigger('change');
	$('#special-' + count + '-from-date').val('').trigger('change');
	$('#special-' + count + '-to-date').val('').trigger('change');
}

}
function calculateworking(count){

	 //alert(count);

	var startDate1 = $('#work-' + count + '-from-date').val();
var endDate1 = $('#work-' + count + '-to-date').val();


//  var slice_start=startDate1.slice(6,10);
//  var slice_end=endDate1.slice(6,10);

	if(startDate1>endDate1)
{
	alert('To Date should be higher than From Date');

	$('#work-' + count + '-duration').val('').trigger('change');
	$('#work-' + count + '-from-date').val('').trigger('change');
	$('#work-' + count + '-to-date').val('').trigger('change');
}

}


	$("#FormID").validate({
	    rules: {            
	        'unit_name': {
	            required: true
	        },
			'sectortype_id': {
	            required: true
	        },
			'address': {
	            required: true
	        },
			'localitytype_id': {
	            required: true
	        },
			'pincode': {
	            required: true
	        },
			'state_id': {
	            required: true
	        },
			'registrationtype_id': {
	            required: true
	        },
			'project_cost': {
	            required: true
	        },
			'loan_amount': {
	            required: true
	        },
			'loan_type_id': {
	            required: true
	        },
			'loan_purpose_id': {
	            required: true
	        }
	    },

	    messages: {

	        'unit_name': {
	            required: "Enter Unit / Entity Name"
	        },
			'sectortype_id': {
	            required: "Select Sector Type"
	        },
			'address': {
	            required: "Enter Address"
	        },
			'localitytype_id': {
	            required: "Select Locality"
	        },
			'pincode': {
	            required:  "Enter Pincode"
	        },
			'state_id': {
	            required:  "Select State"
	        },
			'registrationtype_id': {
	            required:  "Select Registration Type"
	        },
			'project_cost': {
	            required:  "Enter Project Cost"
	        },
			'loan_amount': {
	            required:  "Enter Loan Amount"
	        },
			'loan_type_id': {
	            required:  "Enter Loan Type"
	        },
			'loan_purpose_id': {
	            required:  "Enter Loan Purpose"
	        }
	    },
	    submitHandler: function(form) {
	        form.submit();
	        $(".btn").prop('disabled', true);
	    }
	});

	function educationadding() {
		//var type
		var j = ($('.edupresent_row_in_post').length);
		var row_no = j - 1;
		var education = $("#educationqualification-" + row_no + "-education-id").val();
		//alert(code);
		if (education != '') {
			$.ajax({
				async: true,
				dataType: "html",
				url: '<?php echo $this->Url->webroot; ?>../ajaxaddeducation/' + j,

				// beforeSend: function(xhr) {
				// xhr.setRequestHeader('X-CSRF-Token', $('[name="_csrfToken"]').val());
				// },
				success: function(data, textStatus) { //alert(data)
					$('.eduadding').append(data);
				}
			});
		} else if (education == '') {
			alert("Select Education");
			$("#educationqualification-" + row_no + "-education-id").focus();
		}
	}


	function trainingadding() {
		//var type
		var k = ($('.trainingpresent_row_in_post').length);
		var row_no1 = k - 1;

		var training_in = $("#special-" + row_no1 + "-training-in").val();


		//alert(training_in_1);
		if (training_in != '') {
			$.ajax({
				async: true,
				dataType: "html",
				url: '<?php echo $this->Url->webroot ?>../ajaxaddtraining/' + k,
				beforeSend: function(xhr) {
					xhr.setRequestHeader('X-CSRF-Token', $('[name="_csrfToken"]').val());
				},
				success: function(data, textStatus) { //alert(textStatus);
					$('.trainingadding').append(data);
				}
			});
		} else if (training_in == '') {
			alert("Enter Training In");
			$("#special-" + row_no1 + "-training-in").focus();
		}
	}


	function workadding() {
		//var type
		var l = ($('.workpresent_row_in_post').length);
		var row_no2 = l - 1;
		var organisation = $("#work-" + row_no2 + "-organisation").val();
		//alert(code);
		if (organisation != '') {
			$.ajax({
				async: true,
				dataType: "html",
				url: '<?php echo $this->Url->webroot ?>../ajaxaddworkexperience/' + l,
				beforeSend: function(xhr) {
					xhr.setRequestHeader('X-CSRF-Token', $('[name="_csrfToken"]').val());
				},
				success: function(data, textStatus) {
					$('.workadding').append(data);
				}
			});
		} else if (organisation == '') {
			alert("Enter Organisation");
			$("#work-" + row_no2 + "-organisation").focus();
		}
	}

	//1.1

	function AvoidSpace(val, key) {
		//alert(key);
		// if (event.keyCode == 32) {
		//     event.returnValue = false;
		//     return false;
		// }

		const input = document.querySelector("#educationqualification-" + key + "-institute");
		//alert(input);
		input.addEventListener('keyup', () => {
			input.value = input.value.replace(/  +/g, ' ');
		});
	}


	function AvoidSpacemajor(val, key) {
		//alert('hi');
		// if (event.keyCode == 32) {
		//     event.returnValue = false;
		//     return false;
		// }

		const input = document.querySelector("#educationqualification-" + key + "-major-subject");
		input.addEventListener('keyup', () => {
			input.value = input.value.replace(/  +/g, ' ');
		});
	}

	//1.2
	function AvoidSpacespecial(val, key1) {

		//alert('hi');

		// if (event.keyCode == 32) {
		//     event.returnValue = false;
		//     return false;
		// }

		const input = document.querySelector("#special-" + key1 + "-training-in");
		input.addEventListener('keyup', () => {
			input.value = input.value.replace(/  +/g, ' ');
		});
	}



	function AvoidSpaceins(val, key1) {

		//alert(key1);

		// if (event.keyCode == 32) {
		//     event.returnValue = false;
		//     return false;
		// }

		const input = document.querySelector("#special-" + key1 + "-institute");
		input.addEventListener('keyup', () => {
			input.value = input.value.replace(/  +/g, ' ');
		});
	}



	function AvoidSpaceachieve(val, key1) {

		//alert(key1);

		// if (event.keyCode == 32) {
		//     event.returnValue = false;
		//     return false;
		// }

		const input = document.querySelector("#special-" + key1 + "-achievement");
		input.addEventListener('keyup', () => {
			input.value = input.value.replace(/  +/g, ' ');
		});
	}


	//1.3

	function AvoidSpaceorg(val, key2) {
		//alert(key);
		// if (event.keyCode == 32) {
		//     event.returnValue = false;
		//     return false;
		// }

		const input = document.querySelector("#work-" + key2 + "-organisation");
		//const input = document.querySelector('#work-1-organisation');
		input.addEventListener('keyup', () => {
			input.value = input.value.replace(/  +/g, ' ');
		});
	}


	function AvoidSpacepos(val, key2) {
		//alert(key);
		// if (event.keyCode == 32) {
		//     event.returnValue = false;
		//     return false;
		// }

		const input = document.querySelector("#work-" + key2 + "-position");
		//const input = document.querySelector('#work-1-organisation');
		input.addEventListener('keyup', () => {
			input.value = input.value.replace(/  +/g, ' ');
		});
	}


	function AvoidSpacenature(val, key2) {
		//alert(key);
		// if (event.keyCode == 32) {
		//     event.returnValue = false;
		//     return false;
		// }

		const input = document.querySelector("#work-" + key2 + "-nature-work");
		//const input = document.querySelector('#work-1-organisation');
		input.addEventListener('keyup', () => {
			input.value = input.value.replace(/  +/g, ' ');
		});
	}
</script>