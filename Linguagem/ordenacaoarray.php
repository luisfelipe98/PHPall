<?php

// Ordenando array
// Para ordenar o array de forma CRESCENTE, utilizaremos a função sort
// Para ordenar o array de forma DECRESCENTE, utilizaremos a função rsort
// Exemplos

$numeros = [2,5,-1, 99, 1000, 345, 245, 56, 11, 98, 4004, 333, 679, 283, 1500, -100,-33];

// Ordenar o array de forma crescente
sort($numeros);

echo "<pre>";
print_r($numeros);
echo "</pre>";

$numeros2 = [2,5,-1, 99, 1000, 345, 245, 56, 11, 98, 4004, 333, 679, 283, 1500, -100,-33];

// Ordenar o array de forma decrescente
rsort($numeros2);

echo "<pre>";
print_r($numeros2);
echo "</pre>";

// Posso utilizar as funções em arrays de strings

$nomes = ["Aaron", "Tua", "Tom", "Cody", "Sarah", "Peter", "Mookie", "Freddie", "Clayton", "Michaela", "Lindsay"];

sort($nomes);

echo "<pre>";
print_r($nomes);
echo "</pre>";

$nomes2 = ["Aaron", "Tua", "Tom", "Cody", "Sarah", "Peter", "Mookie", "Freddie", "Clayton", "Michaela", "Lindsay"];

rsort($nomes2);

echo "<pre>";
print_r($nomes2);
echo "</pre>";

// Os métodos sort e rsort, quando trabalhados com strings, acentuação é deixada por último na comparação
// Se comparar João com José na função sort, José aparecerá na frente de João 

?>