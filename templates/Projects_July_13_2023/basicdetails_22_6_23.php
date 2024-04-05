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
        <li class="nav-item">
            <a class="nav-link active">General<br>Details</a>
        </li>
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
         <?php echo $this->Html->link(__('Entity<br>Details'), ['controller' => 'Projects', 'action' => 'entitydetails', $id], ['escape' => false, 'class' => 'nav-link']); ?>
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
        <h4 class="mb-0 text-white">General Details</h4>
    </div>
    <div class="card-body">
        <h4 class="card-title mb-3 pb-3 "></h4>
        <?php echo $this->Form->create(null, ['id' => 'FormID', 'class' => 'form-horizontal', "autocomplete" => "off", 'enctype' => 'multipart/form-data']); ?>
        <div class="row">         
			<div class="col-sm-12 col-md-3">
                <div class="mb-4">
                    <label for="inputlname" class="control-label col-form-label">Prefix<span class="text-danger">*</span></label>
                    <?php echo $this->Form->control('prefix', ['label' => false, 'class' => 'form-select', 'options' => $prefix,'empty'=>'-Select-', 'required']); ?>
                </div>
            </div> 
			<div class="col-sm-12 col-md-3">
                <div class="mb-4">
                    <label for="inputlname" class="control-label col-form-label">Name<span class="text-danger">*</span></label>
                    <?php echo $this->Form->control('name', ['label' => false, 'class' => 'form-control', 'type' => 'text', 'required']); ?>
                </div>
            </div> 
			<div class="col-sm-12 col-md-3">
                <div class="mb-4">
                    <label for="inputlname" class="control-label col-form-label">Date of Birth<span class="text-danger">*</span></label>
                    <?php echo $this->Form->control('dob', ['label' => false, 'class' => 'form-control flatpickr', 'type' => 'text', 'required','readonly']); ?>
                </div>
            </div>
			<div class="col-sm-12 col-md-3">
                <div class="mb-4">
                    <label for="inputlname" class="control-label col-form-label">Age<span class="text-danger">*</span></label>
                    <?php echo $this->Form->control('age', ['label' => false, 'class' => 'form-control num', 'type' => 'text', 'readonly']); ?>
                </div>
            </div>
        </div>
       <div class="row">         
			<div class="col-sm-12 col-md-3">
                <div class="mb-4">
                    <label for="inputlname" class="control-label col-form-label">Category<span class="text-danger">*</span></label>
                        <?php echo $this->Form->control('category_id', ['class' => 'form-select', 'templates' => ['inputContainer' => '{{content}}'], 'options' => $categories, 'label' => false, 'error' => false, 'empty' => 'Select']); ?>
                </div>
            </div> 
			<div class="col-sm-12 col-md-3">
                <div class="mb-4">
                    <label for="inputlname" class="control-label col-form-label">Educational Details<span class="text-danger">*</span></label>
                        <?php echo $this->Form->control('education_id', ['class' => 'form-select', 'templates' => ['inputContainer' => '{{content}}'], 'options' => $educations, 'label' => false, 'error' => false, 'empty' => 'Select']); ?>
                </div>
            </div> 
			<div class="col-sm-12 col-md-3">
                <div class="mb-4">
                    <label for="inputlname" class="control-label col-form-label">Mobile No.<span class="text-danger">*</span></label>
                    <?php echo $this->Form->control('mobile_no', ['label' => false, 'class' => 'form-control num', 'type' => 'text', 'required']); ?>
                </div>
            </div>
			<div class="col-sm-12 col-md-3">
                <div class="mb-4">
                    <label for="inputlname" class="control-label col-form-label">Email<span class="text-danger">*</span></label>
                    <?php echo $this->Form->control('email', ['label' => false, 'class' => 'form-control', 'type' => 'text', 'required']); ?>
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
            'prefix': {
                required: true
            },
			'name': {
                required: true
            },
			'dob': {
                required: true
            },
			'age': {
                required: true
            },
			'category_id': {
                required: true
            },
			'education_id': {
                required: true
            },
			'mobile_no': {
                required: true
            },
			'email': {
                required: true
            }
        },

        messages: {
            
            'prefix': {
                required: "Select Prefix"
            },
			'name': {
                required: "Enter Name"
            },
			'dob': {
                required: "Select DOB"
            },
			'age': {
                required: "Enter Age"
            },
			'category_id': {
                required:  "Select Category"
            },
			'education_id': {
                required:  "Select Education"
            },
			'mobile_no': {
                required:  "Enter Mobile No"
            },
			'email': {
                required:  "Enter Email"
            }
        },
        submitHandler: function(form) {
            form.submit();
            $(".btn").prop('disabled', true);
        }
    });
	
	
	$("#dob").change(function(){
		//alert('hi'); 

    var today = new Date();	
    var birthDate = new Date($('#dob').val());
	alert(today); 
	alert(birthDate); 
    var age = today.getFullYear() - birthDate.getFullYear();
    var m = today.getMonth() - birthDate.getMonth();
    if (m < 0 || (m === 0 && today.getDate() < birthDate.getDate())) {
        age--;
    }
	alert(age);
    $('#age').val(age);
});

  
</script>