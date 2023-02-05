<?php

/* Operadores aritméticos
    Serve para fazer operações comuns de matemática
    Operador de soma: +
    Operador de subtração: -
    Operador de multiplicação: *
    Operador de divisão: /
*/

// Exemplos

$n1 = 15;
$n2 = 3;

// Fazendo as quatro operações
$soma = $n1 + $n2;
$subtracao = $n1 - $n2;
$multiplicacao = $n1 * $n2;
$divisao = $n1 / $n2;

// Soma
echo "A soma entre " . $n1 . " + " . $n2 . " = " . $soma . "<br>";

// Subtracao
echo "A subtração entre " . $n1 . " - " . $n2 . " = " . $subtracao . "<br>";

// Multiplicação
echo "A multiplicação entre " . $n1 . " * " . $n2 . " = " . $multiplicacao . "<br>";

// Divisão
echo "A divisão entre " . $n1 . " / " . $n2 . " = " . $divisao . "<br>";

// Operador de Exponenciação
// O mesmo na matemática de dizer:
// Um número elevado a número da quanto?
// Operador de exponenciação: **

// Exemplo

$exponenciacao = $n1 ** $n2;

// Exponenciação
echo "A exponenciação entre " . $n1 . " elevado a " . $n2 . " = " . $exponenciacao . "<br>";


/* Operadores de comparação
    Comparam resultados para saber se são verdadeiro ou falso (Retornam um booleano)
    Operador de igualdade: ==
    Operador de idêntico a: === (Compara não só o valor, mas o tipo de dado também)
    Operador de diferença: !=
    Operador de não idêntico a: !==
    Operador de maior e maior ou igual a: > e >=
    Operador de menor e menor ou igual a: < e <= 
*/

// Exemplo de operador de igualdade e diferença
$n1 = 10;
$n2 = 15;

// Exemplo de igualdade
if ($n1 == 10) {
    echo "Os números são iguais <br>";
}

// Exemplo de diferença
if ($n2 != $n1) {
    echo "Os números são diferentes <br>";
}

// Exemplo de operador de idêntico a e não idêntico a
$num1 = 40;
$num2 = 40;
$num3 = "40"; 

// Exemplo de idêntico a
if ($num1 === $num2) {
    echo "Estes números são idênticos <br>";
}

// Exemplo de não idêntico a
if ($num1 !== $num3) {
    echo "Estes dados não são idênticos <br>";
}

// Exemplo de operador de maior e maior igual que
$num1 = 555;
$num2 = 555;
$num3 = 556;

// Exemplo de maior
if ($num3 > $num1) {
    echo $num1 . " é maior que " . $num3 . "<br>";
}

// Exemplo de maior ou igual
if ($num1 >= $num2) {
    echo $num1 . " é maior ou igual que " . $num2 . "<br>";
}

// Exemplo de operador de menor e menor igual que
$num1 = 111;
$num2 = 111;
$num3 = 110;

// Exemplo de menor
if ($num3 < $num1) {
    echo $num1 . " é menor que " . $num3 . "<br>";
}

// Exemplo de menor ou igual
if ($num1 <= $num2) {
    echo $num1 . " é menor ou igual que " . $num2 . "<br>";
}

// Operadores de atribuição
// Principal função é atribuir valores em uma variável
// São estes operadores: =, +=, -=, *=, /= e %=
// Eles fazem a operação antes de atribuir valores (Tirando o =)

//Operador +=
$n = 0;
$n += 10; // $n = $n + 10

echo $n . "<br>";

//Operador -=
$n = 0;
$n -= 10; // $n = $n - 10

echo $n . "<br>";

//Operador *=
$n = 1;
$n *= 10; // $n = $n * 10

echo $n . "<br>";

//Operador /=
$n = 1;
$n /= 10; // $n = $n / 10

echo $n . "<br>";

//Operador %=
$n = 15;
$n %= 10; // $n = $n % 10

echo $n . "<br>";

// Operadores de auto incremento e decremento
// Serve para adicionar 1 ou decrementar 1
// Muito utilizados em estruturas de repetição

$incre = 0;
$decre = 0;

// Utilização dos operadores
$incre++;
$decre--;

echo $incre . " " . $decre . "<br>";

// Operador ternário
// Estrutura de condição resumida
// Usamos o ? e : para separar as ordens

// Exemplo
echo 20 > 2 ? "Deu verdadeiro <br>" : "Deu falso <br>";

echo 20 < 2 ? "Deu verdadeiro <br>" : "Deu falso <br>";
?>