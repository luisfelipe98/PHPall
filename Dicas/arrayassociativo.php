<?php

// Array associativo é um array contendo chave e valor
// Chave entre aspas e uma seta(=>) apontando o valor
// Exemplo $array = ['chave' => 'valor'];

$array = ['nome' => 'Shark', 'patas' => 4, 'cor' => 'marrom'];

print_r($array);
echo "<br>";
echo $array['nome'] . "<br>";

// Adicionando dados no Array associativo manualmente

$array = [];

// Adicionanado três elementos nesse array
$array["carro"] = "Jetta";
$array["moto"] = "Yamaha";
$array["fruta"] = "Maça";

echo "<pre>";
print_r($array);
echo "</pre>";

// Substituindo o array manualmente
$array["carro"] = "BMW"; // Mudei o valor do índice carro

echo "<pre>";
print_r($array);
echo "</pre>";

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