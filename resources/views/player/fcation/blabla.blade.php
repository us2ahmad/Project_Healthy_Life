<!DOCTYPE html>
<html lang="en">
<head>


    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{asset('/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{asset('/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{asset('/assets/css/style.css')}}" rel="stylesheet">

    <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Healthy Life </title>
  <meta content="" name="description">
  <meta content="" name="keywords">
</head>
<body>
<!-- Nav Bar -->
@include('player.nav_bar')

  
    <div class="container py-5">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <img class="img-fluid mb-4 mb-lg-0" src="{{asset('/assets/img/trainer/trainer.jpg')}}" alt="Image">
            </div>
            <div class="col-lg-6">
                <h2 class="display-4 font-weight-bold mb-4">name</h2>
                <p>شغلة ما بعرف لشو          Labore vero lorem eos sed aliquy ipsum aliquy sed. Vero dolore dolore takima ipsum lorem rebum</p>
                <div class="row py-2">
                    <div class="col-sm-6">
                        <i class="flaticon-barbell display-2 text-primary"></i>
                        <h4 class="font-weight-bold">شهادات</h4>
                        <p>Ipsum sanctu dolor ipsum dolore sit et kasd duo</p>
                    </div>
                    <div class="col-sm-6">
                        <i class="flaticon-medal display-2 text-primary"></i>
                        <h4 class="font-weight-bold">عدد المشتركين</h4>
                        <p>Ipsum sanctu dolor ipsum dolore sit et kasd duo</p>
                    </div>
                </div>
                <button class="create px-3 py-1" onclick="display()">create</button>
            </div>
        </div>
    </div>
    
    
    <form id="window" action="" class="position-fixed info-box">
        <fieldset class="d-flex align-items-center justify-content-center flex-column">
            <h1>ادخل معلوماتك</h1>
            <input type="number" placeholder="ادخل وزنك">
            <input type="number" placeholder="ادخل طولك">
            <a href="/player/fcation/plans/plan1/plan.html" class="btn-ok px-3 py-1">ok</a>
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