<?php

// Função Array_diff
// Analiza dois ou mais arrays e mostra qual a diferença entre eles
// Array_diff (arrays)
// Exemplos

$array1 = [1, 2, 3];
$array2 = [2, 4, 6];

$diff = array_diff($array1, $array2); // O que tem no array1 que não tem no array2

echo "A diferença do array 1 para o array 2 é ";

echo "<pre>";
print_r($diff);
echo "</pre>";

?>