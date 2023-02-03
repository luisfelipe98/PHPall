<?php

// Criar varáveis com características de um animal
// Por essas informações dentro do array
// Exibir na tela

$nome = "cavalo";
$patas = 4;
$tipo = "mamífero";
$raça = "mangalarga";
$eVertebrado = true;

$animal = compact("nome", "patas", "tipo", "raça", "eVertebrado");

echo "Características de um animal <br>";

foreach($animal as $chave => $valor) {
    if ($valor == 0) {
        echo $chave . ": falso <br>";
    } else if ($valor == 1) {
        echo $chave . ": verdadeiro <br>";
    } else {
        echo $chave . ": " . $valor . "<br>";
    }
}

?>