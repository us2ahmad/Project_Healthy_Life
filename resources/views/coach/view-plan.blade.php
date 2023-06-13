<!DOCTYPE html>
<html lang="en">
@include('coach.head')
  <body>
    <div class="container-scroller">
     

      <!-- Sidebar -->
      @include('coach.sidebar')
      <!-- End Sidebar -->

       <!-- _navbar -->
@include('coach.navbar')
     <!-- _navbar -->

        <!-- partial -->
        <div class="main-panel">
  <div class="content-wrapper">
    <div class="row">
      <div class="col-xl-12 col-sm-12 grid-margin stretch-card">
        <div class="card">
          <div class="container-fluid page-body-warper">
            <div class="container">
            @if(count($plans)>0)
              <table class="table">
                <thead>
                  <tr>
                  <td>Id</td>
                <td>Goal</td>
                <td>Duration</td>
                <td>Min Height</td>
                <td>Max Height</td>
                <td>Min Weight</td>
                <td>Max Weight</td>
                  </tr>
                </thead>
                <tbody>
                @foreach ( $plans as $plan )
              <tr>
              <td>{{$plan->id}}</td>
              <td>{{$plan->goal}}</td>
              <td>{{$plan->duration}}</td>
              <td>{{$plan->min_high}}</td>
              <td>{{$plan->max_high}}</td>
              <td>{{$plan->min_weight}}</td>
              <td>{{$plan->max_weight}}</td>
              </tr>
              @endforeach
                </tbody>
     
              </table>
              @else
      <div style="text-align: center; margin-top: 50px;">
          <h3 style="color: #555; font-size: 24px;">There Are No Plans</h3>
        </div>
          @endif
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