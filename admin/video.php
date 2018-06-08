<?php session_start();
      include "_includes/db.php";
      include "functions.php";
      CheckLoggedIn();

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Page title -->
    <title>Bahat- Admin | Dashboard</title>


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

</head>
<body class="sidebar-expanded">


<!-- Preloader -->
<!-- <div class="preloader loader"></div> -->
<!-- /Preloader -->
<?php include "_includes/header.php" ?>


<!-- Main container -->
<main class="main-container">


    <!-- Content container -->
    <div class="container-fluid">
      <!-- Page section: sizes -->
        <div class="section">
            <div class="row">
              <div class="col-xs-12 col-md-12" style="margin-top:20px;">
                <div class="panel panel-white demo-panel col-xs-12">
                    <div class="panel-heading">
                        <div class="panel-title">Add Video</div>
                    </div>
                    <div class="panel-body pb">

                      <?php
                      if (isset($_POST['video'])){
                          $video_url = escape($_POST['video_url']);
                          $video_message = escape($_POST['video_message']);

                          if(isset($_SESSION['username'])){
                            $username = $_SESSION['username'];
                          }else{
                            $username = "";

                          }


                          $video_query = "INSERT INTO video(video_url, video_message) VALUES('$video_url','$video_message')";
                          $add_video = mysqli_query($connection, $video_query);

                          confirmQuery($add_video);
                          if($add_video){

                          echo "<div class='alert alert-success' role='alert'>
                          Your a genius ".  $username ." video successfully added!
                          </div>";
                        }else{
                          echo "<div class='alert alert-danger' role='alert'>
                          Ooops! ".  $username ." something went wrong!
                          </div>";

                        }

                      }
                      ?>

                      <form action="" method="post" >
                          <div class="form-group">
                              <label >Video Link</label>
                              <input type="text" name="video_url"  class="form-control" placeholder="video link">
                          </div>
                          <div class="form-group">
                              <label >Word from minister</label>
                              <textarea name="video_message" class="form-control"></textarea>
                          </div>


                          <button type="submit" name="video" class="btn btn-success">Submit</button>
                      </form>
                        <!-- /Form -->

                    </div>
                </div>



              </div>


            </div>
        </div>
        <!-- /Page section: sizes -->

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

<!-- Mirrored from vtdes.ru/demo/wgboard/modals.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 18 May 2018 09:18:47 GMT -->
</html>
