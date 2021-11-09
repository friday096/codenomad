<!DOCTYPE html>
<html>
<body>

<h2>JavaScript Array Methods</h2>

<p id="demo1"></p>
<p id="demo2"></p>
<p id="demo3"></p>
<p id="demo4"></p>
<p id="demo5"></p>
<script>

var num = [1,2,3,4];
// document.getElementById("demo1").innerHTML = num;
window.alert(num);
		num[10] = 5;
    document.getElementById('demo2').innerHTML = num;

		let fruits = ["Apple", "Orange", "Plum"];

window.alert( fruits.length ); // 3
</script>

<script>

var hello;
hello = () => {
		return "I m here";
}
document.getElementById("demo3").innerHTML = hello();

</script>

<script>

class Car{
			constructor(name, year){
				this.name = name;
				this.year = year;
			}
}

obj = new Car("Ford", 2020);
document.getElementById("demo4").innerHTML = obj.name+" "+obj.year;

</script>

<script>
// The join() method also joins all array elements into a string.

var fruit = ["Banana", "Orange", "Apple", "Mango"];
document.getElementById("demo5").innerHTML = fruit.join(" * ");
</script>
</body>
</html>
