<?php
// Fetch API
   $url = 'http://localhost/codenomad/api-php-rest/api_fetch_all.php';

//Fetch Object

   $data = [
	      'result'=> 'user'
        ];

//Intialize curl

  $curl = curl_init($url);    

// Set the CURLOPT_RETURNTRANSFER option to true

   $curl_setopt($curl, CURLOPT_RETURNTRANSFER, true); 

// Set the CURLOPT_POST option to true for POST request

   $curl_setopt($curl, CURLOPT_POST, true);

//Set the request data as JSON using json_encode function

  $curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data));

//Set custom headers for RapidAPI Auth and Content-Type header

  curl_setopt($curl, CURLOPT_HTTPHEADER,[

'CURL-RestAPI-Host:',
'CURL-RestAPI-Host:[]',
'Content-Type: application/json'
]);

// Execute cURL request with all previous settings
   $response = curl_exec($curl);

// Close cURL session
   curl_close($curl);

?>