<?php require_once("header.php") ?>





<div class="page-content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-xl-12">
                <div class="card border-none">
                    <div class="card-body">
                        <div class="card border-none">

                            <div class="card-header align-items-center py-2 border-none">
                                <div class="row">
                                    <div class="col-md-10 col-10">
                                        <h4 class="card-title mb-0 ">Calendar</h4>
                                    </div>
                                    <div class="col-md-2 col-2">

                                    </div>
                                </div>


                            </div><!-- end card header -->

                            <div class="card-body">
                            <div id="external-events" style="display:none;" class="mt-2">
                                                    <br>
                                                    <p class="text-muted">Drag and drop your event or click in the calendar</p>
                                                    <div class="external-event fc-event text-success bg-soft-success" data-class="bg-success">
                                                        <i class="mdi mdi-checkbox-blank-circle font-size-11 me-2"></i>New Event Planning
                                                    </div>
                                                    <div class="external-event fc-event text-info bg-soft-info" data-class="bg-info">
                                                        <i class="mdi mdi-checkbox-blank-circle font-size-11 me-2"></i>Meeting
                                                    </div>
                                                    <div class="external-event fc-event text-warning bg-soft-warning" data-class="bg-warning">
                                                        <i class="mdi mdi-checkbox-blank-circle font-size-11 me-2"></i>Generating Reports
                                                    </div>
                                                    <div class="external-event fc-event text-danger bg-soft-danger" data-class="bg-danger">
                                                        <i class="mdi mdi-checkbox-blank-circle font-size-11 me-2"></i>Create New theme
                                                    </div>
                                                    <div class="external-event fc-event text-dark bg-soft-dark" data-class="bg-dark">
                                                        <i class="mdi mdi-checkbox-blank-circle font-size-11 me-2"></i>Team Meeting
                                                    </div>
                                                </div>
                                <div id="calendar"></div>

                            </div>
                            <!-- end card body -->
                        </div>
                        <div class="card border-none">
                            <div class="card-header align-items-center py-2 border-none">
                                <div class="row">
                                  
                                    <div class="col-md-2 col-2">

                                    </div>
                                </div>


                            </div><!-- end card header -->
                            </div>
            <div class="modal fade" id="campaign" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Cancel Appointment</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
               <p>
                Are you sure want to cancel this appointment?
               </p>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save</button>
            </div>
        </div>
    </div>
</div>
                            <div class="card-body">
                               

                            </div>
                            <!-- end card body -->
                        </div>
                    </div>

                </div>

                <!-- end card -->
            </div>
            <!-- end col -->

            <!-- end col -->
        </div><!-- end row -->
    </div>
    <!-- container-fluid -->
</div>
<!-- Add New Event MODAL -->
<div class="modal fade" id="event-modal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header py-3 px-4 border-bottom-0">
                <h5 class="modal-title" id="modal-title">Appointment</h5>

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
<!-- end modal-->




<?php require_once("footer.php") ?>