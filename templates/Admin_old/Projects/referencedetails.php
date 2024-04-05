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
                  <div class="list-nav" data-step-target="step9">
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
               <div class="step-tab-panel" data-step="step9">
                  <h3 class="tab2-head">References</h3>
                  <hr style="width: 150px; margin-top: 5px" />
                     <div class="container">
					 <h5>6.0 References</h5>
                        <div class="row">         
						<div class="col-sm-12 col-md-12">
                              <table class="table table-bordered responsive">
								<thead class="table-dark">
									<tr class="text-center">
										<th style="width:2%;"> S.No </th>
										<th style="width:20%;"> Name</th>
										<th style="width:30%;">Address</th>
										<th style="width:20%;">Occupation</th>
										<th style="width:10%;">	<button type="button" class="btn btn-success btn-xs" onclick="referenceadding();"><i class="fa fa-plus-circle"></i>&nbsp;Add</button>
										</th>
									</tr>
								</thead>
								  <tbody class="referenceadding">
								    <?php if($reference_count == 0){ ?>
									  <tr class="refpresent_row_in_post">														  
											<td align="center">1.</td>
											<td>
												<?php echo $this->Form->control('reference.0.name', ['class' => 'form-control', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => ' Name','data-rule-required'=>true,'data-msg-required'=>'Enter Name']); ?>
											</td>
											<td><?php echo $this->Form->control('reference.0.address', ['class' => 'form-control', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Address','data-rule-required'=>true,'data-msg-required'=>'Enter Address','type'=>'textarea','rows'=>2]); ?>
											</td>
											<td><?php echo $this->Form->control('reference.0.occupation', ['class' => 'form-control', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Occupation','data-rule-required'=>true,'data-msg-required'=>'Enter Occupation']); ?>
											</td>											
											<td>
											</td>
										</tr>
									<?php }else{ 
									   foreach($reference_details as $key => $value){									
									  ?>									
									   <tr class="refpresent_row_in_post">														  
											<td align="center"><?php echo ($key+1); ?>.</td>
											<td>
											  <?php echo $this->Form->control('reference.'.$key.'.name', ['class' => 'form-control', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => ' Name','data-rule-required'=>true,'data-msg-required'=>'Enter Name','value'=>$value['name']]); ?>
											  <?php echo $this->Form->control('reference.'.$key.'.reference_id', ['label' => false, 'error' => false, 'empty' => 'Select','type'=>'hidden','value'=>$value['id']]); ?>
											</td>
											<td><?php echo $this->Form->control('reference.'.$key.'.address', ['class' => 'form-control', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Address','data-rule-required'=>true,'data-msg-required'=>'Enter Address','type'=>'textarea','rows'=>2,'value'=>$value['address']]); ?>
											</td>
											<td><?php echo $this->Form->control('reference.'.$key.'.occupation', ['class' => 'form-control', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Occupation','data-rule-required'=>true,'data-msg-required'=>'Enter Occupation','value'=>$value['occupation']]); ?>
											</td>											
											<td>
											</td>
										</tr>									
									<?php } } ?>
									<?php //endforeach; ?>
								</tbody>
							</table>
						</div>		
					</div> <br><br>				
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