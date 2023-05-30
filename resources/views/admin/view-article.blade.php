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
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Type</th> 
            <th> Description</th>
            <th>Content</th>
            <th >Coache Id</th>
            <th>Photo</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($articles as $article)
        <tr>
            <td>{{ $article->id }}</td>
            <td>{{ $article->title }}</td >
            <td>{{ $article->type }}</td >
            <td>{{ $article->description }}</td >
            <td>{{ $article->content }}</td >
            <td>{{ $article->id_coache }}</td >
            <td><img src="{{ asset($article->image_path) }}" alt=""></td>
        </tr>
        @endforeach
    </tbody>
</table>
            


  
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