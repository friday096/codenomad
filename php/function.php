<?php

function myFunction($fname, $lname){
  echo "My First Name ".$fname." Last Name is ".$lname."<br/>";
}
myFunction("San","Ku" );
myFunction("Poo", "k");
myFunction("Dee","Y");
 ?>
<br/>

<?php
$x = 2;
$y = 5;
function Num(){
  global $x,$y;
  $y = $x+$y;
}
Num();

echo $y;

 ?>
