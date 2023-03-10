<?php require_once("header.php") ?>

<style>
    .call-btn{
        background-color:white;
        border:none;
        font-size : large;
        padding: 5px;
    }
    .mdi-phone{
        font-size: large !important;
    }
</style>

<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12">
                <div class="card border-none">
                    <div class="card-header align-items-center py-2 border-none">
                        <div class="row">
                            <div class="col-md-7 col-12">
                                <h4 class="card-title  mt-head">View Contact</h4>
                            </div>
                            <div class="col-md-5 col-12">
                                <!-- <a href="#" class="btn btn-primary px-3 mb-3 float-end" data-bs-toggle="modal" data-bs-target="#campaign">Start Campaign</a> -->
                                <!-- <a href="#" class="btn btn-primary px-3 float-end mb-3 mar-left" data-bs-toggle="modal" data-bs-target="#appoint">Add Appointment</a> -->
                            </div>
                        </div>
                    </div>
                    <!-- end card header -->

                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="row">
                                            <div class="col-sm order-2 order-sm-1">
                                                <div class="d-flex align-items-center mt-3 mt-sm-0">
                                                    <div class="flex-shrink-0">
                                                        <div class="img-bk2 me-3">
                                                            <img src="assets/images/users/avatar-2.jpg" alt=""
                                                                class="img-fluid rounded-circle d-block">
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <div>
                                                            <h5 class="font-size-16 mb-1">Phyllis Gatlin</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-auto order-1 order-sm-2">
                                                <div class="d-flex align-items-start justify-content-end gap-2 mt-3">
                                                   <button data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" data-bs-toggle="offcanvas" class="call-btn"> <i class="mdi mdi-phone" ></i></button>
                                                    <div>
                                                        <div class="dropdown">
                                                            <button
                                                                class="btn btn-link font-size-16 shadow-none text-muted dropdown-toggle"
                                                                type="button" data-bs-toggle="dropdown"
                                                                aria-expanded="false">
                                                                <i class="bx bx-dots-horizontal-rounded"></i>
                                                            </button>
                                                            <ul class="dropdown-menu dropdown-menu-end">
                                                                <li><a class="dropdown-item" href="#"> <i
                                                                            class="fas fa-pen"></i> Edit</a></li>

                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="pb-3">
                                            <div class="row">
                                                <div class="col-xl-3">
                                                    <div>
                                                        <h5 class="font-size-15">First Name:</h5>
                                                    </div>
                                                </div>
                                                <div class="col-xl" style="text-align: right;">
                                                    <div class="text-muted">
                                                        <p class="mb-2">Phyllis Gatlin</p>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pb-3">
                                            <div class="row">
                                                <div class="col-xl-3">
                                                    <div>
                                                        <h5 class="font-size-15">Last Name:</h5>
                                                    </div>
                                                </div>
                                                <div class="col-xl" style="text-align: right;">
                                                    <div class="text-muted">
                                                        <p class="mb-2">Gatlin</p>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pb-3">
                                            <div class="row">
                                                <div class="col-xl-3">
                                                    <div>
                                                        <h5 class="font-size-15">Phone No:</h5>
                                                    </div>
                                                </div>
                                                <div class="col-xl" style="text-align: right;">
                                                    <div class="text-muted">
                                                        <p class="mb-2">(432) 324-4434</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pb-3">
                                            <div class="row">
                                                <div class="col-xl-3">
                                                    <div>
                                                        <h5 class="font-size-15">Email:</h5>
                                                    </div>
                                                </div>
                                                <div class="col-xl" style="text-align: right;">
                                                    <div class="text-muted">
                                                        <p class="mb-2">abc@gmail.com</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pb-3">
                                            <div class="row">
                                                <div class="col-xl-3">
                                                    <div>
                                                        <h5 class="font-size-15">Gender:</h5>
                                                    </div>
                                                </div>
                                                <div class="col-xl" style="text-align: right;">
                                                    <div class="text-muted">
                                                        <p class="mb-2">Female</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pb-3">
                                            <div class="row">
                                                <div class="col-xl-3">
                                                    <div>
                                                        <h5 class="font-size-15">Date of Birth:</h5>
                                                    </div>
                                                </div>
                                                <div class="col-xl" style="text-align: right;">
                                                    <div class="text-muted">
                                                        <p class="mb-2">03/11/1980</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end card body -->
                                </div>
                                <div class="card">
                                    <div class="card-header pb-1">
                                        <div class="row">
                                            <div class="col-md-4 col-12">
                                                <h4 class="card-title  mt-head">Appointments</h4>
                                            </div>
                                            <div class="col-md-3 col-12">
                                                <select class="form-select mb-3">
                                                    <option> Pending</option>
                                                    <option>Completed</option>
                                                </select>
                                            </div>
                                            <div class="col-md-5 col-12">
                                                <a href="#" class="btn btn-primary px-3 float-end mb-3 mar-left"
                                                    data-bs-toggle="modal" data-bs-target="#appoint">Add Appointment</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body appointment-overflow">
                                        <div class="card">
                                            <div class="card-body completed">
                                                <div class="row align-items-center">
                                                    <div class="col-md-6">
                                                        <i class="mdi mdi-calendar"></i> <small
                                                            class="m-0 date">06/11/2022</small>
                                                        <h6>Sabrina SOTO SUGAR</h6>
                                                    </div>
                                                    <div class="col-md-6" style="text-align:right">
                                                        <small style="color:black;font-weight:bold">Status</small>
                                                        <p class="m-0 comp">Confirmed</p>
                                                    </div>
                                                </div>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid
                                                    sapiente possimus dolorum commodi atque esse quos ducimus, animi
                                                    aperiam quis suscipit asperiores porro, praesentium hic maiores
                                                    minima molestias saepe. Nihil?</p>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <i class="mdi mdi-clock-outline"></i> <small>6:00 PM - 7:00
                                                            PM</small>
                                                    </div>
                                                    <div class="col-md-6 text-right">
                                                        <a href="#" style="color:black" data-bs-toggle="modal"
                                                            data-bs-target="#event-modal">
                                                            <i class="mdi mdi-pencil-outline"></i>
                                                        </a>
                                                    </div>
                                                </div>

                                            </div>

                                        </div>
                                        <div class="card">
                                            <div class="card-body completed">
                                                <div class="row align-items-center">
                                                    <div class="col-md-6">
                                                        <i class="mdi mdi-calendar"></i> <small
                                                            class="m-0 date">06/11/2022</small>
                                                        <h6>Sabrina SOTO SUGAR</h6>
                                                    </div>
                                                    <div class="col-md-6" style="text-align:right">
                                                        <small style="color:black;font-weight:bold">Status</small>
                                                        <p class="m-0 comp">Confirmed</p>
                                                    </div>
                                                </div>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid
                                                    sapiente possimus dolorum commodi atque esse quos ducimus, animi
                                                    aperiam quis suscipit asperiores porro, praesentium hic maiores
                                                    minima molestias saepe. Nihil?</p>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <i class="mdi mdi-clock-outline"></i> <small>6:00 PM - 7:00
                                                            PM</small>
                                                    </div>
                                                    <div class="col-md-6 text-right">
                                                        <a href="#" style="color:black" data-bs-toggle="modal"
                                                            data-bs-target="#event-modal">
                                                            <i class="mdi mdi-pencil-outline"></i>
                                                        </a>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-body completed">
                                                <div class="row align-items-center">
                                                    <div class="col-md-6">
                                                        <i class="mdi mdi-calendar"></i> <small
                                                            class="m-0 date">06/11/2022</small>
                                                        <h6>Sabrina SOTO SUGAR</h6>
                                                    </div>
                                                    <div class="col-md-6" style="text-align:right">
                                                        <small style="color:black;font-weight:bold">Status</small>
                                                        <p class="m-0 comp">Confirmed</p>
                                                    </div>
                                                </div>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid
                                                    sapiente possimus dolorum commodi atque esse quos ducimus, animi
                                                    aperiam quis suscipit asperiores porro, praesentium hic maiores
                                                    minima molestias saepe. Nihil?</p>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <i class="mdi mdi-clock-outline"></i> <small>6:00 PM - 7:00
                                                            PM</small>
                                                    </div>
                                                    <div class="col-md-6 text-right">
                                                        <a href="#" style="color:black" data-bs-toggle="modal"
                                                            data-bs-target="#event-modal">
                                                            <i class="mdi mdi-pencil-outline"></i>
                                                        </a>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <!-- end card body -->
                                </div>


                                <div class="card">
                                    <div class="card-header pb-1">
                                        <div class="row">
                                            <div class="col-md-6 col-12">
                                                <h4 class="card-title  mt-head">Opportunity</h4>
                                            </div>
                                            
                                            <div class="col-md-6 col-12">
                                                <a href="#" class="btn btn-primary px-3 float-end mb-3 mar-left"
                                                    data-bs-toggle="modal" data-bs-target="#opportunity">Add Opportunity</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="card">
                                            <div class="card-body completed">
                                                <div class="row align-items-center">
                                                    <div class="col-md-6">
                                                        <i class="mdi mdi-calendar"></i> <small
                                                            class="m-0 date">06/11/2022</small>
                                                        <h6>MASTER PIPELINE</h6>
                                                    </div>
                                                    <div class="col-md-6" style="text-align:right">
                                                        <small style="color:black;font-weight:bold">Stage</small>
                                                        <p class="m-0 comp">Lead In</p>
                                                    </div>
                                                </div>
                                             
                                             

                                            </div>

                                        </div>
                                     
                                      
                                      
                                    </div>
                                    <!-- end card body -->
                                </div>

                            </div>
                            <div class="col-md-6">
                                <!-- tab card -->
                                <div class="card">
                                    <div class="card-header align-items-center d-flex justify-content-between pb-1">
                                        <div>
                                            <a href="#" class="btn btn-primary px-3  mb-3 mar-left"
                                                data-bs-toggle="modal" data-bs-target="#emails" id="email">Send
                                                Email</a>
                                            <a href="#" class="btn btn-primary px-3  mb-3 mar-left"
                                                data-bs-toggle="modal" data-bs-target="#message" style="display: none"
                                                id="sms">Send Sms</a>
                                            <a href="#" class="btn btn-primary px-3 mb-3" data-bs-toggle="modal"
                                                data-bs-target="#staticBackdrop" style="display: none" id="note">Add
                                                Note</a>
                                            <a href="#" class="btn btn-primary px-3 mb-3" data-bs-toggle="modal"
                                                data-bs-target="#staticBackdrop" style="visibility:hidden"
                                                id="acty">act</a>
                                        </div>

                                        <div class="flex-shrink-0">
                                            <ul class="nav justify-content-end nav-tabs-custom rounded card-header-tabs"
                                                role="tablist">
                                                <li class="nav-item" role="presentation">
                                                    <a class="nav-link active" data-bs-toggle="tab" href="#home2"
                                                        role="tab" aria-selected="true" id="email2">
                                                        <span class="d-block d-sm-none"><i
                                                                class="fas fa-home"></i></span>
                                                        <span class="d-none d-sm-block">Email</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <a class="nav-link" data-bs-toggle="tab" href="#profile2" role="tab"
                                                        aria-selected="false" tabindex="-1" id="sms2">
                                                        <span class="d-block d-sm-none"><i
                                                                class="far fa-user"></i></span>
                                                        <span class="d-none d-sm-block">Sms</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <a class="nav-link" data-bs-toggle="tab" href="#messages2"
                                                        role="tab" aria-selected="false" tabindex="-1" id="note2">
                                                        <span class="d-block d-sm-none"><i
                                                                class="far fa-envelope"></i></span>
                                                        <span class="d-none d-sm-block">Notes</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <a class="nav-link" data-bs-toggle="tab" href="#act2" role="tab"
                                                        aria-selected="false" tabindex="-1" id="act">
                                                        <span class="d-block d-sm-none"><i
                                                                class="far fa-envelope"></i></span>
                                                        <span class="d-none d-sm-block">Activity</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div><!-- end card header -->

                                    <div class="card-body">

                                        <!-- Tab panes -->
                                        <div class="tab-content text-muted">
                                            <div class="tab-pane active show" id="home2" role="tabpanel">
                                                <div class="card border-0 m-1">
                                                    <div class="card-body currentcamp-overflow">
                                                        <div class="list-group list-group-flush">
                                                            <a href="#"
                                                                class="list-group-item list-group-item-action px-0">
                                                                <div class="d-flex align-items-center">
                                                                    <div class="flex-shrink-0 me-3 avatar-icon2">
                                                                        <i class="fa fa-envelope fa-2x"></i>
                                                                    </div>
                                                                    <div class="flex-grow-1">
                                                                        <div>
                                                                            <div class="row">
                                                                                <div class="col-md-6">
                                                                                    <h5 class="font-size-14 mb-1">
                                                                                        Welcome</h5>
                                                                                </div>
                                                                                <div class="col-md-6 ">
                                                                                    <p class="text-right">2 min ago</p>
                                                                                </div>
                                                                            </div>
                                                                            <p class="font-size-13 text-muted mb-0">
                                                                                Lorem ipsum dolor sit amet consectetur
                                                                                adipisicing elit. Tempore quidem dolor
                                                                                vel nisi est mollitia excepturi debitis
                                                                                suscipit dicta. Voluptatibus saepe
                                                                                incidunt nihil dignissimos eveniet
                                                                                molestiae sit, magni tenetur ea.
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                            <a href="#"
                                                                class="list-group-item list-group-item-action px-0">
                                                                <div class="d-flex align-items-center">
                                                                    <div class="flex-shrink-0 me-3 avatar-icon2">
                                                                        <i class="fa fa-envelope fa-2x"></i>
                                                                    </div>
                                                                    <div class="flex-grow-1">
                                                                        <div>
                                                                            <div class="row">
                                                                                <div class="col-md-6">
                                                                                    <h5 class="font-size-14 mb-1">
                                                                                        Welcome</h5>
                                                                                </div>
                                                                                <div class="col-md-6 ">
                                                                                    <p class="text-right">2 min ago</p>
                                                                                </div>
                                                                            </div>

                                                                            <p class="font-size-13 text-muted mb-0">
                                                                                Lorem ipsum dolor sit amet consectetur
                                                                                adipisicing elit. Tempore quidem dolor
                                                                                vel nisi est mollitia excepturi debitis
                                                                                suscipit dicta. Voluptatibus saepe
                                                                                incidunt nihil dignissimos eveniet
                                                                                molestiae sit, magni tenetur ea.
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <a href="#"
                                                                    class="list-group-item list-group-item-action px-0">
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="flex-shrink-0 me-3 avatar-icon2">
                                                                            <i class="fas fa-envelope fa-2x"></i>
                                                                        </div>
                                                                        <div class="flex-grow-1">
                                                                            <div>
                                                                                <div class="row">
                                                                                    <div class="col-md-6">
                                                                                        <h5 class="font-size-14 mb-1">
                                                                                            Welcome</h5>
                                                                                    </div>
                                                                                    <div class="col-md-6 ">
                                                                                        <p class="text-right">2 min ago
                                                                                        </p>
                                                                                    </div>
                                                                                </div>
                                                                                <p class="font-size-13 text-muted mb-0">
                                                                                    Lorem ipsum dolor sit amet
                                                                                    consectetur adipisicing elit.
                                                                                    Tempore quidem dolor vel nisi est
                                                                                    mollitia excepturi debitis suscipit
                                                                                    dicta. Voluptatibus saepe incidunt
                                                                                    nihil dignissimos eveniet molestiae
                                                                                    sit, magni tenetur ea.
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                                <a href="#"
                                                                    class="list-group-item list-group-item-action px-0">
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="flex-shrink-0 me-3 avatar-icon2">
                                                                            <i class="fas fa-envelope fa-2x"></i>
                                                                        </div>
                                                                        <div class="flex-grow-1">
                                                                            <div>
                                                                                <div class="row">
                                                                                    <div class="col-md-6">
                                                                                        <h5 class="font-size-14 mb-1">
                                                                                            Welcome</h5>
                                                                                    </div>
                                                                                    <div class="col-md-6 ">
                                                                                        <p class="text-right">2 min ago
                                                                                        </p>
                                                                                    </div>
                                                                                </div>
                                                                                <p class="font-size-13 text-muted mb-0">
                                                                                    Lorem ipsum dolor sit amet
                                                                                    consectetur adipisicing elit.
                                                                                    Tempore quidem dolor vel nisi est
                                                                                    mollitia excepturi debitis suscipit
                                                                                    dicta. Voluptatibus saepe incidunt
                                                                                    nihil dignissimos eveniet molestiae
                                                                                    sit, magni tenetur ea.
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                        </div>
                                                    </div>
                                                    <!-- end card body -->
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="profile2" role="tabpanel">
                                                <div class="card border-0">
                                                    <!-- <div class="card-header">
                                                        <div class="row">
                                                            <div class="col-md-9 col-9">
                                                                <h4 class="card-title mb-0 mt-head">Sms</h4>
                                                            </div>
                                                            <div class="col-md-3 col-9">
                                                                <a href="#" class="btn btn-primary px-3 mb-3 mar-left" data-bs-toggle="modal" data-bs-target="#appoint">Sms</a>
                                                            </div>
                                                        </div>
                                                    </div> -->
                                                    <div class="card-body currentcamp-overflow">
                                                        <div class="list-group list-group-flush">
                                                            <a href="#"
                                                                class="list-group-item list-group-item-action px-0">
                                                                <div class="d-flex align-items-center">
                                                                    <div class="flex-shrink-0 me-3 avatar-icon">
                                                                        <i class="fa fa-comment fa-2x"></i>
                                                                    </div>
                                                                    <div class="flex-grow-1">
                                                                        <div>
                                                                            <div class="row">
                                                                                <div class="col-md-6">
                                                                                    <h5 class="font-size-14 mb-1">
                                                                                        Welcome</h5>
                                                                                </div>
                                                                                <div class="col-md-6 ">
                                                                                    <p class="text-right">2 min ago</p>
                                                                                </div>
                                                                            </div>
                                                                            <p class="font-size-13 text-muted mb-0">
                                                                                Lorem ipsum dolor sit amet consectetur
                                                                                adipisicing elit. Tempore quidem dolor
                                                                                vel nisi est mollitia excepturi debitis
                                                                                suscipit dicta. Voluptatibus saepe
                                                                                incidunt nihil dignissimos eveniet
                                                                                molestiae sit, magni tenetur ea.
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                            <a href="#"
                                                                class="list-group-item list-group-item-action px-0">
                                                                <div class="d-flex align-items-center">
                                                                    <div class="flex-shrink-0 me-3 avatar-icon">
                                                                        <i class="fa fa-comment fa-2x"></i>
                                                                    </div>
                                                                    <div class="flex-grow-1">
                                                                        <div>
                                                                            <div class="row">
                                                                                <div class="col-md-6">
                                                                                    <h5 class="font-size-14 mb-1">
                                                                                        Welcome</h5>
                                                                                </div>
                                                                                <div class="col-md-6 ">
                                                                                    <p class="text-right">2 min ago</p>
                                                                                </div>
                                                                            </div>

                                                                            <p class="font-size-13 text-muted mb-0">
                                                                                Lorem ipsum dolor sit amet consectetur
                                                                                adipisicing elit. Tempore quidem dolor
                                                                                vel nisi est mollitia excepturi debitis
                                                                                suscipit dicta. Voluptatibus saepe
                                                                                incidunt nihil dignissimos eveniet
                                                                                molestiae sit, magni tenetur ea.
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <a href="#"
                                                                    class="list-group-item list-group-item-action px-0">
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="flex-shrink-0 me-3 avatar-icon">
                                                                            <i class="fa fa-comment fa-2x"></i>
                                                                        </div>
                                                                        <div class="flex-grow-1">
                                                                            <div>
                                                                                <div class="row">
                                                                                    <div class="col-md-6">
                                                                                        <h5 class="font-size-14 mb-1">
                                                                                            Welcome</h5>
                                                                                    </div>
                                                                                    <div class="col-md-6 ">
                                                                                        <p class="text-right">2 min ago
                                                                                        </p>
                                                                                    </div>
                                                                                </div>
                                                                                <p class="font-size-13 text-muted mb-0">
                                                                                    Lorem ipsum dolor sit amet
                                                                                    consectetur adipisicing elit.
                                                                                    Tempore quidem dolor vel nisi est
                                                                                    mollitia excepturi debitis suscipit
                                                                                    dicta. Voluptatibus saepe incidunt
                                                                                    nihil dignissimos eveniet molestiae
                                                                                    sit, magni tenetur ea.
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                                <a href="#"
                                                                    class="list-group-item list-group-item-action px-0">
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="flex-shrink-0 me-3 avatar-icon">
                                                                            <i class="fa fa-comment fa-2x"></i>
                                                                        </div>
                                                                        <div class="flex-grow-1">
                                                                            <div>
                                                                                <div class="row">
                                                                                    <div class="col-md-6">
                                                                                        <h5 class="font-size-14 mb-1">
                                                                                            Welcome</h5>
                                                                                    </div>
                                                                                    <div class="col-md-6 ">
                                                                                        <p class="text-right">2 min ago
                                                                                        </p>
                                                                                    </div>
                                                                                </div>
                                                                                <p class="font-size-13 text-muted mb-0">
                                                                                    Lorem ipsum dolor sit amet
                                                                                    consectetur adipisicing elit.
                                                                                    Tempore quidem dolor vel nisi est
                                                                                    mollitia excepturi debitis suscipit
                                                                                    dicta. Voluptatibus saepe incidunt
                                                                                    nihil dignissimos eveniet molestiae
                                                                                    sit, magni tenetur ea.
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                        </div>
                                                    </div>
                                                    <!-- end card body -->
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="messages2" role="tabpanel">
                                                <div class="card border-0">

                                                    <div class="card-body notes-overflow">
                                                        <div class="mb-2">
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <h5 class="font-size-14 mb-1">20/02/2022 (6:45PM)
                                                                    </h5>
                                                                </div>
                                                                <div class="col-md-6 text-right">
                                                                    <a href="#">
                                                                        <i class="mdi mdi-content-save-edit"></i>
                                                                    </a>
                                                                    <a href="#">
                                                                        <i class="mdi mdi-delete"></i>
                                                                    </a>
                                                                </div>
                                                            </div>

                                                            <p class="font-size-13 text-muted mb-0">
                                                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                                Tempore quidem dolor vel nisi est mollitia excepturi
                                                                debitis suscipit dicta. Voluptatibus saepe incidunt
                                                                nihil dignissimos eveniet molestiae sit, magni tenetur
                                                                ea.
                                                            </p>
                                                        </div>
                                                        <div class="mb-2">
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <h5 class="font-size-14 mb-1">20/02/2022 (6:45PM)
                                                                    </h5>
                                                                </div>
                                                                <div class="col-md-6 text-right">
                                                                    <a href="#">
                                                                        <i class="mdi mdi-content-save-edit"></i>
                                                                    </a>
                                                                    <a href="#">
                                                                        <i class="mdi mdi-delete"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <p class="font-size-13 text-muted mb-0">
                                                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                                Tempore quidem dolor vel nisi est mollitia excepturi
                                                                debitis suscipit dicta. Voluptatibus saepe incidunt
                                                                nihil dignissimos eveniet molestiae sit, magni tenetur
                                                                ea.
                                                            </p>
                                                        </div>

                                                    </div>
                                                    <!-- end card body -->
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="act2" role="tabpanel">
                                                <div class="card border-0">

                                                    <div class="card-body currentcamp-overflow">
                                                        <div class="list-group list-group-flush">
                                                            <a href="#"
                                                                class="list-group-item list-group-item-action px-0">
                                                                <div class="d-flex align-items-center">
                                                                    <div class="flex-shrink-0 me-3 avatar-icon">
                                                                        <i class="fa fa-comment fa-2x"></i>
                                                                    </div>
                                                                    <div class="flex-grow-1">
                                                                        <div>
                                                                            <div class="row">
                                                                                <div class="col-md-6">
                                                                                    <h5 class="font-size-14 mb-1">
                                                                                        Welcome</h5>
                                                                                </div>
                                                                                <div class="col-md-6 ">
                                                                                    <p class="text-right">2 min ago</p>
                                                                                </div>
                                                                            </div>
                                                                            <p class="font-size-13 text-muted mb-0">
                                                                                Lorem ipsum dolor sit amet consectetur
                                                                                adipisicing elit. Tempore quidem dolor
                                                                                vel nisi est mollitia excepturi debitis
                                                                                suscipit dicta. Voluptatibus saepe
                                                                                incidunt nihil dignissimos eveniet
                                                                                molestiae sit, magni tenetur ea.
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                            <a href="#"
                                                                class="list-group-item list-group-item-action px-0">
                                                                <div class="d-flex align-items-center">
                                                                    <div class="flex-shrink-0 me-3 avatar-icon">
                                                                        <i class="fa fa-comment fa-2x"></i>
                                                                    </div>
                                                                    <div class="flex-grow-1">
                                                                        <div>
                                                                            <div class="row">
                                                                                <div class="col-md-6">
                                                                                    <h5 class="font-size-14 mb-1">
                                                                                        Welcome</h5>
                                                                                </div>
                                                                                <div class="col-md-6 ">
                                                                                    <p class="text-right">2 min ago</p>
                                                                                </div>
                                                                            </div>

                                                                            <p class="font-size-13 text-muted mb-0">
                                                                                Lorem ipsum dolor sit amet consectetur
                                                                                adipisicing elit. Tempore quidem dolor
                                                                                vel nisi est mollitia excepturi debitis
                                                                                suscipit dicta. Voluptatibus saepe
                                                                                incidunt nihil dignissimos eveniet
                                                                                molestiae sit, magni tenetur ea.
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <a href="#"
                                                                    class="list-group-item list-group-item-action px-0">
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="flex-shrink-0 me-3 avatar-icon2">
                                                                            <i class="fas fa-envelope fa-2x"></i>
                                                                        </div>
                                                                        <div class="flex-grow-1">
                                                                            <div>
                                                                                <div class="row">
                                                                                    <div class="col-md-6">
                                                                                        <h5 class="font-size-14 mb-1">
                                                                                            Welcome</h5>
                                                                                    </div>
                                                                                    <div class="col-md-6 ">
                                                                                        <p class="text-right">2 min ago
                                                                                        </p>
                                                                                    </div>
                                                                                </div>
                                                                                <p class="font-size-13 text-muted mb-0">
                                                                                    Lorem ipsum dolor sit amet
                                                                                    consectetur adipisicing elit.
                                                                                    Tempore quidem dolor vel nisi est
                                                                                    mollitia excepturi debitis suscipit
                                                                                    dicta. Voluptatibus saepe incidunt
                                                                                    nihil dignissimos eveniet molestiae
                                                                                    sit, magni tenetur ea.
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                                <a href="#"
                                                                    class="list-group-item list-group-item-action px-0">
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="flex-shrink-0 me-3 avatar-icon2">
                                                                            <i class="fas fa-envelope fa-2x"></i>
                                                                        </div>
                                                                        <div class="flex-grow-1">
                                                                            <div>
                                                                                <div class="row">
                                                                                    <div class="col-md-6">
                                                                                        <h5 class="font-size-14 mb-1">
                                                                                            Welcome</h5>
                                                                                    </div>
                                                                                    <div class="col-md-6 ">
                                                                                        <p class="text-right">2 min ago
                                                                                        </p>
                                                                                    </div>
                                                                                </div>
                                                                                <p class="font-size-13 text-muted mb-0">
                                                                                    Lorem ipsum dolor sit amet
                                                                                    consectetur adipisicing elit.
                                                                                    Tempore quidem dolor vel nisi est
                                                                                    mollitia excepturi debitis suscipit
                                                                                    dicta. Voluptatibus saepe incidunt
                                                                                    nihil dignissimos eveniet molestiae
                                                                                    sit, magni tenetur ea.
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                        </div>
                                                    </div>
                                                    <!-- end card body -->
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div><!-- end card-body -->
                                </div>
                                <!-- end -->


                                <div class="card">
                                    <div class="card-header pb-1">
                                        <div class="row">
                                            <div class="col-md-4 col-12">
                                                <h4 class="card-title  mt-head">Tasks</h4>
                                            </div>
                                            <div class="col-md-4 col-12">
                                                <select class="form-select mb-3">
                                                    <option> Pending</option>
                                                    <option>Completed</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4 col-12">
                                                <a href="#" class="btn btn-primary px-3 float-end mb-3 mar-left"
                                                    data-bs-toggle="modal" data-bs-target="#task">Add Task</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body currentcamp-overflow">
                                        <div class="list-group list-group-flush">
                                            <div class="list-group-item list-group-item-action px-0">
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0 me-3">
                                                        <input type="checkbox">
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <div>
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <h5 class="font-size-14 mb-1">Welcome</h5>
                                                                </div>
                                                                <div class="col-md-6 ">
                                                                    <p class="text-right">2 min ago</p>
                                                                </div>
                                                            </div>
                                                            <p class="font-size-13 text-muted mb-0">
                                                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                                Tempore quidem dolor vel nisi est mollitia excepturi
                                                                debitis suscipit dicta. Voluptatibus saepe incidunt
                                                                nihil dignissimos eveniet molestiae sit, magni tenetur
                                                                ea.

                                                            </p>
                                                            <div class="row mt-4">
                                                                <div class="col-md-3">
                                                                    <p style="font-size:10px">
                                                                        Contact: <b style="color:black">Phyllis
                                                                            Gatlin</b>
                                                                    </p>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <p style="font-size:10px">
                                                                        Assigned:<b style="color:black">Laura</b>
                                                                    </p>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <p style="font-size:10px">
                                                                        Due: <b
                                                                            style="color:black">12/02/2022,(5:00pm)</b>
                                                                    </p>
                                                                </div>
                                                                <div class="col-md-2">

                                                                    <a href="#">
                                                                        <i class="mdi mdi-content-save-edit"></i>
                                                                    </a>
                                                                    <a href="#">
                                                                        <i class="mdi mdi-delete"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="list-group-item list-group-item-action px-0">
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0 me-3">
                                                        <input type="checkbox">
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <div>
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <h5 class="font-size-14 mb-1">Welcome</h5>
                                                                </div>
                                                                <div class="col-md-6 ">
                                                                    <p class="text-right">2 min ago</p>
                                                                </div>
                                                            </div>
                                                            <p class="font-size-13 text-muted mb-0">
                                                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                                Tempore quidem dolor vel nisi est mollitia excepturi
                                                                debitis suscipit dicta. Voluptatibus saepe incidunt
                                                                nihil dignissimos eveniet molestiae sit, magni tenetur
                                                                ea.

                                                            </p>
                                                            <div class="row mt-4">
                                                                <div class="col-md-3">
                                                                    <p style="font-size:10px">
                                                                        Contact: <b style="color:black">Phyllis
                                                                            Gatlin</b>
                                                                    </p>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <p style="font-size:10px">
                                                                        Assigned:<b style="color:black">Laura</b>
                                                                    </p>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <p style="font-size:10px">
                                                                        Due: <b
                                                                            style="color:black">12/02/2022,(5:00pm)</b>
                                                                    </p>
                                                                </div>
                                                                <div class="col-md-2">

                                                                    <a href="#">
                                                                        <i class="mdi mdi-content-save-edit"></i>
                                                                    </a>
                                                                    <a href="#">
                                                                        <i class="mdi mdi-delete"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="list-group-item list-group-item-action px-0">
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0 me-3">
                                                        <input type="checkbox">
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <div>
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <h5 class="font-size-14 mb-1">Welcome</h5>
                                                                </div>
                                                                <div class="col-md-6 ">
                                                                    <p class="text-right">2 min ago</p>
                                                                </div>
                                                            </div>
                                                            <p class="font-size-13 text-muted mb-0">
                                                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                                Tempore quidem dolor vel nisi est mollitia excepturi
                                                                debitis suscipit dicta. Voluptatibus saepe incidunt
                                                                nihil dignissimos eveniet molestiae sit, magni tenetur
                                                                ea.

                                                            </p>
                                                            <div class="row mt-4">
                                                                <div class="col-md-3">
                                                                    <p style="font-size:10px">
                                                                        Contact: <b style="color:black">Phyllis
                                                                            Gatlin</b>
                                                                    </p>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <p style="font-size:10px">
                                                                        Assigned:<b style="color:black">Laura</b>
                                                                    </p>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <p style="font-size:10px">
                                                                        Due: <b
                                                                            style="color:black">12/02/2022,(5:00pm)</b>
                                                                    </p>
                                                                </div>
                                                                <div class="col-md-2">

                                                                    <a href="#">
                                                                        <i class="mdi mdi-content-save-edit"></i>
                                                                    </a>
                                                                    <a href="#">
                                                                        <i class="mdi mdi-delete"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end card body -->
                                </div>

                            </div>
                        </div>


                    </div>
                    <!-- end card body -->
                </div>
                <!-- end card -->
            </div>
            <!-- end col -->

            <!-- end col -->
        </div><!-- end row -->
    </div>
    <!-- container-fluid -->
