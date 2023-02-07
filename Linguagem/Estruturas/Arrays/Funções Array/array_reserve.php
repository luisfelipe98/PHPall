<?php

// Função Array_reverse
// Serve para inverter um array
// NÃO ALTERA O ARRAY ORIGINAL
// Array_reserve(array que quero inverter)
// Exemplos

$array = [1, 2, 3, 4, 5];

echo "O array original é ";
for ($i = 0; $i < count($array); $i++) {
    if (count($array) - 1 === $i) { // Último elemento
        echo $array[$i] . ".";
    } else {
        echo $array[$i] . ", ";
    }
}

// Fazendo a reversão do array
$arrayReverso = array_reverse($array);

echo "<br>";
echo "O array reverso é ";

$cont = 0;
while ($cont < count($arrayReverso)) {
    if (count($arrayReverso) - 1 === $cont) { // Último elemento
        echo $arrayReverso[$cont] . ".";
        $cont++;
    } else {
        echo $arrayReverso[$cont] . ", ";
        $cont++;
    }
}

// Não funciona só com números
$array2 = ["Tua", 545.2, [3,4], true, "Carla"];

$array2Reverso = array_reverse($array2);

echo "<pre>";
print_r($array2Reverso);
echo "</pre>";

?>