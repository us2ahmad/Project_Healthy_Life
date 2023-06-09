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
            
              
              <div class=" container-fluid page-body-warper">
                <div class="container">
                <h2 class="card-title">Players Violations</h2>
                <table class="table" >
                    
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
          <td>violation id</td>
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