<?php require_once("header.php") ?>

<style>
    .form-check .form-check-input {
        float: inherit !important;
    }
    .choices__inner{
        padding: 11px 9px!important;
    }
</style>

<link href="assets/libs/choices.js/public/assets/styles/choices.min.css" rel="stylesheet" type="text/css">

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
                                <div class="col-md-12">
                                    <label for="floatingInput" style="font-weight:bold;">Additional Info</label>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <p>
                                                Are You Currently An Elevate Psychiatry Patient?
                                            </p>
                                            <div class="form-check mb-3">
                                                <input class="form-check-input" type="radio" name="formRadios" id="formRadios1" checked="">
                                                <label class="form-check-label" for="formRadios1">
                                                    Yes
                                                </label>
                                            </div>
                                            <div class="form-check mb-3">
                                                <input class="form-check-input" type="radio" name="formRadios" id="formRadios1" checked="">
                                                <label class="form-check-label" for="formRadios1">
                                                    No
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <p>
                                                Which Location Are You interested To Schedule Your Initial TMS Consultation?
                                            </p>
                                            <div class="form-check mb-3">
                                                <input class="form-check-input" type="radio" name="formRadios" id="formRadios1" checked="">
                                                <label class="form-check-label" for="formRadios1">
                                                    Doral
                                                </label>
                                            </div>
                                            <div class="form-check mb-3">
                                                <input class="form-check-input" type="radio" name="formRadios" id="formRadios1" checked="">
                                                <label class="form-check-label" for="formRadios1">
                                                    Coconut Grove
                                                </label>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <p>
                                                Current Insurance Carrier?
                                            </p>
                                            <div class="form-check mb-3">
                                                <input class="form-check-input" type="radio" name="formRadios" id="formRadios1" checked="">
                                                <label class="form-check-label" for="formRadios1">
                                                    Medicaid - patient must undersatand that we do not accept their insurance and that the cash prize is $4500, which they can pay upfront or finance
                                                </label>
                                            </div>
                                            <div class="form-check mb-3">
                                                <input class="form-check-input" type="radio" name="formRadios" id="formRadios1" checked="">
                                                <label class="form-check-label" for="formRadios1">
                                                    Self pay
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <p>
                                                Write name of insurance
                                            </p>
                                            <div class="form-floating mb-3">
                                                <input type="email" class="form-control" id="floatingInput" placeholder="insurance">
                                                <!-- <label for="floatingInput">Enter</label> -->
                                            </div>

                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <p>
                                                Have You Ever Been Diagnosed And Treated For Depression?
                                            </p>
                                            <div class="form-check mb-3">
                                                <input class="form-check-input" type="radio" name="formRadios" id="formRadios1" checked="">
                                                <label class="form-check-label" for="formRadios1">
                                                    Yes
                                                </label>
                                            </div>
                                            <div class="form-check mb-3">
                                                <input class="form-check-input" type="radio" name="formRadios" id="formRadios1" checked="">
                                                <label class="form-check-label" for="formRadios1">
                                                    No
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <p>
                                                Who Referred You To TMS Treatment?
                                            </p>
                                            <div class="form-floating mb-3">
                                                <input type="email" class="form-control" id="floatingInput" placeholder="insurance">
                                                <!-- <label for="floatingInput">Enter</label> -->
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <p>
                                                How Many Antidpressant Medications Have You Tried Dropdown?
                                            </p>
                                            <div class="form-floating mb-3">
                                                <select name="" id="" class="form-select" style="height:58px;padding-top:8px">
                                                    <option value="">Select</option>
                                                    <option value="">None</option>
                                                    <option value="">1 - 3 Medications</option>
                                                </select>
                                                <!-- <label for="floatingInput">Enter</label> -->
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <p>
                                                Are You In Or Have YOu Done Therapy?
                                            </p>
                                            <div class="form-check mb-3">
                                                <input class="form-check-input" type="radio" name="formRadios" id="formRadios1" checked="">
                                                <label class="form-check-label" for="formRadios1">
                                                    Yes,currently
                                                </label>
                                            </div>
                                            <div class="form-check mb-3">
                                                <input class="form-check-input" type="radio" name="formRadios" id="formRadios1" checked="">
                                                <label class="form-check-label" for="formRadios1">
                                                    Yes,in the past
                                                </label>
                                            </div>
                                            <div class="form-check mb-3">
                                                <input class="form-check-input" type="radio" name="formRadios" id="formRadios1" checked="">
                                                <label class="form-check-label" for="formRadios1">
                                                    Never
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <p>
                                                Emergency Contact Name
                                            </p>
                                            <div class="form-floating mb-3">
                                                <input type="email" class="form-control" id="floatingInput" placeholder="insurance">
                                                <!-- <label for="floatingInput">Enter</label> -->
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <p>
                                                Emergency Contact Phone
                                            </p>
                                            <div class="form-floating mb-3">
                                                <input type="number" class="form-control" id="floatingInput" placeholder="insurance">
                                                <!-- <label for="floatingInput">Enter</label> -->
                                            </div>
                                        </div>
                                    </div>
                                   
                                    <div class="row">
                                        <div class="col-md-6">
                                            <p>
                                                Feedback
                                            </p>
                                            <div class="form-floating mb-3">
                                                <!-- <input type="email" class="form-control" id="" placeholder="insurance"> -->
                                                <textarea name="" id="floatingInput" class="form-control" cols="30" rows="10"></textarea>
                                                <!-- <label for="floatingInput">Enter</label> -->
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                        <p for="floatingInput" style="font-weight:bold;">Actions</p>
                                            <div class="mb-3">
                                                <label for="choices-text-remove-button" class="form-label font-size-13 text-muted" style="width:100%">

                                                    <input class="form-control" id="choices-text-remove-button" type="text" value="facebook,TMS" placeholder="Enter something">


                                            </div>
                                        </div>
                                    </div>

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
    <!-- choices js -->
    <script src="assets/libs/choices.js/public/assets/scripts/choices.min.js"></script>

    <script>
        $(document).ready(function() {
            new Choices(document.getElementById("choices-text-remove-button"), {
                delimiter: ",",
                editItems: !0,
                maxItemCount: 5,
                removeItemButton: !0,
            })
        });
    </script>

    <?php require_once("footer.php") ?>