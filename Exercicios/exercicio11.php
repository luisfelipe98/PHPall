<?php

// Fazer 4 verificações e exibir os resultados

//Verificação 1
$n1 = 5;
$n2 = 2;

if ($n1 > $n2) {
    echo "Deu certo! Verificação 1 <br>";
}

// Verificação 2
$nome1 = "Matheus";
$nome2 = "Pedro";

if ($nome1 != $nome2 ) {
   echo "Deu certo! Verificação 2 <br>"; 
}

//Verificação 3
$n3 = 12;
$n4 = 11;

if ($n3 <= $n4) { // Condição falsa, não entrará no if
    echo "Deu certo! Verificação 3 <br>";
}

?>