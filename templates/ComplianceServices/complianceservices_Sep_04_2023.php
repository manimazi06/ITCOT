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

	<div>
	
  <center  style="color: red; font-size:40px;"><?= $this->Flash->render() ?></center>
	

	</div>

	<div class="toolbar py-5 py-lg-5" id="kt_toolbar">
		<div id="kt_toolbar_container" class="container-xxl d-flex flex-stack flex-wrap">
			<div class="page-title d-flex flex-column me-3">
				<h1 class="d-flex text-dark fw-bold my-1 fs-3"> Compliance Services</h1>
				<ul class="breadcrumb breadcrumb-dot fw-semibold text-gray-600 fs-7 my-1">
					<li class="breadcrumb-item text-gray-600">
						<a class="text-gray-600" href="<?php echo $this->Url->build(['controller' => 'Pages', 'action' => 'home']); ?>">Home</a>
					</li>
					<li class="breadcrumb-item text-gray-600">
						<a class="text-gray-600" href="<?php echo $this->Url->build(['controller' => 'Pages', 'action' => 'digitallibrary']); ?>">Compliance Services</a>
					</li>
					<!-- <li class="breadcrumb-item text-gray-500">Compliance Services</li> -->
				</ul>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12">

				<div class="fw-semibold">
					<h4 class="text-gray-900 fw-bold text-start py-5" style="font-size: 1.5rem !important;">Compliance Services : Approvals/Clearances</h4>
				</div>
				<div class="text-gray-700 fs-4 fw-semibold opacity-100" style="padding-bottom: 50px;">
					ITCOT has excellent credentials in providing escort assistance for obtaining statutory approvals/clearances, availing grants/incentives for all type of projects. ITCOT is also better placed in obtaining land ceiling permission, land conversion and land exchange from concerned Government Departments. Its comprehensive understanding of rules & regulations, procedures and well developed network with Government agencies are its major strengths.</div>
			</div>
		</div>
		<div class="row pb-5">
			<div class="col-lg-10 col-md-10 col-sm-12 offset-lg-1 offset-md-1">
				<!--begin::Notice-->
				<div class=" notice  bg-light-primary rounded border-primary border border-dashed rounded-3 p-6" style="background: #edf0ff !important;border-color:#050140 !important;" style="position: relative; z-index: 1000;">




					<div class="press-content2">

						<div class="content-space row ">
							<div class="col-lg-12 col-md-12 col-sm-12">
								<div class="uniongov-content text-start">
									<div class="fw-semibold">
										<h4 class="text-gray-900 fw-bold text-center py-1" style="font-size: 1.5rem !important;margin-top:-10px">Basic Details of the Project</h4>
									</div>
									<?php echo $this->Form->create(null, ['id' => 'FormID', 'class' => '', "autocomplete" => "off", 'enctype' => 'multipart/form-data']); ?>
									<div class="row ">
										<div class="col-lg-3 col-md-3 col-sm-12 mt-5 ">
											<div class="list1-head">
												<label for="name" class="form-label text-dark">Name</label>
												<?php echo $this->Form->control('name', ['label' => false, 'class' => 'form-control name', 'type' => 'text', 'minlength' => '1', 'maxlength' => '25', 'onkeypress' => "return AvoidSpace(this.value)", 'placeholder' => 'Name', 'required']); ?>
											</div>
										</div>
										<div class="col-lg-3 col-md-3 col-sm-12 mt-5 ">
											<div class="list1-head">
												<label for="name" class="form-label text-dark">Mobile</label><span style="color: black;">(+91)</span>
												<?php echo $this->Form->control('mobile_no', ['label' => false, 'class' => 'form-control num', 'minlength' => "1", "maxlength" => "12",  'type' => 'text', 'onclick' => "ValidateMobileNumber()", 'placeholder' => 'Mobile No', 'required']); ?>
												<span id="lblError" class="error"></span>
											</div>
										</div>
										<div class="col-lg-3 col-md-3 col-sm-12 mt-5 ">
											<div class="list1-head">
												<label for="name" class="form-label text-dark">Email</label>
												<?php echo $this->Form->control('email', ['label' => false, 'class' => 'form-control', 'type' => 'email', 'placeholder' => 'Email', 'required']); ?>
												<span id="lblError_1" class="error"></span>

											</div>
										</div>
										<div class="col-lg-3 col-md-3 col-sm-12 mt-5 ">
											<div class="list1-head">
												<label for="name" class="form-label text-dark">Name of the Project</label>
												<?php echo $this->Form->control('project_name', ['label' => false, 'class' => 'form-control name', 'type' => 'text', 'minlength' => '1', 'maxlength' => '25', 'placeholder' => 'Project name', 'onkeypress' => "return AvoidSpace(this.value)", 'required']); ?>


											</div>
										</div>
										<div class="col-lg-3 col-md-3 col-sm-12 mt-5 ">
											<div class="list1-head">
												<label for="name" class="form-label text-dark">Project Location
												</label>
												<?php echo $this->Form->control('project_loc', ['label' => false, 'class' => 'form-control name', 'type' => 'text', 'minlength' => '1', 'maxlength' => '25', 'placeholder' => 'Project location', 'onkeypress' => "return AvoidSpace(this.value)", 'required']); ?>


											</div>
										</div>

										<div class="col-lg-3 col-md-3 col-sm-12 mt-5 ">
											<div class="list1-head">
												<label for="name" class="form-label text-dark">State
												</label>
												<?php echo $this->Form->control('state_id', ['class' => 'form-select', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'disabled' => 'true', 'empty' => 'Tamil Nadu']); ?>
												<?php echo $this->Form->control('state_id', ['class' => 'form-select', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'type' => 'hidden', 'empty' => 'Tamil Nadu']); ?>



											</div>
										</div>
										<div class="col-lg-3 col-md-3 col-sm-12 mt-5 ">
											<div class="list1-head">
												<label for="name" class="form-label text-dark">District
												</label>
												<?php echo $this->Form->control('district_id', ['class' => 'form-select', 'templates' => ['inputContainer' => '{{content}}'], 'options' => $district, 'label' => false, 'error' => false, 'empty' => 'Select District']); ?>



											</div>
										</div>

										<div class="col-lg-3 col-md-3 col-sm-12 mt-5 ">
											<div class="list1-head">
												<label for="name" class="form-label text-dark">Pincode
												</label>
												<?php echo $this->Form->control('pincode', ['label' => false, 'class' => 'form-control num', 'type' => 'text', 'maxlength' => 6, 'placeholder' => 'Pincode', 'required']); ?>


											</div>
										</div>

										<div class="col-lg-3 col-md-3 col-sm-12 mt-5 ">

											<label for="name" class="form-label text-dark">Land Area </label>
											<div class="input-group mb-3">
												<input type="text" class="form-control num" aria-label="Text input with dropdown button" name="landarea" placeholder='Land area' style="width:100px;">

												<?php echo $this->Form->control('land_unit', ['class' => 'form-select', 'templates' => ['inputContainer' => '{{content}}'], 'options' => $land_unit, 'label' => false, 'error' => false, 'empty' => 'Units']); ?>
												<!-- <ul class="dropdown-menu dropdown-menu-end"> -->
												<!-- <li><a class="dropdown-item" href="#">Sq ft</a></li>
													<li><a class="dropdown-item" href="#">sq m</a></li>
													<li><a class="dropdown-item" href="#">Acre</a></li>
													<li><a class="dropdown-item" href="#">Hectare</a></li>
													<li><a class="dropdown-item" href="#">kVA/hp</a></li> -->

												<!-- </ul> -->
											</div>
											<!-- <?php echo $this->Form->control('landarea', ['label' => false, 'class' => 'form-control num', 'type' => 'text', 'minlength' => '1', 'maxlength' => '25', 'onkeypress' => "return AvoidSpace(this.value)", 'required']); ?> -->

										</div>
										<div class="col-lg-3 col-md-3 col-sm-12 mt-5 ">
											<div class="list1-head">
												<label for="name" class="form-label text-dark">Total Build up area
												</label>
												<!-- <?php echo $this->Form->control('total_buildup_area', ['label' => false, 'class' => 'form-control num', 'type' => 'text', 'minlength' => '1', 'maxlength' => '25', 'onkeypress' => "return AvoidSpace(this.value)", 'required']); ?> -->
												<div class="input-group mb-3">
													<input type="text" class="form-control num" aria-label="Text input with dropdown button" name="total_buildup_area" placeholder="Total Build area" style="width:100px;">
													<?php echo $this->Form->control('totalarea_unit', ['class' => 'form-select', 'templates' => ['inputContainer' => '{{content}}'], 'options' => $total_unit, 'label' => false, 'error' => false, 'empty' => 'Units']); ?>

													<!-- <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false" style="border: 1px solid #d5d5d5;background: white;">Units</button> -->
													<!-- <ul class="dropdown-menu dropdown-menu-end">
														<li><a class="dropdown-item" href="#">Sq ft</a></li>
														<li><a class="dropdown-item" href="#">sq m</a></li>
														<li><a class="dropdown-item" href="#">Acre</a></li>
														<li><a class="dropdown-item" href="#">Hectare</a></li>
														<li><a class="dropdown-item" href="#">kVA/hp</a></li>
													</ul> -->
												</div>

											</div>
										</div>
										<div class="col-lg-3 col-md-3 col-sm-12 mt-5 ">
											<div class="list1-head">
												<label for="name" class="form-label text-dark"> No.of Employees
												</label>
												<?php echo $this->Form->control('no_employees', ['label' => false, 'class' => 'form-control num', 'type' => 'text', 'minlength' => '1', 'maxlength' => '25', 'placeholder' => 'No of employees', 'onkeypress' => "return AvoidSpace(this.value)", 'required']); ?>


											</div>
										</div>
										<div class="col-lg-3 col-md-3 col-sm-12 mt-5 ">
											<div class="list1-head">
												<label for="name" class="form-label text-dark">Power Requirement

												</label>
												<!-- <?php echo $this->Form->control('power_req', ['label' => false, 'class' => 'form-control num', 'type' => 'text', 'minlength' => '1', 'maxlength' => '25', 'placeholder' => 'Power Requirement', 'onkeypress' => "return AvoidSpace(this.value)", 'required']); ?> -->
												<div class="input-group mb-3">
													<input type="text" class="form-control num" aria-label="Text input with dropdown button" name="power_req" placeholder='Power Requirement' style="width:100px;">
													<?php echo $this->Form->control('powerreq_unit', ['class' => 'form-select', 'templates' => ['inputContainer' => '{{content}}'], 'options' => $power_unit, 'label' => false, 'error' => false, 'empty' => 'Units']); ?>
													<!-- <ul class="dropdown-menu dropdown-menu-end">
														<li><a class="dropdown-item" href="#">Sq ft</a></li>
														<li><a class="dropdown-item" href="#">sq m</a></li>
														<li><a class="dropdown-item" href="#">Acre</a></li>
														<li><a class="dropdown-item" href="#">Hectare</a></li>
														<li><a class="dropdown-item" href="#">kVA/hp</a></li>
													</ul> -->
												</div>

											</div>
										</div>

										<div class="col-lg-3 col-md-3 col-sm-12 mt-5 ">
											<div class="list1-head">
												<label for="name" class="form-label text-dark">Project Cost

												</label>
												<?php echo $this->Form->control('project_cost', ['label' => false, 'class' => 'form-control num', 'type' => 'text','data-type'=>'currency', 'placeholder' => 'Project Cost', 'minlength' => '1', 'maxlength' => '25', 'onkeypress' => "return AvoidSpace(this.value)", 'required']); ?>


											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12 mt-5 ">
											<div class="list1-head">
												<label for="name" class="form-label text-dark"> Services required for obtaining approvals from
												</label>
												<!-- <?php echo $this->Form->control('service_compliance_id', ['class' => 'form-select', 'templates' => ['inputContainer' => '{{content}}'], 'options' => $serviceCompliances, 'label' => false, 'error' => false, 'empty' => 'Select Service']); ?> -->

												<table>
													<?php
													foreach ($serviceCompliances as $key => $value) {
														// echo '<pre>';
														// print_r($value);
														// exit();
													?>
														<tr>
															<td>
																<input type="checkbox" name="arr[]" id="data" onclick="checkbox_others(this.value)" value="<?php echo $key ? $key :$value ?>">
															</td>
															<td style="font-weight:normal !important;"><?php echo $value; ?></td>

															<td>
																<?php //echo $this->Form->control('textfield', ['label' => false, 'class' => 'form-control','id'=>'textfield', 'type' => 'textarea','style'=>'display:none','rows'=>5]); 
																?>
															</td>

														</tr>
													<?php

													} ?>
												
												</table>
												<div class="col-md-6 checking">
														<td>
															<input type="text" class="form-control" name="others" id="others" style="display:none">
														</td>
													</div>
											</div>
										</div>

										<div class="col-lg-8 col-md-8 col-sm-12 offset-lg-2 offset-md-2 mt-5 ">
											<div class="list1-head">
												<label for="name" class="form-label text-dark"> Product Details
												</label>

												<div class="table-responsive text-center">
													<table class="table table-bordered">
														<thead class="">
															<tr class="text-center">
																<th> S.No </th>
																<th> Products</th>
																<th>Capacity</th>
																<th>Units</th>

																<th> <button type="button" class="btn btn-success btn-sm" onclick="complainceadding();">Add</button>
																	<!-- <i class="fa fa-plus-cir"></i>&nbsp; -->
																</th>
															</tr>
														</thead>
														<tbody class="comadding">

															<tr class="complaince_row_in_post">

																<td align="center">1.</td>
																<td>
																	<?php echo $this->Form->control('complaince.0.product_name', ['class' => 'form-control name', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'placeholder' => 'Enter Products', 'empty' => 'Select', 'data-rule-required' => true, 'data-msg-required' => 'Enter Products']); ?>
																	<!-- <?php echo $this->Form->control('complaince.0.complaince_id', ['label' => false, 'error' => false, 'empty' => 'Select', 'type' => 'hidden', 'value' => 1]); ?> -->

																</td>
																<td><?php echo $this->Form->control('complaince.0.capacity', ['class' => 'form-control amount', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'placeholder' => 'Capacity', 'data-rule-required' => true, 'data-msg-required' => 'Enter Capacity', 'onkeypress' => "return AvoidSpace(this.value)", 'data-msg-required' => 'Enter Capacity']); ?>
																</td>
																<td>
																	<?php echo $this->Form->control('complaince.0.unit_id', ['class' => 'form-select', 'templates' => ['inputContainer' => '{{content}}'], 'label' => false, 'error' => false, 'empty' => 'Select Unit', 'options' => $units, 'data-rule-required' => true,  'data-msg-required' => 'Select Unit']); ?>
																</td>


																<td>

																</td>
																<!--td>
											<button type="button" class="btn btn-success" onclick="javascript:location.reload();">Reset</button>
											</td-->



															</tr>

														</tbody>
													</table>
												</div>

											</div>
										</div>




										<div class="col-lg-6 col-md-6 col-sm-12 offset-lg-3 offset-md-3  mt-5   ">
											<div class="list1-head text-center">

												<label for="" class="form-label text-dark ">Message (If any)</label>
												<?php echo $this->Form->control('description', ['label' => false, 'class' => 'form-control', 'type' => 'textarea', 'rows' => 3]); ?>


											</div>
										</div>
										<div class="col-lg-12 col-md-12 col-sm-12 mt-5 text-center">


											<button class="btn btn-sm btn-primary" type="submit">
												Submit
											</button>
											<!-- <button class="btn btn-sm btn-danger">
													Reset
												</button> -->

										</div>


									</div>
									<?php echo $this->Form->End(); ?>

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

	<!-- </div>
	</div>
	</div>
	</div>
	</div>
	</div>
	</div>
	</div> -->

	<script>
		function checkbox_others(val) {
				//alert('val');

					// 			if ($('#data').attr('checked')) {
					//   $("#others").show();
					// } else {
					//   $("#others").hide();
					// }



			if (val == 11) {

				$('#others').show();

			}else
				{
					$('#others').hide();
				}
				
			
			
			// else
			// {
			// 	$('#others').hide();
			// }
		}

		function ValidateDOB(date) {

			// 		var today = '01-01-2023';
			// var age = today.getFullYear() - year;
			// $("#dob1").show();

			var today = $("#dob1").val();
			//alert(today);

			var slice_today = today.slice(6, 10);
			// alert(slice_today);

			//var date=<?php date('d-m-Y', strtotime($this->request->getData('dob'))); ?>
			var date = $("#dob").val();
			//alert(date);

			var slice_rqt = date.slice(6, 10);
			//alert(slice_rqt);
			var diff = slice_today - slice_rqt;
			//alert('Your age is:' + diff);

			if (diff < 15) {

				//alert('You can register');
				alert('You are not eligible to register, above 15yrs is eligible to apply..');

				$("#dob").val('');
			}

			exit();




		}
		$("#FormID").validate({
			rules: {
				'project_name': {
					required: true
				},
				'name': {
					required: true
				},
				'project_loc': {
					required: true
				},
				'district_id': {
					required: true
				},
				'landarea': {
					required: true
				},
				'total_buildup_area': {
					required: true
				},
				'no_employees': {
					required: true

				},
				'power_req': {
					required: true

				},
				'project_cost': {
					required: true

				},
				'service_compliance_id': {
					required: true

				},
				'mobile_no': {
					required: true

				},
				'email': {
					required: true,
					email: true,

				}
			},

			messages: {

				'project_name': {
					required: "Enter Project Name"
				},
				'name': {
					required: "Enter Name"
				},
				'project_loc': {
					required: "Enter Project location"
				},
				'district_id': {
					required: "Select District"
				},
				'landarea': {
					required: "Enter Land area"
				},
				'total_buildup_area': {
					required: "Enter Total Buildup Area"
				},
				'no_employees': {
					required: "Enter No of employees"
				},
				'power_req': {
					required: "Enter Power Requirement"
				},
				'project_cost': {
					required: "Enter Project cost"
				},
				'service_compliance_id': {
					required: "Select Service"
				},
				'mobile_no': {
					required: "Enter Mobile No"
				},
				'email': {
					required: "Enter Email",
					email: 'Enter Valid Email ID'
				}
			},


			submitHandler: function(form) {


				form.submit();

				$(".btn").prop('disabled', true);
			}
		});


		// 	$(document).ready(function(){
		//   $("form").submit(function(){
		// 	var name=$("#name").val();

		// name=name.trim();
		//     alert(name);
		//   });
		// });

		//function ValidateMobileNumber() {
		//$("button").submit(function(){



		//Dropdown
		// $("#data").click(function() {
		// 			//var val;
		// 			var val=$('#data').val();
		// 	alert(val);
		// 	//$('#textfield').show();


		// });


		$(document).ready(function() {


			$("#submit").click(function() {
				// alert('hi');
				var mbl = $("#mobile-no").val();
				var email = $("#email").val();
				//alert(typeof(email));
				//document.write(email);
				var lblError = document.getElementById("lblError");
				lblError.innerHTML = "";
				var expr = /^(0|91)?[6-9][0-9]{9}$/;
				let expr_1 = email + ".com";
				//document.write(expr_1);
				//alert(typeof(expr_1));	
				if (!expr.test(mbl)) {
					lblError.innerHTML = "Invalid Mobile Number.";
					alert('Invalid mobile No');
					$("#mobile-no").val('').trigger('change');
					//$("#submit").prop('disabled', true);
					//return false;


				} else {
					mbl.innerHTML = "Valid mobile No";
					alert('Valid mobile no');
					//return true;


				}







				//     if (email !== expr_1) {
				//    // lblError_1.innerHTML = "Invalid Email ID";
				// 	alert('Invalid Email ID, include .com');
				// 	$("#email").val('').trigger('change');

				// 	}else
				// 	{

				// 	alert('Valid Email ID');

				// 	}
			});
		});
		// }




		$(document).ready(function() {

			$("#email").click(function() {


				alert('Enter Valid Email ID, eg.abc@sample.com');
				// 	var email=$("#email").val();
				// 	let expr_1 = email + ".com";

				// 	alert(email);
				// 	alert(expr_1);
				// 			    if (email != expr_1) {
				//            // lblError_1.innerHTML = "Invalid Email ID";
				// 			alert('Invalid Email ID, include .com');
				// 			$("#email").val('').trigger('change');

				// 			}elseif(email == expr_1)
				// 			{

				// 			alert('Valid Email ID');

				// 			}

			});
		});

		function AvoidSpace(val) {
			// if (event.keyCode == 32) {
			//     event.returnValue = false;
			//     return false;
			// }

			const input = document.querySelector('.name');
			input.addEventListener('keyup', () => {
				input.value = input.value.replace(/  +/g, ' ');
			});
		}



		function complainceadding() {
			//var type
			var j = ($('.complaince_row_in_post').length);
			var row_no = j - 1;
			var products = $("#complaince-" + row_no + "-product-name").val();
			//alert(j);
			if (products != '') {
				$.ajax({
					async: true,
					dataType: "html",
					url: '<?php echo $this->Url->webroot; ?>ajaxaddcomplaince/' + j,

					// beforeSend: function(xhr) {
					// xhr.setRequestHeader('X-CSRF-Token', $('[name="_csrfToken"]').val());
					// },
					success: function(data, textStatus) { //alert(data)
						$('.comadding').append(data);
					}
				});
			} else if (products == '') {
				alert("Select Products");
				$("#complaince-" + row_no + "-product-name").focus();
			}
		}


		// Jquery Dependency

