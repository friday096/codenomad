<?php

define("DB_SERVER","localhost");
define("DB_USER","root");
define("DB_PASS", "");
define("DB_NAME", "student");

$conn = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME)or die("Cannot Connect to the Server");


?>