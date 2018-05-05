<?php 
  include_once "_includes/db.inc.php";
  ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">

    <title>Bahati Martyr's</title>

    <!-- Loading third party fonts -->
    <link href="fonts/novecento-font/novecento-font.css" rel="stylesheet" type="text/css">
    <link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css">
    <script defer src="https://use.fontawesome.com/releases/v5.0.10/js/all.js" integrity="sha384-slN8GvtUJGnv6ca26v8EzVaR9DC58QEwsIk9q1QXdCU8Yu8ck/tL/5szYlBbqmS+"
        crossorigin="anonymous"></script>


    <!-- Animate.css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/animate.css@3.5.2/animate.min.css">

    <!-- Bootstrap  -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">

    <!-- font-awesome  -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" integrity="sha384-3AB7yXWz4OeoZcPbieVW64vVXEwADiYyAEhwilzWsLw+9FgqpyjjStpPnpBO8o8S"
        crossorigin="anonymous">

    <!-- My css -->
    <link rel="stylesheet" href="css/style.css">



</head>


<body>
    <div class="site-content">
        <?php 
  include_once "_includes/header.php";
  ?>

        <div id="myCarousel" class="carousel slide" data-ride="carousel" >
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

        <div id="church_services" class="box-shadow container-fluid text-center" >
      <ul class="row " style="  list-style:none; margin-top:15px;">   
        <li class="col-md-3 col-xs-3  border-right" style="font-weight:bold; color:#f7f7f9;" >Youth &amp; Service
            <div><small>8.30 AM to 10.00 AM</small></div>
        </li>
        <li class="col-md-3 col-xs-3  border-right" style="font-weight:bold; color:#f7f7f9;" >First &amp; Service
        <div><small>8.30 AM to 10.00 AM</small></div>
        </li>
        <li class="col-md-3 col-xs-3  border-right" style="font-weight:bold; color:#f7f7f9;" >Kiswahili &amp; Service
        <div><small>10.15 AM to 11.3o AM</small></div>
        </li>
        <li class="col-md-3 col-xs-3 " style="font-weight:bold; color:#f7f7f9;" >Kikuyu &amp; Service
        <div><small>11.45 AM to 1.15 PM</small></div>
        </li>
</ul>
    </div>

        </section>
</div>



        <main class="main-content">


            <div class="fullwidth-block">
                <div class="container">
                    <h2 class="section-title">Recent Media</h2>

                    <div class="row">
                        <?php

                            $query = "SELECT * FROM media WHERE media_type = 3  LIMIT 4";
                            $result = mysqli_query($connection, $query);
                            
                            
                                while($row = mysqli_fetch_assoc($result)) {
                            
                            
                                    
                                    $media_name = $row["media_name"];
                                    $media_date = $row["media_date"];
                                    $media_name = $row["media_name"];
                                    
                                        
                            ?>
                            <div class="col-md-3 col-xs-6">
                                <div class="news card">
                                    <image class="news-image card-img-top" src="images/<?php echo $media_name;?>.jpg"></image>
                                    <div class="card-body">
                                        <h3 class="news-title card-title">
                                            <a href="#">
                                                <?php echo $media_name; ?>
                                            </a>
                                        </h3>
                                        <small class="date">
                                            <i class="fa fa-calendar"></i>
                                            <?php echo $media_date; ?>
                                        </small>
                                    </div>
                                </div>
                            </div>
                            <?php 
                    }
                        ?>

                    </div>
                </div>

            </div>



            <div class="fullwidth-block">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <h2 class="section-title">Recent Tweets</h2>


                        </div>
                        <div class="col-md-6">
                            <h2 class="section-title">Notifications</h2>
                            <ul class="notification-list">

                                <?php

                            $query = "SELECT * FROM events LIMIT 5";
                            $result = mysqli_query($connection, $query);


                                while($row = mysqli_fetch_assoc($result)) {


                                    $event_title =  $row["event_name"];
                                    $event_date = $row["event_date"];
                                     $event_location = $row["event_location"];
                            


                            
                            
                            ?>

                                    <li>
                                        <img src="images/small-thumb-1.jpg" alt="">
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
                                <button href="#" class="btn btn-primary">See all notifications</button>
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