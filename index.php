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

    <!--[if lt IE 9]>
		<script src="js/ie-support/html5.js"></script>
		<script src="js/ie-support/respond.js"></script>
		<![endif]-->

</head>


<body>
    <div class="site-content">
        <?php 
  include_once "_includes/header.php";
  ?>

        <div class="hero" style="background:#000;">
            <div class="slides">

                <?php

                    $query = "SELECT * FROM media WHERE media_type = 3 ";
                    $result = mysqli_query($connection, $query);
                    
                    
                        while($row = mysqli_fetch_assoc($result)) {
                    
                    
                            
                            $media_name = $row["media_name"];
                            
                                
                    ?>

                    <li data-bg-image="images/<?php echo $media_name;?>.jpg">
                        <div class="container">
                            <div class="slide-content">
                                <small class="slide-subtitle">Bahati Martyr's</small>
                                <h2 class="slide-title">To be a holistic place of worship</h2>

                            </div>
                        </div>
                    </li>

                    <?php 

                        }
                    
              
                ?>
            </div>
        </div>

        <main class="main-content">
            <div class="fullwidth-block" style="background:#f5f5f5; padding: 30px 0px;">
                <div class="container">


                    <div class="row">
                        <div class="col-md-12 col-sm-12">



                            <?php

$query = "SELECT * FROM media WHERE media_type = 1 ";
$result = mysqli_query($connection, $query);


    while($row = mysqli_fetch_assoc($result)) {


        
        $media_name = $row["media_name"];
        
            
?>

                                <video class="mejs__player" width="100%" height="500" controls autoplay>
                                    <source src="media/videos/<?php echo $media_name;?>.mp4" type="video/mp4"> Sorry, your browser doesn't support the video element.
                                </video>

                                <?php 
    }
                                    ?>


                        </div>

                    </div>

                </div>
                <!-- .container -->
            </div>
            <!-- section -->

            <div class="fullwidth-block">
                <div class="container">
                    <h2 class="section-title">Recent Media</h2>

                    <div class="row">
                            <?php

                            $query = "SELECT * FROM media WHERE media_type = 2  LIMIT 4";
                            $result = mysqli_query($connection, $query);
                            
                            
                                while($row = mysqli_fetch_assoc($result)) {
                            
                            
                                    
                                    $media_name = $row["media_name"];
                                    $media_date = $row["media_date"];
                                    $media_name = $row["media_name"];
                                    
                                        
                            ?>
                        <div class="col-md-3 col-sm-6">
                            <div class="news">
                                <image class="news-image" src="images/<?php echo $media_name;?>.jpg"></image>
                                <h3 class="news-title">
                                    <a href="#"><?php echo $media_name; ?></a>
                                </h3>
                                <small class="date">
                                    <i class="fa fa-calendar"></i><?php echo $media_date; ?></small>
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