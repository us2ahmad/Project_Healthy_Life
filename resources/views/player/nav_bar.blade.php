
	<!-- ======= Header ======= -->
	<header id="header" class="fixed-top header-transparent">
		<div class="container d-flex align-items-center justify-content-between">

		<a href="{{route('player.index')}}" class="logo"><img src="{{asset('assets/img/Logo.png')}}" alt="" class="img-fluid"></a>

    <nav id="navbar" class="navbar">
          <ul>
            <li><a class="nav-link scrollto active" href="{{route('player.index')}}">Home</a></li>
            
           
				
            @if(auth()->check())
        <li>
            <a href="{{ route('profile.show') }}">
            <button type="button" class="btn btn-outline-warning" style="color: white;">Profile</button>
          </a>
        </li>
        
        <li>
        <form id="logout-form" action="{{ route('logout') }}" method="POST">
    @csrf
    <button type="submit" class="btn btn-outline-warning" style="color: white;">Log Out</button>
</form>
        </li>
        @else
        <li>
            <a href="/login">
            <button type="button" class="btn btn-outline-warning" style="color: white;">Log In</button>
          </a>
        </li>
        <li>
            <a href="{{route('register1')}}">
            <button type="button" class="btn btn-outline-warning" style="color: white;">Sing Up</button>
          </a>
        </li>
        @endif
          </ul>
      </nav>
		</div>
	</header>
	<!-- End Header -->
	
  
 <!-- ======= Home Section ======= -->
 <section id="home" class="d-flex align-items-center justify-content-center">
    <div class="container position-relative">
      <h1>@yield('title')</h1>
      <h2><i>@yield('desc')</i></h2>
    </div>
  </section>
  <!-- End Home -->
  