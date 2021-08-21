<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ordem Descrescente</title>
</head>
<body>
    <!--
        Descrição: Entrar com três números e imprimir-los em ordem decrescente
        Autor: Fernando Gomes
        Data: 21/08/2021
    -->
    <center>
        <form method="post" action="Ordem_Decrescente.php">Ordem_Descrescente
            <h4>Digite os 3 números</h4>
            <input type="number" name="num1" required="">
            <input type="number" name="num2" required="">
            <input type="number" name="num3" required=""><br>
            <input type="submit" name="verificar" value="Verificar" style="margin-top: 10px;">
        </form>

        <?php
            
            if(isset($_POST['verificar'])){
                //Criando as variáveis que irão receber os 3 números
                $num1 = $_POST['num1'];
                $num2 = $_POST['num2'];
                $num3 = $_POST['num3'];

                //Verficando se os campos foram preenchidos, mas essa verificação já é feita pelo formulário
                if (($num1 == "") && ($num2 == "") && ($num3 == "")) {
                    echo "Preencha todos os campos";
                } else {
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
                }
                
            }
            
        
                
            
            
        ?>
    </center>
    
        

    
</body>
</html>