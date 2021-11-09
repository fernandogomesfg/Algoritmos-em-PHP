<?php 
session_start();
	$nome_livro;
	$tipo_usuario;
	$data_emprestimo;
	$data_entrega;

	if (isset($_POST['emprestar'])) {
		if (($_POST['nome_livro']) && ($_POST['tipo_usuario']) && ($_POST['data'])){
			//Se os campos forem preencidos, ele executara os seguintes comandos
			//Imprimindo o recibo
			$nome_livro = $_POST['nome_livro'];
			$tipo_usuario = $_POST['tipo_usuario'];
			$data_emprestimo = $_POST['data'];

			

			//Converter a data
			$converte_data = strtotime($data_emprestimo);

			if (($_POST['tipo_usuario'] == "Professor")) {
				//Depois de converter, adicionar 10 ou 3 dias corresponde ao tipo de usuario
				$data_entrega = strtotime('+ 10 day', $converte_data);
				
				echo "O livro escolhido eh: $nome_livro<br>";
				echo "O tipo de usuario eh: $tipo_usuario<br>";
				echo "O data do pedido eh $data_emprestimo<br>";
				//Data de entrega final
				echo "A daata de entrega de entrega eh: " .date('d/m/Y', $data_entrega);
			} else {
				//Depois de converter, adicionar 10 ou 3 dias corresponde ao tipo de usuario
				$data_entrega = strtotime('+ 3 day', $converte_data);
				
				echo "O livro escolhido eh $nome_livro<br>";
				echo "O tipo de usuario eh $tipo_usuario<br>";
				echo "O data do pedido eh $data_emprestimo<br>";
				//Data de entrega final
				echo "A daata de entrega de entrega eh: " .date('d/m/Y', $data_entrega);
			}
			



			//echo "$nome_livro; $tipo_usuario; $data_emprestimo";
		} else {
			//Caso o usuario nao insira dados no formulario, dara esse erro
			//$_SESSION['mensagem'] = "Preencha todos os campos";
			//header("Location:../index.php");

			//$nome_livro = $_POST['nome_livro'];
			//$tipo_usuario = $_POST['tipo_usuario'];
			//$data_emprestimo = $_POST['data'];
			//echo "else$nome_livro; $tipo_usuario; $data_emprestimo<br>";
			
			

		}
		
	}





 ?>