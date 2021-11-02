<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Aula 06 - Exercicios para pensar em PHP</title>
</head>
<body>
	<h3>Exercicio 01</h3>
	<p>Construir um algoritmo que leia 2 números e efetue a adição. Caso o valor somado seja maior que 20, este deverá ser apresentando somando-se a ele mais 8; caso o valor somado seja menor ou igual a 20, este deverá ser apresentado subtraindo-se 5</p>

	<form action="exercicio01.php" method="post">
		<input type="number" name="num1">
		<input type="number" name="num2">
		<input type="submit" name="validar" value="Calcular">
	</form>

	<?php
		if (isset($_POST['validar'])) {
			$soma = 0;
			$soma = ($num1 = $_POST['num1']) + ($num2 = $_POST['num2']);
			if ($soma > 20) {
				$soma = $soma + 8;
				echo "$soma";
			} else {
				$soma = $soma - 5;
				echo "$soma";
			}
			
		}
	?>

</body>
</html>