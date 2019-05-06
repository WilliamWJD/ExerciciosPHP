<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Funções para manipulação de Strings</title>
</head>
<body>

	<?php 

		function manipulaString($texto){
			//TRANSFORMA CARACTERES EM MINUSCULA
			echo strtolower($texto);
			echo "<hr/>";
			//TRANSFORMA CARACTERES EM MAIUCULO
			echo strtoupper($texto);
			echo "<hr/>";
			//PRIMEIRO CARACTER MAIUSCULO
			echo ucfirst($texto);
			echo "<hr/>";
			//CONTA QUANTIDADE DE CARACTER
			echo strlen($texto);
			echo "<hr/>";
			//SUBSTITUI UMA CADEIA DE CARACTER
			echo str_replace('josé', 'Ribeiro', $texto);
			echo "<hr/>";
			//RETORNA PARTE DE UMA STRING
			echo substr($texto, 0, 7);
		}

		manipulaString('william josé dias');

	 ?>

</body>
</html>