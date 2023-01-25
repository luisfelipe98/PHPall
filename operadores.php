<?php

// Operadores de auto incremento e decremento
// Serve para adicionar 1 ou decrementar 1
// Muito utilizados em estruturas de repetição

$incre = 0;
$decre = 0;

// Utilização dos operadores
$incre++;
$decre--;

echo $incre . " " . $decre . "<br>";

/* Operadores de comparação
    Comparam resultados para saber se são verdadeiro ou falso (Retornam um booleano)
    Operador de igualdade: ==
    Operador de idêntico a: === (Compara não só o valor, mas o tipo de dado também)
    Operador de diferença: !=
    Operador de não idêntico a: !==
    Operador de maior e maior ou igual a: > e >=
    Operador de menor e menor ou igual a: < e <= 
*/

// Exemplo de operador de igualdade e diferença
$n1 = 10;
$n2 = 15;

// Exemplo de igualdade
if ($n1 == 10) {
    echo "Os números são iguais <br>";
}

// Exemplo de diferença
if ($n2 != $n1) {
    echo "Os números são diferentes <br>";
}

// Exemplo de operador de idêntico a e não idêntico a
$num1 = 40;
$num2 = 40;
$num3 = "40"; 

// Exemplo de idêntico a
if ($num1 === $num2) {
    echo "Estes números são idênticos <br>";
}

// Exemplo de não idêntico a
if ($num1 !== $num3) {
    echo "Estes dados não são idênticos <br>";
}
?>