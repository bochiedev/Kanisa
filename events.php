<?php
  include_once "_includes/db.inc.php";
  ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">

	<title></title>

	<!-- Loading third party fonts -->
	<link href="fonts/novecento-font/novecento-font.css" rel="stylesheet" type="text/css">
	<link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css">

	<script defer src="https://use.fontawesome.com/releases/v5.0.10/js/all.js" integrity="sha384-slN8GvtUJGnv6ca26v8EzVaR9DC58QEwsIk9q1QXdCU8Yu8ck/tL/5szYlBbqmS+"
	 crossorigin="anonymous"></script>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


	<!-- Loading main css file -->
	<link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="style.css">
  <link rel='stylesheet prefetch' href='https://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css'>
  <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>








</head>


<body>
	<div class="site-content">
		<?php
  include_once "_includes/header.php";
  ?>
		<!-- .site-header -->

		<div class="page-head" data-bg-image="images/img-6.jpg">
			<div class="container">
				<h2 class="page-title">Events</h2>
			</div>
		</div>

		<main class="main-content">
				<div class="container-fluid">
          <div class="row d-flex justify-content-center" style=" background-color:#f5f5f5; min-width:calc(100%);">
            <div class="col-md-6 " style="margin-top:20px;">
              <div class="input-group mb-3">
  <input type="date" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
  <div class="input-group-append">
    <button class="input-group-text" >Click To show Event</button>
  </div>
</div>

            </div>

          </div>
					<div class="row">

            <div class="col-md-12 ">
              <h2 class="section-title text-center">Upcoming Events</h2>
                <?php

									$query = "SELECT * FROM events LIMIT 5";
									$result = mysqli_query($connection, $query);


										while($row = mysqli_fetch_assoc($result)) {


											$event_name =  $row["event_name"];
											$event_date = $row["event_date"];
											$event_location = $row["event_location"];
											$event_info = $row["event_info"];
											$event_attending = $row['event_attending'];
											$event_interested = $row['event_interested'];



								?>
		<div class="row row-striped">
			<div class="col-2 text-right">
				<h1 class="display-4"><span class="badge badge-secondary">23</span></h1>
				<h2>OCT</h2>
			</div>
			<div class="col-10">
				<h3 class="text-uppercase"><strong><?php echo $event_name; ?></strong></h3>
				<ul class="list-inline">
				    <li class="list-inline-item"><i class="fa fa-calendar-o" aria-hidden="true"></i> Monday</li>
					<li class="list-inline-item"><i class="fa fa-clock-o" aria-hidden="true"></i> 12:30 PM - 2:00 PM</li>
					<li class="list-inline-item"><i class="fa fa-location-arrow" aria-hidden="true"></i>         <?php echo $event_location; ?></li>
				</ul>
        <p>
        <?php echo $event_info; ?>
        </p>
			</div>
		</div>
    <?php
}

?>
	</div>

            </div>





						</div>
					</div>
				</div>
      </main>
			</div>
		<!-- .main-content -->

		<?php

include_once "_includes/footer.php";

?>
<script async src="https://static.codepen.io/assets/embed/ei.js"></script>
