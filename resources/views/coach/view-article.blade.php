<!DOCTYPE html>
<html lang="en">
  <head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-7Lm9I6vM1yY2J7Dd4Iq/0FgEa7Zqg2E6X/8L1TIeVde1zQ+/J3V7Zs9Q7O9XQG4sJlQX97n9iCZ58yEj2xZ4cQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

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
          <div class="container-fluid page-body-warper">
            <div class="container">
            @if(session('success'))
    <div class="alert alert-success" id="success-message">
        {{ session('success') }}
    </div>
@endif
              @if(count($articles)>0)
              <table class="table">
                <thead>
                  <tr>
                    <th>Id</th>
                    <th>Title</th>
                    <th>Type</th>
                    <th>Description</th>
                    <th>Content</th>  
                    <th>Photo</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ( $articles as $article  )
                  <tr>
                    <td> {{$article->id}}</td>
                    <td> {{$article->title}}</td>
                    <td> {{$article->type}}</td>
                    <td> {{$article->description}}</td>
                    <td> {{$article->content}}</td>
                    <td><img src="{{asset('imgs/'.$article->image_path)}}" alt="Not Found"></td>
                    <td>    
                    <form method="POST" action="{{ route('coach.destroy.articel',$article->id) }}">
                    @csrf
                    @method('POST')
                    <button type="submit" class="btn btn-danger">Delete</button>
                  </form>
                </td>
                <td>    
                    <form method="POST" action="{{ route('coach.edit.articel',$article->id) }}">
                    @csrf
                    @method('POST')
                    <button type="submit" class="btn btn-success">Edit</button>
                  </form>
                </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
              @else
              <div style="text-align: center; margin-top: 50px;">
              <h3 style="color: #555; font-size: 24px;">There Are No Advices</h3>
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

    <script>
    // تحديد الرسائل التأكيدية بواسطة الهوية (IDs)
    var successMessage = document.getElementById('success-message');
    // تعيين مؤقت زمني لعنصر الرسالة التأكيدية
    setTimeout(function() {
        if (successMessage) {
            successMessage.style.display = 'none';
        }
    }, 1000); // تعيين 5000 ميلي ثانية (5 ثواني) كمؤقت زمني
</script>

  </body>
</html>