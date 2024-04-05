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
    <div class="card">       
        <div class="card-body">  
        <div class="col text-start">
<h3>Project Report</h3>    
            </div> 
        <div class="col text-end">
                    <?php echo $this->Html->link(('<i class="fa fa-plus"></i>&nbsp; Apply New'), ['action' => 'basicdetails'], ['escape' => false, 'class' => 'btn btn-rounded btn-outline-info m-t-10 mb-2', 'target' => '_blank']); ?>

                </div>           
            <div class="table-responsive">
                <table class="table table-hover table-bordered table-advanced display" style="width: 100%" id="example4">
                    <thead class="table-dark">
                        <tr class="text-center">
                            <th> S.No </th>
				            <th>Name</th>
                            <th> Email</th>
                            <th> Mobile</th>
                            <th> Payment Status</th>
                            <th> Project Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sno = 1;
                        foreach ($projects as $project) : 
                        ?>
                            <tr>
                                <td align="center"><?= $sno++; ?></td>
			                 	<td align="center"><?= $project['name'] ?></td>
                                <td align="center"><?= $project['email'] ?></td>
                                <td align="center"><?= $project['mobile_no'] ?></td>
                                <td align="center"><?php

                            if($project['payment_status']==1){
                            echo '<b><span style="color:green;">Success</span></b>'?>
                            <?php }else{
                                        echo '<b><span style="color:red;">Payment not paid</span></b>';
                            } ?>

                            </td>
                                <td align="center"><?php echo ($project['project_status'] == 0)?"<span style='color:blue;'><b>In Progress</b></span>":(($project['project_status'] == 1)?"<span style='color:green;'><b>Approved</b></span>":"<span style='color:red;'><b>Rejected</b></span>"); ?></td>

                                <td align="center">
                                    <?php echo $this->Html->link(('<i class="fas fa-edit"></i>'), ['action' => 'basicdetails',base64_encode($project->id)], ['escape' => false, 'class' => 'btn waves-effect waves-light btn-light-primary text-primary btn-sm']); ?>
                                    <!-- <?php echo $this->Html->link(('<i class="fas fa-trash"></i>'), ['action' => 'delete', $project->id], ['escape' => false,'onclick'=>"return confirm('Are You Sure want to delete-$project->name')", 'class' => 'btn waves-effect waves-light btn-light-primary text-primary btn-sm']); ?> -->
                                   <?php   if($project['payment_status']==1){ 
                                    echo $this->Html->link(('<i class="fas fa-download"></i>'), ['controller'=>'Pdfgenerator','action' => 'downloadpdf', $project['id']], ['escape' => false, 'class' => 'btn waves-effect waves-light btn-light-primary text-primary btn-sm']); 
                                   }
                                   else{
                                    echo $this->Html->link(('<i class="fas fa-download"></i>'), ['controller'=>'Pdfgenerator','action' => 'downloadpdf', $project['id']], ['escape' => false,'style'=>'display:none', 'class' => 'btn waves-effect waves-light btn-light-primary text-primary btn-sm']); 

                                   }?>
                                </td>

                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- <script>
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

  
</script> -->