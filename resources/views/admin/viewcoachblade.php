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
              <div class="col-x12 col-sm-12 grid-margin stretch-card">
                <div class="card">
                
                  <div class=" container-fluid page-body-warper">
                    <div class="container">
                  <table class="table">
  <thead>
    <tr>
      <th>Id</th>
      <th>First name</th>
      <th>Last name</th>
      <th>Birthdate</th>
      <th>Phone</th>
      <th>Email</th>
      <th>Address</th>
      <th>Certification</th>
      <th>Evaluation</th>
      <th>Experience</th>
      <th></th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    @foreach ($coach  as $coache)
    
    <tr> 
      <td>{{ $coach->user_id }}</td>
      <td>{{ $coach->user->first_name }}</td>
      <td>{{ $coach->user->last_name }}</td>
      <td>{{ $coach->user->email }}</td>
       <td>{{ $coach->user->gender }}</td>

      <td>{{ $coach->certificate }}</td> 
      <td>{{ $coach->evaluation }}</td> 
      <td>{{ $coach->experience }}</td>
      <td><button class="btn btn-inverse-success">UnLook</button></td> 
      <td><button class="btn btn-inverse-danger">Look</button></td>             
    </tr>
    @endforeach
  </tbody>
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