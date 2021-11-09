<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TPC - exercicio 2</title>
</head>
<body>
    <p>2 - Entrar com um NOME, SEXO e IDADE da pessoa, se a pessoa for do sexo FEMININO e tiver
            menos que 25 anos, imprimir NOME e a mensagem "ACEITA", caso contrario, imprimir 
            NOME e a mensagem "NAO ACEITA"</p>
        <?php
            $nome = "Fernando Gomes";
            $idade = 20;
            $sexo = 'M';    //Variavel sujeita a dois caracteres 'M' para masculino e 'F' para Feminino
            if (($sexo == 'F') && ($idade < 25)) {
                echo "Nome: $nome <br> <b>ACEITA</b>";
            } else {
                echo "Nome: $nome <br> <b>NAO ACEITA</b>";
            }  
        ?>

    
</body>
</html>