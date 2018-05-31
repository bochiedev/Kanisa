# Kanisa
SImple church website
div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <?php
      $query = "SELECT * FROM carousel ORDER BY id DESC LIMIT 3 ";
      $result = mysqli_query($connection, $query);




      $num = 0;
          while($row = mysqli_fetch_assoc($result)) {


              $carousel_image = $row["carousel_image"];
              $carousel_text = $row["carousel_text"];
              $carousel_subtext = $row["carousel_subtext"];


      ?>
        <li data-target="#myCarousel" data-slide-to="<?php echo $num++;  ?>" class=""></li>
      <?php } ?>
    </ol>
    <div class="carousel-inner">

      <?php

      $query = "SELECT * FROM carousel ORDER BY id DESC LIMIT 3 ";
      $result = mysqli_query($connection, $query);




          while($row = mysqli_fetch_assoc($result)) {


              $carousel_image = $row["carousel_image"];
              $carousel_text = $row["carousel_text"];
              $carousel_subtext = $row["carousel_subtext"];

          ?>

        <div class="carousel-item">
            <img class="d-block w-100" src="images/carousel/<?php echo $carousel_image;?>" width="100%">
            <div class="absolute-div">
                <div class="carousel-caption" style="background:linear-gradient(rgba(0,0,0,.5),rgba(0,0,0,.5));">
                    <h3><?php echo $carousel_text." </h3>
                    <p><?php echo $carousel_subtext ;?></p>" ;?>

                </div>
            </div>
        </div>
        <?php
}
    ?>

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
