<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Moderator</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{asset('coach/assets/vendors/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('coach/assets/vendors/css/vendor.bundle.base.css')}}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{asset('coach/assets/vendors/jvectormap/jquery-jvectormap.css')}}">
    <link rel="stylesheet" href="{{asset('coach/assets/vendors/flag-icon-css/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{asset('coach/assets/vendors/owl-carousel-2/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('coach/assets/vendors/owl-carousel-2/owl.theme.default.min.css')}}">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{asset('coach/assets/css/style.css')}}">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{asset('coach/assets/images/favicon.png')}}" />
  </head>
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
                    <h1>Update Trainer</h1>
                          <form action="" >
              
                    <div style="padding: 15px;" class="col-sm-12">
                    <label for="">First Name</label>
                    <input style="color:aliceblue" type="text" name="First Name" placeholder="Give a Trainer First Name" required="" class="form-control p_input">
                          </div>
              
                    <div style="padding: 15px;" class="col-sm-12">
                    <label for="">Last Name</label>
                    <input style="color:aliceblue" type="text"  name="Last name" placeholder="Give a Trainer Last Name" required="" class="form-control p_input">
                          </div>
              
                    <div style="padding: 15px;" class="col-sm-12">
                      <label for="">Birdth</label>
                      <input style="color:aliceblue" type="date" name="Birdth" placeholder="Give a Trainer Birdth" required="" class="form-control p_input">
                      </div>
              
                    <div style="padding: 15px;" class="col-sm-12">
                      <label for=""> Phone</label>
                      <input style="color:aliceblue" type="number" name="Phone" placeholder="Give a Trainer Phone" required="" height="10px" class="form-control p_input">
                      </div>
                
                    <div style="padding: 15px;" class="col-sm-12">
                      <label for=""> Email</label>
                      <input style="color:aliceblue" type="email" name="Email" placeholder="Give a Trainer Email" required="" height="10px" class="form-control p_input">
                      </div>
                                
                    <div style="padding: 15px;" class="col-sm-12">
                      <label for=""> Address</label>
                      <input style="color:aliceblue" type="text" name="Address" placeholder="Give a Trainer Address" required="" class="form-control p_input">
                        </div>
              
                    <div style="padding: 15px;" class="col-sm-12">
                      <label for="">Cartificates</label>
                      <input style="color:aliceblue;" type="text" name="Cartificates" placeholder="Give a Trainer Cartificates" required="" class="form-control p_input">
                      </div>
              
                      <div style="padding: 15px;" class="col-sm-12">
                        <label for="">Evaluation</label>
                        <input style="color:aliceblue" type="number" name="evaluation" placeholder="Give a Trainer evaluation" required="" height="10px" class="form-control p_input">
                        </div>	
                       <div style="padding: 15px;" class="col-sm-12">
                        <label for="">Experience</label>
                        <input style="color:aliceblue;" type="text" name="Cartificates" placeholder="Give a Trainer Experience" required="" class="form-control p_input">
                        </div>
                        <div style="padding-left: 500px;">
                          <a href="#"><button type="submit" class="btn btn-dribbble btn-fw">Submit</button></a> </div>
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