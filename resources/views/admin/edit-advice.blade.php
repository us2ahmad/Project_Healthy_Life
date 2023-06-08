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
        <div class="main-panel">
          <div class="content-wrapper">
           
              <div class="col-xl-12 col-sm-12 grid-margin stretch-card">
                <div class="card">
                @if(session('success'))
    <div class="alert alert-success" id="success-message">
        {{ session('success') }}
    </div>
@endif
                  <div class=" container-fluid page-body-warper">
                    <div class="container">
                    <h1>Edit Advice</h1>
                          <form method="POST" action="{{route('admin.update.advice',$advice->id)}}" enctype="multipart/form-data">
                            @csrf
                            @method('POST')
                            <div class="col-md-12">
                    <label for="image" class="form-label">Image</label>
                    <input type="file" name="photo" id="image" class="form-control" required>
                    @if ($advice->photo)
                    <label for="description">Old Image:</label><br>
                    <img src="{{ asset('/imgs/'.$advice->photo) }}" alt="Old Image" width="200" height="150">
                    @endif
                </div>
                  <div style="padding: 15px;" class="col-sm-6" style="color:aliceblue;display: block;">
                  <label for="">Advice</label><br>
                  <textarea name="desc" id="" cols="80" rows="10" style="color:aliceblue;background-color: rgb(27, 32, 32);" placeholder="  
      Enter Description The Advice" required>{{$advice->desc}}</textarea>
    </div>
                     <div style="padding-left:50% ;">
                     <input type="submit" value="submit" class="btn btn-inverse-success btn-fw">
                    </div>
                    <hr>
                </form>
                </div>	
            </div>
        </div>
    </div>
</div>
</div>
</div>
    <!-- container-scroller -->
   <script src="{{asset('admin/assets/vendors/js/vendor.bundle.base.js')}}"></script>
    <script src="{{asset('admin/assets/js/misc.js')}}"></script>
  
    <script>
    var successMessage = document.getElementById('success-message');
    setTimeout(function() {
        if (successMessage) {
            successMessage.style.display = 'none';
        }
    }, 1000);
</script>
  
  </body>
</html>


