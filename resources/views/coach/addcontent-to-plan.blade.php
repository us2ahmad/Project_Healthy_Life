<!DOCTYPE html>
<html lang="en">
@include('coach.head')
<body>
    <div class="container-scroller">
        <!-- Sidebar -->
        @include('coach.sidebar')
        <!-- End Sidebar -->
        <!-- _navbar -->
        @include('coach.navbar')
        <!-- _navbar -->
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="row">
                    <div class="col-xl-12 col-sm-12 grid-margin stretch-card">
                        <div class="card">
                            <div class=" container-fluid page-body-warper">
                                <div class="container">
                                    <h1>Add Training Planning</h1>
                                    <form action="" method="GET" enctype="multipart/form-data">
                                        @csrf
                                        @method('GET')
                                        <div class="row" style="padding: 15px;">
                                            <div class="col-sm-12">
                                                <label for="admin" class="form-label">Admin</label>
                                                <!-- حقل الاختيار الأول -->
                                                <select name="admin" id="admin" class="form-control p_input">
                                                    @foreach($cont as $cnt)
                                                        <option value="{{ $cnt->title }}">
                                                            {{ $cnt->title}}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <!-- حاوية لعرض حقول الإدخال -->
                                        <div id="input-container"></div>
                                        <!-- زر إضافة حقل الإدخال الجديد -->
                                        <div class="row" style="padding: 15px;">
                                            <div class="col-sm-12">
                                                <button type="button" id="add-input" class="btn btn-success col-sm-12" style="padding: 15px;">New Content</button>
                                            </div>
                                        </div>
                                        <div style="padding: 15px;" class="col-sm-12">
                                            <div style="padding-left: 45%;">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </div>
                                    </form>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- container-scroller -->
        <!-- plugins:js -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="{{ asset('coach/assets/vendors/js/vendor.bundle.base.js') }}"></script>
        <!-- endinject -->
        <!-- Plugin js for this page -->
        <script src="{{ asset('coach/assets/vendors/chart.js/Chart.min.js') }}"></script>
        <script src="{{ asset('coach/assets/vendors/progressbar.js/progressbar.min.js') }}"></script>
        <script src="{{ asset('coach/assets/vendors/jvectormap/jquery-jvectormap.min.js') }}"></script>
        <script src="{{ asset('coach/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
        <script src="{{ asset('coach/assets/vendors/owl-carousel-2/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('coach/assets/js/jquery.cookie.js" type="text/javascript') }}"></script>
        <!-- End plugin js for this page -->
        <!-- inject:js -->
        <script src="{{ asset('coach/assets/js/off-canvas.js') }}"></script>
        <script src="{{ asset('coach/assets/js/hoverable-collapse.js') }}"></script>
        <script src="{{ asset('coach/assets/js/misc.js') }}"></script>
        <script src="{{ asset('coach/assets/js/settings.js') }}"></script>
        <script src="{{ asset('coach/assets/js/todolist.js') }}"></script>
        <!-- endinject -->
        <!-- Custom js for this page -->
        <script src="{{ asset('coach/assets/js/dashboard.js') }}"></script>
        <!-- End custom js for this page -->
    </body>
</html>