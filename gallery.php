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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
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
  <script src="gallery.js"></script>



	</head>
	<body>


		<div class="site-content">

		<?php
  include_once "_includes/header.php";
  ?>

  <div class="page-head" data-bg-image="images/img-9.jpg">
    <div class="container">
        <h2 class="page-title">Gallery</h2>
    </div>
</div>


</div>
<div class="container">
        <div class="row d-flex-wrap" style="margin:20px 0px;">
        <?php


        if (isset($_GET['category'])) {
            $category_id = $_GET['category'];

$query = "SELECT * FROM media WHERE media_category = $category_id ";
$result = mysqli_query($connection, $query);

    while($row = mysqli_fetch_assoc($result)) {

        $media_name = $row["media_name"];
        if($row > 0){

?>
 <div class="col-md-3 col-xs-3">

                <img class="img-thumbnail img-fluid"
                    src="media/images/<?php echo "img-6"?>.jpg" />

        </div>


<?php
}else{
  echo "<h3>No images for ths category</h3>";
}
}
}
?>



    </div>
</div>



</div>





        <?php

include_once "_includes/footer.php";

?>
