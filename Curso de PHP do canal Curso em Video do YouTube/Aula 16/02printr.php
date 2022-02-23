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
            $v[0] = 4;
            $v[1] = 8;
            $v[2] = 3;
            //print_r($v);
            //var_dump($v);
            var_export($v);
            echo "<br>";
            
            //Outra forma de criar um vector
            $v2 = array (1,4,75,41,4,7,8);
            print_r($v2);
        ?>
    </div>
</body>
</html>