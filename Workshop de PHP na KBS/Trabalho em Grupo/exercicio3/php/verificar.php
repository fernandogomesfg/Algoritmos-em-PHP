<?php 
	$palavra;

	if (isset($_POST['verificar'])) {
		for($i=5; $i>=1; $i--){
			$palavra = $_POST['palavra'];
			for($j=1; $j <= 6-$i; $j++){
				echo "$palavra ";
			}
			echo "<br>";
		}
	}

	


 ?>