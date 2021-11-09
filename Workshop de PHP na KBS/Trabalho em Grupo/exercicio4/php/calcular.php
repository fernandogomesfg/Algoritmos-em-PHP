<?php 

	if (isset($_POST['calcular'])) {
		$tabuada = $_POST['numero'];
		echo "<h3>Tabula de $tabuada</h3><br>";
		for ($i=0; $i <= 12; $i++) { 

			echo "$tabuada x $i = ".($tabuada * $i). "<br>";
		}
	}
	


?>