<?php

// Comparar variáveis usando os operadores de idêntico a e não idêntico a

$num1 = 66;
$num2 = 66;
$num3 = 66.0;

if ($num1 === $num2) {
    echo "Os números são iguais <br>";
}

if ($num1 !== $num3) {
    echo $num1 . " e " . $num2 . " são diferentes";
}

?>