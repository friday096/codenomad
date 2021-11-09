<?php

$conn = mysqli_connect('localhost','root','','student');
$qry = "SELECT * FROM register";
$result = mysqli_query($conn,$qry);

$json_arr = array();

while($row= mysqli_fetch_assoc($result))
{
	$json_arr[] = $row;
}

echo json_encode($json_arr);

?>
