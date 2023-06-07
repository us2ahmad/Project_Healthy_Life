<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Healthy Life </title>
  <meta content="" name="description">
  <meta content="" name="keywords">



  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('/assets/css/style.css')}}" rel="stylesheet">
</head>

<body style="background-color: #fdfaf6;">
  
<!-- Nav Bar -->
@include('player.nav_bar')


  <!-- Content Section -->

  <!-- Main Content -->
  
<section id="health" class="d-flex align-items-center justify-content-center"></section>
  <div class= "isicontent clearfix">
    <div class="main-content">

      @foreach ($health as $art_health )
      <div class= "post">
    <img src="{{ asset('/imgs/'.$art_health->image_path) }}" width="200" height="200" alt="">
        <div class="post-preview">
          <h2>{{$art_health->title}}</h2>
         <i class="far fa-user"> Name Coach :  {{$art_health->first_name}}  {{$art_health->last_name}}</i>
         &nbsp;<br>
         <i class="far calendar">Created At :{{$art_health->created_at}}</i>
         <p class="preview-text">Description:  <br>
         {{$art_health->description}}
         </p>

         <a href="{{ route('ShowArticle',[$art_health->type,$art_health->id ]) }}" class="btn-single read-more">Read More</a>

        </div>
      </div>
      @endforeach
    </div>
 <!-- End Main Content -->

      <div class="sidebars">
        <div class="section search">
          <h2 class="section-title">Search</h2>
          <form action="" method="post">
            <input type="text" name="keyword" class="text-input" placeholder="Search..." autocomplete="off"><br>
            
          </form>
        </div>
        <div class="section topics">
        <h2 class="section-title">Topics</h2>
        <ul>
          <li><a href="#" style="color:grey"><strong>Health</strong></a></li>
          <li><a href="{{route('nutrition')}}" style="color:grey"><strong>Nutrition</strong></a></li>
          <li><a href="{{route('training')}}" style="color:grey"><strong>Training</strong></a></li>
        </ul>

        </div>
      </div>
  </div>
  <!-- End Content Section -->
  
  <!-- Template Main JS File -->
  <script src="{{asset('/assets/js/main.js')}}"></script>
  
  </body>
  </html>
  