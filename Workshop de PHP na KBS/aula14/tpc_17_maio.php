<!DOCTYPE html>
<html>
<head>
	<title>TPC - 17 de Maio de 2021</title>
</head>
<body>
	<?php 
		/*Faca um algoritmo que imprima as seguintes series

		1								5 4 3 2 1
		1 2								  4 3 2 1
		1 2 3							    3 2 1
		1 2 3 4								  2 1
		1 2 3 4 5								1

		*/



		for($i = 5; $i >= 1; $i--){
			for($j = 1; $j <= 6-$i; $j++){
				echo "$j ";
			}
			echo "<br>";
		}

		


	 ?>

</body>
</html>