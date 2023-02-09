<?php

// Função Date()
// Dá a data atual
// Tem um parâmetro que é como você quer exibir a data
// Exemplos

$d = date("d/m/y"); // Formatando para dia (com zero a esquerda) / mês (com zero a esquerda) / ano com 2 algarismos

echo $d . "<br>";

$d2 = date("D/M/Y"); // Formantado para dia da semana (3 letras) / mês por escrito (3 letras) / ano com 4 algarismos

echo $d2 . "<br>";

$d3 = date("d/m/Y"); // Formantado para dia (com zero a esquerda) / mês (com zero a esquerda) / ano com 4 algarismos

echo $d3 . "<br>";

$d4 = date("F, dS - Y"); // Formatando para mês por escrito completo / dia com o sufixo ordinal em inglês / ano com 4 algarismos

echo $d4 . "<br>";

$d5 = date("l , d - F "); // Formatando para dia da semana (completo) / dia (com zero a esquerda) / mês escrito por completo 

echo $d5 . "<br>";

?>