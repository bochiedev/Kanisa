<!DOCTYPE html>
<html lang="en">

<head>

 <script async src="https://platform.twitter.com/widgets.js" charset="utf-8">
 </script>

     <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
    

</head>
<body>
<?php

$consumer_key = "VPRnLExGwd08VbXfrV8jQkect";
$consumer_secret = "EkGfj1eypSmsHPRvPns6OdSEP5RoaKa6SAc0OCoVCVW6K0S828";
$access_token= "428477424-IUTSOyIco47FTH1elOy8S4rtGfQpt7MmOVIHzWH8";
$access_token_secret= "h9Rf55sdbvpcnn0PMY0nByTvo9pqvPKfEOkAHtdL8V12g";

require "twitteroauth/autoload.php";

use Abraham\TwitterOAuth\TwitterOAuth;



$connection = new TwitterOAuth($consumer_key, $consumer_secret, $access_token, $access_token_secret);
$content = $connection->get("account/verify_credentials");


// $statuses = $connection->get("statuses/home_timeline", ["count" => 1, "exclude_replies" => true]);

// print_r($statuses);

?>
<a class="twitter-follow-button"
  href="https://twitter.com/TwitterDev">
Follow @TwitterDev</a>




</body>
</html>