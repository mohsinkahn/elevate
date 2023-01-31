<?php require_once("header.php") ?>



<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12">
                <div class="card border-none">
                    <div class="card-header align-items-center py-2 border-none">
                        <div class="row">
                            <div class="col-md-10 col-10">
                                <h4 class="card-title mb-0 mt-head">Edit Sms Campaign</h4>
                            </div>

                        </div>
                    </div>
                    <!-- end card header -->

                    <div class="card-body">
                        <div style="border-bottom:1px solid #f7f7f7;padding-bottom:30px;">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="example-text-input" class="form-label">Campaign Name</label>
                                        <Select class="form-control">
                                            <option value="">Select</option>
                                            <option value="">Dry Eye FollowUp</option>
                                            <option value="">abc</option>
                                        </Select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="example-text-input" class="form-label">Number Of Sms</label>
                                        <Select class="form-control">
                                            <option value="">Select</option>
                                            <option value="">01</option>
                                            <option value="">02</option>
                                        </Select>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div id="basic-pills-wizard" class="twitter-bs-wizard">
                            <ul class="twitter-bs-wizard-nav">
                                <li class="nav-item">
                                    <a href="#seller-details" class="nav-link" data-toggle="tab">
                                        <div class="step-icon">
                                            1
                                        </div>
                                        Sms
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#company-document" class="nav-link" data-toggle="tab">
                                        <div class="step-icon">
                                            2
                                        </div>
                                        Sms
                                    </a>
                                </li>

                            </ul>
                            <!-- wizard-nav -->

                            <div class="tab-content twitter-bs-wizard-tab-content">
                                <div class="tab-pane" id="seller-details">

                                    <form>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="card p-4">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="mb-3">
                                                            <label for="basicpill-firstname-input" class="form-label">Sms name</label>
                                                            <input type="text" class="form-control" id="basicpill-firstname-input">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="mb-3">
                                                            <label for="basicpill-lastname-input" class="form-label">Schedule</label>
                                                            <Select class="form-control">
                                                                <option value="">Select</option>
                                                                <option value="">After 1st day of appointment</option>
                                                                <option value="">abc</option>
                                                            </Select>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="mb-3">
                                                            <label for="basicpill-address-input" class="form-label">Message Text</label>
                                                            <textarea name="" id="" cols="30" rows="10" class="form-control" style="height:400px">
                                                        
                                                           </textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                </div>
                                                
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="card p-4">
                                                <div class="row mb-5">
                                                    <div class="col-md-8 col-6">
                                                    <label  class="form-label">Message Preview</label>
                                                    </div>
                                                    <div class="col-md-4 col-6">
                                                        <a href="#" class="btn btn-primary float-end">Send Sms</a>
                                                    </div>
                                                </div>
                                                <div class="text-center  mobile" style="background-image:url('assets/images/sms.webp')">
                                                    <!-- <img  src="assets/images/sms.webp" alt=""> -->
                                                    <div class="sms-msg">
                                                        <p>
                                                        Hi William,</br>    
                                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium illo sit quasi iusto eius aperiam, id tenetur architecto! Corporis officia ipsa eveniet quam adipisci iste autem deserunt temporibus. Soluta, nihil! </p>
                                                    </div>
                                                </div>
                                                </div>
                                                
                                            </div>
                                        </div>




                                    </form>
                                    <ul class="pager wizard twitter-bs-wizard-pager-link">
                                        <li class="next"><a href="javascript: void(0);" class="btn btn-primary">Next <i class="bx bx-chevron-right ms-1"></i></a></li>
                                    </ul>
                                </div>
                                <!-- tab pane -->
                                <div class="tab-pane" id="company-document">
                                    <div>

                                        <form>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="card p-4">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="mb-3">
                                                                <label for="basicpill-firstname-input" class="form-label">Sms name</label>
                                                                <input type="text" class="form-control" id="basicpill-firstname-input">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <div class="mb-3">
                                                                <label for="basicpill-lastname-input" class="form-label">Schedule</label>
                                                                <Select class="form-control">
                                                                    <option value="">Select</option>
                                                                    <option value="">After 1st day of appointment</option>
                                                                    <option value="">abc</option>
                                                                </Select>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <div class="mb-3">
                                                                <label for="basicpill-address-input" class="form-label">Message Text</label>
                                                                <textarea name="" id="" cols="30" rows="10" class="form-control" style="height:400px"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    </div>
                                                  
                                                </div>
                                                <div class="col-lg-6">
                                                <div class="card p-4">
                                                <div class="row mb-5">
                                                    <div class="col-md-8 col-6">
                                                    <label  class="form-label">Message Preview</label>
                                                    </div>
                                                    <div class="col-md-4 col-6">
                                                        <a href="#" class="btn btn-primary float-end">Send Sms</a>
                                                    </div>
                                                </div>
                                                <div class="text-center  mobile" style="background-image:url('assets/images/sms.webp')">
                                                    <!-- <img  src="assets/images/sms.webp" alt=""> -->
                                                    <div class="sms-msg">
                                                        <p>
                                                        Hi William,</br>    
                                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium illo sit quasi iusto eius aperiam, id tenetur architecto! Corporis officia ipsa eveniet quam adipisci iste autem deserunt temporibus. Soluta, nihil! </p>
                                                    </div>
                                                </div>
                                                </div>
                                                
                                            </div>
                                            </div>
                                        </form>
                                        <ul class="pager wizard twitter-bs-wizard-pager-link">
                                            <li class="previous"><a href="javascript: void(0);" class="btn btn-primary"><i class="bx bx-chevron-left me-1"></i> Previous</a></li>
                                            <li class="float-end"><a href="javascript: void(0);" class="btn btn-primary" data-bs-toggle="modal" data-bs-target=".confirmModal">Save
                                                    Changes</a></li>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                            <!-- end tab content -->
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