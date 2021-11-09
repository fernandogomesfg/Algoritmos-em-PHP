<?php
	if(isset($_POST['enviar'])){
		if (!($_POST['nome'] == "" && $_POST['senha'] == "")) {
			$nome_usuario = $_POST['nome'];
			$senha = $_POST['senha'];
			echo "<br>";
			echo "Seu nome eh $nome_usuario<br>";
			echo "Sua senha eh $senha<br>";
			//echo "Recebendo dados";

			//redimencionando a pagina principal
			//header("Location: index.php");

					} else {
			echo "Nao recebendo dados";
		}
		
		//echo "Recebendo dados";
	}

///uma index com botao para ir ao login
	//nome e senha 



?>