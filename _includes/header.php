<header class="site-header">
<div class="container">


	<div class="main-navigation">
		<a href="index.php" class="branding">
			<h1 class="site-title">Bahati Martyrs</h1>
		</a>
		<a href="index.php" class="branding">
			<img src="images/logo.png" alt="" class="logo">
		</a>
		<button class="menu-toggle">
			<i class="fa fa-bars"></i> Menu</button>

<?php

$fullUrl= "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

if(strpos($fullUrl, "index.php") == True){


echo '
	

		<ul class="menu">
			<li class="menu-item  current-menu-item" ">
				<a href="index.php">Home</a>
			</li>
			<li class="menu-item">
					<a href="about.php">About Us</a>
				</li>
			
			<li class="menu-item">
				<a href="events.php">Events</a>
			</li>
			<li class="menu-item">
				<a href="media.php">Media</a>
			</li>
			<li class="menu-item">
				<a href="#contact">Contact Us </a>
			</li>
		</ul>
	 ';

  


}elseif(strpos($fullUrl, "about.php") == True){
	echo '
	

		<ul class="menu">
			<li class="menu-item">
				<a href="index.php">Home</a>
			</li>
			<li class="menu-item current-menu-item">
					<a href="about.php">About Us</a>
				</li>
			
			<li class="menu-item">
				<a href="events.php">Events</a>
			</li>
			<li class="menu-item">
				<a href="media.php">Media</a>
			</li>
			<li class="menu-item">
				<a href="#contact">Contact Us </a>
			</li>
		</ul>
	 ';
   

}elseif(strpos($fullUrl, "events.php") == True){
	echo '
	

		<ul class="menu">
			<li class="menu-item" >
				<a href="index.php">Home</a>
			</li>
			<li class="menu-item">
					<a href="about.php">About Us</a>
				</li>
			
			<li class="menu-item current-menu-item">
				<a href="events.php">Events</a>
			</li>
			<li class="menu-item">
				<a href="media.php">Media</a>
			</li>
			<li class="menu-item">
				<a href="#contact">Contact Us </a>
			</li>
		</ul>
	 ';
    

}elseif(strpos($fullUrl, "media.php") == True){
	echo '
	

		<ul class="menu">
			<li class="menu-item " >
				<a href="index.php">Home</a>
			</li>
			<li class="menu-item">
					<a href="about.php">About Us</a>
				</li>
			
			<li class="menu-item">
				<a href="events.php">Events</a>
			</li>
			<li class="menu-item current-menu-item">
				<a href="media.php">Media</a>
			</li>
			<li class="menu-item">
				<a href="#contact">Contact Us </a>
			</li>
		</ul>
	 ';
    

}

?>

</div>

<div class="mobile-navigation"></div>
</div>
</header>



        <!-- .site-header -->