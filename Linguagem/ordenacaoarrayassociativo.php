<?php

// Ordenando array associativo
// Se quiser ordenar um array associativo em ordem CRESCENTE SUAS CHAVES, função ksort
// Se quiser ordenar um array associativo em ordem DECRESCENTE SUAS CHAVES, função krsort
// Se quiser ordenar um array associativo em ordem CRESCENTE pelo VALOR das CHAVES, função asort
// Se quiser ordenar um array associativo em ordem DECRESCENTE pelo VALOR das CHAVES, função arsort

// Exemplos

$nomes = [
    "Lucas" => 30,
    "Paul" => 23,
    "Joaquim" => 35,
    "Anderson" => 18,
    "Kate" => 32,
    "Alicia" => 27  
];

// Ordenando o array ordem CRESCENTE pelas CHAVES
Ksort($nomes);

echo "Ordenando as CHAVES do array em forma CRESCENTE";
echo "<pre>";
print_r($nomes);
echo "</pre>";

$nomes2 = [
    "Lucas" => 30,
    "Paul" => 23,
    "Joaquim" => 35,
    "Anderson" => 18,
    "Kate" => 32,
    "Alicia" => 27  
];

// Ordenando o array ordem DECRESCENTE pelas CHAVES
krsort($nomes2);

echo "Ordenando as CHAVES do array em forma DECRESCENTE";
echo "<pre>";
print_r($nomes2);
echo "</pre>";

$nomes3 = [
    "Lucas" => 30,
    "Paul" => 23,
    "Joaquim" => 35,
    "Anderson" => 18,
    "Kate" => 32,
    "Alicia" => 27  
];

// Ordenando o array ordem CRESCENTE pelo VALUES
asort($nomes3);

echo "Ordenando os VALUES do array em forma CRESCENTE";
echo "<pre>";
print_r($nomes3);
echo "</pre>";

$nomes4 = [
    "Lucas" => 30,
    "Paul" => 23,
    "Joaquim" => 35,
    "Anderson" => 18,
    "Kate" => 32,
    "Alicia" => 27  
];

// Ordenando o array ordem DECRESCENTE pelo VALUES
arsort($nomes4);

echo "Ordenando os VALUES do array em forma DECRESCENTE";
echo "<pre>";
print_r($nomes4);
echo "</pre>";
?>