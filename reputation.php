<?php require_once "header.php" ?>


<style>
.img-up {
    margin-left: 2%
}

.img-up>img {
    width: 70%;
    height: 50%
}

.mt-head {
    margin-left: 5%
}


.remBtn {
    background-color: transparent !important;
    color: gray !important;
}

.int-logo>img {
    width: 10%;
    height: 85%;
}

.introw {
    /* border : 2px solid black; */
    display: flex;
    justify-content: center;
}

.provider {
    font-weight: 600;
    font-size: small
}

.card {
    border-radius: 0.2rem !important;
}

.day-card {
    display: none;
}

.mdi-close-box {
    font-size: large !important;
    cursor: pointer;
}

.cls-btn-span {
    /* border : 2px solid red; */
    display: flex;
}

.table>thead>tr {
    /* background-color : red; */
    border-top: 1px solid rgb(0, 0, 0, 0.1);

    border-bottom: 1px solid rgb(0, 0, 0, 0.1);
}

.table>tbody>tr {
    /* background-color : red; */
    border-bottom: 1px solid rgb(0, 0, 0, 0.1);
}

.table>tbody>tr>td {
    /* background-color : red; */
    padding: 20px 0px !important;
}

.initial {
    background-color: #bd9e75;
    color: white;
    width: 200px;
    height: 220px;
    padding: 5px;
    border-radius: 50% !important;
    font-size: small;
    text-align: center;
    font-weight: 200;
    margin-right: 10px;

}


.rounded-bd {
    width: 50px !important;
    height: 20px !important;
    border-radius: 100% !important;
    position: relative;
}

.rounded-bd-2 {
    width: 50px !important;
    height: 20px !important;
    border-radius: 10% !important;
    position: relative;
}

.rounded-bd-el {
    width: 90px !important;
    height: 40px !important;
    border-radius: 10% !important;
    position: relative;
}


.rounded-bd-3 {
    width: 50px !important;
    height: 20px !important;
    border-radius: 100% !important;
    background-color: red;
    /* position: relative; */
}

.rounded-bd-2>img {
    width: 100% !important;
    height: 100% !important;
    position: relative;
}

.rounded-bd-el>img {
    width: 100% !important;
    height: 100% !important;
    position: relative;
}


.form-floating {
    /* border : 2px solid red; */
}

/* .form-floating>input {
    width: 105% !important;
    margin-left: -10px
} */

.cmnt-box {
    padding: 0px 10px !important;
    height: 40px !important;
}

.share {
    cursor: pointer;
}

.mdi-star {
    color: #ffbc00;
}

.mr-2 {
    margin-right: 10px
}

.mdi-emoticon-happy-outline {
    color: #0bd427;
}

.track-space {
    width: 450px !important;
    height: 270px !important;
    /* border: 2px solid red; */
    margin: 0 auto;
    padding: 0px !important;
}

.track-space>img {
    width: 100% !important;
    height: 100% !important;
    position: relative;
    /* border: 2px solid yellow; */

}

.rev-center {
    /* border: 2px solid red; */
    margin: 0 auto;
    width: 150px;
    height: auto;
}

.mdi-star-shooting,
.mdi-star-check-outline,
.mdi-emoticon-sad-outline {
    margin: 0 auto !important;
    font-size: 50px;
    text-align: center;
    color: #ffbc00;
    margin-left: 30% !important;
}

.happy {
    color: #79c9a1 !important;
    margin: 0 auto !important;
    font-size: 50px;
    text-align: center;
    margin-left: 30% !important;
}

.mdi-emoticon-sad-outline {
    color: #ffc7ae !important;
}

.rev-count {
    font-size: xx-large;
    font-weight: bold;
}

.decrease {
    font-size: large;
    color: orange;
}

.decrease-red {
    color: red;
    font-size: large;
}

.google-space {
    width: 40px !important;
    height: 100px !important;
    /* border: 2px solid red; */
    /* position : absolute */
}

.google-space>img {
    width: 20% !important;
    height: 100% !important;
    position: relative !important;
}

.bottom {
    margin-bottom: 30px;
    margin-top: 5%;
}

.increase {
    font-size: large;
    color: green;
}

.green-rating {
    width: 100px !important;
    color: green;
    height: 10px !important;
    background-color: green !important;
}

.check {
    width: 200px;
}

.bottom-sec {
    margin-bottom: 25px;
    /* display : none; */
    /* margin-bottom: 5 */
}

.bottom-third {
    margin-bottom: 60px
}
</style>


