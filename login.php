<!doctype html>
<html lang="en">

    <head>

        <meta charset="utf-8" />
        <title>StrategEye | Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
       
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- preloader css -->
        <link rel="stylesheet" href="assets/css/preloader.min.css" type="text/css" />

        <!-- Bootstrap Css -->
        <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins&family=Raleway:wght@600;800&family=Roboto:wght@500&display=swap" rel="stylesheet">

        <style>

            body{
                font-family: 'Poppins', sans-serif;
/* font-family: 'Raleway', sans-serif;
font-family: 'Roboto', sans-serif; */
            }
            .auth-full-page-content{
          background: #2d5c8b!important; 
              }

              .form-label{
                color:white;
              }
              .form-control{
                background:transparent !important;
                color:white!important;
                border-radius: 14px;
                height: 60px;
                 border: 2px solid;
              }
              .form-control:focus{
                background:transparent !important;
                color:white!important;
                border-radius: 14px;
                height: 60px;
                 border: 2px solid;
              }
              .btn-primary{
                background: #ffe600!important;
                border-radius: 14px;
                height: 60px;
                border-color: #ffe600!important;
                color: #191919 !important;
                font-size: 17px;
              }
              .flx{
                display: flex;
              gap: 10px;
              /* clip-path: polygon(0 0, 100% 0, 100% 25%, 100% 53%, 100% 75%, 100% 100%, 0 100%, 4% 75%, 5% 48%, 4% 22%); */
              }
              @media (max-width:767px){
                .auth-bg{
                    display: none!important;
                }
              }
        </style>
    </head>

    <body>

    <!-- <body data-layout="horizontal"> -->
        <div class="auth-page">
            <div class="container-fluid p-0">
                <div class="row g-0">
                     <!-- end col -->
                     <div class="col-xxl-8 col-lg-8 col-md-7 d-sm-none d-lg-block">
                        <div class="auth-bg pt-md-5 p-4 d-flex">
                            
                            <ul class="bg-bubbles">
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                            </ul>
                            <!-- end bubble effect -->
                            <div class="row justify-content-center align-items-center">
                               
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-lg-4 col-md-5">
                        <div class="auth-full-page-content d-flex p-sm-5 p-4">
                            <div class="w-100">
                                <div class="d-flex flex-column h-100">
                                    <div class="mb-4 mb-md-5 text-center">
                                        <a href="index.html" class="d-block auth-logo">
                                            <!-- <img src="assets/images/logo-sm.svg" alt="" height="28"> -->
                                             <span class="logo-txt text-white" >Strategeye</span>
                                        </a>
                                    </div>
                                    <div class="auth-content my-auto">
                                        <div class="flx">
                                            <h5 class="mb-0 text text-white" style="font-size: 26px;">LOGIN <span style="font-weight:400">|</span></h5>
                                            <p class=" mt-2" style="color:#ffe600;"> Signup</p>
                                        </div>
                                        <form class="mt-4 pt-2" method="post" action="index.php">
                                            <div class="mb-3">
                                                <label class="form-label">Email</label>
                                                <input type="text" class="form-control" id="username" placeholder="Enter username">
                                            </div>
                                            <div class="mb-3">
                                                <div class="d-flex align-items-start">
                                                    <div class="flex-grow-1">
                                                        <label class="form-label">Password</label>
                                                    </div>
                                                    
                                                </div>
                                                
                                                <div class="input-group auth-pass-inputgroup">
                                                    <input type="password" class="form-control" placeholder="Enter password" aria-label="Password" aria-describedby="password-addon">
                                                   
                                                </div>
                                            </div>
                                            <div class="row mb-4">
                                                <div class="col">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="remember-check">
                                                        <label class="form-check-label" for="remember-check" style="color:white;">
                                                            Remember me
                                                        </label>
                                                    </div>  
                                                </div>
                                                
                                            </div>
                                            <div class="mb-3">
                                                <button class="btn btn-primary w-100 waves-effect waves-light" type="submit">Login</button>
                                            </div>
                                        </form>

                                        

                                        <div class="mt-5 text-center">
                                            <p class="text-muted mb-0" style="color:#bdbec4!important;">Forgot password? 
                                                     </p>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <!-- end auth full page content -->
                    </div>
                   
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container fluid -->
        </div>


        <!-- JAVASCRIPT -->
        <script src="assets/libs/jquery/jquery.min.js"></script>
        <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="assets/libs/simplebar/simplebar.min.js"></script>
        <script src="assets/libs/node-waves/waves.min.js"></script>
        <script src="assets/libs/feather-icons/feather.min.js"></script>
        <!-- pace js -->
        <script src="assets/libs/pace-js/pace.min.js"></script>
        <!-- password addon init -->
        <script src="assets/js/pages/pass-addon.init.js"></script>

    </body>

</html>