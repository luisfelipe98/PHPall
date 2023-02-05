<?php

// While é uma estrutura de repetição que executa o código n vezes até satifazer sua condição
// Geralmente utilizamos um contador para sair do while

// Exemplos
$x = 0; // Contador

// Início da minha condição
while ($x <= 10) {
    echo $x . "<br>";
    $x++; // Contador sendo incrementado
}
echo "<br>";

// Invertendo a ordem
$x = 10;

while ($x >= 0) {
    echo $x . "<br>";
    $x--; // Contador sendo decrementado
}
echo "<br>";

// Passo no contador diferente
$z = 15;

while ($z >= 0) {
    echo $z . "<br>";
    $z -= 3; // Contador sendo decrementado de 3 em 3 
}
echo "<br>";
?>