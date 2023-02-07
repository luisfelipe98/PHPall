<?php

// Função Implode
// Serve para converter um array em string
// implode(separador da string, string)
// Exemplo

$array = ["Maça", "Banana", "Laranja", "Uva", "Pera", "Abacaxi", "Coco"];

$string = implode(" ", $array);

echo $string . "<br>";

?>