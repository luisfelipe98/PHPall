<?php

// Função Substr
// Faz a função de resgatar parte de uma string
// substr (string, inicio, tamanho da substring)
// Exemplos

$string = "Esta é minha string";

// Vamos dizer que quero pegar a palavra minha

$minha = substr($string, 8, 5); // String, Onde começa, tamanho da nova string 

echo $minha . "<br>";

// Podemos passar no comprimento número negativo

$minhaString2 = substr($string, 8, -3); // Vai tirar três caracteres do FINAL da string

echo $minhaString2 . "<br>";

?>