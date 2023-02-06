<?php require_once("header.php") ?>



<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12">
                <div class="card border-none">
                    <div class="card-header align-items-center py-2 border-none">
                        <div class="row">
                            <div class="col-md-6 col-6">
                                <h4 class="card-title mb-0 mt-head">Marketing</h4>
                            </div>
                            <div class="col-md-6 col-6">
                                <div class="btn-group float-end px-2" role="group" style="margin-left:5px;" id="email_btn">
                                    <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                       Create Email <i class="mdi mdi-chevron-down"></i>
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1" >
                                        <!-- <li><a class="dropdown-item" href="create_campaign.php">Campaign</a></li> -->
                                        <li><a class="dropdown-item" href="create_email_template.php">Template</a></li>
                                    </ul>
                                </div>
                                <div class="btn-group float-end px-2" role="group" id="sms_btn" style="display:none;">
                                    <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                       Create Sms <i class="mdi mdi-chevron-down"></i>
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                        <!-- <li><a class="dropdown-item" href="create_sms_campaign.php">Campaign</a></li> -->
                                        <li><a class="dropdown-item" href="create_sms_template.php">Template</a></li>
                                    </ul>
                                </div>
                                <!-- <a href="create_campaign.php" class="btn btn-primary px-3 ">Create Email Campaign</a>
                                <a href="create_sms_campaign.php" class="btn btn-primary px-3 float-end">Create Sms Campaign</a> -->
                            </div>
                        </div>
                    </div>
                    <!-- end card header -->

                    <div class="card-body">
                        <div class="card border-none">
                            <div class="card-header align-items-center d-flex">

                                <div class="flex-shrink-0">
                                    <ul class="nav justify-content-start nav-tabs-custom rounded card-header-tabs" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-bs-toggle="tab" href="#home2" role="tab" id="email">

                                                <span class=" d-sm-block">Email</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#profile2" role="tab" id="sms">

                                                <span class=" d-sm-block">Sms</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div><!-- end card header -->

                            <div class="card-body border-none">

                                <!-- Tab panes -->
                                <div class="tab-content text-muted campaign">
                                    <div class="tab-pane active" id="home2" role="tabpanel">
                                        <h4 class="card-title mb-4  mt-head">Templates</h4>
                                        <div class="row">
                                            <div class="col-xl-3">
                                                <div class="card p-1 mb-sm-0">
                                                    <div class="p-3">
                                                        <div class="d-flex align-items-start">
                                                            <div class="flex-grow-1 overflow-hidden">
                                                                <h5 class="font-size-15 text-truncate"><a href="#" class="text-dark">OPTS</a></h5>

                                                            </div>
                                                            <div class="flex-shrink-0 ms-2">
                                                                <div class="dropdown">
                                                                    <a class="btn btn-link text-muted font-size-16 p-1 py-0 dropdown-toggle shadow-none" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                        <i class="bx bx-dots-horizontal-rounded"></i>
                                                                    </a>
                                                                    <ul class="dropdown-menu dropdown-menu-end">
                                                                       
                                                                        <li><a class="dropdown-item" href="edit_email_template.php">Edit/View</a></li>
                                                                        <li><a class="dropdown-item" href="#">Delete</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="position-relative file-icon">
                                                        <i class="fa fa-envelope"></i>
                                                    </div>

                                                    <div class="p-3">

                                                        <p class="text-muted">
                                                            Send this enroll to your new customers to welcome them to your product.
                                                        </p>

                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end col -->

                                            <div class="col-xl-3">
                                                <div class="card p-1 mb-sm-0">
                                                    <div class="p-3">
                                                        <div class="d-flex align-items-start">
                                                            <div class="flex-grow-1 overflow-hidden">
                                                                <h5 class="font-size-15 text-truncate"><a href="#" class="text-dark">OPTS</a></h5>

                                                            </div>
                                                            <div class="flex-shrink-0 ms-2">
                                                                <div class="dropdown">
                                                                    <a class="btn btn-link text-muted font-size-16 p-1 py-0 dropdown-toggle shadow-none" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                        <i class="bx bx-dots-horizontal-rounded"></i>
                                                                    </a>
                                                                    <ul class="dropdown-menu dropdown-menu-end">
                                                                    
                                                                        <li><a class="dropdown-item" href="edit_email_template.php">Edit/View</a></li>
                                                                        <li><a class="dropdown-item" href="#">Delete</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="position-relative file-icon">
                                                        <i class="fa fa-envelope"></i>
                                                    </div>

                                                    <div class="p-3">

                                                        <p class="text-muted">
                                                            Send this enroll to your new customers to welcome them to your product.
                                                        </p>

                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end col -->
                                            <div class="col-xl-3">
                                                <div class="card p-1 mb-sm-0">
                                                    <div class="p-3">
                                                        <div class="d-flex align-items-start">
                                                            <div class="flex-grow-1 overflow-hidden">
                                                                <h5 class="font-size-15 text-truncate"><a href="#" class="text-dark">OPTS</a></h5>

                                                            </div>
                                                            <div class="flex-shrink-0 ms-2">
                                                                <div class="dropdown">
                                                                    <a class="btn btn-link text-muted font-size-16 p-1 py-0 dropdown-toggle shadow-none" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                        <i class="bx bx-dots-horizontal-rounded"></i>
                                                                    </a>
                                                                    <ul class="dropdown-menu dropdown-menu-end">
                                                                      
                                                                        <li><a class="dropdown-item" href="edit_email_template.php">Edit/View</a></li>
                                                                        <li><a class="dropdown-item" href="#">Delete</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="position-relative file-icon">
                                                        <i class="fa fa-envelope"></i>
                                                    </div>

                                                    <div class="p-3">

                                                        <p class="text-muted">
                                                            Send this enroll to your new customers to welcome them to your product.
                                                        </p>

                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end col -->
                                        </div>

                                        
                                    </div>
                                    <div class="tab-pane" id="profile2" role="tabpanel">
                                        <h4 class="card-title mb-4  mt-head">Templates</h4>
                                        <div class="row">
                                            <div class="col-xl-3">
                                                <div class="card p-1 mb-sm-0">
                                                    <div class="p-3">
                                                        <div class="d-flex align-items-start">
                                                            <div class="flex-grow-1 overflow-hidden">
                                                                <h5 class="font-size-15 text-truncate"><a href="#" class="text-dark">OPTS</a></h5>

                                                            </div>
                                                            <div class="flex-shrink-0 ms-2">
                                                                <div class="dropdown">
                                                                    <a class="btn btn-link text-muted font-size-16 p-1 py-0 dropdown-toggle shadow-none" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                        <i class="bx bx-dots-horizontal-rounded"></i>
                                                                    </a>
                                                                    <ul class="dropdown-menu dropdown-menu-end">
                                                                       
                                                                        <li><a class="dropdown-item" href="edit_sms_template.php">Edit/View</a></li>
                                                                        <li><a class="dropdown-item" href="#">Delete</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="position-relative file-icon">
                                                        <i class="fa fa-comment"></i>
                                                    </div>

                                                    <div class="p-3">

                                                        <p class="text-muted">
                                                            Send this enroll to your new customers to welcome them to your product.
                                                        </p>

                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end col -->

                                            <div class="col-xl-3">
                                                <div class="card p-1 mb-sm-0">
                                                    <div class="p-3">
                                                        <div class="d-flex align-items-start">
                                                            <div class="flex-grow-1 overflow-hidden">
                                                                <h5 class="font-size-15 text-truncate"><a href="#" class="text-dark">OPTS</a></h5>

                                                            </div>
                                                            <div class="flex-shrink-0 ms-2">
                                                                <div class="dropdown">
                                                                    <a class="btn btn-link text-muted font-size-16 p-1 py-0 dropdown-toggle shadow-none" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                        <i class="bx bx-dots-horizontal-rounded"></i>
                                                                    </a>
                                                                    <ul class="dropdown-menu dropdown-menu-end">
                                                                       
                                                                        <li><a class="dropdown-item" href="edit_sms_template.php">Edit/View</a></li>
                                                                        <li><a class="dropdown-item" href="#">Delete</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="position-relative file-icon">
                                                        <i class="fa fa-comment"></i>
                                                    </div>

                                                    <div class="p-3">

                                                        <p class="text-muted">
                                                            Send this enroll to your new customers to welcome them to your product.
                                                        </p>

                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end col -->
                                            <div class="col-xl-3">
                                                <div class="card p-1 mb-sm-0">
                                                    <div class="p-3">
                                                        <div class="d-flex align-items-start">
                                                            <div class="flex-grow-1 overflow-hidden">
                                                                <h5 class="font-size-15 text-truncate"><a href="#" class="text-dark">OPTS</a></h5>

                                                            </div>
                                                            <div class="flex-shrink-0 ms-2">
                                                                <div class="dropdown">
                                                                    <a class="btn btn-link text-muted font-size-16 p-1 py-0 dropdown-toggle shadow-none" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                        <i class="bx bx-dots-horizontal-rounded"></i>
                                                                    </a>
                                                                    <ul class="dropdown-menu dropdown-menu-end">
                                                                      
                                                                        <li><a class="dropdown-item" href="edit_sms_template.php">Edit/View</a></li>
                                                                        <li><a class="dropdown-item" href="#">Delete</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="position-relative file-icon">
                                                        <i class="fa fa-comment"></i>
                                                    </div>

                                                    <div class="p-3">

                                                        <p class="text-muted">
                                                            Send this enroll to your new customers to welcome them to your product.
                                                        </p>

                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end col -->
                                        </div>
                                        
                                    </div>

                                </div>
                            </div><!-- end card-body -->
                        </div><!-- end card -->


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
<script>
      $("#email").click(function() {
        $("#sms_btn").hide();
        $("#email_btn").show();
    });
    $("#sms").click(function() {
        $("#sms_btn").show();
        $("#email_btn").hide();
    });
    
</script>
<?php require_once("footer.php") ?>