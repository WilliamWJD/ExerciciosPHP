<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Array Multidimensionais</title>
</head>
<body>

	<?php

		$lista_coisas=[];
		$lista_coisas['frutas']=['Morango', 'Uva', 'Abacaxi', 'Abacate'];
		$lista_coisas['objetos']=['Xbox One', 'Playstation 4', 'Xiaomi MyBand n3'];

		echo '<pre>';
			print_r($lista_coisas);
		echo '</pre>';

		echo'--------------- ACESSANDO ELEMENTO DO ARRAY --------------';
		echo "<br/><br/>";
		echo 'Elemento: ', $lista_coisas['frutas'][1];
		echo "<br/>";
		echo 'Elemento: ', $lista_coisas['objetos'][0];
	?>

</body>
</html>