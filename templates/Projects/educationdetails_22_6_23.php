<style>
    .error {
        color: red;
    }
	.card {
     margin-bottom: 0px !important;
}
</style>
    <!--ul class="nav nav-tabs"-->
<div class="card mt-3">
<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
        <!--li class="nav-item">
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Entity <br>Details</a>
        </li>
        <li class="nav-item">
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Educational<br>Qualification</a>
        </li>
        <li class="nav-item">
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Work<br>Experience</a>
        </li>
        <li class="nav-item">
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Machinery <br> raw materials</a>
        </li>
        <li class="nav-item">
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Utilities</a>
        </li>
        <li class="nav-item">
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Man<br>Power</a>
        </li>
		<li class="nav-item">
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Project<br> Cost</a>
        </li>
        <li class="nav-item">
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Means of<br>Finance</a>
        </li>
		 <li class="nav-item">
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Project<br>Profitability</a>
        </li> <li class="nav-item">
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Means of<br>Finance</a>
        </li> <li class="nav-item">
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Supplementary<br>Details</a>
        </li> <li class="nav-item">
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">References</a>
        </li> <li class="nav-item">
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Payment <br> Details</a>
        </li>
		 <li class="nav-item">
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Final <br> Declaration</a>
        </li-->
	<li class="nav-item">
	 <?php echo $this->Html->link(__('General<br>Details'), ['controller' => 'Projects', 'action' => 'basicdetails', $id], ['escape' => false, 'class' => 'nav-link']); ?>
	</li>
     <li class="nav-item">
         <?php echo $this->Html->link(__('Entity<br>Details'), ['controller' => 'Projects', 'action' => 'entitydetails', $id], ['escape' => false, 'class' => 'nav-link']); ?>
     </li>
     <li class="nav-item">
	      <a class="nav-link active">Educational<br>Qualification</a>
     </li>
     <li class="nav-item">
         <?php echo $this->Html->link(__('Work<br>Experience'), ['controller' => 'Projects', 'action' => 'projectfinancialsanctions', $id], ['escape' => false, 'class' => 'nav-link']); ?>
     </li>
     <li class="nav-item">
         <?php echo $this->Html->link(__('Machinery /<br> raw materials'), ['controller' => 'Projects', 'action' => 'projectfinancialsanctions', $id], ['escape' => false, 'class' => 'nav-link']); ?>
     </li>
     <li class="nav-item">
         <?php echo $this->Html->link(__('Utilities'), ['controller' => 'Projects', 'action' => 'tenderdetails', $id], ['escape' => false, 'class' => 'nav-link']); ?>
     </li>
     <li class="nav-item">
     <?php echo $this->Html->link(__('Man<br>Power'), ['controller' => 'Projects', 'action' => 'contractors', $id], ['escape' => false, 'class' => 'nav-link']); ?>
     </li>
	 <li class="nav-item">
     <?php echo $this->Html->link(__('Project<br> Cost'), ['controller' => 'Projects', 'action' => 'planningclearance', $id], ['escape' => false, 'class' => 'nav-link']); ?>
     </li>
     <li class="nav-item">
     <?php echo $this->Html->link(__('Means of<br>Finance'), ['controller' => 'Projects', 'action' => 'planningclearance', $id], ['escape' => false, 'class' => 'nav-link']); ?>
     </li>
	 <li class="nav-item">
     <?php echo $this->Html->link(__('Project<br>Profitability'), ['controller' => 'Projects', 'action' => 'planningclearance', $id], ['escape' => false, 'class' => 'nav-link']); ?>
     </li>
	  <li class="nav-item">
     <?php echo $this->Html->link(__('Supplementary<br>Details'), ['controller' => 'Projects', 'action' => 'planningclearance', $id], ['escape' => false, 'class' => 'nav-link']); ?>
     </li>
	  <li class="nav-item">
     <?php echo $this->Html->link(__('References'), ['controller' => 'Projects', 'action' => 'planningclearance', $id], ['escape' => false, 'class' => 'nav-link']); ?>
     </li>
	 <li class="nav-item">
     <?php echo $this->Html->link(__('Payment <br> Details'), ['controller' => 'Projects', 'action' => 'planningclearance', $id], ['escape' => false, 'class' => 'nav-link']); ?>
     </li>
	 <li class="nav-item">
     <?php echo $this->Html->link(__('Final <br> Declaration'), ['controller' => 'Projects', 'action' => 'planningclearance', $id], ['escape' => false, 'class' => 'nav-link']); ?>
     </li>
 </ul>
 </div>
<div class="card mt-1">
    <div class="card-header" style="background-color: #243e04;">
        <h4 class="mb-0 text-white">Educational Qualification / Special Training</h4>
    </div>
    <div class="card-body">
        <h4 class="card-title mb-3 pb-3 "></h4>
        <?php echo $this->Form->create(null, ['id' => 'FormID', 'class' => 'form-horizontal', "autocomplete" => "off", 'enctype' => 'multipart/form-data']); ?>
		<h3>1.1 Educational Qualification</h3>
        <div class="row">         
			<div class="col-sm-12 col-md-12">
                 <table class="table table-hover table-bordered table-advanced display" style="width: 100%">
                    <thead class="table-dark">
                        <tr class="text-center">
                            <th style="width:2%;"> S.No </th>
                            <th style="width:15%;"> Education</th>
                            <th style="width:30%;">Institute</th>
                            <th style="width:15%;">Major Subject</th>
                            <th style="width:15%;">Year of Passing</th>
                            <th style="width:5%;">Action</th>
                        </tr>

                    </thead>
                      <tbody class="eduadding">
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
									<button type="button" class="btn btn-success btn-xs" onclick="educationadding();"><i class="fa fa-plus-circle"></i>&nbsp;Add</button>
								</td>
                            </tr>
                        <?php //endforeach; ?>
                    </tbody>
                </table>
            </div>		
        </div> <br><br>
		<h3>1.2 Special Training</h3>
         <div class="row">         
			<div class="col-sm-12 col-md-12">
                 <table class="table table-hover table-bordered table-advanced display" style="width: 100%">
                    <thead class="table-dark">
                        <tr class="text-center">
                            <th style="width:2%;"> S.No </th>
                            <th style="width:15%;">Training In</th>
                            <th style="width:30%;">Institute</th>
                            <th style="width:15%;">Duration</th>
                            <th style="width:15%;">Achievement</th>
						    <th style="width:8%;">Action</th>

                        </tr>

                    </thead>
                      <tbody class="trainingadding">
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
									<button type="button" class="btn btn-success btn-xs" onclick="trainingadding();"><i class="fa fa-plus-circle"></i>&nbsp;Add</button>
								</td>
                            </tr>
                    </tbody>
                </table>
            </div>		
        </div> 		
    </div>
    <div class="action-form">
        <div class="mb-3 mt-3 text-center">
            <button type="submit" class="btn btn-info rounded-pill px-4 waves-effect waves-light">Save & Continue</button>
            <span>
                <?php echo $this->Html->link(('<i class="fas fa-arrow-left"></i>&nbsp; Back'), ['action' => 'index'], ['escape' => false, 'class' => 'btn btn-warning btn-rounded',]); ?>
            </span>
        </div>
    </div>
</div>
<?php echo $this->Form->End(); ?>
</div>
</div>

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
                url: '<?php echo $this->Url->webroot ?>ajaxaddeducation/'+j,
                beforeSend: function(xhr) {
                    xhr.setRequestHeader('X-CSRF-Token', $('[name="_csrfToken"]').val());
                },
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
			url: '<?php echo $this->Url->webroot ?>ajaxaddtraining/'+k,
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
  
</script>