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
                                      <div class="form-floating mb-3">
                                            <input type="email" class="form-control" id="floatingInput" placeholder="Contact type">
                                            <label for="floatingInput">Contact Type</label>
                                        </div>
                                    </div>
                                </div>
                               
                                <!-- <hr> -->
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
                            <div class="row">
                                    <div class="col-md-12 bord-bot">
                                      <div class="row align-items-center">
                                        <div class="col-md-6">
                                        <label for="floatingInput" style="font-weight:bold;">DND All Channels</label>
                                        </div>
                                        <div class="col-md-6 text-right">
                                             <input type="checkbox">
                                        </div>
                                      </div>
                                      <p class="hr">OR</p>
                                    </div>
                                </div>
                                <div class="row align-items-center mt-4 ico">
                                        <div class="col-md-6">
                                            <i class="mdi mdi-email-outline" style="color:skyblue"></i>
                                        <label for="floatingInput">Emails</label>
                                        </div>
                                        <div class="col-md-6 text-right">
                                             <input type="checkbox">
                                        </div>
                                      </div>
                                <div class="row align-items-center mt-4 ico">
                                        <div class="col-md-6">
                                            <i class="mdi mdi-message-reply-text" style="color:gold"></i>
                                        <label for="floatingInput">Text Messages</label>
                                        </div>
                                        <div class="col-md-6 text-right">
                                             <input type="checkbox">
                                        </div>
                                </div>
                                
                                <div class="row align-items-center mt-4 ico">
                                        <div class="col-md-6">
                                            <i class="mdi mdi-phone" style="color:green"></i>
                                        <label for="floatingInput">Calls & Voicemails</label>
                                        </div>
                                        <div class="col-md-6 text-right">
                                             <input type="checkbox">
                                        </div>
                                </div>
                                <div class="row align-items-center mt-4 ico">
                                        <div class="col-md-6">
                                            <i class="mdi mdi-google-my-business" style="color:gray"></i>
                                        <label for="floatingInput">GMB</label>
                                        </div>
                                        <div class="col-md-6 text-right">
                                             <input type="checkbox">
                                        </div>
                                </div>
                                <div class="row align-items-center mt-4 ico mb-4">
                                        <div class="col-md-6">
                                            <i class="mdi mdi-facebook-messenger" style="color:blue"></i>
                                        <label for="floatingInput">Facebook Messenger</label>
                                        </div>
                                        <div class="col-md-6 text-right">
                                             <input type="checkbox">
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