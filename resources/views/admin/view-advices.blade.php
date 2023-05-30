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
         <table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Description</th>
            <th>Photo</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($advices as $adv)
        <tr>
            <td>{{ $adv->id }}</td>
            <td>{{ $adv->desc }}</td >
            <td><img src="{{ asset($adv->photo) }}" alt=""></td>
            <td><button type="submit" class="btn btn-inverse-success btn-fw">unbanned</button></td>
        </tr>
        @endforeach
    </tbody>
</table>
            

 
          </tr></tbody>
          </table><br>
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