</div>

<div class="modal fade" id="event-modal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header py-3 px-4 border-bottom-0">
                <h5 class="modal-title" id="modal-title">Edit Appointment</h5>

                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>

            </div>
            <div class="modal-body">
                <form class="needs-validation" name="event-form" id="form-event" novalidate="">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="form-floating mb-3 ">
                                <input type="email" class="form-control" id="floatingInput"
                                    placeholder="appointment title">
                                <label for="floatingInput">Appointment Title</label>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="mb-3 ">
                                <select name="" id="" class="form-select" style="height:58px">
                                    <option value="">Status</option>
                                    <option value="">Confirm</option>
                                    <option value="">Cancel</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="floatingInput" placeholder="Dob"
                                    onclick="this.type='date'">
                                <label for="floatingInput">Date</label>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="mb-3">
                                <select name="" id="" class="form-select" style="height:58px">
                                    <option value="">Time</option>
                                    <option value="">8:00 am - 9:00 am</option>
                                    <option value="">9:00 am - 10:00 am</option>
                                    <option value="">10:00 am - 11:00 am</option>
                                    <option value="">11:00 am - 12:00 pm</option>
                                    <option value="">12:00 pm - 1:00 pm</option>
                                    <option value="">1:00 am - 2:00 pm</option>
                                    <option value="">2:00 am - 3:00 pm</option>
                                    <option value="">3:00 am - 4:00 pm</option>
                                    <option value="">4:00 am - 5:00 pm</option>
                                    <option value="">5:00 am - 6:00 pm</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-2">

                        <div class="col-12">
                            <div class="form-floating mb-3 ">
                                <input type="email" class="form-control" id="floatingInput" placeholder="description">
                                <label for="floatingInput">Description</label>
                            </div>
                        </div>
                    </div>

                </form>
            </div>
        </div> <!-- end modal-content-->
    </div> <!-- end modal dialog-->
