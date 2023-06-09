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
                    @if(count($coaches)>0)
                    <table class="table">             
                    <thead>
                    <tr>
                    <th>Coach Id</th>
                    <th>UserName</th>  
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Gender</th>
                    <th>Photo</th>
                    <th>Certification</th>
                    <th>Experience</th>
                    <th>status</th>
                    <th>Created At</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                @foreach ($coaches  as $coach)
                <tr> 
                <td>{{ $coach->coach->id }}</td>
                <td>{{ $coach->name}}</td>
                <td>{{ $coach->first_name }}</td>
                <td>{{ $coach->last_name }}</td>
                <td>{{ $coach->email }}</td>
                <td>{{ $coach->gender }}</td>   
                <td><img src="{{asset('/imgs/'.$coach->photo)}}" alt="Not Found"></td> 
                <td><img src="{{ asset('/imgs/' . $coach->coach->certificate) }}"></td>
                <td>{{ $coach->coach->experience }}</td>
                <td>{{ $coach->coach->approved }}</td>
                <td>{{ $coach->coach->created_at }}</td>
                <td><form action="{{route('admin.ban.coach', $coach->id)}}" method="POST">@csrf<button type="submit" class="btn btn-primary">Ban</button></form></td>             
              </tr>
              @endforeach
            </tbody>
          </table>
          @else
          <div style="text-align: center; margin-top: 50px;">
          <h3 style="color: #555; font-size: 24px;">There Are No Coaches</h3>
        </div>
          @endif
        </div>
        <br>
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