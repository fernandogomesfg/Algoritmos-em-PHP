<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Exercicio 1</title>
</head>
<body>
	<?php 
		/*
		1 - Usando formulário, crie um programa que le um numero inteiro entre 1 e 12 e escrever o mes correspondente. Caso o numero seja fora desse intervalo, informar que não existe o mes com este numero
		*/

	 ?>
	 <center>
	 	<h3>Meses do Ano</h3>
	 	<form action="php/verificar.php" method="post">
	 		Informe um numero: <input type="number" name="mes">
	 		<input type="submit" name="verificar" value="Verificar"><br>
	 		
	 	</form>
	 	<?php 
	 	//Sessao para mostar a mensagem se o usuario nao inserir dados
			if (isset($_SESSION['mensagem'])) {
				echo"<p style ='color:#ff1040'>". $_SESSION['mensagem']."</p><br>";

				//Destruindo a variavel para evitar sempre mostrar a mensagem de erro
				unset($_SESSION['mensagem']);
			}elseif (isset($_SESSION['mensagem_do_mes'])) {
				echo"<p style ='color:#ff1040'>". $_SESSION['mensagem_do_mes']."</p><br>";

				//Destruindo a variavel para evitar sempre mostrar a mensagem de erro
				unset($_SESSION['mensagem_do_mes']);
				
			}

		 ?>
	 </center>


	 

</body>
</html>