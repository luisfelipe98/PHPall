<?php

// Função Explode
// Serve para converter uma string em array
// explode(separador da string, string)
// O delimitador PRECISA EXISTIR NA STRING, SENÃO VIRA ARRAY DE UMA FRASE
// Exemplo

$string = "O programador tava sem tempo para fazer o sistema";
$stringParaArray = explode(" ", $string);

echo "<pre>";
print_r($stringParaArray);
echo "</pre>";

// Função Implode
// Serve para converter um array em string
// implode(separador da string, string)
// Exemplo

$array = ["Maça", "Banana", "Laranja", "Uva", "Pera", "Abacaxi", "Coco"];

$string = implode(" ", $array);

echo $string . "<br>";

?>