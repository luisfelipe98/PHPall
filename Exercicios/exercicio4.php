<?php

// Exercicio para testar uma expressão e descobrir qual é o tipo de dado gerado

$teste = "5" * 12;
echo $teste. "<br>";

// Função gettype() serve para descobrir o tipo de dado gerado
echo $teste . " é do tipo " . gettype($teste) . "<br>";

//String e Integer gerando um número integer
// NÃO É RECOMENDADO FAZER OPERAÇÕES DESSE TIPO PRINCIPALMENTE ENVOLVENDO O TIPO DE DADO STRING

?>