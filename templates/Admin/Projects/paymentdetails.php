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
                   <?php echo $this->Html->link(__(' <div class="icon"><ion-icon name="checkmark-outline"></ion-icon> </div><div class="info">Supplementary Details</div>'), ['controller' => 'Projects', 'action' => 'suppliementarydetails', $id], ['escape' => false, 'class' => 'list-nav']); ?>
               </li>  
               <li>
                   <?php echo $this->Html->link(__(' <div class="icon"><ion-icon name="checkmark-outline"></ion-icon> </div><div class="info">References</div>'), ['controller' => 'Projects', 'action' => 'referencedetails', $id], ['escape' => false, 'class' => 'list-nav']); ?>
               </li>  
              
               <li>
                  <div class="list-nav" data-step-target="step10">
                     <div class="icon">
                        <div class="ion-icon">10</div>
                     </div>
                     <div class="info">
                        <p>Payment Details</p>
                     </div>
                  </div>
               </li>
            </ul>

			<div class="step-content col-lg-6 col-md-8 col-sm-12">
               <div class="step-tab-panel" data-step="step9">
                  <h3 class="tab2-head">Payment Details</h3>
                  <hr style="width: 150px; margin-top: 5px" />
                     <div class="container">
                        <div class="row">         
						<div class="col-sm-8 col-md-12">
                              <table class="table table-bordered responsive">
								<thead class="table-dark">
									<tr class="text-center">
										<th colspan = "3">Payment Details</th>																		
									</tr>
								</thead>
								  <tbody class="referenceadding">
							         <?php   $i = 1;
									   foreach($payment_Details as $key => $payment){									
									  ?>									
									   <tr>														  
											<td align="center"><?php echo $i; ?>.</td>
											<td>
											  <?php echo $payment['name']; ?>
											</td>
											<td><?php echo $payment['fees']; ?>
											</td>											
										</tr>									
									<?php $i++; } ?>
								</tbody>
							</table>
						</div>		
					</div> <br>	
					 <div class="row">         
						<div class="col-sm-8 col-md-12">
					    <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">By submitting this form, you have read and agree to the Terms and Conditions
                      </div>
                     </div>
                  </div>
               </div>
            </div>
			<div class="step-footer">
               <!--button data-step-action="prev" class="step-btn btn">Previous</button-->
               <button type="submit" class="btn btn-info rounded-pill px-4 waves-effect waves-light">Go To Payment</button>
               <!--button data-step-action="finish" class="step-btn btn">Finish</button-->
            </div>
          </div>
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
	
function referenceadding() {
	//var type
    var j = ($('.refpresent_row_in_post').length);
    var row_no = j - 1;
    var name = $("#reference-"+row_no+"-name").val();
	//alert(code);
    if (name != '') {
            $.ajax({
                async: true,
                dataType: "html",
                url: '<?php echo $this->Url->webroot; ?>../ajaxaddreference/'+j,
				
                // beforeSend: function(xhr) {
                    // xhr.setRequestHeader('X-CSRF-Token', $('[name="_csrfToken"]').val());
                // },
                success: function(data, textStatus) {
                    $('.referenceadding').append(data);
                }
            });
    }else if (name == '') {
        alert("Enter Name");
		$("#reference-"+row_no+"-name").focus();
    }
}  
</script>