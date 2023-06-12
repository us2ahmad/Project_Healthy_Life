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

    <section id="health" class="d-flex align-items-center justify-content-center">
    <div class= "isicontent clearfix">
        <div class="main-content">
            <div style="padding-left:50%">
                <form id="" action="{{route('player.confarm.pay')}}"  method="Post" >
                    @csrf
                    <fieldset class="d-flex align-items-center justify-content-center flex-column">
                        <div class="image-container">
                            <img src="{{asset('assets/img/syriatel.jpg')}}" width="100" height="50" alt="">
                            <img src="{{asset('assets/img/mtn.jpg')}}" alt="" width="100" height="50">
                        </div>
                        <br>
                        <h4 style="text-align: center;">Pay 10 $ to This Number 0945917735</h4>
                        <br>
                        <input type="number" name="phone_number" placeholder=" Enter yor Payment's number" class="text-input"><br>
                        <input type="number" name="phone_number" placeholder=" Enter yor Payment's number agine" class="text-input" ><br>
                        <input type="hidden" name="trid" value="{{$trid}}" id="trid">
                        <input type="submit" value="send"  class="btn-ok px-3 py-1">
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
    </section>

</body>
</html>
