<style>     
.step-footer {
    text-align: center !important;
}
</style>   
<div class="toolbar py-5 py-lg-5" id="kt_toolbar">
						<!--begin::Container-->
						<div id="kt_toolbar_container" class="container-xxl d-flex flex-stack flex-wrap">
							<!--begin::Page title-->
							<div class="page-title d-flex flex-column me-3">
								<!--begin::Title-->
								<h1 class="d-flex text-dark fw-bold my-1 fs-3">Status Check</h1>
								<!--end::Title-->
								<!--begin::Breadcrumb-->
								<ul class="breadcrumb breadcrumb-dot fw-semibold text-gray-600 fs-7 my-1">
									<!--begin::Item-->
									<li class="breadcrumb-item text-gray-600">
										<a href="#" class="text-gray-600 text-hover-primary">Home</a>
									</li>
									<!--end::Item5-->
									<!--begin::Item-->
									<!-- <li class="breadcrumb-item text-gray-600"></li> -->
									<!--end::Item-->
									<!--begin::Item-->
									<li class="breadcrumb-item text-gray-500">Status Check</li>
									<!--end::Item-->
								</ul>  
								<!--end::Breadcrumb-->
							</div>
							<!--end::Page title-->
              
						</div>
						<!--end::Container-->
</div>


<?php echo $this->Form->create($project, ['id' => 'FormID', 'class' => '', "autocomplete" => "off", 'enctype' => 'multipart/form-data']); ?>

<!--begin::Container-->
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
													<h2 class="fw-bold">Status Check</h2>
												</div>
												<!--begin::Card title-->
											</div>
											<!--end::Card header-->
											<!--begin::Card body-->
											<div class="card-body pt-0">

											<form name="frmInfo" class="form-input" id="frmInfo">
                     <div class="container">
                        <div class="row mt-5">
						    <div class="col-lg-4 col-md-4 col-sm-12">                           
                           </div>
                           <br />
                           <div class="col-lg-4 col-md-4 col-sm-12">
                              <label for="">Application No <span class="text-danger">*</span></label> <br />
                                <?php echo $this->Form->control('project_no', ['label' => false, 'class' => 'form-control', 'type' => 'text','maxlength'=>'15', 'required']); ?>
                           </div>
                           <br />
                           <div class="col-lg-4 col-md-4 col-sm-12">
						   <br />

						  <button class="btn " type="submit" style="border-radius:5px;color:white;font-size:14px;background: #eba939 !important;">Submit</button> 

                           </div>
                           <br />                           
                        </div>              
                     </div>
                  </form>
                                            </div>
                                      
										</div>
		
									</form>
								</div>
							</div>
						</div>
				   </div>


<!-- 
<div class="container-fluid"><br>
			<div class="step-content col-lg-8 col-md-8 col-sm-12 offset-md-2">
               <div class="uniongov-content text-start">
               <div class="step-tab-panel">
                  <h3 class="tab2-head">Status Check</h3>
                  <hr style="width: 100%; margin-top: 5px" />
                  <form name="frmInfo" class="form-input" id="frmInfo">
                     <div class="container">
                        <div class="row mt-5">
						    <div class="col-lg-4 col-md-4 col-sm-12">                           
                           </div>
                           <br />
                           <div class="col-lg-4 col-md-4 col-sm-12">
                              <label for="">Application No <span class="text-danger">*</span></label> <br />
                                <?php echo $this->Form->control('project_no', ['label' => false, 'class' => 'form-control', 'type' => 'text', 'required']); ?>
                           </div>
                           <br />
                           <div class="col-lg-4 col-md-4 col-sm-12">
						   <br />

						  <button class="btn " type="submit" style="border-radius:5px;color:white;font-size:14px;background: #eba939 !important;">Submit</button> 
            
                           </div>
                           <br />                          
                        </div>              
                     </div>
                  </form>
               </div>
               </div>
            </div>	
     </div><br> -->

	 <?php echo $this->Form->End(); ?>
	<?php if($projectcount >0){ ?> 
	 <div class="container-fluid text-center">
			<div class="step-content col-lg-8 col-md-8 col-sm-12 offset-md-2" style="padding-bottom:150px !important">
			   <div class="uniongov-content text-start"  >
               <div class="step-tab-panel">
                  <hr style="width: 100%; margin-top: 5px" />
                  <form name="frmInfo" class="form-input" id="frmInfo">
                     <div class="container">
					 <div class="row">         
						<div class="col-sm-8 col-md-12">
						   <?php  if($projectcount == 1){ ?>
						   <h6>Status for Application No :<b><span style='color:blue;'><?php echo $project[0]['project_no']; ?></span></b></h6><br>
						    <table class="table table-bordered responsive">					
								  <tbody class="referenceadding">							         							
									   <tr>														  
											<td style="background-color: #093875;color:white;">Name: </td>
											<td><?php echo $project[0]['prefix']." ".$project[0]['name']; ?></td>
										</tr>
										<tr>														  
											<td style="background-color: #093875;color:white;">Mobile Number: </td>
											<td><?php echo $project[0]['mobile_no']; ?></td>
										</tr>
										 <tr>														  
											<td style="background-color: #093875;color:white;">Email: </td>
											<td><?php echo $project[0]['email']; ?></td>
										</tr>
										<tr>														  
											<td style="background-color: #093875;color:white;">Submit Date: </td>
											<td><?php echo date('d-m-Y',strtotime($project[0]['transaction_date'])); ?></td>
										</tr>
										<tr>														  
											<td style="background-color: #093875;color:white;">Application Status: </td>
											<td><?php echo ($project[0]['project_status'] == 0)?"<span style='color:blue;'><b>In Progress</b></span>":(($project[0]['project_status'] == 1)?"<span style='color:green;'><b>Approved</b></span>":"<span style='color:red;'><b>Rejected</b></span>"); ?></td>
										</tr>										
								  </tbody>								
							  </table>	
						   <?php }else{ ?>		
						   <?php //if($project[0]['prefix'] == ''){ ?>		
						      <p  style='color:red;'><b>Invalid Application Number.</b></p>
						   <?php //} ?>							  
						   <?php } ?>							  
                            </div>  
						 </div>
                     </div>
                  </form>
               </div>
               </div>
          </div>
     </div>
	<?php }else if($projectcount == 0 && $pro_no != ''){ ?>
	 <center><p  style='color:red;'><b>Invalid Application Number.</b></p></center>
	<?php } ?>
<script>
    $("#FormID").validate({
        rules: {            
            'project_no': {
                required: true
            }
        },

        messages: {            
            'project_no': {
                required: "Enter Application No"
            }
        },
        submitHandler: function(form) {
            form.submit();
            $(".btn").prop('disabled', true);
        }
    });
  
</script>