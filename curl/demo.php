<?php
// curl_init(); // Initialize
// curl_setopt(); // Curl Data Send && Takes 3 Parameter
// curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
// curl_exec(); // Execute
// curl_close(); // Close

$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, 'http://localhost/codenomad/api-php-rest/api_fetch_all.php');
curl_exec($curl);
curl_close($curl);
 
 echo "<br><br><br>";

       // create curl resource
        $ch = curl_init();
 
        // set url
        curl_setopt($ch, CURLOPT_URL, "http://localhost/codenomad/api-php-rest/api_fetch_all.php");
 
        //return the transfer as a string
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
 
        // $output contains the output string
        $output = curl_exec($ch);
 
        print_r($output);
        // close curl resource to free up system resources
        curl_close($ch);     


?>