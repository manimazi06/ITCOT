 <?php
	$fmt = new NumberFormatter('en-IN', NumberFormatter::CURRENCY);
	$fmt->setAttribute(NumberFormatter::FRACTION_DIGITS, 2);
	$fmt->setSymbol(NumberFormatter::CURRENCY_SYMBOL, '');
	?>
 <!-- <section class="breadcrump">
   <div>
   <h4><?php echo $Profile_details[0]['project_profile']['name']; ?></h4>			
		<center><h5 style="color: #fff;"><?php echo $Profile_details[0]['project_profile_value']['name']; ?></h5></center>
   </div>
</section> -->
 <div class="toolbar py-5 py-lg-5" id="kt_toolbar">
 	<div id="kt_toolbar_container" class="container-xxl d-flex flex-stack flex-wrap">
 		<div class="page-title d-flex flex-column me-3">
 			<h1 class="d-flex text-dark fw-bold my-1 fs-3">
 				<h4> <?php echo $Profile_details[0]['project_profile']['name']; ?></h4>
 				<h5 style="color:#093875;"><?php echo $Profile_details[0]['project_profile_value']['name']; ?></h5>
 			</h1>
 			<ul class="breadcrumb breadcrumb-dot fw-semibold text-gray-600 fs-7 my-1">
 				<li class="breadcrumb-item text-gray-600">
 					<a class="text-gray-600" href="<?php echo $this->Url->build(['controller' => 'Pages', 'action' => 'home']); ?>">Home</a>
 				</li>
 				<li class="breadcrumb-item text-gray-600">
 					<a class="text-gray-600" href="<?php echo $this->Url->build(['controller' => 'Pages', 'action' => 'digitallibrary']); ?>">Digital-Library</a>
 				</li>
 				<li class="breadcrumb-item text-gray-600">
 					<a class="text-gray-600" href="<?php echo $this->Url->build(['controller' => 'Pages', 'action' => 'projectprofile']); ?>">Project Profile</a>
 				</li>
 				<li class="breadcrumb-item text-gray-600">
 					<a class="text-gray-600" href="<?php echo $this->Url->build(['controller' => 'Pages', 'action' => 'projectprofilevalue', $profile_id]); ?>">Project Profile Value</a>
 				</li>
 				<li class="breadcrumb-item text-gray-500">Project Profile Detail</li>
 			</ul>
 		</div>
 	</div>
 </div>
 <div class="press-content mt-3">
 	<div class="container">
 		<div class="content-space row">
 			<div class="uniongov-content text-start">
 				<div class="row">
 					<div class="col-lg-12 col-md-12 col-sm-12">
 						<div class="table-responsive">
 							<table class="table table-striped table-row-bordered gy-5 gs-7 border rounded" id="kt_datatable_dom_positioning">
 								<thead>
 									<tr>
 										<th scope="col">S.No</th>
 										<th scope="col">Name of the Project</th>
 										<th scope="col">Project Cost</th>
 										<th scope="col">Project Profile</th>
 									</tr>
 								</thead>
 								<tbody class="text-gray-600 fw-semibold">
 									<?php $i = 1;
										foreach ($Profile_details as $project) { ?>
 										<tr class="row-odd">
 											<td scope="row"><?php echo $i; ?></td>
 											<td><?php echo $project['project_name']; ?></td>
 											<td>Rs.&nbsp;<?php echo ($project['project_cost']) ? ltrim($fmt->formatCurrency((float)$project['project_cost'], 'INR'), '₹') : '0.00'; ?></td>
 											<td>
 												<a style="color:blue;" href="<?php echo $this->Url->build('/uploads/project_profiles/' . $project['file_upload'], ['fullBase' => true]); ?>" target="_blank"><span>
 														<ion-icon name="document-text-outline"></ion-icon>View/Download
 													</span></a>


 											</td>
 										</tr>
 									<?php $i++;
										} ?>
 								</tbody>
 							</table>
 						</div>
 					</div>
 				</div>
 			</div>
 		</div>
 	</div>
 </div>

 <script>
 	$("#kt_datatable_dom_positioning").DataTable({
 		"language": {
 			"lengthMenu": "Show _MENU_",
 		},
 		"dom": "<'row'" +
 			"<'col-sm-6 d-flex align-items-center justify-conten-start'l>" +
 			"<'col-sm-6 d-flex align-items-center justify-content-end'f>" +
 			">" +

 			"<'table-responsive'tr>" +

 			"<'row'" +
 			"<'col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start'i>" +
 			"<'col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end'p>" +
 			">"
 	});
 </script>