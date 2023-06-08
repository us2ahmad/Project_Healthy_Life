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
                @if(session('success'))
    <div class="alert alert-success" id="success-message">
        {{ session('success') }}
    </div>
@endif
                  @if(count($advices)>0)
                    
                
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
            <td><img src="{{ asset('/imgs/'.$adv->photo) }}" alt=""></td>
            <td>
            <form method="POST" action="{{ route('admin.destroy.advice',$adv->id) }}">
              @csrf
    @method('POST')
    <button type="submit" class="btn btn-inverse-danger btn-fw">Delete</button>
  </form>
</td>
<td>    
<form method="POST" action="{{ route('admin.edit.advice',$adv->id) }}">
@csrf
@method('POST')
<button type="submit" class="btn btn-success">Edit</button>
</form>
</td>
</tr>
        @endforeach
      </tbody>
  </table>
</tr>
</tbody>
        </table>
          @else
          <div style="text-align: center; margin-top: 50px;">
          <h3 style="color: #555; font-size: 24px;">There Are No Advices</h3>
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



  </body>
</html>