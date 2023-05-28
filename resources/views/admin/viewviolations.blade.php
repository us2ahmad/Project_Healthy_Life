<!DOCTYPE html>
<html lang="en">
@include('admin.head')
  <body>
   
        <!-- sidebar -->
        @include('admin.sidebar')
       <!-- EndSidebar -->


         <!-- Navbar  -->
        @include('admin.navbar')
          <!-- EndNavbar -->
          
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
        <div class="row">
          <div class="col-xl-12 col-sm-12 grid-margin stretch-card">
            <div class="card">
            
              
              <div class=" container-fluid page-body-warper">
                <div style="padding-left: 700px;">
              <pre><a href="Mviolations.html"><button class="btn btn-warning btn-fw">View Validations</button></a></pre> </div>
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
              <td>5</td>
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