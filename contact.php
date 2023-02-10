<?php require_once("header.php") ?>



<div class="page-content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-xl-12">
        <div class="card border-none">
          <div class="card-header align-items-center py-2 border-none">
            <div class="row">
              <div class="col-md-10 col-10">
                <h4 class="card-title mb-0 mt-head">All Contacts</h4>
              </div>
              <div class="col-md-2 col-2">
                <a href="add_contact.php" class="btn btn-primary px-5 float-end">Add</a>
              </div>
            </div>
          </div>
          <!-- end card header -->

          <div class="card-body">
             <div class="card-header">
             <ul class="nav justify-content-start nav-tabs-custom rounded card-header-tabs" role="tablist">
                  <li class="nav-item">
                      <a class="nav-link active" data-bs-toggle="tab" href="#all" role="tab">
                          <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                          <span class="d-none d-sm-block">Smart Lists</span>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" data-bs-toggle="tab" href="#restore" role="tab">
                          <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                          <span class="d-none d-sm-block">Restore</span>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" data-bs-toggle="tab" href="#tasks" role="tab">
                          <span class="d-block d-sm-none"><i class="far fa-envelope"></i></span>
                          <span class="d-none d-sm-block">Tasks</span>
                      </a>
                  </li>

              </ul>
             </div>
         

              <!-- Tab panes -->
              <div class="tab-content p-3 text-muted">
                  <div class="tab-pane active" id="all" role="tabpanel">
                      <div class="table-responsive">
                          <table class="table align-middle datatable dt-responsive table-check nowrap" style="border-collapse: collapse; border-spacing: 0 8px; width: 100%;">
                              <thead>
                              <tr>

                                  <th scope="col">Name</th>
                                  <th scope="col">Phone</th>
                                  <th scope="col">Email</th>
                                  <th scope="col">Tags</th>
                                  <th scope="col">Last Activity</th>
                                  <th style="width: 80px; min-width: 80px;">Action</th>
                              </tr>
                              </thead>
                              <tbody>
                              <tr>

                                  <td>
                                      <div class="img-bk">
                                          <img src="assets/images/users/avatar-2.jpg" alt="" class="avatar-sm rounded-circle me-2">
                                      </div>

                                      <a href="#" class="text-body">Phyllis Gatlin</a>
                                  </td>
                                  <td>+93388789908</td>
                                  <td>phyllisgatlin@minia.com</td>
                                  <td>
                                      <div class="d-flex gap-2">
                                          <a href="#" class="badge badge-soft-primary font-size-11">In-house</a>
                                          <a href="#" class="badge badge-soft-primary font-size-11">+2</a>
                                      </div>
                                  </td>
                                  <td>
                                      <i class="mdi mdi-comment-outline"></i> 12 min ago
                                  </td>
                                  <td>
                                      <div class="dropdown">
                                          <button class="btn btn-link font-size-16 shadow-none py-0 text-muted dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                              <i class="bx bx-dots-horizontal-rounded"></i>
                                          </button>
                                          <ul class="dropdown-menu dropdown-menu-end">
                                              <li><a class="dropdown-item" href="view_contact.php"> <i class="far fa-eye"></i> View</a></li>
                                              <li><a class="dropdown-item" href="#"><i class="fas fa-pen"></i> Edit</a></li>
                                          </ul>
                                      </div>
                                  </td>
                              </tr>
                              <tr>

                                  <td>
                                      <div class="img-bk">
                                          <img src="assets/images/users/avatar-1.jpg" alt="" class="avatar-sm rounded-circle me-2">
                                      </div>

                                      <a href="#" class="text-body">James Nix</a>
                                  </td>
                                  <td>+93388789908</td>
                                  <td>jamesnix@minia.com</td>
                                  <td>
                                      <div class="d-flex gap-2">
                                          <a href="#" class="badge badge-soft-primary font-size-11">In-house</a>
                                          <a href="#" class="badge badge-soft-primary font-size-11">+2</a>
                                      </div>
                                  </td>
                                  <td><i class="mdi mdi-cellphone-sound"></i> 12 min ago</td>
                                  <td>
                                      <div class="dropdown">
                                          <button class="btn btn-link font-size-16 shadow-none py-0 text-muted dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                              <i class="bx bx-dots-horizontal-rounded"></i>
                                          </button>
                                          <ul class="dropdown-menu dropdown-menu-end">
                                              <li><a class="dropdown-item" href="view_contact.php"> <i class="far fa-eye"></i> View</a></li>
                                              <li><a class="dropdown-item" href="#"><i class="fas fa-pen"></i> Edit</a></li>
                                          </ul>
                                      </div>
                                  </td>
                              </tr>
                              <tr>

                                  <td>
                                      <div class="img-bk">
                                          <img src="assets/images/users/avatar-3.jpg" alt="" class="avatar-sm rounded-circle me-2">
                                      </div>

                                      <a href="#" class="text-body">Darlene Smith</a>
                                  </td>
                                  <td>+93388789908</td>
                                  <td>darlenesmith@minia.com</td>
                                  <td>
                                      <div class="d-flex gap-2">
                                          <a href="#" class="badge badge-soft-primary font-size-11">In-house</a>
                                          <a href="#" class="badge badge-soft-primary font-size-11">+2</a>
                                      </div>
                                  </td>
                                  <td><i class="mdi mdi-email-outline"></i> 1 min ago</td>
                                  <td>
                                      <div class="dropdown">
                                          <button class="btn btn-link font-size-16 shadow-none py-0 text-muted dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                              <i class="bx bx-dots-horizontal-rounded"></i>
                                          </button>
                                          <ul class="dropdown-menu dropdown-menu-end">
                                              <li><a class="dropdown-item" href="view_contact.php"> <i class="far fa-eye"></i> View</a></li>
                                              <li><a class="dropdown-item" href="#"><i class="fas fa-pen"></i> Edit</a></li>
                                          </ul>
                                      </div>
                                  </td>
                              </tr>

                              </tbody>
                          </table>
                      </div>

                  </div>
                  <div class="tab-pane" id="restore" role="tabpanel">
                      <div class="table-responsive">
                          <table class="table align-middle datatable dt-responsive table-check nowrap" style="border-collapse: collapse; border-spacing: 0 8px; width: 100%;">
                              <thead>
                              <tr>

                                  <th scope="col"></th>
                                  <th scope="col">Name</th>
                                  <th scope="col">Phone</th>
                                  <th scope="col">Email</th>
                              </tr>
                              </thead>
                              <tbody>
                               <tr>
                                  <td><input type="checkbox"></td>
                                  <td>
                                      <a href="#" class="text-body">Phyllis Gatlin</a>
                                  </td>
                                  <td>+93388789908</td>
                                  <td>phyllisgatlin@minia.com</td>

                              </tr>


                              </tbody>
                          </table>
                      </div>

                  </div>
                  <div class="tab-pane" id="tasks" role="tabpanel">
                      <div class="table-responsive">
                          <table class="table align-middle datatable dt-responsive table-check nowrap" style="border-collapse: collapse; border-spacing: 0 8px; width: 100%;">
                              <thead>
                              <tr>
                                  <th></th>
                                  <th scope="col">Name & Description</th>
                                  <th scope="col">Contact</th>
                                  <th scope="col">Asignee</th>
                                  <th scope="col">Due Date</th>
                                  <th scope="col">Status</th>
                                  <th style="width: 80px; min-width: 80px;">Action</th>
                              </tr>
                              </thead>
                              <tbody>
                              <tr>
                                  <td><input type="checkbox" id=""></td>
                                  <td>
                                      <a href="#" class="cursor-pointer whitespace-nowrap grid" target="_blank">
                                          <h6>Follow up with Patient</h6>
                                          <p> Follow up with pt aug/sept per Dr. Bhatia </p>
                                      </a>
                                  </td>
                                  <td>
                                      <div class="img-bk">
                                          <img src="assets/images/users/avatar-2.jpg" alt="" class="avatar-sm rounded-circle me-2">
                                      </div>

                                      <a href="#" class="text-body">Phyllis Gatlin</a>
                                  </td>
                                  <td>John Doe</td>
                                  <td>20-Feb @ 05:00 am</td>
                                  <td>
                                      <i class="dripicons dripicons-checkmark"></i>
                                  </td>

                                  <td>
                                      <div class="dropdown">
                                          <button class="btn btn-link font-size-16 shadow-none py-0 text-muted dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                              <i class="bx bx-dots-horizontal-rounded"></i>
                                          </button>
                                          <ul class="dropdown-menu dropdown-menu-end">
                                              <li><a class="dropdown-item" href="view_contact.php"> <i class="far fa-eye"></i> View</a></li>
                                              <li><a class="dropdown-item" href="#"><i class="fas fa-pen"></i> Edit</a></li>
                                          </ul>
                                      </div>
                                  </td>
                              </tr>
                              <tr>
                                  <td><input type="checkbox" id=""></td>
                                  <td>
                                      <a href="#" class="cursor-pointer whitespace-nowrap grid" target="_blank">
                                          <h6>Follow up with Patient</h6>
                                          <p> Follow up with pt aug/sept per Dr. Bhatia </p>
                                      </a>
                                  </td>
                                  <td>
                                      <div class="img-bk">
                                          <img src="assets/images/users/avatar-2.jpg" alt="" class="avatar-sm rounded-circle me-2">
                                      </div>

                                      <a href="#" class="text-body">Phyllis Gatlin</a>
                                  </td>
                                  <td>John Doe</td>
                                  <td>20-Feb @ 05:00 am</td>
                                  <td>
                                      <i class="dripicons dripicons-checkmark"></i>
                                  </td>

                                  <td>
                                      <div class="dropdown">
                                          <button class="btn btn-link font-size-16 shadow-none py-0 text-muted dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                              <i class="bx bx-dots-horizontal-rounded"></i>
                                          </button>
                                          <ul class="dropdown-menu dropdown-menu-end">
                                              <li><a class="dropdown-item" href="view_contact.php"> <i class="far fa-eye"></i> View</a></li>
                                              <li><a class="dropdown-item" href="#"><i class="fas fa-pen"></i> Edit</a></li>
                                          </ul>
                                      </div>
                                  </td>
                              </tr>
                              <tr>
                                  <td><input type="checkbox" id=""></td>
                                  <td>
                                      <a href="#" class="cursor-pointer whitespace-nowrap grid" target="_blank">
                                          <h6>Follow up with Patient</h6>
                                          <p> Follow up with pt aug/sept per Dr. Bhatia </p>
                                      </a>
                                  </td>
                                  <td>
                                      <div class="img-bk">
                                          <img src="assets/images/users/avatar-2.jpg" alt="" class="avatar-sm rounded-circle me-2">
                                      </div>

                                      <a href="#" class="text-body">Phyllis Gatlin</a>
                                  </td>
                                  <td>John Doe</td>
                                  <td>20-Feb @ 05:00 am</td>
                                  <td>
                                      <i class="dripicons dripicons-checkmark"></i>
                                  </td>

                                  <td>
                                      <div class="dropdown">
                                          <button class="btn btn-link font-size-16 shadow-none py-0 text-muted dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                              <i class="bx bx-dots-horizontal-rounded"></i>
                                          </button>
                                          <ul class="dropdown-menu dropdown-menu-end">
                                              <li><a class="dropdown-item" href="view_contact.php"> <i class="far fa-eye"></i> View</a></li>
                                              <li><a class="dropdown-item" href="#"><i class="fas fa-pen"></i> Edit</a></li>
                                          </ul>
                                      </div>
                                  </td>
                              </tr>

                              </tbody>
                          </table>
                      </div>

                  </div>
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
<!-- add appointment Modal -->
<div class="modal fade" id="appoint" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Create Appointment</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-6">
            <div class="mb-3">
              <label for="example-text-input" class="form-label">Date</label>
              <input class="form-control" type="date" value="" id="example-text-input">
            </div>
          </div>
          <div class="col-md-6">
            <div class="mb-3">
              <label for="example-text-input" class="form-label">Time</label>
              <input class="form-control" type="time" value="" id="example-text-input">
            </div>
          </div>
          <div class="col-md-12">
            <div class="mb-3">
              <label for="example-text-input" class="form-label">Note</label>
              <textarea class="form-control" name="" id="" cols="30" rows="10"></textarea>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save</button>
      </div>
    </div>
  </div>
