<html>
  <body>
    <p id="while"> </p>

    <script>
      var result = "";
      var x = 1;
      while (x <=10){
        result += x+" "+"<br>";
        document.write(x);
        x++;
      }
      document.getElementById('while').innerHTML = result;

    </script>

    <script>
          var i = 3;
          do {
            document.write(i);
            i++;
          } while (i < 10);
    </script>
  </body>
</html>
