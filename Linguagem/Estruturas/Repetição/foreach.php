<?php

// Foreach é uma estrutura de repetição orientada a array
// Ele serve para fazer iterações de um array especifíco

// Exemplos

$nomes = ["Luis", "Carlos", "Ana", "Patrick", "Carolina"];

foreach ($nomes as $nome) {
    echo $nome . "<br>";
}
echo "<br> <br> <br>";

$array = [1, 45.2, "Carlos", true, [], "", 100, 400, 39, 157, 171];

foreach($array as $item) {
    if (is_string($item) || is_array($item) || is_bool($item)) {
        continue;
    } else {
        echo $item . "<br>";
    }
}
echo "<br> <br> <br>";

// Também podemos trabalhar com chaves e valores no foreach

$array = [
    "nome" => "Marcos",
    "idade" => "45",
    "profissao" => "professor" 
];

echo "Ficha do Marcos <br>";
foreach ($array as $chave => $valor) {
    echo $chave . ": " . $valor . "<br>";
}

?>
