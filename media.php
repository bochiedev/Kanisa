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
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
	 crossorigin="anonymous">


	<!-- Loading main css file -->
	<link rel="stylesheet" href="css/style.css">

	</head>
	<body>


		<div class="site-content">

		<?php 
  include_once "_includes/header.php";
  ?>
			<!-- site-header -->

			<div class="page-head" data-bg-image="images/img-6.jpg">
				<div class="container">
					<h2 class="page-title">Media</h2>
				</div>
			</div>

			<main class="main-content">
				<div class="fullwidth-block">
					<div class="container">
						<div class="row">
							<div class="content col-md-8">
								<h2 class="section-title">choose a Gallery</h2>
								<div class="row">
									
									<?php

									$query = "SELECT * FROM media_category LIMIT 10";
									$result = mysqli_query($connection, $query);


										while($row = mysqli_fetch_assoc($result)) {


											
											$category_name = $row["category_name"];
											$category_image = $row["category_image"];
											
												 

								?>

								<div class="media">
										<img src="media/images/categories/<?php echo $category_image;?>.jpg" alt="" class="media-image">
										<h3 class="media-name"><?php echo $category_name;?></h3>
									</div>


								<?php
	   }
	
	?>

								</div>
								
							</div>
							<div class="sidebar col-md-3 col-md-offset-1">
								<div class="widget">
									<h3 class="widget-title">Categories</h3>
									<ul class="arrow">
									<?php

$query = "SELECT * FROM media_category LIMIT 5";
$result = mysqli_query($connection, $query);


	while($row = mysqli_fetch_assoc($result)) {


		$category_name =  $row["category_name"];
		


?>
<li>
										<a href="#"><?php echo $category_name ; ?></a>
									</li>


<?php
}

?>
									</ul>
								</div>


								<!-- <div class="widget">
									<h3 class="widget-title">Gallery updates</h3>

									<div class="galery-thumb">
										<a href="#"><img src="images/gallery-thumb-1.jpg" alt=""></a>
										<a href="#"><img src="images/gallery-thumb-2.jpg" alt=""></a>
										<a href="#"><img src="images/gallery-thumb-3.jpg" alt=""></a>
										<a href="#"><img src="images/gallery-thumb-4.jpg" alt=""></a>
										<a href="#"><img src="images/gallery-thumb-5.jpg" alt=""></a>
										<a href="#"><img src="images/gallery-thumb-6.jpg" alt=""></a>
									</div>
								</div> -->

							</div>
						</div>
					</div>
				</div>
			</main> <!-- .main-content -->

	<?php

include_once "_includes/footer.php";

?>