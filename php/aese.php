<?php
$arr = array("Audi", "Skoda", "Verna","BMW");

$len = count($arr);

echo $len;
echo "<br/>";
echo $arr[0]." ".$arr[2];
 ?>
 <br>
 <?php
 $age = array("Ben"=>23, "Ten"=>25, "Ken"=>89,"Dan"=>56);

 echo "<br/>";
 echo "Ten Age is ".$age["Ten"]." Ben Age is ".$age["Dan"];
 echo "<br/>";

 foreach ($age as $key => $value) {
            echo "Key=".$key." Value=".$value;
            echo "<br/>";
 }
  ?>
  <br>

<?php
 $aese = array(
          array("Audi",20,50),
          array("Skoda",30,25),
          array("Verna",5,9),
          array("BMW",21,31)
 );

for ($i=0; $i <4 ; $i++) {
  echo "Row Number ".$i;
  echo "<ul>";
  for ($j=0; $j <3 ; $j++) {
    echo "<li>".$aese[$i][$j]."</li>";
  }
  echo "</ul>";
}
 ?>
