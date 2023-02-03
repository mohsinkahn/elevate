<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>Elevate</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <!-- App favicon -->
    <!-- <link rel="shortcut icon" href="assets/images/favicon.ico"> -->
    <script src="assets/libs/jquery/jquery.min.js"></script>
    <!-- plugin css -->
    <link href="assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />

    <!-- preloader css -->
    <link rel="stylesheet" href="assets/css/preloader.min.css" type="text/css" />

    <!-- Bootstrap Css -->
    <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- my css -->
    <link href="assets/css/my-style.css" rel="stylesheet" type="text/css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Raleway:wght@600;800&family=Roboto:wght@500&display=swap" rel="stylesheet">


    <!-- App Css-->
    <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />


    <!-- full calendar css-->
    <link href="assets/libs/%40fullcalendar/core/main.min.css" rel="stylesheet" type="text/css">
    <link href="assets/libs/%40fullcalendar/daygrid/main.min.css" rel="stylesheet" type="text/css">
    <link href="assets/libs/%40fullcalendar/bootstrap/main.min.css" rel="stylesheet" type="text/css">
    <link href="assets/libs/%40fullcalendar/timegrid/main.min.css" rel="stylesheet" type="text/css">

    <!-- DataTables -->
    <link href="assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <!-- dropzone css -->
    <link href="assets/libs/dropzone/min/dropzone.min.css" rel="stylesheet" type="text/css" />
    <!-- datepicker css -->
    <link rel="stylesheet" href="assets/libs/flatpickr/flatpickr.min.css">
     <!-- twitter-bootstrap-wizard css -->
     <link rel="stylesheet" href="assets/libs/twitter-bootstrap-wizard/prettify.css">
</head>

<body>

    <!-- <body data-layout="horizontal"> -->

    <!-- Begin page -->
    <div id="layout-wrapper">


        <header id="page-topbar">
            <div class="navbar-header">
                <div class="d-flex">
                    <!-- LOGO -->
                    <div class="navbar-brand-box">
                        <a href="index.php" class="logo logo-dark">
                            <span class="logo-sm">
                                <!-- <img src="assets/images/logo.png" alt="" style="height:24px"> -->
                            </span>
                            <span class="logo-lg">
                                <img src="assets/images/logo.png" alt="" style="height:60px">
                                <!-- <span class="logo-txt">Strategeye</span> -->
                            </span>
                        </a>

                        <a href="index.php" class="logo logo-light">
                            <span class="logo-sm">
                                <!-- <img src="assets/images/logo.png" alt="" style="height:24px"> -->
                            </span>
                            <span class="logo-lg">
                                <img src="assets/images/logo.png" alt="" style="height:60px">
                                 <!-- <span class="logo-txt">Strategeye</span> -->
                            </span>
                        </a>
                    </div>

                    <button type="button" class="btn btn-sm px-3 font-size-16 header-item" id="vertical-menu-btn">
                        <i class="fa fa-fw fa-bars"></i>
                    </button>

                    <!-- App Search-->
                    <form class="app-search d-none d-lg-block">
                        <div class="position-relative">
                            <input type="text" class="form-control" placeholder="Search...">
                            <button class="btn btn-primary" type="button"><i class="bx bx-search-alt align-middle"></i></button>
                        </div>
                    </form>
                </div>

                <div class="d-flex">
                    <div class="dropdown d-inline-block d-lg-none ms-2">
                        <button type="button" class="btn header-item" id="page-header-search-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i data-feather="search" class="icon-lg"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0" aria-labelledby="page-header-search-dropdown">
                            <form class="p-3">
                                <div class="form-group m-0">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search ..." aria-label="Search Result">
                                        <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                   

                    <div class="dropdown d-inline-block">
                        <button type="button" class="btn header-item bg-soft-light border-start border-end" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="rounded-circle header-profile-user" src="assets/images/users/avatar-1.jpg" alt="Header Avatar">
                            <span class="d-none d-xl-inline-block ms-1 fw-medium">Shawn L.</span>
                            <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end">
                            <!-- item-->
                            <a class="dropdown-item" href="profile.php"><i class="fa fa-user font-size-16 align-middle me-1"></i> Profile</a>
                            
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="login.php"><i class="mdi mdi-logout font-size-16 align-middle me-1"></i> Logout</a>
                        </div>
                    </div>

                </div>
            </div>
        </header>

        <!-- ========== Left Sidebar Start ========== -->
        <div class="vertical-menu">

            <div data-simplebar class="h-100">

                <!--- Sidemenu -->
                <div id="sidebar-menu">
                    <!-- Left Menu Start -->
                    <ul class="metismenu list-unstyled" id="side-menu">
                        <li>
                            <a href="index.php">
                                <i class="mdi mdi-view-dashboard"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>
                        <li>
                            <a href="contact.php">
                                <i class="mdi mdi-account"></i>
                                <span>Contacts</span>
                            </a>
                        </li>
                        
                        <li>
                            <a href="campaign.php">
                            <i class="mdi mdi-lightbulb-on-outline"></i>
                                <span>Opportunites</span>
                            </a>
                        </li>
                        <li>
                            <a href="calendar.php">
                                <i class="mdi mdi-calendar-cursor"></i>
                                <span>Calendar</span>
                            </a>
                        </li>
                       
                        <li>
                            <a href="appointments.php">
                                <i class="mdi mdi-trending-up"></i>
                                <span>Reports</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="mdi mdi-send-outline"></i>
                                <span>Marketing</span>
                            </a>
                        </li>


                    </ul>


                </div>
                <!-- Sidebar -->
            </div>
        </div>
        <!-- Left Sidebar End -->
        <div class="main-content">