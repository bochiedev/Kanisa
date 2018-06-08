<?php
  include_once "_includes/db.inc.php";
  ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">

  <title>Bahati Martyrs' | Media</title>




<?php
include_once "_includes/head_tags.php";

?>

</head>

<body>


	<div class="site-content">

		<?php
  include_once "_includes/header.php";
  ?>
		<!-- site-header -->

		<div class="page-head" data-bg-image="images/headers/img-9.jpg">
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
											<img height="200px" width="100%" class="card-img-top" src="admin/images/<?php echo $category_date."/".$category_image;?>" alt="" class="media-image">
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
