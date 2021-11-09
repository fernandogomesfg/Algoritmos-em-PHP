<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>18 de Maio de 2021 - TPC</title>
</head>
<body>
	<?php 
		if (isset($_SESSION['erro'])) {
			echo"<p style ='color:#ff1040'>". $_SESSION['erro']."</p><br>";

			//Destruindo a variavel para evitar sempre mostrar a mensagem de erro
			unset($_SESSION['erro']);
	}
	 ?>
	
	<center>
		<h3>Gestor de Tarefas</h3>
		<form action="processar.php" method="post">
			Nome: <input type="text" name="nome"><br><br>
			Senha: <input type="password" name="senha"><br><br>
			<input type="submit" name="enviar" value="Enviar" style="width: 200px;">
		</form>
	</center>
</body>
</html>