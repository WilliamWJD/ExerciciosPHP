<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>IR</title>
</head>
<body>

	<?php 
		function calculaIR($salario){
			$ir=0;

			if($salario<=1903.98){
				return $ir;
			}elseif ($salario>1903.98 && $salario <= 2826.65) {
				return $ir=($salario*7.5)/100;
			}elseif($salario>2826.65 && $salario<=3751.05){
				return $ir=($salario*15)/100;
			}elseif($salario>3751.05 && $salario<=4664.68){
				return $ir=($salario*22.5)/100;
			}else{
				return $ir=($salario*27.5)/100;
			}
		}

		echo'IR R$: ',calculaIR(5000);
	?>

</body>
</html>