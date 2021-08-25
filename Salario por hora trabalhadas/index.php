<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Salario em Horas</title>
</head>
<body>
	<!--
		Descrição: Ler o número de horas trabalhadas, o valor que recebe por horas e calcular o salário e imprimir tudo

		Autor: Fernando Gomes
		Data: 25/08/2021
	-->

	<?php

		function salario($hora_trabalho, $valor_horas){
			$salario = $hora_trabalho * $valor_horas;
			echo "<h3>Salário em Horas</h3>";
			echo "O tempo de trabalho é de $hora_trabalho<br>";
			echo "O valor do salário em horas é de $valor_horas<br>";
			echo "O salario actual é de $salario<hr>";
		}
		salario(5,1000);
		salario(24,1245);

	?>
</body>
</html>