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
              <div class="col-xs-12 col-md-6" style="margin-top:20px;">
                <div class="panel panel-white demo-panel col-xs-12">
                    <div class="panel-heading">
                        <div class="panel-title">Add Events</div>
                    </div>
                    <div class="panel-body pb">

                      <?php
                      if (isset($_POST['events'])) {
                          $event_name = escape($_POST['event_title']);
                          $event_location = escape($_POST['event_location']);
                          $event_date = escape($_POST['event_date']);
                          $event_time = escape($_POST['event_time']);
                          $event_info = escape($_POST['event_info']);
                          if (isset($_SESSION['username'])) {
                              $username = $_SESSION['username'];
                          } else {
                              $username = "";
                          }


                          $event_query = "INSERT INTO events(event_name, event_location,event_date,event_time,event_info) VALUES('$event_name','$event_location','$event_date','$event_time','$event_info')";
                          $add_event = mysqli_query($connection, $event_query);

                          confirmQuery($add_event);
                          if ($add_event) {
                              echo "<div class='alert alert-success' role='alert'>
                          Your a genius ".  $username ." event successfully added!
                          </div>";
                          } else {
                              echo "<div class='alert alert-danger' role='alert'>
                          Ooops! ".  $username ." something went wrong!
                          </div>";
                          }
                      }
                      ?>

                      <form action="" method="POST">
                          <div class="form-group">
                              <label >Title</label>
                              <input type="text" name="event_title"  class="form-control" placeholder="name">
                          </div>
                          <div class="form-group">
                              <label >Date</label>
                              <input type="date" name="event_date" data-date-format="YYYY-MM-DD"  class="form-control" placeholder="date">
                          </div>
                          <div class="form-group">
                              <label >Time</label>
                              <input type="time" name="event_time"  class="form-control" placeholder="date">
                          </div>
                          <div class="form-group">
                              <label >Location</label>
                              <input type="text" name="event_location"  class="form-control" placeholder="location">
                          </div>
                          <div class="form-group">
                              <label >event info</label>
                              <textarea name="event_info"  class="form-control"></textarea>
                          </div>


                          <button type="submit" name="events" class="btn btn-success">Submit</button>
                      </form>
                        <!-- /Form -->

                    </div>
                </div>



              </div>
              <div class="col-xs-12 col-md-6" style="margin-top:20px;">
                <div class="panel panel-white demo-panel col-xs-12">
                    <div class="panel-heading">
                        <div class="panel-title">Update Event</div>
                    </div>
                    <div class="panel-body pb">


                                                  <div class="col-xs-12 col-md-12">
                                              <table class="table table-bordered table-hover">


                                                  <thead>
                                                      <tr>
                                                          <th>Id</th>
                                                          <th>Title</th>
                                                          <th>Date</th>

                                                      </tr>
                                                  </thead>
                                                  <tbody>

                                                  <?php


                                              $query = "SELECT * FROM events";
                                              $select_events = mysqli_query($connection, $query);

                                              while ($row = mysqli_fetch_assoc($select_events)) {
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

                                          deleteEvents();

                                           ?>
                                         </div>

                                           <div class="panel-body pb">


                      <?php
                      if (isset($_POST['update_event'])) {
                          if (isset($_GET['edit'])) {
                          $event_id = $_GET['edit'];
                        }
                          $event_name = escape($_POST['event_title']);
                          $event_location = escape($_POST['event_location']);
                          $event_date = escape($_POST['event_date']);
                          $event_time = escape($_POST['event_time']);
                          $event_info = escape($_POST['event_info']);

                          if (isset($_SESSION['username'])) {
                              $username = $_SESSION['username'];
                          } else {
                              $username = "";
                          }

                          $update_query = "UPDATE events SET event_name = '$event_name', event_location = '$event_location' , event_date ='$event_date', event_time = '$event_time' ,event_info = '$event_info' WHERE id = '$event_id'";
                          $update_event = mysqli_query($connection, $update_query);

                          confirmQuery($update_event);
                          if ($update_event) {
                              echo "<div class='alert alert-success' role='alert'>
                          woow! ".  $username ." event successfully updated!
                          </div>";


                          } else {
                              echo "<div class='alert alert-danger' role='alert'>
                          Ooops! ".  $username ." something went wrong!
                          </div>";
                          }
                      }


                     if (isset($_GET['edit'])) {
                         $event_id = escape($_GET['edit']);




                         $query = "SELECT * FROM events WHERE id = $event_id ";
                         $select_event_id = mysqli_query($connection, $query);

                         while ($row = mysqli_fetch_assoc($select_event_id)) {
                             $event_id = $row['id'];
                             $event_name = $row['event_name'];
                             $event_location = $row['event_location'];
                             $event_date = $row['event_date'];
                             $event_time = $row['event_time'];
                             $event_info = $row['event_info']; ?>
                          <form action="" method="POST">
                              <div class="form-group">
                                  <label >Title</label>
                                  <input type="text" name="event_title" value="<?php echo $event_name; ?>"  class="form-control" placeholder="name">
                              </div>
                              <div class="form-group">
                                  <label >Date</label>
                                  <input type="date" name="event_date" value="<?php echo $event_date ; ?>" data-date-format="YYYY-MM-DD"  class="form-control" placeholder="date">
                              </div>
                              <div class="form-group">
                                  <label >Time</label>
                                  <input type="time" name="event_time" value="<?php echo $event_time ; ?>" class="form-control" placeholder="date">
                              </div>
                              <div class="form-group">
                                  <label >Location</label>
                                  <input type="text" name="event_location" value="<?php echo $event_location ; ?>"  class="form-control" placeholder="location">
                              </div>
                              <div class="form-group">
                                  <label >event info</label>
                                  <textarea name="event_info" value="<?php echo $event_info ; ?>"  class="form-control"></textarea>
                              </div>


                              <button type="submit" name="update_event" class="btn btn-success">Submit</button>
                              <a type="submit"  class="btn btn-danger" href="events.php">cancel</a>

                          </form>

                          <?php
                         }
                     }



                      ?>


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
