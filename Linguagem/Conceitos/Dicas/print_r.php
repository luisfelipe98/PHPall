<?php

// Print_r é uma função que retorna o valor de uma varável, objeto etc
// MUITO USADO PARA FAZAR DEPURAÇÃO DE CÓDIGO
// print_r(expressão);
// Exemplos

// Var_dump mostrando resultado dessa expressão
print_r("Hello World dentro do print_r!!!");
echo "<br>";

// Agora usando variáveis
$a = 45.51;
$b = true;

// Só aceita UMA variável por vez
print_r($a);
echo "<br>";

print_r($b);
echo "<br>";

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
print_r($array);
echo "</pre>";

?>