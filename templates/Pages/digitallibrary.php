  <style>
  	.login-page {
  		width: 360px;
  		padding: 8% 0 0;
  		margin: auto;
  	}

  	.form {
  		/* position: relative; */
  		/* z-index: 1; */
  		background: #ffffff;
  		max-width: 355px;
  		margin: 0 auto 100px;
  		padding: 40px;
  		text-align: center;
  		/* box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24); */
  	}

  	.form input {
  		font-family: "lato", sans-serif;
  		outline: 0;
  		background: #f2f2f2;
  		width: 100%;
  		border: 0;
  		margin: 0 0 15px;
  		padding: 15px;
  		box-sizing: border-box;
  		font-size: 14px;
  	}

  	.form button {
  		font-family: "lato", sans-serif;
  		text-transform: uppercase;
  		outline: 0;
  		background: #093875;
  		width: 100%;
  		border: 0;
  		padding: 15px;
  		color: #ffffff;
  		font-size: 14px;
  		-webkit-transition: all 0.3 ease;
  		transition: all 0.3 ease;
  		cursor: pointer;
  	}

  	.form button:hover,
  	.form button:active,
  	.form button:focus {
  		background: #87b4fc;
  	}

  	.form .message {
  		margin: 15px 0 0;
  		color: #b3b3b3;
  		font-size: 12px;
  	}

  	.form .message a {
  		color: #093875;
  		text-decoration: none;
  	}

  	.form .register-form {
  		display: none;
  	}

  	/* .container {
  position: relative;
  z-index: 1;
  max-width: 300px;
  margin: 0 auto;
}
.container:before,
.container:after {
  content: "";
  display: block;
  clear: both;
}
.container .info {
  margin: 50px auto;
  text-align: center;
}
.container .info h1 {
  margin: 0 0 15px;
  padding: 0;
  font-size: 36px;
  font-weight: 300;
  color: #1a1a1a;
}
.container .info span {
  color: #4d4d4d;
  font-size: 12px;
}
.container .info span a {
  color: #000000;
  text-decoration: none;
}
.container .info span .fa {
  color: #ef3b3a;
} */

  	/* Otp */

  	.bgWhite {
  		background: white;
  		box-shadow: 0px 3px 6px 0px #cacaca;
  	}

  	.otp-title {
  		font-weight: 600;
  		margin-top: 20px;
  		font-size: 24px;
  	}

  	.customBtn {
  		border-radius: 0px;
  		padding: 10px;
  		background-color: #093875;
  		color: white;
  	}

  	.customBtn:hover {
  		background: #87b4fc;
  	}

  	.otp-form input {
  		margin: 0px;
  		padding: 0px;
  		display: inline-block;
  		width: 50px;
  		height: 50px;
  		text-align: center;
  	}

  	.table {

  		border-collapse: inherit !important;

  	}

  	<?php if ($user['digi_library_flag'] == 0) { ?>.union {
  		pointer-events: none;
  	}

  	.state {
  		pointer-events: none;
  	}

  	.projectprofile {
  		pointer-events: none;
  	}

  	<?php } ?>
  </style>


  <!--begin::Toolbar-->
  <div oncontextmenu="return false">
  	<div class="toolbar py-5 py-lg-5" id="kt_toolbar">
  		<div id="kt_toolbar_container" class="container-xxl d-flex flex-stack flex-wrap">
  			<div class="page-title d-flex flex-column me-3">
  				<h1 class="d-flex text-dark fw-bold my-1 fs-3">Digital-Library</h1>
  				<ul class="breadcrumb breadcrumb-dot fw-semibold text-gray-600 fs-7 my-1">
  					<li class="breadcrumb-item text-gray-600">
  						<a class="text-gray-600" href="<?php echo $this->Url->build(['controller' => 'Pages', 'action' => 'home']); ?>">Home</a>
  					</li>
  					<li class="breadcrumb-item text-gray-600">Digital-Library</li>
  				</ul>
  			</div>
  		</div>
  	</div>
  	<div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container-xxl mt-5">
  		<!--begin::Post-->
  		<div class="content flex-row-fluid" id="kt_content">


  			<div class="row gy-0 gx-10">
  				<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12  union">
  					<!--begin::Mixed Widget 16-->
  					<div class="card card-xl-stretch bg-body border-0">
  						<!--begin::Body-->
  						<div class="card-body pt-5 mb-xl-9 position-relative">
  							<!--begin::Heading-->
  							<div class="d-flex flex-stack justify-content-center">
  								<!--begin::Title-->
  								<h4 class="fw-bold text-gray-800 m-0 ">Union Government Schemes </h4>
  								<!--end::Title-->
  							</div>
  							<!--end::Heading-->
  							<div>


  								<a href="<?php echo $this->Url->build(['controller' => 'Pages', 'action' => 'unionschemes', $schemeType[0]['id']]); ?>">
  									<!-- <h6>Union Government  Schemes </h6> -->
  									<fieldset style="border-radius:10px; margin-top:1%;padding:20px;">
  										<img class="digi-img img-fluid" style="border:1px solid #dedede;border-radius:10px;padding:30px;" src="<?php echo $this->Url->build('/'); ?>assets/image/uniongovern.jpg" alt="library-img" width="400px" />
  									</fieldset>
  								</a>

  							</div>

  						</div>
  						<!--end::Body-->
  					</div>
  					<!--end::Mixed Widget 16-->
  				</div>



  				<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 state">
  					<!--begin::Mixed Widget 16-->
  					<div class="card card-xl-stretch bg-body border-0">
  						<!--begin::Body-->
  						<div class="card-body pt-5 mb-xl-9 position-relative">
  							<!--begin::Heading-->
  							<div class="d-flex flex-stack justify-content-center">
  								<!--begin::Title-->
  								<h4 class="fw-bold text-gray-800 m-0 ">State Government Schemes </h4>
  								<!--end::Title-->
  							</div>
  							<!--end::Heading-->
  							<div>


  								<a href="<?php echo $this->Url->build(['controller' => 'Pages', 'action' => 'stateschemes', $schemeType[1]['id']]); ?>">
  									<!-- <h6>State Government Schemes </h6>			    -->
  									<fieldset style=" margin-top:1%;padding:15px;">
  										<img class="digi-img img-fluid" style="border-radius:10px;" src="<?php echo $this->Url->build('/'); ?>assets/image/state-gov-schemes.jpg" alt="library-img" width="400px" />
  									</fieldset>
  								</a>
  							</div>

  						</div>
  						<!--end::Body-->
  					</div>
  					<!--end::Mixed Widget 16-->
  				</div>

  				<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 projectprofile">
  					<!--begin::Mixed Widget 16-->
  					<div class="card card-xl-stretch bg-body border-0">
  						<!--begin::Body-->
  						<div class="card-body pt-5 mb-xl-9 position-relative">
  							<!--begin::Heading-->
  							<div class="d-flex flex-stack justify-content-center">
  								<!--begin::Title-->
  								<h4 class="fw-bold text-gray-800 m-0 ">Project Profile</h4>
  								<!--end::Title-->
  							</div>
  							<!--end::Heading-->
  							<div>


  								<a href="<?php echo $this->Url->build(['controller' => 'Pages', 'action' => 'projectprofile']); ?>">
  									<!-- <h6>Project Profiles</h6>			    -->
  									<fieldset style="margin-top:1%;padding:15px;">
  										<img class="digi-img img-fluid" style="border-radius:10px;" src="<?php echo $this->Url->build('/'); ?>assets/image/project-report-itcot.jpg" alt="library-img" width="400px" />
  									</fieldset>
  								</a>
  							</div>

  						</div>
  						<!--end::Body-->
  					</div>
  					<!--end::Mixed Widget 16-->
  				</div>

  				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 pb-5 ">
  					<div class="row d-flex justify-content-center">


  						<!--begin::Heading-->
  						<div class="notice col-lg-6 col-md-6 col-sm-12  bg-light-primary rounded border-primary border border-dashed rounded-3 p-6 text-center">

  							<!--begin::Title-->
  							<?php if ($user['digi_library_flag'] == 0) { ?>
  								<h3 class="mt-2">Pay Rs.1000/- and get subscribed</h3>
  								<p>
  									<input class="mt-2" type="checkbox" id="terms"> &nbsp; I have read and agree to the <a style="color:blue;cursor: pointer;text-decoration: underline;" onclick="gettermsandcondtitions()">Terms and Conditions</a>
  								</p>
  								<button class="btn btn-light-primary" onclick="checkboxfun()" style="border-radius:5px;color:white;padding:10px;">SUBSCRIBE NOW</button>
  							<?php } else if ($user['digi_library_flag'] == 1) { ?>
  								<table class="table table-bordered responsive" border="1">
  									<tbody class="referenceadding">
  										<tr class="text-center">
  											<td colspan="2"><u>Registration-Digital Library</u></td>
  										</tr>
  										<tr>
  											<td>Payment Status : </td>
  											<td><span style="color:green"><b>Success</b></span></td>
  										</tr>
  										<tr>
  											<td>Registration No : </td>
  											<td><?php echo $digiregistration['reg_no']; ?></td>
  										</tr>
  									</tbody>
  								</table>
  								<div class="mb-3 mt-3 text-left">
  									<?php echo $this->Html->link(('<i class="fas fa-download"></i>&nbsp;Download Receipt'), ['action' => 'receiptdownload'], ['escape' => false, 'class' => 'btn btn-info rounded-pill px-4 waves-effect waves-light btn-sm',]); ?>
  								</div>
  							<?php } ?>
  							<!--end::Title-->
  						</div>
  					</div>
  				</div>
  			</div>
  			<!--end::Row-->
  		</div>
  		<!--end::Container-->
  	</div>
  	<!--end::Toolbar-->



  	<!-- IMGAE CONTENT -->
  	<div class="digi-content">
  		<div class="container">
  			<div class="row ">
  				<div class="col-lg-4 col-md-4 col-sm-4 offset-lg-4 offset-md-4  offset-sm-4  text-center ">
  					<!-- <img class="digi-img img-fluid"  src="<?php echo $this->Url->build('/'); ?>assets/image/digital-lib.png" alt="library-img" width="400px" />  -->
  					<!-- <div class="digi-cnt mt-0" style="padding-bottom: 50px;">        
			   <?php if ($user['digi_library_flag'] == 0) { ?>
			    <p>
			    <input type="checkbox">  &nbsp;  I have read and agree to the terms and conditions
              </p>
              <h4 class="mt-2">Pay Rs.1000/- and get subscribed</h4>
    			<a class="btn btn-primary" style="border-radius:5px;color:white;padding:10px" href="<?php echo $this->Url->build(['controller' => 'Pages', 'action' => 'digitalpayment']); ?>">SUBSCRIBE NOW</a>
			   <?php } else if ($user['digi_library_flag'] == 1) { ?>
  			    <br><br><a class="btn btn-primary" style="border-radius:5px;color:white;font-size:14px;" href="<?php echo $this->Url->build(['controller' => 'Pages', 'action' => 'schemes']); ?>">VIEW &nbsp;&nbsp;<i class="fa fa-chevron-right" aria-hidden="true"></i></a>
			   <?php } ?>           -->
  				</div>
  				<div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
  					<div class="modal-dialog modal-dialog-centered" style="width:360px !important;margin-bottom: 500px !important;">
  						<div class="modal-content">
  							<div class="modal-header">
  								<h1 class="modal-title fs-5" id="exampleModalToggleLabel">Login</h1>
  								<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
  							</div>
  							<div class="modal-body" style="height: 400px !important;margin-top: -20px !important;">
  								<form action="">
  									<div class="login-page">
  										<div class="form" style="margin-left: -16px !important;">;
  											<form class="login-form">
  												<input type="email" placeholder="email" required />
  												<input type="password" placeholder="password" required />
  												<button class="btn" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal">login</button>
  											</form>
  										</div>
  								</form>
  							</div>
  						</div>
  					</div>
  				</div>
  			</div>
  			<div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
  				<div class="modal-dialog modal-dialog-centered" style="width:360px !important;">
  					<div class="modal-content">
  						<div class="modal-header">
  							<h1 class="otp-title modal-title fs-5" style="margin-left: 110px !important;" id="exampleModalToggleLabel2">Verify OTP</h1>
  							<button type="button" class="otp-button btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
  						</div>
  						<div class="modal-body">
  							<form action="" class="otp-form mt-5">
  								<input class="otp" x type="text" oninput="digitValidate(this)" onkeyup="tabChange(1)" maxlength="1" />
  								<input class="otp" type="text" oninput="digitValidate(this)" onkeyup="tabChange(2)" maxlength="1" />
  								<input class="otp" type="text" oninput="digitValidate(this)" onkeyup="tabChange(3)" maxlength="1" />
  								<input class="otp" type="text" oninput="digitValidate(this)" onkeyup="tabChange(4)" maxlength="1" />
  								<p id="Timer" style="margin-top: 20px;"></p>
  							</form>
  						</div>
  						<div class="modal-footer">
  							<button class="btn btn-block mt-4 mb-4 customBtn" data-bs-target="#exampleModalToggle3" data-bs-toggle="modal" style="width: 500px;margin-top:-5px !important">Verify</button>
  							<!-- </a> -->
  						</div>
  					</div>
  				</div>
  			</div>
  			<div class="modal fade" id="exampleModalToggle3" aria-hidden="true" aria-labelledby="exampleModalToggleLabel3" tabindex="-1">
  				<div class="modal-dialog modal-dialog-centered">
  					<div class="modal-content">
  						<div class="modal-header">
  							<h1 class="modal-title fs-5" id="exampleModalToggleLabel3">Successfully Registered</h1>
  							<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
  						</div>
  						<div class="modal-body">
  							<h4 class="bg bg-success" style=" border-radius:20px;font-size:15px;padding:20px"> LOGIN SUCCESSFULLY</h4>
  						</div>
  						<div class="modal-footer">

  						</div>
  					</div>
  				</div>
  			</div>
  		</div>
  	</div>
  </div>
  </div>
  <div id="modal-add-unsent" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade col-lg-12">
  	<div class="modal-dialog" style="max-width:70%;">
  		<div class="modal-content">
  			<div class="modal-header">
  				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
  			</div>
  			<div class="modal-body">
  				<div class="add-unsent-form">

  				</div>
  			</div>
  		</div>
  	</div>
  </div>
  <!-- FOOTER -->
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <!-- // login -->
  <script>
  	$(".message a").click(function() {
  		$("form").animate({
  			height: "toggle",
  			opacity: "toggle"
  		}, "slow");
  	});
  </script>
  <!-- otp -->
  <script>
  	$(".subcribe a").unbind('click');

  	function checkboxfun() {
  		//alert('hi');
  		isChecked = $('#terms').is(':checked');
  		if (isChecked === true) {
  			window.location.href = "https://itcot.demodev.in/pages/digitalpayment";
  		} else {
  			//return false;
  			alert('Please Select Terms and condition');

  		}
  	}

  	let digitValidate = function(ele) {
  		console.log(ele.value);
  		ele.value = ele.value.replace(/[^0-9]/g, "");
  	};

  	let tabChange = function(val) {
  		let ele = document.getElementsByClassName("otp");
  		if (ele[val - 1].value != "") {
  			ele[val].focus();
  		} else if (ele[val - 1].value == "") {
  			ele[val - 2].focus();
  		}
  	};
  </script>
  <!-- otp timer -->
  <script>
  	var timeLeft = 30;
  	var elem = document.getElementById("Timer");

  	var timerId = setInterval(countdown, 1000);

  	function countdown() {
  		if (timeLeft == 0) {
  			clearTimeout(timerId);
  			doSomething();

  		} else {
  			elem.innerHTML = timeLeft + " seconds remaining";
  			timeLeft--;

  		}
  	}

  	function gettermsandcondtitions() {
  		$(".add-unsent-form").html("<span class='text-center'>Fetching data!!!</span>");
  		$("#modal-add-unsent").modal('show');
  		$.ajax({
  			async: true,
  			dataType: "html",
  			url: '<?php echo $this->Url->webroot; ?>../projects/termsandconditions',

  			success: function(data, textStatus) {
  				// alert(data);
  				$(".add-unsent-form").html(data);
  			}
  		});
  	}
  </script>
  <!-- password eye -->
  </script>
  <?php include("footer.php"); ?>
  </body>

  </html>