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

                <div class="col text-end">
                    <!-- <?php echo $this->Html->link(('<i class="fa fa-plus"></i>&nbsp; Add Category'), ['action' => 'add'], ['escape' => false, 'class' => 'btn btn-rounded btn-outline-info m-t-10 mb-2', 'target' => '_blank']); ?> -->
                    <?php echo $this->Html->link(('<i class="fa fa-plus"></i>&nbsp; Add Category'), ['action' => 'add'], ['escape' => false, 'class' => 'btn btn-rounded btn-outline-info m-t-10 mb-2']); ?>
                </div>

<div class="col-12">
    <div class="card">       
        <div class="card-body">            
            <div class="table-responsive">
                <table class="table table-hover table-bordered table-advanced display" style="width: 100%" id="example4">
                    <thead class="table-dark">
                        <tr class="text-center">
                            <th> S.No </th>
				            <th>Type of waste</th>
                            <th> Category</th>
                      
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sno = 1;
                        foreach ($wasteCategories as $wasteCategory) : 
                        ?>
                            <tr>
                                <td align="center"><?= $sno++; ?></td>
			                 	<td align="center"><?= $wasteCategory['waste_type']['name'] ?></td>
                                <td align="center"><?= $wasteCategory['name'] ?></td>
				
                                <td align="center">
                                    <?php echo $this->Html->link(('<i class="fas fa-edit"></i>'), ['action' => 'edit', $wasteCategory['id']], ['escape' => false, 'class' => 'btn waves-effect waves-light btn-light-primary text-primary btn-sm']); ?>
                                    <?php echo $this->Html->link(('<i class="fas fa-trash"></i>'), ['action' => 'delete', $wasteCategory->id], ['escape' => false,'onclick'=>"return confirm('Are You Sure want to delete-$wasteCategory->name')", 'class' => 'btn waves-effect waves-light btn-light-primary text-primary btn-sm']); ?>

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