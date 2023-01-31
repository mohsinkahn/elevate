<?php require_once("header.php") ?>

<style>
    .social-profile {
    text-align: center;
    background: rgba(7, 10, 43, 0.8);
}
.up-img {
    background-position: center center;
    background-size: cover;
    background-repeat: no-repeat;
    width: 140px;
    height: 140px;
    margin: 0 auto;
    border-radius: 70px;
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
                                <h4 class="card-title  mt-head">View Profile</h4>
                            </div>
                        </div>
                    </div>
                    <!-- end card header -->

                    <div class="card-body">
                        
                        <div class="row">
                            <!-- Column -->

                            <div class="col-lg-4 ">

                                <div class="card">
                                    <div class="py-3 card-inverse social-profile d-flex justify-content-center ">
                                        <div>
                                            <div class="up-img" style="background-image:url('assets/images/users/avatar-1.jpg')" id="preview"></div>        
                                            <div>
                                                <h4 class="text-white pt-3">Shawn Lawrence</h4>
                                            </div>
                                            <div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-center ">
                                    <input type="file" name="picture" onchange="uploadFile();" style="position: absolute;width: 100%;height: 50px;opacity: 0">
                                    <button class="btn btn-primary form-control text-white">Click Here To Upload Image
                                    </button>
                                </div>
                            </div>
                            <div class="col-lg-8 ">
                                <div class="card">
                                    <div class="card-body">
                                        <small class="text-muted">Email address</small>
                                        <h6>shawnlawrence@gmail.com</h6>
                                        <small class="text-muted p-t-30 db">Phone</small>
                                        <h6>+1 (123) 123 1234</h6>
                                        <small class="text-muted p-t-30 db">Password</small>
                                        <h6>*******</h6>
                                        <a href="#" class="btn btn-primary" style="width: 100px;float: right" data-bs-toggle="modal" data-bs-target="#exampleModal3">Edit</a>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- end card body -->
                </div>
                <!-- end card -->
            </div>
            <!-- end col -->
            
        </div><!-- end row -->
    </div>
    <!-- container-fluid -->
</div>
<div class="modal fade" id="exampleModal3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Profile details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" name="name" value="Shawn Lawrence" required="" class="form-control mb-3">
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="text" name="email" value="shawnlawrence@gmail.com" required="" class="form-control mb-3">
                </div>

                <div class="form-group">
                    <label for="">Phone</label>
                    <input type="text" name="phone" value="+1 (123) 123 1234" required="" class="form-control mb-3">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save</button>
            </div>
        </div>
    </div>
</div>    


<!-- add appointment Modal -->

<?php require_once("footer.php") ?>