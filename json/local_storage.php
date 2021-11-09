<!DOCTYPE html>
<html>
<body>

<h2>Store and retrieve data from local storage.</h2>

<p id="demo"></p>

<script>
var myObj, myJSON, text, obj;

// Storing data:
myObj = { name: "John", age: 31, city: "New York" };
myJSON = JSON.stringify(myObj);
localStorage.setItem("testJSON", myJSON);

// Retrieving data:
text = localStorage.getItem("testJSON");
obj = JSON.parse(text);
document.getElementById("demo").innerHTML = obj.name;
</script>

</body>
</html>

ABBOTSBURY 2176, SYD METRO
ABBOTSFORD 2046, SYD METRO
ACACIA GARDENS 2763, SYD METRO
ACACIA GARDENS 2763, SYD METRO
ALEXANDRIA 2015, SYD METRO
ALEXANDRIA 2020, SYD METRO
ALFORDS POINT 2234, SYD METRO
ALLAMBIE HEIGHTS 2100, SYD METRO
ALLAWAH 2218, SYD METRO
ANNANDALE 2038, SYD METRO
ARNCLIFFE 2205, SYD METRO
            