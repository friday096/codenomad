<!DOCTYPE html>
<html>
<head>
			<title></title>
</head>
<body>
  <p id="asc"> Ascending </p>
  <p id="desc"> Descending </p>
<script>
  var num = [65,32,52,10,9,92];
    for (var i = 0; i < num.length; i++)
    {
      for (var j = 0; j<i; j++)
       {
        if (num[i] < num[j])
         {
            var temp = num[i];
            num[i]   = num[j];
            num[j]   = temp;
        }
      }
    }
//Or Another Method Choose Only One MEhod To Program
//         for(i=0; i<arr.length; i++){
//         for(j=0; j<arr.length; j++){
//           if (arr[i]<arr[j]) {
//               var temp = arr[i];
//                   arr[i] = arr[j];
//                   arr[j] = temp;
//           } 
//         }
//       }

  document.getElementById('asc').innerHTML = "Ascending = "+ num;
</script>
<script>
var arr = [65,32,52,10,9,92];
for (var i = 0; i < arr.length; i++)
{
  for (var j = 0; j < i; j++) {
        if (arr[i] > arr[j]) {
          var temp = arr[i];
          arr[i] = arr[j];
          arr[j] = temp;
        }
  }
}
//Or Another Method Choose Only One MEhod To Program
//         for(i=0; i<arr.length; i++){
//         for(j=0; j<arr.length; j++){
//           if (arr[i]>arr[j]) {
//               var temp = arr[i];
//                   arr[i] = arr[j];
//                   arr[j] = temp;
//           } 
//         }
//       }

document.getElementById('desc').innerHTML = "Descending = "+arr;
</script>
</body>
</html>
