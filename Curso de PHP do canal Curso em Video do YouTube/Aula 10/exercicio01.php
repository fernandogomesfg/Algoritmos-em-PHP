<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <?php
            $n = isset($_GET["num"])?$_GET["num"]:0;
            $op = isset($_GET["oper"])?$_GET["oper"]:1;

            switch ($op){
                case 1:
                    $r = $n * 2;
                break;
                
                case 2:
                    $r = $n*$n*$n;
                break;

                case 3:
                    $r = sqrt($n);
                   
                break;

                default;
                echo "Erro";
            }

            echo "O resultado da operacao e $r "
        ?>
    </div>
</body>
</html>