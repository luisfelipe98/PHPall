<?php

// Alterando o case das palavras
// Seria por as palavras com todos os caracteres maiúsculos ou minúsculos
// Para isso, tem duas funções
// Strtolower e strtoupper
// Strtolower deixa todos os caracteres minúsculos
// Strtoupper deixa todos os caracteres maiúsculos
// Exemplos

$stringUpper = "CARACTERES MAIUSCULOS";
$stringLower = "caracteres minusculos";

echo "Invertendo " . $stringUpper . " para " . strtolower($stringUpper) . "<br>";
echo "Invertendo " . $stringLower . " para " . strtoupper($stringLower) . "<br>";

// Mais duas funções para alterar case de palavras
// Ucfirst e Ucwords
// Ucfirst deixa maiúsculo a PRIMEIRA LETRA DA STRING
// UCwords deixa maiúsculo a PRIMEIRA LETRA DE CADA PALAVRA DA STRING
// Exemplos

$string1 = "testando se a primeira letra da frase ficará maiúscula";
$string2 = "testando se a primeira letra de cada palavra ficará maiúscula";

echo ucfirst($string1) . "<br>";
echo ucwords($string2) . "<br>";

?>