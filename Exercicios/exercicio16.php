<?php

// Receba a velocidade de um carro e analisa para exibir a mensagem ao usuário

$velo1 = 35.4;
$velo2 = 40;
$velo3 = 65;

switch ($velo1) {
    case $velo1 < 40:
        echo "Você está na velocidade correta <br>";
        break;
    case $velo1 == 40:
        echo "Tome cuidado! <br>";
        break;
    case $velo1 > 40:
        echo "Multa a caminho <br>";
        break;
}

switch ($velo2) {
    case $velo2 < 40:
        echo "Você está na velocidade correta <br>";
        break;
    case $velo2 == 40:
        echo "Tome cuidado! <br>";
        break;
    case $velo2 > 40:
        echo "Multa a caminho <br>";
        break;
}

switch ($velo3) {
    case $velo3 < 40:
        echo "Você está na velocidade correta <br>";
        break;
    case $velo3 == 40:
        echo "Tome cuidado! <br>";
        break;
    case $velo3 > 40:
        echo "Multa a caminho <br>";
        break;
}
?>