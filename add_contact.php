<?php require_once("header.php") ?>



<div class="page-content">
    <div class="container-fluid">


        <div class="row">
            <div class="col-xl-12">
                <div class="card border-none">
                    <div class="card-header align-items-center py-2 border-none">
                        <div class="row">
                            <div class="col-md-10 col-10">
                                <h4 class="card-title mb-0 mt-head">Add Contact information</h4>
                            </div>
                            <div class="col-md-2 col-2">

                            </div>
                        </div>
                    </div>
                    <!-- end card header -->

                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-7">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3 ">
                                            <input type="email" class="form-control" id="floatingInput" placeholder="First Name">
                                            <label for="floatingInput">First Name</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                    <div class="form-floating mb-3 ">
                                            <input type="email" class="form-control" id="floatingInput" placeholder="Last Name">
                                            <label for="floatingInput">Last Name</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                            <input type="email" class="form-control" id="floatingInput" placeholder="Dob" onclick="this.type='date'">
                                            <label for="floatingInput">Date Of Birth</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                            <input type="email" class="form-control" id="floatingInput" placeholder="Gender">
                                            <label for="floatingInput">Gender</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                            <input type="number" class="form-control" id="floatingInput" placeholder="Phone">
                                            <label for="floatingInput">Phone Number</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                            <input type="email" class="form-control" id="floatingInput" placeholder="Email">
                                            <label for="floatingInput">Email</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                            <input type="email" class="form-control" id="floatingInput" placeholder="Contact source">
                                            <label for="floatingInput">Contact Source</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <!-- <div class="mb-3">
                                            <label for="example-text-input" class="form-label">Stage*</label>
                                            <input class="form-control" type="text" value="" id="example-text-input">
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div>
                                    <form action="#" class="dropzone">
                                        <div class="fallback">
                                            <input name="file" type="file" multiple="multiple">
                                        </div>
                                        <div class="dz-message needsclick">
                                            <div class="mb-3">
                                                <i class="display-4 text-muted bx bx-cloud-upload"></i>
                                            </div>

                                            <h5>Upload Your Picture/Avatar Here.</h5>
                                        </div>
                                    </form>
                                </div>

                            </div>
                            <div class="col-md-12">
                                <a href="all_patient.php" class="btn btn-primary px-5 float-end">Save</a>
                                <a href="all_patient.php" class="btn btn-outline-primary px-5 float-end" style="margin-right:12px">Cancel</a>
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

    <?php require_once("footer.php") ?>