<!DOCTYPE html>
<html>
<head>
	<script>
	function Myform()
	{
		var fname =   document.getElementById('fname').value;
		              document.getElementById('first').innerHTML  = fname;

		var lname =   document.getElementById('lname').value;
								  document.getElementById('second').innerHTML = lname;

		var email =   document.getElementById('email').value;
		 						  document.getElementById('third').innerHTML  = email;

		var number =  document.getElementById('number').value;
								  document.getElementById('fourth').innerHTML = number;

		var gender = document.getElementById('male').value;
								 document.getElementById('fifth').innerHTML  = gender;

		var gender = document.getElementById('female').value;
								 document.getElementById('sixth').innerHTML  = gender;

								 alert("First Name:"+ fname +"     "+"Last Name:"+ lname +"     "+ "Email ID:"+email+
								       "  "+ "Phone Number:"+number+"  "+"Gender:"+gender);


	}
	</script>
</head>
<body>
	<p id="first"> </p>
	<p id="second"> </p>
	<p id="third"> </p>
	<p id="fourth"> </p>
	<p id="fifth"> </p>
	<p id="sixth"> </p>
	<form>
		First Name: <input type="text" id="fname"> <br> <br>
		Last  Name: <input type="text" id="lname"> <br> <br>
		Email ID: <input type="email" id="email"> <br> <br>
		Phone Number: <input type="number" id="number"> <br> <br>
		Gender: <input type="radio" id="male" value="Male"> Male
						<input type="radio" id="female" value="Female"> Female <br> <br>
		<button onclick="Myform();"> Submit </button>
	</form>
</body>
</html>
