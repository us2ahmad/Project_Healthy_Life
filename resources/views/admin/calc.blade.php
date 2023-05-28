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
               
                <div class="col-sm-6 grid-margin">
               <div class="card">
                    <div class="card-body">
                      <h5>Revenue</h5>
                      <div class="row">
                        <div class="col-8 col-sm-12 col-xl-8 my-auto">
                          <div class="d-flex d-sm-block d-md-flex align-items-center">
                            <h2 class="mb-0">5000000 Sp</h2>
                          </div>
                          <h6 class="text-muted font-weight-normal"> 9.61% Since last month</h6>
                        </div>
                      <a href="imports.html"><div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                          <i class="icon-lg mdi mdi-wallet-travel text-danger ms-auto"></i>
                        </div></a>
                      </div>
                    </div>
                  </div>
                </div>  
                <div class="col-sm-6 grid-margin">
                  <div class="card">
                    <div class="card-body">
                      <h5>Purchase</h5>
                      <div class="row">
                        <div class="col-8 col-sm-12 col-xl-8 my-auto">
                         <div class="d-flex d-sm-block d-md-flex align-items-center">
                            <h2 class="mb-0">3500000Sp</h2>
                          </div>
                          <h6 class="text-muted font-weight-normal">2.27% Since last month</h6>
                        </div>
                        <a href="payments.html"><div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                          <i class="icon-lg mdi mdi-currency-usd"></i>
                        </div></a> 
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