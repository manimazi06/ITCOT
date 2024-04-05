	<div class="toolbar py-5 py-lg-5" id="kt_toolbar">
		<div id="kt_toolbar_container" class="container-xxl d-flex flex-stack flex-wrap">
			<div class="page-title d-flex flex-column me-3">
				<!--begin::Title-->
				<h1 class="d-flex text-dark fw-bold my-1 fs-3"> 					
					 <?php if($id == 13){  ?>
					<h3>Union Government Schemes</h3>					
					<?php }else if($id == 36){  ?>
					<h3>State Government Schemes</h3>					
					</li>
					<?php } ?>
					
			   </h1>								
				<ul class="breadcrumb breadcrumb-dot fw-semibold text-gray-600 fs-7 my-1">								
					<li class="breadcrumb-item text-gray-600">
						 <a class="text-gray-600" href="<?php echo $this->Url->build(['controller' => 'Pages', 'action' => 'home']); ?>">Home</a>
					</li>
					<li class="breadcrumb-item text-gray-600">
					 <a class="text-gray-600" href="<?php echo $this->Url->build(['controller' => 'Pages', 'action' => 'digitallibrary']); ?>">Digital-Library</a>
					</li>					
					<li class="breadcrumb-item text-gray-600">					
						 <?php if($id == 13){  ?>
  					  <a class="text-gray-600" href="<?php echo $this->Url->build(['controller' => 'Pages', 'action' => 'unionschemes']); ?>">Union Schemes</a>			
					<?php }else if($id == 36){  ?>
  					  <a class="text-gray-600" href="<?php echo $this->Url->build(['controller' => 'Pages', 'action' => 'stateschemes']); ?>">State Schemes</a>			
					</li>
					<?php } ?>					 
					</li>
					<li class="breadcrumb-item text-gray-600">
					 <a class="text-gray-600" href="<?php echo $this->Url->build(['controller' => 'Pages', 'action' => 'msmedivisions',$id]); ?>">MSME Divisions</a>
					</li>
					<li class="breadcrumb-item text-gray-600">
					 <a class="text-gray-600" href="<?php echo $this->Url->build(['controller' => 'Pages', 'action' => 'msmedivisionschemes',$id,$division_id]); ?>">MSME Schemes</a>
					</li>
					<li class="breadcrumb-item text-gray-500">Schemes</li>
				</ul>  
			</div>              
		</div>
	</div>
      <div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container-xxl">
		<!--begin::Post-->
		<div class="content flex-row-fluid" id="kt_content">
			<!--begin::Card-->
			<div class="card">
				<!--begin::Card body-->
				<div class="card-body p-0">
					<!--begin::Wrapper-->
					<div class="card-px text-center py-20 my-10">
						<!--begin::Title-->
						<h2 class="fs-2x fw-bold mb-10"><?php echo $scheme['name']; ?></h2>
						<!--end::Title-->
						<!--begin::Description-->
						<p class="text-gray-400 fs-4 fw-semibold mb-10" style="color:#606064 !important"><?php echo $scheme['description']; ?></p>
						<!--end::Description-->
						<!--begin::Action-->

						<div class="row">
							  <div class="col-lg-6 col-md-6 col-sm-12 d-flex justify-content-end" style="align-items: center;"> <p>For more details, visit <?php if($scheme['site_url'] != ''){ ?><a href="<?php echo $scheme['site_url']; ?>" style="color: #00AAFF;" target="_blank">Site </a><?php } ?> </p></div>
							  <div class="col-lg-6 col-md-6 col-sm-12 d-flex justify-content-start" >
							 

							 <a  class="btn btn-primary"  href="<?php echo $this->Url->build('/uploads/Govt_schemes/'.$department[$id], ['fullBase' => true]); ?>" target="_blank"><span>
												</ion-icon>Download PDF
												</span></a>  
								</div>
							</div>
						<!--end::Action-->
					</div>
					<!--end::Wrapper-->
					<!--begin::Illustration-->
					<div class="text-center px-4">
						<img class="mw-100 mh-300px" alt="" src="assets/media/illustrations/sketchy-1/2.png" />
					</div>
					<!--end::Illustration-->
				</div>
				<!--end::Card body-->
			</div>
			<!--end::Card-->
			<!--begin::Modals-->
			
			<!--end::Modals-->
		</div>
		<!--end::Post-->
	</div>

  </body>
</html>
