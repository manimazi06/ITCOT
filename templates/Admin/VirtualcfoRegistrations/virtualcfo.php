<div class="row page-titles">
    <div class="col-md-7 col-12 align-self-center d-none d-md-block">
        <div class="d-flex mt-2 justify-content-end">
        </div>
    </div>
</div>
<div class="col-12">
    <?php echo $this->Form->create($users, ['id' => 'FormID', 'class' => 'form-horizontal', "autocomplete" => "off", 'enctype' => 'multipart/form-data']); ?>
    <div class="card">
        <div class="card-header" style="background-color: #243e04;">
            <h4 class="mb-0 text-white">Virtual CFO Registrations</h4>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-sm-12 col-md-3">
                    <label for="inputContent" class="control-label">Status</label>
                    <div class="mb-4">
                        <div class="input text">
                            <?php echo $this->Form->control('status_id', ['class' => 'form-control select', 'empty' => 'Select', 'options' => $proj, 'label' => false, 'error' => false, 'required']); ?>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-3">
                    <label for="inputContent" class="control-label">&nbsp;</label>

                    <div class="mb-4">
                        <button type="submit" class="btn btn-rounded btn-info m-t-8 mb-2 btn-sm">Get Details</button>
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
            <div class="row mb-2">
            </div>
            <div class="table-responsive">
                <table class="table table-hover table-bordered table-advanced display" style="width: 100%" id="example4">
                    <thead class="table-dark">
                        <tr class="text-center">
                            <th style="width:2%;"> S.No </th>
                            <th style="width:10%;"> Name</th>
                            <th style="width:10%;"> Mobile No</th>
                            <th style="width:10%;"> Email</th>
                            <th style="width:10%;"> Application No</th>
                            <th style="width:10%;"> Status</th>
                            <!-- <th style="width:10%;"> Services</th> -->
                            <th style="width:20%;">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sno = 1;
                        foreach ($virtualcfoRegistrations as $virtualcfoRegistration) :
                        ?>
                            <tr>
                                <td align="center"><?= $sno++; ?></td>
                                <td><?= $virtualcfoRegistration->name ?></td>
                                <td><?= $virtualcfoRegistration->mobile_no ?></td>
                                <td><?= $virtualcfoRegistration->email ?></td>
                                <td><?= $virtualcfoRegistration['application_no'] ?></td>
                                <td>
                                    <?php if ($virtualcfoRegistration['appln_status'] == 1) {
                                        echo '<span style="color:green;">Approved</span>';
                                    } elseif ($virtualcfoRegistration['appln_status'] == 2) {
                                        echo '<span style="color:red;">Rejected</span>';
                                    } else {
                                        echo '<span style="color:blue;">Pending</span>';
                                    } ?>
                                </td>
                                <!-- <td><?= $virtualcfoRegistration->service->name ?></td> -->
                                <td align="center">
                                    <?php echo $this->Html->link(('<i class="fas fa-eye"></i>'), ['action' => 'virtualview', $virtualcfoRegistration->id], ['escape' => false, 'class' => 'btn waves-effect waves-light btn-light-primary text-primary btn-sm']); ?>&nbsp;
                                    <?php echo $this->Html->link(('<i class="fas fa-view">Status</i>'), ['action' => 'applnstatus', $virtualcfoRegistration->id], ['escape' => false, 'class' => 'btn waves-effect waves-light btn-light-primary text-success btn-sm']); ?>
                                    <?php echo $this->Html->link(('<i class="fas fa-view">Preview</i>'), ['action' => 'virtualpreview', $virtualcfoRegistration->id], ['escape' => false, 'class' => 'btn waves-effect waves-light btn-light-primary text-success btn-sm']); ?>
                                </td>

                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- pdf -->
<div class="pdfreport" style="display:none;">
    <div class="table-responsive" id="div_vc">
        <table border="1">
            <thead class="table-dark">
                <tr class="text-center">
                    <th> S.No </th>
                    <th> Prefix</th>
                    <th> Name</th>
                    <th> Date of Birth</th>
                    <th> Category</th>
                    <th>Educational Details</th>
                    <th> Mobile No</th>
                    <th> Email</th>
                </tr>
            </thead>
            <tbody>
                <?php

                $sno = 1;
                foreach ($projects as $project) : //echo"<pre>";print_r($employees);exit(); 
                ?>
                    <tr>
                        <td align="center"><?= $sno++; ?></td>
                        <td><?= $project->name ?></td>
                        <td><?= $project->mobile_no ?></td>
                        <td><?= $project->email ?></td>
                        <td><?php
                            if ($project->payment_status == 1) {
                                echo '<span style = "color:green;">Payment paid</span>';
                            } else {
                                echo '<span style = "color:red;">Payment not paid</span>';
                            } ?></td>
                        <td align="center">
                            <?php echo $this->Html->link(('<i class="fas fa-eye"></i>'), ['action' => 'basicview', $project->id], ['escape' => false, 'class' => 'btn waves-effect waves-light btn-light-primary text-primary btn-sm']); ?>
                            <?php echo $this->Html->link(('<i class="fas fa-view">Status</i>'), ['action' => 'projectstatus', $project->id], ['escape' => false, 'class' => 'btn waves-effect waves-light btn-light-primary text-success btn-sm']); ?>
                            <a class="btn waves-effect waves-light btn-light-primary text-success btn-sm" onClick="print_receipt('div_vc')"><i class="fa fa-print"></i> Print</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
<script>
    $("#FormID").validate({
        rules: {
            'status_id': {
                required: true
            }
        },

        messages: {
            'status_id': {
                required: "Select Status"
            }
        },
        submitHandler: function(form) {
            form.submit();
            $(".btn").prop('disabled', true);
        }
    });

    function print_receipt() {
        $('.pdfreport').show();
        var content = $("#div_vc").html();
        var pwin = window.open("MSL", 'print_content',
            'width=900,height=1000,scrollbars=yes,location=0,menubar=no,toolbar=no');
        pwin.document.open();
        pwin.document.write('<html><head></head><body onload="window.print()"><tr><td>' + content +
            '</td></tr></body></html>');
        pwin.document.close();
        $('.pdfreport').hide();
    }
</script>