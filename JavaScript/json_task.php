<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<p id="demo"></p>
<!-- 	<script type="text/javascript">
	var x="";
	var myObj = {
			"name":"John",
			"age":21,
			"car":[2019,2020,2021]
	};
	for(var i=0; i<myObj.car.length; i++)
	{

		 x += myObj.car[i] + "<br>";

	}
		document.getElementById('demo').innerHTML = x;
</script> -->
<!-- <script type="text/javascript">
	var i, j, x = "";

	var myObj = {
			"name":"John",
			"age":21,
			"car":[
				{"name":"audi","modals":[2019,2020,2021]},
				{"name":"swift","modals":[1,2,3]},
				{"name":"verna", "modals":["X2","X3","X4"]}
			]
	};
		for(i in myObj.car){
			x += "<h2>"+myObj.car[i].name+"</h2>"+"<br>";
		 for(j in myObj.car[i].modals){
		 	x += myObj.car[i].modals[j]+"<br>";
		 }
		}
		document.getElementById('demo').innerHTML = x;
</script> -->

<script>
var xmlhttp = new XMLHttpRequest();

xmlhttp.onreadystatechange = function() {
  if (this.readyState == 4 && this.status == 200) {
   var myObj = JSON.parse(this.responseText);
      document.getElementById("demo").innerHTML = myObj.name;
  }
};
xmlhttp.open("GET", "json_PHP.php", true);
xmlhttp.send();
</script>
</body>
</html>