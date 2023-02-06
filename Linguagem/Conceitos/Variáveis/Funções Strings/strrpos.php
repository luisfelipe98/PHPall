<?php

// Função Strrpos
// Serve para encontrar A ÚLTIMA OCORRÊNCIA de uma string dentro de outra string
// Strrpos(string, o que quero encontrar)
// O RETORNO DA FUNÇÃO DÁ O NÚMERO COMO SE FOSSE PARTE DE UM ARRAY
// ELE ENCONTRA NÃO SÓ PALAVRAS COMPLETAS, MAS PEDAÇOS DE STRING
// Retorna dois tipos de dados
// Int se encontrar a palavra (será o índice de onde começa a palavra/frase)
// Boolean se não encontrar nada
// Exemplos

$string = "Estamos testando o método strpos, com o strpos podemos encontrar strings";

$testeEncontrar = strrpos($string, "strpos");

echo $testeEncontrar . "<br>";

$testeEncontrar2 = strrpos($string, "Java");

// Testando para ver se deu false
if ($testeEncontrar2 === false) {
   echo "Palavra não encontrada <br>"; 
}

$testeEncontrar3 = strrpos($string, "mo");

echo $testeEncontrar3 . "<br>";

?>