<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12">
                <div class="card border-none">
                    <div class="card-header align-items-center py-2 border-none">
                        <div class="row">
                            <div class="col-md-6 col-6">
                                <h4 class="card-title mb-0 mt-head">Reputation</h4>
                            </div>

                        </div>
                    </div>
                    <!-- end card header -->

                    <div class="card-body">
                        <div class="card border-none">
                            <div class="card-header align-items-center d-flex">

                                <div class="flex-shrink-0">
                                    <ul class="nav justify-content-start nav-tabs-custom rounded card-header-tabs"
                                        role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-bs-toggle="tab" href="#overview" role="tab"
                                                id="email">

                                                <span class=" d-sm-block">Overview</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#requests" role="tab"
                                                id="sms">

                                                <span class=" d-sm-block">Requests</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#reviews" role="tab"
                                                id="sms">

                                                <span class=" d-sm-block">Reviews</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div><!-- end card header -->

                            <div class="card-body border-none">

                                <!-- Tab panes Parent Start -->
                                <div class="tab-content text-muted campaign">

                                    <!-- First General pane Start-->
                                    <div class="tab-pane" id="requests" role="tabpanel">

                                        <div class="row">
                                            <div class="col-md-9 col-xl-9">
                                            </div>
                                            <div style="text-align:right" class="col-md-3 col-xl-3">
                                                <button class="btn btn-primary" data-bs-toggle="modal"
                                                    data-bs-target="#review" id="reviewreq"> Send Review Requests
                                                </button>
                                            </div>
                                        </div>

                                        <div class="card-body">
                                            <div class="row mb-4 mt-4">
                                                <div class="col-md-9 col-xl-9">
                                                    <h2 class="card-title"> Latest Review Requests</h2>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12 col-xl-12">
                                                    <table class="table ">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col">Invite Sent to</th>
                                                                <th scope="col">Email / Phone</th>
                                                                <th scope="col">Sent by</th>
                                                                <th scope="col">Date Sent</th>
                                                                <th scope="col">Status</th>
                                                                <th scope="col">Retries so far</th>


                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td><span class="rounded-bd initial text-center"> CR
                                                                    </span> Cassandra Ramos </td>
                                                                <td>(786) 683-6424</td>
                                                                <td> <span class="rounded-bd-2 badge  "> <img
                                                                            src="assets/images/logo.png" />
                                                                    </span> Laura P. Marquez </td>
                                                                <td>11/28/2022</td>
                                                                <td> Delivered</td>


                                                            </tr>
                                                            <tr>
                                                                <td><span class="rounded-bd initial text-center"> CR
                                                                    </span> Cassandra Ramos </td>
                                                                <td>(786) 683-6424</td>
                                                                <td> <span class="rounded-bd-2 badge  "> <img
                                                                            src="assets/images/logo.png" />
                                                                    </span> Laura P. Marquez </td>
                                                                <td>11/28/2022</td>
                                                                <td> Delivered</td>


                                                            </tr>

                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end card body -->
                                    </div>
                                    <!-- first pane end card -->

                                    <!-- second pane start card -->

                                    <div class="tab-pane" id="reviews" role="tabpanel">

                                        <div class="row">
                                            <div class="col-md-9 col-xl-9">
                                            </div>
                                            <div style="text-align:right" class="col-md-3 col-xl-3">
                                                <button class="btn btn-primary" data-bs-toggle="modal"
                                                    data-bs-target="#review" id="reviewreq"> Send Review Requests
                                                </button>
                                            </div>
                                        </div>
                                        <div class="row mt-4">
                                            <div class="col-md-8 col-xl-8">
                                                <div class="row">
                                                    <div class="col-md-12 col-xl-12">

                                                        <form class="app-search d-none d-lg-block">
                                                            <div class="position-relative">
                                                                <input type="text" class="form-control"
                                                                    placeholder="Search...">
                                                                <button class="btn btn-primary" type="button"><i
                                                                        class="bx bx-search-alt align-middle"></i></button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>

                                                <div class="row px-2">
                                                    <div class="card-body card rev-card ">
                                                        <div class="row align-items-center">
                                                            <div class="col-md-6">
                                                                <i class="mr-2 mdi mdi-google"></i>
                                                                <span class="mr-2"
                                                                    style="color:black;font-weight:bold">Mohammad Ali
                                                                    Akil</span>
                                                                <i class="mdi mdi-star"></i>
                                                                <i class="mdi mdi-star"></i>
                                                                <i class="mdi mdi-star"></i>
                                                                <i class="mr-2 mdi mdi-star"></i>
                                                                <i class="mr-2 mdi mdi-emoticon-happy-outline"></i>



                                                            </div>
                                                            <div class="col-md-6" style="text-align:right">
                                                                <small style="color:black;font-weight:400">Nov 24th
                                                                    2022, 9:42pm</small>

                                                            </div>
                                                        </div>
                                                        <div class="row mt-4">
                                                            <p>It was a life changing treatment for me. All my
                                                                Depressive symptoms went away completly, my motivation
                                                                got back. I thank each and everyone from the Elevate TMS
                                                                team for being supportive and help me reach my mental
                                                                state goals. I honestly feel like myself
                                                            </p>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12 col-md-12">
                                                                <small class="share">Share </small>

                                                            </div>

                                                        </div>
                                                        <div class="row mt-4">
                                                            <div class="col-md-2 col-md-2">
                                                                <span class="rounded-bd-el badge  "> <img
                                                                        src="assets/images/logo.png" />
                                                                </span>

                                                            </div>

                                                            <div class="col-md-8 col-md-8">
                                                                <div class="form-floating ">
                                                                    <input type="text" class=" form-control cmnt-box"
                                                                        id="floatingInput"
                                                                        placeholder="appointment title">
                                                                </div>

                                                            </div>
                                                            <div class="col-md-2 col-md-2">
                                                                <button class="btn btn-primary">Respond </button>

                                                            </div>

                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="row px-2">
                                                    <div class="card-body card rev-card ">
                                                        <div class="row align-items-center">
                                                            <div class="col-md-6">
                                                                <i class="mr-2 mdi mdi-google"></i>
                                                                <span class="mr-2"
                                                                    style="color:black;font-weight:bold">Sandy
                                                                    Nelson</span>
                                                                <i class="mdi mdi-star"></i>
                                                                <i class="mdi mdi-star"></i>
                                                                <i class="mdi mdi-star"></i>
                                                                <i class="mr-2 mdi mdi-star"></i>
                                                                <i class="mr-2 mdi mdi-emoticon-happy-outline"></i>



                                                            </div>
                                                            <div class="col-md-6" style="text-align:right">
                                                                <small style="color:black;font-weight:400">Sep 24th
                                                                    2022, 3:22am</small>

                                                            </div>
                                                        </div>
                                                        <div class="row mt-4">
                                                            <p> I've been a patient of Elevate Psychiatery for ovr 2
                                                                years . The staff is always professional , empathetic ,
                                                                knowledgeable and
                                                                available to answer any and all questions. I higly
                                                                recommend them!
                                                            </p>

                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12 col-md-12">
                                                                <small class="share">Share </small>

                                                            </div>

                                                        </div>
                                                        <div class="row mt-4">
                                                            <div class="col-md-2 col-md-2">
                                                                <span class="rounded-bd-el badge  "> <img
                                                                        src="assets/images/logo.png" />
                                                                </span>

                                                            </div>

                                                            <div class="col-md-8 col-md-8">
                                                                <div class="form-floating ">
                                                                    <input type="text" class=" form-control cmnt-box"
                                                                        id="floatingInput"
                                                                        placeholder="appointment title">
                                                                </div>

                                                            </div>
                                                            <div class="col-md-2 col-md-2">
                                                                <button class="btn btn-primary">Respond </button>

                                                            </div>

                                                        </div>

                                                    </div>
                                                </div>

                                                <div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-xl-4">
                                                <div class="row mt-2">
                                                    <div class="col-md-12">
                                                    <select name="" id="floatingInput" class="form-select"
                                                        style="height:58px">



                                                        <option selected disabled value="">Network</option>
                                                        <option value="">A</option>

                                                        <option value="">B</option>
                                                        <option value="">C</option>
                                                        <option value="">D</option>


                                                    </select>
                                                    </div>
                                                    
                                                </div>
                                                <div class="row mt-2">
                                                    <div class="col-md-12">
                                                    <select name="" id="floatingInput" class="form-select"
                                                        style="height:58px">



                                                        <option selected disabled value="">Minimum Rating</option>
                                                        <option value="">A</option>

                                                        <option value="">B</option>
                                                        <option value="">C</option>
                                                        <option value="">D</option>


                                                    </select>
                                                    </div>
                                                    
                                                </div>
                                                <div class="row mt-2">
                                                    <div class="col-md-12">
                                                    <select name="" id="floatingInput" class="form-select"
                                                        style="height:58px">



                                                        <option selected disabled value="">Max Rating</option>
                                                        <option value="">A</option>

                                                        <option value="">B</option>
                                                        <option value="">C</option>
                                                        <option value="">D</option>


                                                    </select>
                                                    </div>
                                                  
                                                </div>
                                                <div class="row mt-2">
                                                    <div class="col-12 col-md-12">
                                                        <div class="form-floating ">
                                                            <input type="email" class="form-control" id="floatingInput"
                                                                placeholder="Dob" onclick="this.type='date'">
                                                            <label for="floatingInput">Start Date</label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row mt-2">
                                                    <div class="col-12 col-md-12">
                                                        <div class="form-floating ">
                                                            <input type="email" class="form-control" id="floatingInput"
                                                                placeholder="Dob" onclick="this.type='date'">
                                                            <label for="floatingInput">End Date</label>
                                                        </div>
                                                    </div>
                                                </div>



                                            </div>
                                        </div>
                                    </div>
                                    <!-- second pane end card -->

                                    <!-- Third pane start card -->
                                    <div class="tab-pane active" id="overview" role="tabpanel">
                                        <div class="row">
                                            <div class="col-md-9 col-xl-9">
                                            </div>
                                            <div style="text-align:right" class="col-md-3 col-xl-3">
                                                <button class="btn btn-primary" data-bs-toggle="modal"
                                                    data-bs-target="#review" id="reviewreq"> Send Review Requests
                                                </button>
                                            </div>
                                        </div>
                                        <div class="row mt-4">
                                            <div class="col-md-6 col-xl-6">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <div class="row">

                                                            <div class="col-md-7 col-xl-7">
                                                                <span>
                                                                    <h4 class="card-title mt-head"> Invite Goals</h4>
                                                                </span>
                                                            </div>
                                                            <div style="text-align:right" class="col-md-5 col-xl-5">
                                                                <span>Last 6 Months </span>

                                                                <span class="dropdown">
                                                                    <button
                                                                        class="btn btn-link font-size-16 shadow-none text-muted dropdown-toggle"
                                                                        type="button" data-bs-toggle="dropdown"
                                                                        aria-expanded="false">
                                                                        <i class="bx bx-dots-vertical-rounded"></i>
                                                                    </button>
                                                                    <ul class="dropdown-menu dropdown-menu-end">
                                                                        <li><a class="dropdown-item" href="#"> Last 1
                                                                                Month</a></li>
                                                                        <li><a class="dropdown-item" href="#"> Last 3
                                                                                Months</a></li>
                                                                        <li><a class="dropdown-item" href="#"> Last 6
                                                                                Months</a></li>
                                                                        <li><a class="dropdown-item" href="#"> Last 1
                                                                                Year</a></li>
                                                                    </ul>
                                                                </span>

                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-md-12 col-xl-12">

                                                                <div id="pie_chart3"
                                                                    data-colors='["#2ab57d", "#5156be", "#fd625e", "#4ba6ef", "#ffbf53"]'
                                                                    class="apex-charts" dir="ltr"></div>



                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-xl-6">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <div class="row">

                                                            <div class="col-md-7 col-xl-7">
                                                                <span>
                                                                    <h4 class="card-title mt-head"> Reviews Received
                                                                    </h4>
                                                                </span>
                                                            </div>
                                                            <div style=text-align:right class="col-md-5 col-xl-5">
                                                                <span>Last 6 Months </span>

                                                                <span class="dropdown">
                                                                    <button
                                                                        class="btn btn-link font-size-16 shadow-none text-muted dropdown-toggle"
                                                                        type="button" data-bs-toggle="dropdown"
                                                                        aria-expanded="false">
                                                                        <i class="bx bx-dots-vertical-rounded"></i>
                                                                    </button>
                                                                    <ul class="dropdown-menu dropdown-menu-end">
                                                                        <li><a class="dropdown-item" href="#"> Last 1
                                                                                Month</a></li>
                                                                        <li><a class="dropdown-item" href="#"> Last 3
                                                                                Months</a></li>
                                                                        <li><a class="dropdown-item" href="#"> Last 6
                                                                                Months</a></li>
                                                                        <li><a class="dropdown-item" href="#"> Last 1
                                                                                Year</a></li>
                                                                    </ul>
                                                                </span>

                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="card-body ">
                                                        <div class="row">
                                                            <div class="rev-center">
                                                                <div class="col-md-12 col-md-12">
                                                                    <i class="mdi mdi-star-shooting"> </i>
                                                                </div>
                                                                <div class="col-md-12 col-md-12 text-center">
                                                                    <span class="rev-count"> 5 </span>
                                                                </div>

                                                                <div class="col-md-12 col-md-12 text-center">
                                                                    <i class="mdi mdi-arrow-down-thin decrease"> </i>
                                                                    <span style="color:orange">-61.54%</span>
                                                                </div>

                                                            </div>

                                                        </div>
                                                        <div class="row bottom">
                                                            <div class="col-md-12 col-xl-12">
                                                                <span> Sources </span>
                                                            </div>

                                                            <div class="col-md-4 col-xl-4 mt-2">
                                                                <span class="google-space ">
                                                                    <img src="assets/images/google.png" />
                                                                </span>
                                                            </div>
                                                            <div class="col-md-8 col-xl-8">

                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row mt-4">
                                            <div class="col-md-6 col-xl-6">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <div class="row">

                                                            <div class="col-md-7 col-xl-7">
                                                                <span>
                                                                    <h4 class="card-title mt-head"> Avg Rating</h4>
                                                                </span>
                                                            </div>
                                                            <div style=text-align:right class="col-md-5 col-xl-5">
                                                                <span>Last 6 Months </span>

                                                                <span class="dropdown">
                                                                    <button
                                                                        class="btn btn-link font-size-16 shadow-none text-muted dropdown-toggle"
                                                                        type="button" data-bs-toggle="dropdown"
                                                                        aria-expanded="false">
                                                                        <i class="bx bx-dots-vertical-rounded"></i>
                                                                    </button>
                                                                    <ul class="dropdown-menu dropdown-menu-end">
                                                                        <li><a class="dropdown-item" href="#"> Last 1
                                                                                Month</a></li>
                                                                        <li><a class="dropdown-item" href="#"> Last 3
                                                                                Months</a></li>
                                                                        <li><a class="dropdown-item" href="#"> Last 6
                                                                                Months</a></li>
                                                                        <li><a class="dropdown-item" href="#"> Last 1
                                                                                Year</a></li>
                                                                    </ul>
                                                                </span>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-body ">
                                                        <div class="row">
                                                            <div class="rev-center">
                                                                <div class="col-md-12 col-md-12">
                                                                    <i class="mdi mdi-star-check-outline"> </i>
                                                                </div>
                                                                <div class="col-md-12 col-md-12 text-center">
                                                                    <span class="rev-count"> 5 </span>
                                                                </div>
                                                                <div class="col-md-12 col-md-12 text-center">

                                                                    <i class="mdi mdi-star"></i>
                                                                    <i class="mdi mdi-star"></i>
                                                                    <i class="mdi mdi-star"></i>
                                                                    <i class="mdi mdi-star"></i>

                                                                    <i class=" mdi mdi-star"></i>
                                                                </div>

                                                                <div class="col-md-12 col-md-12 text-center">
                                                                    <i class="mdi mdi-arrow-up-thin increase"> </i>
                                                                    <span style="color:green">2.04%</span>
                                                                </div>

                                                            </div>
                                                            <div class="rev-center check">
                                                                <div class="col-md-12 col-md-12 mt-2 ">
                                                                    <small> 5 Reviews</small> <span
                                                                        class="progress"><span
                                                                            class="progress-bar bg-success"
                                                                            role="progressbar" style="width: 100%"
                                                                            aria-valuenow="100" aria-valuemin="0"
                                                                            aria-valuemax="100"></span> </span>
                                                                </div>
                                                                <div class="col-md-12 col-md-12 mt-2">
                                                                    <small> 4 Reviews</small> <span
                                                                        class="progress"><span
                                                                            class="progress-bar bg-success"
                                                                            role="progressbar" style="width: 20%"
                                                                            aria-valuenow="100" aria-valuemin="0"
                                                                            aria-valuemax="100"></span> </span>
                                                                </div>
                                                                <div class="col-md-12 col-md-12 mt-2">
                                                                    <small> 3 Reviews</small> <span
                                                                        class="progress"><span
                                                                            class="progress-bar bg-warning"
                                                                            role="progressbar" style="width: 20%"
                                                                            aria-valuenow="100" aria-valuemin="0"
                                                                            aria-valuemax="100"></span> </span>
                                                                </div>
                                                                <div class="col-md-12 col-md-12 mt-2">
                                                                    <small> 2 Reviews</small> <span
                                                                        class="progress"><span
                                                                            class="progress-bar bg-warning"
                                                                            role="progressbar" style="width: 10%"
                                                                            aria-valuenow="100" aria-valuemin="0"
                                                                            aria-valuemax="100"></span> </span>
                                                                </div>
                                                                <div class="col-md-12 col-md-12 mt-2">
                                                                    <small> 1 Reviews</small> <span
                                                                        class="progress"><span
                                                                            class="progress-bar bg-danger"
                                                                            role="progressbar" style="width: 10%"
                                                                            aria-valuenow="100" aria-valuemin="0"
                                                                            aria-valuemax="100"></span> </span>
                                                                </div>


                                                            </div>

                                                        </div>

                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-md-6 col-xl-6">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <div class="row">

                                                            <div class="col-md-7 col-xl-7">
                                                                <span>
                                                                    <h4 class="card-title mt-head"> Sentiments</h4>
                                                                </span>
                                                            </div>
                                                            <div style="text-align:right" class="col-md-5 col-xl-5">
                                                                <span>Last 6 Months </span>

                                                                <span class="dropdown">
                                                                    <button
                                                                        class="btn btn-link font-size-16 shadow-none text-muted dropdown-toggle"
                                                                        type="button" data-bs-toggle="dropdown"
                                                                        aria-expanded="false">
                                                                        <i class="bx bx-dots-vertical-rounded"></i>
                                                                    </button>
                                                                    <ul class="dropdown-menu dropdown-menu-end">
                                                                        <li><a class="dropdown-item" href="#"> Last 1
                                                                                Month</a></li>
                                                                        <li><a class="dropdown-item" href="#"> Last 3
                                                                                Months</a></li>
                                                                        <li><a class="dropdown-item" href="#"> Last 6
                                                                                Months</a></li>
                                                                        <li><a class="dropdown-item" href="#"> Last 1
                                                                                Year</a></li>
                                                                    </ul>
                                                                </span>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-body ">
                                                        <div class="row bottom-sec">
                                                            <div class="rev-center">
                                                                <div class="col-md-12 col-md-12 text-center">
                                                                    <span>Positive </span>
                                                                </div>
                                                                <div class="col-md-12 col-md-12">
                                                                    <i class="mdi mdi-emoticon-happy-outline happy">
                                                                    </i>
                                                                </div>
                                                                <div class="col-md-12 col-md-12 text-center">
                                                                    <span class="rev-count"> 4 </span>
                                                                </div>

                                                                <div class="col-md-12 col-md-12 text-center">
                                                                    <i class="mdi mdi-arrow-up-thin increase"> </i>
                                                                    <span style="color:green">100%</span>
                                                                </div>

                                                            </div>
                                                            <div class="rev-center">
                                                                <div class="col-md-12 col-md-12 text-center">
                                                                    <span>Negative </span>
                                                                </div>
                                                                <div class="col-md-12 col-md-12">
                                                                    <i class="mdi mdi-emoticon-sad-outline"> </i>
                                                                </div>
                                                                <div class="col-md-12 col-md-12 text-center">
                                                                    <span class="rev-count"> 0 </span>
                                                                </div>

                                                                <div class="col-md-12 col-md-12 text-center">
                                                                    <i class="mdi mdi-arrow-up-thin decrease-red"> </i>
                                                                    <span style="color:red">0%</span>
                                                                </div>

                                                            </div>


                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row mt-4">
                                            <div class="col-md-6 col-xl-6">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <div class="row">

                                                            <div class="col-md-7 col-xl-7">
                                                                <span>
                                                                    <h4 class="card-title mt-head"> Invite Trends</h4>
                                                                </span>
                                                            </div>
                                                            <div style="text-align:right" class="col-md-5 col-xl-5">
                                                                <span>Last 6 Months </span>

                                                                <span class="dropdown">
                                                                    <button
                                                                        class="btn btn-link font-size-16 shadow-none text-muted dropdown-toggle"
                                                                        type="button" data-bs-toggle="dropdown"
                                                                        aria-expanded="false">
                                                                        <i class="bx bx-dots-vertical-rounded"></i>
                                                                    </button>
                                                                    <ul class="dropdown-menu dropdown-menu-end">
                                                                        <li><a class="dropdown-item" href="#"> Last 1
                                                                                Month</a></li>
                                                                        <li><a class="dropdown-item" href="#"> Last 3
                                                                                Months</a></li>
                                                                        <li><a class="dropdown-item" href="#"> Last 6
                                                                                Months</a></li>
                                                                        <li><a class="dropdown-item" href="#"> Last 1
                                                                                Year</a></li>
                                                                    </ul>
                                                                </span>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="chart-card">

                                                            <div id="column_chart_datalabel" data-colors='["#5156be"]'
                                                                class="apex-charts" dir="ltr"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-xl-6">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <div class="row">

                                                            <div class="col-md-7 col-xl-7">
                                                                <span>
                                                                    <h4 class="card-title mt-head"> Review Trends</h4>
                                                                </span>
                                                            </div>
                                                            <div style="text-align:right" class="col-md-5 col-xl-5">
                                                                <span>Last 6 Months </span>

                                                                <span class="dropdown">
                                                                    <button
                                                                        class="btn btn-link font-size-16 shadow-none text-muted dropdown-toggle"
                                                                        type="button" data-bs-toggle="dropdown"
                                                                        aria-expanded="false">
                                                                        <i class="bx bx-dots-vertical-rounded"></i>
                                                                    </button>
                                                                    <ul class="dropdown-menu dropdown-menu-end">
                                                                        <li><a class="dropdown-item" href="#"> Last 1
                                                                                Month</a></li>
                                                                        <li><a class="dropdown-item" href="#"> Last 3
                                                                                Months</a></li>
                                                                        <li><a class="dropdown-item" href="#"> Last 6
                                                                                Months</a></li>
                                                                        <li><a class="dropdown-item" href="#"> Last 1
                                                                                Year</a></li>
                                                                    </ul>
                                                                </span>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-body ">
                                                        <div class="row bottom-third">
                                                            <div class="chart-card">

                                                                <div id="donut_chart"
                                                                    data-colors='["#2ab57d", "#5156be", "#fd625e", "#4ba6ef", "#ffbf53"]'
                                                                    class="apex-charts" dir="ltr"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 col-xl-6">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <div class="row">

                                                            <div class="col-md-8 col-xl-8">
                                                                <span>
                                                                    <h4 class="card-title mt-head"> Latest Review
                                                                        Requests</h4>
                                                                </span>
                                                            </div>
                                                            <div style="text-align:right" class="col-md-4 col-xl-4">
                                                                <span> <button class="btn btn-primary">View All</button></span>



                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-body">
                                                        <table class="table ">
                                                            <thead>
                                                                <tr>
                                                                    <th scope="col">Invite Sent to</th>
                                                                    <th scope="col">Email / Phone</th>

                                                                    <th scope="col">Date Sent</th>



                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td><span class="rounded-bd initial text-center"> CR
                                                                        </span> Cassandra Ramos </td>
                                                                    <td>(786) 683-6424</td>

                                                                    <td>11/28/2022</td>



                                                                </tr>
                                                                <tr>
                                                                    <td><span class="rounded-bd initial text-center"> CR
                                                                        </span> Cassandra Ramos </td>
                                                                    <td>(786) 683-6424</td>

                                                                    <td>11/28/2022</td>



                                                                </tr>


                                                            </tbody>
                                                        </table>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-md-6 col-xl-6">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <div class="row">

                                                            <div class="col-md-8 col-xl-8">
                                                                <span>
                                                                    <h4 class="card-title mt-head"> Latest Review
                                                                    </h4>
                                                                </span>
                                                            </div>
                                                            <div style="text-align:right" class="col-md-4 col-xl-4">
                                                                <span> <button class="btn btn-primary">View All</button></span>



                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="card-body">
                                                        <div class="row px-3">
                                                            <div class="card-body card rev-card ">
                                                                <div class="row align-items-center">
                                                                    <div class="col-md-6">
                                                                        <i class="mr-2 mdi mdi-google"></i>
                                                                        <span class="mr-2"
                                                                            style="color:black;font-weight:bold">Mohammad
                                                                            Ali
                                                                            Akil</span>
                                                                        <i class="mdi mdi-star"></i>
                                                                        <i class="mdi mdi-star"></i>
                                                                        <i class="mdi mdi-star"></i>
                                                                        <i class="mr-2 mdi mdi-star"></i>
                                                                        <i
                                                                            class="mr-2 mdi mdi-emoticon-happy-outline"></i>



                                                                    </div>
                                                                    <div class="col-md-6" style="text-align:right">
                                                                        <small style="color:black;font-weight:400">Nov
                                                                            24th
                                                                            2022, 9:42pm</small>

                                                                    </div>
                                                                </div>
                                                                <div class="row mt-4">
                                                                    <p>It was a life changing treatment for me. All my
                                                                        Depressive symptoms went away completly, my
                                                                        motivation
                                                                        got back. I thank each and everyone from the
                                                                        Elevate TMS
                                                                        team for being supportive and help me reach my
                                                                        mental
                                                                        state goals. I honestly feel like myself
                                                                    </p>
                                                                </div>



                                                            </div>
                                                        </div>
                                                        <div class="row px-3">
                                                            <div class="card-body card rev-card ">
                                                                <div class="row align-items-center">
                                                                    <div class="col-md-6">
                                                                        <i class="mr-2 mdi mdi-google"></i>
                                                                        <span class="mr-2"
                                                                            style="color:black;font-weight:bold">Mohammad
                                                                            Ali
                                                                            Akil</span>
                                                                        <i class="mdi mdi-star"></i>
                                                                        <i class="mdi mdi-star"></i>
                                                                        <i class="mdi mdi-star"></i>
                                                                        <i class="mr-2 mdi mdi-star"></i>
                                                                        <i
                                                                            class="mr-2 mdi mdi-emoticon-happy-outline"></i>



                                                                    </div>
                                                                    <div class="col-md-6" style="text-align:right">
                                                                        <small style="color:black;font-weight:400">Nov
                                                                            24th
                                                                            2022, 9:42pm</small>

                                                                    </div>
                                                                </div>
                                                                <div class="row mt-4">
                                                                    <p>It was a life changing treatment for me. All my
                                                                        Depressive symptoms went away completly, my
                                                                        motivation
                                                                        got back. I thank each and everyone from the
                                                                        Elevate TMS
                                                                        team for being supportive and help me reach my
                                                                        mental
                                                                        state goals. I honestly feel like myself
                                                                    </p>
                                                                </div>



                                                            </div>
                                                        </div>
                                                        <div class="row px-3">
                                                            <div class="card-body card rev-card ">
                                                                <div class="row align-items-center">
                                                                    <div class="col-md-6">
                                                                        <i class="mr-2 mdi mdi-google"></i>
                                                                        <span class="mr-2"
                                                                            style="color:black;font-weight:bold">Mohammad
                                                                            Ali
                                                                            Akil</span>
                                                                        <i class="mdi mdi-star"></i>
                                                                        <i class="mdi mdi-star"></i>
                                                                        <i class="mdi mdi-star"></i>
                                                                        <i class="mr-2 mdi mdi-star"></i>
                                                                        <i
                                                                            class="mr-2 mdi mdi-emoticon-happy-outline"></i>



                                                                    </div>
                                                                    <div class="col-md-6" style="text-align:right">
                                                                        <small style="color:black;font-weight:400">Nov
                                                                            24th
                                                                            2022, 9:42pm</small>

                                                                    </div>
                                                                </div>
                                                                <div class="row mt-4">
                                                                    <p>It was a life changing treatment for me. All my
                                                                        Depressive symptoms went away completly, my
                                                                        motivation
                                                                        got back. I thank each and everyone from the
                                                                        Elevate TMS
                                                                        team for being supportive and help me reach my
                                                                        mental
                                                                        state goals. I honestly feel like myself
                                                                    </p>
                                                                </div>



                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Third pane end card -->


                        </div>
                        <!-- Parent pane end card -->

                        <!-- end col -->

                        <!-- end col -->
                    </div><!-- end row -->
                </div>
                <!-- container-fluid -->
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>

