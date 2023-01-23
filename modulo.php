<?php

// O operador módulo serve para descobrir o RESTO de uma DIVISÃO
// Usamos o símbolo % para módulo

$div1 = 15 / 3;
$div2 = 36 / 7;
$div3 = 100 / 11;
$div4 = 15.3 / 2.1;

$mod1 = 15 % 3;
$mod2 = 36 % 7;
$mod3 = 100 % 11;
$mod4 = 15.3 % 2.1;

echo "A divisão de 15 / 3 deu " . $div1 . " e o módulo foi " . $mod1 . "<br>";
echo "A divisão de 36 / 7 deu " . $div2 . " e o módulo foi " . $mod2 . "<br>";
echo "A divisão de 100 / 11 deu " . $div3 . " e o módulo foi " . $mod3 . "<br>";
echo "A divisão de 15.3 / 2.1 deu " . $div4 . " e o módulo foi " . $mod4 . "<br>";
?>