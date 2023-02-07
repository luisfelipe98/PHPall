<?php

// Função Array_slice
// Serve para resgatar uma faixa de elementos do array
// array_slice(array, onde começa a resgatar, quantos elementos quero resgatar a partir do índice passado)
// Exemplos

$array = [1, 5, 9, 13, 17, 21, 25, 29, 33, 37, 41, 45, 49];

$slice1 = array_slice($array, 3, 6); // Pegar do 13 até o 33

echo "<pre>";
print_r($slice1);
echo "</pre>";

$slice2 = array_slice($array, 6, 6); // Pegar do 25 ao 45

echo "<pre>";
print_r($slice2);
echo "</pre>";

// Se omitir o terceiro parâmetro, ele irá pegar do índice até o final do array
$slice3 = array_slice($array, 8); // Pegar do 33 em diante 

echo "<pre>";
print_r($slice3);
echo "</pre>";

// Se, no terceiro parâmetro, colocar número negativo, 
// ele irá pegar do final do array e subtrair até o limitador imposto
$slice4 = array_slice($array, 7, -3); // Pegar do 29 ao 37

echo "<pre>";
print_r($slice4);
echo "</pre>";

?>