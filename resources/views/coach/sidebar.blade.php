
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
                    <p class="preview-subject ellipsis mb-1 text-small">Settings</p>
                  </div>
                  
                </a>
                <div class="dropdown-divider">
                </div>
                </div>
            </div>
          </li>
         
          <li class="nav-item menu-items">
            <a class="nav-link" href="{{route('home')}}">
              <span class="menu-icon">
                <i class="mdi mdi-view-dashboard"></i>
              </span>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
       
          <li class="nav-item menu-items">
            <a class="nav-link" href="{{route('add.plan')}}">
              <span class="menu-icon">
                <i class="mdi mdi-account-multiple-plus"></i>
              </span>
              <span class="menu-title">Add Training Planning</span>
            </a>
          </li>
           <li class="nav-item menu-items">
            <a class="nav-link" href="{{route('view.plan')}}">
              <span class="menu-icon">
                <i class="mdi mdi-dumbbell"></i>
              </span>
              <span class="menu-title">View Plannings</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="{{route('view.players')}}">
              <span class="menu-icon">
                <i class="mdi mdi-numeric-9-plus-box-multiple-outline"></i>
              </span>
              <span class="menu-title">View Players</span>
            </a>
          </li>
          
         
          <li class="nav-item menu-items">
            <a class="nav-link" href="{{route('view.violations')}}">
              <span class="menu-icon">
                <i class="mdi mdi-account-off"></i>
              </span>
              <span class="menu-title">View violations</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="{{route('add.advice')}}">
              <span class="menu-icon">
                <i class="mdi mdi-monitor-cellphone-star"></i>
              </span>
              <span class="menu-title">Add Advice</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="{{route('page.article')}}">
              <span class="menu-icon">
                <i class="mdi mdi-monitor-star"></i>
              </span>
              <span class="menu-title">Add Articles</span>
            </a>
          </li>
        </ul>
      </nav>
      <!-- End Sidebar -->
