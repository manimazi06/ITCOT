	<div class="toolbar py-5 py-lg-5" id="kt_toolbar">
		<div id="kt_toolbar_container" class="container-xxl d-flex flex-stack flex-wrap">
			<div class="page-title d-flex flex-column me-3">
				<h1 class="d-flex text-dark fw-bold my-1 fs-3"> Union Government Schemes</h1>
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
		</div>
	</div>
<div class="container">
	<div class="row pb-5" >
		<div class="col-lg-10 col-md-10 col-sm-12 offset-lg-1 offset-md-1">
     <!--begin::Notice-->
	 <div class=" notice  bg-light-primary rounded border-primary border border-dashed rounded-3 p-6" style="background: #edf0ff !important;border-color:#050140 !important;" >
		<!--begin::Wrapper-->	
		<!--begin::Content-->		
<div class="press-content mt-3" >
	<div class="content-space row ">   
	  <div class="col-lg-12 col-md-12 col-sm-12">
		<div class="uniongov-content text-start">

	<!--begin::Content-->
	<div class="fw-semibold">
	<h4 class="text-gray-900 fw-bold text-center" style="font-size: 1.5rem !important;"style="font-size: 1.5rem !important;">Union Government Schemes</h4>
	</div>
														<!--end::Content-->

		
		   <div class="row">
			 <div class="col-lg-6 col-md-6 col-sm-12 my-5 ps-5">
			  <div class="list1-head">
				<ul style="list-style: none;">			   
			   <?php foreach($union_schemes_1 as $union){ ?>	
				<a href="<?php echo $this->Url->build(['controller' => 'Pages', 'action' => 'schemeview',$union['id']]); ?>"> <li> <i class="fas fa-long-arrow-alt-right" style="color: #253b5f;"> </i> &nbsp;<?php echo $union['name']; ?></li>	 </a>
			   <?php } ?>
				</ul>
			  </div>
			 </div>
				<div class="col-lg-6 col-md-6 col-sm-12 my-5 ps-5">
			  <div class="list1-head">
				<ul style="list-style: none;" >			   
			   <?php foreach($union_schemes_2 as $union){
                 if($union['id'] == 13){
				   ?>	
				<a href="<?php echo $this->Url->build(['controller' => 'Pages', 'action' => 'msmedivisions',$union['id']]); ?>"><li><i class="fas fa-long-arrow-alt-right" style="color: #253b5f;"> </i> &nbsp;<?php echo $union['name']; ?></li> </a>
				 <?php }else{ ?>
				<a href="<?php echo $this->Url->build(['controller' => 'Pages', 'action' => 'schemeview',$union['id']]); ?>"><li><i class="fas fa-long-arrow-alt-right" style="color: #253b5f;"> </i> &nbsp;<?php echo $union['name']; ?></li> </a>
			   <?php } } ?>
				</ul>
			  </div>
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


<!-- <div class="press-content mt-3" >
  <div class="container" >
	<div class="content-space row ">   
	  <div class="col-lg-10 col-md-10 col-sm-10 offset-lg-1 offset-md-1  offset-sm-1 ">
		<div class="uniongov-content text-start">
		<div class="col-12 text-center">
			<h4 class="union-heading ">Union Government Schemes</h4>
		</div>     
		   <div class="row">
			 <div class="col-lg-6 col-md-6 col-sm-12 my-5 ps-5">
			  <div class="list1-head">
				<ul style="">			   
			   <?php foreach($union_schemes_1 as $union){ ?>	
				<a href="<?php echo $this->Url->build(['controller' => 'Pages', 'action' => 'schemeview',$union['id']]); ?>"><li>&nbsp;<?php echo $union['name']; ?></li> </a>
			   <?php } ?>
				</ul>
			  </div>
			 </div>
				<div class="col-lg-6 col-md-6 col-sm-12 my-5 ps-5">
			  <div class="list1-head">
				<ul style="">			   
			   <?php foreach($union_schemes_2 as $union){ ?>	
				<a href="<?php echo $this->Url->build(['controller' => 'Pages', 'action' => 'schemeview',$union['id']]); ?>"><li>&nbsp;<?php echo $union['name']; ?></li> </a>
			   <?php } ?>
				</ul>
			  </div>
			 </div>
		   </div>		   
		</div>
	  </div>       
	 </div>
  </div>
</div> -->
