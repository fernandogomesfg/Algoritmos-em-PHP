<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TPC - exercicio 3</title>
</head>
<body>
    <p>3 - Entrar com três números e imprimir-los em ordem decrescente"</p>
        <?php
            $num1 = 120;
            $num2 = 7;
            $num3 = 100;

            if (($num1 >= $num2) && ($num2 >= $num3)) {
                echo "Os três números na ordem decrescente são: $num1, $num2 e $num3";
                }
            elseif (($num1 >= $num3) && ($num3 >= $num2)) {
                echo "Os três números na ordem decrescente são: $num1, $num3 e $num2";
                }
            elseif (($num2 >= $num1) && ($num1 >= $num3)) {
                echo "Os três números na ordem decrescente são: $num2, $num1 e $num3";
                }
            elseif (($num2 >= $num3) && ($num3 >= $num1)) {
                echo "Os três números na ordem decrescente são: $num2, $num3 e $num1.";
                }
            elseif (($num3 >= $num1) && ($num1 >= $num2)) {
                echo "Os três números na ordem decrescente são: $num3, $num1 e $num2";
                }
            else {
                echo "Os três números na ordem decrescente são: $num3, $num2 e $num1";
            }
        
                
            
            
        ?>

    
</body>
</html>