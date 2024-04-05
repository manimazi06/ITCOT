<!DOCTYPE html>
<html lang="en">

<head>
    <?= $this->Html->charset() ?>
    <title>ITCOT</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="itcot.png" type="image/x-icon">

    <?php echo $this->Html->css('admin/style.min'); ?>
    <?php echo $this->Html->css('admin/main-style'); ?>

    <?php //echo $this->Html->css('datatables.min'); 
    ?>
    <?php //echo $this->Html->css('buttons.dataTables.min'); 
    ?>
    <?php echo $this->Html->css('admin/buttons.bootstrap5'); ?>

    <?php echo $this->Html->script('admin/libs/jquery/dist/jquery.min'); ?>

    <?php echo $this->Html->script('admin/jquery.validate.min'); ?>

    <?php echo $this->Html->css('admin/flatpickr.min'); ?>
    <?php echo $this->Html->css('admin/monthSelect'); ?>
    <?php echo $this->Html->css('admin/airbnb'); ?>
    <?php echo $this->Html->css('admin/css-chart'); ?>

    <?php echo $this->Html->css('admin/magnific-popup'); ?>
    <?php echo $this->Html->css('admin/multiselect'); ?>

    <?php echo $this->Html->css('admin/libs/datatable/datatables.min'); ?>
    <?php echo $this->Html->css('admin/libs/datatable/dataTables.bootstrap5.min'); ?>
    <?php echo $this->Html->css('admin/libs/datatable/buttons.bootstrap5.min'); ?>

    <?php echo $this->Html->script('admin/libs/datatable/datatables.min'); ?>
    <?php echo $this->Html->script('admin/libs/datatable/dataTables.bootstrap5.min'); ?>
    <?php echo $this->Html->script('admin/libs/datatable/buttons.bootstrap5.min'); ?>
    <?php echo $this->Html->script('admin/libs/datatable/jszip.min'); ?>
    <?php echo $this->Html->script('admin/libs/datatable/pdfmake.min'); ?>
    <?php echo $this->Html->script('admin/libs/datatable/vfs_fonts'); ?>
    <?php echo $this->Html->script('admin/highcharts'); ?>
    <?php echo $this->Html->script('admin/multiselect.min'); ?>
</head>