</div>

<!-- add appointment Modal -->
<div class="modal fade" id="appoint" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Add Appointment</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="needs-validation" name="event-form" id="form-event" novalidate="">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="form-floating mb-3 ">
                                <input type="email" class="form-control" id="floatingInput"
                                    placeholder="appointment title">
                                <label for="floatingInput">Appointment Title</label>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="mb-3 ">
                                <select name="" id="" class="form-select" style="height:58px">
                                    <option value="">Status</option>
                                    <option value="">Confirm</option>
                                    <option value="">Cancel</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="floatingInput" placeholder="Dob"
                                    onclick="this.type='date'">
                                <label for="floatingInput">Date</label>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="mb-3">
                                <select name="" id="" class="form-select" style="height:58px">
                                    <option value="">Time</option>
                                    <option value="">8:00 am - 9:00 am</option>
                                    <option value="">9:00 am - 10:00 am</option>
                                    <option value="">10:00 am - 11:00 am</option>
                                    <option value="">11:00 am - 12:00 pm</option>
                                    <option value="">12:00 pm - 1:00 pm</option>
                                    <option value="">1:00 am - 2:00 pm</option>
                                    <option value="">2:00 am - 3:00 pm</option>
                                    <option value="">3:00 am - 4:00 pm</option>
                                    <option value="">4:00 am - 5:00 pm</option>
                                    <option value="">5:00 am - 6:00 pm</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-2">

                        <div class="col-12">
                            <div class="form-floating mb-3 ">
                                <input type="email" class="form-control" id="floatingInput" placeholder="description">
                                <label for="floatingInput">Description</label>
                            </div>
                        </div>
                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save</button>
            </div>
        </div>
    </div>
