<!DOCTYPE html>
<html>
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
	<p id="demo"></p>
<script type="text/javascript">
	
	// $.getJSON(
	// 	"fetch_json.php",
	// 	function(data){
	// 		$.each(data,function(key,value){
 //           $("#demo").append(value.id+ " "+value.fname+ " "+value.lname+ "<br>");
	// 		});
	// 	}
	// 	);

	$.ajax({
		url:"fetch_json.php",
		type:"POST",
		// data:{id:2},
		dataType:"JSON",
		success:function(data){
			$.each(data,function(key,value){
           $("#demo").append(value.id+ " "+value.fname+ " "+value.lname+ "<br>");
			});
		}
	});
</script>
</body>
</html>