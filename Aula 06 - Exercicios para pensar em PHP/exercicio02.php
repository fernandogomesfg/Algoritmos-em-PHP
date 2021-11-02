<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Aula 06 - Exercicios para pensar em PHP</title>
</head>
<body>
	<p>Entrar com um número e informar se ele é divisível por 10, por 5, por 2 ou se não é divisível por nenhum destes</p>

	<form action="exercicio02.php" method="post">
		<input type="number" name="num">
		<input type="submit" name="validar" value="Verificar">
	</form>

	<?php 
		if (isset($_POST['num'])) {
			$num = $_POST['num'];
			if (($num % 10 == 0) && ($num % 5 == 0) && ($num % 2 == 0)) {
				echo "O numero $num é divisível por 10, por 5 e por 2";
			} else {
				echo "O numero $num nao é divisível por 10, por 5 e por 2";
			}
			
		}
	?>

</body>
</html>