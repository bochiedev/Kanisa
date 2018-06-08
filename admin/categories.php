<?php session_start(); ?>
<?php include "_includes/db.php"; ?>
<?php include "functions.php"; ?>
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

<div class="preloader loader"></div>


<?php
include "_includes/header.php";
?>

<main class="main-container">


    <!-- Content container -->
    <div class="container-fluid">

        <!-- Page section: preview -->
        <div class="section">
            <div class="row">
                <div class="col-xs-12 col-md-6" style="margin-top:20px; ">



                                <div class="col-xs-12 col-md-6">

                                <?php insert_categories();  ?>

                        <form action="" method="post">
                          <div class="form-group">
                             <label for="cat-title">Add Category</label>
                              <input type="text" class="form-control" name="cat_title">
                          </div>
                           <div class="form-group">
                              <input class="btn btn-primary" type="submit" name="submit" value="Add Category">
                          </div>

                        </form>

                        <?php // UPDATE AND INCLUDE QUERY

                        if(isset($_GET['edit'])) {

                            $cat_id = $_GET['edit'];

                            include "includes/update_categories.php";


                        }


                        ?>


                        </div><!--Add Category Form-->

                                <div class="col-xs-12 col-md-12">
                        <table class="table table-bordered table-hover">


                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Category Title</th>
                                </tr>
                            </thead>
                            <tbody>

                            <?php


                        $query = "SELECT * FROM events";
                        $select_events = mysqli_query($connection,$query);

                        while($row = mysqli_fetch_assoc($select_events)) {
                        $event_id = $row['id'];
                        $event_title = $row['event_name'];
                        $event_date = $row['event_date'];
                        $event_location = $row['event_location'];
                        $event_time = $row['event_time'];
                        $event_info = $row['event_info'];



                        echo "<tr>";

                        echo "<td>{$event_id}</td>";
                        echo "<td>{$event_title}</td>";
                        echo "<td>{$event_date}</td>";
                       echo "<td><a href='events.php?delete={$event_id}'>Delete</a></td>";
                       echo "<td><a href='events.php?edit={$event_id}'>Edit</a></td>";
                        echo "</tr>";

                        }




                    ?>




                            </tbody>
                        </table>




                                    </div>



                    <?php

                    deleteCategories();

                     ?>



        </div>
      </div>
        <!-- /Page section: preview -->

      </div>
</main>


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
