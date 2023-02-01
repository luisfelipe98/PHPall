<?php

// Criar um array de números
// Colocar todos os numeros acima de 7 em um novo array e exibi-lo

function analisaArray($array) {
    $resultado = [];
    for ($i = 0; $i < count($array); $i++) {
        if ($array[$i] > 7) {
            array_push($resultado, $array[$i]);
        }
    }
    return $resultado;
}

$array = [5,33,7,8,41,100,111,67,1,-5,40,89,2,-33,6,0,9];

$resultado = analisaArray($array);

$i = 0;
do {
    echo $resultado[$i] . "<br>";
    $i++;
} while ($i < count($resultado));

?>