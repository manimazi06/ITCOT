<!-- <?php

$actual_link = (empty($_SERVER['HTTPS']) ? 'http' : 'https') . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
echo $actual_link.'<br>';
echo $_SERVER['REQUEST_URI'];
?> -->


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

  ul {
    list-style: none;
  }



  @media (min-width: 320px) and (max-width: 480px) {
    .vir-cls {
      margin-top: 200px !important;
    }
  }

  @media (min-width: 481px) and (max-width: 767px) {

    .vir-cls {
      margin-top: 200px !important;
    }

  }

  @media (min-width: 992px) and (max-width: 1399px) {



    .right-cnt {
      padding-left: 100px !important;
    }
  }
</style>
<div class="toolbar py-5 py-lg-5" id="kt_toolbar">
  <!--begin::Container-->
  <div id="kt_toolbar_container" class="container-xxl d-flex flex-stack flex-wrap">
    <!--begin::Page title-->
    <div class="page-title d-flex flex-column me-3">
      <!--begin::Title-->
      <h1 class="d-flex text-dark fw-bold my-1 fs-3">Virtual CFO</h1>
      <!--end::Title-->
      <!--begin::Breadcrumb-->
      <ul class="breadcrumb breadcrumb-dot fw-semibold text-gray-600 fs-7 my-1">
        <!--begin::Item-->
        <li class="breadcrumb-item text-gray-600">
          <a href="../../demo11/dist/index.html" class="text-gray-600 text-hover-primary">Home</a>
        </li>

        <li class="breadcrumb-item text-gray-500">Virtual CFO</li>
        <!--end::Item-->
      </ul>
      <!--end::Breadcrumb-->
    </div>
    <!--end::Page title-->

  </div>
  <!--end::Container-->
</div>


