<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Numero Par ou Impar</title>
</head>
<body>
	<!--
		Descrição: Um programa em PHP que determina se um determinado número, lido do teclado, é par ou impar

		Autor: Fernando Gomes
		Data: 19/08/2021
	-->
	<center>
		<form method="POST" action="Num_par_ou_impar.php">
			Digite um numero: <input type="number" name="numero"><br>
			<input type="submit" name="enviar" value="Verificar" style="width: 100px; margin-top: 10px;">		
		</form>
	

	<?php
		if (isset($_POST['enviar'])){
			$num = $_POST['numero'];
			if ($num == "") {
				echo "Insira um numero";
			}else{
				if ($num % 2 == 0) {
					echo "O número $num é par";
				} else {
					echo "O número $num é impar";
				}
			}		
		} 
		
	?>
	</center>

</body>
</html>