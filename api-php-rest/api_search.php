<?php
include "config.php";

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');// Optional

$id_data = json_decode(file_get_contents("php://input"), true);

$search_val = $id_data['search'];

$search_val = isset($_GET['search']) ?  $_GET['search'] : die(); // When USed GEt Method then 7 & 9 Line comment

$qry = "SELECT * FROM student WHERE name LIKE '%{$search_val}%'";
$result = mysqli_query($conn,$qry) or die ("SQL Failed");

if (mysqli_num_rows($result)>0) {
	
	$data = mysqli_fetch_all($result, MYSQLI_ASSOC);

	echo json_encode($data);
}else{

	echo json_encode(array('message'=> 'No Search Found', 'status'=>'false'));
}

?>