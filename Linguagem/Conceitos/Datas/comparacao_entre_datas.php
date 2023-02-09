<?php

// Datas criadas pelo objeto DateTime pode ser comparadas utilizando os operadores de comparação
// Exemplos

$dataA = new DateTime();

$dataB = new DateTime();

$dataC = new DateTime();

$dataB->setDate(2022, 10, 10);
$dataC->setDate(2022, 10, 10);

$dataB->setTime(01, 10, 10);
$dataC->setTime(01, 10, 10);

if ($dataB > $dataA) {
    echo "Data B é maior que data A <br>";
} else {
    echo "Data A é maior que data B <br>";
}

if ($dataA < $dataB) {
    echo "Data A é menor que data B <br>";
} else {
    echo "Data B é menor que data A <br>";
}

// Ele não vai ser igual por causa da diferença de execução
if ($dataA == $dataC) {
    echo "As datas são iguais <br>";
} else {
    echo "As datas são diferentes <br>";
}

if ($dataB == $dataC) {
    echo "As datas são iguais <br>";
} else {
    echo "As datas são diferentes <br>";
}

// Para as datas serem iguais, precisam que TUDO esteja igual, de dia a hora

?>