<?php 
	session_start();
	if (isset($_POST['enviar'])) {
		//$usuario = "fernando";
		//$senha = "123";
		if (($_POST['nome'] == "" && $_POST['senha'] == "")) {
			$nome_usuario = $_POST['nome'];
			$senha_usuario
			//echo "Sucesso";
			//redimencionando a pagina principal
			//header("Location: formHenriques/indexHTML.html");
	} else {
		echo "Erro na submissao";
	}
	
}

 ?>