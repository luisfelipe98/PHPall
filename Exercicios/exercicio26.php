<?php 

// Criar uma função com dois parâmetros e exibi-la

function frase($nome, $idade) {
    echo "Olá, eu sou o " . $nome . " é tenho " . $idade . " anos <br>";
}

$nome = "Luis";
$idade = 24;

frase($nome, $idade);
?>