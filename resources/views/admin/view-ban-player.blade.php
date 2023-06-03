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
          @if(count($bans)>0)
        <table class="table">
        <thead>        
        <tr>
        <td>Id</td>     
        <td>UserName</td>
        <td>First Name</td>
        <td>Last Name</td>
        <td>Email</td>
        <td>Gender</td>
      </tr>
    </thead>
    <tbody>
    @foreach ( $bans as $ban )
    <tr>
    <td>{{$ban->user->id}}</td>
    <td>{{$ban->user->name}}</td>
    <td>{{$ban->user->first_name}}</td>
    <td>{{$ban->user->last_name}}</td>
    <td>{{$ban->user->email}}</td>
    <td>{{$ban->user->gender}}</td>
    <td><form action="{{route('admin.unban.player', $ban->id)}}" method="POST">@csrf<button type="submit" class="btn btn-primary">UnBan</button></form></td>             
  </tr>
  @endforeach
</tbody>
</table>
@else
<div style="text-align: center; margin-top: 50px;">
<h3 style="color: #555; font-size: 24px;">There Are No Players Banned</h3>
</div>
@endif
</div>	
</div>
</div>
</div>
</div>
</div>
</div>
<!-- container-scroller -->
<!-- plugins:js -->
<script src="{{asset('admin/assets/vendors/js/vendor.bundle.base.js')}}"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<script src="{{asset('admin/assets/vendors/chart.js/Chart.min.js')}}"></script>
<script src="{{asset('admin/assets/vendors/progressbar.js/progressbar.min.js')}}"></script>
<script src="{{asset('admin/assets/vendors/jvectormap/jquery-jvectormap.min.js')}}"></script>
<script src="{{asset('admin/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
<script src="{{asset('admin/assets/vendors/owl-carousel-2/owl.carousel.min.js')}}"></script>
<script src="{{asset('admin/assets/js/jquery.cookie.js" type="text/javascript')}}"></script>
<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="{{asset('admin/assets/js/off-canvas.js')}}"></script>
<script src="{{asset('admin/assets/js/hoverable-collapse.js')}}"></script>
<script src="{{asset('admin/assets/js/misc.js')}}"></script>
<script src="{{asset('admin/assets/js/settings.js')}}"></script>
<script src="{{asset('admin/assets/js/todolist.js')}}"></script>
<!-- endinject -->
<!-- Custom js for this page -->
<script src="{{asset('admin/assets/js/dashboard.js')}}"></script>
<!-- End custom js for this page -->
</body>
</html>