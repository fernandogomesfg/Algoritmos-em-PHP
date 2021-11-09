<?php 
	$usuario;
	$senha = "php";	//decidimos inicializar a senha, visto que eh a mesma para todos login's

	if (isset($_POST['login'])) {
		if (($_POST['user']) == "exer1") {
			header("Location:../../exercicio1/index.php");
		}elseif (($_POST['user']) == "exer2") {
			header("Location:../../exercicio2/index.php");
		}elseif (($_POST['user']) == "exer3") {
			header("Location:../../exercicio3/index.php");
		}elseif (($_POST['user']) == "exer4") {
			header("Location:../../exercicio4/index.php");
		}
		
	}


?>