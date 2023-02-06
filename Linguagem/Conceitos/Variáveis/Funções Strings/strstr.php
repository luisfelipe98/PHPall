<?php

// Função Strstr
// Encontra o RESTO DA STRING APÓS O TEXTO ENCONTRADO
// Strstr (string, o que quer encontrar, [antes da string ou não : boolean])
// É CASE-SENSITIVE
// Retorna dois tipos de valores
// String com o resto da string
// Boolean SE NÃO ENCONTRAR NADA
// Exemplos

$string = "Testando o resto da string para ver se da certo";

$testeEncontrar = strstr($string, "resto"); // Pegando de resto pra frente

echo $testeEncontrar . "<br>";

$testeEncontrar2 = strstr($string, "resto", true); // Pegando ANTES do resto

echo $testeEncontrar2 . "<br>";

$testeEncontrar3 = strstr($string, "ing"); // Pegando um pedaço de palavra

echo $testeEncontrar3 . "<br>";

$testeEncontrar4 = strstr($string, "Java"); // Não existe a palavra

if ($testeEncontrar4 === false) {
   echo "Texto não encontrado <br>";
}

?>