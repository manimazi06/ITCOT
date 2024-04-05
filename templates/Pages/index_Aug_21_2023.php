<!-- Slider - Wrapper - Must Use "simple-ver-21" class -->

<style>
  /* .fas
{
    margin-right:4px !important; 
}

.pagination .fas
{
    margin-right:0px !important; 
} */

  .pagination a {
    color: #fff;
  }

  .card ul {
    padding: 0px;
    margin: 0px;
    list-style: none;
  }

  .news-item {
    padding: 4px 4px;
    margin: 0px;
    border-bottom: 1px dotted #555;
  }
</style>

<section>
  <!--begin::Toolbar-->
  <div class="toolbar py-5 py-lg-5" id="kt_toolbar">
    <!--begin::Container-->
    <div id="kt_toolbar_container" class="container-xxl py-5">
      <!--begin::Row-->
      <div class="row gy-0 gx-10">
        <div class="col-xl-8">
          <div
            id="simples-ver-21"
            class="carousel sz-slider simple-ver-21 simple-ver-21-btn"
            data-type="slider"
            data-width="100%"
            data-height="420"
            data-animation="dragX"
            data-background="hero"
            data-image="cover"
            data-ind-direction="x"
            data-ind-type="absolute"
            data-ind-position="bottom"
            data-intervals="yes"
            data-start="auto"
            data-sticky="yes"
            data-pauses="yes"
            data-duration="600"
            data-timing="easeoutincubic"
            data-threshold="1"
            data-allowPageScroll="vertical"
            style="border-radius: 10px"
          >
            <!-- Carousel - Indicators -->
            <ol class="carousel-indicators simple-ver-21-indicators">
              <li
                data-bs-slide-to="0"
                data-bs-target="#simples-ver-21"
                class="active"
              ></li>
              <li data-bs-slide-to="1" data-bs-target="#simples-ver-21"></li>
              <li data-bs-slide-to="2" data-bs-target="#simples-ver-21"></li>
              <!-- <li data-bs-slide-to="2" data-bs-target="#simples-ver-21"></li> -->
            </ol>
            <!-- Slides - Wrapper -->
            <div class="carousel-inner">
              <!-- Slide - 1 -->
              <div
                class="slide1 carousel-item active"
                data-item-interval="7000"
              >
                <!-- Image Wrapper -->
                <div class="sz-wrapper">
                  <!-- Background Image -->
                  <img
                    src="<?php echo $this->Url->build(); ?>img/itcot-slider-1.jpg"
                    alt="slide-01"
                    class="sz-bg-img"
                  />
                </div>
                <!-- Simple Version 21 - Layer -->
                <div class="simple-ver-21-layer simple-ver-21-layer-left">
                  <!-- Container -->
                  <div
                    class="sz-animated"
                    data-animation-in="fdInLft:1000:500:animEaseoutexpo"
                  >
                    <span></span>
                    <!-- 1st child -->
                    <span>Getting Loan Easily</span>
                    <!-- 2nd child -->
                    <span>with government scheme</span>
                    <!-- Button -->
                    <a href="#">apply now</a>
                  </div>
                  <!-- End - Container -->
                </div>
                <!-- End - Simple Version 21 - Layer -->
              </div>
              <!-- End - Slide - 1 -->
              <!-- Slide - 3 -->
              <div class="carousel-item" data-item-interval="7000">
                <!-- Image Wrapper -->
                <div class="sz-wrapper">
                  <!-- Background Image -->
                  <img
                    src="<?php echo $this->Url->build(); ?>img/itcot-slider-2.jpg"
                    alt="slide-03"
                    class="sz-bg-img"
                  />
                </div>
                <!-- Simple Version 21 - Layer -->
                <div
                  class="slider2 simple-ver-21-layer simple-ver-21-layer-right"
                >
                  <!-- Container -->
                  <div
                    class="sz-animated"
                    data-animation-in="fdInRgt:1000:500:animEaseoutexpo"
                  >
                    <img src="<?php echo $this->Url->build(); ?>img/msme.png" />
                    <!-- 1st child -->
                    <span>Government schemes</span>
                    <!-- 2nd child -->
                    <span>for starting MSME</span>
                    <!-- Button -->
                    <a href="#">apply now</a>
                  </div>
                  <!-- End - Container -->
                </div>
                <!-- End - Simple Version 21 - Layer -->
              </div>



               <!-- Slide - 1 -->
               <div
                class="slide2 carousel-item active"
                data-item-interval="7000"
              >
                <!-- Image Wrapper -->
                <div class="sz-wrapper">
                  <!-- Background Image -->
                  <img
                    src="<?php echo $this->Url->build(); ?>img/virtual_cfo.jpeg"
                    alt="slide-03"
                    class="sz-bg-img"
                  />
                </div>
                <!-- Simple Version 21 - Layer -->
                <div class="simple-ver-21-layer simple-ver-21-layer-left">
                  <!-- Container -->
                  <div
                    class="sz-animated"
                    data-animation-in="fdInLft:1000:500:animEaseoutexpo"
                  >
                    <span></span>
                    <!-- 1st child -->
                    <span>Virtual <br>CFO</span>
                    <!-- 2nd child -->
                    <span>with government scheme</span>
                    <!-- Button -->
                    <a href="https://itcot.demodev.in/virtualcfo-registrations/virtualcfo">apply now</a>
                  </div>
                  <!-- End - Container -->
                </div>
                <!-- End - Simple Version 21 - Layer -->
              </div>


            </div>
            <!-- Slides - Wrapper - End -->
            <!-- Left Navigation Button -->
            <a
              class="carousel-control-prev carousel-control-btn"
              href="#simples-ver-21"
            >
              <i class="fas fa-long-arrow-alt-left"></i>
            </a>
            <!-- Right Navigation Button -->
            <a
              class="carousel-control-next carousel-control-btn"
              href="#simples-ver-21"
            >
              <i class="fas fa-long-arrow-alt-right"></i>
            </a>
          </div>
          <!-- <div class="card card-xl-stretch bg-body border-0 mb-5 mb-xl-0">
            <div
              class="card-body d-flex flex-column flex-lg-row flex-stack p-lg-15"
            >
              <div
                class="d-flex flex-column justify-content-center align-items-center align-items-lg-start me-10 text-center text-lg-start"
              >
                <h3 class="fs-2hx line-height-lg mb-5">
                  <span class="fw-bold">Brilliant App Ideas</span>
                  <br />
                  <span class="fw-bold">for Startups</span>
                </h3>

                <div class="fs-4 text-muted mb-7">
                  Long before you sit down to put the pen <br />need to make
                  sure you breathe
                </div>
                <a
                  href="#"
                  class="btn btn-success fw-semibold px-6 py-3"
                  data-bs-toggle="modal"
                  data-bs-target="#kt_modal_create_campaign"
                  >Create an Store</a
                >
              </div>

              <img
                src="assets/media/illustrations/sketchy-1/11.png"
                alt=""
                class="mw-200px mw-lg-350px mt-lg-n10"
              />
            </div>
          </div> -->
        </div>
        <div class="col-xl-4">
          <div
            class="card card-xl-stretch bg-body border-0"
            style="height: 420px; overflow: hidden !important"
          >
            <div class="card-body pt-5 mb-xl-9 position-relative">
              <div class="d-flex flex-stack">
                <h4 class="fw-bold text-gray-800 m-0">Press Release</h4>

                <!-- <div class="me-1">
                  <button
                    class="btn btn-icon btn-color-gray-500 w-auto px-0 btn-active-color-primary"
                    data-kt-menu-trigger="click"
                    data-kt-menu-placement="bottom-end"
                    data-kt-menu-overflow="true"
                  >
                    <i class="ki-duotone ki-dots-square fs-1 me-n1">
                      <span class="path1"></span>
                      <span class="path2"></span>
                      <span class="path3"></span>
                      <span class="path4"></span>
                    </i>
                  </button>

                  <div
                    class="menu menu-sub menu-sub-dropdown w-250px w-md-300px"
                    data-kt-menu="true"
                    id="kt_menu_641ac51a8c978"
                  >
                    <div class="px-7 py-5">
                      <div class="fs-5 text-dark fw-bold">Filter Options</div>
                    </div>

                    <div class="separator border-gray-200"></div>

                    <div class="px-7 py-5">
                      <div class="mb-10">
                        <label class="form-label fw-semibold">Status:</label>

                        <div>
                          <select
                            class="form-select form-select-solid"
                            data-kt-select2="true"
                            data-placeholder="Select option"
                            data-dropdown-parent="#kt_menu_641ac51a8c978"
                            data-allow-clear="true"
                          >
                            <option></option>
                            <option value="1">Approved</option>
                            <option value="2">Pending</option>
                            <option value="2">In Process</option>
                            <option value="2">Rejected</option>
                          </select>
                        </div>
                      </div>

                      <div class="mb-10">
                        <label class="form-label fw-semibold"
                          >Member Type:</label
                        >
                        <div class="d-flex">
                          <label
                            class="form-check form-check-sm form-check-custom form-check-solid me-5"
                          >
                            <input
                              class="form-check-input"
                              type="checkbox"
                              value="1"
                            />
                            <span class="form-check-label">Author</span>
                          </label>

                          <label
                            class="form-check form-check-sm form-check-custom form-check-solid"
                          >
                            <input
                              class="form-check-input"
                              type="checkbox"
                              value="2"
                              checked="checked"
                            />
                            <span class="form-check-label">Customer</span>
                          </label>
                        </div>
                      </div>

                      <div class="mb-10">
                        <label class="form-label fw-semibold"
                          >Notifications:</label
                        >

                        <div
                          class="form-check form-switch form-switch-sm form-check-custom form-check-solid"
                        >
                          <input
                            class="form-check-input"
                            type="checkbox"
                            value=""
                            name="notifications"
                            checked="checked"
                          />
                          <label class="form-check-label">Enabled</label>
                        </div>
                      </div>

                      <div class="d-flex justify-content-end">
                        <button
                          type="reset"
                          class="btn btn-sm btn-light btn-active-light-primary me-2"
                          data-kt-menu-dismiss="true"
                        >
                          Reset
                        </button>
                        <button
                          type="submit"
                          class="btn btn-sm btn-primary"
                          data-kt-menu-dismiss="true"
                        >
                          Apply
                        </button>
                      </div>
                    </div>
                  </div>
                </div> -->
              </div>
              <div class="row mt-3">
                <div class="col-xs-12">
                  <ul class="demo1">
                    <li class="news-item">
                      <table cellpadding="4">
                        <tr>
                          <td>
                            <div class="col-2">
                              <div class="dates">
                                <div
                                  class="date-box"
                                  style="
                                    width: 50px;
                                    height: 50px;
                                    border: 1px solid #e7ecf2;
                                  "
                                >
                                  <h4 style="font-size: 28px">26</h4>
                                  <p>MAY</p>
                                </div>
                              </div>
                            </div>
                          </td>
                          <td>
                            <div class="col-10 mt-3">
                              <div class="date-cnt">
                                <h4 style="">
                                  Digital Meters to go smart in Tamilnadu
                                </h4>

                                <span
                                  ><a
                                    href=""
                                    style="
                                      text-decoration: none;
                                      color: #093875;
                                    "
                                  >
                                    Read More >>
                                  </a></span
                                >
                              </div>
                            </div>
                          </td>
                        </tr>
                      </table>
                    </li>
                    <li class="news-item">
                      <table cellpadding="4">
                        <tr>
                          <td>
                            <div class="col-2">
                              <div class="dates">
                                <div
                                  class="date-box"
                                  style="
                                    width: 50px;
                                    height: 50px;
                                    border: 1px solid #e7ecf2;
                                  "
                                >
                                  <h4 style="font-size: 28px">27</h4>
                                  <p>MAY</p>
                                </div>
                              </div>
                            </div>
                          </td>
                          <td>
                            <div class="col-10 mt-3">
                              <div class="date-cnt">
                                <h4 style="">
                                  Smart Meters for all houses in Tamilnadu
                                </h4>

                                <span
                                  ><a
                                    href=""
                                    style="
                                      text-decoration: none;
                                      color: #093875;
                                    "
                                  >
                                    Read More >>
                                  </a></span
                                >
                              </div>
                            </div>
                          </td>
                        </tr>
                      </table>
                    </li>
                    <li class="news-item">
                      <table cellpadding="4">
                        <tr>
                          <td>
                            <div class="col-2">
                              <div class="dates">
                                <div
                                  class="date-box"
                                  style="
                                    width: 50px;
                                    height: 50px;
                                    border: 1px solid #e7ecf2;
                                  "
                                >
                                  <h4 style="font-size: 28px">29</h4>
                                  <p>MAY</p>
                                </div>
                              </div>
                            </div>
                          </td>
                          <td>
                            <div class="col-10 mt-3">
                              <div class="date-cnt">
                                <h4 style="">
                                  Kings Maritech Eco Park to Use Cutting-Edge
                                  Tech to Promote Sustainable Aquaculture
                                </h4>

                                <span>
                                  <a
                                    href=""
                                    style="
                                      text-decoration: none;
                                      color: #093875;
                                    "
                                  >
                                    Read More >>
                                  </a></span
                                >
                              </div>
                            </div>
                          </td>
                        </tr>
                      </table>
                    </li>
                    <li class="news-item">
                      <table cellpadding="4">
                        <tr>
                          <td>
                            <div class="col-2">
                              <div class="dates">
                                <div
                                  class="date-box"
                                  style="
                                    width: 50px;
                                    height: 50px;
                                    border: 1px solid #e7ecf2;
                                  "
                                >
                                  <h4 style="font-size: 28px">27</h4>
                                  <p>MAY</p>
                                </div>
                              </div>
                            </div>
                          </td>
                          <td>
                            <div class="col-10 mt-3">
                              <div class="date-cnt">
                                <h4 style="">
                                  Smart Meters for all houses in Tamilnadu
                                </h4>

                                <span
                                  ><a
                                    href=""
                                    style="
                                      text-decoration: none;
                                      color: #093875;
                                    "
                                  >
                                    Read More >>
                                  </a></span
                                >
                              </div>
                            </div>
                          </td>
                        </tr>
                      </table>
                    </li>
                  </ul>
                </div>
              </div>
              <!-- <div class="d-flex flex-center mb-5 mb-xxl-0">
                <div
                  id="kt_charts_mixed_widget_16_chart"
                  style="height: 260px"
                ></div>
              </div>

              <div
                class="text-center position-absolute bottom-0 start-50 translate-middle-x w-100 mb-10"
              >
                <p class="fw-semibold fs-4 text-gray-400 mb-7 px-5">
                  Long before you sit down to put the <br />make sure you
                  breathe
                </p>

                <div class="m-0">
                  <a
                    href="#"
                    class="btn btn-success fw-semibold"
                    data-bs-toggle="modal"
                    data-bs-target="#kt_modal_invite_friends"
                    >Read More</a
                  >
                </div>
              </div> -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="row">
          <div class="col-lg-8 col-md-8 col-sm-12 col-12 p-0 m-0">
            <div
              id="simples-ver-21"
              class="carousel sz-slider simple-ver-21 simple-ver-21-btn"
              data-type="slider"
              data-width="100%"
              data-height="520"
              data-animation="dragX"
              data-background="hero"
              data-image="cover"
              data-ind-direction="x"
              data-ind-type="absolute"
              data-ind-position="bottom"
              data-intervals="yes"
              data-start="auto"
              data-sticky="yes"
              data-pauses="yes"
              data-duration="600"
              data-timing="easeoutincubic"
              data-threshold="1"
              data-allowPageScroll="vertical"
            >
             
              <ol class="carousel-indicators simple-ver-21-indicators">
                <li
                  data-bs-slide-to="0"
                  data-bs-target="#simples-ver-21"
                  class="active"
                ></li>
                <li data-bs-slide-to="1" data-bs-target="#simples-ver-21"></li>
                <li data-bs-slide-to="2" data-bs-target="#simples-ver-21"></li>
              </ol>
              <div class="carousel-inner">
               
                <div
                  class="slide1 carousel-item active"
                  data-item-interval="7000"
                >
                  <div class="sz-wrapper">
                    <img
                      src="<?php echo $this->Url->build(); ?>img/itcot-slider-1.jpg"
                      alt="slide-01"
                      class="sz-bg-img"
                    />
                  </div>
                  <div class="simple-ver-21-layer simple-ver-21-layer-left">
                    <div
                      class="sz-animated"
                      data-animation-in="fdInLft:1000:500:animEaseoutexpo"
                    >
                     
                      <span>Getting Loan Easily</span>
                      <span>with goventment scheme</span>
                      <a href="#">apply now</a>
                    </div>
                  </div>
                </div>
                <div class="carousel-item" data-item-interval="7000">
                  <div class="sz-wrapper">
                    <img
                      src="<?php echo $this->Url->build(); ?>img/itcot-slider-2.jpg"
                      alt="slide-03"
                      class="sz-bg-img"
                    />
                  </div>
                  <div
                    class="slider2 simple-ver-21-layer simple-ver-21-layer-right"
                  >
                    <div
                      class="sz-animated"
                      data-animation-in="fdInRgt:1000:500:animEaseoutexpo"
                    >
                      <img
                        src="<?php echo $this->Url->build(); ?>img/msme.png"
                      />
                      <span>Government schemes</span>
                      <span>for starting MSME</span>
                      <a href="#">apply now</a>
                    </div>
                  </div>
                </div>
              </div>
              <a
                class="carousel-control-prev carousel-control-btn"
                href="#simples-ver-21"
              >
                <i class="fas fa-long-arrow-alt-left"></i>
              </a>
              <a
                class="carousel-control-next carousel-control-btn"
                href="#simples-ver-21"
              >
                <i class="fas fa-long-arrow-alt-right"></i>
              </a>
            </div>
          </div>

          <div class="col-lg-4 col-md-4 col-sm-12 col-12 py-3">
            <div class="card panel-default">
              <div class="card-header">
                <span class="glyphicon glyphicon-list-alt"></span
                ><b style="color: #093875; font-size: 20px">Press Release</b>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-xs-12">
                    <ul class="demo1">
                      <li class="news-item">
                        <table cellpadding="4">
                          <tr>
                            <td>
                              <div class="col-2">
                                <div class="dates">
                                  <div
                                    class="date-box"
                                    style="
                                      width: 100px;
                                      height: 100px;
                                      border: 1px solid #e7ecf2;
                                    "
                                  >
                                    <h4 style="font-size: 28px">26</h4>
                                    <p>MAY</p>
                                  </div>
                                </div>
                              </div>
                            </td>
                            <td>
                              <div class="col-10 mt-3">
                                <div class="date-cnt">
                                  <h4 style="font-size: 16px">
                                    Digital Meters to go smart in Tamilnadu
                                  </h4>

                                  <span
                                    ><a
                                      href=""
                                      style="
                                        text-decoration: none;
                                        color: #093875;
                                      "
                                    >
                                      Read More >>
                                    </a></span
                                  >
                                </div>
                              </div>
                            </td>
                          </tr>
                        </table>
                      </li>
                      <li class="news-item">
                        <table cellpadding="4">
                          <tr>
                            <td>
                              <div class="col-2">
                                <div class="dates">
                                  <div
                                    class="date-box"
                                    style="
                                      width: 100px;
                                      height: 100px;
                                      border: 1px solid #e7ecf2;
                                    "
                                  >
                                    <h4 style="font-size: 28px">27</h4>
                                    <p>MAY</p>
                                  </div>
                                </div>
                              </div>
                            </td>
                            <td>
                              <div class="col-10 mt-3">
                                <div class="date-cnt">
                                  <h4 style="font-size: 16px">
                                    Smart Meters for all houses in Tamilnadu
                                  </h4>

                                  <span
                                    ><a
                                      href=""
                                      style="
                                        text-decoration: none;
                                        color: #093875;
                                      "
                                    >
                                      Read More >>
                                    </a></span
                                  >
                                </div>
                              </div>
                            </td>
                          </tr>
                        </table>
                      </li>
                      <li class="news-item">
                        <table cellpadding="4">
                          <tr>
                            <td>
                              <div class="col-2">
                                <div class="dates">
                                  <div
                                    class="date-box"
                                    style="
                                      width: 100px;
                                      height: 100px;
                                      border: 1px solid #e7ecf2;
                                    "
                                  >
                                    <h4 style="font-size: 28px">29</h4>
                                    <p>MAY</p>
                                  </div>
                                </div>
                              </div>
                            </td>
                            <td>
                              <div class="col-10 mt-3">
                                <div class="date-cnt">
                                  <h4 style="font-size: 16px">
                                    Kings Maritech Eco Park to Use Cutting-Edge
                                    Tech to Promote Sustainable Aquaculture
                                  </h4>

                                  <span>
                                    <a
                                      href=""
                                      style="
                                        text-decoration: none;
                                        color: #093875;
                                      "
                                    >
                                      Read More >>
                                    </a></span
                                  >
                                </div>
                              </div>
                            </td>
                          </tr>
                        </table>
                      </li>
                      <li class="news-item">
                        <table cellpadding="4">
                          <tr>
                            <td>
                              <div class="col-2">
                                <div class="dates">
                                  <div
                                    class="date-box"
                                    style="
                                      width: 100px;
                                      height: 100px;
                                      border: 1px solid #e7ecf2;
                                    "
                                  >
                                    <h4 style="font-size: 28px">27</h4>
                                    <p>MAY</p>
                                  </div>
                                </div>
                              </div>
                            </td>
                            <td>
                              <div class="col-10 mt-3">
                                <div class="date-cnt">
                                  <h4 style="font-size: 16px">
                                    Smart Meters for all houses in Tamilnadu
                                  </h4>

                                  <span
                                    ><a
                                      href=""
                                      style="
                                        text-decoration: none;
                                        color: #093875;
                                      "
                                    >
                                      Read More >>
                                    </a></span
                                  >
                                </div>
                              </div>
                            </td>
                          </tr>
                        </table>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> -->
  <!-- <div class="row">
                  <div class="col-2 ">
                     <div class="dates">
                        <div
                           class="date-box"
                           style="
                           width: 100px;
                           height: 100px;
                           border: 1px solid #e7ecf2;
                           "
                           >
                           <h4 style="font-size: 28px;">26</h4>
                           <p>MAY</p>
                        </div>
                     </div>
                  </div>
                  <div class="col-10 mt-3">
                     <div class="date-cnt">
                        <h4 style="font-size: 16px;">Digital Meters to go smart in Tamilnadu</h4>
                        <p>
                           Sources in Tangedco said the Industrial Technical
                           Consultancy Organisation of 
                           Tamil Nadu (ITCOT) has been assigned to prepare a
                           preliminary technical report
                        </p>
                        <span><a href="" style="text-decoration: none; color:#093875;"> Read More >> </a></span>
                     </div>
                  </div>
                  <div class="col-2 ">
                     <div class="dates">
                        <div
                           class="date-box"
                           style="
                           width: 100px;
                           height: 100px;
                           border: 1px solid #e7ecf2;
                           "
                           >
                           <h4 style="font-size: 28px;">27</h4>
                           <p>MAY</p>
                        </div>
                     </div>
                  </div>
                  <div class="col-10 mt-3">
                     <div class="date-cnt">
                        <h4 style="font-size: 16px;">Smart Meters for all houses in Tamilnadu</h4>
                        <p>
                           The Tamil Nadu Generation and Distribution Corporation
                           (Tangedco) has assigned Industrial Technical Consultancy Organization of Tamil
                           Nadu (ITCOT)
                        </p>
                        <span><a href="" style="text-decoration: none; color:#093875;"> Read More >> </a></span>
                     </div>
                  </div>
                  <div class="col-2 ">
                     <div class="dates">
                        <div
                           class="date-box"
                           style="
                           width: 100px;
                           height: 100px;
                           border: 1px solid #e7ecf2;
                           "
                           >
                           <h4 style="font-size: 28px;">29</h4>
                           <p>MAY</p>
                        </div>
                     </div>
                  </div>
                  <div class="col-10 mt-3 ">
                     <div class="date-cnt">
                        <h4 style="font-size: 16px;">
                           Kings Maritech Eco Park to Use Cutting-Edge Tech 
                           to Promote Sustainable Aquaculture
                        </h4>
                        <p>
                           The Kings Maritech Eco Park, promoted by Kings Infra
                           Venture Ltd
                        </p>
                        <span > <a href="" style="text-decoration: none; color:#093875;"> Read More >> </a></span>
                     </div>
                  </div>
                  <div class="col-2 ">
                     <div class="dates">
                        <div
                           class="date-box"
                           style="
                           width: 100px;
                           height: 100px;
                           border: 1px solid #e7ecf2;
                           "
                           >
                           <h4 style="font-size: 28px;">27</h4>
                           <p>MAY</p>
                        </div>
                     </div>
                  </div>
                  <div class="col-10 mt-3">
                     <div class="date-cnt">
                        <h4 style="font-size: 16px;">Smart Meters for all houses in Tamilnadu</h4>
                        <p>
                           The Tamil Nadu Generation and Distribution Corporation
                           (Tangedco) has assigned Industrial Technical Consultancy Organization of Tamil
                           Nadu (ITCOT)
                        </p>
                        <span><a href="" style="text-decoration: none; color:#093875;"> Read More >> </a></span>
                     </div>-->
