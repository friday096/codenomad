<!DOCTYPE html>
<html>
<body>
  <p id="demo">  </p>
  <p id="demo2"> </p>
  <p id="demo3"> </p>
  <p id="demo4"> </p>

  <!-- <script>
  // Reverse Without any Function
    var str = "Hello My Name Is Santosh Kumar. I  LIVE in Mohali!. I work in Codenomad Company";
    var rev = "";
            for (var i = str.length-1; i>=0; i--) {
              rev += str[i];
            }
             console.log(rev);
            document.getElementById('demo').innerHTML = "Reverse Without any Function "+rev;
  </script> -->
  <br>
  <!-- <script>
  // Reverse Without any Function

    var string = "Hello My Name is Santosh Kumar";
     var arr = "";
     for (var i = 0; i < string.length; i++) {
       arr += string[i];
     }
    console.log(arr);
    document.getElementById('demo2').innerHTML = arr[0];

  </script> -->
  <br/>
  <script>
  // Push Odd & Even(String) Without any Function
      var num = [1,2,3,4,5,6,7,8,9,10];
      for (var i = 0; i < num.length; i++) {
          if ((num[i] % 2) !=1) {
              num[i] = "Santosh";
            }
          }
      document.getElementById('demo3').innerHTML = num;
    </script>
    <!-- <script>
    // Pop Without any Function
        var num1 = [1,2,3,4,5,6,7];
        num1[4] = 8;
        window.alert(num1);
        var last = num1[num1.length-1];
        last= [num1];
        document.write(last);
      </script> -->
</body>
</html>
