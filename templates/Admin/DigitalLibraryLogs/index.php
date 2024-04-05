<?php date_default_timezone_set("Asia/Calcutta"); ?>
<div class="row page-titles">
    <div class="col-md-7 col-12 align-self-center d-none d-md-block">
        <div class="d-flex mt-2 justify-content-end">
        </div>
    </div>
</div>
<div class="col-12">
    <div class="card">
        <div class="card-header"style="background-color: #243e04;">
            <h4 class="mb-0 text-white">DigitalLibraryLogs</h4>
        </div>
        <div class="card-body">
            <!-- <div class="row mb-2">         
                <div class="col text-end">
                    <?php echo $this->Html->link(('<i class="fa fa-plus"></i>&nbsp; Add DigitalLibraryLogs'), ['action' => 'add'], ['escape' => false, 'class' => 'btn btn-rounded btn-outline-info m-t-10 mb-2', 'target' => '_blank']); ?>
                </div>              
            </div> -->
            <div class="table-responsive">
                <table class="table table-hover table-bordered table-advanced display" style="width: 100%" id="example4">
                    <thead class="table-dark">
                        <tr class="text-center">
                            <th> S.No </th>
                            <th> User</th>
                            <th>Scheme type</th>
                            <th>Department</th>
                            <th>Department scheme</th>
                            <!-- <th>URL</th> -->
                            <td>Login time</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sno = 1;
                        foreach ($digitalLibraryLogs as $digitalLibraryLog) : //echo"<pre>";print_r($employees);exit(); 
                        ?>
                            <tr>
                                <td align="center"><?= $sno++; ?></td>
                                <td><?= $digitalLibraryLog['user']['name'] ?></td>
                                <td><?= $digitalLibraryLog['scheme_type']['name'] ?></td>
                                <td><?= $digitalLibraryLog['department']['name'] ?></td>
                                <td><?= $digitalLibraryLog['department_scheme']['name'] ?></td>
                                <!-- <td><a href="<?php echo $digitalLibraryLog['url'] ?>" target="_blank">Link</a></td> -->
                                <td><?= date('d-m-Y (H:i:s)',strtotime($digitalLibraryLog['login_time'])); ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>