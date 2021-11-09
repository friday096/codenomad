<?php
$x=10;
$y=20;
if($x==10 and $y==20) {
echo "hlwww";
}

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<script type="text/javascript">
	var obj ={
		"name":"santosh",
		"age":21,
		"city":"mohali"
	};
	// document.write(obj.city);

	//Modify Or Change Value

	obj.age = 23;
	obj.city = "Jammu";

	//Add New Key & Value
	obj.color = "red";

	// Delete Key Value PAir

	delete obj.color;

// Used For Loop
	for (result in obj){
	document.write(obj[result]+"<br>");

	}
</script>
</body>
</html>