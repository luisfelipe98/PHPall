<?php

// Var_dump é uma função que retorna o tipo, valor e quantidade de uma varável, objeto etc
// MUITO USADO PARA FAZAR DEPURAÇÃO DE CÓDIGO
// var_dump(expressão ou expressões);
// Exemplos

// Var_dump mostrando resultado dessa expressão
var_dump("Hello World dentro do var_dump!!!");
echo "<br>";

// Agora usando variáveis
$a = 45.51;
$b = true;

var_dump($a, $b);

// Muito prático para ver estruturas de arrays
$array = [
    "Carlos",
    false,
    78.90,
    400,
    -78,
    range(0, 5, 1),
    range(0, -10, -2),
    range("a", "f", 1),
    range("z", "f", -2)
];

echo "<pre>";
var_dump($array);
echo "</pre>";

?>