<?php

// Função Array_merge
// Serve para unir dois ou mais arrays
// Array_merge(array)
// Exemplo

$array1 = [4, 9, 15];
$array2 = [-1, -15, -67.6];
$array3 = [-44.6, -90, -7.2];

// Juntando os arrays
$arrayMerge = array_merge($array1, $array2, $array3);

// Exibindo na tela
echo "O array depois do merge ficou ";
for ($k = 0; $k < count($arrayMerge); $k++) {
    if (count($arrayMerge) - 1 === $k) { // Último elemento
        echo $arrayMerge[$k] . ". <br>";
    } else {
        echo $arrayMerge[$k] . ", ";
    }
}

?>