<body>
    <div id="main-wrapper">
        <!-- Header -->
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-lg navbar-dark">
                <div class="navbar-header">
                    <!-- This is for the sidebar toggle which is visible on mobile only -->
                    <a class="nav-toggler waves-effect waves-light d-block d-lg-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                    <!-- -------------------------------------------------------------- -->
                    <!-- Logo -->
                    <!-- -------------------------------------------------------------- -->

                    <a class="navbar-brand" href="">
                        <!-- Logo text -->
                        <span class="logo-text">
                            <img src="<?php echo $this->Url->image('../images/itcot_logo.png'); ?>" class="light-logo" alt="homepage" style="width:180px" />
                        </span>
                    </a>
                    <!-- -------------------------------------------------------------- -->
                    <!-- End Logo -->
                    <!-- -------------------------------------------------------------- -->
                    <!-- -------------------------------------------------------------- -->
                    <!-- Toggle which is visible on mobile only -->
                    <!-- -------------------------------------------------------------- -->
                    <a class="topbartoggler d-block d-lg-none waves-effect waves-light" href="javascript:void(0)" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="ti-more"></i></a>
                </div>
                <!-- -------------------------------------------------------------- -->
                <!-- End Logo -->
                <!-- -------------------------------------------------------------- -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent">
                    <!-- -------------------------------------------------------------- -->
                    <!-- toggle and nav items -->
                    <!-- -------------------------------------------------------------- -->
                    <ul class="navbar-nav me-auto">
                        <!-- This is  -->
                        <!-- <li class="nav-item"> <a
                                class="nav-link sidebartoggler d-none d-md-block waves-effect waves-dark"
                                href="javascript:void(0)"><i class="ti-menu"></i></a> </li> -->
                    </ul>
                    <!-- -------------------------------------------------------------- -->
                    <!-- Right side toggle and nav items -->
                    <!-- -------------------------------------------------------------- -->
                    <ul class="navbar-nav justify-content-end">

                        <!-- -------------------------------------------------------------- -->
                        <!-- Profile -->
                        <!-- -------------------------------------------------------------- -->
                        <li class="nav-item">
                            <a onclick="funcToggle()" class="nav-link sidebartoggler d-none d-md-block waves-effect waves-dark" href="javascript:void(0)"><i class="ti-menu"></i></a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="<?php echo $this->Url->image('../images/users/d2.jpg'); ?>" alt="user" width="30" class="profile-pic rounded-circle" />
                            </a>
                            <div class="dropdown-menu dropdown-menu-end user-dd animated flipInY">
                                <div class="d-flex no-block align-items-center p-3 bg-info text-white mb-2">
                                    <div class=""><img src="<?php echo $this->Url->image('../images/users/d2.jpg'); ?>" alt="user" class="rounded-circle" width="60"></div>
                                    <div class="ms-2">
                                        <h4 class="mb-0 text-white"><?php echo $username; ?></h4>

                                    </div>
                                </div>

                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="<?php echo $this->Url->build(['controller' => 'Users', 'action' => 'changepassword']); ?>"><i class="mdi  mdi-account-box"></i> Change Password</a>
                                <a class="dropdown-item" href="<?php echo $this->Url->build(['controller' => 'Users', 'action' => 'logout']); ?>"><i data-feather="log-out" class="feather-sm text-danger me-1 ms-1"></i> Logout</a>

                                <div class="dropdown-divider"></div>

                            </div>
                        </li>

                    </ul>
                </div>
            </nav>
        </header>
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <!-- User Profile-->
                        <li class="nav-small-cap"><i class="mdi mdi-dots-horizontal"></i> <span class="hide-menu">Personal</span></li>

                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark" href="<?php echo $this->Url->build(['controller' => 'users', 'action' => 'dashboard']); ?>" aria-expanded="false"><i class="mdi  mdi-account-box"></i><span class="hide-menu">Dashboard </span></a>
                        </li>

                        <?php if ($role_id == 1) { ?>
                            <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark" href="<?php echo $this->Url->build(['controller' => 'Users', 'action' => 'index']); ?>" aria-expanded="false"><i class="mdi  mdi-account-box"></i><span class="hide-menu">Users </span></a>
                            </li>
                        <?php } ?>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-grid"></i><span class="hide-menu">Digital Library </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><?php echo $this->Html->link(__('<i class="mdi  mdi-account-box"></i>&nbsp; Schemes'), ['controller' => 'Schemes', 'action' => 'index'], ['escape' => false, 'class' => 'sidebar-link']); ?>
                                </li>
                                <li class="sidebar-item"><?php echo $this->Html->link(__('<i class="mdi  mdi-account-box"></i>&nbsp; Scheme Types'), ['controller' => 'SchemeTypes', 'action' => 'index'], ['escape' => false, 'class' => 'sidebar-link']); ?>
                                </li>
                                <li class="sidebar-item"><?php echo $this->Html->link(__('<i class="mdi  mdi-account-box"></i>&nbsp; Departments'), ['controller' => 'Departments', 'action' => 'index'], ['escape' => false, 'class' => 'sidebar-link']); ?>
                                </li>
                                <li class="sidebar-item"><?php echo $this->Html->link(__('<i class="mdi  mdi-account-box"></i>&nbsp; Department Schemes'), ['controller' => 'DepartmentSchemes', 'action' => 'index'], ['escape' => false, 'class' => 'sidebar-link']); ?>
                                </li>
                                <li class="sidebar-item"><?php echo $this->Html->link(__('<i class="mdi  mdi-account-box"></i>&nbsp; Project Profiles'), ['controller' => 'ProjectProfiles', 'action' => 'index'], ['escape' => false, 'class' => 'sidebar-link']); ?>
                                </li>
                                <li class="sidebar-item"><?php echo $this->Html->link(__('<i class="mdi  mdi-account-box"></i>&nbsp; Project ProfileValues'), ['controller' => 'ProjectProfileValues', 'action' => 'index'], ['escape' => false, 'class' => 'sidebar-link']); ?>
                                </li>
                                <li class="sidebar-item"><?php echo $this->Html->link(__('<i class="mdi  mdi-account-box"></i>&nbsp; Project Profile Details'), ['controller' => 'ProjectProfileDetails', 'action' => 'index'], ['escape' => false, 'class' => 'sidebar-link']); ?>
                                </li>
                                <li class="sidebar-item"><?php echo $this->Html->link(__('<i class="mdi  mdi-account-box"></i>&nbsp; MSME Divisions'), ['controller' => 'MsmeDivisions', 'action' => 'index'], ['escape' => false, 'class' => 'sidebar-link']); ?>
                                </li>
                                <li class="sidebar-item"><?php echo $this->Html->link(__('<i class="mdi  mdi-account-box"></i>&nbsp; MSME Schemes'), ['controller' => 'MsmeSchemes', 'action' => 'index'], ['escape' => false, 'class' => 'sidebar-link']); ?>
                                </li>
                                <li class="sidebar-item"><?php echo $this->Html->link(__('<i class="mdi  mdi-account-box"></i>&nbsp; MSME SubSchemes'), ['controller' => 'MsmeSubschemes', 'action' => 'index'], ['escape' => false, 'class' => 'sidebar-link']); ?>
                                </li>
                           
                                <li class="sidebar-item"><?php echo $this->Html->link(__('<i class="mdi  mdi-account-box"></i>&nbsp; DL-Logs'), ['controller' => 'DigitalLibraryLogs', 'action' => 'index'], ['escape' => false, 'class' => 'sidebar-link']); ?>
                                </li>
                            </ul>
                        </li>

                        <!-- Virtual CFO -->
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-grid"></i><span class="hide-menu">Virtual CFO </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><?php echo $this->Html->link(__('<i class="mdi  mdi-account-box"></i>&nbsp; Virtual CFO'), ['controller' => 'VirtualcfoRegistrations', 'action' => 'virtualcfo'], ['escape' => false, 'class' => 'sidebar-link']); ?>
                                </li>

                            </ul>
                        </li>
                        <!-- EPR Certification -->


                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-grid"></i><span class="hide-menu">EPR Certification </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">


                            <li class="sidebar-item"><?php echo $this->Html->link(__('<i class="mdi  mdi-account-box"></i>&nbsp; Extended Producers Responsibility (EPR)'), ['controller' => 'Eprcertification', 'action' => 'eprcertification'], ['escape' => false, 'class' => 'sidebar-link']); ?>
                                </li>
                                <li class="sidebar-item"><?php echo $this->Html->link(__('<i class="mdi  mdi-account-box"></i>&nbsp; EPR Masters'), ['controller' => 'Eprcertification', 'action' => 'eprcertification'], ['escape' => false, 'class' => 'sidebar-link']); ?>
                                    <ul class="collapse second-level">
                                        <li class="sidebar-item"><?php echo $this->Html->link(__('<i class="mdi  mdi-account-box"></i>&nbsp;EPR Roles'), ['controller' => 'EprRoles', 'action' => 'index'], ['escape' => false, 'class' => 'sidebar-link']); ?></li>
                                        <li class="sidebar-item"><?php echo $this->Html->link(__('<i class="mdi  mdi-account-box"></i>&nbsp;Type of waste'), ['controller' => 'WasteTypes', 'action' => 'index'], ['escape' => false, 'class' => 'sidebar-link']); ?></li>
                                        <li class="sidebar-item"><?php echo $this->Html->link(__('<i class="mdi  mdi-account-box"></i>&nbsp;Waste categories'), ['controller' => 'WasteCategories', 'action' => 'index'], ['escape' => false, 'class' => 'sidebar-link']); ?></li>
                                        <li class="sidebar-item"><?php echo $this->Html->link(__('<i class="mdi  mdi-account-box"></i>&nbsp;Waste product details'), ['controller' => 'WasteProductDetails', 'action' => 'index'], ['escape' => false, 'class' => 'sidebar-link']); ?></li>
                                    </ul>

                                </li>
                               

                            </ul>



                        </li>
                        <!-- <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-grid"></i><span class="hide-menu">EPR Masters </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><?php echo $this->Html->link(__('<i class="mdi  mdi-account-box"></i>&nbsp; Type of waste'), ['controller' => 'Eprcertification', 'action' => 'eprcertification'], ['escape' => false, 'class' => 'sidebar-link']); ?>
                                </li>
                                <li class="sidebar-item"><?php echo $this->Html->link(__('<i class="mdi  mdi-account-box"></i>&nbsp; Waste Categories'), ['controller' => 'Eprcertification', 'action' => 'eprcertification'], ['escape' => false, 'class' => 'sidebar-link']); ?>
                                </li>
                                <li class="sidebar-item"><?php echo $this->Html->link(__('<i class="mdi  mdi-account-box"></i>&nbsp; Waste Product details'), ['controller' => 'Eprcertification', 'action' => 'eprcertification'], ['escape' => false, 'class' => 'sidebar-link']); ?>
                                </li>
                                <li class="sidebar-item"><?php echo $this->Html->link(__('<i class="mdi  mdi-account-box"></i>&nbsp; EPR Roles'), ['controller' => 'Eprcertification', 'action' => 'eprcertification'], ['escape' => false, 'class' => 'sidebar-link']); ?>
                                </li>
                                <li class="sidebar-item"><?php echo $this->Html->link(__('<i class="mdi  mdi-account-box"></i>&nbsp; EPR Plastics'), ['controller' => 'Eprcertification', 'action' => 'eprcertification'], ['escape' => false, 'class' => 'sidebar-link']); ?>
                                </li>

                            </ul>
                        </li> -->

                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-grid"></i><span class="hide-menu">Compliance Services </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><?php echo $this->Html->link(__('<i class="mdi  mdi-account-box"></i>&nbsp; Approvals/Clearances'), ['controller' => 'ComplianceServices', 'action' => 'index'], ['escape' => false, 'class' => 'sidebar-link']); ?>
                                </li>

                            </ul>
                        </li>
                        <!-- <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark" href="<?php echo $this->Url->build(['controller' => 'Projects', 'action' => 'basicdetails']); ?>" aria-expanded="false"><i class="mdi  mdi-account-box"></i><span class="hide-menu">Project Report </span></a>
                            </li> -->
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark" href="<?php echo $this->Url->build(['controller' => 'Projects', 'action' => 'index']); ?>" aria-expanded="false"><i class="mdi  mdi-account-box"></i><span class="hide-menu">Project Report </span></a>
                        </li>

                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-grid"></i><span class="hide-menu">Masters </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><?php echo $this->Html->link(__('<i class="mdi  mdi-account-box"></i>&nbsp; Categories'), ['controller' => 'Categories', 'action' => 'index'], ['escape' => false, 'class' => 'sidebar-link']); ?>
                                </li>
                                <li class="sidebar-item"><?php echo $this->Html->link(__('<i class="mdi  mdi-account-box"></i>&nbsp; Educations'), ['controller' => 'Educations', 'action' => 'index'], ['escape' => false, 'class' => 'sidebar-link']); ?>
                                </li>
                                <li class="sidebar-item"><?php echo $this->Html->link(__('<i class="mdi  mdi-account-box"></i>&nbsp; Loan Purposes'), ['controller' => 'LoanPurposes', 'action' => 'index'], ['escape' => false, 'class' => 'sidebar-link']); ?>
                                </li>
                                <li class="sidebar-item"><?php echo $this->Html->link(__('<i class="mdi  mdi-account-box"></i>&nbsp; Loan Types'), ['controller' => 'LoanTypes', 'action' => 'index'], ['escape' => false, 'class' => 'sidebar-link']); ?>
                                </li>
                                <li class="sidebar-item"><?php echo $this->Html->link(__('<i class="mdi  mdi-account-box"></i>&nbsp; Locality Type'), ['controller' => 'Localitytype', 'action' => 'index'], ['escape' => false, 'class' => 'sidebar-link']); ?>
                                </li>
                                <li class="sidebar-item"><?php echo $this->Html->link(__('<i class="mdi  mdi-account-box"></i>&nbsp; Sector Types'), ['controller' => 'Sectortypes', 'action' => 'index'], ['escape' => false, 'class' => 'sidebar-link']); ?>
                                </li>
                                <li class="sidebar-item"><?php echo $this->Html->link(__('<i class="mdi  mdi-account-box"></i>&nbsp; States'), ['controller' => 'States', 'action' => 'index'], ['escape' => false, 'class' => 'sidebar-link']); ?>
                                </li>
                                <li class="sidebar-item"><?php echo $this->Html->link(__('<i class="mdi  mdi-account-box"></i>&nbsp; Districts'), ['controller' => 'Districts', 'action' => 'index'], ['escape' => false, 'class' => 'sidebar-link']); ?>
                                </li>
                                <li class="sidebar-item"><?php echo $this->Html->link(__('<i class="mdi  mdi-account-box"></i>&nbsp; Roles'), ['controller' => 'Roles', 'action' => 'index'], ['escape' => false, 'class' => 'sidebar-link']); ?>
                                </li>
                                <li class="sidebar-item"><?php echo $this->Html->link(__('<i class="mdi  mdi-account-box"></i>&nbsp; Press Releases'), ['controller' => 'PressReleases', 'action' => 'index'], ['escape' => false, 'class' => 'sidebar-link']); ?>
                                </li>
                                <li class="sidebar-item"><?php echo $this->Html->link(__('<i class="mdi  mdi-account-box"></i>&nbsp; Registration type'), ['controller' => 'Registrationtype', 'action' => 'index'], ['escape' => false, 'class' => 'sidebar-link']); ?>
                                </li>
                                <li class="sidebar-item"><?php echo $this->Html->link(__('<i class="mdi  mdi-account-box"></i>&nbsp; Units'), ['controller' => 'Units', 'action' => 'index'], ['escape' => false, 'class' => 'sidebar-link']); ?>
                                </li>
                                <!-- <li class="sidebar-item"><?php echo $this->Html->link(__('<i class="mdi  mdi-account-box"></i>&nbsp; Virtual CFO States'), ['controller' => 'VirtualcfoStates', 'action' => 'index'], ['escape' => false, 'class' => 'sidebar-link']); ?>
                                </li> -->
                                <li class="sidebar-item"><?php echo $this->Html->link(__('<i class="mdi  mdi-account-box"></i>&nbsp; Services'), ['controller' => 'Services', 'action' => 'index'], ['escape' => false, 'class' => 'sidebar-link']); ?>
                                </li>
                                <li class="sidebar-item"><?php echo $this->Html->link(__('<i class="mdi  mdi-account-box"></i>&nbsp; Districtwise Pincodedetails'), ['controller' => 'DistrictwisePincodedetails', 'action' => 'index'], ['escape' => false, 'class' => 'sidebar-link']); ?>
                                </li>

                            </ul>
                        </li>
                    </ul>

                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- -------------------------------------------------------------- -->
        <div class="page-wrapper">
            <div class="container-fluid">
                <?= $this->Flash->render() ?>
                <?= $this->fetch('content') ?>
            </div>
        </div>
        <footer class="footer text-center">
            All Rights Reserved by ITCOT.
        </footer>
        <!-- -------------------------------------------------------------- -->
        <!-- Login box.scss -->
    </div>