</div>
<!-- add notes Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Add Note</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="floatingInput" placeholder="Date"
                                onclick="this.type='date'">
                            <label for="floatingInput">Date</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="floatingInput" placeholder="time"
                                onclick="this.type='time'">
                            <label for="floatingInput">Time</label>
                        </div>
                    </div>
                    <div class="col-md-12">

                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="floatingInput" placeholder="note">
                            <!-- <textarea class="form-control" name="" id="" cols="30" rows="10"></textarea> -->
                            <label for="floatingInput">Note</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save</button>
            </div>
        </div>
    </div>
</div>
<!-- Sms Modal -->
<div class="modal fade" id="message" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Send Sms</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="floatingInput" placeholder="title">
                            <label for="floatingInput">Title</label>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-floating mb-3">
                            <input type="number" class="form-control" id="floatingInput" placeholder="number">
                            <label for="floatingInput">Phone Number</label>
                        </div>
                    </div>
                    <div class="col-md-12">

                        <div class="mb-3">

                            <div id="ckeditor-classic"></div>
                        </div>

                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save & Send</button>
            </div>
        </div>
    </div>
</div>

<!-- email modal -->
<div class="modal fade" id="emails" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Send Email</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="floatingInput" placeholder="name">
                            <label for="floatingInput">Name</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="floatingInput" placeholder="subject">
                            <label for="floatingInput">Subject</label>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="floatingInput" placeholder="email">
                            <label for="floatingInput">Email</label>
                        </div>
                    </div>
                    <div class="col-md-12">

                        <div class="mb-3">

                            <div id="ckeditor-classic2"></div>
                        </div>

                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save & Send</button>
            </div>
        </div>
    </div>
