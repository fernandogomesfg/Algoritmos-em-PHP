<!DOCTYPE html>
<html>
<head>
	<title>Aula 15 - Ver Sessao</title>
</head>
<body>
	<?php 
		session_start();
		if (isset($_SESSION['nome'])) {
			echo $_SESSION['nome'];
			echo "<br>A sessao esta ser visualizada na pagina sessaoVer";

		} else {
			echo "A varivel ainda nao existe";
		}
		
		//$_session['nome'] = ;



	 ?>

</body>
</html>