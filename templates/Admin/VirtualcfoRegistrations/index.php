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
<h3>Virtual CFO</h3>    
            </div> 
        <div class="col text-end">
                    <?php echo $this->Html->link(('<i class="fa fa-plus"></i>&nbsp; Add Virtual CFO'), ['action' => 'virtualcfo'], ['escape' => false, 'class' => 'btn btn-rounded btn-outline-info m-t-10 mb-2', 'target' => '_blank']); ?>
                </div>           
            <div class="table-responsive">
                <table class="table table-hover table-bordered table-advanced display" style="width: 100%" id="example4">
                    <thead class="table-dark">
                        <tr class="text-center">
                            <th> S.No </th>
				            <th>Name</th>
                            <th> Email</th>
                            <th> Mobile</th>
                            <th> Application No</th>
                            <th> Status</th>
                            <!-- <th>Action</th> -->
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sno = 1;
                        foreach ($virtualcfoRegistrations as $VirtualcfoRegistration) : 
                        ?>
                            <tr>
                                <td align="center"><?= $sno++; ?></td>
			                 	<td align="center"><?= $VirtualcfoRegistration['name'] ?></td>
                                <td align="center"><?= $VirtualcfoRegistration['email'] ?></td>
                                <td align="center"><?= $VirtualcfoRegistration['mobile_no'] ?></td>
                                <!-- <td align="center"><?= $VirtualcfoRegistration['virtualcfo_state']['name'] ?></td> -->
                                <td align="center"><?= $VirtualcfoRegistration['application_no'] ?></td>
                                <td align="center">
                                    <?php  if($virtualcfoRegistration['appln_status']==1){
                                        echo '<span style="color:green;">Approved</span>';
                                    }elseif($virtualcfoRegistration['appln_status']==2){
                                        echo '<span style="color:red;">Rejected</span>';
                                    }
                                    else{
                                     echo '<span style="color:blue;">Pending</span>';
                                    } ?>

                            </td>
                                <!-- <td align="center">
                                    <?php echo $this->Html->link(('<i class="fas fa-edit"></i>'), ['action' => 'edit', $VirtualcfoRegistration['id']], ['escape' => false, 'class' => 'btn waves-effect waves-light btn-light-primary text-primary btn-sm']); ?>

                                </td> -->

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