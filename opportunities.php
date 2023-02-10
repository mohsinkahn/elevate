<?php require_once("header.php") ?>

<style>
  /* body.dragging,
    body.dragging * {
        cursor: move !important;
    } */

  .dragged {
    position: absolute;
    opacity: 0.5;
    z-index: 2000;
  }

  ol.example li.placeholder {
    position: relative;
    /** More li styles **/
  }

  ol.example li.placeholder:before {
    position: absolute;
    /** Define arrowhead **/
  }

  /* ol .highlight{
        animation: blink;
    animation-duration: 1.5s;
    animation-iteration-count:infinite;
    }
    @keyframes blink{
  0%{transform:scale(1);}
  50%{transform:scale(0.95);}
  100%{transform:scale(1);}
} */
  ol .highlight {
    border: 1px solid #ccc;
    margin-top: 12px;
    padding: 12px;

  }

  .bg-one {
    background-color: #5AD111;
  }

  .bg-two {
    background-color: #158CCF;
  }

  .bg-three {
    background-color: gray;
  }

  .bg-four {
    background-color: gainsboro;
  }

  .bg-five {
    background-color: darkgreen;
  }

  .one .highlight {
    border-radius: 4PX;
    border-left: 5px solid #5AD111;
  }

  .two .highlight {
    border-left: 5px solid #158CCF;
    border-radius: 4PX;
  }

  .three .highlight {
    border-left: 5px solid gray;
    border-radius: 4PX;
  }

  .four .highlight {
    border-left: 5px solid gainsboro;
    border-radius: 4PX;
  }

  .five .highlight {
    border-left: 5px solid darkgreen;
    border-radius: 4PX;
  }


  ol {
    list-style: none;
    padding: 13px;
  }

  ol .highlight:hover {
    transform: scale(1);
    transition: transform .5s;
  }

  .over {
    overflow-x: scroll;
  }

  .over .d-flex {
    gap: 8px;
  }

  .over .col-md-4 {
    border: 1px solid #ccc;
    /* padding: 15px; */
    border-radius: 4px;
  }

  .nav-link.active {
    background-color: transparent !important;
  }

  .flex-shrink-0 {
    /* border:2px solid red !important; */
    padding-left: 10px !important;
  }

  .ml-5 {
    margin-left: -10px;
  }

  .taskText {
    height: 160px !important;
  }
</style>


