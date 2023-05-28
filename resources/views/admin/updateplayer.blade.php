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
                    <div class="container">
                    <h1>Update Player</h1>
                          <form action="" >
              
                    <div style="padding: 15px;" class="col-sm-12">
                    <label for="">First Name</label>
                    <input style="color:aliceblue" type="text" name="First Name" placeholder="Give a First Name" required="" class="form-control p_input">
                          </div>
              
                    <div style="padding: 15px;" class="col-sm-12">
                    <label for="">Last Name</label>
                    <input style="color:aliceblue;" type="text"  name="Last name" placeholder="Give a Last Name" required="" class="form-control p_input">
                          </div>
              
                    <div style="padding: 15px;">
                      <label for="">Birdth</label>
                      <input style="color:aliceblue;" type="date" name="Birdth" placeholder="Give a Birdth" required="" class="form-control p_input">
                      </div>
              
                    <div style="padding: 15px;">
                      <label for=""> Phone</label>
                      <input style="color:aliceblue;" type="number" name="Phone" placeholder="Give a Phone" required="" class="form-control p_input">
                      </div>
                
                    <div style="padding: 15px;" class="col-sm-12">
                      <label for=""> Email</label>
                      <input style="color:aliceblue;" type="email" name="Email" placeholder="Give a Email" required="" class="form-control p_input">
                      </div>
                                
                    <div style="padding: 15px;" class="col-sm-12">
                      <label for=""> Address</label>
                      <input style="color:aliceblue;" type="text" name="Address" placeholder="Give a Address" required="" class="form-control p_input">
                        </div>
                        <div style="padding: 15px;" class="col-sm-12">
                            <label for=""> Triner Id</label>
                            <input style="color:aliceblue;" type="number" name="Triner Id" placeholder="Give a Triner Id" required="" class="form-control p_input">
                              </div>
                              <div style="padding: 15px;" class="col-sm-12">
                                <label for="">Planning Id</label>
                                <input style="color:aliceblue;" type="number" name="Planning Id" placeholder="Give a Planning Id" required="" class="form-control p_input">
                                  </div>
                                  <div style="padding: 15px;" class="col-sm-12">
                                    <label for=""> Length</label>
                                    <input style="color:aliceblue;" type="number" name="Length" placeholder="Give a Length" required="" class="form-control p_input">
                                      </div>
                                      <div style="padding: 15px;" class="col-sm-12">
                                        <label for=""> Width</label>
                                        <input style="color:aliceblue;" type="number" name="Width" placeholder="Give a Width" required="" class="form-control p_input">
                                          </div>
                                          <div style="padding: 15px;" class="col-sm-12">
                                            <label for=""> Gender</label>
                                            <input style="color:aliceblue" type="number" name="Gender" placeholder="Give a Gender" required="" class="form-control p_input">
                                              </div>
                                              <div style="padding: 15px;" class="col-sm-12">
                                                <label for=""> Level Id</label>
                                                <input style="color:aliceblue" type="number" name="Level Id" placeholder="Give a Level Id" required="" class="form-control p_input">
                                                  </div>
                                                  <div style="padding-left:550px ;">
                                                    <a href="#"> <button class="btn btn-success btn-fw">Submit</button></a><pre></pre>
                                                        </div>
                </form>
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