<?php

// Função Extract
// Serve para criar variáveis de arrays associativos
// As variáveis será as CHAVES desse array
// Extract(array)
// Se uma variável estiver o mesmo nome de uma outra varável anteriormente usada,
// Irá SOBRESCREVER
// Exemplos

$array = [
    "cor" => "vermelho",
    "forma" => "retangular",
    "material" => "aço"
];

extract($array); // Usando o extract

echo $cor . "<br>";
echo $forma . "<br>";
echo $material . "<br>";

// Testando para ver como o extract sobrescreve variáveis existentes
$nome = "Mark";

$pessoa = [
    "nome" => "Camila",
    "idade" => 20
];

echo "A variável nome ANTES do extract : " . $nome . "<br>";

extract($pessoa);

echo "A variável nome DEPOIS do extract : " . $nome . "<br>";

?>