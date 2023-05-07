<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Moderator</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{asset('coach/assets/vendors/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('coach/assets/vendors/css/vendor.bundle.base.css')}}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{asset('coach/assets/vendors/jvectormap/jquery-jvectormap.css')}}">
    <link rel="stylesheet" href="{{asset('coach/assets/vendors/flag-icon-css/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{asset('coach/assets/vendors/owl-carousel-2/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('coach/assets/vendors/owl-carousel-2/owl.theme.default.min.css')}}">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{asset('coach/assets/css/style.css')}}">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{asset('coach/assets/images/favicon.png')}}" />
  </head>
  <body>
    <div class="container-scroller">
     


      <!-- Sidebar -->



      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
          <a class="sidebar-brand brand-logo" href="Tindex.html"><img src="{{asset('coach/assets/images/logo.svg')}}" alt="logo" /></a>
          <a class="sidebar-brand brand-logo-mini" href="Tindex.html"><img src="{{asset('coach/assets/images/logo-mini.svg')}}" alt="logo" /></a>
        </div>
        <ul class="nav">
          <li class="nav-item profile">
            <div class="profile-desc">
              <div class="profile-pic">
                <div class="count-indicator">
                  <img class="img-xs rounded-circle " src="{{asset('coach/assets/images/faces/face15.jpg')}}" alt="">
                  <span class="count bg-success"></span>
                </div>
                <div class="profile-name">
                  <h5 class="mb-0 font-weight-normal">Henry Klein</h5>
                  <span>Moderator</span>
                </div>
              </div>
              <a href="#" id="profile-dropdown" data-bs-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></a>
              <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list" aria-labelledby="profile-dropdown">
                <a href="#" class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-settings text-primary"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject ellipsis mb-1 text-small">Account settings</p>
                  </div>
                </a>
                <div class="dropdown-divider">
                </div>
                </div>
            </div>
          </li>
         
          <li class="nav-item menu-items">
            <a class="nav-link" href="Tindex.html">
              <span class="menu-icon">
                <i class="mdi mdi-view-dashboard"></i>
              </span>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
       
          <li class="nav-item menu-items">
            <a class="nav-link" href="TAddTrainingPlanning.html">
              <span class="menu-icon">
                <i class="mdi mdi-account-multiple-plus"></i>
              </span>
              <span class="menu-title">Add Training Planning</span>
            </a>
          </li>
           <li class="nav-item menu-items">
            <a class="nav-link" href="Tviewplannings.html">
              <span class="menu-icon">
                <i class="mdi mdi-dumbbell"></i>
              </span>
              <span class="menu-title">View Plannings</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="Tviewplayers.html">
              <span class="menu-icon">
                <i class="mdi mdi-numeric-9-plus-box-multiple-outline"></i>
              </span>
              <span class="menu-title">View Players</span>
            </a>
          </li>
          
         
          <li class="nav-item menu-items">
            <a class="nav-link" href="Tviewviolations.html">
              <span class="menu-icon">
                <i class="mdi mdi-account-off"></i>
              </span>
              <span class="menu-title">View violations</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="TAddAdvice.html">
              <span class="menu-icon">
                <i class="mdi mdi-monitor-cellphone-star"></i>
              </span>
              <span class="menu-title">Add Advice</span>
            </a>
          </li>
         
        </ul>
      </nav>
      <!-- End Sidebar -->


       <!-- _navbar -->


       <div class="container-fluid page-body-wrapper">
        <nav class="navbar p-0 fixed-top d-flex flex-row">
                <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
                  <a class="navbar-brand brand-logo-mini" href="index.html"><img src="{{asset('coach/assets/images/logo-mini.svg')}}" alt="logo" /></a>
                </div>
                <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
                  <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                    <span class="mdi mdi-menu"></span>
                  </button>
                  <ul class="navbar-nav navbar-nav-right">
                  <li class="nav-item dropdown border-left">
                      <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#">
                        <p class="text-success ms-2 mb-0 font-weight-medium">15</p>
                        <i class="mdi mdi-email"></i>
                     
                      </a>
                    </li>
                    
                   
                    <li class="nav-item dropdown">
                      <a class="nav-link" id="profileDropdown" href="#" data-bs-toggle="dropdown">
                        <div class="navbar-profile">
                          <img class="img-xs rounded-circle" src="{{asset('coach/assets/images/faces/face15.jpg')}}" alt="">
                          <p class="mb-0 d-none d-sm-block navbar-profile-name">Henry Klein</p>
                          <i class="mdi mdi-menu-down d-none d-sm-block"></i>
                        </div>
                      </a>
                      <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="profileDropdown">
                        <h6 class="p-3 mb-0">Profile</h6>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item preview-item">
                          <div class="preview-thumbnail">
                            <div class="preview-icon bg-dark rounded-circle">
                              <i class="mdi mdi-settings text-success"></i>
                            </div>
                          </div>
                          <div class="preview-item-content">
                            <p class="preview-subject mb-1">Settings</p>
                          </div>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item preview-item">
                          <div class="preview-thumbnail">
                            <div class="preview-icon bg-dark rounded-circle">
                              <i class="mdi mdi-logout text-danger"></i>
                            </div>
                          </div>
                          <div class="preview-item-content">
                            <p class="preview-subject mb-1">Log out</p>
                          </div>
                        </a>
                       
                      </div>
                    </li>
                  </ul>
                  <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                    <span class="mdi mdi-format-line-spacing"></span>
                  </button>
                </div>
              </nav>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">    
        <div class="row">
          <div class="col-xl-12 col-sm-12 grid-margin stretch-card">
            <div class="card">
            
              
              <div class=" container-fluid page-body-warper">
                <div class="container">
                    <h2 class="card-title">Violations</h2>
                <table class="table">
                  <thead>
          <td>Id</td>
          <td>name</td>
          <td>Reason</td>
          </tr></thead>
          <tbody>
          <tr>
          <td>6</td>
              <td>shami</td>
              <td>warning</td>
          </tr></tbody>
          </table>
                </div>	
                </div>
          
              
    </div>
  </div>
    </div>
      </div>
       </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{asset('coach/assets/vendors/js/vendor.bundle.base.js')}}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{asset('coach/assets/vendors/chart.js/Chart.min.js')}}"></script>
    <script src="{{asset('coach/assets/vendors/progressbar.js/progressbar.min.js')}}"></script>
    <script src="{{asset('coach/assets/vendors/jvectormap/jquery-jvectormap.min.js')}}"></script>
    <script src="{{asset('coach/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
    <script src="{{asset('coach/assets/vendors/owl-carousel-2/owl.carousel.min.js')}}"></script>
    <script src="{{asset('coach/assets/js/jquery.cookie.js" type="text/javascript')}}"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{asset('coach/assets/js/off-canvas.js')}}"></script>
    <script src="{{asset('coach/assets/js/hoverable-collapse.js')}}"></script>
    <script src="{{asset('coach/assets/js/misc.js')}}"></script>
    <script src="{{asset('coach/assets/js/settings.js')}}"></script>
    <script src="{{asset('coach/assets/js/todolist.js')}}"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="{{asset('coach/assets/js/dashboard.js')}}"></script>
    <!-- End custom js for this page -->
  </body>
</html>