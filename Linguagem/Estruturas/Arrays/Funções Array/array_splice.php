<?php

// Função Array_splice
// Serve para remover e resgatar uma faixa de elementos do array
// array_splice(array, onde começa a remover ou resgatar, quantos elementos quero remover ou resgatar a partir do índice passado)
// Exemplos

$array = [1, 2, 3, 4, 5, 6];

// Remover o elemento 2 e 3 do array
$removidos = array_splice($array, 1, 2);

echo "<pre>";
print_r($removidos);
echo "</pre>";

// Com a remoção o array original é modificado

echo "<pre>";
print_r($array);
echo "</pre>";

$array2 = [1, 2, 3, 4, 5, 6];

// Se não passar o terceiro parâmetro, ele remove do índice até o final
$removidos = array_splice($array2, 3); //Removendo do 4 pra frente

echo "<pre>";
print_r($array2);
echo "</pre>";

$array3 = [1, 2, 3, 4, 5, 6];

// Se, no terceiro parâmetro, colocar número negativo, 
// ele irá pegar do final do array e subtrair até o limitador imposto
$removidos = array_splice($array3, 1, -1); // Deixar os elementos 1 e 6

echo "<pre>";
print_r($array3);
echo "</pre>";

?>