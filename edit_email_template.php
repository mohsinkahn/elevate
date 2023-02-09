<?php require_once("header.php") ?>



<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12">
                <div class="card border-none">
                    <div class="card-header align-items-center py-2 border-none">
                        <div class="row">
                            <div class="col-md-8 col-6">
                                <h4 class="card-title mb-0 mt-head">Edit Email Template</h4>
                            </div>
                            <!-- <div class="col-md-4 col-6">
                                <a href="#" class="btn btn-primary float-end px-5">Save</a>
                            </div> -->
                        </div>
                    </div>
                    <!-- end card header -->

                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card p-4">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-floating mb-3 ">
                                                <input type="email" class="form-control" id="floatingInput" placeholder="temp name">
                                                <label for="floatingInput">Template Name</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            
                                            <div class="mb-3 ">
                                                <select name="" id="" class="form-select" style="height:58px">
                                                <option value="">Senders</option>
                                                    <option value="">All New Leads</option>
                                                    <option value="">abc</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="mb-3">
                                            <select name="" id="" class="form-select" style="height:58px">
                                            <option value="">Days</option>
                                                    <option value="">After 14 days</option>
                                                    <option value="">abc</option>
                                                </select>
                                          
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="mb-3" style="margin-top:136px">
                                                <a href="#" class="btn btn-primary px-5 float-end" style="width:fit-content;">Send Email</a>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>
                            <div class="col-lg-6">
                                <div class="card p-4">
                                    <div class="row mb-5">
                                        <div class="col-md-12 col-12">
                                        <div class="form-floating mb-3 ">
                                                <input type="email" class="form-control" id="floatingInput" placeholder="sub">
                                                <label for="floatingInput">Subject</label>
                                            </div>

                                        </div>
                                        <div class="col-md-12 col-12">
                                            <div class="mb-3">
                                                <div id="ckeditor-classic2"></div>
                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>
                        </div>
                        <div class="col-md-12">
                                <a href="all_patient.php" class="btn btn-primary px-5 float-end">Save</a>
                                <a href="all_patient.php" class="btn btn-outline-primary px-5 float-end" style="margin-right:12px">Cancel</a>
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
    <script src="assets/libs/%40ckeditor/ckeditor5-build-classic/build/ckeditor.js"></script>

    <?php require_once("footer.php") ?>