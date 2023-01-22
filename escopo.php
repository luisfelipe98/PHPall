<?php

// Escopo de variáveis
// É um jeito de não embaralhar suas variáveis
// Escopo tem 3 tipos
// Escopo local, global e static

// Escopo local
// É um escopo definido dentro de uma função
// Não é acessível fora desta função
// Quando a função é finalizada, o valor da variável é RESETADO

$x = 5.2;
echo "O valor da variável FORA da função é " . $x . "<br>";

function escopoLocal(){
    $x = 9.1;
    echo "O valor da variável DENTRO da função é " . $x . "<br>";
}

escopoLocal(); // Chamando a função para exibir seu resultado

?>