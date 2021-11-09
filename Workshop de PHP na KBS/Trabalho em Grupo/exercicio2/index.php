<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Exercicio 2</title>
</head>
<body>

	<center>
		<h3>Biblioteca</h3>
		<?php 
				//Sessao para mostar a mensagem se o usuario nao inserir dados
				if (isset($_SESSION['mensagem'])) {
					echo"<p style ='color:#ff1040'>". $_SESSION['mensagem']."</p><br>";

					//Destruindo a variavel para evitar sempre mostrar a mensagem de erro
					unset($_SESSION['mensagem']);
				}
			 ?>
		<form action="php/verificar.php" method="post">
			Nome do livro: <input type="text" name="nome_livro"><br><br>
			Tipo de Usuario: <br>
			Professor<input type="radio" name="tipo_usuario" value="Professor" checked="">
			Aluno<input type="radio" name="tipo_usuario" value="Aluno"><br><br>
			Data do emprestimo: <input type="date" name="data"><br><br>
			<input type="submit" name="emprestar" value="Emprestar">

		</form>
	</center>
</body>
</html>