<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Formularios</title>
</head>
<body>
	<?php
		if (isset($_SESSION['erro'])) {
			echo $_SESSION['erro'];
		}
	?>

	<center>
		<h3>Formulario</h3>
		<form action="processa.php" method="post">
			Nome:<input type="text" name="nome"><br><br>
			Senha:<input type="password" name="senha"><br><br>
			<input type="submit" name="enviar" value="Enviar">
			<!--<input type="reset" name="limpar">-->
		</form>
	</center>

</body>
</html>