<div class="page-content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-xl-12">
        <div class="card border-none">
          <div class="card-header align-items-center py-2 border-none">
            <div class="row">
              <div class="col-md-3 col-10">
                <h4 class="card-title mb-0 mt-head">Opportunities</h4>
              </div>
              <div class="col-md-2">
                <div class="mb-3">
                  <select class="form-select">
                    <option>Master Pipeline</option>
                    <option>In House</option>
                    <option>Coordinator Pipeline</option>
                  </select>
                </div>
              </div>
              <div class="col-md-2">
                <div class="mb-3">
                  <select class="form-select">
                    <option>Owner</option>
                    <option>Laura williams</option>
                    <option>Mike Shinoda</option>
                  </select>
                </div>
              </div>
              <div class="col-md-2">
                <div class="mb-3">
                  <select class="form-select">
                    <option>Open</option>
                    <option>Won</option>
                    <option>Lost</option>
                    <option value="">Abandoned</option>
                  </select>
                </div>
              </div>
              <div class="col-md-3 col-2">
                <a href="#" class="btn btn-primary px-4" data-bs-toggle="modal" data-bs-target="#opportunity">Add Lead</a>
                <a href="#" class="btn btn-primary px-4 mx-2" data-bs-toggle="modal" data-bs-target="#pipe">Add Pipeline</a>
              </div>
            </div>
          </div>
          <!-- end card header -->

          <!-- Kanban Board  - Body -->

          <div class="card-body">
            <div class="over">
              <div class="d-flex">
                <div class="col-md-4">
                  <div class="upper-head">
                    <div class="inner">
                      <div>
                        <span class="mt-5 bg-one inner-icon">
                          <i class="mdi mdi-check-all"></i>
                        </span>
                      </div>
                      <div style="flex:1">
                        <div class="d-flex justify-content-between w-100">
                          <div>
                          <h6>Lead In</h6>
                          </div>
                          <div>
                            <a href="#" data-bs-toggle="modal" data-bs-target="#stage">
                              <i class="mdi mdi-pencil"></i>
                              </a>
                          </div>
                        </div>
                        
                        <p>0 Lead <span class="color-green">$0.00</span></p>
                      </div>
                    </div>
                  </div>
                  <ol class="simple_with_animation vertical one">
                    <li class="highlight">
                      <div class="d-flex" style="width:100%;">
                        <div>
                          <h4>Maria Jardines</h4>
                        </div>
                        <div>
                          <!-- <span class="badge rounded-pill bg-warning">Won</span> -->
                          <!-- <span class="badge rounded-pill bg-danger">Lost</span> -->
                          <span class="badge rounded-pill bg-info">Open</span>
                        </div>
                        <div style="flex:1;text-align:right;">
                          <div class="dropdown">
                            <button class="btn btn-link font-size-16 shadow-none py-0 text-muted dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                              <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end">
                              <li><a class="dropdown-item" href="#"> Open</a></li>
                              <li><a class="dropdown-item" href="#"> Lost</a></li>
                              <li><a class="dropdown-item" href="#"> Won</a></li>
                              <li><a class="dropdown-item" href="#"> Abandoned</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>

                      <p>Facebook</p>
                      <a href="#" class="badge badge-soft-primary font-size-11">Facebook</a>
                      <a href="#" class="badge badge-soft-primary font-size-11">Tms</a>
                      <a href="#" class="badge badge-soft-primary font-size-11">External</a>
                      <div class="row mt-3">
                        <div class="col-md-6">
                          <a href="view_contact.php" class="btn btn-primary">
                            <i class="mdi mdi-comment"></i>
                          </a>
                          <a href="#" class="btn btn-primary">
                            <i class="mdi mdi-phone"></i>
                          </a>
                        </div>
                        <div class="col-md-6 text-right">
                          <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#opportunity-edit">
                            <i class="fa fa-plus"></i> Task
                          </a>
                        </div>
                      </div>

                    </li>
                    <li class="highlight">
                    <div class="d-flex" style="width:100%;">
                        <div>
                          <h4>Maria Jardines</h4>
                        </div>
                        <div>
                          <!-- <span class="badge rounded-pill bg-warning">Won</span> -->
                          <!-- <span class="badge rounded-pill bg-danger">Lost</span> -->
                          <span class="badge rounded-pill bg-info">Open</span>
                        </div>
                        <div style="flex:1;text-align:right;">
                          <div class="dropdown">
                            <button class="btn btn-link font-size-16 shadow-none py-0 text-muted dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                              <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end">
                              <li><a class="dropdown-item" href="#"> Open</a></li>
                              <li><a class="dropdown-item" href="#"> Lost</a></li>
                              <li><a class="dropdown-item" href="#"> Won</a></li>
                              <li><a class="dropdown-item" href="#"> Abandoned</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                      <p>Facebook</p>
                      <a href="#" class="badge badge-soft-primary font-size-11">Facebook</a>
                      <a href="#" class="badge badge-soft-primary font-size-11">Tms</a>
                      <a href="#" class="badge badge-soft-primary font-size-11">External</a>
                      <div class="row mt-3">
                        <div class="col-md-6">
                          <a href="view_contact.php" class="btn btn-primary">
                            <i class="mdi mdi-comment"></i>
                          </a>
                          <a href="#" class="btn btn-primary">
                            <i class="mdi mdi-phone"></i>
                          </a>
                        </div>
                        <div class="col-md-6 text-right">
                          <a href="#" class="btn btn-primary">
                            <i class="fa fa-plus"></i> Task
                          </a>
                        </div>
                      </div>
                    </li>
                    <li class="highlight">
                    <div class="d-flex" style="width:100%;">
                        <div>
                          <h4>Maria Jardines</h4>
                        </div>
                        <div>
                          <!-- <span class="badge rounded-pill bg-warning">Won</span> -->
                          <!-- <span class="badge rounded-pill bg-danger">Lost</span> -->
                          <span class="badge rounded-pill bg-info">Open</span>
                        </div>
                        <div style="flex:1;text-align:right;">
                          <div class="dropdown">
                            <button class="btn btn-link font-size-16 shadow-none py-0 text-muted dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                              <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end">
                              <li><a class="dropdown-item" href="#"> Open</a></li>
                              <li><a class="dropdown-item" href="#"> Lost</a></li>
                              <li><a class="dropdown-item" href="#"> Won</a></li>
                              <li><a class="dropdown-item" href="#"> Abandoned</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                      <p>Facebook</p>
                      <a href="#" class="badge badge-soft-primary font-size-11">Facebook</a>
                      <a href="#" class="badge badge-soft-primary font-size-11">Tms</a>
                      <a href="#" class="badge badge-soft-primary font-size-11">External</a>
                      <div class="row mt-3">
                        <div class="col-md-6">
                          <a href="view_contact.php" class="btn btn-primary">
                            <i class="mdi mdi-comment"></i>
                          </a>
                          <a href="#" class="btn btn-primary">
                            <i class="mdi mdi-phone"></i>
                          </a>
                        </div>
                        <div class="col-md-6 text-right">
                          <a href="#" class="btn btn-primary">
                            <i class="fa fa-plus"></i> Task
                          </a>
                        </div>
                      </div>

                    </li>

                    <li class="highlight">
                    <div class="d-flex" style="width:100%;">
                        <div>
                          <h4>Maria Jardines</h4>
                        </div>
                        <div>
                          <!-- <span class="badge rounded-pill bg-warning">Won</span> -->
                          <!-- <span class="badge rounded-pill bg-danger">Lost</span> -->
                          <span class="badge rounded-pill bg-info">Open</span>
                        </div>
                        <div style="flex:1;text-align:right;">
                          <div class="dropdown">
                            <button class="btn btn-link font-size-16 shadow-none py-0 text-muted dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                              <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end">
                              <li><a class="dropdown-item" href="#"> Open</a></li>
                              <li><a class="dropdown-item" href="#"> Lost</a></li>
                              <li><a class="dropdown-item" href="#"> Won</a></li>
                              <li><a class="dropdown-item" href="#"> Abandoned</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                      <p>Facebook</p>
                      <a href="#" class="badge badge-soft-primary font-size-11">Facebook</a>
                      <a href="#" class="badge badge-soft-primary font-size-11">Tms</a>
                      <a href="#" class="badge badge-soft-primary font-size-11">External</a>
                      <div class="row mt-3">
                        <div class="col-md-6">
                          <a href="view_contact.php" class="btn btn-primary">
                            <i class="mdi mdi-comment"></i>
                          </a>
                          <a href="#" class="btn btn-primary">
                            <i class="mdi mdi-phone"></i>
                          </a>
                        </div>
                        <div class="col-md-6 text-right">
                          <a href="#" class="btn btn-primary">
                            <i class="fa fa-plus"></i> Task
                          </a>
                        </div>
                      </div>

                    </li>
                    <li class="highlight">
                    <div class="d-flex" style="width:100%;">
                        <div>
                          <h4>Maria Jardines</h4>
                        </div>
                        <div>
                          <!-- <span class="badge rounded-pill bg-warning">Won</span> -->
                          <!-- <span class="badge rounded-pill bg-danger">Lost</span> -->
                          <span class="badge rounded-pill bg-info">Open</span>
                        </div>
                        <div style="flex:1;text-align:right;">
                          <div class="dropdown">
                            <button class="btn btn-link font-size-16 shadow-none py-0 text-muted dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                              <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end">
                              <li><a class="dropdown-item" href="#"> Open</a></li>
                              <li><a class="dropdown-item" href="#"> Lost</a></li>
                              <li><a class="dropdown-item" href="#"> Won</a></li>
                              <li><a class="dropdown-item" href="#"> Abandoned</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                      <p>Facebook</p>
                      <a href="#" class="badge badge-soft-primary font-size-11">Facebook</a>
                      <a href="#" class="badge badge-soft-primary font-size-11">Tms</a>
                      <a href="#" class="badge badge-soft-primary font-size-11">External</a>
                      <div class="row mt-3">
                        <div class="col-md-6">
                          <a href="view_contact.php" class="btn btn-primary">
                            <i class="mdi mdi-comment"></i>
                          </a>
                          <a href="#" class="btn btn-primary">
                            <i class="mdi mdi-phone"></i>
                          </a>
                        </div>
                        <div class="col-md-6 text-right">
                          <a href="#" class="btn btn-primary">
                            <i class="fa fa-plus"></i> Task
                          </a>
                        </div>
                      </div>

                    </li>
                  </ol>
                </div>
                <div class="col-md-4">
                  <div class="upper-head">
                    <div class="inner">
                      <div>
                        <span class="mt-5 bg-two inner-icon">
                          <i class="mdi mdi-cellphone-message"></i>
                        </span>
                      </div>
                      <div style="flex:1">
                        <div class="d-flex justify-content-between w-100">
                          <div>
                          <h6>Texted Back</h6>
                          </div>
                          <div>
                            <a href="#">
                              <i class="mdi mdi-pencil"></i>
                              </a>
                          </div>
                        </div>
                        
                        <p>0 Lead <span class="color-green">$0.00</span></p>
                      </div>
                      
                    </div>
                  </div>
                  <ol class="simple_with_animation vertical two">
                    <li class="highlight">
                    <div class="d-flex" style="width:100%;">
                        <div>
                          <h4>Maria Jardines</h4>
                        </div>
                        <div>
                          <!-- <span class="badge rounded-pill bg-warning">Won</span> -->
                          <!-- <span class="badge rounded-pill bg-danger">Lost</span> -->
                          <span class="badge rounded-pill bg-info">Open</span>
                        </div>
                        <div style="flex:1;text-align:right;">
                          <div class="dropdown">
                            <button class="btn btn-link font-size-16 shadow-none py-0 text-muted dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                              <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end">
                              <li><a class="dropdown-item" href="#"> Open</a></li>
                              <li><a class="dropdown-item" href="#"> Lost</a></li>
                              <li><a class="dropdown-item" href="#"> Won</a></li>
                              <li><a class="dropdown-item" href="#"> Abandoned</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                      <p>Facebook</p>
                      <a href="#" class="badge badge-soft-primary font-size-11">Facebook</a>
                      <a href="#" class="badge badge-soft-primary font-size-11">Tms</a>
                      <a href="#" class="badge badge-soft-primary font-size-11">External</a>
                      <div class="row mt-3">
                        <div class="col-md-6">
                          <a href="view_contact.php" class="btn btn-primary">
                            <i class="mdi mdi-comment"></i>
                          </a>
                          <a href="#" class="btn btn-primary">
                            <i class="mdi mdi-phone"></i>
                          </a>
                        </div>
                        <div class="col-md-6 text-right">
                          <a href="#" class="btn btn-primary">
                            <i class="fa fa-plus"></i> Task
                          </a>
                        </div>
                      </div>

                    </li>
                    <li class="highlight">
                    <div class="d-flex" style="width:100%;">
                        <div>
                          <h4>Maria Jardines</h4>
                        </div>
                        <div>
                          <!-- <span class="badge rounded-pill bg-warning">Won</span> -->
                          <!-- <span class="badge rounded-pill bg-danger">Lost</span> -->
                          <span class="badge rounded-pill bg-info">Open</span>
                        </div>
                        <div style="flex:1;text-align:right;">
                          <div class="dropdown">
                            <button class="btn btn-link font-size-16 shadow-none py-0 text-muted dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                              <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end">
                              <li><a class="dropdown-item" href="#"> Open</a></li>
                              <li><a class="dropdown-item" href="#"> Lost</a></li>
                              <li><a class="dropdown-item" href="#"> Won</a></li>
                              <li><a class="dropdown-item" href="#"> Abandoned</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                      <p>Facebook</p>
                      <a href="#" class="badge badge-soft-primary font-size-11">Facebook</a>
                      <a href="#" class="badge badge-soft-primary font-size-11">Tms</a>
                      <a href="#" class="badge badge-soft-primary font-size-11">External</a>
                      <div class="row mt-3">
                        <div class="col-md-6">
                          <a href="view_contact.php" class="btn btn-primary">
                            <i class="mdi mdi-comment"></i>
                          </a>
                          <a href="#" class="btn btn-primary">
                            <i class="mdi mdi-phone"></i>
                          </a>
                        </div>
                        <div class="col-md-6 text-right">
                          <a href="#" class="btn btn-primary">
                            <i class="fa fa-plus"></i> Task
                          </a>
                        </div>
                      </div>

                    </li>
                    <li class="highlight">
                    <div class="d-flex" style="width:100%;">
                        <div>
                          <h4>Maria Jardines</h4>
                        </div>
                        <div>
                          <!-- <span class="badge rounded-pill bg-warning">Won</span> -->
                          <!-- <span class="badge rounded-pill bg-danger">Lost</span> -->
                          <span class="badge rounded-pill bg-info">Open</span>
                        </div>
                        <div style="flex:1;text-align:right;">
                          <div class="dropdown">
                            <button class="btn btn-link font-size-16 shadow-none py-0 text-muted dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                              <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end">
                              <li><a class="dropdown-item" href="#"> Open</a></li>
                              <li><a class="dropdown-item" href="#"> Lost</a></li>
                              <li><a class="dropdown-item" href="#"> Won</a></li>
                              <li><a class="dropdown-item" href="#"> Abandoned</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                      <p>Facebook</p>
                      <a href="#" class="badge badge-soft-primary font-size-11">Facebook</a>
                      <a href="#" class="badge badge-soft-primary font-size-11">Tms</a>
                      <a href="#" class="badge badge-soft-primary font-size-11">External</a>
                      <div class="row mt-3">
                        <div class="col-md-6">
                          <a href="view_contact.php" class="btn btn-primary">
                            <i class="mdi mdi-comment"></i>
                          </a>
                          <a href="#" class="btn btn-primary">
                            <i class="mdi mdi-phone"></i>
                          </a>
                        </div>
                        <div class="col-md-6 text-right">
                          <a href="#" class="btn btn-primary">
                            <i class="fa fa-plus"></i> Task
                          </a>
                        </div>
                      </div>

                    </li>

                    <li class="highlight">
                    <div class="d-flex" style="width:100%;">
                        <div>
                          <h4>Maria Jardines</h4>
                        </div>
                        <div>
                          <!-- <span class="badge rounded-pill bg-warning">Won</span> -->
                          <!-- <span class="badge rounded-pill bg-danger">Lost</span> -->
                          <span class="badge rounded-pill bg-info">Open</span>
                        </div>
                        <div style="flex:1;text-align:right;">
                          <div class="dropdown">
                            <button class="btn btn-link font-size-16 shadow-none py-0 text-muted dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                              <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end">
                              <li><a class="dropdown-item" href="#"> Open</a></li>
                              <li><a class="dropdown-item" href="#"> Lost</a></li>
                              <li><a class="dropdown-item" href="#"> Won</a></li>
                              <li><a class="dropdown-item" href="#"> Abandoned</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                      <p>Facebook</p>
                      <a href="#" class="badge badge-soft-primary font-size-11">Facebook</a>
                      <a href="#" class="badge badge-soft-primary font-size-11">Tms</a>
                      <a href="#" class="badge badge-soft-primary font-size-11">External</a>
                      <div class="row mt-3">
                        <div class="col-md-6">
                          <a href="view_contact.php" class="btn btn-primary">
                            <i class="mdi mdi-comment"></i>
                          </a>
                          <a href="#" class="btn btn-primary">
                            <i class="mdi mdi-phone"></i>
                          </a>
                        </div>
                        <div class="col-md-6 text-right">
                          <a href="#" class="btn btn-primary">
                            <i class="fa fa-plus"></i> Task
                          </a>
                        </div>
                      </div>

                    </li>
                    <li class="highlight">
                    <div class="d-flex" style="width:100%;">
                        <div>
                          <h4>Maria Jardines</h4>
                        </div>
                        <div>
                          <!-- <span class="badge rounded-pill bg-warning">Won</span> -->
                          <!-- <span class="badge rounded-pill bg-danger">Lost</span> -->
                          <span class="badge rounded-pill bg-info">Open</span>
                        </div>
                        <div style="flex:1;text-align:right;">
                          <div class="dropdown">
                            <button class="btn btn-link font-size-16 shadow-none py-0 text-muted dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                              <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end">
                              <li><a class="dropdown-item" href="#"> Open</a></li>
                              <li><a class="dropdown-item" href="#"> Lost</a></li>
                              <li><a class="dropdown-item" href="#"> Won</a></li>
                              <li><a class="dropdown-item" href="#"> Abandoned</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                      <p>Facebook</p>
                      <a href="#" class="badge badge-soft-primary font-size-11">Facebook</a>
                      <a href="#" class="badge badge-soft-primary font-size-11">Tms</a>
                      <a href="#" class="badge badge-soft-primary font-size-11">External</a>
                      <div class="row mt-3">
                        <div class="col-md-6">
                          <a href="view_contact.php" class="btn btn-primary">
                            <i class="mdi mdi-comment"></i>
                          </a>
                          <a href="#" class="btn btn-primary">
                            <i class="mdi mdi-phone"></i>
                          </a>
                        </div>
                        <div class="col-md-6 text-right">
                          <a href="#" class="btn btn-primary">
                            <i class="fa fa-plus"></i> Task
                          </a>
                        </div>
                      </div>

                    </li>
                  </ol>
                </div>
                <div class="col-md-4">
                  <div class="upper-head">
                    <div class="inner">
                      <div>
                        <span class="mt-5 bg-three inner-icon">
                          <i class="mdi mdi-cellphone"></i>
                        </span>
                      </div>
                      <div style="flex:1">
                        <div class="d-flex justify-content-between w-100">
                          <div>
                          <h6>Calls 2-5</h6>
                          </div>
                          <div>
                            <a href="#">
                              <i class="mdi mdi-pencil"></i>
                              </a>
                          </div>
                        </div>
                        
                        <p>0 Lead <span class="color-green">$0.00</span></p>
                      </div>
                     
                    </div>
                  </div>
                  <ol class="simple_with_animation vertical three">
                    <li class="highlight">
                    <div class="d-flex" style="width:100%;">
                        <div>
                          <h4>Maria Jardines</h4>
                        </div>
                        <div>
                          <!-- <span class="badge rounded-pill bg-warning">Won</span> -->
                          <!-- <span class="badge rounded-pill bg-danger">Lost</span> -->
                          <span class="badge rounded-pill bg-info">Open</span>
                        </div>
                        <div style="flex:1;text-align:right;">
                          <div class="dropdown">
                            <button class="btn btn-link font-size-16 shadow-none py-0 text-muted dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                              <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end">
                              <li><a class="dropdown-item" href="#"> Open</a></li>
                              <li><a class="dropdown-item" href="#"> Lost</a></li>
                              <li><a class="dropdown-item" href="#"> Won</a></li>
                              <li><a class="dropdown-item" href="#"> Abandoned</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                      <p>Facebook</p>
                      <a href="#" class="badge badge-soft-primary font-size-11">Facebook</a>
                      <a href="#" class="badge badge-soft-primary font-size-11">Tms</a>
                      <a href="#" class="badge badge-soft-primary font-size-11">External</a>
                      <div class="row mt-3">
                        <div class="col-md-6">
                          <a href="view_contact.php" class="btn btn-primary">
                            <i class="mdi mdi-comment"></i>
                          </a>
                          <a href="#" class="btn btn-primary">
                            <i class="mdi mdi-phone"></i>
                          </a>
                        </div>
                        <div class="col-md-6 text-right">
                          <a href="#" class="btn btn-primary">
                            <i class="fa fa-plus"></i> Task
                          </a>
                        </div>
                      </div>
                    </li>
                    <li class="highlight">
                    <div class="d-flex" style="width:100%;">
                        <div>
                          <h4>Maria Jardines</h4>
                        </div>
                        <div>
                          <!-- <span class="badge rounded-pill bg-warning">Won</span> -->
                          <!-- <span class="badge rounded-pill bg-danger">Lost</span> -->
                          <span class="badge rounded-pill bg-info">Open</span>
                        </div>
                        <div style="flex:1;text-align:right;">
                          <div class="dropdown">
                            <button class="btn btn-link font-size-16 shadow-none py-0 text-muted dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                              <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end">
                              <li><a class="dropdown-item" href="#"> Open</a></li>
                              <li><a class="dropdown-item" href="#"> Lost</a></li>
                              <li><a class="dropdown-item" href="#"> Won</a></li>
                              <li><a class="dropdown-item" href="#"> Abandoned</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                      <p>Facebook</p>
                      <a href="#" class="badge badge-soft-primary font-size-11">Facebook</a>
                      <a href="#" class="badge badge-soft-primary font-size-11">Tms</a>
                      <a href="#" class="badge badge-soft-primary font-size-11">External</a>
                      <div class="row mt-3">
                        <div class="col-md-6">
                          <a href="view_contact.php" class="btn btn-primary">
                            <i class="mdi mdi-comment"></i>
                          </a>
                          <a href="#" class="btn btn-primary">
                            <i class="mdi mdi-phone"></i>
                          </a>
                        </div>
                        <div class="col-md-6 text-right">
                          <a href="#" class="btn btn-primary">
                            <i class="fa fa-plus"></i> Task
                          </a>
                        </div>
                      </div>

                    </li>
                    <li class="highlight">
                    <div class="d-flex" style="width:100%;">
                        <div>
                          <h4>Maria Jardines</h4>
                        </div>
                        <div>
                          <!-- <span class="badge rounded-pill bg-warning">Won</span> -->
                          <!-- <span class="badge rounded-pill bg-danger">Lost</span> -->
                          <span class="badge rounded-pill bg-info">Open</span>
                        </div>
                        <div style="flex:1;text-align:right;">
                          <div class="dropdown">
                            <button class="btn btn-link font-size-16 shadow-none py-0 text-muted dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                              <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end">
                              <li><a class="dropdown-item" href="#"> Open</a></li>
                              <li><a class="dropdown-item" href="#"> Lost</a></li>
                              <li><a class="dropdown-item" href="#"> Won</a></li>
                              <li><a class="dropdown-item" href="#"> Abandoned</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                      <p>Facebook</p>
                      <a href="#" class="badge badge-soft-primary font-size-11">Facebook</a>
                      <a href="#" class="badge badge-soft-primary font-size-11">Tms</a>
                      <a href="#" class="badge badge-soft-primary font-size-11">External</a>
                      <div class="row mt-3">
                        <div class="col-md-6">
                          <a href="view_contact.php" class="btn btn-primary">
                            <i class="mdi mdi-comment"></i>
                          </a>
                          <a href="#" class="btn btn-primary">
                            <i class="mdi mdi-phone"></i>
                          </a>
                        </div>
                        <div class="col-md-6 text-right">
                          <a href="#" class="btn btn-primary">
                            <i class="fa fa-plus"></i> Task
                          </a>
                        </div>
                      </div>

                    </li>

                  </ol>
                </div>
                <div class="col-md-4">
                  <div class="upper-head">
                    <div class="inner">
                      <div>
                        <span class="mt-5 bg-four inner-icon">
                          <i class="mdi mdi-cellphone"></i>
                        </span>
                      </div>
                      <div style="flex:1">
                        <div class="d-flex justify-content-between w-100">
                          <div>
                          <h6>Calls 6-10</h6>
                          </div>
                          <div>
                            <a href="#">
                              <i class="mdi mdi-pencil"></i>
                              </a>
                          </div>
                        </div>
                        
                        <p>0 Lead <span class="color-green">$0.00</span></p>
                      </div>
                      
                    </div>
                  </div>
                  <ol class="simple_with_animation vertical four">
                    <li class="highlight">
                    <div class="d-flex" style="width:100%;">
                        <div>
                          <h4>Maria Jardines</h4>
                        </div>
                        <div>
                          <!-- <span class="badge rounded-pill bg-warning">Won</span> -->
                          <!-- <span class="badge rounded-pill bg-danger">Lost</span> -->
                          <span class="badge rounded-pill bg-info">Open</span>
                        </div>
                        <div style="flex:1;text-align:right;">
                          <div class="dropdown">
                            <button class="btn btn-link font-size-16 shadow-none py-0 text-muted dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                              <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end">
                              <li><a class="dropdown-item" href="#"> Open</a></li>
                              <li><a class="dropdown-item" href="#"> Lost</a></li>
                              <li><a class="dropdown-item" href="#"> Won</a></li>
                              <li><a class="dropdown-item" href="#"> Abandoned</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                      <p>Facebook</p>
                      <a href="#" class="badge badge-soft-primary font-size-11">Facebook</a>
                      <a href="#" class="badge badge-soft-primary font-size-11">Tms</a>
                      <a href="#" class="badge badge-soft-primary font-size-11">External</a>
                      <div class="row mt-3">
                        <div class="col-md-6">
                          <a href="view_contact.php" class="btn btn-primary">
                            <i class="mdi mdi-comment"></i>
                          </a>
                          <a href="#" class="btn btn-primary">
                            <i class="mdi mdi-phone"></i>
                          </a>
                        </div>
                        <div class="col-md-6 text-right">
                          <a href="#" class="btn btn-primary">
                            <i class="fa fa-plus"></i> Task
                          </a>
                        </div>
                      </div>

                    </li>
                    <li class="highlight">
                    <div class="d-flex" style="width:100%;">
                        <div>
                          <h4>Maria Jardines</h4>
                        </div>
                        <div>
                          <!-- <span class="badge rounded-pill bg-warning">Won</span> -->
                          <!-- <span class="badge rounded-pill bg-danger">Lost</span> -->
                          <span class="badge rounded-pill bg-info">Open</span>
                        </div>
                        <div style="flex:1;text-align:right;">
                          <div class="dropdown">
                            <button class="btn btn-link font-size-16 shadow-none py-0 text-muted dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                              <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end">
                              <li><a class="dropdown-item" href="#"> Open</a></li>
                              <li><a class="dropdown-item" href="#"> Lost</a></li>
                              <li><a class="dropdown-item" href="#"> Won</a></li>
                              <li><a class="dropdown-item" href="#"> Abandoned</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                      <p>Facebook</p>
                      <a href="#" class="badge badge-soft-primary font-size-11">Facebook</a>
                      <a href="#" class="badge badge-soft-primary font-size-11">Tms</a>
                      <a href="#" class="badge badge-soft-primary font-size-11">External</a>
                      <div class="row mt-3">
                        <div class="col-md-6">
                          <a href="view_contact.php" class="btn btn-primary">
                            <i class="mdi mdi-comment"></i>
                          </a>
                          <a href="#" class="btn btn-primary">
                            <i class="mdi mdi-phone"></i>
                          </a>
                        </div>
                        <div class="col-md-6 text-right">
                          <a href="#" class="btn btn-primary">
                            <i class="fa fa-plus"></i> Task
                          </a>
                        </div>
                      </div>

                    </li>
                    <li class="highlight">
                    <div class="d-flex" style="width:100%;">
                        <div>
                          <h4>Maria Jardines</h4>
                        </div>
                        <div>
                          <!-- <span class="badge rounded-pill bg-warning">Won</span> -->
                          <!-- <span class="badge rounded-pill bg-danger">Lost</span> -->
                          <span class="badge rounded-pill bg-info">Open</span>
                        </div>
                        <div style="flex:1;text-align:right;">
                          <div class="dropdown">
                            <button class="btn btn-link font-size-16 shadow-none py-0 text-muted dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                              <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end">
                              <li><a class="dropdown-item" href="#"> Open</a></li>
                              <li><a class="dropdown-item" href="#"> Lost</a></li>
                              <li><a class="dropdown-item" href="#"> Won</a></li>
                              <li><a class="dropdown-item" href="#"> Abandoned</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                      <p>Facebook</p>
                      <a href="#" class="badge badge-soft-primary font-size-11">Facebook</a>
                      <a href="#" class="badge badge-soft-primary font-size-11">Tms</a>
                      <a href="#" class="badge badge-soft-primary font-size-11">External</a>
                      <div class="row mt-3">
                        <div class="col-md-6">
                          <a href="view_contact.php" class="btn btn-primary">
                            <i class="mdi mdi-comment"></i>
                          </a>
                          <a href="#" class="btn btn-primary">
                            <i class="mdi mdi-phone"></i>
                          </a>
                        </div>
                        <div class="col-md-6 text-right">
                          <a href="#" class="btn btn-primary">
                            <i class="fa fa-plus"></i> Task
                          </a>
                        </div>
                      </div>
                    </li>
                  </ol>
                </div>
                <div class="col-md-4">
                  <div class="upper-head">
                    <div class="inner">
                      <div>
                        <span class="mt-5 bg-five inner-icon">
                          <i class="mdi mdi-calendar"></i>
                        </span>
                      </div>
                      <div style="flex:1">
                        <div class="d-flex justify-content-between w-100">
                          <div>
                          <h6>Consult</h6>
                          </div>
                          <div>
                            <a href="#">
                              <i class="mdi mdi-pencil"></i>
                              </a>
                          </div>
                        </div>
                        
                        <p>0 Lead <span class="color-green">$0.00</span></p>
                      </div>
                      
                    </div>
                  </div>
                  <ol class="simple_with_animation vertical five">
                    <li class="highlight">
                    <div class="d-flex" style="width:100%;">
                        <div>
                          <h4>Maria Jardines</h4>
                        </div>
                        <div>
                          <!-- <span class="badge rounded-pill bg-warning">Won</span> -->
                          <!-- <span class="badge rounded-pill bg-danger">Lost</span> -->
                          <span class="badge rounded-pill bg-info">Open</span>
                        </div>
                        <div style="flex:1;text-align:right;">
                          <div class="dropdown">
                            <button class="btn btn-link font-size-16 shadow-none py-0 text-muted dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                              <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end">
                              <li><a class="dropdown-item" href="#"> Open</a></li>
                              <li><a class="dropdown-item" href="#"> Lost</a></li>
                              <li><a class="dropdown-item" href="#"> Won</a></li>
                              <li><a class="dropdown-item" href="#"> Abandoned</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                      <p>Facebook</p>
                      <a href="#" class="badge badge-soft-primary font-size-11">Facebook</a>
                      <a href="#" class="badge badge-soft-primary font-size-11">Tms</a>
                      <a href="#" class="badge badge-soft-primary font-size-11">External</a>
                      <div class="row mt-3">
                        <div class="col-md-6">
                          <a href="view_contact.php" class="btn btn-primary">
                            <i class="mdi mdi-comment"></i>
                          </a>
                          <a href="#" class="btn btn-primary">
                            <i class="mdi mdi-phone"></i>
                          </a>
                        </div>
                        <div class="col-md-6 text-right">
                          <a href="#" class="btn btn-primary">
                            <i class="fa fa-plus"></i> Task
                          </a>
                        </div>
                      </div>
                    </li>
                    <li class="highlight">
                    <div class="d-flex" style="width:100%;">
                        <div>
                          <h4>Maria Jardines</h4>
                        </div>
                        <div>
                          <!-- <span class="badge rounded-pill bg-warning">Won</span> -->
                          <!-- <span class="badge rounded-pill bg-danger">Lost</span> -->
                          <span class="badge rounded-pill bg-info">Open</span>
                        </div>
                        <div style="flex:1;text-align:right;">
                          <div class="dropdown">
                            <button class="btn btn-link font-size-16 shadow-none py-0 text-muted dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                              <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end">
                              <li><a class="dropdown-item" href="#"> Open</a></li>
                              <li><a class="dropdown-item" href="#"> Lost</a></li>
                              <li><a class="dropdown-item" href="#"> Won</a></li>
                              <li><a class="dropdown-item" href="#"> Abandoned</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                      <p>Facebook</p>
                      <a href="#" class="badge badge-soft-primary font-size-11">Facebook</a>
                      <a href="#" class="badge badge-soft-primary font-size-11">Tms</a>
                      <a href="#" class="badge badge-soft-primary font-size-11">External</a>
                      <div class="row mt-3">
                        <div class="col-md-6">
                          <a href="view_contact.php" class="btn btn-primary">
                            <i class="mdi mdi-comment"></i>
                          </a>
                          <a href="#" class="btn btn-primary">
                            <i class="mdi mdi-phone"></i>
                          </a>
                        </div>
                        <div class="col-md-6 text-right">
                          <a href="#" class="btn btn-primary">
                            <i class="fa fa-plus"></i> Task
                          </a>
                        </div>
                      </div>

                    </li>
                    <li class="highlight">
                    <div class="d-flex" style="width:100%;">
                        <div>
                          <h4>Maria Jardines</h4>
                        </div>
                        <div>
                          <!-- <span class="badge rounded-pill bg-warning">Won</span> -->
                          <!-- <span class="badge rounded-pill bg-danger">Lost</span> -->
                          <span class="badge rounded-pill bg-info">Open</span>
                        </div>
                        <div style="flex:1;text-align:right;">
                          <div class="dropdown">
                            <button class="btn btn-link font-size-16 shadow-none py-0 text-muted dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                              <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end">
                              <li><a class="dropdown-item" href="#"> Open</a></li>
                              <li><a class="dropdown-item" href="#"> Lost</a></li>
                              <li><a class="dropdown-item" href="#"> Won</a></li>
                              <li><a class="dropdown-item" href="#"> Abandoned</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                      <p>Facebook</p>
                      <a href="#" class="badge badge-soft-primary font-size-11">Facebook</a>
                      <a href="#" class="badge badge-soft-primary font-size-11">Tms</a>
                      <a href="#" class="badge badge-soft-primary font-size-11">External</a>
                      <div class="row mt-3">
                        <div class="col-md-6">
                          <a href="view_contact.php" class="btn btn-primary">
                            <i class="mdi mdi-comment"></i>
                          </a>
                          <a href="#" class="btn btn-primary">
                            <i class="mdi mdi-phone"></i>
                          </a>
                        </div>
                        <div class="col-md-6 text-right">
                          <a href="#" class="btn btn-primary">
                            <i class="fa fa-plus"></i> Task
                          </a>
                        </div>
                      </div>

                    </li>


                  </ol>
                </div>
                <div class="col-md-4">
                  <div class="upper-head">
                    <div class="inner">
                      <div>
                        <span class="mt-5 bg-soft-primary inner-icon">
                          <i class="mdi mdi-plus"></i>
                        </span>
                      </div>
                      <div style="flex:1">
                        <div class="d-flex justify-content-between w-100">
                          <div>
                          <h6>Add New</h6>
                          </div>
                          <div>
                            <a href="#">
                              <i class="mdi mdi-plus"></i>
                              </a>
                          </div>
                        </div>
                        
                        <!-- <p>0 Lead <span class="color-green">$0.00</span></p> -->
                      </div>
                      
                    </div>
                  </div>
                 
                </div>
              </div>
            </div>



          </div>
          <!-- Kanban Board Ended  - Body -->

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

