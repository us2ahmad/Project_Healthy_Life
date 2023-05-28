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
                    <div class="container" >
                    <table class="table">
                      <thead>
              <tr >
                <td>Id</i></td>
                <td>Name</td>
             <td>Duration</td>
             <td>Min Length</td><td>MaxLength</td>
             <td>Min Whight</td><td>Max Whight</td>
              <td>goal id</td>
              <td></td>
              </tr></thead><tbody>
              <tr>
                <td>6</td>
                <td>goal</td>
                  <td>5</td>
                  <td>150</td><td>170</td>
                  <td>54</td><td>65</td>
                  <td>8</td>
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