<?php 

	if (isset($_POST['enviar'])) {
		$usuario = "fernando";
		$senha = "123";
		if (($_POST['usu'] == $usuario && $_POST['senha'] == $senha)) {
			echo "Sucesso";
			//redimencionando a pagina principal
			//("Location: index.php")

		
	} else {
		echo "Erro na submissao";
	}
	
}

 ?>