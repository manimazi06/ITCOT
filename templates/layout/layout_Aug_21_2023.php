<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Itcot</title>
  <link rel="shortcut icon" href="<?= $this->Url->build('/') ?>favicon.png" type="image/x-icon">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
  <!-- <?php echo $this->Html->css('bootstrap'); ?> -->
  <?php echo $this->Html->css('index'); ?>
  <?php echo $this->Html->css('plugins.bundle'); ?>
  <?php echo $this->Html->css('style.bundle'); ?>
  <?php echo $this->Html->css('../fonts/fontawesome/webfonts/fontawesome'); ?>
  <?php echo $this->Html->css('style'); ?>
  <?php echo $this->Html->css('simple-ver-21'); ?>
  <?php echo $this->Html->css('sz-slider'); ?>
  <?php echo $this->Html->css('jquery-steps'); ?>
  <?php echo $this->Html->css('styleform'); ?>
  <?php echo $this->Html->css('datatables.bundle'); ?>
  <?php echo $this->Html->css('multiple-items-11'); ?>
  <?php echo $this->Html->css('admin/flatpickr.min'); ?>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Chivo+Mono:wght@200&family=Rajdhani&family=Roboto+Condensed&family=Rubik+Pixels&display=swap" rel="stylesheet" />
  <?php //echo $this->Html->script('libs/jquery/dist/jquery.min'); 
  ?>
  <?php echo $this->Html->script('jquery'); ?>
  <!-- <?php echo $this->Html->script('bootstrap'); ?> -->

  <?php echo $this->Html->script('admin/libs/jquery/dist/jquery.min'); ?>

  <?php echo $this->Html->script('admin/jquery.validate.min'); ?>

  <?php echo $this->Html->script('jquery-steps'); ?>
  <?php echo $this->Html->script('scripts.bundle'); ?>
  <?php echo $this->Html->script('plugins.bundle'); ?>
  <?php echo $this->Html->script('jquery.validate.min'); ?>
  <?php echo $this->Html->script('datatables.bundle'); ?>
  <!--begin::Vendors Javascript(used for this page only)-->
  <?php echo $this->Html->script('admin/libs/datatable/datatables.min'); ?>
  <?php echo $this->Html->script('admin/libs/datatable/dataTables.bootstrap5.min'); ?>
  <?php echo $this->Html->script('admin/libs/datatable/buttons.bootstrap5.min'); ?>
  <?php echo $this->Html->script('admin/libs/datatable/jszip.min'); ?>
  <?php echo $this->Html->script('admin/libs/datatable/pdfmake.min'); ?>
  <?php echo $this->Html->script('admin/libs/datatable/vfs_fonts'); ?>
  <?php echo $this->Html->script('admin/highcharts'); ?>
  <?php echo $this->Html->script('admin/multiselect.min'); ?>



  <!-- success -->
  <!-- JQUERRY -->
  <!-- 
         <link
           rel="stylesheet"
           href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/4.5.2/flatly/bootstrap.min.css"
         />
         <link
           rel="stylesheet"
           href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
         />
         <link href="./jQuery-bootstrap-master/css/site.css" rel="stylesheet" type="text/css" />
         <link
           href="https://www.jqueryscript.net/css/jquerysctipttop.css"
           rel="stylesheet"
           type="text/css"
         />
         <script src="./jQuery-bootstrap-master/scripts/jquery.bootstrap.newsbox.min.js"></script>
         <script
           src="./jQuery-bootstrap-master/scripts/jquery.bootstrap.newsbox.js"
           type="text/javascript"
         ></script> -->
</head>

