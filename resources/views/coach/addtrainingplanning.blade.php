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
                                     <form action="{{ route('coach.add.tr.plan') }}" method="POST"
                                         enctype="multipart/form-data">
                                         @csrf

                                         <select name="goal"  class="form-control p_input">
                                <option value="increaseweight">Increase Weight</option>
                                <option value="musclemass">Increased Muscle Mass</option>
                                <option value="fatburning">Fat Burning</option>
                                         </select><br>
                                         <div style="padding: 15px;" class="col-sm-12">
                                             <label for="">Duration</label>
                                             <input style="color:aliceblue" type="number" name="duration"
                                                 placeholder="Give a Duration" required="" height="10px"
                                                 class="form-control p_input">
                                         </div>
                                         <div style="padding: 15px;" class="col-sm-12">
                                             <label for="">Min high</label>
                                             <input style="color:aliceblue;" type="number" name="min_high"
                                                 placeholder="Give a min Length" required=""
                                                 class="form-control p_input">
                                         </div>
                                         <div style="padding: 15px;" class="col-sm-12">
                                             <label for="">Max high</label>
                                             <input style="color:aliceblue;" type="number" name="max_high"
                                                 placeholder="Give a maxLength" required=""
                                                 class="form-control p_input">
                                         </div>
                                         <div style="padding: 15px;" class="col-sm-12">
                                             <label for="">Min Weight</label>
                                             <input style="color:aliceblue;" type="number" name="min_weight"
                                                 placeholder="Give a min Width" required=""
                                                 class="form-control p_input">
                                         </div>
                                         <div style="padding: 15px;" class="col-sm-12">
                                             <label for="">Max Weight</label>
                                             <input style="color:aliceblue;" type="number" name="max_weight"
                                                 placeholder="Give a maxWidth" required=""
                                                 class="form-control p_input">
                                         </div>
                                         <div style="padding: 15px;" class="col-sm-12">

                                         </div>

                                         <div style="padding: 15px;" class="col-sm-12">
                                             <div style="padding-left: 500px;">
                                                 <button type="submit" class="btn btn-primary">Submit</button>
                                             </div>


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
