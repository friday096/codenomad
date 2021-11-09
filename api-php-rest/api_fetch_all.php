<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');// Optional
include "config.php";

$qry = "SELECT * FROM student";
$result = mysqli_query($conn,$qry) or die ("SQL Failed");

if (mysqli_num_rows($result)>0) {
	
	$data = mysqli_fetch_all($result, MYSQLI_ASSOC);

	echo json_encode($data);
}else{

	echo json_encode(array('message'=> 'No Record Found', 'status'=>'false'));
}

?>