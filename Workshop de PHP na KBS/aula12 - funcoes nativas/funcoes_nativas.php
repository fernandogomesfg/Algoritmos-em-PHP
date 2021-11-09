<!DOCTYPE html>
<html>
<head>
	<title>Funcoes Nativas</title>
</head>
<body>
	<?php 
		//Funcoes nativas sao aquelas mais comuns (ja elaboradas)
		//Por exemplo, Potenciacao
		
		//Verificar se uma variavel esta vazia ou nao --- com funcao criada pelo programador
	/*
		function verificar(){
			$variavel = "";
			if ($variavel == "") {
				echo "A variavel esta vazia";
			} else {
				echo "A variavel nao esta vazia";
			}
		}
		verificar();
	*/

		//Funcoes nativas
		//Funcao EMPTY - para verificar se a variavel esta vazia ou nao
		/*$var = "aa";
		echo empty($var);*/

/*
		$senha = 123456;
		$username = "basededados";

		if (empty($senha) && empty($username)) {
			echo "Entre com a senha e o usuario";
		} else {
			if ($senha == "123456" && $username=="basededados") {
				echo "Bem vindo a plataforma KBS";
			} else {
				echo "Senha ou Usuario incorrecto(s)";
			}
			
		}
*/
		/*//Funcao que verifica a Senha e o Usuario
		$senha = 123456;
		$username = "basededados";
		function senha_user($senha, $username){
			if (empty($senha) && empty($username)) {
				echo "Entre com a senha e o usuario";
			} else {
				if ($senha == "123456" && $username=="basededados") {
					echo "Bem vindo a plataforma KBS";
				} else {
					echo "Senha ou Usuario incorrecto(s)";
				}
			
			}

		}
		senha_user("123456", "basededados");
		
		*/
/*
		//Funcao que retorna a quantidade de caracteres de uma string
		$string = "bar";
		$var = strlen($string);
		//echo "$var";

/*
		//Verificar se a senha possui 6 caracteres
		$senha = 123456;
		$username = "basededados";
		function senha_user($senha, $username){
			if (empty($senha) && empty($username)) {
				echo "Entre com a senha e o usuario";
			} else {
				if ($senha == "123456" && $username=="basededados") {
					echo "Bem vindo a plataforma KBS";
				} else {
					echo "Senha ou Usuario incorrecto(s)";
				}
			
			}

		}
		senha_user("123456", "basededados");

*/
/*
		//EXPLODE Divide uma string de acordo com o delimitador
		$string = "Base de Dados e PHP";
		$var = explode(" ", $string);
		print_r($var);
*/
	
		//IMPLODE
		$string = "Base de Dados e PHP";
		$var = explode(" ", $string);
		$curso = implode("_", $var);
		print_r($var);
		echo "<br><br>";
		echo "$curso";


		//comecamos com dashboard ou a parte do ususario?




	 ?>

</body>
</html>