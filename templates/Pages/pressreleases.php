<style>
	.badge {
		font-size: 14px !important;
		line-height: 1.5rem !important;
		width: 80px !important
	}

	.info {
		line-height: 1rem !important;
		color: white;
		width: 180px !important
	}
</style>

<!-- <section class="breadcrump">
   <div>
      <h4>
         PRESS RELEASE
      </h4>
   </div>
</section> -->



<!--begin::Toolbar-->
<div class="toolbar py-5 py-lg-5" id="kt_toolbar">
	<!--begin::Container-->
	<div id="kt_toolbar_container" class="container-xxl d-flex flex-stack flex-wrap">
		<!--begin::Page title-->
		<div class="page-title d-flex flex-column me-3">
			<!--begin::Title-->
			<h1 class="d-flex text-dark fw-bold my-1 fs-3"> Press Release</h1>
			<!--end::Title-->
			<!--begin::Breadcrumb-->
			<ul class="breadcrumb breadcrumb-dot fw-semibold text-gray-600 fs-7 my-1">
				<!--begin::Item-->
				<li class="breadcrumb-item text-gray-600">
					<a href="../../demo11/dist/index.html" class="text-gray-600 text-hover-primary">Home</a>
				</li>
				<!--end::Item5-->
				<!--begin::Item-->
				<!-- <li class="breadcrumb-item text-gray-600"></li> -->
				<!--end::Item-->
				<!--begin::Item-->
				<li class="breadcrumb-item text-gray-500">Press Release</li>
				<!--end::Item-->
			</ul>
			<!--end::Breadcrumb-->
		</div>
		<!--end::Page title-->

	</div>
	<!--end::Container-->
</div>


<div class="press-content">
	<div class="container">

		<!-- <div class="col-lg-8 col-md-10 col-sm-10 offset-lg-2 offset-md-1  offset-sm-2" > 
		<div class="uniongov-content text-start">

		   <?php foreach ($press_realeases as $press) { ?>
		     <span class="badge bg-danger"><?php echo date('Y', strtotime($press['release_date'])); ?></span>
			<fieldset  style="border:1px solid #00355F;border-radius:15px; margin-top:1%;padding:15px;">
				<div class="row" style="height:120px;">
				<div class="row" >
				   <div class="col-lg-10">
				      <p><b><?php echo $press['title'] ?></b></p>
				   </div>
				    <div class="col-lg-2">
				      <span class="badge bg-primary"><?php echo date('d M', strtotime($press['release_date'])); ?></span>
					</div>					 
				</div>
				<div class="row" >
				   <div class="col-lg-12">
				      <p><?php echo $press['description'] ?></p>  
				   </div>				    
				</div>
				<div class="row" >
				   <div class="col-lg-12 text-center">
				    <a href="<?php echo ($press['url']) ? $press['url'] : '#'; ?>"><span class="btn bg-danger info" target="_blank">Click for information</span></a>
				   </div>				    
				</div>
				</div>
			</fieldset>
		   <?php } ?>
        </div>
        </div> -->
		<div class="row" style="margin-top: 10px;margin-bottom:30px">
			<?php foreach ($press_realeases as $press) { ?>
				<fieldset>
					<div class="col-lg-8 col-md-8 col-sm-12 col-12 offset-lg-2 offset-md-2 ">

						<div class="press-cnt mt-3">
							<h4>
								<?php echo date('d', strtotime($press['release_date'])); ?> <b> <?php echo date('M', strtotime($press['release_date'])); ?> </b><?php echo date('Y', strtotime($press['release_date'])); ?>
							</h4>

							<h5><?php echo $press['title'] ?></h5>

							<h6><?php echo $press['description'] ?></h6>
							<a href="<?php echo ($press['url']) ? $press['url'] : '#'; ?>" target="_blank">
								<button class="btn btn-sm "> Read more > </button>
							</a>
						</div>
					</div>

				</fieldset>

			<?php } ?>
		</div>


		<!-- <div class="row mt-3">
				<div class="col-lg-6 col-md-6 col-sm-12 c0l-12">
					<div class="press-cnt">
						<h4>25 <b> May </b>  2023</h4>
						<h5>Lorem ipsum dolor sit amet.</h5>
						<h6>Lorem ipsum dolor sit amet consectetur, adipisicing elit.
							Praesentium, dolor accusantium! Fugiat odio sit cumque
							dolor vel repellat laudantium consequatur. Lorem ipsum, 
							dolor sit amet consectetur adipisicing elit. 
							Incidunt, ad.</h6>
							<button class="btn btn-sm "> Read more > </button>
						
				</div>
			</div>
		</div> -->

	</div>
</div>