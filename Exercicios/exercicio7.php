<?php

// Faça três expressões utilizando o operador lógico AND

if ("Teste" === "João" && 15 >= 8) { // Expressão Falsa
    echo "If nº1 <br>";
} else {
    echo "As comparações resultam em uma expressão falsa <br>";
}

if (47 % 5 == 2 && 67 === "Gabriel") { // Expressão Falsa
    echo "If nº2";
} else {
    echo "As comparações resultam em uma expressão falsa <br>";
}

if (1000 / 100 == 10 && "Lucas" != "Ana") { // Expressão Verdadeira
    echo "As comparações resultam em uma expressão verdadeira <br>";
} else {
    echo "If nº3";
}
?>