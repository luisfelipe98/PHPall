<?php

// Checar 3 idades e dizer se são maiores de idade

$idade1 = 45;
$idade2 = 18;
$idade3 = 17;

if ($idade1 >= 18) {
    echo $idade1 . " é maior de idade <br>";
}

if ($idade2 >= 18) {
    echo $idade2 . " é maior de idade <br>";
}

if ($idade3 >= 18) { // Condição falsa e não será exibida na tela
    echo $idade3 . " é maior de idade <br>";
}

?>