$("input[data-type='currency']").on({
    keyup: function() {
      formatCurrency($(this));
    },
    blur: function() { 
      formatCurrency($(this), "blur");
    }
});


function formatNumber(n) {
  // format number 1000000 to 1,234,567
 // return n.replace(/\D/g, "").replace(/\B(?=(\d{3})+(?!\d))/g, ",")
  return (isNaN(parseInt(n))) ?  0 : /*'₹' + */ parseInt(n).toLocaleString('en-IN')
}


function formatCurrency(input, blur) {
  // appends $ to value, validates decimal side
  // and puts cursor back in right position.
  
  // get input value
  var input_val = input.val();
  
  // don't validate empty input
  if (input_val === "") { return; }
  
  // original length
  var original_len = input_val.length;

  // initial caret position 
  var caret_pos = input.prop("selectionStart");
    
  // check for decimal
  if (input_val.indexOf(".") >= 0) {

    // get position of first decimal
    // this prevents multiple decimals from
    // being entered
    var decimal_pos = input_val.indexOf(".");

    // split number by decimal point
    var left_side = input_val.substring(0, decimal_pos);
    var right_side = input_val.substring(decimal_pos);

    // add commas to left side of number
    left_side = formatNumber(left_side);

    // validate right side
    right_side = formatNumber(right_side);
    
    // On blur make sure 2 numbers after decimal
    if (blur === "blur") {
      right_side += "00";
    }
    
    // Limit decimal to only 2 digits
    right_side = right_side.substring(0, 2);

    // join number by .
    input_val = '₹' +left_side + "." + right_side;

  } else {
    // no decimal entered
    // add commas to number
    // remove all non-digits
    input_val = formatNumber(input_val);
    input_val = '₹' + input_val;
    
    // final formatting
    if (blur === "blur") {
      input_val += "";
    }
  }
  
  // send updated string to input
  input.val(input_val);

  // put caret back in the right position
  var updated_len = input_val.length;
  caret_pos = updated_len - original_len + caret_pos;
  input[0].setSelectionRange(caret_pos, caret_pos);
}



	</script>