<!-- add opportunities modal  -->
<!-- Opportunity modal -->
<div class="modal fade" id="opportunity" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Add Opportunity</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="flex-shrink-0 mt-3">
        <ul class="nav justify-content-start nav-tabs-custom rounded card-header-tabs ml-2" role="tablist">
          <li class="nav-item" role="presentation">
            <a class="nav-link active" data-bs-toggle="tab" href="#OppModal" role="tab" aria-selected="true">
              <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
              <span class="d-none d-sm-block rem-bg">Opportunity</span>
            </a>
          </li>
          <li class="nav-item" role="presentation">
            <a class="nav-link" data-bs-toggle="tab" href="#Book" role="tab" aria-selected="false" tabindex="-1" id="sms2">
              <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
              <span class="d-none d-sm-block rem-bg ">Book/Update Appointment</span>
            </a>
          </li>
          <li class="nav-item" role="presentation">
            <a class="nav-link" data-bs-toggle="tab" href="#Tasks" role="tab" aria-selected="false" tabindex="-1" id="note2">
              <span class="d-block d-sm-none"><i class="far fa-envelope"></i></span>
              <span class="d-none d-sm-block rem-bg">Tasks</span>
            </a>
          </li>

        </ul>
      </div>

      <!-- Opportunity Modal Body -->

      <div class='tab-content text-muted campaign'>
        <div class="modal-body tab-pane active" role="tabpanel" id='OppModal'>
          <div class="row mt-4">
            <div class='col'>
              <h6>Contact Info</h6>
            </div>
          </div>
          <div class="row form-group mt-3">
            <div class="col-md-4">
              <div class="form-floating mb-3">
                <input type="email" class="form-control" id="floatingInput" placeholder="contact name">
                <label for="floatingInput">Contact Name</label>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-floating mb-3">
                <input type="email" class="form-control" id="floatingInput" placeholder="email">
                <label for="floatingInput">Email</label>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-floating mb-3">
                <input type="number" class="form-control" id="floatingInput" placeholder="phone">
                <label for="floatingInput">Phone</label>
              </div>
            </div>
          </div>
          <div class="row form-group mt-3">
            <div class="col-md-6">
              <div class="form-floating mb-3">
                <input type="email" class="form-control" id="floatingInput" placeholder="tags">
                <label for="floatingInput">Tags</label>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-floating mb-3">
                <input type="email" class="form-control" id="floatingInput" placeholder="company name">
                <label for="floatingInput">Company Name</label>
              </div>
            </div>
          </div>

          <div class="row mt-4">
            <div class='col'>
              <h6>Opportunity Info</h6>
            </div>
          </div>
          <div class="row form-group mt-3">
            <div class="col-md-4">
              <div class="form-floating mb-3">
                <input type="email" class="form-control" id="floatingInput" placeholder="opportunity name">
                <label for="floatingInput">Opportunity Name</label>
              </div>
            </div>
            <div class="col-md-4">
              <div class="mb-3">
                <select class="form-select" style="height: 58px;">
                  <option value="">Pipeline</option>
                  <option>Master Pipeline</option>
                  <option>Coordinator Pipeline</option>
                  <option>In House Pipeline</option>
                </select>
              </div>
            </div>
            <div class="col-md-4">
              <div class="mb-3">
                <select class=" form-select" style="height: 58px;">
                  <option value="">Stage</option>
                  <option>Lead In</option>
                  <option>A</option>
                  <option>B</option>
                  <option>C</option>
                </select>
              </div>
            </div>
          </div>
          <div class="row form-group mt-3">
            <div class="col-md-6">
              <div class="mb-3">
                <select class=" form-select" style="height: 58px;">
                  <option value="">Status</option>
                  <option>Open</option>
                  <option>Won</option>
                  <option>Lost</option>
                  <option>Abundant</option>
                </select>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-floating mb-3">
                <input type="email" class="form-control" id="floatingInput" placeholder="lead value">
                <label for="floatingInput">Lead Value</label>
              </div>
            </div>
          </div>
          <div class="row form-group mt-3">
            <div class="col-md-6">
              <div class="mb-3">
                <select class=" form-select" style="height: 58px;">
                  <option value="">Owner</option>
                  <option>Unassigned</option>
                  <option>John Dea</option>
                  <option>Albert Henry</option>
                </select>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-floating mb-3">
                <input type="email" class="form-control" id="floatingInput" placeholder="opportunity source">
                <label for="floatingInput">Opportunity Source</label>
              </div>
            </div>

          </div>

        </div>
      </div>

      <!-- Opportunity Modal Body -->
      <div class='tab-content text-muted campaign'>
        <div class="modal-body tab-pane" role="tabpanel" id='Book'>

          <div class="row form-group mt-3">
            <div class="col">
              <div class="form-floating mb-3 ">
                <input type="email" class="form-control" id="floatingInput" placeholder="appointment title">
                <label for="floatingInput">Appointment Title</label>
              </div>
            </div>
            <div class="col">
              <div class="mb-3 ">
                <select name="" id="" class="form-select" style="height:58px">
                  <option value="">Status</option>
                  <option value="">Confirm</option>
                  <option value="">Cancel</option>
                </select>
              </div>
            </div>
          </div>
          <div class="row form-group mt-3">
            <div class="col">
              <div class="form-floating mb-3">
                <input type="email" class="form-control" id="floatingInput" placeholder="Dob" onclick="this.type='date'">
                <label for="floatingInput">Date</label>
              </div>
            </div>
            <div class="col">
              <div class="mb-3 ">
                <select name="" id="" class="form-select" style="height:58px">
                  <option value="">Time</option>
                  <option value="">8:00 am - 9:00 am</option>
                  <option value="">9:00 am - 10:00 am</option>
                  <option value="">10:00 am - 11:00 am</option>
                  <option value="">11:00 am - 12:00 pm</option>
                  <option value="">12:00 pm - 1:00 pm</option>
                  <option value="">1:00 am - 2:00 pm</option>
                  <option value="">2:00 am - 3:00 pm</option>
                  <option value="">3:00 am - 4:00 pm</option>
                  <option value="">4:00 am - 5:00 pm</option>
                  <option value="">5:00 am - 6:00 pm</option>
                </select>
              </div>
            </div>
          </div>

          <div class="row form-group mt-3">
            <div class="col">
              <div class="form-floating mb-3 ">
                <input type="email" class="form-control" id="floatingInput" placeholder="appointment title">
                <label for="floatingInput">Appointment Title</label>
              </div>
            </div>

          </div>
        </div>
      </div>


      <!-- Opportunity Modal Body -->
      <div class='tab-content text-muted campaign'>
        <div class="modal-body tab-pane" role="tabpanel" id='Tasks'>
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
        </div>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary">Save</button>
      </div>
    </div>
  </div>
