<?php require_once "header.php" ?>


<style>
    .d-sm-block {
        color: #3787d2 !important;
    }

    .ctext-wrap-content {
        background-color: #3787d2 !important;
        color: white !important;
    }

    .time,
    .user-name {
        color: white !important;
    }

    .nameDiv {
        margin: 0 auto;
        /* border: 2px solid red; */
        display: flex;
        flex-direction: column;
        justify-content: center;
        padding: 10px 0px !important;
    }

    .nameDiv>span {
        width: max-content;
        margin: 0 auto !important;
        padding: 10px;
        background-color: #3787d2;
        color: white;
        border-radius: 100%
    }

    a {
        text-decoration: none;
        font-size: small;
    }

    .mel {
        font-size: small;
    }

    .mdi-phone,
    .mdi-email,
    .mdi-tag {
        font-size: large;
        margin-top: 10px;
        color: rgb(0, 0, 0, 0.5)
    }

    .left-card-input {
        border: none;
        outline: none;
        border-bottom: 1px solid #ccc;
        width: 100%;
        font-size: small;
        /* margin-top: -100px */
    }

    .chat-conversation {
        height: calc(100vh - 213px);
    }

    .chat-leftsidebar {
        border: 2px solid red;
    }

    .right-card i {
        font-size: 18px;
        color: #ccc;
    }

    .opp-span {
        background-color: green;
        color: white;
        font-size: xx-small;
        padding: 2px 5px;
        border-radius: 20px
    }

    .btn-ch {
        width: 100%;
    }

    .left {
        width: 100% !important;
    }

    .ml-5 {
        margin-left: -10px;
    }

    /* .left2 {
    padding-left: 10px !important;
} */

    .modal-footer-1 {
        display: flex;
        flex-direction: row !important;
        justify-content: space-between !important;

    }

    .add {
        width: max-content;
        margin: 0 auto;
        color: black;
        border: 1px dotted black;
        padding: 0px 5px;
        border-radius: 20px;
    }

    .add>a {
        color: black !important;
    }

    .av {
        color: white;
        background-color: #3787d2;
        padding: 5px;
        border-radius: 100%;
        margin-right: 10px;
        text-align: center
    }

    .con-card {
        padding: 10px
    }

    .chat-message-list {
        height: calc(100vh - 193px);
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
                                <h4 class="card-title mb-0 mt-head">Conversation</h4>
                            </div>

                        </div>
                    </div>
                    <!-- end card header -->

                    <div class="card-body pb-0">

                        <div>
                            <div class="row">
                                <div class="col-md-4 col-xl-4">
                                    <div class="chat-leftsidebar border-none card">

                                        <div class="py-3">
                                            <div class="search-box position-relative">
                                                <input type="text" class="form-control rounded border" placeholder="Search...">
                                                <i class="bx bx-search search-icon"></i>
                                            </div>
                                        </div>

                                        <div class="chat-leftsidebar-nav">
                                            <ul class="nav nav-pills nav-justified bg-soft-light p-1">
                                                <li class="nav-item">
                                                    <a href="#chat" data-bs-toggle="tab" aria-expanded="true" class="nav-link active">
                                                        <i class="bx bx-chat font-size-20 d-sm-none"></i>
                                                        <span class="d-none d-sm-block">Unread</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#chat" data-bs-toggle="tab" aria-expanded="false" class="nav-link">
                                                        <i class="bx bx-group font-size-20 d-sm-none"></i>
                                                        <span class="d-none d-sm-block">Recents</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#chat" data-bs-toggle="tab" aria-expanded="false" class="nav-link">
                                                        <i class="bx bx-book-content font-size-20 d-sm-none"></i>
                                                        <span class="d-none d-sm-block">Starred</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#chat" data-bs-toggle="tab" aria-expanded="false" class="nav-link">
                                                        <i class="bx bx-book-content font-size-20 d-sm-none"></i>
                                                        <span class="d-none d-sm-block">All</span>
                                                    </a>
                                                </li>
                                            </ul>
                                            <div class="tab-content">
                                                <div class="tab-pane show active" id="chat">
                                                    <div class="chat-message-list" data-simplebar>
                                                        <div class="pt-3">
                                                            <div class="px-3">
                                                                <h5 class="font-size-14 mb-3">Recent</h5>
                                                            </div>
                                                            <ul class="list-unstyled chat-list">
                                                                <li class="active">
                                                                    <a href="#">
                                                                        <div class="d-flex align-items-start">

                                                                            <div class="flex-shrink-0 user-img online align-self-center me-3">
                                                                                <img src="assets/images/users/avatar-2.jpg" class="rounded-circle avatar-sm" alt="">
                                                                                <span class="user-status"></span>
                                                                            </div>

                                                                            <div class="flex-grow-1 overflow-hidden">
                                                                                <h5 class="text-truncate font-size-14 mb-1">
                                                                                    Aleksandr Vilenchik

                                                                                </h5>
                                                                                <p class="text-truncate mb-0">Hey!
                                                                                    there I'm available</p>
                                                                            </div>
                                                                            <div class="flex-shrink-0">
                                                                                <div class="font-size-11">02 min
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </li>
                                                                <li class="unread">
                                                                    <a href="#">
                                                                        <div class="d-flex align-items-start">
                                                                            <div class="flex-shrink-0 user-img online align-self-center me-3">
                                                                                <div class="avatar-sm align-self-center">
                                                                                    <span class="avatar-title rounded-circle bg-soft-primary text-primary">
                                                                                        S
                                                                                    </span>
                                                                                </div>
                                                                                <span class="user-status"></span>
                                                                            </div>

                                                                            <div class="flex-grow-1 overflow-hidden">
                                                                                <h5 class="text-truncate font-size-14 mb-1">
                                                                                    Stacie Dube</h5>
                                                                                <p class="text-truncate mb-0">I've
                                                                                    finished it! See you so</p>
                                                                            </div>
                                                                            <div class="flex-shrink-0">
                                                                                <div class="font-size-11">10 min
                                                                                </div>
                                                                            </div>
                                                                            <div class="unread-message">
                                                                                <span class="badge bg-danger rounded-pill">1</span>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <div class="d-flex align-items-start">
                                                                            <div class="flex-shrink-0 user-img away align-self-center me-3">
                                                                                <img src="assets/images/users/avatar-3.jpg" class="rounded-circle avatar-sm" alt="">
                                                                                <span class="user-status"></span>
                                                                            </div>

                                                                            <div class="flex-grow-1 overflow-hidden">
                                                                                <h5 class="text-truncate font-size-14 mb-1">
                                                                                    Katie Olson</h5>
                                                                                <p class="text-truncate mb-0">Nice
                                                                                    Meeting you</p>
                                                                            </div>
                                                                            <div class="flex-shrink-0">
                                                                                <div class="font-size-11">22 min
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <div class="d-flex align-items-start">

                                                                            <div class="flex-shrink-0 user-img align-self-center me-3">
                                                                                <img src="assets/images/users/avatar-4.jpg" class="rounded-circle avatar-sm" alt="">
                                                                                <span class="user-status"></span>
                                                                            </div>

                                                                            <div class="flex-grow-1 overflow-hidden">
                                                                                <h5 class="text-truncate font-size-14 mb-1">
                                                                                    Marshall Wilson</h5>
                                                                                <p class="text-truncate mb-0">Nice
                                                                                    to meet you</p>
                                                                            </div>
                                                                            <div class="flex-shrink-0">
                                                                                <div class="font-size-11">01 Hr
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <div class="d-flex align-items-start">

                                                                            <div class="flex-shrink-0 user-img online align-self-center me-3">
                                                                                <div class="avatar-sm align-self-center">
                                                                                    <span class="avatar-title rounded-circle bg-soft-primary text-primary">
                                                                                        J
                                                                                    </span>
                                                                                </div>
                                                                                <span class="user-status"></span>
                                                                            </div>

                                                                            <div class="flex-grow-1 overflow-hidden">
                                                                                <h5 class="text-truncate font-size-14 mb-1">
                                                                                    James Lee</h5>
                                                                                <p class="text-truncate mb-0">Wow
                                                                                    that's great</p>
                                                                            </div>
                                                                            <div class="flex-shrink-0">
                                                                                <div class="font-size-11">04 Hrs
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </li>

                                                                <li>
                                                                    <a href="#">
                                                                        <div class="d-flex align-items-start">

                                                                            <div class="flex-shrink-0 user-img align-self-center me-3">
                                                                                <img src="assets/images/users/avatar-5.jpg" class="rounded-circle avatar-sm" alt="">
                                                                                <span class="user-status"></span>
                                                                            </div>

                                                                            <div class="flex-grow-1 overflow-hidden">
                                                                                <h5 class="text-truncate font-size-14 mb-1">
                                                                                    Ronald Tucker</h5>
                                                                                <p class="text-truncate mb-0">Nice
                                                                                    to meet you</p>
                                                                            </div>
                                                                            <div class="flex-shrink-0">
                                                                                <div class="font-size-11">22/04
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <div class="d-flex align-items-start">

                                                                            <div class="flex-shrink-0 user-img align-self-center me-3">
                                                                                <img src="assets/images/users/avatar-6.jpg" class="rounded-circle avatar-sm" alt="">
                                                                                <span class="user-status"></span>
                                                                            </div>

                                                                            <div class="flex-grow-1 overflow-hidden">
                                                                                <h5 class="text-truncate font-size-14 mb-1">
                                                                                    Dennis Stewart</h5>
                                                                                <p class="text-truncate mb-0">Nice
                                                                                    to meet you</p>
                                                                            </div>
                                                                            <div class="flex-shrink-0">
                                                                                <div class="font-size-11">22/04
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <div class="d-flex align-items-start">
                                                                            <div class="flex-shrink-0 user-img away align-self-center me-3">
                                                                                <img src="assets/images/users/avatar-3.jpg" class="rounded-circle avatar-sm" alt="">
                                                                                <span class="user-status"></span>
                                                                            </div>

                                                                            <div class="flex-grow-1 overflow-hidden">
                                                                                <h5 class="text-truncate font-size-14 mb-1">
                                                                                    Katie Olson</h5>
                                                                                <p class="text-truncate mb-0">Nice
                                                                                    Meeting you</p>
                                                                            </div>
                                                                            <div class="flex-shrink-0">
                                                                                <div class="font-size-11">22 min
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <div class="d-flex align-items-start">

                                                                            <div class="flex-shrink-0 user-img align-self-center me-3">
                                                                                <img src="assets/images/users/avatar-4.jpg" class="rounded-circle avatar-sm" alt="">
                                                                                <span class="user-status"></span>
                                                                            </div>

                                                                            <div class="flex-grow-1 overflow-hidden">
                                                                                <h5 class="text-truncate font-size-14 mb-1">
                                                                                    Marshall Wilson</h5>
                                                                                <p class="text-truncate mb-0">Nice
                                                                                    to meet you</p>
                                                                            </div>
                                                                            <div class="flex-shrink-0">
                                                                                <div class="font-size-11">01 Hr
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>


                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!-- end chat-leftsidebar -->

                                <div class="col-md-5 col-xl-5">
                                    <div class="card">
                                        <div class="p-3 px-lg-4 border-bottom">
                                            <div class="row" style="align-items:center">
                                                <div class="col-xl-4 col-7">
                                                    <div class="d-flex align-items-center">

                                                        <div class="flex-grow-1">
                                                            <h5 class="font-size-14 mb-1 text-truncate"><a href="#" class="text-dark">Aleksandr Vilenchik
                                                                </a></h5>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-8 col-5">
                                                    <ul class="list-inline user-chat-nav text-end mb-0">
                                                        <li class="list-inline-item">
                                                            <button class="btn nav-btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <i data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" data-bs-toggle="offcanvas" class="mdi mdi-phone"></i>
                                                            </button>
                                                        </li>

                                                        <li class="list-inline-item">
                                                            <div class="dropdown">
                                                                <button class="btn nav-btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    <i class="bx bx-dots-horizontal-rounded"></i>
                                                                </button>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="dropdown-item" href="#">Mark as read</a>
                                                                    <a class="dropdown-item" href="#">Mark as
                                                                        starred</a>

                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="chat-conversation p-3 px-2" data-simplebar>
                                            <ul class="list-unstyled mb-0">
                                                <li class="chat-day-title">
                                                    <span class="title">Today</span>
                                                </li>
                                                <li>
                                                    <div class="conversation-list">
                                                        <div class="ctext-wrap">
                                                            <div class="ctext-wrap-content">
                                                                <h5 class="conversation-name"><a href="#" class="user-name">Aleksandr Vilenchik

                                                                    </a>
                                                                    <span class="time">10:00</span>
                                                                </h5>
                                                                <p class="mb-0">Good morning !</p>
                                                            </div>

                                                        </div>
                                                    </div>

                                                </li>

                                                <li class="right">
                                                    <div class="conversation-list">
                                                        <div class="ctext-wrap">
                                                            <div class="ctext-wrap-content">
                                                                <h5 class="conversation-name"><a href="#" class="user-name">Shawn</a> <span class="time">10:02</span></h5>
                                                                <p class="mb-0">Good morning</p>
                                                            </div>

                                                        </div>
                                                    </div>

                                                </li>

                                                <li>
                                                    <div class="conversation-list">
                                                        <div class="ctext-wrap">
                                                            <div class="ctext-wrap-content">
                                                                <h5 class="conversation-name"><a href="#" class="user-name">Aleksandr Vilenchik

                                                                    </a>
                                                                    <span class="time">10:04</span>
                                                                </h5>
                                                                <p class="mb-0">
                                                                    Hello!
                                                                </p>
                                                            </div>

                                                        </div>

                                                        <div class="ctext-wrap">
                                                            <div class="ctext-wrap-content">
                                                                <h5 class="conversation-name"><a href="#" class="user-name">Aleksandr Vilenchik

                                                                    </a>
                                                                    <span class="time">10:04</span>
                                                                </h5>
                                                                <p class="mb-0">
                                                                    What about our next meeting?
                                                                </p>
                                                            </div>

                                                        </div>
                                                    </div>

                                                </li>

                                                <li>
                                                    <div class="conversation-list">
                                                        <div class="ctext-wrap">
                                                            <div class="ctext-wrap-content">
                                                                <h5 class="conversation-name"><a href="#" class="user-name">Aleksandr Vilenchik

                                                                    </a>
                                                                    <span class="time">10:06</span>
                                                                </h5>
                                                                <p class="mb-0">
                                                                    Next meeting tomorrow 10.00AM
                                                                </p>
                                                            </div>

                                                        </div>
                                                    </div>

                                                </li>

                                                <li class="right">
                                                    <div class="conversation-list">
                                                        <div class="ctext-wrap">
                                                            <div class="ctext-wrap-content">
                                                                <h5 class="conversation-name"><a href="#" class="user-name">Shawn</a> <span class="time">10:08</span></h5>
                                                                <p class="mb-0">
                                                                    Wow that's great
                                                                </p>
                                                            </div>

                                                        </div>
                                                    </div>

                                                </li>

                                                <li>
                                                    <div class="conversation-list">
                                                        <div class="ctext-wrap">


                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="p-3 border-top">
                                            <div class="row">

                                                <div class="col-md-4 col-xl-4">

                                                    <button type="submit" data-bs-toggle="modal" data-bs-target="#emails" class="btn btn-primary float-end chat-send w-md waves-effect waves-light" style="float:left!important;"><span class="d-none d-sm-inline-block me-2">Send Email</span> <i class="mdi mdi-email-send"></i></button>
                                                </div>
                                                <div class="col-md-4 col-xl-4"></div>
                                                <div class="col-md-4 col-xl-4">
                                                    <button type="submit" data-bs-toggle="modal" data-bs-target="#message" class="btn btn-warning float-end chat-send w-md waves-effect waves-light"><span class="d-none d-sm-inline-block me-2">Send SMS</span> <i class="mdi mdi-comment-arrow-right"></i></button>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-md-3 col-xl-3">
                                    <div class="row">
                                        <div class="card right-card">
                                            <div class="row">
                                                <div class="col-md-12 col-xl-12">
                                                    <div class="nameDiv text-center">
                                                        <span class="mt-2"> AV </span>
                                                        <p class="mt-2"> Aleksandr Vilenchik</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-12 col-xl-12">
                                                    <div class="mb-3">
                                                        <select class="form-select">
                                                            <option>Melanie Frankling</option>
                                                            <option>Remove assigned user</option>
                                                            <option>Laura</option>
                                                            <option>Cindy</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 col-xl-12 mt-3">
                                                    <i class="mdi mdi-phone-outline"> </i> <input value="(201)290-8939" placeholder="Add Phone" class="left-card-input"> </input>
                                                </div>

                                                <div class="col-md-12 col-xl-12 mt-3">
                                                    <i class="mdi mdi-email-outline"> </i> <input placeholder="Add Email" value="avilench@bu.edu" class="left-card-input"> </input>
                                                </div>

                                                <div class="col-md-12 col-xl-12 mt-3">
                                                    <i class="mdi mdi-tag-outline"> </i> <input placeholder="Add Tags" class="left-card-input"> </input>
                                                </div>
                                            </div>
                                            <div class="row mt-4">
                                                <div class="col-md-12 col-xl-12">
                                                    <p> DND</p>
                                                </div>

                                            </div>
                                            <div class="row">
                                                <div class="col-md-6 col-xl-6">
                                                    <p style="font-weight:bold"> OFF</p>
                                                </div>
                                                <div class="col-md-6 col-xl-6">
                                                    <a href="#"> CONFIGURE</a>
                                                </div>

                                            </div>
                                            <div class="row">
                                                <div class="col-md-12 col-xl-12">
                                                    <p> Opportunities</p>
                                                </div>

                                            </div>
                                            <div class="row">
                                                <div class="col-md-12 col-xl-12">
                                                    <span class="opp-span"> Eval/Mapping Scheduled </span>
                                                </div>

                                            </div>
                                            <div class="row mt-4">
                                                <div class="col-md-12 col-xl-12">
                                                    <button class="btn btn-primary btn-ch" data-bs-toggle="modal" data-bs-target="#opportunity">Create Opportunity </button>
                                                </div>

                                            </div>
                                            <div class="row mt-2 mb-4">
                                                <div class="col-md-12 col-xl-12">
                                                    <button class="btn btn-primary btn-ch" data-bs-toggle="modal" data-bs-target="#appoint">Book Appointment </button>
                                                </div>

                                            </div>

                                        </div>

                                        <!-- end user chat -->


                                        <!-- End Page-content -->


                                    </div>
                                </div><!-- end body -->
                            </div>
                            <!-- container-fluid -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- appintment modal -->
<div class="modal fade" id="emails" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Send Email</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="floatingInput" placeholder="name">
                            <label for="floatingInput">Name</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="floatingInput" placeholder="subject">
                            <label for="floatingInput">Subject</label>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="floatingInput" placeholder="email">
                            <label for="floatingInput">Email</label>
                        </div>
                    </div>
                    <div class="col-md-12">

                        <div class="mb-3">

                            <div id="ckeditor-classic2"></div>
                        </div>

                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save & Send</button>
            </div>
        </div>
    </div>
</div>






<!-- opportunity modal -->
<div class="modal fade" id="opportunity" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel"> Add Opportunity -Aleksandr Vilenkchik </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">



                <div class="row form-group mt-3">
                    <div class="col-md-12">
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="floatingInput" placeholder="opportunity name">
                            <label for="floatingInput">Opportunity Name</label>
                        </div>
                    </div>
                </div>
                <div class="row form-group mt-3">

                    <div class="col-md-6">
                        <div class="mb-3">
                            <select class="form-select" style="height: 58px;">
                                <option value="">Pipeline</option>
                                <option>Master Pipeline</option>
                                <option>Coordinator Pipeline</option>
                                <option>In House Pipeline</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
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
            <div class="modal-footer modal-footer-1">

                <div>
                    <button class="btn btn-danger">Delete</button>
                </div>
                <div>
                    <button class="btn btn-light">Cancel</button>
                    <button class="btn btn-primary">Save</button>

                </div>
            </div>
        </div>
    </div>
</div>




<!-- Appointment modal -->
<div class="modal fade" id="appoint" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel"> Book Appointment </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-8 col-xl-8">

                        <select name="" id="floatingInput" class="form-select" style="height:58px">



                            <option selected disabled value="">Calendar</option>
                            <option value="">Consultation</option>

                            <option value="">B</option>
                            <option value="">C</option>
                            <option value="">D</option>


                        </select>



                        <small><span> Showing slots in this timezone : <b>Account Timezone </b> </span> </small>
                        <select name="" id="floatingInput" class="form-select mt-3" style="height:58px">



                            <option selected value="">GMT-05:00 America/New York (EST)</option>
                            <option value="">GMT-05:00 America/New York (EST)</option>
                            <option value="">GMT-05:00 America/New York (EST)</option>
                            <option value="">GMT-05:00 America/New York (EST)</option>
                            <option value="">GMT-05:00 America/New York (EST)</option>



                        </select>




                        <div class="col-md-12 col-xl-12 mt-3">
                            <div class="form-floating ">
                                <input type="email" class="form-control" id="floatingInput" placeholder="Dob" onclick="this.type='date'">
                                <label for="floatingInput">Date</label>
                            </div>
                            <div class="mt-3">
                                <select name="" id="" class="form-select" style="height:58px">
                                    <option selected disabled value="">Slot</option>
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



                        
                        <label for="floatingInput" style="font-weight:bold;" class="mt-3">Custom</label>


                        <div class="form-group mt-3 ">

                            <div class="form-floating mb-3 ">
                                <input type="email" class="form-control" id="floatingInput" placeholder="Appointment Title">
                                <label for="floatingInput">Appointment Title</label>
                            </div>
                        </div>
                        
                        <!-- <label for="floatingInput" style="font-weight:bold;" class="mt-3">Note</label> -->

                        <div>
                            
                            <textarea name="" id="" cols="30" rows="10" class="form-control"></textarea>

                        </div>
                    </div>

                    <div class="col-md-4 col-xl-4">
                        <div class="row">
                            <div class="col-md-12 col-xl-12">
                                
                                <label for="floatingInput" style="font-weight:bold;">Contact</label>
                            </div>
                            <div class="col-md-12 col-xl-12 mt-3">
                                <div class="card con-card">
                                    <div class="row">
                                        <div class="col-md-12 col-xl-12">
                                            <span class="av text-center"> AV </span> <span> <b> Aleksandr Vilenchik </b>
                                            </span> <i class="mdi mdi-inbox-arrow-up-outline" la> </i>
                                        </div>
                                        <div class="col-md-12 col-xl-12 mt-4">
                                            <p> Feb 13, 8:00am - 9:00am in contact's timezone </p>
                                            <p>(America / NewYork)</p>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary">Book Appointment</button>
            </div>
        </div>
    </div>
</div>



<!-- Sms Modal -->
<div class="modal fade" id="message" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Send Sms</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <!-- <div class="col-md-12">
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="floatingInput" placeholder="title">
                            <label for="floatingInput">Title</label>
                        </div>
                    </div> -->
                    <div class="col-md-12">
                        <div class="form-floating mb-3">
                            <input type="number" class="form-control" id="floatingInput" placeholder="number">
                            <label for="floatingInput">Phone Number</label>
                        </div>
                    </div>
                    <div class="col-md-12">

                        <div class="mb-3">

                            <div id="ckeditor-classic"></div>
                        </div>

                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save & Send</button>
            </div>
        </div>
    </div>
</div>










<script src="assets/js/pages/line-chart2.js"></script>
<script src="assets/libs/apexcharts/apexcharts.min.js"></script>
<script src="assets/js/pages/donut_chart.js"></script>
<script src="assets/js/pages/rep.js"></script>
<script src="assets/libs/%40ckeditor/ckeditor5-build-classic/build/ckeditor.js"></script>

<?php require_once "footer.php" ?>