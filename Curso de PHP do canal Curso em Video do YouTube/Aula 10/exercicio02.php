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
            $d = isset($_GET["ds"])?$_GET["ds"]:0;

            switch ($d) {
                case 2:
                case 3:
                case 4:
                case 5:
                case 6:
                    echo "Levante e va trabalhar/estudar";
                break;
                
                case 7:
                case 8:
                    echo "Descanse";
                break;

                default:
                    echo "O dia escolhido nao existe";
            }
        ?>
    </div>
</body>
</html>