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
  <link href="{{asset('/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('/assets/css/style.css')}}" rel="stylesheet">
  <!--plan css-->
  <link rel="stylesheet" href="{{asset('/assets/plan.css')}}">
</head>
<body>
  @include('player.nav_bar')

  <div class="plan">
    <div class="all-step d-flex align-items-center justify-content-center">
      <div class="step"></div>
      <div class="circle"></div>
      <div class="step"></div>
      <div class="circle"></div>
      <div class="step"></div>
      <div class="circle"></div>
      <div class="step"></div>
      <div class="circle"></div>
      <div class="step"></div>
      <div class="circle"></div>
      <div class="step"></div>
      <div class="circle"></div>
      <div class="step"></div>
      <div class="circle"></div>
    </div>
    {{--      nassssssssser--}}
    <div class="row text-center m-5">
      @foreach($contents as $cont)
            <a href="{{route('ExsersizeType' , $cont->type )}}" class="part col-lg-4 col-md-6 col-sm-12">
                <div>
                    @if($cont->type = 'chest')
                        <img src="{{asset('/assets/img/plan/chest.png')}}" alt="" class="w-50 h-75" >
                    @elseif($cont->type = 'foot')
                        <img src="{{asset('/assets/img/plan/foot.png')}}" alt="" class="w-50 h-75" >
                    @elseif($cont->type = 'back')
                        <img src="{{asset('/assets/img/plan/back.png')}}" alt="" class="w-50 h-75" >
                    @elseif($cont->type = 'shoulder')
                        <img src="{{asset('/assets/img/plan/shoulder.png')}}" alt="" class="w-50 h-75" >
                    @elseif($cont->type = 'triceps')
                        <img src="{{asset('/assets/img/plan/triceps.png')}}" alt="" class="w-50 h-75" >
                    @elseif($cont->type = 'biceps')
                        <img src="{{asset('/assets/img/plan/biceps.png')}}" alt="" class="w-50 h-75" >
                    @endif
                    <h3>{{$cont->type}}</h3>
                    <p>{{$cont->description}}</p>
                </div>
            </a>
      @endforeach
     </div>
      {{--      nassssssssser--}}
  </div>
  <!-- Template Main JS File -->
  <script src="{{asset('/assets/js/main.js')}}"></script>
</body>
</html>
