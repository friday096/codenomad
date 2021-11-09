<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<p id="demo"></p>
<p id="demo1"></p>
<button type="button" onclick="load();">Click</button>
<script type="text/javascript">
	//Receiving Data
//If you receive data in JSON format, you can convert it into a JavaScript object:

	// var obj = '{"name":"John","age":24}';
	// var obj1 = JSON.parse(obj);
	// document.getElementById('demo').innerHTML = obj1.name+' '+obj1.age;
</script>
<script type="text/javascript">
	//Storing Data
	// var obj = {name:"Karan Doe", age:25, city:"Delhia"};
	// var result = JSON.stringify(obj);	
	// localStorage.setItem("testJSON",result);

	// // Retrive Data
	// var text = localStorage.getItem("testJSON");
	// var obj1 = JSON.parse(text);
	// document.getElementById('demo1').innerHTML = obj1.name +' '+ obj1.city;


	// var car = {type:"steel",modal:2018,color:"green"}
	// var json = JSON.stringify(car);
	// document.getElementById('demo1').innerHTML = json;


// function load() {
//   var xhttp = new XMLHttpRequest();
//   xhttp.onreadystatechange = function() {
//     if (this.readyState == 4 && this.status == 200) {
//       document.getElementById("demo").innerHTML =
//       this.responseText;
//     }
//   };
//   xhttp.open("GET", "java_form.php", true);
//   xhttp.send();
// }

var obj = {"name":"john", "age":21,"city":"mk"}
for(var x in obj){
	document.getElementById('demo').innerHTML += x  +"<br>";
}

var myObj = {
	"name":"sk",
	"age":20,
	"car":{
		"car1":"my",
		"car2":"din"
	}
}
document.getElementById('demo1').innerHTML += myObj.name + "<br>";
//or
document.getElementById('demo1').innerHTML += myObj.car["car2"];

</script>

</script>
</body>
</html>