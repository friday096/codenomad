<!DOCTYPE html>
<html>
<head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <!-- <script>
      $(document).ready(function(){
        $('button').on("click", function(){
          var value = $("button").attr("name");
          $("#demo").text(value);
            alert(value);
        });
      });
</script> -->
<script>
      $(document).ready(function(){
        $("button").click(function(){
          alert($("#dekho").attr("name"));
        });

      });
</script>
	<title></title>
</head>
<body>
  <p id="demo"> </p>
      <button type="submit" id="dekho" name="santosh"> Submit </button>
</body>
</html>
