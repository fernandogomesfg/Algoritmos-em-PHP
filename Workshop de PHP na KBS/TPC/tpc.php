<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TPC  -   Fernando Gomes</title>
</head>
<body>
    <?php
        echo "<h3>Uma empresa concedeu um aumento de salários dos seus funcionarios, variavel de acordo
        de acordo com o cargo, conforme a tabela abaixo. Faca um algoritmo que leia o salário e o 
        código_cargo do funcionario, e calcule o novo salário, se o cargo do funcionario nao estiver na
        tabela, ele devera receber, entao, 40% de aumento. Imprima na tela, o salário antigo, o novo
        salário e a diferenca dos mesmos</h3>";

        //Declarando as variaveis
        $cod_func =1034;
        $sal_gerente = 100; $sal_tecnico = 100; $sal_eng = 100; $sal_qualquer = 100;
        $novo_salário;

        //Verificando condicao para o salario do GERENTE
        if ($cod_func == 101) {
            $novo_salário = $sal_gerente + ($sal_gerente*0.10);
            $dif_sal = $novo_salário - $sal_gerente;
            echo "O código inserido é <strong>$cod_func</strong> e percetence a um 
            <strong>GERENTE</strong><br>O salário actual é $sal_gerente.<br> O novo salário é
            $novo_salário<br>A diferenca entre os salários é de $dif_sal";
        
        //Verificando condicao para o salario do TECNICO
        }elseif($cod_func == 102){
            $novo_salário = $sal_tecnico + ($sal_tecnico*0.20);
            $dif_sal = $novo_salário - $sal_tecnico;
            echo "O código inserido é <strong>$cod_func</strong> e percetence a um 
            <strong>TECNICO</strong><br>O salário actual é $sal_gerente.<br> O novo salário é
            $novo_salário<br>A diferenca entre os salários é de $dif_sal";
        
        //Verificando condicao para o salario do ENGENHEIRO
        }elseif($cod_func == 103){
            $novo_salário = $sal_eng + ($sal_eng*0.30);
            $dif_sal = $novo_salário - $sal_eng;
            echo "O código inserido é <strong>$cod_func</strong> e percetence a um 
            <strong>GERENTE</strong><br>O salário actual é $sal_eng.<br> O novo salário é
            $novo_salário<br>A diferenca entre os salários é de $dif_sal";

        //Verificando condicao para o salario do OUTRO CARGO
        }else{
            $novo_salário = $sal_qualquer + ($sal_qualquer*0.40);
            $dif_sal = $novo_salário - $sal_qualquer;
            echo "O código inserido é <strong>$cod_func</strong> e percetence a um 
            <strong>OUTRO CARGO</strong><br>O salário actual é $sal_qualquer.<br> O novo salário é
            $novo_salário<br>A diferenca entre os salários é de $dif_sal";
        }

    ?>
    
</body>
</html>