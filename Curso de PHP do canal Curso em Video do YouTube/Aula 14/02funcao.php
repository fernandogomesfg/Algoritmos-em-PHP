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
            function soma ($a, $b){
                $s = $a + $b;
                return $s;
            }
            $x = 4;
            $y = 6;
            $r = soma($x, $y);

            echo "A soma entre $x e $y e igual a $r";
        ?>
    </div>
</body>
</html>