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
      <h1 class="d-flex text-dark fw-bold my-1 fs-3">EPR Certification</h1>
      <!--end::Title-->
      <!--begin::Breadcrumb-->
      <ul class="breadcrumb breadcrumb-dot fw-semibold text-gray-600 fs-7 my-1">
        <!--begin::Item-->
        <li class="breadcrumb-item text-gray-600">
          <a href="../../demo11/dist/index.html" class="text-gray-600 text-hover-primary">Home</a>
        </li>

        <li class="breadcrumb-item text-gray-500">EPR Certification</li>
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
      <!--begin::Wrapper-->
      <div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
        <!--begin::Hero-->
        <!-- #959cb7 -->
        <!-- <div id="kt_app_hero" class="app-hero app-hero-default mb-5 mb-lg-15" style="background: #166478">

            <div id="kt_app_hero_container" class="app-container container-xxl">

              <div class="app-hero-wrapper pt-10 pt-xl-20" data-bs-theme="light">
                
                <div class="row pt-lg-10">

                  <div class="col-lg-6 col-md-6 col-sm-12 order-2 order-lg-1 ">

                    <div class="preview w-100 w-lg-500px w-xl-550px h-150px h-md-275px h-xl-300px">
                      <div class="card-rounded d-flex flex-column flex-center flex-center p-10" style="
                          border: 1px solid #e3dede;
                          box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
                          background: #fff;
                        ">
                        <form action="" class="form" method="post" id="kt_contact_form">
                          <h3 class="fw-bold text-dark mb-4 text-center">
                            Apply for EPR Certification
                          </h3>
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

                            <div class="col-md-6 fv-row mt-3">
                              <label class="fs-5 fw-semibold mb-2">Mobile<span class="text-danger">*</span></label><span>(+91)</span>

                              <input class="form-control form-control-solid num" placeholder="" name="mobile_no" minlength="3" maxlength="10" id="mobile_no" onchange="mbl_check();" id="mbl" onkeypress="return AvoidSpace(this.value)" />
                              <span id="error_mobile" style="font-size: 12px;color:red;  display: block;" class="error"></span>

                            </div>

                            <div class="col-md-6 fv-row mt-3">
                              <label for="inputlname" class="fs-5 fw-semibold mb-2"> State<span class="text-danger">*</span></label>
                              <?php echo $this->Form->control('state_id', ['label' => false, 'class' => 'form-control select', 'style' => 'border: none;
                                background-color: var(--bs-gray-100);', 'empty' => 'Select State', 'options' => $states]); ?>
                            </div>
                          </div>

                          <div class="col-md-12 fv-row">
                            <label class="fs-6 fw-semibold mb-2">Message</label>
                            <textarea class="form-control form-control-solid" rows="2" name="message" placeholder=""></textarea>
                          </div>

                          <div class="text-center mt-4">

                            <button type="submit" class="btn " id="kt_contact_submit_button" style="background: #166478;position: relative; z-index: 10">
                              <span class="indicator-label" style="color: #fff;">Submit</span>
                            </button>
                          </div>
                        </form>

                      </div>
                    </div>

                  </div>



                  <div class="col-lg-6 col-md-6 col-sm-12 order-1 order-lg-2 right-cnt d-flex align-items-center">

                    <div class="">

                      <h1 class="fs-1 fs-lg-2hx fw-bold text-gray-900 mb-5 letter-spacing mt-n1">
                        EPR Certification
                      </h1>

                      <div class="fs-6 fs-xl-4 fw-semibold text-gray-800 mb-5" style="color: #fff !important;">
                        Extended Producer Responsibility (EPR) is a policy approach designed to shift the responsibility for managing the entire lifecycle of a product.
                      </div>
                      <div class="separator separator-hero my-8 w-100"></div>
                      <div class="d-flex align-items-center flex-wrap gap-2 gap-lg-4">
                        <a class="btn btn-dark" href="#epr_id">Read More</a>
                      </div>
                    </div>

                  </div>

                </div>

              </div>

            </div>

          </div> -->

        <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
          <!--begin::Content wrapper-->
          <div class="d-flex flex-column flex-column-fluid" id="epr_id">
            <!--begin::Content-->
            <div id="kt_app_content" class="app-content flex-column-fluid">
              <!--begin::Content container-->
              <div id="kt_app_content_container" class="app-container container-xxl">
                <!--begin::Frameworks-->
                <div class="d-flex flex-column mb-lg-10 mb-20" id="kt_app_frameworks">
                  <!--begin::Heading-->
                  <div class="d-flex flex-column flex-center mb-10 mb-lg-20 vir-cls">


                    <div class="row">
                      <div class="col-lg-12 col-md-12 col-sm-12">

                        <div class="fw-semibold">
                          <h4 class="text-gray-900 fw-bold text-start py-5" style="font-size: 1.5rem !important;">EPR Certification </h4>
                        </div>
                        <div class="text-gray-700 fs-4 fw-semibold opacity-100" style="padding-bottom: 50px;">
                          Extended Producer Responsibility (EPR) is a policy approach designed to shift the responsibility for managing the entire lifecycle of a product, especially its post-consumer stage, from the consumer or local government to the producer. The concept originated as a response to the environmental challenges posed by increasing amounts of waste and the potential negative impacts of certain products on the environment.
                          The main idea behind EPR is to hold producers accountable for the environmental impacts of their products throughout their entire life cycle, including after they are no longer useful to the consumer. This encourages producers to design products that are more environmentally friendly, easier to recycle, and have lower environmental impacts. <br>

                        </div>
                      </div>
                      <div class="col-lg-10 col-md-10 col-sm-12 offset-lg-1 offset-md-1">

                        <div class=" notice  bg-light-primary rounded border-primary border border-dashed rounded-3 p-6" style="background: #edf0ff !important;border-color:#050140 !important;" style="position: relative; z-index: 1000;">

                          <div class="press-content2">

                            <div class="content-space row ">
                              <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="uniongov-content text-start">
                                  <div class="fw-semibold">
                                    <h4 class="text-gray-900 fw-bold text-center py-1" style="font-size: 1.5rem !important;margin-top:-10px">Apply for EPR Certification</h4>
                                  </div>
                                  <form action="" class="form" method="post" id="kt_contact_form">
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

                                      <div class="col-md-6 fv-row mt-3 " style="padding-top: 10px;">
                                        <label class="fs-5 fw-semibold mb-2">Mobile<span class="text-danger">*</span></label><span>(+91)</span>

                                        <input class="form-control form-control-solid num" placeholder="" name="mobile_no" minlength="3" maxlength="10" id="mobile_no" onchange="mbl_check();" id="mbl" onkeypress="return AvoidSpace(this.value)" />
                                        <span id="error_mobile" style="font-size: 12px;color:red;  display: block;" class="error"></span>
                                        <!--end::Input-->
                                      </div>

                                      <div class="col-md-6 fv-row mt-3 " style="padding-top: 10px;">
                                        <label for="inputlname" class="fs-5 fw-semibold mb-2"> State<span class="text-danger">*</span></label>
                                        <?php echo $this->Form->control('state_id', ['label' => false, 'class' => 'form-control select', 'style' => 'border: none;
                                          background-color: var(--bs-gray-100);', 'empty' => 'Select State', 'options' => $states]); ?>
                                      </div>

                                      <div class="col-md-6 fv-row " style="margin-top: 20px;">
                                        <label for="inputlname" class="fs-5 fw-semibold mb-2"> Role<span class="text-danger">*</span></label>
                                        <?php echo $this->Form->control('epr_role_id', ['label' => false, 'class' => 'form-control select', 'style' => 'border: none;
                                       background-color: var(--bs-gray-100);', 'empty' => 'Select Your Role', 'options' => $eprRoles]); ?>

                                      </div>
                                   


                                      <!-- <div class="col-md-6 fv-row" style="margin-top: 20px;">
                                        <label class="fs-5 fw-semibold mb-2 text-center">Message</label>
                                        <textarea class="form-control form-control-solid" rows="2" name="description" placeholder=""></textarea>
                                      </div> -->

                                      <div class="col-md-6 fv-row " style="margin-top: 20px;">
                                        <label for="inputlname" class="fs-5 fw-semibold mb-2"> Type of waste<span class="text-danger">*</span></label>
                                        <?php echo $this->Form->control('waste_type_id', ['label' => false, 'class' => 'form-select', 'style' => 'border: none;
                                       background-color: var(--bs-gray-100);', 'empty' => 'Select Type of waste', 'options' => $wasteTypes,'onchange' => 'optioncalling(this.value)']); ?>

                                      </div>

                                      <div class="col-md-6 fv-row " style="margin-top: 20px;">
                                        <label for="inputlname" class="fs-5 fw-semibold mb-2"> Category</label>
                                        <!-- <label for="inputlname" class="fs-5 fw-semibold mb-2"> Category<span class="text-danger">*</span></label> -->
                                        <?php echo $this->Form->control('waste_category_id', ['label' => false, 'class' => 'form-select', 'style' => 'border: none;
                                       background-color: var(--bs-gray-100);', 'empty' => 'Select Category','onchange' => 'optioncategorycalling(this.value)']); ?>

                                      </div>

                                      <!-- <div class="col-md-6 fv-row" style="margin-top: 20px;">
                                        <label class="fs-5 fw-semibold mb-2">Product Code<span class="text-danger">*</span></label>
                                       
                                        <input type="text" class="form-control" placeholder="Product Code" name="product_code" id="product_code" onkeypress="return AvoidSpace(this.value)" />
                                      </div> -->

                                      <div class="col-md-6 fv-row " style="margin-top: 20px;">
                                        <label for="inputlname" class="fs-5 fw-semibold mb-2"> Product Code</label>
                                        <!-- <label for="inputlname" class="fs-5 fw-semibold mb-2"> Product Code<span class="text-danger">*</span></label> -->
                                        <?php echo $this->Form->control('product_code', ['label' => false, 'class' => 'form-control select', 'style' => 'border: none;
                                       background-color: var(--bs-gray-100);', 'empty' => 'Select Product Code','options' => '','onchange'=>'productcalling(this.value)' ]); ?>

                                      </div>

                                      <div class="col-md-6 fv-row" style="margin-top: 20px;">
                                        <label class="fs-5 fw-semibold mb-2">Product Name</label>
                                        <!-- <label class="fs-5 fw-semibold mb-2">Product Name<span class="text-danger">*</span></label> -->
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="text" class="form-control form-control-solid" placeholder="Product Name" name="product_name" id="product_name" onkeypress="return AvoidSpace(this.value)" />
                                      </div>


                                      <div class="col-md-6 fv-row" style="margin-top: 20px;">
                                        <label class="fs-5 fw-semibold mb-2 text-center">Message</label>
                                        <textarea class="form-control form-control-solid" rows="2" name="description" placeholder=""></textarea>
                                      </div>

                                    </div>


                                    <!-- <div class="col-lg-6 col-md-6 col-sm-12 offset-lg-3 offset-md-3 fv-row text-center" style="padding-top: 10px;">
                                      <label class="fs-5 fw-semibold mb-2 text-center">Message</label>
                                      <textarea class="form-control form-control-solid" rows="2" name="message" placeholder=""></textarea>
                                    </div> -->



                                    <div class="text-center mt-4">

                                      <button type="submit" class="btn " id="kt_contact_submit_button" style="background: #f4de6d;">
                                        <span class="indicator-label" style="color: #fff;">Submit</span>
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
                              Key features of an EPR system include:
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
                                    <img class="w-40px align-start" src="/webroot/img/product_design.png" alt="" />
                                  </div>
                                  <!--end::Logo-->

                                  <!--begin::Title-->
                                  <div class="text-gray-800 fs-4 fw-bold letter-spacing">
                                    Product Design:
                                  </div>
                                  <!--end::Title-->
                                </h3>
                                <!--end::Heading-->

                                <!--begin::Description-->
                                <div class="text-gray-700 fs-6 fw-semibold">
                                  Producers are encouraged to design products that are more easily recyclable, repairable, and have fewer negative environmental impacts.
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
                                    <img class="w-40px align-start" src="/webroot/img/waste.png" alt="" />
                                  </div>
                                  <!--end::Logo-->

                                  <!--begin::Title-->
                                  <div class="text-gray-800 fs-4 fw-bold letter-spacing">
                                    Waste Collection and Recycling:
                                  </div>
                                  <!--end::Title-->
                                </h3>
                                <!--end::Heading-->

                                <!--begin::Description-->
                                <div class="text-gray-700 fs-6 fw-semibold">
                                  Producers are responsible for setting up and financing systems for the collection, recycling, and proper disposal of their products once they become waste.
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
                                    <img class="w-40px align-start" src="/webroot/img/investment-insurance.png" alt="" />
                                  </div>
                                  <!--end::Logo-->

                                  <!--begin::Title-->
                                  <div class="text-gray-800 fs-4 fw-bold letter-spacing">
                                    Financial Responsibility:
                                  </div>
                                  <!--end::Title-->
                                </h3>
                                <!--end::Heading-->

                                <!--begin::Description-->
                                <div class="text-gray-700 fs-6 fw-semibold">
                                  Producers may have to pay fees or contribute to a fund that supports recycling and waste management efforts. This can provide an incentive for producers to design products that are less wasteful.
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
                                    <img class="w-40px align-start" src="/webroot/img/Regulatory.png" alt="" />
                                  </div>
                                  <!--end::Logo-->

                                  <!--begin::Title-->
                                  <div class="text-gray-800 fs-4 fw-bold letter-spacing">
                                    Regulatory Framework:
                                  </div>
                                  <!--end::Title-->
                                </h3>
                                <!--end::Heading-->

                                <!--begin::Description-->
                                <div class="text-gray-700 fs-6 fw-semibold">
                                  EPR programs are often established through legislation or regulations that outline the specific responsibilities of producers, government agencies, and other stakeholders.
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
                                    <img class="w-40px align-start" src="/webroot/img/Multi-Stakeholder.png" alt="" />
                                  </div>
                                  <!--end::Logo-->

                                  <!--begin::Title-->
                                  <div class="text-gray-800 fs-4 fw-bold letter-spacing">
                                    Multi-Stakeholder Collaboration:
                                  </div>
                                  <!--end::Title-->
                                </h3>
                                <!--end::Heading-->

                                <!--begin::Description-->
                                <div class="text-gray-700 fs-6 fw-semibold">
                                  Effective EPR systems involve collaboration between producers, consumers, governments, recycling industries, and other stakeholders to ensure that products are managed responsibly.
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
                                    <img class="w-40px align-start" src="/webroot/img/Reduced-impact.png" alt="" />
                                  </div>
                                  <!--end::Logo-->

                                  <!--begin::Title-->
                                  <div class="text-gray-800 fs-4 fw-bold letter-spacing">
                                    Reduced Environmental Impact:
                                  </div>
                                  <!--end::Title-->
                                </h3>
                                <!--end::Heading-->

                                <!--begin::Description-->
                                <div class="text-gray-700 fs-6 fw-semibold">
                                  The ultimate goal of EPR is to minimize the environmental impact of products and reduce the amount of waste that ends up in landfills or pollutes the environment.
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

                  <!--begin::Description-->
                  <div class="text-gray-700 text-start fs-4 fw-semibold opacity-100" style="margin-top: 20px">
                    <p>
                      EPR is implemented differently in various countries and regions, and the specific products covered under EPR programs can vary widely. Common examples of products targeted by EPR programs include electronic waste (e-waste), packaging materials, batteries, tires, and certain hazardous materials.
                    </p>
                    <p>
                      By implementing EPR, Governments aim to promote sustainable production practices, reduce the environmental burden of waste, and create incentives for producers to adopt more environmentally friendly designs and materials.
                    </p>
                    <p>
                      The EPR Authorization is issued by the Central Pollution Control Board (CPCB), which is a part of the Ministry of Environment, Forests, and Climate Change (MoEFCC) of the Government of India.
                    </p>
                    <span style="color: black;"><b> Official notification for the registration of Plastic Waste Management – Government of India </b></span>
                    <a href="/webroot/img/pwm-amendment-rules-2022.pdf">&nbsp;View/Download</a>
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
  // function email_check()

  // {
  //   //alert('hi');
  //   var email = $('#emailAddress').val();
  //   // var mbl = $('#mobile_no').val();

  //   //alert(email);
  //   $.ajax({

  //     async: true,
  //     dataType: "html",

  //     url: '<?php echo $this->Url->webroot; ?>ajaxcalling/' + email,


  //     success: function(data, textStatus) {
  //       //alert(data);
  //       if (data == 1) {


  //         $("#error_email").html('Email ID already exists, Try another');
  //         //alert('Email already present, Try another!');

  //         $("#emailAddress").val('').trigger('change');
  //         // alert('Mobile No already present, Try another!')
  //         // $("#mobile_no").val('').trigger('change');
  //       }
  //       // alert(data);
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



  function optioncalling(val) 

{
  $("#product-code").val('');
  $("#product_name").val('');
  //alert(val);
  // var email = $('#emailAddress').val();
 var val;

  //alert(mbl);
  $.ajax({

    async: true,
    dataType: "html",

    url: '<?php echo $this->Url->webroot; ?>ajaxoption/' + val,


    success: function(data, textStatus) {
      //alert(data);

      
      $("#waste-category-id").html(data);
      //alert(data);
      
    
         
    }



  });


}
  function optioncategorycalling(val) 

{
  $("#product_name").val('');
  //alert(val);
  // var email = $('#emailAddress').val();
 var val;
 var waste_type=$("#waste-type-id").val();

 //alert(waste_type);

  //alert(mbl);
  $.ajax({

    async: true,
    dataType: "html",

    url: '<?php echo $this->Url->webroot; ?>ajaxoptioncategory/' + val + '/' + waste_type,


    success: function(data, textStatus) {
     // alert(data);product-code
      
      $("#product-code").html(data);

    
      //alert(data);
    }


  });

}
  function productcalling(val) 

{
  //alert(val);
  // var email = $('#emailAddress').val();
 var val;
 var waste_type=$("#waste-type-id").val();
 var waste_category=$("#waste-category-id").val();

 //alert(waste_type);

  //alert(mbl);
  $.ajax({

    async: true,
    dataType: "html",

    url: '<?php echo $this->Url->webroot; ?>ajaxproductcalling/' + waste_type + '/' + waste_category + '/'+ val,


    success: function(data, textStatus) {
    // alert(data);
      
      //$("#product_name").html(data);
       $("#product_name").val(data);
 
    
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
      'epr_role_id': {
        required: true
      },
      'waste_type_id': {
        required: true
      },
      // 'waste_category_id': {
      //   required: true
      // },
      'state_id': {
        required: true
      },
      // 'product_code': {
      //   required: true
      // },
      'epr_plastic_id': {
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
      'state_id': {
        required: "Select State"
      },
      'epr_role_id': {
        required: "Select Role"
      },
      'waste_type_id': {
        required: "Select Type of waste"
      },
      // 'waste_category_id': {
      //   required: "Select Category"
      // },
      // 'product_code': {
      //   required: "Select Product code"
      // },
      'epr_plastic_id': {
        required: "Select Product code"
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