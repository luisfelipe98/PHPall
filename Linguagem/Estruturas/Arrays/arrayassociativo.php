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

?>