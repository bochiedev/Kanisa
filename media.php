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
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
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

		<div class="page-head" data-bg-image="images/img-9.jpg">
			<div class="container">
				<h2 class="page-title">Media</h2>
			</div>
		</div>

		<main class="main-content">
			<div class="fullwidth-block">
				<div class="container">
					<div class="row">
						<div class="content col-md-12">
							<h2 class="section-title">choose a Gallery</h2>
							<div class="row">

								<?php






									$query = "SELECT * FROM media_category ORDER BY category_date DESC";
									$result = mysqli_query($connection, $query);

										while($row = mysqli_fetch_assoc($result)) {


											$category_id = $row["id"];
											$category_date = $row["category_date"];
											$category_image = $row["category_image"];







								?>
									<div class="col-md-3 col-xs-6" style="margin-bottom:10px;">

										<div class="card col-md-10 " style="padding:0px;">
											<img class="card-img-top" src="admin/images/<?php echo $category_date."/".$category_image;?>.jpg" alt="" class="media-image">
											<div class="card-body">
												<h5 class="media-name ">
													<?php echo $category_date;?>
												</h5>
												<?php echo "<a href='gallery.php?category=$category_id' class='btn btn-primary'>View {$category_date}</a>";
												?>
											</div>
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
	</div>
	</main>

	<?php

include_once "_includes/footer.php";

?>
