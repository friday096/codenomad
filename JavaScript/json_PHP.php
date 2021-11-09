<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
class myObj{

}

$myObj= new myObj();
$myObj->name = "John";
$myObj->age = 30;
$myObj->city = "New York";

$myJSON = json_encode($myObj);

echo $myJSON;
?>
</body>
</html>