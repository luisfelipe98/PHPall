<?php

// Função são bloco de código que possue um nome
// Realiza uma ação e é reutilizavél
// Ajuda a reduz a duplicidade de seu código
// Melhora a manutenção do código

// Exemplos

// Criação da função
function soma() {
    $a = 4;
    $b = 2;
    echo $a + $b . "<br>";
}

// Invocando minha função
soma();

// Função Própria do PHP
echo strtoupper("testando função") . "<br>";

// Parâmetros são variavéis para moldar sua execução dentro de sua função

function soma2($n1, $n2) {
    $soma = $n1 + $n2;
    echo $n1 . " + " . $n2 . " = " . $soma;
}

// Chamando a função com parâmetro
soma2(55,6) . "<br>";
?>