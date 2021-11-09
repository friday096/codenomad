<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link rel="stylesheet" href="../css/style1.css">
  <script>
        $(document).ready(function(){
          $("#button1").click(function(){
            $("#2017").hide();
            $("#2018").hide();
            $("#2019").hide();
            $("#2016").show();
          });
          $("#button2").click(function(){
            $("#2016").hide();
            $("#2018").hide();
            $("#2019").hide();
            $("#2017").show();
          });
          $("#button3").click(function(){
            $("#2016").hide();
            $("#2017").hide();
            $("#2019").hide();
            $("#2018").show();
          });
          $("#button4").click(function(){
            $("#2016").hide();
            $("#2017").hide();
            $("#2018").hide();
            $("#2019").show();
          });
        });
  </script>
</head>
<body>
  <button type="button" id="button1"class="btn button1"> 2016 </button>
  <button type="button" id="button2"class="btn button2"> 2017 </button>
  <button type="button" id="button3"class="btn button3"> 2018 </button>
  <button type="button" id="button4"class="btn button4"> 2019 </button>
      <div class="year">
        <center>
        <p id="2016"> Hello I am Python 2016 </p>

        <p id="2017" style="display:none"> Hello I am jQuery 2017 </p>

        <p id="2018" style="display:none"> Hello I am PHP 2018     </p>

        <p id="2019" style="display:none"> Hello I am Laravel 2019 </p>
      </center>
      </div>

</body>
</html>
