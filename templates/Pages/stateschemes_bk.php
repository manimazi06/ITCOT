

	<!--begin::Toolbar-->
  <div class="toolbar py-5 py-lg-5" id="kt_toolbar">
						<!--begin::Container-->
						<div id="kt_toolbar_container" class="container-xxl d-flex flex-stack flex-wrap">
							<!--begin::Page title-->
							<div class="page-title d-flex flex-column me-3">
								<!--begin::Title-->
								<h1 class="d-flex text-dark fw-bold my-1 fs-3"> State  Government  Schemes</h1>
								
								<ul class="breadcrumb breadcrumb-dot fw-semibold text-gray-600 fs-7 my-1">
									<li class="breadcrumb-item text-gray-600">
										 <a class="text-gray-600" href="<?php echo $this->Url->build(['controller' => 'Pages', 'action' => 'home']); ?>">Home</a>
									</li>
									<li class="breadcrumb-item text-gray-600">
									 <a class="text-gray-600" href="<?php echo $this->Url->build(['controller' => 'Pages', 'action' => 'digitallibrary']); ?>">Digital-Library</a>
									</li>
									<li class="breadcrumb-item text-gray-500">Schemes</li>
								</ul>  
							</div>
							<!--end::Page title-->
              
						</div>
						<!--end::Container-->
	</div>
          <!-- <hr style="color: #093875;padding:0px;margin-top:-5px"> -->
        
  <!--end::Toolbar-->
<!-- bread crump end -->


<div class="container">
	<div class="row pb-5" >
		<div class="col-lg-10 col-md-10 col-sm-12 offset-lg-1 offset-md-1">
     <!--begin::Notice-->
	 <div class=" notice  bg-light-primary rounded border-primary border border-dashed rounded-3 p-6" style="background: #edf0ff !important;border-color:#050140 !important;" >
		<!--begin::Wrapper-->	
		<!--begin::Content-->		
    <div class="press-content2 mt-3">
     
     <div class="content-space row ">
       <div class="col-lg-12 col-md-12 col-sm-12  ">
         <div class="state-content text-start">
         <div class="fw-semibold">
	<h4 class="text-gray-900 fw-bold text-center" style="font-size: 1.5rem !important;">State Government Schemes</h4>
	</div>

   
        <div class="row" >
         <div class="col-lg-4 col-md-4 col-sm-12 ps-5">
           <div class="list1-head my-3 ">
             <ul style="list-style: none;"> 
             <?php foreach($state_schemes_1 as $state){ ?>	
       <a href="<?php echo $this->Url->build(['controller' => 'Pages', 'action' => 'schemeview',$state['id']]); ?>"><li><i class="fas fa-long-arrow-alt-right" style="color: #253b5f;"> </i> &nbsp;<?php echo $state['name']; ?></li> </a>
      <?php } ?>
             </ul>
           </div>
         </div>
   
    <div class="col-lg-4 col-md-4 col-sm-12 ps-5">
           <div class="list1-head my-3 ">
             <ul style="list-style: none;">
             <?php foreach($state_schemes_2 as $state){ ?>	
       <a href="<?php echo $this->Url->build(['controller' => 'Pages', 'action' => 'schemeview',$state['id']]); ?>"><li><i class="fas fa-long-arrow-alt-right" style="color: #253b5f;"> </i> &nbsp;<?php echo $state['name']; ?></li> </a>
      <?php } ?>
             </ul>
           </div>
         </div>
      <div class="col-lg-4 col-md-4 col-sm-12 ps-5">
           <div class="list1-head my-3 ">
             <ul style="list-style: none;">
             <?php foreach($state_schemes_3 as $state){ ?>	
       <a href="<?php echo $this->Url->build(['controller' => 'Pages', 'action' => 'schemeview',$state['id']]); ?>"><li><i class="fas fa-long-arrow-alt-right" style="color: #253b5f;"> </i> &nbsp;<?php echo $state['name']; ?></li> </a>
      <?php } ?>
             </ul>
           </div>
         </div>
         <!--div class="col-lg-4 col-md-4 col-sm-12 my-3 ps-5">
           <ul>
           <a href="" >    <li>&nbsp;Karnataka</li></a>
           <a href="" >    <li>&nbsp;Kerala</li></a>
           <a href="" >    <li>&nbsp;Lakshadweep</li></a>
             <a href="" >    <li>&nbsp;Madhya Pradesh</li></a>
             <a href="" >    <li>&nbsp;Maharashtra</li></a>
             <a href="" >    <li>&nbsp;Manipur</li></a>
             <a href="" >    <li>&nbsp;Meghalaya</li></a>
             <a href="" >    <li>&nbsp;Mizoram</li></a>
             <a href="" >    <li>&nbsp;Nagaland</li></a>
           </ul>
         </div>

         <div class="col-lg-4 col-md-4 col-sm-12 my-3 ps-5 ">
           <ul>
           <a href="" >    <li>&nbsp;Odisha</li></a>
           <a href="" >    <li>&nbsp;Puducherry</li></a>
           <a href="" >    <li>&nbsp;Punjab</li></a>
             <a href="" >    <li>&nbsp;Rajasthan</li></a>
             <a href="" >    <li>&nbsp;Maharashtra</li></a>
             <a href="" >    <li>&nbsp;Telangana</li></a>
             <a href="" >    <li>&nbsp;Tripura </li></a>
             <a href="" >    <li>&nbsp;Uttar Pradesh</li></a>
             <a href="" >    <li>&nbsp;Uttarakhand</li></a>
             <a href="" >    <li>&nbsp;Andhra Pradesh</li></a>
           </ul>
         </div-->
        </div>
         </div>
       </div>       
      </div>
   </div>
 </div>
	      <!--end::Content-->
   
	    <!--end::Wrapper-->
    </div>
     <!--end::Notice-->
		</div>
	</div>
</div>







    
   