	<style>     
.step-footer {
    text-align: center !important;
}
</style>        
<center style=" font-weight:bold; font-size:20px;"><?= $this->Flash->render() ?></center>
<?php

use function PHPSTORM_META\type;

 echo $this->Form->create($project, ['id' => 'FormID', 'class' => '', "autocomplete" => "off", 'enctype' => 'multipart/form-data']); ?>
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
										</div>'), ['controller' => 'Projects', 'action' => 'basicdetails',  base64_encode($id)], ['escape' => false, 'class' => 'stepper-wrapper']); ?>
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
										</div>'), ['controller' => 'Projects', 'action' => 'entitydetails',  base64_encode($id)], ['escape' => false, 'class' => 'stepper-wrapper']); ?>
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
										</div>'), ['controller' => 'Projects', 'action' => 'educationdetails',  base64_encode($id)], ['escape' => false, 'class' => 'stepper-wrapper']); ?>
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
										</div>'), ['controller' => 'Projects', 'action' => 'manufacturingdetails',  base64_encode($id)], ['escape' => false, 'class' => 'stepper-wrapper']); ?>
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
										</div>'), ['controller' => 'Projects', 'action' => 'manpowerdetails',  base64_encode($id)], ['escape' => false, 'class' => 'stepper-wrapper']); ?>
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
										</div>'), ['controller' => 'Projects', 'action' => 'projectcostdetails',  base64_encode($id)], ['escape' => false, 'class' => 'stepper-wrapper']); ?>
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
										</div>'), ['controller' => 'Projects', 'action' => 'profitabilitydetails',  base64_encode($id)], ['escape' => false, 'class' => 'stepper-wrapper']); ?>
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
										</div>'), ['controller' => 'Projects', 'action' => 'suppliementarydetails',  base64_encode($id)], ['escape' => false, 'class' => 'stepper-wrapper']); ?>
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
										</div>'), ['controller' => 'Projects', 'action' => 'referencedetails',  base64_encode($id)], ['escape' => false, 'class' => 'stepper-wrapper']); ?>
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
										</div>'), ['controller' => 'Projects', 'action' => 'paymentdetails',  base64_encode($id)], ['escape' => false, 'class' => 'stepper-wrapper']); ?>
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
											<th style="width:8%;">	<button type="button" class="btn btn-success btn-sm" onclick="rawadding();"><i class="fa fa-plus-circle"></i>&nbsp;Add</button>

											
										</tr>										
									</thead>
									  <tbody class="rawadding">
									    <?php if($utilities_count == 0){ ?>
										  <tr class="rawadding_row_in_post">
												 <td align="center">1.</td>												
												<td>
												<?php echo $this->Form->control('raw.0.particular_id', ['class' => 'form-select', 'templates' => ['inputContainer' => '{{content}}'], 'options' => $utilities_particulars, 'label' => false, 'error' => false, 'empty' => 'Select','data-rule-required'=>true,'data-msg-required'=>'Select Unit']); ?>
												
											</td>
												<td>
												<?php echo $this->Form->control('raw.0.requirement', ['class' => 'form-control requirement num', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Requirement','onkeyup'=>'calculaterequirement()','data-rule-required'=>true,'data-msg-required'=>'Enter Requirement']); ?>
												</td>
												 <td>
												 <?php echo $this->Form->control('raw.0.unit_id', ['class' => 'form-select', 'templates' => ['inputContainer' => '{{content}}'], 'options' => $units, 'label' => false, 'error' => false, 'empty' => 'Select','data-rule-required'=>true,'data-msg-required'=>'Select Unit']); ?>
												</td>
												 <td>
												 <?php echo $this->Form->control('raw.0.expense', ['class' => 'form-control expenses amount', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Expenses','onkeyup'=>'calculateexpenses()','data-rule-required'=>true,'data-msg-required'=>'Enter Expenses','style'=>'text-align:end']); ?>
												</td>
												 <td>
												 <?php echo $this->Form->control('raw.0.remarks', ['class' => 'form-control', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Remarks','data-rule-required'=>false,'data-msg-required'=>'Enter Remarks','type'=>'text']); ?>
												</td> 
											
												<td>
												</td>
											</tr>
											<?php }else{ 
		                                     foreach($utilities as $key => $value){
											  ?>		
											  
											 <tr class="rawadding_row_in_post  raw_<?php echo $key;  ?>">
												 <td align="center"><?php echo ($key+1); ?>.</td>											
												 
												<td>
												<?php echo $this->Form->control('raw.'.$key.'.particular_id', ['class' => 'form-select', 'templates' => ['inputContainer' => '{{content}}'], 'options' => $utilities_particulars, 'label' => false, 'error' => false, 'empty' => 'Select','data-rule-required'=>true,'data-msg-required'=>'Select Unit','value'=>$value['particular_id']]); ?>
											   <?php echo $this->Form->control('raw.'.$key.'.utility_id', ['label' => false, 'error' => false, 'empty' => 'Select','type'=>'hidden','value'=>$value['id']]); ?>

												</td>
												 <td>
												 <?php echo $this->Form->control('raw.'.$key.'.requirement', ['class' => 'form-control requirement num', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Requirement','onkeyup'=>'calculaterequirement()','data-rule-required'=>true,'data-msg-required'=>'Enter Requirement','value'=>$value['requirement']]); ?>
												</td>
												 <td>
												 <?php echo $this->Form->control('raw.'.$key.'.unit_id', ['class' => 'form-select', 'templates' => ['inputContainer' => '{{content}}'], 'options' => $units, 'label' => false, 'error' => false, 'empty' => 'Select','data-rule-required'=>true,'data-msg-required'=>'Select Unit','value'=>$value['unit_id']]); ?>
												</td>
												 <td>
												 <?php echo $this->Form->control('raw.'.$key.'.expense', ['class' => 'form-control expenses amount', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Expenses','onkeyup'=>'calculateexpenses()','data-rule-required'=>true,'data-msg-required'=>'Enter Expenses','value'=>$value['expense'],'style'=>'text-align:end']); ?>
												</td> 
												 <td>
												 <?php echo $this->Form->control('raw.'.$key.'.remarks', ['class' => 'form-control', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Remarks','data-rule-required'=>false,'data-msg-required'=>'Enter Remarks','value'=>$value['remarks'],'type'=>'text']); ?>
												</td>
												
												<td style="text-align:center;"> 
												  <?php if($key != 0){ ?>
												   <a onclick='remove_utilities(<?php echo $key; ?>);'>
													<button type="button" class="btn btn-danger btn-sm" style="margin-left:0px;width:65px;font-size:11px;">Delete</button>
												  </a>
												  <?php } ?>
											   </td>
											</tr>
										  <?php } } ?>
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
											<th style="width:8%;">	<button type="button" class="btn btn-success btn-sm" onclick="manpoweradding();"><i class="fa fa-plus-circle"></i>&nbsp;Add</button>

										</tr>										
									</thead>
									<tbody class="manadding">
									    <?php if($manpower_count == 0){ ?>
										  <tr class="manadding_row_in_post">
												 <td align="center">1.</td>												
												<td>
												<?php echo $this->Form->control('manpower.0.particular_id', ['class' => 'form-select', 'templates' => ['inputContainer' => '{{content}}'], 'options' => $manpower_particulars, 'label' => false, 'error' => false, 'empty' => 'Select','data-rule-required'=>true,'data-msg-required'=>'Select Unit']); ?>
												
											</td>
												<td>
												<?php echo $this->Form->control('manpower.0.numbers', ['class' => 'form-control number num', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Requirement','onkeyup'=>'calculatenumber()','data-rule-required'=>true,'data-msg-required'=>'Enter Number']); ?>
												</td>
												 <td>
												 <?php echo $this->Form->control('manpower.0.salaries', ['class' => 'form-control wages', 'templates' => ['inputContainer' => '{{content}}'],'label' => false, 'error' => false,'data-rule-required'=>true,'onkeyup'=>'calculatewages()']); ?>
												</td>
												
												 <td>
												 <?php echo $this->Form->control('manpower.0.remarks', ['class' => 'form-control', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Remarks','data-rule-required'=>false,'data-msg-required'=>'Enter Remarks','type'=>'text']); ?>
												</td> 
											
												<td>
												</td>
											</tr>
											<?php }else{ 
		                                     foreach($manpower as $key1 => $value1){
											  ?>		
											  
											 <tr class="manadding_row_in_post  manpower_<?php echo $key1;  ?>">
												 <td align="center"><?php echo ($key1+1); ?>.</td>											
												 
												<td>
												<?php echo $this->Form->control('manpower.'.$key1.'.particular_id', ['class' => 'form-select', 'templates' => ['inputContainer' => '{{content}}'], 'options' => $manpower_particulars, 'label' => false, 'error' => false, 'empty' => 'Select','data-rule-required'=>true,'data-msg-required'=>'Select Unit','value'=>$value1['particular_id']]); ?>
													<?php echo $this->Form->control('manpower.'.$key1.'.man_id', ['label' => false, 'error' => false, 'empty' => 'Select','type'=>'hidden','value'=>$value1['id']]); ?>

												</td>
												 <td>
												 <?php echo $this->Form->control('manpower.'.$key1.'.numbers', ['class' => 'form-control number num', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Requirement','onkeyup'=>'calculatenumber()','data-rule-required'=>true,'data-msg-required'=>'Enter Number','value'=>$value1['numbers']]); ?>
												</td>
												 <td>
												 <?php echo $this->Form->control('manpower.'.$key1.'.salaries', ['class' => 'form-control wages', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'empty' => 'Select','data-rule-required'=>true,'data-msg-required'=>'Select Unit','onkeyup'=>'calculatewages()','value'=>$value1['salaries']]); ?>
												</td>
												 
												 <td>
												 <?php echo $this->Form->control('manpower.'.$key1.'.remarks', ['class' => 'form-control', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Remarks','data-rule-required'=>false,'data-msg-required'=>'Enter Remarks','value'=>$value1['remarks'],'type'=>'text']); ?>
												</td>
												
												<td style="text-align:center;"> 
												  <?php if($key1 != 0){ ?>
												   <a onclick='remove_manpower(<?php echo $key1; ?>);'>
													<button type="button" class="btn btn-danger btn-sm" style="margin-left:0px;width:65px;font-size:11px;">Delete</button>
												  </a>
												  <?php } ?>
											   </td>
											</tr>
										  <?php } } ?>
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
						<?php if($project['payment_status'] != 1){ ?>
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

// function utilitiesadding() {
// 	//var type
//     var j = ($('.rawadding_row_in_post').length);
//     var row_no = j - 1;
//     var item = $("#raw-"+row_no+"-particular-id").val();
	
// 	//alert(item);
//     if (item != '') {
//             $.ajax({
//                 async: true,
//                 dataType: "html",
//                 url: '<?php echo $this->Url->webroot; ?>../ajaxaddraw/'+j,
				
//                 // beforeSend: function(xhr) {
//                     // xhr.setRequestHeader('X-CSRF-Token', $('[name="_csrfToken"]').val());
//                 // },
//                 success: function(data, textStatus) {
// 					//alert(data);
//                     $('.rawadding').append(data);
//                 }
// 				//alert(data);
//             });
//     }else if (item == '') {
//         alert("Enter Particulars");
// 		$("#raw-"+row_no+"-particular-id").focus();
//     }
// }

 $(document).ready(function() {
	 calculaterequirement();
	 calculateexpenses();
	 calculatenumber();
	 calculatewages()
  });

    // $("#FormID").validate({
    //     rules: {            
    //         'unit_name': {
    //             required: true
    //         },
	// 		'sectortype_id': {
    //             required: true
    //         },
	// 		'address': {
    //             required: true
    //         },
	// 		'localitytype_id': {
    //             required: true
    //         },
	// 		'pincode': {
    //             required: true
    //         },
	// 		'state_id': {
    //             required: true
    //         },
	// 		'registrationtype_id': {
    //             required: true
    //         },
	// 		'project_cost': {
    //             required: true
    //         },
	// 		'loan_amount': {
    //             required: true
    //         },
	// 		'loan_type_id': {
    //             required: true
    //         },
	// 		'loan_purpose_id': {
    //             required: true
    //         }
    //     },

    //     messages: {
            
    //         'unit_name': {
    //             required: "Enter Unit / Entity Name"
    //         },
	// 		'sectortype_id': {
    //             required: "Select Sector Type"
    //         },
	// 		'address': {
    //             required: "Enter Address"
    //         },
	// 		'localitytype_id': {
    //             required: "Select Locality"
    //         },
	// 		'pincode': {
    //             required:  "Enter Pincode"
    //         },
	// 		'state_id': {
    //             required:  "Select State"
    //         },
	// 		'registrationtype_id': {
    //             required:  "Select Registration Type"
    //         },
	// 		'project_cost': {
    //             required:  "Enter Project Cost"
    //         },
	// 		'loan_amount': {
    //             required:  "Enter Loan Amount"
    //         },
	// 		'loan_type_id': {
    //             required:  "Enter Loan Type"
    //         },
	// 		'loan_purpose_id': {
    //             required:  "Enter Loan Purpose"
    //         }
    //     },
    //     submitHandler: function(form) {
    //         form.submit();
    //         $(".btn").prop('disabled', true);
    //     }
    // });
	
function manpoweradding() {
	//var type
    var j = ($('.manadding_row_in_post').length);
    var row_no = j - 1;
    var item = $("#manpower-"+row_no+"-particular-id").val();
	//alert(code);
    if (item != '') {
            $.ajax({
                async: true,
                dataType: "html",
                url: '<?php echo $this->Url->webroot; ?>../ajaxaddmanpower/'+j,
				
                // beforeSend: function(xhr) {
                    // xhr.setRequestHeader('X-CSRF-Token', $('[name="_csrfToken"]').val());
                // },
                success: function(data, textStatus) {
                    $('.manadding').append(data);
                }
            });
    }else if (item == '') {
        alert("Enter Particular");
		$("#production-"+row_no+"-particular-id").focus();
    }
} 

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
    var l = ($('.rawadding_row_in_post').length);
    var row_no2 = l - 1;
    var item = $("#raw-"+row_no2+"-particular-id").val();
	//alert(l);
    if (item != '') {
		$.ajax({
			async: true,
			dataType: "html",
			url: '<?php echo $this->Url->webroot ?>../ajaxutilities/'+l,
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
	function remove_utilities(i){
	  if (confirm('Are you Sure You want to delete?')) {
	  var i;	 
	 // var machinery_id =  $('#raw-'+i+'-particular-id').val();
	  var machinery_id =  $('#raw-'+i+'-utility-id').val();
	 // alert(machinery_id);
	$.ajax({
			async: true,
			dataType: "html",
			url: '<?php echo $this->Url->webroot ?>../deleteutilities/'+machinery_id,
			beforeSend: function(xhr) {
				xhr.setRequestHeader('X-CSRF-Token', $('[name="_csrfToken"]').val());
			},
			success: function(data, textStatus) { //alert(data);
               if(data == 1){			
				 $('.raw_'+i).remove();
				 calculaterequirement();
				 calculateexpenses();
				 location.reload(true);
			   }else{
					alert('Unable to Delete');
				}
			}
		});
	  }		  
   }
   
   function remove_manpower(k){
	//alert('hi');
	  if (confirm('Are you Sure You want to delete?')) {
	  var k;	 
	  var raw_id =  $('#manpower-'+k+'-man-id').val();
	 // alert(raw_id);
	  $.ajax({
			async: true,
			dataType: "html",
			url: '<?php echo $this->Url->webroot ?>../deletemanpower/'+raw_id,
			beforeSend: function(xhr) {
				xhr.setRequestHeader('X-CSRF-Token', $('[name="_csrfToken"]').val());
			},
			success: function(data, textStatus) {//alert(data);
               if(data == 1){			
				 $('.manpower_'+k).remove();
				 calculatenumber();
				 calculatewages();
				 location.reload(true);
			   }else{
					alert('Unable to Delete');
				}
			}
		});
	  }		  
   }
</script>