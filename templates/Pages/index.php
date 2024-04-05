<!-- Slider - Wrapper - Must Use "simple-ver-21" class -->

<style>
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

  .indx_abt_ul {
    display: inline !important;
  }

  .indx_abt_ul li {
    width: 100% !important;
  }

  /* Chatbot style */


  .msg-header {
    max-width: 53%;
    margin-left: 10px;
  }

  .msg-header p {
    color: #fff;
    background: #007bff;
    border-radius: 10px;
    padding: 8px 10px;
    font-size: 14px;
    word-break: break-all;
  }

  .msg-header p {
    color: #333;
    background: #efefef;
  }

  .chat-popup .title {
    background: #007bff;
    color: #fff;
    font-size: 20px;
    font-weight: 500;
    line-height: 60px;
    text-align: center;
    border-bottom: 1px solid #006fe6;
    border-radius: 5px 5px 0 0;
  }

  .chat-popup .typing-field .input-data input {
    height: 100%;
    width: 100%;
    outline: none;
    border: 1px solid transparent;
    padding: 0 80px 0 15px;
    border-radius: 3px;
    font-size: 15px;
    background: #fff;
    transition: all 0.3s ease;
  }

  .form .inbox .msg-header p {
    color: #fff;
    background: #007bff;
    border-radius: 10px;
    padding: 8px 10px;
    font-size: 14px;
    word-break: break-all;
  }

  .form .user-inbox .msg-header p {
    color: #333;
    background: #efefef;
  }


  .chat-popup .form .inbox .icon {
    height: 40px;
    width: 40px;
    color: #fff;
    text-align: center;
    line-height: 40px;
    border-radius: 50%;
    font-size: 18px;
    background: #007bff;
  }

  /* Button used to open the chat form - fixed at the bottom of the page */
  .open-button {
    padding: 10px 40px;
    background-color: #04AA6D;
    color: white;
    font-size: 17px;
    max-width: 300px;
    border-radius: 20px;
    border: none;
    cursor: pointer;
    position: fixed;
    bottom: 23px;
    right: 28px;
  }

  /* The popup chat - hidden by default */
  .chat-popup {
    display: none;
    position: fixed;
    bottom: 0;
    right: 15px;
    z-index: 9;

  }

  /* Add styles to the form container */
  .form-container {
    max-width: 300px;
    padding: 10px;
    border-radius: 20px;
    background-color: white;
    color: #777;
  }

  /* Full-width textarea */
  .form-container textarea {
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    border: none;
    border-radius: 20px;
    background: #ddd;
    resize: none;
    min-height: 200px;
    color: #777;
  }

  /* When the textarea gets focus, do something */
  .form-container textarea:focus {
    background-color: #ddd;
    outline: none;
  }

  /* Set a style for the submit/send button */
  .form-container .btn {
    background-color: #04AA6D;
    color: white;
    font-size: 17px;
    padding: 10px 20px;
    border: none;
    border-radius: 20px;
    cursor: pointer;
    width: 100%;
    margin-bottom: 10px;
  }

  /* Add a red background color to the cancel button */
  .form-container .cancel {
    background-color: #1974D2;
  }

  /* Add some hover effects to buttons */
  .form-container .btn:hover,
  .open-button:hover {
    opacity: 0.8;
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
          <div id="simples-ver-21" class="carousel sz-slider simple-ver-21 simple-ver-21-btn" data-type="slider" data-width="100%" data-height="420" data-animation="dragX" data-background="hero" data-image="cover" data-ind-direction="x" data-ind-type="absolute" data-ind-position="bottom" data-intervals="yes" data-start="auto" data-sticky="yes" data-pauses="yes" data-duration="600" data-timing="easeoutincubic" data-threshold="1" data-allowPageScroll="vertical" style="border-radius: 10px">
            <!-- Carousel - Indicators -->
            <!-- <ol class="carousel-indicators simple-ver-21-indicators">
              <li data-bs-slide-to="0" data-bs-target="#simples-ver-21" class="active"></li>
              <li data-bs-slide-to="1" data-bs-target="#simples-ver-21"></li>
              <li data-bs-slide-to="2" data-bs-target="#simples-ver-21"></li>
              <li data-bs-slide-to="3" data-bs-target="#simples-ver-21"></li>
              <li data-bs-slide-to="4" data-bs-target="#simples-ver-21"></li>
            </ol> -->
            <!-- Slides - Wrapper -->
            <div class="carousel-inner">
              <!-- Slide - 1 -->
              <div class="slide1 carousel-item active" data-item-interval="7000">
                <!-- Image Wrapper -->
                <div class="sz-wrapper">
                  <!-- Background Image -->
                  <img src="<?php echo $this->Url->build(); ?>img/itcot-slider-1.jpg" alt="slide-01" class="sz-bg-img" />
                </div>
                <!-- Simple Version 21 - Layer -->
                <div class="simple-ver-21-layer simple-ver-21-layer-left">
                  <!-- Container -->
                  <div class="sz-animated" data-animation-in="fdInLft:1000:500:animEaseoutexpo">
                    <span></span>
                    <!-- 1st child -->
                    <!-- <span>Getting Loan Easily</span> -->
                    <span style="font-size:35px;">GET AN INSTANT PROJECT REPORT</span>
                    <!-- 2nd child -->
                    <!-- <span>with government scheme</span> -->
                    <span style="text-transform: none !important;">For your Startups and MSMEs.</span>
                    <!-- Button -->
                    <!-- <a href="#">apply now</a> -->
                    <a href="<?php echo $this->Url->build(['controller' => 'Projects', 'action' => 'basicdetails']); ?>">apply now
                    </a>
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
                  <img src="<?php echo $this->Url->build(); ?>img/itcot-slider-2.jpg" alt="slide-03" class="sz-bg-img" />
                </div>
                <!-- Simple Version 21 - Layer -->
                <div class="slider2 simple-ver-21-layer simple-ver-21-layer-right">
                  <!-- Container -->
                  <div class="sz-animated" data-animation-in="fdInLft:1000:500:animEaseoutexpo">
                    <!-- <img src="<?php echo $this->Url->build(); ?>img/msme.png" /> -->
                    <!-- 1st child -->
                    <!-- <span>Getting Loan Easily</span> -->
                    <span></span>
                    <span style="font-size:35px;margin-top: 100px !important;">DIGITAL LIBRARY</span>
                    <!-- 2nd child -->
                    <!-- <span>with government scheme</span> -->
                    <span style="text-transform: none !important;">Access Unlimited Government Schemes and Project Profiles</span>
                    <!-- Button -->
                    <!-- <a href="#">apply now</a> -->
                    <a href="<?php echo $this->Url->build(['controller' => 'Pages', 'action' => 'digitallibrary']); ?>">apply now
                    </a>
                  </div>
                  <!-- End - Container -->
                </div>
                <!-- End - Simple Version 21 - Layer -->
              </div>



              <!-- Slide - 1 -->
              <div class="slide2 carousel-item active" data-item-interval="7000">
                <!-- Image Wrapper -->
                <div class="sz-wrapper">
                  <!-- Background Image -->
                  <img src="<?php echo $this->Url->build(); ?>img/virtual_cfo.jpeg" alt="slide-03" class="sz-bg-img" />
                </div>
                <!-- Simple Version 21 - Layer -->
                <div class="simple-ver-21-layer simple-ver-21-layer-left">
                  <!-- Container -->
                  <div class="sz-animated" data-animation-in="fdInLft:1000:500:animEaseoutexpo">
                    <span></span>
                    <!-- 1st child -->
                    <span>Virtual <br>CFO</span>
                    <!-- 2nd child -->
                    <!-- <span>with government scheme</span> -->
                    <span style="text-transform: none !important;">Empowering MSMEs and Startups <br> with Smart Solution.</span>
                    <!-- Button -->
                    <a href="https://itcot.demodev.in/virtualcfo-registrations/virtualcfo">apply now</a>
                  </div>
                  <!-- End - Container -->
                </div>
                <!-- End - Simple Version 21 - Layer -->
              </div>

              <!-- Slide - 3 -->
              <div class="carousel-item" data-item-interval="7000">
                <!-- Image Wrapper -->
                <div class="sz-wrapper">
                  <!-- Background Image -->
                  <img src="<?php echo $this->Url->build(); ?>img/epr.jpg" alt="slide-03" class="sz-bg-img" />
                </div>
                <!-- Simple Version 21 - Layer -->
                <div class="slider2 simple-ver-21-layer simple-ver-21-layer-right">
                  <!-- Container -->
                  <div class="sz-animated" data-animation-in="fdInLft:1000:500:animEaseoutexpo">
                    <!-- <img src="<?php echo $this->Url->build(); ?>img/msme.png" /> -->
                    <!-- 1st child -->
                    <!-- <span>Getting Loan Easily</span> -->
                    <span></span>
                    <span style="font-size:35px;margin-top: 100px !important;">EPR <br> Certification</span>
                    <!-- 2nd child -->
                    <!-- <span>with government scheme</span> -->
                    <span style="text-transform: none !important;">Get Authorisation for Extended Producer Responsibility</span>
                    <!-- Button -->
                    <!-- <a href="#">apply now</a> -->
                    <a href="<?php echo $this->Url->build(['controller' => 'Eprcertification', 'action' => 'eprcertification']); ?>">apply now
                    </a>
                  </div>
                  <!-- End - Container -->
                </div>
                <!-- End - Simple Version 21 - Layer -->
              </div>



              <!-- Slide - 1 -->
              <div class="slide2 carousel-item active" data-item-interval="7000">
                <!-- Image Wrapper -->
                <div class="sz-wrapper">
                  <!-- Background Image -->
                  <img src="<?php echo $this->Url->build(); ?>img/complains-02.jpeg" alt="slide-03" class="sz-bg-img" />
                </div>
                <!-- Simple Version 21 - Layer -->
                <div class="simple-ver-21-layer simple-ver-21-layer-left">
                  <!-- Container -->
                  <div class="sz-animated" data-animation-in="fdInLft:1000:500:animEaseoutexpo">
                    <span></span>
                    <!-- 1st child -->
                    <span>Compliance <br> services</span>
                    <!-- 2nd child -->
                    <!-- <span>with government scheme</span> -->
                    <span style="text-transform: none !important;"> ITCOT - A digital partner for all <br> your needs and support </span>
                    <!-- Button -->
                    <!-- <a href="">Support</a> -->
                    <a href="<?php echo $this->Url->build(['controller' => 'ComplianceServices', 'action' => 'complianceservices']); ?>">Support</a>
                  </div>
                  <!-- End - Container -->
                </div>
                <!-- End - Simple Version 21 - Layer -->
              </div>


            </div>
            <!-- Slides - Wrapper - End -->
            <!-- Left Navigation Button -->
            <a class="carousel-control-prev carousel-control-btn" href="#simples-ver-21">
              <i class="fas fa-long-arrow-alt-left"></i>
            </a>
            <!-- Right Navigation Button -->
            <a class="carousel-control-next carousel-control-btn" href="#simples-ver-21">
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
          <div class="card card-xl-stretch bg-body border-0" style="height: 420px; overflow: hidden !important">
            <div class="card-body pt-5 mb-xl-9 position-relative">
              <div class="d-flex flex-stack">
                <h4 class="fw-bold text-gray-800 m-0">Press Release</h4>
              </div>

              <div class="row mt-3">
                <div class="col-xs-12">
                  <ul class="demo1">
                    <?php foreach ($pressReleases as $pressRelease) { ?>
                      <li class="news-item">
                        <table cellpadding="4">
                          <tr>
                            <td>
                              <div class="col-2">
                                <div class="dates">
                                  <div class="date-box" style="
                                    width: 50px;
                                    height: 50px;
                                    border: 1px solid #e7ecf2;
                                  ">

                                    <h4 style="font-size: 28px"><?php echo date('d', strtotime($pressRelease['release_date'])); ?></h4>
                                    <p><?php echo date('M-y', strtotime($pressRelease['release_date'])); ?></p>
                                  </div>
                                </div>
                              </div>
                            </td>
                            <td>
                              <div class="col-10 mt-3">
                                <div class="date-cnt">
                                  <h4>
                                    <?php echo $pressRelease['title'] ?>
                                  </h4>

                                  <span><a href="<?php echo ($pressRelease['url']) ? $pressRelease['url'] : '#'; ?>" style="text-decoration:none;" target="_blank">
                                    <b> Read More >></b> 
                                    </a></span>
                                </div>
                              </div>
                            </td>
                          </tr>
                        </table>
                      </li>

                    <?php } ?>
                  </ul>
                </div>
              </div>
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
                <img src="<?php echo $this->Url->build(); ?>img/001.png" alt="feature icon" />
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
                <img src="<?php echo $this->Url->build(); ?>img/002.png" alt="feature icon" />
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
                <img src="<?php echo $this->Url->build(); ?>img/003.png" alt="feature icon" />
                <span>03</span>
              </div>
              <div class="feature__content">
                <h4>Successfully getting loan</h4>
                <p>
                  Evaluating your loan requirement will help in better management of your financials..
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
                <!-- Excellent services for <br />
                your success -->
                About Us

              </h2>
              <p>
                ITCOT Limited, also known as Industrial and Technical Consultancy Organization of Tamil Nadu Limited, is a Deemed Government Company incorporated in 1979 as a joint venture of Development Financial Institutions, State Development Corporations and Commercial Banks. ITCOT offers project and business consultancy services to Entrepreneurs, Banks & Financial Institutions, PSUs, Government departments, Corporates, MSMEs, Start-ups, etc
              </p>
              <p>
                Over the years, ITCOT emerged as a reliable and credible player in preparation of Techno Economic Viability Reports, Lenders Independent Engineer, Asset/Business Valuation, Cluster Development, Bid Process Management, Statutory Approvals & Compliance Consulting, and Agency for Specialized Monitoring, etc.
              </p>
              <a href="http://15.207.40.134/webroot/ITCOT/pages/aboutitcot" class="lab-btn mt-3">Read More</a>
              <ul class="indx_abt_ul">


                <!-- <div class="row">
                <div class="col-6">
                <li >
                  <div class="icon">
                    <img
                      src="<?php echo $this->Url->build(); ?>img/digi.png"
                      alt="about icon"
                    />
                  </div>
                  <div class="text">
                    <h6>Techno-Economic Viability / 
                     Feasibility studies</h6>
                  </div>
                  
                </li>
                </div>
                <div class="col-6">
                <li > 
                  <div class="icon">
                    <img
                      src="<?php echo $this->Url->build(); ?>img/002.png"
                      alt="about icon"
                    />
                  </div>
                  <div class="text">
                    <h6>Strategic Plans</h6>
                  </div>
                

                </li>
                </div>

                <div class="col-6">
                
              
                <li>
                  <div class="text">
                    <h6>Detailed Project Reports (DPR)</h6>
                  </div>
                </li>
              </div>
              <div class="col-6">
                
              <li>
                  <div class="text">
                    <h6>Market survey and Research</h6>
                  </div>
                </li>
              
              </div>
              <div class="col-6">
                
              <li>
                  <div class="text">
                    <h6>Project Management Consultancy (PMC)</h6>
                  </div>
                </li>
              
              </div>
              <div class="col-6">
                
              <li>
                  <div class="text">
                    <h6>Lenders Independent Engineer (LIE)</h6>
                  </div>
                </li>
              
              </div>
              <div class="col-6">
                
              <li>
                  <div class="text">
                    <h6>Valuation</h6>
                  </div>
                </li>
              
              </div>
              <div class="col-6">
                
              
              <li>
                  <div class="text">
                    <h6>Project Appraisals</h6>
                  </div>
                </li>
              </div>
              <div class="col-6">
                
              <li>
                  <div class="text">
                    <h6>Project Evaluation Restructuring</h6>
                  </div>
                </li>
              
              </div>
              
              <div class="col-6">
                
              <li>
                  <div class="text">
                    <h6>Agency for Specialized Monitoring (ASM)</h6>
                  </div>
                </li>
              
              </div>
              <div class="col-6">
                
              <li>
                  <div class="text">
                    <h6>Skill Upgradation Programmes</h6>
                  </div>
                </li>
              
              </div>


              </div> -->



                <!--          
              </ul>
              <p>
              ITCOT organize seminars, training programs and industry meets on current topics of interest to disseminate knowledge to enterprises and entrepreneurs.
              </p> -->
                <!-- <a href="#" class="lab-btn mt-3">Read More</a> -->
            </div>
          </div>
          <div class="col-lg-6 col-12 abt-imgg">
            <div class="about__thumb">
              <div class="row g-4">
                <div class="col-12">
                  <div class="thumb">
                    <img src="<?php echo $this->Url->build(); ?>img/about.jpg" alt="about" class="w-100" />
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

<!-- <button class="open-button"onclick="openForm()">Chat</button> -->

<!-- <div class="chat-popup" id="myForm">
  <form action="/action_page.php" class="form-container">
  <div class="title">Chat with us</div>
        <div class="form">
            <div class="bot-inbox inbox">
                <div class="icon">
                    <i class="fas fa-user"></i>
                </div>
                <div class="msg-header">
                    <p>Hello there, how can I help you?</p>
                </div>
            </div>
        </div>
        <div class="typing-field">
            <div class="input-data">
                <input id="data" type="text" placeholder="Type something here.." required><br/><br/><br/>
                <button id="send-btn" class="btn btn-primary">Send</button>
            </div>
        </div>
    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
  </form>
</div> -->

<div class="multiple-items-11-wrapper" style="padding-bottom: 30px;">
  <div class="container">
    <div class="press-head">
      <h4>Customers Feedbacks</h4>
      <hr style="
          width: 180px;
          border: 1px solid;
          border-radius: 3px;
          border-color: #eba939;
          margin-top: 5px;
        " />
    </div>
    <!-- Carousel - Wrapper - Must Use "multiple-items-11" class -->
    <div id="multiples-items-11" class="carousel sz-slider multiple-items-11 multiple-items-11-btn" data-type="carousel" data-width="100%" data-height="330px" data-animation="dragX" data-items="3" data-xlscreen="3" data-lgscreen="2" data-mdscreen="2" data-smscreen="1" data-move="1" data-ind-direction="x" data-ind-type="absolute" data-ind-position="bottom" data-intervals="yes" data-start="auto" data-sticky="yes" data-pauses="yes" data-duration="300" data-timing="easeout" data-threshold="1" data-allowPageScroll="vertical">
      <ol class="carousel-indicators multiple-items-11-indicators">
        <li data-bs-slide-to="0" data-bs-target="#multiples-items-11" class="active"></li>
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
              <img src="<?php echo $this->Url->build(); ?>img/pro1.jpg" alt="img-1" />
              <div>
                <a href="#">Leather products</a>
                <a href="#">S. Manikansan</a>
              </div>
            </div>
            <span>Donec vulputate viverra ultrici lorem tin cidunt elementum ae an
              accumsan ultri ices urna ultrici lorem tin nt elementum ae an acc
              cidunt ele.</span>
          </div>
        </div>
        <div class="carousel-item" data-item-interval="10000">
          <div class="multiple-items-11-layer">
            <div>
              <img src="<?php echo $this->Url->build(); ?>img/pro2.jpg" alt="img-2" />
              <div>
                <a href="#">Xeroxing</a>
                <a href="#">P. Vinayagam</a>
              </div>
            </div>
            <span>Donec vulputate viverra ultrici lorem tin cidunt elementum ae an
              accumsan ultri ices urna ultrici lorem tin nt elementum ae an acc
              cidunt ele.</span>
          </div>
        </div>
        <div class="carousel-item" data-item-interval="10000">
          <div class="multiple-items-11-layer">
            <div>
              <img src="<?php echo $this->Url->build(); ?>img/pro3.jpg" alt="img-3" />
              <div>
                <a href="#">Auto repair services</a>
                <a href="#">K. Senthilkumar</a>
              </div>
            </div>
            <span>Donec vulputate viverra ultrici lorem tin cidunt elementum ae an
              accumsan ultri ices urna ultrici lorem tin nt elementum ae an acc
              cidunt ele.</span>
          </div>
        </div>
        <div class="carousel-item" data-item-interval="10000">
          <div class="multiple-items-11-layer">
            <div>
              <img src="<?php echo $this->Url->build(); ?>img/pro4.jpg" alt="img-4" />
              <div>
                <a href="#">STD/ISD booths</a>
                <a href="#">R. Sankar</a>
              </div>
            </div>
            <span>Donec vulputate viverra ultrici lorem tin cidunt elementum ae an
              accumsan ultri ices urna ultrici lorem tin nt elementum ae an acc
              cidunt ele.</span>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev carousel-control-btn" href="#multiples-items-11">
        <!-- Icon -->
        <i class="fas fa-chevron-left"></i>
      </a>
      <a class="carousel-control-next carousel-control-btn" href="#multiples-items-11">
        <!-- Icon -->
        <i class="fas fa-chevron-right"></i>
      </a>
    </div>
  </div>
</div>

<script type="text/javascript">
  $(function() {
    $(".demo1").bootstrapNews({
      newsPerPage: 3,
      autoplay: true,
      pauseOnHover: true,
      direction: "up",
      newsTickerInterval: 3000,
      onToDo: function() {
        // console.log("vanakam");
      },
    });
  });
</script>
<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(["_setAccount", "UA-36251023-1"]);
  _gaq.push(["_setDomainName", "jqueryscript.net"]);
  _gaq.push(["_trackPageview"]);

  (function() {
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
          "https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js", {
            method: "HEAD",
            mode: "no-cors"
          }
        )
      )
      .then(function(response) {
        return true;
      })
      .catch(function(e) {
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
    Object.create = function(obj) {
      function F() {}
      F.prototype = obj;
      return new F();
    };
  }

  (function($, w, d, undefined) {
    var NewsBox = {
      init: function(options, elem) {
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

      prepareLayout: function() {
        var self = this;

        //checking mouse position

        $(self.elem)
          .find("." + self.newsClassName)
          .on("mouseenter", function() {
            self.onReset(true);
          });

        $(self.elem)
          .find("." + self.newsClassName)
          .on("mouseout", function() {
            self.onReset(false);
          });

        //set news visible / hidden
        $.map(self.$elem.find(self.newsTagName), function(newsItem, index) {
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

        $.map(self.$elem.find(self.newsTagName), function(newsItem, index) {
          if (index < self.options.newsPerPage) {
            height = parseInt(height) + parseInt($(newsItem).height()) + 10;
          }
        });

        $(self.elem).css({
          "overflow-y": "hidden",
          height: height
        });

        //recalculate news box height for responsive interfaces
        $(w).resize(function() {
          if (self.resizeTimer !== null) {
            clearTimeout(self.resizeTimer);
          }
          self.resizeTimer = setTimeout(function() {
            self.prepareLayout();
          }, 200);
        });
      },

      findPanelObject: function() {
        var panel = this.$elem;

        while (panel.parent() !== undefined) {
          panel = panel.parent();
          if (panel.parent().hasClass("card")) {
            return panel.parent();
          }
        }

        return undefined;
      },

      buildNavigation: function() {
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
            .on("click", function(ev) {
              ev.preventDefault();
              self.onPrev();
            });

          $(panel)
            .find(".next")
            .on("click", function(ev) {
              ev.preventDefault();
              self.onNext();
            });
        }
      },

      onStop: function() {},

      onPause: function() {
        var self = this;
        self.isHovered = true;
        if (this.options.autoplay && self.timer) {
          clearTimeout(self.timer);
        }
      },

      onReset: function(status) {
        var self = this;
        if (self.timer) {
          clearTimeout(self.timer);
        }

        if (self.options.autoplay) {
          self.isHovered = status;
          self.animate();
        }
      },

      animate: function() {
        var self = this;
        self.timer = setTimeout(function() {
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

      onPrev: function() {
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
          .slideDown(self.options.animationSpeed, function() {
            $(self.$elem).find(self.newsTagName).last().remove();
          });

        $(self.$elem)
          .find(
            self.newsTagName +
            ":nth-child(" +
            parseInt(self.options.newsPerPage + 1) +
            ")"
          )
          .slideUp(self.options.animationSpeed, function() {
            self.animationStarted = false;
            self.onReset(self.isHovered);
          });

        $(self.elem)
          .find("." + self.newsClassName)
          .on("mouseenter", function() {
            self.onReset(true);
          });

        $(self.elem)
          .find("." + self.newsClassName)
          .on("mouseout", function() {
            self.onReset(false);
          });
      },

      onNext: function() {
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
          .slideUp(self.options.animationSpeed, function() {
            $(this).remove();
          });

        $(self.$elem)
          .find(
            self.newsTagName +
            ":nth-child(" +
            parseInt(self.options.newsPerPage + 1) +
            ")"
          )
          .slideDown(self.options.animationSpeed, function() {
            self.animationStarted = false;
            self.onReset(self.isHovered);
          });

        $(self.elem)
          .find("." + self.newsClassName)
          .on("mouseenter", function() {
            self.onReset(true);
          });

        $(self.elem)
          .find("." + self.newsClassName)
          .on("mouseout", function() {
            self.onReset(false);
          });
      },
    };

    $.fn.bootstrapNews = function(options) {
      //enable multiple DOM object selection (class selector) + enable chaining like $(".class").bootstrapNews().chainingMethod()
      return this.each(function() {
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

  // chatbot script

  function openForm() {
    document.getElementById("myForm").style.display = "block";
  }

  function closeForm() {
    document.getElementById("myForm").style.display = "none";
  }


  $(document).ready(function() {
    $("#send-btn").on("click", function() {
      $value = $("#data").val();
      $msg = '<div class="user-inbox inbox"><div class="msg-header"><p>' + $value + '</p></div></div>';
      $(".form").append($msg);
      $("#data").val('');

      // start ajax code
      $.ajax({
        url: 'message.php',
        type: 'POST',
        data: 'text=' + $value,
        success: function(result) {
          $replay = '<div class="bot-inbox inbox"><div class="icon"><i class="fas fa-user"></i></div><div class="msg-header"><p>' + result + '</p></div></div>';
          $(".form").append($replay);
          // when chat goes down the scroll bar automatically comes to the bottom
          $(".form").scrollTop($(".form")[0].scrollHeight);
        }
      });
    });
  });
</script>
<!-- newsobox end -->