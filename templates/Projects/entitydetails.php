<style>     
.step-footer {
    text-align: center !important;
}
</style>        
<div>

<center style=" font-weight:bold; font-size:20px;"><?= $this->Flash->render() ?></center>


</div>
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
								 <?php if($project['step_count'] >= '0'){ ?>
							        <?php echo $this->Html->link(__(' <div class="stepper-icon rounded-3">
											<i class="ki-duotone ki-check fs-2 stepper-check"></i>
											<span class="stepper-number">&#10003;</span>
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
								<div class="stepper-item current" data-kt-stepper-element="nav">
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
							        <?php echo $this->Html->link(__(' <div class="stepper-icon rounded-3">
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
				<div class="d-flex flex-column flex-lg-row-fluid py-10">
					<!--begin::Content-->
					<div class="d-flex flex-column flex-column-fluid">
						<!--begin::Wrapper-->
						<div class="p-10 p-lg-15">
							<!--begin::Form-->
							<?php echo  $insert_encode ?>
					 <form name="frmInfo" class="my-auto pb-5 form-input" novalidate="novalidate" id="frmInfo">
                                <div class="row mt-5">
						    <div class="col-lg-4 col-md-4 col-sm-12">
                               <label  for="" >Entity Name<span class="text-danger">*</span></label> <br />
                               <?php echo $this->Form->control('unit_name', ['label' => false, 'class' => 'form-control', 'type' => 'text','onkeypress'=>"return AvoidSpace(this.value)", 'required']); ?>

                           </div>
                           <br />
                           <div class="col-lg-4 col-md-4 col-sm-12">
                              <label for="">Sector Type<span class="text-danger">*</span></label> <br />
                              <?php echo $this->Form->control('sectortype_id', ['class' => 'form-select', 'templates' => ['inputContainer' => '{{content}}'], 'options' => $sectortypes, 'label' => false, 'error' => false, 'empty' => 'Select']); ?>

                           </div>
                           <br />
                           <div class="col-lg-4 col-md-4 col-sm-12">
                              <label for="">Address<span class="text-danger">*</span></label> <br />
                              <?php echo $this->Form->control('address', ['label' => false, 'class' => 'form-control', 'type' => 'textarea','rows'=>2,'onkeypress'=>"return AvoidSpaceaddr(this.value)", 'required']); ?>

                           </div>
                           <br />                          
                        </div>
                        <div class="row mt-4">
                           <div class="col-lg-4 col-md-4 col-sm-12">
                              <label for="">Locality <span class="text-danger">*</span></label> <br />
                              <?php echo $this->Form->control('localitytype_id', ['class' => 'form-select', 'templates' => ['inputContainer' => '{{content}}'], 'options' => $localitytype, 'label' => false, 'error' => false, 'empty' => 'Select']); ?>

                              <br />
                           </div>
                           <div class="col-lg-4 col-md-4 col-sm-12">
                              <label for="">Pincode <span class="text-danger">*</span></label> <br />
                              <?php echo $this->Form->control('pincode', ['label' => false, 'class' => 'form-control num', 'type' => 'text','maxlength'=>6, 'required']); ?>

                              <br />
                           </div>
                           <div class="col-lg-4 col-md-4 col-sm-12">
                              <label for="">State. <span class="text-danger">*</span></label> <br />
                                 <?php echo $this->Form->control('state_id', ['class' => 'form-select', 'templates' => ['inputContainer' => '{{content}}'], 'options' => $categories, 'label' => false, 'error' => false, 'empty' => 'Select']); ?>

                           </div>
                           <br />
                        </div>
                        <div class="row">
                           <div class="col-lg-4 col-md-4 col-sm-12">
                              <label for="">Registration Type <span class="text-danger">*</span></label> <br />
                                <?php echo $this->Form->control('registrationtype_id', ['class' => 'form-select', 'templates' => ['inputContainer' => '{{content}}'], 'options' => $registrationtype, 'label' => false, 'error' => false, 'empty' => 'Select']); ?>

                              <br />
                           </div>
						    <div class="col-lg-4 col-md-4 col-sm-12">
                              <label for="">Project Cost <span class="text-danger">*</span></label> <br />
                              <?php echo $this->Form->control('project_cost', ['label' => false, 'class' => 'form-control amount', 'type' => 'text','data-type'=>'currency','maxlength'=>'18', 'required']); ?>

                              <br />
                           </div>
						    <div class="col-lg-4 col-md-4 col-sm-12">
                              <label for="">Loan Amount <span class="text-danger">*</span></label> <br />
                               <?php echo $this->Form->control('loan_amount', ['label' => false, 'class' => 'form-control amount', 'type' => 'text','data-type'=>'currency','onkeypress'=>"return AvoidSpacedot(this.value)",'maxlength'=>'18', 'required']); ?>

                              <br />
                           </div>
                        </div>
						 <div class="row">
                           <div class="col-lg-4 col-md-4 col-sm-12">
                              <label for="">Type of Loan </label> <br />
                              <?php echo $this->Form->control('loan_type_id', ['class' => 'form-select', 'templates' => ['inputContainer' => '{{content}}'], 'options' => $loantypes, 'label' => false, 'error' => false,'onchange'=>'others(this.value)', 'empty' => 'Select']); ?>
							  <br>
							  
									
							  <?php if($project['others_name']!=''){?>

								<?php echo $this->Form->control('others_name', ['label' => false, 'class' => 'form-control name', 'type' => 'text','onkeypress'=>"return AvoidSpace(this.value)",'value'=>$project['others_name'], 'required']); ?>
									<?php }else{
							   echo $this->Form->control('others_name', ['label' => false, 'class' => 'form-control name', 'type' => 'text','onkeypress'=>"return AvoidSpace(this.value)",'style'=>'display:none', 'required']); 
							}?>

							
                              <br />
                           </div>
						    <div class="col-lg-4 col-md-4 col-sm-12">
                              <label for="">Loan Purpose <span class="text-danger">*</span></label> <br />
                              <?php echo $this->Form->control('loan_purpose_id', ['class' => 'form-select', 'templates' => ['inputContainer' => '{{content}}'], 'options' => $loanpurposes, 'label' => false, 'error' => false, 'empty' => 'Select Loan Purpose']); ?>

                              <br />
                           </div>						    
                        </div>
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
			// 'loan_type_id': {
            //     required: true
            // },
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
                required:  "Enter Loan Amount",
                required:  "Only 13 characters allowed"
            },
			// 'loan_type_id': {
            //     required:  "Enter Loan Type"
            // },
			'loan_purpose_id': {
                required:  "Select Loan Purpose",
				required:  "Only 13 characters allowed"
            }
        },
        submitHandler: function(form) {
            form.submit();
            $(".btn").prop('disabled', true);
        }
    });

	//name

	function AvoidSpace(val) {
		//alert('hi');
            // if (event.keyCode == 32) {
            //     event.returnValue = false;
            //     return false;
            // }

const input = document.querySelector('.name');
input.addEventListener('keyup', () => {
  input.value = input.value.replace(/  +/g, ' ');
});
        } 

		//Address

	function AvoidSpaceaddr(val) {
		//alert('hi');
            // if (event.keyCode == 32) {
            //     event.returnValue = false;
            //     return false;
            // }

const input = document.querySelector('#address');
input.addEventListener('keyup', () => {
  input.value = input.value.replace(/  +/g, ' ');
});

        } 

		//amount


	// 	$('input#loan-amount').blur(function(){
	// 		//alert('hi');
    // var num = parseFloat($(this).val());
	// //alert(num);
    // var cleanNum = num.toFixed(1);
	// //alert(cleanNum);
    // $(this).val(cleanNum);
    // if(num/cleanNum > 1){
    //     $('#error').text('Please enter only 1 decimal places, we have truncated extra points');
    //     }
    // });


	// $('input#project-cost').blur(function(){
	// 		//alert('hi');
    // var num = parseFloat($(this).val());
	// //alert(num);
    // var cleanNum = num.toFixed(1);
	// //alert(cleanNum);
    // $(this).val(cleanNum);
    // if(num/cleanNum > 1){
    //     $('#error').text('Please enter only 1 decimal places, we have truncated extra points');
    //     }
    // });



	$("input[data-type='currency']").on({
    keyup: function() {
      formatCurrency($(this));
    },
    blur: function() { 
      formatCurrency($(this), "blur");
    }
});


function formatNumber(n) {
  // format number 1000000 to 1,234,567
 // return n.replace(/\D/g, "").replace(/\B(?=(\d{3})+(?!\d))/g, ",")
  return (isNaN(parseInt(n))) ?  0 : /*'₹' + */ parseInt(n).toLocaleString('en-IN')
}


function formatCurrency(input, blur) {
  // appends $ to value, validates decimal side
  // and puts cursor back in right position.
  
  // get input value
  var input_val = input.val();
  
  // don't validate empty input
  if (input_val === "") { return; }
  
  // original length
  var original_len = input_val.length;

  // initial caret position 
  var caret_pos = input.prop("selectionStart");
    
  // check for decimal
  if (input_val.indexOf(".") >= 0) {

    // get position of first decimal
    // this prevents multiple decimals from
    // being entered
    var decimal_pos = input_val.indexOf(".");

    // split number by decimal point
    var left_side = input_val.substring(0, decimal_pos);
    var right_side = input_val.substring(decimal_pos);

    // add commas to left side of number
    left_side = formatNumber(left_side);

    // validate right side
    right_side = formatNumber(right_side);
    
    // On blur make sure 2 numbers after decimal
    if (blur === "blur") {
      right_side += "00";
    }
    
    // Limit decimal to only 2 digits
    right_side = right_side.substring(0, 2);

    // join number by .
    input_val = '₹' +left_side + "." + right_side;

  } else {
    // no decimal entered
    // add commas to number
    // remove all non-digits
    input_val = formatNumber(input_val);
    input_val = '₹' + input_val;
    
    // final formatting
    if (blur === "blur") {
      input_val += "";
    }
  }
  
  // send updated string to input
  input.val(input_val);

  // put caret back in the right position
  var updated_len = input_val.length;
  caret_pos = updated_len - original_len + caret_pos;
  input[0].setSelectionRange(caret_pos, caret_pos);
}


function others(val){
//alert(val);
 var val;

 if(val==7){
	$('#others-name').show();
 }else{
	$('#others-name').hide();
 }

}

// 	function AvoidSpacedot(val) {
// 		//alert('hi');
//             // if (event.keyCode == 32) {
//             //     event.returnValue = false;
//             //     return false;
//             // }

// const input = document.querySelector('#loan-amount');
// input.addEventListener('keyup', () => {
//   input.value = input.value.replace(/  +/g, '.');
// });

//         } 
</script>