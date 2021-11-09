<!DOCTYPE html>
<html>
<head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script>
      $(document).ready(function(){
          $("button").click(function(){
            var input  = $("#fname").val();
            var input2 = $("#lname").val();
              $("#demo").append("First Name:" +input+" " + "Last Name:"+ input2+" ");
            //  $("#test").append(input2);
              return false;
          });
      });
  </script>
</head>
<body>
  <form method="post">
First Name: <input type="text" id="fname">
Last Name: <input type="text" id="lname">

  <button> Submit </button>
</form>
<p id="demo"> </p>
<p id="test"> </p>
</body>
</html>
