<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<p id="demo"></p>
<!-- <script type="text/javascript">
	var obj = {
		"array":["santosh","kumar",23]
	}

	document.write(obj.array);
</script> -->

<!-- <script>

	Array Object/Json Object

	var jsonobj = {
		"cars":[
				{"name":"honda"},
				{"name":"skoda"},
				{"name":"audi"}
		       ]
	}

	 document.write(jsonobj.cars[0].name);
</script>
 -->
<!-- <script>

	var myObj, i, result = "";

	myObj = {
		"name":"santosh",
		"city":"mohali",
		"cars":["Audi","Skoda","Verna"]
	};

	for(i=0; i<myObj.cars.length; i++){

		result += myObj.cars[i]+"<br>";
	}
	document.getElementById('demo').innerHTML = result;
</script> -->
<!-- <script type="text/javascript">
	var myObj, i, j, result = "";

	myObj = {
		"name":"santosh",
		"city":"mohali",
		"cars":[
		{"name":"Skoda", "modal":[2011,2012,2013,2014]},
		{"name":"Verna", "modal":["X1","X2","X3","X4"]},
		{"name":"Audi", "modal":["A","B","C","D"]}
		]
	}
		for(i in myObj.cars){
			result += myObj.cars[i].name+"<br>";
			for(j in myObj.cars[i].modal){

			result += myObj.cars[i].modal[j]+"<br>";
		}
		}
		

		document.getElementById('demo').innerHTML = result;
</script> -->

<!-- //JSON Php  -->

 <?php
$myArr = array("John", "Mary", "Peter", "Sally");

$myJSON = json_encode($myArr);

echo $myJSON;
?>
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