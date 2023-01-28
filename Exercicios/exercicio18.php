<?php

// Criar um loop qu vai até o número 30
// Contador começa no 4, dois de incremento
// Quando chegar ao número 24, sair do loop

$cont = 4;

while ($cont != 30) {
    echo $cont . "<br>";

    if ($cont === 24) {
        echo "Saindo do loop <br>";
        break;
    } 
    
    $cont += 2;
}

?>