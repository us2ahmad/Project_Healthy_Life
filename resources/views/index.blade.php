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
  <link href="{{asset('/assets/vendor/bootstrap/css/bootstrap.css')}}" rel="stylesheet" >
  <link href="{{asset('/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <!-- Template Main CSS File -->
  <link href="{{asset('/assets/css/style.css')}}" rel="stylesheet">
</head>
<body>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-transparent">
    <div class="container d-flex align-items-center justify-content-between">

      <a href="#" class="logo">
        <img src="{{asset('/assets/img/Logo.png')}}" alt="" class="img-fluid">
      </a>




      <nav id="navbar" class="navbar">
      <ul>
          <li><a class="nav-link scrollto" href="#home">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#article">Article</a></li>
          <li><a class="nav-link scrollto" href="#advance">Daily Advance</a></li>
          <li><a class="nav-link scrollto" href="#Self-Training">Self-Training</a></li>
          <li><a class="nav-link scrollto" href="#team">Team</a></li>
          <li><a class="nav-link scrollto" href="#faq">FAQ</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        @if(auth()->check())
       
        <li>
            <a href="{{ route('profile.show') }}">
            <button type="button" class="btn btn-outline-warning" style="color: white;">Profile</button>
          </a>
        </li>
        <li>
           <form id="logout-form" action="{{ route('logout') }}" method="POST">
    @csrf
    <button type="submit" class="btn btn-outline-warning" style="color: white;">Log Out</button>
