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
  <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
</head>

<body style="background-color: #fdfaf6;">
  
<!-- Nav Bar -->
@include('player.nav_bar')

  <!-- Content Section -->

  <!-- Main Content -->
  
<section id="training" class="d-flex align-items-center justify-content-center"></section>
  <div class= "isicontent clearfix">
    <div class="main-content">

      @foreach ($training as $art_training )
  

      <div class= "post">
      <img src="{{ asset('/imgs/'.$art_training->image_path) }}" width="200" height="200" alt="">
        <div class="post-preview">
          <h2>{{$art_training->title}}</h2>
         <i class="far fa-user"> Name Coach :  {{$art_training->first_name}}  {{$art_training->last_name}} </i>
         &nbsp;<br>
         <i class="far calendar">Created At : {{$art_training->created_at}}</i>
         <p class="preview-text">Description:  <br>
         {{$art_training->description}}
         </p>
         <a href="{{ route('ShowArticle',[$art_training->type,$art_training->id ]) }}" class="btn-single read-more">Read More</a>

        </div>
      </div>
      @endforeach
    </div>

 <!-- End Main Content -->

      <div class="sidebars">
      
        <div class="section topics">
        <h2 class="section-title">Topics</h2>
        <ul>
          <li><a href="{{route('health')}}" style="color:grey"><strong>Health</strong></a></li>
          <li><a href="{{route('nutrition')}}" style="color:grey"><strong>Nutrition</strong></a></li>
          <li><a href="#" style="color:grey"><strong>Training</strong></a></li>
        </ul>

        </div>
      </div>
  </div>
  <!-- End Content Section -->
  
   <!-- Vendor JS Files -->
  <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{asset('assets/vendor/purecounter/purecounter.js')}}"></script>
  <script src="{{asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('assets/js/main.js')}}"></script>
  
  </body>
  </html>
  