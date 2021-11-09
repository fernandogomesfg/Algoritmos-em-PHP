<?php
	if (isset($_POST['submit'])) {
		//Verificando se todos campos foram preenchindos ou nao
		if (($_POST['name'] == "") && ($_POST['email'] == "") && ($_POST['message']) == "") {
			//Imprimindo uma mensagem de preenchimento obrigatorio -- PODERIA USAR UMA SESSAO
			echo "Preencha todos campos obrigatorios";
		} else {
			//Se todos campos estiverem preenchidos

			//Recebendo dados do formulario e armazenando nas variaveis
			$nome = $_POST['name'];
			$email = $_POST['email'];
			$mensagem = $_POST['message'];

			//Imprimindo a informacao continudas na variavel
			echo "<br>";
			echo "Seu nome é <strong>$nome</strong><br>";
			echo "Seu email é <strong>$email</strong><br>";
			echo "Sua mensagem é <strong>$mensagem</strong>";
		}
	} 





 ?>