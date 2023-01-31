<?php require_once("header.php") ?>



<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12">
                <div class="card border-none">
                    <div class="card-header align-items-center py-2 border-none">
                        <div class="row">
                            <div class="col-md-7 col-12">
                                <h4 class="card-title  mt-head">View Patient</h4>
                            </div>
                            <div class="col-md-5 col-12">
                                <a href="#" class="btn btn-primary px-3 mb-3 float-end" data-bs-toggle="modal" data-bs-target="#campaign">Start Campaign</a>
                                <a href="#" class="btn btn-primary px-3 float-end mb-3 mar-left" data-bs-toggle="modal" data-bs-target="#appoint">Create Appointment</a>
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
                                                        <div class="avatar-md me-3">
                                                            <img src="assets/images/users/avatar-2.jpg" alt="" class="img-fluid rounded-circle d-block">
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
                                                <div class="d-flex align-items-start justify-content-end gap-2">
                                                    <div>
                                                        <div class="dropdown">
                                                            <button class="btn btn-link font-size-16 shadow-none text-muted dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="bx bx-dots-horizontal-rounded"></i>
                                                            </button>
                                                            <ul class="dropdown-menu dropdown-menu-end">
                                                                <li><a class="dropdown-item" href="#">Edit</a></li>

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
                                    <div class="card-header border-none">
                                        <div class="row">
                                            <div class="col-md-7 col-12">
                                                <h4 class="card-title  mt-head">Appointments</h4>
                                            </div>
                                            <div class="col-md-5 col-12">
                                                <div>
                                                    <label class="form-label">Select Date Range</label>
                                                    <input type="text" class="form-control" id="datepicker-range">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body appointment-overflow">
                                        <div class="card"  data-bs-toggle="modal" data-bs-target="#event-modal">

                                            <div class="card-body pending">
                                                <div class="row align-items-center">
                                                    <div class="col-md-6">
                                                        <p class="m-0 date">06/11/2022</p>
                                                        <small>6:00 PM - 7:00 PM</small>
                                                    </div>
                                                    <div class="col-md-6" style="text-align:right">
                                                    
                                                        <p class="m-0 pend">Pending</p>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </div>
                                        <div class="card" data-bs-toggle="modal" data-bs-target="#event-modal">
                                            <div class="card-body completed">
                                                <div class="row align-items-center">
                                                    <div class="col-md-6">
                                                        <p class="m-0 date">06/11/2022</p>
                                                        <small>6:00 PM - 7:00 PM</small>
                                                    </div>
                                                    <div class="col-md-6" style="text-align:right">
                                                        <p class="m-0 comp">Completed</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card" data-bs-toggle="modal" data-bs-target="#event-modal">
                                            <div class="card-body completed">
                                                <div class="row align-items-center">
                                                    <div class="col-md-6">
                                                        <p class="m-0 date">06/11/2022</p>
                                                        <small>6:00 PM - 7:00 PM</small>
                                                    </div>
                                                    <div class="col-md-6" style="text-align:right">
                                                        <p class="m-0 comp">Completed</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end card body -->
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-header border-none">
                                        <div class="row">
                                            <div class="col-md-9 col-9">
                                                <h4 class="card-title mb-0 mt-head">Current Campaigns</h4>
                                            </div>
                                            <div class="col-md-3 col-3">
                                                <div class="dropdown float-end">
                                                    <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                                        Email <i class="mdi mdi-chevron-down"></i>
                                                    </button>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="">
                                                        <a class="dropdown-item" href="#">Sms</a>
                                                        <a class="dropdown-item" href="#">Email</a>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="py-3">
                                            <div class="row align-items-center">
                                                <div class="col-md-8 col-12">
                                                    <h4 class="card-title mb-0 ">Campaign Name:</h4>
                                                </div>
                                                <div class="col-md-4 col-12" style="text-align:right">
                                                    <p class="m-0">Regular Check Eye</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="py-3">
                                            <div class="row align-items-center">
                                                <div class="col-md-8 col-12">
                                                    <h4 class="card-title mb-0 ">Process:</h4>
                                                </div>
                                                <div class="col-md-4 col-12" style="text-align:right">
                                                    <div class="progress">
                                                        <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">(2/3)</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="card-body currentcamp-overflow">
                                        <div class="list-group list-group-flush">
                                            <a href="#" class="list-group-item list-group-item-action px-0">
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0 me-3 avatar-icon">
                                                        <i class="fa fa-check fa-2x"></i>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <div>
                                                            <h5 class="font-size-14 mb-1">Welcome</h5>
                                                            <p class="font-size-13 text-muted mb-0">
                                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore quidem dolor vel nisi est mollitia excepturi debitis suscipit dicta. Voluptatibus saepe incidunt nihil dignissimos eveniet molestiae sit, magni tenetur ea.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="list-group-item list-group-item-action px-0">
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0 me-3 avatar-icon">
                                                        <i class="fa fa-check fa-2x"></i>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <div>
                                                            <h5 class="font-size-14 mb-1">Welcome</h5>
                                                            <p class="font-size-13 text-muted mb-0">
                                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore quidem dolor vel nisi est mollitia excepturi debitis suscipit dicta. Voluptatibus saepe incidunt nihil dignissimos eveniet molestiae sit, magni tenetur ea.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a href="#" class="list-group-item list-group-item-action px-0">
                                                    <div class="d-flex align-items-center">
                                                        <div class="flex-shrink-0 me-3 avatar-icon2">
                                                            <i class="fas fa-undo fa-2x"></i>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                            <div>
                                                                <h5 class="font-size-14 mb-1">Welcome</h5>
                                                                <p class="font-size-13 text-muted mb-0">
                                                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore quidem dolor vel nisi est mollitia excepturi debitis suscipit dicta. Voluptatibus saepe incidunt nihil dignissimos eveniet molestiae sit, magni tenetur ea.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a href="#" class="list-group-item list-group-item-action px-0">
                                                    <div class="d-flex align-items-center">
                                                        <div class="flex-shrink-0 me-3 avatar-icon2">
                                                            <i class="fas fa-undo fa-2x"></i>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                            <div>
                                                                <h5 class="font-size-14 mb-1">Welcome</h5>
                                                                <p class="font-size-13 text-muted mb-0">
                                                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore quidem dolor vel nisi est mollitia excepturi debitis suscipit dicta. Voluptatibus saepe incidunt nihil dignissimos eveniet molestiae sit, magni tenetur ea.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                        </div>
                                    </div>
                                    <!-- end card body -->
                                </div>
                                <div class="card">
                                    <div class="card-header border-none">
                                        <div class="row">
                                            <div class="col-md-9 col-9">
                                                <h4 class="card-title mb-0 mt-head">Notes</h4>
                                            </div>
                                            <div class="col-md-3 col-3">
                                                <a href="#" class="btn btn-primary px-5 float-end" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Add</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body notes-overflow">
                                        <div class="mb-2">
                                            <h5 class="font-size-14 mb-1">20/02/2022 (6:45PM)</h5>
                                            <p class="font-size-13 text-muted mb-0">
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore quidem dolor vel nisi est mollitia excepturi debitis suscipit dicta. Voluptatibus saepe incidunt nihil dignissimos eveniet molestiae sit, magni tenetur ea.
                                            </p>
                                        </div>
                                        <div class="mb-2">
                                            <h5 class="font-size-14 mb-1">20/02/2022 (6:45PM)</h5>
                                            <p class="font-size-13 text-muted mb-0">
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore quidem dolor vel nisi est mollitia excepturi debitis suscipit dicta. Voluptatibus saepe incidunt nihil dignissimos eveniet molestiae sit, magni tenetur ea.
                                            </p>
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
            <div class="modal-body p-4">
                <form class="needs-validation" name="event-form" id="form-event" novalidate="">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Date</label>
                                <input class="form-control" placeholder="Insert Event Name" type="text" name="title" id="event-title" required="" value="">
                                
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Time</label>
                                <input type="time" class="form-control">
                                
                            </div>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-12">
                        <div class="mb-3">
                        <label class="form-label">Select Patient</label>
                                <select class="form-control form-select" name="category" id="event-category">
                                    <option selected=""> --Select-- </option>
                                    <option value="">jhonny</option>
                                    <option value="">Ken</option>
                                  
                                </select>
                        </div>
                        </div>
                        <div class="col-12">
                        <div class="mb-3">
                        <label class="form-label">Note</label>
                        <textarea name="" id="" cols="30" rows="10" class="form-control"></textarea>
                        </div>
                        </div>
                    </div>
                    <div class="row mt-2">
                        
                        <div class="col-12 text-end">
                            <button type="button" class="btn btn-light me-1" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary" id="btn-save-event">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div> <!-- end modal-content-->
    </div> <!-- end modal dialog-->