<!-- review modal -->
<div class="modal fade" id="review" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel"> Client Check In</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="floatingInput" placeholder="name">
                            <label for="floatingInput">Customer Name</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingInput" placeholder="email">
                            <label for="floatingInput">Customer email or phone</label>
                        </div>
               

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary">Send a Review Invite</button>
            </div>
        </div>
    </div>
</div>
<script src="assets/js/pages/line-chart2.js"></script>
<script src="assets/libs/apexcharts/apexcharts.min.js"></script>
<script src="assets/js/pages/donut_chart.js"></script>

<script>
    
var pieColors = getChartColorsArray("#pie_chart3"),
  options = {
    chart: { height: 320, type: "pie" },
    series: [44, 55],
    labels: ["John Doe", "Shao Kahn"],
    colors: pieColors,
    legend: {
      show: !0,
      position: "bottom",
      horizontalAlign: "center",
      verticalAlign: "middle",
      floating: !1,
      fontSize: "14px",
      offsetX: 0,
    },
    responsive: [
      {
        breakpoint: 600,
        options: { chart: { height: 240 }, legend: { show: !1 } },
      },
    ],
  };
(chart = new ApexCharts(
  document.querySelector("#pie_chart3"),
  options
)).render();
</script>



<script>
function Check(event) {
    let selVal = event.target.value
    console.log(selVal)


    if (selVal === 'monday') {
        document.getElementById('mon-card').style.display = "block"
    }
    if (selVal === 'tuesday') {
        document.getElementById('tue-card').style.display = "block"
    }
    if (selVal === 'wednesday') {
        document.getElementById('wed-card').style.display = "block"
    }
    if (selVal === 'thursday') {
        document.getElementById('thurs-card').style.display = "block"
    }
    if (selVal === 'friday') {
        document.getElementById('fri-card').style.display = "block"
    }
    if (selVal === 'saturday') {
        document.getElementById('sat-card').style.display = "block"
    }

    if (selVal === 'sunday') {
        document.getElementById('sun-card').style.display = "block"
    }



}

function Close(event) {
    var parentDiv = event.target.parentNode.parentNode.parentNode.parentNode.parentNode
    parentDiv.style.display = "none"

}
$("#email").click(function() {
    $("#sms_btn").hide();
    $("#email_btn").show();
});
$("#sms").click(function() {
    $("#sms_btn").show();
    $("#email_btn").hide();
});
</script>
<?php require_once "footer.php" ?>