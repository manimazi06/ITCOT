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


<div class="press-content">
  <div class="container">
    <div class="d-flex flex-column flex-root app-root" id="kt_app_root">
      <div class="app-page flex-column flex-column-fluid" id="kt_app_page">
        <!--begin::Wrapper-->
        <div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
          <!--begin::Hero-->
          <div id="kt_app_hero" class="app-hero app-hero-default mb-5 mb-lg-15" style="background: #f4de6d">
            <!--begin::Hero container-->
            <div id="kt_app_hero_container" class="app-container container-xxl">
              <!--begin::Hero wrapper-->
              <div class="app-hero-wrapper pt-10 pt-xl-20" data-bs-theme="light">
                <!--begin::Row-->
                <div class="row pt-lg-10">
                  <!--begin::Col-->
                  <div class="col-lg-6 col-md-6 col-sm-12 order-2 order-lg-1 ">
                    <!--begin::Preview-->
                    <div class="preview w-100 w-lg-500px w-xl-550px h-150px h-md-275px h-xl-300px">
                      <div class="card-rounded d-flex flex-column flex-center flex-center p-10" style="
                          border: 1px solid #e3dede;
                          box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
                          background: #fff;
                        ">
                        <form action="" class="form" method="post" id="kt_contact_form">
                          <h3 class="fw-bold text-dark mb-4 text-center">
                            Apply for Virtual CFO
                          </h3>
                          <div class="separator separator-dashed mb-6"></div>
                          <!--begin::Input group-->
                          <div class="row mb-5">

                            <div class="col-md-6 fv-row">
                              <label class="fs-5 fw-semibold mb-2">Name<span class="text-danger">*</span></label>
                              <!--end::Label-->
                              <!--begin::Input-->
                              <input type="text" class="form-control form-control-solid name" placeholder="" name="name" id="name" onkeypress="return AvoidSpace(this.value)" />
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-md-6 fv-row">
                              <label class="fs-5 fw-semibold mb-2">Email<span class="text-danger">*</span></label>

                              <input type="email" class="form-control form-control-solid" placeholder="" name="email" id="emailAddress" onchange="email_check();" />
                              <span id="error_email" style="font-size: 12px; color:red;  display: block;" class="error"></span>

                            </div>

                            <div class="col-md-6 fv-row mt-3">
                              <label class="fs-5 fw-semibold mb-2">Mobile<span class="text-danger">*</span></label>

                              <input class="form-control form-control-solid num" placeholder="" name="mobile_no" minlength="3" maxlength="12" id="mobile_no" onchange="mbl_check();" id="mbl" onkeypress="return AvoidSpace(this.value)" />
                              <span id="error_mobile" style="font-size: 12px;color:red;  display: block;" class="error"></span>
                              <!--end::Input-->
                            </div>

                            <div class="col-md-6 fv-row mt-3">
                              <label for="inputlname" class="fs-5 fw-semibold mb-2"> State<span class="text-danger">*</span></label>
                              <?php echo $this->Form->control('virualcfo_state_id', ['label' => false, 'class' => 'form-control select', 'style' => 'border: none;
    background-color: var(--bs-gray-100);', 'empty' => 'Select State', 'options' => $virtualcfoStates]); ?>
                            </div>
                            

                            <div class="col-md-6 fv-row mt-3">
                              <label for="inputlname" class="fs-5 fw-semibold mb-2"> Services<span class="text-danger">*</span></label>
                              <?php echo $this->Form->control('service_id', ['label' => false, 'class' => 'form-control select', 'style' => 'border: none;
    background-color: var(--bs-gray-100);', 'empty' => 'Select Services', 'options' => $services]); ?>
                            </div>
                          </div>

                          <div class="col-md-12 fv-row">
                            <label class="fs-6 fw-semibold mb-2">Message</label>
                            <textarea class="form-control form-control-solid" rows="2" name="message" placeholder="" maxlength="100"></textarea>
                          </div>
                          <div class="text-center mt-4">

                            <button type="submit" class="btn " id="kt_contact_submit_button" style="background: #f4de6d;position: relative; z-index: 10">
                              <span class="indicator-label">Submit</span>
                            </button>
                          </div>
                        </form>

                      </div>
                    </div>
                    <!--end::Preview-->
                  </div>
                  <!--end::Col-->

                  <!--begin::Col-->
                  <div class="col-lg-6 col-md-6 col-sm-12 order-1 order-lg-2 right-cnt d-flex align-items-center">
                    <!--begin::Block-->
                    <div class="">
                      <!--begin::Heading-->
                      <h1 class="fs-1 fs-lg-2hx fw-bold text-gray-900 mb-5 letter-spacing mt-n1">
                        Virtual CFO
                      </h1>
                      <!--end::Heading-->

                      <!--begin::Text-->
                      <div class="fs-6 fs-xl-4 fw-semibold text-gray-800 mb-5">
                        A Virtual CFO (Chief Financial Officer) is a financial
                        professional who provides CFO-level services to
                        businesses on a remote or part-time basis.
                      </div>
                      <!--end::Text-->

                      <div class="separator separator-hero my-8 w-100"></div>

                      <!--begin::Link-->
                      <div class="d-flex align-items-center flex-wrap gap-2 gap-lg-4">
                        <a class="btn btn-dark" href="#virtual_id">Read More</a>

                        <!-- <span class="fs-6 fw-semibold text-gray-800">
                          Learn more about Virtual CFO
                          <a href="#virtual_id" class="text-dark fw-bold">here</a>
                        </span> -->
                      </div>
                      <!--end::Link-->
                    </div>
                    <!--end::Block-->
                  </div>
                  <!--end::Col-->
                </div>
                <!--end::Row-->
              </div>
              <!--end::Hero wrapper-->
            </div>
            <!--end::Hero container-->
          </div>
          <!--end::Hero-->

          <!--begin::Main-->
          <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
            <!--begin::Content wrapper-->
            <div class="d-flex flex-column flex-column-fluid" id="virtual_id">
              <!--begin::Content-->
              <div id="kt_app_content" class="app-content flex-column-fluid">
                <!--begin::Content container-->
                <div id="kt_app_content_container" class="app-container container-xxl">
                  <!--begin::Frameworks-->
                  <div class="d-flex flex-column mb-lg-10 mb-20" id="kt_app_frameworks" style="padding-top: 20rem">
                    <!--begin::Heading-->
                    <div class="d-flex flex-column flex-center mb-10 mb-lg-20 vir-cls">
                      <!--begin::Subtitle-->
                      <h3 class="d-flex text-dark fs-2hx fw-bolder mb-10 letter-spacing">
                        <span class="ms-3 d-inline-flex position-relative">
                          <span class="px-1">Virtual CFO</span>
                        </span>
                      </h3>
                      <!--end::Subtitle-->

                      <!--begin::Description-->
                      <div class="text-gray-700 text-center fs-4 fw-semibold opacity-100">
                        A Virtual CFO (Chief Financial Officer) is a financial
                        professional who provides CFO-level services to
                        businesses on a remote or part-time basis. The concept
                        of a Virtual CFO is becoming increasingly popular,
                        especially among micro, small and medium-sized
                        enterprises (MSMEs) that may not have the resources or
                        need for a full-time, in-house CFO. <br />
                        The Virtual CFO offers many of the same strategic
                        financial management services as a traditional CFO but
                        operates remotely using digital communication tools and
                        technology. This arrangement allows businesses to access
                        high-level financial expertise and guidance without the
                        cost of hiring a full-time executive.
                      </div>
                      <!--end::Description-->
                    </div>
                    <!--end::Heading-->

                    <!--begin::Frameworks content-->
                    <div class="d-flex">
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
            <!--end::Content wrapper-->
          </div>
          <!--end:::Main-->
        </div>
        <!--end::Wrapper-->
      </div>
      <!--end::Page-->
    </div>
  </div>

  <script>
    function email_check()

    {
      //alert('hi');
      var email = $('#emailAddress').val();
      // var mbl = $('#mobile_no').val();

      //alert(mbl);
      $.ajax({

        async: true,
        dataType: "html",

        url: '<?php echo $this->Url->webroot; ?>ajaxcalling/' + email,


        success: function(data, textStatus) {
          // alert(data);
          if (data == 1) {


            $("#error_email").html('Email ID already exists, Try another');
            //alert('Email already present, Try another!');

            $("#emailAddress").val('').trigger('change');
            // alert('Mobile No already present, Try another!')
            // $("#mobile_no").val('').trigger('change');
          }
          //alert(data);
        }


      });

    }

    function mbl_check()

    {
      //alert('hi');
      // var email = $('#emailAddress').val();
      var mbl = $('#mobile_no').val();

      //alert(mbl);
      $.ajax({

        async: true,
        dataType: "html",

        url: '<?php echo $this->Url->webroot; ?>ajaxcallingmbl/' + mbl,


        success: function(data, textStatus) {
          //alert(data);
          if (data == 1) {

            $("#error_mobile").html('Mobile no already exists, Try another');
            //alert('Mobile No already present, Try another!')

            $("#mobile_no").val('').trigger('change');
            // alert('Mobile No already present, Try another!')
            // $("#mobile_no").val('').trigger('change');
          }
          //alert(data);
        }


      });

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
        'service_id': {
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
        'service_id': {
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