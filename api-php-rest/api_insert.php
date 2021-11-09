<?php
header('Content-Type: application/json');
header('Acess-Control-Allow-Origin: *');// Optional
header('Acess-Control-Allow-Method:POST');
header('Acess-Control-Allow-Headers:Acess-Control-Allow-Headers, Content-Type: application/json, Authorization, X-Requested-With ');

$id_data = json_decode(file_get_contents("php://input"), true);

$name = $id_data['name'];
$age  = $id_data['age'];
$city = $id_data['city'];

include "config.php";

$qry = "INSERT INTO student(name,age,city) VALUES('{$name}','{$age}','{$city}')";

if (mysqli_query($conn, $qry)) {
	
	echo json_encode(array('message'=> 'Record Inserted', 'status'=>'true'));
}else{

	echo json_encode(array('message'=> 'No Record Inserted', 'status'=>'false'));
}

?>