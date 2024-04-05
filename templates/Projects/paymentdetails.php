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
						<div class="stepper-item" data-kt-stepper-element="nav">
							<?php if ($project['step_count'] >= '6') { ?>
								<?php echo $this->Html->link(__(' <div class="stepper-icon rounded-3">
											<i class="ki-duotone ki-check fs-2 stepper-check"></i>
											<span class="stepper-number">&#10003;</span>
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
											<span class="stepper-number">&#10003;</span>
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
											<span class="stepper-number">&#10003;</span>
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
						<div class="stepper-item current" data-kt-stepper-element="nav">
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
						<h3 class="tab2-head">Payment Details</h3>

						<?php if($project['payment_status']==1) {?>
						<div class="mb-3 mt-3 text-right" style="text-align:right;">
							<?php echo $this->Html->link(('<i class="fas fa-download"></i>&nbsp; Download receipt'), ['controller' => 'Pdfgenerator', 'action' => 'receiptdownload', $id], ['escape' => false, 'class' => 'btn btn-info rounded-pill px-4 waves-effect waves-light',]); ?>

							<?php echo $this->Html->link(('<i class="fas fa-download"></i>&nbsp; Download pdf'), ['controller' => 'Pdfgenerator', 'action' => 'downloadpdf', $id], ['escape' => false, 'class' => 'btn btn-info rounded-pill px-4 waves-effect waves-light',]); ?>

						</div>
						<?php }?>
						<hr style="width: 100%; margin-top: 5px" />
						<div class="row">
							<div class="col-sm-8 col-md-12">
								<?php if ($project['payment_status'] == 1) { ?>
									<table class="table table-bordered responsive">
										<tbody class="referenceadding">
											<tr>
												<td>Application Number : </td>
												<td><?php echo $project['project_no']; ?></td>
											</tr>
											<tr>
												<td>Payment Amount : </td>
												<td>Rs.&nbsp;<?php echo $project['transaction_amount']; ?></td>
											</tr>
											<tr>
												<td>Transaction Number. : </td>
												<td><?php echo $project['transaction_number']; ?></td>
											</tr>
											<tr>
												<td>Transaction Date : </td>
												<td><?php echo date('d-m-Y', strtotime($project['transaction_date'])); ?></td>
											</tr>
											<tr>
												<td>Payment Status : </td>
												<td><?php echo ($project['payment_status'] == 1) ? '<span style="color:green;"><b>Success</b></span>' : ''; ?></td>
											</tr>
										</tbody>
									</table>

								<?php  } else { ?>

									<table class="table table-bordered responsive">
										<thead class="table-dark">
											<tr class="text-center">
												<th colspan="3">Payment Details</th>
											</tr>
										</thead>
										<tbody class="referenceadding">
											<?php $i = 1;
											foreach ($payment_Details as $key => $payment) {
											?>
												<tr>
													<td align="center"><?php echo $i; ?>.</td>
													<td>
														<?php echo $payment['name']; ?>
													</td>
													<td style="text-align:right;"><?php echo $payment['fees']; ?>
													</td>
												</tr>
											<?php
												$total += $payment['fees'];
												$i++;
											} ?>
										</tbody>
										<tfoot>
											<tr>
												<th style="text-align:right;" colspan="2">Total</th>
												<th style="text-align:right;"><?php echo $total; ?>.00</th>
											<tr>
										</tfoot>
									</table>
								<?php  } ?>
							</div>
						</div> <br> <br>
						<?php if ($project['payment_status'] != 1) { ?>
							<div class="row">
								<div class="col-sm-8 col-md-12">
									<input type="checkbox" id="terms" name="terms" value="1">&nbsp;&nbsp;By submitting this form, you have read and agree to the <a style="color:blue;cursor: pointer;text-decoration: underline;" onclick="gettermsandcondtitions()">Terms and Conditions</a>
								</div>
							</div>
						<?php } ?>

						<?php if ($project['payment_status'] != 1) { ?>
							<!--begin::Actions-->
							<div class="d-flex flex-stack pt-15">
								<div>
									<button type="submit" class="btn btn-lg btn-primary">
										<span class="indicator-label">Go to Payment
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


<div id="modal-add-unsent" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade col-lg-12">
	<div class="modal-dialog" style="max-width:70%;">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<div class="form add-unsent-form">

				</div>
			</div>
		</div>
	</div>
</div>
<script>
	$("#FormID").validate({
		rules: {
			'unit_name': {
				required: true
			}
		},
		messages: {
			'unit_name': {
				required: "Enter Unit / Entity Name"
			}
		},
		submitHandler: function(form) {
			isChecked = $('#terms').is(':checked');
			if (isChecked === true) {
				form.submit();
				$(".btn").prop('disabled', true);
			} else {
				alert('Please Select Terms and condition');
			}
		}
	});


	function gettermsandcondtitions() {
		$(".add-unsent-form").html("<span class='text-center'>Fetching data!!!</span>");
		$("#modal-add-unsent").modal('show');
		$.ajax({
			async: true,
			dataType: "html",
			url: '<?php echo $this->Url->webroot; ?>../termsandconditions',

			success: function(data, textStatus) {
				// alert(data);
				$(".add-unsent-form").html(data);
			}
		});
	}
</script>