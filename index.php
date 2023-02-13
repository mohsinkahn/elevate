<?php require_once("header.php") ?>

<div class="page-content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-xl-4 col-md-6">
        <!-- card -->
        <div class="card card-h-100 box-shadow">
          <!-- card body -->
          <div class="card-body pb-0">
            <div class="row align-items-center">
              <div class="col-6">
                <span class="text-muted mb-3 lh-1 d-block text-truncate">All Opportunities</span>
                <h4 class="mb-3">
                  <span>863</span>
                </h4>
              </div>

              <div class="col-6">
                <div class="icon bg-1">
                  <i class="mdi mdi-lightbulb-on-outline"></i>
                </div>
              </div>
            </div>
            <div class="text-nowrap d-flex justify-content-between mb-2 text-center">
              <div>
              <span class="ms-1 green-text">Won</span>
              <p class="text-dark">09</p>
              </div>
              <div>
              <span class="ms-1 green-text">Open</span>
              <p class="text-dark">34</p>  
              </div>
              <div>
              <span class="ms-1 gray-text">Lost</span>
              <p class="text-dark">40</p>  
              </div>
            </div>
            
          </div><!-- end card body -->
        </div><!-- end card -->
      </div><!-- end col -->

      <div class="col-xl-4 col-md-6">
        <!-- card -->
        <div class="card card-h-100 box-shadow">
          <!-- card body -->
          <div class="card-body pb-0">
            <div class="row align-items-center">
              <div class="col-6">
                <span class="text-muted mb-3 lh-1 d-block text-truncate">Pipeline Value</span>
                <h4 class="mb-3">
                  <span>$6258</span>
                </h4>
              </div>
              <div class="col-6">
                <div class="icon bg-2">
                  <i class="mdi mdi-filter"></i>
                </div>
              </div>
            </div>
            <div class="text-nowrap d-flex justify-content-between mb-2 text-center">
              <div>
              <span class="ms-1 green-text">Won</span>
              <p class="text-dark">$89</p>
              </div>
              <div>
              <span class="ms-1 green-text">Open</span>
              <p class="text-dark">$34</p>  
              </div>
              <div>
              <span class="ms-1 gray-text">Lost</span>
              <p class="text-dark">$40</p>  
              </div>
            </div>
          </div><!-- end card body -->
        </div><!-- end card -->
      </div><!-- end col-->

      <div class="col-xl-4 col-md-6">
        <!-- card -->
        <div class="card card-h-100 box-shadow">
          <!-- card body -->
          <div class="card-body pb-0">
            <div class="row align-items-center">
              <div class="col-6">
                <span class="text-muted mb-3 lh-1 d-block text-truncate">Conversion Rate</span>
                <h4 class="mb-3">
                  <span>4.45%</span>
                </h4>
              </div>
              <div class="col-6">
                <div class="icon bg-3">
                  <i class="mdi mdi-finance"></i>
                </div>
              </div>
            </div>

          </div><!-- end card body -->
        </div><!-- end card -->
      </div><!-- end col -->

    </div>
    <div class="row">
      <div class="col-xl-6">
        <!-- card -->
        <div class="card">
          <!-- card body -->
          <div class="card-header pb-1">
          <div class="d-flex flex-wrap align-items-center">
              <h5 class="card-title me-2">Funnel</h5>
              <div class="ms-auto">
                <div>
                  <div class="mb-3">
                  <select class="form-select">
                    <option>Master Pipeline</option>
                    <option>In House</option>
                    <option>Coordinator Pipeline</option>
                  </select>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card-body">
            

            <div class="row align-items-center">
              <div class="col-xl-12">
                <div>
                  <!-- <div id="line_chart_datalabel" data-colors='["#5156be", "#2ab57d"]' class="apex-charts" dir="ltr"></div> -->
                  <div id="chartContainer" style="height: 370px; width: 100%;"></div>

                </div>
              </div>

            </div>
          </div>
          <!-- end card -->
        </div>
        <!-- end col -->
      </div>
      <!-- end row-->

      <div class="col-xl-6">
        <!-- card -->
        <div class="card">
          <!-- card body -->
          <div class="card-header pb-1">
          <div class="d-flex flex-wrap align-items-center">
              <h5 class="card-title me-2">Stages Distribution</h5>
              <div class="ms-auto">
                <div>
                  <div class="mb-3">
                  <select class="form-select">
                    <option>Master Pipeline</option>
                    <option>In House</option>
                    <option>Coordinator Pipeline</option>
                  </select>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card-body">
          
            <!-- <div id="column_chart_datalabel" data-colors='["#5156be"]' class="apex-charts" dir="ltr"></div> -->
           
            <div id="pie_chart" data-colors='["#2ab57d", "#5156be", "#fd625e", "#4ba6ef", "#ffbf53"]' class="apex-charts" dir="ltr"></div>

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

        <div class="card">
          <div class="card-header align-items-center py-2">
            <div class="row">
              <div class="col-md-10 col-10">
                <h4 class="card-title  mt-head">Lead Source Report</h4>
              </div>
              <div class="col-md-2 col-2">
                <!-- <a href="#" class="btn btn-primary px-5 float-end">Add</a> -->
              </div>
            </div>
          </div>
          <!-- end card header -->

          <div class="card-body">
            <div class="table-responsive">
              <table class="table align-middle datatable dt-responsive table-check nowrap" style="border-collapse: collapse; border-spacing: 0 8px; width: 100%;">
                <thead>
                  <tr>

                    <th scope="col">Source</th>
                    <th scope="col">Total Leads</th>
                    <th scope="col">Total Values</th>
                    <th scope="col">Open</th>
                    <th scope="col">Lost</th>
                    <th style="width: 80px; min-width: 80px;">Win %</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>

                    <td>
                      <a href="#" class="text-body">Facebook</a>
                    </td>
                    <td>4</td>
                    <td>$0.00</td>
                    <td>
                      2
                    </td>
                    <td>
                      3
                    </td>
                    <td>
                      7
                    </td>
                  </tr>
                  <tr>

                    <td>
                      <a href="#" class="text-body">In-house</a>
                    </td>
                    <td>4</td>
                    <td>$0.00</td>
                    <td>
                      2
                    </td>
                    <td>
                      3
                    </td>
                    <td>
                      7
                    </td>
                  </tr>
                  <tr>

                    <td>
                      <a href="#" class="text-body">Web Chat</a>
                    </td>
                    <td>4</td>
                    <td>$0.00</td>
                    <td>
                      2
                    </td>
                    <td>
                      3
                    </td>
                    <td>
                      7
                    </td>
                  </tr>


                </tbody>
              </table>
            </div>

          </div>
          <!-- end card body -->
        </div>
      </div>
      <div class="col-xl-12">
        <div class="card">
          <div class="card-header pb-1">
            <div class="row">
              <div class="col-md-4 col-12">
                <h4 class="card-title  mt-head">Tasks</h4>
              </div>
              <div class="col-md-4 col-12">
                <select class="form-select mb-3">
                  <option> Pending</option>
                  <option>Completed</option>
                  <option>New</option>
                </select>
              </div>
              <div class="col-md-4 col-12">
              <a href="#" class="btn btn-primary px-3 float-end mb-3 mar-left" data-bs-toggle="modal" data-bs-target="#task">Add Task</a>
              </div>
            </div>
          </div>
          <div class="card-body currentcamp-overflow">
            <div class="list-group list-group-flush">
              <div class="list-group-item list-group-item-action px-0">
                <div class="d-flex align-items-center">
                  <div class="flex-shrink-0 me-3">
                    <input type="checkbox">
                  </div>
                  <div class="flex-grow-1">
                    <div>
                      <div class="row">
                        <div class="col-md-6">
                          <h5 class="font-size-14 mb-1">Welcome</h5>
                        </div>
                        <div class="col-md-6 ">
                          <p class="text-right">2 min ago</p>
                        </div>
                      </div>
                      <p class="font-size-13 text-muted mb-0">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore quidem dolor vel nisi est mollitia excepturi debitis suscipit dicta. Voluptatibus saepe incidunt nihil dignissimos eveniet molestiae sit, magni tenetur ea.

                      </p>
                      <div class="row mt-4">
                        <div class="col-md-3">
                          <p style="font-size:10px">
                            Contact: <b style="color:black">Phyllis Gatlin</b>
                          </p>
                        </div>
                        <div class="col-md-3">
                          <p style="font-size:10px">
                            Assigned:<b style="color:black">Laura</b>
                          </p>
                        </div>
                        <div class="col-md-4">
                          <p style="font-size:10px">
                            Due: <b style="color:black">12/02/2022,(5:00pm)</b>
                          </p>
                        </div>
                        <div class="col-md-2">

                          <a href="#">
                            <i class="mdi mdi-content-save-edit"></i>
                          </a>
                          <a href="#">
                            <i class="mdi mdi-delete"></i>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>
              </div>
              <div class="list-group-item list-group-item-action px-0">
                <div class="d-flex align-items-center">
                  <div class="flex-shrink-0 me-3">
                    <input type="checkbox">
                  </div>
                  <div class="flex-grow-1">
                    <div>
                      <div class="row">
                        <div class="col-md-6">
                          <h5 class="font-size-14 mb-1">Welcome</h5>
                        </div>
                        <div class="col-md-6 ">
                          <p class="text-right">2 min ago</p>
                        </div>
                      </div>
                      <p class="font-size-13 text-muted mb-0">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore quidem dolor vel nisi est mollitia excepturi debitis suscipit dicta. Voluptatibus saepe incidunt nihil dignissimos eveniet molestiae sit, magni tenetur ea.

                      </p>
                      <div class="row mt-4">
                        <div class="col-md-3">
                          <p style="font-size:10px">
                            Contact: <b style="color:black">Phyllis Gatlin</b>
                          </p>
                        </div>
                        <div class="col-md-3">
                          <p style="font-size:10px">
                            Assigned:<b style="color:black">Laura</b>
                          </p>
                        </div>
                        <div class="col-md-4">
                          <p style="font-size:10px">
                            Due: <b style="color:black">12/02/2022,(5:00pm)</b>
                          </p>
                        </div>
                        <div class="col-md-2">

                          <a href="#">
                            <i class="mdi mdi-content-save-edit"></i>
                          </a>
                          <a href="#">
                            <i class="mdi mdi-delete"></i>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>
              </div>
              <div class="list-group-item list-group-item-action px-0">
                <div class="d-flex align-items-center">
                  <div class="flex-shrink-0 me-3">
                    <input type="checkbox">
                  </div>
                  <div class="flex-grow-1">
                    <div>
                      <div class="row">
                        <div class="col-md-6">
                          <h5 class="font-size-14 mb-1">Welcome</h5>
                        </div>
                        <div class="col-md-6 ">
                          <p class="text-right">2 min ago</p>
                        </div>
                      </div>
                      <p class="font-size-13 text-muted mb-0">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore quidem dolor vel nisi est mollitia excepturi debitis suscipit dicta. Voluptatibus saepe incidunt nihil dignissimos eveniet molestiae sit, magni tenetur ea.

                      </p>
                      <div class="row mt-4">
                        <div class="col-md-3">
                          <p style="font-size:10px">
                            Contact: <b style="color:black">Phyllis Gatlin</b>
                          </p>
                        </div>
                        <div class="col-md-3">
                          <p style="font-size:10px">
                            Assigned:<b style="color:black">Laura</b>
                          </p>
                        </div>
                        <div class="col-md-4">
                          <p style="font-size:10px">
                            Due: <b style="color:black">12/02/2022,(5:00pm)</b>
                          </p>
                        </div>
                        <div class="col-md-2">

                          <a href="#">
                            <i class="mdi mdi-content-save-edit"></i>
                          </a>
                          <a href="#">
                            <i class="mdi mdi-delete"></i>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>
              </div>
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
<script>
window.onload = function () {

var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	theme: "light2", //"light1", "dark1", "dark2"
	title:{
		text: "Sales Analysis - June 2016"
	},
	data: [{
		type: "funnel",
		indexLabelPlacement: "inside",
		indexLabelFontColor: "white",
		toolTipContent: "<b>{label}</b>: {y} <b>({percentage}%)</b>",
		indexLabel: "{label} ({percentage}%)",
		dataPoints: [
			{ y: 1400, label: "Leads" },
			{ y: 1212, label: "Initial Communication" },
			{ y: 1080, label: "Customer Evaluation" },
			{ y: 665,  label: "Negotiation" },
			{ y: 578, label: "Order Received" },
			{ y: 549, label: "Payment" }
		]
	}]
});
calculatePercentage();
chart.render();

