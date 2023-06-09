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
                      @if(count($players)>0)
                    <table class="table">
                    <thead>
                    <td>Player Id</td>
                    <td>UserName</td>
                    <td>First Name</td>
                    <td>Last Name</td>
                    <td>Email</td>
                    <td>Gender</td>
                    <td>Photo</td>
                    <td>Height</td>
                    <td>Weight</td>
                    <td>Level</td>
                    <td>Trainer Id</td>
                    <td>Planning Id</td>
                    <td>Action</td>
                  </tr>
                </thead>
                <tbody>
                <tr>
                @foreach ($players  as $player)
                <td>{{ $player->player->id }}</td>
                <td>{{ $player->name}}</td>
                <td>{{ $player->first_name}}</td>
                <td>{{ $player->last_name}}</td>
                <td>{{ $player->email}}</td>
                <td>{{ $player->gender}}</td>
                <td><img src="{{asset('/imgs/'.$player->photo)}}" alt="Not Found"></td>
                <td>{{ $player->player->height}}</td>
                <td>{{ $player->player->weight}}</td>  
                <td>{{ $player->player->level}}</td>
                <td>{{ $player->player->id_coache}}</td>
                <td></td>
                <td><form action="{{route('admin.ban.player', $player->id)}}" method="POST">@csrf<button type="submit" class="btn btn-primary">Ban</button></form></td>             
              </tr>
              @endforeach
            </tbody>
          </table>
          @else
          <div style="text-align: center; margin-top: 50px;">
          <h3 style="color: #555; font-size: 24px;">There Are No Players</h3>
        </div>
          @endif
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