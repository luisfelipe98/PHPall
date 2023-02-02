<?php

// Criar um array multidimensional com 3 arrays de 4 elementos cada
// Imprimir o array
// Mostrar na tela qual é a posição que tem elementos que são divisíveis por 3

$arrayMultidimensional = [
    range(1, 4),
    range(5, 11, 2),
    range(12, 21, 3)
];

// Exibindo o array na tela
echo "Array multidimensional 3x3 <br>";
for ($i = 0; $i < count($arrayMultidimensional); $i++) {
    for ($j = 0; $j < count($arrayMultidimensional[$i]); $j++) {
        echo "Posição [" . $i . "][" . $j . "] = " . $arrayMultidimensional[$i][$j] . "<br>";
    }
}

// Fazendo a lógica para ver a posição dos elementos que são divisíveis por 3

$divisivelPor3 = [];

for ($i = 0; $i < count($arrayMultidimensional); $i++) {
    for ($j = 0; $j < count($arrayMultidimensional[$i]); $j++) {
        if ($arrayMultidimensional[$i][$j] === 0) { // Ignorando algum elemento que seja igual a 0
            continue;
        } else if ($arrayMultidimensional[$i][$j] % 3 === 0) { // Colocando as posições no array
            array_push($divisivelPor3, "[" . $i . "][" . $j . "]");
        }
    }
}

// Exibindo o resultado na tela

if (count($divisivelPor3) === 0) {
    echo "Não tem nenhum número divisível por 3 dentro do array <br>";
    die();
} elseif (count($divisivelPor3) === 1) {
    echo "A única posição que tem um elemento divisível por 3 é a posição ";
} else {
    echo "A posição que tem os números que são divisíveis por 3 são: ";
}

$cont = 0;

do {
    if (count($divisivelPor3) === 1) { // Exibir se tiver UM elemento
        echo $divisivelPor3[$cont] . "<br>";
        break;
    } else if (count($divisivelPor3) - 2 === $cont) { // Exibir no PENÚLTIMO elemento
        echo $divisivelPor3[$cont] . " e ";
        $cont++;
    } else if (count($divisivelPor3) - 1 === $cont) { // Exibir no ÚLTIMO elemento
        echo $divisivelPor3[$cont] . ".";
        $cont++;
    } else {
        echo $divisivelPor3[$cont] . ", ";
        $cont++;
    }

} while ($cont < count($divisivelPor3));

?>