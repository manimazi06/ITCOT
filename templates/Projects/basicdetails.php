<style>     
.step-footer {
    text-align: center !important;
}

.flatpickr-months .flatpickr-month {
	height:64px !important;
}
</style>        
		
<?php echo $this->Form->create($project, ['id' => 'FormID', 'class' => '', "autocomplete" => "off", 'enctype' => 'multipart/form-data']); ?>
<div class="d-flex flex-column flex-root">
			<!--begin::Authentication - Multi-steps-->
			<div class="d-flex flex-column flex-lg-row flex-column-fluid stepper stepper-pills stepper-column stepper-multistep" id="kt_create_account_stepper">
				<!--begin::Aside-->
				<div class="d-flex flex-column flex-lg-row-auto w-lg-350px w-xl-350px">
					<div class="d-flex flex-column top-0 bottom-0 w-lg-350px w-xl-350px scroll-y bgi-size-cover bgi-position-center" style="background-image: url(<?php echo $this->Url->build('/'); ?>images/media/misc/auth-bg.png)">
						<div class="d-flex flex-row-fluid justify-content-center p-10">
							  <div class="stepper-nav">
								<div class="stepper-item current" data-kt-stepper-element="nav">
								 <?php if($project['step_count'] >= '0'){ ?>
							        <?php echo $this->Html->link(__(' <div class="stepper-icon rounded-3">
											<i class="ki-duotone ki-check fs-2 stepper-check"></i>
											<span class="stepper-number">1</span>
										</div><div class="stepper-label">
											<h3 class="stepper-title fs-2">Basic Details</h3>
											<div class="stepper-desc fw-normal">Select Basic Details</div>
										</div>'), ['controller' => 'Projects', 'action' => 'basicdetails', base64_encode($id)], ['escape' => false, 'class' => 'stepper-wrapper']); ?>
									  <?php }else{ ?>	
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
								   <?php if($project['step_count'] >= '1'){ ?>
							        <?php echo $this->Html->link(__(' <div class="stepper-icon rounded-3">
											<i class="ki-duotone ki-check fs-2 stepper-check"></i>
											<span class="stepper-number">2</span>
										</div><div class="stepper-label">
											<h3 class="stepper-title fs-2">Unit / Entity Details</h3>
											<div class="stepper-desc fw-normal">Unit / Entity Details</div>
										</div>'), ['controller' => 'Projects', 'action' => 'entitydetails', base64_encode($id)], ['escape' => false, 'class' => 'stepper-wrapper']); ?>
									  <?php }else{ ?>	
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
								    <?php if($project['step_count'] >= '2'){ ?>
							        <?php echo $this->Html->link(__(' <div class="stepper-icon rounded-3">
											<i class="ki-duotone ki-check fs-2 stepper-check"></i>
											<span class="stepper-number">3</span>
										</div><div class="stepper-label">
											<h3 class="stepper-title fs-2">Education & Work</h3>
											<div class="stepper-desc fw-normal">Education & Work</div>
										</div>'), ['controller' => 'Projects', 'action' => 'educationdetails', base64_encode($id)], ['escape' => false, 'class' => 'stepper-wrapper']); ?>
									  <?php }else{ ?>
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
								    <?php if($project['step_count'] >= '3'){ ?>
							        <?php echo $this->Html->link(__('<div class="stepper-icon rounded-3">
											<i class="ki-duotone ki-check fs-2 stepper-check"></i>
											<span class="stepper-number">4</span>
										</div><div class="stepper-label">
											<h3 class="stepper-title fs-2">Manufacturing</h3>
											<div class="stepper-desc fw-normal">Manufacturing</div>
										</div>'), ['controller' => 'Projects', 'action' => 'manufacturingdetails', base64_encode($id)], ['escape' => false, 'class' => 'stepper-wrapper']); ?>
								    <?php }else{ ?>
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
								<?php if($project['step_count'] >= '4'){ ?>
							        <?php echo $this->Html->link(__(' <div class="stepper-icon rounded-3">
											<i class="ki-duotone ki-check fs-2 stepper-check"></i>
											<span class="stepper-number">5</span>
										</div><div class="stepper-label">
											<h3 class="stepper-title fs-2">Utilities & Manpower</h3>
											<div class="stepper-desc fw-normal">Utilities & Manpower</div>
										</div>'), ['controller' => 'Projects', 'action' => 'manpowerdetails', base64_encode($id)], ['escape' => false, 'class' => 'stepper-wrapper']); ?>
								    <?php }else{ ?>
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
								   <?php if($project['step_count'] >= '5'){ ?>
							        <?php echo $this->Html->link(__(' <div class="stepper-icon rounded-3">
											<i class="ki-duotone ki-check fs-2 stepper-check"></i>
											<span class="stepper-number">6</span>
										</div><div class="stepper-label">
											<h3 class="stepper-title fs-2">Capital & Total Cost</h3>
											<div class="stepper-desc fw-normal">Capital & Total Cost</div>
										</div>'), ['controller' => 'Projects', 'action' => 'projectcostdetails', base64_encode($id)], ['escape' => false, 'class' => 'stepper-wrapper']); ?>
								    <?php }else{ ?>
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
								     <?php if($project['step_count'] >= '6'){ ?>
							        <?php echo $this->Html->link(__(' <div class="stepper-icon rounded-3">
											<i class="ki-duotone ki-check fs-2 stepper-check"></i>
											<span class="stepper-number">7</span>
										</div><div class="stepper-label">
											<h3 class="stepper-title fs-2">Project Profitability</h3>
											<div class="stepper-desc fw-normal">Project Profitability</div>
										</div>'), ['controller' => 'Projects', 'action' => 'profitabilitydetails', base64_encode($id)], ['escape' => false, 'class' => 'stepper-wrapper']); ?>
								    <?php }else{ ?>
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
								   <?php if($project['step_count'] >= '7'){ ?>
							        <?php echo $this->Html->link(__(' <div class="stepper-icon rounded-3">
											<i class="ki-duotone ki-check fs-2 stepper-check"></i>
											<span class="stepper-number">8</span>
										</div><div class="stepper-label">
											<h3 class="stepper-title fs-2">Supplementary</h3>
											<div class="stepper-desc fw-normal">Supplementary</div>
										</div>'), ['controller' => 'Projects', 'action' => 'suppliementarydetails', base64_encode($id)], ['escape' => false, 'class' => 'stepper-wrapper']); ?>
								    <?php }else{ ?>
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
								  <?php if($project['step_count'] >= '8'){ ?>
							        <?php echo $this->Html->link(__(' <div class="stepper-icon rounded-3">
											<i class="ki-duotone ki-check fs-2 stepper-check"></i>
											<span class="stepper-number">9</span>
										</div><div class="stepper-label">
											<h3 class="stepper-title fs-2">References</h3>
											<div class="stepper-desc fw-normal">References</div>
										</div>'), ['controller' => 'Projects', 'action' => 'referencedetails', base64_encode($id)], ['escape' => false, 'class' => 'stepper-wrapper']); ?>
								    <?php }else{ ?>
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
								 <?php if($project['step_count'] >= '9'){ ?>
							        <?php echo $this->Html->link(__(' <div class="stepper-icon rounded-3">
											<i class="ki-duotone ki-check fs-2 stepper-check"></i>
											<span class="stepper-number">10</span>
										</div><div class="stepper-label">
											<h3 class="stepper-title fs-2">Payment Details</h3>
											<div class="stepper-desc fw-normal">Payment Details</div>
										</div>'), ['controller' => 'Projects', 'action' => 'paymentdetails', base64_encode($id)], ['escape' => false, 'class' => 'stepper-wrapper']); ?>
								    <?php }else{ ?>
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
				<div class="d-flex flex-column flex-lg-row-fluid py-10" id="basicdetails">
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
                                        <?php echo $this->Form->control('name', ['label' => false, 'class' => 'form-control name', 'type' => 'text','minlength'=>'1','maxlength'=>'25','onkeypress'=>"return AvoidSpace(this.value)", 'required']); ?>

                                   </div>
                                   <br />
                                   <div class="col-lg-4 col-md-4 col-sm-12">
                                      <label for="">Date of Birth <span class="text-danger">*</span></label> <br />
                                     <?php echo $this->Form->control('dob', ['label' => false, 'class' => 'form-control flatpickr', 'type' => 'text', 'required','onchange'=>"ValidateDOB(this.value)",'value'=>($project['dob'] != '')?date('d-m-Y',strtotime($project['dob'])):'']); ?>
                                     <?php echo $this->Form->control('dob1', ['label' => false, 'class' => 'form-control', 'type' => 'text', 'value'=>date('d-m-Y'),'style'=>'display:none;']); ?>

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
                                      <label for="">Mobile No. <span class="text-danger">*</span></label><span>(+91)</span> <br />
                                         <?php echo $this->Form->control('mobile_no', ['label' => false, 'class' => 'form-control num','minlength'=>"1","maxlength"=>"10",  'type' => 'text','onclick'=>"ValidateMobileNumber()", 'required']); ?>
										 <span id="lblError" class="error"></span>
                                   </div>
                                   <br />
                                </div>
                                <div class="row">
                                   <div class="col-lg-4 col-md-4 col-sm-12">
                                      <label for="">Email ID <span class="text-danger">*</span></label> <br />
                                       <?php echo $this->Form->control('email', ['label' => false, 'class' => 'form-control','type' => 'text','onclick'=>"ValidateMobileNumber()", 'required']); ?>
									   <span id="lblError_1" class="error"></span>
                                      <br />
                                   </div>
                                </div>
                                <?php if($project['payment_status'] != 1){ ?>
								<!--begin::Actions-->
								<div class="d-flex flex-stack pt-15">
									<div>
										<button type="submit" id="submit" class="btn btn-lg btn-primary">
											<span class="indicator-label">Save & Continue
											<i class="ki-duotone ki-arrow-right fs-4 ms-2">
												<span class="path1"></span>
												<span class="path2"></span>
											</i></span>
										</button>
									</div>
								</div>
                                 <?php } ?>

								 <!-- <input type="hidden" id="id_value" value="<?php echo $id?>"> -->
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



	function ValidateDOB(date){

// 		var today = '01-01-2023';
// var age = today.getFullYear() - year;
				// $("#dob1").show();
			
			var today=$("#dob1").val();
			//alert(today);
			
			var slice_today=today.slice(6,10);
			// alert(slice_today);
		
			//var date=<?php date('d-m-Y',strtotime($this->request->getData('dob'))); ?>
			var date=$("#dob").val();
			//alert(date);

			var slice_rqt=date.slice(6,10);
			//alert(slice_rqt);
			var diff=slice_today-slice_rqt;
			//alert('Your age is:' + diff);

			if(diff <15)
			{

				//alert('You can register');
				alert('You are not eligible to register, above 15yrs is eligible to apply..');
				
				$( "#dob" ).val('');
			}

			exit();
		
		
		
		
	}






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
                required: true,
				email:true,

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
                required:  "Enter Email",
				email:'Enter Valid Email ID'
            }
        },

		
        submitHandler: function(form) {

		
            form.submit();
			
            $(".btn").prop('disabled', true);
        }
    });
	
	
// 	$(document).ready(function(){
//   $("form").submit(function(){
// 	var name=$("#name").val();

// name=name.trim();
//     alert(name);
//   });
// });

//function ValidateMobileNumber() {
         //$("button").submit(function(){


// 			$(document).ready(function(){


// 			$("#submit").click(function(){
//       // alert('hi');
//         var mbl=$("#mobile-no").val();
//         var email=$("#email").val();
// 		//alert(typeof(email));
// 		//document.write(email);
//         var lblError = document.getElementById("lblError");
//         lblError.innerHTML = "";
//         var expr = /^(0|91)?[6-9][0-9]{9}$/;
//         let expr_1 = email + ".com";
// 		//document.write(expr_1);
// 		//alert(typeof(expr_1));	
//         if (!expr.test(mbl)) {
//             lblError.innerHTML = "Invalid Mobile Number.";
// 			alert('Invalid mobile No');
// 			$("#mobile-no").val('').trigger('change');
// 			//$("#submit").prop('disabled', true);
// 			//return false;

			
// 			}else{
// 				mbl.innerHTML = "Valid mobile No";
// 				//alert('Valid mobile no');
// 				//return true;
				
				
// 			}

			

//    });
//    });
  // }




   $(document).ready(function(){

$("#email").click(function(){


	alert('Enter Valid Email ID, eg.abc@sample.com');
// 	var email=$("#email").val();
// 	let expr_1 = email + ".com";

// 	alert(email);
// 	alert(expr_1);
// 			    if (email != expr_1) {
//            // lblError_1.innerHTML = "Invalid Email ID";
// 			alert('Invalid Email ID, include .com');
// 			$("#email").val('').trigger('change');
			
// 			}elseif(email == expr_1)
// 			{
			
// 			alert('Valid Email ID');
				
// 			}

 });
});

function AvoidSpace(val) {
            // if (event.keyCode == 32) {
            //     event.returnValue = false;
            //     return false;
            // }

const input = document.querySelector('.name');
input.addEventListener('keyup', () => {
  input.value = input.value.replace(/  +/g, ' ');
});
        } 







// $(window).on('load', function() {




// var id_value=$('#id_value').val();
// var encode = btoa(id_value);

// //alert(encode);


	
	

// $.ajax({

// 				async: true,
// 				dataType: "html",
// 				url: '<?php echo $this->Url->webroot; ?>entitydetails/' + encode,
			
// 			// beforeSend: function(xhr) {
// 			// xhr.setRequestHeader('X-CSRF-Token', $('[name="_csrfToken"]').val());
// 			// },
				
// 				success: function(data, textStatus) {
// 					 alert(data);
				
// 				}
// 			});


// });
  
</script>