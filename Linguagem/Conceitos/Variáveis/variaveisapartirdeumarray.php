<?php

// Como criar variáveis a partir de um array?
// No PHP, temos a função list que faz isso
// Esta desconstrói um array em variavéis do mesmo
// List ($variavéis) = array de onde tirará as informações
// Exemplo

$pessoa = ["Luis", 24, "programador", "marrom"];

echo "<pre>";
print_r($pessoa);
echo "</pre>";

list($nome, $idade, $profissao, $corDosOlhos) = $pessoa;

//Exibindo o valor das variáveis
var_dump($nome);
echo "<br>";
var_dump($idade);
echo "<br>";
var_dump($profissao);
echo "<br>";
var_dump($corDosOlhos);
echo "<br>";

?>