<?php

// Criar um array (10 a 20) e exibir apenas os numeros ímpares

$array = [];
$valor = 10;

for ($i = 0; $i < 11; $i++) {
    array_push($array, $valor); // Adiciona valor dentro do array na última posição
    $valor++;
}

for ($j = 0; $j <= 10; $j++) {
    if ($array[$j] % 2 === 1) {
        echo $array[$j] . " é impar <br>";
    }
}

?>