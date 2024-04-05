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
										</div>'), ['controller' => 'Projects', 'action' => 'basicdetails',  base64_encode($id)], ['escape' => false, 'class' => 'stepper-wrapper']); ?>
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
											<span class="stepper-number">&#10003;</span>
										</div><div class="stepper-label">
											<h3 class="stepper-title fs-2">Unit / Entity Details</h3>
											<div class="stepper-desc fw-normal">Unit / Entity Details</div>
										</div>'), ['controller' => 'Projects', 'action' => 'entitydetails',  base64_encode($id)], ['escape' => false, 'class' => 'stepper-wrapper']); ?>
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
											<span class="stepper-number">&#10003;</span>
										</div><div class="stepper-label">
											<h3 class="stepper-title fs-2">Education & Work</h3>
											<div class="stepper-desc fw-normal">Education & Work</div>
										</div>'), ['controller' => 'Projects', 'action' => 'educationdetails',  base64_encode($id)], ['escape' => false, 'class' => 'stepper-wrapper']); ?>
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
											<span class="stepper-number">&#10003;</span>
										</div><div class="stepper-label">
											<h3 class="stepper-title fs-2">Manufacturing</h3>
											<div class="stepper-desc fw-normal">Manufacturing</div>
										</div>'), ['controller' => 'Projects', 'action' => 'manufacturingdetails',  base64_encode($id)], ['escape' => false, 'class' => 'stepper-wrapper']); ?>
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
											<span class="stepper-number">&#10003;</span>
										</div><div class="stepper-label">
											<h3 class="stepper-title fs-2">Utilities & Manpower</h3>
											<div class="stepper-desc fw-normal">Utilities & Manpower</div>
										</div>'), ['controller' => 'Projects', 'action' => 'manpowerdetails',  base64_encode($id)], ['escape' => false, 'class' => 'stepper-wrapper']); ?>
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
											<span class="stepper-number">&#10003;</span>
										</div><div class="stepper-label">
											<h3 class="stepper-title fs-2">Capital & Total Cost</h3>
											<div class="stepper-desc fw-normal">Capital & Total Cost</div>
										</div>'), ['controller' => 'Projects', 'action' => 'projectcostdetails',  base64_encode($id)], ['escape' => false, 'class' => 'stepper-wrapper']); ?>
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
											<span class="stepper-number">&#10003;</span>
										</div><div class="stepper-label">
											<h3 class="stepper-title fs-2">Project Profitability</h3>
											<div class="stepper-desc fw-normal">Project Profitability</div>
										</div>'), ['controller' => 'Projects', 'action' => 'profitabilitydetails',  base64_encode($id)], ['escape' => false, 'class' => 'stepper-wrapper']); ?>
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
                                <div class="stepper-item current" data-kt-stepper-element="nav">
								   <?php if($project['step_count'] >= '7'){ ?>
							        <?php echo $this->Html->link(__(' <div class="stepper-icon rounded-3">
											<i class="ki-duotone ki-check fs-2 stepper-check"></i>
											<span class="stepper-number">8</span>
										</div><div class="stepper-label">
											<h3 class="stepper-title fs-2">Supplementary</h3>
											<div class="stepper-desc fw-normal">Supplementary</div>
										</div>'), ['controller' => 'Projects', 'action' => 'suppliementarydetails',  base64_encode($id)], ['escape' => false, 'class' => 'stepper-wrapper']); ?>
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
										</div>'), ['controller' => 'Projects', 'action' => 'referencedetails',  base64_encode($id)], ['escape' => false, 'class' => 'stepper-wrapper']); ?>
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
										</div>'), ['controller' => 'Projects', 'action' => 'paymentdetails',  base64_encode($id)], ['escape' => false, 'class' => 'stepper-wrapper']); ?>
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
					 <form name="frmInfo" class="my-auto pb-5 form-input" novalidate="novalidate" id="frmInfo">
                <h3 class="tab2-head">5.0 Supplementary Details</h3>
                  <hr style="width: 100%; margin-top: 5px" />
                     					
						 <div class="row">         
							<div class="col-sm-12 col-md-12"><div class="table-responsive">
                     <table class="table table-bordered">
									<thead class="table-dark">
										<tr class="text-center">
											<th style="width:2%;"> S.No </th>
											<th style="width:50%;">Give Details</th>
											<th style="width:25%;"></th>											
										</tr>										
									</thead>
									  <tbody class="rawadding">
									        <tr>
												<td align="center">5.1.</td>												
												<td>Do you own House/Property etc. ?
												</td>												
												<td>
												   <?php echo $this->Form->control('own_house', ['class' => 'form-select', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false,'empty'=>'-Select-', 'options' => ['1'=>'Yes','2'=>'No'],'data-rule-required'=>true,'data-msg-required'=>'Select','value'=>($project['own_house'])?$project['own_house']:'']); ?>
												</td>																					
											</tr>
											<tr>
												<td align="center">5.2.</td>												
												<td>Own Insurance Policy
												</td>												
												<td><?php echo $this->Form->control('own_insurance_policy', ['class' => 'form-control amount', 'templates' => ['inputContainer' => '{{content}}'],'type'=>'text', 'label' => false, 'error' => false, 'placeholder' => 'Value','data-rule-required'=>true,'data-msg-required'=>'Enter Value','value'=>$project['own_insurance_policy']]); ?>
												</td>																						
										   </tr>
											<tr>
												<td align="center">5.3.</td>												
												<td>Any Interest in other firms
												</td>												
												<td><?php echo $this->Form->control('interest_other_firms', ['class' => 'form-control amount', 'templates' => ['inputContainer' => '{{content}}'],'type'=>'text', 'label' => false, 'error' => false, 'placeholder' => 'Value','data-rule-required'=>true,'data-msg-required'=>'Enter Selling / Distribution Expenses','value'=>$project['interest_other_firms']]); ?>
												</td>																					
											</tr>
 											<tr>
												<td align="center">5.4.</td>												
												<td>Present Monthly Income (Rs.)
												</td>												
												<td><?php echo $this->Form->control('monthly_income', ['class' => 'form-control amount', 'templates' => ['inputContainer' => '{{content}}'],'type'=>'text', 'label' => false, 'error' => false, 'placeholder' => 'Value','data-rule-required'=>true,'data-msg-required'=>'Enter Administration Expenses','value'=>$project['monthly_income']]); ?>
												</td>																					
											</tr>                                           											
									</tbody>									
								</table></div>
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
 $(document).ready(function() {
	 calculatevalue();
	 calculateworkingvalue();
	 calculateworkingquantity();
	 calculatetotalcost()
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
	
	function calculategrossprofit(){	
	 var sales_revenue           = $('#sales-revenue').val() ? $('#sales-revenue').val() : 0;
	 var manufacturing_expenses  = $('#manufacturing-expenses').val() ? $('#manufacturing-expenses').val() : 0;
	 var distribution_expenses   = $('#distribution-expenses').val() ? $('#distribution-expenses').val() : 0;
	 var administrative_expenses = $('#administrative-expenses').val() ? $('#administrative-expenses').val() : 0;
	 var interest_loan           = $('#interest-loan').val() ? $('#interest-loan').val() : 0;
	 var depreciation            = $('#depreciation').val() ? $('#depreciation').val() : 0;
	 
	  if(sales_revenue > 0){
		 var revenue  = parseFloat(sales_revenue);
		 var expenses = parseFloat(manufacturing_expenses)+parseFloat(distribution_expenses)+parseFloat(administrative_expenses)+parseFloat(interest_loan)+parseFloat(depreciation);
	     var gross_profit =  parseFloat(revenue)-parseFloat(expenses);
		 if (!isNaN(gross_profit)) {
		    $('#gross-profit').val(gross_profit);
		 }else{
		    $('#gross-profit').val('');	 
		 }
	  }	 	
	}	

  function calculatenetprofit(){
     var gross_profit = $('#gross-profit').val() ? $('#gross-profit').val() : 0;
	 var income_tax   = $('#income-tax').val() ? $('#income-tax').val() : 0;
	 var net_profit   =  parseFloat(gross_profit)-parseFloat(income_tax);
	 if (!isNaN(net_profit) && income_tax != 0) {
		$('#net-profit').val(net_profit);
	 }else{
		$('#net-profit').val('');	 
	 }
 }	 
  

 $('input#own-insurance-policy').blur(function(){
			//alert('hi');
    var num = parseFloat($(this).val());
	//alert(num);
    var cleanNum = num.toFixed(1);
	//alert(cleanNum);
    $(this).val(cleanNum);
    if(num/cleanNum > 1){
        $('#error').text('Please enter only 1 decimal places, we have truncated extra points');
        }
    });

 $('input#interest-other-firms').blur(function(){
			//alert('hi');
    var num = parseFloat($(this).val());
	//alert(num);
    var cleanNum = num.toFixed(1);
	//alert(cleanNum);
    $(this).val(cleanNum);
    if(num/cleanNum > 1){
        $('#error').text('Please enter only 1 decimal places, we have truncated extra points');
        }
    });
	

 $('input#monthly-income').blur(function(){
			//alert('hi');
    var num = parseFloat($(this).val());
	//alert(num);
    var cleanNum = num.toFixed(1);
	//alert(cleanNum);
    $(this).val(cleanNum);
    if(num/cleanNum > 1){
        $('#error').text('Please enter only 1 decimal places, we have truncated extra points');
        }
    });

	
</script>