</div>
<!-- end -->

<!-- edit opportunit -->
<div class="modal fade" id="opportunity-edit" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Edit Opportunity</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="flex-shrink-0 mt-3">
        <ul class="nav justify-content-start nav-tabs-custom rounded card-header-tabs ml-2" role="tablist">
          <li class="nav-item" role="presentation">
            <a class="nav-link active" data-bs-toggle="tab" href="#OppModal2" role="tab" aria-selected="true">
              <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
              <span class="d-none d-sm-block rem-bg">Opportunity</span>
            </a>
          </li>
          <li class="nav-item" role="presentation">
            <a class="nav-link" data-bs-toggle="tab" href="#Book2" role="tab" aria-selected="false" tabindex="-1" id="sms2">
              <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
              <span class="d-none d-sm-block rem-bg ">Book/Update Appointment</span>
            </a>
          </li>
          <li class="nav-item" role="presentation">
            <a class="nav-link" data-bs-toggle="tab" href="#Tasks2" role="tab" aria-selected="false" tabindex="-1" id="note2">
              <span class="d-block d-sm-none"><i class="far fa-envelope"></i></span>
              <span class="d-none d-sm-block rem-bg">Tasks</span>
            </a>
          </li>

        </ul>
      </div>

      <!-- Opportunity Modal Body -->

      <div class='tab-content text-muted campaign'>
        <div class="modal-body tab-pane active" role="tabpanel" id='OppModal2'>
          <div class="row mt-4">
            <div class='col'>
              <h6>Contact Info</h6>
            </div>
          </div>
          <div class="row form-group mt-3">
            <div class="col-md-4">
              <div class="form-floating mb-3">
                <input type="email" class="form-control" id="floatingInput" placeholder="contact name">
                <label for="floatingInput">Contact Name</label>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-floating mb-3">
                <input type="email" class="form-control" id="floatingInput" placeholder="email">
                <label for="floatingInput">Email</label>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-floating mb-3">
                <input type="number" class="form-control" id="floatingInput" placeholder="phone">
                <label for="floatingInput">Phone</label>
              </div>
            </div>
          </div>
          <div class="row form-group mt-3">
            <div class="col-md-6">
              <div class="form-floating mb-3">
                <input type="email" class="form-control" id="floatingInput" placeholder="tags">
                <label for="floatingInput">Tags</label>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-floating mb-3">
                <input type="email" class="form-control" id="floatingInput" placeholder="company name">
                <label for="floatingInput">Company Name</label>
              </div>
            </div>
          </div>

          <div class="row mt-4">
            <div class='col'>
              <h6>Opportunity Info</h6>
            </div>
          </div>
          <div class="row form-group mt-3">
            <div class="col-md-4">
              <div class="form-floating mb-3">
                <input type="email" class="form-control" id="floatingInput" placeholder="opportunity name">
                <label for="floatingInput">Opportunity Name</label>
              </div>
            </div>
            <div class="col-md-4">
              <div class="mb-3">
                <select class="form-select" style="height: 58px;">
                  <option value="">Pipeline</option>
                  <option>Master Pipeline</option>
                  <option>Coordinator Pipeline</option>
                  <option>In House Pipeline</option>
                </select>
              </div>
            </div>
            <div class="col-md-4">
              <div class="mb-3">
                <select class=" form-select" style="height: 58px;">
                  <option value="">Stage</option>
                  <option>Lead In</option>
                  <option>A</option>
                  <option>B</option>
                  <option>C</option>
                </select>
              </div>
            </div>
          </div>
          <div class="row form-group mt-3">
            <div class="col-md-6">
              <div class="mb-3">
                <select class=" form-select" style="height: 58px;">
                  <option value="">Status</option>
                  <option>Open</option>
                  <option>Won</option>
                  <option>Lost</option>
                  <option>Abundant</option>
                </select>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-floating mb-3">
                <input type="email" class="form-control" id="floatingInput" placeholder="lead value">
                <label for="floatingInput">Lead Value</label>
              </div>
            </div>
          </div>
          <div class="row form-group mt-3">
            <div class="col-md-6">
              <div class="mb-3">
                <select class=" form-select" style="height: 58px;">
                  <option value="">Owner</option>
                  <option>Unassigned</option>
                  <option>John Dea</option>
                  <option>Albert Henry</option>
                </select>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-floating mb-3">
                <input type="email" class="form-control" id="floatingInput" placeholder="opportunity source">
                <label for="floatingInput">Opportunity Source</label>
              </div>
            </div>

          </div>

        </div>
      </div>

      <!-- Opportunity Modal Body -->
      <div class='tab-content text-muted campaign'>
        <div class="modal-body tab-pane" role="tabpanel" id='Book2'>

          <div class="row form-group mt-3">
            <div class="col">
              <div class="form-floating mb-3 ">
                <input type="email" class="form-control" id="floatingInput" placeholder="appointment title">
                <label for="floatingInput">Appointment Title</label>
              </div>
            </div>
            <div class="col">
              <div class="mb-3 ">
                <select name="" id="" class="form-select" style="height:58px">
                  <option value="">Status</option>
                  <option value="">Confirm</option>
                  <option value="">Cancel</option>
                </select>
              </div>
            </div>
          </div>
          <div class="row form-group mt-3">
            <div class="col">
              <div class="form-floating mb-3">
                <input type="email" class="form-control" id="floatingInput" placeholder="Dob" onclick="this.type='date'">
                <label for="floatingInput">Date</label>
              </div>
            </div>
            <div class="col">
              <div class="mb-3 ">
                <select name="" id="" class="form-select" style="height:58px">
                  <option value="">Time</option>
                  <option value="">8:00 am - 9:00 am</option>
                  <option value="">9:00 am - 10:00 am</option>
                  <option value="">10:00 am - 11:00 am</option>
                  <option value="">11:00 am - 12:00 pm</option>
                  <option value="">12:00 pm - 1:00 pm</option>
                  <option value="">1:00 am - 2:00 pm</option>
                  <option value="">2:00 am - 3:00 pm</option>
                  <option value="">3:00 am - 4:00 pm</option>
                  <option value="">4:00 am - 5:00 pm</option>
                  <option value="">5:00 am - 6:00 pm</option>
                </select>
              </div>
            </div>
          </div>

          <div class="row form-group mt-3">
            <div class="col">
              <div class="form-floating mb-3 ">
                <input type="email" class="form-control" id="floatingInput" placeholder="appointment title">
                <label for="floatingInput">Appointment Title</label>
              </div>
            </div>

          </div>
        </div>
      </div>


      <!-- Opportunity Modal Body -->
      <div class='tab-content text-muted campaign'>
        <div class="modal-body tab-pane" role="tabpanel" id='Tasks2'>
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
        </div>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary">Save</button>
      </div>
    </div>
  </div>
