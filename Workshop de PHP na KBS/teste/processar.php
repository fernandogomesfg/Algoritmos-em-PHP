<<?php 
	if (isset($_POST['enviar'])) {
		if (!(($_POST['nome'] == "") && ($_POST['senha']))) {
			$nome_usuario = $_POST['nome'];
			$senha = $_POST['senha'];
			echo "Nome: $nome_usuario";
			echo "Senha: $senha";
		} else {
			# code...
		}
		
		echo "Enviado";
	} else {
		echo "Nao enviado";
	}
	



 ?>