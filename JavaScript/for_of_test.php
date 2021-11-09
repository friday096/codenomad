<html>
<!-- Definition: ES6 introduces a new for-of loop which allows us to iterate over arrays or other iterable objects
 (e.g. strings) very easily. Also, the code inside the loop is executed for each element of the iterable object. -->
<body>
<script>
var cars = ["Audi", "Demo", "Skoda"];
var temp;
for(temp of cars){
  document.write(temp + "<br>");
}
</script>
<br>
<script>
  var letters = ["a","b","c","d"];
  for(var demo of letters){
    console.log(demo);
    document.write(demo + "<br>");
  }
</script>
<br>
  <script>
      var name = ["Santosh Kumar"];
      for(var nick of name){
        console.log(nick);
        document.write(nick + "<br>");
      }
  </script>
</body>
</html>
