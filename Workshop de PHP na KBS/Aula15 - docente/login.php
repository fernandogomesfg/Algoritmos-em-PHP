<?php session_start();        ?>
<!DOCTYPE html>
<html>
<head>
	<title>Formulario</title>
</head>
<body><center>
	<h1>Login Aluno</h1>
<?php
if (isset($_SESSION['erro'])) {
	echo"<p style ='color:red;'>". $_SESSION['erro']."</p><br>";
}

?>

	<form method="POST" action="processa.php">
		
			Nome: <input type="text" name="nome" />
			<br /><br />

			Senha: <input type="password" name="pass" /><br><br>

			<button type="submit" name="send">Logar</button>
		</center>
	</form>
</body>
</html>