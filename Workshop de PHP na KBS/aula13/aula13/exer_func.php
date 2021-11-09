<!DOCTYPE html>
<html>
<head>
	<title>Exercicios sobre funcoes</title>
</head>
<body>
	<?php 

	//Exercicio 1
	function verificar($inicio, $fim){
		$soma_impar = 0;
		$soma_par = 0;

		if ($inicio > $fim) {
			echo "O valor incial nao pode ser maior do que o valor final<hr>";

		} else {
			$num_impar = 0;
			$num_par = 0;
			for ($i=$inicio; $i < $fim ; $i++) { 
				if ($i % 2 != 0) {
					$num_impar+=1;
					$soma_impar += $i;
				} else {
					$num_par +=1;
					$soma_par += $i;
				}
			}

		echo "<h3>Caso de numeros impares</h3>";
		echo "A quantidade de numeros impares de $inicio ate $fim eh: $num_impar<br><br>";
		echo "A soma de numeros impares de $inicio ate $fim eh: $soma_impar<hr>";

		echo "<h3>Caso de numeros Pares</h3>";
		echo "A quantidade de numeros impares de $inicio ate $fim eh: $num_par<br><br>";
		echo "A soma de numeros impares de $inicio ate $fim eh: $soma_par<hr>";	
		}
	}		
	verificar(10, 5);

	//Exercicio 2
	//Ler o numero de horas trabalhadas, o valor que recebe por horas e calcular o salario e imprimir tudo
	function salario($hora_trabalho, $valor_horas){
		$salario = $hora_trabalho * $valor_horas;
		echo "<h3>Salario em Horas</h3>";
		echo "O tempo de trabalho eh $hora_trabalho<br>";
		echo "O valor do salario em horas eh $valor_horas<br>";
		echo "O salario actual eh $salario<hr>";
	}
	salario(5,1000);


	//Exercicio 3
	function empresa($cod_func){
	echo "<h3>Uma empresa concedeu um aumento de salários dos seus funcionarios, variavel de acordo
         com o cargo, conforme a tabela abaixo. Faca um algoritmo que leia o salário e o 
        código_cargo do funcionario, e calcule o novo salário, se o cargo do funcionario nao estiver na
        tabela, ele devera receber, entao, 40% de aumento. Imprima na tela, o salário antigo, o novo
        salário e a diferenca dos mesmos</h3>";

        $sal_gerente = 100; $sal_tecnico = 100; $sal_eng = 100; $sal_qualquer = 100;
        $novo_salário;

        //Verificando condicao para o salario do GERENTE
        if ($cod_func == 101) {
            $novo_salário = $sal_gerente + ($sal_gerente*0.10);
            $dif_sal = $novo_salário - $sal_gerente;
            echo "O código inserido é <strong>$cod_func</strong> e percetence a um 
            <strong>GERENTE</strong><br>O salário actual é $sal_gerente.<br> O novo salário é
            $novo_salário<br>A diferenca entre os salários é de $dif_sal<hr>";
        
        //Verificando condicao para o salario do TECNICO
        }elseif($cod_func == 102){
            $novo_salário = $sal_tecnico + ($sal_tecnico*0.20);
            $dif_sal = $novo_salário - $sal_tecnico;
            echo "O código inserido é <strong>$cod_func</strong> e percetence a um 
            <strong>TECNICO</strong><br>O salário actual é $sal_gerente.<br> O novo salário é
            $novo_salário<br>A diferenca entre os salários é de $dif_sal<hr>";
        
        //Verificando condicao para o salario do ENGENHEIRO
        }elseif($cod_func == 103){
            $novo_salário = $sal_eng + ($sal_eng*0.30);
            $dif_sal = $novo_salário - $sal_eng;
            echo "O código inserido é <strong>$cod_func</strong> e percetence a um 
            <strong>GERENTE</strong><br>O salário actual é $sal_eng.<br> O novo salário é
            $novo_salário<br>A diferenca entre os salários é de $dif_sal<hr>";

        //Verificando condicao para o salario do OUTRO CARGO
        }else{
            $novo_salário = $sal_qualquer + ($sal_qualquer*0.40);
            $dif_sal = $novo_salário - $sal_qualquer;
            echo "O código inserido é <strong>$cod_func</strong> e percetence a um 
            <strong>OUTRO CARGO</strong><br>O salário actual é $sal_qualquer.<br> O novo salário é
            $novo_salário<br>A diferenca entre os salários é de $dif_sal<hr>";
        }

    }
    empresa(102);
	 ?>
</body>
</html>