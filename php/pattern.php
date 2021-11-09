<?php

for($i=1; $i<=5; $i++){

	for($j=1; $j<=$i; $j++){

		echo $j."";
	}

	echo "<br/>";
}

echo "<br/>";

for($x=1; $x<=5; $x++){

	for ($y=5-$x; $y>=1; $y--) { 
		
		echo "*";
	}

	echo "<br>";
}
echo "<br/>";

for ($a=1; $a<=6 ; $a++) { 

	for ($b=6; $b>$a; $b--) { 
		echo " ";
	}
	for ($c=1; $c<=$a; $c++) { 
		echo "*";
	}
	echo "<br/>";
}
// Ternary Oprtr
$var = 9;

echo ($var%2 == 0)? "even":"odd";
?>