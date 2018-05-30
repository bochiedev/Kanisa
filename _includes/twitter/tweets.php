

    <?php

$consumer_key = "";
$consumer_secret = "";
$access_token= "";
$access_token_secret= "";

require "twitteroauth/autoload.php";

use Abraham\TwitterOAuth\TwitterOAuth;



$conn = new TwitterOAuth($consumer_key, $consumer_secret, $access_token, $access_token_secret);
$content = $conn->get("account/verify_credentials");


$statuses = $conn->get("statuses/home_timeline", ["count" => 1, "exclude_replies" => true]);

?>

<a class="twitter-timeline"
    data-aria-polite="assertive"
    data-lang="en" data-chrome="nofooter noheader"
    data-tweet-limit="3"
    data-height="100"
    data-dnt="true"
    data-link-color="#2B7BB9"
    href="https://twitter.com/?ref_src=twsrc%5Etfw"
    ></a>
