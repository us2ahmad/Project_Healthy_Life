<!-- Sidebar -->
<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
        <a class="sidebar-brand brand-logo" href="{{ route('coach.home') }}"><img
                src="{{ asset('coach/assets/images/logo.svg') }}" alt="logo" /></a>
    </div>
    <ul class="nav">
        <li class="nav-item profile">
            <div class="profile-desc">
                <div class="profile-pic">
                    <div class="count-indicator">
                        <img class="img-xs rounded-circle " src="{{ asset('/imgs/' . auth()->user()->photo) }}"
                            alt="">
                        <span class="count bg-success"></span>
                    </div>
                    <div class="profile-name">
                        <h5 class="mb-0 font-weight-normal">{{ auth()->user()->first_name }}
                            {{ auth()->user()->last_name }}</h5>
                        <!--{{ auth()->user()->name }}  -->
                    </div>
                </div>
                <a href="#" id="profile-dropdown" data-bs-toggle="dropdown"><i
                        class="mdi mdi-dots-vertical"></i></a>
                <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list"
                    aria-labelledby="profile-dropdown">
                    <a href="{{ route('profile.show') }}" class="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                            <div class="preview-icon bg-dark rounded-circle">
                                <i class="mdi mdi-settings text-primary"></i>
                            </div>
                        </div>
                        <div class="preview-item-content">
                            <p class="preview-subject ellipsis mb-1 text-Bigger">Profile</p>
                        </div>

                    </a>
                    <div class="dropdown-divider">
                    </div>
                </div>
            </div>
        </li>

        <li class="nav-item menu-items">
            <a class="nav-link" href="{{ route('coach.home') }}">
                <span class="menu-icon">
                    <i class="mdi mdi-view-dashboard"></i>
                </span>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="{{ route('coach.add.cont') }}">
                <span class="menu-icon">
                    <i class="mdi mdi-account-multiple-plus"></i>
                </span>
                <span class="menu-title">Add Content</span>
            </a>
        </li>


        <li class="nav-item menu-items">
            <a class="nav-link" href="{{ route('coach.add.plan') }}">
                <span class="menu-icon">
                    <i class="mdi mdi-account-multiple-plus"></i>
                </span>
                <span class="menu-title">Add Training Planning</span>
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="{{ route('coach.view.plan') }}">
                <span class="menu-icon">
                    <i class="mdi mdi-dumbbell"></i>
                </span>
                <span class="menu-title">View Plannings</span>
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="{{ route('coach.view.players') }}">
                <span class="menu-icon">
                    <i class="mdi mdi-numeric-9-plus-box-multiple-outline"></i>
                </span>
                <span class="menu-title">View Players</span>
            </a>
        </li>

        <li class="nav-item menu-items">
            <a class="nav-link" href="{{ route('coach.view.content')}}">
                <span class="menu-icon">
                    <i class="mdi mdi-numeric-9-plus-box-multiple-outline"></i>
                </span>
                <span class="menu-title">View Content</span>
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="{{ route('coach.page.article') }}">
                <span class="menu-icon">
                    <i class="mdi mdi-monitor-star"></i>
                </span>
                <span class="menu-title">Add Articles</span>
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="{{ route('coach.view.article') }}">
                <span class="menu-icon">
                    <i class="mdi mdi-monitor-cellphone-star"></i>
                </span>
                <span class="menu-title">View Articel</span>
            </a>
        </li>
    </ul>
</nav>
<!-- End Sidebar -->
