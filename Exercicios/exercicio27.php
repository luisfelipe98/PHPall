<?php

// Criar uma função para descobrir se o número é par ou ímpar

function ParOuImpar($numero) {
    if ($numero % 2 === 0) {
        echo $numero . " é par <br>";
    } else {
        echo $numero . " é ímpar <br>";
    }
}

ParOuImpar(47);
ParOuImpar(66);
ParOuImpar(101);
?>