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
            $op = isset($_GET["pv"])?$_GET["pv"]:0;

            switch ($op) {
                case 1:
                case 2:
                case 3:
                    echo "A sua provincia pertence a zona Norte";
                break;

                case 4:
                case 5:
                case 6:
                case 7:
                    echo "A sua provincia pertence a zona Centro";
                break;

                case 8:
                case 9:
                case 10:
                    echo "A sua pronvia pertence a zona Sul";
                break;

                default:
                    echo "Invalido";
            }
        ?>
    </div>
</body>
</html>