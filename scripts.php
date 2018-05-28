<div class="sidebar col-md-3 col-md-offset-1 card" style="background:#f5f5f5; padding-top:20px;"  >
							<div class="widget card-body" >
								<h3 class="widget-title card-title">Categories</h3>
								<ul class="arrow list-group list-group-flush">
									
									<?php

$query = "SELECT * FROM media_category LIMIT 5";
$result = mysqli_query($connection, $query);


	while($row = mysqli_fetch_assoc($result)) {


		$category_name =  $row["category_name"];
		


?>
<li class="list-group-item">
										<a href="#"> ~ <?php echo $category_name ; ?></a>
									</li>


<?php
}

?>
								</ul>
							</div>













                                   <div class="hero" style="background:#000;">
            <div class="slides">

                <?php


                    $query = "SELECT * FROM media WHERE media_type = 3 ";
                    $result = mysqli_query($connection, $query);
                    
                    
                        while($row = mysqli_fetch_assoc($result)) {
                    
                    
                            
                            $media_name = $row["media_name"];
                            
                                
                    ?>

                    <li data-bg-image="images/<?php echo $media_name;?>.jpg">
                        <div class="container">
                            <div class="slide-content">
                                <small class="slide-subtitle">Bahati Martyr's</small>
                                <h2 class="slide-title">To be a holistic place of worship</h2>

                            </div>
                        </div>
                    </li>

                    <?php 

                        }
                    
              
                ?>
            </div>
        </div>










        <div class="container">
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="card add-animation animation-2 animate">
                                        <img alt="..." src="/assets/img/pic10.jpg">
                                    </div>
                                    <div class="card add-animation animation-4 animate">
                                        <img alt="..." src="/assets/img/pic6.jpg">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card add-animation animation-1 animate">
                                        <img alt="..." src="/assets/img/pic11.jpg">
                                    </div>
                                    <div class="card add-animation animation-3 animate">
                                        <img alt="..." src="/assets/img/pic1.jpg">
                                    </div>
                                    <div class="card add-animation animation-2 animate">
                                        <img alt="..." src="/assets/img/pic9.jpg">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card add-animation animation-3 animate">
                                        <img alt="..." src="/assets/img/pic2.jpg">
                                    </div>
                                     <div class="card add-animation animation-1 animate">
                                        <img alt="..." src="/assets/img/pic4.jpg">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>