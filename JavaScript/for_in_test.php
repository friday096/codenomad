<html>
<!-- Definition-: The for-in loop is a special type of a loop that iterates over the properties of an object,
 or the elements of an array. The generic syntax of the for-in loop is: -->
<body>
<p id="demo"> </p>
<script>
  var text = "";
  var person = {Name: "Hello", City: "Mohali", Age: "21"}
  var temp;
  for(temp in person){
    text += person[temp] +" ";

    document.getElementById('demo').innerHTML = text;
  }
</script>

<script>

  var state = {ken:"Hi", Ben:"He", State:"Hello"};
  for(var temp in state){
    document.write(temp + "=" + state[temp] +" ");
  }

</script>
<br>
<script>
  var friuts = ["Mango", "Apple","Banana","Gauva"];
  for(temp in friuts){
    document.write(friuts[temp]+" ");
  }

</script>

</body>


</html>
