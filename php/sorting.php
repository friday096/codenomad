<?php
// Ascending Order
$arr = array(1,5,9,20,2,6,89,45,25);
  for ($i=0; $i <count($arr) ; $i++)
   {
    for ($j=0; $j <$i; $j++)
     {
      if ($arr[$i] < $arr[$j])
       {
        $temp    = $arr[$i];
        $arr[$i] = $arr[$j];
        $arr[$j] = $temp;
      }
    }
   }
echo "Ascending Order <br/>";
print_r($arr);
echo "<br/>";
?>
<?php
$num = array(89,25,1,2,5,98,45,56);
$len = count($num);
  for ($i=0; $i <$len ; $i++) {
    for ($j=0; $j < $i ; $j++) {

        if ($num[$i]>$num[$j]) {
          $temp = $num[$i];
          $num[$i] = $num[$j];
          $num[$j] = $temp;
        }
    }
  }

echo "Descending Order <br/>";
print_r($num);
 ?>
