<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Healthy Life </title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('/assets/img/Logo.png')}}" rel="icon">
  <link href="{{asset('/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('/assets/css/style.css')}}" rel="stylesheet">

</head>
<body>
@include('player.nav_bar')
  <div class="plan">
    <section class="bg">
      <style>
        .bg{
          height: 40vh;
          background-image: url(//assets/img/bodybuilding.jpg);
          background-size: cover;
          margin-bottom: 50px;
        }
      </style>
    </section>
      {{--      nassssssssser--}}
    <div class="exersize row p-5 m-5">
      <h1 class="text-center pb-3">your exersize</h1>
      <div class="exercise-images-grid">
        @foreach($conts as $cont)
              @if($cont->type = $type)
                  <video playsinline="" preload="metadata" muted="" autoplay="" loop="" class="workout-img" src="{{$cont->link}}">
                  </video>
                  <div class="step col-12 pt-5">
                      <ol>
                      <li><h3>{{$cont->title}}</h3></li>
                      <li><h3>{{$cont->description}}</h3></li>
                        
                      </ol>
                  </div>
              @endif
        @endforeach
      </div>
    </div>
      {{--      nassssssssser--}}
  </div>
    <script src="{{asset('/assets/js/main.js')}}"></script>
  </body>
  </html>
