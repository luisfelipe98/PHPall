<?php

// Função Compact
// Serve para criar um array associativo de acordo com várias variáveis
// É o efeito ao contrário da função extract
// Compact(nomes das chaves em string)
// Exemplo

$marca = "BMW";
$motor = "3.0";
$portas = 4;
$cambio = "automático";
$temTetoSolar = true;

$carro = compact("marca", "motor", "cambio", "portas", "temTetoSolar"); // Criando o array e informando as chaves do mesmo

echo "<pre>";
print_r($carro);
echo "</pre>";

?>