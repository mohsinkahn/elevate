<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>Elevate Psychiatry | CRM</title>
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
                                <img src="assets/images/small.png" alt="" style="height:24px">
                            </span>
                            <span class="logo-lg">
                                <img src="assets/images/logo.png" alt="" style="height:60px">
                                <!-- <span class="logo-txt">Strategeye</span> -->
                            </span>
                        </a>

                        <a href="index.php" class="logo logo-light">
                            <span class="logo-sm">
                                <img src="assets/images/small.png" alt="" style="height:24px">
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
                    <div style="padding-top:16px;margin-left:12px">
                        
                        <button style="box-shadow:none;" class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
                            <i class="mdi mdi-home-map-marker"></i> Locations
                        </button>
                    </div>


                </div>

                <div class="d-flex">
                <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item noti-icon position-relative" id="page-header-notifications-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell icon-lg"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path><path d="M13.73 21a2 2 0 0 1-3.46 0"></path></svg>
                                <span class="badge bg-danger rounded-pill">5</span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0" aria-labelledby="page-header-notifications-dropdown">
                                <div class="p-3">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h6 class="m-0"> Notifications </h6>
                                        </div>
                                        <div class="col-auto">
                                            <a href="#!" class="small text-reset text-decoration-underline"> Unread (3)</a>
                                        </div>
                                    </div>
                                </div>
                                <div data-simplebar="init" style="max-height: 230px;"><div class="simplebar-wrapper" style="margin: 0px;"><div class="simplebar-height-auto-observer-wrapper"><div class="simplebar-height-auto-observer"></div></div><div class="simplebar-mask"><div class="simplebar-offset" style="right: 0px; bottom: 0px;"><div class="simplebar-content-wrapper" style="height: auto; overflow: hidden;"><div class="simplebar-content" style="padding: 0px;">
                                    <a href="#!" class="text-reset notification-item">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0 me-3">
                                                <img src="assets/images/users/avatar-3.jpg" class="rounded-circle avatar-sm" alt="user-pic">
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="mb-1">James Lemire</h6>
                                                <div class="font-size-13 text-muted">
                                                    <p class="mb-1">It will seem like simplified English.</p>
                                                    <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span>1 hour ago</span></p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#!" class="text-reset notification-item">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0 avatar-sm me-3">
                                                <span class="avatar-title bg-primary rounded-circle font-size-16">
                                                    <i class="bx bx-cart"></i>
                                                </span>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="mb-1">Your order is placed</h6>
                                                <div class="font-size-13 text-muted">
                                                    <p class="mb-1">If several languages coalesce the grammar</p>
                                                    <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span>3 min ago</span></p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#!" class="text-reset notification-item">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0 avatar-sm me-3">
                                                <span class="avatar-title bg-success rounded-circle font-size-16">
                                                    <i class="bx bx-badge-check"></i>
                                                </span>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="mb-1">Your item is shipped</h6>
                                                <div class="font-size-13 text-muted">
                                                    <p class="mb-1">If several languages coalesce the grammar</p>
                                                    <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span>3 min ago</span></p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>

                                    <a href="#!" class="text-reset notification-item">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0 me-3">
                                                <img src="assets/images/users/avatar-6.jpg" class="rounded-circle avatar-sm" alt="user-pic">
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="mb-1">Salena Layfield</h6>
                                                <div class="font-size-13 text-muted">
                                                    <p class="mb-1">As a skeptical Cambridge friend of mine occidental.</p>
                                                    <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span>1 hour ago</span></p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div></div></div></div><div class="simplebar-placeholder" style="width: 0px; height: 0px;"></div></div><div class="simplebar-track simplebar-horizontal" style="visibility: hidden;"><div class="simplebar-scrollbar" style="transform: translate3d(0px, 0px, 0px); display: none;"></div></div><div class="simplebar-track simplebar-vertical" style="visibility: hidden;"><div class="simplebar-scrollbar" style="transform: translate3d(0px, 0px, 0px); display: none;"></div></div></div>
                                <div class="p-2 border-top d-grid">
                                    <a class="btn btn-sm btn-link font-size-14 text-center" href="javascript:void(0)">
                                        <i class="mdi mdi-arrow-right-circle me-1"></i> <span>View More..</span> 
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item right-bar-toggle me-2">
                               <i class="mdi mdi-phone"></i>
                            </button>
                        </div>
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
                            <a class="dropdown-item" href="#"><i class="fa fa-user font-size-16 align-middle me-1"></i> Profile</a>
                            <a class="dropdown-item" href="settings.php"><i class="fa fa-cog font-size-16 align-middle me-1"></i> Setting</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#"><i class="mdi mdi-logout font-size-16 align-middle me-1"></i> Logout</a>
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
                            <a href="chat.php">
                                <i class="mdi mdi-comment-text-multiple-outline"></i>
                                <span>Conversations</span>
                            </a>
                        </li>
                        <li>
                            <a href="opportunities.php">
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
                            <a href="report.php">
                                <i class="mdi mdi-trending-up"></i>
                                <span>Reports</span>
                            </a>
                        </li>
                        <li>
                            <a href="reputation.php">
                                <i class="mdi mdi-star-outline"></i>
                                <span>Reputation</span>
                            </a>
                        </li>
                        <li>
                            <a href="marketing.php">
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

        <!-- off canvas element -->
        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasExampleLabel">All Accounts</h5>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <div>
                    <form class="app-search d-none d-lg-block">
                        <div class="position-relative">
                            <input type="text" class="form-control" placeholder="Search...">
                            <button class="btn btn-primary" type="button"><i class="bx bx-search-alt align-middle"></i></button>
                        </div>

                    </form>
                </div>
                <ul class="location" style="list-style:none;padding-left:0">
                    <li>
                        <div class="card mb-3">
                            <div class="card-body">
                                <div class="d-flex align-items-center gap-4">
                                    <div>
                                        <h6>Elevate TMS</h6>
                                        <p class="mb-0" style="color:darkgray">
                                            3250,Mary St. Suite 300, Coconut Grove..
                                        </p>
                                    </div>
                                    <div>
                                        <i class="mdi mdi-pin" style="font-size:18px"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="card mb-3">
                            <div class="card-body">
                                <div class="d-flex align-items-center gap-4">
                                    <div>
                                        <h6>Elevate TMS</h6>
                                        <p class="mb-0" style="color:darkgray">
                                            3250,Mary St. Suite 300, Coconut Grove..
                                        </p>
                                    </div>
                                    <div>
                                        <i class="mdi mdi-pin" style="font-size:18px"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="card mb-3">
                            <div class="card-body">
                                <div class="d-flex align-items-center gap-4">
                                    <div>
                                        <h6>Elevate TMS</h6>
                                        <p class="mb-0" style="color:darkgray">
                                            3250,Mary St. Suite 300, Coconut Grove..
                                        </p>
                                    </div>
                                    <div>
                                        <i class="mdi mdi-pin" style="font-size:18px"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>

            </div>
        </div>
        <!-- end -->
        <div class="main-content">