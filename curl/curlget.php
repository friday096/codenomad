<?php

$ch = curl_init();

$url = 'http://localhost/codenomad/api-php-rest/api_fetch_all.php';	
// $url = 'https://reqres.in/api/users?page=2';	
curl_setopt($ch, CURLOPT_URL, $url);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($ch);

if($error = curl_error($ch)){
	echo $error;
}else{
	$decode = json_decode($response, true);
	echo "<pre>";
    print_r($decode);

}

curl_close($ch);

?>