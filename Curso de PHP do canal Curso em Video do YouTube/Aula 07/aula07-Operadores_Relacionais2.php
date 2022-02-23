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
        $nota1 = $_GET["n1"];
        $nota2 = $_GET["n2"];
        $m = ($nota1 + $nota2)/2;
        echo "A media entre as notas $nota1 e $nota2 eh $m <br/>";

        $sit = ($m>7)?"Aprovado":"Reprovado";
        echo "A sua situacao eh $sit"

        ?>
    </div>
</body>
</html>