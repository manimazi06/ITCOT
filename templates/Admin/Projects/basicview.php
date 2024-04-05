<style>
    .error {
        color: red;
    }
    .card {
        margin-bottom: 0px !important;
    }
</style>
<div class="card mt-3">
    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
        <li class="nav-item">
            <?php echo $this->Html->link(__('General<br>Details'), ['controller' => 'Projects', 'action' => 'basicview', $basic->id], ['escape' => false, 'class' => 'nav-link active']); ?>
        </li>
        <li class="nav-item">
            <?php echo $this->Html->link(__('Entity<br>Details'), ['controller' => 'Projects', 'action' => 'entitydetailsview', $basic->id], ['escape' => false, 'class' => 'nav-link']); ?>
        </li>
        <li class="nav-item">
            <?php echo $this->Html->link(__('Educational<br>& work'), ['controller' => 'Projects', 'action' => 'educationdetailsview', $basic->id], ['escape' => false, 'class' => 'nav-link']); ?>
        </li>        
        <li class="nav-item">
            <?php echo $this->Html->link(__('Manufacturing<br>Raw Materials'), ['controller' => 'Projects', 'action' => 'manufacturingdetailsview', $basic->id], ['escape' => false, 'class' => 'nav-link']); ?>
        </li>       
        <li class="nav-item">
            <?php echo $this->Html->link(__('Utilities <br>& Manpower'), ['controller' => 'Projects', 'action' => 'manpowerdetailsview', $basic->id], ['escape' => false, 'class' => 'nav-link']); ?>
        </li>       
        <li class="nav-item">
            <?php echo $this->Html->link(__('Project<br>Profitability'), ['controller' => 'Projects', 'action' => 'profitabilitydetailsview', $basic->id], ['escape' => false, 'class' => 'nav-link']); ?>
        </li>
        <li class="nav-item">
            <?php echo $this->Html->link(__('Supplementary<br>Details'), ['controller' => 'Projects', 'action' => 'suppliementarydetailsview', $basic->id], ['escape' => false, 'class' => 'nav-link']); ?>
        </li>
        <li class="nav-item">
            <?php echo $this->Html->link(__('References'), ['controller' => 'Projects', 'action' => 'referencedetailsview', $basic->id], ['escape' => false, 'class' => 'nav-link']); ?>
        </li>
        <li class="nav-item">
            <?php echo $this->Html->link(__('Payment <br> Details'), ['controller' => 'Projects', 'action' => 'paymentdetailsview', $basic->id], ['escape' => false, 'class' => 'nav-link']); ?>
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
                    <div class="form-control">
                        <?php echo $basic->prefix; ?>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-3">
                <div class="mb-4">
                    <label for="inputlname" class="control-label col-form-label">Name<span class="text-danger">*</span></label>
                    <div class="form-control">
                        <?php echo $basic->name; ?>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-3">
                <div class="mb-4">
                    <label for="inputlname" class="control-label col-form-label">Date of Birth<span class="text-danger">*</span></label>
                    <div class="form-control">
                        <?php echo date('d-F-Y', strtotime($basic->dob)); ?>
                    </div>
                </div>
            </div>           
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-3">
                <div class="mb-4">
                    <label for="inputlname" class="control-label col-form-label">Category<span class="text-danger">*</span></label>
                    <div class="form-control">
                        <?php echo $basic->category->name; ?>education
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-3">
                <div class="mb-4">
                    <label for="inputlname" class="control-label col-form-label">Educational Details<span class="text-danger">*</span></label>
                    <div class="form-control">
                        <?php echo $basic->education->name; ?>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-3">
                <div class="mb-4">
                    <label for="inputlname" class="control-label col-form-label">Mobile No.<span class="text-danger">*</span></label>
                    <div class="form-control">
                        <?php echo $basic->mobile_no; ?>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-3">
                <div class="mb-4">
                    <label for="inputlname" class="control-label col-form-label">Email<span class="text-danger">*</span></label>
                    <div class="form-control">
                        <?php echo $basic->email; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="action-form">
        <div class="mb-3 mt-3 text-center">
            <?php echo $this->Html->link(('<i class="fas fa-arrow-left"></i>&nbsp; Back'), ['action' => 'index'], ['escape' => false, 'class' => 'btn btn-info rounded-pill px-4 waves-effect waves-light',]); ?>

            
            <span>
                <?php echo $this->Html->link(('Next&nbsp;<i class="fas fa-arrow-right"></i>'), ['action' => 'entitydetailsview',$basic->id], ['escape' => false, 'class' => 'btn btn-warning btn-rounded',]); ?>
            </span>
        </div>
    </div>
</div>
<?php echo $this->Form->End(); ?>
