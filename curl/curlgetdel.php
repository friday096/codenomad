<?php

 $url = 'http://localhost/codenomad/api-php-rest/api_delete.php';	
// $url = 'https://reqres.in/api/users/2';	
$data_array = array(
    "id"=> 2
);

$data = http_build_query($data_array);
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, ['content-type:application/json']);
$response = curl_exec($ch);

if($e = curl_error($ch)){
	echo $e;
}else{
	$decode = json_decode($response, true);
	echo "<pre>";
    print_r($decode);

curl_close($ch);

?>