<!DOCTYPE html>
<html>
<head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <!-- <script>
    $(document).ready(function(){
      $('button').click(function(){
        $.get('demo_ajax.php', function(data, status){
          alert("Data: " + data + "Status:  " + status);
        });
      });

    });
   </script> -->

   <script>
    $(document).ready(function(){
      $('button').click(function(){
        $.post("demo.php",
        {
          name: "San",
          city: "Moh"
        },
        function(data,status){
          alert("Data: " + data + "Status: " + status);
        });
      });
    });
   </script>
</head>
<body>
  <div id="div1"><h2>Let jQuery AJAX Change This Text</h2></div>

  <button>Get External Content</button>
</body>
</html>