</section>

<div class="feature padding-tb">
  <div class="container">
    <div class="feature__area">
      <div class="row g-4 justify-content-center">
        <div class="col-lg-4 col-sm-6 col-12">
          <div class="feature__item">
            <div class="feature__inner">
              <div class="feature__thumb">
                <img
                  src="<?php echo $this->Url->build(); ?>img/001.png"
                  alt="feature icon"
                />
                <span>01</span>
              </div>
              <div class="feature__content">
                <h4>Gathering information</h4>
                <p>
                  All information about the Union and State Government Schemes
                  for the Entrepreneurs
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 col-12">
          <div class="feature__item">
            <div class="feature__inner">
              <div class="feature__thumb">
                <img
                  src="<?php echo $this->Url->build(); ?>img/002.png"
                  alt="feature icon"
                />
                <span>02</span>
              </div>
              <div class="feature__content">
                <h4>Submit your project report</h4>
                <p>
                  A Project Report is a document which details out about the
                  project or a business
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 col-12">
          <div class="feature__item">
            <div class="feature__inner">
              <div class="feature__thumb">
                <img
                  src="<?php echo $this->Url->build(); ?>img/003.png"
                  alt="feature icon"
                />
                <span>03</span>
              </div>
              <div class="feature__content">
                <h4>Succecfully getting loan</h4>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem
                  ipsum, dolor sit ame...
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<section class="about" style="background: #fff;padding-bottom:30px;">
  <div class="container">
    <div class="row g-5 mt-5 p-0 m-0">
      <div class="col-lg-12">
        <div class="row">
          <div class="col-lg-6 col-12">
            <div class="about__content">
              <h6>Who we are</h6>
              <h2>
                Excellent services for <br />
                your success
              </h2>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                enim ad minim veniam, quis nostrud exercitation ullamco laboris
                nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                in reprehenderit in voluptate velit esse cillum dolore eu fugiat
                nulla pariatur
              </p>
              <ul>
                <li>
                  <div class="icon">
                    <img
                      src="<?php echo $this->Url->build(); ?>img/digi.png"
                      alt="about icon"
                    />
                  </div>
                  <div class="text">
                    <h6>Digitization of ITCOT</h6>
                  </div>
                </li>
                <li>
                  <div class="icon">
                    <img
                      src="<?php echo $this->Url->build(); ?>img/002.png"
                      alt="about icon"
                    />
                  </div>
                  <div class="text">
                    <h6>Project Report</h6>
                  </div>
                </li>
              </ul>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                enim ad minim veniam, quis nostrud exercitation ullamco laboris
                nisi.
              </p>
              <a href="#" class="lab-btn mt-3">Read More</a>
            </div>
          </div>
          <div class="col-lg-6 col-12">
            <div class="about__thumb">
              <div class="row g-4">
                <div class="col-12">
                  <div class="thumb">
                    <img
                      src="<?php echo $this->Url->build(); ?>img/about.jpg"
                      alt="about"
                      class="w-100"
                    />
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- <div class="col-lg-6 col-md-6 col-sm-12">
           <div class="row">
             <div class="col-lg-12 col-md-12 col-sm-12">
               <div class="press-head" style="margin-left: 37px;">
                 <h4 > Press Release</h4>
                   <hr
                    style="
                    width: 180px;
                    border: 1px solid;
                    border-radius: 3px;
                    border-color: #093875;
                    margin-top: 5px;
                   "
                    />
             </div>
          </div>
       </div>
               <div class="row">
                  <div class="col-2 ">
                     <div class="dates">
                        <div
                           class="date-box"
                           style="
                           width: 110px;
                           height: 110px;
                           border: 1px solid #e7ecf2;
                           "
                           >
                           <h4>26</h4>
                           <p>MAY</p>
                        </div>
                     </div>
                  </div>
                  <div class="col-10">
                     <div class="date-cnt">
                        <h4>Digital Meters to go smart in Tamilnadu</h4>
                        <p>
                           Sources in Tangedco said the Industrial Technical
                           Consultancy Organisation of 
                           Tamil Nadu (ITCOT) has been assigned to prepare a
                           preliminary technical report
                        </p>
                        <span><a href="" style="text-decoration: none; color:#093875;"> Read More >> </a></span>
                     </div>
                  </div>
                  <div class="col-2 mt-5">
                     <div class="dates">
                        <div
                           class="date-box"
                           style="
                           width: 110px;
                           height: 110px;
                           border: 1px solid #e7ecf2;
                           "
                           >
                           <h4>27</h4>
                           <p>MAY</p>
                        </div>
                     </div>
                  </div>
                  <div class="col-10 mt-5">
                     <div class="date-cnt">
                        <h4>Smart Meters for all houses in Tamilnadu</h4>
                        <p>
                           The Tamil Nadu Generation and Distribution Corporation
                           (Tangedco) has assigned Industrial Technical Consultancy Organization of Tamil
                           Nadu (ITCOT)
                        </p>
                        <span><a href="" style="text-decoration: none; color:#093875;"> Read More >> </a></span>
                     </div>
                  </div>
                  <div class="col-2 mt-5">
                     <div class="dates">
                        <div
                           class="date-box"
                           style="
                           width: 110px;
                           height: 110px;
                           border: 1px solid #e7ecf2;
                           "
                           >
                           <h4>29</h4>
                           <p>MAY</p>
                        </div>
                     </div>
                  </div>
                  <div class="col-10 mt-5">
                     <div class="date-cnt">
                        <h4>
                           Kings Maritech Eco Park to Use Cutting-Edge Tech 
                           to Promote Sustainable Aquaculture
                        </h4>
                        <p>
                           The Kings Maritech Eco Park, promoted by Kings Infra
                           Venture Ltd
                        </p>
                        <span > <a href="" style="text-decoration: none; color:#093875;"> Read More >> </a></span>
                     </div>
                  </div>
               </div> -->
        </div>

        <!-- </div> -->
      </div>
    </div>
  </div>
