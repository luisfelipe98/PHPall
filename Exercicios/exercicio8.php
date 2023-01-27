<?php

// Faça três operações utilizando o operador lógico OR

if ("João" !== "Camila" || (14 * 5 == 70 && 77 / 11 == 7)) { // Verdadeiro OR (Verdadeiro AND Verdadeiro)
    echo "As comparações resultam em uma expressão verdadeira <br>";
}

if ("Carlos" != "Sophia" || -1 > -10) { // Expressão Verdadeira
    echo "As comparações resultam em uma expressão verdadeira <br>";
}

if (7000 === "Sete Mil" || 4500 % 45 != 0) { // Expressão Falsa
    echo "If nº3 <br>";
} else {
    echo "As comparações resultam em uma expressão falsa <br>";
}

?>