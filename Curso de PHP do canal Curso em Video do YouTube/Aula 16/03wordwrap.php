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
            $t = "Aqui temos um texto qualquer  mksldlkds kjknkmdw wkdw  lkdcw wdkldc dwckld dw
            wdmkdkkdldwmk dwklkldw dwl dwklw  l;cdw dwc";
            $r = wordwrap($t, 2);
            echo $r;
        ?>
    </div>
</body>
</html>