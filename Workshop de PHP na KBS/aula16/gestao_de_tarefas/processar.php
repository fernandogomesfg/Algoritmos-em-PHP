<?php 
	//Iniciando a sessao
	session_start();

	if (isset($_POST['enviar'])) {

		if (!(($_POST['nome'] == "") && ($_POST['senha'] == ""))) {
			$nome_usuario = trim($_POST['nome']);	//trim - verifica se o uuario nao digitou espacoes por acidente  nos campos
			$senha_usuario = trim($_POST['senha']);
				if (($nome_usuario == "fg") && ($senha_usuario == "123")) {
					//Se o nome for igual a FERNANDO GOMES e senha igual a 123, sera redicionado a pagina do formulario de mensagem
					header("Location:gestor_de_tarefas.php");
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