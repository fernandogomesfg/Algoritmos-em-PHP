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
	}
	 ?>
	
	<center>
		<h3>Formulario</h3>
		<form action="processar.php" method="post">
			Nome: <input type="text" name="nome"><br><br>
			Senha: <input type="password" name="senha"><br><br>
			<input type="submit" name="enviar" value="Enviar" style="width: 200px;">
		</form>
	</center>
</body>
</html>