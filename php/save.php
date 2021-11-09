<?php


// print_r($_POST);

include "connection.php";

if (isset($_POST))
 {

   $fname    = $_POST['fname'];
   $lname    = $_POST['lname'];
   $email    = $_POST['email'];
   $password = $_POST['password'];
   $num      = $_POST['num'];
   $address  = $_POST['address'];
   $gender   = $_POST['gender'];

   $insqry = "INSERT INTO register (fname, lname, email, password, num, gender, address )
   			  VALUES('$fname', '$lname', '$email', '$password', '$num', '$gender',
   			  '$address')";

   			 
   	$data = mysqli_query($conn,$insqry);

   	if ($data>0) {
   		 	echo "Register SuccessFully";
   		 }	 
   		 else{
   		 	echo "Error To Register";
   		 }
}

 ?>