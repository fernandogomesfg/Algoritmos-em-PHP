<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Aula 06 - Exercicios para pensar em PHP</title>
</head>
<body>
	<p>Entrar com 3 números e imprimi-los em ordem decrescente (suponha números diferentes) </p>

	<form action="exercicio04.php" method="post">
		<input type="number" name="num1">
		<input type="number" name="num2">
		<input type="number" name="num3">
		<input type="submit" name="validar" value="Verificar">
	</form>

	<?php 
		if (isset($_POST['validar'])) {
			$num1 = $_POST['num1'];
			$num2 = $_POST['num2'];
			$num3 = $_POST['num3'];
			
			//Verficando se os campos foram preenchidos, mas essa verificação já é feita pelo formulário
                if (($num1 == "") && ($num2 == "") && ($num3 == "")) {
                    echo "Preencha todos os campos";
                } else {
                    if (($num1 >= $num2) && ($num2 >= $num3)) {
                        echo "Os três números na ordem decrescente são: $num1, $num2 e $num3";
                    }
                    elseif (($num1 >= $num3) && ($num3 >= $num2)) {
                        echo "Os três números na ordem decrescente são: $num1, $num3 e $num2";
                    }
                    elseif (($num2 >= $num1) && ($num1 >= $num3)) {
                        echo "Os três números na ordem decrescente são: $num2, $num1 e $num3";
                    }
                    elseif (($num2 >= $num3) && ($num3 >= $num1)) {
                        echo "Os três números na ordem decrescente são: $num2, $num3 e $num1.";
                    }
                    elseif (($num3 >= $num1) && ($num1 >= $num2)) {
                        echo "Os três números na ordem decrescente são: $num3, $num1 e $num2";
                    }
                    else {
                        echo "Os três números na ordem decrescente são: $num3, $num2 e $num1";
                    }
		}
	?>

</body>
</html>