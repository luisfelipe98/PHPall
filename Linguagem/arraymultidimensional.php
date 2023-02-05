<?php

// Array multidimensional são arrays dentro de um array
// Conhecidos como matrizes
// Nesse tipo de array, ultizamos índices para acessar o array e seus elementos
// Exemplo

// Criando o array multidimensional
$array = [
    [1,2,3],
    [4,5,6]
];

// Acessando os elementos desse array manualmente
echo $array[0][1] . "<br>"; // Segundo elemento do 1º array
echo $array[1][2] . "<br>"; // Terceiro elemento do 2º array

echo "<pre>";
print_r($array);
echo "</pre>";

// O count funciona nesses arrays multidimensionais
echo count($array) . "<br>"; // Aqui mostra quantos elementos tem o array como um todo, ou seja, igual a 2  
echo count($array[1]) . "<br>"; // Aqui mostra quantos elementos tem o array de índice 1, ou seja, igual a 3 
?>