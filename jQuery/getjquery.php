<!DOCTYPE html>
<html>
<head>
  <!-- GET jQuery Example -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script>
    $(document).ready(function(){
      $("#button1").click(function(){
          alert("text: " + $("#demo").text());
      });
      $("#button2").click(function(){
        alert("HTML:" + $("#demo").html());
      });
      $("#button3").click(function(){
        alert("Value: " + $("#input").val());
      });
    });
  </script>
</head>
<body>

  <p id="demo">This is some <b>bold</b> text in a paragraph.</p>
  <input type="text" id="input" value=" Hello I am jQuery">
<button id="button1"> Text </button>
<button id="button2"> HTML </button>
<button id="button3"> Value </button>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
