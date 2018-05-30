<?php ob_start();
session_start();
include_once "includes/db.inc.php";


?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="">

	<title>Bahati Martyr's | Home</title>

	 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/animate.css@3.5.2/animate.min.css">

<!-- Bootstrap  -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<!-- font-awesome  -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" integrity="sha384-3AB7yXWz4OeoZcPbieVW64vVXEwADiYyAEhwilzWsLw+9FgqpyjjStpPnpBO8o8S" crossorigin="anonymous">

<!-- My css -->
<link rel="stylesheet" href="css/style.css">


</head>


<body>

	<?php include_once "includes/header.php"; ?>

	<article class="index-header">

		<div class="container-fluid">
			<div class="jumbotron text-center jumbotron-home">


				<h1>Bahati martyrs</h1>
				<p>A preffered parish of Holistic Wordhip for all Nations</p>
			</div>




		</div>
	</article>


	<article class="index-info">
		<div class="container" style="margin-top:0px;">


			<div class="container text-center" style="margin-top:0px;">
				<h3><b>our services</b></h3>
				<div class="col-md-3"><b>Youth service </b> sunday 8:30am - 10:30am </div>
				<div class="col-md-3"> <b>English service </b> sunday 8:30am - 10:30am</div>
				<div class="col-md-3"> <b>Kiswahili service </b> sunday 10:30pm - 12:30pm</div>
				<div class="col-md-3"> <b>Kikuyu service </b> sunday 12:30pm - 3:30pm</div>

			</div>


			<div class="row">


				<div class="col-md-3" style="background:#f8f8f8;">

					<h3 class="bg-primary" style="padding:5px;">News and Events</h3>


					<?php


	$notification = "SELECT * FROM notifications LIMIT 4";
	$result = mysqli_query($connection, $notification);
	$query = mysqli_num_rows($result);

		if($query < 1){

		echo " <small>No Notifications or Events</small>";

	}else{
		while($row = mysqli_fetch_assoc($result)){

			$notification_id = $row['id'];
			$title = $row['title'];
			$date = $row['date'];
			$notification_text = $row['notification_text'];
					?>

					<div class="word col-md-12">
						<h3><b><?php echo $title; ?></b></h3>
						<h6><?php echo $date; ?></h6>
						<p><?php echo $notification_text; ?><span><a href="#"><b> Read more </b></a></span></p>
					</div>


					<?php }
		}
			?>



				</div>
				<div class="col-md-9 divider-no-bottom">

					<h3 class="bg-primary" style="padding:5px;">Daily Devotion</h3>


									<?php


	$notification = "SELECT * FROM daily_devotion LIMIT 4";
	$result = mysqli_query($connection, $notification);
	$query = mysqli_num_rows($result);

		if($query < 1){

		echo " <small>No Articles </small>";

	}else{
		while($row = mysqli_fetch_assoc($result)){

			$devotion_id = $row['id'];
			$devotion_title = $row['title'];
			$devotion_date = $row['date'];
			$devotion_word = $row['word'];
			$posted_by = $row['posted_by']
					?>

					<div class="word col-md-12">
						<h4><b><?php echo $devotion_title;  ?></b> <small>by <?php echo $posted_by;  ?></small> </h4>
						<h6><?php echo $devotion_date; ?></h6>
						<p><?php echo $devotion_word; ?><span><a href="#"><b> Read more </b></a></span></p>
					</div>

					<?php }}  ?>


				</div>


			</div>
		</div>
	</article>

	<?php include_once "includes/footer.php"; ?>
