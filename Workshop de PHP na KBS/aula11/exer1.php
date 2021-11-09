<!DOCTYPE html>
<html>
<head>
	<title>Exercicio 1 - Funcoes</title>
</head>
<body>
	<?php 
		$op = 6;
		$num1 = 15;
		$num2 = 2;

		switch ($op) {
			case '1':
				function soma($num1, $num2){
					$result = $num1 + $num2;
					echo "O resultado da soma eh $result";	
				}
				soma($num1, $num2);
				break;

			case '2':
				function subtraccao($num1, $num2){
					$result = $num1 - $num2;
					echo "O resultado da subtracao eh $result";
				}
				subtraccao($num1, $num2);
				break;

			case '3':
				function multiplicacao($num1, $num2){
					$result = $num1 * $num2;
					echo "O resultado da multiplicacao eh $result";	
				}
				multiplicacao($num1, $num2);
				break;

			case '4':
				function divisao($num1, $num2){
					$result = $num1 / $num2;
					echo "O resultado da divisao eh $result";		
				}
				divisao($num1, $num2);
				break;

			case '5':
				function resto($num1, $num2){
					$result = $num1 % $num2;
					echo "O resto da divisao de $num1 e $num2 eh $result";
				}
				resto($num1, $num2);
				break;

			case '6':
				function factorial($num1){
        			$resut = 1;

        			for ($i= $num1; $i > 1 ; $i--) { 
            			$resut=$resut*$i;
            			echo "$i x ";	
        			}
        			echo "1 =  $resut";
        		}	
        		factorial(5);
				break;
			
			default:
				echo "Escolha uma opcao valida";
				break;
		}

	 ?>

</body>
</html>