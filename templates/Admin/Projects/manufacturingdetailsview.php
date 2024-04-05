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
				<?php echo $this->Html->link(__('Manufacturing <br>Raw Materials'), ['controller' => 'Projects', 'action' => 'manufacturingdetailsview', $id], ['escape' => false, 'class' => 'nav-link active']); ?>
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
        <h4 class="mb-0 text-white">Manufacturing|Machinery|Raw materials</h4>
    </div><br><br>
		<div class="step-content col-lg-8 col-md-8 col-sm-12 offset-md-1">
			<div class="step-tab-panel" data-step="step3">
				<h3 class="tab2-head">2.0 DETAILS OF PROPOSED PROJECT: Manufacturing / Servicing</h3>
				<hr style="width: 60%; margin-top: 5px;" />
				<div class="container">
					<h5>2.1 PRODUCTION PROGRAMME</h5>
					<div class="row">
						<div class="col-sm-12 col-md-12">
							<table class="table table-bordered responsive">
								<thead class="table-dark">
									<tr class="text-center">
										<th style="width:2%;"> S.No </th>
										<th style="width:15%;"> Item</th>
										<th style="width:30%;">Total Quantity / Year</th>
										<th style="width:11%;">Unit</th>
										<th style="width:15%;">Sales Revenue / Year</th>
										<th style="width:15%;">Capacity Utilisation</th>										
									</tr>
								</thead>
								<tbody class="eduadding">

									<?php
									foreach ($pro_details as $key => $value) {
									
									?>
										<tr class="edupresent_row_in_post">
											<td align="center"><?php echo ($key + 1); ?>.</td>
											<td>
												<?php echo $value['item']; ?>
											</td>
											<td><?php echo $value['quantity']  ? ltrim($fmt->formatCurrency((float)$value['quantity'],'INR'),'₹'):'0.00'; ?>
											</td>
											<td><?php echo $value['units']['name']; ?>
											</td>
											
											<td><?php echo $value['revenue_year']? ltrim($fmt->formatCurrency((float)$value['revenue_year'],'INR'),'₹'):'0.00'; ?>
											</td>
											<td><?php echo $value['capacity_utilisation']; ?>
											</td>											
										</tr>
										<?php
										$pro_value +=$value['revenue_year'];
									 }
									?>									
								</tbody>

								<tfoot>
									<tr>
										<th colspan="4" style="text-align:right">Total</th>
										<th>
											<?php echo $pro_value ? ltrim($fmt->formatCurrency((float)$pro_value,'INR'),'₹'):'0.00'; ?>
										</th>										
									</tr>
								</tfoot>
							</table>
						</div>
					</div> <br><br>
					<h5>2.2 MACHINERY / EQUIPMENT</h5>
					<div class="row">
						<div class="col-sm-12 col-md-12">
							<table class="table table-bordered responsive">
								<thead class="table-dark">
									<tr class="text-center">
										<th style="width:2%;"> S.No </th>
										<th style="width:15%;">Description</th>
										<th style="width:30%;">Quantity required in Nos.</th>
										<th style="width:15%;">Price</th>
										<th style="width:15%;">Total Value</th>
										<th style="width:30%;">Names & Address of the Suppliers</th>										
									</tr>
								</thead>
								<tbody class="trainingadding">
									<?php
									foreach ($mach_details as $key1 => $value1) {
									?>
										<tr class="trainingpresent_row_in_post">
											<td align="center"><?php echo ($key1 + 1); ?>.</td>
											<td>
												<?php echo $value1['description']; ?>
											</td>

											<td>
												<?php echo $value1['quantity']; ?>
											</td>
											<td>
												<?php echo $value1['price']? ltrim($fmt->formatCurrency((float)$value1['price'],'INR'),'₹'):'0.00'; ?>
											</td>
											<td>
												<?php echo $value1['total_value']? ltrim($fmt->formatCurrency((float)$value1['total_value'],'INR'),'₹'):'0.00'; ?>
											</td>
											<td>
												<?php echo $value1['suppliername']; ?>
											</td>											
										</tr>
									<?php
									$mac_value +=$value1['total_value'];
								 } ?>

								</tbody>
								<tfoot>
									<tr>
										<th colspan="4" style="text-align:right">Total</th>
										<th>
											<?php echo $mac_value ? ltrim($fmt->formatCurrency((float)$mac_value,'INR'),'₹'):'0.00'; ?>
										</th>										
									</tr>
								</tfoot>
							</table>
						</div>
					</div><br></br>
					<h5>2.3 RAW MATERIALS</h5>
					<div class="row">
						<div class="col-sm-12 col-md-12">
							<table class="table table-bordered responsive">
								<thead class="table-dark">
									<tr class="text-center">
										<th style="width:2%;"rowspan="3"> S.No </th>
										<th style="width:20%;"rowspan="3">Item</th>
										<th style="width:30%;"colspan="3">Total Annual Requirement</th>
										<th style="width:30%;"rowspan="3">Sales Revenue / Year</th>
										<th style="width:15%;"rowspan="3">Capacity Utilisation</th>										
									</tr>
									<tr class="text-center">
									<th style="width:15%;">Quantity</th>
									<th style="width:10%;">Unit </th>
										<th style="width:15%;">Value in<br>Rs</th>
									</tr>
								</thead>
								<tbody class="workadding">
									<?php
									foreach ($raw_details as $key2 => $value2) {
									?>
										<tr class="workpresent_row_in_post">
											<td align="center"><?php echo ($key2 + 1); ?>.</td>
											<td>
												<?php echo $value2['item']; ?>
											</td>
											<td>
												<?php echo $value2['quantity']; ?>
											</td>
											<td>
												<?php echo $value2['units']['name']; ?>
											</td>
											<td>
												<?php echo $value2['value']? ltrim($fmt->formatCurrency((float)$value2['value'],'INR'),'₹'):'0.00'; ?>
											</td>
											<td>
												<?php echo $value2['revenue_year']? ltrim($fmt->formatCurrency((float)$value2['revenue_year'],'INR'),'₹'):'0.00'; ?>
											</td>
											<td>
												<?php echo $value2['capacity_utilisation']; ?>
											</td>											
										</tr>
									<?php
									$raw_value +=$value2['value'];
									$raw_revenue +=$value2['revenue_year'];
								}
									?>
								</tbody>
								<tfoot>
									<tr>
										<th colspan="4" style="text-align:right">Total</th>
										<th>
											<?php echo $raw_value ? ltrim($fmt->formatCurrency((float)$raw_value,'INR'),'₹'):'0.00'; ?>
										</th>										
										<th>
											<?php echo $raw_revenue ? ltrim($fmt->formatCurrency((float)$raw_revenue,'INR'),'₹'):'0.00'; ?>
										</th>										
									</tr>
								</tfoot>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>		
		<div class="action-form">
			<div class="mb-3 mt-3 text-center">
				<?php echo $this->Html->link(('<i class="fas fa-arrow-left"></i>&nbsp; Previous'), ['controller' => 'Projects', 'action' => 'educationdetailsview', $id], ['escape' => false, 'class' => 'btn btn-info rounded-pill px-4 waves-effect waves-light',]); ?>

				<span>
					<?php echo $this->Html->link(('Next&nbsp;<i class="fas fa-arrow-right"></i>'), ['controller'=>'Projects','action' => 'manpowerdetailsview', $id], ['escape' => false, 'class' => 'btn btn-warning btn-rounded',]); ?>
				</span>
			</div>
		</div>
	</div>
<?php echo $this->Form->End(); ?>