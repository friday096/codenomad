<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<script type="text/javascript">
	
	// How to send json data and get data

	var sendData = {"name":"santosh","city":"mohali"};
	var changeData = JSON.stringify(sendData);
	console.log(changeData);
	window.location = "send.php?val="+changeData;
</script>
</body>
</html>



