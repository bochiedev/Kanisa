<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Page title -->
    <title>Bahati | Admin</title>
    <!-- /Page title -->

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- /Meta -->

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.png">
    <!-- /Favicon -->

    <!-- Styles -->
    <link rel="stylesheet" href="assets/components/bootstrap-3.3.7-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/components/jquery-ui-1.12.1/jquery-ui.min.css">
    <link rel="stylesheet" href="assets/components/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/components/elegant-font/style.css">
    <link rel="stylesheet" href="assets/components/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="assets/components/owl-carousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/components/owl-carousel/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="assets/components/magnific-popup-master/dist/magnific-popup.css">
    <link rel="stylesheet" href="assets/components/malihu-custom-scrollbar/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" href="assets/components/jqvmap/dist/jqvmap.min.css">
    <link rel="stylesheet" href="assets/css/theme.css">
    <!-- /Styles -->
    <script>
    function _(el){
return document.getElementById(el);
    }
    function uploadFile(){
      var =  _('file').files[0];
      var formdata =  new FormData();
      formdata.append('file', file);
      var ajax = new XMLHttpRequest();
      ajax.upload.addEventListener('progress', progressHandler, false);
      ajax.addEventListener('load', completeHandler, false);
      ajax.addEventListener('error', errorHandler, false);
      ajax.addEventListener('abort', abortHandler, false);
      ajax.send(formdata);
    }
    function progressHandler(event){
      var percent = (event.loaded / event.total) *100;
      _('progressbar').value = Math.round(percent);
    }
    function completeHandler(event){
      _('progressbar').value = 0;
    }




    </script>

</head>
<body class="sidebar-expanded">


<!-- Preloader -->
<div class="preloader loader"></div>
<!-- /Preloader -->

<!-- Header -->

<?php
include_once "_includes/header.php";
?>


<!-- /Header -->


