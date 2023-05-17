<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

    <!-- Flaticon Font -->
    <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('assets/styleinfo.css')}}">
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
    <title>Document</title>
</head>
<body>
<!-- Nav Bar -->
@include('player.nav_bar')


        
    <div class="container py-5">
        <div class="row align-items-center">
        @foreach ( $coach as $coache )
    

            <div class="col-lg-6">
            <img class="img-fluid mb-4 mb-lg-0" src="{{ asset( $coache->user->profile_photo_path) }}" alt="Image">            </div>
            <div class="col-lg-6">
                <h2 class="display-4 font-weight-bold mb-4">Name : {{$coache->user->first_name}}</h2>
                <p>شغلة ما بعرف لشو          Labore vero lorem eos sed aliquy ipsum aliquy sed. Vero dolore dolore takima ipsum lorem rebum</p>
                <div class="row py-2">
                    <div class="col-sm-6">
                        <i class="flaticon-barbell display-2 text-primary"></i>
                        <h4 class="font-weight-bold">شهادات</h4>
                        <p>{{$coache->certificate}}</p>
                    </div>
                    <div class="col-sm-6">
                        <i class="flaticon-medal display-2 text-primary"></i>
                        <h4 class="font-weight-bold">Years of Experience</h4>
                        <p>{{$coache->experience}}</p>
                    </div>
                </div>
                <button class="create px-3 py-1" onclick="display()">create</button>
            </div>
            @endforeach
        </div>
    </div>
   
    <form id="window" action="{{route('player.plans')}}"  method="GET" class="position-fixed info-box">
        <fieldset class="d-flex align-items-center justify-content-center flex-column">
            <h3>Enter your information</h3>
            <input type="number" name="weight" placeholder="Enter Your Weight">
            <input type="number" name="height" placeholder="Enter Your Height">
            <input type="submit" value="OK"  class="btn-ok px-3 py-1">
        </fieldset>
    </form>
    <script>
        function display(){
            document.getElementById('window').style='display:block;';
        }
    </script>
    <script src="{{asset('/assets/js/main.js')}}"></script>
</body>
</html>