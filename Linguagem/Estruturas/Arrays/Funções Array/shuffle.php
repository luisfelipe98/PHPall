<?php

// Função Shuffle
// Reorganiza um array de forma aleatória
// ALTERA O ARRAY ORIGINAL
// shuffle(array)
// Exemplos

$array = range(1, 30, 4);

echo "Meu array original é ";

$cont = 0;
do {
    if (count($array) - 1 === $cont) { // Último elemento
        echo $array[$cont] . ". <br>";
        $cont++;
    } else {
        echo $array[$cont] . ", ";
        $cont++;
    }
} while ($cont < count($array));

// Fazendo a organização aleatória
shuffle($array);

echo "Meu array aleatório é ";

$cont = 0;
while ($cont < count($array)) {
    if (count($array) - 1 === $cont) { // Último elemento
        echo $array[$cont] . ". <br>";
        $cont++;
    } else {
        echo $array[$cont] . ", ";
        $cont++;
    }
}

// Não funciona só com números

$arrayAleatorio = [354, true, 75, "banana", 23.1, -89, "Carlos", "cavalo", -100.15];

echo "Meu array é ";

for ($i = 0; $i < count($arrayAleatorio); $i++) {
    if (count($arrayAleatorio) - 1 === $i) {
        echo $arrayAleatorio[$i] . ". <br>";
    } else {
        echo $arrayAleatorio[$i] . ", ";
    }
}

// Organizando o array aleatoriamente
shuffle($arrayAleatorio);

echo "Meu array aleatório é ";

for ($j = 0; $j < count($arrayAleatorio); $j++) {
    if (count($arrayAleatorio) - 1 === $j) {
        echo $arrayAleatorio[$j] . ". <br>";
    } else {
        echo $arrayAleatorio[$j] . ", ";
    }
}

?>