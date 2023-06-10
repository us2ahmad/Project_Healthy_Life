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
              @if(count($payments)>0)
              <table class="table" >
                <thead>
                <tr>
                <td>Id</td>
                <td>Player Id</td>
                <td>player Phone Number</td>
                <td>Coach Id</td>
                <td>Stauts</td>
                <td>Action</td>
              </tr>
            </thead>
      <tbody>
        @foreach ($payments as $payment )
          
     
        <tr>
        <td>{{$payment->id}}</td>
        <td>{{$payment->id_player}}</td>
        <td>{{$payment->phone_number}}</td>
        <td>{{$payment->id_coache}}</td>
        <td>{{$payment->approved}}</td>
        @if($payment->approved=='unaccept')
        <td><form action="{{route('admin.accept.payment',$payment->id)}}" method="POST">@csrf<button type="submit" class="btn btn-primary">Accept</button></form></td>             
      @endif  
      </tr>
          @endforeach
        </tbody>
      </table>
      @else
      <div style="text-align: center; margin-top: 50px;">
          <h3 style="color: #555; font-size: 24px;">There Are No Payments</h3>
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
<script>
    // تحديد الرسائل التأكيدية بواسطة الهوية (IDs)
    var successMessage = document.getElementById('success-message');
    // تعيين مؤقت زمني لعنصر الرسالة التأكيدية
    setTimeout(function() {
        if (successMessage) {
            successMessage.style.display = 'none';
        }
    }, 1000); // تعيين 1000  ميلي ثانية (1 ثانية) كمؤقت زمني
</script>

</body>
</html>