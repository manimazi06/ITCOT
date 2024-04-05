<style>
	.step-footer {
		text-align: center !important;
	}
 .card {
        margin-bottom: 0px !important;
    }
</style>
<?php echo $this->Form->create(null, ['id' => 'FormID', 'class' => '', "autocomplete" => "off", 'enctype' => 'multipart/form-data']); ?>
<div class="card mt-3">
    <ul class="nav nav-pills mb-1" id="pills-tab" role="tablist">
			<li class="nav-item">
				<?php echo $this->Html->link(__('General<br>Details'), ['controller' => 'Projects', 'action' => 'basicview', $id], ['escape' => false, 'class' => 'nav-link']); ?>
			</li>
			<li class="nav-item">
				<?php echo $this->Html->link(__('Entity<br>Details'), ['controller' => 'Projects', 'action' => 'entitydetailsview', $id], ['escape' => false, 'class' => 'nav-link']); ?>
			</li>
			<li class="nav-item">
				<?php echo $this->Html->link(__('Educational<br>& work'), ['controller' => 'Projects', 'action' => 'educationdetailsview', $id], ['escape' => false, 'class' => 'nav-link']); ?>
			</li>			
			<li class="nav-item">
				<?php echo $this->Html->link(__('Manufacturing<br>Raw materials'), ['controller' => 'Projects', 'action' => 'manufacturingdetailsview', $id], ['escape' => false, 'class' => 'nav-link']); ?>
			</li>			
			<li class="nav-item">
				<?php echo $this->Html->link(__('Utilities <br>& Manpower'), ['controller' => 'Projects', 'action' => 'manpowerdetailsview', $id], ['escape' => false, 'class' => 'nav-link']); ?>
			</li>			
			<li class="nav-item">
				<?php echo $this->Html->link(__('Project<br>Profitability'), ['controller' => 'Projects', 'action' => 'profitabilitydetailsview', $id], ['escape' => false, 'class' => 'nav-link']); ?>
			</li>
			<li class="nav-item">
				<?php echo $this->Html->link(__('Supplementary<br>Details'), ['controller' => 'Projects', 'action' => 'suppliementarydetailsview', $id], ['escape' => false, 'class' => 'nav-link']); ?>
			</li>
			<li class="nav-item">
				<?php echo $this->Html->link(__('References'), ['controller' => 'Projects', 'action' => 'referencedetailsview', $id], ['escape' => false, 'class' => 'nav-link active']); ?>
			</li>
			<li class="nav-item">
				<?php echo $this->Html->link(__('Payment <br> Details'), ['controller' => 'Projects', 'action' => 'paymentdetailsview', $id], ['escape' => false, 'class' => 'nav-link']); ?>
			</li>			
		</ul>
</div>
<div class="card mt-1">
		<div class="card-header" style="background-color: #243e04;">
        <h4 class="mb-0 text-white">REFERENCES Details</h4>
    </div><br><br>
		<div class="step-content col-lg-8 col-md-8 col-sm-12 offset-md-1">
			<div class="step-tab-panel" data-step="step3">
				<div class="container">
					<h5>6.0 REFERENCES</h5>
					<div class="row">
						<div class="col-sm-12 col-md-12">
							<table class="table table-bordered responsive">
								<thead class="table-dark">
									<tr class="text-center">
										<th style="width:2%;"> S.No </th>
										<th style="width:20%;"> Name</th>
										<th style="width:20%;">Addresss</th>
										<th style="width:20%;">Occupation</th>									
									</tr>
								</thead>
								<tbody class="eduadding">

									<?php
									foreach ($user_references as $key => $value) {										
									?>
										<tr class="edupresent_row_in_post">
											<td align="center"><?php echo ($key + 1); ?>.</td>
											
											<td><?php echo $value['name']; ?>
											</td>
											<td><?php echo $value['address']; ?>
											</td>
											<td><?php echo $value['occupation']; ?>
											</td>											
										</tr>
									<?php }	?>								
								</tbody>
							</table>
						</div>
					</div> <br><br>			
				</div>
			</div>
		</div>
		<div class="action-form">
			<div class="mb-3 mt-3 text-center">
				<?php echo $this->Html->link(('<i class="fas fa-arrow-left"></i>&nbsp; Previous'), ['controller'=>'Projects','action' => 'suppliementarydetailsview', $id], ['escape' => false, 'class' => 'btn btn-info rounded-pill px-4 waves-effect waves-light',]); ?>

				<span>
					<?php echo $this->Html->link(('Next&nbsp;<i class="fas fa-arrow-right"></i>'), ['controller'=>'Projects','action' => 'paymentdetailsview', $id], ['escape' => false, 'class' => 'btn btn-warning btn-rounded',]); ?>
				</span>
			</div>
		</div>
	</div>
</div>
<?php echo $this->Form->End(); ?>