<?php

// Switch é uma estrutura de controle que avalia o VALOR de uma variável
// Sempre que execute o código, coloca o comando break em todos os casos para sair do switch

// Exemplo
$n = 0;
switch ($n) {
    case 0:
        echo "N igual a 0 <br>";
        break;
    case 1:
        echo "N igual a 1 <br>";
        break;
    case 2:
        echo "N igual a 2 <br>";
        break;
    case 3:
        echo "N igual a 3 <br>";
        break;
    default:
        echo "Valor inválido <br>";
}

$n = 2;
switch ($n) {
    case 0:
        echo "N igual a 0 <br>";
        break;
    case 1:
        echo "N igual a 1 <br>";
        break;
    case 2:
        echo "N igual a 2 <br>";
        break;
    case 3:
        echo "N igual a 3 <br>";
        break;
    default:
        echo "Valor inválido <br>";
}

$n = 3;
switch ($n) {
    case 0:
        echo "N igual a 0 <br>";
        break;
    case 1:
        echo "N igual a 1 <br>";
        break;
    case 2:
        echo "N igual a 2 <br>";
        break;
    case 3:
        echo "N igual a 3 <br>";
        break;
    default:
        echo "Valor inválido <br>";
}

$n = "Luis";
switch ($n) {
    case 0:
        echo "N igual a 0 <br>";
        break;
    case 1:
        echo "N igual a 1 <br>";
        break;
    case 2:
        echo "N igual a 2 <br>";
        break;
    case 3:
        echo "N igual a 3 <br>";
        break;
    default:
        echo "Valor inválido <br>";
}
?>