<!DOCTYPE html>
<html>
<head>
	<title> Calculado </title>
</head>
<body>
	<?php
		$type = $_POST['exerc'];

		if($type == '1'){
			$num = $_POST['num'];
			
			for($i = 1; $i <= $num;  $i++){
				if($i % 2 == 0){
					echo "<p style='color: blue;'>$i</p>";
				}else{
					echo "<p style='color: pink;'>$i</p>";
				}
			}
		}

		if($type == '2'){
			$a = $_POST['num1'];
			$b = $_POST['num2'];
			$op = $_POST['op'];

			if($op == 'soma') {echo "$a + $b = ", $a + $b;}
			else if($op == 'sub') {echo "$a - $b = ", $a - $b;}
			else if($op == 'div') {echo "$a / $b = ", $a / $b;}
			else if($op == 'mult') {echo "$a * $b = ", $a * $b;}
			else {echo "Erro!";}
		}

		if($type == '3'){
			
		}
	?>
</body>
</html>