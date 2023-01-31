<?php require_once("header.php") ?>

<div class="page-content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-xl-4 col-md-6">
        <!-- card -->
        <div class="card card-h-100 box-shadow">
          <!-- card body -->
          <div class="card-body">
            <div class="row align-items-center">
              <div class="col-6">
                <span class="text-muted mb-3 lh-1 d-block text-truncate">All Opportunities</span>
                <h4 class="mb-3">
                  <span>863</span>
                </h4>
              </div>

              <div class="col-6">
                <div class="icon bg-one">
                  <i class="mdi mdi-lightbulb-on-outline"></i>
                </div>
              </div>
            </div>
            <div class="text-nowrap d-flex justify-content-between mb-2">
              <span class="ms-1 red-text">Closed</span>
              <span class="text-dark">09</span>
            </div>
            <div class="text-nowrap d-flex justify-content-between mb-2">
              <span class="ms-1 green-text">Open</span>
              <span class="text-dark">34</span>
            </div>
            <div class="text-nowrap d-flex justify-content-between mb-2">
              <span class="ms-1 gray-text">Lost</span>
              <span class="text-dark">40</span>
            </div>
          </div><!-- end card body -->
        </div><!-- end card -->
      </div><!-- end col -->

      <div class="col-xl-4 col-md-6">
        <!-- card -->
        <div class="card card-h-100 box-shadow">
          <!-- card body -->
          <div class="card-body">
            <div class="row align-items-center">
              <div class="col-6">
                <span class="text-muted mb-3 lh-1 d-block text-truncate">Pipeline Value</span>
                <h4 class="mb-3">
                  <span>$6258</span>
                </h4>
              </div>
              <div class="col-6">
                <div class="icon bg-two">
                  <i class="mdi mdi-filter"></i>
                </div>
              </div>
            </div>
            <div class="text-nowrap d-flex justify-content-between mb-2">
              <span class="ms-1 red-text">Closed</span>
              <span class="text-dark">$09</span>
            </div>
            <div class="text-nowrap d-flex justify-content-between mb-2">
              <span class="ms-1 green-text">Open</span>
              <span class="text-dark">$34</span>
            </div>
            <div class="text-nowrap d-flex justify-content-between mb-2">
              <span class="ms-1 gray-text">Lost</span>
              <span class="text-dark">$40</span>
            </div>
          </div><!-- end card body -->
        </div><!-- end card -->
      </div><!-- end col-->

      <div class="col-xl-4 col-md-6">
        <!-- card -->
        <div class="card card-h-100 box-shadow">
          <!-- card body -->
          <div class="card-body">
            <div class="row align-items-center">
              <div class="col-6">
                <span class="text-muted mb-3 lh-1 d-block text-truncate">Conversion Rate</span>
                <h4 class="mb-3">
                  <span>4.45%</span>
                </h4>
              </div>
              <div class="col-6">
                <div class="icon bg-three">
                  <i class="mdi mdi-finance"></i>
                </div>
              </div>
            </div>

          </div><!-- end card body -->
        </div><!-- end card -->
      </div><!-- end col -->

    </div>
    <div class="row">
      <div class="col-xl-8">
        <!-- card -->
        <div class="card border-none">
          <!-- card body -->
          <div class="card-body">
            <div class="d-flex flex-wrap align-items-center mb-4">
              <h5 class="card-title me-2">Funnel</h5>
              <div class="ms-auto">
                <div>
                <div class="mb-3">
                <select class="form-select">
                  <option>Master Pipeline</option>
                  <option>Large select</option>
                  <option>Small select</option>
                </select>
              </div>
                </div>
              </div>
            </div>

            <div class="row align-items-center">
              <div class="col-xl-12">
                <div>
                  <div id="line_chart_datalabel" data-colors='["#5156be", "#2ab57d"]' class="apex-charts" dir="ltr"></div>
                </div>
              </div>

            </div>
          </div>
          <!-- end card -->
        </div>
        <!-- end col -->
      </div>
      <!-- end row-->

      <div class="col-xl-4">
        <!-- card -->
        <div class="card border-none">
          <!-- card body -->
          <div class="card-body">
            <div class="d-flex flex-wrap align-items-center mb-4 justify-content-between">
              <h5 class="card-title me-2">Stages Distribution</h5>
              <div class="mb-3">
                <select class="form-select">
                  <option>Master Pipeline</option>
                  <option>Large select</option>
                  <option>Small select</option>
                </select>
              </div>
            </div>

            <div id="column_chart_datalabel" data-colors='["#5156be"]' class="apex-charts" dir="ltr"></div>


          </div>
          <!-- end card body -->
        </div>
        <!-- end card -->
      </div>
      <!-- end col -->
    </div>
    <!-- end row-->
    <div class="modal fade" id="campaign" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">Cancel Appointment</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>
              Are you sure want to cancel this appointment?
            </p>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save</button>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-xl-12">

        <div class="card border-none">
          <div class="card-header align-items-center py-2 border-none">
            <div class="row">
              <div class="col-md-10 col-10">
                <h4 class="card-title mb-0 mt-head">Today's Appointments</h4>
              </div>
              <div class="col-md-2 col-2">
                <!-- <a href="#" class="btn btn-primary px-5 float-end">Add</a> -->
              </div>
            </div>
          </div>
          <!-- end card header -->

          <div class="card-body">
            <div class="table-responsive">
              <table id="table" class="table table-bordered table-intel">
                <thead>
                  <tr class="table-info">
                    <th>Name</th>
                    <th>Email</th>
                    <th>Gender</th>
                    <th>Time</th>
                    <th>Date</th>
                    <th>Phone Number</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      <div class="mx-auto mb-4 display-inline">
                        <img src="assets/images/users/avatar-2.jpg" alt="" class="avatar-md rounded-circle img-thumbnail">
                      </div>
                      Jhon doe

                    </td>
                    <td>
                      abc@gmail.com
                    </td>
                    <td>Female</td>
                    <td>10:00 AM</td>
                    <td>10/04/2022</td>
                    <td>(423) 323-44545</td>
                    <td>
                      <div class="dropdown text-center">
                        <a class="text-muted dropdown-toggle font-size-16" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                          <i class="bx bx-dots-horizontal-rounded"></i>
                        </a>

                        <div class="dropdown-menu dropdown-menu-end">
                          <a class="dropdown-item" href="view_patient.php">View</a>
                          <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#campaign">Cancel Appointment</a>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="mx-auto mb-4 display-inline">
                        <img src="assets/images/users/avatar-2.jpg" alt="" class="avatar-md rounded-circle img-thumbnail">
                      </div>
                      Mark loi

                    </td>
                    <td>
                      abc@gmail.com
                    </td>
                    <td>Female</td>
                    <td>10:00 AM</td>
                    <td>10/04/2022</td>
                    <td>(423) 323-44545</td>
                    <td>
                      <div class="dropdown text-center">
                        <a class="text-muted dropdown-toggle font-size-16" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                          <i class="bx bx-dots-horizontal-rounded"></i>
                        </a>

                        <div class="dropdown-menu dropdown-menu-end">
                          <a class="dropdown-item" href="view_patient.php">View</a>
                          <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#campaign">Cancel Appointment</a>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="mx-auto mb-4 display-inline">
                        <img src="assets/images/users/avatar-2.jpg" alt="" class="avatar-md rounded-circle img-thumbnail">
                      </div>
                      Will law

                    </td>
                    <td>
                      abc@gmail.com
                    </td>
                    <td>Female</td>
                    <td>10:00 AM</td>
                    <td>10/04/2022</td>
                    <td>(423) 323-44545</td>
                    <td>
                      <div class="dropdown text-center">
                        <a class="text-muted dropdown-toggle font-size-16" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                          <i class="bx bx-dots-horizontal-rounded"></i>
                        </a>

                        <div class="dropdown-menu dropdown-menu-end">
                          <a class="dropdown-item" href="view_patient.php">View</a>
                          <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#campaign">Cancel Appointment</a>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="mx-auto mb-4 display-inline">
                        <img src="assets/images/users/avatar-2.jpg" alt="" class="avatar-md rounded-circle img-thumbnail">
                      </div>
                      Hannah grace
                    </td>
                    <td>
                      abc@gmail.com
                    </td>
                    <td>Female</td>
                    <td>10:00 AM</td>
                    <td>10/04/2022</td>
                    <td>(423) 323-44545</td>
                    <td>
                      <div class="dropdown text-center">
                        <a class="text-muted dropdown-toggle font-size-16" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                          <i class="bx bx-dots-horizontal-rounded"></i>
                        </a>

                        <div class="dropdown-menu dropdown-menu-end">
                          <a class="dropdown-item" href="view_patient.php">View</a>
                          <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#campaign">Cancel Appointment</a>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="mx-auto mb-4 display-inline">
                        <img src="assets/images/users/avatar-2.jpg" alt="" class="avatar-md rounded-circle img-thumbnail">
                      </div>
                      Aliza joe

                    </td>
                    <td>
                      abc@gmail.com
                    </td>
                    <td>Female</td>
                    <td>10:00 AM</td>
                    <td>10/04/2022</td>
                    <td>(423) 323-44545</td>
                    <td>
                      <div class="dropdown text-center">
                        <a class="text-muted dropdown-toggle font-size-16" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                          <i class="bx bx-dots-horizontal-rounded"></i>
                        </a>

                        <div class="dropdown-menu dropdown-menu-end">
                          <a class="dropdown-item" href="view_patient.php">View</a>
                          <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#campaign">Cancel Appointment</a>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="mx-auto mb-4 display-inline">
                        <img src="assets/images/users/avatar-2.jpg" alt="" class="avatar-md rounded-circle img-thumbnail">
                      </div>
                      Nina williams

                    </td>
                    <td>
                      abc@gmail.com
                    </td>
                    <td>Female</td>
                    <td>10:00 AM</td>
                    <td>10/04/2022</td>
                    <td>(423) 323-44545</td>
                    <td>
                      <div class="dropdown text-center">
                        <a class="text-muted dropdown-toggle font-size-16" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                          <i class="bx bx-dots-horizontal-rounded"></i>
                        </a>

                        <div class="dropdown-menu dropdown-menu-end">
                          <a class="dropdown-item" href="view_patient.php">View</a>
                          <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#campaign">Cancel Appointment</a>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="mx-auto mb-4 display-inline">
                        <img src="assets/images/users/avatar-2.jpg" alt="" class="avatar-md rounded-circle img-thumbnail">
                      </div>
                      Sara bay

                    </td>
                    <td>
                      abc@gmail.com
                    </td>
                    <td>Female</td>
                    <td>10:00 AM</td>
                    <td>10/04/2022</td>
                    <td>(423) 323-44545</td>
                    <td>
                      <div class="dropdown text-center">
                        <a class="text-muted dropdown-toggle font-size-16" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                          <i class="bx bx-dots-horizontal-rounded"></i>
                        </a>

                        <div class="dropdown-menu dropdown-menu-end">
                          <a class="dropdown-item" href="view_patient.php">View</a>
                          <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#campaign">Cancel Appointment</a>
                        </div>
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>

          </div>
          <!-- end card body -->
        </div>
      </div>
      <!-- end col -->


      <!-- end col -->
    </div><!-- end row -->
  </div>
  <!-- container-fluid -->
</div>

<?php require_once("footer.php") ?>