</section>
<!--
   <div class="row m-0 service">
     <div class="col-lg-12 col-md-12 col-sm-12">
       <div class="our_service">
         <h4>Our Services</h4>
         <p>
           Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
           eiusmod tempor <br />
           incididunt ut labore et dolore magna aliqua. Ut enim ad minim
           veniam
         </p>
           <div class="row" style="display: flex; justify-content: center;">
       <div class="col-lg-3 col-md-3 col-sm-12">
         <img class="first-imges img-fluid" src="<?php echo $this->Url->build(); ?>assets/image/img-1.png" alt="" />
         <div class="img-cnt-1">
           <h4>
             Government Schemes <br />
             for Starting MSME
           </h4>
           <p>
             Lorem ipsum dolor sit amet, <br />
             consectetur adipiscing elit, sed do
           </p>
         </div>
       </div>
        <div class="col-lg-4 col-md-4 col-sm-12">
         <img class="first-imges img-fluid" src="./assets/image/img-2.png" alt="" />
         <div class="img-cnt-2">
           <h4>
           Union and State Govt <br /> 
           Schemes !!
             for Starting MSME
           </h4>
           <p>
             Lorem ipsum dolor sit amet, <br />
             consectetur adipiscing elit, sed do
           </p>
         </div>
       </div> 
       <div class="col-lg-3 col-md-3 col-sm-12">
         <img class="first-imges img-fluid" src="<?php echo $this->Url->build(); ?>assets/image/img-3.png" alt="" />
         <div class="img-cnt-3">
           <h4>
           Project Report for <br />
            Bank Loan – Apply !! 
             
           </h4>
           <p>
             Lorem ipsum dolor sit amet, <br />
             consectetur adipiscing elit, sed do
           </p>
         </div>
       </div>
       <div class="col-lg-3 col-md-3 col-sm-12">
         <img class="first-imges img-fluid" src="<?php echo $this->Url->build(); ?>assets/image/img-4.png" alt="" />
         <div class="img-cnt-4">
           <h4>
           Digi-Library <br>
           Get Subscribe at just Rs.1000/-
           </h4>
           <p>
             Lorem ipsum dolor sit amet, <br />
             consectetur adipiscing elit, sed do
           </p>
         </div>
       </div>
     </div>
       </div>
     </div>
   </div>
   
   -->
