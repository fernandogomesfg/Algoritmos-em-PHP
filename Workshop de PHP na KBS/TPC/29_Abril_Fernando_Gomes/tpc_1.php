<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TPC - exercício 1</title>
</head>
<body>
    <p>1 - Entrar com um número e mostrar, se ele é divisivel por 10, 
        por 5, por 2. Ou se não é divisivel por nenhum deles</p>
        <?php
            $num = 10;
            if (($num % 2 == 0) || ($num % 5 == 0) || ($num % 10 == 0)) {
                echo "O número <strong>$num</strong> é divisivel por 2 ou 5, ou ainda por 10";
            } else {
                echo "O número <strong>$num</strong> não é divisivel por 2 ou 5, e nem por 10";
            }  
        ?>

    
</body>
</html>