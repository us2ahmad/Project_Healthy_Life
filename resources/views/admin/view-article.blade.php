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
                  @if(count($articles)>0)
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
            <th>Action</th>
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
            <td><img src="{{ asset('/imgs/'.$article->image_path) }}" alt="Not Found"></td>
            <td>
            <form method="POST" action="{{ route('admin.destroy.article',$article->id) }}">
              @csrf
              @method('POST')
              <button type="submit" class="btn btn-inverse-success btn-fw">Delete</button>
            </form>
          </td>
        </tr>
        @endforeach
    </tbody>
</table>
@else

<div style="text-align: center; margin-top: 50px;">
          <h3 style="color: #555; font-size: 24px;">There Are No Advices</h3>
        </div>
@endif

  
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