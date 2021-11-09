<?php


// print_r($_POST);

include "connection.php";

if (isset($_GET))
 {
   $id = $_GET['edit'];
   $fname    = $_POST['fname'];
   $lname    = $_POST['lname'];
   $email    = $_POST['email'];
   $password = $_POST['password'];
   $num      = $_POST['num'];
   $address  = $_POST['address'];
   $gender   = $_POST['gender'];

   $upqry = "SELECT * FROM student WHERE id='$id'"

   			 
   	$data = mysqli_query($conn,$insqry);

   	if ($data>0) {
   		 	echo "Register SuccessFully";
   		 }	 
   		 else{
   		 	echo "Error To Register";
   		 }
}

 ?>