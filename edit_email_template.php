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
                            <div class="col-md-4 col-6">
                                <a href="#" class="btn btn-primary float-end px-5">Save</a>
                            </div>
                        </div>
                    </div>
                    <!-- end card header -->

                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card p-4">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="mb-3">
                                                <label for="basicpill-firstname-input" class="form-label">Template Name</label>
                                                <Select class="form-control">
                                                    <option value="">Select</option>
                                                    <option value="">Dry Eye Followups</option>
                                                    <option value="">abc</option>
                                                </Select>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="mb-3">
                                                <label for="basicpill-lastname-input" class="form-label">Senders</label>
                                                <Select class="form-control">
                                                    <option value="">Select</option>
                                                    <option value="">All New Patients</option>
                                                    <option value="">abc</option>
                                                </Select>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="mb-3">
                                                <label for="basicpill-lastname-input" class="form-label">Days</label>
                                                <Select class="form-control">
                                                    <option value="">Select</option>
                                                    <option value="">After 14 days</option>
                                                    <option value="">abc</option>
                                                </Select>
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
                                            <div class="mb-3">
                                                <label class="form-label">Subject</label>
                                                <input type="text" class="form-control">
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