<?php 

// Operador de conversão serve para forçar uma variável a ser do tipo especificado
// Tem três tipos: Int, Float e String

$a = "100"; // String

if ($a !== 100) {
    echo $a . " é uma String <br>";
}

// Agora forçando ser um int
$a = (int) "100"; // Usando a conversão

if ($a === 100) {
    echo $a . " é um Integer <br>";
}

// Agora forçando ser um int
$a = (float) "100";

if ($a === 100.0) {
    echo $a . " é um Float <br>";
}
?>