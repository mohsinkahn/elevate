<?php require_once("header.php") ?>


<link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
<script src="https://www.jqueryscript.net/demo/Excel-like-Bootstrap-Table-Sorting-Filtering-Plugin/excel-bootstrap-table-filter-bundle.js"></script>
<link rel="stylesheet" href="https://www.jqueryscript.net/demo/Excel-like-Bootstrap-Table-Sorting-Filtering-Plugin/excel-bootstrap-table-filter-style.css" />

  <!-- full calendar css-->
  <link href="assets/libs/%40fullcalendar/core/main.min.css" rel="stylesheet" type="text/css">
    <link href="assets/libs/%40fullcalendar/daygrid/main.min.css" rel="stylesheet" type="text/css">
    <link href="assets/libs/%40fullcalendar/bootstrap/main.min.css" rel="stylesheet" type="text/css">
    <link href="assets/libs/%40fullcalendar/timegrid/main.min.css" rel="stylesheet" type="text/css">

<div class="page-content">
    <div class="container-fluid">

    <div class="row">
                            <div class="col-12">
                               
                                <div class="row">
                                   

                                    <div class="col-xl-9 col-lg-8">
                                        <div class="card">
                                            <div class="card-body">
                                                <div id="calendar"></div>
                                            </div>
                                        </div>
                                    </div> <!-- end col -->

                                </div>
                                <!-- end row -->

                                <div style='clear:both'></div>

                                <!-- Add New Event MODAL -->
                                <div class="modal fade" id="event-modal" tabindex="-1">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header py-3 px-4 border-bottom-0">
                                                <h5 class="modal-title" id="modal-title">Event</h5>

                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>

                                            </div>
                                            <div class="modal-body p-4">
                                                <form class="needs-validation" name="event-form" id="form-event" novalidate="">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="mb-3">
                                                                <label class="form-label">Event Name</label>
                                                                <input class="form-control" placeholder="Insert Event Name" type="text" name="title" id="event-title" required="" value="">
                                                                <div class="invalid-feedback">Please provide a valid event name</div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="mb-3">
                                                                <label class="form-label">Category</label>
                                                                <select class="form-control form-select" name="category" id="event-category">
                                                                    <option selected=""> --Select-- </option>
                                                                    <option value="bg-danger">Danger</option>
                                                                    <option value="bg-success">Success</option>
                                                                    <option value="bg-primary">Primary</option>
                                                                    <option value="bg-info">Info</option>
                                                                    <option value="bg-dark">Dark</option>
                                                                    <option value="bg-warning">Warning</option>
                                                                </select>
                                                                <div class="invalid-feedback">Please select a valid event category</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row mt-2">
                                                        <div class="col-6">
                                                            <button type="button" class="btn btn-danger" id="btn-delete-event">Delete</button>
                                                        </div>
                                                        <div class="col-6 text-end">
                                                            <button type="button" class="btn btn-light me-1" data-bs-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-success" id="btn-save-event">Save</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div> <!-- end modal-content-->
                                    </div> <!-- end modal dialog-->
                                </div>
                                <!-- end modal-->

                            </div>
                        </div>
    </div>
    <!-- container-fluid -->
</div>



<!-- full calendar script -->
<script src="assets/libs/%40fullcalendar/core/main.min.js"></script>
<script src="assets/libs/%40fullcalendar/bootstrap/main.min.js"></script>
<script src="assets/libs/%40fullcalendar/daygrid/main.min.js"></script>
<script src="assets/libs/%40fullcalendar/timegrid/main.min.js"></script>
<script src="assets/libs/%40fullcalendar/interaction/main.min.js"></script>

<!-- Calendar init -->
<script src="assets/js/pages/calendar.init.js"></script>

<?php require_once("footer.php") ?>