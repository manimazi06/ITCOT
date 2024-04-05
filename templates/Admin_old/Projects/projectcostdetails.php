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
               <li >
                  <div class="list-nav" data-step-target="step6">
                     <div class="icon">
                        <div class="ion-icon">6</div>
                     </div>
                     <div class="info">
                        <p>Capital & Total Cost</p>
                     </div>
                  </div>
               </li>
               <li >
                  <div class="list-nav">
                     <div class="icon">
                        <div class="ion-icon">7</div>
                     </div>
                     <div class="info">
                        <p>Project Profitability</p>
                     </div>
                  </div>
               </li>
               <li >
                  <div class="list-nav">
                     <div class="icon">
                        <div class="ion-icon">8</div>
                     </div>
                     <div class="info">
                        <p>Supplementary Details</p>
                     </div>
                  </div>
               </li>
               <li >
                  <div class="list-nav">
                     <div class="icon">
                        <div class="ion-icon">9</div>
                     </div>
                     <div class="info">
                        <p>References</p>
                     </div>
                  </div>
               </li>
               <li >
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
               <div class="step-tab-panel" data-step="step6">
                  <h3 class="tab2-head">4.0 Cost of the Project</h3>
                  <hr style="width: 150px; margin-top: 5px" />
                     <div class="container">					
						<h5>4.1 Fixed Capital</h5>
						 <div class="row">         
							<div class="col-sm-12 col-md-12">
                                   <table class="table table-bordered responsive">
									<thead class="table-dark">
										<tr class="text-center">
											<th style="width:2%;"> S.No </th>
											<th style="width:20%;">Item</th>
											<th style="width:20%;">Value (Rs.)</th>											
										</tr>										
									</thead>
									  <tbody class="rawadding">
									        <tr>
												<td align="center">1.</td>												
												<td>Land / Building
												</td>												
												<td>
												   <?php echo $this->Form->control('land_value', ['class' => 'form-control value amount', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false,'onkeyup'=>'calculatevalue()', 'placeholder' => 'Value','data-rule-required'=>true,'data-msg-required'=>'Enter Value','value'=>$fixed_capital['land_value']]); ?>
												   <?php echo $this->Form->control('fixed_capital_id', ['label' => false, 'error' => false,'type'=>'hidden','value'=>$fixed_capital['id']]); ?>
												</td>																					
											</tr>
											<tr>
												<td align="center">2.</td>												
												<td>Machinery / Equipment
												</td>												
												<td><?php echo $this->Form->control('machinery_value', ['class' => 'form-control value amount', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false,'onkeyup'=>'calculatevalue()', 'placeholder' => 'Value','data-rule-required'=>true,'data-msg-required'=>'Enter Value','value'=>$fixed_capital['machinery_value']]); ?>
												</td>																						
										   </tr>
											<tr>
												<td align="center">3.</td>												
												<td>Furniture /Fixture
												</td>												
												<td><?php echo $this->Form->control('furniture_value', ['class' => 'form-control value amount', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false,'onkeyup'=>'calculatevalue()', 'placeholder' => 'Value','data-rule-required'=>true,'data-msg-required'=>'Enter Value','value'=>$fixed_capital['furniture_value']]); ?>
												</td>																					
											</tr>																					
									</tbody>
									<tfoot>
										<tr>											
											 <th colspan ="2" style="text-align:right">Total</th>
											 <th><?php echo $this->Form->control('total_value', ['class' => 'form-control', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Total Value','readonly','value'=>$fixed_capital['total_value']]); ?>
											</th>												
										</tr>
									</tfoot>
								</table>
							</div>		
						</div>
						<h5>4.2 Working Capital</h5>
						 <div class="row">         
							<div class="col-sm-12 col-md-12">
                                   <table class="table table-bordered responsive">
									<thead class="table-dark">
										<tr class="text-center">
											<th style="width:2%;"> S.No </th>
											<th style="width:20%;">Item</th>
											<th style="width:20%;">Duration</th>
											<th style="width:20%;">Quantity</th>
											<th style="width:20%;">Value (Rs.)</th>
											
										</tr>										
									</thead>
									  <tbody class="rawadding">
									        <tr>
												<td align="center">1.</td>												
												<td>Raw Material Stock
												</td>
												<td>
												   <?php echo $this->Form->control('raw_duration', ['class' => 'form-control', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Duration','data-rule-required'=>true,'data-msg-required'=>'Enter Duration','value'=>$working_capital['raw_duration']]); ?>
												   <?php echo $this->Form->control('working_capital_id', ['label' => false, 'error' => false,'type'=>'hidden','value'=>$working_capital['id']]); ?>
												</td>
												<td><?php echo $this->Form->control('raw_quantity', ['class' => 'form-control workingquantity amount', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false,'onkeyup'=>'calculateworkingquantity()', 'placeholder' => 'Quantity','data-rule-required'=>true,'data-msg-required'=>'Enter Quantity','value'=>$working_capital['raw_quantity']]); ?>
												</td>
												<td><?php echo $this->Form->control('raw_value', ['class' => 'form-control workingvalue amount', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false,'onkeyup'=>'calculateworkingvalue()', 'placeholder' => 'Value','data-rule-required'=>true,'data-msg-required'=>'Enter Value','value'=>$working_capital['raw_value']]); ?>
												</td>									
											</tr>
											<tr>
												<td align="center">2.</td>												
												<td>Semi finished goods stock
												</td>
												<td><?php echo $this->Form->control('semifinished_duration', ['class' => 'form-control', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Duration','data-rule-required'=>true,'data-msg-required'=>'Enter Duration','value'=>$working_capital['semifinished_duration']]); ?>
												</td>
												<td><?php echo $this->Form->control('semifinished_quantity', ['class' => 'form-control workingquantity amount', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false,'onkeyup'=>'calculateworkingquantity()', 'placeholder' => 'Quantity','data-rule-required'=>true,'data-msg-required'=>'Enter Quantity','value'=>$working_capital['semifinished_quantity']]); ?>
												</td>
												<td><?php echo $this->Form->control('semifinished_value', ['class' => 'form-control workingvalue amount', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false,'onkeyup'=>'calculateworkingvalue()', 'placeholder' => 'Value','data-rule-required'=>true,'data-msg-required'=>'Enter Value','value'=>$working_capital['semifinished_value']]); ?>
												</td>										
										   </tr>
											<tr>
												<td align="center">3.</td>												
												<td>Finished goods stock
												</td>
												<td><?php echo $this->Form->control('finished_duration', ['class' => 'form-control', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Duration','data-rule-required'=>true,'data-msg-required'=>'Enter Duration','value'=>$working_capital['finished_duration']]); ?>
												</td>
												<td><?php echo $this->Form->control('finished_quantity', ['class' => 'form-control workingquantity amount', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false,'onkeyup'=>'calculateworkingquantity()', 'placeholder' => 'Quantity','data-rule-required'=>true,'data-msg-required'=>'Enter Quantity','value'=>$working_capital['finished_quantity']]); ?>
												</td>
												<td><?php echo $this->Form->control('finished_value', ['class' => 'form-control workingvalue amount', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false,'onkeyup'=>'calculateworkingvalue()', 'placeholder' => 'Value','data-rule-required'=>true,'data-msg-required'=>'Enter Value','value'=>$working_capital['finished_value']]); ?>
												</td>										
											</tr>
											<tr>
												<td align="center">4.</td>												
												<td>One month Production Expenses <br>(Utitlisation+Wages+salaries)
												</td>
												<td><?php echo $this->Form->control('expenses_duration', ['class' => 'form-control', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Duration','data-rule-required'=>true,'data-msg-required'=>'Enter Duration','value'=>$working_capital['expenses_duration']]); ?>
												</td>
												<td><?php echo $this->Form->control('expenses_quantity', ['class' => 'form-control workingquantity amount', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false,'onkeyup'=>'calculateworkingquantity()', 'placeholder' => 'Quantity','data-rule-required'=>true,'data-msg-required'=>'Enter Quantity','value'=>$working_capital['expenses_quantity']]); ?>
												</td>
												<td><?php echo $this->Form->control('expenses_value', ['class' => 'form-control workingvalue amount', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false,'onkeyup'=>'calculateworkingvalue()', 'placeholder' => 'Value','data-rule-required'=>true,'data-msg-required'=>'Enter Value','value'=>$working_capital['expenses_value']]); ?>
												</td>											
											</tr>
											 <tr>
												<td align="center">5.</td>												
												<td>Bills Receivables
												</td>
												<td><?php echo $this->Form->control('bills_duration', ['class' => 'form-control', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Duration','data-rule-required'=>true,'data-msg-required'=>'Enter Duration','value'=>$working_capital['bills_duration']]); ?>
												</td>
												<td><?php echo $this->Form->control('bills_quantity', ['class' => 'form-control workingquantity amount', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false,'onkeyup'=>'calculateworkingquantity()', 'placeholder' => 'Quantity','data-rule-required'=>true,'data-msg-required'=>'Enter Quantity','value'=>$working_capital['bills_quantity']]); ?>
												</td>
												<td><?php echo $this->Form->control('bills_value', ['class' => 'form-control workingvalue amount', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false,'onkeyup'=>'calculateworkingvalue()', 'placeholder' => 'Value','data-rule-required'=>true,'data-msg-required'=>'Enter Value','value'=>$working_capital['bills_value']]); ?>
												</td>											
											</tr>	
									</tbody>
									<tfoot>
										<tr>
											
											 <th colspan ="3" style="text-align:right">Total</th>											 
											<th><?php echo $this->Form->control('total_working_quantity', ['class' => 'form-control', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Total Quantity','readonly']); ?>
											</th>
											<th><?php echo $this->Form->control('total_working_value', ['class' => 'form-control', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Total Value','readonly']); ?>
											</th>		
										</tr>
									</tfoot>
								</table>
							</div>		
						</div>
						<h5>4.3 Total Cost of the Project</h5>
						 <div class="row">         
							<div class="col-sm-12 col-md-12">
                                   <table class="table table-bordered responsive">
									<thead class="table-dark">
										<tr class="text-center">
											<th style="width:2%;"> S.No </th>
											<th style="width:20%;">Particulars</th>
											<th style="width:20%;">Value (Rs.)</th>											
										</tr>										
									</thead>
									  <tbody class="rawadding">
									        <tr>
												<td align="center">1.</td>												
												<td>Fixed Capital
												</td>												
												<td><?php echo $this->Form->control('total_fixed_capital', ['class' => 'form-control totalcost', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Value','readonly']); ?>
												</td>																					
											</tr>
											<tr>
												<td align="center">2.</td>												
												<td>Working Capital
												</td>												
												<td><?php echo $this->Form->control('total_working_capital', ['class' => 'form-control totalcost', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Value','readonly']); ?>
												</td>																						
										   </tr>
											<tr>
												<td align="center">3.</td>												
												<td>Preliminary and Pre operative Expenses
												</td>												
												<td><?php echo $this->Form->control('preliminary_expenses', ['class' => 'form-control amount totalcost', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false,'onkeyup'=>'calculatetotalcost()', 'placeholder' => 'Value','data-rule-required'=>true,'data-msg-required'=>'Enter Preliminary /Preoperative Expenses','value'=>$project['preliminary_expenses']]); ?>
												</td>																					
											</tr>																					
									</tbody>
									<tfoot>
										<tr>											
											 <th colspan ="2" style="text-align:right">Total</th>
											 <th><?php echo $this->Form->control('total_cost', ['class' => 'form-control', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Total Value','readonly']); ?>
											</th>												
										</tr>
									</tfoot>
								</table>
							</div>		
						</div>
						<h5>4.4 Means of Finance</h5>
						 <div class="row">         
							<div class="col-sm-12 col-md-12">
                                   <table class="table table-bordered responsive">
									<thead class="table-dark">
										<tr class="text-center">
											<th style="width:2%;"> S.No </th>
											<th style="width:20%;">Particulars</th>
											<th style="width:20%;">Value (Rs.)</th>
											<th style="width:20%;">Remarks</th>											
										</tr>										
									</thead>
									  <tbody class="rawadding">
									        <tr>
												<td align="center">1.</td>												
												<td>Working Capital Finance
												</td>												
												<td>
												  <?php echo $this->Form->control('capital_finance_value', ['class' => 'form-control financevalue amount', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false,'onkeyup'=>'calculatefinancevalue()', 'placeholder' => 'Value','data-rule-required'=>true,'data-msg-required'=>'Enter Value','value'=>$means_Finance['capital_finance_value']]); ?>
												  <?php echo $this->Form->control('mean_finance_id', ['label' => false, 'error' => false,'type'=>'hidden','value'=>$means_Finance['id']]); ?>

												</td>
												<td><?php echo $this->Form->control('capital_finance_remark', ['class' => 'form-control', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Remarks','data-rule-required'=>false,'data-msg-required'=>'Enter Remarks','type'=>'textarea','rows'=>2,'value'=>$means_Finance['capital_finance_remark']]); ?>
												</td>									
											</tr>
											<tr>
												<td align="center">2.</td>												
												<td>Subsidy
												</td>												
												<td><?php echo $this->Form->control('subsidy_value', ['class' => 'form-control financevalue amount', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false,'onkeyup'=>'calculatefinancevalue()', 'placeholder' => 'Value','data-rule-required'=>true,'data-msg-required'=>'Enter Value','value'=>$means_Finance['subsidy_value']]); ?>
												</td>
												<td><?php echo $this->Form->control('subsidy_remark', ['class' => 'form-control', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Remarks','data-rule-required'=>false,'data-msg-required'=>'Enter Remarks','type'=>'textarea','rows'=>2,'value'=>$means_Finance['subsidy_remark']]); ?>
												</td>										
										   </tr>
											<tr>
												<td align="center">3.</td>												
												<td>Term Loan
												</td>												
												<td><?php echo $this->Form->control('loan_value', ['class' => 'form-control financevalue amount', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false,'onkeyup'=>'calculatefinancevalue()', 'placeholder' => 'Value','data-rule-required'=>true,'data-msg-required'=>'Enter Value','value'=>$means_Finance['loan_value']]); ?>
												</td>
												<td><?php echo $this->Form->control('loan_remark', ['class' => 'form-control', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Remarks','data-rule-required'=>false,'data-msg-required'=>'Enter Remarks','type'=>'textarea','rows'=>2,'value'=>$means_Finance['loan_remark']]); ?>
												</td>										
											</tr>
											<tr>
												<td align="center">4.</td>												
												<td>Own Investment
												</td>												
												<td><?php echo $this->Form->control('investment_value', ['class' => 'form-control financevalue amount', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false,'onkeyup'=>'calculatefinancevalue()', 'placeholder' => 'Value','data-rule-required'=>true,'data-msg-required'=>'Enter Value','value'=>$means_Finance['investment_value']]); ?>
												</td>
												<td><?php echo $this->Form->control('investment_remark', ['class' => 'form-control', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Remarks','data-rule-required'=>false,'data-msg-required'=>'Enter Remarks','type'=>'textarea','rows'=>2,'value'=>$means_Finance['investment_remark']]); ?>
												</td>											
											</tr>
											 <tr>
												<td align="center">5.</td>												
												<td>Any Other
												</td>												
												<td><?php echo $this->Form->control('other_value', ['class' => 'form-control financevalue amount', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false,'onkeyup'=>'calculatefinancevalue()', 'placeholder' => 'Value','data-rule-required'=>true,'data-msg-required'=>'Enter Value','value'=>$means_Finance['other_value']]); ?>
												</td>
												<td><?php echo $this->Form->control('other_remark', ['class' => 'form-control', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Remarks','data-rule-required'=>false,'data-msg-required'=>'Enter Remarks','type'=>'textarea','rows'=>2,'value'=>$means_Finance['other_remark']]); ?>
												</td>											
											</tr>	
									</tbody>
									<tfoot>
										<tr>											
											<th colspan ="2" style="text-align:right">Total</th>											 
											<th><?php echo $this->Form->control('total_finance_value', ['class' => 'form-control', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Total Value','readonly']); ?>
											</th>
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
	
	function calculatevalue(){	
	 var values = 0;
	   $(".value").each(function() {       
		   
		   if(parseFloat(this.value) != 'NAN'){
			 values += parseFloat(this.value);
		   }			 
		});	

		 if (!isNaN(values)) {		
		   $('#total-value').val(values.toFixed(2));
		   $('#total-fixed-capital').val(values.toFixed(2));
		   
		}else{			
		   $('#total-value').val('');
		}		
	}	
	
	
	function calculateworkingvalue(){	
	 var workingvalue = 0;
	   $(".workingvalue").each(function() {       
		   
		   if(parseFloat(this.value) != 'NAN'){
			 workingvalue += parseFloat(this.value);
		   }			 
		});	

		 if (!isNaN(workingvalue)) {		
		   $('#total-working-value').val(workingvalue.toFixed(2));
		   $('#total-working-capital').val(workingvalue.toFixed(2));
		   
		}else{			
		   $('#total-working-value').val('');
		}		
	}


function calculateworkingquantity(){	
	 var workingquantity = 0;
	   $(".workingquantity").each(function() {       
		   
		   if(parseFloat(this.value) != 'NAN'){
			 workingquantity += parseFloat(this.value);
		   }			 
		});	

		 if (!isNaN(workingquantity)) {		
		   $('#total-working-quantity').val(workingquantity);
		   
		}else{			
		   $('#total-working-quantity').val('');
		}		
	}	


	function calculatetotalcost(){	
	 var totalcost = 0;
	   $(".totalcost").each(function() {       
		   
		   if(parseFloat(this.value) != 'NAN'){
			 totalcost += parseFloat(this.value);
		   }			 
		});	

		 if (!isNaN(totalcost)) {		
		   $('#total-cost').val(totalcost.toFixed(2));
		   
		}else{			
		   $('#total-cost').val('');
		}		
	}	
	
	function calculatefinancevalue(){	
	 var financevalue = 0;
	   $(".financevalue").each(function() {       
		   
		   if(parseFloat(this.value) != 'NAN'){
			 financevalue += parseFloat(this.value);
		   }			 
		});	

		 if (!isNaN(financevalue)) {		
		   $('#total-finance-value').val(financevalue.toFixed(2));
		   
		}else{			
		   $('#total-finance-value').val('');
		}		
	}	
  
</script>