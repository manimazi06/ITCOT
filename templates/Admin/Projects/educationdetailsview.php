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
   <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
		<li class="nav-item">
			<?php echo $this->Html->link(__('General<br>Details'), ['controller' => 'Projects', 'action' => 'basicview', $id], ['escape' => false, 'class' => 'nav-link']); ?>
		</li>			
		<li class="nav-item">
			<?php echo $this->Html->link(__('Entity<br>Details'), ['controller' => 'Projects', 'action' => 'entitydetailsview', $id], ['escape' => false, 'class' => 'nav-link']); ?>
		</li>
		<li class="nav-item">
			<?php echo $this->Html->link(__('Educational<br>& work'), ['controller' => 'Projects', 'action' => 'educationdetailsview', $id], ['escape' => false, 'class' => 'nav-link active']); ?>
		</li>			
		<li class="nav-item">
			<?php echo $this->Html->link(__('Manufacturing<br>Raw Materials'), ['controller' => 'Projects', 'action' => 'manufacturingdetailsview', $id], ['escape' => false, 'class' => 'nav-link']); ?>
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
			<?php echo $this->Html->link(__('References'), ['controller' => 'Projects', 'action' => 'referencedetailsview', $id], ['escape' => false, 'class' => 'nav-link']); ?>
		</li>
		<li class="nav-item">
			<?php echo $this->Html->link(__('Payment <br> Details'), ['controller' => 'Projects', 'action' => 'paymentdetailsview', $id], ['escape' => false, 'class' => 'nav-link']); ?>
		</li>			
	</ul>
</div>
<div class="card mt-1">
		<div class="card-header" style="background-color: #243e04;">
        <h4 class="mb-0 text-white">Education Details</h4>
    </div><br><br>
		<div class="step-content col-lg-8 col-md-8 col-sm-12 offset-md-1">
			<div class="step-tab-panel" data-step="step3">
				<h3 class="tab2-head">Educational Qualification / Special Training / Work Experience</h3>
				<hr style="width: 60%; margin-top: 5px;" />
				<div class="container">
					<h5>1.1 Educational Qualification</h5>
					<div class="row">
						<div class="col-sm-12 col-md-12">
							<table class="table table-bordered responsive">
								<thead class="table-dark">
									<tr class="text-center">
										<th style="width:2%;"> S.No </th>
										<th style="width:15%;"> Education</th>
										<th style="width:30%;">Institute</th>
										<th style="width:15%;">Major Subject</th>
										<th style="width:15%;">Year of Passing</th>										
									</tr>
								</thead>
								<tbody class="eduadding">

									<?php
									foreach ($education_details as $key => $value) {
								
									?>
										<tr class="edupresent_row_in_post">
											<td align="center"><?php echo ($key + 1); ?>.</td>
											<td>
												<?php echo $value->education->name; ?>
											</td>
											<td><?php echo $value['institute']; ?>
											</td>
											<td><?php echo $value['major_subject']; ?>
											</td>
											<td><?php echo $value['year_passing']; ?>
											</td>										
										</tr>
									<?php }
									?>								
								</tbody>
							</table>
						</div>
					</div> <br><br>
					<h5>1.2 Special Training</h5>
					<div class="row">
						<div class="col-sm-12 col-md-12">
							<table class="table table-bordered responsive">
								<thead class="table-dark">
									<tr class="text-center">
										<th style="width:2%;"> S.No </th>
										<th style="width:15%;">Training In</th>
										<th style="width:30%;">Institute</th>
										<th style="width:11%;">From Date</th>
										<th style="width:11%;">To Date</th>
										<th style="width:15%;">Duration</th>
										<th style="width:15%;">Achievement</th>										
									</tr>
								</thead>
								<tbody class="trainingadding">
									<?php
									foreach ($training_details as $key1 => $value1) {
									?>
										<tr class="trainingpresent_row_in_post">
											<td align="center"><?php echo ($key1 + 1); ?>.</td>
											<td>
												<?php echo $value1['training_in']; ?>
											</td>

											<td>
												<?php echo $value1['institute']; ?>
											</td>
										
											<td>
												<?php echo $value1['from_date']; ?>
											</td>
											
											<td>
												<?php echo $value1['to_date']; ?>
											</td>
											<td>
												<?php echo $value1['duration']; ?>
											</td>
											<td>
												<?php echo $value1['achievement']; ?>
											</td>											
										</tr>
									<?php } ?>

								</tbody>
							</table>
						</div>
					</div><br></br>
					<h5>1.3 Work Experience (Past and Present)</h5>
					<div class="row">
						<div class="col-sm-12 col-md-12">
							<table class="table table-bordered responsive">
								<thead class="table-dark">
									<tr class="text-center">
										<th style="width:2%;"> S.No </th>
										<th style="width:30%;">organisation</th>
										<th style="width:15%;">Position</th>
										<th style="width:15%;">Nature of Work</th>
										<th style="width:11%;">From Date</th>
										<th style="width:11%;">To Date</th>
										<th style="width:15%;">Duration</th>									
									</tr>
								</thead>
								<tbody class="workadding">
									<?php
									foreach ($work_details as $key2 => $value2) {
									?>
										<tr class="workpresent_row_in_post">
											<td align="center"><?php echo ($key2 + 1); ?>.</td>
											<td>
												<?php echo $value2['organisation']; ?>
											</td>
											<td>
												<?php echo $value2['position']; ?>
											</td>
											<td>
												<?php echo $value2['nature_work']; ?>
											</td>
										
											<td>
												<?php echo $value1['from_date']; ?>
											</td>
											
											<td>
												<?php echo $value1['to_date']; ?>
											</td>

											<td>
												<?php echo $value2['duration']; ?>
											</td>										
										</tr>
									<?php }
									?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="action-form">
			<div class="mb-3 mt-3 text-center">
				<?php echo $this->Html->link(('<i class="fas fa-arrow-left"></i>&nbsp; Previous'), ['controller'=>'Projects','action' => 'entitydetailsview', $id], ['escape' => false, 'class' => 'btn btn-info rounded-pill px-4 waves-effect waves-light',]); ?>
				<span>
					<?php echo $this->Html->link(('Next&nbsp;<i class="fas fa-arrow-right"></i>'), ['controller'=>'Projects','action' => 'manufacturingdetailsview', $id], ['escape' => false, 'class' => 'btn btn-warning btn-rounded',]); ?>
				</span>
			</div>
		</div>
	</div>
</div>
<?php echo $this->Form->End(); ?>
