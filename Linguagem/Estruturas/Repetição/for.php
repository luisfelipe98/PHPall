<?php

// For é uma estrutura de repetição
// É a estrutura mais utilizada
// Sintaxe é organizada e fácil de se entender
// Estrutura: contador; condição; incremento/decremento

// Exemplos

for ($i = 1; $i <= 10; $i++) {
    echo "Testando for incrementando " . $i . "<br>";
}
echo "<br> <br> <br>";

for ($j = 10; $j > 0; $j--) {
    echo "Testando for decrementando " . $j . "<br>";
}
echo "<br> <br> <br>";

for ($x = 1; $x <= 10; $x++) {
    if ($x === 10) {
        break;
    } else if ($x === 5 || $x === 7) {
        continue;
    } else {
        echo "Testanto for com break e continue " . $x . "<br>";
    }
}
?>