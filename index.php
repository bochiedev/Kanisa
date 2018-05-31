<?php
  include_once "_includes/db.inc.php";
  ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">

    <title>Bahati Martyr's | Home</title>




<?php
include_once "_includes/head_tags.php";

?>

</head>


<body>
    <div class="site-content">
        <?php
  include_once "_includes/header.php";
  ?>

        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class=""></li>
                <li data-target="#myCarousel" data-slide-to="1" class=""></li>
                <li data-target="#myCarousel" data-slide-to="2" class="active"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item">
                    <img class="first-slide" src="media/images/img-6.jpg" width="100%">
                    <div class="absolute-div">
                        <div class="carousel-caption" style="background:linear-gradient(rgba(0,0,0,.5),rgba(0,0,0,.5));">
                            <h3>Behold! The Outstretched Hand of God is Over Us.</h3>
                            <p>Year 2018 Theme.</p>

                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="second-slide" src="media/images/img-6.jpg" width="100%" alt="Second slide">
                    <div class="absolute-div">
                        <div class="carousel-caption" style="background:linear-gradient(rgba(0,0,0,.5),rgba(0,0,0,.5));">
                            <h3>Behold! The Outstretched Hand of God is Over Us.</h3>
                            <p>Year 2018 Theme.</p>

                        </div>
                    </div>
                </div>
                <div class="carousel-item active">
                    <img class="third-slide" src="media/images/img-6.jpg" width="100%" alt="Third slide">
                    <div class="absolute-div">
                        <div class="carousel-caption" style="background:linear-gradient(rgba(0,0,0,.5),rgba(0,0,0,.5));">
                            <h3>Behold! The Outstretched Hand of God is Over Us.</h3>
                            <p>Year 2018 Theme.</p>

                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <div class="container-fluid">

            <section class="row">


                <div id="church_services" class="box-shadow container-fluid text-center">
                <h3  >Join us for Our Services</h3>
                    <ul class="row " style="  list-style:none; margin-top:15px;">
                        <li class="col-md-3 col-xs-3  border-right" style="font-weight:bold; color:#f7f7f9;">Youth Service
                            <div>
                                <small>8.30 AM to 10.00 AM</small>
                            </div>
                        </li>
                        <li class="col-md-3 col-xs-3  border-right" style="font-weight:bold; color:#f7f7f9;">First Service
                            <div>
                                <small>8.30 AM to 10.00 AM</small>
                            </div>
                        </li>
                        <li class="col-md-3 col-xs-3  border-right" style="font-weight:bold; color:#f7f7f9;">Kiswahili Service
                            <div>
                                <small>10.15 AM to 11.45 AM</small>
                            </div>
                        </li>
                        <li class="col-md-3 col-xs-3 " style="font-weight:bold; color:#f7f7f9;">Kikuyu Service
                            <div>
                                <small>12.00 AM to 1.30 PM</small>
                            </div>
                        </li>
                    </ul>
                </div>

            </section>
        </div>



        <main class="main-content">


            <div class="fullwidth-block" style="padding-bottom:0px;">
                <div class="container-fluid text-center">
                    <h2 class="section-title">- Recent Media -</h2>

                    <div class="row">
                        <?php

                            $query = "SELECT * FROM media_category ORDER BY category_date DESC LIMIT 4 ";
                            $result = mysqli_query($connection, $query);


                                while($row = mysqli_fetch_assoc($result)) {



                                    $media_name = $row["category_image"];
                                    $media_date = $row["category_date"];


                            ?>
                            <div class="col-md-3 col-xs-6" style="padding:0px;">

                                    <div class="col-md-10 col-md-offset-1">
                                    <img height="200px" width="100%" style="overflow:hidden;" src="admin/images/<?php echo $media_date."/".  $media_name;?>"></img>
                                    <div class="card-body">
                                        <h3 class="card-title">
                                            <a href="media.php">
                                                <?php echo $media_date; ?>
                                            </a>
                                        </h3>
                                    </div>

                                </div>
                            </div>
                            <?php
                    }
                        ?>

                    </div>
                </div>

            </div>
            <section style="background: #f7f7f9; padding: 35px 20px;">
                <div class="container-fluid">
                    <div class="row">


                                                      <?php

                                                  $videoquery = "SELECT * FROM video ORDER BY id DESC LIMIT 1 ";
                                                  $videoresult = mysqli_query($connection, $videoquery);


                                                      while($row = mysqli_fetch_assoc($videoresult)) {


                                                          $video_url =  $row["video_url"];
                                                          $video_message = $row["video_message"];





                                                  ?>

                        <div class="col-md-6" style="margin-bottom: 20px;">
                            <iframe class="col-md-12 " src="<?php echo $video_url; ?>"
                                frameborder="0" allowfullscreen="1" style="height: 388.125px;"></iframe>
                        </div>
                        <div class="col-md-6 ">

                            <h2>
                                Word from Our Ministers
                            </h2>
                            <p>
                              <?php echo $video_message; ?>
                            </p>




                        </div>
                      <?php } ?>

                    </div>
                </div>
            </section>



            <div class="fullwidth-block">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <h2 class="section-title">Recent Tweets</h2>

                        </div>
                        <div class="col-md-6">
                            <h2 class="section-title">Upcoming Events</h2>
                            <ul class="notification-list">

                                <?php

                            $query = "SELECT * FROM events ORDER BY event_date DESC LIMIT 5 ";
                            $result = mysqli_query($connection, $query);


                                while($row = mysqli_fetch_assoc($result)) {


                                    $event_title =  $row["event_name"];
                                    $event_date = $row["event_date"];
                                     $event_location = $row["event_location"];





                            ?>

                                    <li>
                                        <div class="notification-detail">
                                            <h3 class="notification-title">
                                                <a href="#">
                                                    <?php echo $event_title; ?>
                                                </a>
                                            </h3>
                                            <div class="notification-meta">
                                                <div class="pastor">
                                                    <i class="fa fa-map-marker"></i>
                                                    <?php echo $event_location; ?>
                                                </div>
                                                <div class="date">
                                                    <i class="fa fa-calendar"></i>
                                                    <?php echo $event_date; ?>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                    <?php
                                   }

                                ?>

                            </ul>

                            <div class="text-center">
                                <a href="events.php" class="btn btn-primary">See all Events</a>
                            </div>
                        </div>
                    </div>
                    <!-- .row -->
                </div>
                <!-- .container -->
            </div>
            <!-- section -->
        </main>
        <!-- .main-content -->


    </div>

    <?php

include_once "_includes/footer.php";

?>
