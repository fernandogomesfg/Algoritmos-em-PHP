<?php
session_start();
if (isset($_POST['send'])) {
	if (!($_POST['nome']=="" && $_POST['pass']=="")) {
		$nome_usuario = $_POST['nome'];
		$senha_usuario = $_POST['pass'];
			if ($nome_usuario=="Henriques Almneida" && $senha_usuario==123456) {
			
			echo "Nome: ".$nome_usuario;
			echo "<br>";
			echo "Senha: ".$senha_usuario;
			// header("Location:index.php");
			// echo "Recebendo Dados";
			}else{
				$_SESSION['erro']= "Nome ou Password Incorrectos";
				Header("Location:login.php");
				// echo "Nome ou Password Incorrectos";
			}
	}else{
		echo "Dados Nao Inseridos";
	}
}
?>