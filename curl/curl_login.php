<?php

$username = 'john@gmail';
$password = '12345';
$loginUrl = 'http://localhost/codenomad/php/session_form/login.php';

//init curl
$ch = curl_init();

//Set the URL to work with
curl_setopt($ch, CURLOPT_URL, $loginUrl);

// ENABLE HTTP POST
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');

//Set the post parameters
curl_setopt($ch, CURLOPT_POSTFIELDS, 'user='.$username.'&& pass='.$password);

//Handle cookies for the login
// curl_setopt($ch, CURLOPT_COOKIEJAR, 'cookie.txt');

//Setting CURLOPT_RETURNTRANSFER variable to 1 will force cURL
//not to print out the results of its query.
//Instead, it will return the results as a string return value
//from curl_exec() instead of the usual true/false.
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

//execute the request (the login)
 curl_exec($ch);

//the login is now done and you can continue to get the
//protected content.

//set the URL to the protected file
// curl_setopt($ch, CURLOPT_URL, 'http://www.example.com/protected/download.zip');

//execute the request
// $content = curl_exec($ch);

curl_close($ch);

?>