<!-- IMGAE CONTENT -->
<!-- <div class="img-content">
   <div class="container">
      <div class="row">
         <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="press-head">
               <h4>Press Release</h4>
               <hr
                  style="
                  width: 180px;
                  border: 1px solid;
                  border-radius: 3px;
                  border-color: #093875;
                  margin-top: 5px;
                  "
                  />
            </div>
         </div>
         <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12">
               <div class="row">
                  <div class="col-2 ">
                     <div class="dates">
                        <div
                           class="date-box"
                           style="
                           width: 110px;
                           height: 110px;
                           border: 1px solid #e7ecf2;
                           "
                           >
                           <h4>26</h4>
                           <p>MAY</p>
                        </div>
                     </div>
                  </div>
                  <div class="col-10">
                     <div class="date-cnt">
                        <h4>Digital Meters to go smart in Tamilnadu</h4>
                        <p>
                           Sources in Tangedco said the Industrial Technical
                           Consultancy Organisation of 
                           Tamil Nadu (ITCOT) has been assigned to prepare a
                           preliminary technical report
                        </p>
                        <span><a href="" style="text-decoration: none; color:#093875;"> Read More >> </a></span>
                     </div>
                  </div>
                  <div class="col-2 mt-5">
                     <div class="dates">
                        <div
                           class="date-box"
                           style="
                           width: 110px;
                           height: 110px;
                           border: 1px solid #e7ecf2;
                           "
                           >
                           <h4>27</h4>
                           <p>MAY</p>
                        </div>
                     </div>
                  </div>
                  <div class="col-10 mt-5">
                     <div class="date-cnt">
                        <h4>Smart Meters for all houses in Tamilnadu</h4>
                        <p>
                           The Tamil Nadu Generation and Distribution Corporation
                           (Tangedco) has assigned Industrial Technical Consultancy Organization of Tamil
                           Nadu (ITCOT)
                        </p>
                        <span><a href="" style="text-decoration: none; color:#093875;"> Read More >> </a></span>
                     </div>
                  </div>
                  <div class="col-2 mt-5">
                     <div class="dates">
                        <div
                           class="date-box"
                           style="
                           width: 110px;
                           height: 110px;
                           border: 1px solid #e7ecf2;
                           "
                           >
                           <h4>29</h4>
                           <p>MAY</p>
                        </div>
                     </div>
                  </div>
                  <div class="col-10 mt-5">
                     <div class="date-cnt">
                        <h4>
                           Kings Maritech Eco Park to Use Cutting-Edge Tech 
                           to Promote Sustainable Aquaculture
                        </h4>
                        <p>
                           The Kings Maritech Eco Park, promoted by Kings Infra
                           Venture Ltd
                        </p>
                        <span > <a href="" style="text-decoration: none; color:#093875;"> Read More >> </a></span>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
               <div class="cnt-union" style="margin-top: 60px;">
                  <h4>Union & State Government Schemes</h4>
                  <p>
                     Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                     <br />
                     do eiusmod tempor incididunt ut labore.
                  </p>
                  <p>
                     Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                     <br />
                     do eiusmod tempor incididunt ut labore.
                  </p>
                  <a href="#">    <a href="#" class="lab-btn mt-3">Read More</a> </a>
                  <div class="msme-img" >
                     <img class="msme-img-logo" src="<?php echo $this->Url->build(); ?>assets/image/pngegg 1.png" alt="" />
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div> -->
<div class="multiple-items-11-wrapper" style="padding-bottom: 30px;">
  <div class="container">
    <div class="press-head">
      <h4>Customers Feedbacks</h4>
      <hr
        style="
          width: 180px;
          border: 1px solid;
          border-radius: 3px;
          border-color: #eba939;
          margin-top: 5px;
        "
      />
    </div>
    <!-- Carousel - Wrapper - Must Use "multiple-items-11" class -->
    <div
      id="multiples-items-11"
      class="carousel sz-slider multiple-items-11 multiple-items-11-btn"
      data-type="carousel"
      data-width="100%"
      data-height="330px"
      data-animation="dragX"
      data-items="3"
      data-xlscreen="3"
      data-lgscreen="2"
      data-mdscreen="2"
      data-smscreen="1"
      data-move="1"
      data-ind-direction="x"
      data-ind-type="absolute"
      data-ind-position="bottom"
      data-intervals="yes"
      data-start="auto"
      data-sticky="yes"
      data-pauses="yes"
      data-duration="300"
      data-timing="easeout"
      data-threshold="1"
      data-allowPageScroll="vertical"
    >
      <ol class="carousel-indicators multiple-items-11-indicators">
        <li
          data-bs-slide-to="0"
          data-bs-target="#multiples-items-11"
          class="active"
        ></li>
        <li data-bs-slide-to="1" data-bs-target="#multiples-items-11"></li>
        <li data-bs-slide-to="2" data-bs-target="#multiples-items-11"></li>
        <li data-bs-slide-to="3" data-bs-target="#multiples-items-11"></li>
        <li data-bs-slide-to="4" data-bs-target="#multiples-items-11"></li>
        <li data-bs-slide-to="5" data-bs-target="#multiples-items-11"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active" data-item-interval="10000">
          <div class="multiple-items-11-layer">
            <div>
              <img
                src="<?php echo $this->Url->build(); ?>img/pro1.jpg"
                alt="img-1"
              />
              <div>
                <a href="#">Leather products</a>
                <a href="#">S. Manikansan</a>
              </div>
            </div>
            <span
              >Donec vulputate viverra ultrici lorem tin cidunt elementum ae an
              accumsan ultri ices urna ultrici lorem tin nt elementum ae an acc
              cidunt ele.</span
            >
          </div>
        </div>
        <div class="carousel-item" data-item-interval="10000">
          <div class="multiple-items-11-layer">
            <div>
              <img
                src="<?php echo $this->Url->build(); ?>img/pro2.jpg"
                alt="img-2"
              />
              <div>
                <a href="#">Xeroxing</a>
                <a href="#">P. Vinayagam</a>
              </div>
            </div>
            <span
              >Donec vulputate viverra ultrici lorem tin cidunt elementum ae an
              accumsan ultri ices urna ultrici lorem tin nt elementum ae an acc
              cidunt ele.</span
            >
          </div>
        </div>
        <div class="carousel-item" data-item-interval="10000">
          <div class="multiple-items-11-layer">
            <div>
              <img
                src="<?php echo $this->Url->build(); ?>img/pro3.jpg"
                alt="img-3"
              />
              <div>
                <a href="#">Auto repair services</a>
                <a href="#">K. Senthilkumar</a>
              </div>
            </div>
            <span
              >Donec vulputate viverra ultrici lorem tin cidunt elementum ae an
              accumsan ultri ices urna ultrici lorem tin nt elementum ae an acc
              cidunt ele.</span
            >
          </div>
        </div>
        <div class="carousel-item" data-item-interval="10000">
          <div class="multiple-items-11-layer">
            <div>
              <img
                src="<?php echo $this->Url->build(); ?>img/pro4.jpg"
                alt="img-4"
              />
              <div>
                <a href="#">STD/ISD booths</a>
                <a href="#">R. Sankar</a>
              </div>
            </div>
            <span
              >Donec vulputate viverra ultrici lorem tin cidunt elementum ae an
              accumsan ultri ices urna ultrici lorem tin nt elementum ae an acc
              cidunt ele.</span
            >
          </div>
        </div>
      </div>
      <a
        class="carousel-control-prev carousel-control-btn"
        href="#multiples-items-11"
      >
        <!-- Icon -->
        <i class="fas fa-chevron-left"></i>
      </a>
      <a
        class="carousel-control-next carousel-control-btn"
        href="#multiples-items-11"
      >
        <!-- Icon -->
        <i class="fas fa-chevron-right"></i>
      </a>
    </div>
  </div>
