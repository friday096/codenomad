<?php

$cookie_name = 'Cook';
$cookie_value = "My favrt cooking";

setcookie($cookie_name,$cookie_value, time()+(86400*30));

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
if (!isset($_COOKIE[$cookie_name])) {
	echo "Cookie Name = ".$cookie_name." is not set <br/>";
}
else{
	echo "Cookie = ".$cookie_name." is seted <br/>";
	echo "Cookie Value = ".$cookie_value."; Ohh yeah";
}
?>
</body>
</html>
<?php
setcookie("test_cookie", "test", time() + 3600, '/');
?>
<html>
<body>

<?php
if(count($_COOKIE) > 0) {
  echo "Cookies are enabled.";
} else {
  echo "Cookies are disabled.";
}
?>

</body>
</html>