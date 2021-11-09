<?php
//Using For Loop;
$str = "Hello My Core Php";
for ($i= strlen($str); $i>0; $i--) {
  echo $str[$i-1];
}
echo "<br>";

// Using While loop;
$string = 'Heello My Name is Sk';
$reverse = '';
$i = 0;
while(!empty($string[$i])){
      $reverse = $string[$i].$reverse;
      $i++;
}
echo $reverse;
 ?>
