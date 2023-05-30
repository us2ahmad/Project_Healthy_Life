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
      <th>UserName</th>  
      <th>First Name</th>
      <th>Last Name</th>
      <th>Email</th>
      <th>Gender</th>
      <th>Certification</th>
     <th>Experience</th>
    <th>status</th>
     <th>Created At</th>

 
    </tr>
  </thead>
  <tbody>
    @foreach ($coaches  as $coach)
    
    <tr> 
    <td>{{ $coach->id }}</td>
    <td>{{ $coach->name}}</td>
      <td>{{ $coach->first_name }}</td>
      <td>{{ $coach->last_name }}</td>
      <td>{{ $coach->email }}</td>
       <td>{{ $coach->gender }}</td>    
       <td>{{ $coach->coach->certificate }}</td>
       <td>{{ $coach->coach->experience }}</td>
        <td>{{ $coach->coach->approved }}</td>
       <td>{{ $coach->coach->created_at }}</td>
      <td><button class="btn btn-inverse-success">UnLook</button></td> 
      <td><button class="btn btn-inverse-danger">Look</button></td>             
    </tr>
    @endforeach
  </tbody>
</table>
</div>
<!-- <div style="overflow-x: auto;">
    <table style="width: 100%; border-collapse: collapse;">
        <thead>
            <tr style="background-color: #000000;">
                <th style="padding: 10px; border: 1px solid #ddd;">Id</th>
                <th style="padding: 10px; border: 1px solid #ddd;">UserName</th>
                <th style="padding: 10px; border: 1px solid #ddd;">First Name</th>
                <th style="padding: 10px; border: 1px solid #ddd;">Last Name</th>
                <th style="padding: 10px; border: 1px solid #ddd;">Email</th>
                <th style="padding: 10px; border: 1px solid #ddd;">Gender</th>
                <th style="padding: 10px; border: 1px solid #ddd;">Certification</th>
                <th style="padding: 10px; border: 1px solid #ddd;">Experience</th>
                <th style="padding: 10px; border: 1px solid #ddd;">Status</th>
                <th style="padding: 10px; border: 1px solid #ddd;">Created At</th>
                <th style="padding: 10px; border: 1px solid #ddd;">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($coaches  as $coach)
            <tr>
                <td style="padding: 10px; border: 1px solid #ddd;">{{ $coach->id }}</td>
                <td style="padding: 10px; border: 1px solid #ddd;">{{ $coach->name }}</td>
                <td style="padding: 10px; border: 1px solid #ddd;">{{ $coach->first_name }}</td>
                <td style="padding: 10px; border: 1px solid #ddd;">{{ $coach->last_name }}</td>
                <td style="padding: 10px; border: 1px solid #ddd;">{{ $coach->email }}</td>
                <td style="padding: 10px; border: 1px solid #ddd;">{{ $coach->gender }}</td>
                <td style="padding: 10px; border: 1px solid #ddd;"><img src="{{ $coach->coach->certificate }}" alt="certification" style="max-width: 100%; height: auto;"></td>
                <td style="padding: 10px; border: 1px solid #ddd;">{{ $coach->coach->experience }}</td>
                <td style="padding: 10px; border: 1px solid #ddd;">{{ $coach->coach->approved }}</td>
                <td style="padding: 10px; border: 1px solid #ddd;">{{ $coach->coach->created_at }}</td>
                <td style="padding: 10px; border: 1px solid #ddd;">
                    <button class="btn btn-success">Unlook</button>
                    <button class="btn btn-danger">Look</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div> -->




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