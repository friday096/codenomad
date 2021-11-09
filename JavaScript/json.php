<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
  <p id="object"> </p>
  <p id="stringy"> </p>
  <p id="array"> </p>
  <script>
  // Def: JSON.parse() to convert the string into a JavaScript object:
  // Example (String Convert Into Object);

  var text = '{"student":[' +
'{"name":"DK","age":"21" },' +
'{"name":"Sk","age":"23" },' +
'{"name":"PK","age":"25" }]}';

      obj = JSON.parse(text);
      document.getElementById("object").innerHTML = "Parse Output= " +
      obj.student[1].name+ " "+ obj.student[1].age;
  </script>

  <script>
  // Def: JSON.stringify() to convert it into a string.
  // Example (Object Convert Into String);

  var obj = {name:"SK", age:"21", city: "mohali"};
  var json = JSON.stringify(obj);
  document.getElementById('stringy').innerHTML = "StringiFy Output= " +json;
  </script>

  <script>
  // Def: JSON.stringify() to convert it into a string.
  // Example (Object Convert Into String);

  var arr = ["SK", "DK", "PK", "MK", "CSK"];
  var json = JSON.stringify(arr);
  document.getElementById('array').innerHTML = "String in array Output= "+json;
  </script>
</body>
</html>


<students>
<student>
<name>Hello </name> <age> 25 </age>
<name>Hello </name> <age> 25 </age>
</student>
</students>