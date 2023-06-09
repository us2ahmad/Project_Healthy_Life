<div class="container-scroller">
<!-- Sidebar -->

      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
          <a class="sidebar-brand brand-logo" href="index"><img src="{{asset('admin/assets/images/logo.svg')}}" alt="logo" /></a>
          <a class="sidebar-brand brand-logo-mini" href="index"><img src="{{asset('admin/assets/images/logo-mini.svg')}}" alt="logo" /></a>
        </div>
        <ul class="nav">
          <li class="nav-item profile">
            <div class="profile-desc">
              <div class="profile-pic">
                <div class="count-indicator">
                  <img class="img-xs rounded-circle " src="{{asset('admin/assets/images/photo.jpg')}}" alt="">
                  <span class="count bg-success"></span>
                </div>
                <div class="profile-name">
                  <h5 class="mb-0 font-weight-normal">{{auth()->user()->name}}</h5>
              
                </div>
              </div>
              <a href="#" id="profile-dropdown" data-bs-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></a>
              <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list" aria-labelledby="profile-dropdown">
                <a  href="{{ route('profile.show') }}" class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-settings text-primary"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                  
                    <p class="preview-subject ellipsis mb-1 text-big">Profile</p>
                  </div>
                  
                </a>
                <div class="dropdown-divider">
                </div>
                </div>
            </div>
          </li>
         
          <li class="nav-item menu-items">
            <a class="nav-link" href="{{route('admin.index')}}">
              <span class="menu-icon">
                <i class="mdi mdi-view-dashboard"></i>
              </span>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
       
          <li class="nav-item menu-items">
            <a class="nav-link" href="{{route('admin.accept.coach')}}">
              <span class="menu-icon">
                <i class="mdi mdi-account-multiple-plus"></i>
              </span>
              <span class="menu-title">Coach Request</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="{{route('admin.view.coashes')}}">
              <span class="menu-icon">
                <i class="
                mdi mdi-account-multiple"></i>
              </span>
              <span class="menu-title">View Coaches</span>
            </a>
          </li>

          <li class="nav-item menu-items">
            <a class="nav-link" href="{{route('admin.view.players')}}">
              <span class="menu-icon">
                <i class="mdi mdi-numeric-9-plus-box-multiple-outline"></i>
              </span>
              <span class="menu-title">View Players</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="{{route('admin.view.plan')}}">
              <span class="menu-icon">
                <i class="mdi mdi-dumbbell"></i>
              </span>
              <span class="menu-title">View Plannings</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="{{route('admin.view.coach.ban')}}">
              <span class="menu-icon">
                <i class="mdi mdi-account-off"></i>
                </span>
              <span class="menu-title">View Coach Bannings</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="{{route('admin.view.player.ban')}}">
              <span class="menu-icon">
                <i class="mdi mdi-account-off"></i>
              </span>
              <span class="menu-title">View Player Bannings</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="{{route('admin.peag.advice')}}">
              <span class="menu-icon">
                <i class="mdi mdi-monitor-cellphone-star"></i>
              </span>
              <span class="menu-title">Add Advice</span>
            </a>
          </li>
           <li class="nav-item menu-items">
            <a class="nav-link" href="{{route('admin.show.advices')}}">
              <span class="menu-icon">
                <i class="mdi mdi-monitor"></i>
              </span>
              <span class="menu-title">View Advices</span>
            </a>
          </li>
           <li class="nav-item menu-items">
            <a class="nav-link" href="{{route('admin.show.article')}}">
              <span class="menu-icon">
                <i class="mdi mdi-monitor"></i>
              </span>
              <span class="menu-title">view Articles</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="{{route('admin.payment','accept')}}">
              <span class="menu-icon">
                <i class="mdi mdi-calculator"></i>
              </span>
              <span class="menu-title">Payments Accept</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="{{route('admin.payment','unaccept')}}">
              <span class="menu-icon">
                <i class="mdi mdi-calculator"></i>
              </span>
              <span class="menu-title">Payments UnAccept</span>
            </a>
          </li>
         
        </ul>
      </nav>
      <!-- End Sidebar -->