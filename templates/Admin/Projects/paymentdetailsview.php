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
				<?php echo $this->Html->link(__('Supplementary<br>Details'), ['controller' => 'Projects', 'action' => 'suppliementarydetailsview', $id], ['escape' => false, 'class' => 'nav-link']); ?>
			</li>
			<li class="nav-item">
				<?php echo $this->Html->link(__('References'), ['controller' => 'Projects', 'action' => 'referencedetailsview', $id], ['escape' => false, 'class' => 'nav-link']); ?>
			</li>
			<li class="nav-item">
				<?php echo $this->Html->link(__('Payment <br> Details'), ['controller' => 'Projects', 'action' => 'paymentdetailsview',$id], ['escape' => false, 'class' => 'nav-link active']); ?>
			</li>		
		</ul>
</div>
<div class="card mt-1">
		<div class="card-header" style="background-color: #243e04;">
        <h4 class="mb-0 text-white">Payment Details</h4>
    </div><br>
	<div class="mb-3 mt-3 text-right" style="text-align:right;">
		<?php echo $this->Html->link(('<i class="fas fa-download"></i>&nbsp; Download receipt'), ['controller'=>'Pdfgenerator','action' => 'receiptdownload',$id], ['escape' => false, 'class' => 'btn btn-info rounded-pill px-4 waves-effect waves-light',]); ?>
	</div>
		<div class="step-content col-lg-8 col-md-8 col-sm-12 offset-md-1">
			<div class="step-tab-panel" data-step="step3">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 col-md-12">											
						   <table class="table table-bordered responsive">					
								  <tbody class="referenceadding">							         							
								     <tr>														  
										<td>Payment Amount : </td>
										<td>Rs.&nbsp;<?php echo $project['transaction_amount']?ltrim($fmt->formatCurrency((float)$project['transaction_amount'],'INR'),'₹'):'0.00'; ?></td>
									 </tr>
									 <tr>														  
										<td>Transaction Number. : </td>
										<td><?php echo $project['transaction_number']; ?></td>
									 </tr>
									 <tr>														  
										<td>Transaction Date : </td>
										<td><?php echo date('d-m-Y',strtotime($project['transaction_date'])); ?></td>
									 </tr>
									 <tr>														  
										<td>Payment Status : </td>
										<td><?php echo ($project['payment_status'] == 1)?'<span style="color:green;"><b>Success</b></span>':''; ?></td>
									</tr>			
								</tbody>								
							</table>
						</div>
					</div> <br><br>
			
				</div>
			</div>
		</div>		
		<div class="action-form">
			<div class="mb-3 mt-3 text-center">
				<?php echo $this->Html->link(('<i class="fas fa-arrow-left"></i>&nbsp; Previous'), ['controller'=>'Projects','action' => 'referencedetailsview', $id], ['escape' => false, 'class' => 'btn btn-info rounded-pill px-4 waves-effect waves-light',]); ?>
		   </div>
	   </div>
</div>
<?php echo $this->Form->End(); ?>
