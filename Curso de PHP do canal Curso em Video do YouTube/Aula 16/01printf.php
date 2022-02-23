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
            $p = "leite";
            $pr = 4.5;

            //echo "O $p custa $pr MT";
            printf("O %s custa %.2f", $p, $pr);
        ?>
    </div>
</body>
</html>