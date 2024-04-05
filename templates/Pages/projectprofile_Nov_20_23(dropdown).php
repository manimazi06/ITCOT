	<div class="toolbar py-5 py-lg-5" id="kt_toolbar">
		<div id="kt_toolbar_container" class="container-xxl d-flex flex-stack flex-wrap">
			<div class="page-title d-flex flex-column me-3">
				<h1 class="d-flex text-dark fw-bold my-1 fs-3">Project Profiles</h1>							
				<ul class="breadcrumb breadcrumb-dot fw-semibold text-gray-600 fs-7 my-1">
					<li class="breadcrumb-item text-gray-600">
						 <a class="text-gray-600" href="<?php echo $this->Url->build(['controller' => 'Pages', 'action' => 'home']); ?>">Home</a>
					</li>
					<li class="breadcrumb-item text-gray-600">
					 <a class="text-gray-600" href="<?php echo $this->Url->build(['controller' => 'Pages', 'action' => 'digitallibrary']); ?>">Digital-Library</a>
					</li>
					<li class="breadcrumb-item text-gray-500">Project Profile</li>
				</ul>  
			</div>              
		</div>
	</div>
    <div class="container" style="min-height: 600px;">
	<div class="row pb-5" >
	<div class="col-lg-10 col-md-10 col-sm-12 offset-lg-1 offset-md-1">
	<div class=" notice  bg-light-primary rounded border-primary border border-dashed rounded-3 p-6" style="background: #edf0ff !important;border-color:#050140 !important;" >
    <div class="press-content2 mt-3">
    
    <div class="content-space row ">
      <div class="col-lg-12 col-md-12 col-sm-12 ">
        <div class="state-content text-start">
        <div class="fw-semibold">
			<h4 class="text-gray-900 fw-bold text-center" style="font-size: 1.5rem !important;">Project Profiles</h4>
		</div>

       <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-12 ps-5 offset-md-4 offset-lg-4">
          <div class="list1-head my-3 ">
            <ul style="list-style: none;">
            <!-- <?php foreach($project_profile_1 as $profile){ ?>	
			  <a href="<?php echo $this->Url->build(['controller' => 'Pages', 'action' => 'projectprofilevalue',$profile['id']]); ?>"><li><i class="fas fa-long-arrow-alt-right" style="color: #253b5f;"> </i> &nbsp;<?php echo $profile['name']; ?></li> </a>
			 <?php } ?> -->
			 <?php echo $this->Form->control('profile_id', ['label' => false, 'class' => 'form-select', 'empty' => 'Select Project Profile', 'options' => $project_profdd, 'required', 'onchange' => 'project_profile(this.value)']); ?>

					</ul>
				  </div>
				</div>
		  
		   <!-- <div class="col-lg-4 col-md-4 col-sm-12 ps-5">
				  <div class="list1-head my-3 ">
					<ul style="list-style: none;">
					<?php foreach($project_profile_2 as $profile){ ?>	
			  <a href="<?php echo $this->Url->build(['controller' => 'Pages', 'action' => 'projectprofilevalue',$profile['id']]); ?>"><li><i class="fas fa-long-arrow-alt-right" style="color: #253b5f;"> </i>  &nbsp;<?php echo $profile['name']; ?></li> </a>
			 <?php } ?>
					</ul>
				  </div>
				</div>
			 <div class="col-lg-4 col-md-4 col-sm-12 ps-5">
			<div class="list1-head my-3 ">
					<ul style="list-style: none;">
					<?php foreach($project_profile_3 as $profile){ ?>	
			  <a href="<?php echo $this->Url->build(['controller' => 'Pages', 'action' => 'projectprofilevalue',$profile['id']]); ?>"><li><i class="fas fa-long-arrow-alt-right" style="color: #253b5f;"> </i> &nbsp;<?php echo $profile['name']; ?></li> </a>
			 <?php } ?>
            </ul>
          </div> -->
        </div>        
       </div>
        </div>
      </div>       
     </div>
  </div>

 </div>
    </div>

		</div>
	</div>
</div>






<script type="text/javascript">
		function project_profile(val) {
			var val;
			//alert(val);

	
			window.location.href = 'https://itcot.demodev.in/pages/projectprofilevalue/'+val;

			
		}
	</script>









   
   