<!DOCTYPE html>
<html>
<head>
	<title>Tabuda</title>
</head>
<body>
	<center>
		<h3>Tabuada</h3>
		<form action="tabuada.php" method="post">
			Escolha a tabuada: <input type="number" name="numero" min="1">
			<input type="submit" name="calcular" value="Calcular">
		</form>

		<?php
			if (isset($_POST['calcular'])) {
				$tabuada = $_POST['numero'];
				echo "<h3>Tabula de $tabuada</h3><br>";
				for ($i=0; $i <= 12; $i++) { 
					echo "$tabuada x $i = ".($tabuada * $i). "<br>";
				}
			}

		?>
	</center>


</body>
</html>