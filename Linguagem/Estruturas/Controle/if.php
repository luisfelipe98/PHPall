<?php

// If é uma estrutura de controle que checa se a expressão é VERDADEIRA

// Exemplos
if (5 > 2) { // Expressão dada como VERDADEIRA, executa o que estiver dentro
    echo "Deu certo! Entrou dentro do if <br>";
}

if (30 % 2 > 0) { // Expressão dada como FALSA, então o if NÃO será executado
    echo "Expressão falsa não entra no if <br>";
}

// Operadores lógicos pode ser utilizados dentro do if
if (5 <= 1 || 10 === 10) { // Com o operador lógico OR (||), só um dos lados precisa ser verdadeiro 
    echo "Deu certo! Entrou dentro do if com condição lógica <br>";
}

// Usando variáveis
$a = 15;
$b = 5;
$c = 1;

if ($a % $b != $c) {
    echo "Deu certo! Entrou dentro do if de variáveis <br>";
}

// Para a exibição de uma condição FALSA dentro do if, podemos adicionar o comando ELSE
// A estrutura do ELSE é OPCIONAL

// Exemplos
if (40 != 40) {
    echo "Deu certo! Entrou dentro do if <br>";
} else {
    echo "Deu errado! Entrou dentro do else <br>";
}

if (40 * 5 != 200 && "teste" === "Luis") {
    echo "Deu certo! Entrou dentro do if com condição lógica <br>";
} else {
    echo "Deu errado! Entrou dentro do else com condição lógica <br>";
}

// Usando variáveis
$a = 40;
$b = 2;
$c = 0;

if ($a % $b != $c) {
    echo "Deu certo! Entrou dentro do if de variáveis <br>"; 
} else {
    echo "Deu errado! Entrou dentro do else de variáveis <br>";
}

?>