function calculatePercentage() {
	var dataPoint = chart.options.data[0].dataPoints;
	var total = dataPoint[0].y;
	for(var i = 0; i < dataPoint.length; i++) {
		if(i == 0) {
			chart.options.data[0].dataPoints[i].percentage = 100;
		} else {
			chart.options.data[0].dataPoints[i].percentage = ((dataPoint[i].y / total) * 100).toFixed(2);
		}
	}
}

}
</script>
<!-- task modal -->
<div class="modal fade" id="task" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Add Task</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body ">
                <form class="needs-validation" name="event-form" id="form-event" novalidate="">
                <div class="row form-group mt-3">
                      <div class="col-md-12">
                      <div class="form-floating mb-3 ">
                          <input type="email" class="form-control" id="floatingInput" placeholder="task title">
                          <label for="floatingInput">Task Title</label>
                        </div>
                      </div>
                      <div class="col-md-12">
                      <div class="form-floating mb-3 ">
                          <input type="email" class="form-control" id="floatingInput" placeholder="description">
                          <label for="floatingInput">Description</label>
                        </div>
                      </div>
                    </div>
                    <div class="row form-group mt-3">
                      <div class="col-md-6">
                        <select class=" form-select" style="height: 58px;">
                          <option>Not Assigned</option>
                          <option>John Dea</option>
                          <option>Albert Henry</option>
                        </select>
                        
                      </div>
                      <div class="col-md-6">
                      <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="floatingInput" placeholder="Dob" onclick="this.type='date'">
                                <label for="floatingInput">Date</label>
                            </div>
                        
                      </div>

                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save</button>
            </div>
        </div>
    </div>
</div>
<script src="assets/js/pages/dashboard.init.js"></script>

<?php require_once("footer.php") ?>