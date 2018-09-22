

    <?php

$consumer_key = "VPRnLExGwd08VbXfrV8jQkect";
$consumer_secret = "EkGfj1eypSmsHPRvPns6OdSEP5RoaKa6SAc0OCoVCVW6K0S828";
$access_token= "428477424-IUTSOyIco47FTH1elOy8S4rtGfQpt7MmOVIHzWH8";
$access_token_secret= "h9Rf55sdbvpcnn0PMY0nByTvo9pqvPKfEOkAHtdL8V12g";

require "vendor/autoload.php";

use Abraham\TwitterOAuth\TwitterOAuth;



$conn = new TwitterOAuth($consumer_key, $consumer_secret, $access_token, $access_token_secret);
$content = $conn->get("account/verify_credentials");


$statuses = $conn->get("statuses/home_timeline", ["count" => 1, "exclude_replies" => true]);

?>

<!-- <a class="twitter-timeline"
    data-aria-polite="assertive"
    data-lang="en" data-chrome="nofooter noheader"
    data-tweet-limit="3"
    data-height="100"
    data-dnt="true"
    data-link-color="#2B7BB9"
    href="https://twitter.com/?ref_src=twsrc%5Etfw"
    ></a> -->
