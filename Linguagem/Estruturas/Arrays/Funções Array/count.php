<?php

// Função count
// Serve para descobrir a quantidade de elementos do array
// Retorna um valor int
// Exemplo

$array = range(1, 100, 3);

echo "<pre>";
print_r($array);
echo "</pre>";

echo "O array tem " . count($array) . " elementos <br>";

?>