</div>

<script type="text/javascript">
  $(function () {
    $(".demo1").bootstrapNews({
      newsPerPage: 3,
      autoplay: true,
      pauseOnHover: true,
      direction: "up",
      newsTickerInterval: 4000,
      onToDo: function () {
        //console.log(this);
      },
    });
  });
</script>
<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(["_setAccount", "UA-36251023-1"]);
  _gaq.push(["_setDomainName", "jqueryscript.net"]);
  _gaq.push(["_trackPageview"]);

  (function () {
    var ga = document.createElement("script");
    ga.type = "text/javascript";
    ga.async = true;
    ga.src =
      ("https:" == document.location.protocol ? "https://ssl" : "http://www") +
      ".google-analytics.com/ga.js";
    var s = document.getElementsByTagName("script")[0];
    s.parentNode.insertBefore(ga, s);
  })();
</script>
<script>
  try {
    fetch(
      new Request(
        "https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js",
        { method: "HEAD", mode: "no-cors" }
      )
    )
      .then(function (response) {
        return true;
      })
      .catch(function (e) {
        var carbonScript = document.createElement("script");
        carbonScript.src =
          "//cdn.carbonads.com/carbon.js?serve=CK7DKKQU&placement=wwwjqueryscriptnet";
        carbonScript.id = "_carbonads_js";
        document.getElementById("carbon-block").appendChild(carbonScript);
      });
  } catch (error) {
    console.log(error);
  }
