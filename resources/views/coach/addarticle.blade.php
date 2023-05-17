<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Moderator</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{asset('admin/assets/vendors/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/vendors/css/vendor.bundle.base.css')}}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet"href="{{asset('admin/assets/vendors/jvectormap/jquery-jvectormap.css')}}">
    <link rel="stylesheet"href="{{asset('admin/assets/vendors/flag-icon-css/css/flag-icon.min.css')}}">
    <link rel="stylesheet"href="{{asset('admin/assets/vendors/owl-carousel-2/owl.carousel.min.css')}}">
    <link rel="stylesheet"href="{{asset('admin/assets/vendors/owl-carousel-2/owl.theme.default.min.css')}}">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{asset('admin/assets/css/style.css')}}">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{asset('admin/assets/images/favicon.png')}}" />
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
              <div class="col-xl-12 col-sm-12 grid-margin stretch-card">
                <div class="card">
                  <div class=" container-fluid page-body-warper">
                    <div class="container">
                    <h3>Add Article</h3>
                <form method="POST" action="{{route('add.article')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="col-md-12">
                                <label for="type" class="form-label">Type</label>
                    <select name="type" id="" style="color:aliceblue; background-color:rgb(60, 71, 81)"    required >
                      <option value="health" >Health</option> 
                      <option value="training">Training</option>
                      <option value="nutrition">Nutrition</option>
                    </select>
                    </div>
                    <div style="padding: 15px;" class="col-sm-6" style="color:aliceblue;display: block;">
                              <label for="title">Title:</label>
                    <input type="text" id="title" name="title" required   style="color:aliceblue;background-color: rgb(27, 32, 32);" class="form-control p_input"><br>       </div>	
                    <div style="padding: 15px;" class="col-sm-6" style="color:aliceblue;display: block;">
                    <label for="description">Description:</label><br>
                    <textarea id="description" name="description"  cols="50" rows="4" style="color:aliceblue;background-color: rgb(27, 32, 32);" required ></textarea><br>
                    </div>    
                  
                    <div style="padding: 15px;" class="col-sm-6" style="color:aliceblue;display: block;">
                    <label for="content">Content:</label><br>
                    <textarea id="content" name="content" cols="50" rows="10" required style="color:aliceblue;background-color: rgb(27, 32, 32);"></textarea><br>
                    </div>
                    <label for="image">Image:</label><br>
                    <input type="file" id="image" name="image_path" required><br>
                   
                    <div style="padding-left:550px ;">
                    <input type="submit"  class="btn btn-success btn-fw" value="Submit">
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