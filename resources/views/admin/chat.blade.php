<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Chat</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description">
        <meta content="Coderthemes" name="author">
       <!-- App css -->
        <link href="{{asset('assets1/css/icons.min.css" rel="stylesheet" type="text/css')}}">
        <link href="{{asset('assets1/css/app.min.css" rel="stylesheet" type="text/css" id="light-style')}}">
    </head>

    <body class="loading">
        <!-- Begin page -->
        <div class="content-page">
            <div class="content">
                <!-- Topbar Start -->
                <div class="navbar-custom">
                    <ul class="list-unstyled topbar-menu float-end mb-0">
                        <li class="dropdown notification-list">
                            <a class="nav-link dropdown-toggle arrow-none" href="Mindex.html">
                                <i class="dripicons-home noti-icon"></i>
                            </a>
                        </li>
                          <li class="dropdown notification-list">
                            <a class="nav-link dropdown-toggle nav-user arrow-none me-0" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <span class="account-user-avatar"> 
                                    <img src="{{asset('assets/images/faces/face15.jpg" alt="user-image" class="rounded-circle')}}">
                                </span>
                                <span>
                                    <span class="account-user-name">Soeng Souy</span>
                                    <span class="account-position">Founder</span>
                                </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated topbar-dropdown-menu profile-dropdown">
                                <!-- item-->
                                <div class=" dropdown-header noti-title">
                                    <h6 class="text-overflow m-0">Profile</h6>
                                </div>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="mdi mdi-account-edit me-1"></i>
                                    <span>Settings</span>
                                </a>
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="mdi mdi-logout me-1"></i>
                                    <span>Logout</span>
                                </a>
                            </div>
                        </li>
                        
                    </ul>
                   </div>
        <div class="wrapper">
        
            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->
          
    <div class="content-page">
             
                <div class="row">
                    <!-- start chat users-->
                    <div class="col-xxl-3 col-xl-6 order-xl-1">
                        <div class="card">
                            <div class="card-body p-0">
                                <ul class="nav nav-tabs nav-bordered">
                                    <li class="nav-item">
                                        <a href="#allUsers" data-bs-toggle="tab" aria-expanded="false" class="nav-link active py-2">
                                           Chat All
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#favUsers" data-bs-toggle="tab" aria-expanded="true" class="nav-link py-2">
                                          Team
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#friendUsers" data-bs-toggle="tab" aria-expanded="true" class="nav-link py-2">
                                          Trainer & Manager
                                        </a>
                                    </li>
                                </ul> <!-- end nav-->
                                <div class="tab-content">
                                    <div class="tab-pane show active p-3" id="newpost">

                                        <!-- start search box -->
                                        <div class="app-search">
                                            <form>
                                                <div class="mb-2 position-relative">
                                                    <input type="text" class="form-control" placeholder="People, groups & messages...">
                                                    <span class="mdi mdi-magnify search-icon"></span>
                                                </div>
                                            </form>
                                        </div>
                                        <!-- end search box -->

                                        <!-- users -->
                                        <div class="row">
                                            <div class="col">
                                                <div data-simplebar="" style="max-height: 550px">
                                                    <a href="javascript:void(0);" class="text-body">
                                                        <div class="d-flex align-items-start mt-1 p-2">
                                                            <img src="{{asset('assets1/images/users/avatar-2.jpg" class="me-2 rounded-circle" height="48" alt="Brandon Smith')}}">
                                                            <div class="w-100 overflow-hidden">
                                                                <h5 class="mt-0 mb-0 font-14">
                                                                    <span class="float-end text-muted font-12">4:30am</span>
                                                                    Brandon Smith
                                                                </h5>
                                                                <p class="mt-1 mb-0 text-muted font-14">
                                                                    <span class="w-25 float-end text-end"><span class="badge badge-danger-lighten">3</span></span>
                                                                    <span class="w-75">How are you today?</span>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </a>

                                                    <a href="javascript:void(0);" class="text-body">
                                                        <div class="d-flex align-items-start bg-light p-2">
                                                            <img src="{{asset('assets1/images/users/avatar-5.jpg" class="me-2 rounded-circle" height="48" alt="Shreyu N')}}">
                                                            <div class="w-100 overflow-hidden">
                                                                <h5 class="mt-0 mb-0 font-14">
                                                                    <span class="float-end text-muted font-12">5:30am</span>
                                                                    Shreyu N
                                                                </h5>
                                                                <p class="mt-1 mb-0 text-muted font-14">
                                                                    <span class="w-75">Hey! a reminder for tomorrow's meeting...</span>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </a>

                                                    <a href="javascript:void(0);" class="text-body">
                                                        <div class="d-flex align-items-start mt-1 p-2">
                                                            <img src="{{asset('assets1/images/users/avatar-7.jpg" class="me-2 rounded-circle" height="48" alt="Maria C')}}">
                                                            <div class="w-100 overflow-hidden">
                                                                <h5 class="mt-0 mb-0 font-14">
                                                                    <span class="float-end text-muted font-12">Thu</span>
                                                                    Maria C
                                                                </h5>
                                                                <p class="mt-1 mb-0 text-muted font-14">
                                                                    <span class="w-25 float-end text-end"><span class="badge badge-danger-lighten">2</span></span>
                                                                    <span class="w-75">Are we going to have this week's planning meeting today?</span>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </a>

                                                    <a href="javascript:void(0);" class="text-body">
                                                        <div class="d-flex align-items-start mt-1 p-2">
                                                            <img src="{{asset('assets1/images/users/avatar-10.jpg" class="me-2 rounded-circle" height="48" alt="Rhonda D')}}">
                                                            <div class="w-100 overflow-hidden">
                                                                <h5 class="mt-0 mb-0 font-14">
                                                                    <span class="float-end text-muted font-12">Wed</span>
                                                                    Rhonda D
                                                                </h5>
                                                                <p class="mt-1 mb-0 text-muted font-14">
                                                                    <span class="w-75">Please check these design assets1...</span>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </a>

                                                    <a href="javascript:void(0);" class="text-body">
                                                        <div class="d-flex align-items-start mt-1 p-2">
                                                            <img src="{{asset('assets1/images/users/avatar-3.jpg" class="me-2 rounded-circle" height="48" alt="Michael H')}}">
                                                            <div class="w-100 overflow-hidden">
                                                                <h5 class="mt-0 mb-0 font-14">
                                                                    <span class="float-end text-muted font-12">Tue</span>
                                                                    Michael H
                                                                </h5>
                                                                <p class="mt-1 mb-0 text-muted font-14">
                                                                    <span class="w-25 float-end text-end"><span class="badge badge-danger-lighten">6</span></span>
                                                                    <span class="w-75">Are you free for 15 min? I would like to discuss something...</span>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </a>

                                                    <a href="javascript:void(0);" class="text-body">
                                                        <div class="d-flex align-items-start mt-1 p-2">
                                                            <img src="{{asset('assets1/images/users/avatar-6.jpg" class="me-2 rounded-circle" height="48" alt="Thomas R')}}">
                                                            <div class="w-100 overflow-hidden">
                                                                <h5 class="mt-0 mb-0 font-14">
                                                                    <span class="float-end text-muted font-12">Tue</span>
                                                                    Thomas R
                                                                </h5>
                                                                <p class="mt-1 mb-0 text-muted font-14">
                                                                    <span class="w-75">Let's have meeting today between me, you and Tony...</span>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </a>

                                                    <a href="javascript:void(0);" class="text-body">
                                                        <div class="d-flex align-items-start mt-1 p-2">
                                                            <img src="{{asset('assets1/images/users/avatar-8.jpg" class="me-2 rounded-circle" height="48" alt="Thomas J')}}">
                                                            <div class="w-100 overflow-hidden">
                                                                <h5 class="mt-0 mb-0 font-14">
                                                                    <span class="float-end text-muted font-12">Tue</span>
                                                                    Thomas J
                                                                </h5>
                                                                <p class="mt-1 mb-0 text-muted font-14">
                                                                    <span class="w-75">Howdy?</span>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </a>

                                                    <a href="javascript:void(0);" class="text-body">
                                                        <div class="d-flex align-items-start mt-1 p-2">
                                                            <img src="{{asset('assets1/images/users/avatar-1.jpg" class="me-2 rounded-circle" height="48" alt="Ricky J')}}">
                                                            <div class="w-100 overflow-hidden">
                                                                <h5 class="mt-0 mb-0 font-14">
                                                                    <span class="float-end text-muted font-12">Mon</span>
                                                                        Ricky J
                                                                </h5>
                                                                <p class="mt-1 mb-0 text-muted font-14">
                                                                    <span class="w-25 float-end text-end"><span class="badge badge-danger-lighten">28</span></span>
                                                                    <span class="w-75">Are you interested in learning?</span>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </a>

                                                </div> <!-- end slimscroll-->
                                            </div> <!-- End col -->
                                        </div>
                                        <!-- end users -->
                                    </div> <!-- end Tab Pane-->
                                </div> <!-- end tab content-->
                            </div> <!-- end card-body-->
                        </div> <!-- end card-->
                    </div>
                    <!-- end chat users-->

                    <!-- chat area -->
                    <div class="col-xxl-6 col-xl-12 order-xl-2">
                        <div class="card">
                            <div class="card-body">
                                <ul class="conversation-list" data-simplebar="" style="max-height: 537px">
                                    <li class="clearfix">
                                        <div class="chat-avatar">
                                            <img src="{{asset('assets1/images/users/avatar-5.jpg" class="rounded" alt="Shreyu N')}}">
                                            <i>10:00</i>
                                        </div>
                                        <div class="conversation-text">
                                            <div class="ctext-wrap">
                                                <i>Shreyu N</i>
                                                <p>
                                                    Hello!
                                                </p>
                                            </div>
                                        </div>
                                        <div class="conversation-actions dropdown">
                                          
                                    </li>
                                    <li class="clearfix odd">
                                        <div class="chat-avatar">
                                            <img src="{{asset('assets1/images/users/avatar-1.jpg" class="rounded" alt="dominic')}}">
                                            <i>10:01</i>
                                        </div>
                                        <div class="conversation-text">
                                            <div class="ctext-wrap">
                                                <i>Dominic</i>
                                                <p>
                                                    Hi, How are you? What about our next meeting?
                                                </p>
                                            </div>
                                        </div>
                                        <div class="conversation-actions dropdown">
                                         
                                    </li>
                                    <li class="clearfix">
                                        <div class="chat-avatar">
                                            <img src="{{asset('assets1/images/users/avatar-5.jpg" class="rounded" alt="Shreyu N')}}">
                                            <i>10:01</i>
                                        </div>
                                        <div class="conversation-text">
                                            <div class="ctext-wrap">
                                                <i>Shreyu N</i>
                                                <p>
                                                    Yeah everything is fine
                                                </p>
                                            </div>
                                        </div>
                                        <div class="conversation-actions dropdown">
                                         
                                    </li>
                                    <li class="clearfix odd">
                                        <div class="chat-avatar">
                                            <img src="{{asset('assets1/images/users/avatar-1.jpg" class="rounded" alt="dominic')}}">
                                            <i>10:02</i>
                                        </div>
                                        <div class="conversation-text">
                                            <div class="ctext-wrap">
                                                <i>Dominic</i>
                                                <p>
                                                    Wow that's great
                                                </p>
                                            </div>
                                        </div>
                                        <div class="conversation-actions dropdown">
                                        
                                    </li>
                                    <li class="clearfix">
                                        <div class="chat-avatar">
                                            <img src="{{asset('assets1/images/users/avatar-5.jpg" alt="Shreyu N" class="rounded')}}">
                                            <i>10:02</i>
                                        </div>
                                        <div class="conversation-text">
                                            <div class="ctext-wrap">
                                                <i>Shreyu N</i>
                                                <p>
                                                    Let's have it today if you are free
                                                </p>
                                            </div>
                                        </div>
                                        <div class="conversation-actions dropdown">
                                        
                                    </li>
                                    <li class="clearfix odd">
                                        <div class="chat-avatar">
                                            <img src="{{asset('assets1/images/users/avatar-1.jpg" alt="dominic" class="rounded')}}">
                                            <i>10:03</i>
                                        </div>
                                        <div class="conversation-text">
                                            <div class="ctext-wrap">
                                                <i>Dominic</i>
                                                <p>
                                                    Sure thing! let me know if 2pm works for you
                                                </p>
                                            </div>
                                        </div>
                                       
                                    <li class="clearfix">
                                        <div class="chat-avatar">
                                            <img src="{{asset('assets1/images/users/avatar-5.jpg" alt="Shreyu N" class="rounded')}}">
                                            <i>10:04</i>
                                        </div>
                                        <div class="conversation-text">
                                            <div class="ctext-wrap">
                                                <i>Shreyu N</i>
                                                <p>
                                                    Sorry, I have another meeting scheduled at 2pm. Can we have it
                                                    at 3pm instead?
                                                </p>
                                            </div>
                                        </div>
                                        <div class="conversation-actions dropdown">
                                        
                                    </li>
                            
                                </ul>

                                <div class="row">
                                    <div class="col">
                                        <div class="mt-2 bg-light p-3 rounded">
                                            <form class="needs-validation" novalidate="" name="chat-form" id="chat-form">
                                                <div class="row">
                                                    <div class="col mb-2 mb-sm-0">
                                                        <input type="text" class="form-control border-0" placeholder="Enter your text" required="">
                                                        <div class="invalid-feedback">
                                                            Please enter your messsage
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-auto">
                                                        <div class="btn-group">
                                                          
                                                            <div class="d-grid">
                                                                <button type="submit" class="btn btn-success chat-send"><i class='uil uil-message'></i></button>
                                                            </div>
                                                        </div>
                                                    </div> <!-- end col -->
                                                </div> <!-- end row-->
                                            </form>
                                        </div> 
                                    </div> <!-- end col-->
                                </div>
                                <!-- end row -->
                            </div> <!-- end card-body -->
                        </div> <!-- end card -->
                    </div>
                    <!-- end chat area-->



                    
                    <!-- start user detail -->
                    <div class="col-xxl-3 col-xl-6 order-xl-1 order-xxl-2">
                        <div class="card">
                            <div class="card-body">
                                <div class="dropdown float-end">
                                    <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="mdi mdi-dots-horizontal"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item">View full</a>
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item">Edit Contact Info</a>
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item">Remove</a>
                                    </div>
                                </div>

                                <div class="mt-3 text-center">
                                    <img src="{{asset('assets1/images/users/avatar-5.jpg" alt="shreyu" class="img-thumbnail avatar-lg rounded-circle')}}">
                                    <h4>Shreyu N</h4>
                                    <!-- <button class="btn btn-primary btn-sm mt-1"><i class='uil uil-envelope-add me-1'></i>Send Email</button> -->
                                    <p class="text-muted mt-2 font-14">Last Interacted: <strong>Few hours back</strong></p>
                                </div>

                                <div class="mt-3">
                                    <hr class="">

                                    <p class="mt-4 mb-1"><strong><i class='uil uil-at'></i> Email:</strong></p>
                                    <p>support@coderthemes.com</p>

                                    <p class="mt-3 mb-1"><strong><i class='uil uil-phone'></i> Phone Number:</strong></p>
                                    <p>+1 456 9595 9594</p>

                                    <p class="mt-3 mb-1"><strong><i class='uil uil-location'></i> Location:</strong></p>
                                    <p>California, USA</p>
                                    
                                    <p class="mt-3 mb-2"><strong><i class='uil uil-users-alt'></i> Groups:</strong></p>
                                    <p>
                                        
                                        <span class="badge badge-primary-lighten p-1 font-14">name team</span>
                                    </p>
                                </div>
                            </div> <!-- end card-body -->
                        </div> <!-- end card-->
                    </div> <!-- end col -->
                    <!-- end user detail -->
                </div> <!-- end row-->


            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->

        <!-- /End-bar -->

        <!-- bundle -->
        <script src="{{asset('assets1/js/vendor.min.js')}}"></script>
        <script src="{{asset('assets1/js/app.min.js')}}"></script>

    </body>

</html>
