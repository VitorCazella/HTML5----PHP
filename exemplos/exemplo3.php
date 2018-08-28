<!DOCTYPE html>
 
<html>
 <head></head>
<body>

<?php 
	$nome = "Kara";
	$nome2 = "Connor";
	$nomes = "$nome e $nome2";
	$sexo1 = "F";
	$sexo2 = "M";

	if ($sexo1 == "M" && $sexo2 == "M"){
		echo "$nomes - só tem homem nessa sala de aula";
	}else if($sexo1 == "F" && $sexo2 == "F"){
		echo "$nomes - só existe mulher nessa sala de aula";
	}
	else{
		echo "$nomes - que lindo casal,na sala de aula";
	}










?>

</body>

</html>
