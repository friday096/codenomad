<?php

// curl_init(); // Initialize
// curl_setopt(); // Curl Data Send && Takes 3 Parameter
// curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
// curl_exec(); // Execute
// curl_close(); // Close

$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, 'https://www.google.com/');
curl_exec($curl);
curl_close($curl);

// Image Download With Curl
// We USe tho methods Curl & FIle Handling;

// $url = "https://cdn.pixabay.com/photo/2016/11/14/04/45/elephant-1822636_960_720.jpg";
// $img = "img.jpg";
// $fimg = fopen($img,'w+');
// $ch = curl_init($url);
// curl_setopt($ch, CURLOPT_FILE, $fimg);
// // curl_setopt($ch, CURLOPT_TIMEOUT, 1000); // Optonal For Giving Time
// curl_exec($ch);
// curl_close($ch);
// fclose($fimg);
?>