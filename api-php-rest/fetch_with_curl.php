<?php
// curl_init(); // Initialize
// curl_setopt(); // Curl Data Send && Takes 3 Parameter
// curl_exec(); // Execute
// curl_close(); // Close

$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, 'http://localhost/codenomad/php-rest-api/api_fetch_all.php');
curl_exec($curl);
curl_close($curl);




?>