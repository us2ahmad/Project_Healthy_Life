 <!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Moderator</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{asset('coach/assets/vendors/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('coach/assets/vendors/css/vendor.bundle.base.css')}}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{asset('coach/assets/vendors/jvectormap/jquery-jvectormap.css')}}">
    <link rel="stylesheet" href="{{asset('coach/assets/vendors/flag-icon-css/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{asset('coach/assets/vendors/owl-carousel-2/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('coach/assets/vendors/owl-carousel-2/owl.theme.default.min.css')}}">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{asset('coach/assets/css/style.css')}}">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{asset('coach/assets/images/favicon.png')}}" />
  </head>
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
                          <form action="" method="POST" enctype="multipart/form-data" >
                           
                    <div style="padding: 15px;" class="col-sm-12">
                    <label for="">Plan Goal</label>
                    <input style="color:aliceblue" type="text" name="Plan Goal" placeholder="Give a Plan Goal" required="" class="form-control p_input">
                          </div>
              <div style="padding: 15px;" class="col-sm-12">
                      <label for="">Duration</label>
                      <input style="color:aliceblue" type="number" name="Duration" placeholder="Give a Duration" required="" height="10px" class="form-control p_input">
                      </div>
                      <div style="padding: 15px;" class="col-sm-12">
                        <label for="">min Length</label>
                        <input style="color:aliceblue;" type="number" name="min Length" placeholder="Give a min Length" required="" class="form-control p_input">
                          </div>
                          <div style="padding: 15px;" class="col-sm-12">
                            <label for="">maxLength</label>
                            <input style="color:aliceblue;" type="number" name="maxLength" placeholder="Give a maxLength" required="" class="form-control p_input">
                              </div>
                          <div style="padding: 15px;" class="col-sm-12">
                            <label for="">min Width</label>
                            <input style="color:aliceblue;" type="number" name="min Width" placeholder="Give a min Width" required="" class="form-control p_input">
                              </div>
                              <div style="padding: 15px;" class="col-sm-12">
                                <label for="">maxWidth</label>
                                <input style="color:aliceblue;" type="number" name="maxWidth" placeholder="Give a maxWidth" required="" class="form-control p_input">
                                  </div>
                                  <div style="padding: 15px;" class="col-sm-12">
                           
                            </div>	
                            <div style="padding: 15px;" class="col-sm-12">
                              <td>  <div class="table-responsive">
                                <label for="">Dayes</label>
                                <table class="table">
                                  <tbody>
                                    <tr>
                                      <td>  <div class="col-md-12">
                                        <label for="country" class="form-label">Day1</label>
                                        <select style="color:aliceblue; background-color:rgb(60, 71, 81) " class="form-select" id="country" required>
                                           <option value=""></option>
                                          <option value="">Damascus</option>
                                          <option value="">Latakia</option>
                                           <option value="">Aleppo</option>
                                           <option value="">Homs</option>
                                          <option>Hama</option>
                                          <option>Tartous</option>
                                          <option>Draa</option>
                                     <option>AS-Suwayda</option>
                                        </select>
                                        
                                      </div></td>
                                     
                                      <td><div class="col-md-12">
                                        <label for="country" class="form-label">Day2</label>
                                        <select style="color:aliceblue; background-color:rgb(60, 71, 81) " class="form-select" id="country" required>
                                           <option value=""></option>
                                          <option value="">Damascus</option>
                                          <option value="">Latakia</option>
                                           <option value="">Aleppo</option>
                                           <option value="">Homs</option>
                                          <option>Hama</option>
                                          <option>Tartous</option>
                                          <option>Draa</option>
                                     <option>AS-Suwayda</option>
                                        </select>
                                        
                                      </div></td>
                                     
                                      <td><div class="col-md-12">
                                        <label for="country" class="form-label">Day3</label>
                                        <select style="color:aliceblue; background-color:rgb(60, 71, 81) " class="form-select" id="country" required>
                                           <option value=""></option>
                                          <option value="">Damascus</option>
                                          <option value="">Latakia</option>
                                           <option value="">Aleppo</option>
                                           <option value="">Homs</option>
                                          <option>Hama</option>
                                          <option>Tartous</option>
                                          <option>Draa</option>
                                     <option>AS-Suwayda</option>
                                        </select>
                                        
                                      </div></td>
                                 
                                     <td><div class="col-md-12">
                                        <label for="country" class="form-label">Day4</label>
                                        <select style="color:aliceblue; background-color:rgb(60, 71, 81) " class="form-select" id="country" required>
                                           <option value=""></option>
                                          <option value="">Damascus</option>
                                          <option value="">Latakia</option>
                                           <option value="">Aleppo</option>
                                           <option value="">Homs</option>
                                          <option>Hama</option>
                                          <option>Tartous</option>
                                          <option>Draa</option>
                                     <option>AS-Suwayda</option>
                                        </select>
                                        
                                      </div></td>
                                    
                                      
                                      <td><div class="col-md-12">
                                        <label for="country" class="form-label">Day5</label>
                                        <select style="color:aliceblue; background-color:rgb(60, 71, 81) " class="form-select" id="country" required>
                                           <option value=""></option>
                                          <option value="">Damascus</option>
                                          <option value="">Latakia</option>
                                           <option value="">Aleppo</option>
                                           <option value="">Homs</option>
                                          <option>Hama</option>
                                          <option>Tartous</option>
                                          <option>Draa</option>
                                     <option>AS-Suwayda</option>
                                        </select>
                                        
                                      </div></td>
                                 
                                       
                                        <td><div class="col-md-12">
                                          <label for="country" class="form-label">Day6</label>
                                          <select style="color:aliceblue; background-color:rgb(60, 71, 81) " class="form-select" id="country" required>
                                             <option value=""></option>
                                            <option value="">Damascus</option>
                                            <option value="">Latakia</option>
                                             <option value="">Aleppo</option>
                                             <option value="">Homs</option>
                                            <option>Hama</option>
                                            <option>Tartous</option>
                                            <option>Draa</option>
                                       <option>AS-Suwayda</option>
                                          </select>
                                          
                                        </div></td></tr>
                                    <tr>
                                      <td>  <div class="col-md-12">
                                        <label for="country" class="form-label">Day7</label>
                                        <select style="color:aliceblue; background-color:rgb(60, 71, 81) " class="form-select" id="country" required>
                                           <option value=""></option>
                                          <option value="">Damascus</option>
                                          <option value="">Latakia</option>
                                           <option value="">Aleppo</option>
                                           <option value="">Homs</option>
                                          <option>Hama</option>
                                          <option>Tartous</option>
                                          <option>Draa</option>
                                     <option>AS-Suwayda</option>
                                        </select>
                                        
                                      </div></td>
                                     
                                      <td><div class="col-md-12">
                                        <label for="country" class="form-label">Day8</label>
                                        <select style="color:aliceblue; background-color:rgb(60, 71, 81) " class="form-select" id="country" required>
                                           <option value=""></option>
                                          <option value="">Damascus</option>
                                          <option value="">Latakia</option>
                                           <option value="">Aleppo</option>
                                           <option value="">Homs</option>
                                          <option>Hama</option>
                                          <option>Tartous</option>
                                          <option>Draa</option>
                                     <option>AS-Suwayda</option>
                                        </select>
                                        
                                      </div></td>
                                     
                                      <td><div class="col-md-12">
                                        <label for="country" class="form-label">Day9</label>
                                        <select style="color:aliceblue; background-color:rgb(60, 71, 81) " class="form-select" id="country" required>
                                           <option value=""></option>
                                          <option value="">Damascus</option>
                                          <option value="">Latakia</option>
                                           <option value="">Aleppo</option>
                                           <option value="">Homs</option>
                                          <option>Hama</option>
                                          <option>Tartous</option>
                                          <option>Draa</option>
                                     <option>AS-Suwayda</option>
                                        </select>
                                        
                                      </div></td>
                                 
                                     <td><div class="col-md-12">
                                        <label for="country" class="form-label">Day10</label>
                                        <select style="color:aliceblue; background-color:rgb(60, 71, 81) " class="form-select" id="country" required>
                                           <option value=""></option>
                                          <option value="">Damascus</option>
                                          <option value="">Latakia</option>
                                           <option value="">Aleppo</option>
                                           <option value="">Homs</option>
                                          <option>Hama</option>
                                          <option>Tartous</option>
                                          <option>Draa</option>
                                     <option>AS-Suwayda</option>
                                        </select>
                                        
                                      </div></td>
                                    
                                      
                                      <td><div class="col-md-12">
                                        <label for="country" class="form-label">Day11</label>
                                        <select style="color:aliceblue; background-color:rgb(60, 71, 81) " class="form-select" id="country" required>
                                           <option value=""></option>
                                          <option value="">Damascus</option>
                                          <option value="">Latakia</option>
                                           <option value="">Aleppo</option>
                                           <option value="">Homs</option>
                                          <option>Hama</option>
                                          <option>Tartous</option>
                                          <option>Draa</option>
                                     <option>AS-Suwayda</option>
                                        </select>
                                        
                                      </div></td>
                                 
                                       
                                        <td><div class="col-md-12">
                                          <label for="country" class="form-label">Day12</label>
                                          <select style="color:aliceblue; background-color:rgb(60, 71, 81) " class="form-select" id="country" required>
                                             <option value=""></option>
                                            <option value="">Damascus</option>
                                            <option value="">Latakia</option>
                                             <option value="">Aleppo</option>
                                             <option value="">Homs</option>
                                            <option>Hama</option>
                                            <option>Tartous</option>
                                            <option>Draa</option>
                                       <option>AS-Suwayda</option>
                                          </select>
                                          
                                        </div></td></tr>
                                        <tr>
                                          <td>  <div class="col-md-12">
                                            <label for="country" class="form-label">Day13</label>
                                            <select style="color:aliceblue; background-color:rgb(60, 71, 81) " class="form-select" id="country" required>
                                               <option value=""></option>
                                              <option value="">Damascus</option>
                                              <option value="">Latakia</option>
                                               <option value="">Aleppo</option>
                                               <option value="">Homs</option>
                                              <option>Hama</option>
                                              <option>Tartous</option>
                                              <option>Draa</option>
                                         <option>AS-Suwayda</option>
                                            </select>
                                            
                                          </div></td>
                                         
                                          <td><div class="col-md-12">
                                            <label for="country" class="form-label">Day14</label>
                                            <select style="color:aliceblue; background-color:rgb(60, 71, 81) " class="form-select" id="country" required>
                                               <option value=""></option>
                                              <option value="">Damascus</option>
                                              <option value="">Latakia</option>
                                               <option value="">Aleppo</option>
                                               <option value="">Homs</option>
                                              <option>Hama</option>
                                              <option>Tartous</option>
                                              <option>Draa</option>
                                         <option>AS-Suwayda</option>
                                            </select>
                                            
                                          </div></td>
                                         
                                          <td><div class="col-md-12">
                                            <label for="country" class="form-label">Day15</label>
                                            <select style="color:aliceblue; background-color:rgb(60, 71, 81) " class="form-select" id="country" required>
                                               <option value=""></option>
                                              <option value="">Damascus</option>
                                              <option value="">Latakia</option>
                                               <option value="">Aleppo</option>
                                               <option value="">Homs</option>
                                              <option>Hama</option>
                                              <option>Tartous</option>
                                              <option>Draa</option>
                                         <option>AS-Suwayda</option>
                                            </select>
                                            
                                          </div></td>
                                     
                                         <td><div class="col-md-12">
                                            <label for="country" class="form-label">Day16</label>
                                            <select style="color:aliceblue; background-color:rgb(60, 71, 81) " class="form-select" id="country" required>
                                               <option value=""></option>
                                              <option value="">Damascus</option>
                                              <option value="">Latakia</option>
                                               <option value="">Aleppo</option>
                                               <option value="">Homs</option>
                                              <option>Hama</option>
                                              <option>Tartous</option>
                                              <option>Draa</option>
                                         <option>AS-Suwayda</option>
                                            </select>
                                            
                                          </div></td>
                                        
                                          
                                          <td><div class="col-md-12">
                                            <label for="country" class="form-label">Day17</label>
                                            <select style="color:aliceblue; background-color:rgb(60, 71, 81) " class="form-select" id="country" required>
                                               <option value=""></option>
                                              <option value="">Damascus</option>
                                              <option value="">Latakia</option>
                                               <option value="">Aleppo</option>
                                               <option value="">Homs</option>
                                              <option>Hama</option>
                                              <option>Tartous</option>
                                              <option>Draa</option>
                                         <option>AS-Suwayda</option>
                                            </select>
                                            
                                          </div></td>
                                     
                                           
                                            <td><div class="col-md-12">
                                              <label for="country" class="form-label">Day18</label>
                                              <select style="color:aliceblue; background-color:rgb(60, 71, 81) " class="form-select" id="country" required>
                                                 <option value=""></option>
                                                <option value="">Damascus</option>
                                                <option value="">Latakia</option>
                                                 <option value="">Aleppo</option>
                                                 <option value="">Homs</option>
                                                <option>Hama</option>
                                                <option>Tartous</option>
                                                <option>Draa</option>
                                           <option>AS-Suwayda</option>
                                              </select>
                                              
                                            </div></td></tr>
                                            <tr>
                                              <td>  <div class="col-md-12">
                                                <label for="country" class="form-label">Day19</label>
                                                <select style="color:aliceblue; background-color:rgb(60, 71, 81) " class="form-select" id="country" required>
                                                   <option value=""></option>
                                                  <option value="">Damascus</option>
                                                  <option value="">Latakia</option>
                                                   <option value="">Aleppo</option>
                                                   <option value="">Homs</option>
                                                  <option>Hama</option>
                                                  <option>Tartous</option>
                                                  <option>Draa</option>
                                             <option>AS-Suwayda</option>
                                                </select>
                                                
                                              </div></td>
                                             
                                              <td><div class="col-md-12">
                                                <label for="country" class="form-label">Day20</label>
                                                <select style="color:aliceblue; background-color:rgb(60, 71, 81) " class="form-select" id="country" required>
                                                   <option value=""></option>
                                                  <option value="">Damascus</option>
                                                  <option value="">Latakia</option>
                                                   <option value="">Aleppo</option>
                                                   <option value="">Homs</option>
                                                  <option>Hama</option>
                                                  <option>Tartous</option>
                                                  <option>Draa</option>
                                             <option>AS-Suwayda</option>
                                                </select>
                                                
                                              </div></td>
                                             
                                              <td><div class="col-md-12">
                                                <label for="country" class="form-label">Day21</label>
                                                <select style="color:aliceblue; background-color:rgb(60, 71, 81) " class="form-select" id="country" required>
                                                   <option value=""></option>
                                                  <option value="">Damascus</option>
                                                  <option value="">Latakia</option>
                                                   <option value="">Aleppo</option>
                                                   <option value="">Homs</option>
                                                  <option>Hama</option>
                                                  <option>Tartous</option>
                                                  <option>Draa</option>
                                             <option>AS-Suwayda</option>
                                                </select>
                                                
                                              </div></td>
                                         
                                             <td><div class="col-md-12">
                                                <label for="country" class="form-label">Day22</label>
                                                <select style="color:aliceblue; background-color:rgb(60, 71, 81) " class="form-select" id="country" required>
                                                   <option value=""></option>
                                                  <option value="">Damascus</option>
                                                  <option value="">Latakia</option>
                                                   <option value="">Aleppo</option>
                                                   <option value="">Homs</option>
                                                  <option>Hama</option>
                                                  <option>Tartous</option>
                                                  <option>Draa</option>
                                             <option>AS-Suwayda</option>
                                                </select>
                                                
                                              </div></td>
                                            
                                              
                                              <td><div class="col-md-12">
                                                <label for="country" class="form-label">Day23</label>
                                                <select style="color:aliceblue; background-color:rgb(60, 71, 81) " class="form-select" id="country" required>
                                                   <option value=""></option>
                                                  <option value="">Damascus</option>
                                                  <option value="">Latakia</option>
                                                   <option value="">Aleppo</option>
                                                   <option value="">Homs</option>
                                                  <option>Hama</option>
                                                  <option>Tartous</option>
                                                  <option>Draa</option>
                                             <option>AS-Suwayda</option>
                                                </select>
                                                
                                              </div></td>
                                         
                                               
                                                <td><div class="col-md-12">
                                                  <label for="country" class="form-label">Day24</label>
                                                  <select style="color:aliceblue; background-color:rgb(60, 71, 81) " class="form-select" id="country" required>
                                                     <option value=""></option>
                                                    <option value="">Damascus</option>
                                                    <option value="">Latakia</option>
                                                     <option value="">Aleppo</option>
                                                     <option value="">Homs</option>
                                                    <option>Hama</option>
                                                    <option>Tartous</option>
                                                    <option>Draa</option>
                                               <option>AS-Suwayda</option>
                                                  </select>
                                                  
                                                </div></td></tr>
                                                <tr>
                                                  <td>  <div class="col-md-12">
                                                    <label for="country" class="form-label">Day25</label>
                                                    <select style="color:aliceblue; background-color:rgb(60, 71, 81) " class="form-select" id="country" required>
                                                       <option value=""></option>
                                                      <option value="">Damascus</option>
                                                      <option value="">Latakia</option>
                                                       <option value="">Aleppo</option>
                                                       <option value="">Homs</option>
                                                      <option>Hama</option>
                                                      <option>Tartous</option>
                                                      <option>Draa</option>
                                                 <option>AS-Suwayda</option>
                                                    </select>
                                                    
                                                  </div></td>
                                                 
                                                  <td><div class="col-md-12">
                                                    <label for="country" class="form-label">Day26</label>
                                                    <select style="color:aliceblue; background-color:rgb(60, 71, 81) " class="form-select" id="country" required>
                                                       <option value=""></option>
                                                      <option value="">Damascus</option>
                                                      <option value="">Latakia</option>
                                                       <option value="">Aleppo</option>
                                                       <option value="">Homs</option>
                                                      <option>Hama</option>
                                                      <option>Tartous</option>
                                                      <option>Draa</option>
                                                 <option>AS-Suwayda</option>
                                                    </select>
                                                    
                                                  </div></td>
                                                 
                                                  <td><div class="col-md-12">
                                                    <label for="country" class="form-label">Day27</label>
                                                    <select style="color:aliceblue; background-color:rgb(60, 71, 81) " class="form-select" id="country" required>
                                                       <option value=""></option>
                                                      <option value="">Damascus</option>
                                                      <option value="">Latakia</option>
                                                       <option value="">Aleppo</option>
                                                       <option value="">Homs</option>
                                                      <option>Hama</option>
                                                      <option>Tartous</option>
                                                      <option>Draa</option>
                                                 <option>AS-Suwayda</option>
                                                    </select>
                                                    
                                                  </div></td>
                                             
                                                 <td><div class="col-md-12">
                                                    <label for="country" class="form-label">Day28</label>
                                                    <select style="color:aliceblue; background-color:rgb(60, 71, 81) " class="form-select" id="country" required>
                                                       <option value=""></option>
                                                      <option value="">Damascus</option>
                                                      <option value="">Latakia</option>
                                                       <option value="">Aleppo</option>
                                                       <option value="">Homs</option>
                                                      <option>Hama</option>
                                                      <option>Tartous</option>
                                                      <option>Draa</option>
                                                 <option>AS-Suwayda</option>
                                                    </select>
                                                    
                                                  </div></td>
                                                
                                                  
                                                  <td><div class="col-md-12">
                                                    <label for="country" class="form-label">Day29</label>
                                                    <select style="color:aliceblue; background-color:rgb(60, 71, 81) " class="form-select" id="country" required>
                                                       <option value=""></option>
                                                      <option value="">Damascus</option>
                                                      <option value="">Latakia</option>
                                                       <option value="">Aleppo</option>
                                                       <option value="">Homs</option>
                                                      <option>Hama</option>
                                                      <option>Tartous</option>
                                                      <option>Draa</option>
                                                 <option>AS-Suwayda</option>
                                                    </select>
                                                    
                                                  </div></td>
                                             
                                                   
                                                    <td><div class="col-md-12">
                                                      <label for="country" class="form-label">Day30</label>
                                                      <select style="color:aliceblue; background-color:rgb(60, 71, 81) " class="form-select" id="country" required>
                                                         <option value=""></option>
                                                        <option value="">Damascus</option>
                                                        <option value="">Latakia</option>
                                                         <option value="">Aleppo</option>
                                                         <option value="">Homs</option>
                                                        <option>Hama</option>
                                                        <option>Tartous</option>
                                                        <option>Draa</option>
                                                   <option>AS-Suwayda</option>
                                                      </select>
                                                      
                                                    </div></td></tr>
                                  </tbody>
                                </table>
                              </div></div> 
                              <div style="padding: 15px;" class="col-sm-12">
                              <div style="padding-left: 500px;">
                                <a href="Taddviolations.html"><button class="btn btn-inverse-primary btn-fw">Add training Planning</button></a>
                               </div>
 
                                </div>    </div>
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
    <script src="{{asset('coach/assets/vendors/js/vendor.bundle.base.js')}}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{asset('coach/assets/vendors/chart.js/Chart.min.js')}}"></script>
    <script src="{{asset('coach/assets/vendors/progressbar.js/progressbar.min.js')}}"></script>
    <script src="{{asset('coach/assets/vendors/jvectormap/jquery-jvectormap.min.js')}}"></script>
    <script src="{{asset('coach/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
    <script src="{{asset('coach/assets/vendors/owl-carousel-2/owl.carousel.min.js')}}"></script>
    <script src="{{asset('coach/assets/js/jquery.cookie.js" type="text/javascript')}}"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{asset('coach/assets/js/off-canvas.js')}}"></script>
    <script src="{{asset('coach/assets/js/hoverable-collapse.js')}}"></script>
    <script src="{{asset('coach/assets/js/misc.js')}}"></script>
    <script src="{{asset('coach/assets/js/settings.js')}}"></script>
    <script src="{{asset('coach/assets/js/todolist.js')}}"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="{{asset('coach/assets/js/dashboard.js')}}"></script>
    <!-- End custom js for this page -->
  </body>
</html>