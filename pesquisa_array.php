<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Pesquisa dentro de array</title>
</head>
<body>

	<?php

		//in_array =true ou false do que esta sendo procurado
		//array_search() retorna o indice do valor pesquisado caso ele exista

		$lista_frutas=array('Banana', 'Maçã', 'Morango');
		echo '<pre>';
			print_r($lista_frutas);
		echo '</pre>';

		//$retorno=in_array('Morango',$lista_frutas);
		$existe=array_search('Morango', $lista_frutas);
		if($existe != null){
			echo 'Indice do elemento procurado: ',$existe;
		}else{
			echo 'O valor pesquisado não existe no array';
		}
		
		/*
		if($retorno){
			echo 'Elemento encontrado';
		}else{
			echo 'Elemento não encontrado';
		}
		*/

	?>

</body>
</html>