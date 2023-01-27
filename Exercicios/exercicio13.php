<?php

// Crie variáveis de diferentes tipos de dados, checar se são int e exibir mensagem na tela

$num = 50;
$nome = "Carlos";
$entrou = true;

if (is_int($num)) {
    echo "Sim, " . $num . " é inteiro! <br>";
} else {
    echo "Não, " . $num . " é do tipo " . gettype($num) . "<br>";
}

if (is_int($nome)) {
    echo "Sim, " . $nome. " é inteiro! <br>";
} else {
    echo "Não, " . $nome . " é do tipo " . gettype($nome) . "<br>";
}

if (is_int($entrou)) {
    echo "Sim, " . $entrou . " é inteiro! <br>";
} else {
    echo "Não, " . $entrou . " é do tipo " . gettype($entrou) . "<br>";
}
?>