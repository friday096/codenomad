<?php
// $url = "http://localhost/codenomad/api-php-rest/api_insert.php";
 $url = "https://reqres.in/api/users";
 $data_array = array( 
    "name"=> "Jordan",
    "age"=> "25",
    "city"=>"Pennisvilla"
);

$data = http_build_query($data_array);

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($ch);

if($error = curl_error($ch)){
	echo $error;
}else{
	$decode =json_decode($response,true);
		var_dump($decode);
	// foreach($decode as $key => $value) {
	// 	echo $key.': ' .$value.'<br>';
	// }
}
curl_close($ch);
?>