<!-- Main container -->
<main class="main-container">


    <!-- Page heading -->
    <header class="page-heading">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12">

                    <ol class="breadcrumb">
                        <li>
                            <i class="icon fa fa-home"></i>
                            <a href="#">Home</a>
                        </li>aria-valuenow="0"
                        <li><a href="#">Dashboard</a></li>
                        <li class="active"><span>Main page</span></li>
                    </ol>

                    <!-- Page header -->
                    <div class="page-header">
                        <h1 class="page-title">Welcome back Mary!</h1>
                    </div>
                    <!-- /Page header -->

                </div>
            </div>
        </div>
    </header>
    <!-- /Page heading -->


     <div class="section container">
          <div class="row">


                      <div class="panel panel-white demo-panel col-md-6">
                          <div class="panel-heading">
                              <div class="panel-title">Upload slideshow images</div>
                          </div>
                          <div class="panel-body pb">

                              <!-- Form -->
                              <form>

                                  <div class="form-group">
                                      <label for="frm01--file">File input</label>
                                      <input type="file" id="frm01--file">
                                  </div>

                                  <button type="button" class="btn btn-success">Upload</button>
                              </form>
                              <!-- /Form -->

                          </div>
                      </div>
                      <div class="panel panel-white demo-panel col-md-6">
                          <div class="panel-heading">
                              <div class="panel-title">Edit theme</div>
                          </div>
                          <div class="panel-body pb">

                              <!-- Form -->
                              <form>
                                  <div class="form-group">
                                      <label >Theme year</label>
                                      <input type="date"  class="form-control" placeholder="year">
                                  </div>
                                  <div class="form-group">
                                      <label >Theme</label>
                                      <textarea class="form-control"></textarea>
                                  </div>


                                  <button type="button" class="btn btn-success">Submit</button>
                              </form>
                              <!-- /Form -->

                          </div>
                      </div>


                    </div>
                  </div>







                  <div class="section container">
                       <div class="row">

                         <div class="panel panel-white demo-panel col-md-6">
                             <div class="panel-heading">
                                 <div class="panel-title">Upload pastor video</div>
                             </div>
                             <div class="panel-body pb">

                                 <!-- Form -->
                                 <form>
                                     <div class="form-group">
                                         <label >Video Link</label>
                                         <input type="text"  class="form-control" placeholder="video link">
                                     </div>
                                     <div class="form-group">
                                         <label >Word from minister</label>
                                         <textarea class="form-control"></textarea>
                                     </div>


                                     <button type="button" class="btn btn-success">Submit</button>
                                 </form>
                                 <!-- /Form -->

                             </div>
                         </div>


                       </div>
                     </div>



                      <hr>
                      <div class="section container">
                           <div class="row">

                      <div class="panel panel-white demo-panel col-md-6">
                          <div class="panel-heading">
                              <div class="panel-title">Update events</div>
                          </div>
                          <div class="panel-body pb">

                              <!--style="width: 25%" Form -->
                              <form>
                                  <div class="form-group">
                                      <label >name</label>
                                      <input type="text"  class="form-control" placeholder="name">
                                  </div>
                                  <div class="form-group">
                                      <label >Date</label>
                                      <input type="date"  class="form-control" placeholder="date">
                                  </div>
                                  <div class="form-group">
                                      <label >Location</label>
                                      <input type="text"  class="form-control" placeholder="location">
                                  </div>
                                  <div class="form-group">
                                      <label >event info</label>
                                      <textarea class="form-control"></textarea>
                                  </div>


                                  <button type="button" class="btn btn-success">Submit</button>
                              </form>
                              <!-- /Form -->

                          </div>
                      </div>
                      <div class="panel panel-white demo-panel col-md-6">
                          <div class="panel-heading">
                              <div class="panel-title">Gallery update</div>
                          </div>
                          <div class="panel-body pb">
                            <!-- <div class="progress">
                            <div class="progress-bar" id="progressbar" value="0"  style="width: 25%"  max="100"></div>
                            </div> -->

                              <!-- Form -->
                              <form action="_includes/image_upload.php" method="post" enctype="multipart/form-data">

                                  <div class="form-group">
                                      <label >File input</label>
                                      <input type="file" name="file_array[]" id="file"  multiple>

                                  </div>
  </div>
                                  <div class="form-group">
                                    <label >category</label>

                                      <select class="form-control" >
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                      </select>
                                    </div>

                                  <button type="submit" class="btn btn-success" onclick="uploadFile()">Upload</button>
                              </form>
                              <!-- /Form -->

                          </div>
                      </div>




          </div>




    <!-- /Content container -->


</main>
<!-- /Main container -->





<!-- Scripts -->
<script src="assets/js/jquery-2.2.0.min.js"></script>
<script src="assets/components/jquery-ui-1.12.1/jquery-ui.min.js"></script>
<script src="assets/components/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
<script src="assets/components/owl-carousel/owl.carousel.min.js"></script>
<script src="assets/components/magnific-popup-master/dist/jquery.magnific-popup.min.js"></script>
<script src="assets/components/malihu-custom-scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="assets/components/jqvmap/dist/jquery.vmap.min.js"></script>
<script src="assets/components/jqvmap/dist/maps/jquery.vmap.world.js"></script>
<script src="assets/js/jquery.validate.min.js"></script>
<script src="assets/js/Chart.min.js"></script>
<script src="assets/js/circle-progress.min.js"></script>
<script src="assets/js/calendar.js"></script>
<script src="assets/js/general.js"></script>
<!-- /Scripts -->

<!-- Yandex.Metrika counter --> <script> (function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter35435255 = new Ya.Metrika({ id:35435255, clickmap:true, trackLinks:true, accurateTrackBounce:true }); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = "../../../mc.yandex.ru/metrika/watch.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks"); </script> <noscript><div><img src="https://mc.yandex.ru/watch/35435255/1" style="position:absolute; left:-9999px;" alt="" /></div></noscript> <!-- /Yandex.Metrika counter -->

</body>

<!-- Mirrored from vtdes.ru/demo/wgboard/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 18 May 2018 09:18:46 GMT -->
</html>
