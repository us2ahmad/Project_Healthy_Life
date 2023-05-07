<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Moderator</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{asset('admin/assets/vendors/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/vendors/css/vendor.bundle.base.css')}}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{asset('admin/assets/vendors/jvectormap/jquery-jvectormap.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/vendors/flag-icon-css/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/vendors/owl-carousel-2/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/vendors/owl-carousel-2/owl.theme.default.min.css')}}">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{asset('admin/assets/css/style.css')}}">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{asset('admin/assets/images/favicon.png')}}" />
  </head>
  <body>
    <div class="container-scroller">
     


      <!-- Sidebar -->



      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
          <a class="sidebar-brand brand-logo" href="index.html"><img src="{{asset('admin/assets/images/logo.svg')}}" alt="logo" /></a>
          <a class="sidebar-brand brand-logo-mini" href="index.html"><img src="{{asset('admin/assets/images/logo-mini.svg')}}" alt="logo" /></a>
        </div>
        <ul class="nav">
          <li class="nav-item profile">
            <div class="profile-desc">
              <div class="profile-pic">
                <div class="count-indicator">
                  <img class="img-xs rounded-circle " src="{{asset('admin/assets/images/faces/face15.jpg')}}" alt="">
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
                    <p class="preview-subject ellipsis mb-1 text-small">Settings</p>
                  </div>
                  
                </a>
                <div class="dropdown-divider">
                </div>
                </div>
            </div>
          </li>
         
          <li class="nav-item menu-items">
            <a class="nav-link" href="Mindex.html">
              <span class="menu-icon">
                <i class="mdi mdi-view-dashboard"></i>
              </span>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
       
          <li class="nav-item menu-items">
            <a class="nav-link" href="MAddTrainer.html">
              <span class="menu-icon">
                <i class="mdi mdi-account-multiple-plus"></i>
              </span>
              <span class="menu-title">Add Triner</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="Mviewtrainer.html">
              <span class="menu-icon">
                <i class="
                mdi mdi-account-multiple"></i>
              </span>
              <span class="menu-title">View Triners</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="Mviewplayers.html">
              <span class="menu-icon">
                <i class="mdi mdi-numeric-9-plus-box-multiple-outline"></i>
              </span>
              <span class="menu-title">View Players</span>
            </a>
          </li>
          
          <li class="nav-item menu-items">
            <a class="nav-link" href="Mviewplannings.html">
              <span class="menu-icon">
                <i class="mdi mdi-dumbbell"></i>
              </span>
              <span class="menu-title">View Plannings</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="Mviewviolations.html">
              <span class="menu-icon">
                <i class="mdi mdi-account-off"></i>
              </span>
              <span class="menu-title">View violations</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="Mviewbannings.html">
              <span class="menu-icon">
                <i class="mdi mdi-account-off"></i>
              </span>
              <span class="menu-title">View Bannings</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="MAddAdvice.html">
              <span class="menu-icon">
                <i class="mdi mdi-monitor-cellphone-star"></i>
              </span>
              <span class="menu-title">Add Advice</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="calc.html">
              <span class="menu-icon">
                <i class="mdi mdi-calculator"></i>
              </span>
              <span class="menu-title">View Site Statistics</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="MAddArticle.html">
              <span class="menu-icon">
                <i class="mdi mdi-monitor-star"></i>
              </span>
              <span class="menu-title">Add Articles</span>
            </a>
          </li>
        </ul>
      </nav>
      <!-- End Sidebar -->


       <!-- _navbar -->



      <div class="container-fluid page-body-wrapper">
  <nav class="navbar p-0 fixed-top d-flex flex-row">
          <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
            <a class="navbar-brand brand-logo-mini" href="index.html"><img src="{{asset('admin/assets/images/logo-mini.svg')}}" alt="logo" /></a>
          </div>
          <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
              <span class="mdi mdi-menu"></span>
            </button>
            <ul class="navbar-nav navbar-nav-right">
              <li class="nav-item dropdown border-left">
                  <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="chat.html">
                    <p class="text-success ms-2 mb-0 font-weight-medium">15</p>
                    <i class="mdi mdi-email"></i>
                 
                  </a>
                </li>
                
                <li class="nav-item dropdown border-left">
                  <a class="nav-link count-indicator dropdown-toggle" href="Mreplycomplaint.html">
                    <p class="text-danger ms-2 mb-0 font-weight-medium">15</p>
                    <i class="mdi mdi-bell"></i>
                  </a>
                </li>
                <li class="nav-item dropdown border-left">
                  <a class="nav-link count-indicator dropdown-toggle" href="#">
                    <i class="mdi mdi-youtube-subscription"></i>
                  </a>
                </li>
              <li class="nav-item dropdown">
                <a class="nav-link" id="profileDropdown" href="#" data-bs-toggle="dropdown">
                  <div class="navbar-profile">
                    <img class="img-xs rounded-circle" src="{{asset('admin/assets/images/faces/face15.jpg')}}" alt="">
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
                    <table class="table">
                      <thead>
              <td>Id</td>
              <td>first name</td>
              <td>last name</td>
              <td>birdth</td>
              <td>phone</td>
              <td>email</td>
              <td>address</td>
              <td>trainer id</td>
              <td>planning id</td>
              <td>length</td>
              <td>weigth</td>
              <td>gender</td>
              <td>level id</td>
              <td></td>
              <td></td>
              </tr></thead>
              <tbody>
              <tr>
              <td>6</td>
                  <td>ali</td>
                  <td>shami</td>
                  <td>2/1/2001</td>
                  <td>0985245628</td>
                  <td>ali86@gmail.com</td>
                  <td>damas</td>
                  <td>45</td>
                  <td>12</td>
                  <td>170</td>
                  <td>75</td>
                  <td>male</td>
                  <td>3</td>   
                  <td><a href="#"><button class="btn btn-warning">violation</button></a></td>
     <td><button class="btn btn-danger">Ban</button></td>   
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
    <script src="{{asset('admin/assets/vendors/js/vendor.bundle.base.js')}}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{asset('admin/assets/vendors/chart.js/Chart.min.js')}}"></script>
    <script src="{{asset('admin/assets/vendors/progressbar.js/progressbar.min.js')}}"></script>
    <script src="{{asset('admin/assets/vendors/jvectormap/jquery-jvectormap.min.js')}}"></script>
    <script src="{{asset('admin/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
    <script src="{{asset('admin/assets/vendors/owl-carousel-2/owl.carousel.min.js')}}"></script>
    <script src="{{asset('admin/assets/js/jquery.cookie.js" type="text/javascript')}}"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{asset('admin/assets/js/off-canvas.js')}}"></script>
    <script src="{{asset('admin/assets/js/hoverable-collapse.js')}}"></script>
    <script src="{{asset('admin/assets/js/misc.js')}}"></script>
    <script src="{{asset('admin/assets/js/settings.js')}}"></script>
    <script src="{{asset('admin/assets/js/todolist.js')}}"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="{{asset('admin/assets/js/dashboard.js')}}"></script>
    <!-- End custom js for this page -->
  </body>
</html>