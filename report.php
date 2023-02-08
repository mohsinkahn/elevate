<?php require_once("header.php") ?>



<style>
    .head {
        /* border : 2px solid red; */
        margin-top: -30px
    }

    .ml-5 {
        /* border : 2px s   olid red; */
        margin-left: 2%;

    }


    .chart-card {
        /* background-color : red; */
        padding: 5px 0px !important;
    }

    .linegraph-card {
        max-height: 420px !important;
    }

    .bar-card {
        max-height: 420px !important;
    }

    .stats-card {
        display: flex;
        justify-content: space-around;
        flex-direction: column;
    }

    .stats-card>.row {
        margin: 0 auto;
        margin-top: 10px
    }

    .stats-card>.row>.col {
        margin-top: 10px;
    }

    .stats-card>.row>.col>.increase {
        color: green;
        background-color: rgba(50, 205, 50, 0.1);
        padding: 5px 10px;
        border: 1px solid green;
        border-radius: 5px;
    }

    .stats-card>.row>.col>.decrease {
        color: red;
        background-color: rgba(255, 0, 0, 0.1);
        padding: 5px 10px;
        border: 1px solid red;
        border-radius: 5px;
    }

    .card-row {
        margin-top: 5% !important;
    }

    .badge {
        padding: 5px 10px !important;
        font-size: small;
    }

    .second-row-card {
        /* border-radius : 10px !important; */
        box-shadow: rgba(99, 99, 99, 0.1) 0px 2px 8px 0px;
    }

    .table-card {
        border-radius: 0.25rem !important;

        box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;
        height: 280px !important;
    }

    .table-card>h4 {
        font-size: large !important;
        margin-left: 20px !important;
    }

    .agent-table {
        position: relative;
        width: 100% !important;
        /* background-color:red; */
    }

    .agent-table>tbody>tr {
        margin-top: 10% !important;
        font-size: small;
        border-bottom: 1px solid rgb(0, 0, 0, 0.2);
        font-weight: 500;
    }

    .agent-table>tbody>tr>td {
        padding: 8px 0px;
    }

    .grad-table>tbody>tr>td {
        padding: 100px 0px;
        color: white
    }

    .grad-table>tbody>tr>th {
        color: white;
        font-weight: bold;
    }

    .grad-card>h4 {
        color: white;
    }

    .grad-table>tbody>tr {
        font-size: medium;
        border-bottom: 1px solid rgb(255, 255, 255, 0.5);
        font-weight: 500;
        color: white
    }

    .grad-card-w {
        height: 580px !important;
        background-image: linear-gradient(to top, #3787D2, #101494);
        border-radius: 0.25rem !important;
    }

    .metrics-row {
        box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;

    }

    .metrics-card {
        box-shadow: none !important;
        border: none !important;
    }

    .td-left {
        text-align: left;
    }

    .td-center {
        text-align: center;

    }

    .td-right {
        text-align: right;

    }

    .eff-card {
        margin-top: 20px;
        margin-left: -2%;
    }

    .agent-sec-col {
        margin-left: 20px;
    }

    .arr-increase {
        color: green;
        font-size: medium;
    }

    .arr-decrease {
        color: red;
        font-size: medium;
    }

    .leader-card {
        border-radius: 5px;
    }

    .grad-card {
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        padding: 5px 10px;
    }

    .second-row-card-app {
        border-radius: 20px;
    }
</style>

<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12">
                <div class="card border-none">
                    <div class="card-header align-items-center py-2 border-none">
                        <div class="row">
                            <div class="col-md-6 col-6 mt-2">
                                <h4 class="card-title mb-0 mt-head">Reporting</h4>
                                </h4>
                            </div>

                        </div>
                    </div>
                    <!-- end card header -->

                    <div class="card-body">
                        <div class="card border-none">
                            <div class="card-header mt-2 align-items-center d-flex">

                                <div class="flex-shrink-0">
                                    <ul class="nav justify-content-start nav-tabs-custom rounded card-header-tabs"
                                        role="tablist">

                                        <li class="nav-item">
                                            <a class="nav-link active" data-bs-toggle="tab" href="#calls" role="tab"
                                                id="sms">

                                                <span class=" d-sm-block">Call Reporting</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#agent" role="tab" id="sms">

                                                <span class=" d-sm-block">Agent Reporting</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#report" role="tab" id="sms">

                                                <span class=" d-sm-block">Appointment Report</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                            </div><!-- end card header -->`

                            <!-- <div class="col-md-6 col-6 ml-5">
                                <h4 class="card-title mb-0 mt-head">Call Stats</h4>
                            </div> -->

                            <div class="card-body border-none">



                                <div class="tab-content text-muted campaign">
                                    <!-- Tab panes  |  Call reporting Pane -->

                                    <div class="tab-pane active" id="calls" role="tabpanel">
                                        <h4 class="card-title mb-4  mt-head">Call Stats</h4>
                                        <div class="row">
                                            <div class="col-xl-4">
                                                <div class="card p-2 mb-sm-0 linegraph-card">
                                                    <div class="card-header">
                                                        <h4 class="card-title mb-0">Answered vs Missed Calls</h4>
                                                    </div>
                                                    <div class="card-body">
                                                        <div id="donut_chart"
                                                            data-colors='["#2ab57d", "#5156be", "#fd625e", "#4ba6ef", "#ffbf53"]'
                                                            class="apex-charts" dir="ltr"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end col -->

                                            <div class="col-xl-4">
                                                <div class="card p-2 mb-sm-0 bar-card">
                                                    <!-- card body -->
                                                    <div class="card-header pb-1 ">
                                                        <h5 class="card-title me-2">Top Sources</h5>

                                                    </div>
                                                    <div class="card-body chart-card">

                                                        <div id="column_chart_datalabel" data-colors='["#5156be"]'
                                                            class="apex-charts linegraph" dir="ltr"></div>
                                                    </div>
                                                    <!-- end card body -->
                                                </div>
                                            </div>


                                            <!-- end col -->
                                            <div class="col-xl-4">
                                                <div class="card p-2 mb-sm-0 ">
                                                    <div class="card-header">
                                                        <h4 class="card-title mb-0">Calls</h4>
                                                    </div>
                                                    <div class="card-body">
                                                        <div>
                                                            <div id="line_chart_datalabel" data-colors='["#5156be"]'
                                                                class="apex-charts" dir="ltr"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end col -->
                                        </div>

                                        <!-- Cards Row -->

                                        <div class="row card-row">
                                            <div class="col-xl-3">
                                                <div class="card p-2 mb-sm-0 second-row-card">
                                                    <div class="card-header">
                                                        <h4 class="card-title ">Answered</h4>
                                                    </div>
                                                    <div class="card-body stats-card">
                                                        <div class="row ">
                                                            <div class='col'>
                                                                <h1> 457 </h1>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class='col'>
                                                                <span class='increase'> <i
                                                                        class="mdi mdi-arrow-up-thin"> </i> 66%</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3">
                                                <div class="card p-2 mb-sm-0 second-row-card">
                                                    <div class="card-header">
                                                        <h4 class="card-title ">Missed</h4>
                                                    </div>
                                                    <div class="card-body stats-card">
                                                        <div class="row ">
                                                            <div class='col'>
                                                                <h1> 69 </h1>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class='col'>
                                                                <span class='decrease'> <i
                                                                        class="mdi mdi-arrow-down-thin"> </i>
                                                                    214%</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3">
                                                <div class="card p-2 mb-sm-0 second-row-card">
                                                    <div class="card-header">
                                                        <h4 class="card-title ">First Time Calls</h4>
                                                    </div>
                                                    <div class="card-body stats-card">
                                                        <div class="row ">
                                                            <div class='col'>
                                                                <h1> 40 </h1>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class='col'>
                                                                <span class='increase'><i class="mdi mdi-arrow-up-thin">
                                                                    </i> 60%</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3">
                                                <div class="card p-2 mb-sm-0 second-row-card">
                                                    <div class="card-header">
                                                        <h4 class="card-title ">Average Call Duration</h4>
                                                    </div>
                                                    <div class="card-body stats-card">
                                                        <div class="row ">
                                                            <div class='col'>
                                                                <h1> 03:18 </h1>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class='col'>
                                                                <span class='decrease'><i
                                                                        class="mdi mdi-arrow-down-thin"> </i> 6%</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row card-row">

                                            <div class="table-responsive">
                                                <div class="row mt-4">
                                                    <h4 style="margin-left:10px">Latest Phone Calls </h4>
                                                </div>

                                                <table
                                                    class="table align-middle datatable dt-responsive table-check nowrap"
                                                    style="border-collapse: collapse; border-spacing: 0 8px; width: 100%;">
                                                    <thead>
                                                        <tr style="text-align:center">

                                                            <th scope="col">Date</th>
                                                            <th scope="col">Name</th>
                                                            <th scope="col">Call Source</th>
                                                            <th scope="col">Source Type</th>
                                                            <th scope="col">Phone Number</th>
                                                            <th scope="col">Answered</th>
                                                            <th scope="col">First Call</th>
                                                            <th scope="col">Keyword</th>
                                                            <th scope="col">Duration</th>
                                                            <th scope="col">Device Type</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr style="text-align:center">

                                                            <td>
                                                                February 6th 2023, 11:56:41 pm
                                                            </td>
                                                            <td> <a href=#> Ariana KAUFMAN </a></td>
                                                            <td>Master Pipeline</td>
                                                            <td>

                                                                --
                                                            </td>
                                                            <td>
                                                                (901)828-5431
                                                            </td>
                                                            <td>
                                                                <a href="#" class="badge badge-soft-success">Yes</a>
                                                            </td>
                                                            <td>
                                                                <a href="#" class="badge badge-soft-danger">No</a>
                                                            </td>

                                                            <td>
                                                                --
                                                            </td>
                                                            <td>
                                                                00:28
                                                            </td>
                                                            <td>
                                                                --
                                                            </td>


                                                        </tr>


                                                        <tr style="text-align:center">

                                                            <td>
                                                                February 6th 2023, 11:56:41 pm
                                                            </td>
                                                            <td> <a href=#> Ariana KAUFMAN </a></td>
                                                            <td>Master Pipeline</td>
                                                            <td>

                                                                --
                                                            </td>
                                                            <td>
                                                                (901)828-5431
                                                            </td>
                                                            <td>
                                                                <a href="#" class="badge badge-soft-success">Yes</a>
                                                            </td>
                                                            <td>
                                                                <a href="#" class="badge badge-soft-danger">No</a>
                                                            </td>

                                                            <td>
                                                                --
                                                            </td>
                                                            <td>
                                                                00:28
                                                            </td>
                                                            <td>
                                                                --
                                                            </td>


                                                        </tr>



                                                        <tr style="text-align:center">

                                                            <td>
                                                                February 6th 2023, 11:56:41 pm
                                                            </td>
                                                            <td> <a href=#> Ariana KAUFMAN </a></td>
                                                            <td>Master Pipeline</td>
                                                            <td>

                                                                --
                                                            </td>
                                                            <td>
                                                                (901)828-5431
                                                            </td>
                                                            <td>
                                                                <a href="#" class="badge badge-soft-success">Yes</a>
                                                            </td>
                                                            <td>
                                                                <a href="#" class="badge badge-soft-danger">No</a>
                                                            </td>

                                                            <td>
                                                                --
                                                            </td>
                                                            <td>
                                                                00:28
                                                            </td>
                                                            <td>
                                                                --
                                                            </td>


                                                        </tr>


                                                        <tr style="text-align:center">

                                                            <td>
                                                                February 6th 2023, 11:56:41 pm
                                                            </td>
                                                            <td> <a href=#> Ariana KAUFMAN </a></td>
                                                            <td>Master Pipeline</td>
                                                            <td>

                                                                --
                                                            </td>
                                                            <td>
                                                                (901)828-5431
                                                            </td>
                                                            <td>
                                                                <a href="#" class="badge badge-soft-success">Yes</a>
                                                            </td>
                                                            <td>
                                                                <a href="#" class="badge badge-soft-danger">No</a>
                                                            </td>

                                                            <td>
                                                                --
                                                            </td>
                                                            <td>
                                                                00:28
                                                            </td>
                                                            <td>
                                                                --
                                                            </td>


                                                        </tr>



                                                    </tbody>
                                                </table>
                                            </div>

                                        </div>

                                    </div>


                                    <!-- Call Reporting Pane End -->


                                    <!-- Agent Reporting Pane Start -->

                                    <div class="tab-pane" id="agent" role="tabpanel">
                                        <h4 class="card-title mb-4  mt-head">Agent Reporting</h4>
                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="row">
                                                    <div class="col-md-6">

                                                        <div class="card table-card ">
                                                            <h4 class="card-title mt-3  ">Opportunities</h4>

                                                            <div class="card-body agent-card-body">
                                                                <table class="table agent-table"
                                                                    style="border-collapse: collapse; border-spacing: 0 8px; width: 100%;">

                                                                    <tbody>

                                                                        <tr>
                                                                            <td class="td-left">Total Leads</td>
                                                                            <td class="td-center">3</td>
                                                                            <td class="td-right"> <i
                                                                                    class="mdi mdi-arrow-up-thin arr-increase">
                                                                                </i> 100%</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="td-left">Open</td>
                                                                            <td class="td-center">2</td>
                                                                            <td class="td-right"> <i
                                                                                    class="mdi mdi-arrow-up-thin arr-increase">
                                                                                </i> 100%</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="td-left">Won</td>
                                                                            <td class="td-center">0</td>
                                                                            <td class="td-right">0%</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <!-- <th scope="row">3</th> -->
                                                                            <td class="td-left">Abandoned</td>
                                                                            <td class="td-center">0</td>
                                                                            <td class="td-right">0%</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <!-- <th scope="row">3</th> -->
                                                                            <td class="td-left">Lost</td>
                                                                            <td class="td-center"> 1</td>
                                                                            <td class="td-right"> <i
                                                                                    class="mdi mdi-arrow-up-thin arr-increase">
                                                                                </i> 100%</td>
                                                                        </tr>
                                                                    </tbody>

                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="card table-card ">
                                                            <h4 class="card-title mt-3  ">SMS</h4>

                                                            <div class="card-body agent-card-body">
                                                                <table class="table agent-table"
                                                                    style="border-collapse: collapse; border-spacing: 0 8px; width: 100%;">

                                                                    <tbody>

                                                                        <tr>
                                                                            <td class="td-left">Sent</td>
                                                                            <td class="td-center">12</td>
                                                                            <td class="td-right"> <i
                                                                                    class="mdi mdi-arrow-down-thin arr-decrease">
                                                                                </i> 54%</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="td-left">Delivered</td>
                                                                            <td class="td-center">11</td>
                                                                            <td class="td-right"> <i
                                                                                    class="mdi mdi-arrow-down-thin arr-decrease">
                                                                                </i> 54%</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="td-left">Clicked</td>
                                                                            <td class="td-center">0</td>
                                                                            <td class="td-right">0%</td>
                                                                        </tr>

                                                                        <tr>
                                                                            <!-- <th scope="row">3</th> -->
                                                                            <td class="td-left">Failed</td>
                                                                            <td class="td-center"> 1</td>
                                                                            <td class="td-right"> <i
                                                                                    class="mdi mdi-arrow-down-thin arr-decrease">
                                                                                </i> 50%</td>
                                                                        </tr>

                                                                    </tbody>

                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="card table-card ">
                                                            <h4 class="card-title mt-3  ">Conversions</h4>
                                                            <div class="card-body agent-card-body">
                                                                <table class="table agent-table"
                                                                    style="border-collapse: collapse; border-spacing: 0 8px; width: 100%;">

                                                                    <tbody>

                                                                        <tr>
                                                                            <td class="td-left">Lead In</td>
                                                                            <td class="td-center">0</td>
                                                                            <td class="td-right"> 0%</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="td-left">Texted Back</td>
                                                                            <td class="td-center">0</td>
                                                                            <td class="td-right"> 0%</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="td-left">Calls 2-5</td>
                                                                            <td class="td-center">1</td>
                                                                            <td class="td-right"> <i
                                                                                    class="mdi mdi-arrow-up-thin arr-increase">
                                                                                </i> 100%</td>
                                                                        </tr>

                                                                        <tr>
                                                                            <!-- <th scope="row">3</th> -->
                                                                            <td class="td-left">Calls 6-10</td>
                                                                            <td class="td-center"> 1</td>
                                                                            <td class="td-right"> <i
                                                                                    class="mdi mdi-arrow-up-thin arr-increase">
                                                                                </i> 100%</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <!-- <th scope="row">3</th> -->
                                                                            <td class="td-left">Consult</td>
                                                                            <td class="td-center">0</td>
                                                                            <td class="td-right">0%</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="card table-card ">
                                                            <h4 class="card-title mt-3  ">Email</h4>

                                                            <div class="card-body agent-card-body">
                                                                <table class="table agent-table"
                                                                    style="border-collapse: collapse; border-spacing: 0 8px; width: 100%;">

                                                                    <tbody>

                                                                        <tr>
                                                                            <td class="td-left">Sent</td>
                                                                            <td class="td-center">0</td>
                                                                            <td class="td-right"> <i
                                                                                    class="mdi mdi-arrow-down-thin arr-decrease">
                                                                                </i> 100%</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="td-left">Opened</td>
                                                                            <td class="td-center">0</td>
                                                                            <td class="td-right"> <i
                                                                                    class="mdi mdi-arrow-down-thin arr-decrease">
                                                                                </i> 100%</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="td-left">Clicked</td>
                                                                            <td class="td-center">0</td>
                                                                            <td class="td-right">0%</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <!-- <th scope="row">3</th> -->
                                                                            <td class="td-left">Replied</td>
                                                                            <td class="td-center">0</td>
                                                                            <td class="td-right">0%</td>
                                                                        </tr>


                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">

                                                <div class="col-md-12">
                                                    <div class="card table-card grad-card-w ">
                                                        <span class="grad-card">
                                                            <h4 class="card-title mt-3  ">Leaderboard</h4>

                                                            <div class="dropdown show mt-2">
                                                                <select class="form-select">
                                                                    <option>Most Won</option>
                                                                    <option>Most Won Opportunity</option>

                                                                </select>
                                                            </div>
                                                        </span>


                                                        <div class="card-body agent-card-body ">
                                                            <table class="table grad-table"
                                                                style="border-collapse: collapse; border-spacing: 0 8px; width: 100%;">

                                                                <tbody>
                                                                    <tr>
                                                                        <th class="td-left">Rank</th>
                                                                        <th class="td-center">Agent Name</th>
                                                                        <th class="td-right">Points</th>
                                                                    </tr>

                                                                    <tr>
                                                                        <td class="td-left">1</td>
                                                                        <td class="td-center">Melanie Franklin</td>
                                                                        <td class="td-right">
                                                                            2</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="td-left">1</td>
                                                                        <td class="td-center">Gineth Ortega</td>
                                                                        <td class="td-right">
                                                                            1</td>
                                                                    </tr>



                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-12">


                                                <div class="row metrics-row">
                                                    <div class="row mt-4">
                                                        
                                        <h4 style="margin-left:10px" class="card-title mb-4  mt-head">Call Metrics</h4>

                                                    </div>

                                                    <div class="col-md-3">
                                                        <div class="card table-card metrics-card ">
                                                            <h4 class="card-title mt-3  ">Automation Calls</h4>

                                                            <div class="card-body agent-card-body">
                                                                <table class="table agent-table"
                                                                    style="border-collapse: collapse; border-spacing: 0 8px; width: 100%;">

                                                                    <tbody>

                                                                        <tr>
                                                                            <td class="td-left">Total Calls</td>
                                                                            <td class="td-center">0</td>
                                                                            <td class="td-right">0%</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="td-left">Answered</td>
                                                                            <td class="td-center">0</td>
                                                                            <td class="td-right">0%</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="td-left">Agent Missed</td>
                                                                            <td class="td-center">0</td>
                                                                            <td class="td-right">0%</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="td-left">Lead Missed</td>
                                                                            <td class="td-center">0</td>
                                                                            <td class="td-right">0%</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="td-left">Failed</td>
                                                                            <td class="td-center">0</td>
                                                                            <td class="td-right">0%</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="td-left">Average Duration</td>
                                                                            <td class="td-center">0s</td>
                                                                            <td class="td-right">0%</td>
                                                                        </tr>

                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3">
                                                        <div class="card table-card metrics-card">
                                                            <h4 class="card-title mt-3  ">Mannual Action Calls</h4>

                                                            <div class="card-body agent-card-body">
                                                                <table class="table agent-table"
                                                                    style="border-collapse: collapse; border-spacing: 0 8px; width: 100%;">

                                                                    <tbody>

                                                                        <tr>
                                                                            <td class="td-left">Total Calls</td>
                                                                            <td class="td-center">0</td>
                                                                            <td class="td-right">0%</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="td-left">Answered</td>
                                                                            <td class="td-center">0</td>
                                                                            <td class="td-right">0%</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="td-left">Missed</td>
                                                                            <td class="td-center">0</td>
                                                                            <td class="td-right">0%</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="td-left">Failed</td>
                                                                            <td class="td-center">0</td>
                                                                            <td class="td-right">0%</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="td-left">Avg Call Duration</td>
                                                                            <td class="td-center">0</td>
                                                                            <td class="td-right">0%</td>
                                                                        </tr>

                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3">
                                                        <div class="card table-card  metrics-card">
                                                            <h4 class="card-title mt-3  ">Dialer Calls</h4>

                                                            <div class="card-body agent-card-body">
                                                                <table class="table agent-table"
                                                                    style="border-collapse: collapse; border-spacing: 0 8px; width: 100%;">

                                                                    <tbody>

                                                                        <tr>
                                                                            <td class="td-left">Total Calls</td>
                                                                            <td class="td-center">21</td>
                                                                            <td class="td-right">0%</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="td-left">Answered</td>
                                                                            <td class="td-center">21</td>
                                                                            <td class="td-right"> <i
                                                                                    class="mdi mdi-arrow-up-thin arr-increase">
                                                                                </i> 40%</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="td-left">Missed</td>
                                                                            <td class="td-center">0</td>
                                                                            <td class="td-right"> <i
                                                                                    class="mdi mdi-arrow-up-thin arr-increase">
                                                                                </i> 100%</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="td-left">Failed</td>
                                                                            <td class="td-center">0</td>
                                                                            <td class="td-right">0%</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="td-left">Avg Call Duration</td>
                                                                            <td class="td-center">1m 29s</td>
                                                                            <td class="td-right"> <i
                                                                                    class="mdi mdi-arrow-down-thin arr-decrease">
                                                                                </i> 61%</td>
                                                                        </tr>


                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3">
                                                        <div class="card table-card metrics-card ">
                                                            <h4 class="card-title mt-3  ">Incoming Calls</h4>

                                                            <div class="card-body agent-card-body">
                                                                <table class="table agent-table"
                                                                    style="border-collapse: collapse; border-spacing: 0 8px; width: 100%;">

                                                                    <tbody>
                                                                        <tr>
                                                                            <td class="td-left">Total Calls</td>
                                                                            <td class="td-center">5</td>
                                                                            <td class="td-right"> <i
                                                                                    class="mdi mdi-arrow-up-thin arr-increase">
                                                                                </i> 150%</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="td-left">Answered</td>
                                                                            <td class="td-center">3</td>
                                                                            <td class="td-right"> <i
                                                                                    class="mdi mdi-arrow-up-thin arr-increase">
                                                                                </i> 50%</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="td-left">Missed</td>
                                                                            <td class="td-center">2</td>
                                                                            <td class="td-right"> <i
                                                                                    class="mdi mdi-arrow-up-thin arr-increase">
                                                                                </i> 100%</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="td-left">Failed</td>
                                                                            <td class="td-center">0</td>
                                                                            <td class="td-right">0%</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="td-left">Avg Call Duration</td>
                                                                            <td class="td-center">3m 43s</td>
                                                                            <td class="td-right"> <i
                                                                                    class="mdi mdi-arrow-down-thin arr-decrease">
                                                                                </i> 100%</td>
                                                                        </tr>

                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>



                                                </div>
                                                <div class="col-md-4">
                                                    <div class="card table-card eff-card">
                                                        <h4 class="card-title mt-3  ">Efficeincy</h4>

                                                        <div class="card-body agent-card-body">
                                                            <table class="table agent-table"
                                                                style="border-collapse: collapse; border-spacing: 0 8px; width: 100%;">

                                                                <tbody>

                                                                    <tr>
                                                                        <td class="td-left">Total Sale Value</td>
                                                                        <td class="td-center">$0</td>
                                                                        <td class="td-right"> <i
                                                                                class="mdi mdi-arrow-up-thin arr-increase">
                                                                            </i> 0%</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="td-left">Average Sales Duration</td>
                                                                        <td class="td-center">0s</td>
                                                                        <td class="td-right"> <i
                                                                                class="mdi mdi-arrow-up-thin arr-increase">
                                                                            </i> 100%</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="td-left">Sales Velocity</td>
                                                                        <td class="td-center">$0/M</td>
                                                                        <td class="td-right"> <i
                                                                                class="mdi mdi-arrow-up-thin arr-increase">
                                                                            </i> 0%</td>
                                                                    </tr>



                                                            </table>
                                                        </div>
                                                    </div>

                                                </div>



                                            </div>
                                        </div>




                                    </div>





                                    <!-- Agent Reporting Pane End -->


                                    <!-- Tab panes  |  App reporting Pane -->
                                    <div class="tab-pane" id="report" role="tabpanel">
                                        <h4 class="card-title   mt-head">Appointment Report</h4>


                                        <!-- Cards Row -->

                                        <div class="row card-row mt-2">
                                            <div class="col-xl-3">
                                                <div class="card p-2 mb-sm-0 second-row-card-app">
                                                    <div class="card-header">
                                                        <h4 class="card-title ">Booked</h4>
                                                    </div>
                                                    <div class="card-body stats-card">
                                                        <div class="row ">
                                                            <div class='col'>
                                                                <h1> 39 </h1>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3">
                                                <div class="card p-2 mb-sm-0 second-row-card-app">
                                                    <div class="card-header">
                                                        <h4 class="card-title ">Confirmed</h4>
                                                    </div>
                                                    <div class="card-body stats-card">
                                                        <div class="row ">
                                                            <div class='col'>
                                                                <h1> 34 </h1>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3">
                                                <div class="card p-2 mb-sm-0 second-row-card-app">
                                                    <div class="card-header">
                                                        <h4 class="card-title ">First Time Calls</h4>
                                                    </div>
                                                    <div class="card-body stats-card">
                                                        <div class="row ">
                                                            <div class='col'>
                                                                <h1> 40 </h1>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3">
                                                <div class="card p-2 mb-sm-0 second-row-card-app">
                                                    <div class="card-header">
                                                        <h4 class="card-title ">Average Call Duration</h4>
                                                    </div>
                                                    <div class="card-body stats-card">
                                                        <div class="row ">
                                                            <div class='col'>
                                                                <h1> 03:18 </h1>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mt-4">
                                            <div class="col-xl-4">
                                                <div class="card p-2 mb-sm-0 linegraph-card">
                                                    <div class="card-header">
                                                        <h4 class="card-title mb-0">Answered vs Missed Calls</h4>
                                                    </div>
                                                    <div class="card-body">
                                                        <div id="pie_chart"
                                                            data-colors='["#2ab57d", "#5156be", "#fd625e", "#4ba6ef", "#ffbf53"]'
                                                            class="apex-charts" dir="ltr"></div>

                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end col -->

                                            <div class="col-xl-4">
                                                <div class="card p-2 mb-sm-0 bar-card">
                                                    <!-- card body -->
                                                    <div class="card-header pb-1 ">
                                                        <h5 class="card-title me-2">Top Sources</h5>

                                                    </div>
                                                    <div class="card-body">
                                                        <div id="pie_chart1"
                                                            data-colors='["#2ab57d", "#5156be", "#fd625e", "#4ba6ef", "#ffbf53"]'
                                                            class="apex-charts" dir="ltr"></div>

                                                    </div>
                                                    <!-- end card body -->
                                                </div>
                                            </div>


                                            <!-- end col -->
                                            <div class="col-xl-4">
                                                <div class="card p-2 mb-sm-0 ">
                                                    <div class="card-header">
                                                        <h4 class="card-title mb-0">Calls</h4>
                                                    </div>
                                                    <div class="card-body">
                                                        <div id="pie_chart2"
                                                            data-colors='["#2ab57d", "#5156be", "#fd625e", "#4ba6ef", "#ffbf53"]'
                                                            class="apex-charts" dir="ltr"></div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end col -->
                                        <div class="row card-row">

                                            <div class="table-responsive">


                                                <table
                                                    class="table align-middle datatable dt-responsive table-check nowrap"
                                                    style="border-collapse: collapse; border-spacing: 0 8px; width: 100%;">
                                                    <thead>
                                                        <tr style="text-align:center">

                                                            <th scope="col">Contact Name</th>
                                                            <th scope="col">Calendar</th>
                                                            <th scope="col">Requested Time</th>
                                                            <th scope="col">Date Edit</th>
                                                            <th scope="col">Created By</th>
                                                            <th scope="col">Mode</th>
                                                            <th scope="col">Source</th>
                                                            <th scope="col">Outcome</th>

                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr style="text-align:center">


                                                            <td> <a href="/elevate/view_contact.php"> Ariana KAUFMAN </a></td>
                                                            <td>Consultation</td>
                                                            <td>

                                                                Feb 01 2023 , 1:00pm
                                                            </td>
                                                            <td>
                                                                Feb 06 2023 , 4:00pm

                                                            </td>
                                                            <td>
                                                                Melanie Franklin
                                                            </td>
                                                            <td>
                                                                User
                                                            </td>

                                                            <td>
                                                                Melanie Franklin

                                                            </td>
                                                            <td>
                                                                Confirmed
                                                            </td>



                                                        </tr>


                                                        <tr style="text-align:center">


                                                            <td> <a href=#> Ariana KAUFMAN </a></td>
                                                            <td>Consultation</td>
                                                            <td>

                                                                Feb 01 2023 , 1:00pm
                                                            </td>
                                                            <td>
                                                                Feb 06 2023 , 4:00pm

                                                            </td>
                                                            <td>
                                                                Melanie Franklin
                                                            </td>
                                                            <td>
                                                                User
                                                            </td>

                                                            <td>
                                                                Melanie Franklin

                                                            </td>
                                                            <td>
                                                                Confirmed
                                                            </td>



                                                        </tr>



                                                        <tr style="text-align:center">


                                                            <td> <a href=#> Ariana KAUFMAN </a></td>
                                                            <td>Consultation</td>
                                                            <td>

                                                                Feb 01 2023 , 1:00pm
                                                            </td>
                                                            <td>
                                                                Feb 06 2023 , 4:00pm

                                                            </td>
                                                            <td>
                                                                Melanie Franklin
                                                            </td>
                                                            <td>
                                                                User
                                                            </td>

                                                            <td>
                                                                Melanie Franklin

                                                            </td>
                                                            <td>
                                                                Confirmed
                                                            </td>



                                                        </tr>



                                                        



                                                    </tbody>
                                                </table>
                                            </div>

                                        </div>

                                    </div>


                                </div>


                            </div>


                            <!-- App Report Pane End -->




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
    $("#email").click(function () {
        $("#sms_btn").hide();
        $("#email_btn").show();
    });
    $("#sms").click(function () {
        $("#sms_btn").show();
        $("#email_btn").hide();
    });

</script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>


<script src="assets/js/pages/line-chart2.js"></script>
<script src="assets/libs/apexcharts/apexcharts.min.js"></script>
<script src="assets/js/pages/donut_chart.js"></script>
<script src="assets/js/pages/rep.js"></script>



<?php require_once("footer.php") ?>