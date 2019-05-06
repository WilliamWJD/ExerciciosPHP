<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Funções nativas matematicas</title>
</head>
<body>

	<?php 

		function funcMatematica($num){
			//ARREDONDA PARA CIMA
			echo ceil($num);
			echo '<hr/>';
			//ARREDONDA PARA BAIXO
			echo floor($num);
			echo '<hr/>';
			//ARREDONDA VALOR COM BASE NAS CASAS DECIMAIS
			echo round($num);
			echo '<hr/>';
			//GERA UM INTEIRO ALEATORIO
			echo rand();
			echo '<hr/>';
			//RETORNA RAIZ QUADRADA
			echo sqrt($num);
		}

		funcMatematica(9.4);

	?>

</body>
</html>