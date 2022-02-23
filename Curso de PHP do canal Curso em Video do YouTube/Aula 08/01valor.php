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
            $valor = $_GET["v"];
            $rq = sqrt($valor);
            echo "O valor enviado foi $valor e a sua raiz quadrada eh " .number_format($rq,2);
        ?>
        <a href="01exercicio.html">Voltar</a> 
    </div>
</body>
</html>
