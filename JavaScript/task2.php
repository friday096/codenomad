<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
  <p id="demo"> </p>
	  <p id="demo1"> </p>
		 <p id="demo2"> </p>
  <!-- <script>
      var cars, carlen, temp, i;

      cars = ["Skoda", "Audi", "Duster"];
      carlen = cars.length;
      temp = "<ul>";
      for (i = 0; i < carlen; i++) {
        temp += "<li>"+ cars[i] + "</li>";
      }
      temp += "</ul>";
      document.getElementById('demo').innerHTML = temp;
  </script> -->

  <!-- <script>
      var nums = [5,12,25,65,1,87];
        delete nums[5];
      document.getElementById('demo').innerHTML = nums;
  </script> -->

	<!-- <script>
	// Sum of Arrays
			var sum = 0;
			var nums = [20,30,40];
			for (var i = 0; i < nums.length; i++) {
				sum = sum+nums[i];
			}
			document.getElementById('demo').innerHTML = sum;
	</script> -->

	<script>
	var num = 2;
	var result = [];
			for (var i = 0; i <=10; i++) {
				document.getElementById('demo1').innerHTML += num*i + "<br/>";

				if (i % 5 == 0 ) {
					 result = [i];
					console.log(result);
					document.getElementById('demo2').innerHTML = [i];
				}
			}
			var i = 2;
			var k = i++ + ++i + i++;
			document.write(k);
				console.log(k);
				// var k = i++ + ++i + i++;

	</script>
</body>
</html>
