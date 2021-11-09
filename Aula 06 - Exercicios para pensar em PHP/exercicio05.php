<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Aula 06 - Exercicios para pensar em PHP</title>
</head>
<body>
	<p>Ler 3 números, os possíveis lados de um triângulo, e imprimir a classificação de acordo com tamanho dos lados  </p>

	<form action="exercicio04.php" method="post">
		<input type="number" name="ladoA">
		<input type="number" name="ladoB">
		<input type="number" name="ladoC">
		<input type="submit" name="validar" value="Verificar">
	</form>

	<?php 
		if (isset($_POST['validar'])) {
			$ladoA = $_POST['ladoA'];
			$ladoB = $_POST['ladoB'];
			$ladoC = $_POST['ladoC'];
			
			
		}
	?>

</body>
</html>