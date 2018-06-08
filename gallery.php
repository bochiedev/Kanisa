<?php
  include_once "_includes/db.inc.php";
  ?>
<!DOCTYPE html>
<html lang="en">
	<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">

    <title>Bahati Martyrs' | Gallery</title>




<?php
include_once "_includes/head_tags.php";

?>

	</head>
	<body>


		<div class="site-content">

		<?php
  include_once "_includes/header.php";
  ?>

  <div class="page-head" data-bg-image="images/headers/img-9.jpg">
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
        $media_date = $row["media_date"];



        if($row > 0){

?>
 <div class="col-md-3 col-xs-3">

                <img class="img-thumbnail img-fluid"
                    src="admin/images/<?php echo $media_date."/".$media_name;?>" />

        </div>


<?php
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
