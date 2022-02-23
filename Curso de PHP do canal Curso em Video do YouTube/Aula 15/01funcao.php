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
        function teste (&$x){
            $x += 2;
            echo "O valor de x e $x";
            echo "<br>";
        
        }

        $a = 3;
        teste ($a);
        echo "O valor de a e $a";
    ?>
    </div>
</body>
</html>