<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Aula 06 - Exercicios para pensar em PHP</title>
</head>
<body>
	<p>Entrar com nome, sexo e idade de uma pessoa. Se a pessoa for do sexo feminino e tiver menos que 25 anos, imprimir nome e a a mensagem: ACEITA. Caso contrário, imprimir nome e a mensagem: NÃO ACEITA.</p>

	<form action="exercicio03.php" method="post">
		Nome:<input type="text" name="nome"><br>
		<label for="Genero"> Genero: </label> 
			 <label for="Masculino"> Masculino
			 <input type="radio" name="genero"  id="Masculino" value="Masculino">
			 </label>
			 
			 <label for="Femenino"> Femenino
			 <input type="radio" name="genero"  id="Femenino" value="Femenino">
		</label><br>
		Idade:<input type="number" name="idade">
		<input type="submit" name="validar" value="Verificar">
	</form>

	<?php 
		if (isset($_POST['validar'])) {
			$nome = $_POST['nome'];
			$sexo = $_POST['genero'];
			$idade = $_POST['idade'];

			echo "$sexo";
			
		}
	?>

</body>
</html>