</div>

<!-- end -->

<!-- edit stage modal -->
<div class="modal fade" id="stage" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel"9>Edit Stage Name</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body ">
                <form class="needs-validation" name="event-form" id="form-event" novalidate="">
                <div class="row form-group mt-3">
                      <div class="col-md-12">
                      <div class="form-floating mb-3 ">
                          <input type="email" class="form-control" id="floatingInput" placeholder="stage name">
                          <label for="floatingInput">Stage Name</label>
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
<!-- end -->

<!-- pipeline modal -->
<div class="modal fade" id="pipe" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel"9>Add Pipeline Name</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body ">
                <form class="needs-validation" name="event-form" id="form-event" novalidate="">
                <div class="row form-group mt-3">
                      <div class="col-md-12">
                      <div class="form-floating mb-3 ">
                          <input type="email" class="form-control" id="floatingInput" placeholder="pipeline name">
                          <label for="floatingInput">Pipeline Name</label>
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

<!-- end -->


<script>
  let email_temp_input = document.getElementById('formCheck1');
  let sms_temp_input = document.getElementById('formCheck2');
  let email_temp_btn = document.getElementById('email-temp-btn');
  let sms_temp_btn = document.getElementById('sms-temp-btn');
  let email_temp = document.getElementById('email-temp');
  let email_camp = document.getElementById('email-camp');
  let sms_temp = document.getElementById('sms-temp');
  let sms_camp = document.getElementById('sms-camp');
  $(function() {
    var adjustment;

    $("ol.simple_with_animation").sortable({
      group: 'simple_with_animation',
      pullPlaceholder: false,
      // animation on drop
      onDrop: function($item, container, _super) {
        var $clonedItem = $('<li/>').css({
          height: 0
        });
        $item.before($clonedItem);
        $clonedItem.animate({
          'height': $item.height()
        });

        $item.animate($clonedItem.position(), function() {
          $clonedItem.detach();
          _super($item, container);
        });
      },

      // set $item relative to cursor position
      onDragStart: function($item, container, _super) {
        var offset = $item.offset(),
          pointer = container.rootGroup.pointer;

        adjustment = {
          left: pointer.left - offset.left,
          top: pointer.top - offset.top
        };

        _super($item, container);
      },
      onDrag: function($item, position) {
        $item.css({
          left: position.left - adjustment.left,
          top: position.top - adjustment.top
        });
      }
    });
  });

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
<script src="https://johnny.github.io/jquery-sortable/js/jquery-sortable.js"></script>
<?php require_once("footer.php") ?>