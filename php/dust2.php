<?php
$myfile = fopen("html.txt", "w") or die("Unable to open file!");
fwrite($myfile, $txt);
$txt = "Rohit Gurunath Sharma is an Indian international cricketer who plays for Mumbai in domestic cricket and captains Mumbai Indians in the Indian Premier League as a right-handed batsman and an occasional right-arm off break bowler. He is the vice-captain of the Indian national team in limited-overs formats.";
fwrite($myfile, $txt);
fclose($myfile);
?>