</div>

<!-- add appointment Modal -->
<div class="modal fade" id="appoint" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Create Appointment</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="example-text-input" class="form-label">Date</label>
                            <input class="form-control" type="date" value="" id="example-text-input">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="example-text-input" class="form-label">Time</label>
                            <input class="form-control" type="time" value="" id="example-text-input">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="mb-3">
                            <label for="example-text-input" class="form-label">Note</label>
                            <textarea class="form-control" name="" id="" cols="30" rows="10"></textarea>
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
<!-- add notes Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Add Note</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="example-text-input" class="form-label">Date</label>
                            <input class="form-control" type="date" value="" id="example-text-input">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="example-text-input" class="form-label">Time</label>
                            <input class="form-control" type="time" value="" id="example-text-input">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="mb-3">
                            <label for="example-text-input" class="form-label">Note</label>
                            <textarea class="form-control" name="" id="" cols="30" rows="10"></textarea>
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
<!-- Start campaign Modal -->
<div class="modal fade" id="campaign" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Start Campaign</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-check mb-3">
                            <input class="form-check-input" onclick="emailtog()" type="checkbox" id="formCheck1">
                            <label class="form-check-label" for="formCheck1">
                                Email
                            </label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-check mb-3">
                            <input class="form-check-input" onclick="smstog()" type="checkbox" id="formCheck2">
                            <label class="form-check-label" for="formCheck2">
                                Sms
                            </label>
                        </div>
                    </div>

                </div>
                <div id="email-temp-btn" style="display:none">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mb-3">
                                <button class="btn btn-primary" id="emailtemp">Template</button>
                                <button class="btn btn-primary" id="emailcamp">Campaign</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="sms-temp-btn" style="display:none">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mb-3">
                                <button class="btn btn-primary" id="smstemp">Template</button>
                                <button class="btn btn-primary" id="smscamp">Campaign</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="email-temp" style="display: none">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="choices-single-default" class="form-label font-size-13 text-muted">Select Email Template</label>
                                <select class="form-control" data-trigger="" name="choices-single-default" id="choices-single-default" placeholder="This is a search placeholder">
                                    <option value="">Select</option>
                                    <option value="Choice 1">Abc</option>
                                    <option value="Choice 2">Abc</option>
                                    <option value="Choice 3">abc</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="email-camp" style="display: none">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mb-3">
                                <div class="mb-3">
                                    <label for="choices-single-default" class="form-label font-size-13 text-muted">Select Email Campaign</label>
                                    <select class="form-control" data-trigger="" name="choices-single-default" id="choices-single-default" placeholder="This is a search placeholder">
                                        <option value="">Select</option>
                                        <option value="Choice 1">Abc</option>
                                        <option value="Choice 2">Abc</option>
                                        <option value="Choice 3">Abc</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="sms-temp" style="display: none">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mb-3">
                            <label for="choices-single-default" class="form-label font-size-13 text-muted">Select Sms Template</label>
                                    <select class="form-control" data-trigger="" name="choices-single-default" id="choices-single-default" placeholder="This is a search placeholder">
                                        <option value="">Select</option>
                                        <option value="Choice 1">Abc</option>
                                        <option value="Choice 2">Abc</option>
                                        <option value="Choice 3">Abc</option>
                                    </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="sms-camp" style="display: none">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mb-3">
                            <label for="choices-single-default" class="form-label font-size-13 text-muted">Select Sms Campaign</label>
                                    <select class="form-control" data-trigger="" name="choices-single-default" id="choices-single-default" placeholder="This is a search placeholder">
                                        <option value="">Select</option>
                                        <option value="Choice 1">Abc</option>
                                        <option value="Choice 2">Abc</option>
                                        <option value="Choice 3">Abc</option>
                                    </select>
                            </div>
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
            email_temp.style.display="none";
            email_camp.style.display="none";
        }
    }

    function smstog() {
        if (sms_temp_input.checked) {
            sms_temp_btn.style.display = "block";
        } else {
            sms_temp_btn.style.display = "none";
            sms_temp.style.display="none";
            sms_camp.style.display="none";
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

</script>
<?php require_once("footer.php") ?>