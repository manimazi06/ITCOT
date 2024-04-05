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
         <a class="nav-link active">Entity<br>Details</a>
     </li>
     <li class="nav-item">
         <?php echo $this->Html->link(__('Educational<br>Qualification'), ['controller' => 'Projects', 'action' => 'educationdetails', $id], ['escape' => false, 'class' => 'nav-link']); ?>
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
        <h4 class="mb-0 text-white">Unit / Entity Details</h4>
    </div>
    <div class="card-body">
        <h4 class="card-title mb-3 pb-3 "></h4>
        <?php echo $this->Form->create(null, ['id' => 'FormID', 'class' => 'form-horizontal', "autocomplete" => "off", 'enctype' => 'multipart/form-data']); ?>
        <div class="row">         
			<div class="col-sm-12 col-md-3">
                <div class="mb-4">
                    <label for="inputlname" class="control-label col-form-label">Entity Name<span class="text-danger">*</span></label>
                    <?php echo $this->Form->control('unit_name', ['label' => false, 'class' => 'form-control', 'type' => 'text', 'required']); ?>
                </div>
            </div> 
			<div class="col-sm-12 col-md-3">
                <div class="mb-4">
                    <label for="inputlname" class="control-label col-form-label">Sector Type<span class="text-danger">*</span></label>
                      <?php echo $this->Form->control('sectortype_id', ['class' => 'form-select', 'templates' => ['inputContainer' => '{{content}}'], 'options' => $sectortypes, 'label' => false, 'error' => false, 'empty' => 'Select']); ?>
                </div>
            </div> 
			<div class="col-sm-12 col-md-3">
                <div class="mb-4">
                    <label for="inputlname" class="control-label col-form-label">Address<span class="text-danger">*</span></label>
                    <?php echo $this->Form->control('address', ['label' => false, 'class' => 'form-control', 'type' => 'textarea','rows'=>2, 'required']); ?>
                </div>
            </div>
			<div class="col-sm-12 col-md-3">
                <div class="mb-4">
                    <label for="inputlname" class="control-label col-form-label">Locality<span class="text-danger">*</span></label>
                        <?php echo $this->Form->control('localitytype_id', ['class' => 'form-select', 'templates' => ['inputContainer' => '{{content}}'], 'options' => $localitytype, 'label' => false, 'error' => false, 'empty' => 'Select']); ?>
                </div>
            </div>
        </div>
       <div class="row">         
			<div class="col-sm-12 col-md-3">
                <div class="mb-4">
                    <label for="inputlname" class="control-label col-form-label">Pincode<span class="text-danger">*</span></label>
                    <?php echo $this->Form->control('pincode', ['label' => false, 'class' => 'form-control num', 'type' => 'text','maxlength'=>6, 'required']); ?>
                </div>
            </div> 
			<div class="col-sm-12 col-md-3">
                <div class="mb-4">
                    <label for="inputlname" class="control-label col-form-label">State<span class="text-danger">*</span></label>
                        <?php echo $this->Form->control('state_id', ['class' => 'form-select', 'templates' => ['inputContainer' => '{{content}}'], 'options' => $categories, 'label' => false, 'error' => false, 'empty' => 'Select']); ?>
                </div>
            </div> 
			<div class="col-sm-12 col-md-3">
                <div class="mb-4">
                    <label for="inputlname" class="control-label col-form-label">Registration Type<span class="text-danger">*</span></label>
                        <?php echo $this->Form->control('registrationtype_id', ['class' => 'form-select', 'templates' => ['inputContainer' => '{{content}}'], 'options' => $registrationtype, 'label' => false, 'error' => false, 'empty' => 'Select']); ?>
                </div>
            </div>
			<div class="col-sm-12 col-md-3">
                <div class="mb-4">
                    <label for="inputlname" class="control-label col-form-label">Project Cost<span class="text-danger">*</span></label>
                    <?php echo $this->Form->control('project_cost', ['label' => false, 'class' => 'form-control amount', 'type' => 'text', 'required']); ?>
                </div>
            </div>
        </div>
		      <div class="row">         
			<div class="col-sm-12 col-md-3">
                <div class="mb-4">
                    <label for="inputlname" class="control-label col-form-label">Loan Amount<span class="text-danger">*</span></label>
                    <?php echo $this->Form->control('loan_amount', ['label' => false, 'class' => 'form-control amount', 'type' => 'text', 'required']); ?>
                </div>
            </div> 
			<div class="col-sm-12 col-md-3">
                <div class="mb-4">
                    <label for="inputlname" class="control-label col-form-label">Type of Loan<span class="text-danger">*</span></label>
                        <?php echo $this->Form->control('loan_type_id', ['class' => 'form-select', 'templates' => ['inputContainer' => '{{content}}'], 'options' => $loantypes, 'label' => false, 'error' => false, 'empty' => 'Select']); ?>
                </div>
            </div> 
			<div class="col-sm-12 col-md-3">
                <div class="mb-4">
                    <label for="inputlname" class="control-label col-form-label">Loan Purpose<span class="text-danger">*</span></label>
                        <?php echo $this->Form->control('loan_purpose_id', ['class' => 'form-select', 'templates' => ['inputContainer' => '{{content}}'], 'options' => $loanpurposes, 'label' => false, 'error' => false, 'empty' => 'Select']); ?>
                </div>
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

  
</script>