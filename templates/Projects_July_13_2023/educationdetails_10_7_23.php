<style>     
.step-footer {
    text-align: center !important;
}
</style>        
<?php echo $this->Form->create(null, ['id' => 'FormID', 'class' => '', "autocomplete" => "off", 'enctype' => 'multipart/form-data']); ?>
<div class="container-fluid">
         <div class="step-app row justify-content-center" id="demo">
            <ul class="step-steps col-lg-12 col-md-12 col-sm-12" >
             <?php if($project['step_count'] >= '0'){ ?>
               <li >             
				  	<?php echo $this->Html->link(__(' <div class="icon"><ion-icon name="checkmark-outline"></ion-icon> </div><div class="info">General Details</div>'), ['controller' => 'Projects', 'action' => 'basicdetails', $id], ['escape' => false, 'class' => 'list-nav']); ?>
               </li>			 
			  <?php }else{ ?>
			  <li >
                  <div class="list-nav">
                     <div class="icon">
                        <div class="ion-icon">
                           <ion-icon name="checkmark-outline"></ion-icon>
                        </div>
                     </div>
                     <div class="info">
                        <p>General Details</p>
                     </div>
                  </div>
               </li>
			 <?php } ?>
			  <?php if($project['step_count'] >= '1'){ ?>
               <li >             
                	<?php echo $this->Html->link(__('<div class="icon"><ion-icon name="checkmark-outline"></ion-icon> </div><div class="info">Unit / Entity Details</div>'), ['controller' => 'Projects', 'action' => 'entitydetails', $id], ['escape' => false, 'class' => 'list-nav']); ?>
               </li>			 
			  <?php }else{ ?>			 
			 
               <li >
                  <div class="list-nav">
                     <div class="icon">
                        <div class="ion-icon">2</div>
                     </div>
                     <div class="info">
                        <p>Unit / Entity Details</p>
                     </div>
                  </div>
               </li>
			    <?php } ?>
				 <?php if($project['step_count'] >= '2'){ ?>
               <li data-step-target="step3">             
                 	<?php echo $this->Html->link(__('<div class="icon"><div class="ion-icon">3</div> </div><div class="info">Education & Work</div>'), ['controller' => 'Projects', 'action' => 'educationdetails', $id], ['escape' => false, 'class' => 'list-nav']); ?>
               </li>			 
			  <?php }else{ ?>	
               <li data-step-target="step3">
                  <div class="list-nav">
                     <div class="icon">
                        <div class="ion-icon">3</div>
                     </div>
                     <div class="info">
                        <p>Education & Work</p>
                     </div>
                  </div>
               </li>
			    <?php } ?>
				 <?php if($project['step_count'] >= '3'){ ?>
               <li>             
                 	<?php echo $this->Html->link(__(' <div class="icon"><ion-icon name="checkmark-outline"></ion-icon> </div><div class="info">Manufacturing </div>'), ['controller' => 'Projects', 'action' => 'manufacturingdetails', $id], ['escape' => false, 'class' => 'list-nav']); ?>
               </li>			 
			  <?php }else{ ?>	
				
               <li >
                  <div class="list-nav">
                     <div class="icon">
                        <div class="ion-icon">4</div>
                     </div>
                     <div class="info">
                        <p>Manufacturing </p>
                     </div>
                  </div>
               </li>
			    <?php } ?>
			   	<?php if($project['step_count'] >= '4'){ ?>
               <li>             
                 	<?php echo $this->Html->link(__(' <div class="icon"><ion-icon name="checkmark-outline"></ion-icon> </div><div class="info">Utilities & Manpower</div>'), ['controller' => 'Projects', 'action' => 'manpowerdetails', $id], ['escape' => false, 'class' => 'list-nav']); ?>
               </li>			 
			  <?php }else{ ?>	
               <li >
                  <div class="list-nav">
                     <div class="icon">
                        <div class="ion-icon">5</div>
                     </div>
                     <div class="info">
                        <p> Utilities&  Manpower Cost</p>
                     </div>
                  </div>
               </li>
			    <?php } ?>
		        <?php if($project['step_count'] >= '5'){ ?>
               <li>             
                 	<?php echo $this->Html->link(__(' <div class="icon"><ion-icon name="checkmark-outline"></ion-icon> </div><div class="info">Capital & Total Cost</div>'), ['controller' => 'Projects', 'action' => 'projectcostdetails', $id], ['escape' => false, 'class' => 'list-nav']); ?>
               </li>			 
			  <?php }else{ ?>
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
			   <?php } ?>
		        <?php if($project['step_count'] >= '6'){ ?>
               <li>             
                   <?php echo $this->Html->link(__(' <div class="icon"><ion-icon name="checkmark-outline"></ion-icon> </div><div class="info">Project Profitability</div>'), ['controller' => 'Projects', 'action' => 'profitabilitydetails', $id], ['escape' => false, 'class' => 'list-nav']); ?>
               </li>			 
			  <?php }else{ ?>
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
			     <?php } ?>
			     <?php if($project['step_count'] >= '7'){ ?>
               <li>             
                   <?php echo $this->Html->link(__(' <div class="icon"><ion-icon name="checkmark-outline"></ion-icon> </div><div class="info">Supplementary</div>'), ['controller' => 'Projects', 'action' => 'suppliementarydetails', $id], ['escape' => false, 'class' => 'list-nav']); ?>
               </li>			 
			  <?php }else{ ?>
               <li >
                  <div class="list-nav">
                     <div class="icon">
                        <div class="ion-icon">8</div>
                     </div>
                     <div class="info">
                        <p>Supplementary</p>
                     </div>
                  </div>
               </li>
			   <?php } ?>
			     <?php if($project['step_count'] >= '8'){ ?>
               <li>             
                   <?php echo $this->Html->link(__(' <div class="icon"><ion-icon name="checkmark-outline"></ion-icon> </div><div class="info">References</div>'), ['controller' => 'Projects', 'action' => 'referencedetails', $id], ['escape' => false, 'class' => 'list-nav']); ?>
               </li>			 
			  <?php }else{ ?>
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
			    <?php } ?>
			     <?php if($project['step_count'] >= '9'){ ?>
               <li>             
                   <?php echo $this->Html->link(__(' <div class="icon"><ion-icon name="checkmark-outline"></ion-icon> </div><div class="info">Payment Details</div>'), ['controller' => 'Projects', 'action' => 'paymentdetails', $id], ['escape' => false, 'class' => 'list-nav']); ?>
               </li>			 
			  <?php }else{ ?>
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
			    <?php } ?>
            </ul>
			<div class="step-content col-lg-8 col-md-8 col-sm-12">
               <div class="step-tab-panel" data-step="step3">
                  <h3 class="tab2-head">Educational Qualification / Special Training / Work Experience</h3>
                  <hr style="width: 100%; margin-top: 5px" />
                     <div class="container">
					 <h5>1.1 Educational Qualification</h5>
                        <div class="row">         
						<div class="col-sm-12 col-md-12">
						<div class="table-responsive">
                              <table class="table table-bordered">
								<thead class="table-dark">
									<tr class="text-center">
										<th style="width:2%;"> S.No </th>
										<th style="width:15%;"> Education</th>
										<th style="width:30%;">Institute</th>
										<th style="width:15%;">Major Subject</th>
										<th style="width:15%;">Year of Passing</th>
										<th style="width:10%;">	<button type="button" class="btn btn-success btn-sm" onclick="educationadding();"><i class="fa fa-plus-circle"></i>&nbsp;Add</button>
										</th>
									</tr>
								</thead>
								  <tbody class="eduadding">
								    <?php if($education_count == 0){ ?>
									  <tr class="edupresent_row_in_post">
														  
											<td align="center">1.</td>
											<td>
											  <?php echo $this->Form->control('education.0.education_id', ['class' => 'form-select', 'templates' => ['inputContainer' => '{{content}}'], 'options' => $educations, 'label' => false, 'error' => false, 'empty' => 'Select','data-rule-required'=>true,'data-msg-required'=>'Select Education']); ?>
											</td>
											<td><?php echo $this->Form->control('education.0.institute', ['class' => 'form-control', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'institute','data-rule-required'=>true,'data-msg-required'=>'Enter Institute']); ?>
											</td>
											<td><?php echo $this->Form->control('education.0.major_subject', ['class' => 'form-control', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Major Subject','data-rule-required'=>true,'data-msg-required'=>'Enter Major Subject']); ?>
											</td>
											<td><?php echo $this->Form->control('education.0.year_passing', ['class' => 'form-control num', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Year Passing','data-rule-required'=>true,'data-msg-required'=>'Enter Year Passing','maxlength'=>4]); ?>
											</td>
											<td>
											</td>
										</tr>
									<?php }else{ 
									   foreach($education_details as $key => $value){									
									  ?>									
									   <tr class="edupresent_row_in_post">														  
											<td align="center"><?php echo ($key+1); ?>.</td>
											<td>
											  <?php echo $this->Form->control('education.'.$key.'.education_id', ['class' => 'form-select', 'templates' => ['inputContainer' => '{{content}}'], 'options' => $educations, 'label' => false, 'error' => false, 'empty' => 'Select','data-rule-required'=>true,'data-msg-required'=>'Select Education','value'=>$value['education_id']]); ?>
											  <?php echo $this->Form->control('education.'.$key.'.edu_qualification_id', ['label' => false, 'error' => false, 'empty' => 'Select','type'=>'hidden','value'=>$value['id']]); ?>
											</td>
											<td><?php echo $this->Form->control('education.'.$key.'.institute', ['class' => 'form-control', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'institute','data-rule-required'=>true,'data-msg-required'=>'Enter Institute','value'=>$value['institute']]); ?>
											</td>
											<td><?php echo $this->Form->control('education.'.$key.'.major_subject', ['class' => 'form-control', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Major Subject','data-rule-required'=>true,'data-msg-required'=>'Enter Major Subject','value'=>$value['major_subject']]); ?>
											</td>
											<td><?php echo $this->Form->control('education.'.$key.'.year_passing', ['class' => 'form-control num', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Year Passing','data-rule-required'=>true,'data-msg-required'=>'Enter Year Passing','maxlength'=>4,'value'=>$value['year_passing']]); ?>
											</td>
											<td>
											</td>
										</tr>									
									<?php } } ?>
									<?php //endforeach; ?>
								</tbody>
							</table> </div>
						</div>		
					</div> <br>
						<h5>1.2 Special Training</h5>
						 <div class="row">         
							<div class="col-sm-12 col-md-12"><div class="table-responsive">
                                   <table class="table table-bordered responsive">
									<thead class="table-dark">
										<tr class="text-center">
											<th style="width:2%;"> S.No </th>
											<th style="width:15%;">Training In</th>
											<th style="width:30%;">Institute</th>
											<th style="width:15%;">Duration</th>
											<th style="width:15%;">Achievement</th>
											<th style="width:10%;">	<button type="button" class="btn btn-success btn-sm" onclick="trainingadding();"><i class="fa fa-plus-circle"></i>&nbsp;Add</button>
											</th>
										</tr>
									</thead>
									  <tbody class="trainingadding">
									    <?php if($training_count == 0){ ?>
										  <tr class="trainingpresent_row_in_post">
												 <td align="center">1.</td>												
												<td><?php echo $this->Form->control('special.0.training_in', ['class' => 'form-control', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => ' Training In','data-rule-required'=>true,'data-msg-required'=>'Enter Training In']); ?>
												</td>
												 <td><?php echo $this->Form->control('special.0.institute', ['class' => 'form-control', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'institute','data-rule-required'=>true,'data-msg-required'=>'Enter Institute']); ?>
												</td>
												 <td><?php echo $this->Form->control('special.0.duration', ['class' => 'form-control', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Duration','data-rule-required'=>true,'data-msg-required'=>'Enter Duration']); ?>
												</td>
												 <td><?php echo $this->Form->control('special.0.achievement', ['class' => 'form-control', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Achievement','data-rule-required'=>true,'data-msg-required'=>'Enter Achievement','type'=>'textarea','rows'=>2]); ?>
												</td>
												<td>
												</td>
											</tr>
											<?php }else{ 
		                                     foreach($training_details as $key1 => $value1){
											  ?>		
											 <tr class="trainingpresent_row_in_post">
												 <td align="center"><?php echo ($key1+1); ?>.</td>												
												<td><?php echo $this->Form->control('special.'.$key1.'.training_in', ['class' => 'form-control', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => ' Training In','data-rule-required'=>true,'data-msg-required'=>'Enter Training In','value'=>$value1['training_in']]); ?>
												   	<?php echo $this->Form->control('special.'.$key1.'.special_training_id', ['label' => false, 'error' => false, 'empty' => 'Select','type'=>'hidden','value'=>$value1['id']]); ?>
												</td>
												 <td><?php echo $this->Form->control('special.'.$key1.'.institute', ['class' => 'form-control', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'institute','data-rule-required'=>true,'data-msg-required'=>'Enter Institute','value'=>$value1['institute']]); ?>
												</td>
												 <td><?php echo $this->Form->control('special.'.$key1.'.duration', ['class' => 'form-control', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Duration','data-rule-required'=>true,'data-msg-required'=>'Enter Duration','value'=>$value1['duration']]); ?>
												</td>
												 <td><?php echo $this->Form->control('special.'.$key1.'.achievement', ['class' => 'form-control', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Achievement','data-rule-required'=>true,'data-msg-required'=>'Enter Achievement','type'=>'textarea','rows'=>2,'value'=>$value1['achievement']]); ?>
												</td>
												<td>
												</td>
											</tr>
										  <?php } } ?>
									</tbody>
								</table> </div>
							</div>		
						</div><br>
						<h5>1.3 Work Experience (Past and Present)</h5>
						 <div class="row">         
							<div class="col-sm-12 col-md-12"><div class="table-responsive">
                                   <table class="table table-bordered responsive">
									<thead class="table-dark">
										<tr class="text-center">
											<th style="width:2%;"> S.No </th>
											<th style="width:30%;">organisation</th>
											<th style="width:15%;">Position</th>
											<th style="width:15%;">Nature of Work</th>
											<th style="width:15%;">Duration</th>
											<th style="width:10%;"><button type="button" class="btn btn-success btn-sm" onclick="workadding();"><i class="fa fa-plus-circle"></i>&nbsp;Add</button>
											</th>
										</tr>
									</thead>
									  <tbody class="workadding">
									   <?php if($work_count == 0){ ?>
									        <tr class="workpresent_row_in_post">
												<td align="center">1.</td>												
												<td><?php echo $this->Form->control('work.0.organisation', ['class' => 'form-control', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => ' Organisation','data-rule-required'=>true,'data-msg-required'=>'Enter Organisation']); ?>
												</td>
												 <td><?php echo $this->Form->control('work.0.position', ['class' => 'form-control', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Position','data-rule-required'=>true,'data-msg-required'=>'Enter Position']); ?>
												</td>
												 <td><?php echo $this->Form->control('work.0.nature_work', ['class' => 'form-control', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Nature of Work','data-rule-required'=>true,'data-msg-required'=>'Enter Nature of Work']); ?>
												</td>
												 <td><?php echo $this->Form->control('work.0.duration', ['class' => 'form-control', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Duration','data-rule-required'=>true,'data-msg-required'=>'Enter Duration']); ?>
												</td>
												<td>
												</td>
											</tr>
											<?php }else{ 
		                                     foreach($work_details as $key2 => $value2){
											  ?>											
											 <tr class="workpresent_row_in_post">
												<td align="center"><?php echo ($key2+1); ?>.</td>												
												<td><?php echo $this->Form->control('work.'.$key2.'.organisation', ['class' => 'form-control', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => ' Organisation','data-rule-required'=>true,'data-msg-required'=>'Enter Organisation','value'=>$value2['organisation']]); ?>
													<?php echo $this->Form->control('work.'.$key2.'.work_experience_id', ['label' => false, 'error' => false, 'empty' => 'Select','type'=>'hidden','value'=>$value2['id']]); ?>
												</td>
												 <td><?php echo $this->Form->control('work.'.$key2.'.position', ['class' => 'form-control', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Position','data-rule-required'=>true,'data-msg-required'=>'Enter Position','value'=>$value2['position']]); ?>
												</td>
												 <td><?php echo $this->Form->control('work.'.$key2.'.nature_work', ['class' => 'form-control', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Nature of Work','data-rule-required'=>true,'data-msg-required'=>'Enter Nature of Work','value'=>$value2['nature_work']]); ?>
												</td>
												 <td><?php echo $this->Form->control('work.'.$key2.'.duration', ['class' => 'form-control', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Duration','data-rule-required'=>true,'data-msg-required'=>'Enter Duration','value'=>$value2['duration']]); ?>
												</td>
												<td>
												</td>
											</tr>
										   <?php } } ?>											
									</tbody>
								</table> </div>
							</div>		
						</div>
                     </div>
               </div>
            </div>
			<?php if($project['payment_status'] == ''){ ?>
			<div class="step-footer">
               <button type="submit" class="btn btn-info rounded-pill px-4 waves-effect waves-light">Save & Continue</button>
            </div>
			 <?php  } ?>
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
	
function educationadding() {
	//var type
    var j = ($('.edupresent_row_in_post').length);
    var row_no = j - 1;
    var education = $("#education-"+row_no+"-education-id").val();
	//alert(code);
    if (education != '') {
            $.ajax({
                async: true,
                dataType: "html",
                url: '<?php echo $this->Url->webroot; ?>../ajaxaddeducation/'+j,
				
                // beforeSend: function(xhr) {
                    // xhr.setRequestHeader('X-CSRF-Token', $('[name="_csrfToken"]').val());
                // },
                success: function(data, textStatus) {
                    $('.eduadding').append(data);
                }
            });
    }else if (education == '') {
        alert("Select Education");
		$("#education-"+row_no+"-education-id").focus();
    }
} 


function trainingadding() {
	//var type
    var k = ($('.trainingpresent_row_in_post').length);
    var row_no1 = k - 1;
    var training_in = $("#special-"+row_no1+"-training-in").val();
	//alert(code);
    if (training_in != '') {
		$.ajax({
			async: true,
			dataType: "html",
			url: '<?php echo $this->Url->webroot ?>../ajaxaddtraining/'+k,
			beforeSend: function(xhr) {
				xhr.setRequestHeader('X-CSRF-Token', $('[name="_csrfToken"]').val());
			},
			success: function(data, textStatus) {
				$('.trainingadding').append(data);
			}
		});
    }else if (training_in == '') {
        alert("Enter Training In");
		$("#special-"+row_no1+"-training-in").focus();
    }
}  


function workadding() {
	//var type
    var l = ($('.workpresent_row_in_post').length);
    var row_no2 = l - 1;
    var organisation = $("#work-"+row_no2+"-organisation").val();
	//alert(code);
    if (organisation != '') {
		$.ajax({
			async: true,
			dataType: "html",
			url: '<?php echo $this->Url->webroot ?>../ajaxaddworkexperience/'+l,
			beforeSend: function(xhr) {
				xhr.setRequestHeader('X-CSRF-Token', $('[name="_csrfToken"]').val());
			},
			success: function(data, textStatus) {
				$('.workadding').append(data);
			}
		});
    }else if (organisation == '') {
        alert("Enter Organisation");
		$("#work-"+row_no2+"-organisation").focus();
    }
}  
  
</script>