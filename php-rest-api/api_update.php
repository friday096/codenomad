<?php
header('Content-Type: application/json');//Mandatory
header('Access-Control-Allow-Origin: *');// Optional
header('Acess-Control-Allow-Method:PUT');
header('Access-Control-Allow-Headers:Access-Control-Allow-Headers,Content-Type: application/json,Content-Type: application/json, Authorization, X-Requested-With ');

$id_data = json_decode(file_get_contents("php://input"), true);

$id   = $id_data['sid'];
$name = $id_data['sname'];
$age  = $id_data['sage'];
$city = $id_data['scity'];

include "config.php";

$qry = "UPDATE  student SET name='{$name}', age='{$age}', city='{$city}' WHERE id = {$id}";

if (mysqli_query($conn, $qry)) {
	
	echo json_encode(array('message'=> 'Record Updated', 'status'=>'true'));
}else{

	echo json_encode(array('message'=> 'No Record Updated', 'status'=>'false'));
}

?>