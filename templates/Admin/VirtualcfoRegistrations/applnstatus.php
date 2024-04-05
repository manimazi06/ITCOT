<style>
    .error {
        color: red;
    }

    .card {
        margin-bottom: 0px !important;
    }
</style>
<div class="card mt-1">
    <div class="card-header" style="background-color: #243e04;">
        <h4 class="mb-0 text-white">Application Status</h4>
    </div>
    <div class="card-body">
        <h4 class="card-title mb-3 pb-3 "></h4>
        <?php echo $this->Form->create($project1, ['id' => 'FormID', 'class' => 'form-horizontal', "autocomplete" => "off", 'enctype' => 'multipart/form-data']); ?>
        <div class="row">
            <div class="col-sm-12 col-md-3">
                <div class="mb-4">
                    <label for="inputlname" class="control-label col-form-label">Status<span class="text-danger">*</span></label>
                    <div class="form-control">
                    <?php echo $this->Form->control('appln_status', ['class' => 'form-select', 'templates' => ['inputContainer' => '{{content}}'], 'options' => $proj, 'label' => false, 'error' => false, 'empty' => 'Select Status']); ?>
                </div>
            </div>
      
        </div>
 
    </div>
    <div class="action-form">
        <div class="mb-3 mt-3 text-center">
            <!-- <button type="submit" class="btn btn-info rounded-pill px-4 waves-effect waves-light"> -->

            <button type="submit" class="btn btn-info rounded-pill px-4 waves-effect waves-light">Update</button>
        </div>
    </div>
</div>
<?php echo $this->Form->End(); ?>
</div>
</div>

