<?php

// Funçao Array_reduce
// Serve para reduzir um array em um único valor
// Array_reduce(array, função em foramto de string)
// Exemplos

// Somar todos os items de um array
function soma ($a, $b) {
    return $a + $b;
}

$array = range(10, 100, 7);

// Usando o array_reduce
$resultado = array_reduce($array, "soma");

echo "A soma de todos os items do array é " . $resultado . "<br>";

// Subtrair todos os items do array
function subtracao ($a, $b) {
    return $a - $b;
}

$array = range(40, -40, -13);

// Usando o array_reduce
$resultado = array_reduce($array, "subtracao");

echo "A subtracao de todos os items do array é " . $resultado . "<br>";

?>