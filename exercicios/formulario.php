<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> Calculadora </title>
</head>
<body>
	<?php
	
		$a = $_POST['num1'];
		$b = $_POST['num2'];
		$op = $_POST['op'];

		if($op == 'soma') {echo "$a + $b = ", $a + $b;}
		else if($op == 'sub') {echo "$a - $b = ", $a - $b;}
		else if($op == 'div') {echo "$a / $b = ", $a / $b;}
		else if($op == 'mult') {echo "$a * $b = ", $a * $b;}
		else {echo "Erro!";}
	?>
</body>
</html>