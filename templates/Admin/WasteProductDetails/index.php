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
                    <!-- <?php echo $this->Html->link(('<i class="fa fa-plus"></i>&nbsp; Add ProductDetails'), ['action' => 'add'], ['escape' => false, 'class' => 'btn btn-rounded btn-outline-info m-t-10 mb-2', 'target' => '_blank']); ?> -->
                    <?php echo $this->Html->link(('<i class="fa fa-plus"></i>&nbsp; Add ProductDetails'), ['action' => 'add'], ['escape' => false, 'class' => 'btn btn-rounded btn-outline-info m-t-10 mb-2']); ?>
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
                            <th> Product Code</th>
                            <th> Product name</th>

                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sno = 1;
                        foreach ($wasteProductDetails as $wasteProductDetail) : 
                        ?>
                            <tr>
                                <td align="center"><?= $sno++; ?></td>
			                 	<td align="center"><?= $wasteProductDetail['waste_type']['name'] ?></td>
                                <td align="center"><?= $wasteProductDetail['waste_category']['name'] ?></td>
                                <td align="center"><?= $wasteProductDetail['product_code'] ?></td>
                                <td align="center"><?= $wasteProductDetail['product_name'] ?></td>
				
                                <td align="center">
                                    <?php echo $this->Html->link(('<i class="fas fa-edit"></i>'), ['action' => 'edit', $wasteProductDetail['id']], ['escape' => false, 'class' => 'btn waves-effect waves-light btn-light-primary text-primary btn-sm']); ?>
                                    <?php echo $this->Html->link(('<i class="fas fa-trash"></i>'), ['action' => 'delete', $wasteProductDetail->id], ['escape' => false,'onclick'=>"return confirm('Are You Sure want to delete-$wasteProductDetail->product_name')", 'class' => 'btn waves-effect waves-light btn-light-primary text-primary btn-sm']); ?>

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