</script>
<!-- newsbox.js -->

<script>
  /*
   * jQuery Bootstrap News Box v1.0.1
   *
   * Copyright 2014, Dragan Mitrovic
   * email: gagi270683@gmail.com
   * Free to use and abuse under the MIT license.
   * http://www.opensource.org/licenses/mit-license.php
   */

  //Utility
  if (typeof Object.create !== "function") {
    //Douglas Crockford inheritance function
    Object.create = function (obj) {
      function F() {}
      F.prototype = obj;
      return new F();
    };
  }

  (function ($, w, d, undefined) {
    var NewsBox = {
      init: function (options, elem) {
        //cache the references
        var self = this;
        self.elem = elem;
        self.$elem = $(elem);

        self.newsTagName = self.$elem.find(":first-child").prop("tagName");
        self.newsClassName = self.$elem.find(":first-child").attr("class");

        self.timer = null;
        self.resizeTimer = null; // used with window.resize event
        self.animationStarted = false;
        self.isHovered = false;

        if (typeof options === "string") {
          //string was passed
          if (console) {
            console.error("String property override is not supported");
          }
          throw "String property override is not supported";
        } else {
          //object was passed
          //extend user options overrides
          self.options = $.extend({}, $.fn.bootstrapNews.options, options);

          self.prepareLayout();

          //autostart animation
          if (self.options.autoplay) {
            self.animate();
          }

          if (self.options.navigation) {
            self.buildNavigation();
          }

          //enable users to override the methods
          if (typeof self.options.onToDo === "function") {
            self.options.onToDo.apply(self, arguments);
          }
        }
      },

      prepareLayout: function () {
        var self = this;

        //checking mouse position

        $(self.elem)
          .find("." + self.newsClassName)
          .on("mouseenter", function () {
            self.onReset(true);
          });

        $(self.elem)
          .find("." + self.newsClassName)
          .on("mouseout", function () {
            self.onReset(false);
          });

        //set news visible / hidden
        $.map(self.$elem.find(self.newsTagName), function (newsItem, index) {
          if (index > self.options.newsPerPage - 1) {
            $(newsItem).hide();
          } else {
            $(newsItem).show();
          }
        });

        //prevent user to select more news that it actualy have

        if (
          self.$elem.find(self.newsTagName).length < self.options.newsPerPage
        ) {
          self.options.newsPerPage = self.$elem.find(self.newsTagName).length;
        }

        //get height of the very first self.options.newsPerPage news
        var height = 0;

        $.map(self.$elem.find(self.newsTagName), function (newsItem, index) {
          if (index < self.options.newsPerPage) {
            height = parseInt(height) + parseInt($(newsItem).height()) + 10;
          }
        });

        $(self.elem).css({ "overflow-y": "hidden", height: height });

        //recalculate news box height for responsive interfaces
        $(w).resize(function () {
          if (self.resizeTimer !== null) {
            clearTimeout(self.resizeTimer);
          }
          self.resizeTimer = setTimeout(function () {
            self.prepareLayout();
          }, 200);
        });
      },

      findPanelObject: function () {
        var panel = this.$elem;

        while (panel.parent() !== undefined) {
          panel = panel.parent();
          if (panel.parent().hasClass("card")) {
            return panel.parent();
          }
        }

        return undefined;
      },

      buildNavigation: function () {
        var panel = this.findPanelObject();
        if (panel) {
          var nav =
            '<ul class="pagination float-right" style="margin: 0px;">' +
            '<li class="page-item"><a href="#" class="page-link prev"><i class="fas fa-chevron-down"></i></a></li>' +
            '<li class="page-item"><a href="#" class="page-link next"><i class="fas fa-chevron-up"></i></a></li>' +
            '</ul><div class="clearfix"></div>';

          // var footer = $(panel).find(".card-footer")[0];
          // if (footer) {
          //   $(footer).append(nav);
          // } else {
          //   $(panel).append('<div class="card-footer">' + nav + "</div>");
          // }

          var self = this;
          $(panel)
            .find(".prev")
            .on("click", function (ev) {
              ev.preventDefault();
              self.onPrev();
            });

          $(panel)
            .find(".next")
            .on("click", function (ev) {
              ev.preventDefault();
              self.onNext();
            });
        }
      },

      onStop: function () {},

      onPause: function () {
        var self = this;
        self.isHovered = true;
        if (this.options.autoplay && self.timer) {
          clearTimeout(self.timer);
        }
      },

      onReset: function (status) {
        var self = this;
        if (self.timer) {
          clearTimeout(self.timer);
        }

        if (self.options.autoplay) {
          self.isHovered = status;
          self.animate();
        }
      },

      animate: function () {
        var self = this;
        self.timer = setTimeout(function () {
          if (!self.options.pauseOnHover) {
            self.isHovered = false;
          }

          if (!self.isHovered) {
            if (self.options.direction === "up") {
              self.onNext();
            } else {
              self.onPrev();
            }
          }
        }, self.options.newsTickerInterval);
      },

      onPrev: function () {
        var self = this;

        if (self.animationStarted) {
          return false;
        }

        self.animationStarted = true;

        var html =
          "<" +
          self.newsTagName +
          ' style="display:none;" class="' +
          self.newsClassName +
          '">' +
          $(self.$elem).find(self.newsTagName).last().html() +
          "</" +
          self.newsTagName +
          ">";
        $(self.$elem).prepend(html);
        $(self.$elem)
          .find(self.newsTagName)
          .first()
          .slideDown(self.options.animationSpeed, function () {
            $(self.$elem).find(self.newsTagName).last().remove();
          });

        $(self.$elem)
          .find(
            self.newsTagName +
              ":nth-child(" +
              parseInt(self.options.newsPerPage + 1) +
              ")"
          )
          .slideUp(self.options.animationSpeed, function () {
            self.animationStarted = false;
            self.onReset(self.isHovered);
          });

        $(self.elem)
          .find("." + self.newsClassName)
          .on("mouseenter", function () {
            self.onReset(true);
          });

        $(self.elem)
          .find("." + self.newsClassName)
          .on("mouseout", function () {
            self.onReset(false);
          });
      },

      onNext: function () {
        var self = this;

        if (self.animationStarted) {
          return false;
        }

        self.animationStarted = true;

        var html =
          "<" +
          self.newsTagName +
          ' style="display:none;" class=' +
          self.newsClassName +
          ">" +
          $(self.$elem).find(self.newsTagName).first().html() +
          "</" +
          self.newsTagName +
          ">";
        $(self.$elem).append(html);

        $(self.$elem)
          .find(self.newsTagName)
          .first()
          .slideUp(self.options.animationSpeed, function () {
            $(this).remove();
          });

        $(self.$elem)
          .find(
            self.newsTagName +
              ":nth-child(" +
              parseInt(self.options.newsPerPage + 1) +
              ")"
          )
          .slideDown(self.options.animationSpeed, function () {
            self.animationStarted = false;
            self.onReset(self.isHovered);
          });

        $(self.elem)
          .find("." + self.newsClassName)
          .on("mouseenter", function () {
            self.onReset(true);
          });

        $(self.elem)
          .find("." + self.newsClassName)
          .on("mouseout", function () {
            self.onReset(false);
          });
      },
    };

    $.fn.bootstrapNews = function (options) {
      //enable multiple DOM object selection (class selector) + enable chaining like $(".class").bootstrapNews().chainingMethod()
      return this.each(function () {
        var newsBox = Object.create(NewsBox);

        newsBox.init(options, this);
        //console.log(newsBox);
      });
    };

    $.fn.bootstrapNews.options = {
      newsPerPage: 3,
      navigation: true,
      autoplay: true,
      direction: "up",
      animationSpeed: "normal",
      newsTickerInterval: 4000, //4 secs
      pauseOnHover: true,
      onStop: null,
      onPause: null,
      onReset: null,
      onPrev: null,
      onNext: null,
      onToDo: null,
    };
  })(jQuery, window, document);
</script>
<!-- newsobox end -->
