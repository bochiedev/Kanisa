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
			<div class="fullwidth-block">
				<div class="container">
					<div class="row">
						<div class="content col-md-12">
							<h2 class="section-title">Upcoming Events</h2>
							<ul class="event-list large">

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


									<li>
										<h3 class="event-title">
											<a href="#">
												<?php echo $event_name; ?>
											</a>
										</h3>
										<span class="event-meta">
											<span>
												<i class="fa fa-calendar"></i>
												<?php echo $event_date; ?>
											</span>
											<span>
												<i class="fa fa-map-marker"></i>
												<?php echo $event_location; ?>
											</span>
										</span>
										<p>
											<?php echo $event_info; ?>
										</p>
										<!-- <a href="#" class="button">Attending : <?php echo $event_attending; ?></a>
										<a href="#" class="button secondary">Interested : <?php echo $event_interested; ?></a> -->
									</li>

									<?php
	   }
	
	?>



							</ul>
						</div>
					


							<!-- <div class="widget">
								<h3 class="widget-title">Gallery updates</h3>

								<div class="galery-thumb">
									<a href="#">
										<img src="images/gallery-thumb-1.jpg" alt="">
									</a>
									<a href="#">
										<img src="images/gallery-thumb-2.jpg" alt="">
									</a>
									<a href="#">
										<img src="images/gallery-thumb-3.jpg" alt="">
									</a>
									<a href="#">
										<img src="images/gallery-thumb-4.jpg" alt="">
									</a>
									<a href="#">
										<img src="images/gallery-thumb-5.jpg" alt="">
									</a>
									<a href="#">
										<img src="images/gallery-thumb-6.jpg" alt="">
									</a>
								</div>
							</div> -->

						</div>
					</div>
				</div>
			</div>
		</main>
		<!-- .main-content -->

		<?php

include_once "_includes/footer.php";

?>