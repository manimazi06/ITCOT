	<div class="toolbar py-5 py-lg-5" id="kt_toolbar">
		<div id="kt_toolbar_container" class="container-xxl d-flex flex-stack flex-wrap">
			<div class="page-title d-flex flex-column me-3">
				<!--begin::Title-->
				<h1 class="d-flex text-dark fw-bold my-1 fs-3"> 
					<h4>Union Government Schemes</h4>
					<h5> <b><p style="color:#093875;">Ministry of Micro Small and Medium Enterprises</p></b></h5>
					 <b><p style="color:black;"><?php echo $divisions[$division_id] ?></p></b>
					
					
					<!-- <p style="color: #fff;"><?php echo $schemes['department']['name']; ?></p> -->
			   </h1>								
				<ul class="breadcrumb breadcrumb-dot fw-semibold text-gray-600 fs-7 my-1">								
					<li class="breadcrumb-item text-gray-600">
						 <a class="text-gray-600" href="<?php echo $this->Url->build(['controller' => 'Pages', 'action' => 'home']); ?>">Home</a>
					</li>
					<li class="breadcrumb-item text-gray-600">
					 <a class="text-gray-600" href="<?php echo $this->Url->build(['controller' => 'Pages', 'action' => 'digitallibrary']); ?>">Digital-Library</a>
					</li>					
					<li class="breadcrumb-item text-gray-600">					
					 <a class="text-gray-600" href="<?php echo $this->Url->build(['controller' => 'Pages', 'action' => 'unionschemes']); ?>">Union Schemes</a>			
					 
					</li>
					<li class="breadcrumb-item text-gray-600">
					 <a class="text-gray-600" href="<?php echo $this->Url->build(['controller' => 'Pages', 'action' => 'msmedivisions',$id]); ?>">MSME Divisions</a>
					</li>
					<li class="breadcrumb-item text-gray-600">
					 <a class="text-gray-600" href="<?php echo $this->Url->build(['controller' => 'Pages', 'action' => 'msmedivisionschemes',$id,$division_id]); ?>">MSME Schemes</a>
					</li>
					<li class="breadcrumb-item text-gray-600">
					 <a class="text-gray-600" href="<?php echo $this->Url->build(['controller' => 'Pages', 'action' => 'msmedivisionsubschemes',$id,$division_id,$scheme_id]); ?>">Schemes</a>
					</li>
					
					
					<li class="breadcrumb-item text-gray-500">Scheme View</li>
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
									   <h1><p><?php if($scheme_id == 11 || $scheme_id == 19){ ?>8. <?php } ?><?php echo $scheme[$scheme_id] ?></p></h1>
										<!--begin::Title-->
										<h2 class="fs-2x fw-bold mb-10"><?php echo $subscheme['name']; ?></h2>
										<!--end::Title-->
										<!--begin::Description-->
										<p class="text-gray-400 fs-4 fw-semibold mb-10" style="color:#606064 !important"><?php echo $subscheme['description']; ?></p>
										<!--end::Description-->
										<!--begin::Action-->

										<div class="row">
              <div class="col-lg-6 col-md-6 col-sm-12 d-flex justify-content-end" style="align-items: center;"> <p>For more details, visit <?php if($subscheme['site_url'] != ''){ ?><a href="<?php echo $subscheme['site_url']; ?>" style="color: #00AAFF;" target="_blank">Site </a><?php } ?> </p></div>
              <div class="col-lg-6 col-md-6 col-sm-12 d-flex justify-content-start" >
			  <a  class="btn btn-primary"  href="<?php echo $this->Url->build('/uploads/Govt_schemes/'.$department[13], ['fullBase' => true]); ?>" target="_blank"><span>
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
					<!--end::Container-->



    <!-- IMGAE CONTENT -->
<!-- 
    <div class="press-content mt-3" >
      <div class="container" >
        <div class="row " style="height: 500px;">
          <div class="col-lg-10 col-md-10 col-sm-10 offset-lg-1 offset-md-1  offset-sm-1 ">
            <div class="press-release-content text-center">
            <h4><?php echo $schemes['name']; ?></h4>
            <h5><?php echo $schemes['description']; ?></h5>

            <div class="row">
              <div class="col-lg-6 col-md-6 col-sm-12"> <p>For more details, visit <a href="" style="color: #00AAFF;">MRIN Scheme </a> </p></div>
              <div class="col-lg-6 col-md-6 col-sm-12"><button class="btn btn-small " style="border-radius: 1px;background: #EBA939;
"><span> Download ISAM Scheme</span></button></div>
            </div>
           
            
            </div>
          </div>
          
        </div>
      </div>
    </div> -->
    <!-- FOOTER -->
<div class="" style="margin-top: 100px !important;"> 
    <?php   include("footer.php"); ?> </div>
  </body>
</html>
