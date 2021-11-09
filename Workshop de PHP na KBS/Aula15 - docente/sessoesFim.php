<?php
session_start();
if (isset($_SESSION['nome'])) {
	echo $_SESSION['nome']."<BR a sessao esta ser visua;izada na p[agina sessaoVer>";
}else{
	echo "A variavel(sessao) aina nao existe";
}




?>