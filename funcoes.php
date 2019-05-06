<!DOCTYPE html>
<html>
<head>
	<title>Funções PHP</title>
	<meta charset="utf-8">
</head>
<body>

	<?php
		function exibirBoasVindas(){
			echo "Bem vindo ao curso de php !";
		}
		exibirBoasVindas();

		echo "<br/>";

		//função com retorno
		function calcularAreaTerreno($largura, $comprimento){
			$area=$largura*$comprimento;
			return $area;
		}

		echo 'A área do terreno é ',calcularAreaTerreno(5,2),' metros quadrados !';	


	?>

</body>
</html>