</div>
<!-- Start campaign Modal -->
<div class="modal fade" id="campaign" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Start Campaign</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-6">
            <div class="form-check mb-3">
              <input class="form-check-input" onclick="emailtog()" type="checkbox" id="formCheck1">
              <label class="form-check-label" for="formCheck1">
                Email
              </label>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-check mb-3">
              <input class="form-check-input" onclick="smstog()" type="checkbox" id="formCheck2">
              <label class="form-check-label" for="formCheck2">
                Sms
              </label>
            </div>
          </div>

        </div>
        <div id="email-temp-btn" style="display:none">
          <div class="row">
            <div class="col-md-12">
              <div class="mb-3">
                <button class="btn btn-primary" id="emailtemp">Template</button>
                <button class="btn btn-primary" id="emailcamp">Campaign</button>
              </div>
            </div>
          </div>
        </div>
        <div id="sms-temp-btn" style="display:none">
          <div class="row">
            <div class="col-md-12">
              <div class="mb-3">
                <button class="btn btn-primary" id="smstemp">Template</button>
                <button class="btn btn-primary" id="smscamp">Campaign</button>
              </div>
            </div>
          </div>
        </div>
        <div id="email-temp" style="display: none">
          <div class="row">
            <div class="col-md-12">
              <div class="mb-3">
                <label for="choices-single-default" class="form-label font-size-13 text-muted">Select Email Template</label>
                <select class="form-control" data-trigger="" name="choices-single-default" id="choices-single-default" placeholder="This is a search placeholder">
                  <option value="">Select</option>
                  <option value="Choice 1">Abc</option>
                  <option value="Choice 2">Abc</option>
                  <option value="Choice 3">abc</option>
                </select>
              </div>
            </div>
          </div>
        </div>
        <div id="email-camp" style="display: none">
          <div class="row">
            <div class="col-md-12">
              <div class="mb-3">
                <div class="mb-3">
                  <label for="choices-single-default" class="form-label font-size-13 text-muted">Select Email Campaign</label>
                  <select class="form-control" data-trigger="" name="choices-single-default" id="choices-single-default" placeholder="This is a search placeholder">
                    <option value="">Select</option>
                    <option value="Choice 1">Abc</option>
                    <option value="Choice 2">Abc</option>
                    <option value="Choice 3">Abc</option>
                  </select>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div id="sms-temp" style="display: none">
          <div class="row">
            <div class="col-md-12">
              <div class="mb-3">
                <label for="choices-single-default" class="form-label font-size-13 text-muted">Select Sms Template</label>
                <select class="form-control" data-trigger="" name="choices-single-default" id="choices-single-default" placeholder="This is a search placeholder">
                  <option value="">Select</option>
                  <option value="Choice 1">Abc</option>
                  <option value="Choice 2">Abc</option>
                  <option value="Choice 3">Abc</option>
                </select>
              </div>
            </div>
          </div>
        </div>
        <div id="sms-camp" style="display: none">
          <div class="row">
            <div class="col-md-12">
              <div class="mb-3">
                <label for="choices-single-default" class="form-label font-size-13 text-muted">Select Sms Campaign</label>
                <select class="form-control" data-trigger="" name="choices-single-default" id="choices-single-default" placeholder="This is a search placeholder">
                  <option value="">Select</option>
                  <option value="Choice 1">Abc</option>
                  <option value="Choice 2">Abc</option>
                  <option value="Choice 3">Abc</option>
                </select>
              </div>
            </div>
          </div>
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save</button>
      </div>
    </div>
  </div>
