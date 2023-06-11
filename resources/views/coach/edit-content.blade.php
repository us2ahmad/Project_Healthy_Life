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
              <div class="col-xl-12 col-sm-12 grid-margin stretch-card">
                <div class="card">
                  <div class=" container-fluid page-body-warper">
                    <div class="container">
                      @if(session('success'))
                      <div class="alert alert-success" id="success-message">
                      {{ session('success') }}
                    </div>
                      @endif
                    <h3>Eidt Article</h3>
                    @if ($errors->any())
                    <div>
                      <ul>
              @foreach ( $errors->all() as $error )
                <li>{{$error}}</li>
              @endforeach
                        </ul>
                  </div>
                    @endif
                <form method="POST" action="{{route('coach.update.content',$content->id)}}" enctype="multipart/form-data">
                    @csrf
                    @method('POST')
                    <div class="col-md-12">
                                <label for="type" class="form-label">Type</label>
                    <select name="type" id=""  style="color:aliceblue; background-color:rgb(60, 71, 81)"    required >
                      <option value="chest" @if($content->type=='chest') selected @endif >Chest</option> 
                      <option value="foot" @if($content->type=='foot') selected @endif >Foot</option>
                      <option value="back" @if($content->type=='back') selected @endif >Back</option>
                      <option value="shoulder" @if($content->type=='shoulder') selected @endif >Shoulder</option> 
                      <option value="triceps" @if($content->type=='triceps') selected @endif >Triceps</option>
                      <option value="biceps" @if($content->type=='biceps') selected @endif >Biceps</option>
                    </select>
                    </div>
                    <div style="padding: 15px;" class="col-sm-6" style="color:aliceblue;display: block;">
                    <label for="title">Title:</label>
                    <input type="text" id="title" name="title" required   value="{{$content->title}}" style="color:aliceblue;background-color: rgb(27, 32, 32);" class="form-control p_input"><br>       </div>	
                    <div style="padding: 15px;" class="col-sm-6" style="color:aliceblue;display: block;">
                    <label for="description">Description:</label><br>
                    <textarea id="description" name="description"  cols="50" rows="4" style="color:aliceblue;background-color: rgb(27, 32, 32);" required >{{$content->description}} </textarea><br>
                    </div>    
                    <div class="col-md-12">
                    <label for="image" class="form-label">Link</label>
                    <input type="file" name="link" id="link" class="form-control" required>
                    @if ($content->link)
                    <label for="description">Old Link:</label><br>
                    <img src="{{ asset('/imgs/'.$content->link) }}" alt="Old Image" width="200" height="150">
                    @endif
                  </div>
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