<body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled">


  <!--begin::Theme mode setup on page load-->
  <script>
    var defaultThemeMode = "light";
    var themeMode;
    if (document.documentElement) {
      if (document.documentElement.hasAttribute("data-bs-theme-mode")) {
        themeMode =
          document.documentElement.getAttribute("data-bs-theme-mode");
      } else {
        if (localStorage.getItem("data-bs-theme") !== null) {
          themeMode = localStorage.getItem("data-bs-theme");
        } else {
          themeMode = defaultThemeMode;
        }
      }
      if (themeMode === "system") {
        themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ?
          "dark" :
          "light";
      }
      document.documentElement.setAttribute("data-bs-theme", themeMode);
    }
  </script>
  <!--end::Theme mode setup on page load-->

  <div class="d-flex flex-column">
    <!--begin::Page-->
    <div class="page d-flex flex-row flex-column-fluid">
      <!--begin::Wrapper-->
      <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
        <!--begin::Header-->
        <div id="kt_header" class="header" data-kt-sticky="true" data-kt-sticky-name="header" data-kt-sticky-offset="{default: '200px', lg: '300px'}">
          <div class="d-lg-none container-xxl d-flex flex-grow-1 flex-stack">
            <!--begin::Header Logo-->
            <div class="d-flex align-items-center me-5">
              <!--begin::Heaeder menu toggle-->
              <div class="d-lg-none btn btn-icon btn-active-color-primary w-30px h-30px ms-n2 me-3" id="kt_header_menu_toggle">
                <i class="ki-duotone ki-abstract-14 fs-2">
                  <span class="path1"></span>
                  <span class="path2"></span>
                </i>
              </div>
              <!--end::Heaeder menu toggle-->
              <a href="#">
                <img alt="Logo" src="<?= $this->Url->build('/') ?>images/logo.jpg" class="theme-light-show h-20px h-lg-30px" />
                <img alt="Logo" src="<?= $this->Url->build('/') ?>images/logo.jpg" class="theme-dark-show h-20px h-lg-30px" />
              </a>
            </div>
            <!--end::Header Logo-->
          </div>
          <!--begin::Container-->

          <!-- container-xxl -->
          <div class="header-menu-container d-flex flex-stack h-lg-75px w-100" id="kt_header_nav" style="display: inherit !important;">
            <!--begin::Menu wrapper-->
            <div class="header-menu flex-column flex-lg-row" data-kt-drawer="true" data-kt-drawer-name="header-menu" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_header_menu_toggle" data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_body', lg: '#kt_header_nav'}">
              <!--begin::Header Logo-->
              <div class="d-flex align-items-center me-5">
                <a href="">
                  <img alt="Logo" src="<?= $this->Url->build('/') ?>images/logo.jpg" class="theme-light-show h-50px h-lg-50px" />
                  <img alt="Logo" src="<?= $this->Url->build('/') ?>images/logo.jpg" class="theme-dark-show h-50px h-lg-50px" />
                </a>
              </div>
              <!--end::Header Logo-->

              <!--begin::Menu-->
              <div class="justify-content-center menu menu-rounded menu-column menu-lg-row menu-root-here-bg-desktop menu-active-bg menu-state-primary menu-title-gray-800 menu-arrow-gray-400 align-items-stretch flex-grow-1 my-5 my-lg-0 px-2 px-lg-0 fw-semibold fs-6" id="#kt_header_menu" data-kt-menu="true">
                <!--begin:Menu item-->
                <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start" class="menu-item here show menu-here-bg menu-lg-down-accordion me-0 me-lg-2">
                  <!--begin:Menu link-->

                  <li class="nav-item1">
                    <a class="active nav-link" style="color: #FF3147" href="<?php echo $this->Url->build(['controller' => 'Pages', 'action' => 'index']); ?>"><i class="mdi  mdi-account-box"></i> <span class="menu-link py-3">
                        <span class="menu-title">Home</span>
                        <span class="menu-arrow d-lg-none"></span>
                      </span></a>
                  </li>






                </div>



                <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start" class="menu-item menu-lg-down-accordion menu-sub-lg-down-indention me-0 me-lg-2">


                  <!-- <a class=" nav-link" style="color: #FF3147" href="<?php echo $this->Url->build(['controller' => 'Pages', 'action' => 'virtualcfo']); ?>"><i class="mdi  mdi-account-box"></i>       -->
                  <span class="menu-link py-3">
                    <span class="menu-title">Virtual CFO</span>
                    <span class="menu-arrow d-lg-none"></span>
                  </span>
                  <!-- </a>					 -->
                  <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown px-lg-2  w-lg-150px">
                    <!--begin:Menu item-->
                    <div data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion">
                      <!--begin:Menu link-->
                      <a class="nav-link" href="<?php echo $this->Url->build(['controller' => 'VirtualcfoRegistrations', 'action' => 'virtualcfo']); ?>">
                        <span class="menu-link py-3 text-start">

                          <span class="menu-title">Apply Online</span>

                        </span> </a>
                      <!--end:Menu link-->
                      <!--begin:Menu sub-->

                    </div>
                  </div>

                </div>

                <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start" class="menu-item menu-lg-down-accordion me-0 me-lg-2">
                  <!--begin:Menu link-->
                  <span class="menu-link py-3">
                    <span class="menu-title">Banking related services </span>
                    <span class="menu-arrow d-lg-none"></span>
                  </span>
                  <!--end:Menu link-->
                  <!--begin:Menu sub-->
                  <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown p-0 w-lg-200px" style="width: 200px;">





                    <div data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion">
                      <!--begin:Menu link-->
                      <span class="menu-link py-3 ">
                        <span class="menu-bullet">

                        </span>
                        <span class="menu-title">Project Report</span>
                        <span class="menu-arrow"></span>
                      </span>
                      <!--end:Menu link-->
                      <!--begin:Menu sub-->
                      <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                        <div class="menu-item p-0 m-0">


                          <li>
                            <?php if ($user_id == '') { ?>
                              <a class="nav-link" href="<?php echo $this->Url->build(['controller' => 'Users', 'action' => 'login']); ?>"><i class="mdi  mdi-account-box"></i> <span class="menu-link py-3">
                                  <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                  </span>
                                  <span class="menu-title">Apply New</span></a>
                            <?php } else { ?>
                              <?php if ($project_count == 0) { ?>
                                <a class="menu-link" href="<?php echo $this->Url->build(['controller' => 'Projects', 'action' => 'basicdetails']); ?>"><i class="mdi  mdi-account-box"></i> <span class="menu-title">Apply New</span></a>
                              <?php  } else { ?>

                                <?php if ($project['step_count'] == 1) { ?>
                                  <a class="menu-link" href="<?php echo $this->Url->build(['controller' => 'Projects', 'action' => 'entitydetails', $project['id']]); ?>"><i class="mdi  mdi-account-box"></i> <span class="menu-bullet">
                                      <span class="bullet bullet-dot"></span>
                                    </span> <span class="menu-title">Apply New</span></a>
                                <?php } else if ($project['step_count'] == 2) { ?>
                                  <a class="menu-link" href="<?php echo $this->Url->build(['controller' => 'Projects', 'action' => 'educationdetails', $project['id']]); ?>"><i class="mdi  mdi-account-box"></i> <span class="menu-bullet">
                                      <span class="bullet bullet-dot"></span>
                                    </span> <span class="menu-title">Apply New</span></a>
                                <?php } else if ($project['step_count'] == 3) { ?>
                                  <a class="menu-link" href="<?php echo $this->Url->build(['controller' => 'Projects', 'action' => 'manufacturingdetails', $project['id']]); ?>"><i class="mdi  mdi-account-box"></i> <span class="menu-bullet">
                                      <span class="bullet bullet-dot"></span>
                                    </span> <span class="menu-title">Apply New</span></a>
                                <?php } else if ($project['step_count'] == 4) { ?>
                                  <a class="menu-link" href="<?php echo $this->Url->build(['controller' => 'Projects', 'action' => 'manpowerdetails', $project['id']]); ?>"><i class="mdi  mdi-account-box"></i> <span class="menu-bullet">
                                      <span class="bullet bullet-dot"></span>
                                    </span> <span class="menu-title">Apply New</span></a>
                                <?php } else if ($project['step_count'] == 5) { ?>
                                  <a class="menu-link" href="<?php echo $this->Url->build(['controller' => 'Projects', 'action' => 'projectcostdetails', $project['id']]); ?>"><i class="mdi  mdi-account-box"></i> <span class="menu-bullet">
                                      <span class="bullet bullet-dot"></span>
                                    </span> <span class="menu-title">Apply New</span></a>
                                <?php } else if ($project['step_count'] == 6) { ?>
                                  <a class="menu-link" href="<?php echo $this->Url->build(['controller' => 'Projects', 'action' => 'profitabilitydetails', $project['id']]); ?>"><i class="mdi  mdi-account-box"></i> <span class="menu-bullet">
                                      <span class="bullet bullet-dot"></span>
                                    </span> <span class="menu-title">Apply New</span></a>
                                <?php } else if ($project['step_count'] == 7) { ?>
                                  <a class="menu-link" href="<?php echo $this->Url->build(['controller' => 'Projects', 'action' => 'suppliementarydetails', $project['id']]); ?>"><i class="mdi  mdi-account-box"></i> <span class="menu-bullet">
                                      <span class="bullet bullet-dot"></span>
                                    </span> <span class="menu-title">Apply New</span></a>
                                <?php } else if ($project['step_count'] == 8) { ?>
                                  <a class="menu-link" href="<?php echo $this->Url->build(['controller' => 'Projects', 'action' => 'referencedetails', $project['id']]); ?>"><i class="mdi  mdi-account-box"></i> <span class="menu-bullet">
                                      <span class="bullet bullet-dot"></span>
                                    </span> <span class="menu-title">Apply New</span></a>
                                <?php } else if ($project['step_count'] == 9 || $project['step_count'] == 10) { ?>
                                  <a class="menu-link" href="<?php echo $this->Url->build(['controller' => 'Projects', 'action' => 'paymentdetails', $project['id']]); ?>"><i class="mdi  mdi-account-box"></i> <span class="menu-bullet">
                                      <span class="bullet bullet-dot"></span>
                                    </span> <span class="menu-title">Apply New</span></a>
                                <?php  } else { ?>
                                  <a class="menu-link" href="<?php echo $this->Url->build(['controller' => 'Projects', 'action' => 'basicdetails', $project['id']]); ?>"><i class="mdi  mdi-account-box"></i> <span class="menu-bullet">
                                      <span class="bullet bullet-dot"></span>
                                    </span> <span class="menu-title">Apply New</span></a>
                                <?php  } ?>
                              <?php } ?>
                            <?php } ?>
                          </li>
                          </a>
                          <!--end:Menu link-->
                        </div>


                        <!-- <div class="menu-item"> -->
                          <!--begin:Menu link-->
                          <!-- <a class="menu-link py-3" href="">
                            <span class="menu-bullet">
                              <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Modify Existing</span>
                          </a> -->
                          <!--end:Menu link-->
                        <!-- </div> -->



                        <div class="menu-item p-0 ">
                          <!--begin:Menu link-->

                          <li>
                            <a class="nav-link" href="<?php echo $this->Url->build(['controller' => 'Pages', 'action' => 'statuscheck']); ?>">
                              <i class="mdi  mdi-account-box"></i>
                              <span class="menu-link py-3">
                                <i class="mdi  mdi-account-box"></i>
                                <span class="menu-bullet">
                                  <span class="bullet bullet-dot"></span>
                                </span> <span class="menu-title">Status Check</span></a>
                          </li>

                          </a>

                        </div>

                      </div>


                    </div>


                  </div>

                </div>

                <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start" class="menu-item menu-lg-down-accordion menu-sub-lg-down-indention me-0 me-lg-2">


                  <a class=" nav-link" style="color: #FF3147" href="<?php echo $this->Url->build(['controller' => 'Pages', 'action' => '']); ?>"><i class="mdi  mdi-account-box"></i> <span class="menu-link py-3">
                      <span class="menu-title">Compliance Services</span>
                      <span class="menu-arrow d-lg-none"></span>
                    </span></a>

                  <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown px-lg-2 py-lg-4 w-lg-200px">
                    <!--begin:Menu item-->
                    <div data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion">
                      <!--begin:Menu link-->
                      <span class="menu-link py-3 text-start">

                        <span class="menu-title">Licenses</span>

                      </span>
                      <span class="menu-link py-3 text-start">

                        <span class="menu-title">Approvals/Clearances</span>

                      </span>
                      <!--end:Menu link-->
                      <!--begin:Menu sub-->

                    </div>
                  </div>

                </div>

                <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start" class="menu-item menu-lg-down-accordion menu-sub-lg-down-indention me-0 me-lg-2">



                  <a class=" nav-link" style="color: #FF3147" href="<?php echo $this->Url->build(['controller' => 'Pages', 'action' => '']); ?>"><i class="mdi  mdi-account-box"></i> <span class="menu-link py-3">
                      <span class="menu-title">Climate Change Incentive Schemes</span>
                      <span class="menu-arrow d-lg-none"></span>
                    </span></a>


                  <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown px-lg-2 py-lg-4 w-lg-250px">

                    <div data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion">
                      <!--begin:Menu link-->
                      <span class="menu-link py-3 ">
                        <span class="menu-bullet">

                        </span>
                        <span class="menu-title">Carbon Capture Utilization
                          and Storage (CCUS)</span>
                        <span class="menu-arrow"></span>
                      </span>
                      <!--end:Menu link-->
                      <!--begin:Menu sub-->
                      <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                        <!--begin:Menu item-->
                        <div class="menu-item">
                          <!--begin:Menu link-->
                          <a class="menu-link py-3" href="">
                            <span class="menu-bullet">
                              <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Apply Online</span>
                          </a>
                          <!--end:Menu link-->
                        </div>

                      </div>


                    </div>
                  </div>






                </div>



                <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start" class="menu-item menu-lg-down-accordion menu-sub-lg-down-indention me-0 me-lg-2">



                  <a class=" nav-link" style="color: #FF3147" href="<?php echo $this->Url->build(['controller' => 'Pages', 'action' => '']); ?>"><i class="mdi  mdi-account-box"></i> <span class="menu-link py-3">
                      <span class="menu-title">EPR Certification</span>
                      <span class="menu-arrow d-lg-none"></span>
                    </span></a>
                  <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown px-lg-2 py-lg-4 w-lg-250px">

                    <div data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion">
                      <!--begin:Menu link-->
                      <span class="menu-link py-3 ">
                        <span class="menu-bullet">

                        </span>
                        <span class="menu-title">Extended Producer's
                          Responsibility (EPR)</span>
                        <span class="menu-arrow"></span>
                      </span>
                      <!--end:Menu link-->
                      <!--begin:Menu sub-->
                      <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                        <!--begin:Menu item-->
                        <div class="menu-item">
                          <!--begin:Menu link-->
                          <a class="menu-link py-3" href="">
                            <span class="menu-bullet">
                              <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Apply Online</span>
                          </a>
                          <!--end:Menu link-->
                        </div>

                      </div>


                    </div>
                  </div>



                </div>



                <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start" class="menu-item menu-lg-down-accordion menu-sub-lg-down-indention me-0 me-lg-2">
                  <!--begin:Menu link-->

                  <span class="menu-link py-3">
                    <span class="menu-title">Digital Library</span>
                    <span class="menu-arrow d-lg-none"></span>
                  </span>


                  <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown px-lg-2 py-lg-4 w-lg-200px">
                    <!--begin:Menu item-->
                    <div data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion">
                      <!--begin:Menu link-->
                      <a class=" nav-link" style="color: #FF3147" href="<?php echo $this->Url->build(['controller' => 'Pages', 'action' => 'digitallibrary']); ?>"><i class="mdi  mdi-account-box"></i> <span class="menu-link py-3 text-start">

                          <span class="menu-title">Government Schemes</span>

                        </span></a>

                        <a class=" nav-link" style="color: #FF3147" href="<?php echo $this->Url->build(['controller' => 'Pages', 'action' => 'projectprofile']); ?>"><i class="mdi  mdi-account-box"></i>
                        <span class="menu-link py-3 text-start">

                          <span class="menu-title">Project Profiles</span>

                        </span></a>
                      <!--end:Menu link-->
                      <!--begin:Menu sub-->

                    </div>
                  </div>


                  <!-- <?php if ($user_id == '') { ?>
						<a class="nav-link" href="<?php echo $this->Url->build(['controller' => 'Users', 'action' => 'login']); ?>"><i class="mdi  mdi-account-box"></i>  <span class="menu-link py-3">
                      <span class="menu-title">Digi-Library</span>
                      <span class="menu-arrow d-lg-none"></span>
                    </span></a>
					<?php } else { ?>
						<a class="nav-link" href="<?php echo $this->Url->build(['controller' => 'Pages', 'action' => 'digitallibrary']); ?>"><i class="mdi  mdi-account-box"></i>  <span class="menu-link py-3">
                      <span class="menu-title">Digi-Library</span>
                      <span class="menu-arrow d-lg-none"></span>
                    </span></a>
						 <?php } ?> -->



                </div>

                <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start" class="menu-item menu-lg-down-accordion menu-sub-lg-down-indention me-0 me-lg-2">
                  <!--begin:Menu link-->

                  <a class="nav-link" href="<?php echo $this->Url->build(['controller' => 'Pages', 'action' => 'pressreleases']); ?>"><i class="mdi  mdi-account-box"></i> <span class="menu-link py-3">
                      <span class="menu-title">Press Release</span>
                      <span class="menu-arrow d-lg-none"></span>
                    </span></a>



                </div>

              </div>

              <div class="flex-shrink-0 p-4 p-lg-0 me-lg-2">


                <?php if ($user_id == '') { ?>
                  <a class="menu-item btn btn-sm btn-primary fw-bold w-100 w-lg-auto" style="background: #eba939;" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss-="click" href="<?php echo $this->Url->build(['controller' => 'Users', 'action' => 'login']); ?>" target="_blank">login
                    <img src="<?php echo $this->Url->build(); ?>assets/icons/Vector.png" alt="" />
                  </a>
                <?php } else { ?>
                  <div class="d-flex align-items-center ms-3 ms-lg-4" id="kt_header_user_menu_toggle">
                    <div class="btn btn-icon btn-color-gray-700 btn-active-color-primary btn-outline btn-active-bg-light w-30px h-30px w-lg-40px h-lg-40px" data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
                      <i class="ki-duotone ki-user fs-1">
                        <span class="path1"></span>
                        <span class="path2"></span>
                      </i>
                    </div>

                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px" data-kt-menu="true">
                      <div class="menu-item px-3">
                        <div class="menu-content d-flex align-items-center px-3">
                          <!--begin::Avatar-->
                          <div class="symbol symbol-50px me-5">
                            <img alt="Logo" src="<?php echo $this->Url->image('../images/users/d2.jpg'); ?>" />
                          </div>
                          <!--end::Avatar-->
                          <!--begin::Username-->
                          <div class="d-flex flex-column">
                            <div class="fw-bold d-flex align-items-center fs-5">Welcome <?php echo $name; ?></div>
                          </div>
                          <!--end::Username-->
                        </div>
                      </div>
                      <!--begin::Menu separator-->
                      <div class="separator my-2"></div>
                      <!--end::Menu separator-->
                      <!--begin::Menu item-->
                      <div class="menu-item px-5">
                        <a href="<?php echo $this->Url->build(['controller' => 'Users', 'action' => 'changepassword']); ?>" class="menu-link px-5">Change Password</a>
                      </div>
                      <!--end::Menu item-->
                      <!--begin::Menu item-->
                      <div class="menu-item px-5">
                        <a href="<?php echo $this->Url->build(['controller' => 'Users', 'action' => 'logout']); ?>" class="menu-link px-5">Sign Out</a>
                      </div>
                      <!--end::Menu item-->
                    </div>
                    <!--end::User account menu-->
                    <!--end::Menu wrapper-->
                  </div>
                <?php } ?>
              </div>


              <!--end::User -->
            </div>
            <!--end::Menu wrapper-->
          </div>
          <!--end::Container-->
        </div>

      </div>


    </div>


  </div>



  <!-- NAV BAR -->
  <!-- <section style="background: #fff;">
      <div class="container">
         <div class="row">
            <div class="col mt-2">
               <nav class="navbar navbar-expand-lg justify-content-between">
                  <div class="top-logo">
                     <a href="<?php echo $this->Url->build(['controller' => 'Pages', 'action' => 'index']); ?>">   <img src="<?php echo $this->Url->build('/'); ?>assets/image/logo1.png" alt="logo" /> </a>
                  </div>
                  <button
                     class="navbar-toggler"
                     type="button"
                     data-bs-toggle="collapse"
                     data-bs-target="#navbarSupportedContent"
                     aria-controls="navbarSupportedContent"
                     aria-expanded="false"
                     aria-label="Toggle navigation"
                     >
                  <span class="navbar-toggler-icon"></span>
                  </button>
                  <div
                     class="collapse navbar-collapse justify-content-end"
                     id="navbarSupportedContent"
                     >
                     <ul class="nav navbar-nav mb-2 mb-lg-0">
                        <li class="nav-item1">
						 <?php if ($user_id == '') { ?>
                           <a
                              class="active nav-link"
                              aria-current="page"
                              href="#"
                              style="color: #FF3147"
                              >Home</a
                              >
						 <?php } else { ?>
							  <a class="active nav-link" style="color: #FF3147" href="<?php echo $this->Url->build(['controller' => 'Pages', 'action' => 'index']); ?>"><i class="mdi  mdi-account-box"></i>Home</a>
						 <?php } ?>
                        </li>
                        <li class="nav-item dropdown">
                           <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                           Project
                           </a>
                           <ul class="dropdown-menu">
                              <li>
							   <?php if ($user_id == '') { ?>
								  <a class="" href="#">Project Report</a>
							   <?php } else { ?>
							      <?php if ($project_count == 0) { ?>
							  	  <a class="dropdown-item" href="<?php echo $this->Url->build(['controller' => 'Projects', 'action' => 'basicdetails']); ?>"><i class="mdi  mdi-account-box"></i> Project Report</a>
							  	  <?php  } else { ?>
								  <?php if ($project['step_count'] == 1) { ?>
 								  <a class="dropdown-item" href="<?php echo $this->Url->build(['controller' => 'Projects', 'action' => 'entitydetails', $project['id']]); ?>"><i class="mdi  mdi-account-box"></i> Project Report</a>
 								  <?php } else if ($project['step_count'] == 2) { ?>
								  <a class="dropdown-item" href="<?php echo $this->Url->build(['controller' => 'Projects', 'action' => 'educationdetails', $project['id']]); ?>"><i class="mdi  mdi-account-box"></i> Project Report</a>
 								  <?php } else if ($project['step_count'] == 3) { ?>
								  <a class="dropdown-item" href="<?php echo $this->Url->build(['controller' => 'Projects', 'action' => 'manufacturingdetails', $project['id']]); ?>"><i class="mdi  mdi-account-box"></i> Project Report</a>
 								  <?php } else if ($project['step_count'] == 4) { ?>
								  <a class="dropdown-item" href="<?php echo $this->Url->build(['controller' => 'Projects', 'action' => 'manpowerdetails', $project['id']]); ?>"><i class="mdi  mdi-account-box"></i> Project Report</a>
 								  <?php } else if ($project['step_count'] == 5) { ?>
								  <a class="dropdown-item" href="<?php echo $this->Url->build(['controller' => 'Projects', 'action' => 'projectcostdetails', $project['id']]); ?>"><i class="mdi  mdi-account-box"></i> Project Report</a>
 								  <?php } else if ($project['step_count'] == 6) { ?>
								  <a class="dropdown-item" href="<?php echo $this->Url->build(['controller' => 'Projects', 'action' => 'profitabilitydetails', $project['id']]); ?>"><i class="mdi  mdi-account-box"></i> Project Report</a>
								  <?php } else if ($project['step_count'] == 7) { ?>
								  <a class="dropdown-item" href="<?php echo $this->Url->build(['controller' => 'Projects', 'action' => 'suppliementarydetails', $project['id']]); ?>"><i class="mdi  mdi-account-box"></i> Project Report</a>
 								  <?php } else if ($project['step_count'] == 8) { ?>
								  <a class="dropdown-item" href="<?php echo $this->Url->build(['controller' => 'Projects', 'action' => 'referencedetails', $project['id']]); ?>"><i class="mdi  mdi-account-box"></i> Project Report</a>
 								  <?php } else if ($project['step_count'] == 9 || $project['step_count'] == 10) { ?>
								  <a class="dropdown-item" href="<?php echo $this->Url->build(['controller' => 'Projects', 'action' => 'paymentdetails', $project['id']]); ?>"><i class="mdi  mdi-account-box"></i> Project Report</a>
								  <?php  } else { ?>
								  <a class="dropdown-item" href="<?php echo $this->Url->build(['controller' => 'Projects', 'action' => 'basicdetails', $project['id']]); ?>"><i class="mdi  mdi-account-box"></i> Project Report</a>
							      <?php  } ?>
								<?php } ?>
								<?php } ?>
							 </li>
                              <li><a class="" href="http://15.207.40.134/webroot/ITCOT/pages/statuscheck"><i class="mdi  mdi-account-box"></i>Status Check</a></li>
                           </ul>
                        </li>
                        <li class="nav-item">
							<?php if ($user_id == '') { ?>
                           <a class="nav-link" href="#">Digi-Library</a>
						    <?php } else { ?>
							  <a class="nav-link" href="<?php echo $this->Url->build(['controller' => 'Pages', 'action' => 'digitallibrary']); ?>"><i class="mdi  mdi-account-box"></i>Digi-Library</a>
						 <?php } ?>
                        </li>
                       
                        <li class="nav-item">
						<?php if ($user_id == '') { ?>
                           <a class="nav-link" href="#">Press Release</a>
						    <?php } else { ?>
							  <a class="nav-link" href="<?php echo $this->Url->build(['controller' => 'Pages', 'action' => 'pressreleases']); ?>"><i class="mdi  mdi-account-box"></i>Press Release</a>
						 <?php } ?>
                        </li>
                     </ul>
					 
					 <?php if ($user_id == '') { ?>
					    <a class="login_btn btn btn-small" href="<?php echo $this->Url->build(['controller' => 'Users', 'action' => 'login']); ?>" target="_blank">login
                     <img src="<?php echo $this->Url->build(); ?>assets/icons/Vector.png" alt="" /></a>
					<?php } else { ?>
					 <ul class="nav navbar-nav mb-2 mb-lg-0"> -->

  <!-- -------------------------------------------------------------- -->
  <!-- Profile -->
  <!-- -------------------------------------------------------------- -->


  <!-- <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle waves-effect waves-dark" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="<?php echo $this->Url->image('../images/users/d2.jpg'); ?>" alt="user" width="30" class="profile-pic rounded-circle" />
                            </a>
                           <ul class="dropdown-menu">
						         <li><span class= "dropdown-item">Hi <?php echo $name; ?></span></li>
                                 <li>
								   <a class="dropdown-item" href="<?php echo $this->Url->build(['controller' => 'Users', 'action' => 'changepassword']); ?>"><i class="mdi  mdi-account-box"></i> Change Password</a>
								</li>
                                <li><a class="dropdown-item" href="<?php echo $this->Url->build(['controller' => 'Users', 'action' => 'logout']); ?>"><i data-feather="log-out" class="feather-sm text-danger me-1 ms-1"></i> Logout</a>
								</li>
                          </ul>
                        </li>
                          
                    </ul>
					<?php } ?> -->

  <!--button class="login_btn btn btn-small" type="button" href="<?php echo $this->Url->build(['controller' => 'Users', 'action' => 'login']); ?>">
                     login
                     <img src="<?php echo $this->Url->build(); ?>assets/icons/Vector.png" alt="" />
                     </button-->
  <!-- </div>
               </nav>
            </div>
         </div>
      </div>
   </section> -->

  <!-- BLUE CONTENT -->

  <?= $this->Flash->render() ?>
  <?= $this->fetch('content') ?>

  <div class="container-fluid" style="background-color: #093875">
    <div class="container">
      <div class="row mt-5" style="background-color: #093875">
        <div class="col-lg-3 col-md-3 col-sm-12">
          <div class="foot-1 mt-5">
            <a href="<?php echo $this->Url->build(['controller' => 'Pages', 'action' => 'index']); ?>"> <img src="<?php echo $this->Url->build('/'); ?>assets/image/logo1.png" alt="logo" /></a>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
              eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
              enim ad minim veniam
            </p>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-12">
          <div class="foot-2 mt-5">
            <p>IMPORTANT LINKS</p>
            <ul style="list-style: none">
              <a href="#" style="text-decoration: none;">
                <li>Project Report</li>
              </a>
              <a href="#" style="text-decoration: none;">
                <li>Digi-Library</li>
              </a>
              <a href="#" style="text-decoration: none;">
                <li>Status Check</li>
              </a>
            </ul>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-12">
          <div class="foot-3 mt-5">
            <p>Schemes</p>
            <ul style="list-style: none">
              <a href="#" style="text-decoration: none;">
                <li>MSME Schemes</li>
              </a>
              <a href="#" style="text-decoration: none;">
                <li>Union Government Schemes</li>
              </a>
              <a href="#" style="text-decoration: none;">
                <li>State Government Schemes</li>
              </a>
            </ul>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-12">
          <div class="foot-4 mt-5">
            <p>CONTACT INFORMATION</p>
            <ul style="list-style: none">
              <li>50-A, Greams RoadChennai 600 006</li>
              <li>Call Us: 91-44-28290324</li>
              <li>Email - info@itcot.com</li>
              <li>Fax - 044-2829 3512</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <section style="background: #0a213d; padding: 20px">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-12">
          <div class="cpy-ryt">
            <p>
              Copyright © 2023 ITCOT. All rights reserved. Designed by Muthu
              Softlabs Private Limited
            </p>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col -sm-12">
          <div class="visitors-form">
            <h4>
              visitors Count
            </h4>
            <input class="visitors" type="text" maxlength="1" value="0" disabled />
            <input class="visitors" type="text" maxlength="1" value="0" disabled />
            <input class="visitors" type="text" maxlength="1" value="0" disabled />
            <input class="visitors" type="text" maxlength="1" value="0" disabled />
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php echo $this->Html->script('admin/flatpickr.min'); ?>

  <script>
    jQuery('body').on('keyup', '.num', function(e) {
      this.value = this.value.replace(/[^0-9]/g, '').replace(/  +/g, ' ');
    });

    jQuery('body').on('keyup', '.amount', function(e) {
      this.value = this.value.replace(/[^0-9\.]/g, '').replace(/  +/g, ' ');
    });

    jQuery('body').on('keyup', '.alphanumeric', function(e) {
      this.value = this.value.replace(/[^0-9a-zA-Z ]/g, '').replace(/  +/g, ' ');
    });

    jQuery('body').on('keyup', '.specialfield', function(e) {
      this.value = this.value.replace(/[^a-zA-Z0-9\.\&\-\_\/\s]/g, '').replace(/  +/g, ' ');
    });

    jQuery('body').on('keyup', '.trimspace', function(e) {
      var value = this.value.trim();
    });

    $(document).on("input", ".name", function() {
      this.value = this.value.replace(/[^a-zA-Z\s]/g, '');
    });

    $(document).on("input", ".number", function() {
      this.value = this.value.replace(/[^0-9]/g, '');
    });
    $(document).on("input", ".decimal", function() {
      this.value = this.value.replace(/[^\d.]/g, '');
    });
    // Datepicker
    $('.flatpickr').flatpickr({
      maxDate: "today",
      dateFormat: "d-m-Y",
      allowInput: true
      
    

 

    //   altInput: true,

    // dateFormat: "d-m-Y",
    // mode: "range"

// enableTime: true,
//     dateFormat: "Y-m-d H:i",

});

    $('.monthpicker').flatpickr({
      maxDate: "today",
      allowInput: false,
      plugins: [
        new monthSelectPlugin({
          shorthand: true,
          dateFormat: "Y-m",
          altFormat: "F Y"
        })
      ]
    });

    $('.dropdown').on("mouseenter", () => {
      $('.dropdown > a > button').addClass('show')
      $('.dropdown > a > button').attr("aria-expanded", "true");
      $('.dropdown > div').addClass('show')
      $('.dropdown > div').attr("data-bs-popper", "none");
    });

    $('.dropdown').on("mouseleave", () => {
      $('.dropdown > a > button').removeClass('show')
      $('.dropdown > a > button').attr("aria-expanded", "false");
      $('.dropdown > div').removeClass('show')
      $('.dropdown > div').removeAttr("data-bs-popper", "none");
    });
  </script>

  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

  <?php echo $this->Html->script('sz-slider'); ?>
</body>

</html>