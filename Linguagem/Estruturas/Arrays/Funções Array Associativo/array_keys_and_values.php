<?php

// Array_keys e Array_values
// Array_keys serve para criar um array SÓ CONTENDO AS CHAVES DE UM ARRAY ASSOCIATIVO
// Array_values serve para criar um array SÓ CONTENDO OS VALORES DE UM ARRAY ASSOCIATIVO
// Exemplo

$carro = [
    "marca" => "BMW",
    "motor" => "2.4",
    "teto_solar" => true,
    "cambio" => "automático",
    "portas" => "4"
];

// Usando as funções
$chaves = array_keys($carro);
$valores = array_values($carro);

// Exibi-las na tela
echo "<pre>";
print_r($chaves);
echo "</pre>";

echo "<pre>";
print_r($valores);
echo "</pre>";

?>