<?php

// Crie variáveis com números e strings, verifique se é número ou não
// Se for número, multiple por dois e diz se é maior ou igual que 100

$num1 = 37;
$num2 = 49;
$num3 = 66;
$nome1 = "Antonio";
$nome2 = "Tua";
$nome3 = "Edson";

if (!is_string($num1)) {
    $resul = $num1 * 2;
    if ($resul >= 100) {
        echo $resul . " é maior ou igual a 100 <br>";
    } else {
        echo $resul . " é menor que 100 <br>";
    }
} else {
    echo $num1 . " é uma " . gettype($num1) . "<br>";
}

if (!is_string($num2)) {
    $resul = $num2 * 2;
    if ($resul >= 100) {
        echo $resul . " é maior ou igual a 100 <br>";
    } else {
        echo $resul . " é menor que 100 <br>";
    }
} else {
    echo $num2 . " é uma " . gettype($num2) . "<br>";
}

if (!is_string($num3)) {
    $resul = $num3 * 2;
    if ($resul >= 100) {
        echo $resul . " é maior ou igual a 100 <br>";
    } else {
        echo $resul . " é menor que 100 <br>";
    }
} else {
    echo $num3 . " é uma " . gettype($num3) . "<br>";
}

if (!is_string($nome1)) {
    $resul = $nome1 * 2;
    if ($resul >= 100) {
        echo $resul . " é maior ou igual a 100 <br>";
    } else {
        echo $resul . " é menor que 100 <br>";
    }
} else {
    echo $nome1 . " é uma " . gettype($nome1) . "<br>";
}

if (!is_string($nome2)) {
    $resul = $nome2 * 2;
    if ($resul >= 100) {
        echo $resul . " é maior ou igual a 100 <br>";
    } else {
        echo $resul . " é menor que 100 <br>";
    }
} else {
    echo $nome2 . " é uma " . gettype($nome2) . "<br>";
}

if (!is_string($nome3)) {
    $resul = $nome3 * 2;
    if ($resul >= 100) {
        echo $resul . " é maior ou igual a 100 <br>";
    } else {
        echo $resul . " é menor que 100 <br>";
    }
} else {
    echo $nome3 . " é uma " . gettype($nome3) . "<br>";
}
?>