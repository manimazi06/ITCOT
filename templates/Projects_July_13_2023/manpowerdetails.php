	<style>     
.step-footer {
    text-align: center !important;
}
</style>        
<?php echo $this->Form->create($project, ['id' => 'FormID', 'class' => '', "autocomplete" => "off", 'enctype' => 'multipart/form-data']); ?>
<div class="d-flex flex-column flex-root">
			<!--begin::Authentication - Multi-steps-->
			<div class="d-flex flex-column flex-lg-row flex-column-fluid stepper stepper-pills stepper-column stepper-multistep" id="kt_create_account_stepper">
				<!--begin::Aside-->
				<div class="d-flex flex-column flex-lg-row-auto w-lg-350px w-xl-350px">
					<div class="d-flex flex-column top-0 bottom-0 w-lg-350px w-xl-350px scroll-y bgi-size-cover bgi-position-center" style="background-image: url(<?php echo $this->Url->build('/'); ?>images/media/misc/auth-bg.png)">
						<div class="d-flex flex-row-fluid justify-content-center p-10">
						   <div class="stepper-nav">
								<div class="stepper-item " data-kt-stepper-element="nav">
								 <?php if($project['step_count'] >= '0'){ ?>
							        <?php echo $this->Html->link(__(' <div class="stepper-icon rounded-3">
											<i class="ki-duotone ki-check fs-2 stepper-check"></i>
											<span class="stepper-number">&#10003;</span>
										</div><div class="stepper-label">
											<h3 class="stepper-title fs-2">Basic Details</h3>
											<div class="stepper-desc fw-normal">Select Basic Details</div>
										</div>'), ['controller' => 'Projects', 'action' => 'basicdetails', $id], ['escape' => false, 'class' => 'stepper-wrapper']); ?>
									  <?php }else{ ?>	
										<div class="stepper-wrapper">
											<div class="stepper-icon rounded-3">
												<i class="ki-duotone ki-check fs-2 stepper-check"></i>
												<span class="stepper-number">1</span>
											</div>
											<div class="stepper-label">
												<h3 class="stepper-title fs-2">Basic Details</h3>
												<div class="stepper-desc fw-normal">Select Basic Details</div>
											</div>
									   </div>
									  <?php } ?>									
									<div class="stepper-line h-40px"></div>
								</div>
								<div class="stepper-item" data-kt-stepper-element="nav">
								   <?php if($project['step_count'] >= '1'){ ?>
							        <?php echo $this->Html->link(__(' <div class="stepper-icon rounded-3">
											<i class="ki-duotone ki-check fs-2 stepper-check"></i>
											<span class="stepper-number">&#10003;</span>
										</div><div class="stepper-label">
											<h3 class="stepper-title fs-2">Unit / Entity Details</h3>
											<div class="stepper-desc fw-normal">Unit / Entity Details</div>
										</div>'), ['controller' => 'Projects', 'action' => 'entitydetails', $id], ['escape' => false, 'class' => 'stepper-wrapper']); ?>
									  <?php }else{ ?>	
									<div class="stepper-wrapper">
										<div class="stepper-icon rounded-3">
											<i class="ki-duotone ki-check fs-2 stepper-check"></i>
											<span class="stepper-number">2</span>
										</div>
										<div class="stepper-label">
											<h3 class="stepper-title fs-2">Unit / Entity Details</h3>
											<div class="stepper-desc fw-normal">Unit / Entity Details</div>
										</div>
									</div>
									 <?php } ?>		
									<div class="stepper-line h-40px"></div>
									<!--end::Line-->
								</div>
								<div class="stepper-item" data-kt-stepper-element="nav">
								    <?php if($project['step_count'] >= '2'){ ?>
							        <?php echo $this->Html->link(__(' <div class="stepper-icon rounded-3">
											<i class="ki-duotone ki-check fs-2 stepper-check"></i>
											<span class="stepper-number">&#10003;</span>
										</div><div class="stepper-label">
											<h3 class="stepper-title fs-2">Education & Work</h3>
											<div class="stepper-desc fw-normal">Education & Work</div>
										</div>'), ['controller' => 'Projects', 'action' => 'educationdetails', $id], ['escape' => false, 'class' => 'stepper-wrapper']); ?>
									  <?php }else{ ?>
									<div class="stepper-wrapper">
										<div class="stepper-icon">
											<i class="ki-duotone ki-check fs-2 stepper-check"></i>
											<span class="stepper-number">3</span>
										</div>
										<div class="stepper-label">
											<h3 class="stepper-title fs-2">Education & Work</h3>
											<div class="stepper-desc fw-normal">Education & Work</div>
										</div>
									</div>
									 <?php } ?>		
									<div class="stepper-line h-40px"></div>
								</div>
								<div class="stepper-item" data-kt-stepper-element="nav">
								    <?php if($project['step_count'] >= '3'){ ?>
							        <?php echo $this->Html->link(__(' <div class="stepper-icon rounded-3">
											<i class="ki-duotone ki-check fs-2 stepper-check"></i>
											<span class="stepper-number">&#10003;</span>
										</div><div class="stepper-label">
											<h3 class="stepper-title fs-2">Manufacturing</h3>
											<div class="stepper-desc fw-normal">Manufacturing</div>
										</div>'), ['controller' => 'Projects', 'action' => 'manufacturingdetails', $id], ['escape' => false, 'class' => 'stepper-wrapper']); ?>
								    <?php }else{ ?>
									<div class="stepper-wrapper">
										<div class="stepper-icon">
											<i class="ki-duotone ki-check fs-2 stepper-check"></i>
											<span class="stepper-number">4</span>
										</div>
										<div class="stepper-label">
											<h3 class="stepper-title fs-2">Manufacturing</h3>
											<div class="stepper-desc fw-normal">Manufacturing</div>
										</div>
									</div>
									<?php } ?>	
									<div class="stepper-line h-40px"></div>
								</div>
								<div class="stepper-item current" data-kt-stepper-element="nav">
								<?php if($project['step_count'] >= '4'){ ?>
							        <?php echo $this->Html->link(__(' <div class="stepper-icon rounded-3">
											<i class="ki-duotone ki-check fs-2 stepper-check"></i>
											<span class="stepper-number">5</span>
										</div><div class="stepper-label">
											<h3 class="stepper-title fs-2">Utilities & Manpower</h3>
											<div class="stepper-desc fw-normal">Utilities & Manpower</div>
										</div>'), ['controller' => 'Projects', 'action' => 'manpowerdetails', $id], ['escape' => false, 'class' => 'stepper-wrapper']); ?>
								    <?php }else{ ?>
									<div class="stepper-wrapper">
										<div class="stepper-icon">
											<i class="ki-duotone ki-check fs-2 stepper-check"></i>
											<span class="stepper-number">5</span>
										</div>
										<div class="stepper-label">
											<h3 class="stepper-title fs-2">Utilities & Manpower</h3>
											<div class="stepper-desc fw-normal">Utilities & Manpower</div>
										</div>
									</div>
									<?php } ?>
                                    <div class="stepper-line h-40px"></div>
								</div>
                                <div class="stepper-item" data-kt-stepper-element="nav">
								   <?php if($project['step_count'] >= '5'){ ?>
							        <?php echo $this->Html->link(__(' <div class="stepper-icon rounded-3">
											<i class="ki-duotone ki-check fs-2 stepper-check"></i>
											<span class="stepper-number">6</span>
										</div><div class="stepper-label">
											<h3 class="stepper-title fs-2">Capital & Total Cost</h3>
											<div class="stepper-desc fw-normal">Capital & Total Cost</div>
										</div>'), ['controller' => 'Projects', 'action' => 'projectcostdetails', $id], ['escape' => false, 'class' => 'stepper-wrapper']); ?>
								    <?php }else{ ?>
									<div class="stepper-wrapper">
										<div class="stepper-icon">
											<i class="ki-duotone ki-check fs-2 stepper-check"></i>
											<span class="stepper-number">6</span>
										</div>
										<div class="stepper-label">
											<h3 class="stepper-title fs-2">Capital & Total Cost</h3>
											<div class="stepper-desc fw-normal">Capital & Total Cost</div>
										</div>
									</div>
									<?php } ?>
                                    <div class="stepper-line h-40px"></div>
								</div>
                                <div class="stepper-item" data-kt-stepper-element="nav">
								     <?php if($project['step_count'] >= '6'){ ?>
							        <?php echo $this->Html->link(__(' <div class="stepper-icon rounded-3">
											<i class="ki-duotone ki-check fs-2 stepper-check"></i>
											<span class="stepper-number">7</span>
										</div><div class="stepper-label">
											<h3 class="stepper-title fs-2">Project Profitability</h3>
											<div class="stepper-desc fw-normal">Project Profitability</div>
										</div>'), ['controller' => 'Projects', 'action' => 'profitabilitydetails', $id], ['escape' => false, 'class' => 'stepper-wrapper']); ?>
								    <?php }else{ ?>
									<div class="stepper-wrapper">
										<div class="stepper-icon">
											<i class="ki-duotone ki-check fs-2 stepper-check"></i>
											<span class="stepper-number">7</span>
										</div>
										<div class="stepper-label">
											<h3 class="stepper-title fs-2">Project Profitability</h3>
											<div class="stepper-desc fw-normal">Project Profitability</div>
										</div>
									</div>
									<?php } ?>
                                    <div class="stepper-line h-40px"></div>
								</div>
                                <div class="stepper-item" data-kt-stepper-element="nav">
								   <?php if($project['step_count'] >= '7'){ ?>
							        <?php echo $this->Html->link(__(' <div class="stepper-icon rounded-3">
											<i class="ki-duotone ki-check fs-2 stepper-check"></i>
											<span class="stepper-number">8</span>
										</div><div class="stepper-label">
											<h3 class="stepper-title fs-2">Supplementary</h3>
											<div class="stepper-desc fw-normal">Supplementary</div>
										</div>'), ['controller' => 'Projects', 'action' => 'suppliementarydetails', $id], ['escape' => false, 'class' => 'stepper-wrapper']); ?>
								    <?php }else{ ?>
									<div class="stepper-wrapper">
										<div class="stepper-icon">
											<i class="ki-duotone ki-check fs-2 stepper-check"></i>
											<span class="stepper-number">8</span>
										</div>
										<div class="stepper-label">
											<h3 class="stepper-title fs-2">Supplementary</h3>
											<div class="stepper-desc fw-normal">Supplementary</div>
										</div>
									</div>
									<?php } ?>
                                    <div class="stepper-line h-40px"></div>
								</div>
                                <div class="stepper-item" data-kt-stepper-element="nav">
								  <?php if($project['step_count'] >= '8'){ ?>
							        <?php echo $this->Html->link(__(' <div class="stepper-icon rounded-3">
											<i class="ki-duotone ki-check fs-2 stepper-check"></i>
											<span class="stepper-number">9</span>
										</div><div class="stepper-label">
											<h3 class="stepper-title fs-2">References</h3>
											<div class="stepper-desc fw-normal">References</div>
										</div>'), ['controller' => 'Projects', 'action' => 'referencedetails', $id], ['escape' => false, 'class' => 'stepper-wrapper']); ?>
								    <?php }else{ ?>
									<div class="stepper-wrapper">
										<div class="stepper-icon">
											<i class="ki-duotone ki-check fs-2 stepper-check"></i>
											<span class="stepper-number">9</span>
										</div>
										<div class="stepper-label">
											<h3 class="stepper-title fs-2">References</h3>
											<div class="stepper-desc fw-normal">References</div>
										</div>
									</div>
									<?php } ?>
                                    <div class="stepper-line h-40px"></div>
								</div>
                                <div class="stepper-item" data-kt-stepper-element="nav">
								 <?php if($project['step_count'] >= '9'){ ?>
							        <?php echo $this->Html->link(__(' <div class="stepper-icon rounded-3">
											<i class="ki-duotone ki-check fs-2 stepper-check"></i>
											<span class="stepper-number">10</span>
										</div><div class="stepper-label">
											<h3 class="stepper-title fs-2">Payment Details</h3>
											<div class="stepper-desc fw-normal">Payment Details</div>
										</div>'), ['controller' => 'Projects', 'action' => 'paymentdetails', $id], ['escape' => false, 'class' => 'stepper-wrapper']); ?>
								    <?php }else{ ?>
									<div class="stepper-wrapper">
										<div class="stepper-icon">
											<i class="ki-duotone ki-check fs-2 stepper-check"></i>
											<span class="stepper-number">10</span>
										</div>
										<div class="stepper-label">
											<h3 class="stepper-title">Payment Details</h3>
											<div class="stepper-desc fw-normal">Payment Details</div>
										</div>
									</div>
									<?php } ?>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--begin::Aside-->
				<!--begin::Body-->
				<div class="d-flex flex-column flex-lg-row-fluid py-10">
					<!--begin::Content-->
					<div class="d-flex flex-column flex-column-fluid">
						<!--begin::Wrapper-->
						<div class="p-10 p-lg-15">
							<!--begin::Form-->
					 <form name="frmInfo" class="my-auto pb-5 form-input" novalidate="novalidate" id="frmInfo">
					     <h3 class="tab2-head">Utilities & Manpower</h3>
                         <hr style="width: 100%; margin-top: 5px" />
						 <h5>2.4 Utilities</h5>
						 <div class="row">         
							<div class="col-sm-12 col-md-12"><div class="table-responsive">
                                   <table class="table table-bordered responsive">
									<thead class="table-dark">
										<tr class="text-center">
											<th style="width:2%;"> S.No </th>
											<th style="width:10%;">Particulars</th>
											<th style="width:10%;">Annual Requirement</th>
											<th style="width:9%;">Unit</th>
											<th style="width:10%;">Total Annual Expenses</th>
											<th style="width:20%;">Remarks</th>
											
										</tr>										
									</thead>
									  <tbody class="rawadding">
									        <tr>
												<td align="center">1.</td>												
												<td>Electricity
												</td>
												<td>
												  <?php echo $this->Form->control('electricity_requirement', ['class' => 'form-control requirement', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Requirement','onkeyup'=>'calculaterequirement()','data-rule-required'=>true,'data-msg-required'=>'Enter Requirement','value'=>$utilities['electricity_requirement']]); ?>
													<?php echo $this->Form->control('utility_id', ['label' => false, 'error' => false,'type'=>'hidden','value'=>$utilities['id']]); ?>
												</td>
												  <td>
											   <?php echo $this->Form->control('electricity_unit_id', ['class' => 'form-select', 'templates' => ['inputContainer' => '{{content}}'], 'options' => $units, 'label' => false, 'error' => false, 'empty' => 'Select','data-rule-required'=>true,'data-msg-required'=>'Select Unit','value'=>$utilities['electricity_unit_id']]); ?>
											</td>
												<td><?php echo $this->Form->control('electricity_expenses', ['class' => 'form-control expenses amount', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Expenses','onkeyup'=>'calculateexpenses()','data-rule-required'=>true,'data-msg-required'=>'Enter Expenses','value'=>$utilities['electricity_expenses'],'style'=>'text-align:end']); ?>
												</td>
												<td><?php echo $this->Form->control('electricity_remarks', ['class' => 'form-control', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Remarks','data-rule-required'=>false,'data-msg-required'=>'Enter Remarks','value'=>$utilities['electricity_remarks'],'type'=>'textarea','rows'=>2]); ?>
												</td>									
											</tr>
											<tr>
												<td align="center">2.</td>		   										
												<td>Water
												</td>
												<td><?php echo $this->Form->control('water_requirement', ['class' => 'form-control requirement', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Requirement','onkeyup'=>'calculaterequirement()','data-rule-required'=>true,'data-msg-required'=>'Enter Requirement','value'=>$utilities['water_requirement']]); ?>
												</td>
												<td>
											   <?php echo $this->Form->control('water_unit_id', ['class' => 'form-select', 'templates' => ['inputContainer' => '{{content}}'], 'options' => $units, 'label' => false, 'error' => false, 'empty' => 'Select','data-rule-required'=>true,'data-msg-required'=>'Select Unit','value'=>$utilities['water_unit_id']]); ?>
											</td>
												<td><?php echo $this->Form->control('water_expenses', ['class' => 'form-control expenses amount', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Expenses','onkeyup'=>'calculateexpenses()','data-rule-required'=>true,'data-msg-required'=>'Enter Expenses','value'=>$utilities['water_expenses'],'style'=>'text-align:end']); ?>
												</td>
												<td><?php echo $this->Form->control('water_remarks', ['class' => 'form-control', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Remarks','data-rule-required'=>false,'data-msg-required'=>'Enter Remarks','value'=>$utilities['water_remarks'],'type'=>'textarea','rows'=>2]); ?>
												</td>										
										   </tr>
											<tr>
												<td align="center">3.</td>												
												<td>Coal /Oil
												</td>
												<td><?php echo $this->Form->control('oil_requirement', ['class' => 'form-control requirement', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Requirement','onkeyup'=>'calculaterequirement()','data-rule-required'=>true,'data-msg-required'=>'Enter Requirement','value'=>$utilities['oil_requirement']]); ?>
												</td>
												<td>
											   <?php echo $this->Form->control('oil_unit_id', ['class' => 'form-select', 'templates' => ['inputContainer' => '{{content}}'], 'options' => $units, 'label' => false, 'error' => false, 'empty' => 'Select','data-rule-required'=>true,'data-msg-required'=>'Select Unit','value'=>$utilities['oil_unit_id']]); ?>
											</td>
												<td><?php echo $this->Form->control('oil_expenses', ['class' => 'form-control expenses amount', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Expenses','onkeyup'=>'calculateexpenses()','data-rule-required'=>true,'data-msg-required'=>'Enter Expenses','value'=>$utilities['oil_expenses'],'style'=>'text-align:end']); ?>
												</td>
												<td><?php echo $this->Form->control('oil_remarks', ['class' => 'form-control', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Remarks','data-rule-required'=>false,'data-msg-required'=>'Enter Remarks','value'=>$utilities['oil_remarks'],'type'=>'textarea','rows'=>2]); ?>
												</td>										
											</tr>
											<tr>
												<td align="center">4.</td>												
												<td>Any Other
												</td>
												<td><?php echo $this->Form->control('other_requirement', ['class' => 'form-control requirement', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Requirement','onkeyup'=>'calculaterequirement()','data-rule-required'=>true,'data-msg-required'=>'Enter Requirement','value'=>$utilities['other_requirement']]); ?>
												</td>
												<td>
											   <?php echo $this->Form->control('other_unit_id', ['class' => 'form-select', 'templates' => ['inputContainer' => '{{content}}'], 'options' => $units, 'label' => false, 'error' => false, 'empty' => 'Select','data-rule-required'=>true,'data-msg-required'=>'Select Unit','value'=>$utilities['other_unit_id']]); ?>
											</td>
												<td><?php echo $this->Form->control('other_expenses', ['class' => 'form-control expenses amount', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Expenses','onkeyup'=>'calculateexpenses()','data-rule-required'=>true,'data-msg-required'=>'Enter Expenses','value'=>$utilities['other_expenses'],'style'=>'text-align:end']); ?>
												</td>
												<td><?php echo $this->Form->control('other_remarks', ['class' => 'form-control', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Remarks','data-rule-required'=>false,'data-msg-required'=>'Enter Remarks','value'=>$utilities['other_remarks'],'type'=>'textarea','rows'=>2]); ?>
												</td>											
											</tr>											
									</tbody>
									<tfoot>
										<tr>											
											 <th colspan ="2" style="text-align:right">Total</th>
											 <th><?php echo $this->Form->control('total_requirement', ['class' => 'form-control', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Total Requirement','readonly','value'=>($total_requirement)?$total_requirement:'']); ?>
											</th>
											<th>
											</th>	
											<th><?php echo $this->Form->control('total_expenses', ['class' => 'form-control', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Total Expenses','readonly','style'=>'text-align:end']); ?>
											</th>
											<th>
											</th>		
										</tr>
									</tfoot>
								</table> </div>
							</div>		
						</div>
						<h5>2.5 Man Power</h5>
						 <div class="row">         
							<div class="col-sm-12 col-md-12"><div class="table-responsive">
                                   <table class="table table-bordered responsive">
									<thead class="table-dark">
										<tr class="text-center">
											<th style="width:2%;"> S.No </th>
											<th style="width:20%;">Particulars</th>
											<th style="width:20%;">No.</th>
											<th style="width:20%;">Total wages / Salaries per annum</th>
											<th style="width:20%;">Remarks</th>
											
										</tr>										
									</thead>
									  <tbody class="rawadding">
									        <tr>
												<td align="center">1.</td>												
												<td>Skilled
												</td>
												<td><?php echo $this->Form->control('skilled_no', ['class' => 'form-control number num', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false,'onkeyup'=>'calculatenumber()', 'placeholder' => 'Number','data-rule-required'=>true,'data-msg-required'=>'Enter Number','maxlength'=>11,'value'=>$manpower['skilled_no']]); ?>
													<?php echo $this->Form->control('manpower_id', ['label' => false, 'error' => false,'type'=>'hidden','value'=>$manpower['id']]); ?>
												</td>
												<td><?php echo $this->Form->control('skilled_salaries', ['class' => 'form-control wages amount', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false,'onkeyup'=>'calculatewages()', 'placeholder' => 'Salary /annum','data-rule-required'=>true,'data-msg-required'=>'Enter Wages /salary','maxlength'=>14,'value'=>$manpower['skilled_salaries'],'style'=>'text-align:end']); ?>
												</td>
												<td><?php echo $this->Form->control('skilled_remarks', ['class' => 'form-control', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Remarks','data-rule-required'=>false,'data-msg-required'=>'Enter Remarks','value'=>$manpower['skilled_remarks'],'type'=>'textarea','rows'=>2]); ?>
												</td>									
											</tr>
											<tr>
												<td align="center">2.</td>												
												<td>Semiskilled
												</td>
												<td><?php echo $this->Form->control('unskilled_no', ['class' => 'form-control number num', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false,'onkeyup'=>'calculatenumber()', 'placeholder' => 'Number','data-rule-required'=>true,'data-msg-required'=>'Enter Number','maxlength'=>11,'value'=>$manpower['unskilled_no']]); ?>
												</td>
												<td><?php echo $this->Form->control('unskilled_salaries', ['class' => 'form-control wages amount', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false,'onkeyup'=>'calculatewages()', 'placeholder' => 'Salary /annum','data-rule-required'=>true,'data-msg-required'=>'Enter Wages /salary','maxlength'=>14,'value'=>$manpower['unskilled_salaries'],'style'=>'text-align:end']); ?>
												</td>
												<td><?php echo $this->Form->control('unskilled_remarks', ['class' => 'form-control', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Remarks','data-rule-required'=>false,'data-msg-required'=>'Enter Remarks','value'=>$manpower['unskilled_remarks'],'type'=>'textarea','rows'=>2]); ?>
												</td>										
										   </tr>
											<tr>
												<td align="center">3.</td>												
												<td>Unskilled
												</td>
												<td><?php echo $this->Form->control('semiskilled_no', ['class' => 'form-control number num', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false,'onkeyup'=>'calculatenumber()', 'placeholder' => 'Number','data-rule-required'=>true,'data-msg-required'=>'Enter Number','maxlength'=>11,'value'=>$manpower['semiskilled_no']]); ?>
												</td>
												<td><?php echo $this->Form->control('semiskilled_salaries', ['class' => 'form-control wages amount', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false,'onkeyup'=>'calculatewages()', 'placeholder' => 'Salary /annum','data-rule-required'=>true,'data-msg-required'=>'Enter Wages /salary','maxlength'=>14,'value'=>$manpower['semiskilled_salaries'],'style'=>'text-align:end']); ?>
												</td>
												<td><?php echo $this->Form->control('semiskilled_remarks', ['class' => 'form-control', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Remarks','data-rule-required'=>false,'data-msg-required'=>'Enter Remarks','value'=>$manpower['semiskilled_remarks'],'type'=>'textarea','rows'=>2]); ?>
												</td>										
											</tr>
											<tr>
												<td align="center">4.</td>												
												<td>Office Staff
												</td>
												<td><?php echo $this->Form->control('office_no', ['class' => 'form-control number num', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false,'onkeyup'=>'calculatenumber()', 'placeholder' => 'Number','data-rule-required'=>true,'data-msg-required'=>'Enter Number','maxlength'=>11,'value'=>$manpower['office_no']]); ?>
												</td>
												<td><?php echo $this->Form->control('office_salaries', ['class' => 'form-control wages amount', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false,'onkeyup'=>'calculatewages()', 'placeholder' => 'Salary /annum','data-rule-required'=>true,'data-msg-required'=>'Enter Wages /salary','maxlength'=>14,'value'=>$manpower['office_salaries'],'style'=>'text-align:end']); ?>
												</td>
												<td><?php echo $this->Form->control('office_remarks', ['class' => 'form-control', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Remarks','data-rule-required'=>false,'data-msg-required'=>'Enter Remarks','value'=>$manpower['office_remarks'],'type'=>'textarea','rows'=>2]); ?>
												</td>											
											</tr>											
									</tbody>
									<tfoot>
										<tr>											
											 <th colspan ="2" style="text-align:right">Total</th>
											 <th><?php echo $this->Form->control('total_no', ['class' => 'form-control', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Total Number','readonly']); ?>
											 </th>
											 <th><?php echo $this->Form->control('total_salaries', ['class' => 'form-control', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Total Salary','readonly','style'=>'text-align:end']); ?>
											 </th>
											 <th>
											 </th>		
										</tr>
									</tfoot>
								</table></div>
							</div>		
						</div>
                                <?php if($project['payment_status'] == ''){ ?>
								<!--begin::Actions-->
								<div class="d-flex flex-stack pt-15">
									<div>
										<button type="submit" class="btn btn-lg btn-primary">
											<span class="indicator-label">Save & Continue
											<i class="ki-duotone ki-arrow-right fs-4 ms-2">
												<span class="path1"></span>
												<span class="path2"></span>
											</i></span>
										</button>
									</div>
								</div>
                                 <?php } ?>
								<!--end::Actions-->
						</form>
							<!--end::Form-->
						</div>
						<!--end::Wrapper-->
					</div>
					<!--end::Content-->
				</div>
				<!--end::Body-->
			</div>
			<!--end::Authentication - Multi-steps-->
		</div>
<?php echo $this->Form->End(); ?>

<script>
 $(document).ready(function() {
	 calculaterequirement();
	 calculateexpenses();
	 calculatenumber();
	 calculatewages()
  });

    $("#FormID").validate({
        rules: {            
            'unit_name': {
                required: true
            },
			'sectortype_id': {
                required: true
            },
			'address': {
                required: true
            },
			'localitytype_id': {
                required: true
            },
			'pincode': {
                required: true
            },
			'state_id': {
                required: true
            },
			'registrationtype_id': {
                required: true
            },
			'project_cost': {
                required: true
            },
			'loan_amount': {
                required: true
            },
			'loan_type_id': {
                required: true
            },
			'loan_purpose_id': {
                required: true
            }
        },

        messages: {
            
            'unit_name': {
                required: "Enter Unit / Entity Name"
            },
			'sectortype_id': {
                required: "Select Sector Type"
            },
			'address': {
                required: "Enter Address"
            },
			'localitytype_id': {
                required: "Select Locality"
            },
			'pincode': {
                required:  "Enter Pincode"
            },
			'state_id': {
                required:  "Select State"
            },
			'registrationtype_id': {
                required:  "Select Registration Type"
            },
			'project_cost': {
                required:  "Enter Project Cost"
            },
			'loan_amount': {
                required:  "Enter Loan Amount"
            },
			'loan_type_id': {
                required:  "Enter Loan Type"
            },
			'loan_purpose_id': {
                required:  "Enter Loan Purpose"
            }
        },
        submitHandler: function(form) {
            form.submit();
            $(".btn").prop('disabled', true);
        }
    });
	
function productionadding() {
	//var type
    var j = ($('.productionpresent_row_in_post').length);
    var row_no = j - 1;
    var item = $("#production-"+row_no+"-item").val();
	//alert(code);
    if (item != '') {
            $.ajax({
                async: true,
                dataType: "html",
                url: '<?php echo $this->Url->webroot; ?>../ajaxaddproduction/'+j,
				
                // beforeSend: function(xhr) {
                    // xhr.setRequestHeader('X-CSRF-Token', $('[name="_csrfToken"]').val());
                // },
                success: function(data, textStatus) {
                    $('.productionadding').append(data);
                }
            });
    }else if (item == '') {
        alert("Enter Item");
		$("#production-"+row_no+"-item").focus();
    }
} 


function machineryadding() {
	//var type
    var k = ($('.machinerypresent_row_in_post').length);
    var row_no1 = k - 1;
    var description = $("#machinery-"+row_no1+"-description").val();
	//alert(code);
    if (description != '') {
		$.ajax({
			async: true,
			dataType: "html",
			url: '<?php echo $this->Url->webroot ?>../ajaxaddmachinery/'+k,
			beforeSend: function(xhr) {
				xhr.setRequestHeader('X-CSRF-Token', $('[name="_csrfToken"]').val());
			},
			success: function(data, textStatus) {
				$('.machineryadding').append(data);
			}
		});
    }else if (description == '') {
        alert("Enter Description");
		$("#machinery-"+row_no1+"-description").focus();
    }
}  


function rawadding() {
	//var type
    var l = ($('.rawpresent_row_in_post').length);
    var row_no2 = l - 1;
    var item = $("#raw-"+row_no2+"-item").val();
	//alert(code);
    if (item != '') {
		$.ajax({
			async: true,
			dataType: "html",
			url: '<?php echo $this->Url->webroot ?>../ajaxaddrawmaterials/'+l,
			beforeSend: function(xhr) {
				xhr.setRequestHeader('X-CSRF-Token', $('[name="_csrfToken"]').val());
			},
			success: function(data, textStatus) {
				$('.rawadding').append(data);
			}
		});
    }else if (item == '') {
        alert("Enter item");
		$("#raw-"+row_no2+"-item").focus();
    }
} 


	function calculaterequirement(){	
	 var requirement = 0;
	   $(".requirement").each(function() {       
		   
		   if(parseFloat(this.value) != 'NAN'){
			 requirement += parseFloat(this.value);
		   }			 
		});	

		 if (!isNaN(requirement)) {		
		   $('#total-requirement').val(requirement);		
		}else{			
		   $('#total-requirement').val('');
		}		
	}

    function calculateexpenses(){	
	 var expenses = 0;
	   $(".expenses").each(function() {       
		   
		   if(parseFloat(this.value) != 'NAN'){
			 expenses += parseFloat(this.value);
		   }			 
		});	

		 if (!isNaN(expenses)) {		
		   $('#total-expenses').val(expenses.toFixed(2));		
		}else{			
		   $('#total-expenses').val('');
		}		
	}	
	
	function calculatenumber(){	
	 var number = 0;
	   $(".number").each(function() {       
		   
		   if(parseFloat(this.value) != 'NAN'){
			 number += parseFloat(this.value);
		   }			 
		});	

		 if (!isNaN(number)) {		
		   $('#total-no').val(number);		
		}else{			
		   $('#total-no').val('');
		}		
	}	
	
	function calculatewages(){	
	 var wages = 0;
	   $(".wages").each(function() {       
		   
		   if(parseFloat(this.value) != 'NAN'){
			 wages += parseFloat(this.value);
		   }			 
		});	

		 if (!isNaN(wages)) {		
		   $('#total-salaries').val(wages.toFixed(2));		
		}else{			
		   $('#total-salaries').val('');
		}		
	}	
  
</script>