<div class="container">
  <div class="d-flex flex-column flex-root app-root" id="kt_app_root">
    <div class="app-page flex-column flex-column-fluid" id="kt_app_page">

      <div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">

        <div class="app-main flex-column flex-row-fluid" id="kt_app_main">

          <div class="d-flex flex-column flex-column-fluid" id="virtual_id">
            <!--begin::Content-->
            <div id="kt_app_content" class="app-content flex-column-fluid">
              <!--begin::Content container-->
              <div id="kt_app_content_container" class="app-container container-xxl">
                <!--begin::Frameworks-->
                <div class="d-flex flex-column mb-lg-10 mb-20" id="kt_app_frameworks">

                  <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">

                      <div class="fw-semibold">
                        <h4 class="text-gray-900 fw-bold text-start py-5" style="font-size: 1.5rem !important;">Virtual CFO</h4>
                      </div>
                      <div class="text-gray-700 fs-4 fw-semibold opacity-100" style="padding-bottom: 50px;">
                        A Virtual CFO (Chief Financial Officer) is a financial
                        professional who provides CFO-level services to
                        businesses on a remote or part-time basis. The concept
                        of a Virtual CFO is becoming increasingly popular,
                        especially among micro, small and medium-sized
                        enterprises (MSMEs) that may not have the resources or
                        need for a full-time, in-house CFO. <br />
                        The Virtual CFO offers many of the same strategic
                        financial management as a traditional CFO but
                        operates remotely using digital communication tools and
                        technology. This arrangement allows businesses to access
                        high-level financial expertise and guidance without the
                        cost of hiring a full-time executive.
                      </div>
                    </div>

                    <div class="col-lg-10 col-md-10 col-sm-12 offset-lg-1 offset-md-1">

                      <div class=" notice  bg-light-primary rounded border-primary border border-dashed rounded-3 p-6" style="background: #edf0ff !important;border-color:#050140 !important;" style="position: relative; z-index: 1000;">

                        <div class="press-content2">

                          <div class="content-space row ">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                              <div class="uniongov-content text-start">
                                <div class="fw-semibold">
                                  <h4 class="text-gray-900 fw-bold text-center py-1" style="font-size: 1.5rem !important;margin-top:-10px"> Apply for Virtual CFO Services</h4>
                                </div>
                                <form action="" class="form" method="post" id="kt_contact_form">

                                  <div class="separator separator-dashed mb-6"></div>

                                  <div class="row mb-5">

                                    <div class="col-md-6 fv-row">
                                      <label class="fs-5 fw-semibold mb-2">Name<span class="text-danger">*</span></label>

                                      <input type="text" class="form-control form-control-solid name" placeholder="" name="name" id="name" onkeypress="return AvoidSpace(this.value)" />
                                    </div>

                                    <div class="col-md-6 fv-row">
                                      <label class="fs-5 fw-semibold mb-2">Email<span class="text-danger">*</span></label>

                                      <input type="email" class="form-control form-control-solid" placeholder="" name="email" id="emailAddress" onchange="email_check();" />
                                      <span id="error_email" style="font-size: 12px; color:red;  display: block;" class="error"></span>

                                    </div>

                                    <div class="col-md-6 fv-row" style="margin-top: 20px;">
                                      <label class="fs-5 fw-semibold mb-2">Mobile<span class="text-danger">*</span></label><span>(+91)</span>

                                      <input class="form-control form-control-solid num" placeholder="" name="mobile_no" minlength="3" maxlength="10" id="mobile_no" onchange="mbl_check();" id="mbl" onkeypress="return AvoidSpace(this.value)" />
                                      <span id="error_mobile" style="font-size: 12px;color:red;  display: block;" class="error"></span>

                                    </div>

                                    <div class="col-md-6 fv-row" style="margin-top: 20px;">
                                      <label for="inputlname" class="fs-5 fw-semibold mb-2"> State<span class="text-danger">*</span></label>
                                      <?php echo $this->Form->control('virualcfo_state_id', ['label' => false, 'class' => 'form-control select', 'style' => 'border: none;
                                      background-color: var(--bs-gray-100);', 'empty' => 'Select State', 'options' => $virtualcfoStates]); ?>
                                    </div>

                                    <!-- <div class="col-lg-6 col-md-6 col-sm-12 offset-lg-3 offset-md-3 fv-row text-center" style="margin-top: 20px;"> -->
                                    <div class="col-md-6 fv-row" style="margin-top: 20px;">
                                      <label class="fs-5 fw-semibold mb-2 text-center">Message</label>
                                      <textarea class="form-control form-control-solid" rows="2" name="description" placeholder=""></textarea>
                                    </div>


                                    <div class="col-md-6 fv-row " style="margin-top: 20px;">
                                    
                                      <label for="inputlname" class="fs-5 fw-semibold mb-2"> Services<span class="text-danger">*</span></label>
                                     
                                      
                                      <!-- <?php echo $this->Form->control('service_id', ['label' => false, 'class' => 'form-control select', 'style' => 'border: none;
                                       background-color: var(--bs-gray-100);']); ?>-->
                                      <!-- <input type="checkbox" />
                                      <label for="">P and L Statement</label> -->

                                      <table>
                                        <!-- <div style="width:20px;"> -->
                                        <div class="col-md-12">
                                          <div class="row">
                                            <div class="col-md-3">
                                            <!-- <input name="service_id" type="checkbox" style="display: none;"> -->
                                            
                                              <?php
                                              foreach ($services as $key => $value) {
                                                // echo '<pre>';
                                                // print_r($key);
                                                // if($key>3)
                                                // {
                                                //   echo '<br>';
                                                // echo '<div style="width:200px;">
                                                //         <br></div>';
                                              ?>

                                                <tr>
                                                  
                                                

                                                  <td>
                                                    <input type="checkbox" name="arr[]" id="checkbox_<?php echo $key ? $key : '' ?>" onclick="checkbox_others(this.value)" value="<?php echo $key ? $key : '' ?>">
                                                  </td>
                                                  <td style="font-weight:normal !important;"><?php echo $value; ?></td>

                                                  

                                                </tr>

                                              <?php //}
                                              }
                                              //exit(); 
                                              ?>
                                            </div>
                                          </div>
                                        </div>

                                        <!-- </div> -->
                                      </table>

                                      <div class="col-md-10 checking">
                                        <td>
                                          <input type="text" class="form-control" name="others" id="others" style="display:none" placeholder="Others">
                                        </td>
                                      </div>
                                    </div>

                                  </div>



                                  <div class="text-center mt-4">

                                    <button type="submit" class="btn " id="kt_contact_submit_button" style="background: #f4de6d;position: relative; z-index: 10">
                                      <span class="indicator-label">Submit</span>
                                    </button>
                                  </div>
                                </form>


                              </div>
                            </div>
                          </div>

                        </div>

                      </div>

                    </div>
                  </div>





                  <!--begin::Frameworks content-->
                  <div class="d-flex " style="padding-top: 50px;">
                    <!--begin::Content-->
                    <div class="flex-lg-row-fluid ms-lg-7 ms-xl-12">
                      <!--begin::Tab content-->
                      <div class="tab-content">
                        <!--begin::Tab pane-->
                        <div class="tab-pane fade active show" id="kt_app_framework_html" role="tabpanel">
                          <!--begin::Heading-->
                          <div class="d-flex flex-column mb-10">
                            <h2 class="text-gray-900 fw-bold mb-1 fs-2 letter-spacing">
                              Some of the key roles and responsibilities of a
                              Virtual CFO include:
                            </h2>

                            <span class="text-gray-600 fw-semibold fs-6">
                            </span>
                          </div>
                          <!--end::Heading-->

                          <!--begin::Row-->
                          <div class="row g-10">
                            <!--begin::Col-->
                            <div class="col-md-6">
                              <!--begin::Info-->
                              <div class="d-flex flex-column mb-3">
                                <!--begin::Heading-->
                                <h3 class="d-flex d-flex flex-column justify-content-start mb-4">
                                  <!--begin::Logo-->
                                  <div class="d-flex flex-center flex-shrink-0 me-3 mb-5 bg-gray-200 rounded-1" style="height: 42px; width: 42px">
                                    <img class="w-40px align-start" src="/webroot/img/financial_strategy.png" alt="" />
                                  </div>
                                  <!--end::Logo-->

                                  <!--begin::Title-->
                                  <div class="text-gray-800 fs-4 fw-bold letter-spacing">
                                    Financial Strategy:
                                  </div>
                                  <!--end::Title-->
                                </h3>
                                <!--end::Heading-->

                                <!--begin::Description-->
                                <div class="text-gray-700 fs-6 fw-semibold">
                                  Developing and implementing financial
                                  strategies aligned with the company's goals
                                  and objectives.
                                </div>
                                <!--end::Description-->
                              </div>
                              <!--end::Info-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-md-6">
                              <!--begin::Info-->
                              <div class="d-flex flex-column mb-3">
                                <!--begin::Heading-->
                                <h3 class="d-flex d-flex flex-column justify-content-start mb-4">
                                  <!--begin::Logo-->
                                  <div class="d-flex flex-center flex-shrink-0 me-3 mb-5 bg-gray-200 rounded-1" style="height: 42px; width: 42px">
                                    <img class="w-40px align-start" src="/webroot/img/financial_planning_and_analysis.png" alt="" />
                                  </div>
                                  <!--end::Logo-->

                                  <!--begin::Title-->
                                  <div class="text-gray-800 fs-4 fw-bold letter-spacing">
                                    Financial Planning and Analysis:
                                  </div>
                                  <!--end::Title-->
                                </h3>
                                <!--end::Heading-->

                                <!--begin::Description-->
                                <div class="text-gray-700 fs-6 fw-semibold">
                                  Creating budgets, forecasts, and financial
                                  models to aid decision-making.
                                </div>
                                <!--end::Description-->
                              </div>
                              <!--end::Info-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-md-6">
                              <!--begin::Info-->
                              <div class="d-flex flex-column mb-3">
                                <!--begin::Heading-->
                                <h3 class="d-flex d-flex flex-column justify-content-start mb-4">
                                  <!--begin::Logo-->
                                  <div class="d-flex flex-center flex-shrink-0 me-3 mb-5 bg-gray-200 rounded-1" style="height: 42px; width: 42px">
                                    <img class="w-40px align-start" src="/webroot/img/financial_reporting.png" alt="" />
                                  </div>
                                  <!--end::Logo-->

                                  <!--begin::Title-->
                                  <div class="text-gray-800 fs-4 fw-bold letter-spacing">
                                    Financial Reporting:
                                  </div>
                                  <!--end::Title-->
                                </h3>
                                <!--end::Heading-->

                                <!--begin::Description-->
                                <div class="text-gray-700 fs-6 fw-semibold">
                                  Preparing and presenting financial reports
                                  to stakeholders, management, and investors.
                                </div>
                                <!--end::Description-->
                              </div>
                              <!--end::Info-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-md-6">
                              <!--begin::Info-->
                              <div class="d-flex flex-column mb-3">
                                <!--begin::Heading-->
                                <h3 class="d-flex d-flex flex-column justify-content-start mb-4">
                                  <!--begin::Logo-->
                                  <div class="d-flex flex-center flex-shrink-0 me-3 mb-5 bg-gray-200 rounded-1" style="height: 42px; width: 42px">
                                    <img class="w-40px align-start" src="/webroot/img/cash-flow.png" alt="" />
                                  </div>
                                  <!--end::Logo-->

                                  <!--begin::Title-->
                                  <div class="text-gray-800 fs-4 fw-bold letter-spacing">
                                    Cash Flow Management:
                                  </div>
                                  <!--end::Title-->
                                </h3>
                                <!--end::Heading-->

                                <!--begin::Description-->
                                <div class="text-gray-700 fs-6 fw-semibold">
                                  Monitoring and managing cash flow to ensure
                                  adequate liquidity and financial stability.
                                </div>
                                <!--end::Description-->
                              </div>
                              <!--end::Info-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-md-6">
                              <!--begin::Info-->
                              <div class="d-flex flex-column mb-3">
                                <!--begin::Heading-->
                                <h3 class="d-flex d-flex flex-column justify-content-start mb-4">
                                  <!--begin::Logo-->
                                  <div class="d-flex flex-center flex-shrink-0 me-3 mb-5 bg-gray-200 rounded-1" style="height: 42px; width: 42px">
                                    <img class="w-40px align-start" src="/webroot/img/risk_management.png" alt="" />
                                  </div>
                                  <!--end::Logo-->

                                  <!--begin::Title-->
                                  <div class="text-gray-800 fs-4 fw-bold letter-spacing">
                                    Risk Management:
                                  </div>
                                  <!--end::Title-->
                                </h3>
                                <!--end::Heading-->

                                <!--begin::Description-->
                                <div class="text-gray-700 fs-6 fw-semibold">
                                  Identifying and managing financial risks
                                  that could impact the business.
                                </div>
                                <!--end::Description-->
                              </div>
                              <!--end::Info-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-md-6">
                              <!--begin::Info-->
                              <div class="d-flex flex-column mb-3">
                                <!--begin::Heading-->
                                <h3 class="d-flex d-flex flex-column justify-content-start mb-4">
                                  <!--begin::Logo-->
                                  <div class="d-flex flex-center flex-shrink-0 me-3 mb-5 bg-gray-200 rounded-1" style="height: 42px; width: 42px">
                                    <img class="w-40px align-start" src="/webroot/img/cost_management.png" alt="" />
                                  </div>
                                  <!--end::Logo-->

                                  <!--begin::Title-->
                                  <div class="text-gray-800 fs-4 fw-bold letter-spacing">
                                    Cost Management:
                                  </div>
                                  <!--end::Title-->
                                </h3>
                                <!--end::Heading-->

                                <!--begin::Description-->
                                <div class="text-gray-700 fs-6 fw-semibold">
                                  Analyzing costs and identifying
                                  opportunities to increase efficiency and
                                  reduce expenses.
                                </div>
                                <!--end::Description-->
                              </div>
                              <!--end::Info-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-md-6">
                              <!--begin::Info-->
                              <div class="d-flex flex-column mb-3">
                                <!--begin::Heading-->
                                <h3 class="d-flex d-flex flex-column justify-content-start mb-4">
                                  <!--begin::Logo-->
                                  <div class="d-flex flex-center flex-shrink-0 me-3 mb-5 bg-gray-200 rounded-1" style="height: 42px; width: 42px">
                                    <img class="w-40px align-start" src="/webroot/img/investor_relations.png" alt="" />
                                  </div>
                                  <!--end::Logo-->

                                  <!--begin::Title-->
                                  <div class="text-gray-800 fs-4 fw-bold letter-spacing">
                                    Fundraising and Investor Relations:
                                  </div>
                                  <!--end::Title-->
                                </h3>
                                <!--end::Heading-->

                                <!--begin::Description-->
                                <div class="text-gray-700 fs-6 fw-semibold">
                                  Assisting in fundraising activities and
                                  maintaining relationships with investors.
                                </div>
                                <!--end::Description-->
                              </div>
                              <!--end::Info-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-md-6">
                              <!--begin::Info-->
                              <div class="d-flex flex-column mb-3">
                                <!--begin::Heading-->
                                <h3 class="d-flex d-flex flex-column justify-content-start mb-4">
                                  <!--begin::Logo-->
                                  <div class="d-flex flex-center flex-shrink-0 me-3 mb-5 bg-gray-200 rounded-1" style="height: 42px; width: 42px">
                                    <img class="w-40px align-start" src="/webroot/img/tax_planning.png" alt="" />
                                  </div>
                                  <!--end::Logo-->

                                  <!--begin::Title-->
                                  <div class="text-gray-800 fs-4 fw-bold letter-spacing">
                                    Tax Planning and Compliance:
                                  </div>
                                  <!--end::Title-->
                                </h3>
                                <!--end::Heading-->

                                <!--begin::Description-->
                                <div class="text-gray-700 fs-6 fw-semibold">
                                  Ensuring the company complies with tax
                                  regulations and optimizing tax strategies.
                                </div>
                                <!--end::Description-->
                              </div>
                              <!--end::Info-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-md-6">
                              <!--begin::Info-->
                              <div class="d-flex flex-column mb-3">
                                <!--begin::Heading-->
                                <h3 class="d-flex d-flex flex-column justify-content-start mb-4">
                                  <!--begin::Logo-->
                                  <div class="d-flex flex-center flex-shrink-0 me-3 mb-5 bg-gray-200 rounded-1" style="height: 42px; width: 42px">
                                    <img class="w-40px align-start" src="/webroot/img/acquisition.png " alt="" />
                                  </div>
                                  <!--end::Logo-->

                                  <!--begin::Title-->
                                  <div class="text-gray-800 fs-4 fw-bold letter-spacing">
                                    Mergers and Acquisitions:
                                  </div>
                                  <!--end::Title-->
                                </h3>
                                <!--end::Heading-->

                                <!--begin::Description-->
                                <div class="text-gray-700 fs-6 fw-semibold">
                                  Providing financial insights and due
                                  diligence support during mergers,
                                  acquisitions, or other strategic
                                  transactions.
                                </div>
                                <!--end::Description-->
                              </div>
                              <!--end::Info-->
                            </div>
                            <!--end::Col-->
                          </div>
                          <!--end::Row-->
                        </div>
                        <!--end::Tab pane-->
                      </div>
                      <!--end::Tab content-->
                    </div>
                    <!--end::Content-->
                  </div>
                  <!--end::Frameworks content-->

                  <!--begin::Description-->
                  <div class="text-gray-700 text-start fs-4 fw-semibold opacity-100" style="margin-top: 20px">
                    <p>
                      Virtual CFOs tailor their services to the specific needs
                      of each client, providing flexible and customized
                      financial solutions. They typically work closely with
                      the business owner, management team, or existing finance
                      department to understand the company's goals and
                      challenges and offer strategic advice to drive growth
                      and success.
                    </p>
                    <p>
                      The Virtual CFO model allows businesses to access
                      high-quality financial expertise on a part-time basis,
                      making it a cost-effective solution for companies
                      looking for CFO-level guidance without committing to a
                      full-time executive position.
                    </p>
                  </div>
                  <!--end::Description-->
                </div>
                <!--end::Frameworks-->
              </div>
              <!--end::Content container-->
            </div>
            <!--end::Content-->
          </div>

        </div>

      </div>

    </div>

  </div>
</div>

<script>
  // function email_check()

  // {
  //   //alert('hi');
  //   var email = $('#emailAddress').val();
  //   // var mbl = $('#mobile_no').val();

  //   //alert(mbl);
  //   $.ajax({

  //     async: true,
  //     dataType: "html",

  //     url: '<?php echo $this->Url->webroot; ?>ajaxcalling/' + email,


  //     success: function(data, textStatus) {
  //       // alert(data);
  //       if (data == 1) {


  //         $("#error_email").html('Email ID already exists, Try another');
  //         //alert('Email already present, Try another!');

  //         $("#emailAddress").val('').trigger('change');
  //         // alert('Mobile No already present, Try another!')
  //         // $("#mobile_no").val('').trigger('change');
  //       }
  //       //alert(data);
  //     }


  //   });

  // }

  // function mbl_check()

  // {
  //   //alert('hi');
  //   // var email = $('#emailAddress').val();
  //   var mbl = $('#mobile_no').val();

  //   //alert(mbl);
  //   $.ajax({

  //     async: true,
  //     dataType: "html",

  //     url: '<?php echo $this->Url->webroot; ?>ajaxcallingmbl/' + mbl,


  //     success: function(data, textStatus) {
  //       //alert(data);
  //       if (data == 1) {

  //         $("#error_mobile").html('Mobile no already exists, Try another');
  //         //alert('Mobile No already present, Try another!')

  //         $("#mobile_no").val('').trigger('change');
  //         // alert('Mobile No already present, Try another!')
  //         // $("#mobile_no").val('').trigger('change');
  //       }
  //       //alert(data);
  //     }


  //   });

  // }

  function checkbox_others(id) {
				//alert(id);		


			isChecked = $('#checkbox_' + id).is(':checked');
			//alert(isChecked);
			if (isChecked === true && id == 27) {

				$('#others').show();
			} else if (isChecked === false && id == 27) {
				$('#others').val('');
				$('#others').hide();

			}



		}

  $("#kt_contact_form").validate({

   
    rules: {
      'name': {
        required: true
      },
      'email': {
        required: true
      },
      'mobile_no': {
        required: true
      },
      'virualcfo_state_id': {
        required: true
      },
      'arr[]': {
        required: true
      }
    },

    messages: {

      'name': {
        required: "Enter Name"
      },
      'email': {
        required: "Enter Valid Email ID"
      },
      'mobile_no': {
        required: "Enter Mobile No"
      },
      'virualcfo_state_id': {
        required: "Select State"
      },
      'arr[]': {
        required: "Select Services"
      }
    },
    submitHandler: function(form) {
      form.submit();
      $(".btn").prop('disabled', true);
    }
  });

  function AvoidSpace(val) {
    // if (event.keyCode == 32) {
    //     event.returnValue = false;
    //     return false;
    // }

    const input = document.querySelector('#name');
    input.addEventListener('keyup', () => {
      input.value = input.value.replace(/  +/g, ' ');
    });

    const input1 = document.querySelector('#mbl');
    input1.addEventListener('keyup', () => {
      input1.value = input1.value.replace(/  +/g, ' ');
    });
  }
</script>