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
         
           
              <div class="col-xl-12 col-sm-12 grid-margin stretch-card">
                <div class="card">
                
                  <div class=" container-fluid page-body-warper">
                    <div class="container">
                    <h1>Add Article</h1>
                          <form action="" >
                            <div class="col-md-12">
                                <label for="type" class="form-label">Type</label>
                                <select style="color:aliceblue; background-color:rgb(60, 71, 81) " class="form-select" id="country" required="">
                                  <option value="">Health</option>
                                  <option value="">Trining</option>
                                   <option value="">Niotren</option>
                                </select>
                              </div>
                              <div class="col-md-12">
                                <label for="type" class="form-label">Number</label>
                                <select style="color:aliceblue; background-color:rgb(60, 71, 81) " class="form-select" id="country" required="">
                                  <option value="">1</option>
                                  <option value="">2</option>
                                   <option value="">3</option>
                                   <option value="">4</option>
                                   <option value="">5</option>
                                </select>
                                
                              </div>
                             <div style="padding: 15px;" class="col-sm-12">
                        <label for="">Photo</label>
                        <input  style="color:aliceblue;display: block;" type="file" name="Cartificates" placeholder="Give a Trainer Experience" required="" height="10px" class="form-control p_input">
                        </div>
                    <div style="padding: 15px;" class="col-sm-6" style="color:aliceblue;display: block;">
                <label for="">disecreption</label><br>
 <textarea name="disecreption" id="" cols="139" rows="4" style="color:aliceblue;background-color: rgb(27, 32, 32);"></textarea>
        </div>	
                            <div style="padding: 15px;" class="col-sm-6" style="color:aliceblue;display: block;">
                             <label for="">Article</label><br>
              <textarea name="Article" id="" cols="139" rows="10" style="color:aliceblue;background-color: rgb(27, 32, 32);"></textarea>
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