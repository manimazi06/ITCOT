<style>
.error{
	color:red;
}
</style>
<div class="row page-titles">
    <div class="col-md-7 col-12 align-self-center d-none d-md-block">
        <div class="d-flex mt-1 justify-content-end">
        </div>
    </div>
</div>
<div class="col-12">
<?php echo $this->Form->create($users, ['id' => 'FormID', 'class' => 'form-horizontal', "autocomplete" => "off", 'enctype' => 'multipart/form-data']); ?>

    <div class="card">
        <div class="card-header"style="background-color: #243e04;">
            <h4 class="mb-0 text-white">Department Schemes</h4>
        </div>
        <div class="card-body">
		   <div class="row mb-2">               
                <div class="col text-end">
                    <!-- <?php echo $this->Html->link(('<i class="fa fa-plus"></i>&nbsp; Add Department Scheme'), ['action' => 'add'], ['escape' => false, 'class' => 'btn btn-rounded btn-outline-info m-t-10 mb-2', 'target' => '_blank']); ?> -->
                    <?php echo $this->Html->link(('<i class="fa fa-plus"></i>&nbsp; Add Department Scheme'), ['action' => 'add'], ['escape' => false, 'class' => 'btn btn-rounded btn-outline-info m-t-10 mb-2']); ?>
                </div>             
            </div>
			  <div class="row">         
			     <div class="col-sm-12 col-md-3 offset-md-1">
					<label for="inputContent" class="control-label">Department</label>  
					<div class="mb-1">
						<div class="input text">
							<?php echo $this->Form->control('department_id', ['class' => 'form-control select','empty'=>'Select Department','options'=>$departments, 'label' => false, 'error' => false,'required']); ?>
						</div>
					</div>                   
				</div>
				   <div class="col-sm-12 col-md-3">	
					<label for="inputContent" class="control-label">&nbsp;</label> 				   
                     <div class="mb-1">
					  <button type="submit" class="btn btn-rounded btn-info m-t-10 mb-2">Get Details</button>
                     </div>
				</div>
			</div>  
        </div>
    </div>
	<?php echo $this->Form->End(); ?>
</div>
<div class="col-12">
    <div class="card">       
        <div class="card-body">            
            <div class="table-responsive">
                <table class="table table-hover table-bordered table-advanced display" style="width: 100%" id="example4">
                    <thead class="table-dark">
                        <tr class="text-center">
                            <th> S.No </th>
				            <th>Department Name</th>
                            <th> Department Scheme</th>
                            <th> Site</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sno = 1;
                        foreach ($depart_schemes as $depat) : 
                        ?>
                            <tr>
                                <td align="center"><?= $sno++; ?></td>
			                 	<td align="center"><?= $depat['department']['name'] ?></td>
                                <td align="center"><?= $depat['name'] ?></td>
                                <td align="center"><?php if($depat['site_url'] != ''){ ?><a href="<?php echo $depat['site_url']; ?>" style="color: #00AAFF;" target="_blank">Site </a><?php } ?></td>
				
                                <td align="center">
                                    <?php echo $this->Html->link(('<i class="fas fa-edit"></i>'), ['action' => 'edit', $depat['id']], ['escape' => false, 'class' => 'btn waves-effect waves-light btn-light-primary text-primary btn-sm']); ?>

                                </td>

                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<script>
    $("#FormID").validate({
        rules: {          
		  'department_id': {
                required: true
            }
        },

        messages: {          
		  'department_id': {
                required: "Select Department"
            }
        },
        submitHandler: function(form) {
            form.submit();
            $(".btn").prop('disabled', true);
        }
    });

  
</script>