
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
  <link href="{{asset('assets/css/styleArticle1.css')}}" rel="stylesheet">
</head>

<body style="background-color: #fdfaf6;" >
  
<!-- Nav Bar -->
@include('player.nav_bar')

  <!-- Content Section -->

  <!-- Main Content -->

<div class="isicontent clearfix">
  <div class="main-content"> 
    <div class="post">
      <div class="post-preview">
        <section id="nurtrition1" class="d-flex align-items-center justify-content-center"></section>
    
            <h2>Image</h2>
            <img src="{{ asset('/imgs/'.$artic->image_path) }}" width="400"  height="200" alt="">
        <h2>Title</h2>  
        <p class="preview-text">{{ $artic->title }}</p>
        <div class="inside">
          <h2>Date created</h2>
          <h3>{{ $artic->created_at }}</h3>      
          &nbsp;
          <h2>Description</h2>
          <p class="preview-text"></h3>{{ $artic->description }}</h3></p>
          <h2>Content</h2>
          <p class="preview-text"></h3>{{ $artic->content }}</h3></p>
          
        </div>
      </div>
    </div>  
  </div>
</div>

 <!-- End Main Content -->
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

