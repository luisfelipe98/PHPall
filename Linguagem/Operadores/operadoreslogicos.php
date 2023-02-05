<?php

// Operadores lógicos são usadas para criar operações condicionais complexas
// São três operadores considerados condicionais (NOT, AND e OR)

// Operador NOT
// Usamos o símbolo !
// Inverte o resultado booleano de uma expressão
// Se é falso, vira verdadeiro e vice-versa 

// Exemplos

echo "Tabela Verdade do Operador Lógico NOT <br>";

if (!(60 / 3 == 20)) { // Expressão verdadeira virando falsa
    echo "If nº1 <br>";
} else {
    echo "Verdadeiro virando falso <br>";
}

if (!(20 === "20")) { // Expressão falsa virando verdadeira
    echo "Falso virando verdadeiro <br><br>";
} else {
    echo "If nº2 <br>";
}

// Operador AND
// Usamos o símbolo &&
// Só será verdadeiro a expressão se AMBAS AS COMPARAÇÕES FOREM VERDADEIRAS

// Exemplos
$n1 = 3;
$n2 = 30;
$n3 = 50;
$n4 = 8;

echo "Tabela Verdade do Operador Lógico AND <br>";

if ($n1 > $n2 && $n3 > $n4) { // Falso AND Verdadeiro == Expressão Falsa
    echo "If nº1 <br>"; 
} else {
    echo "Falso AND Verdadeiro == Falso <br>";
}

if (($n2 / $n1 == 10) && $n3 < $n4) { // Verdadeiro AND Falso == Expressão Falsa
    echo "If nº2 <br>";
} else {
    echo "Verdadeiro AND Falso == Falso <br>";
}

if ($n1 == "João" && ($n3 % $n4 == 0)) { // Falso AND Falso == Expressão Falsa
    echo "If nº3 <br>";
} else {
    echo "Falso AND Falso == Falso <br>";
}

if (($n2 % $n1 == 0) && $n3 != $n4) { // Verdadeiro AND Verdadeiro == Expressão Verdadeira
    echo "Ambas expressões verdadeiras é o ÚNICO JEITO de ser VERDADE o operador AND <br><br>";
}

// Operador OR
// Usamos o símbolo ||
// Resulta em VERDADEIRO se QUALQUER UM DOS LADOS FOR VERDADEIRO
// Resulta em FALSO se AMBAS AS EXPRESSÕES FOR FALSO

// Exemplos
$n1 = 70;
$n2 = 45;
$n3 = 5;
$n4 = 7;

echo "Tabela Verdade do Operador Lógico OR <br>";

if ($n1 % $n4 == 0 || $n2 % $n3 == 0) { // Verdadeiro OU Verdadeiro == Expressão Verdadeira
    echo "Verdadeiro OU Verdadeiro == Verdadeiro <br>";
}

if ($n1 === $n2 || $n3 != $n4) { // Falso OU Verdadeiro == Expressão Verdadeira
    echo "Falso OU Verdadeiro == Verdadeiro <br>";
}

if ($n1 != "Camila" || $n3 * $n4 == $n2) { // Verdadeiro OU Falso == Expressão Verdadeira
    echo "Verdadeiro OU Falso == Verdadeiro <br>";
}

if ($n2 % $n4 != 3 || $n4 === "Sete") { // Falso OU Falso == Expressão Falsa
    echo "If nº4 <br>";
} else {
    echo "Ambas expressões falsas é o ÚNICO JEITO de ser FALSO o operador OR <br>";
}

?>