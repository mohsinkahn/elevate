<?php require_once "header.php" ?>


<style>
.img-up {
    margin-left: 2%
}

.img-up>img {
    width: 70%;
    height: 50%
}

/* .mt-head {
    margin-left: 5%
} */


.remBtn {
    background-color: transparent !important;
    color: gray !important;
}

.int-logo>img {
    width: 10%;
    height: 85%;
}

.introw {
    /* border : 2px solid black; */
    display: flex;
    justify-content: center;
}

.provider {
    font-weight: 600;
    font-size: small
}

.card {
    border-radius: 0.2rem !important;
}

.day-card {
    display: none;
}

.mdi-close-box {
    font-size: large !important;
    cursor: pointer;
}

.cls-btn-span {
    /* border : 2px solid red; */
    display: flex;
}
.table th{
    padding-left: 0;
}
.table>thead{
    border-bottom:1px solid #e9e9ef;
}
.file-up input[type="file"]{
    position: absolute;
    left: 0;
    width: 120px;
    bottom: 0;
    top: 0;
    opacity: 0;
    cursor: pointer;
}
</style>


<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12">
                <div class="card border-none">
                    <div class="card-header align-items-center py-2 border-none">
                        <div class="row">
                            <div class="col-md-6 col-6">
                                <h4 class="card-title mb-0 mt-head">Settings</h4>
                            </div>

                        </div>
                    </div>
                    <!-- end card header -->

                    <div class="card-body">
                        <div class="card border-none">
                            <div class="card-header align-items-center d-flex">

                                <div class="flex-shrink-0">
                                    <ul class="nav justify-content-start nav-tabs-custom rounded card-header-tabs"
                                        role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-bs-toggle="tab" href="#general" role="tab"
                                                id="email">

                                                <span class=" d-sm-block">General</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#notification" role="tab"
                                                id="sms">

                                                <span class=" d-sm-block">Notifications</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div><!-- end card header -->

                            <div class="card-body border-none">

                                <!-- Tab panes Parent Start -->
                                <div class="tab-content text-muted campaign">

                                    <!-- First General pane Start-->
                                    <div class="tab-pane active" id="general" role="tabpanel">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-6">

                                                    <div class="card">

                                                        <div class="card-header crd-head ">
                                                            <div class="row">
                                                                <div class="col-md-4 col-12">
                                                                    <h4 class="card-title  mt-head">Personal Data</h4>
                                                                </div>

                                                            </div>
                                                        </div>

                                                        <div class="row mb-5">
                                                            <div class="col-sm-5">
                                                                <div
                                                                    class="d-flex align-items-start justify-content-end mt-3">
                                                                    <div class="me-3 ml-1">
                                                                        <img src="assets/images/logo.png" alt=""
                                                                            class="img-fluid  d-block">
                                                                    </div>


                                                                </div>
                                                            </div>

                                                            <div class="col-sm-6">

                                                                <div class="row mt-4">
                                                                    <p>Personal Logo </p>
                                                                    <p> <small>The Proposed size is 512 * 512px
                                                                            <br /> no bigger than 2.5mb </small>
                                                                    </p>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="file-up">
                                                                        <button class="btn  btn-primary w-100">
                                                                            Change
                                                                        </button>
                                                                        <input type="file">
                                                                        </div>
                                                                       
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <button class="btn remBtn btn-dark w-100"> Remove
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="card-body">
                                                            <div class="pb-3">
                                                                <div class="row">
                                                                    <div class="col-xl-6">
                                                                        <div>
                                                                            <div class="form-floating mb-3">
                                                                                <input type="text" class="form-control"
                                                                                    id="floatingInput"
                                                                                    placeholder="subject">
                                                                                <label for="floatingInput">First
                                                                                    Name</label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xl-6">
                                                                        <div>
                                                                            <div class="form-floating mb-3">
                                                                                <input type="text" class="form-control"
                                                                                    id="floatingInput"
                                                                                    placeholder="subject">
                                                                                <label for="floatingInput">Last
                                                                                    Name</label>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                            <div class="pb-3">
                                                                <div class="row">
                                                                    <div class="col-xl-12">
                                                                        <div>
                                                                            <div class="form-floating mb-3">
                                                                                <input type="email" class="form-control"
                                                                                    id="floatingInput"
                                                                                    placeholder="subject">
                                                                                <label for="floatingInput">Email</label>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                            <div class="pb-3">
                                                                <div class="row">
                                                                    <div class="col-xl-8">
                                                                        <div>
                                                                            <div class="form-floating mb-3">
                                                                                <input type="number"
                                                                                    class="form-control"
                                                                                    id="floatingInput"
                                                                                    placeholder="subject">
                                                                                <label for="floatingInput">Phone</label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xl-4">
                                                                        <div>
                                                                            <div class="form-floating mb-3">
                                                                                <input type="text" class="form-control"
                                                                                    id="floatingInput"
                                                                                    placeholder="subject">
                                                                                <label
                                                                                    for="floatingInput">Extension</label>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                            <div class="pb-3">
                                                                <div class="row">
                                                                    <div class="col-xl-4">
                                                                        <div>
                                                                            <button class="btn changeBtn btn-primary">
                                                                                Update Profile
                                                                            </button>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- end card body -->
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <div class="row">
                                                                <div class="col-md-4 col-12">
                                                                    <h4 class="card-title  mt-head">Email Signature</h4>
                                                                </div>

                                                            </div>
                                                        </div>
                                                        <div class="card-body ">



                                                            <div class="row mt-2">
                                                                <div class="col-md-6 col-xl-12">
                                                                    <input type="checkbox">
                                                                    <span> Enable Signature on All Outgoing Messages
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div class="row mt-2">
                                                                <div class="col-md-6 col-xl-12">
                                                                    <input type="checkbox">
                                                                    <span> Include this signature before quoted text in
                                                                        replies </span>
                                                                </div>
                                                            </div>



                                                            <div class="row mt-2">

                                                                <div class="col-md-12 col-xl-12">

                                                                    <div id="ckeditor-classic2"></div>
                                                                </div>
                                                            </div>
                                                            <div class="row mt-2 ">

                                                                <div class="col-md-4 ">
                                                                    <div>
                                                                        <button class="btn  btn-primary">
                                                                            Save
                                                                        </button>
                                                                    </div>

                                                                </div>
                                                            </div>


                                                        </div>
                                                        <!-- end card body -->
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <div class="row">
                                                                <div class="col-md-4 col-12">
                                                                    <h4 class="card-title  mt-head">Integrations </h4>
                                                                </div>

                                                            </div>

                                                        </div>
                                                        <div class="card-body">
                                                            <div class="row">
                                                                <div class="introw">
                                                                    <div class="col-10 ">
                                                                        <span class="int-logo"> <img
                                                                                src="assets/images/zoom.png" /> </span>
                                                                        <span> Zoom </span>
                                                                    </div>
                                                                    <div class="col-2 ">
                                                                        <button class="btn btn-primary">
                                                                            Connect
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row mt-4">
                                                                <div class="introw">
                                                                    <div class="col-10">
                                                                        <span class="int-logo"> <img
                                                                                src="assets/images/outlook.svg" />
                                                                        </span>
                                                                        <span> Outlook Calendar </span>
                                                                    </div>
                                                                    <div class="col-2 ">
                                                                        <button class="btn btn-primary">
                                                                            Connect
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- end card body -->
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header pb-1">
                                                            <div class="row">
                                                                <div class="col-12">
                                                                    <h4 style="margin-left: -3px"
                                                                        class="card-title  mt-head">Email (2-way-sync)
                                                                    </h4>
                                                                    <small> Connect to sync incoming & outgoing emails
                                                                        between the CRM & your personal email account
                                                                    </small>
                                                                </div>

                                                            </div>
                                                            <div class="row mt-4">
                                                                <div class="col-12">
                                                                    <span class="card-title provider  ">Select Your
                                                                        Email Provider
                                                                    </span>

                                                                </div>

                                                            </div>
                                                        </div>
                                                        <div class="card-body">
                                                            <div class="row">
                                                                <div class="introw">
                                                                    <div class="col-12 ">
                                                                        <span class="int-logo"> <img
                                                                                src="assets/images/outlook.svg" />
                                                                        </span>
                                                                        <span> Outlook </span>
                                                                    </div>
                                                                    <div class="col ">
                                                                        <input type="radio">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <!-- end card body -->
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <!-- tab card -->
                                                    <!-- align-items-center d-flex justify-content-between -->
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <div class="row">
                                                                <div class="col-md-6 col-12">
                                                                    <h4 class="card-title  mt-head">Change Password</h4>
                                                                </div>

                                                            </div>
                                                        </div>
                                                        <!-- end card header -->

                                                        <div class="card-body">
                                                            <div class="pb-3">
                                                                <div class="row">
                                                                    <div class="col-xl-12">
                                                                        <div>
                                                                            <div class="form-floating mb-3">
                                                                                <input type="text" class="form-control"
                                                                                    id="floatingInput"
                                                                                    placeholder="subject">
                                                                                <label for="floatingInput">Current
                                                                                    Password</label>

                                                                            </div>
                                                                        </div>
                                                                    </div>


                                                                </div>
                                                            </div>
                                                            <div class="pb-3">
                                                                <div class="row">
                                                                    <div class="col-xl-12">
                                                                        <div>
                                                                            <div class="form-floating mb-3">
                                                                                <input type="text" class="form-control"
                                                                                    id="floatingInput"
                                                                                    placeholder="subject">
                                                                                <label for="floatingInput">New
                                                                                    Password</label>
                                                                            </div>
                                                                        </div>
                                                                    </div>


                                                                </div>
                                                            </div>

                                                            <div class="pb-3">
                                                                <div class="row">
                                                                    <div class="col-xl-12">
                                                                        <div>
                                                                            <div class="form-floating mb-3">
                                                                                <input type="text" class="form-control"
                                                                                    id="floatingInput"
                                                                                    placeholder="subject">
                                                                                <label for="floatingInput">Confirm New
                                                                                    Password</label>

                                                                            </div>
                                                                        </div>
                                                                    </div>


                                                                </div>
                                                            </div>
                                                            <div class="pb-3">
                                                                <div class="row">
                                                                    <div class="col-xl-6">
                                                                        <div>
                                                                            <button class="btn changeBtn btn-primary">
                                                                                Update Password
                                                                            </button>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </div>



                                                        </div><!-- end card-body -->
                                                    </div>
                                                    <!-- end -->


                                                    <div class="card">
                                                        <div class="card-header">
                                                            <div class="row">
                                                                <div class="col-md-4 col-12">
                                                                    <h4 class="card-title  mt-head">User Availability
                                                                    </h4>
                                                                </div>


                                                            </div>
                                                        </div>

                                                        <div class="card-body ">
                                                            <div class="pb-3">
                                                                <div class="row">

                                                                    <div class="mb-3 ">
                                                                        <select name="" id="floatingInput"
                                                                            class="form-select" style="height:58px">



                                                                            <option value="">Custom</option>
                                                                            <option value="">A</option>

                                                                            <option value="">B</option>
                                                                            <option value="">C</option>
                                                                            <option value="">D</option>


                                                                        </select>
                                                                    </div>


                                                                </div>
                                                            </div>
                                                            <div class="pb-3">
                                                                <div class="row">
                                                                    <div class="col-xl-12">
                                                                        <div>
                                                                            <div class="form-floating mb-3">
                                                                                <input type="text" class="form-control"
                                                                                    id="floatingInput"
                                                                                    placeholder="Meeting Location">
                                                                                <label for="floatingInput">
                                                                                    Meeting Location</label>

                                                                            </div>
                                                                        </div>
                                                                    </div>


                                                                </div>
                                                            </div>
                                                            <div class="pb-3">
                                                                <div class="row">

                                                                    <div class="mb-3 ">
                                                                        <select name="" id="floatingInput"
                                                                            class="form-select" style="height:58px">



                                                                            <option value="">Time Zone</option>
                                                                            <option value="">GMT-05:00 US/Eastern (EST)
                                                                            </option>
                                                                            <option value="">GMT-05:00 US/Eastern (EST)
                                                                            </option>
                                                                            <option value="">GMT-05:00 US/Eastern (EST)
                                                                            </option>
                                                                            <option value="">GMT-05:00 US/Eastern (EST)
                                                                            </option>



                                                                        </select>
                                                                    </div>


                                                                </div>
                                                            </div>
                                                            <div class="pb-3">
                                                                <!-- <div class="row">

                                                                    <label> Available Hours </label>


                                                                </div> -->
                                                                <div class="row">

                                                                    <div class="mb-3 ">
                                                                        <select onchange=Check(event) name=""
                                                                            id="floatingInput" class="form-select"
                                                                            style="height:58px">

                                                                            <option selected disabled value="">Available
                                                                                Hours</option>
                                                                            <option value="sunday">Sunday </option>
                                                                            <option value="monday">Monday </option>
                                                                            <option value="tuesday">Tuesday </option>
                                                                            <option value="wednesday">Wednesday
                                                                            </option>
                                                                            <option value="thursday">Thursday </option>
                                                                            <option value="friday">Friday </option>
                                                                            <option value="saturday">Saturday </option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="pb-3">
                                                                <!-- <div class="row">

                                                                    <label> Available Hours </label>


                                                                </div> -->
                                                                <div id="addHoursSec" class="mb-3 ">
                                                                    <div class="row day-card  mt-3" id="mon-card">
                                                                        <div class="row">
                                                                            <div class="col-md-12 col-xl-12">
                                                                                <label>Monday </label>
                                                                            </div>

                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-md-5 col-xl-5">
                                                                                <input type="text" class="form-control"
                                                                                    id="datepicker-timepicker">
                                                                            </div>
                                                                            <div class="col-md-5 col-xl-5">

                                                                                <input type="text" class="form-control"
                                                                                    id="datepicker-timepicker">
                                                                            </div>
                                                                            <div class="col-md-2 col-xl-2">

                                                                                <span class="cls-btn-span">
                                                                                    <button class="btn btn-primary">
                                                                                        <i onclick=Close(event)
                                                                                            class="mdi mdi-close-box">
                                                                                        </i></button> </span>
                                                                            </div>


                                                                        </div>
                                                                    </div>
                                                                    <div class="row day-card  mt-3" id="tue-card">
                                                                        <div class="row">
                                                                            <div class="col-md-12 col-xl-12">
                                                                                <label>Tuesday </label>
                                                                            </div>

                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-md-5 col-xl-5">
                                                                                <input type="text" class="form-control"
                                                                                    id="datepicker-timepicker">
                                                                            </div>
                                                                            <div class="col-md-5 col-xl-5">

                                                                                <input type="text" class="form-control"
                                                                                    id="datepicker-timepicker">
                                                                            </div>
                                                                            <div class="col-md-2 col-xl-2">

                                                                                <span class="cls-btn-span">
                                                                                    <button class="btn btn-primary">
                                                                                        <i onclick=Close(event)
                                                                                            class="mdi mdi-close-box">
                                                                                        </i></button> </span>
                                                                            </div>


                                                                        </div>
                                                                    </div>
                                                                    <div class="row day-card  mt-3" id="wed-card">
                                                                        <div class="row">
                                                                            <div class="col-md-12 col-xl-12">
                                                                                <label>Wednesday </label>
                                                                            </div>

                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-md-5 col-xl-5">
                                                                                <input type="text" class="form-control"
                                                                                    id="datepicker-timepicker">
                                                                            </div>
                                                                            <div class="col-md-5 col-xl-5">

                                                                                <input type="text" class="form-control"
                                                                                    id="datepicker-timepicker">
                                                                            </div>
                                                                            <div class="col-md-2 col-xl-2">

                                                                                <span class="cls-btn-span">
                                                                                    <button class="btn btn-primary">
                                                                                        <i onclick=Close(event)
                                                                                            class="mdi mdi-close-box">
                                                                                        </i></button> </span>
                                                                            </div>


                                                                        </div>
                                                                    </div>
                                                                    <div class="row day-card  mt-3" id="thurs-card">
                                                                        <div class="row">
                                                                            <div class="col-md-12 col-xl-12">
                                                                                <label>Thursday </label>
                                                                            </div>

                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-md-5 col-xl-5">
                                                                                <input type="text" class="form-control"
                                                                                    id="datepicker-timepicker">
                                                                            </div>
                                                                            <div class="col-md-5 col-xl-5">

                                                                                <input type="text" class="form-control"
                                                                                    id="datepicker-timepicker">
                                                                            </div>
                                                                            <div class="col-md-2 col-xl-2">

                                                                                <span class="cls-btn-span">
                                                                                    <button class="btn btn-primary">
                                                                                        <i onclick=Close(event)
                                                                                            class="mdi mdi-close-box">
                                                                                        </i></button> </span>
                                                                            </div>


                                                                        </div>
                                                                    </div>
                                                                    <div class="row day-card mt-3" id="fri-card">
                                                                        <div class="row">
                                                                            <div class="col-md-12 col-xl-12">
                                                                                <label>Friday </label>
                                                                            </div>

                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-md-5 col-xl-5">
                                                                                <input type="text" class="form-control"
                                                                                    id="datepicker-timepicker">
                                                                            </div>
                                                                            <div class="col-md-5 col-xl-5">

                                                                                <input type="text" class="form-control"
                                                                                    id="datepicker-timepicker">
                                                                            </div>
                                                                            <div class="col-md-2 col-xl-2">

                                                                                <span class="cls-btn-span">
                                                                                    <button class="btn btn-primary">
                                                                                        <i onclick=Close(event)
                                                                                            class="mdi mdi-close-box">
                                                                                        </i></button> </span>
                                                                            </div>


                                                                        </div>
                                                                    </div>
                                                                    <div class="row day-card mt-3" id="sat-card">
                                                                        <div class="row">
                                                                            <div class="col-md-12 col-xl-12">
                                                                                <label>Saturday </label>
                                                                            </div>

                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-md-5 col-xl-5">
                                                                                <input type="text" class="form-control"
                                                                                    id="datepicker-timepicker">
                                                                            </div>
                                                                            <div class="col-md-5 col-xl-5">

                                                                                <input type="text" class="form-control"
                                                                                    id="datepicker-timepicker">
                                                                            </div>
                                                                            <div class="col-md-2 col-xl-2">

                                                                                <span class="cls-btn-span">
                                                                                    <button class="btn btn-primary">
                                                                                        <i onclick=Close(event)
                                                                                            class="mdi mdi-close-box">
                                                                                        </i></button> </span>
                                                                            </div>


                                                                        </div>
                                                                    </div>
                                                                    <div class="row day-card mt-3" id="sun-card">
                                                                        <div class="row">
                                                                            <div class="col-md-12 col-xl-12">
                                                                                <label>Sunday </label>
                                                                            </div>

                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-md-5 col-xl-5">
                                                                                <input type="text" class="form-control"
                                                                                    id="datepicker-timepicker">
                                                                            </div>
                                                                            <div class="col-md-5 col-xl-5">

                                                                                <input type="text" class="form-control"
                                                                                    id="datepicker-timepicker">
                                                                            </div>
                                                                            <div class="col-md-2 col-xl-2">

                                                                                <span class="cls-btn-span">
                                                                                    <button class="btn btn-primary">
                                                                                        <i onclick=Close(event)
                                                                                            class="mdi mdi-close-box">
                                                                                        </i></button> </span>
                                                                            </div>


                                                                        </div>
                                                                    </div>



                                                                    <!-- end card body -->
                                                                </div>

                                                            </div>
                                                        </div>


                                                    </div>
                                                    <!-- end card body -->

                                                    <div class="card">
                                                        <div class="card-header">
                                                            <div class="row">
                                                                <div class="col-md-8 col-12">
                                                                    <h4 class="card-title  mt-head">Calendar
                                                                        Configuration
                                                                    </h4>
                                                                </div>


                                                            </div>
                                                        </div>
                                                        <div class="card-body">
                                                            <div class="row">

                                                                <div class="col-12 ">
                                                                    <p class="text-center"> No google/outlook accounts
                                                                        added in integrations settings yet </p>
                                                                </div>


                                                            </div>

                                                        </div>




                                                    </div>



                                                </div><!-- end card-body -->
                                            </div><!-- end card -->


                                        </div>
                                        <!-- end card body -->
                                    </div>
                                    <!-- first pane end card -->

                                    <!-- second pane start card -->

                                    <div class="tab-pane" id="notification" role="tabpanel">
                                        <div class="card-header ">
                                            <div class="row">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col" cospan="4"></th>
                                                            <th scope="col" cospan="4"></th>
                                                            <th scope="col" cospan="4"></th>
                                                            <th scope="col" cospan="4"></th>
                                                            <th scope="col" cospan="4"></th>
                                                            <th class="text-center" scope="col"> <i
                                                                    class="mdi mdi-laptop"> </i> In App</th>
                                                            <th class="text-center" scope="col"><i
                                                                    class="mdi mdi-email-outline"> </i>Email</th>
                                                            <th class="text-center" scope="col"><i
                                                                    class="mdi mdi-message-reply-text-outline"> </i>SMS
                                                            </th>
                                                        </tr>

                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th scope="col" cospan="4">Conversation Notifications</th>
                                                            <td scope="col" cospan="4"></td>
                                                            <td scope="col" cospan="4"></td>
                                                            <td scope="col" cospan="4"></td>
                                                            <td scope="col" cospan="4"></td>
                                                            <td scope="col"></td>
                                                            <td scope="col"></td>
                                                            <td scope="col"></td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="col" cospan="4">Notify for all new conversation &
                                                                messages initiated with the account</td>
                                                            </td>
                                                            <td scope="col" cospan="4"></td>
                                                            <td scope="col" cospan="4"></td>
                                                            <td scope="col" cospan="4"></td>
                                                            <td scope="col" cospan="4"></td>
                                                            <td class="text-center" scope="col"><input
                                                                    type="checkbox" /></td>
                                                            <td class="text-center" scope="col"><input
                                                                    type="checkbox" /></td>
                                                            <td class="text-center" scope="col"><input
                                                                    type="checkbox" /></td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="col" cospan="4">Notify when a conversation gets
                                                                assigned to me</td>
                                                            </td>
                                                            <td scope="col" cospan="4"></td>
                                                            <td scope="col" cospan="4"></td>
                                                            <td scope="col" cospan="4"></td>
                                                            <td scope="col" cospan="4"></td>
                                                            <td class="text-center" scope="col"><input
                                                                    type="checkbox" /></td>
                                                            <td class="text-center" scope="col"><input
                                                                    type="checkbox" /></td>
                                                            <td class="text-center" scope="col"><input
                                                                    type="checkbox" /></td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="col" cospan="4">Notify for new messages on a
                                                                conversation I am assigned to</td>
                                                            </td>
                                                            <td scope="col" cospan="4"></td>
                                                            <td scope="col" cospan="4"></td>
                                                            <td scope="col" cospan="4"></td>
                                                            <td scope="col" cospan="4"></td>
                                                            <td class="text-center" scope="col"><input
                                                                    type="checkbox" /></td>
                                                            <td class="text-center" scope="col"><input
                                                                    type="checkbox" /></td>
                                                            <td class="text-center" scope="col"><input
                                                                    type="checkbox" /></td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="col" cospan="4">Tasks Notifications</th>
                                                            <td scope="col" cospan="4"></td>
                                                            <td scope="col" cospan="4"></td>
                                                            <td scope="col" cospan="4"></td>
                                                            <td scope="col" cospan="4"></td>
                                                            <td scope="col"></td>
                                                            <td scope="col"></td>
                                                            <td scope="col"></td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="col" cospan="4">Notify when a task get assigned
                                                                to me</td>
                                                            </td>
                                                            <td scope="col" cospan="4"></td>
                                                            <td scope="col" cospan="4"></td>
                                                            <td scope="col" cospan="4"></td>
                                                            <td scope="col" cospan="4"></td>
                                                            <td class="text-center" scope="col"><input
                                                                    type="checkbox" /></td>
                                                            <td class="text-center" scope="col"><input
                                                                    type="checkbox" /></td>
                                                            <td class="text-center" scope="col"><input
                                                                    type="checkbox" /></td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="col" cospan="4">Get a reminder <select>
                                                                    <option value="1"> 15</option>
                                                                    <option value="1"> 20</option>
                                                                    <option value="1">25</option>
                                                                    <option value="1">30</option>



                                                                </select> mins before a upcoming tasks</td>
                                                            </td>
                                                            <td scope="col" cospan="4"></td>
                                                            <td scope="col" cospan="4"></td>
                                                            <td scope="col" cospan="4"></td>
                                                            <td scope="col" cospan="4"></td>
                                                            <td class="text-center" scope="col"><input
                                                                    type="checkbox" /></td>
                                                            <td class="text-center" scope="col"><input
                                                                    type="checkbox" /></td>
                                                            <td class="text-center" scope="col"><input
                                                                    type="checkbox" /></td>
                                                        </tr>

                                                        <tr>
                                                            <th scope="col" cospan="4">Facebook</th>
                                                            <td scope="col" cospan="4"></td>
                                                            <td scope="col" cospan="4"></td>
                                                            <td scope="col" cospan="4"></td>
                                                            <td scope="col" cospan="4"></td>
                                                            <td scope="col"></td>
                                                            <td scope="col"></td>
                                                            <td scope="col"></td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="col" cospan="4">Notify when a new review is
                                                                received</td>
                                                            </td>
                                                            <td scope="col" cospan="4"></td>
                                                            <td scope="col" cospan="4"></td>
                                                            <td scope="col" cospan="4"></td>
                                                            <td scope="col" cospan="4"></td>
                                                            <td class="text-center" scope="col"><input
                                                                    type="checkbox" /></td>
                                                            <td class="text-center" scope="col"><input
                                                                    type="checkbox" /></td>
                                                            <td class="text-center" scope="col"><input
                                                                    type="checkbox" /></td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="col" cospan="4">Google</th>
                                                            </th>
                                                            <td scope="col" cospan="4"></td>
                                                            <td scope="col" cospan="4"></td>
                                                            <td scope="col" cospan="4"></td>
                                                            <td scope="col" cospan="4"></td>
                                                            <td scope="col"></td>
                                                            <td scope="col"></td>
                                                            <td scope="col"></td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="col" cospan="4">Notify when a new review is
                                                                received</td>
                                                            </td>
                                                            <td scope="col" cospan="4"></td>
                                                            <td scope="col" cospan="4"></td>
                                                            <td scope="col" cospan="4"></td>
                                                            <td scope="col" cospan="4"></td>
                                                            <td class="text-center" scope="col"><input
                                                                    type="checkbox" /></td>
                                                            <td class="text-center" scope="col"><input
                                                                    type="checkbox" /></td>
                                                            <td class="text-center" scope="col"><input
                                                                    type="checkbox" /></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>

                                            <div class="row mt-4">
                                                <div class="col-md-12">
                                                    <a href="#"
                                                        class="btn btn-primary px-5 float-end">Save</a>
                                                    <a href="#"
                                                        class="btn btn-outline-primary px-5 float-end"
                                                        style="margin-right:12px">Cancel</a>
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                    <!-- second pane end card -->



                                    <!-- Parent pane end card -->

                                    <!-- end col -->

                                    <!-- end col -->
                                </div><!-- end row -->
                            </div>
                            <!-- container-fluid -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
function Check(event) {
    let selVal = event.target.value
    console.log(selVal)


    if (selVal === 'monday') {
        document.getElementById('mon-card').style.display = "block"
    }
    if (selVal === 'tuesday') {
        document.getElementById('tue-card').style.display = "block"
    }
    if (selVal === 'wednesday') {
        document.getElementById('wed-card').style.display = "block"
    }
    if (selVal === 'thursday') {
        document.getElementById('thurs-card').style.display = "block"
    }
    if (selVal === 'friday') {
        document.getElementById('fri-card').style.display = "block"
    }
    if (selVal === 'saturday') {
        document.getElementById('sat-card').style.display = "block"
    }

    if (selVal === 'sunday') {
        document.getElementById('sun-card').style.display = "block"
    }



}

function Close(event) {
    var parentDiv = event.target.parentNode.parentNode.parentNode.parentNode.parentNode
    parentDiv.style.display = "none"

}
$("#email").click(function() {
    $("#sms_btn").hide();
    $("#email_btn").show();
});
$("#sms").click(function() {
    $("#sms_btn").show();
    $("#email_btn").hide();
});
</script>
<?php require_once "footer.php" ?>