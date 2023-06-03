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
              @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

                  <div class=" container-fluid page-body-warper">
                    <div class="container">
                    <h1>Add Advice</h1>
                          <form method="POST" action="{{route('admin.add.advice')}}" enctype="multipart/form-data">
                            @csrf
                            @method('POST')
                             <div style="padding: 15px;" class="col-sm-12">
                        <label for="">Photo</label>
                        <input  style="color:aliceblue;display: block;" type="file" name="photo" required="" class="form-control p_input">
                        </div>	
                            <div style="padding: 15px;" class="col-sm-6" style="color:aliceblue;display: block;">
                             <label for="">Advice</label><br>
              <textarea name="desc" id="" cols="80" rows="10" style="color:aliceblue;background-color: rgb(27, 32, 32);" placeholder="  
      Enter Description The Advice" required></textarea>
                     </div>
                     <div style="padding-left:50% ;">
                 <input type="submit" value="submit" class="btn btn-inverse-success btn-fw">
                      </div><hr>
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
  </body>
</html>