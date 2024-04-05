<style>     
.step-footer {
    text-align: center !important;
}
</style>  
<center style=" font-weight:bold; font-size:20px;"><?= $this->Flash->render() ?></center>
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
								<div class="stepper-item current" data-kt-stepper-element="nav">
								    <?php if($project['step_count'] >= '3'){ ?>
							        <?php echo $this->Html->link(__(' <div class="stepper-icon rounded-3">
											<i class="ki-duotone ki-check fs-2 stepper-check"></i>
											<span class="stepper-number">4</span>
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
								<div class="stepper-item" data-kt-stepper-element="nav">
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
					 <h3 class="tab2-head">2.0 Details of Proposed Project: Manufacturing / Servicing</h3>
                     <hr style="width: 100%; margin-top: 5px" />
					 <h5>2.1 Production Programme</h5>
                        <div class="row">         
						<div class="col-sm-12 col-md-12"><div class="table-responsive">
                              <table class="table table-bordered responsive">
								<thead class="table-dark">
									<tr class="text-center">
										<th style="width:2%;"> S.No </th>
										<th style="width:18%;"> Item</th>
										<th style="width:15%;">Total Quantity / Year</th>
										<th style="width:11%;">Unit</th>
										<th style="width:15%;">Sales Revenue / Year</th>
										<th style="width:15%;">Capacity Utilisation</th>
										<th style="width:8%;">	<button type="button" class="btn btn-success btn-sm" onclick="productionadding();"><i class="fa fa-plus-circle"></i>&nbsp;Add</button>
										</th>
									</tr>
								</thead>
								  <tbody class="productionadding">
								    <?php if($production_count == 0){ ?>
									  <tr class="productionpresent_row_in_post">														  
											<td align="center">1.</td>
											<td>
											    <?php echo $this->Form->control('production.0.item', ['class' => 'form-control', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Item','data-rule-required'=>true,'onkeypress'=>"return AvoidSpace(this.value)",'data-msg-required'=>'Enter Item']); ?>
											
											</td>
											<td><?php echo $this->Form->control('production.0.quantity', ['class' => 'form-control amount', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Quantity / Year','data-rule-required'=>true,'data-msg-required'=>'Enter Total Quantity / Year']); ?>
											</td>
										     <td>
											   <?php echo $this->Form->control('production.0.unit_id', ['class' => 'form-select', 'templates' => ['inputContainer' => '{{content}}'], 'options' => $units, 'label' => false, 'error' => false, 'empty' => 'Select','data-rule-required'=>true,'data-msg-required'=>'Select Unit']); ?>
											</td>
											<td><?php echo $this->Form->control('production.0.revenue_year', ['class' => 'form-control amount revenue', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Sales Revenue / Year','data-rule-required'=>true,'data-msg-required'=>'Enter Sales Revenue / Year','onkeyup'=>'calculaterevenue()','style'=>'text-align:end']); ?>
											</td>
											<td><?php echo $this->Form->control('production.0.capacity_utilisation', ['class' => 'form-control', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Capacity utilisation','data-rule-required'=>true,'data-msg-required'=>'Enter Capacity Utilisation']); ?>
											</td>
											<td>
											</td>
										</tr>
									<?php }else{ 
									   foreach($production_details as $key => $value){									
									  ?>									
									   <tr class="productionpresent_row_in_post production_<?php echo $key;  ?>">														  
											<td align="center"><?php echo ($key+1); ?>.</td>
											<td><?php echo $this->Form->control('production.'.$key.'.item', ['class' => 'form-control', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Item','onkeypress'=>"return AvoidSpace(this.value,$key)",'data-rule-required'=>true,'data-msg-required'=>'Enter Item','value'=>$value['item']]); ?>
											    <?php echo $this->Form->control('production.'.$key.'.production_id', ['label' => false, 'error' => false, 'empty' => 'Select','type'=>'hidden','value'=>$value['id']]); ?>
											</td>									
											<td><?php echo $this->Form->control('production.'.$key.'.quantity', ['class' => 'form-control amount', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Quantity / Year','data-rule-required'=>true,'data-msg-required'=>'Enter Total Quantity / Year','value'=>$value['quantity']]); ?>  
											</td>
											<td><?php echo $this->Form->control('production.'.$key.'.unit_id', ['class' => 'form-select', 'templates' => ['inputContainer' => '{{content}}'], 'options' => $units, 'label' => false, 'error' => false, 'empty' => 'Select','data-rule-required'=>true,'data-msg-required'=>'Select Unit','value'=>$value['unit_id']]); ?>
											</td>
											<td><?php echo $this->Form->control('production.'.$key.'.revenue_year', ['class' => 'form-control amount revenue', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Sales Revenue / Year','data-rule-required'=>true,'data-msg-required'=>'Enter Sales Revenue / Year','value'=>$value['revenue_year'],'onkeyup'=>'calculaterevenue()','style'=>'text-align:end']); ?>
											</td>
											<td><?php echo $this->Form->control('production.'.$key.'.capacity_utilisation', ['class' => 'form-control', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Capacity utilisation','data-rule-required'=>true,'data-msg-required'=>'Enter Capacity Utilisation','value'=>$value['capacity_utilisation']]); ?>
											</td>
											<td style="text-align:center;"> 
											  <?php if($key != 0){ ?>
											   <a onclick='remove_production(<?php echo $key; ?>);'>
												<button type="button" class="btn btn-danger btn-sm" style="margin-left:0px;width:65px;font-size:11px;">Delete</button>
											  </a>
											  <?php } ?>
											</td>
										</tr>									
									<?php } } ?>
								</tbody>
								 <tfoot>
									<tr>										
										<th colspan ="4" style="text-align:right">Total</th>										   
										<th><?php echo $this->Form->control('total_revenue', ['class' => 'form-control', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Total Revenue','readonly','style'=>'text-align:end']); ?>
										</th>
										<th></th>		
									</tr>
								</tfoot>
							</table> </div>
						</div>		
					    </div> <br>
						<h5>2.2 Machinery / Equipment</h5>
						 <div class="row">         
							<div class="col-sm-12 col-md-12"><div class="table-responsive">
                                   <table class="table table-bordered responsive">
									<thead class="table-dark">
										<tr class="text-center">
											<th style="width:1%;"> S.No </th>
											<th style="width:13%;">Description</th>
											<th style="width:9%;">Quantity (Nos.)</th>
											<th style="width:12%;">Price</th>
											<th style="width:13%;">Total Value</th>
											<th style="width:12%;">Supplier Name</th>
											<th style="width:13%;">Supplier Address</th>
											<th style="width:8%;">	<button type="button" class="btn btn-success btn-sm" onclick="machineryadding();"><i class="fa fa-plus-circle"></i>&nbsp;Add</button>
											</th>
										</tr>
									</thead>
									  <tbody class="machineryadding">
									    <?php if($machinery_count == 0){ ?>
										  <tr class="machinerypresent_row_in_post">
												 <td align="center">1.</td>												
												<td><?php echo $this->Form->control('machinery.0.description', ['class' => 'form-control', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Description','data-rule-required'=>true,'data-msg-required'=>'Enter description','onkeypress'=>"return AvoidSpacemachinery(this.value)",'type'=>'textarea','rows'=>2]); ?>
												</td>
												 <td><?php echo $this->Form->control('machinery.0.quantity', ['class' => 'form-control num', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'quantity','data-rule-required'=>true,'data-msg-required'=>'Enter quantity']); ?>
												</td>
												 <td><?php echo $this->Form->control('machinery.0.price', ['class' => 'form-control amount', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Price','data-rule-required'=>true,'data-msg-required'=>'Enter Price','style'=>'text-align:end']); ?>
												</td>
												 <td><?php echo $this->Form->control('machinery.0.total_value', ['class' => 'form-control amount mvalue', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'total value','data-rule-required'=>true,'data-msg-required'=>'Enter total value','style'=>'text-align:end','onkeyup'=>'calculatemvalue()']); ?>
												</td> 
												 <td><?php echo $this->Form->control('machinery.0.suppliername', ['class' => 'form-control', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'supplier name','data-rule-required'=>true,'data-msg-required'=>'Enter supplier name']); ?>
												</td>
												 <td><?php echo $this->Form->control('machinery.0.supplieraddress', ['class' => 'form-control', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'supplier address','data-rule-required'=>true,'data-msg-required'=>'Enter supplier address','type'=>'textarea','rows'=>2]); ?>
												</td>
												<td>
												</td>
											</tr>
											<?php }else{ 
		                                     foreach($machinery_details as $key1 => $value1){
											  ?>		
											 <tr class="machinerypresent_row_in_post  machinery_<?php echo $key1;  ?>">
												 <td align="center"><?php echo ($key1+1); ?>.</td>											

												<td><?php echo $this->Form->control('machinery.'.$key1.'.description', ['class' => 'form-control', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Description','onkeypress'=>"return AvoidSpacemachinery(this.value,$key1)",'data-rule-required'=>true,'data-msg-required'=>'Enter description','type'=>'textarea','rows'=>2,'value'=>$value1['description']]); ?>  
													<?php echo $this->Form->control('machinery.'.$key1.'.machinery_id', ['label' => false, 'error' => false, 'empty' => 'Select','type'=>'hidden','value'=>$value1['id']]); ?>

												</td>
												 <td><?php echo $this->Form->control('machinery.'.$key1.'.quantity', ['class' => 'form-control num' , 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'quantity','data-rule-required'=>true,'data-msg-required'=>'Enter quantity','value'=>$value1['quantity']]); ?>
												</td>
												 <td><?php echo $this->Form->control('machinery.'.$key1.'.price', ['class' => 'form-control amount', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Price','data-rule-required'=>true,'data-msg-required'=>'Enter Price','value'=>$value1['price'],'style'=>'text-align:end']); ?>
												</td>
												 <td><?php echo $this->Form->control('machinery.'.$key1.'.total_value', ['class' => 'form-control amount mvalue', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'total value','data-rule-required'=>true,'data-msg-required'=>'Enter total value','value'=>$value1['total_value'],'style'=>'text-align:end','onkeyup'=>'calculatemvalue()']); ?>
												</td> 
												 <td><?php echo $this->Form->control('machinery.'.$key1.'.suppliername', ['class' => 'form-control', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'supplier name','data-rule-required'=>true,'data-msg-required'=>'Enter supplier name','value'=>$value1['suppliername']]); ?>
												</td>
												 <td><?php echo $this->Form->control('machinery.'.$key1.'.supplieraddress', ['class' => 'form-control', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'supplier address','data-rule-required'=>true,'data-msg-required'=>'Enter supplier address','type'=>'textarea','rows'=>2,'value'=>$value1['supplieraddress']]); ?>
												</td>
												<td style="text-align:center;"> 
												  <?php if($key1 != 0){ ?>
												   <a onclick='remove_machinery(<?php echo $key1; ?>);'>
													<button type="button" class="btn btn-danger btn-sm" style="margin-left:0px;width:65px;font-size:11px;">Delete</button>
												  </a>
												  <?php } ?>
											   </td>
											</tr>
										  <?php } } ?>
									</tbody>
									 <tfoot>
										 <tr>										
											<th colspan ="4" style="text-align:right">Total</th>										   
											<th><?php echo $this->Form->control('machinery_total_value', ['class' => 'form-control', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Total Value','readonly','style'=>'text-align:end']); ?>
											</th>
											<th></th>		
											<th></th>		
										</tr>
								    </tfoot>
								</table> </div>
							</div>		
						</div><br>
						<h5>2.3 Raw Materials</h5>
						 <div class="row">         
							<div class="col-sm-12 col-md-12"> <div class="table-responsive">
                                   <table class="table table-bordered responsive">
									<thead class="table-dark">
										<tr class="text-center">
											<th style="width:2%;"> S.No </th>
											<th style="width:10%;">Item</th>
											<th colspan="3" style="width:30%;">Total Annual Requirement</th>
											<th style="width:12%;">Sales Revenue / Year</th>
											<th style="width:12%;">Capacity Utilisation</th>
											<th style="width:8%;"><button type="button" class="btn btn-success btn-sm" onclick="rawadding();"><i class="fa fa-plus-circle"></i>&nbsp;Add</button>
											</th>
										</tr>
										<tr class="text-center">
										    <th></th>
										    <th></th>
										    <th style="width:10%;">Quantity </th>
										    <th style="width:10%;">Unit </th>
											<th style="width:10%;">Value (Rs.)</th>
											<th></th>
											<th></th>
											<th></th>
										</tr>
									</thead>
									  <tbody class="rawadding">
									   <?php if($raw_count == 0){ ?>
									        <tr class="rawpresent_row_in_post">
												<td align="center">1.</td>												
												<td><?php echo $this->Form->control('raw.0.item', ['class' => 'form-control', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Item','data-rule-required'=>true,'onkeypress'=>"return AvoidSpaceraw(this.value)",'data-msg-required'=>'Enter Item']); ?>
												</td>
												<td><?php echo $this->Form->control('raw.0.quantity', ['class' => 'form-control amount', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Quantity','data-rule-required'=>true,'data-msg-required'=>'Enter Quantity']); ?>
												</td>
												<td><?php echo $this->Form->control('raw.0.unit_id', ['class' => 'form-select', 'templates' => ['inputContainer' => '{{content}}'], 'options' => $units, 'label' => false, 'error' => false, 'empty' => 'Select','data-rule-required'=>true,'data-msg-required'=>'Select Unit']); ?>
											    </td>
												<td><?php echo $this->Form->control('raw.0.value', ['class' => 'form-control amount rawvalue', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Value','data-rule-required'=>true,'data-msg-required'=>'Enter Value','style'=>'text-align:end','onkeyup'=>'calculaterawvalue()']); ?>
												</td>
												<td><?php echo $this->Form->control('raw.0.revenue_year', ['class' => 'form-control amount rawrevenue', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Revenue / Year','data-rule-required'=>true,'data-msg-required'=>'Enter Sales Revenue / Year','style'=>'text-align:end','onkeyup'=>'calculaterawrevenue()']); ?>
												</td>
												<td><?php echo $this->Form->control('raw.0.capacity_utilisation', ['class' => 'form-control', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Capacity utilisation','data-rule-required'=>true,'data-msg-required'=>'Enter Capacity Utilisation']); ?>
												</td>
												<td>
												</td>
											</tr>
											<?php }else{ 
		                                     foreach($raw_details as $key2 => $value2){
												
											  ?>											
											 <tr class="rawpresent_row_in_post raw_<?php echo $key2;  ?>">
												<td align="center"><?php echo ($key2+1); ?>.</td>										
												<td>
											      <?php echo $this->Form->control('raw.'.$key2.'.item', ['class' => 'form-control', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Item','data-rule-required'=>true,'onkeypress'=>"return AvoidSpaceraw(this.value,$key2)",'data-msg-required'=>'Enter Item','value'=>$value2['item']]); ?>
												  <?php echo $this->Form->control('raw.'.$key2.'.raw_id', ['label' => false, 'error' => false, 'empty' => 'Select','type'=>'hidden','value'=>$value2['id']]); ?>
				
												</td>
												
												<td><?php echo $this->Form->control('raw.'.$key2.'.quantity', ['class' => 'form-control amount', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Quantity','data-rule-required'=>true,'data-msg-required'=>'Enter Quantity','value'=>$value2['quantity']]); ?>
												</td>
												 <td>
											      <?php echo $this->Form->control('raw.'.$key2.'.unit_id', ['class' => 'form-select', 'templates' => ['inputContainer' => '{{content}}'], 'options' => $units, 'label' => false, 'error' => false, 'empty' => 'Select','data-rule-required'=>true,'data-msg-required'=>'Select Unit','value'=>$value2['unit_id']]); ?>
											     </td>
												<td><?php echo $this->Form->control('raw.'.$key2.'.value', ['class' => 'form-control amount rawvalue', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Value','data-rule-required'=>true,'data-msg-required'=>'Enter Value','value'=>$value2['value'],'style'=>'text-align:end','onkeyup'=>'calculaterawvalue()']); ?>
												</td>
												<td><?php echo $this->Form->control('raw.'.$key2.'.revenue_year', ['class' => 'form-control amount rawrevenue', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Revenue / Year','data-rule-required'=>true,'data-msg-required'=>'Enter Sales Revenue / Year','value'=>$value2['revenue_year'],'style'=>'text-align:end','onkeyup'=>'calculaterawrevenue()']); ?>
												</td>
												<td><?php echo $this->Form->control('raw.'.$key2.'.capacity_utilisation', ['class' => 'form-control', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Capacity utilisation','data-rule-required'=>true,'data-msg-required'=>'Enter Capacity Utilisation','value'=>$value2['capacity_utilisation']]); ?>
												</td>
												<td style="text-align:center;"> 
												  <?php if($key2 != 0){ ?>
												   <a onclick='remove_raw(<?php echo $key2; ?>);'>
													<button type="button" class="btn btn-danger btn-sm" style="margin-left:0px;width:65px;font-size:11px;">Delete</button>
												  </a>
												  <?php } ?>
											   </td>
											</tr>
										   <?php } } ?>											
									</tbody>
									<tfoot>
										 <tr>										
											<th colspan ="4" style="text-align:right">Total</th>										   
											<th><?php echo $this->Form->control('raw_total_value', ['class' => 'form-control', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Total Value','readonly','style'=>'text-align:end']); ?>
											</th>
											<th><?php echo $this->Form->control('raw_total_revenue', ['class' => 'form-control', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Total Value','readonly','style'=>'text-align:end']); ?>
											</th>		
											<th></th>		
										</tr>
								    </tfoot>
								</table> </div>
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
 $(document).ready(function() {
	 calculaterevenue();
	 calculatemvalue();
	 calculaterawvalue();
	 calculaterawrevenue();
	
  });
  
  function remove_production(i){
	  if (confirm('Are you Sure You want to delete?')) {
	  var i;	 
	  var production_id =  $('#production-'+i+'-production-id').val();
	$.ajax({
			async: true,
			dataType: "html",
			url: '<?php echo $this->Url->webroot ?>../deleteproduction/'+production_id,
			beforeSend: function(xhr) {
				xhr.setRequestHeader('X-CSRF-Token', $('[name="_csrfToken"]').val());
			},
			success: function(data, textStatus) {alert(data);
               if(data == 1){			
				 $('.production_'+i).remove();
				 calculaterevenue();
				 location.reload(true);
			   }else{
					alert('Unable to Delete');
				}
			}
		});
	  }		  
   }
   
   function remove_machinery(j){
	  if (confirm('Are you Sure You want to delete?')) {
	  var j;	 
	  var machinery_id =  $('#machinery-'+j+'-machinery-id').val();
	 // alert(machinery_id);
	$.ajax({
			async: true,
			dataType: "html",
			url: '<?php echo $this->Url->webroot ?>../deletemachinery/'+machinery_id,
			beforeSend: function(xhr) {
				xhr.setRequestHeader('X-CSRF-Token', $('[name="_csrfToken"]').val());
			},
			success: function(data, textStatus) { //alert(data);
               if(data == 1){			
				 $('.machinery_'+j).remove();
				 calculatemvalue();
				 location.reload(true);
			   }else{
					alert('Unable to Delete');
				}
			}
		});
	  }		  
   }
   
   function remove_raw(k){
	  if (confirm('Are you Sure You want to delete?')) {
	  var k;	 
	  var raw_id =  $('#raw-'+k+'-raw-id').val();
	  $.ajax({
			async: true,
			dataType: "html",
			url: '<?php echo $this->Url->webroot ?>../deleteraw/'+raw_id,
			beforeSend: function(xhr) {
				xhr.setRequestHeader('X-CSRF-Token', $('[name="_csrfToken"]').val());
			},
			success: function(data, textStatus) {//alert(data);
               if(data == 1){			
				 $('.raw_'+k).remove();
				  calculaterawvalue();
	              calculaterawrevenue();
				 location.reload(true);
			   }else{
					alert('Unable to Delete');
				}
			}
		});
	  }		  
   }
  
  
  
    // $("#FormID").validate({
    //     rules: {            
    //         'unit_name': {
    //             required: true
    //         },
	// 		'sectortype_id': {
    //             required: true
    //         }
    //     },

    //     messages: {
            
    //         'unit_name': {
    //             required: "Enter Unit / Entity Name"
    //         },
	// 		'sectortype_id': {
    //             required: "Select Sector Type"
    //         }
    //     },
    //     submitHandler: function(form) {
    //         form.submit();
    //         $(".btn").prop('disabled', true);
    //     }
    // });
	
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
					//alert(data);
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
	//alert(k);
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
	//alert(l);
    var row_no2 = l - 1;
    var item = $("#raw-"+row_no2+"-item").val();
	//alert(row_no2);
    if (item != '') {
		$.ajax({
			async: true,
			dataType: "html",
			url: '<?php echo $this->Url->webroot ?>../ajaxaddrawmaterials/'+l,
			beforeSend: function(xhr) {
				xhr.setRequestHeader('X-CSRF-Token', $('[name="_csrfToken"]').val());
			},
			success: function(data, textStatus) {
				//alert(data);
				$('.rawadding').append(data);
			}
		});
    }else if (item == '') {
        alert("Enter item");
		$("#raw-"+row_no2+"-item").focus();
    }
}  



	function calculaterevenue(){	
	 var revenue = 0;
	   $(".revenue").each(function() {       
		   
		   if(parseFloat(this.value) != 'NAN'){
			 revenue += parseFloat(this.value);
		   }			 
		});	

		 if (!isNaN(revenue)) {		
		   $('#total-revenue').val(revenue.toFixed(2));		
		}else{			
		   $('#total-revenue').val('');
		}		
	}
	
   function calculatemvalue(){	
	 var mvalue = 0;
	   $(".mvalue").each(function() {       
		   
		   if(parseFloat(this.value) != 'NAN'){
			 mvalue += parseFloat(this.value);
		   }			 
		});	

		 if (!isNaN(mvalue)) {		
		   $('#machinery-total-value').val(mvalue.toFixed(2));		
		}else{			
		   $('#machinery-total-value').val('');
		}		
	}
	
	
	function calculaterawvalue(){	
	 var rawvalue = 0;
	   $(".rawvalue").each(function() {       
		   
		   if(parseFloat(this.value) != 'NAN'){
			 rawvalue += parseFloat(this.value);
		   }			 
		});	

		 if (!isNaN(rawvalue)) {		
		   $('#raw-total-value').val(rawvalue.toFixed(2));		
		}else{			
		   $('#raw-total-value').val('');
		}		
	}
	
   function calculaterawrevenue(){	
	 var rawrevenue = 0;
	   $(".rawrevenue").each(function() {       
		   
		   if(parseFloat(this.value) != 'NAN'){
			 rawrevenue += parseFloat(this.value);
		   }			 
		});	

		 if (!isNaN(rawrevenue)) {		
		   $('#raw-total-revenue').val(rawrevenue.toFixed(2));		
		}else{			
		   $('#raw-total-revenue').val('');
		}		
	}


	function AvoidSpace(val,key) {
          //alert(key);
                    // if (event.keyCode == 32) {
                    //     event.returnValue = false;
                    //     return false;
                    // }
					
        const input = document.querySelector("#production-"+key+"-item");
        //const input = document.querySelector('#work-1-organisation');
        input.addEventListener('keyup', () => {
          input.value = input.value.replace(/  +/g, ' ');
        });
                }

	function AvoidSpacemachinery(val,key1) {
          //alert(key);
                    // if (event.keyCode == 32) {
                    //     event.returnValue = false;
                    //     return false;
                    // }
					
        const input = document.querySelector("#machinery-"+key1+"-description");
        //const input = document.querySelector('#work-1-organisation');
        input.addEventListener('keyup', () => {
          input.value = input.value.replace(/  +/g, ' ');
        });
                }

				
	function AvoidSpaceraw(val,key2) {
          //alert(key);
                    // if (event.keyCode == 32) {
                    //     event.returnValue = false;
                    //     return false;
                    // }
					
        const input = document.querySelector("#raw-"+key2+"-item");
        //const input = document.querySelector('#work-1-organisation');
        input.addEventListener('keyup', () => {
          input.value = input.value.replace(/  +/g, ' ');
        });
                }
  
</script>