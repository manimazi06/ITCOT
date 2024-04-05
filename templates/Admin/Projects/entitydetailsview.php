<style>
    .error {
        color: red;
    }
    .card {
        margin-bottom: 0px !important;
    }
</style>
<?php
$fmt = new NumberFormatter('en-IN', NumberFormatter::CURRENCY);
$fmt->setAttribute(NumberFormatter::FRACTION_DIGITS, 2);
$fmt->setSymbol(NumberFormatter::CURRENCY_SYMBOL, ''); 
?>
<div class="card mt-3">
    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
        <li class="nav-item">
            <?php echo $this->Html->link(__('General<br>Details'), ['controller' => 'Projects', 'action' => 'basicview', $id], ['escape' => false, 'class' => 'nav-link']); ?>
        </li> 
        <li class="nav-item ">
            <?php echo $this->Html->link(__('Entity<br>Details'), ['controller' => 'Projects', 'action' => 'entitydetailsview', $id], ['escape' => false, 'class' => 'nav-link active']); ?>
        </li>
        <li class="nav-item">
            <?php echo $this->Html->link(__('Educational<br>& work'), ['controller' => 'Projects', 'action' => 'educationdetailsview', $id], ['escape' => false, 'class' => 'nav-link']); ?>
        </li>        
        <li class="nav-item">
            <?php echo $this->Html->link(__('Manufacturing<br>Raw Materials'), ['controller' => 'Projects', 'action' => 'manufacturingdetailsview', $id], ['escape' => false, 'class' => 'nav-link']); ?>
        </li>
       
        <li class="nav-item">
            <?php echo $this->Html->link(__('Utilities <br>& Manpower'), ['controller' => 'Projects', 'action' => 'manpowerdetailsview', $id], ['escape' => false, 'class' => 'nav-link']); ?>
        </li>      
        <li class="nav-item">
            <?php echo $this->Html->link(__('Project<br>Profitability'), ['controller' => 'Projects', 'action' => 'profitabilitydetailsview', $id], ['escape' => false, 'class' => 'nav-link']); ?>
        </li>
        <li class="nav-item">
            <?php echo $this->Html->link(__('Supplementary<br>Details'), ['controller' => 'Projects', 'action' => 'suppliementarydetailsview', $id], ['escape' => false, 'class' => 'nav-link']); ?>
        </li>
        <li class="nav-item">
            <?php echo $this->Html->link(__('References'), ['controller' => 'Projects', 'action' => 'referencedetailsview', $id], ['escape' => false, 'class' => 'nav-link']); ?>
        </li>
        <li class="nav-item">
            <?php echo $this->Html->link(__('Payment <br> Details'), ['controller' => 'Projects', 'action' => 'paymentdetailsview', $id], ['escape' => false, 'class' => 'nav-link']); ?>
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
                    <div class="form-control">
                        <?php echo $basic->unit_name; ?>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-3">
                <div class="mb-4">
                    <label for="inputlname" class="control-label col-form-label">Sector Type<span class="text-danger">*</span></label>
                    <div class="form-control">
                        <?php echo $basic->sectortype->name; ?>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-3">
                <div class="mb-4">
                    <label for="inputlname" class="control-label col-form-label">Address<span class="text-danger">*</span></label>
                    <div class="form-control">
                        <?php echo $basic->address; ?>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-3">
                <div class="mb-4">
                    <label for="inputlname" class="control-label col-form-label">Locality<span class="text-danger">*</span></label>
                    <div class="form-control">
                        <?php echo $basic->localitytype->name; ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-3">
                <div class="mb-4">
                    <label for="inputlname" class="control-label col-form-label">Pincode<span class="text-danger">*</span></label>
                    <div class="form-control">
                        <?php echo $basic->pincode; ?>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-3">
                <div class="mb-4">
                    <label for="inputlname" class="control-label col-form-label">State<span class="text-danger">*</span></label>
                    <div class="form-control">
                        <?php echo $basic->state->state_name; ?>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-3">
                <div class="mb-4">
                    <label for="inputlname" class="control-label col-form-label">Registration Type<span class="text-danger">*</span></label>
                    <div class="form-control">
                        <?php echo $basic->registrationtype->name; ?>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-3">
                <div class="mb-4">
                    <label for="inputlname" class="control-label col-form-label">Project Cost<span class="text-danger">*</span></label>
                    <div class="form-control">
                        <?php echo $basic['project_cost'] ? ltrim($fmt->formatCurrency((float)$basic['project_cost'],'INR'),'₹'):'0.00';  ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-3">
                <div class="mb-4">
                    <label for="inputlname" class="control-label col-form-label">Loan Amount<span class="text-danger">*</span></label>
                    <div class="form-control">
                        <?php echo $basic['loan_amount'] ? ltrim($fmt->formatCurrency((float)$basic['loan_amount'],'INR'),'₹'):'0.00';  ?>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-3">
                <div class="mb-4">
                    <label for="inputlname" class="control-label col-form-label">Type of Loan<span class="text-danger">*</span></label>
                    <div class="form-control">
                        <?php echo $basic->loan_type->name; ?>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-3">
                <div class="mb-4">
                    <label for="inputlname" class="control-label col-form-label">Loan Purpose<span class="text-danger">*</span></label>
                    <div class="form-control">
                        <?php echo $basic->loan_purpose->name; ?>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="action-form">
        <div class="mb-3 mt-3 text-center">
            <?php echo $this->Html->link(('<i class="fas fa-arrow-left"></i>&nbsp; Previous'), ['action' => 'basicview', $id], ['escape' => false, 'class' => 'btn btn-info rounded-pill px-4 waves-effect waves-light',]); ?>
            <span>
                <?php echo $this->Html->link(('Next&nbsp;<i class="fas fa-arrow-right"></i>'), ['controller' => 'Projects', 'action' => 'educationdetailsview', $id], ['escape' => false, 'class' => 'btn btn-warning btn-rounded',]); ?>
            </span>
        </div>
    </div>
</div>
<?php echo $this->Form->End(); ?>
