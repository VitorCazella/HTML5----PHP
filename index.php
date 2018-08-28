<!DOCTYPE html>
<html>
<head>
	<title> Vitor Cazella </title>
</head>
<body>
	<?php
		echo "Hello World!";

		$a=2;
		$b=4;
		$c=6;

		$x= --$c + $b; //$x = 9

		$y= $b++ + $a; //$y = 6

		$z= $a - $b--; //$z = -3

		echo "<br>x = " . $x;
		echo "<br>y = " . $y;
		echo "<br>z = " . $z;

		funcion calcula($a, $b){
			return $a + $b;
		}
	?>
	</body>
</html>