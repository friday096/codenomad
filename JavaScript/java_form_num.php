<!DOCTYPE html>
<html>
<head>
	<script type="text/javascript">
		function Myform()
		{
			var phone = document.getElementById('num');

			if (phone.value == "" || phone.value == null)
			 {
			 	alert("Please Fill Number");
			 	return false;
			 }

				 if(phone.value.length < 10 || phone.value.length > 10)
				 {
				 	alert("Please Enter Only 10 Numbers");
				 	return false;
				 }
				 if(phone.value == [])

					 	alert("Number is Valid");
					 	return true;
		}
	</script>
</head>
<body>
<form method="post" name="form">
	Phone Number: <input type="text" id="num">
	<button type="submit" onclick="Myform();"> Submit</button>

</form>
</body>
</html>
