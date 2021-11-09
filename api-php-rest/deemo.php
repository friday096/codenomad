<?php

$conn = mysqli_connect('localhost','root','','api');

$qry = "SELECT * FROM student";

$data = mysqli_query($conn,$qry);


if (mysqli_num_rows($data)> 0) 
{
	$result = mysqli_fetch_all($data, MYSQLI_ASSOC);
	echo json_encode($result);

}else
{
	echo json_encode(array('message'=>'Eror To Found','return'=>'false'));
}


?>



