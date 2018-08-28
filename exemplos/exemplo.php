<!DOCTYPE html>
 
<html>
 <head></head>
<body>

<?php
	/*$numero1=10;
	$numero2=20;
	$resultado = $numero1 + $numero2;
		echo "<h1 style='color:blue;'>resultado = $resultado</h1>";*/

	echo "data e hora atual:";
	echo date ("F jS Y, h:iA");
	echo "<hr>";

	$mes = 8;
	$dia = 23;
	$ano = 2018;
	$resp = checkdate($mes, $dia, $ano);

	if($resp == 1){
		echo " a data $dia/$mes/$ano é válida";
	}else{
		echo " a data $dia/$mes/$ano é invalida";
	}

?>




</body>

</html>
