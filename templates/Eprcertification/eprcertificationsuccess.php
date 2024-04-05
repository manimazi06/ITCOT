	<style>
		.input-group button {
			border: 1px solid #d5d5d5 !important;
			background: white;
			padding: 4px !important;
			color: #888888;
		}

		.input-group ul li {
			margin: 0px !important;
			padding: 0px !important;
		}

		.input-group ul {
			padding-bottom: 0px !important;
		}
	</style>
	<div class="toolbar py-5 py-lg-5" id="kt_toolbar">
		<div id="kt_toolbar_container" class="container-xxl d-flex flex-stack flex-wrap">
			<div class="page-title d-flex flex-column me-3">
				<h1 class="d-flex text-dark fw-bold my-1 fs-3"> EPR Certification</h1>
				<ul class="breadcrumb breadcrumb-dot fw-semibold text-gray-600 fs-7 my-1">
					<li class="breadcrumb-item text-gray-600">
						<a class="text-gray-600" href="<?php echo $this->Url->build(['controller' => 'Pages', 'action' => 'home']); ?>">Home</a>
					</li>
					<li class="breadcrumb-item text-gray-600">
						<a class="text-gray-600" href="<?php //echo $this->Url->build(['controller' => 'Pages', 'action' => 'digitallibrary']); ?>">EPR Certification</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="container" style="height:500px;">
		<div class="row">			
		<div class="row pb-5">
	      <!-- <center><h3>Your Registration was Successfull!<br>Your Application Number is <span style="color:red;"><?php echo $eprcertification['application_no'] ?></span></h3></center> -->
		  <center><p style="font-size:larger;">Your application for <b><u>EPR Certification</b></u> has been received successfully. <br><br><b>Application Number: <span style="color:red;"><?php echo $eprcertification['application_no'] ?></b></span>
	</p><br>
			<p>Thank you for your application.  We will get back to you as soon as possible.</p>
	</center>	
		</div>
		</div>
	</div>	