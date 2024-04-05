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
                  <div class="list-nav" data-step-target="step4">
                     <div class="icon">
                        <div class="ion-icon">4</div>
                     </div>
                     <div class="info">
                        <p>Manufacturing</p>
                     </div>
                  </div>
               </li>
               <li >
                  <div class="list-nav">
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
               <div class="step-tab-panel" data-step="step4">
                  <h3 class="tab2-head">2.0 Details of Proposed Project: Manufacturing / Servicing</h3>
                  <hr style="width: 150px; margin-top: 5px" />
                     <div class="container">
					 <h5>2.1 Production Programme</h5>
                        <div class="row">         
						<div class="col-sm-12 col-md-12">
                              <table class="table table-bordered responsive">
								<thead class="table-dark">
									<tr class="text-center">
										<th style="width:2%;"> S.No </th>
										<th style="width:20%;"> Item</th>
										<th style="width:20%;">Total Quantity / Year</th>
										<th style="width:20%;">Sales Revenue / Year</th>
										<th style="width:20%;">Capacity Utilisation</th>
										<th style="width:10%;">	<button type="button" class="btn btn-success btn-xs" onclick="productionadding();"><i class="fa fa-plus-circle"></i>&nbsp;Add</button>
										</th>
									</tr>
								</thead>
								  <tbody class="productionadding">
								    <?php if($production_count == 0){ ?>
									  <tr class="productionpresent_row_in_post">
														  
											<td align="center">1.</td>
											<td>
											    <?php echo $this->Form->control('production.0.item', ['class' => 'form-control', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Item','data-rule-required'=>true,'data-msg-required'=>'Enter Item']); ?>
											</td>
											<td><?php echo $this->Form->control('production.0.quantity', ['class' => 'form-control', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Quantity / Year','data-rule-required'=>true,'data-msg-required'=>'Enter Total Quantity / Year']); ?>
											</td>
											<td><?php echo $this->Form->control('production.0.revenue_year', ['class' => 'form-control', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Sales Revenue / Year','data-rule-required'=>true,'data-msg-required'=>'Enter Sales Revenue / Year']); ?>
											</td>
											<td><?php echo $this->Form->control('production.0.capacity_utilisation', ['class' => 'form-control num', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Capacity utilisation','data-rule-required'=>true,'data-msg-required'=>'Enter Capacity Utilisation']); ?>
											</td>
											<td>
											</td>
										</tr>
									<?php }else{ 
									   foreach($production_details as $key => $value){									
									  ?>									
									   <tr class="productionpresent_row_in_post">														  
											<td align="center"><?php echo ($key+1); ?>.</td>
											<td>
											    <?php echo $this->Form->control('production.'.$key.'.item', ['class' => 'form-control', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Item','data-rule-required'=>true,'data-msg-required'=>'Enter Item','value'=>$value['item']]); ?>
											    <?php echo $this->Form->control('production.'.$key.'.production_id', ['label' => false, 'error' => false, 'empty' => 'Select','type'=>'hidden','value'=>$value['id']]); ?>
											</td>									
											<td><?php echo $this->Form->control('production.'.$key.'.quantity', ['class' => 'form-control', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Quantity / Year','data-rule-required'=>true,'data-msg-required'=>'Enter Total Quantity / Year','value'=>$value['quantity']]); ?>  
											</td>
											<td><?php echo $this->Form->control('production.'.$key.'.revenue_year', ['class' => 'form-control', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Sales Revenue / Year','data-rule-required'=>true,'data-msg-required'=>'Enter Sales Revenue / Year','value'=>$value['revenue_year']]); ?>
											</td>
											<td><?php echo $this->Form->control('production.'.$key.'.capacity_utilisation', ['class' => 'form-control num', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Capacity utilisation','data-rule-required'=>true,'data-msg-required'=>'Enter Capacity Utilisation','value'=>$value['capacity_utilisation']]); ?>
											</td>
											<td>
											</td>
										</tr>									
									<?php } } ?>
								</tbody>
							</table>
						</div>		
					</div> <br>
						<h5>2.2 Machinery / Equipment</h5>
						 <div class="row">         
							<div class="col-sm-12 col-md-12">
                                   <table class="table table-bordered responsive">
									<thead class="table-dark">
										<tr class="text-center">
											<th style="width:2%;"> S.No </th>
											<th style="width:20%;">Description</th>
											<th style="width:10%;">Quantity (Nos.)</th>
											<th style="width:10%;">Price</th>
											<th style="width:10%;">Total Value</th>
											<th style="width:10%;">Supplier Name</th>
											<th style="width:20%;">Supplier Address</th>
											<th style="width:10%;">	<button type="button" class="btn btn-success btn-xs" onclick="machineryadding();"><i class="fa fa-plus-circle"></i>&nbsp;Add</button>
											</th>
										</tr>
									</thead>
									  <tbody class="machineryadding">
									    <?php if($machinery_count == 0){ ?>
										  <tr class="machinerypresent_row_in_post">
												 <td align="center">1.</td>												
												<td><?php echo $this->Form->control('machinery.0.description', ['class' => 'form-control', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Description','data-rule-required'=>true,'data-msg-required'=>'Enter description','type'=>'textarea','rows'=>2]); ?>
												</td>
												 <td><?php echo $this->Form->control('machinery.0.quantity', ['class' => 'form-control', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'quantity','data-rule-required'=>true,'data-msg-required'=>'Enter quantity']); ?>
												</td>
												 <td><?php echo $this->Form->control('machinery.0.price', ['class' => 'form-control amount', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Price','data-rule-required'=>true,'data-msg-required'=>'Enter Price']); ?>
												</td>
												 <td><?php echo $this->Form->control('machinery.0.total_value', ['class' => 'form-control amount', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'total value','data-rule-required'=>true,'data-msg-required'=>'Enter total value']); ?>
												</td> 
												 <td><?php echo $this->Form->control('machinery.0.suppliername', ['class' => 'form-control', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'supplier name','data-rule-required'=>true,'data-msg-required'=>'Enter supplier name']); ?>
												</td>
												 <td><?php echo $this->Form->control('machinery.0.supplieraddress', ['class' => 'form-control', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'supplier address','data-rule-required'=>true,'data-msg-required'=>'Enter supplier address','type'=>'textarea','rows'=>2]); ?>
												</td>
												<td>
												</td>
											</tr>
											<?php }else{ 
		                                     foreach($machinery_details as $key1 => $value1){
											  ?>		
											 <tr class="machinerypresent_row_in_post">
												 <td align="center"><?php echo ($key1+1); ?>.</td>											

												<td><?php echo $this->Form->control('machinery.'.$key1.'.description', ['class' => 'form-control', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Description','data-rule-required'=>true,'data-msg-required'=>'Enter description','type'=>'textarea','rows'=>2,'value'=>$value1['description']]); ?>  
													<?php echo $this->Form->control('machinery.'.$key1.'.machinery_id', ['label' => false, 'error' => false, 'empty' => 'Select','type'=>'hidden','value'=>$value1['id']]); ?>

												</td>
												 <td><?php echo $this->Form->control('machinery.'.$key1.'.quantity', ['class' => 'form-control', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'quantity','data-rule-required'=>true,'data-msg-required'=>'Enter quantity','value'=>$value1['quantity']]); ?>
												</td>
												 <td><?php echo $this->Form->control('machinery.'.$key1.'.price', ['class' => 'form-control amount', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Price','data-rule-required'=>true,'data-msg-required'=>'Enter Price','value'=>$value1['price']]); ?>
												</td>
												 <td><?php echo $this->Form->control('machinery.'.$key1.'.total_value', ['class' => 'form-control amount', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'total value','data-rule-required'=>true,'data-msg-required'=>'Enter total value','value'=>$value1['total_value']]); ?>
												</td> 
												 <td><?php echo $this->Form->control('machinery.'.$key1.'.suppliername', ['class' => 'form-control', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'supplier name','data-rule-required'=>true,'data-msg-required'=>'Enter supplier name','value'=>$value1['suppliername']]); ?>
												</td>
												 <td><?php echo $this->Form->control('machinery.'.$key1.'.supplieraddress', ['class' => 'form-control', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'supplier address','data-rule-required'=>true,'data-msg-required'=>'Enter supplier address','type'=>'textarea','rows'=>2,'value'=>$value1['supplieraddress']]); ?>
												</td>
												<td>
												</td>
											</tr>
										  <?php } } ?>
									</tbody>
								</table>
							</div>		
						</div><br>
						<h5>2.3 Raw Materials</h5>
						 <div class="row">         
							<div class="col-sm-12 col-md-12">
                                   <table class="table table-bordered responsive">
									<thead class="table-dark">
										<tr class="text-center">
											<th style="width:2%;"> S.No </th>
											<th style="width:10%;">Item</th>
											<th colspan="2" style="width:20%;">Total Annual Requirement</th>
											<th style="width:10%;">Sales Revenue / Year</th>
											<th style="width:15%;">Capacity Utilisation</th>
											<th style="width:10%;"><button type="button" class="btn btn-success btn-xs" onclick="rawadding();"><i class="fa fa-plus-circle"></i>&nbsp;Add</button>
											</th>
										</tr>
										<tr class="text-center">
										    <th></th>
										    <th></th>
										    <th style="width:10%;">Quantity </th>
											<th style="width:10%;">Value (Rs.)</th>
											<th></th>
											<th></th>
											<th></th>
										</tr>
									</thead>
									  <tbody class="rawadding">
									   <?php if($raw_count == 0){ ?>
									        <tr class="rawpresent_row_in_post">
												<td align="center">1.</td>												
												<td>
											      <?php echo $this->Form->control('raw.0.item', ['class' => 'form-control', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Item','data-rule-required'=>true,'data-msg-required'=>'Enter Item']); ?>
												</td>
												<td><?php echo $this->Form->control('raw.0.quantity', ['class' => 'form-control', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Quantity','data-rule-required'=>true,'data-msg-required'=>'Enter Quantity']); ?>
												</td>
												<td><?php echo $this->Form->control('raw.0.value', ['class' => 'form-control', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Value','data-rule-required'=>true,'data-msg-required'=>'Enter Value']); ?>
												</td>
												<td><?php echo $this->Form->control('raw.0.revenue_year', ['class' => 'form-control', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Revenue / Year','data-rule-required'=>true,'data-msg-required'=>'Enter Sales Revenue / Year']); ?>
												</td>
												<td><?php echo $this->Form->control('raw.0.capacity_utilisation', ['class' => 'form-control num', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Capacity utilisation','data-rule-required'=>true,'data-msg-required'=>'Enter Capacity Utilisation']); ?>
												</td>
												<td>
												</td>
											</tr>
											<?php }else{ 
		                                     foreach($raw_details as $key2 => $value2){
											  ?>											
											 <tr class="rawpresent_row_in_post">
												<td align="center"><?php echo ($key2+1); ?>.</td>										
												<td>
											      <?php echo $this->Form->control('raw.'.$key2.'.item', ['class' => 'form-control', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Item','data-rule-required'=>true,'data-msg-required'=>'Enter Item','value'=>$value2['item']]); ?>
												  <?php echo $this->Form->control('raw.'.$key2.'.raw_id', ['label' => false, 'error' => false, 'empty' => 'Select','type'=>'hidden','value'=>$value2['id']]); ?>
				
												</td>
												<td><?php echo $this->Form->control('raw.'.$key2.'.quantity', ['class' => 'form-control', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Quantity','data-rule-required'=>true,'data-msg-required'=>'Enter Quantity','value'=>$value2['quantity']]); ?>
												</td>
												<td><?php echo $this->Form->control('raw.'.$key2.'.value', ['class' => 'form-control', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Value','data-rule-required'=>true,'data-msg-required'=>'Enter Value','value'=>$value2['value']]); ?>
												</td>
												<td><?php echo $this->Form->control('raw.'.$key2.'.revenue_year', ['class' => 'form-control', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Revenue / Year','data-rule-required'=>true,'data-msg-required'=>'Enter Sales Revenue / Year','value'=>$value2['revenue_year']]); ?>
												</td>
												<td><?php echo $this->Form->control('raw.'.$key2.'.capacity_utilisation', ['class' => 'form-control num', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Capacity utilisation','data-rule-required'=>true,'data-msg-required'=>'Enter Capacity Utilisation','value'=>$value2['capacity_utilisation']]); ?>
												</td>
												<td>
												</td>
											</tr>
										   <?php } } ?>											
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
  
</script>