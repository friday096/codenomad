<?php
// Even & Odd in Array;
$arr = array(2,5,9,8,4,3,42,59);
$len = count($arr);
echo $len."<br/>";
for ($i=0; $i<$len ; $i++)
 {
  if (($arr[$i] % 2==0)) {
    echo "even Number=".$arr[$i]."<br/>";
  }
  else {
    echo "Odd Number=".$arr[$i]."<br/>";
  }
}
echo "<br/>";
// Without Array Even & Odd;
$number = 30;
if (($number % 2)==0) {
  echo "Even=".$number;
}else {
  echo "Odd=".$number;
}

 ?>
