<style>     
.step-footer {
    text-align: center !important;
}
</style>        
		<?php // print_r($this->Url->webroot);  exit(); ?>
<?php echo $this->Form->create(null, ['id' => 'FormID', 'class' => '', "autocomplete" => "off", 'enctype' => 'multipart/form-data']); ?>

<div class="container-fluid">
         <div class="step-app row justify-content-center" id="demo">
		  <ul class="step-steps col-lg-12 col-md-12 col-sm-12" >
               <li>             
				  	<?php echo $this->Html->link(__(' <div class="icon"><ion-icon name="checkmark-outline"></ion-icon> </div><div class="info">General Details</div>'), ['controller' => 'Projects', 'action' => 'basicdetails', $id], ['escape' => false, 'class' => 'list-nav']); ?>
               </li>
               <li>
                	<?php echo $this->Html->link(__(' <div class="icon"><ion-icon name="checkmark-outline"></ion-icon> </div><div class="info">Unit / Entity Details</div>'), ['controller' => 'Projects', 'action' => 'entitydetails', $id], ['escape' => false, 'class' => 'list-nav']); ?>
               </li>
               <li>
                 	<?php echo $this->Html->link(__(' <div class="icon"><ion-icon name="checkmark-outline"></ion-icon> </div><div class="info">Education & Work</div>'), ['controller' => 'Projects', 'action' => 'educationdetails', $id], ['escape' => false, 'class' => 'list-nav']); ?>
               </li>
               <li>
                 	<?php echo $this->Html->link(__(' <div class="icon"><ion-icon name="checkmark-outline"></ion-icon> </div><div class="info">Manufacturing</div>'), ['controller' => 'Projects', 'action' => 'manufacturingdetails', $id], ['escape' => false, 'class' => 'list-nav']); ?>
               </li>
			    <li>
                 	<?php echo $this->Html->link(__(' <div class="icon"><ion-icon name="checkmark-outline"></ion-icon> </div><div class="info">Utilities & Manpower</div>'), ['controller' => 'Projects', 'action' => 'manpowerdetails', $id], ['escape' => false, 'class' => 'list-nav']); ?>
               </li>               
                <li>
                 	<?php echo $this->Html->link(__(' <div class="icon"><ion-icon name="checkmark-outline"></ion-icon> </div><div class="info">Capital & Total Cost</div>'), ['controller' => 'Projects', 'action' => 'projectcostdetails', $id], ['escape' => false, 'class' => 'list-nav']); ?>
               </li> 
			   <li>
                   <?php echo $this->Html->link(__(' <div class="icon"><ion-icon name="checkmark-outline"></ion-icon> </div><div class="info">Project Profitability</div>'), ['controller' => 'Projects', 'action' => 'profitabilitydetails', $id], ['escape' => false, 'class' => 'list-nav']); ?>
               </li>               
               <li>
                  <div class="list-nav" data-step-target="step8">
                     <div class="icon">
                        <div class="ion-icon">8</div>
                     </div>
                     <div class="info">
                        <p>Supplementary Details</p>
                     </div>
                  </div>
               </li>
               <li>
                  <div class="list-nav">
                     <div class="icon">
                        <div class="ion-icon">9</div>
                     </div>
                     <div class="info">
                        <p>References</p>
                     </div>
                  </div>
               </li>
               <li>
                  <div class="list-nav">
                     <div class="icon">
                        <div class="ion-icon">10</div>
                     </div>
                     <div class="info">
                        <p>Payment Details</p>
                     </div>
                  </div>
               </li>
            </ul>
			<div class="step-content col-lg-8 col-md-8 col-sm-12">
               <div class="step-tab-panel" data-step="step8">
                  <h3 class="tab2-head">5.0 Supplementary Details</h3>
                  <hr style="width: 150px; margin-top: 5px" />
                     <div class="container">					
						 <div class="row">         
							<div class="col-sm-12 col-md-12">
                                   <table class="table table-bordered responsive">
									<thead class="table-dark">
										<tr class="text-center">
											<th style="width:2%;"> S.No </th>
											<th style="width:20%;">Give Details</th>
											<th style="width:50%;"></th>											
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
												<td><?php echo $this->Form->control('own_insurance_policy', ['class' => 'form-control value amount', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Value','data-rule-required'=>true,'data-msg-required'=>'Enter Value','value'=>$project['own_insurance_policy']]); ?>
												</td>																						
										   </tr>
											<tr>
												<td align="center">5.3.</td>												
												<td>Any Interest in other firms
												</td>												
												<td><?php echo $this->Form->control('interest_other_firms', ['class' => 'form-control value amount', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Value','data-rule-required'=>true,'data-msg-required'=>'Enter Selling / Distribution Expenses','value'=>$project['interest_other_firms']]); ?>
												</td>																					
											</tr>
 											<tr>
												<td align="center">5.4.</td>												
												<td>Present Monthly Income (Rs.)
												</td>												
												<td><?php echo $this->Form->control('monthly_income', ['class' => 'form-control value amount', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Value','data-rule-required'=>true,'data-msg-required'=>'Enter Administration Expenses','value'=>$project['monthly_income']]); ?>
												</td>																					
											</tr>                                           											
									</tbody>									
								</table>
							</div>		
						</div>				
                     </div>
               </div>
            </div>
			<div class="step-footer">
               <!--button data-step-action="prev" class="step-btn btn">Previous</button-->
               <button type="submit" class="btn btn-info rounded-pill px-4 waves-effect waves-light">Save & Continue</button>
               <!--button data-step-action="finish" class="step-btn btn">Finish</button-->
            </div>
          </div>
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
  
</script>