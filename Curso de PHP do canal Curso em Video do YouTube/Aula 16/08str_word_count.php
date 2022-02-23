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
        //Funcao para contar palavras numa frase
            $frase = "Eu vou estudar PHP";
            $contar = str_word_count($frase);
            echo $contar;
        ?>
    </div>
</body>
</html>