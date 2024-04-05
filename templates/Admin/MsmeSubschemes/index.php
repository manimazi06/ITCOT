<div class="row page-titles">
    <div class="col-md-7 col-12 align-self-center d-none d-md-block">
        <div class="d-flex mt-2 justify-content-end">
        </div>
    </div>
</div>
<div class="col-12">
    <div class="card">
        <div class="card-header"style="background-color: #243e04;">
            <h4 class="mb-0 text-white">Msme Subschemes</h4>
        </div>
        <div class="card-body">
            <div class="row mb-2">

                <?php //if (in_array($USER_ROLE_ID, array(2, 7))) { 
                ?>
                <div class="col text-end">
                    <!-- <?php echo $this->Html->link(('<i class="fa fa-plus"></i>&nbsp; Add Msme Subschemes'), ['action' => 'add'], ['escape' => false, 'class' => 'btn btn-rounded btn-outline-info m-t-10 mb-2', 'target' => '_blank']); ?> -->
                    <?php echo $this->Html->link(('<i class="fa fa-plus"></i>&nbsp; Add Msme Subschemes'), ['action' => 'add'], ['escape' => false, 'class' => 'btn btn-rounded btn-outline-info m-t-10 mb-2']); ?>
                </div>
                <?php //} 
                ?>
            </div>
            <div class="table-responsive">
                <table class="table table-hover table-bordered table-advanced display" style="width: 100%" id="example4">
                    <thead class="table-dark">
                        <tr class="text-center">
                            <th> S.No </th>
			                <th> MSME Divisions</th>
			                <th> MSME Schemes</th>
			                <th> MSME Subscheme</th>
                             <th> Site</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sno = 1;
                        foreach ($Msmesubschemes as $Msmesubscheme) : //echo"<pre>";print_r($employees);exit(); 
                        ?>
                            <tr>
                                <td align="center"><?= $sno++; ?></td>
				                <td><?= $Msmesubscheme->msme_division->name ?></td>
				                <td><?= $Msmesubscheme->msme_scheme->name ?></td>
                                <td><?= $Msmesubscheme->name ?></td>
								<td align="center"><?php if($Msmesubscheme['site_url'] != ''){ ?><a href="<?php echo $Msmesubscheme['site_url']; ?>" style="color: #00AAFF;" target="_blank">Site </a><?php } ?></td>
                                <td align="center">
                                    <?php echo $this->Html->link(('<i class="fas fa-edit"></i>'), ['action' => 'edit', $Msmesubscheme->id], ['escape' => false, 'class' => 'btn waves-effect waves-light btn-light-primary text-primary btn-sm']); ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>