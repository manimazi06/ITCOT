<style>
	.step-footer {
		text-align: center !important;
	}
	 .card {
        margin-bottom: 0px !important;
    }
</style>
<?php
$fmt = new NumberFormatter('en-IN', NumberFormatter::CURRENCY);
$fmt->setAttribute(NumberFormatter::FRACTION_DIGITS, 2);
$fmt->setSymbol(NumberFormatter::CURRENCY_SYMBOL, ''); 

?>
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
			<?php echo $this->Html->link(__('Supplementary<br>Details'), ['controller' => 'Projects', 'action' => 'suppliementarydetailsview', $id], ['escape' => false, 'class' => 'nav-link active']); ?>
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
        <h4 class="mb-0 text-white">Supplementary Details</h4>
    </div><br><br>
		<div class="step-content col-lg-8 col-md-8 col-sm-12 offset-md-1">
			<div class="step-tab-panel" data-step="step3">
				<!-- <h3 class="tab2-head">Supplementary Details</h3> -->
				<hr style="width: 60%; margin-top: 5px;" />
				<div class="container">
					<h5>5.0 SUPPLEMENTARY DETAILS</h5>
					<div class="row">
						<div class="col-sm-12 col-md-12">
							<table class="table table-bordered responsive">
								<thead class="table-dark">
									<tr class="text-center">
										<th style="width:2%;"> S.No </th>
										<th style="width:30%;"> Give Details</th>
										<th  style="width:20%;"></th>
									</tr>
								</thead>
								<tbody class="rawadding">
									<?php foreach ($project as $key => $value) { ?>
										<tr>
											<td align="center">5.1</td>
											<td>Do you own House/Property etc. ?</td>
											<td><?php echo ($value['own_house'] == '1')?'Yes':'No'; ?></td>											
										</tr>
										<tr>
											<td align="center">5.2</td>
											<td>Own Insurance Policy
											</td>
											<td>
												<?php echo $value['own_insurance_policy']?ltrim($fmt->formatCurrency((float)$value['own_insurance_policy'],'INR'),'₹'):'0.00'; ?></td>										
										</tr>
										<tr>
											<td align="center">5.3</td>
											<td>Any Interest in other firms	</td>
											<td><?php echo $value['interest_other_firms']?ltrim($fmt->formatCurrency((float)$value['interest_other_firms'],'INR'),'₹'):'0.00'; ?> </td>											
										</tr>
										<tr>
											<td align="center">5.4</td>
											<td>Present Monthly Income</td>
											<td><?php echo 'Rs.'.$value['monthly_income']?ltrim($fmt->formatCurrency((float)$value['monthly_income'],'INR'),'₹'):'0.00'; ?></td>
										</tr>										
									<?php } ?>
								</tbody>						
							</table>
						</div>
					</div> <br><br>				
				</div>
			</div>
		</div>	
		<div class="action-form">
			<div class="mb-3 mt-3 text-center">
				<?php echo $this->Html->link(('<i class="fas fa-arrow-left"></i>&nbsp; Previous'), ['controller'=>'Projects','action' => 'profitabilitydetailsview', $id], ['escape' => false, 'class' => 'btn btn-info rounded-pill px-4 waves-effect waves-light',]); ?>

				<span>
					<?php echo $this->Html->link(('Next&nbsp;<i class="fas fa-arrow-right"></i>'), ['controller'=>'Projects','action' => 'referencedetailsview', $id], ['escape' => false, 'class' => 'btn btn-warning btn-rounded',]); ?>
				</span>
			</div>
		</div>
</div>
<?php echo $this->Form->End(); ?>
