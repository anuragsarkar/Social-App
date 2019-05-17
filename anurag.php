<?php

    require_once 'twitterauth.php';


    $consumer_key = "1";
	$consumer_secret = "1";
	$access_key = "1";
    $access_secret = "1";
    

    $connection = new TwitterOAuth($consumer_key, $consumer_secret, $access_key, $access_secret );
    $content = $connection->get('account/verify_credentials');

    $connection->post('statuses/update', array('status' => 'My twitter Bot for Status!'));

?>