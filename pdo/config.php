<?php
//Create Connection
$conn = new PDO("mysql:host=localhost; db_name=api;", "root", ""); //mysql is a driver name;
if ($conn) {
   echo "Connected PDO Connection";
}
?>