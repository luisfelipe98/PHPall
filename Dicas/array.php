<?php

// Array é um tipo de dado que serve para agrupar um conjunto de valores
// Pode ser valores de qualquer tipo
// Sintaxe é [valor1, valor2, etc]
// Normalmente, os arrays mantém o mesmo tipo de dado dentro, mas não é uma regra

$numeros = [1,2,3];

// Podemos usa a função print_r() para exibir as informações dentro de um array;

print_r($numeros);
echo "<br>";

// A exibição de um array precisa ser ultizada pelo indice
// Exemplo:

echo $numeros[0];
echo "<br>";

// O índice de um array sempre começará no 0

// Array com mais de um tipo de dado

$arr = ["Luis", 0, true];
print_r($arr);

// Adicionando dados no Array manualmente

$array = [];

// Adicionando três itens nesse array vazio
$array[0] = 45;
$array[1] = "Layla";
$array[2] = "José";

echo "<pre>";
print_r($array);
echo "</pre>";

// Substituindo o array manualmente
$array[1] = "Camila"; // Mudei o valor do índice 1

echo "<pre>";
print_r($array);
echo "</pre>";

?>