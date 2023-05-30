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
              <td>Id</td>
              <td>UserName</td>
              <td>First Name</td>
              <td>Last Name</td>
              <td>Email</td>
              <td>Gender</td>
              <td>Height</td>
              <td>Weight</td>
              <td>Level</td>
              <td>Trainer Id</td>
              <td>Planning Id</td>
              <td></td>
              <td></td>
              </tr></thead>
              <tbody>
              <tr>
            @foreach ($players  as $player)
   
        <td>{{ $player->id }}</td>
        <td>{{ $player->name}}</td>
        <td>{{ $player->first_name}}</td>
        <td>{{ $player->last_name}}</td>
        <td>{{ $player->email}}</td>
        <td>{{ $player->gender}}</td>
        <td>{{ $player->player->height}}</td>
        <td>{{ $player->player->weight}}</td>  
         <td>{{ $player->player->level}}</td>
        <td>{{ $player->player->id_coache}}</td>
     <td><button class="btn btn-inverse-danger">Ban</button></td>   
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