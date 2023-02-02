<?php

// Converter string para array e depois exibir na tela
// carro - navio - helicóptero - barco - jangada

$frase = "carro - navio - helicóptero - barco - jangada";
$array = explode(" - ", $frase);

for ($i = 0; $i < count($array); $i++) {
    echo $array[$i] . "<br>";
}

?>