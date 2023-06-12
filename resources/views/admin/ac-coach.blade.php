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
                      
                @if(session('success'))
    <div class="alert alert-success" id="success-message">
        {{ session('success') }}
    </div>
@endif
                      @if(count($look)>0)
                    <table class="table">             
                    <thead>
                    <tr>
                    <th>Coach Id</th>
                    <th>UserName</th>  
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Gender</th>
                    <th>Certification</th>
                    <th>Experience</th>
                    <th>Created At</th> 
                    <th>Ation</th>   
                  </tr>
                </thead>
                <tbody>
                @foreach ($look  as $looke)
                <tr> 
                <td>{{ $looke->id }}</td>
                <td>{{ $looke->user->name}}</td>
                <td>{{ $looke->user->first_name }}</td>
                <td>{{ $looke->user->last_name }}</td>
                <td>{{ $looke->user->email }}</td>
                <td>{{ $looke->user->gender }}</td>    
                <td><img src="{{asset('/imgs/'.$looke->certificate)}}" alt="not found"></td>
                <td>{{ $looke->experience }}</td>
                <td>{{ $looke->created_at }}</td>
                {{-- <td><form action="{{route('admin.act.coach', $looke->id)}}" method="POST">@csrf<button type="submit" class="btn btn-primary">Accept</button></form></td>              --}}
                <td><form action="{{route('admin.accoa.coach', $looke->id)}}" method="POST">@csrf<button type="submit" class="btn btn-primary">Accept</button></form></td>             
                <td><form action="{{route('admin.dis.act.coach', $looke->id)}}" method="POST">@csrf<button type="submit" class="btn btn-primary">Un Accept</button></form></td>             
              </tr>
              @endforeach
            </tbody>
          </table>
          @else
          <div style="text-align: center; margin-top: 50px;">
          <h3 style="color: #555; font-size: 24px;">There Are No Requests</h3>
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

<script src="{{asset('admin/assets/vendors/js/vendor.bundle.base.js')}}"></script>
<script src="{{asset('admin/assets/js/misc.js')}}"></script>
</body>
</html>