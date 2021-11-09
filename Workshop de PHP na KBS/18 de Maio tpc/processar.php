<?php 
	//Iniciando a sessao
	session_start();

	if (isset($_POST['enviar'])) {

		if (!(($_POST['nome'] == "") && ($_POST['senha'] == ""))) {
			$nome_usuario = $_POST['nome'];
			$senha_usuario = $_POST['senha'];
				if (($nome_usuario == "Fernando Gomes") && ($senha_usuario == "123")) {
					//Se o nome for igual a FERNANDO GOMES e senha igual a 123, sera redicionado a pagina do formulario de mensagem
					header("Location:formulario/indexHTML.html");
				} else {
					//Caso erre o nome e/ou senha, recebera um alerta
					$_SESSION['erro'] = "Nome e/ou Senha invalidos";
					header("Location:index.php");
				}
				
		}
	} else {
		echo "Insira dados";
	}


 ?>