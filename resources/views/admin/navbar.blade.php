
<div class="container-fluid page-body-wrapper">
  <nav class="navbar p-0 fixed-top d-flex flex-row">
          <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
            <a class="navbar-brand brand-logo-mini" href="index"><img src="{{asset('admin/assets/images/logo-mini.svg')}}" alt="logo" /></a>
          </div>
          <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
              <span class="mdi mdi-menu"></span>
            </button>
            <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item dropdown border-left">
                <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="/chatify">
                  <p class="text-success ms-2 mb-0 font-weight-medium"></p>
                  <i class="mdi mdi-email"></i>
               
                </a>
              </li>
              
                <li class="nav-item dropdown border-left">
                  <a class="nav-link count-indicator dropdown-toggle" href="{{route('admin.accept.coach')}}">
                    <p class="text-danger ms-2 mb-0 font-weight-medium">{{$count}}</p>
                    <i class="mdi mdi-bell"></i>
                  </a>
                </li>

                {{-- <li class="nav-item dropdown border-left">
                  <a class="nav-link count-indicator dropdown-toggle" href="#">
                    <i class="mdi mdi-youtube-subscription"></i>
                  </a>
                </li> --}}
             
              <li class="nav-item dropdown">
                <a class="nav-link" id="profileDropdown" href="#" data-bs-toggle="dropdown">
                  <div class="navbar-profile">
                    <img class="img-xs rounded-circle" src="{{asset('admin/assets/images/photo.jpg')}}" alt="">
                    <p class="mb-0 d-none d-sm-block navbar-profile-name">{{auth()->user()->name}}</p>
                    <i class="mdi mdi-menu-down d-none d-sm-block"></i>
                  </div>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="profileDropdown">
                  <h6 class="p-3 mb-0">Manage Account</h6>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item" href="{{ route('profile.show') }}">
                          <div class="preview-thumbnail">
                            <div class="preview-icon bg-dark rounded-circle">
                              <i class="mdi mdi-settings text-success"></i>
                            </div>
                          </div>
                          <div class="preview-item-content">
                            <p class="preview-subject mb-1" >Profile</p>
                          </div>
                        </a>
                  <div class="dropdown-divider"></div>
                  <form action="{{ route('logout') }}" method="POST">    
                          @csrf 
    <div class="dropdown-divider"></div>
    <a class="dropdown-item preview-item"  onclick="event.preventDefault(); this.closest('form').submit();">
        <div class="preview-thumbnail">
            <div class="preview-icon bg-dark rounded-circle">
                <i class="mdi mdi-logout text-danger"></i>
            </div>
        </div>
        <div class="preview-item-content">
            <span class="preview-subject mb-1">Log out</span>
        </div>
    </a>
</form>
                 
                </div>
              </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
              <span class="mdi mdi-format-line-spacing"></span>
            </button>
          </div>
        </nav>

        <!-- partial -->
   