</body>
<?php echo $this->Html->script('admin/libs/bootstrap/dist/js/bootstrap.bundle.min'); ?>
<?php echo $this->Html->script('admin/app'); ?>
<?php echo $this->Html->script('admin/app.init.horizontal'); ?>
<?php echo $this->Html->script('admin/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min'); ?>
<?php echo $this->Html->script('admin/sidebarmenu'); ?>
<?php echo $this->Html->script('admin/feather.min'); ?>
<?php echo $this->Html->script('admin/custom.min'); ?>
<?php echo $this->Html->script('admin/flatpickr.min'); ?>
<?php echo $this->Html->script('admin/monthSelect'); ?>
<?php echo $this->Html->script('admin/jquery.magnific-popup.min'); ?>
<?php //echo $this->Html->script('admin/jquery.charts-sparkline'); 
?>
<?php echo $this->Html->script('admin/libs/apexcharts/dist/apexcharts.min'); ?>
<?php //echo $this->Html->script('dashboard3'); 
?>

<?php echo $this->Html->script('admin/export-excel'); ?>

<script>
    $(".preloader").fadeOut();

    $(document).ready(function() {

        // Datatable
        $('#example4, .DataTable').DataTable();

        $('.DataTable2').DataTable({
            "columnDefs": [{
                "width": "100px",
                "targets": "_all"
            }],
            "scrollX": true,
            "scrollCollapse": true,
            "fixedColumns": {
                "left": 1,
                "right": 1
            }
        });

        // Datepicker
        $('.flatpickr').flatpickr({
            maxDate: "today",
            dateFormat: "d-m-Y",
            allowInput: false
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
        $('.fmonthpicker').flatpickr({
            allowInput: false,
            plugins: [
                new monthSelectPlugin({
                    shorthand: true,
                    dateFormat: "Y-m",
                    altFormat: "F Y"
                })
            ]
        });
    });

    // Date Picker
    // jQuery('.datepicker').datepicker({
    //     autoclose: true,
    //     todayHighlight: true,
    //     format: 'dd-mm-yyyy'
    // });

    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
        'use strict'

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.querySelectorAll('.needs-validation')

        // Loop over them and prevent submission
        Array.prototype.slice.call(forms)
            .forEach(function(form) {
                form.addEventListener('submit', function(event) {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }

                    form.classList.add('was-validated')
                }, false)
            })
    })()

    // NProgress.start();
    // setTimeout(function() {
    //     NProgress.done();
    // }, 1000);


    function titleCase(string) {
        var sentence = string.toLowerCase().split(" ");
        for (var i = 0; i < sentence.length; i++) {
            sentence[i] = sentence[i][0].toUpperCase() + sentence[i].slice(1);
        }

        return sentence.join(" ");
    }


    jQuery('.titleCase').keyup(function() {
        this.value = titleCase(this.value);
    });


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
        this.value = this.value.replace(/[^a-zA-Z\s/\s]/g, '');
    });
    $(document).on("input", ".number", function() {
        this.value = this.value.replace(/[^0-9]/g, '');
    });
    $(document).on("input", ".decimal", function() {
        this.value = this.value.replace(/[^\d.]/g, '');
    });

    jQuery('body').on('focusout', '.email', function(e) {
        var trimmedValue = $('.email').val();
        $('.email').val('').val(trimmedValue);
    });

    function funcToggle() {
        $(".left-sidebar").toggleClass('hidden');
        $(".page-wrapper").toggleClass('hidden1');
    };
</script>

</html>