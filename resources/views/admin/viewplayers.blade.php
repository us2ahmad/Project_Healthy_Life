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
              <td>first name</td>
              <td>last name</td>
              <td>birdth</td>
              <td>phone</td>
              <td>email</td>
              <td>address</td>
              <td>trainer id</td>
              <td>planning id</td>
              <td>length</td>
              <td>weigth</td>
              <td>gender</td>
              <td>level id</td>
              <td></td>
              <td></td>
              </tr></thead>
              <tbody>
              <tr>
            @foreach ($users  as $user)
   
        <td>{{ $User->id }}</td>
        <td>{{ $user->first_name}}</td>
        <td>{{ $user->last_name}}</td>
        <td>{{ $user->email}}</td>
        <td>{{ $user->gender}}</td>
        <td>{{ $user->account_type}}</td>
   

                  <td><a href="#"><button class="btn btn-inverse-warning">violation</button></a></td>
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