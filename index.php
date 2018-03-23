<?php
// Copyright 2007 Facebook Corp. ÊAll Rights Reserved. 
// 
// Application: Virtual March Against Card Check
// File: 'index.php' 
// Ê This is a sample skeleton for your application. 
// 

require_once 'facebook.php';

$appapikey = 'XXXX';
$appsecret = 'XXXX';
$facebook = new Facebook($appapikey, $appsecret);
$user_id = $facebook->require_login();

// Greet the currently logged-in user!
echo "<p>Hello, $user_id"; ?>!</p><?

echo "<fb:name uid=\"$user_id\" useyou=\"false\" />";
//echo "[$user_id]<br />";

// Print out at most 25 of the logged-in user's friends,
// using the friends.get API method
echo "<p>Friends:";
$friends = $facebook->api_client->friends_get();
$friends = array_slice($friends, 0, 200);

foreach ($friends as $friend)
	{
	echo "<br>$friend";
	}
?></p>

