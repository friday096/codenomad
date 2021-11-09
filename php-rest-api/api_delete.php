<?php
include "config.php";

header('Content-Type: application/json');//Mandatory
header('Access-Control-Allow-Origin: *');// Optional
header('Acess-Control-Allow-Method:DELETE');
header('Access-Control-Allow-Headers:Access-Control-Allow-Headers,Content-Type: application/json, Authorization, X-Requested-With');

$data = json_decode(true);

$student_id = $data['sid'];

$qry = "DELETE FROM student WHERE id = {$student_id}";

if (mysqli_query($conn,$qry)) {
	
	echo json_encode(array('message'=> 'Record Deleted', 'status'=>'true'));

}else{

	echo json_encode(array('message'=> 'No Record Delete', 'status'=>'false'));
}

?>