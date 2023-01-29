<?php 

// Criar um array (1 a 10) e usar o print_r para exibi-lo

$array = [];
$valor = 1;

for ($i = 0; $i <= 9; $i++) {
    $array[$i] = $valor;
    $valor++;
}

echo "<pre>";
print_r($array);
echo "</pre>";
?>