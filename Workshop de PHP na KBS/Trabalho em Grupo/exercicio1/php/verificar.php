<?php 
	//Iniciando a sessao
	session_start();
	/*
	1 - Usando formulário, crie um programa que le um numero inteiro entre 1 e 12 e escrever o mes correspondente. Caso o numero seja fora desse intervalo, informar que não existe o mes com este numero
	*/
	
	if (isset($_POST['verificar']))  {
		//Verificar se o campo foi preenchido ou nao
		if (!($_POST['mes']) == "" ){
			//Se o usuario inserir qualquer numero sera redicionado nessses comandos -- poderia se usar a estrtura SWITCH - CASE
			if (($_POST['mes'] == "1")) {
				$_SESSION['mensagem_do_mes'] = "Janeiro";
				header("Location:../index.php");	
			}elseif (($_POST['mes']) == "2") {
				$_SESSION['mensagem_do_mes'] = "Fevereiro";
				header("Location:../index.php");
			}elseif (($_POST['mes']) == "3") {
				$_SESSION['mensagem_do_mes'] = "Marco";
				header("Location:../index.php");
			}elseif (($_POST['mes']) == "4") {
				$_SESSION['mensagem_do_mes'] = "Abril";
				header("Location:../index.php");
			}elseif (($_POST['mes']) == "5") {
				$_SESSION['mensagem_do_mes'] = "Maio";
				header("Location:../index.php");
			}elseif (($_POST['mes']) == "6") {
				$_SESSION['mensagem_do_mes'] = "Junho";
				header("Location:../index.php");
			}elseif (($_POST['mes']) == "7") {
				$_SESSION['mensagem_do_mes'] = "Julho";
				header("Location:../index.php");
			}elseif (($_POST['mes']) == "8") {
				$_SESSION['mensagem_do_mes'] = "Agosto";
				header("Location:../index.php");
			}elseif (($_POST['mes']) == "9") {
				$_SESSION['mensagem_do_mes'] = "Setembro";
				header("Location:../index.php");
			}elseif (($_POST['mes']) == "10") {
				$_SESSION['mensagem_do_mes'] = "Outubro";
				header("Location:../index.php");
			}elseif (($_POST['mes']) == "11") {
				$_SESSION['mensagem_do_mes'] = "Novembro";
				header("Location:../index.php");
			}elseif (($_POST['mes']) == "12") {
				$_SESSION['mensagem_do_mes'] = "Dezembro";
				header("Location:../index.php");
			}else{
				//Caso o usaurio insiara um numero fora do intervalo de 1 - 12, sera informada uma mensagem de erro
				$_SESSION['mensagem'] = "Informe um numero de 1 ate 12";
				header("Location:../index.php");
			}
			
		} else {
			//Caso o usuario nao insira um numero, dara esse erro
			$_SESSION['mensagem'] = "Informe um numero de 1 ate 12";
			header("Location:../index.php");
		}
		
	}


 ?>