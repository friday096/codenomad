<!-- The json_encode() function is used to encode a value to JSON format. -->
<!-- The json_decode() function is used to decode a JSON object into a PHP object or an associative array.-->


<?php

$arr = array("Peter"=>35, "Ben"=>25, "Ten"=>42);

echo json_encode($arr);	

?> 

<?php
$arr1 = array('Hilo','Vilo','Milo');

echo json_encode($arr1);
?>

<?php
$jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';

var_dump(json_decode($jsonobj));

?>

<?php
$jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';

$arr2 = json_decode($jsonobj);

foreach ($arr2 as $key => $value) {
	
	echo $key." => ".$value."<br/>";
}

?>