<?php

$ch = curl_init();

// $url = 'http://localhost/codenomad/api-php-rest/api_fetch_all.php';	
$url = 'https://reqres.in/api/users?page=2';	
$file = fopen('abc.txt', 'w');

curl_setopt($ch, CURLOPT_URL, $url);

curl_setopt($ch, CURLOPT_FILE, $file);
	
$response = curl_exec($ch);

if($e = curl_error($ch)){
	echo $e;
}

fclose($file);

curl_close($ch);

?>