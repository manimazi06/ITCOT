<style>
	.step-footer {
		text-align: center !important;
	}
</style>
<?php echo $this->Form->create(null, ['id' => 'FormID', 'class' => '', "autocomplete" => "off", 'enctype' => 'multipart/form-data']); ?>
<!--begin::Toolbar-->
<div oncontextmenu="return false">

	<div class="toolbar py-5 py-lg-5" id="kt_toolbar">
		<div id="kt_toolbar_container" class="container-xxl d-flex flex-stack flex-wrap">
			<!--begin::Page title-->
			<div class="page-title d-flex flex-column me-3">
				<h1 class="d-flex text-dark fw-bold my-1 fs-3">Digi-Library Subcription</h1>
				<ul class="breadcrumb breadcrumb-dot fw-semibold text-gray-600 fs-7 my-1">
					<li class="breadcrumb-item text-gray-600">
						<a class="text-gray-600" href="<?php echo $this->Url->build(['controller' => 'Pages', 'action' => 'home']); ?>">Home</a>
					</li>
					<li class="breadcrumb-item text-gray-600">
						<a class="text-gray-600" href="<?php echo $this->Url->build(['controller' => 'Pages', 'action' => 'digitallibrary']); ?>">Digital-Library</a>
					</li>
					<li class="breadcrumb-item text-gray-500">Subcription</li>
				</ul>
			</div>
		</div>
	</div>
	<div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container-xxl">
		<!--begin::Post-->
		<div class="content flex-row-fluid" id="kt_content">
			<!--begin::Layout-->
			<div class="d-flex flex-column flex-lg-row">
				<!--begin::Content-->
				<div class="flex-lg-row-fluid me-lg-15 order-2 order-lg-1 mb-10 mb-lg-0">
					<!--begin::Form-->
					<form class="form" action="#" id="kt_subscriptions_create_new">
						<!--begin::Customer-->
						<div class="card card-flush pt-3 mb-5 mb-lg-10">
							<!--begin::Card header-->
							<div class="card-header">
								<!--begin::Card title-->
								<div class="card-title">
									<h2 class="fw-bold">Subcription</h2>
								</div>
								<!--begin::Card title-->
							</div>
							<div class="card-body pt-0">

								<div class="container">
									<div class="row">
										<div class="col-sm-8 col-md-12">
											<table class="table table-bordered responsive">
												<tbody class="referenceadding">
													<tr>
														<td>Payment Amount : </td>
														<td>Rs.&nbsp;1000</td>
													</tr>
													<tr>
														<td>Name : </td>
														<td><?php echo $user['name']; ?></td>
													</tr>
													<tr>
														<td>Mobile : </td>
														<td><?php echo $user['mobile_no']; ?></td>
													</tr>
													<tr>
														<td>Email: </td>
														<td><?php echo $user['email']; ?></td>
													</tr>
												</tbody>
											</table>
										</div>
									</div> <br> <br>
									<div class="row d-flex justify-content-start align-items-center">
										<!--div class="notice col-lg-6 col-sm-12 col-md-6 d-flex bg-light-primary rounded border-primary border border-dashed rounded-3 p-6 mt-4">	
							   <?php  /*if($user['digi_library_flag'] != 1){ ?>
							 <div class="row">         
								<div class="col-sm-8 col-md-12">
								<input type="checkbox" id="terms" name="terms" value = "1">&nbsp;&nbsp;By submitting this form, you have read and agree to the <a style="color:blue;cursor: pointer;text-decoration: underline;" onclick="gettermsandcondtitions()">Terms and Conditions</a>
							  </div>
							 </div> 
							   <?php }*/ ?>
						  </div-->
										<div class="col-lg-6 col-md-6 col-sm-12 d-flex justify-content-start align-items-center mt-5">
											<?php if ($user['digi_library_flag'] != 1) { ?>
												<div class="step-footer">
													<button class="btn " type="submit" style="border-radius:5px;color:white;font-size:14px;background: #eba939 !important;">Make Payment</button>
												</div>
											<?php } ?>
										</div>
										<br><br>
									</div>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>


<script>
	$("#FormID").validate({
		rules: {
			'unit_name': {
				required: true
			}
		},
		messages: {
			'unit_name': {
				required: "Enter Unit / Entity Name"
			}
		},
		submitHandler: function(form) {
			form.submit();
			$(".btn").prop('disabled', true);
			/*isChecked = $('#terms').is(':checked');			
			if(isChecked === true){		
			    form.submit();
              $(".btn").prop('disabled', true);
			}else{
				alert('Please Select Terms and condition');
			}*/
		}
	});


	/* function gettermsandcondtitions() {
        $(".add-unsent-form").html("<span class='text-center'>Fetching data!!!</span>");
        $("#modal-add-unsent").modal('show');
        $.ajax({
            async: true,
            dataType: "html",  
		    url: '<?php echo $this->Url->webroot; ?>../termsandconditions',

            success: function(data, textStatus) {
                // alert(data);
                $(".add-unsent-form").html(data);
            }
        });
    }*/

	// setInterval(displayHello, 1000);

	// function displayHello() {

	// 	var pathname = window.location.pathname
	//   //document.getElementById("demo").innerHTML += "Hello";

	//   echo '<pre>';

	// }
	// 
</script>

</script>