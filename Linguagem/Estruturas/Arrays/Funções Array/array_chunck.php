<?php

// Função Array_chunck
// Serve para dividir um array grande em VÁRIAS PARTES IGUAIS
// Array_chunck(array, número de elementos que cada array terá)
// Exemplo

$array = range(1, 511, 15);

$arrayDividido = array_chunk($array, 5); // Quero arrays de 5 elementos cada

echo "<pre>";
print_r($arrayDividido);
echo "</pre>";

?>