</div>

<!-- task modal -->
<div class="modal fade" id="task" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Add Task</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body ">
                <form class="needs-validation" name="event-form" id="form-event" novalidate="">
                    <div class="row form-group mt-3">
                        <div class="col-md-12">
                            <div class="form-floating mb-3 ">
                                <input type="email" class="form-control" id="floatingInput" placeholder="task title">
                                <label for="floatingInput">Task Title</label>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-floating mb-3 ">
                                <input type="email" class="form-control" id="floatingInput" placeholder="description">
                                <label for="floatingInput">Description</label>
                            </div>
                        </div>
                    </div>
                    <div class="row form-group mt-3">
                        <div class="col-md-6">
                            <select class=" form-select" style="height: 58px;">
                                <option>Not Assigned</option>
                                <option>John Dea</option>
                                <option>Albert Henry</option>
                            </select>

                        </div>
                        <div class="col-md-6">
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="floatingInput" placeholder="Dob"
                                    onclick="this.type='date'">
                                <label for="floatingInput">Date</label>
                            </div>

                        </div>

                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save</button>
            </div>
        </div>
    </div>
</div>


<!-- opportunity modal -->
<div class="modal fade" id="opportunity" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel"> Add Opportunity</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">



                <div class="row form-group mt-3">
                    <div class="col-md-12">
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="floatingInput" placeholder="opportunity name">
                            <label for="floatingInput">Opportunity Name</label>
                        </div>
                    </div>
                </div>
                <div class="row form-group mt-3">

                    <div class="col-md-6">
                        <div class="mb-3">
                            <select class="form-select" style="height: 58px;">
                                <option value="">Pipeline</option>
                                <option>Master Pipeline</option>
                                <option>Coordinator Pipeline</option>
                                <option>In House Pipeline</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <select class=" form-select" style="height: 58px;">
                                <option value="">Stage</option>
                                <option>Lead In</option>
                                <option>A</option>
                                <option>B</option>
                                <option>C</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row form-group mt-3">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <select class=" form-select" style="height: 58px;">
                                <option value="">Status</option>
                                <option>Open</option>
                                <option>Won</option>
                                <option>Lost</option>
                                <option>Abundant</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="floatingInput" placeholder="lead value">
                            <label for="floatingInput">Lead Value</label>
                        </div>
                    </div>
                </div>
                <div class="row form-group mt-3">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <select class=" form-select" style="height: 58px;">
                                <option value="">Owner</option>
                                <option>Unassigned</option>
                                <option>John Dea</option>
                                <option>Albert Henry</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="floatingInput" placeholder="opportunity source">
                            <label for="floatingInput">Opportunity Source</label>
                        </div>
                    </div>

                </div>

            </div>
            <div class="modal-footer modal-footer-1">

                
                <div>
                    <button class="btn btn-light">Cancel</button>
                    <button class="btn btn-primary">Save</button>

                </div>
            </div>
        </div>
    </div>
