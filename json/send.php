<?php


if (isset($_GET['val']) && !empty($_GET['val']))
 {
	$showData = json_decode($_GET['val']);

	echo $showData->name."<br>";

	echo $showData->city;
}





?>