<?php
  include_once "_includes/db.inc.php";
  ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">

  <title>Bahati Martyr's | Events</title>




<?php
include_once "_includes/head_tags.php";

?>
</head>


<body>
	<div class="site-content">
		<?php
  include_once "_includes/header.php";
  ?>
		<!-- .site-header -->

		<div class="page-head" data-bg-image="images/headers/img-9.jpg">
			<div class="container">
				<h2 class="page-title">Events</h2>
			</div>
		</div>

		<main class="main-content">
				<div class="container-fluid">
          <div class="row d-flex justify-content-center" style=" background-color:#f5f5f5; min-width:calc(100%);">


            <div class="col-md-6" style="margin-top:20px;">


              <form  action="" method="post">
              <div class="input-group mb-3">
  <input type="date" class="form-control" placeholder="Recipient's username" name="eventdate"  aria-label="Recipient's username" aria-describedby="basic-addon2">
  <div class="input-group-append">
    <button class="input-group-text" name="searchevent" >Click To show Event</button>
  </div>
</div>
</form>
<?php



if(isset($_POST['searchevent'])){

$event_date = $_POST['eventdate'];




  if(empty($event_date)){
    echo "<h3>Please Select Date</h3";


  }else{



  $query = "SELECT * FROM events ";
  $result = mysqli_query($connection, $query);


    while($row = mysqli_fetch_assoc($result)) {
        if( $row["event_date"] == $event_date){

          $event_name2 =  $row["event_name"];
          $event_date2 = $row["event_date"];
          $event_location2 = $row["event_location"];
          $event_info2 = $row["event_info"];
          $event_time2 = $row["event_time"];









?>
<div class="row row-striped" style="background-color:#f5f5f5;">

<div class="col-10">
<h3 class="text-uppercase"><strong><?php echo $event_name2; ?></strong></h3>
<ul class="list-inline">
<li class="list-inline-item"><i class="fa fa-clock-o" aria-hidden="true"></i><?php echo $event_time2; ?></li>
<li class="list-inline-item"><i class="fa fa-location-arrow" aria-hidden="true"></i>         <?php echo $event_location2; ?></li>
</ul>
<p>
</p>
</div>
</div>
<?php
 }else{

  echo "<h3>No Events on the Days</h3>";
}
}
}
}
?>

            </div>

          </div>


					<div class="row">

            <div class="container">
              <h2 class="section-title text-center">Upcoming Events</h2>
                <?php

									$query = "SELECT * FROM events LIMIT 5";
									$result = mysqli_query($connection, $query);


										while($row = mysqli_fetch_assoc($result)) {


											$event_name =  $row["event_name"];
											$event_date = $row["event_date"];
											$event_location = $row["event_location"];
											$event_info = $row["event_info"];
                      $event_time = $row["event_time"];




								?>
		<div class="row row-striped">
			<!-- <div class="col-2 text-right" >
				<h1 class="display-4"><span class="badge badge-secondary">23</span></h1>
				<h2>OCT</h2>
			</div> -->
			<div class="col-10 " >
				<h3 class="text-uppercase"><strong><?php echo $event_name; ?></strong></h3>
				<ul class="list-inline">
				    <li class="list-inline-item"><i class="fas fa-calendar" aria-hidden="true"></i> <?php echo $event_date; ?></li>
					<li class="list-inline-item"><i class="fas fa-clock" aria-hidden="true"></i> <?php echo $event_time; ?></li>
					<li class="list-inline-item"><i class="fa fa-location-arrow" aria-hidden="true"></i>         <?php echo $event_location; ?></li>
				</ul>
        <p>
        <?php echo $event_info; ?>
        </p>
			</div>
		</div>
    <hr>
    <?php
}

?>
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
