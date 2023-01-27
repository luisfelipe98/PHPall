<?php

// If é uma estrutura de controle que checa se a expressão é VERDADEIRA

// Exemplos
if (5 > 2) { // Expressão dando como VERDADEIRA, executa o que estiver dentro
    echo "Deu certo! Entrou dentro do if <br>";
}

if (30 % 2 > 0) { // Expressão dada como FALSA, então o if NÃO será executado
    echo "Expressão falsa não entra no if <vr>";
}

// Operadores lógicos pode ser utilizados dentro do if
if (5 <= 1 || 10 === 10) { // Com o operador lógico OR (||), só um dos lados precisa ser verdadeiro 
    echo "Deu certo! Entrou dentro do if com condição lógica<br>";
}

// Usando variáveis
$a = 15;
$b = 5;
$c = 1;

if ($a % $b != $c ) {
    echo "Deu certo! Entrou dentro do if de variáveis<br>";
}
?>