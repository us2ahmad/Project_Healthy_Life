<!DOCTYPE html>
<html lang="en">
<head>
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

    <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Healthy Life </title>
  <meta content="" name="description">
  <meta content="" name="keywords">
</head>
<body>
      <!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-transparent">
    <div class="container d-flex align-items-center justify-content-between">

      <a href="/player/index.html" class="logo">
        <img src="{{asset('/assets/img/Logo.png')}}" alt="" class="img-fluid">
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="/player/index.html">Home</a></li>
          <a href="/login.html">
            <button type="button" class="btn btn-outline-warning" style="color: white;">Log In</button>
          </a>
        </ul>
      </nav>
        <i class="bi bi-list mobile-nav-toggle"></i>
    </div>
  </header>
  <!-- End Header -->

  <!-- ======= Home Section ======= -->
  <section id="home" class="d-flex align-items-center justify-content-center">
    <div class="container position-relative">
      <h1>Team Of BlaBla</h1>
      <h2><i>- "Believe In Yourself Every Single Day And You WIill Be Unstoppable" -</i></h2>
      
    </div>
  </section>
  <!-- End Home -->
  
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
    <div class="container py-5">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <img class="img-fluid mb-4 mb-lg-0" src="{{asset('/assets/img/trainer/trainer (0).jpg')}}" alt="Image">
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

    <div class="container py-5">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <img class="img-fluid mb-4 mb-lg-0" src="{{asset('/assets/img/trainer/trainer (1).png')}}"  alt="Image">
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