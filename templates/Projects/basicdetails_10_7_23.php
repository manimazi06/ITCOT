<style>     
.step-footer {
    text-align: center !important;
}
</style>        
		
<?php echo $this->Form->create($project, ['id' => 'FormID', 'class' => '', "autocomplete" => "off", 'enctype' => 'multipart/form-data']); ?>
<div class="d-flex flex-column flex-root">
			<!--begin::Authentication - Multi-steps-->
			<div class="d-flex flex-column flex-lg-row flex-column-fluid stepper stepper-pills stepper-column stepper-multistep" id="kt_create_account_stepper">
				<!--begin::Aside-->
				<div class="d-flex flex-column flex-lg-row-auto w-lg-350px w-xl-500px">
					<div class="d-flex flex-column top-0 bottom-0 w-lg-350px w-xl-500px scroll-y bgi-size-cover bgi-position-center" style="background-image: url(<?php echo $this->Url->build('/'); ?>images/media/misc/auth-bg.png)">
						<div class="d-flex flex-row-fluid justify-content-center p-10">
							<div class="stepper-nav">
								<div class="stepper-item current" data-kt-stepper-element="nav">
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
									<div class="stepper-line h-40px"></div>
								</div>
								<div class="stepper-item" data-kt-stepper-element="nav">
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
									<div class="stepper-line h-40px"></div>
									<!--end::Line-->
								</div>
								<div class="stepper-item" data-kt-stepper-element="nav">
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
									<div class="stepper-line h-40px"></div>
								</div>
								<div class="stepper-item" data-kt-stepper-element="nav">
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
									<div class="stepper-line h-40px"></div>
								</div>
								<div class="stepper-item" data-kt-stepper-element="nav">
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
                                    <div class="stepper-line h-40px"></div>
								</div>
                                <div class="stepper-item" data-kt-stepper-element="nav">
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
                                    <div class="stepper-line h-40px"></div>
								</div>
                                <div class="stepper-item" data-kt-stepper-element="nav">
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
                                    <div class="stepper-line h-40px"></div>
								</div>
                                <div class="stepper-item" data-kt-stepper-element="nav">
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
                                    <div class="stepper-line h-40px"></div>
								</div>
                                <div class="stepper-item" data-kt-stepper-element="nav">
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
                                    <div class="stepper-line h-40px"></div>
								</div>
                                <div class="stepper-item" data-kt-stepper-element="nav">
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
                                <div class="row mt-5">
                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                      <label for="">Prefix <span class="text-danger">*</span></label> <br />
                                        <?php echo $this->Form->control('prefix', ['label' => false, 'class' => 'form-select', 'options' => $prefix,'empty'=>'-Select-', 'required']); ?>

                                   </div>
                                   <br />
                                   <div class="col-lg-4 col-md-4 col-sm-12">
                                      <label for="">Name <span class="text-danger">*</span></label> <br />
                                        <?php echo $this->Form->control('name', ['label' => false, 'class' => 'form-control', 'type' => 'text', 'required']); ?>

                                   </div>
                                   <br />
                                   <div class="col-lg-4 col-md-4 col-sm-12">
                                      <label for="">Date Of Birth <span class="text-danger">*</span></label> <br />
                                     <?php echo $this->Form->control('dob', ['label' => false, 'class' => 'form-control flatpickr', 'type' => 'text', 'required','readonly','value'=>($project['dob'] != '')?date('d-m-Y',strtotime($project['dob'])):'']); ?>

                                   </div>
                                   <br />                          
                                </div>
                                <div class="row mt-4">
                                   <div class="col-lg-4 col-md-4 col-sm-12">
                                      <label for="">Category <span class="text-danger">*</span></label> <br />
                                         <?php echo $this->Form->control('category_id', ['class' => 'form-select', 'templates' => ['inputContainer' => '{{content}}'], 'options' => $categories, 'label' => false, 'error' => false, 'empty' => 'Select', 'required']); ?>

                                      <br />
                                   </div>
                                   <div class="col-lg-4 col-md-4 col-sm-12">
                                      <label for="">Educational Details <span class="text-danger">*</span></label> <br />
                                        <?php echo $this->Form->control('education_id', ['class' => 'form-select', 'templates' => ['inputContainer' => '{{content}}'], 'options' => $educations, 'label' => false, 'error' => false, 'empty' => 'Select', 'required']); ?>

                                      <br />
                                   </div>
                                   <div class="col-lg-4 col-md-4 col-sm-12">
                                      <label for="">Mobile No. <span class="text-danger">*</span></label> <br />
                                         <?php echo $this->Form->control('mobile_no', ['label' => false, 'class' => 'form-control num', 'type' => 'text', 'required']); ?>

                                   </div>
                                   <br />
                                </div>
                                <div class="row">
                                   <div class="col-lg-4 col-md-4 col-sm-12">
                                      <label for="">Email ID <span class="text-danger">*</span></label> <br />
                                       <?php echo $this->Form->control('email', ['label' => false, 'class' => 'form-control', 'type' => 'text', 'required']); ?>

                                      <br />
                                   </div>
                                </div>
                                <?php if($project['payment_status'] == ''){ ?>
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
    $("#FormID").validate({
        rules: {            
            'prefix': {
                required: true
            },
			'name': {
                required: true
            },
			'dob': {
                required: true
            },
			'age': {
                required: true
            },
			'category_id': {
                required: true
            },
			'education_id': {
                required: true
            },
			'mobile_no': {
                required: true
            },
			'email': {
                required: true
            }
        },

        messages: {
            
            'prefix': {
                required: "Select Prefix"
            },
			'name': {
                required: "Enter Name"
            },
			'dob': {
                required: "Select DOB"
            },
			'age': {
                required: "Enter Age"
            },
			'category_id': {
                required:  "Select Category"
            },
			'education_id': {
                required:  "Select Education"
            },
			'mobile_no': {
                required:  "Enter Mobile No"
            },
			'email': {
                required:  "Enter Email"
            }
        },
        submitHandler: function(form) {
            form.submit();
            $(".btn").prop('disabled', true);
        }
    });
	
	
	// $("#dob").change(function(){
		// //alert('hi'); 

    // var today = new Date();	
    // var birthDate = new Date($('#dob').val());
	// alert(today); 
	// alert(birthDate); 
    // var age = today.getFullYear() - birthDate.getFullYear();
    // var m = today.getMonth() - birthDate.getMonth();
    // if (m < 0 || (m === 0 && today.getDate() < birthDate.getDate())) {
        // age--;
    // }
	// alert(age);
    // $('#age').val(age);
// });

  
</script>