<?php

// Criar uma função de exponenciação e exibir na tela

function exponenciacao($num) {
    return $num ** 2;
}

$a = exponenciacao(8);
$b = exponenciacao(14);
$c = exponenciacao(16);

echo "8 ao quadrado é " . $a . "<br>";
echo "14 ao quadrado é " . $b . "<br>";
echo "16 ao quadrado é " . $c . "<br>";

?>