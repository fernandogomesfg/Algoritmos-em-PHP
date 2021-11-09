<!DOCTYPE html>
<html>
<head>
	<title>Aula 15 - Sessoes</title>
</head>
<body>
	<?php 
		session_start();
		$_SESSION['nome'] = "Fernando Gomes";
		echo $_SESSION['nome']. "A SESSAO ja existe";



	 ?>
</body>
</html>