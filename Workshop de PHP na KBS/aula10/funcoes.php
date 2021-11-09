<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funcoes</title>
</head>
<body>
    <?php
    
        /*Declarando uma funcao
        function nome_da_funcao(){
            comandos
        }
        */
        /*
        function ola(){
            echo "Ola Mundo!";
        }
        ola();*/

       /* //Funcao sem parametro
        function soma(){
            $result = 5 +7;
            echo "$result";
        }
        soma();*/

        /*//Funcao com parametro
        function somaParametros($num1, $num2){
            $result = $num1 + $num2;
            echo "$result";
        }
        somaParametros(1,1);*/
/*
        //funcao com PADRAO e por DEFEITO
        function mostrar($mensagem = "Tech Knowledge Business School"){
            echo "Bem Vindo ".$mensagem;    //por padrao mostar isso
        }
        mostrar("A PHP");    //se for indicado o parametro
        */

        //Funcao somando com outros valores (variavel fora da funcao == variavel global)
        //Funcao com variavel Global
       $variavel = 5;
        function adicionar(){
            global $variavel;
            $result = 5 + $variavel;
            echo "$result";

        }
        adicionar();

    ?>
    
</body>
</html>