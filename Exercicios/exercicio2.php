<?php

// Exercicio criando um array associativo de uma pessoa e fazer uma checagem se é maior de idade

$pessoa = ['nome' => 'Carla',
           'idade' => 15,
           'etnia' => 'Branca',
           'solteiro' => true];

if ($pessoa['idade'] > 18) {
    echo $pessoa['nome'] . " é maior de idade";
}else{
    echo $pessoa['nome'] . " é menor de idade";
}

?>