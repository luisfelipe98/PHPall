<?php

// Função Array_key_exists
// Serve para descobrir se dentro do array existe a chave especificada
// Array_key_exists(qual é chave, array)
// Exemplo

$pessoa = [
    "nome" => "Luis",
    "idade" => 24
];

// Checando se existe a chave "nome" no array
if (Array_key_exists("nome", $pessoa)) { 
    echo "A chave existe <br>";
} else {
    echo "A chave não existe <br>";
}

// Checando se existe a chave "profissao" no array
if (Array_key_exists("profissao", $pessoa)) { 
    echo "A chave existe <br>";
} else {
    echo "A chave não existe <br>";
}

?>