</div>


<script>
let email_temp_input = document.getElementById('formCheck1');
let sms_temp_input = document.getElementById('formCheck2');
let email_temp_btn = document.getElementById('email-temp-btn');
let sms_temp_btn = document.getElementById('sms-temp-btn');
let email_temp = document.getElementById('email-temp');
let email_camp = document.getElementById('email-camp');
let sms_temp = document.getElementById('sms-temp');
let sms_camp = document.getElementById('sms-camp');

function emailtog() {
    if (email_temp_input.checked) {
        email_temp_btn.style.display = "block";
    } else {
        email_temp_btn.style.display = "none";
        email_temp.style.display = "none";
        email_camp.style.display = "none";
    }
}

function smstog() {
    if (sms_temp_input.checked) {
        sms_temp_btn.style.display = "block";
    } else {
        sms_temp_btn.style.display = "none";
        sms_temp.style.display = "none";
        sms_camp.style.display = "none";
    }
}
$("#emailtemp").click(function() {
    $("#email-temp").show();
});
$("#emailcamp").click(function() {
    $("#email-camp").show();
});
$("#smstemp").click(function() {
    $("#sms-temp").show();
});
$("#smscamp").click(function() {
    $("#sms-camp").show();
});


$(document).ready(function() {
    $("#email2").click(function() {
        $("#email").show();
        $("#sms").hide();
        $("#note").hide();
    });
    $("#sms2").click(function() {
        $("#email").hide();
        $("#sms").show();
        $("#note").hide();
    });
    $("#note2").click(function() {
        $("#email").hide();
        $("#sms").hide();
        $("#note").show();
    });
    $("#act").click(function() {
        $("#email").hide();
        $("#sms").hide();
        $("#note").hide();

    });
});
</script>
<script src="assets/libs/%40ckeditor/ckeditor5-build-classic/build/ckeditor.js"></script>
<?php require_once("footer.php") ?>