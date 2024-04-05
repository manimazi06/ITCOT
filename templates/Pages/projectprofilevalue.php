<style>
	ul {
		list-style: none;
	}
</style>
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
				<li class="breadcrumb-item text-gray-600">
					<a class="text-gray-600" href="<?php echo $this->Url->build(['controller' => 'Pages', 'action' => 'projectprofile']); ?>">Project Profile</a>
				</li>
				<li class="breadcrumb-item text-gray-500">Project Profile Value</li>
			</ul>
		</div>
	</div>
</div>
<div class="container" style="min-height: 600px;">
	<div class="row pb-5">
		<div class="col-lg-8 col-md-8 col-sm-12 offset-lg-2 offset-md-2">
			<div class=" notice  bg-light-primary rounded border-primary border border-dashed rounded-3 p-6" style="background: #edf0ff !important;border-color:#050140 !important;">
				<div class="press-content2 mt-3 ">
					<div class=" content-space row ">
						<div class="col-lg-12 col-md-12 col-sm-12 ">
							<div class="uniongov-content text-start">
								<div class="fw-semibold">
									<h4 class="text-gray-900 fw-bold text-center" style="font-size: 1.5rem !important;" style="font-size: 1.5rem !important;"><?php echo $Profile_name['name']; ?></h4>
								</div>
								<div class="row">
									<div class="col-lg-6 col-md-6 offset-lg-3 col-sm-12 my-5 ps-6">
										<div class="list1-head">
											<ul style="list-style: none;">
												<!-- <?php foreach ($Profile_values as $value) { ?>	
							  <a href="<?php echo $this->Url->build(['controller' => 'Pages', 'action' => 'projectprofiledetails', $profile_id, $value['id']]); ?>"><li style="text-align:center;text-decoration:none;"> <i class="fas fa-long-arrow-alt-right" style="color: #253b5f;"> </i> &nbsp;<?php echo $value['name']; ?></li> </a>
							 <?php } ?> -->
												<?php echo $this->Form->control('profile_id', ['label' => false, 'class' => 'form-select', 'empty' => 'Select Project Value', 'options' => $project_profdd, 'required', 'onchange' => "project_profile($profile_id,this.value)"]); ?>

											</ul>
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
	function project_profile(profile_id, val) {
		var val;
		var profile_id;
		//alert(val);
		//alert(profile_id);


		window.location.href = 'https://itcot.demodev.in/pages/projectprofiledetails/' + profile_id + '/' + val;


	}
</script>