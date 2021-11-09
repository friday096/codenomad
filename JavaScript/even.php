<!DOCTYPE html>
<html>
  <body>
    <p id="even"> </p>
    <p id="odd"> </p>
    <p id="evenf"> </p>
    <p id="oddf"> </p>
    <!-- <script>
          var nums = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20];
          var even = [];
          var odd = [];
          for (var i = 0; i < nums.length; i++)
           {
                if ((nums[i] % 2 ) !=1)
                 {
                   even.push(nums[i]);
            }
            else {
                  odd.push(nums[i]);
            }
          }
          document.getElementById('even').innerHTML = even;
          document.getElementById('odd').innerHTML = odd;

    </script> -->
    <script>
    // Even & Odd Without Using Function
    var arr = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20];
    var evenf = [];
    var oddf = [];
    for (var i = 0; i < arr.length; i++)
     {
          if ((arr[i] % 2) !=1) // Or (arr[i] %2 == 0)
           {
            evenf[evenf.length] = arr[i];
          }
          else {
            oddf[oddf.length] = arr[i];
          }
    }
    document.getElementById('evenf').innerHTML  = evenf;
    document.getElementById('oddf').innerHTML  = oddf;
    </script>
  </body>
</html>