</form>
        </li>
        @if(auth()->user()->account_type=='coach')
        
        <li><a class="nav-link scrollto" href="{{ route('coach.index')}}">DashBoard</a></li>
        @endif
        @else
        <li>
            <a href="login">
            <button type="button" class="btn btn-outline-warning" style="color: white;">Log In</button>
          </a>
        </li>
        <li>
            <a href="registered1">
            <button type="button" class="btn btn-outline-warning" style="color: white;">Sing Up</button>
          </a>
        </li>
        @endif
      
          <a href="/dashboard">

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
      <h1>Welcome to Healthy Life</h1>
      <h2><i>- "Believe In Yourself Every Single Day And You WIill Be Unstoppable" -</i></h2>
      <a href="#about" class="btn-get-started scrollto">Get Started</a>
    </div>
  </section>
  <!-- End Home -->

  <!-- Start #main -->
  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row">
          <div class="col-lg-6">
            <img src="{{asset('/assets/img/about.png')}}" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <h3>Healthy Life</h3>
            <p>
              Healthy Life was founded in 2019 with the aim of becoming a digital health model service aimed at providing modern health services and education to users. Healthy Life is passionate about providing health benefits to users and ready to be the pioneer of advances in the field of health and sports in the information and technology sector.
          </div>
        </div>
      </div>
    </section>
    
    <!-- End About Section -->
   
    <!-- ======= Articl Section ======= -->
    <section class="Self-Training" id="article">
      <div class="container">
        <div class="section-title">
          <h2>Articles</h2>
        </div>
        <div class="row" style="display: flex; justify-content: center;">
          <div class="col-lg-4 col-md-4 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <a href="{{route('training')}}">
            <div class="icon-box iconbox-blue">
              <div class="icon">
                <i class="bx bxl-dribbble"></i>
              </div>
              <h4>Training</h4></a>
              <p>
                Training Service is an information description service that provides information about exercises that must be done.
              </p>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
          </div>
          <div class="col-lg-4 col-md-4 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="200">
            <a href="{{route('nutrition')}}">
            <div class="icon-box iconbox-orange">
              <div class="icon">
                <i class="bi bi-egg"></i>
              </div>
              <h4>Nutrition Consultant</a></h4>
              <p>
                This Nutrition Consultation Service is a service that allows users to be able to consult directly with our nutrition consultants regarding the necessary nutrition.
              </p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="300">
            <a href="{{route('health')}}">
            <div class="icon-box iconbox-green">
              <div class="icon">
                <i class="bi bi-clipboard-plus"></i>
              </div>
              <h4>Health Consultant</a></h4>
              <p>
                This Health Consultation Service is a service that allows users to be able to consult directly with our health consultants regarding health. </p>
            </div>
          </div>
        </div>
      </div></div>
    </section>
    <!-- End Articl Section -->
    
    <!-- advanceed Section -->
    <section id="advance" class="advanced">
      <div class="container">

        <div class="section-title">
          <h2>Daily Advance</h2>
        </div>
        <div class="row">
       
        <div class="col-lg-6 pt-4 pt-lg-0">
         
          <p>
            Healthy Life was founded in 2019 with the aim of becoming a digital health model service aimed at providing modern health services and education to users. Healthy Life is passionate about providing health benefits to users and ready to be the pioneer of advances in the field of health and sports in the information and technology sector.
          </p></div>
           <div class="col-lg-6">
          <img src="{{asset('/assets/img/about.png')}}" class="img-fluid" alt="">
        </div>
        </div>
      </div>
    </section>
    <!-- End Advanced Section -->

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container">
        <div class="text-center">
          <h3>Are You Ready to Join Us?</h3>
          <p>Sign up now and get a special subscription offer from Healthy Life</p>
          <a class="cta-btn" href="/login">Join Now</a>
        </div>
      </div>
    </section>
    <!-- End Cta Section -->

    <!-- ======= Self-Training Section ======= -->
  <section id="Self-Training" class="Self-Training">
    <div class="container">

      <div class="section-title">
        <h2>Self-Training</h2>
      </div>
      <div class="row" style="display: flex; justify-content: center;">
      
        <div class="col-lg-6 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
          
          <div class="icon-box iconbox-orange">
            <button onclick="display()" class="border-0" style="border-radius: 50%; width: 15%; background: white">
            <div class="icon" >
              <i class="bx bx-slideshow"></i>
            </div>
          </button>
          <h3>Toutreal</h3>
            <p>
              Tutorial Service is a service that provides practice tutorial steps with offline slide or video projection.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <form id="window" action="" class="position-fixed info-box">
    <fieldset class="d-flex align-items-center justify-content-center flex-column" style="background-color: rgba(23, 12, 12, 0.6);">
      <button onclick="undisplay()" class="border-0" style="background-color: transparent;"><a href="#Self-Training"><i class='bx bx-arrow-back' style="font-size: 30px; background: #fff; border-radius: 50%;"></i></a></button>
      <h1 class="text-center text-dark mb-5">your gender</h1>
      <div class="link d-flex align-items-center justify-content-center">
        <a href="{{route('Mselftraining')}}" class="btn-ok me-2" style="background-color: white;" ><img src="{{asset('/assets/img/images (1).png')}}" alt="" style="border-radius: 50%;" width="100px"></a>
        <a href="{{route('Feselftraining')}}" class="btn-ok ms-2" style="background-color: white;"><img src="{{asset('/assets/img/download (1).png')}}" alt="" style="border-radius: 50%;" width="100px"></a>
      </div>
    </fieldset>
  </form>
  <!-- End Self-Training Section -->
    
    <!-- ======= faction Section ======= -->
    <section id="team" class="team section-bg">
      <div class="container">
        <div class="row section-title m-2 w-100">
          <h2>Team</h2>
          <div class="col-lg-4 py-5">
            <a href="{{route('player.athart_rachel')}}">
              <div class="ts-item set-bg">
                <img src="{{asset('/assets/img/faction/blabla.jpg')}}" class="w-100 h-100" alt="">
                  <div class="ts_text">
                      <h4>Athart Rachel</h4>
                      <span>Gym Trainer</span>
                  </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 py-5">
            <a href="{{route('player.fitness_team')}}">
              <div class="ts-item set-bg">
                <img src="{{asset('/assets/img/faction/fitness.png')}}" class="w-100 h-100"  alt="">
                <div class="ts_text">
                    <h4>fetness</h4>
                    <span>Gym Trainer</span>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 py-5">
            <a href="{{route('player.balding_body_team')}}">
              <div class="ts-item set-bg">
                <img src="{{asset('/assets/img/faction/body-building.jpg')}}" class="w-100 h-100" alt="">
                  <div class="ts_text">
                      <h4>balding body</h4>
                      <span>Gym Trainer</span>
                  </div>
              </div>
            </a>
          </div>
        </div>
      </div>
    </section>
    <!-- End faction Section -->

    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq section-bg">
      <div class="container">

        <div class="section-title">
          <h2>FREQUENTLY ASKED QUESTIONS</h2>
          <p>
            Ask anything you want to ask about Healthy Life
          </p>
        </div>

        <div class="faq-list">
          <ul>
            <li data-aos="fade-up">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1">Can video tutorial services be saved?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                <p>
                  For now the Video Tutorial service can only be viewed online, but Healthy Life plans to improve the service by providing a video storage feature for those of you who subscribe to the Beginner package. </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="100">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-2" class="collapsed"> What information is in the health consultant feature?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                <p>
                  In the Health Consultant feature, there is a variety of information about exercise health attached to articles related to the Healthy Life version. In addition, we also plan to add a Chat feature so that users can consult directly with health experts who collaborate with Healthy Life.  </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="200">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-3" class="collapsed">What features do I get if I subscribe to Healthy Life? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                <p>
                  There are so many features that you can get if you subscribe to Healthy Life. Starting from Training, Tutorials, Store, Nutrition Consultant, and Health Consultant. For more details, please see the "Offer" section of the Healthy Life website page. </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="300">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-4" class="collapsed">Can I change my subscription plan?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Subscription packages can be replaced at the end of the previously selected period. The period in question is 1 month (30 days) from the purchase of the previous subscription package and the payment has been repaid within the specified time period. </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="400">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-5" class="collapsed"> Can I change my subscription plan?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Paket berlangganan bisa diganti di akhir periode yang sebelumnya telah dipilih. Periode yang dimaksud adalah 1 bulan (30 hari) dari pembelian paket berlangganan sebelumnya dan pembayaran sudah dilunasi pada jangka waktu yang telah ditentukan. 
                </p>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </section>
    <!-- End Frequently Asked Questions Section -->

    <!-- ======= Contact Section ======= -->
      <h1 style="text-align: center;">Contact</h1>
      <div class="contact-a">
      
          <section id="contact" class="contact">
            <div class="container">
              <div class="col-lg-6">
                <form action="forms/contact.html" method="post" role="form" class="php-email-form">
                  <div class="form-group mt-3">
                    <select name="subject" id="subject" class="form-control" title="Subject" style="border-radius:10px;">
                    <option value="" hidden> Subject Of Message</option>
                    <option value="Advice">Advice</option>
                    <option value="Complaint">Complaint</option>
                  </select>
                  </div>
                  <div class="form-group mt-3">
                    <textarea class="form-control" name="message" rows="5" placeholder="Message" required style="border-radius:10px;"></textarea>
                  </div>
                  <div class="text-center"><button class="btn btn-success btn-fw" type="submit">Send Message</button></div>
                </form>
              </div>
              </div>
              
          </section>
      
      
          <section id="contact" class="contact">
            <div class="container">
              <div class="">
                    <div class="">
                      <div class="text-center info-box mt-4">
                        <a href="#">
                        <img src="{{asset('assets\images\bg-auth.jpg')}}" >
                        <i class="bx bx-phone-call text-center"></i>
                        <h3>Call Us</h3>
                        </a>
                      </div>
                    </div>
                </div>
              </div>
          </section>
      
        </div>
      
          <!-- End Contact Section -->
      
  </main>
  <!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Healthy Life</h3>
            <p>
              Piazza Mozia Blok E7 No 9 <br>
              Tangerang, 15810<br>
             syria<br><br>
              <strong>Phone:</strong> +62 8122222222<br>
              <strong>Email:</strong> infoHealthy Life@gmail.com<br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#home">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#about">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#offer">Offer</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#team">Team</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#faq">FAQ</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#contact">Contact</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Offer</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#article">Training</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#Self-Training">Tutorial</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#article">Nutrition Consultant</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#article">Health Consultant</a></li>
            </ul>
          </div>

        </div>
      </div>
    </div>
 <div class="section-title">
         <p>Visitors</p>

          <!-- hitwebcounter Code START -->
<a href="https://www.hitwebcounter.com" target="_blank">
  <img src="https://hitwebcounter.com/counter/counter.php?page=8263330&style=0006&nbdigits=5&type=page&initCount=0" title="Free Counter" Alt="web counter"   border="0" /></a>                                    
                                      
                     
        </div>
    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
       
      </div>
    </div>
  </footer>
  <!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Template Main JS File -->
  <script src="{{asset('/assets/js/main.js')}}"></script>
  <script>
    function display(){
      document.getElementById('window').style='display:block;';
    }
    function undisplay(){
      document.getElementById('window').style='display:none;';
    }
</script>
</body>
</html>