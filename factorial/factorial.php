
<?php

    $num = 10;   //numero que sera calculado o factorial
    $resut = 1; //variavel que ira albergar o resultado do factorial
    for ($i= $num; $i > 1 ; $i--) { 
        $resut*=$i;
    }
    echo "O factorial de $num é $resut";

?>
