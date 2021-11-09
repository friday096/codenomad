<!DOCTYPE html>
<html>
<head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script>
    $(document).ready(function(){
      $("#hide").click(function(){
        $("#demo").hide(1000);
      });
          $("#show").click(function(){
            $("#demo").show(1000);
          });
    });
  </script>
</head>
<body>
    <p id="demo"> Hello I am jQuery </p>
    <button id="hide"> Hide </button>
    <button id="show"> Show </button>
</body>
</html>
