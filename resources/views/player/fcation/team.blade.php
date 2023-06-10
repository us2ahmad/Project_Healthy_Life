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
@php
    $id = 0 ;
@endphp
<!-- Nav Bar -->
@include('player.nav_bar')


        
    <div class="container py-5">
        <div class="row align-items-center">
        @foreach ( $coach as $coache )
            <div class="col-lg-6">
            <img class="img-fluid mb-4 mb-lg-0" src="{{ asset('/imgs/'. $coache->user->photo) }}" width="200" height="150" alt="Image">            </div>
            <div class="col-lg-6">
                <h4>Name :{{$coache->user->first_name}} {{$coache->user->last_name }}</h4>
                <p>UserName: {{$coache->user->name}}</p> <a href="/chatify/{{$coache->user->id}}">Chating</a>
                <div class="row py-2">
                    <div class="col-sm-6">
                        <i class="flaticon-barbell display-2 text-primary"></i>
                        <h4 class="font-weight-bold">Certificate</h4>
                       <img src="{{asset('/imgs/'.$coache->certificate)}}" alt="">
                    </div>
                    <div class="col-sm-6">
                        <i class="flaticon-medal display-2 text-primary"></i>
                        <h4 class="font-weight-bold">Years of Experience</h4>
                        <p>{{$coache->experience}}</p>
                    </div>
                </div>
               
                <button class="create px-3 py-1" onclick="display('{{$coache->id}}')">Subscribe</button>
            </div>
            @endforeach
        </div>
    </div>

    <form id="window" action="{{route('admin.pay')}}"  method="Post" class="position-fixed info-box">
    @csrf
    <fieldset class="d-flex align-items-center justify-content-center flex-column">
        <div class="image-container">
            <img src="{{asset('assets/img/syriatel.jpg')}}" width="100" height="50" alt=""> 
            <img src="{{asset('assets/img/mtn.jpg')}}" alt="" width="100" height="50">  
        </div>
        <h4 style="text-align: center;">Pay 10 $ to This Number 0945917735</h4>
        <input type="number" name="phone_number" placeholder="Enter Your Phone Number">
        <input type="hidden" name="id_coach" value="" id="id_coach">
        <input type="submit" value="Pay"  class="btn-ok px-3 py-1">
    </fieldset>
</form>
<script>
     function display(id_coach){
    var form = document.getElementById('window');
    form.style.display = 'block';
    form.querySelector('input[name="id_coach"]').value = id_coach;
}
    </script>
    <script src="{{asset('/assets/js/main.js')}}"></script>
</body>
</html>