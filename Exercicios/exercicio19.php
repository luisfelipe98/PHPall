<?php

// Criar um array de 10 a 100, com incremento de 10
// Nos valores 30 e 60, pule de execução

$array = [10,20,30,40,50,60,70,80,90,100];

$cont = count($array) - 1;

while ($cont >= 0 ) {
    if ($array[$cont] === 60 || $array[$cont] === 30) {
        $cont--;
        continue;
    }
    echo "Exibindo número " . $array[$cont] . "<br>";
    $cont--;
}

?>