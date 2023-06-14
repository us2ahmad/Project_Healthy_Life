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
               <h3> Photo: </h3> 
            <img class="img-fluid mb-4 mb-lg-0" src="{{ asset('/imgs/'. $coache->user->photo) }}" width="300" height="250" alt="Image">            </div>
            <div class="col-lg-6">
                <h4>Name :{{$coache->user->first_name}} {{$coache->user->last_name }}</h4>
                <p>UserName: {{$coache->user->name}}</p>
               
                <div class="row py-2">
                    <div class="col-sm-6">
                        <i class="flaticon-barbell display-2 text-primary"></i>
                        <h4 class="font-weight-bold">Certificate</h4>
                       <img src="{{asset('/imgs/'.$coache->certificate)}}" width="200" height="150" alt="">
                    </div>
                    <div class="col-sm-6">
                        <i class="flaticon-medal display-2 text-primary"></i>
                        <h4 class="font-weight-bold">Years of Experience</h4>
                        <p>{{$coache->experience}}</p>
                    
                        <a href="/chatify/{{$coache->user->id}}">
                        <button type="button"  class="create px-3 py-1">Chating</button>    
                        </a>
                    </div>
                </div>
                
                <button class="create px-3 py-1" onclick="display('{{$coache->id}}')">Subscribe</button>
                <br>  <br><br> <br>  <br><br> 
            </div>
       
            @endforeach
            <br>
        </div>
     </div> 
    </div>

        <form id="window" action="{{route('player.info')}}"  method="Post" class="position-fixed info-box">
        @csrf
        <fieldset class="d-flex align-items-center justify-content-center flex-column">
    
        <h4 style="text-align: center;">Enter Your Information</h4>
        <input type="number" name="height" placeholder="Enter Your Height" required>
        <input type="number" name="weight" placeholder="Enter Your Weight" required>
        <select name="goal" class="text-input" >
        <option value="increaseweight">Increase Weight</option>
        <option value="musclemass">Increased Muscle Mass</option>
        <option value="fatburning">Fat Burning</option>

        </select>
        <input type="hidden" name="id_coach" value="" id="id_coach">
        <input type="submit" value="Send"  class="btn-ok px-3 py-1">
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