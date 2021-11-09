<?php

$conn = mysqli_connect('localhost',"root","","student") Or die("Connection Failed");

$qry = "SELECT * FROM register";
$result = mysqli_query($conn,$qry) or die ("SQL Query Failed");

$data = mysqli_fetch_all($result, MYSQLI_ASSOC);

echo json_encode($data);

?>