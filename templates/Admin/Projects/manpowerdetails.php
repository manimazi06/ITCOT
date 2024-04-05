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
               <li >             
				  	 <?php echo $this->Html->link(__(' <div class="icon"><ion-icon name="checkmark-outline"></ion-icon> </div><div class="info">General Details</div>'), ['controller' => 'Projects', 'action' => 'basicdetails', $id], ['escape' => false, 'class' => 'list-nav']); ?>

               </li>
               <li >
                 	 <?php echo $this->Html->link(__(' <div class="icon"><ion-icon name="checkmark-outline"></ion-icon> </div><div class="info">Unit / Entity Details</div>'), ['controller' => 'Projects', 'action' => 'entitydetails', $id], ['escape' => false, 'class' => 'list-nav']); ?>

               </li>
               <li >
                 	 <?php echo $this->Html->link(__(' <div class="icon"><ion-icon name="checkmark-outline"></ion-icon> </div><div class="info">Education & Work</div>'), ['controller' => 'Projects', 'action' => 'educationdetails', $id], ['escape' => false, 'class' => 'list-nav']); ?>

               </li>
               <li >
                 	 <?php echo $this->Html->link(__(' <div class="icon"><ion-icon name="checkmark-outline"></ion-icon> </div><div class="info">Manufacturing</div>'), ['controller' => 'Projects', 'action' => 'manufacturingdetails', $id], ['escape' => false, 'class' => 'list-nav']); ?>

               </li>
               <li >
                  <div class="list-nav " data-step-target="step5">
                     <div class="icon">
                        <div class="ion-icon">5</div>
                     </div>
                     <div class="info">
                        <p>Utilities & Manpower</p>
                     </div>
                  </div>
               </li>
               <li >
                  <div class="list-nav">
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
			<div class="step-content col-lg-10 col-md-8 col-sm-12">
               <div class="step-tab-panel" data-step="step5">
                  <h3 class="tab2-head">Utilities & Manpower</h3>
                  <hr style="width: 150px; margin-top: 5px" />
                     <div class="container">					
						<h5>2.4 Utilities</h5>
						 <div class="row">         
							<div class="col-sm-12 col-md-12">
                                   <table class="table table-bordered responsive">
									<thead class="table-dark">
										<tr class="text-center">
											<th style="width:2%;"> S.No </th>
											<th style="width:20%;">Particulars</th>
											<th style="width:20%;">Annual Requirement</th>
											<th style="width:20%;">Total Annual Expenses</th>
											<th style="width:20%;">Remarks</th>
											
										</tr>										
									</thead>
									  <tbody class="rawadding">
									        <tr>
												<td align="center">1.</td>												
												<td>Electricity
												</td>
												<td>
												  <?php echo $this->Form->control('electricity_requirement', ['class' => 'form-control requirement', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Requirement','onkeyup'=>'calculaterequirement()','data-rule-required'=>true,'data-msg-required'=>'Enter Requirement','value'=>$utilities['electricity_requirement']]); ?>
													<?php echo $this->Form->control('utility_id', ['label' => false, 'error' => false,'type'=>'hidden','value'=>$utilities['id']]); ?>
												</td>
												<td><?php echo $this->Form->control('electricity_expenses', ['class' => 'form-control expenses amount', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Expenses','onkeyup'=>'calculateexpenses()','data-rule-required'=>true,'data-msg-required'=>'Enter Expenses','value'=>$utilities['electricity_expenses']]); ?>
												</td>
												<td><?php echo $this->Form->control('electricity_remarks', ['class' => 'form-control', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Remarks','data-rule-required'=>true,'data-msg-required'=>'Enter Remarks','value'=>$utilities['electricity_remarks']]); ?>
												</td>									
											</tr>
											<tr>
												<td align="center">2.</td>		   										
												<td>Water
												</td>
												<td><?php echo $this->Form->control('water_requirement', ['class' => 'form-control requirement', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Requirement','onkeyup'=>'calculaterequirement()','data-rule-required'=>true,'data-msg-required'=>'Enter Requirement','value'=>$utilities['water_requirement']]); ?>
												</td>
												<td><?php echo $this->Form->control('water_expenses', ['class' => 'form-control expenses amount', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Expenses','onkeyup'=>'calculateexpenses()','data-rule-required'=>true,'data-msg-required'=>'Enter Expenses','value'=>$utilities['water_expenses']]); ?>
												</td>
												<td><?php echo $this->Form->control('water_remarks', ['class' => 'form-control', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Remarks','data-rule-required'=>true,'data-msg-required'=>'Enter Remarks','value'=>$utilities['water_remarks']]); ?>
												</td>										
										   </tr>
											<tr>
												<td align="center">3.</td>												
												<td>Coal /Oil
												</td>
												<td><?php echo $this->Form->control('oil_requirement', ['class' => 'form-control requirement', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Requirement','onkeyup'=>'calculaterequirement()','data-rule-required'=>true,'data-msg-required'=>'Enter Requirement','value'=>$utilities['oil_requirement']]); ?>
												</td>
												<td><?php echo $this->Form->control('oil_expenses', ['class' => 'form-control expenses amount', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Expenses','onkeyup'=>'calculateexpenses()','data-rule-required'=>true,'data-msg-required'=>'Enter Expenses','value'=>$utilities['oil_expenses']]); ?>
												</td>
												<td><?php echo $this->Form->control('oil_remarks', ['class' => 'form-control', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Remarks','data-rule-required'=>true,'data-msg-required'=>'Enter Remarks','value'=>$utilities['oil_remarks']]); ?>
												</td>										
											</tr>
											<tr>
												<td align="center">4.</td>												
												<td>Any Other
												</td>
												<td><?php echo $this->Form->control('other_requirement', ['class' => 'form-control requirement', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Requirement','onkeyup'=>'calculaterequirement()','data-rule-required'=>true,'data-msg-required'=>'Enter Requirement','value'=>$utilities['other_requirement']]); ?>
												</td>
												<td><?php echo $this->Form->control('other_expenses', ['class' => 'form-control expenses amount', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Expenses','onkeyup'=>'calculateexpenses()','data-rule-required'=>true,'data-msg-required'=>'Enter Expenses','value'=>$utilities['other_expenses']]); ?>
												</td>
												<td><?php echo $this->Form->control('other_remarks', ['class' => 'form-control', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Remarks','data-rule-required'=>true,'data-msg-required'=>'Enter Remarks','value'=>$utilities['other_remarks']]); ?>
												</td>											
											</tr>											
									</tbody>
									<tfoot>
										<tr>
											
											 <th colspan ="2" style="text-align:right">Total</th>
											 <th><?php echo $this->Form->control('total_requirement', ['class' => 'form-control', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Requirement','readonly','value'=>($total_requirement)?$total_requirement:'']); ?>
											</th>
											<th><?php echo $this->Form->control('total_expenses', ['class' => 'form-control', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Expenses','readonly']); ?>
											</th>
											<th>
											</th>		
										</tr>
									</tfoot>
								</table>
							</div>		
						</div>
						<h5>2.5 Man Power</h5>
						 <div class="row">         
							<div class="col-sm-12 col-md-12">
                                   <table class="table table-bordered responsive">
									<thead class="table-dark">
										<tr class="text-center">
											<th style="width:2%;"> S.No </th>
											<th style="width:20%;">Particulars</th>
											<th style="width:20%;">No.</th>
											<th style="width:20%;">Total wages / Salaries per annum</th>
											<th style="width:20%;">Remarks</th>
											
										</tr>										
									</thead>
									  <tbody class="rawadding">
									        <tr>
												<td align="center">1.</td>												
												<td>Skilled
												</td>
												<td><?php echo $this->Form->control('skilled_no', ['class' => 'form-control number num', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false,'onkeyup'=>'calculatenumber()', 'placeholder' => 'Number','data-rule-required'=>true,'data-msg-required'=>'Enter Number','maxlength'=>11,'value'=>$manpower['skilled_no']]); ?>
													<?php echo $this->Form->control('manpower_id', ['label' => false, 'error' => false,'type'=>'hidden','value'=>$manpower['id']]); ?>

												</td>
												<td><?php echo $this->Form->control('skilled_salaries', ['class' => 'form-control wages amount', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false,'onkeyup'=>'calculatewages()', 'placeholder' => 'Salary /annum','data-rule-required'=>true,'data-msg-required'=>'Enter Wages /salary','maxlength'=>14,'value'=>$manpower['skilled_salaries']]); ?>
												</td>
												<td><?php echo $this->Form->control('skilled_remarks', ['class' => 'form-control', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Remarks','data-rule-required'=>true,'data-msg-required'=>'Enter Remarks','value'=>$manpower['skilled_remarks']]); ?>
												</td>									
											</tr>
											<tr>
												<td align="center">2.</td>												
												<td>Semiskilled
												</td>
												<td><?php echo $this->Form->control('unskilled_no', ['class' => 'form-control number num', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false,'onkeyup'=>'calculatenumber()', 'placeholder' => 'Number','data-rule-required'=>true,'data-msg-required'=>'Enter Number','maxlength'=>11,'value'=>$manpower['unskilled_no']]); ?>
												</td>
												<td><?php echo $this->Form->control('unskilled_salaries', ['class' => 'form-control wages amount', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false,'onkeyup'=>'calculatewages()', 'placeholder' => 'Salary /annum','data-rule-required'=>true,'data-msg-required'=>'Enter Wages /salary','maxlength'=>14,'value'=>$manpower['unskilled_salaries']]); ?>
												</td>
												<td><?php echo $this->Form->control('unskilled_remarks', ['class' => 'form-control', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Remarks','data-rule-required'=>true,'data-msg-required'=>'Enter Remarks','value'=>$manpower['unskilled_remarks']]); ?>
												</td>										
										   </tr>
											<tr>
												<td align="center">3.</td>												
												<td>Unskilled
												</td>
												<td><?php echo $this->Form->control('semiskilled_no', ['class' => 'form-control number num', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false,'onkeyup'=>'calculatenumber()', 'placeholder' => 'Number','data-rule-required'=>true,'data-msg-required'=>'Enter Number','maxlength'=>11,'value'=>$manpower['semiskilled_no']]); ?>
												</td>
												<td><?php echo $this->Form->control('semiskilled_salaries', ['class' => 'form-control wages amount', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false,'onkeyup'=>'calculatewages()', 'placeholder' => 'Salary /annum','data-rule-required'=>true,'data-msg-required'=>'Enter Wages /salary','maxlength'=>14,'value'=>$manpower['semiskilled_salaries']]); ?>
												</td>
												<td><?php echo $this->Form->control('semiskilled_remarks', ['class' => 'form-control', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Remarks','data-rule-required'=>true,'data-msg-required'=>'Enter Remarks','value'=>$manpower['semiskilled_remarks']]); ?>
												</td>										
											</tr>
											<tr>
												<td align="center">4.</td>												
												<td>Office Staff
												</td>
												<td><?php echo $this->Form->control('office_no', ['class' => 'form-control number num', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false,'onkeyup'=>'calculatenumber()', 'placeholder' => 'Number','data-rule-required'=>true,'data-msg-required'=>'Enter Number','maxlength'=>11,'value'=>$manpower['office_no']]); ?>
												</td>
												<td><?php echo $this->Form->control('office_salaries', ['class' => 'form-control wages amount', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false,'onkeyup'=>'calculatewages()', 'placeholder' => 'Salary /annum','data-rule-required'=>true,'data-msg-required'=>'Enter Wages /salary','maxlength'=>14,'value'=>$manpower['office_salaries']]); ?>
												</td>
												<td><?php echo $this->Form->control('office_remarks', ['class' => 'form-control', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Remarks','data-rule-required'=>true,'data-msg-required'=>'Enter Remarks','value'=>$manpower['office_remarks']]); ?>
												</td>											
											</tr>											
									</tbody>
									<tfoot>
										<tr>
											
											 <th colspan ="2" style="text-align:right">Total</th>
											 <th><?php echo $this->Form->control('total_no', ['class' => 'form-control', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Total Number','readonly']); ?>
											</th>
											<th><?php echo $this->Form->control('total_salaries', ['class' => 'form-control', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Total Salary','readonly']); ?>
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
	 calculaterequirement();
	 calculateexpenses();
	 calculatenumber();
	 calculatewages()
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
	
function productionadding() {
	//var type
    var j = ($('.productionpresent_row_in_post').length);
    var row_no = j - 1;
    var item = $("#production-"+row_no+"-item").val();
	//alert(code);
    if (item != '') {
            $.ajax({
                async: true,
                dataType: "html",
                url: '<?php echo $this->Url->webroot; ?>../ajaxaddproduction/'+j,
				
                // beforeSend: function(xhr) {
                    // xhr.setRequestHeader('X-CSRF-Token', $('[name="_csrfToken"]').val());
                // },
                success: function(data, textStatus) {
                    $('.productionadding').append(data);
                }
            });
    }else if (item == '') {
        alert("Enter Item");
		$("#production-"+row_no+"-item").focus();
    }
} 


function machineryadding() {
	//var type
    var k = ($('.machinerypresent_row_in_post').length);
    var row_no1 = k - 1;
    var description = $("#machinery-"+row_no1+"-description").val();
	//alert(code);
    if (description != '') {
		$.ajax({
			async: true,
			dataType: "html",
			url: '<?php echo $this->Url->webroot ?>../ajaxaddmachinery/'+k,
			beforeSend: function(xhr) {
				xhr.setRequestHeader('X-CSRF-Token', $('[name="_csrfToken"]').val());
			},
			success: function(data, textStatus) {
				$('.machineryadding').append(data);
			}
		});
    }else if (description == '') {
        alert("Enter Description");
		$("#machinery-"+row_no1+"-description").focus();
    }
}  


function rawadding() {
	//var type
    var l = ($('.rawpresent_row_in_post').length);
    var row_no2 = l - 1;
    var item = $("#raw-"+row_no2+"-item").val();
	//alert(code);
    if (item != '') {
		$.ajax({
			async: true,
			dataType: "html",
			url: '<?php echo $this->Url->webroot ?>../ajaxaddrawmaterials/'+l,
			beforeSend: function(xhr) {
				xhr.setRequestHeader('X-CSRF-Token', $('[name="_csrfToken"]').val());
			},
			success: function(data, textStatus) {
				$('.rawadding').append(data);
			}
		});
    }else if (item == '') {
        alert("Enter item");
		$("#raw-"+row_no2+"-item").focus();
    }
} 


	function calculaterequirement(){	
	 var requirement = 0;
	   $(".requirement").each(function() {       
		   
		   if(parseFloat(this.value) != 'NAN'){
			 requirement += parseFloat(this.value);
		   }			 
		});	

		 if (!isNaN(requirement)) {		
		   $('#total-requirement').val(requirement);		
		}else{			
		   $('#total-requirement').val('');
		}		
	}

    function calculateexpenses(){	
	 var expenses = 0;
	   $(".expenses").each(function() {       
		   
		   if(parseFloat(this.value) != 'NAN'){
			 expenses += parseFloat(this.value);
		   }			 
		});	

		 if (!isNaN(expenses)) {		
		   $('#total-expenses').val(expenses.toFixed(2));		
		}else{			
		   $('#total-expenses').val('');
		}		
	}	
	
	function calculatenumber(){	
	 var number = 0;
	   $(".number").each(function() {       
		   
		   if(parseFloat(this.value) != 'NAN'){
			 number += parseFloat(this.value);
		   }			 
		});	

		 if (!isNaN(number)) {		
		   $('#total-no').val(number);		
		}else{			
		   $('#total-no').val('');
		}		
	}	
	
	function calculatewages(){	
	 var wages = 0;
	   $(".wages").each(function() {       
		   
		   if(parseFloat(this.value) != 'NAN'){
			 wages += parseFloat(this.value);
		   }			 
		});	

		 if (!isNaN(wages)) {		
		   $('#total-salaries').val(wages.toFixed(2));		
		}else{			
		   $('#total-salaries').val('');
		}		
	}	
  
</script>