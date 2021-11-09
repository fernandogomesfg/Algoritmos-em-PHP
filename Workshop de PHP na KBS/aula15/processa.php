<?php 

	if (isset($_POST['enviar'])) {
		$usuario = "fernando";
		$senha = "123";
		if (($_POST['nome'] == $usuario && $_POST['senha'] == $senha)) {
			//echo "Sucesso";
			//redimencionando a pagina principal
			header("Location: formHenriques/indexHTML.html");
	} else {
		echo "Erro na submissao";
	}
	
}

 ?>