</div>
<script>
  let email_temp_input = document.getElementById('formCheck1');
  let sms_temp_input = document.getElementById('formCheck2');
  let email_temp_btn = document.getElementById('email-temp-btn');
  let sms_temp_btn = document.getElementById('sms-temp-btn');
  let email_temp = document.getElementById('email-temp');
  let email_camp = document.getElementById('email-camp');
  let sms_temp = document.getElementById('sms-temp');
  let sms_camp = document.getElementById('sms-camp');

  function emailtog() {
    if (email_temp_input.checked) {
      email_temp_btn.style.display = "block";
    } else {
      email_temp_btn.style.display = "none";
      email_temp.style.display = "none";
      email_camp.style.display = "none";
    }
  }

  function smstog() {
    if (sms_temp_input.checked) {
      sms_temp_btn.style.display = "block";
    } else {
      sms_temp_btn.style.display = "none";
      sms_temp.style.display = "none";
      sms_camp.style.display = "none";
    }
  }
  $("#emailtemp").click(function() {
    $("#email-temp").show();
  });
  $("#emailcamp").click(function() {
    $("#email-camp").show();
  });
  $("#smstemp").click(function() {
    $("#sms-temp").show();
  });
  $("#smscamp").click(function() {
    $("#sms-camp").show();
  });
</script>
<?php require_once("footer.php") ?>